<?php

/* ArticleDevBundle:ArticleDev:article.html.twig */
class __TwigTemplate_8eb6580aaafe763d10a88a75d255f81812e0ca3880f531b925f70debb39248ce extends Twig_Template
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

    // line 20
    public function block_arianne($context, array $blocks = array())
    {
        echo "    
    ";
        // line 21
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " 
    <li>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => (isset($context["idSc"]) ? $context["idSc"] : null), "idAr" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" title=\"Back to item 2\">
            Article N° ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"), "html", null, true);
        echo "
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "    <h1>Le développement durable</h1>
    <h3>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
        echo "</h3>
    ";
        // line 33
        echo "    
";
        // line 39
        echo "    <p>
        ";
        // line 40
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content");
        echo "
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_homepage", array("id" => (isset($context["idSc"]) ? $context["idSc"] : null))), "html", null, true);
        echo "\" title=\"retour à la page précédente\"><i>«« Retour</i></a>
    </p>
        
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 41,  74 => 33,  70 => 31,  52 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 30,  63 => 15,  47 => 21,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  56 => 24,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 25,  21 => 2,  98 => 31,  93 => 28,  78 => 21,  46 => 7,  27 => 5,  40 => 8,  43 => 8,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  32 => 15,  25 => 3,  24 => 4,  181 => 60,  171 => 61,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  145 => 21,  138 => 54,  135 => 53,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 36,  104 => 11,  96 => 6,  90 => 61,  88 => 6,  83 => 57,  81 => 56,  77 => 39,  75 => 17,  68 => 14,  66 => 15,  59 => 14,  44 => 12,  41 => 7,  35 => 16,  26 => 6,  31 => 5,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 40,  73 => 19,  64 => 29,  60 => 13,  57 => 11,  54 => 10,  51 => 24,  48 => 23,  45 => 8,  42 => 20,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
