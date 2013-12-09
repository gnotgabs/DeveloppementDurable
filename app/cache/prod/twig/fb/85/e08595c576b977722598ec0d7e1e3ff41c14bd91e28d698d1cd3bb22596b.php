<?php

/* ArticleDevBundle:ArticleDev:delArticle.html.twig */
class __TwigTemplate_fb85e08595c576b977722598ec0d7e1e3ff41c14bd91e28d698d1cd3bb22596b extends Twig_Template
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

    ";
        // line 11
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory") != "accueil")) {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"))), "html", null, true);
            echo "\" title=\"Retour à : ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
            echo "\">
                ";
            // line 14
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
            echo "
            </a><span class=\"end\">&nbsp;</span>
        </li>
    ";
        }
        // line 18
        echo " 
    <li>
        <a href=\"";
        // line 20
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
        echo "\" title=\"Supprimer l'article: ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo "\">
            Suppression article
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer l'article  <span class=\"editSup\">« ";
        // line 39
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 40
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
        echo "\" method='post' ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 41
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
            
            <a href=\"";
        // line 43
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"))), "html", null, true);
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour à l'article
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:delArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 49,  116 => 41,  103 => 39,  94 => 36,  172 => 68,  169 => 67,  73 => 27,  68 => 27,  230 => 96,  199 => 80,  179 => 71,  167 => 68,  159 => 64,  153 => 62,  139 => 58,  119 => 48,  113 => 46,  99 => 38,  87 => 36,  79 => 32,  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 43,  117 => 36,  102 => 28,  92 => 25,  72 => 30,  51 => 22,  48 => 7,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 52,  112 => 32,  96 => 25,  71 => 17,  55 => 22,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 33,  77 => 12,  39 => 7,  110 => 20,  65 => 18,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  43 => 11,  57 => 14,  50 => 22,  47 => 15,  38 => 9,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 62,  155 => 55,  142 => 59,  136 => 57,  133 => 51,  130 => 42,  120 => 40,  75 => 25,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 86,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 18,  108 => 40,  105 => 40,  100 => 46,  91 => 77,  89 => 41,  84 => 21,  82 => 32,  78 => 40,  76 => 19,  69 => 20,  67 => 25,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 16,  34 => 5,  27 => 4,  31 => 7,  28 => 5,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 78,  187 => 76,  183 => 62,  180 => 59,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 48,  124 => 35,  121 => 24,  118 => 44,  115 => 52,  111 => 51,  107 => 41,  104 => 47,  97 => 37,  93 => 36,  90 => 35,  81 => 28,  70 => 26,  66 => 23,  62 => 32,  59 => 25,  56 => 24,  52 => 10,  49 => 13,  45 => 20,  41 => 10,  37 => 11,  33 => 15,  30 => 3,);
    }
}
