<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/devdurable')) {
            if (0 === strpos($pathinfo, '/devdurable/sc')) {
                // article_dev_homepage
                if (preg_match('#^/devdurable/sc\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_homepage')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::indexAction',));
                }

                // article_dev_article
                if (preg_match('#^/devdurable/sc\\=(?P<idSc>[^/]++)/ar\\=(?P<idAr>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_article')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::showTheArticleAction',));
                }

            }

            // article_dev_addCategory
            if ($pathinfo === '/devdurable/addCategory') {
                return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::addCategoryAction',  '_route' => 'article_dev_addCategory',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
