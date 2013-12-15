<?php

/* ArticleDevBundle:ArticleDev:article.html.twig */
class __TwigTemplate_0f978027446fdafcc9c70ec573e122723523884cf70f2efc3b0602913eb0ec56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'subCat' => array($this, 'block_subCat'),
            'leftCont' => array($this, 'block_leftCont'),
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
        // line 6
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 21
    public function block_arianne($context, array $blocks = array())
    {
        echo "  

    ";
        // line 23
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 25
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory") != "accueil")) {
            // line 26
            echo "        ";
            $this->displayBlock('subCat', $context, $blocks);
            // line 33
            echo "    ";
        }
    }

    // line 26
    public function block_subCat($context, array $blocks = array())
    {
        // line 27
        echo "            <li>
                <a href=\"";
        // line 28
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                    ";
        // line 29
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                </a><span class=\"end\">&nbsp;</span>
            </li>
        ";
    }

    // line 37
    public function block_leftCont($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        if (isset($context["macroVoletGauche"])) { $_macroVoletGauche_ = $context["macroVoletGauche"]; } else { $_macroVoletGauche_ = null; }
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if (isset($context["lMenus"])) { $_lMenus_ = $context["lMenus"]; } else { $_lMenus_ = null; }
        echo $_macroVoletGauche_->getvoletGauche($_articles_, $_lMenus_);
        echo "
";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class='titleDev'>
        ";
        // line 44
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
        echo "
        <span class=\"adminArticle\">
           ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "                <a href='";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "' title=\"Editer l'article: ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "\">
                    Editer
                </a>  - 
                <a href=\"";
            // line 50
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
            echo "\" title=\"Supprimer l'article: ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "\">
                    Supprimer
                </a>
           ";
        }
        // line 54
        echo "       </span>
    </div>
    ";
        // line 57
        echo "    
";
        // line 63
        echo "    <p class='content'>
        ";
        // line 64
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "image") != "")) {
            // line 65
            echo "            <img src=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "image"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
            echo "\" class='imageDevSup'>
        ";
        }
        // line 67
        echo "        ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo $this->getAttribute($_article_, "content");
        echo "
        <a href=\"";
        // line 68
        if (isset($context["idSc"])) { $_idSc_ = $context["idSc"]; } else { $_idSc_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $_idSc_)), "html", null, true);
        echo "\" title=\"retour à la page précédente\">
            <span class='back'>«« Retour</span>
        </a>
    </p>
    ";
        // line 72
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        if (($this->getAttribute($_article_, "link") != "")) {
            // line 73
            echo "        <p class='linkDev'>
            Pour plus d'informations, <a href='";
            // line 74
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "link"), "html", null, true);
            echo "' target=\"_blank\"><span class='details'>cliquez ici.</span></a>
        </p>
    ";
        }
        // line 77
        echo "        
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
        return array (  188 => 74,  182 => 72,  174 => 68,  168 => 67,  145 => 54,  123 => 47,  73 => 27,  116 => 54,  68 => 29,  61 => 24,  230 => 96,  199 => 80,  179 => 72,  167 => 78,  159 => 64,  153 => 70,  139 => 56,  119 => 48,  113 => 46,  99 => 40,  87 => 36,  79 => 32,  54 => 23,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 64,  134 => 50,  131 => 60,  122 => 37,  117 => 36,  102 => 28,  92 => 25,  72 => 30,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 59,  112 => 32,  96 => 38,  71 => 30,  55 => 15,  114 => 22,  109 => 42,  106 => 41,  101 => 48,  85 => 22,  77 => 12,  39 => 17,  110 => 20,  65 => 33,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 18,  44 => 9,  43 => 7,  57 => 11,  50 => 22,  47 => 15,  38 => 6,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 77,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 65,  155 => 64,  142 => 65,  136 => 44,  133 => 54,  130 => 42,  120 => 55,  75 => 25,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 86,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 73,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 63,  126 => 18,  108 => 31,  105 => 49,  100 => 27,  91 => 77,  89 => 16,  84 => 29,  82 => 70,  78 => 40,  76 => 28,  69 => 17,  67 => 15,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 16,  34 => 5,  27 => 4,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 78,  187 => 76,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 74,  157 => 48,  149 => 57,  146 => 66,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 46,  118 => 36,  115 => 44,  111 => 32,  107 => 44,  104 => 28,  97 => 6,  93 => 37,  90 => 21,  81 => 34,  70 => 26,  66 => 23,  62 => 26,  59 => 25,  56 => 12,  52 => 10,  49 => 19,  45 => 13,  41 => 10,  37 => 11,  33 => 4,  30 => 3,);
    }
}
