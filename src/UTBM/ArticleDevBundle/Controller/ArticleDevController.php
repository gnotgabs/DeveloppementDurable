<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use UTBM\ArticleDevBundle\Entity\Category;

class ArticleDevController extends Controller
{
   /**
     * Va afficher les articles d'acceuil correspondant à la rubrique Accueil de la
     * base de données et possédant l'identifiant numéro 1
     */
    public function indexAction($id){
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getEntityManager();

        // on récupère tous les articles associés à la page d'accueil du projet
        $articles = $em->getRepository("ArticleDevBundle:Article")
                       ->getSubCategoryArticles($id);
        
        if($articles === null){
            throw $this->createNotFoundException('Article[id=1] inexistant.');
        }
        
        // on récupère les menus ainsi que tous les éléments qui leurs sont liés
        // Exemple un menu et ses sous-menus
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();

        return $this->render('ArticleDevBundle:ArticleDev:index.html.twig', array(
            'articles'  => $articles,
            'menus'     => $men,
        ));
    }

    /**
     *  Affiche l'article dans son intégralité. Une fois que l'utilisateur clique sur "lire la suite"
     * idSc va permettre de retourner à la page sur laquelle l'utilisateur était précédement
     */
    public function showTheArticleAction($idSc,$idAr){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getEntityManager();

        // on récupère l'article à affiche en intégralité
        $article = $em->getRepository("ArticleDevBundle:Article")
                      ->find($idAr);

        if($article === null){
            throw $this->createNotFoundException('Article[id='.$idAr.'] inexistant.');
        }

        // on récupère les menus ainsi que tous les éléments qui leurs sont liés
        // Exemple un menu et ses sous-menus
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:ArticleDev:article.html.twig', array(
            'article' => $article,
            'menus'   => $men,
            'idSc'    => $idSc,
        ));
    }

    /*public function showArticlesAction($idSubMenu){
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        // on récupère tous les articles associés au sous menu (à la sous catégory) numéro ---
       $articles = $em->getRepository("ArticleDevBundle:Article")->findAll(
                    array('subCategory_id'=>$idSubMenu)
               );
        if($articles === null){
            throw $this->createNotFoundException('Article[id='.$idSubMenu.'] inexistant.');
        }
        
        // on récupère les menus ainsi que tous les éléments qui leurs sont liés
        // Exemple un menu et ses sous-menus
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:ArticleDev:index.html.twig', array(
            'articles' => $articles,
            'menus'   => $men,
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
 
        
        return $this->render('ArticleDevBundle:ArticleDev:addCategory.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
