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
        return array (  74 => 14,  21 => 1,  156 => 60,  148 => 59,  151 => 59,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 41,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 61,  154 => 50,  144 => 56,  141 => 56,  128 => 42,  86 => 37,  83 => 27,  132 => 49,  103 => 25,  94 => 21,  188 => 74,  182 => 58,  174 => 65,  168 => 64,  145 => 58,  123 => 46,  73 => 27,  116 => 43,  68 => 12,  61 => 24,  230 => 80,  199 => 63,  179 => 57,  167 => 65,  159 => 64,  153 => 60,  139 => 55,  119 => 50,  113 => 46,  99 => 43,  87 => 19,  79 => 15,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 54,  131 => 54,  122 => 50,  117 => 49,  102 => 38,  92 => 38,  72 => 24,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 59,  147 => 60,  127 => 51,  112 => 47,  96 => 38,  71 => 13,  55 => 15,  114 => 49,  109 => 37,  106 => 41,  101 => 46,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 11,  63 => 13,  26 => 6,  98 => 38,  88 => 38,  80 => 33,  46 => 12,  44 => 6,  43 => 11,  57 => 26,  50 => 22,  47 => 7,  38 => 9,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 61,  155 => 64,  142 => 57,  136 => 55,  133 => 50,  130 => 49,  120 => 55,  75 => 32,  53 => 23,  32 => 2,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 64,  152 => 63,  126 => 18,  108 => 47,  105 => 28,  100 => 39,  91 => 39,  89 => 16,  84 => 31,  82 => 32,  78 => 34,  76 => 27,  69 => 30,  67 => 15,  60 => 10,  58 => 26,  42 => 24,  40 => 17,  36 => 4,  34 => 5,  27 => 4,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 77,  193 => 61,  187 => 73,  183 => 62,  180 => 71,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 62,  149 => 57,  146 => 66,  140 => 49,  137 => 18,  129 => 52,  124 => 51,  121 => 46,  118 => 43,  115 => 44,  111 => 47,  107 => 44,  104 => 38,  97 => 30,  93 => 44,  90 => 33,  81 => 35,  70 => 28,  66 => 29,  62 => 26,  59 => 21,  56 => 8,  52 => 24,  49 => 23,  45 => 13,  41 => 5,  37 => 16,  33 => 4,  30 => 5,);
    }
}
