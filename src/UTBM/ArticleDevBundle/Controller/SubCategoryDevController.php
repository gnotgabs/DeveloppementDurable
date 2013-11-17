<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\SubCategory;
use UTBM\ArticleDevBundle\Form\SubCategoryType;
use UTBM\ArticleDevBundle\Form\SubCategoryModifType;


class SubCategoryDevController extends Controller
{
    
    public function addSubCategoryAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();

        $subcategory = new SubCategory();
        
        $form = $this->createForm(new SubCategoryType(), $subcategory);

        $request = $this->getRequest();
        
        if($request->isMethod('POST')){

            $form->bind($request);

            if($form->isValid()){
                
                $sca = $form->getData();

                $em->persist($sca);
                $em->flush();

                return $this->redirect($this->generateUrl("article_dev_addSubCategory"));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:SubCategoryDev:addSubCategory.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
        ));
    }

    public function editSubCategoryAction(SubCategory $subcategory){
        
        $form = $this->createForm(new SubCategoryModifType(), $subcategory);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $sca = $form->getData();
                
                $em->persist($sca);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Sous-catégorie bien modifié');

                return $this->redirect($this->generateUrl("article_dev_editSubCategory", array(
                            'id'    =>  $subcategory->getId(),
                        )));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:SubCategoryDev:modifSubCategory.html.twig', array(
            'menus'         =>      $men,
            'form'          =>      $form->createView(),
            'subcategory'   =>      $subcategory,
        ));
    }

    public function delSubCategoryAction(SubCategory $subcategory){
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->remove($subcategory);

                $em->flush();

                // On redirige vers la sous catégoie à laquelle appartient l'article
                return $this->redirect($this->generateUrl("article_dev_showCategories"));
            }

        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:SubCategoryDev:delSubCategory.html.twig', array(
            'menus'     => $men,
            'form'      => $form->createView(),
            'subcategory'   => $subcategory,
        ));
    }
}
