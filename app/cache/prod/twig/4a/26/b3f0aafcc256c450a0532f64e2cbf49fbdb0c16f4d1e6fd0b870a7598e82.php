<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_4a26b3f0aafcc256c450a0532f64e2cbf49fbdb0c16f4d1e6fd0b870a7598e82 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : null), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
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
        return array (  40 => 7,  43 => 8,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 70,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  115 => 43,  105 => 40,  101 => 39,  91 => 31,  69 => 25,  62 => 23,  49 => 19,  32 => 4,  25 => 3,  24 => 2,  184 => 62,  179 => 57,  171 => 73,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  145 => 21,  138 => 57,  135 => 17,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 12,  104 => 11,  96 => 6,  90 => 63,  88 => 62,  83 => 59,  81 => 56,  77 => 54,  75 => 53,  68 => 48,  66 => 24,  59 => 35,  44 => 7,  41 => 5,  35 => 5,  26 => 1,  31 => 4,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 56,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 51,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 7,  95 => 28,  92 => 27,  86 => 28,  82 => 22,  80 => 21,  73 => 19,  64 => 15,  60 => 13,  57 => 12,  54 => 11,  51 => 9,  48 => 9,  45 => 8,  42 => 6,  39 => 16,  36 => 5,  33 => 4,  30 => 3,);
    }
}
