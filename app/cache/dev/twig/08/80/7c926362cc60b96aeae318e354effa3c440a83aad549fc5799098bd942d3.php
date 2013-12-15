<?php

/* ArticleDevBundle:QuestionDev:delQuestion.html.twig */
class __TwigTemplate_08807c926362cc60b96aeae318e354effa3c440a83aad549fc5799098bd942d3 extends Twig_Template
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
        echo "
    ";
        // line 9
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
 
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Retour aux catégories et sous-catégories\">
            Suppression question
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer la question <span class=\"editSup\">« ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "question"), "entitled"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delQuestion", array("id" => $this->getAttribute($this->getContext($context, "question"), "id"))), "html", null, true);
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("article_dev_admin");
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour à l'administration
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:QuestionDev:delQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 36,  87 => 30,  82 => 28,  76 => 27,  72 => 26,  66 => 24,  63 => 23,  56 => 20,  53 => 19,  44 => 12,  38 => 9,  35 => 8,  32 => 7,  27 => 4,);
    }
}
