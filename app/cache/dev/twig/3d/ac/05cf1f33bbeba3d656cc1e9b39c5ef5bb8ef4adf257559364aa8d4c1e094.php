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
        return array (  87 => 20,  55 => 13,  31 => 5,  25 => 4,  21 => 2,  94 => 22,  89 => 20,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  24 => 3,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  91 => 31,  86 => 28,  69 => 25,  66 => 15,  51 => 12,  49 => 19,  19 => 1,  93 => 9,  80 => 19,  78 => 40,  46 => 7,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  40 => 8,  200 => 83,  195 => 79,  190 => 76,  185 => 72,  180 => 34,  175 => 21,  168 => 72,  165 => 17,  157 => 18,  154 => 17,  147 => 18,  144 => 17,  140 => 13,  137 => 12,  134 => 11,  129 => 7,  126 => 6,  120 => 84,  118 => 83,  113 => 80,  111 => 79,  107 => 77,  105 => 40,  100 => 73,  98 => 40,  57 => 14,  41 => 9,  26 => 3,  101 => 24,  92 => 21,  88 => 6,  85 => 19,  82 => 43,  77 => 41,  73 => 40,  70 => 39,  67 => 38,  62 => 23,  59 => 35,  53 => 31,  44 => 10,  39 => 6,  35 => 4,  33 => 5,  30 => 3,);
    }
}
