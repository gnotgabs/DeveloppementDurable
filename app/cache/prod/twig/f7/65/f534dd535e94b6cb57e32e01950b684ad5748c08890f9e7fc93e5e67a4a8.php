<?php

/* ArticleDevBundle::menu.html.twig */
class __TwigTemplate_f765f534dd535e94b6cb57e32e01950b684ad5748c08890f9e7fc93e5e67a4a8 extends Twig_Template
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
    }

    // line 1
    public function getdynamicMenu($_menus = null)
    {
        $context = $this->env->mergeGlobals(array(
            "menus" => $_menus,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div id=\"menu\">
        <ul id=\"menuDeroulant\">
            ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 5
                echo "            
                ";
                // line 6
                if (($this->getAttribute((isset($context["men"]) ? $context["men"] : null), "labelCategory") != "Accueil")) {
                    // line 7
                    echo "                    <li><a href=\"#\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : null), "labelCategory"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 8
                echo "<ul class=\"sousMenu\">
                            
                ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["men"]) ? $context["men"] : null), "subCategories"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 11
                    echo "                            
                    ";
                    // line 12
                    if (($this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "labelSubCategory") != "accueil")) {
                        // line 13
                        echo "                        <li>
                            <a href=\"";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_homepage", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "labelSubCategory"), "html", null, true);
                        echo "
                            </a>
                        </li>
                    ";
                    }
                    // line 19
                    echo "                        
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 21
                echo "                        
                </ul></li>
                
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['men'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                
        </ul>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 41,  84 => 41,  74 => 33,  70 => 31,  52 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  131 => 52,  119 => 42,  108 => 36,  102 => 32,  71 => 15,  67 => 14,  63 => 15,  47 => 21,  38 => 6,  94 => 25,  89 => 20,  85 => 21,  79 => 42,  56 => 24,  50 => 10,  29 => 3,  87 => 25,  72 => 16,  55 => 10,  21 => 1,  98 => 31,  93 => 28,  78 => 19,  46 => 7,  27 => 5,  40 => 5,  43 => 6,  201 => 92,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  156 => 66,  151 => 63,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  62 => 12,  49 => 19,  32 => 2,  25 => 3,  24 => 4,  181 => 60,  171 => 61,  161 => 42,  158 => 67,  155 => 40,  150 => 34,  145 => 21,  138 => 54,  135 => 53,  127 => 18,  124 => 17,  117 => 44,  114 => 17,  110 => 13,  107 => 36,  104 => 54,  96 => 48,  90 => 61,  88 => 6,  83 => 43,  81 => 56,  77 => 39,  75 => 17,  68 => 33,  66 => 15,  59 => 11,  44 => 12,  41 => 7,  35 => 16,  26 => 6,  31 => 5,  28 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 56,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 32,  99 => 31,  95 => 28,  92 => 46,  86 => 28,  82 => 22,  80 => 40,  73 => 35,  64 => 13,  60 => 13,  57 => 11,  54 => 10,  51 => 8,  48 => 23,  45 => 7,  42 => 22,  39 => 7,  36 => 4,  33 => 4,  30 => 7,);
    }
}
