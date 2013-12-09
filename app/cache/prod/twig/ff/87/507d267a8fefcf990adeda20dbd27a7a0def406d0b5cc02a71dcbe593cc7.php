<?php

/* ArticleDevBundle:ArticleDev:admin.html.twig */
class __TwigTemplate_ff87507d267a8fefcf990adeda20dbd27a7a0def406d0b5cc02a71dcbe593cc7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'catSelect' => array($this, 'block_catSelect'),
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
";
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 22
    public function block_catSelect($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("catSelect", $context, $blocks);
        echo "
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div id=\"devAdmin\">

        <table>
            <thead>
            <tr>
             <th>Articles</th> <th>Catégories</th> <th>Sous-catégories</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\">Ajouter un article</a></td>
                <td><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("article_dev_addCategory");
        echo "\">Ajouter une catégorie</a></td>
                <td><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("article_dev_addSubCategory");
        echo "\">Ajouter une sous-catégorie</a></td>
            </tr>
            <tr>
                <th></th>
                <td><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Editer une catégorie</a></td>
                <td><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Editer une sous-catégorie</a></td>
            </tr>
            <tr>
                <th></th>
                <td><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Supprimer une catégorie</a></td>
                <td><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Supprimer une sous-catégorie</a></td>
            </tr>
            <tr>
                <th rowspan=\"2\">Consignes d'administration</th>
                <td colspan=\"3\"><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("article_dev_guideAdmin");
        echo "\">Accéder au guide administrateur</a></td>
            </tr>
            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 27,  230 => 96,  199 => 80,  179 => 72,  167 => 68,  159 => 64,  153 => 62,  139 => 56,  119 => 48,  113 => 46,  99 => 40,  87 => 36,  79 => 32,  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 56,  117 => 36,  102 => 28,  92 => 25,  72 => 30,  51 => 13,  48 => 7,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 52,  112 => 32,  96 => 25,  71 => 17,  55 => 22,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 40,  77 => 12,  39 => 7,  110 => 20,  65 => 26,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 18,  44 => 9,  43 => 17,  57 => 11,  50 => 22,  47 => 15,  38 => 6,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 56,  155 => 55,  142 => 52,  136 => 44,  133 => 54,  130 => 42,  120 => 40,  75 => 25,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 86,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 31,  105 => 31,  100 => 46,  91 => 77,  89 => 41,  84 => 21,  82 => 70,  78 => 40,  76 => 19,  69 => 17,  67 => 15,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 8,  34 => 5,  27 => 4,  31 => 7,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 78,  187 => 76,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 24,  118 => 36,  115 => 52,  111 => 51,  107 => 44,  104 => 47,  97 => 6,  93 => 42,  90 => 21,  81 => 14,  70 => 23,  66 => 23,  62 => 26,  59 => 13,  56 => 12,  52 => 10,  49 => 9,  45 => 13,  41 => 10,  37 => 11,  33 => 7,  30 => 3,);
    }
}
