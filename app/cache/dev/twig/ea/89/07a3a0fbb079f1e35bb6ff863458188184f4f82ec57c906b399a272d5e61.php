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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "trace"));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $this->getContext($context, "trace")));
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
        return array (  94 => 22,  85 => 19,  75 => 17,  68 => 14,  56 => 9,  87 => 20,  21 => 2,  26 => 3,  93 => 9,  88 => 6,  46 => 11,  44 => 10,  201 => 92,  196 => 90,  171 => 73,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  117 => 44,  62 => 23,  49 => 19,  25 => 3,  24 => 3,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 42,  166 => 71,  161 => 35,  156 => 66,  146 => 18,  138 => 57,  135 => 18,  128 => 19,  118 => 19,  105 => 40,  100 => 7,  97 => 6,  91 => 31,  89 => 20,  84 => 73,  78 => 40,  76 => 67,  67 => 41,  58 => 35,  34 => 6,  27 => 4,  31 => 5,  28 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 13,  108 => 12,  101 => 24,  98 => 40,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 13,  52 => 21,  50 => 8,  43 => 8,  41 => 7,  35 => 7,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 19,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 18,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 21,  86 => 28,  82 => 70,  80 => 19,  73 => 19,  64 => 12,  60 => 36,  57 => 14,  54 => 11,  51 => 12,  48 => 9,  45 => 25,  42 => 6,  39 => 8,  36 => 7,  33 => 5,  30 => 3,);
    }
}
