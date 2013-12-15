<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\Question;
use UTBM\ArticleDevBundle\Form\QuestionType;
use UTBM\ArticleDevBundle\Form\QuestionModifType;

class QuestionDevController extends Controller
{

    public function addQuestionAction(){
        
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }

        $em = $this->getDoctrine()->getManager();

        $question= new Question();
        
        $form = $this->createForm(new QuestionType(), $question);

        $request = $this->getRequest();
        
        if($request->isMethod('POST')){

            $form->bind($request);

            if($form->isValid()){
                
                $ca = $form->getData();

                $em->persist($ca);
                $em->flush();

                return $this->redirect($this->generateUrl("article_dev_addQuestion"));
            }
        }
        
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:QuestionDev:addQuestion.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
                ));
    }
    

    public function editQuestionAction(Question $question){
        
        $form = $this->createForm(new QuestionModifType(), $question);
        
        $em = $this->getDoctrine()->getManager();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $a = $form->getData();
                
                $em->persist($a);
                $em->flush();
                
                // On définit un message flash
                $this->get('session')->getFlashBag()->add('info', 'Question bien modifié');

                return $this->redirect($this->generateUrl("article_dev_editQuestion", array(
                            'id'    =>  $question->getId(),
                        )));
            }
        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:QuestionDev:editQuestion.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
            'question'   =>      $question,
        ));
    }

    public function delQuestionAction(Question $question){
                
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        $form = $this->createFormBuilder()->getForm();
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $em->remove($question);

                $em->flush();

                // On redirige vers la sous catégoie à laquelle appartient l'article
                return $this->redirect($this->generateUrl("article_dev_admin"));
            }

        }

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:QuestionDev:delQuestion.html.twig', array(
            'menus'     => $men,
            'form'      => $form->createView(),
            'question'   => $question,
        ));
    }
    
    
}
