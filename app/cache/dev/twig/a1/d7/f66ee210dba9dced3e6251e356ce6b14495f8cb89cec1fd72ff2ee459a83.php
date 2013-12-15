<?php

/* ArticleDevBundle:ProposalDev:editProposal.html.twig */
class __TwigTemplate_a1d7f66ee210dba9dced3e6251e356ce6b14495f8cb89cec1fd72ff2ee459a83 extends Twig_Template
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
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Retour aux catégories et sous-catégorie\">
            Edition proposition
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
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
    <div class=\"well\">
        <p class=\"title\">Edition de la question: <span class=\"editSup\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "pEntitled"), "html", null, true);
        echo "</span></p>
        <form action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editProposal", array("id" => $this->getAttribute($this->getContext($context, "proposal"), "id"))), "html", null, true);
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formCateg\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            <div>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pEntitled"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Votre proposition : "));
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pEntitled"), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "pEntitled"), 'widget', array("attr" => array("id" => "formCat")));
        echo "                
            </div>
            <div>
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "answer"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Bonne réponse(1-0) : "));
        echo "
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "answer"), 'errors');
        echo "
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "answer"), 'widget', array("attr" => array("id" => "formCat")));
        echo "                
            </div>
            <div>
                ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "question"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Question associée :"));
        echo "
                ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "question"), 'errors');
        echo "
                ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "question"), 'widget', array("attr" => array("id" => "formCat")));
        echo "                
            </div>
            <div>
                ";
        // line 48
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
        return "ArticleDevBundle:ProposalDev:editProposal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 48,  120 => 45,  116 => 44,  112 => 43,  106 => 40,  102 => 39,  98 => 38,  92 => 35,  88 => 34,  84 => 33,  79 => 31,  73 => 30,  69 => 29,  63 => 27,  60 => 26,  53 => 23,  50 => 22,  41 => 10,  35 => 8,  32 => 7,  27 => 4,);
    }
}
