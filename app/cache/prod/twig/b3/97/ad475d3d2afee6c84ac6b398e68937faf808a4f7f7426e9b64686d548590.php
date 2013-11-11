<?php

/* ArticleDevBundle:ArticleDev:addCategory.html.twig */
class __TwigTemplate_b397ad475d3d2afee6c84ac6b398e68937faf808a4f7f7426e9b64686d548590 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PageDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PageDevBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " > Ajout de cotégories
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h3>
        Ajout de catégories et de sous-catégories
        <hr>
    </h3>
    ";
        // line 23
        echo "    <div class=\"well\">
        <form method=\"post\" ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo ">
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input type=\"submit\" id=\"btAdd\" value=\"Valider\" >
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:addCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  47 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 25,  21 => 2,  98 => 31,  93 => 28,  78 => 21,  46 => 7,  27 => 4,  40 => 8,  43 => 8,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 4,  181 => 60,  171 => 61,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  145 => 21,  138 => 54,  135 => 53,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 36,  104 => 11,  96 => 6,  90 => 61,  88 => 6,  83 => 57,  81 => 56,  77 => 54,  75 => 17,  68 => 14,  66 => 15,  59 => 14,  44 => 12,  41 => 7,  35 => 5,  26 => 6,  31 => 5,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 11,  54 => 10,  51 => 24,  48 => 23,  45 => 8,  42 => 8,  39 => 7,  36 => 5,  33 => 4,  30 => 7,);
    }
}
