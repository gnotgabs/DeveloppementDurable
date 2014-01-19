<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_eb56836e7e5a5dd3e037f1b94a78274b68ba8c0c57f6128a846b9df72931b60a extends Twig_Template
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
        echo "[exception] ";
        echo twig_escape_filter($this->env, (((($this->getContext($context, "status_code") . " | ") . $this->getContext($context, "status_text")) . " | ") . $this->getAttribute($this->getContext($context, "exception"), "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "exception"), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ($this->getContext($context, "i") + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "e"), "message"), "html", null, true);
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => $this->getContext($context, "e")));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  171 => 73,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  117 => 44,  62 => 23,  49 => 19,  25 => 3,  24 => 2,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 42,  166 => 71,  161 => 35,  156 => 66,  146 => 18,  138 => 57,  135 => 18,  128 => 19,  118 => 19,  105 => 40,  100 => 7,  97 => 6,  91 => 31,  89 => 76,  84 => 73,  78 => 68,  76 => 67,  67 => 41,  58 => 35,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 13,  69 => 25,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 13,  108 => 12,  101 => 39,  98 => 32,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 16,  52 => 21,  50 => 14,  43 => 6,  41 => 5,  35 => 9,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 19,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 18,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 70,  80 => 24,  73 => 19,  64 => 19,  60 => 36,  57 => 12,  54 => 21,  51 => 20,  48 => 9,  45 => 25,  42 => 24,  39 => 16,  36 => 9,  33 => 4,  30 => 3,);
    }
}
