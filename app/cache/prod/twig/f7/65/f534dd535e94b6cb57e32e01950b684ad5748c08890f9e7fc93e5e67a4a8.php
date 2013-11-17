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
                    echo "                    <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                    echo "\">";
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : null), "id"))), "html", null, true);
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
        return array (  194 => 87,  184 => 83,  160 => 71,  126 => 55,  104 => 45,  175 => 66,  167 => 75,  157 => 60,  153 => 59,  129 => 50,  96 => 25,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 45,  77 => 33,  74 => 27,  65 => 20,  155 => 69,  152 => 67,  150 => 67,  205 => 96,  185 => 70,  178 => 62,  139 => 54,  134 => 60,  127 => 46,  110 => 43,  83 => 36,  70 => 27,  53 => 8,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 79,  140 => 55,  132 => 47,  107 => 36,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 95,  179 => 69,  159 => 55,  143 => 63,  131 => 52,  119 => 46,  102 => 28,  71 => 26,  63 => 27,  59 => 32,  47 => 15,  38 => 9,  94 => 36,  85 => 25,  79 => 33,  75 => 31,  68 => 14,  56 => 25,  50 => 22,  29 => 3,  87 => 21,  72 => 24,  55 => 15,  21 => 1,  26 => 6,  98 => 40,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  35 => 8,  43 => 6,  41 => 10,  201 => 94,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 47,  121 => 53,  117 => 52,  101 => 32,  66 => 13,  62 => 14,  49 => 22,  32 => 2,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 77,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 18,  138 => 61,  135 => 48,  128 => 58,  118 => 48,  115 => 45,  111 => 44,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 27,  89 => 37,  84 => 35,  78 => 21,  76 => 32,  69 => 14,  67 => 26,  58 => 35,  40 => 5,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 65,  182 => 66,  176 => 61,  173 => 78,  168 => 58,  164 => 57,  162 => 59,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 59,  130 => 59,  125 => 49,  122 => 51,  116 => 51,  112 => 42,  109 => 47,  106 => 42,  103 => 32,  99 => 43,  95 => 39,  92 => 39,  86 => 36,  82 => 35,  80 => 19,  73 => 15,  64 => 12,  60 => 26,  57 => 10,  54 => 14,  51 => 14,  48 => 13,  45 => 7,  42 => 7,  39 => 9,  36 => 4,  33 => 15,  30 => 5,);
    }
}
