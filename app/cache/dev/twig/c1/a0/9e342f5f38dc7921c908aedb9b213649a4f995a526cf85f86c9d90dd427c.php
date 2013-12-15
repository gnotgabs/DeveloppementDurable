<?php

/* ArticleDevBundle:LMenuDev:addLMenu.html.twig */
class __TwigTemplate_c1a09e342f5f38dc7921c908aedb9b213649a4f995a526cf85f86c9d90dd427c extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("article_dev_addCategory");
        echo "\" title=\"Ajouter une sous-catégorie\">
            Ajout de menu
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

    // line 28
    public function block_leftCont($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">
            Ajout des éléments du volet de gauche ( Menu )
            
            <span class=\"adminArticle\">
               <a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("article_dev_LMenu");
        echo "' title=\"Edition et suppression des menus et sous-menus\">
                   <font color='blue'><u>Editer / Supprimer menus et sous-menus</u></font>
               </a>
            </span>
        </p>
        <form action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("article_dev_addLMenu");
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formCateg\">
            ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            <div>
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Titre du menu: "));
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'errors');
        echo "
                ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'widget', array("attr" => array("id" => "formCat")));
        echo "                
            </div>
            <div>
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
                <input type=\"submit\" class='btn btn-primary' value=\"Enrégistrer\">
                <input type=\"reset\" class='btn btn-second' value=\"Annuler\">
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:LMenuDev:addLMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 52,  113 => 49,  109 => 48,  105 => 47,  100 => 45,  94 => 44,  86 => 39,  76 => 33,  73 => 32,  66 => 29,  63 => 28,  56 => 24,  53 => 23,  44 => 11,  38 => 9,  35 => 8,  30 => 5,  28 => 4,);
    }
}
