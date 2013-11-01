<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_331ed25b27803050a53720fe0b9721dc5401147d5d486dfb87fe77947699340d extends Twig_Template
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
        echo "/*
";
        // line 2
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 92,  196 => 90,  183 => 82,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 44,  91 => 31,  62 => 23,  49 => 19,  25 => 3,  24 => 3,  200 => 83,  195 => 79,  190 => 76,  185 => 72,  180 => 34,  175 => 21,  165 => 17,  140 => 13,  137 => 12,  134 => 11,  129 => 7,  126 => 6,  118 => 83,  113 => 80,  107 => 77,  105 => 40,  100 => 73,  59 => 35,  44 => 24,  26 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 13,  69 => 25,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 18,  145 => 46,  139 => 45,  131 => 42,  123 => 47,  120 => 84,  115 => 43,  111 => 79,  108 => 37,  101 => 39,  98 => 72,  96 => 31,  83 => 25,  74 => 14,  66 => 24,  55 => 16,  52 => 21,  50 => 14,  43 => 9,  41 => 23,  35 => 9,  32 => 12,  29 => 6,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 17,  149 => 51,  147 => 18,  144 => 17,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  60 => 6,  57 => 34,  54 => 21,  51 => 20,  48 => 9,  45 => 17,  42 => 16,  39 => 16,  36 => 5,  33 => 6,  30 => 3,);
    }
}
