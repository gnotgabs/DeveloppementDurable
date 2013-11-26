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
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
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
        return array (  120 => 56,  113 => 52,  109 => 51,  102 => 47,  98 => 46,  91 => 42,  87 => 41,  83 => 40,  66 => 27,  63 => 26,  56 => 23,  53 => 22,  46 => 18,  43 => 17,  36 => 8,  33 => 7,  28 => 4,);
    }
}
