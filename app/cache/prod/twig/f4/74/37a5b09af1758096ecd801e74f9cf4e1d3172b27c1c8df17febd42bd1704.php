<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f47437a5b09af1758096ecd801e74f9cf4e1d3172b27c1c8df17febd42bd1704 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  24 => 4,  181 => 60,  171 => 53,  161 => 42,  158 => 41,  155 => 40,  150 => 34,  145 => 21,  138 => 18,  135 => 17,  127 => 18,  124 => 17,  117 => 18,  114 => 17,  110 => 13,  107 => 12,  104 => 11,  96 => 6,  90 => 61,  88 => 60,  83 => 57,  81 => 56,  77 => 54,  75 => 53,  68 => 48,  66 => 40,  59 => 35,  44 => 24,  41 => 23,  35 => 9,  26 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 56,  173 => 63,  168 => 62,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 33,  103 => 32,  99 => 7,  95 => 28,  92 => 27,  86 => 24,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 34,  54 => 11,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  39 => 11,  36 => 5,  33 => 6,  30 => 3,);
    }
}
