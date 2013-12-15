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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "exception"), "message"), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_code"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "status_text"), "html", null, true);
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
        return array (  57 => 12,  43 => 8,  40 => 7,  33 => 4,  269 => 108,  261 => 102,  257 => 100,  245 => 94,  241 => 93,  238 => 92,  230 => 90,  228 => 89,  223 => 86,  220 => 80,  216 => 77,  207 => 73,  198 => 70,  196 => 69,  191 => 67,  188 => 66,  184 => 65,  181 => 64,  179 => 63,  174 => 62,  171 => 61,  161 => 58,  155 => 56,  152 => 55,  147 => 54,  144 => 53,  131 => 45,  127 => 43,  122 => 42,  119 => 41,  111 => 30,  105 => 29,  102 => 28,  99 => 27,  94 => 36,  80 => 35,  77 => 34,  74 => 27,  71 => 26,  54 => 11,  48 => 23,  45 => 22,  38 => 16,  35 => 15,  30 => 3,);
    }
}
