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

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // article_dev_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'article_dev_homepage');
            }

            return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::indexAction',  '_route' => 'article_dev_homepage',);
        }

        if (0 === strpos($pathinfo, '/sc')) {
            // article_dev_show
            if (preg_match('#^/sc\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_show')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::showAction',));
            }

            // article_dev_article
            if (preg_match('#^/sc\\=(?P<idSc>[^/]++)/ar\\=(?P<idAr>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_article')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::showTheArticleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // article_dev_admin
            if ($pathinfo === '/admin') {
                return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::adminAction',  '_route' => 'article_dev_admin',);
            }

            // article_dev_guideAdmin
            if ($pathinfo === '/admin/guideAdmin') {
                return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::guideAdminAction',  '_route' => 'article_dev_guideAdmin',);
            }

            // article_dev_addArticle
            if ($pathinfo === '/admin/addArticle') {
                return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::addArticleAction',  '_route' => 'article_dev_addArticle',);
            }

            // article_dev_editArticle
            if (0 === strpos($pathinfo, '/admin/editArticle/ar') && preg_match('#^/admin/editArticle/ar\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_editArticle')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::editArticleAction',));
            }

            // article_dev_delArticle
            if (0 === strpos($pathinfo, '/admin/delArticle/ar') && preg_match('#^/admin/delArticle/ar\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_delArticle')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\ArticleDevController::delArticleAction',));
            }

            if (0 === strpos($pathinfo, '/admin/a')) {
                // article_dev_addCategory
                if ($pathinfo === '/admin/addCategory') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::addCategoryAction',  '_route' => 'article_dev_addCategory',);
                }

                // article_dev_showCategories
                if ($pathinfo === '/admin/allCategories') {
                    return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::showCategoriesAction',  '_route' => 'article_dev_showCategories',);
                }

            }

            // article_dev_editCategory
            if (0 === strpos($pathinfo, '/admin/modifCategory') && preg_match('#^/admin/modifCategory\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_editCategory')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::editCategoryAction',));
            }

            // article_dev_delCategory
            if (0 === strpos($pathinfo, '/admin/delCategory') && preg_match('#^/admin/delCategory\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_delCategory')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\CategoryDevController::delCategoryAction',));
            }

            // article_dev_addSubCategory
            if ($pathinfo === '/admin/addSubCategory') {
                return array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\SubCategoryDevController::addSubCategoryAction',  '_route' => 'article_dev_addSubCategory',);
            }

            // article_dev_editSubCategory
            if (0 === strpos($pathinfo, '/admin/editSubCategory') && preg_match('#^/admin/editSubCategory\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_editSubCategory')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\SubCategoryDevController::editSubCategoryAction',));
            }

            // article_dev_delSubCategory
            if (0 === strpos($pathinfo, '/admin/delSubCategory') && preg_match('#^/admin/delSubCategory\\=(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_dev_delSubCategory')), array (  '_controller' => 'UTBM\\ArticleDevBundle\\Controller\\SubCategoryDevController::delSubCategoryAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
