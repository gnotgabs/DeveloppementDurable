<?php

/* UserBundle::layout.html.twig */
class __TwigTemplate_2550fe72bb5edcb7fbf1ec0344d6036962af8dacda10cc088dff4ffa0ae15a9b extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 7
            echo "
    <div class=\"alert alert-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : null), "html", null, true);
            echo "\">
      ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), "FOSUserBundle"), "html", null, true);
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
        return array (  81 => 33,  175 => 66,  167 => 64,  157 => 65,  153 => 59,  129 => 50,  96 => 36,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 45,  77 => 33,  74 => 26,  65 => 23,  155 => 68,  152 => 67,  150 => 66,  120 => 49,  113 => 52,  205 => 96,  185 => 70,  178 => 62,  139 => 54,  134 => 60,  127 => 46,  110 => 43,  83 => 34,  70 => 30,  53 => 23,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 53,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 55,  143 => 55,  131 => 52,  119 => 46,  102 => 41,  71 => 26,  63 => 27,  59 => 15,  47 => 15,  38 => 9,  94 => 36,  85 => 34,  79 => 33,  75 => 25,  68 => 24,  56 => 13,  50 => 22,  29 => 4,  87 => 30,  72 => 17,  55 => 19,  21 => 1,  26 => 6,  98 => 36,  93 => 38,  88 => 36,  46 => 9,  44 => 12,  35 => 8,  43 => 6,  41 => 10,  201 => 92,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 50,  121 => 46,  117 => 52,  101 => 41,  66 => 24,  62 => 16,  49 => 22,  32 => 5,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 43,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 59,  138 => 56,  135 => 48,  128 => 52,  118 => 48,  115 => 45,  111 => 44,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 42,  89 => 35,  84 => 28,  78 => 27,  76 => 31,  69 => 16,  67 => 30,  58 => 20,  40 => 5,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 65,  182 => 66,  176 => 61,  173 => 71,  168 => 58,  164 => 67,  162 => 59,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 51,  130 => 59,  125 => 51,  122 => 51,  116 => 48,  112 => 46,  109 => 43,  106 => 42,  103 => 40,  99 => 39,  95 => 38,  92 => 37,  86 => 36,  82 => 28,  80 => 19,  73 => 15,  64 => 19,  60 => 26,  57 => 10,  54 => 25,  51 => 14,  48 => 13,  45 => 7,  42 => 8,  39 => 7,  36 => 4,  33 => 15,  30 => 5,);
    }
}
