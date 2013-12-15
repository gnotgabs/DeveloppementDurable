<?php

/* ArticleDevBundle:LMenuDev:delLMenu.html.twig */
class __TwigTemplate_fd4395fc4cac4151372e6e3bd586c891cb19d9062eb9d5058b118c9852fc9acc extends Twig_Template
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
        echo "
    ";
        // line 10
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
 
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Retour aux catégories et sous-catégories\">
            Suppression question
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 26
    public function block_leftCont($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer l'élément <span class=\"editSup\">« ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lMenu"), "title"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delLMenu", array("id" => $this->getAttribute($this->getContext($context, "lMenu"), "id"))), "html", null, true);
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("article_dev_LMenu");
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour à l'administration
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:LMenuDev:delLMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 43,  100 => 37,  95 => 35,  89 => 34,  85 => 33,  79 => 31,  76 => 30,  69 => 27,  66 => 26,  59 => 21,  56 => 20,  47 => 13,  41 => 10,  38 => 9,  35 => 8,  30 => 5,  28 => 4,);
    }
}
