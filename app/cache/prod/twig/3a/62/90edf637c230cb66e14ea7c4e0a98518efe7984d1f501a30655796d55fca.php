<?php

/* ArticleDevBundle:ArticleDev:index.html.twig */
class __TwigTemplate_3a6290edf637c230cb66e14ea7c4e0a98518efe7984d1f501a30655796d55fca extends Twig_Template
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
            'catSelect' => array($this, 'block_catSelect'),
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
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 22
    public function block_arianne($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 25
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $_articles_, 0, 1));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "        ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if (($this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory") != "accueil")) {
                // line 27
                echo "            ";
                $this->displayBlock('subCat', $context, $blocks);
                // line 34
                echo "        ";
            }
            // line 35
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                
";
    }

    // line 27
    public function block_subCat($context, array $blocks = array())
    {
        // line 28
        echo "                <li>
                    <a href=\"";
        // line 29
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                        ";
        // line 30
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                    </a><span class=\"end\">&nbsp;</span>
                </li>
            ";
    }

    // line 41
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 45
    public function block_catSelect($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $_articles_, 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 47
            echo "        ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if (($this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory") != "accueil")) {
                // line 48
                echo "              -  ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
                echo "
        ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 55
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if ((twig_length_filter($this->env, $_articles_) != 0)) {
            // line 56
            echo "
        ";
            // line 57
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_articles_);
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 58
                echo "            <div class='titleDev'>
                ";
                // line 59
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                echo "
                <span class=\"adminArticle\">
                   ";
                // line 61
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 62
                    echo "                       <a href='";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($_article_, "id"))), "html", null, true);
                    echo "' title=\"Editer l'article: ";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                    echo "\">
                           Editer
                       </a>  - 
                       <a href=\"";
                    // line 65
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
                // line 69
                echo "               </span>
            </div>
            ";
                // line 72
                echo "
        ";
                // line 78
                echo "
            <p class='content'>

                ";
                // line 81
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                if (($this->getAttribute($_article_, "image") != "")) {
                    // line 82
                    echo "                    <img src=\"";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "image"), "html", null, true);
                    echo "\" title=\"";
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_article_, "title"), "html", null, true);
                    echo "\" class='imageDev'>
                ";
                }
                // line 84
                echo "
                ";
                // line 85
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_truncate_filter($this->env, $this->getAttribute($_article_, "content"), 500, true, " ... ");
                echo "
                <a href=\"";
                // line 86
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"), "idAr" => $this->getAttribute($_article_, "id"))), "html", null, true);
                echo "\" title='Plus de détails'>
                    <span class='back'>lire la suite</span>
                </a>

            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
    ";
        } else {
            // line 94
            echo "
            <div class=\"erreur\">
                Pas d'article correspondant à cette catégorie !
            </div>   

    ";
        }
        // line 100
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
        return array (  263 => 94,  259 => 92,  246 => 86,  241 => 85,  238 => 84,  228 => 82,  225 => 81,  220 => 78,  217 => 72,  191 => 62,  175 => 57,  164 => 54,  161 => 53,  151 => 50,  144 => 48,  74 => 26,  132 => 49,  116 => 41,  103 => 27,  94 => 36,  172 => 56,  169 => 55,  73 => 27,  68 => 27,  230 => 96,  199 => 80,  179 => 71,  167 => 68,  159 => 64,  153 => 62,  139 => 58,  119 => 48,  113 => 46,  99 => 38,  87 => 36,  79 => 32,  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 46,  131 => 45,  122 => 43,  117 => 30,  102 => 28,  92 => 25,  72 => 30,  51 => 22,  48 => 7,  35 => 15,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 100,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 52,  112 => 32,  96 => 25,  71 => 17,  55 => 22,  114 => 22,  109 => 29,  106 => 28,  101 => 19,  85 => 33,  77 => 12,  39 => 7,  110 => 20,  65 => 20,  63 => 13,  26 => 6,  98 => 36,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  43 => 11,  57 => 14,  50 => 23,  47 => 22,  38 => 16,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 62,  155 => 55,  142 => 59,  136 => 57,  133 => 51,  130 => 42,  120 => 40,  75 => 25,  53 => 16,  32 => 6,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 69,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 41,  108 => 40,  105 => 40,  100 => 46,  91 => 77,  89 => 41,  84 => 35,  82 => 32,  78 => 27,  76 => 19,  69 => 20,  67 => 25,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 16,  34 => 5,  27 => 3,  31 => 7,  28 => 5,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 65,  196 => 64,  193 => 78,  187 => 76,  183 => 59,  180 => 58,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 47,  137 => 18,  129 => 48,  124 => 35,  121 => 24,  118 => 44,  115 => 52,  111 => 51,  107 => 41,  104 => 47,  97 => 37,  93 => 36,  90 => 35,  81 => 34,  70 => 26,  66 => 23,  62 => 19,  59 => 25,  56 => 25,  52 => 10,  49 => 13,  45 => 20,  41 => 9,  37 => 11,  33 => 15,  30 => 5,);
    }
}
