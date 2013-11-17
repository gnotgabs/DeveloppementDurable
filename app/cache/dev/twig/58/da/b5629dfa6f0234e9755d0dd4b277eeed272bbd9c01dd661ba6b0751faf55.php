<?php

/* ArticleDevBundle:ArticleDev:guideAdmin.html.twig */
class __TwigTemplate_58dab5629dfa6f0234e9755d0dd4b277eeed272bbd9c01dd661ba6b0751faf55 extends Twig_Template
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
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
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
        return array (  118 => 55,  205 => 96,  202 => 95,  195 => 88,  190 => 86,  178 => 80,  161 => 72,  100 => 44,  76 => 32,  70 => 30,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 61,  128 => 49,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  119 => 42,  102 => 45,  71 => 19,  67 => 30,  63 => 20,  38 => 12,  94 => 28,  89 => 38,  85 => 25,  56 => 24,  87 => 25,  21 => 2,  93 => 40,  78 => 34,  46 => 7,  27 => 3,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  158 => 67,  156 => 70,  151 => 68,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  105 => 51,  91 => 45,  62 => 23,  49 => 19,  25 => 3,  24 => 4,  225 => 76,  220 => 70,  217 => 75,  212 => 67,  207 => 60,  201 => 92,  194 => 54,  185 => 84,  180 => 49,  171 => 61,  165 => 41,  160 => 35,  155 => 22,  148 => 19,  137 => 19,  134 => 60,  127 => 56,  124 => 18,  117 => 52,  114 => 18,  110 => 53,  107 => 36,  104 => 11,  90 => 77,  88 => 38,  81 => 70,  77 => 68,  75 => 17,  68 => 14,  59 => 14,  44 => 14,  26 => 6,  31 => 5,  28 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 74,  47 => 21,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 18,  139 => 62,  131 => 52,  123 => 56,  120 => 40,  115 => 43,  111 => 37,  108 => 52,  101 => 32,  98 => 42,  96 => 6,  83 => 36,  74 => 14,  66 => 15,  55 => 22,  52 => 23,  50 => 15,  43 => 8,  41 => 9,  35 => 7,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 52,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 64,  141 => 65,  133 => 55,  130 => 60,  125 => 44,  122 => 54,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 39,  80 => 35,  73 => 32,  64 => 29,  60 => 19,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 18,  42 => 20,  39 => 9,  36 => 5,  33 => 4,  30 => 5,);
    }
}
