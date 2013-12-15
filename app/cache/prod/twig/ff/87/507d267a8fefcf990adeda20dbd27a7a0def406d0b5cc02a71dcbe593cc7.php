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
";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 23
    public function block_catSelect($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("catSelect", $context, $blocks);
        echo "
";
    }

    // line 29
    public function block_leftCont($context, array $blocks = array())
    {
        // line 30
        echo "    ";
        if (isset($context["macroVoletGauche"])) { $_macroVoletGauche_ = $context["macroVoletGauche"]; } else { $_macroVoletGauche_ = null; }
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if (isset($context["lMenus"])) { $_lMenus_ = $context["lMenus"]; } else { $_lMenus_ = null; }
        echo $_macroVoletGauche_->getvoletGauche($_articles_, $_lMenus_);
        echo "
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div id=\"devAdmin\">

        <table>
            <thead>
            <tr>
             <th>Articles</th> <th>Catégories</th> <th colspan=\"2\">Sous-catégories</th>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\">Ajouter un article</a></td>
                <td><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("article_dev_addCategory");
        echo "\">Ajouter une catégorie</a></td>
                <td colspan=\"2\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("article_dev_addSubCategory");
        echo "\">Ajouter une sous-catégorie</a></td>
            </tr>
            <tr>
                <th></th>
                <td><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Editer une catégorie</a></td>
                <td colspan=\"2\"><a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Editer une sous-catégorie</a></td>
            </tr>
            <tr>
                <th></th>
                <td><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Supprimer une catégorie</a></td>
                <td colspan=\"2\"><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\">Supprimer une sous-catégorie</a></td>
            </tr>
            <tr>
                <th>Les menus de gauche</th>
                <td><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("article_dev_LMenu");
        echo "\">Editer/Supprimer les menus</a></td>
                <td><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("article_dev_addLMenu");
        echo "\">Ajouter un menu</a></td>
                <td><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("article_dev_addLMenuElt");
        echo "\">Ajouter un sous-menu</a></td>
            </tr>
            <tr>
                <th>Les questions</th>
                <td colspan=\"3\"><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("article_dev_addQuestion");
        echo "\">Ajouter une question</a></td>
            </tr>
            <tr>
                <th>Les propositions de réponses</th>
                <td colspan=\"3\"><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("article_dev_addProposal");
        echo "\">Ajouter une proposition de réponse</a></td>
            </tr>
            <tr>
                <th>Consignes d'administration</th>
                <td colspan=\"3\"><a href=\"";
        // line 78
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
        return array (  116 => 54,  68 => 29,  61 => 24,  230 => 96,  199 => 80,  179 => 72,  167 => 78,  159 => 64,  153 => 70,  139 => 56,  119 => 48,  113 => 46,  99 => 40,  87 => 36,  79 => 32,  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 64,  134 => 43,  131 => 60,  122 => 37,  117 => 36,  102 => 28,  92 => 25,  72 => 30,  51 => 13,  48 => 7,  35 => 8,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 59,  112 => 32,  96 => 25,  71 => 30,  55 => 15,  114 => 22,  109 => 50,  106 => 20,  101 => 48,  85 => 22,  77 => 12,  39 => 9,  110 => 20,  65 => 27,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 18,  44 => 9,  43 => 7,  57 => 11,  50 => 22,  47 => 15,  38 => 6,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 56,  155 => 55,  142 => 65,  136 => 44,  133 => 54,  130 => 42,  120 => 55,  75 => 25,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 86,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 31,  105 => 49,  100 => 27,  91 => 77,  89 => 16,  84 => 35,  82 => 70,  78 => 40,  76 => 19,  69 => 17,  67 => 15,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 8,  34 => 5,  27 => 4,  31 => 5,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 78,  187 => 76,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 74,  157 => 48,  149 => 18,  146 => 66,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 44,  104 => 28,  97 => 6,  93 => 38,  90 => 21,  81 => 34,  70 => 23,  66 => 23,  62 => 26,  59 => 13,  56 => 12,  52 => 10,  49 => 19,  45 => 13,  41 => 10,  37 => 11,  33 => 4,  30 => 3,);
    }
}
