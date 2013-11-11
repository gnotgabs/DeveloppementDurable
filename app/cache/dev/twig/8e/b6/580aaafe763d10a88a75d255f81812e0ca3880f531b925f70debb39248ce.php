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
    <li>
        <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => (isset($context["idSc"]) ? $context["idSc"] : $this->getContext($context, "idSc")), "idAr" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
        echo "\" title=\"Back to item 2\">
            Article N° ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"), "html", null, true);
        echo "
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        // line 30
        echo "    <h1>Le développement durable</h1>
    <p class='titleDev'>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "</p>
    ";
        // line 33
        echo "    
";
        // line 39
        echo "    <p class='content'>
        ";
        // line 40
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image") != "")) {
            // line 41
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "\" class='imageDevSup'>
        ";
        }
        // line 43
        echo "        ";
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content");
        echo "
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_homepage", array("id" => (isset($context["idSc"]) ? $context["idSc"] : $this->getContext($context, "idSc")))), "html", null, true);
        echo "\" title=\"retour à la page précédente\">
            <span class='back'>«« Retour</span>
        </a>
    </p>
    ";
        // line 48
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "link") != "")) {
            // line 49
            echo "        <p class='linkDev'>
            Pour plus d'informations, <a href='";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "link"), "html", null, true);
            echo "'><span class='details'>cliquez ici.</span></a>
        </p>
    ";
        }
        // line 53
        echo "        
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
        return array (  113 => 53,  107 => 50,  104 => 49,  102 => 48,  95 => 44,  90 => 43,  82 => 41,  80 => 40,  77 => 39,  74 => 33,  70 => 31,  67 => 30,  64 => 29,  56 => 24,  52 => 23,  47 => 21,  42 => 20,  35 => 16,  32 => 15,  27 => 5,);
    }
}
