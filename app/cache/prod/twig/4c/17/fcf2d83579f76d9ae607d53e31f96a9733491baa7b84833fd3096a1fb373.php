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
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute($_user_, "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!twig_test_empty($this->getAttribute($_app_, "session")))) {
            // line 8
            echo "        ";
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context["targetUrl"] = $this->getAttribute($this->getAttribute($_app_, "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute($_app_, "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if (isset($context["targetUrl"])) { $_targetUrl_ = $context["targetUrl"]; } else { $_targetUrl_ = null; }
            if ((!twig_test_empty($_targetUrl_))) {
                echo "<p><a href=\"";
                if (isset($context["targetUrl"])) { $_targetUrl_ = $context["targetUrl"]; } else { $_targetUrl_ = null; }
                echo twig_escape_filter($this->env, $_targetUrl_, "html", null, true);
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
        return array (  23 => 4,  64 => 13,  135 => 50,  74 => 26,  21 => 1,  156 => 60,  148 => 59,  151 => 59,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 34,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 61,  154 => 50,  144 => 56,  141 => 37,  128 => 22,  86 => 19,  83 => 18,  132 => 49,  103 => 36,  94 => 18,  188 => 74,  182 => 58,  174 => 65,  168 => 64,  145 => 51,  123 => 46,  73 => 11,  116 => 43,  68 => 7,  61 => 12,  230 => 80,  199 => 63,  179 => 57,  167 => 65,  159 => 64,  153 => 60,  139 => 55,  119 => 43,  113 => 46,  99 => 43,  87 => 28,  79 => 13,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 54,  131 => 54,  122 => 50,  117 => 18,  102 => 36,  92 => 38,  72 => 16,  51 => 13,  48 => 9,  35 => 6,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 52,  147 => 60,  127 => 51,  112 => 39,  96 => 38,  71 => 29,  55 => 10,  114 => 49,  109 => 38,  106 => 23,  101 => 40,  85 => 33,  77 => 12,  39 => 4,  110 => 20,  65 => 6,  63 => 13,  26 => 6,  98 => 38,  88 => 37,  80 => 33,  46 => 12,  44 => 9,  43 => 8,  57 => 37,  50 => 31,  47 => 13,  38 => 24,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 61,  155 => 64,  142 => 57,  136 => 32,  133 => 31,  130 => 49,  120 => 19,  75 => 17,  53 => 23,  32 => 9,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 64,  152 => 55,  126 => 18,  108 => 19,  105 => 18,  100 => 22,  91 => 39,  89 => 18,  84 => 31,  82 => 32,  78 => 16,  76 => 12,  69 => 30,  67 => 19,  60 => 10,  58 => 26,  42 => 24,  40 => 8,  36 => 6,  34 => 6,  27 => 4,  31 => 6,  28 => 5,  22 => 3,  19 => 2,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 77,  193 => 61,  187 => 73,  183 => 62,  180 => 71,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 55,  149 => 57,  146 => 66,  140 => 51,  137 => 18,  129 => 52,  124 => 43,  121 => 46,  118 => 44,  115 => 44,  111 => 42,  107 => 38,  104 => 38,  97 => 19,  93 => 30,  90 => 33,  81 => 35,  70 => 28,  66 => 29,  62 => 15,  59 => 38,  56 => 20,  52 => 34,  49 => 7,  45 => 5,  41 => 6,  37 => 7,  33 => 2,  30 => 5,);
    }
}
