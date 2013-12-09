<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_dc0d7d4b136c306e8925e47f249455b3f9ac22e767b0661d0af57ac68d9c4528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/framework/css/exception.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
        echo " (";
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        echo twig_escape_filter($this->env, $_status_code_, "html", null, true);
        echo " ";
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_escape_filter($this->env, $_status_text_, "html", null, true);
        echo ")
";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "    ";
        $this->env->loadTemplate("TwigBundle:Exception:exception.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  57 => 11,  50 => 7,  47 => 6,  38 => 5,  227 => 92,  224 => 91,  221 => 90,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  162 => 59,  158 => 57,  155 => 56,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  75 => 24,  53 => 19,  32 => 3,  25 => 3,  24 => 4,  237 => 76,  223 => 70,  218 => 67,  213 => 60,  207 => 82,  200 => 54,  194 => 52,  190 => 51,  185 => 49,  176 => 43,  173 => 63,  170 => 41,  165 => 35,  152 => 55,  126 => 18,  108 => 12,  105 => 31,  100 => 28,  91 => 77,  89 => 76,  84 => 73,  82 => 70,  78 => 25,  76 => 67,  69 => 62,  67 => 41,  60 => 12,  58 => 35,  42 => 24,  40 => 7,  36 => 9,  34 => 6,  27 => 2,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  232 => 82,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 50,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 22,  157 => 48,  149 => 18,  146 => 41,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 34,  118 => 19,  115 => 39,  111 => 13,  107 => 28,  104 => 27,  97 => 6,  93 => 22,  90 => 21,  81 => 19,  70 => 23,  66 => 13,  62 => 12,  59 => 11,  56 => 20,  52 => 6,  49 => 5,  45 => 25,  41 => 6,  37 => 4,  33 => 4,  30 => 3,);
    }
}
