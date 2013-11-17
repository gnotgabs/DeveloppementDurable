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
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : null));
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 1));
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
            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory") != "accueil")) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory"), "html", null, true);
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articles"]) ? $context["articles"] : null), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 47
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory") != "accueil")) {
                // line 48
                echo "              -  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory"), "html", null, true);
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
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : null)) != 0)) {
            // line 56
            echo "
        ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 58
                echo "            <div class='titleDev'>
                ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                echo "
                <span class=\"adminArticle\">
                   ";
                // line 61
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 62
                    echo "                       <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
                    echo "' title=\"Editer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\">
                           Editer
                       </a>  - 
                       <a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
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
                if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image") != "")) {
                    // line 82
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
                    echo "\" class='imageDev'>
                ";
                }
                // line 84
                echo "
                ";
                // line 85
                echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "content"), 500, true, " ... ");
                echo "
                <a href=\"";
                // line 86
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "id"), "idAr" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
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
        return array (  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 45,  77 => 34,  74 => 27,  65 => 20,  155 => 68,  152 => 67,  150 => 66,  205 => 96,  185 => 84,  178 => 62,  139 => 62,  134 => 60,  127 => 46,  110 => 43,  83 => 36,  70 => 27,  53 => 16,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 47,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 55,  143 => 62,  131 => 52,  119 => 41,  102 => 28,  71 => 26,  63 => 20,  59 => 32,  47 => 15,  38 => 16,  94 => 36,  85 => 25,  79 => 33,  75 => 32,  68 => 14,  56 => 25,  50 => 15,  29 => 3,  87 => 36,  72 => 24,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  35 => 15,  43 => 11,  41 => 9,  201 => 92,  196 => 69,  171 => 59,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 52,  101 => 32,  66 => 27,  62 => 14,  49 => 22,  32 => 6,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 56,  156 => 70,  146 => 18,  138 => 61,  135 => 48,  128 => 58,  118 => 48,  115 => 43,  111 => 30,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 27,  89 => 37,  84 => 35,  78 => 21,  76 => 32,  69 => 25,  67 => 26,  58 => 35,  40 => 12,  34 => 6,  27 => 3,  31 => 5,  28 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 65,  182 => 66,  176 => 61,  173 => 78,  168 => 58,  164 => 57,  162 => 59,  154 => 54,  149 => 19,  147 => 58,  144 => 64,  141 => 50,  133 => 55,  130 => 59,  125 => 57,  122 => 51,  116 => 41,  112 => 42,  109 => 44,  106 => 33,  103 => 32,  99 => 27,  95 => 39,  92 => 21,  86 => 36,  82 => 70,  80 => 35,  73 => 19,  64 => 25,  60 => 19,  57 => 11,  54 => 25,  51 => 14,  48 => 23,  45 => 22,  42 => 7,  39 => 9,  36 => 16,  33 => 15,  30 => 5,);
    }
}
