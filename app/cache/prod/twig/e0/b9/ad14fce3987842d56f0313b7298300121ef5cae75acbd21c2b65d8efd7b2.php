<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_e0b9ad14fce3987842d56f0313b7298300121ef5cae75acbd21c2b65d8efd7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::connectLayout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::connectLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        // line 6
        echo "  ";
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($_app_, "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 7
            echo "
    <div class=\"alert alert-";
            // line 8
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            echo twig_escape_filter($this->env, $_key_, "html", null, true);
            echo "\">
      ";
            // line 9
            if (isset($context["message"])) { $_message_ = $context["message"]; } else { $_message_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($_message_, array(), "FOSUserBundle"), "html", null, true);
            echo "
    </div>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
  ";
        // line 15
        echo "
  ";
        // line 16
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "    <p>CONNEXION</p>
  ";
    }

    public function getTemplateName()
    {
        return "UserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 1,  125 => 48,  184 => 61,  174 => 65,  145 => 50,  128 => 45,  123 => 44,  95 => 34,  86 => 34,  83 => 27,  263 => 94,  259 => 92,  246 => 86,  241 => 85,  238 => 84,  228 => 82,  225 => 81,  220 => 78,  217 => 72,  191 => 64,  175 => 57,  164 => 54,  161 => 59,  151 => 56,  144 => 53,  74 => 26,  132 => 49,  116 => 41,  103 => 25,  94 => 21,  172 => 56,  169 => 55,  73 => 27,  68 => 24,  230 => 96,  199 => 80,  179 => 60,  167 => 56,  159 => 64,  153 => 62,  139 => 52,  119 => 43,  113 => 46,  99 => 37,  87 => 28,  79 => 27,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 46,  131 => 45,  122 => 43,  117 => 40,  102 => 36,  92 => 25,  72 => 16,  51 => 22,  48 => 9,  35 => 8,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 100,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 51,  147 => 60,  127 => 52,  112 => 39,  96 => 25,  71 => 29,  55 => 22,  114 => 22,  109 => 41,  106 => 36,  101 => 19,  85 => 33,  77 => 12,  39 => 7,  110 => 20,  65 => 16,  63 => 13,  26 => 6,  98 => 38,  88 => 34,  80 => 33,  46 => 12,  44 => 12,  43 => 8,  57 => 26,  50 => 22,  47 => 7,  38 => 9,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 62,  155 => 55,  142 => 59,  136 => 51,  133 => 50,  130 => 49,  120 => 40,  75 => 17,  53 => 23,  32 => 5,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 41,  108 => 41,  105 => 40,  100 => 35,  91 => 28,  89 => 41,  84 => 31,  82 => 32,  78 => 26,  76 => 30,  69 => 30,  67 => 19,  60 => 10,  58 => 23,  42 => 24,  40 => 7,  36 => 4,  34 => 6,  27 => 4,  31 => 7,  28 => 5,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 65,  196 => 65,  193 => 78,  187 => 76,  183 => 59,  180 => 58,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 54,  149 => 18,  146 => 41,  140 => 49,  137 => 18,  129 => 48,  124 => 43,  121 => 46,  118 => 44,  115 => 52,  111 => 41,  107 => 38,  104 => 38,  97 => 30,  93 => 30,  90 => 33,  81 => 34,  70 => 28,  66 => 29,  62 => 15,  59 => 13,  56 => 20,  52 => 10,  49 => 13,  45 => 20,  41 => 10,  37 => 11,  33 => 15,  30 => 5,);
    }
}
