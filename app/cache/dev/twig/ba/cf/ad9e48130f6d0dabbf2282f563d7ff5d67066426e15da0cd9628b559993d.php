<?php

/* ArticleDevBundle::voletgauche.html.twig */
class __TwigTemplate_bacfad9e48130f6d0dabbf2282f563d7ff5d67066426e15da0cd9628b559993d extends Twig_Template
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
    }

    // line 1
    public function getvoletGauche($_articles = null, $_lMenus = null)
    {
        $context = $this->env->mergeGlobals(array(
            "articles" => $_articles,
            "lMenus" => $_lMenus,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    ";
            // line 3
            if ((twig_length_filter($this->env, $this->getContext($context, "articles")) != 0)) {
                // line 4
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 5
                    echo "            <div id=\"question\">
                <p class=\"title\">Exercez vous</p>
                <a href=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_question", array("idSC" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"), "idQ" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
                    echo "\" class=\"aQuiz\">
                    Accédez aux questions
                </a>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            // line 13
            echo "    <div id=\"autres\">
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lMenus"));
            foreach ($context['_seq'] as $context["_key"] => $context["lmenu"]) {
                // line 15
                echo "            <p class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lmenu"), "title"), "html", null, true);
                echo "</p>
            ";
                // line 16
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "lmenu"), "lMenuElts"));
                foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
                    // line 17
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elt"), "linkElt"), "html", null, true);
                    echo "\" class=\"aQuiz\" target='_blank'>
                    >&nbsp;&nbsp;";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elt"), "labelElt"), "html", null, true);
                    echo "
                </a>
            <br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lmenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle::voletgauche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 64,  81 => 33,  290 => 107,  284 => 103,  276 => 97,  261 => 92,  233 => 81,  206 => 72,  197 => 69,  188 => 64,  167 => 64,  153 => 59,  129 => 51,  77 => 17,  256 => 102,  248 => 96,  244 => 94,  228 => 87,  225 => 86,  215 => 76,  210 => 80,  207 => 74,  194 => 67,  175 => 60,  124 => 55,  65 => 23,  174 => 77,  165 => 73,  113 => 49,  90 => 38,  155 => 74,  148 => 52,  137 => 65,  126 => 51,  104 => 29,  205 => 96,  185 => 63,  178 => 61,  134 => 48,  127 => 56,  110 => 43,  70 => 30,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 88,  247 => 78,  241 => 84,  229 => 73,  220 => 79,  214 => 69,  177 => 77,  140 => 60,  132 => 58,  107 => 49,  61 => 13,  273 => 96,  269 => 95,  254 => 92,  243 => 85,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 61,  119 => 48,  102 => 39,  71 => 19,  63 => 27,  59 => 21,  38 => 4,  94 => 40,  85 => 34,  75 => 25,  68 => 15,  56 => 20,  87 => 30,  21 => 1,  26 => 6,  93 => 43,  88 => 34,  46 => 21,  44 => 12,  201 => 92,  196 => 75,  171 => 59,  163 => 72,  158 => 55,  151 => 67,  142 => 62,  136 => 55,  121 => 54,  117 => 52,  62 => 33,  49 => 19,  25 => 3,  24 => 4,  232 => 88,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 68,  190 => 86,  186 => 51,  183 => 63,  181 => 69,  172 => 43,  169 => 60,  166 => 57,  161 => 71,  156 => 68,  146 => 59,  138 => 56,  135 => 59,  128 => 52,  118 => 19,  105 => 43,  100 => 38,  97 => 41,  91 => 44,  89 => 35,  84 => 33,  78 => 27,  76 => 27,  67 => 30,  58 => 12,  34 => 6,  27 => 4,  31 => 6,  28 => 4,  19 => 1,  79 => 31,  72 => 26,  69 => 29,  47 => 7,  40 => 5,  37 => 16,  22 => 2,  246 => 90,  157 => 65,  145 => 46,  139 => 55,  131 => 47,  123 => 50,  120 => 54,  115 => 47,  111 => 46,  108 => 45,  101 => 42,  98 => 23,  96 => 36,  83 => 37,  74 => 26,  66 => 24,  55 => 19,  52 => 23,  50 => 22,  43 => 5,  41 => 10,  35 => 8,  32 => 7,  29 => 5,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 62,  176 => 64,  173 => 71,  168 => 73,  164 => 67,  162 => 78,  154 => 58,  149 => 64,  147 => 56,  144 => 61,  141 => 64,  133 => 52,  130 => 52,  125 => 51,  122 => 50,  116 => 47,  112 => 43,  109 => 43,  106 => 40,  103 => 40,  99 => 39,  95 => 38,  92 => 22,  86 => 38,  82 => 18,  80 => 19,  73 => 16,  64 => 14,  60 => 26,  57 => 10,  54 => 25,  51 => 14,  48 => 13,  45 => 7,  42 => 7,  39 => 17,  36 => 3,  33 => 2,  30 => 5,);
    }
}
