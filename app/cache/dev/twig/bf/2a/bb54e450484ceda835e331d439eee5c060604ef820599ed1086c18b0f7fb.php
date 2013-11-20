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
            'subCat' => array($this, 'block_subCat'),
            'catSelect' => array($this, 'block_catSelect'),
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
    ";
        // line 13
        $this->displayBlock('subCat', $context, $blocks);
        // line 15
        echo "    <li>
       <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("article_dev_admin");
        echo "\" title=\"TX52 Administration\">
           Administration
       </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 13
    public function block_subCat($context, array $blocks = array())
    {
        // line 14
        echo "    ";
    }

    // line 23
    public function block_catSelect($context, array $blocks = array())
    {
        echo "  -  Administration ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo "    ";
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
        return array (  75 => 25,  72 => 24,  66 => 23,  62 => 14,  59 => 13,  50 => 16,  47 => 15,  40 => 12,  37 => 11,  196 => 75,  189 => 71,  185 => 70,  181 => 69,  175 => 66,  171 => 65,  167 => 64,  161 => 61,  157 => 60,  153 => 59,  147 => 56,  143 => 55,  139 => 54,  133 => 51,  129 => 50,  125 => 49,  119 => 46,  115 => 45,  111 => 44,  106 => 42,  100 => 41,  96 => 40,  90 => 38,  87 => 37,  80 => 34,  77 => 33,  65 => 20,  61 => 18,  54 => 14,  48 => 13,  45 => 13,  43 => 11,  38 => 9,  35 => 8,  32 => 5,  27 => 4,);
    }
}
