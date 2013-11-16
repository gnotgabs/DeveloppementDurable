<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_8a4f92b89893816e1d4bc21e0fbcc4cc11d09f124d8b6caf17ba0a7085e7408d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 7,  129 => 31,  23 => 4,  65 => 6,  184 => 83,  172 => 77,  167 => 75,  150 => 67,  126 => 55,  97 => 44,  84 => 29,  205 => 96,  202 => 95,  195 => 88,  190 => 86,  185 => 84,  178 => 80,  161 => 72,  100 => 44,  76 => 17,  70 => 17,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 79,  169 => 60,  140 => 55,  132 => 32,  128 => 49,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 95,  179 => 69,  159 => 61,  143 => 63,  135 => 53,  119 => 42,  102 => 17,  71 => 33,  67 => 30,  63 => 17,  38 => 6,  94 => 34,  89 => 37,  85 => 38,  56 => 11,  87 => 37,  21 => 1,  93 => 18,  78 => 26,  46 => 8,  27 => 5,  201 => 94,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  158 => 67,  156 => 70,  151 => 68,  142 => 59,  138 => 61,  136 => 56,  121 => 53,  105 => 18,  91 => 27,  62 => 23,  49 => 10,  25 => 3,  24 => 7,  194 => 87,  186 => 57,  181 => 54,  171 => 61,  165 => 41,  160 => 71,  155 => 69,  148 => 19,  137 => 37,  134 => 66,  127 => 28,  124 => 22,  117 => 19,  114 => 18,  110 => 22,  107 => 36,  104 => 45,  90 => 32,  88 => 31,  81 => 35,  77 => 68,  75 => 31,  68 => 7,  59 => 13,  44 => 14,  26 => 11,  31 => 4,  28 => 3,  19 => 2,  79 => 13,  72 => 22,  69 => 29,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 18,  139 => 62,  131 => 52,  123 => 47,  120 => 20,  115 => 53,  111 => 37,  108 => 19,  101 => 32,  98 => 43,  96 => 19,  83 => 18,  74 => 14,  66 => 19,  55 => 14,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 9,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 64,  141 => 48,  133 => 59,  130 => 41,  125 => 44,  122 => 58,  116 => 51,  112 => 42,  109 => 47,  106 => 19,  103 => 18,  99 => 43,  95 => 48,  92 => 39,  86 => 19,  82 => 28,  80 => 19,  73 => 16,  64 => 13,  60 => 16,  57 => 12,  54 => 10,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
