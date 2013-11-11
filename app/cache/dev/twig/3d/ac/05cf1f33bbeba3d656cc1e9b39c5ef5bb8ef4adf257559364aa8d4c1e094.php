<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_3dac05cf1f33bbeba3d656cc1e9b39c5ef5bb8ef4adf257559364aa8d4c1e094 extends Twig_Template
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
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : $this->getContext($context, "log")), "message"), "html", null, true);
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  78 => 40,  46 => 7,  27 => 4,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  121 => 46,  105 => 40,  91 => 31,  62 => 23,  49 => 19,  25 => 3,  24 => 2,  181 => 60,  171 => 73,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  138 => 57,  135 => 17,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 12,  104 => 11,  90 => 61,  88 => 6,  81 => 56,  77 => 54,  75 => 53,  68 => 48,  59 => 35,  44 => 9,  26 => 3,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 13,  69 => 25,  47 => 18,  40 => 8,  37 => 10,  22 => 2,  246 => 32,  157 => 56,  145 => 21,  139 => 45,  131 => 42,  123 => 47,  120 => 40,  115 => 43,  111 => 38,  108 => 37,  101 => 39,  98 => 40,  96 => 6,  83 => 57,  74 => 14,  66 => 24,  55 => 16,  52 => 21,  50 => 14,  43 => 8,  41 => 5,  35 => 4,  32 => 6,  29 => 6,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 56,  173 => 74,  168 => 72,  164 => 58,  162 => 57,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 7,  95 => 28,  92 => 29,  86 => 28,  82 => 22,  80 => 41,  73 => 19,  64 => 19,  60 => 6,  57 => 12,  54 => 11,  51 => 9,  48 => 9,  45 => 17,  42 => 6,  39 => 16,  36 => 7,  33 => 4,  30 => 3,);
    }
}
