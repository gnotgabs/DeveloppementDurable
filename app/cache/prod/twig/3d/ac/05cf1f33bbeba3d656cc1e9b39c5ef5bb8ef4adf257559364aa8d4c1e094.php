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
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "priorityName"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["log"]) ? $context["log"] : null), "message"), "html", null, true);
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
        return array (  26 => 3,  98 => 40,  93 => 9,  88 => 6,  46 => 7,  44 => 9,  35 => 4,  43 => 8,  41 => 5,  201 => 92,  196 => 90,  171 => 73,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  101 => 39,  66 => 24,  62 => 23,  49 => 19,  32 => 6,  25 => 3,  24 => 2,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 42,  166 => 71,  161 => 35,  156 => 66,  146 => 18,  138 => 57,  135 => 18,  128 => 19,  118 => 19,  115 => 43,  111 => 13,  108 => 12,  105 => 40,  100 => 7,  97 => 6,  91 => 31,  89 => 76,  84 => 73,  78 => 40,  76 => 67,  69 => 25,  67 => 41,  58 => 35,  40 => 8,  34 => 6,  27 => 4,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 19,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 18,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 28,  82 => 70,  80 => 41,  73 => 19,  64 => 15,  60 => 36,  57 => 12,  54 => 11,  51 => 9,  48 => 9,  45 => 25,  42 => 6,  39 => 16,  36 => 7,  33 => 4,  30 => 3,);
    }
}
