<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_554dc1d1cb997a0680b1b2253d4de34ac8848e89e1b917f80c85ba5b43e7e906 extends Twig_Template
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
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 83,  195 => 79,  190 => 76,  185 => 72,  180 => 34,  175 => 21,  165 => 17,  140 => 13,  137 => 12,  134 => 11,  129 => 7,  126 => 6,  118 => 83,  113 => 80,  107 => 77,  105 => 76,  100 => 73,  59 => 35,  44 => 24,  26 => 1,  31 => 4,  28 => 3,  19 => 1,  79 => 21,  72 => 13,  69 => 12,  47 => 18,  40 => 11,  37 => 10,  22 => 2,  246 => 32,  157 => 18,  145 => 46,  139 => 45,  131 => 42,  123 => 41,  120 => 84,  115 => 39,  111 => 79,  108 => 37,  101 => 33,  98 => 72,  96 => 31,  83 => 25,  74 => 14,  66 => 11,  55 => 16,  52 => 21,  50 => 14,  43 => 9,  41 => 23,  35 => 9,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 76,  193 => 73,  189 => 71,  187 => 70,  182 => 68,  176 => 64,  173 => 63,  168 => 18,  164 => 58,  162 => 57,  154 => 17,  149 => 51,  147 => 18,  144 => 17,  141 => 48,  133 => 42,  130 => 41,  125 => 38,  122 => 37,  116 => 36,  112 => 35,  109 => 34,  106 => 36,  103 => 32,  99 => 30,  95 => 28,  92 => 29,  86 => 24,  82 => 22,  80 => 24,  73 => 19,  64 => 19,  60 => 6,  57 => 34,  54 => 22,  51 => 10,  48 => 9,  45 => 17,  42 => 16,  39 => 11,  36 => 5,  33 => 6,  30 => 3,);
    }
}
