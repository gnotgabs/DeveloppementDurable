<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_89333ecaa69d98b8b58a09271b4c4453348ccae0d24067011e1194efeab7546f extends Twig_Template
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
        echo twig_escape_filter($this->env, (((((isset($context["status_code"]) ? $context["status_code"] : null) . " | ") . (isset($context["status_text"]) ? $context["status_text"] : null)) . " | ") . $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message"), "html", null, true);
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo twig_escape_filter($this->env, ((isset($context["i"]) ? $context["i"] : null) + 1), "html", null, true);
            echo "] ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "class"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["e"]) ? $context["e"] : null), "message"), "html", null, true);
            echo "
";
            // line 5
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => (isset($context["e"]) ? $context["e"] : null)));
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
        return array (  43 => 6,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  115 => 43,  105 => 40,  101 => 39,  91 => 31,  69 => 25,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 2,  184 => 62,  179 => 57,  171 => 73,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  145 => 21,  138 => 57,  135 => 17,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 12,  104 => 11,  96 => 6,  90 => 63,  88 => 62,  83 => 59,  81 => 56,  77 => 54,  75 => 53,  68 => 48,  66 => 24,  59 => 35,  44 => 24,  41 => 5,  35 => 9,  26 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 56,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 7,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 34,  54 => 21,  51 => 20,  48 => 9,  45 => 8,  42 => 7,  39 => 16,  36 => 5,  33 => 6,  30 => 3,);
    }
}
