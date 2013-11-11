<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_2664e8e41030884658c2fe1511e9649603f15f92dd0ccabe1b5a6886f2e9f4ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  76 => 41,  113 => 53,  70 => 31,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  119 => 42,  102 => 48,  71 => 19,  67 => 30,  63 => 15,  38 => 6,  94 => 48,  89 => 20,  85 => 25,  56 => 24,  87 => 21,  21 => 1,  93 => 28,  78 => 21,  46 => 7,  27 => 5,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  105 => 40,  91 => 47,  62 => 23,  49 => 19,  25 => 3,  24 => 4,  181 => 60,  171 => 61,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  138 => 54,  135 => 53,  127 => 18,  124 => 17,  117 => 44,  114 => 57,  110 => 55,  107 => 50,  104 => 49,  90 => 43,  88 => 6,  81 => 44,  77 => 39,  75 => 17,  68 => 33,  59 => 30,  44 => 12,  26 => 6,  31 => 5,  28 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 14,  47 => 21,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 21,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 49,  96 => 25,  83 => 45,  74 => 33,  66 => 13,  55 => 28,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 2,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 63,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 44,  92 => 21,  86 => 28,  82 => 41,  80 => 19,  73 => 15,  64 => 12,  60 => 6,  57 => 12,  54 => 10,  51 => 24,  48 => 9,  45 => 7,  42 => 22,  39 => 7,  36 => 4,  33 => 4,  30 => 7,);
    }
}
