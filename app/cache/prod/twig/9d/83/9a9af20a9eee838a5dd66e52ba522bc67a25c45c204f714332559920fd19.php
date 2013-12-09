<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_9d839a9af20a9eee838a5dd66e52ba522bc67a25c45c204f714332559920fd19 extends Twig_Template
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
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo "\" message=\"";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
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
        return array (  25 => 3,  24 => 4,  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 58,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 42,  170 => 41,  165 => 35,  152 => 19,  126 => 18,  108 => 12,  105 => 11,  100 => 7,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 68,  76 => 67,  69 => 62,  67 => 41,  60 => 36,  58 => 35,  42 => 24,  40 => 11,  36 => 9,  34 => 6,  27 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 19,  137 => 18,  129 => 19,  124 => 35,  121 => 34,  118 => 19,  115 => 18,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 22,  90 => 21,  81 => 19,  70 => 15,  66 => 13,  62 => 12,  59 => 11,  56 => 10,  52 => 9,  49 => 8,  45 => 25,  41 => 6,  37 => 5,  33 => 4,  30 => 3,);
    }
}
