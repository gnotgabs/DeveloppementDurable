<?php

/* ArticleDevBundle:LMenuDev:lMenus.html.twig */
class __TwigTemplate_d580f3126cf933b8bd09a036bde7a2564e5009a8b3a695709ab6f4adffbfce22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'leftCont' => array($this, 'block_leftCont'),
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
        // line 5
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_arianne($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Toutes les catégories et sous-catégories\">
            Catégories et Sous-catégories
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 30
    public function block_leftCont($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "        <div class=\"good\">

            <ul class='men'>
                
            ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lMenus"));
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 43
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "men"), "title"), "html", null, true);
                echo "</a>
                        <span class=\"adminArticle\">
                            <a href='";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editLMenu", array("id" => $this->getAttribute($this->getContext($context, "men"), "id"))), "html", null, true);
                echo "' title=\"Editer la catégorie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "men"), "title"), "html", null, true);
                echo "\">
                                <font color='black'><u>Editer</u></font>
                            </a>  - 
                            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delLMenu", array("id" => $this->getAttribute($this->getContext($context, "men"), "id"))), "html", null, true);
                echo "\" title=\"Supprimer la catégorie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "men"), "title"), "html", null, true);
                echo "\">
                                <font color='black'><u>Supprimer</u></font>
                            </a>
                        </span>
                        <ul class='smen'>

                ";
                // line 54
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "men"), "lMenuElts"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 55
                    echo "
                    ";
                    // line 56
                    if (($this->getAttribute($this->getContext($context, "smen"), "labelElt") != "accueil")) {
                        // line 57
                        echo "                        <li>
                            <a href=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getContext($context, "smen"), "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 59
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "smen"), "labelElt"), "html", null, true);
                        echo "
                            </a>
                            <span class=\"adminArticle\">
                                <a href='";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editLMenuElt", array("id" => $this->getAttribute($this->getContext($context, "smen"), "id"))), "html", null, true);
                        echo "' title=\"Editer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "smen"), "labelElt"), "html", null, true);
                        echo "\">
                                    <font color='blue'><i>Editer</i></font>
                                </a>  - 
                                <a href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delLMenuElt", array("id" => $this->getAttribute($this->getContext($context, "smen"), "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "smen"), "labelElt"), "html", null, true);
                        echo "\">
                                    <font color='red'><i>Supprimer</i></font>
                                </a>
                            </span>
                        </li>
                    ";
                    }
                    // line 71
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "
                </ul></li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['men'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </ul>

        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:LMenuDev:lMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 65,  81 => 37,  290 => 107,  284 => 103,  276 => 97,  261 => 92,  233 => 81,  206 => 72,  197 => 69,  188 => 64,  167 => 64,  153 => 59,  129 => 57,  77 => 33,  256 => 102,  248 => 96,  244 => 94,  228 => 87,  225 => 86,  215 => 76,  210 => 80,  207 => 74,  194 => 67,  175 => 60,  124 => 55,  65 => 23,  174 => 77,  165 => 73,  113 => 49,  90 => 38,  155 => 74,  148 => 52,  137 => 65,  126 => 60,  104 => 29,  205 => 96,  185 => 63,  178 => 61,  134 => 48,  127 => 56,  110 => 43,  70 => 29,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 88,  247 => 78,  241 => 84,  229 => 73,  220 => 79,  214 => 69,  177 => 77,  140 => 55,  132 => 58,  107 => 30,  61 => 18,  273 => 96,  269 => 95,  254 => 92,  243 => 85,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 55,  119 => 52,  102 => 41,  71 => 19,  63 => 30,  59 => 21,  38 => 9,  94 => 44,  85 => 33,  75 => 25,  68 => 24,  56 => 24,  87 => 37,  21 => 2,  26 => 6,  93 => 43,  88 => 36,  46 => 21,  44 => 11,  201 => 92,  196 => 75,  171 => 59,  163 => 72,  158 => 55,  151 => 67,  142 => 62,  136 => 59,  121 => 42,  117 => 52,  62 => 33,  49 => 19,  25 => 3,  24 => 4,  232 => 88,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 68,  190 => 86,  186 => 51,  183 => 63,  181 => 69,  172 => 43,  169 => 60,  166 => 57,  161 => 71,  156 => 68,  146 => 59,  138 => 56,  135 => 57,  128 => 52,  118 => 19,  105 => 43,  100 => 37,  97 => 41,  91 => 44,  89 => 42,  84 => 28,  78 => 27,  76 => 36,  67 => 30,  58 => 20,  34 => 6,  27 => 4,  31 => 6,  28 => 4,  19 => 1,  79 => 31,  72 => 24,  69 => 27,  47 => 13,  40 => 17,  37 => 16,  22 => 2,  246 => 90,  157 => 65,  145 => 46,  139 => 49,  131 => 47,  123 => 50,  120 => 54,  115 => 45,  111 => 46,  108 => 36,  101 => 45,  98 => 36,  96 => 38,  83 => 38,  74 => 26,  66 => 31,  55 => 19,  52 => 23,  50 => 22,  43 => 11,  41 => 10,  35 => 8,  32 => 7,  29 => 5,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 62,  176 => 64,  173 => 71,  168 => 73,  164 => 67,  162 => 78,  154 => 58,  149 => 19,  147 => 56,  144 => 64,  141 => 64,  133 => 51,  130 => 41,  125 => 51,  122 => 50,  116 => 48,  112 => 46,  109 => 48,  106 => 42,  103 => 32,  99 => 40,  95 => 35,  92 => 39,  86 => 38,  82 => 37,  80 => 34,  73 => 35,  64 => 29,  60 => 26,  57 => 26,  54 => 25,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 17,  36 => 16,  33 => 4,  30 => 5,);
    }
}
