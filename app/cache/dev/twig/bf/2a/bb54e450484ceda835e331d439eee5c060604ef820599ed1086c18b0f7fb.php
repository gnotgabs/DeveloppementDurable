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
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  119 => 42,  102 => 32,  71 => 19,  63 => 15,  59 => 13,  38 => 6,  94 => 28,  85 => 25,  75 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  46 => 7,  44 => 12,  201 => 92,  196 => 90,  171 => 61,  163 => 62,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  117 => 44,  62 => 14,  49 => 19,  25 => 3,  24 => 4,  232 => 76,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 35,  156 => 66,  146 => 18,  138 => 54,  135 => 53,  128 => 49,  118 => 19,  105 => 40,  100 => 7,  97 => 6,  91 => 27,  89 => 20,  84 => 73,  78 => 21,  76 => 67,  67 => 15,  58 => 35,  34 => 6,  27 => 4,  31 => 5,  28 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 15,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 23,  55 => 15,  52 => 21,  50 => 16,  43 => 8,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 19,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 70,  80 => 19,  73 => 19,  64 => 17,  60 => 36,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
