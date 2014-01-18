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
        // line 6
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 23
    public function block_arianne($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
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
            // line 27
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
                // line 28
                echo "            ";
                $this->displayBlock('subCat', $context, $blocks);
                // line 35
                echo "        ";
            }
            // line 36
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
        // line 37
        echo "                
";
    }

    // line 28
    public function block_subCat($context, array $blocks = array())
    {
        // line 29
        echo "                <li>
                    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                    </a><span class=\"end\">&nbsp;</span>
                </li>
            ";
    }

    // line 42
    public function block_leftCont($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 47
    public function block_catSelect($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
                // line 50
                echo "              -  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
                echo "
        ";
            }
            // line 52
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 57
        if ((twig_length_filter($this->env, $this->getContext($context, "articles")) != 0)) {
            // line 58
            echo "
        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 60
                echo "            <div class='titleDev'>
                ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                echo "
                <span class=\"adminArticle\">
                   ";
                // line 63
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 64
                    echo "                       <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                    echo "' title=\"Editer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\">
                           Editer
                       </a>  - 
                       <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\">
                           Supprimer
                       </a>
                   ";
                }
                // line 71
                echo "               </span>
            </div>
            ";
                // line 74
                echo "
        ";
                // line 80
                echo "
            <p class='content'>

                ";
                // line 83
                if (($this->getAttribute($this->getContext($context, "article"), "image") != "")) {
                    // line 84
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\" class='imageDev'>
                ";
                }
                // line 86
                echo "
                ";
                // line 87
                echo twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "content"), 500, true, " ... ");
                echo "
                <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"), "idAr" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                echo "\" title='Plus de détails'>
                    <span class='back'>lire la suite</span>
                </a>

            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
    ";
        } else {
            // line 96
            echo "
            <div class=\"erreur\">
                Pas d'article correspondant à cette catégorie !
            </div>   

    ";
        }
        // line 102
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
        return array (  256 => 102,  248 => 96,  244 => 94,  228 => 87,  225 => 86,  215 => 83,  210 => 80,  207 => 74,  194 => 67,  175 => 60,  124 => 43,  65 => 20,  174 => 77,  165 => 73,  113 => 31,  90 => 38,  155 => 74,  148 => 52,  137 => 65,  126 => 60,  104 => 29,  205 => 96,  185 => 64,  178 => 61,  134 => 48,  127 => 56,  110 => 43,  70 => 27,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 30,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 65,  119 => 49,  102 => 32,  71 => 19,  63 => 21,  59 => 26,  38 => 8,  94 => 28,  85 => 25,  75 => 25,  68 => 14,  56 => 26,  87 => 37,  21 => 2,  26 => 6,  93 => 40,  88 => 43,  46 => 21,  44 => 10,  201 => 92,  196 => 90,  171 => 59,  163 => 72,  158 => 55,  151 => 67,  142 => 50,  136 => 56,  121 => 42,  117 => 52,  62 => 33,  49 => 19,  25 => 3,  24 => 4,  232 => 88,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 63,  181 => 49,  172 => 43,  169 => 60,  166 => 57,  161 => 56,  156 => 68,  146 => 18,  138 => 63,  135 => 57,  128 => 49,  118 => 19,  105 => 41,  100 => 42,  97 => 41,  91 => 44,  89 => 37,  84 => 73,  78 => 21,  76 => 28,  67 => 26,  58 => 35,  34 => 6,  27 => 4,  31 => 6,  28 => 3,  19 => 1,  79 => 35,  72 => 24,  69 => 30,  47 => 23,  40 => 17,  37 => 16,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 49,  131 => 47,  123 => 47,  120 => 40,  115 => 55,  111 => 46,  108 => 36,  101 => 28,  98 => 31,  96 => 37,  83 => 36,  74 => 14,  66 => 22,  55 => 15,  52 => 23,  50 => 24,  43 => 11,  41 => 10,  35 => 7,  32 => 6,  29 => 5,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 58,  164 => 59,  162 => 78,  154 => 58,  149 => 19,  147 => 58,  144 => 64,  141 => 64,  133 => 64,  130 => 41,  125 => 44,  122 => 50,  116 => 41,  112 => 42,  109 => 34,  106 => 44,  103 => 32,  99 => 40,  95 => 39,  92 => 21,  86 => 36,  82 => 36,  80 => 19,  73 => 27,  64 => 17,  60 => 26,  57 => 25,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 17,  36 => 16,  33 => 4,  30 => 5,);
    }
}
