<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_58ab18b6bab468d25e827144ed1383fec82a6529e0fcaa886cf0627a4bc70bba extends Twig_Template
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
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "

*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  172 => 43,  169 => 42,  166 => 41,  161 => 35,  156 => 22,  146 => 18,  138 => 19,  135 => 18,  128 => 19,  118 => 19,  115 => 18,  111 => 13,  108 => 12,  105 => 11,  100 => 7,  97 => 6,  91 => 77,  89 => 76,  84 => 73,  78 => 68,  76 => 67,  69 => 62,  67 => 41,  58 => 35,  40 => 11,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 19,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 18,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 24,  82 => 70,  80 => 21,  73 => 19,  64 => 15,  60 => 36,  57 => 12,  54 => 11,  51 => 10,  48 => 9,  45 => 25,  42 => 24,  39 => 6,  36 => 9,  33 => 4,  30 => 3,);
    }
}
