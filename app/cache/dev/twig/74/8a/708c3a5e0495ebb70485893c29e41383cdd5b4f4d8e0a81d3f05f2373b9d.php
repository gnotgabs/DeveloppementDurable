<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_748a708c3a5e0495ebb70485893c29e41383cdd5b4f4d8e0a81d3f05f2373b9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  226 => 84,  216 => 79,  200 => 72,  191 => 67,  114 => 18,  23 => 4,  150 => 55,  81 => 23,  290 => 107,  284 => 103,  276 => 97,  261 => 92,  233 => 87,  206 => 72,  197 => 71,  188 => 64,  167 => 64,  153 => 56,  129 => 31,  77 => 17,  256 => 96,  248 => 94,  244 => 94,  228 => 87,  225 => 86,  215 => 76,  210 => 80,  207 => 75,  194 => 70,  175 => 65,  124 => 22,  65 => 6,  174 => 77,  165 => 60,  113 => 48,  90 => 27,  155 => 74,  148 => 52,  137 => 37,  126 => 48,  104 => 29,  205 => 96,  185 => 66,  178 => 66,  134 => 54,  127 => 56,  110 => 43,  70 => 19,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 88,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 77,  140 => 58,  132 => 32,  107 => 49,  61 => 13,  273 => 96,  269 => 95,  254 => 92,  243 => 85,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 61,  119 => 40,  102 => 40,  71 => 19,  63 => 27,  59 => 14,  38 => 6,  94 => 44,  85 => 34,  75 => 25,  68 => 7,  56 => 14,  87 => 34,  21 => 1,  26 => 12,  93 => 18,  88 => 34,  46 => 13,  44 => 10,  201 => 92,  196 => 75,  171 => 59,  163 => 72,  158 => 62,  151 => 59,  142 => 62,  136 => 59,  121 => 50,  117 => 19,  62 => 16,  49 => 14,  25 => 3,  24 => 7,  232 => 88,  221 => 77,  218 => 70,  213 => 78,  208 => 68,  202 => 95,  195 => 68,  190 => 86,  186 => 51,  183 => 63,  181 => 65,  172 => 64,  169 => 60,  166 => 57,  161 => 63,  156 => 58,  146 => 59,  138 => 56,  135 => 59,  128 => 52,  118 => 49,  105 => 34,  100 => 39,  97 => 46,  91 => 27,  89 => 35,  84 => 24,  78 => 27,  76 => 31,  67 => 24,  58 => 12,  34 => 7,  27 => 3,  31 => 6,  28 => 5,  19 => 1,  79 => 25,  72 => 17,  69 => 16,  47 => 11,  40 => 5,  37 => 16,  22 => 3,  246 => 93,  157 => 65,  145 => 46,  139 => 60,  131 => 47,  123 => 42,  120 => 45,  115 => 51,  111 => 47,  108 => 49,  101 => 45,  98 => 23,  96 => 37,  83 => 33,  74 => 26,  66 => 18,  55 => 16,  52 => 34,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 62,  176 => 63,  173 => 71,  168 => 61,  164 => 67,  162 => 59,  154 => 60,  149 => 64,  147 => 54,  144 => 61,  141 => 51,  133 => 51,  130 => 46,  125 => 51,  122 => 54,  116 => 39,  112 => 43,  109 => 43,  106 => 19,  103 => 18,  99 => 31,  95 => 38,  92 => 22,  86 => 19,  82 => 18,  80 => 32,  73 => 20,  64 => 23,  60 => 15,  57 => 37,  54 => 25,  51 => 12,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}
