<?php

/* ArticleDevBundle:CategoryDev:delCategory.html.twig */
class __TwigTemplate_8569ffd11d8068855f631b1b227ef9d9df1f8d1f6f6850ea401021c397f8b5e8 extends Twig_Template
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
        // line 4
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_arianne($context, array $blocks = array())
    {
        // line 8
        echo "
    ";
        // line 9
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
 
    <li>
        <a href=\"";
        // line 12
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
        echo "\" title=\"Supprimer la catégorie: ";
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "labelCategory"), "html", null, true);
        echo "\">
            Suppression Catégories
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer la catégorie  <span class=\"editSup\">« ";
        // line 26
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_category_, "labelCategory"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 27
        if (isset($context["category"])) { $_category_ = $context["category"]; } else { $_category_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delCategory", array("id" => $this->getAttribute($_category_, "id"))), "html", null, true);
        echo "\" method='post' ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 28
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
            
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour aux catégories
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:CategoryDev:delCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 35,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 59,  154 => 50,  144 => 53,  141 => 47,  128 => 42,  86 => 36,  83 => 27,  132 => 49,  103 => 39,  94 => 36,  188 => 74,  182 => 58,  174 => 65,  168 => 67,  145 => 50,  123 => 44,  73 => 27,  116 => 41,  68 => 22,  61 => 24,  230 => 80,  199 => 63,  179 => 57,  167 => 56,  159 => 64,  153 => 70,  139 => 52,  119 => 31,  113 => 46,  99 => 40,  87 => 35,  79 => 31,  54 => 23,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 50,  131 => 43,  122 => 43,  117 => 42,  102 => 38,  92 => 25,  72 => 24,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 49,  147 => 60,  127 => 59,  112 => 32,  96 => 38,  71 => 30,  55 => 15,  114 => 22,  109 => 41,  106 => 36,  101 => 48,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 27,  63 => 13,  26 => 6,  98 => 38,  88 => 17,  80 => 28,  46 => 12,  44 => 12,  43 => 11,  57 => 19,  50 => 22,  47 => 15,  38 => 9,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 65,  155 => 64,  142 => 65,  136 => 51,  133 => 50,  130 => 49,  120 => 55,  75 => 25,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 63,  126 => 18,  108 => 41,  105 => 28,  100 => 37,  91 => 28,  89 => 16,  84 => 29,  82 => 32,  78 => 26,  76 => 27,  69 => 23,  67 => 15,  60 => 20,  58 => 26,  42 => 24,  40 => 17,  36 => 16,  34 => 5,  27 => 4,  31 => 6,  28 => 3,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 65,  193 => 61,  187 => 76,  183 => 62,  180 => 59,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 54,  149 => 57,  146 => 66,  140 => 49,  137 => 18,  129 => 19,  124 => 35,  121 => 46,  118 => 36,  115 => 44,  111 => 30,  107 => 44,  104 => 40,  97 => 30,  93 => 44,  90 => 36,  81 => 34,  70 => 28,  66 => 23,  62 => 26,  59 => 25,  56 => 17,  52 => 24,  49 => 23,  45 => 13,  41 => 10,  37 => 16,  33 => 4,  30 => 5,);
    }
}
