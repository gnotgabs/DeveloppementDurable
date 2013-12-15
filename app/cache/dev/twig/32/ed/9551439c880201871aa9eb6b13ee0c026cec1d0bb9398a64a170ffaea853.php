<?php

/* ArticleDevBundle::adminLayout.html.twig */
class __TwigTemplate_32ed9551439c880201871aa9eb6b13ee0c026cec1d0bb9398a64a170ffaea853 extends Twig_Template
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
        return array (  75 => 25,  72 => 24,  62 => 14,  50 => 16,  47 => 15,  45 => 13,  40 => 12,  37 => 11,  32 => 5,  162 => 78,  155 => 74,  148 => 70,  141 => 66,  137 => 65,  133 => 64,  126 => 60,  122 => 59,  115 => 55,  111 => 54,  104 => 50,  100 => 49,  96 => 48,  79 => 35,  76 => 34,  69 => 30,  66 => 23,  59 => 13,  56 => 23,  49 => 19,  46 => 18,  39 => 9,  36 => 8,  31 => 5,  29 => 4,);
    }
}
