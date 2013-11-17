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
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
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
        return array (  25 => 3,  24 => 4,  225 => 76,  220 => 71,  217 => 70,  212 => 67,  207 => 60,  201 => 58,  194 => 54,  185 => 51,  180 => 49,  171 => 43,  165 => 41,  160 => 35,  155 => 22,  148 => 19,  137 => 19,  134 => 18,  127 => 19,  124 => 18,  117 => 19,  114 => 18,  110 => 13,  107 => 12,  104 => 11,  90 => 77,  88 => 76,  81 => 70,  77 => 68,  75 => 67,  68 => 62,  59 => 36,  44 => 25,  26 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 13,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 18,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 33,  98 => 32,  96 => 6,  83 => 73,  74 => 14,  66 => 41,  55 => 16,  52 => 21,  50 => 14,  43 => 9,  41 => 24,  35 => 9,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 52,  187 => 70,  182 => 50,  176 => 64,  173 => 63,  168 => 42,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 7,  95 => 28,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  60 => 6,  57 => 35,  54 => 22,  51 => 10,  48 => 9,  45 => 17,  42 => 16,  39 => 11,  36 => 5,  33 => 6,  30 => 3,);
    }
}
