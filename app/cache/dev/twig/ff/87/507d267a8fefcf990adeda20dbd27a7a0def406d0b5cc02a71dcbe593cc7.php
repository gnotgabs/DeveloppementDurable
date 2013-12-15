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
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
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
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
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
        return array (  162 => 78,  155 => 74,  148 => 70,  141 => 66,  137 => 65,  133 => 64,  126 => 60,  122 => 59,  115 => 55,  111 => 54,  104 => 50,  100 => 49,  96 => 48,  79 => 35,  76 => 34,  69 => 30,  66 => 29,  59 => 24,  56 => 23,  49 => 19,  46 => 18,  39 => 9,  36 => 8,  31 => 5,  29 => 4,);
    }
}
