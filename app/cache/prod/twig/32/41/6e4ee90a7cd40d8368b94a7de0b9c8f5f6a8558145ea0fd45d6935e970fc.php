<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_32416e4ee90a7cd40d8368b94a7de0b9c8f5f6a8558145ea0fd45d6935e970fc extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null)))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
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
        return array (  137 => 37,  114 => 18,  52 => 34,  23 => 4,  194 => 87,  184 => 83,  160 => 71,  126 => 55,  104 => 45,  175 => 66,  167 => 75,  157 => 60,  153 => 59,  129 => 31,  96 => 19,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 22,  77 => 33,  74 => 27,  65 => 6,  155 => 69,  152 => 67,  150 => 67,  205 => 96,  185 => 70,  178 => 62,  139 => 54,  134 => 60,  127 => 46,  110 => 43,  83 => 18,  70 => 27,  53 => 23,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 79,  140 => 55,  132 => 32,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 95,  179 => 69,  159 => 55,  143 => 63,  131 => 52,  119 => 46,  102 => 28,  71 => 26,  63 => 27,  59 => 38,  47 => 15,  38 => 8,  94 => 36,  85 => 25,  79 => 13,  75 => 31,  68 => 7,  56 => 13,  50 => 10,  29 => 5,  87 => 37,  72 => 17,  55 => 15,  21 => 1,  26 => 6,  98 => 40,  93 => 18,  88 => 38,  46 => 9,  44 => 12,  35 => 8,  43 => 6,  41 => 9,  201 => 94,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 47,  121 => 53,  117 => 19,  101 => 32,  66 => 13,  62 => 16,  49 => 22,  32 => 9,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 77,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 18,  138 => 61,  135 => 48,  128 => 58,  118 => 48,  115 => 45,  111 => 44,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 27,  89 => 37,  84 => 35,  78 => 21,  76 => 12,  69 => 16,  67 => 26,  58 => 35,  40 => 5,  34 => 6,  27 => 4,  31 => 6,  28 => 5,  22 => 3,  19 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 65,  182 => 66,  176 => 61,  173 => 78,  168 => 58,  164 => 57,  162 => 59,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 59,  130 => 59,  125 => 49,  122 => 51,  116 => 51,  112 => 42,  109 => 47,  106 => 19,  103 => 18,  99 => 43,  95 => 39,  92 => 39,  86 => 19,  82 => 35,  80 => 19,  73 => 11,  64 => 19,  60 => 26,  57 => 37,  54 => 14,  51 => 14,  48 => 13,  45 => 7,  42 => 8,  39 => 7,  36 => 7,  33 => 6,  30 => 6,);
    }
}
