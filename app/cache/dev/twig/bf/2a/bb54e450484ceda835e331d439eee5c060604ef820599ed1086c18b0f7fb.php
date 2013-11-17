<?php

/* ArticleDevBundle::adminLayout.html.twig */
class __TwigTemplate_bf2abb54e450484ceda835e331d439eee5c060604ef820599ed1086c18b0f7fb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 11
    public function block_arianne($context, array $blocks = array())
    {
        // line 12
        echo "   ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
       <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("article_dev_admin");
        echo "\" title=\"TX52 Administration\">
           Administration
       </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 21
    public function block_body($context, array $blocks = array())
    {
        // line 22
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle::adminLayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  44 => 14,  38 => 12,  30 => 5,  160 => 63,  153 => 59,  149 => 58,  145 => 57,  139 => 54,  135 => 53,  131 => 52,  125 => 49,  121 => 48,  117 => 47,  111 => 44,  107 => 43,  103 => 42,  97 => 39,  93 => 38,  89 => 37,  83 => 34,  79 => 33,  75 => 32,  70 => 30,  63 => 27,  60 => 26,  53 => 21,  50 => 22,  41 => 10,  35 => 11,  32 => 7,  27 => 4,);
    }
}
