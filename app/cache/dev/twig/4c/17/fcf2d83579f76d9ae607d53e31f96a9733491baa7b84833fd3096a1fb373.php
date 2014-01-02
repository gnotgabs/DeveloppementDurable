<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_4c17fcf2d83579f76d9ae607d53e31f96a9733491baa7b84833fd3096a1fb373 extends Twig_Template
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
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($this->getContext($context, "user"), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "app"), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty($this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "targetUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 18,  23 => 4,  150 => 64,  81 => 33,  290 => 107,  284 => 103,  276 => 97,  261 => 92,  233 => 81,  206 => 72,  197 => 69,  188 => 64,  167 => 64,  153 => 59,  129 => 31,  77 => 17,  256 => 102,  248 => 96,  244 => 94,  228 => 87,  225 => 86,  215 => 76,  210 => 80,  207 => 74,  194 => 67,  175 => 60,  124 => 22,  65 => 6,  174 => 77,  165 => 73,  113 => 49,  90 => 38,  155 => 74,  148 => 52,  137 => 37,  126 => 51,  104 => 29,  205 => 96,  185 => 63,  178 => 61,  134 => 48,  127 => 56,  110 => 43,  70 => 30,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 88,  247 => 78,  241 => 84,  229 => 73,  220 => 79,  214 => 69,  177 => 77,  140 => 60,  132 => 32,  107 => 49,  61 => 13,  273 => 96,  269 => 95,  254 => 92,  243 => 85,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 61,  119 => 48,  102 => 39,  71 => 19,  63 => 27,  59 => 38,  38 => 8,  94 => 40,  85 => 34,  75 => 25,  68 => 7,  56 => 13,  87 => 30,  21 => 1,  26 => 6,  93 => 18,  88 => 34,  46 => 9,  44 => 12,  201 => 92,  196 => 75,  171 => 59,  163 => 72,  158 => 55,  151 => 67,  142 => 62,  136 => 55,  121 => 54,  117 => 19,  62 => 16,  49 => 19,  25 => 3,  24 => 4,  232 => 88,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 68,  190 => 86,  186 => 51,  183 => 63,  181 => 69,  172 => 43,  169 => 60,  166 => 57,  161 => 71,  156 => 68,  146 => 59,  138 => 56,  135 => 59,  128 => 52,  118 => 19,  105 => 43,  100 => 38,  97 => 41,  91 => 44,  89 => 35,  84 => 33,  78 => 27,  76 => 12,  67 => 30,  58 => 12,  34 => 6,  27 => 4,  31 => 6,  28 => 5,  19 => 2,  79 => 13,  72 => 17,  69 => 16,  47 => 7,  40 => 5,  37 => 16,  22 => 3,  246 => 90,  157 => 65,  145 => 46,  139 => 55,  131 => 47,  123 => 50,  120 => 54,  115 => 47,  111 => 46,  108 => 45,  101 => 42,  98 => 23,  96 => 19,  83 => 18,  74 => 26,  66 => 24,  55 => 19,  52 => 34,  50 => 10,  43 => 5,  41 => 9,  35 => 8,  32 => 9,  29 => 5,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 62,  176 => 64,  173 => 71,  168 => 73,  164 => 67,  162 => 78,  154 => 58,  149 => 64,  147 => 56,  144 => 61,  141 => 64,  133 => 52,  130 => 52,  125 => 51,  122 => 50,  116 => 47,  112 => 43,  109 => 43,  106 => 19,  103 => 18,  99 => 39,  95 => 38,  92 => 22,  86 => 19,  82 => 18,  80 => 19,  73 => 11,  64 => 19,  60 => 26,  57 => 37,  54 => 25,  51 => 14,  48 => 13,  45 => 7,  42 => 8,  39 => 7,  36 => 7,  33 => 6,  30 => 6,);
    }
}
