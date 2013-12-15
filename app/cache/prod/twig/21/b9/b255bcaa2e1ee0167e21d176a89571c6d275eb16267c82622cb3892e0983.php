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
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
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
        return array (  132 => 49,  103 => 39,  94 => 36,  188 => 74,  182 => 72,  174 => 68,  168 => 67,  145 => 54,  123 => 47,  73 => 27,  116 => 41,  68 => 29,  61 => 24,  230 => 96,  199 => 80,  179 => 72,  167 => 78,  159 => 64,  153 => 70,  139 => 56,  119 => 48,  113 => 46,  99 => 40,  87 => 36,  79 => 32,  54 => 23,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 64,  134 => 50,  131 => 60,  122 => 43,  117 => 36,  102 => 28,  92 => 25,  72 => 30,  51 => 13,  48 => 21,  35 => 7,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 59,  112 => 32,  96 => 38,  71 => 30,  55 => 15,  114 => 22,  109 => 42,  106 => 41,  101 => 48,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 20,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  43 => 11,  57 => 14,  50 => 15,  47 => 15,  38 => 9,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 77,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 65,  155 => 64,  142 => 65,  136 => 44,  133 => 54,  130 => 42,  120 => 55,  75 => 25,  53 => 16,  32 => 6,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 86,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 73,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 63,  126 => 18,  108 => 40,  105 => 49,  100 => 27,  91 => 77,  89 => 16,  84 => 29,  82 => 32,  78 => 40,  76 => 28,  69 => 20,  67 => 15,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 16,  34 => 5,  27 => 3,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 78,  187 => 76,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 74,  157 => 48,  149 => 57,  146 => 66,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 46,  118 => 36,  115 => 44,  111 => 32,  107 => 44,  104 => 28,  97 => 37,  93 => 37,  90 => 21,  81 => 34,  70 => 26,  66 => 23,  62 => 19,  59 => 25,  56 => 12,  52 => 10,  49 => 13,  45 => 13,  41 => 9,  37 => 11,  33 => 4,  30 => 3,);
    }
}
