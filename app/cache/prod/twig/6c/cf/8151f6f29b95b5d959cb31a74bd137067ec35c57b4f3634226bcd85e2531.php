<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_6ccf8151f6f29b95b5d959cb31a74bd137067ec35c57b4f3634226bcd85e2531 extends Twig_Template
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
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 3,  24 => 4,  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 58,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 42,  170 => 41,  165 => 35,  152 => 19,  126 => 18,  108 => 12,  105 => 11,  100 => 7,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 68,  76 => 67,  69 => 62,  67 => 41,  60 => 36,  58 => 35,  42 => 24,  40 => 11,  36 => 9,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 19,  137 => 18,  129 => 19,  124 => 35,  121 => 34,  118 => 19,  115 => 18,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 22,  90 => 21,  81 => 19,  70 => 15,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 25,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
