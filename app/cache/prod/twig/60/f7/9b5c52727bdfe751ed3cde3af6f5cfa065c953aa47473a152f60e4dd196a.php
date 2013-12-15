<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_60f79b5c52727bdfe751ed3cde3af6f5cfa065c953aa47473a152f60e4dd196a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["confirmationUrl"])) { $_confirmationUrl_ = $context["confirmationUrl"]; } else { $_confirmationUrl_ = null; }
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute($_user_, "username"), "%confirmationUrl%" => $_confirmationUrl_), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        if (isset($context["user"])) { $_user_ = $context["user"]; } else { $_user_ = null; }
        if (isset($context["confirmationUrl"])) { $_confirmationUrl_ = $context["confirmationUrl"]; } else { $_confirmationUrl_ = null; }
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute($_user_, "username"), "%confirmationUrl%" => $_confirmationUrl_), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  64 => 13,  74 => 26,  21 => 1,  156 => 60,  148 => 59,  151 => 59,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 34,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 61,  154 => 50,  144 => 56,  141 => 37,  128 => 22,  86 => 19,  83 => 18,  132 => 49,  103 => 25,  94 => 18,  188 => 74,  182 => 58,  174 => 65,  168 => 64,  145 => 58,  123 => 46,  73 => 11,  116 => 43,  68 => 7,  61 => 12,  230 => 80,  199 => 63,  179 => 57,  167 => 65,  159 => 64,  153 => 60,  139 => 55,  119 => 43,  113 => 46,  99 => 43,  87 => 28,  79 => 13,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 45,  131 => 54,  122 => 50,  117 => 18,  102 => 36,  92 => 38,  72 => 16,  51 => 13,  48 => 9,  35 => 6,  29 => 4,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 59,  147 => 60,  127 => 51,  112 => 39,  96 => 38,  71 => 29,  55 => 10,  114 => 49,  109 => 37,  106 => 23,  101 => 46,  85 => 33,  77 => 12,  39 => 4,  110 => 20,  65 => 6,  63 => 13,  26 => 12,  98 => 38,  88 => 38,  80 => 33,  46 => 12,  44 => 9,  43 => 8,  57 => 37,  50 => 31,  47 => 7,  38 => 24,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 61,  155 => 64,  142 => 57,  136 => 32,  133 => 31,  130 => 49,  120 => 19,  75 => 17,  53 => 23,  32 => 9,  25 => 3,  24 => 7,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 64,  152 => 63,  126 => 18,  108 => 19,  105 => 18,  100 => 22,  91 => 39,  89 => 18,  84 => 31,  82 => 32,  78 => 16,  76 => 12,  69 => 30,  67 => 19,  60 => 10,  58 => 26,  42 => 24,  40 => 8,  36 => 6,  34 => 7,  27 => 4,  31 => 6,  28 => 5,  22 => 2,  19 => 2,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 77,  193 => 61,  187 => 73,  183 => 62,  180 => 71,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 62,  149 => 57,  146 => 66,  140 => 49,  137 => 18,  129 => 44,  124 => 43,  121 => 46,  118 => 43,  115 => 44,  111 => 47,  107 => 38,  104 => 38,  97 => 19,  93 => 30,  90 => 33,  81 => 34,  70 => 28,  66 => 29,  62 => 15,  59 => 38,  56 => 20,  52 => 12,  49 => 7,  45 => 5,  41 => 7,  37 => 7,  33 => 4,  30 => 2,);
    }
}
