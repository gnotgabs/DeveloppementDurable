<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_3a4680b97da3c1fe1b70271ec281bd62d8fe95a42c8712deaec54b67bf648285 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:show_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  114 => 18,  52 => 34,  23 => 3,  81 => 33,  175 => 66,  167 => 64,  157 => 65,  153 => 59,  129 => 31,  96 => 19,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 22,  77 => 33,  74 => 26,  65 => 6,  155 => 68,  152 => 67,  150 => 66,  120 => 49,  113 => 52,  205 => 96,  185 => 70,  178 => 62,  139 => 54,  134 => 60,  127 => 46,  110 => 43,  83 => 18,  70 => 30,  53 => 23,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 32,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 55,  143 => 55,  131 => 52,  119 => 46,  102 => 39,  71 => 26,  63 => 27,  59 => 38,  47 => 15,  38 => 6,  94 => 36,  85 => 34,  79 => 13,  75 => 25,  68 => 7,  56 => 13,  50 => 31,  29 => 4,  87 => 30,  72 => 17,  55 => 19,  21 => 1,  26 => 6,  98 => 38,  93 => 18,  88 => 34,  46 => 9,  44 => 12,  35 => 8,  43 => 6,  41 => 25,  201 => 92,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 50,  121 => 46,  117 => 19,  101 => 41,  66 => 24,  62 => 16,  49 => 22,  32 => 9,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 43,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 59,  138 => 56,  135 => 48,  128 => 52,  118 => 48,  115 => 45,  111 => 44,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 42,  89 => 35,  84 => 33,  78 => 27,  76 => 12,  69 => 16,  67 => 30,  58 => 20,  40 => 5,  34 => 6,  27 => 4,  31 => 4,  28 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 65,  182 => 66,  176 => 61,  173 => 71,  168 => 58,  164 => 67,  162 => 59,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 51,  130 => 59,  125 => 51,  122 => 51,  116 => 48,  112 => 43,  109 => 43,  106 => 19,  103 => 18,  99 => 39,  95 => 38,  92 => 35,  86 => 19,  82 => 28,  80 => 19,  73 => 11,  64 => 19,  60 => 26,  57 => 37,  54 => 25,  51 => 14,  48 => 13,  45 => 7,  42 => 8,  39 => 7,  36 => 11,  33 => 6,  30 => 6,);
    }
}
