<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleDevController extends Controller
{
   /**
     * Va afficher les articles d'acceuil correspondant à la rubrique Accueil de la
     * base de données et possédant l'identifiant numéro 1
     */
    public function indexAction(){
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // on récupère tous les articles associés au sous menu (à la sous catégory) numéro ---
        $articles = $em->getRepository("PageDevBundle:Article")->findAll(
                    array('subCategory_id'=>1)
               );
        if($articles === null){
            throw $this->createNotFoundException('Article[id=1] inexistant.');
        }

        return $this->render('PageDevBundle:Page:index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     *  Affiche l'article dans son intégralité. Une fois que l'utilisateur clique sur "lire la suite"
     */
    public function showTheArticleAction($idAr){
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        // on récupère l'article à affiche en intégralité
       $article = $em->getRepository("PageDevBundle:Article")->find($idAr);
       
        if($article === null){
            throw $this->createNotFoundException('Article[id='.$idAr.'] inexistant.');
        }
        
        return $this->render('PageDevBundle:Page:article.html.twig', array(
            'article' => $article,
        ));
    }

   /* public function showArticleAction($idSubMenu)
    {
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        // on récupère l'identifiant du sous menu sur lequel on a cliqué
        $subCategory = $em->getRepository("PageDevBundle:Category")->find($idSubMenu);
        if($subCategory === null){
            throw $this->createNotFoundException('Article[id='.$idSubMenu.'] inexistant.');
        }
        $idSubCategory = $subCategory->getId();
        
        // on récupère tous les articles associés au sous menu (à la sous catégory) numéro ---
       $articles = $em->getRepository("PageDevBundle:Article")->findAll(
                    array('subCategory_id'=>$idSubCategory)
               );
        if($articles === null){
            throw $this->createNotFoundException('Article[id='.$idSubMenu.'] inexistant.');
        }
        
        return $this->render('PageDevBundle:Page:article.html.twig', array(
            'articles' => $articles,
        ));
    }*/
    
    public function addCategoryAction()
    {
        // On crée un objet Article
        $category = new Category();

        // On crée le FormBuilder grâce à la méthode du contrôleur
        $formBuilder = $this->createFormBuilder($category);

        // On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
            ->add('labelCategory', 'text');
        // Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();
 
        
        return $this->render('PageDevBundle:Page:addCategory.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
