<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\Proposal;
use UTBM\ArticleDevBundle\Form\ProposalType;
use UTBM\ArticleDevBundle\Form\ProposalModifType;


class ProposalDevController extends Controller
{
    
   public function addProposalAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();

        $proposal = new Proposal();
        
        $form = $this->createForm(new ProposalType(), $proposal);

        $request = $this->getRequest();
        
        if($request->isMethod('POST')){

            $form->bind($request);

            if($form->isValid()){
                
                $ca = $form->getData();

                $em->persist($ca);
                $em->flush();

                return $this->redirect($this->generateUrl("article_dev_addProposal"));
            }
        }
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:ProposalDev:addProposal.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
                'lMenus'    =>      $lMenus,
                'articles'  =>      $articles,
                ));
    }
    

    public function editProposalAction(Proposal $proposal){
        
        $form = $this->createForm(new ProposalModifType(), $proposal);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $a = $form->getData();
                
                $em->persist($a);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Proposition de réponse bien modifiée');

                return $this->redirect($this->generateUrl("article_dev_editProposal", array(
                            'id'    =>  $proposal->getId(),
                        )));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:ProposalDev:editProposal.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
            'proposal'   =>      $proposal,
            'lMenus'    =>      $lMenus,
            'articles'  =>      $articles,
        ));
    }

    public function delProposalAction(Proposal $proposal){
                
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->remove($proposal);

                $em->flush();

                // On redirige vers la sous catégoie à laquelle appartient l'article
                return $this->redirect($this->generateUrl("article_dev_admin"));
            }

        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:ProposalDev:delProposal.html.twig', array(
            'menus'     => $men,
            'form'      => $form->createView(),
            'proposal'   => $proposal,
            'lMenus'    =>      $lMenus,
            'articles'  =>      $articles,
        ));
    }
    
    public function checkAction(){
        
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        // Menu du volet de gauche
        $lMenus = $em->getRepository("ArticleDevBundle:LMenu")
                   ->getLeftMenu();
        $articles = array();
        
        return $this->render('ArticleDevBundle:ProposalDev:checkResponse.html.twig', array(
            'menus'     =>  $men,
            'lMenus'   =>  $lMenus,
            'articles' =>  $articles,
        ));
    }
    
}
