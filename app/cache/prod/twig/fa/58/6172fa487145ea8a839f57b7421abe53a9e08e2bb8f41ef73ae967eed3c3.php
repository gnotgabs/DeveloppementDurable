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
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_0") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_menu_1.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "8b1f94a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_1") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_admin_2.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "8b1f94a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_2") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_structPage_3.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "8b1f94a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
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
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_app_, "user"), "username"), "html", null, true);
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
        return array (  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 58,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 42,  170 => 41,  165 => 35,  152 => 19,  126 => 18,  108 => 12,  105 => 11,  100 => 7,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 68,  76 => 67,  69 => 62,  67 => 41,  60 => 36,  58 => 35,  42 => 24,  40 => 11,  36 => 9,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 19,  137 => 18,  129 => 19,  124 => 35,  121 => 34,  118 => 19,  115 => 18,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 22,  90 => 21,  81 => 19,  70 => 15,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 25,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
