<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_7e65a9dcc680e95f281bd2647f65c76316c9f54a93e9328b69bdee9f35532cc9 extends Twig_Template
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
        return array (  175 => 65,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 125,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  200 => 72,  197 => 71,  191 => 67,  181 => 65,  113 => 48,  84 => 24,  129 => 31,  65 => 6,  23 => 4,  34 => 7,  184 => 83,  172 => 64,  167 => 75,  150 => 55,  126 => 55,  153 => 56,  97 => 39,  58 => 30,  118 => 49,  205 => 96,  202 => 95,  195 => 88,  190 => 86,  178 => 66,  161 => 63,  100 => 39,  76 => 31,  70 => 19,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  214 => 69,  177 => 79,  169 => 60,  140 => 58,  132 => 32,  128 => 62,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  208 => 68,  204 => 95,  179 => 69,  159 => 61,  143 => 63,  135 => 53,  119 => 40,  102 => 40,  71 => 34,  67 => 24,  63 => 27,  38 => 6,  94 => 42,  89 => 37,  85 => 39,  56 => 14,  87 => 34,  21 => 1,  93 => 18,  78 => 36,  46 => 13,  27 => 3,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  158 => 62,  156 => 58,  151 => 59,  142 => 59,  138 => 61,  136 => 56,  121 => 50,  105 => 34,  91 => 45,  62 => 16,  49 => 14,  25 => 3,  24 => 7,  225 => 76,  220 => 81,  217 => 75,  212 => 67,  207 => 75,  201 => 94,  194 => 70,  185 => 66,  180 => 49,  171 => 61,  165 => 60,  160 => 71,  155 => 69,  148 => 71,  137 => 37,  134 => 54,  127 => 56,  124 => 22,  117 => 19,  114 => 18,  110 => 55,  107 => 43,  104 => 45,  90 => 27,  88 => 38,  81 => 23,  77 => 68,  75 => 31,  68 => 7,  59 => 14,  44 => 10,  26 => 12,  31 => 6,  28 => 5,  19 => 1,  79 => 25,  72 => 17,  69 => 16,  47 => 11,  40 => 5,  37 => 10,  22 => 3,  246 => 93,  157 => 56,  145 => 57,  139 => 54,  131 => 52,  123 => 42,  120 => 40,  115 => 58,  111 => 47,  108 => 52,  101 => 32,  98 => 42,  96 => 37,  83 => 33,  74 => 14,  66 => 18,  55 => 16,  52 => 34,  50 => 10,  43 => 12,  41 => 9,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 85,  187 => 84,  182 => 66,  176 => 63,  173 => 78,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 58,  147 => 54,  144 => 69,  141 => 51,  133 => 59,  130 => 46,  125 => 51,  122 => 54,  116 => 39,  112 => 42,  109 => 47,  106 => 19,  103 => 18,  99 => 31,  95 => 28,  92 => 39,  86 => 19,  82 => 35,  80 => 32,  73 => 20,  64 => 23,  60 => 15,  57 => 37,  54 => 10,  51 => 12,  48 => 12,  45 => 10,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 3,);
    }
}