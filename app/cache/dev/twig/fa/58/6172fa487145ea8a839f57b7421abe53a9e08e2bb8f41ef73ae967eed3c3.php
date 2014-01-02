<?php

/* ::base.html.twig */
class __TwigTemplate_fa586172fa487145ea8a839f57b7421abe53a9e08e2bb8f41ef73ae967eed3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'leftCont' => array($this, 'block_leftCont'),
            'body' => array($this, 'block_body'),
            'catSelect' => array($this, 'block_catSelect'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
            
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body>
        <header id=\"banDev\">
            <div id=\"details\">
                <div id=\"leftBan\"></div>
                <div id=\"arbre\"></div>
            </div>
            <div id=\"navtabs\">
                ";
        // line 35
        $this->displayBlock('menu', $context, $blocks);
        // line 36
        echo "            </div>
        </header>
        
        <div id=\"breadcrumb\">
            <ul>
                ";
        // line 41
        $this->displayBlock('arianne', $context, $blocks);
        // line 62
        echo "            </ul>
        </div><!-- /breadcrumb-->
            
        <div id=\"contentDev\">
            <div id=\"leftContent\">
                ";
        // line 67
        $this->displayBlock('leftCont', $context, $blocks);
        // line 68
        echo "            </div>
            <div id=\"rightContent\">
                ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "            </div>
        </div>
  
        ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 77
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                Développement durable
            ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "8b1f94a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_menu_1.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "8b1f94a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_admin_2.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "8b1f94a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_structPage_3.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "8b1f94a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "            
        ";
    }

    // line 35
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 41
    public function block_arianne($context, array $blocks = array())
    {
        // line 42
        echo "                     <li class=\"first\">
                         <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
        echo "\" title=\"Retour à l'accueil\">
                             Home
                         </a>
                         <span class=\"end\">&nbsp;</span>
                     </li>
                     <span class=\"barUser\">
                        ";
        // line 49
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 50
            echo "                            Accéder à l'&nbsp;
                            <a href='";
            // line 51
            echo $this->env->getExtension('routing')->getPath("article_dev_admin");
            echo "' title='Ajouter: articles, menus, sous-menus'>
                                ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "istration
                            </a> - 
                            <a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" title='Se déconnecter'>
                                Déconnexion
                            </a>
                        ";
        } else {
            // line 58
            echo "                            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" title=\"Accéder à l'administration\">Administration</a>
                        ";
        }
        // line 60
        echo "                    </span>
                ";
    }

    // line 67
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "                <p id='entete'>Le développement durable <font color='black'> ";
        $this->displayBlock('catSelect', $context, $blocks);
        echo "</font></p>
                ";
    }

    public function block_catSelect($context, array $blocks = array())
    {
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  172 => 43,  169 => 42,  166 => 41,  161 => 35,  149 => 19,  146 => 18,  128 => 19,  125 => 18,  118 => 19,  115 => 18,  108 => 12,  105 => 11,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 68,  76 => 67,  69 => 62,  60 => 36,  58 => 35,  45 => 25,  42 => 24,  40 => 11,  34 => 6,  27 => 1,  174 => 77,  168 => 74,  165 => 73,  163 => 72,  156 => 22,  151 => 67,  143 => 65,  141 => 64,  138 => 19,  135 => 18,  131 => 54,  122 => 50,  113 => 47,  111 => 13,  106 => 44,  100 => 7,  97 => 6,  90 => 38,  87 => 37,  79 => 29,  73 => 28,  70 => 27,  67 => 41,  62 => 33,  59 => 26,  57 => 25,  52 => 23,  46 => 21,  39 => 17,  36 => 9,  31 => 6,  29 => 5,);
    }
}
