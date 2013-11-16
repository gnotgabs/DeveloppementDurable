<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

use UTBM\ArticleDevBundle\Form\ArticleModifType;
use UTBM\ArticleDevBundle\Form\ArticleType;
use UTBM\ArticleDevBundle\Entity\Article;

class ArticleDevController extends Controller
{
   /**
     * Va afficher les articles d'acceuil correspondant à la rubrique Accueil de la
     * base de données et possédant l'identifiant numéro "$id"
     */
    public function indexAction(){

        $id = 1; // page d'accueil
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // on récupère tous les articles associés à la sous catégorie sélectionée
        $articles = $em->getRepository("ArticleDevBundle:Article")
                       ->getSubCategoryArticles($id);
        
        if($articles === null){
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
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
    
    public function showAction($id){
        
        // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        // on récupère tous les articles associés à la sous catégorie sélectionée
        $articles = $em->getRepository("ArticleDevBundle:Article")
                       ->getSubCategoryArticles($id);
        
        if($articles === null){
            throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
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
        $em = $this->getDoctrine()->getManager();

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
    
    public function adminAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
         // on récupère les menus ainsi que tous les éléments qui leurs sont liés
        // Exemple un menu et ses sous-menus
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:ArticleDev:admin.html.twig', array(
            'menus'   => $men,
        ));
    }
    
    public function addArticleAction(){
        
        // On teste que l'utilisateur dispose bien du rôle ROLE_ADMIN
        if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
            // Sinon on déclenche une exception « Accès interdit »
            throw new AccessDeniedHttpException("Accès limité à l'administrateur");
        }
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();
        
        // on récupère les menus ainsi que tous les éléments qui leurs sont liés
        // Exemple un menu et ses sous-menus
        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        /**
         * CREATION DU FORMULAIRE D'AJOUT D'ARTICLES
         */
        $article = new Article();
        
        // CREATION D'UN FORMULAIRE BASE SUR L'OBJET "ArticleType" QUI EST L'OBJET DE CONSTRUCTION DE FORMULAIRE
        // CORRESPONDANT AUX ATTRIBUTS DE L'OBJET ARTICLE
        $form = $this->createForm(new ArticleType, $article);
        
        // RECUPERATION DU TYPE DE REQUETE EXECUTEE PAR LE USER
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            // RECUPERATION DES DONNEES ENVOYEES VIA LE FORMULAIRE ET CONTENUES DANS "request"
            $form->bind($request);
            
            // ON VERIFIE QUE LE FORMULAIRE EST CORRECT
            if($form->isValid()){
                
                $article = $form->getData();
                
                // ON ENREGISTRE L'OBJET ARTICLE DANS LA BDD
                $em->persist($article);
                $em->flush();
                
                // REDIRECTION VERS LA PAGE D'AJOUT D'ARTICLES
                return $this->redirect($this->generateUrl("article_dev_addArticle"));
            }
        }
        
        // ON AFFICHE LE FORMULAIRE AU DEPART SSI, L'UTILISATEUR VIENT D'ARRIVER SUR LA PAGE
        // OU BIEN LE FORMULAIRE N'EST PAS CORRECT, OU LE TYPE DE REQUETE EST GET
        return $this->render('ArticleDevBundle:ArticleDev:addArticle.html.twig', array(
                'form'      =>      $form->createView(),
                'menus'     =>      $men,
                ));
    }
    
    public function editArticleAction(){
        
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        $article = new Article();
       
        $form = $this->createForm(new ArticleModifType, $article);
        
        $request = $this->getRequest();
        
        if($request->isMethod('POST')){
            
            $form->bind($request);
            
            if($form->isValid()){
                
                $article = $form->getData();
                
                $em->persist($article);
                $em->flush();
                
                return $this->redirect($this->generateUrl("article_dev_modifArticle"));
            }
        }
        
        return $this->render('ArticleDevBundle:ArticleDev:modifArticle.html.twig', array(
            'menus'     =>      $men,
            'form'      =>      $form->createView(),
        ));
    }

    public function delArticleAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:ArticleDev:delArticle.html.twig', array(
            'menus'   => $men,
        ));
    }
    
    public function guideAdminAction(){
        
         // On récupère l'EntityManager
        $em = $this->getDoctrine()->getManager();

        $men = $em->getRepository('ArticleDevBundle:Category')
                  ->getMenus();
        
        return $this->render('ArticleDevBundle:ArticleDev:guideAdmin.html.twig', array(
            'menus'   => $men,
        ));
    }
}
