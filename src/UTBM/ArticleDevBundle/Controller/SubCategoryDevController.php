<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SubCategoryDevController extends Controller
{
    public function addSubCategoryAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:SubCategoryDev:addSubCategory.html.twig', array(
            'menus'   => $men,
        ));
    }

    public function modifSubCategoryAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:SubCategoryDev:modifSubCategory.html.twig', array(
            'menus'   => $men,
        ));
    }

    public function delSubCategoryAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:SubCategoryDev:delSubCategory.html.twig', array(
            'menus'   => $men,
        ));
    }
}
