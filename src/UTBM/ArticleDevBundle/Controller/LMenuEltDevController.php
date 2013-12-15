<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\LMenuElt;
use UTBM\ArticleDevBundle\Form\LMenuEltType;
use UTBM\ArticleDevBundle\Form\LMenuEltModifType;

class LMenuEltDevController extends Controller
{

    public function addLMenuEltAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();

        $lMenuElt = new LMenuElt();
        
        $form = $this->createForm(new LMenuEltType(), $lMenuElt);

        $request = $this->getRequest();
        
        if($request->isMethod('POST')){

            $form->bind($request);

            if($form->isValid()){
                
                $ca = $form->getData();

                $em->persist($ca);
                $em->flush();

                return $this->redirect($this->generateUrl("article_dev_addLMenuElt"));
            }
        }
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        
        $articles = array();
        
        return $this->render('ArticleDevBundle:LMenuEltDev:addLMenuElt.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
                'articles'  =>      $articles,
                'lMenus'    =>      $lMenus,
                ));
    }
    

    public function editLMenuEltAction(LMenuElt $lMenuElt){
        
        $form = $this->createForm(new LMenuEltModifType(), $lMenuElt);
        
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

                return $this->redirect($this->generateUrl("article_dev_editLMenuElt", array(
                            'id'    =>  $lMenuElt->getId(),
                        )));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:LMenuEltDev:editLMenuElt.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
            'lMenuElt'     =>      $lMenuElt,
            'lMenus'    =>      $lMenus,
            'articles'  =>      $articles,
        ));
    }

    public function delLMenuEltAction(LMenuElt $lMenuElt){
                
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->remove($lMenuElt);

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
        
        return $this->render('ArticleDevBundle:LMenuEltDev:delLMenuElt.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
            'lMenuElt'     =>      $lMenuElt,
            'lMenus'    =>      $lMenus,
            'articles'  =>      $articles,
        ));
    }
    
    
}
