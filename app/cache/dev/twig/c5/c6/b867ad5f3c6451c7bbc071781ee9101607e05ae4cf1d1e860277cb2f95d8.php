<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_c5c6b867ad5f3c6451c7bbc071781ee9101607e05ae4cf1d1e860277cb2f95d8 extends Twig_Template
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

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  65 => 6,  23 => 4,  34 => 7,  184 => 83,  172 => 77,  167 => 75,  150 => 67,  126 => 55,  153 => 59,  97 => 39,  58 => 30,  118 => 55,  205 => 96,  202 => 95,  195 => 88,  190 => 86,  178 => 80,  161 => 72,  100 => 44,  76 => 12,  70 => 30,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  214 => 69,  177 => 79,  169 => 60,  140 => 55,  132 => 32,  128 => 62,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  208 => 68,  204 => 95,  179 => 69,  159 => 61,  143 => 63,  135 => 53,  119 => 42,  102 => 45,  71 => 34,  67 => 30,  63 => 27,  38 => 8,  94 => 42,  89 => 37,  85 => 39,  56 => 13,  87 => 37,  21 => 1,  93 => 18,  78 => 36,  46 => 9,  27 => 4,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  158 => 67,  156 => 77,  151 => 68,  142 => 59,  138 => 61,  136 => 56,  121 => 53,  105 => 51,  91 => 45,  62 => 16,  49 => 19,  25 => 3,  24 => 7,  225 => 76,  220 => 70,  217 => 75,  212 => 67,  207 => 60,  201 => 94,  194 => 87,  185 => 84,  180 => 49,  171 => 61,  165 => 41,  160 => 71,  155 => 69,  148 => 71,  137 => 37,  134 => 60,  127 => 56,  124 => 22,  117 => 19,  114 => 18,  110 => 55,  107 => 43,  104 => 45,  90 => 77,  88 => 38,  81 => 70,  77 => 68,  75 => 31,  68 => 7,  59 => 38,  44 => 14,  26 => 12,  31 => 6,  28 => 5,  19 => 2,  79 => 13,  72 => 17,  69 => 16,  47 => 21,  40 => 5,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 57,  139 => 54,  131 => 52,  123 => 56,  120 => 40,  115 => 58,  111 => 44,  108 => 52,  101 => 32,  98 => 42,  96 => 19,  83 => 18,  74 => 14,  66 => 13,  55 => 22,  52 => 34,  50 => 10,  43 => 6,  41 => 9,  35 => 8,  32 => 9,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 58,  147 => 58,  144 => 69,  141 => 65,  133 => 59,  130 => 60,  125 => 49,  122 => 54,  116 => 51,  112 => 42,  109 => 47,  106 => 19,  103 => 18,  99 => 43,  95 => 28,  92 => 39,  86 => 19,  82 => 35,  80 => 19,  73 => 11,  64 => 19,  60 => 26,  57 => 37,  54 => 10,  51 => 14,  48 => 12,  45 => 7,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
