<?php

/* ArticleDevBundle:CategoryDev:allCategories.html.twig */
class __TwigTemplate_d636c552a6190d5bb8d978911d7d9117fde68f33f9f26c02ff7a4e36fea0ec1b extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Toutes les catégories et sous-catégories\">
            Catégories et Sous-catégories
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : null));
        echo "
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "        <div class=\"good\">

            <ul class='men'>
                
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute((isset($context["men"]) ? $context["men"] : null), "labelCategory") != "Accueil")) {
                    // line 35
                    echo "                
                    <li><a href=\"";
                    // line 36
                    echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : null), "labelCategory"), "html", null, true);
                    echo "</a>
                        <span class=\"adminArticle\">
                            <a href='";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editCategory", array("id" => $this->getAttribute((isset($context["men"]) ? $context["men"] : null), "id"))), "html", null, true);
                    echo "' title=\"Editer la catégorie: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : null), "labelCategory"), "html", null, true);
                    echo "\">
                                <font color='black'><u>Editer</u></font>
                            </a>  - 
                            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delCategory", array("id" => $this->getAttribute((isset($context["men"]) ? $context["men"] : null), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer la catégorie: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : null), "labelCategory"), "html", null, true);
                    echo "\">
                                <font color='black'><u>Supprimer</u></font>
                            </a>
                        </span>
                        
                ";
                }
                // line 46
                echo "<ul class='smen'>

                ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["men"]) ? $context["men"] : null), "subCategories"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 49
                    echo "
                    ";
                    // line 50
                    if (($this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "labelSubCategory") != "accueil")) {
                        // line 51
                        echo "                        <li>
                            <a href=\"";
                        // line 52
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "labelSubCategory"), "html", null, true);
                        echo "
                            </a>
                            <span class=\"adminArticle\">
                                <a href='";
                        // line 56
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editSubCategory", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "id"))), "html", null, true);
                        echo "' title=\"Editer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "labelSubCategory"), "html", null, true);
                        echo "\">
                                    <font color='blue'><i>Editer</i></font>
                                </a>  - 
                                <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delSubCategory", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "labelSubCategory"), "html", null, true);
                        echo "\">
                                    <font color='red'><i>Supprimer</i></font>
                                </a>
                            </span>
                        </li>
                    ";
                    }
                    // line 65
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "
                </ul></li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['men'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </ul>

        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:CategoryDev:allCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  175 => 66,  167 => 64,  157 => 65,  153 => 59,  129 => 50,  96 => 40,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 45,  77 => 33,  74 => 27,  65 => 20,  155 => 68,  152 => 67,  150 => 66,  120 => 49,  113 => 52,  205 => 96,  185 => 70,  178 => 62,  139 => 54,  134 => 60,  127 => 46,  110 => 43,  83 => 35,  70 => 29,  53 => 23,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 53,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 55,  143 => 55,  131 => 52,  119 => 46,  102 => 28,  71 => 26,  63 => 27,  59 => 32,  47 => 15,  38 => 9,  94 => 36,  85 => 34,  79 => 33,  75 => 25,  68 => 28,  56 => 25,  50 => 22,  29 => 3,  87 => 37,  72 => 24,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  35 => 8,  43 => 11,  41 => 10,  201 => 92,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 50,  121 => 46,  117 => 52,  101 => 41,  66 => 27,  62 => 14,  49 => 22,  32 => 7,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 43,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 59,  138 => 56,  135 => 48,  128 => 52,  118 => 48,  115 => 45,  111 => 44,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 42,  89 => 35,  84 => 35,  78 => 21,  76 => 33,  69 => 25,  67 => 26,  58 => 35,  40 => 12,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 65,  182 => 66,  176 => 61,  173 => 71,  168 => 58,  164 => 67,  162 => 59,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 51,  130 => 59,  125 => 51,  122 => 51,  116 => 48,  112 => 46,  109 => 44,  106 => 42,  103 => 32,  99 => 27,  95 => 38,  92 => 21,  86 => 36,  82 => 70,  80 => 34,  73 => 19,  64 => 25,  60 => 26,  57 => 11,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 16,  33 => 15,  30 => 5,);
    }
}
