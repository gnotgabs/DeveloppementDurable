<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_198852d175f047d41fb1203488c638e6ad8d79e690055d3594d87a704a4d7e49 extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("fos_user_content", $context, $blocks);
        echo "
    ";
        // line 7
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            // line 8
            echo "        <div class='errorConnexion'>";
            if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_error_, array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        if (isset($context["csrf_token"])) { $_csrf_token_ = $context["csrf_token"]; } else { $_csrf_token_ = null; }
        echo twig_escape_filter($this->env, $_csrf_token_, "html", null, true);
        echo "\" />
        <div>
            <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        if (isset($context["last_username"])) { $_last_username_ = $context["last_username"]; } else { $_last_username_ = null; }
        echo twig_escape_filter($this->env, $_last_username_, "html", null, true);
        echo "\" required=\"required\" />
        </div>
        <div>
            <label for=\"password\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" /><br>
        </div>
        <div>
            <label for=\"remember_me\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /><br>
        </div>
        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </form>
        <div></div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 37,  23 => 4,  21 => 1,  125 => 48,  184 => 61,  174 => 65,  145 => 50,  128 => 22,  123 => 44,  95 => 34,  86 => 19,  83 => 25,  263 => 94,  259 => 92,  246 => 86,  241 => 85,  238 => 84,  228 => 82,  225 => 81,  220 => 78,  217 => 72,  191 => 64,  175 => 57,  164 => 54,  161 => 59,  151 => 56,  144 => 53,  74 => 26,  132 => 49,  116 => 41,  103 => 25,  94 => 18,  172 => 56,  169 => 55,  73 => 11,  68 => 7,  230 => 96,  199 => 80,  179 => 60,  167 => 56,  159 => 64,  153 => 62,  139 => 52,  119 => 43,  113 => 46,  99 => 37,  87 => 28,  79 => 13,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 46,  131 => 45,  122 => 43,  117 => 18,  102 => 36,  92 => 25,  72 => 16,  51 => 22,  48 => 9,  35 => 6,  29 => 6,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 100,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 51,  147 => 60,  127 => 52,  112 => 39,  96 => 25,  71 => 29,  55 => 10,  114 => 22,  109 => 41,  106 => 36,  101 => 19,  85 => 33,  77 => 22,  39 => 8,  110 => 20,  65 => 6,  63 => 15,  26 => 12,  98 => 38,  88 => 34,  80 => 33,  46 => 10,  44 => 12,  43 => 8,  57 => 37,  50 => 31,  47 => 7,  38 => 24,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 62,  155 => 55,  142 => 59,  136 => 32,  133 => 31,  130 => 49,  120 => 19,  75 => 17,  53 => 12,  32 => 9,  25 => 3,  24 => 7,  237 => 73,  223 => 70,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 41,  108 => 19,  105 => 18,  100 => 35,  91 => 28,  89 => 41,  84 => 31,  82 => 32,  78 => 26,  76 => 12,  69 => 30,  67 => 19,  60 => 10,  58 => 23,  42 => 24,  40 => 8,  36 => 7,  34 => 7,  27 => 5,  31 => 6,  28 => 5,  22 => 3,  19 => 2,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 65,  196 => 65,  193 => 78,  187 => 76,  183 => 59,  180 => 58,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 54,  149 => 18,  146 => 41,  140 => 49,  137 => 18,  129 => 48,  124 => 43,  121 => 46,  118 => 44,  115 => 52,  111 => 41,  107 => 38,  104 => 38,  97 => 19,  93 => 30,  90 => 33,  81 => 34,  70 => 18,  66 => 29,  62 => 15,  59 => 14,  56 => 20,  52 => 12,  49 => 11,  45 => 20,  41 => 7,  37 => 7,  33 => 4,  30 => 4,);
    }
}
