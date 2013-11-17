<?php

/* ArticleDevBundle:CategoryDev:allCategories.html.twig */
class __TwigTemplate_d636c552a6190d5bb8d978911d7d9117fde68f33f9f26c02ff7a4e36fea0ec1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArticleDevBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_arianne($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Toutes les catégories et sous-catégories\">
            Catégories et Sous-catégories
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 22
    public function block_menu($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        echo "
";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 28
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 29
            echo "        <div class=\"good\">

            <ul class='men'>
                
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "labelCategory") != "Accueil")) {
                    // line 35
                    echo "                
                    <li><a href=\"";
                    // line 36
                    echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "labelCategory"), "html", null, true);
                    echo "</a>
                        <span class=\"adminArticle\">
                            <a href='";
                    // line 38
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editCategory", array("id" => $this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "id"))), "html", null, true);
                    echo "' title=\"Editer la catégorie: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "labelCategory"), "html", null, true);
                    echo "\">
                                <font color='black'><u>Editer</u></font>
                            </a>  - 
                            <a href=\"";
                    // line 41
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delCategory", array("id" => $this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer la catégorie: ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "labelCategory"), "html", null, true);
                    echo "\">
                                <font color='black'><u>Supprimer</u></font>
                            </a>
                        </span>
                        
                ";
                }
                // line 46
                echo "<ul class='smen'>

                ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["men"]) ? $context["men"] : $this->getContext($context, "men")), "subCategories"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 49
                    echo "
                    ";
                    // line 50
                    if (($this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory") != "accueil")) {
                        // line 51
                        echo "                        <li>
                            <a href=\"";
                        // line 52
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 53
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory"), "html", null, true);
                        echo "
                            </a>
                            <span class=\"adminArticle\">
                                <a href='";
                        // line 56
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editSubCategory", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "id"))), "html", null, true);
                        echo "' title=\"Editer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory"), "html", null, true);
                        echo "\">
                                    <font color='blue'><i>Editer</i></font>
                                </a>  - 
                                <a href=\"";
                        // line 59
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delSubCategory", array("id" => $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory"), "html", null, true);
                        echo "\">
                                    <font color='red'><i>Supprimer</i></font>
                                </a>
                            </span>
                        </li>
                    ";
                    }
                    // line 65
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "
                </ul></li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['men'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            </ul>

        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:CategoryDev:allCategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 71,  164 => 67,  157 => 65,  146 => 59,  138 => 56,  132 => 53,  128 => 52,  125 => 51,  123 => 50,  120 => 49,  116 => 48,  112 => 46,  101 => 41,  93 => 38,  86 => 36,  83 => 35,  80 => 34,  76 => 33,  70 => 29,  68 => 28,  63 => 27,  60 => 26,  53 => 23,  50 => 22,  41 => 10,  35 => 8,  32 => 7,  27 => 4,);
    }
}
