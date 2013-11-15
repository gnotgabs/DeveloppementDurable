<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/css/compiled/main')) {
            // _assetic_8b1f94a
            if ($pathinfo === '/css/compiled/main.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '8b1f94a',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_8b1f94a',);
            }

            if (0 === strpos($pathinfo, '/css/compiled/main_')) {
                // _assetic_8b1f94a_0
                if ($pathinfo === '/css/compiled/main_menu_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b1f94a',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_8b1f94a_0',);
                }

                // _assetic_8b1f94a_1
                if ($pathinfo === '/css/compiled/main_admin_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b1f94a',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_8b1f94a_1',);
                }

                // _assetic_8b1f94a_2
                if ($pathinfo === '/css/compiled/main_structPage_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '8b1f94a',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_8b1f94a_2',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

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

            if (0 === strpos($pathinfo, '/devdurable/administration')) {
                // article_dev_admin
                if ($pathinfo === '/devdurable/administration') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::adminAction',  '_route' => 'article_dev_admin',);
                }

                // article_dev_addArticle
                if ($pathinfo === '/devdurable/administration/addArticle') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::addArticleAction',  '_route' => 'article_dev_addArticle',);
                }

                // article_dev_modifArticle
                if ($pathinfo === '/devdurable/administration/modifArticle') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::modifArticleAction',  '_route' => 'article_dev_modifArticle',);
                }

                // article_dev_delArticle
                if ($pathinfo === '/devdurable/administration/delArticle') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::delArticleAction',  '_route' => 'article_dev_delArticle',);
                }

                // article_dev_addCategory
                if ($pathinfo === '/devdurable/administration/addCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::addCategoryAction',  '_route' => 'article_dev_addCategory',);
                }

                // article_dev_modifCategory
                if ($pathinfo === '/devdurable/administration/modifCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::modifCategoryAction',  '_route' => 'article_dev_modifCategory',);
                }

                // article_dev_delCategory
                if ($pathinfo === '/devdurable/administration/delCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::delCategoryAction',  '_route' => 'article_dev_delCategory',);
                }

                // article_dev_addSubCategory
                if ($pathinfo === '/devdurable/administration/addSubCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\SubCategoryDevController::addSubCategoryAction',  '_route' => 'article_dev_addSubCategory',);
                }

                // article_dev_modifSubCategory
                if ($pathinfo === '/devdurable/administration/modifSubCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\SubCategoryDevController::modifSubCategoryAction',  '_route' => 'article_dev_modifSubCategory',);
                }

                // article_dev_delSubCategory
                if ($pathinfo === '/devdurable/administration/delSubCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\SubCategoryDevController::delSubCategoryAction',  '_route' => 'article_dev_delSubCategory',);
                }

            }

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
