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
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : null))));
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
        return array (  201 => 92,  196 => 90,  171 => 73,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  101 => 39,  66 => 24,  62 => 23,  49 => 19,  32 => 12,  25 => 3,  24 => 3,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 42,  166 => 71,  161 => 35,  156 => 66,  146 => 18,  138 => 57,  135 => 18,  128 => 19,  118 => 19,  115 => 43,  111 => 13,  108 => 12,  105 => 40,  100 => 7,  97 => 6,  91 => 31,  89 => 76,  84 => 73,  78 => 68,  76 => 67,  69 => 25,  67 => 41,  58 => 35,  40 => 11,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 19,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 18,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 28,  82 => 70,  80 => 21,  73 => 19,  64 => 15,  60 => 36,  57 => 12,  54 => 21,  51 => 20,  48 => 9,  45 => 25,  42 => 24,  39 => 16,  36 => 9,  33 => 4,  30 => 3,);
    }
}
