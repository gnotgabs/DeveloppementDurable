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
        return array (  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  102 => 28,  92 => 25,  72 => 24,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  39 => 7,  110 => 20,  65 => 14,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  43 => 7,  57 => 11,  50 => 16,  47 => 15,  38 => 6,  227 => 92,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 56,  155 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  75 => 25,  53 => 19,  32 => 5,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 60,  207 => 70,  200 => 54,  194 => 64,  190 => 51,  185 => 49,  176 => 43,  173 => 58,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 31,  105 => 31,  100 => 27,  91 => 77,  89 => 16,  84 => 21,  82 => 70,  78 => 40,  76 => 19,  69 => 17,  67 => 15,  60 => 12,  58 => 10,  42 => 24,  40 => 12,  36 => 6,  34 => 5,  27 => 3,  31 => 7,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 6,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 23,  62 => 14,  59 => 13,  56 => 12,  52 => 10,  49 => 9,  45 => 13,  41 => 9,  37 => 11,  33 => 4,  30 => 3,);
    }
}
