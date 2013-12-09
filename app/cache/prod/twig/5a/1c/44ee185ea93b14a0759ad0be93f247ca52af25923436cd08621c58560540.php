<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5a1c44ee185ea93b14a0759ad0be93f247ca52af25923436cd08621c58560540 extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 92,  224 => 91,  221 => 90,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  162 => 59,  158 => 57,  155 => 56,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  75 => 24,  53 => 19,  32 => 12,  25 => 3,  24 => 4,  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 82,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 63,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 12,  105 => 31,  100 => 28,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 25,  76 => 67,  69 => 62,  67 => 41,  60 => 21,  58 => 35,  42 => 24,  40 => 16,  36 => 9,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 34,  118 => 19,  115 => 39,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 22,  90 => 21,  81 => 19,  70 => 23,  66 => 13,  62 => 12,  59 => 11,  56 => 20,  52 => 9,  49 => 8,  45 => 25,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
