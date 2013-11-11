<?php

/* ArticleDevBundle:ArticleDev:index.html.twig */
class __TwigTemplate_f5623865e82f9ebbe64552af8682018ed5244ec488a097790db87c123eec783e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : null));
        echo "
";
    }

    // line 22
    public function block_arianne($context, array $blocks = array())
    {
        // line 23
        echo "   ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        // line 28
        echo "    <h1>Le développement durable</h1>
        
        ";
        // line 30
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null)) != 0)) {
            // line 31
            echo "    
            ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 33
                echo "                <h3>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                echo "</h3>
                ";
                // line 35
                echo "
            ";
                // line 41
                echo "                <p>
                    ";
                // line 42
                echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content"), 500, true, " ... ");
                echo "
                    <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "id"), "idAr" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
                echo "\"><i>lire la suite</i></a>
                </p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                
        ";
        } else {
            // line 48
            echo "            
                <div class=\"erreur\">
                    Pas d'article correspondant à cette catégorie !
                </div>   
                
        ";
        }
        // line 54
        echo "        
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  84 => 41,  74 => 33,  70 => 31,  52 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 30,  63 => 15,  47 => 21,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 42,  56 => 24,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 28,  21 => 2,  98 => 31,  93 => 28,  78 => 21,  46 => 7,  27 => 5,  40 => 8,  43 => 8,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  32 => 15,  25 => 3,  24 => 4,  181 => 60,  171 => 61,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  145 => 21,  138 => 54,  135 => 53,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 36,  104 => 54,  96 => 48,  90 => 61,  88 => 6,  83 => 43,  81 => 56,  77 => 39,  75 => 17,  68 => 33,  66 => 15,  59 => 30,  44 => 12,  41 => 7,  35 => 16,  26 => 6,  31 => 5,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 46,  86 => 28,  82 => 22,  80 => 40,  73 => 35,  64 => 32,  60 => 13,  57 => 11,  54 => 10,  51 => 24,  48 => 23,  45 => 23,  42 => 22,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
