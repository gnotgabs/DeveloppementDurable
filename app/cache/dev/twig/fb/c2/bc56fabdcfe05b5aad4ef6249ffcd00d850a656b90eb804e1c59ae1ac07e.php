<?php

/* WebProfilerBundle:Collector:memory.html.twig */
class __TwigTemplate_fbc2bc56fabdcfe05b5aad4ef6249ffcd00d850a656b90eb804e1c59ae1ac07e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <span>
            <img width=\"13\" height=\"28\" alt=\"Memory Usage\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAAcBAMAAABITyhxAAAAJ1BMVEXNzc3///////////////////////8/Pz////////////+NjY0/Pz9lMO+OAAAADHRSTlMAABAgMDhAWXCvv9e8JUuyAAAAQ0lEQVQI12MQBAMBBmLpMwoMDAw6BxjOOABpHyCdAKRzsNDp5eXl1KBh5oHBAYY9YHoDQ+cqIFjZwGCaBgSpBrjcCwCZgkUHKKvX+wAAAABJRU5ErkJggg==\">
            <span>";
        // line 7
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " MB</span>
        </span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Memory usage</b>
            <span>";
        // line 13
        echo twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memory") / 1024) / 1024)), "html", null, true);
        echo " / ";
        echo ((($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") == (-1))) ? ("&infin;") : (twig_escape_filter($this->env, sprintf("%.1f", (($this->getAttribute($this->getContext($context, "collector"), "memoryLimit") / 1024) / 1024)))));
        echo " MB</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 16
        echo "    ";
        $this->env->loadTemplate("@WebProfiler/Profiler/toolbar_item.html.twig")->display(array_merge($context, array("link" => false)));
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:memory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 126,  357 => 123,  353 => 121,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 112,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 101,  274 => 97,  265 => 96,  263 => 95,  255 => 93,  231 => 83,  212 => 78,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  226 => 84,  216 => 79,  200 => 72,  191 => 67,  114 => 18,  23 => 4,  150 => 55,  81 => 23,  290 => 107,  284 => 103,  276 => 97,  261 => 92,  233 => 87,  206 => 72,  197 => 71,  188 => 64,  167 => 64,  153 => 56,  129 => 31,  77 => 17,  256 => 96,  248 => 94,  244 => 94,  228 => 87,  225 => 86,  215 => 76,  210 => 80,  207 => 75,  194 => 70,  175 => 65,  124 => 22,  65 => 6,  174 => 65,  165 => 60,  113 => 48,  90 => 27,  155 => 74,  148 => 52,  137 => 37,  126 => 51,  104 => 32,  205 => 96,  185 => 74,  178 => 66,  134 => 54,  127 => 56,  110 => 43,  70 => 19,  53 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 88,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 77,  140 => 58,  132 => 32,  107 => 49,  61 => 15,  273 => 96,  269 => 95,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  119 => 40,  102 => 40,  71 => 19,  63 => 18,  59 => 16,  38 => 7,  94 => 40,  85 => 24,  75 => 19,  68 => 7,  56 => 14,  87 => 34,  21 => 1,  26 => 12,  93 => 18,  88 => 25,  46 => 10,  44 => 10,  201 => 92,  196 => 75,  171 => 59,  163 => 72,  158 => 62,  151 => 59,  142 => 62,  136 => 48,  121 => 50,  117 => 39,  62 => 16,  49 => 11,  25 => 3,  24 => 7,  232 => 88,  221 => 77,  218 => 70,  213 => 78,  208 => 68,  202 => 77,  195 => 68,  190 => 76,  186 => 51,  183 => 63,  181 => 65,  172 => 64,  169 => 60,  166 => 57,  161 => 63,  156 => 62,  146 => 59,  138 => 56,  135 => 59,  128 => 52,  118 => 49,  105 => 34,  100 => 39,  97 => 41,  91 => 33,  89 => 35,  84 => 24,  78 => 27,  76 => 25,  67 => 20,  58 => 14,  34 => 5,  27 => 3,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 11,  40 => 5,  37 => 16,  22 => 3,  246 => 93,  157 => 65,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 54,  115 => 47,  111 => 47,  108 => 45,  101 => 31,  98 => 30,  96 => 37,  83 => 33,  74 => 26,  66 => 18,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 8,  35 => 6,  32 => 5,  29 => 6,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 75,  182 => 62,  176 => 63,  173 => 71,  168 => 61,  164 => 67,  162 => 59,  154 => 60,  149 => 64,  147 => 54,  144 => 61,  141 => 51,  133 => 52,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 19,  103 => 18,  99 => 31,  95 => 38,  92 => 27,  86 => 19,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 15,  57 => 37,  54 => 25,  51 => 13,  48 => 12,  45 => 9,  42 => 9,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
