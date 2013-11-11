<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_64b14f87c275bff8ccc082c772a4b5f1e132b16d97204f1ad980a0b3b8739f84 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  21 => 2,  93 => 9,  78 => 40,  46 => 11,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  25 => 4,  24 => 2,  181 => 60,  171 => 73,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  138 => 57,  135 => 17,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 12,  104 => 11,  90 => 61,  88 => 6,  81 => 56,  77 => 54,  75 => 53,  68 => 48,  59 => 35,  44 => 10,  26 => 3,  31 => 5,  28 => 3,  19 => 1,  79 => 21,  72 => 16,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 21,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 39,  98 => 40,  96 => 6,  83 => 57,  74 => 14,  66 => 15,  55 => 13,  52 => 21,  50 => 14,  43 => 8,  41 => 9,  35 => 7,  32 => 6,  29 => 4,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 56,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 7,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 19,  60 => 6,  57 => 14,  54 => 11,  51 => 12,  48 => 9,  45 => 17,  42 => 6,  39 => 16,  36 => 7,  33 => 6,  30 => 3,);
    }
}
