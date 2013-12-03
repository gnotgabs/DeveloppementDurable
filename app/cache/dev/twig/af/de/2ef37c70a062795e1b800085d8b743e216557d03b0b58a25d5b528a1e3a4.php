<?php

/* ::connectLayout.html.twig */
class __TwigTemplate_afde2ef37c70a062795e1b800085d8b743e216557d03b0b58a25d5b528a1e3a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
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
        <div id=\"contentC\">
            <div id=\"connexionContent\">
                ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "            </div>
        </div>
  
        ";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
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

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "                    <p id='entete'>Le développement durable</p>
                ";
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::connectLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  132 => 32,  129 => 31,  124 => 22,  117 => 19,  114 => 18,  106 => 19,  103 => 18,  96 => 19,  93 => 18,  86 => 19,  83 => 18,  76 => 12,  68 => 7,  65 => 6,  57 => 37,  52 => 34,  50 => 31,  41 => 25,  30 => 6,  23 => 1,  72 => 17,  69 => 16,  64 => 19,  62 => 16,  59 => 38,  46 => 9,  42 => 8,  39 => 7,  34 => 6,  32 => 9,  29 => 4,  79 => 13,  73 => 11,  66 => 18,  60 => 15,  56 => 13,  51 => 12,  47 => 11,  44 => 10,  38 => 24,  36 => 11,  31 => 6,  28 => 5,);
    }
}
