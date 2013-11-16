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
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 5
                echo "            
                ";
                // line 6
                if (($this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "labelCategory") != "Accueil")) {
                    // line 7
                    echo "                    <li><a href=\"";
                    echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "labelCategory"), "html", null, true);
                    echo "</a>
                ";
                }
                // line 8
                echo "<ul class=\"sousMenu\">
                            
                ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "subCategories"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 11
                    echo "                            
                    ";
                    // line 12
                    if (($this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory") != "accueil")) {
                        // line 13
                        echo "                        <li>
                            <a href=\"";
                        // line 14
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 15
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory"), "html", null, true);
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
        return array (  87 => 21,  80 => 19,  73 => 15,  45 => 7,  40 => 5,  32 => 2,  21 => 1,  194 => 63,  189 => 58,  186 => 57,  181 => 54,  171 => 43,  168 => 42,  165 => 41,  160 => 35,  155 => 22,  148 => 19,  145 => 18,  137 => 19,  134 => 18,  127 => 19,  117 => 19,  114 => 18,  110 => 13,  107 => 12,  99 => 7,  96 => 25,  90 => 64,  88 => 63,  81 => 57,  77 => 55,  75 => 54,  68 => 49,  66 => 13,  59 => 36,  57 => 10,  44 => 25,  41 => 24,  39 => 11,  35 => 9,  26 => 1,  132 => 66,  124 => 18,  120 => 58,  108 => 52,  104 => 11,  101 => 50,  93 => 48,  91 => 47,  86 => 44,  83 => 60,  78 => 36,  74 => 35,  71 => 34,  69 => 14,  64 => 12,  61 => 11,  56 => 28,  53 => 8,  46 => 23,  43 => 6,  36 => 4,  33 => 6,  28 => 5,);
    }
}
