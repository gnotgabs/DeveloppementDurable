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
            if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
            if ((twig_length_filter($this->env, $_articles_) != 0)) {
                // line 4
                echo "        ";
                if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $_articles_, 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 5
                    echo "            <div id=\"question\">
                <p class=\"title\">Exercez vous</p>
                <a href=\"";
                    // line 7
                    if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_question", array("idSC" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"), "idQ" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"))), "html", null, true);
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
            if (isset($context["lMenus"])) { $_lMenus_ = $context["lMenus"]; } else { $_lMenus_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_lMenus_);
            foreach ($context['_seq'] as $context["_key"] => $context["lmenu"]) {
                // line 15
                echo "            <p class=\"title\">";
                if (isset($context["lmenu"])) { $_lmenu_ = $context["lmenu"]; } else { $_lmenu_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_lmenu_, "title"), "html", null, true);
                echo "</p>
            ";
                // line 16
                if (isset($context["lmenu"])) { $_lmenu_ = $context["lmenu"]; } else { $_lmenu_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_lmenu_, "lMenuElts"));
                foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
                    // line 17
                    echo "                <a href=\"";
                    if (isset($context["elt"])) { $_elt_ = $context["elt"]; } else { $_elt_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_elt_, "linkElt"), "html", null, true);
                    echo "\" class=\"aQuiz\" target='_blank'>
                    >&nbsp;&nbsp;";
                    // line 18
                    if (isset($context["elt"])) { $_elt_ = $context["elt"]; } else { $_elt_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_elt_, "labelElt"), "html", null, true);
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
        return array (  64 => 13,  135 => 50,  74 => 26,  21 => 1,  156 => 60,  148 => 59,  151 => 59,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 34,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 61,  154 => 50,  144 => 56,  141 => 56,  128 => 47,  86 => 37,  83 => 17,  132 => 49,  103 => 36,  94 => 21,  188 => 74,  182 => 58,  174 => 65,  168 => 64,  145 => 51,  123 => 46,  73 => 27,  116 => 43,  68 => 24,  61 => 12,  230 => 80,  199 => 63,  179 => 57,  167 => 65,  159 => 64,  153 => 60,  139 => 55,  119 => 43,  113 => 46,  99 => 43,  87 => 28,  79 => 27,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 54,  131 => 54,  122 => 50,  117 => 40,  102 => 36,  92 => 38,  72 => 15,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 52,  147 => 60,  127 => 51,  112 => 39,  96 => 38,  71 => 29,  55 => 15,  114 => 49,  109 => 38,  106 => 23,  101 => 40,  85 => 33,  77 => 12,  39 => 4,  110 => 20,  65 => 27,  63 => 13,  26 => 6,  98 => 38,  88 => 37,  80 => 33,  46 => 12,  44 => 12,  43 => 11,  57 => 26,  50 => 22,  47 => 13,  38 => 9,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 61,  155 => 64,  142 => 57,  136 => 55,  133 => 48,  130 => 49,  120 => 55,  75 => 32,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 64,  152 => 55,  126 => 18,  108 => 47,  105 => 28,  100 => 22,  91 => 39,  89 => 18,  84 => 31,  82 => 32,  78 => 16,  76 => 30,  69 => 30,  67 => 14,  60 => 10,  58 => 26,  42 => 24,  40 => 17,  36 => 3,  34 => 5,  27 => 4,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 77,  193 => 61,  187 => 73,  183 => 62,  180 => 71,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 55,  149 => 57,  146 => 66,  140 => 51,  137 => 18,  129 => 52,  124 => 43,  121 => 46,  118 => 44,  115 => 44,  111 => 42,  107 => 38,  104 => 38,  97 => 30,  93 => 30,  90 => 33,  81 => 35,  70 => 28,  66 => 29,  62 => 26,  59 => 21,  56 => 20,  52 => 24,  49 => 7,  45 => 5,  41 => 10,  37 => 16,  33 => 2,  30 => 5,);
    }
}
