<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ea8907a3a0fbb079f1e35bb6ff863458188184f4f82ec57c906b399a272d5e61 extends Twig_Template
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
        echo "        <traces>
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $_trace_));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  109 => 21,  106 => 20,  101 => 19,  85 => 16,  77 => 12,  39 => 7,  110 => 20,  65 => 14,  63 => 13,  26 => 4,  98 => 40,  88 => 17,  80 => 15,  46 => 9,  44 => 9,  43 => 8,  57 => 11,  50 => 7,  47 => 7,  38 => 5,  227 => 92,  224 => 91,  221 => 90,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  162 => 59,  158 => 57,  155 => 56,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  75 => 24,  53 => 19,  32 => 4,  25 => 3,  24 => 4,  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 82,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 63,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 12,  105 => 31,  100 => 19,  91 => 77,  89 => 16,  84 => 73,  82 => 70,  78 => 40,  76 => 67,  69 => 62,  67 => 9,  60 => 12,  58 => 12,  42 => 24,  40 => 7,  36 => 6,  34 => 5,  27 => 3,  31 => 4,  28 => 4,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 24,  118 => 19,  115 => 39,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 12,  59 => 8,  56 => 20,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 5,  33 => 5,  30 => 4,);
    }
}
