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
                    echo "                    <li><a href=\"#\">";
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
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_homepage", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "id"))), "html", null, true);
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
        return array (  94 => 25,  85 => 21,  78 => 19,  71 => 15,  67 => 14,  64 => 13,  62 => 12,  59 => 11,  55 => 10,  51 => 8,  45 => 7,  43 => 6,  40 => 5,  36 => 4,  32 => 2,  21 => 1,);
    }
}
