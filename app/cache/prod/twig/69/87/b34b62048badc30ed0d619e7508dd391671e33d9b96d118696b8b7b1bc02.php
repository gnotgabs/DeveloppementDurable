<?php

/* TwigBundle:Exception:trace.html.twig */
class __TwigTemplate_6987b34b62048badc30ed0d619e7508dd391671e33d9b96d118696b8b7b1bc02 extends Twig_Template
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
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function")) {
            // line 2
            echo "    at
    <strong>
        <abbr title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "class"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "short_class"), "html", null, true);
            echo "</abbr>
        ";
            // line 5
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "type") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function")), "html", null, true);
            echo "
    </strong>
    (";
            // line 7
            echo $this->env->getExtension('code')->formatArgs($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "args"));
            echo ")
";
        }
        // line 9
        echo "
";
        // line 10
        if (((($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file")) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true)) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line"))) {
            // line 11
            echo "    ";
            echo (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "function")) ? ("<br />") : (""));
            echo "
    in ";
            // line 12
            echo $this->env->getExtension('code')->formatFile($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file"), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line"));
            echo "&nbsp;
    ";
            // line 13
            ob_start();
            // line 14
            echo "    <a href=\"#\" onclick=\"toggle('trace-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "'); switchIcons('icon-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-open', 'icon-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-close'); return false;\">
        <img class=\"toggle\" id=\"icon-";
            // line 15
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-close\" alt=\"-\" src=\"data:image/gif;base64,R0lGODlhEgASAMQSANft94TG57Hb8GS44ez1+mC24IvK6ePx+Wa44dXs92+942e54o3L6W2844/M6dnu+P/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABIALAAAAAASABIAQAVCoCQBTBOd6Kk4gJhGBCTPxysJb44K0qD/ER/wlxjmisZkMqBEBW5NHrMZmVKvv9hMVsO+hE0EoNAstEYGxG9heIhCADs=\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : null))) ? ("inline") : ("none"));
            echo "\" />
        <img class=\"toggle\" id=\"icon-";
            // line 16
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "-open\" alt=\"+\" src=\"data:image/gif;base64,R0lGODlhEgASAMQTANft99/v+Ga44bHb8ITG52S44dXs9+z1+uPx+YvK6WC24G+944/M6W28443L6dnu+Ge54v/+/l614P///wAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAABMALAAAAAASABIAQAVS4DQBTiOd6LkwgJgeUSzHSDoNaZ4PU6FLgYBA5/vFID/DbylRGiNIZu74I0h1hNsVxbNuUV4d9SsZM2EzWe1qThVzwWFOAFCQFa1RQq6DJB4iIQA7\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : null))) ? ("none") : ("inline"));
            echo "\" />
    </a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 19
            echo "    <div id=\"trace-";
            echo twig_escape_filter($this->env, (((isset($context["prefix"]) ? $context["prefix"] : null) . "-") . (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
            echo "\" style=\"display: ";
            echo (((0 == (isset($context["i"]) ? $context["i"] : null))) ? ("block") : ("none"));
            echo "\" class=\"trace\">
        ";
            // line 20
            echo $this->env->getExtension('code')->fileExcerpt($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file"), $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line"));
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 20,  72 => 16,  55 => 13,  21 => 2,  26 => 3,  98 => 40,  93 => 9,  88 => 6,  46 => 11,  44 => 10,  35 => 4,  43 => 8,  41 => 9,  201 => 92,  196 => 90,  171 => 73,  163 => 70,  158 => 67,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 44,  101 => 39,  66 => 15,  62 => 23,  49 => 19,  32 => 6,  25 => 4,  24 => 2,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 42,  166 => 71,  161 => 35,  156 => 66,  146 => 18,  138 => 57,  135 => 18,  128 => 19,  118 => 19,  115 => 43,  111 => 13,  108 => 12,  105 => 40,  100 => 7,  97 => 6,  91 => 31,  89 => 76,  84 => 73,  78 => 40,  76 => 67,  69 => 25,  67 => 41,  58 => 35,  40 => 8,  34 => 6,  27 => 4,  31 => 5,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 91,  193 => 73,  189 => 71,  187 => 84,  182 => 68,  176 => 64,  173 => 74,  168 => 72,  164 => 60,  162 => 59,  154 => 54,  149 => 19,  147 => 50,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 18,  122 => 37,  116 => 36,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 30,  95 => 28,  92 => 27,  86 => 28,  82 => 70,  80 => 19,  73 => 19,  64 => 15,  60 => 36,  57 => 14,  54 => 11,  51 => 12,  48 => 9,  45 => 25,  42 => 6,  39 => 16,  36 => 7,  33 => 4,  30 => 3,);
    }
}
