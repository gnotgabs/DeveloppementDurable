<?php

/* ::base.html.twig */
class __TwigTemplate_49542c53312b399064e03933c841a11147264aa9cc6661694315ebc48594bc6e extends Twig_Template
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
        // line 49
        echo "            </ul>
        </div><!-- /breadcrumb-->
            
        <div id=\"contentDev\">
            <div id=\"leftContent\">
                ";
        // line 54
        $this->displayBlock('leftCont', $context, $blocks);
        // line 55
        echo "            </div>
            <div id=\"rightContent\">
                ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "            </div>
        </div>
  
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
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
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "8b1f94a_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_admin_2.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "8b1f94a_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_structPage_3.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "8b1f94a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_8b1f94a") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main.css");
            // line 18
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
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
                             Accueil
                         </a>
                         <span class=\"end\">&nbsp;</span>
                     </li>  
                ";
    }

    // line 54
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        // line 58
        echo "                    <p id='entete'>Le développement durable</p>
                ";
    }

    // line 63
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
        return array (  194 => 63,  189 => 58,  186 => 57,  181 => 54,  171 => 43,  168 => 42,  165 => 41,  160 => 35,  155 => 22,  148 => 19,  145 => 18,  137 => 19,  134 => 18,  127 => 19,  117 => 19,  114 => 18,  110 => 13,  107 => 12,  99 => 7,  96 => 6,  90 => 64,  88 => 63,  81 => 57,  77 => 55,  75 => 54,  68 => 49,  66 => 41,  59 => 36,  57 => 35,  44 => 25,  41 => 24,  39 => 11,  35 => 9,  26 => 1,  132 => 66,  124 => 18,  120 => 58,  108 => 52,  104 => 11,  101 => 50,  93 => 48,  91 => 47,  86 => 44,  83 => 60,  78 => 36,  74 => 35,  71 => 34,  69 => 33,  64 => 32,  61 => 31,  56 => 28,  53 => 27,  46 => 23,  43 => 22,  36 => 16,  33 => 6,  28 => 5,);
    }
}
