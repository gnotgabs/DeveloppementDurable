<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_bd62cb30de03ac493acf6ae12a215ec33deae305138a83ec20026a97bd711552 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 31,  23 => 1,  65 => 6,  184 => 83,  172 => 77,  167 => 75,  150 => 67,  126 => 55,  97 => 44,  84 => 41,  205 => 96,  202 => 95,  195 => 88,  190 => 86,  185 => 84,  178 => 80,  161 => 72,  100 => 44,  76 => 12,  70 => 17,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 79,  169 => 60,  140 => 55,  132 => 32,  128 => 49,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 95,  179 => 69,  159 => 61,  143 => 63,  135 => 53,  119 => 42,  102 => 44,  71 => 33,  67 => 30,  63 => 17,  38 => 24,  94 => 28,  89 => 37,  85 => 38,  56 => 28,  87 => 37,  21 => 1,  93 => 18,  78 => 21,  46 => 23,  27 => 4,  201 => 94,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  158 => 67,  156 => 70,  151 => 68,  142 => 59,  138 => 61,  136 => 56,  121 => 53,  105 => 46,  91 => 27,  62 => 23,  49 => 19,  25 => 3,  24 => 4,  194 => 87,  186 => 57,  181 => 54,  171 => 61,  165 => 41,  160 => 71,  155 => 69,  148 => 19,  137 => 37,  134 => 66,  127 => 56,  124 => 22,  117 => 19,  114 => 18,  110 => 52,  107 => 36,  104 => 45,  90 => 64,  88 => 44,  81 => 35,  77 => 68,  75 => 31,  68 => 7,  59 => 38,  44 => 14,  26 => 6,  31 => 4,  28 => 4,  19 => 2,  79 => 13,  72 => 31,  69 => 29,  47 => 10,  40 => 8,  37 => 10,  22 => 3,  246 => 90,  157 => 56,  145 => 18,  139 => 62,  131 => 52,  123 => 47,  120 => 40,  115 => 53,  111 => 37,  108 => 36,  101 => 32,  98 => 43,  96 => 19,  83 => 18,  74 => 14,  66 => 13,  55 => 22,  52 => 34,  50 => 31,  43 => 9,  41 => 25,  35 => 7,  32 => 9,  29 => 4,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 64,  141 => 48,  133 => 59,  130 => 41,  125 => 44,  122 => 58,  116 => 51,  112 => 42,  109 => 47,  106 => 19,  103 => 18,  99 => 43,  95 => 48,  92 => 39,  86 => 19,  82 => 35,  80 => 19,  73 => 11,  64 => 12,  60 => 16,  57 => 37,  54 => 10,  51 => 14,  48 => 13,  45 => 7,  42 => 20,  39 => 9,  36 => 11,  33 => 6,  30 => 6,);
    }
}
