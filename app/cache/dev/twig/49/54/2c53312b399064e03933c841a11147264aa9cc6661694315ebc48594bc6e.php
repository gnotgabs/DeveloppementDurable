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
        // line 23
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
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
        // line 34
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "            </div>
        </header>
        
        <div id=\"breadcrumb\">
            <ul>
                ";
        // line 40
        $this->displayBlock('arianne', $context, $blocks);
        // line 48
        echo "            </ul>
        </div><!-- /breadcrumb-->
            
        <div id=\"contentDev\">
            <div id=\"leftContent\">
                ";
        // line 53
        $this->displayBlock('leftCont', $context, $blocks);
        // line 54
        echo "            </div>
            <div id=\"rightContent\">
                ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "            </div>
        </div>
  
        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
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
            // asset "ebe53c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebe53c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_menu_1.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "ebe53c2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebe53c2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_structPage_2.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "ebe53c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebe53c2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "            
        ";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 40
    public function block_arianne($context, array $blocks = array())
    {
        // line 41
        echo "                     <li class=\"first\">
                         <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("article_dev_homepage", array("id" => 1));
        echo "\" title=\"Retour à l'accueil\">
                             Accueil
                         </a>
                         <span class=\"end\">&nbsp;</span>
                     </li>  
                ";
    }

    // line 53
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
    }

    // line 60
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
        return array (  181 => 60,  176 => 56,  171 => 53,  161 => 42,  158 => 41,  155 => 40,  150 => 34,  145 => 21,  138 => 18,  135 => 17,  127 => 18,  124 => 17,  117 => 18,  114 => 17,  110 => 13,  107 => 12,  104 => 11,  99 => 7,  96 => 6,  90 => 61,  88 => 60,  83 => 57,  81 => 56,  75 => 53,  68 => 48,  66 => 40,  59 => 35,  57 => 34,  44 => 24,  41 => 23,  39 => 11,  33 => 6,  26 => 1,  86 => 43,  77 => 54,  73 => 39,  70 => 38,  67 => 32,  62 => 30,  58 => 29,  55 => 28,  52 => 27,  45 => 23,  42 => 22,  35 => 9,  32 => 15,  27 => 5,);
    }
}
