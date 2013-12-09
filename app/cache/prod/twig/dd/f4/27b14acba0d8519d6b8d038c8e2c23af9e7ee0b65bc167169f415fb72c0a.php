<?php

/* ArticleDevBundle::menu.html.twig */
class __TwigTemplate_ddf427b14acba0d8519d6b8d038c8e2c23af9e7ee0b65bc167169f415fb72c0a extends Twig_Template
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
            if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_menus_);
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 5
                echo "            
                ";
                // line 6
                if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                if (($this->getAttribute($_men_, "labelCategory") != "Accueil")) {
                    // line 7
                    echo "                    <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                    echo "\">";
                    if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_men_, "labelCategory"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 8
                echo "<ul class=\"sousMenu\">
                            
                ";
                // line 10
                if (isset($context["men"])) { $_men_ = $context["men"]; } else { $_men_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_men_, "subCategories"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 11
                    echo "                            
                    ";
                    // line 12
                    if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                    if (($this->getAttribute($_smen_, "labelSubCategory") != "accueil")) {
                        // line 13
                        echo "                        <li>
                            <a href=\"";
                        // line 14
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($_smen_, "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 15
                        if (isset($context["smen"])) { $_smen_ = $context["smen"]; } else { $_smen_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_smen_, "labelSubCategory"), "html", null, true);
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
        return array (  21 => 1,  125 => 48,  184 => 61,  174 => 65,  145 => 50,  128 => 45,  123 => 44,  95 => 35,  86 => 34,  83 => 27,  263 => 94,  259 => 92,  246 => 86,  241 => 85,  238 => 84,  228 => 82,  225 => 81,  220 => 78,  217 => 72,  191 => 64,  175 => 57,  164 => 54,  161 => 59,  151 => 56,  144 => 53,  74 => 14,  132 => 49,  116 => 41,  103 => 25,  94 => 21,  172 => 56,  169 => 55,  73 => 27,  68 => 12,  230 => 96,  199 => 80,  179 => 60,  167 => 56,  159 => 64,  153 => 62,  139 => 52,  119 => 48,  113 => 46,  99 => 37,  87 => 19,  79 => 15,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 44,  134 => 46,  131 => 45,  122 => 43,  117 => 42,  102 => 38,  92 => 25,  72 => 24,  51 => 22,  48 => 7,  35 => 8,  29 => 3,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 100,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 51,  147 => 60,  127 => 52,  112 => 32,  96 => 25,  71 => 13,  55 => 22,  114 => 22,  109 => 41,  106 => 36,  101 => 19,  85 => 33,  77 => 12,  39 => 7,  110 => 20,  65 => 11,  63 => 13,  26 => 6,  98 => 38,  88 => 34,  80 => 33,  46 => 12,  44 => 6,  43 => 11,  57 => 26,  50 => 22,  47 => 7,  38 => 9,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 62,  155 => 55,  142 => 59,  136 => 51,  133 => 50,  130 => 49,  120 => 40,  75 => 32,  53 => 23,  32 => 2,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 49,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 61,  126 => 41,  108 => 41,  105 => 40,  100 => 46,  91 => 28,  89 => 41,  84 => 35,  82 => 32,  78 => 26,  76 => 19,  69 => 30,  67 => 25,  60 => 10,  58 => 23,  42 => 24,  40 => 12,  36 => 4,  34 => 5,  27 => 4,  31 => 7,  28 => 5,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 65,  196 => 65,  193 => 78,  187 => 76,  183 => 59,  180 => 58,  171 => 54,  166 => 66,  163 => 50,  160 => 22,  157 => 54,  149 => 18,  146 => 41,  140 => 49,  137 => 18,  129 => 48,  124 => 35,  121 => 46,  118 => 44,  115 => 52,  111 => 41,  107 => 41,  104 => 38,  97 => 30,  93 => 36,  90 => 36,  81 => 34,  70 => 28,  66 => 29,  62 => 26,  59 => 25,  56 => 8,  52 => 10,  49 => 13,  45 => 20,  41 => 5,  37 => 11,  33 => 15,  30 => 5,);
    }
}
