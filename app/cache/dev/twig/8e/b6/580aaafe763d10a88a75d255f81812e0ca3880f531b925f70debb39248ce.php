<?php

/* ArticleDevBundle:ArticleDev:article.html.twig */
class __TwigTemplate_8eb6580aaafe763d10a88a75d255f81812e0ca3880f531b925f70debb39248ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        echo "
";
    }

    // line 20
    public function block_arianne($context, array $blocks = array())
    {
        echo "    
    ";
        // line 21
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " 
    <li><a href=\"#\" title=\"Back to item 2\">Article N° ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
        echo "</a><span class=\"end\">&nbsp;</span></li>
";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "    <h1>Le développement durable</h1>
    <h3>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</h3>
    ";
        // line 29
        echo "    
";
        // line 35
        echo "    <p>
        ";
        // line 36
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content");
        echo "
        <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_homepage", array("id" => (isset($context["idSc"]) ? $context["idSc"] : $this->getContext($context, "idSc")))), "html", null, true);
        echo "\" title=\"retour à la page précédente\"><i>«« Retour</i></a>
    </p>
        
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 37,  73 => 36,  70 => 35,  67 => 29,  63 => 27,  60 => 26,  57 => 25,  51 => 22,  47 => 21,  42 => 20,  35 => 16,  32 => 15,  27 => 5,);
    }
}
