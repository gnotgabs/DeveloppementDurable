<?php

/* ArticleDevBundle:ArticleDev:guideAdmin.html.twig */
class __TwigTemplate_21b9b255bcaa2e1ee0167e21d176a89571c6d275eb16267c82622cb3892e0983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArticleDevBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_arianne($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\" title=\"Ajout de catégorie\">
            Guide administrateur
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 19
    public function block_body($context, array $blocks = array())
    {
        // line 20
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Le guide de l'administrateur</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:guideAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  174 => 77,  165 => 73,  113 => 47,  90 => 38,  155 => 74,  148 => 70,  137 => 65,  126 => 60,  104 => 50,  205 => 96,  185 => 84,  178 => 80,  134 => 60,  127 => 56,  110 => 43,  70 => 27,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 61,  143 => 65,  119 => 49,  102 => 32,  71 => 19,  63 => 20,  59 => 26,  38 => 9,  94 => 28,  85 => 25,  75 => 25,  68 => 14,  56 => 23,  87 => 37,  21 => 2,  26 => 6,  93 => 40,  88 => 38,  46 => 21,  44 => 12,  201 => 92,  196 => 90,  171 => 61,  163 => 72,  158 => 67,  151 => 67,  142 => 59,  136 => 56,  121 => 46,  117 => 52,  62 => 33,  49 => 19,  25 => 3,  24 => 4,  232 => 76,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 72,  156 => 68,  146 => 18,  138 => 63,  135 => 57,  128 => 49,  118 => 19,  105 => 41,  100 => 42,  97 => 41,  91 => 27,  89 => 37,  84 => 73,  78 => 21,  76 => 32,  67 => 26,  58 => 35,  34 => 6,  27 => 3,  31 => 6,  28 => 3,  19 => 1,  79 => 33,  72 => 24,  69 => 30,  47 => 15,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 62,  131 => 54,  123 => 47,  120 => 40,  115 => 55,  111 => 46,  108 => 36,  101 => 32,  98 => 31,  96 => 48,  83 => 36,  74 => 14,  66 => 29,  55 => 15,  52 => 23,  50 => 15,  43 => 11,  41 => 9,  35 => 7,  32 => 6,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 74,  164 => 59,  162 => 78,  154 => 58,  149 => 19,  147 => 58,  144 => 64,  141 => 64,  133 => 64,  130 => 41,  125 => 44,  122 => 50,  116 => 41,  112 => 42,  109 => 34,  106 => 44,  103 => 32,  99 => 40,  95 => 39,  92 => 21,  86 => 36,  82 => 70,  80 => 19,  73 => 28,  64 => 17,  60 => 19,  57 => 25,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 17,  36 => 16,  33 => 4,  30 => 7,);
    }
}
