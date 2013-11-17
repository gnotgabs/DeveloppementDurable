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
        return array (  26 => 3,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  85 => 19,  79 => 18,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  24 => 3,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  101 => 24,  91 => 31,  86 => 28,  66 => 15,  62 => 23,  51 => 12,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  80 => 19,  78 => 40,  46 => 7,  44 => 10,  36 => 7,  22 => 2,  57 => 14,  54 => 21,  43 => 8,  40 => 8,  33 => 5,  30 => 3,  204 => 95,  201 => 92,  194 => 87,  189 => 85,  184 => 83,  177 => 79,  172 => 77,  167 => 75,  160 => 71,  155 => 69,  150 => 67,  143 => 63,  138 => 57,  133 => 55,  126 => 55,  121 => 46,  116 => 51,  109 => 47,  104 => 45,  99 => 43,  92 => 21,  87 => 20,  82 => 35,  75 => 17,  69 => 25,  63 => 27,  60 => 26,  53 => 23,  50 => 8,  41 => 9,  35 => 4,  32 => 12,  27 => 4,);
    }
}
