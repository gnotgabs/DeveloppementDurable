<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\LMenu;
use UTBM\ArticleDevBundle\Form\LMenuType;
use UTBM\ArticleDevBundle\Form\LMenuModifType;

class LMenuDevController extends Controller
{

    /**
     * Affiche la vue contenant toutes les catégories existantes de l'application
     * 
     */
    public function LMenuAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                     ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:LMenuDev:lMenus.html.twig', array(
                'menus'     =>      $men,
                'lMenus'    =>      $lMenus,
                'articles' =>      $articles,
                ));
    }
    
    public function addLMenuAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();

        $lMenu = new LMenu();
        
        $form = $this->createForm(new LMenuType(), $lMenu);

        $request = $this->getRequest();
        
        if($request->isMethod('POST')){

            $form->bind($request);

            if($form->isValid()){
                
                $ca = $form->getData();

                $em->persist($ca);
                $em->flush();

                return $this->redirect($this->generateUrl("article_dev_addLMenu"));
            }
        }
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        
        $articles = array();
        
        return $this->render('ArticleDevBundle:LMenuDev:addLMenu.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
                'articles'  =>      $articles,
                'lMenus'   =>      $lMenus,
                ));
    }
    

    public function editLMenuAction(LMenu $lMenu){
        
        $form = $this->createForm(new LMenuModifType(), $lMenu);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $a = $form->getData();
                
                $em->persist($a);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Menu bien modifié');

                return $this->redirect($this->generateUrl("article_dev_editLMenu", array(
                            'id'    =>  $lMenu->getId(),
                        )));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:LMenuDev:editLMenu.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
            'lMenu'     =>      $lMenu,
            'lMenus'    =>      $lMenus,
            'articles'  =>      $articles,
        ));
    }

    public function delLMenuAction(LMenu $lMenu){
                
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->remove($lMenu);

                $em->flush();

                // On redirige vers la sous catégoie à laquelle appartient l'article
                return $this->redirect($this->generateUrl("article_dev_LMenu"));
            }

        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:LMenuDev:delLMenu.html.twig', array(
            'menus'     => $men,
            'form'      => $form->createView(),
            'lMenu'   => $lMenu,
            'lMenus'    =>      $lMenus,
            'articles'  =>      $articles,
        ));
    }
    
    
}
