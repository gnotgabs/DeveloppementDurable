<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_11d84165dd9651ca867f35ec931631ec3fa1ad370dfea238b52f7913c5cba3dc extends Twig_Template
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
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".

Please e-mail us at [email] and let us know what you were doing when this
error occurred. We will fix it as soon as possible. Sorry for any
inconvenience caused.
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  194 => 63,  186 => 57,  181 => 54,  171 => 43,  165 => 41,  160 => 35,  155 => 22,  148 => 19,  137 => 19,  134 => 18,  127 => 19,  124 => 18,  117 => 19,  114 => 18,  110 => 13,  107 => 12,  104 => 11,  90 => 64,  88 => 63,  81 => 57,  77 => 55,  75 => 54,  68 => 49,  59 => 36,  44 => 25,  26 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 13,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 18,  139 => 45,  131 => 42,  123 => 41,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  101 => 33,  98 => 32,  96 => 6,  83 => 60,  74 => 14,  66 => 41,  55 => 16,  52 => 21,  50 => 14,  43 => 9,  41 => 24,  35 => 9,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 58,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 42,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 7,  95 => 28,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  60 => 6,  57 => 35,  54 => 22,  51 => 10,  48 => 9,  45 => 17,  42 => 16,  39 => 11,  36 => 5,  33 => 6,  30 => 3,);
    }
}
