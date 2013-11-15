<?php

/* ArticleDevBundle:ArticleDev:admin.html.twig */
class __TwigTemplate_2e40cc7968eb82897b56b12dd9ab8651a8897338f18f221d6ec60d8309366ac7 extends Twig_Template
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
";
    }

    // line 17
    public function block_menu($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        echo "
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div id=\"devAdmin\">
        <div id=\"article\">
            <ul class=\"title\">Articles</ul>
            <ul>
                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\">Ajouter un article</a></li>
                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("article_dev_modifArticle");
        echo "\">Modifier un article</a></li>
                <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("article_dev_delArticle");
        echo "\">Supprimer un article</a></li>
            </ul>
        </div>
        <div id=\"categorie\">
            <ul class=\"title\">Catégories</ul>
            <ul>
                <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("article_dev_addCategory");
        echo "\">Ajouter une catégorie</a></li>
                <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("article_dev_modifCategory");
        echo "\">Modifier une catégorie</a></li>
                <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("article_dev_delCategory");
        echo "\">Supprimer une catégorie</a></li>
            </ul>
        </div>
        <div id=\"sousCategorie\">
            <ul class=\"title\">Sous-catégories</ul>
            <ul>
                <li><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("article_dev_addSubCategory");
        echo "\">Ajouter une sous-catégorie</a></li>
                <li><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("article_dev_modifSubCategory");
        echo "\">Modifier une sous-catégorie</a></li>
                <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("article_dev_delSubCategory");
        echo "\">Supprimer une sous-catégorie</a></li>
            </ul>
        </div>
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
        return array (  106 => 45,  102 => 44,  98 => 43,  89 => 37,  85 => 36,  81 => 35,  72 => 29,  68 => 28,  64 => 27,  55 => 22,  52 => 21,  45 => 18,  42 => 17,  35 => 8,  32 => 7,  27 => 4,);
    }
}
