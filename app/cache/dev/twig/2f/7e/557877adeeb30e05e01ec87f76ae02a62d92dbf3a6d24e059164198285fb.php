<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_2f7e557877adeeb30e05e01ec87f76ae02a62d92dbf3a6d24e059164198285fb extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == $this->getContext($context, "position"))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 323,  347 => 322,  20 => 1,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  690 => 467,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 408,  520 => 406,  515 => 404,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 281,  296 => 121,  293 => 120,  281 => 114,  259 => 103,  253 => 100,  222 => 83,  184 => 63,  170 => 84,  152 => 46,  363 => 153,  357 => 123,  353 => 149,  344 => 321,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  231 => 83,  212 => 78,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 333,  351 => 120,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 280,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  226 => 84,  216 => 79,  200 => 72,  191 => 67,  114 => 18,  23 => 4,  150 => 55,  81 => 23,  290 => 119,  284 => 103,  276 => 111,  261 => 92,  233 => 87,  206 => 72,  197 => 69,  188 => 90,  167 => 64,  153 => 77,  129 => 31,  77 => 17,  256 => 96,  248 => 97,  244 => 136,  228 => 87,  225 => 86,  215 => 76,  210 => 77,  207 => 75,  194 => 68,  175 => 58,  124 => 22,  65 => 11,  174 => 65,  165 => 83,  113 => 48,  90 => 37,  155 => 47,  148 => 52,  137 => 37,  126 => 51,  104 => 32,  205 => 96,  185 => 74,  178 => 59,  134 => 39,  127 => 35,  110 => 43,  70 => 26,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 150,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 88,  247 => 78,  241 => 93,  229 => 87,  220 => 81,  214 => 69,  177 => 77,  140 => 58,  132 => 32,  107 => 49,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 86,  238 => 85,  235 => 89,  230 => 82,  227 => 86,  224 => 81,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 51,  119 => 40,  102 => 33,  71 => 23,  63 => 21,  59 => 22,  38 => 12,  94 => 21,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  87 => 32,  21 => 2,  26 => 3,  93 => 38,  88 => 25,  46 => 14,  44 => 11,  201 => 92,  196 => 92,  171 => 59,  163 => 82,  158 => 80,  151 => 59,  142 => 62,  136 => 71,  121 => 50,  117 => 39,  62 => 24,  49 => 14,  25 => 3,  24 => 2,  232 => 88,  221 => 77,  218 => 70,  213 => 78,  208 => 76,  202 => 77,  195 => 68,  190 => 76,  186 => 51,  183 => 63,  181 => 65,  172 => 57,  169 => 60,  166 => 54,  161 => 63,  156 => 62,  146 => 59,  138 => 56,  135 => 59,  128 => 52,  118 => 49,  105 => 25,  100 => 39,  97 => 41,  91 => 35,  89 => 30,  84 => 27,  78 => 18,  76 => 28,  67 => 22,  58 => 18,  34 => 5,  27 => 7,  31 => 8,  28 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 21,  40 => 8,  37 => 7,  22 => 2,  246 => 96,  157 => 65,  145 => 74,  139 => 49,  131 => 45,  123 => 61,  120 => 31,  115 => 47,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 30,  74 => 26,  66 => 25,  55 => 38,  52 => 12,  50 => 15,  43 => 12,  41 => 19,  35 => 9,  32 => 6,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 73,  189 => 66,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 67,  162 => 59,  154 => 60,  149 => 64,  147 => 75,  144 => 42,  141 => 73,  133 => 52,  130 => 46,  125 => 42,  122 => 41,  116 => 57,  112 => 36,  109 => 52,  106 => 51,  103 => 18,  99 => 23,  95 => 39,  92 => 28,  86 => 19,  82 => 19,  80 => 29,  73 => 33,  64 => 24,  60 => 15,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 9,  42 => 12,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
