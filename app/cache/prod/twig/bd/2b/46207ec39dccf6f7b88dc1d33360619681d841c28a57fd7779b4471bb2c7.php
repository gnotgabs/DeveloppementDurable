<?php

/* TwigBundle:Exception:logs.html.twig */
class __TwigTemplate_bd2b46207ec39dccf6f7b88dc1d33360619681d841c28a57fd7779b4471bb2c7 extends Twig_Template
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
        if (isset($context["logs"])) { $_logs_ = $context["logs"]; } else { $_logs_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_logs_);
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            if (($this->getAttribute($_log_, "priority") >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($_log_, "priority") >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "priorityName"), "html", null, true);
            echo " - ";
            if (isset($context["log"])) { $_log_ = $context["log"]; } else { $_log_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_log_, "message"), "html", null, true);
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
        return array (  98 => 40,  88 => 6,  80 => 41,  46 => 10,  44 => 9,  43 => 8,  57 => 11,  50 => 7,  47 => 6,  38 => 5,  227 => 92,  224 => 91,  221 => 90,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  162 => 59,  158 => 57,  155 => 56,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  75 => 24,  53 => 19,  32 => 6,  25 => 3,  24 => 4,  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 82,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 63,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 12,  105 => 31,  100 => 28,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 40,  76 => 67,  69 => 62,  67 => 41,  60 => 12,  58 => 35,  42 => 24,  40 => 8,  36 => 7,  34 => 6,  27 => 3,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 34,  118 => 19,  115 => 39,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 9,  90 => 21,  81 => 19,  70 => 23,  66 => 13,  62 => 12,  59 => 11,  56 => 20,  52 => 6,  49 => 5,  45 => 25,  41 => 6,  37 => 4,  33 => 4,  30 => 3,);
    }
}
