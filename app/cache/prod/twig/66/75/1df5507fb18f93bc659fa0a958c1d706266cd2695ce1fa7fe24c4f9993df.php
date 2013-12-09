<?php

/* DoctrineBundle:Collector:explain.html.twig */
class __TwigTemplate_66751df5507fb18f93bc659fa0a958c1d706266cd2695ce1fa7fe24c4f9993df extends Twig_Template
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
        echo "<strong>Explanation:</strong>

<table style=\"margin: 5px 0;\">
    <thead>
        <tr>
            ";
        // line 6
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute($_data_, 0, array(), "array")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 7
            echo "                <th>";
            if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
            echo twig_escape_filter($this->env, $_label_, "html", null, true);
            echo "</th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </tr>
    </thead>
    <tbody>
        ";
        // line 12
        if (isset($context["data"])) { $_data_ = $context["data"]; } else { $_data_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_data_);
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 13
            echo "        <tr>
            ";
            // line 14
            if (isset($context["row"])) { $_row_ = $context["row"]; } else { $_row_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_row_);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "                <td>";
                if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                echo twig_escape_filter($this->env, $_item_, "html", null, true);
                echo "</td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </tbody>
</table>";
    }

    public function getTemplateName()
    {
        return "DoctrineBundle:Collector:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 49,  138 => 44,  134 => 43,  131 => 42,  122 => 37,  117 => 36,  102 => 28,  92 => 25,  72 => 15,  51 => 13,  48 => 7,  35 => 5,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 51,  127 => 41,  112 => 32,  96 => 25,  71 => 17,  55 => 15,  114 => 22,  109 => 31,  106 => 20,  101 => 19,  85 => 22,  77 => 12,  39 => 7,  110 => 20,  65 => 14,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 9,  43 => 7,  57 => 11,  50 => 7,  47 => 7,  38 => 6,  227 => 92,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 56,  155 => 55,  142 => 52,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  75 => 24,  53 => 19,  32 => 4,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 60,  207 => 70,  200 => 54,  194 => 64,  190 => 51,  185 => 49,  176 => 43,  173 => 58,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 31,  105 => 31,  100 => 27,  91 => 77,  89 => 16,  84 => 21,  82 => 70,  78 => 40,  76 => 19,  69 => 17,  67 => 15,  60 => 12,  58 => 10,  42 => 24,  40 => 6,  36 => 6,  34 => 5,  27 => 3,  31 => 7,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 24,  118 => 36,  115 => 39,  111 => 32,  107 => 28,  104 => 28,  97 => 6,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 11,  59 => 15,  56 => 12,  52 => 10,  49 => 9,  45 => 6,  41 => 9,  37 => 5,  33 => 4,  30 => 3,);
    }
}
