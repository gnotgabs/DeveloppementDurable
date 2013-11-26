<?php

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_b98d4adb80251c587de376518be49cb56b16575eba1f6adadcbb709d51960053 extends Twig_Template
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
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\" class=\"sf-toolbar\" style=\"display: none\"></div>
";
        // line 2
        $this->env->loadTemplate("@WebProfiler/Profiler/base_js.html.twig")->display($context);
        // line 3
        echo "<script>/*<![CDATA[*/
    (function () {
        ";
        // line 5
        if (("top" == (isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")))) {
            // line 6
            echo "            var sfwdt = document.getElementById('sfwdt";
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "');
            document.body.insertBefore(
                document.body.removeChild(sfwdt),
                document.body.firstChild
            );
        ";
        }
        // line 12
        echo "
        Sfjs.load(
            'sfwdt";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "',
            '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "',
            function(xhr, el) {
                el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                if (el.style.display == 'none') {
                    return;
                }

                if (Sfjs.getPreference('toolbar/displayState') == 'none') {
                    document.getElementById('sfToolbarMainContent-";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfToolbarClearer-";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                    document.getElementById('sfMiniToolbar-";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                } else {
                    document.getElementById('sfToolbarMainContent-";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfToolbarClearer-";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'block';
                    document.getElementById('sfMiniToolbar-";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "').style.display = 'none';
                }
            },
            function(xhr) {
                if (xhr.status !== 0) {
                    confirm('An error occurred while loading the web debug toolbar (' + xhr.status + ': ' + xhr.statusText + ').\\n\\nDo you want to open the profiler?') && (window.location = '";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "');
                }
            }
        );
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 30,  79 => 29,  75 => 28,  70 => 26,  62 => 24,  50 => 15,  46 => 14,  26 => 3,  24 => 2,  19 => 1,  96 => 25,  87 => 21,  73 => 15,  66 => 25,  64 => 12,  61 => 11,  57 => 10,  53 => 8,  43 => 6,  32 => 6,  21 => 1,  232 => 76,  213 => 67,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  172 => 43,  169 => 42,  166 => 41,  156 => 22,  149 => 19,  146 => 18,  138 => 19,  128 => 19,  125 => 18,  118 => 19,  115 => 18,  108 => 12,  100 => 7,  97 => 6,  91 => 35,  89 => 76,  84 => 73,  82 => 70,  78 => 68,  76 => 67,  69 => 14,  67 => 41,  60 => 36,  58 => 35,  42 => 12,  40 => 5,  36 => 4,  34 => 6,  27 => 1,  249 => 100,  241 => 94,  237 => 92,  225 => 86,  221 => 71,  218 => 70,  210 => 82,  208 => 60,  203 => 78,  200 => 72,  196 => 69,  187 => 65,  178 => 62,  176 => 61,  171 => 59,  168 => 58,  164 => 57,  161 => 35,  159 => 55,  154 => 54,  151 => 53,  141 => 50,  135 => 18,  132 => 47,  127 => 46,  124 => 45,  119 => 41,  111 => 13,  105 => 11,  102 => 28,  99 => 27,  94 => 36,  80 => 19,  77 => 34,  74 => 27,  71 => 26,  54 => 25,  48 => 23,  45 => 7,  38 => 16,  35 => 15,  30 => 5,);
    }
}
