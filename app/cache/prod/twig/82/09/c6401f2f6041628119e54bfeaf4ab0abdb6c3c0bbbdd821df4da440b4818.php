<?php

/* ArticleDevBundle:CategoryDev:allCategories.html.twig */
class __TwigTemplate_8209c6401f2f6041628119e54bfeaf4ab0abdb6c3c0bbbdd821df4da440b4818 extends Twig_Template
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
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
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
            if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_menus_);
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 34
                echo "                ";
                if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                if (($this->getAttribute($_men_, "labelCategory") != "Accueil")) {
                    // line 35
                    echo "                
                    <li><a href=\"";
                    // line 36
                    echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                    echo "\">";
                    if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_men_, "labelCategory"), "html", null, true);
                    echo "</a>
                        <span class=\"adminArticle\">
                            <a href='";
                    // line 38
                    if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editCategory", array("id" => $this->getAttribute($_men_, "id"))), "html", null, true);
                    echo "' title=\"Editer la catégorie: ";
                    if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_men_, "labelCategory"), "html", null, true);
                    echo "\">
                                <font color='black'><u>Editer</u></font>
                            </a>  - 
                            <a href=\"";
                    // line 41
                    if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delCategory", array("id" => $this->getAttribute($_men_, "id"))), "html", null, true);
                    echo "\" title=\"Supprimer la catégorie: ";
                    if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_men_, "labelCategory"), "html", null, true);
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
                if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_men_, "subCategories"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 49
                    echo "
                    ";
                    // line 50
                    if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                    if (($this->getAttribute($_smen_, "labelSubCategory") != "accueil")) {
                        // line 51
                        echo "                        <li>
                            <a href=\"";
                        // line 52
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($_smen_, "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 53
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_smen_, "labelSubCategory"), "html", null, true);
                        echo "
                            </a>
                            <span class=\"adminArticle\">
                                <a href='";
                        // line 56
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editSubCategory", array("id" => $this->getAttribute($_smen_, "id"))), "html", null, true);
                        echo "' title=\"Editer la sous-catégorie: ";
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_smen_, "labelSubCategory"), "html", null, true);
                        echo "\">
                                    <font color='blue'><i>Editer</i></font>
                                </a>  - 
                                <a href=\"";
                        // line 59
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delSubCategory", array("id" => $this->getAttribute($_smen_, "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la sous-catégorie: ";
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_smen_, "labelSubCategory"), "html", null, true);
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
        return array (  125 => 48,  184 => 61,  174 => 65,  145 => 50,  128 => 45,  123 => 44,  95 => 35,  86 => 34,  83 => 34,  263 => 94,  259 => 92,  246 => 86,  241 => 85,  238 => 84,  228 => 82,  225 => 81,  220 => 78,  217 => 72,  191 => 64,  175 => 57,  164 => 54,  161 => 59,  151 => 56,  144 => 53,  74 => 26,  132 => 49,  116 => 41,  103 => 27,  94 => 36,  172 => 56,  169 => 55,  73 => 27,  68 => 27,  230 => 96,  199 => 80,  179 => 60,  167 => 56,  159 => 64,  153 => 62,  139 => 52,  119 => 48,  113 => 46,  99 => 38,  87 => 35,  79 => 31,  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 46,  131 => 45,  122 => 43,  117 => 42,  102 => 38,  92 => 25,  72 => 29,  51 => 22,  48 => 7,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 100,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 51,  147 => 60,  127 => 52,  112 => 32,  96 => 25,  71 => 17,  55 => 22,  114 => 22,  109 => 41,  106 => 28,  101 => 19,  85 => 33,  77 => 12,  39 => 7,  110 => 20,  65 => 27,  63 => 13,  26 => 6,  98 => 38,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  43 => 11,  57 => 14,  50 => 22,  47 => 22,  38 => 9,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 62,  155 => 55,  142 => 59,  136 => 51,  133 => 50,  130 => 49,  120 => 40,  75 => 25,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 41,  108 => 41,  105 => 40,  100 => 46,  91 => 77,  89 => 41,  84 => 35,  82 => 32,  78 => 33,  76 => 19,  69 => 20,  67 => 25,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 16,  34 => 5,  27 => 4,  31 => 7,  28 => 5,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 65,  196 => 65,  193 => 78,  187 => 76,  183 => 59,  180 => 58,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 54,  149 => 18,  146 => 41,  140 => 49,  137 => 18,  129 => 48,  124 => 35,  121 => 46,  118 => 44,  115 => 52,  111 => 51,  107 => 41,  104 => 40,  97 => 37,  93 => 36,  90 => 36,  81 => 34,  70 => 28,  66 => 23,  62 => 26,  59 => 25,  56 => 25,  52 => 10,  49 => 13,  45 => 20,  41 => 10,  37 => 11,  33 => 15,  30 => 5,);
    }
}
