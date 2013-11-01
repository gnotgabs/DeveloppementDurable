<?php

namespace UTBM\ArticleDevBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleDevController extends Controller
{
    public function indexAction()
    {
        return $this->render('ArticleDevBundle:ArticleDev:index.html.twig');
    }
}
