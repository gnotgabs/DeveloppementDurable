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
        return array (  141 => 37,  23 => 1,  21 => 1,  125 => 48,  184 => 61,  174 => 65,  145 => 50,  128 => 22,  123 => 44,  95 => 34,  86 => 19,  83 => 18,  263 => 94,  259 => 92,  246 => 86,  241 => 85,  238 => 84,  228 => 82,  225 => 81,  220 => 78,  217 => 72,  191 => 64,  175 => 57,  164 => 54,  161 => 59,  151 => 56,  144 => 53,  74 => 26,  132 => 49,  116 => 41,  103 => 25,  94 => 18,  172 => 56,  169 => 55,  73 => 11,  68 => 7,  230 => 96,  199 => 80,  179 => 60,  167 => 56,  159 => 64,  153 => 62,  139 => 52,  119 => 43,  113 => 46,  99 => 37,  87 => 28,  79 => 13,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 46,  131 => 45,  122 => 43,  117 => 18,  102 => 36,  92 => 25,  72 => 16,  51 => 22,  48 => 9,  35 => 8,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 100,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 51,  147 => 60,  127 => 52,  112 => 39,  96 => 25,  71 => 29,  55 => 22,  114 => 22,  109 => 41,  106 => 36,  101 => 19,  85 => 33,  77 => 12,  39 => 7,  110 => 20,  65 => 6,  63 => 13,  26 => 6,  98 => 38,  88 => 34,  80 => 33,  46 => 12,  44 => 12,  43 => 8,  57 => 37,  50 => 31,  47 => 7,  38 => 24,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 62,  155 => 55,  142 => 59,  136 => 32,  133 => 31,  130 => 49,  120 => 19,  75 => 17,  53 => 23,  32 => 9,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 41,  108 => 19,  105 => 18,  100 => 35,  91 => 28,  89 => 41,  84 => 31,  82 => 32,  78 => 26,  76 => 12,  69 => 30,  67 => 19,  60 => 10,  58 => 23,  42 => 24,  40 => 7,  36 => 11,  34 => 6,  27 => 4,  31 => 7,  28 => 5,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 65,  196 => 65,  193 => 78,  187 => 76,  183 => 59,  180 => 58,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 54,  149 => 18,  146 => 41,  140 => 49,  137 => 18,  129 => 48,  124 => 43,  121 => 46,  118 => 44,  115 => 52,  111 => 41,  107 => 38,  104 => 38,  97 => 19,  93 => 30,  90 => 33,  81 => 34,  70 => 28,  66 => 29,  62 => 15,  59 => 38,  56 => 20,  52 => 34,  49 => 13,  45 => 20,  41 => 25,  37 => 11,  33 => 15,  30 => 6,);
    }
}
