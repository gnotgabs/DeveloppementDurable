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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
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
        return array (  54 => 11,  43 => 8,  40 => 7,  200 => 83,  195 => 79,  190 => 76,  185 => 72,  180 => 34,  175 => 21,  168 => 18,  165 => 17,  157 => 18,  154 => 17,  147 => 18,  144 => 17,  140 => 13,  137 => 12,  134 => 11,  129 => 7,  126 => 6,  120 => 84,  118 => 83,  113 => 80,  111 => 79,  107 => 77,  105 => 76,  100 => 73,  98 => 72,  59 => 35,  57 => 12,  41 => 23,  26 => 1,  104 => 55,  95 => 52,  91 => 51,  88 => 50,  85 => 44,  80 => 42,  76 => 41,  73 => 40,  70 => 39,  65 => 37,  62 => 36,  53 => 31,  44 => 24,  39 => 11,  35 => 9,  33 => 4,  30 => 3,);
    }
}
