<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryDevController extends Controller
{

    public function addCategoryAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:addCategory.html.twig', array(
            'menus'   => $men,
        ));
    }

    public function modifCategoryAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:modifCategory.html.twig', array(
            'menus'   => $men,
        ));
    }

    public function delCategoryAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:CategoryDev:delCategory.html.twig', array(
            'menus'   => $men,
        ));
    }
    
    
}
