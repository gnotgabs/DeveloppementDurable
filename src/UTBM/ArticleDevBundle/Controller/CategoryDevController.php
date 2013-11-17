<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\Category;
use UTBM\ArticleDevBundle\Form\CategoryType;
use UTBM\ArticleDevBundle\Form\CategoryModifType;

class CategoryDevController extends Controller
{
    /**
     * Affiche la vue contenant toutes les catégories existantes de l'application
     * 
     */
    public function showCategoriesAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:allCategories.html.twig', array(
                'menus'     =>      $men,
                ));
    }

    public function addCategoryAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();

        $category = new Category();
        
        $form = $this->createForm(new CategoryType(), $category);

        $request = $this->getRequest();
        
        if($request->isMethod('POST')){

            $form->bind($request);

            if($form->isValid()){
                
                $ca = $form->getData();

                $em->persist($ca);
                $em->flush();

                return $this->redirect($this->generateUrl("article_dev_addCategory"));
            }
        }
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:addCategory.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
                ));
    }
    

    public function editCategoryAction(Category $category){
        
        $form = $this->createForm(new CategoryModifType(), $category);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $a = $form->getData();
                
                $em->persist($a);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Catégorie bien modifié');

                return $this->redirect($this->generateUrl("article_dev_editCategory", array(
                            'id'    =>  $category->getId(),
                        )));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:modifCategory.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
            'category'   =>      $category,
        ));
    }

    public function delCategoryAction(Category $category){
                
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->remove($category);

                $em->flush();

                // On redirige vers la sous catégoie à laquelle appartient l'article
                return $this->redirect($this->generateUrl("article_dev_showCategories"));
            }

        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:delCategory.html.twig', array(
            'menus'     => $men,
            'form'      => $form->createView(),
            'category'   => $category,
        ));
    }
    
    
}
