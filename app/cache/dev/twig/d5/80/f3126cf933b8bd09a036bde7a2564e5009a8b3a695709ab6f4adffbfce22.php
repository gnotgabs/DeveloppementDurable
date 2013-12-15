<?php

/* ArticleDevBundle:LMenuDev:lMenus.html.twig */
class __TwigTemplate_d580f3126cf933b8bd09a036bde7a2564e5009a8b3a695709ab6f4adffbfce22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'leftCont' => array($this, 'block_leftCont'),
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
        // line 5
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_arianne($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Toutes les catégories et sous-catégories\">
            Catégories et Sous-catégories
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 30
    public function block_leftCont($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 37
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 38
            echo "        <div class=\"good\">

            <ul class='men'>
                
            ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lMenus"));
            foreach ($context['_seq'] as $context["_key"] => $context["men"]) {
                // line 43
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("article_dev_homepage");
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "men"), "title"), "html", null, true);
                echo "</a>
                        <span class=\"adminArticle\">
                            <a href='";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editLMenu", array("id" => $this->getAttribute($this->getContext($context, "men"), "id"))), "html", null, true);
                echo "' title=\"Editer la catégorie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "men"), "title"), "html", null, true);
                echo "\">
                                <font color='black'><u>Editer</u></font>
                            </a>  - 
                            <a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delLMenu", array("id" => $this->getAttribute($this->getContext($context, "men"), "id"))), "html", null, true);
                echo "\" title=\"Supprimer la catégorie: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "men"), "title"), "html", null, true);
                echo "\">
                                <font color='black'><u>Supprimer</u></font>
                            </a>
                        </span>
                        <ul class='smen'>

                ";
                // line 54
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "men"), "lMenuElts"));
                foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
                    // line 55
                    echo "
                    ";
                    // line 56
                    if (($this->getAttribute($this->getContext($context, "smen"), "labelElt") != "accueil")) {
                        // line 57
                        echo "                        <li>
                            <a href=\"";
                        // line 58
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getContext($context, "smen"), "id"))), "html", null, true);
                        echo "\">
                                ";
                        // line 59
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "smen"), "labelElt"), "html", null, true);
                        echo "
                            </a>
                            <span class=\"adminArticle\">
                                <a href='";
                        // line 62
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editLMenuElt", array("id" => $this->getAttribute($this->getContext($context, "smen"), "id"))), "html", null, true);
                        echo "' title=\"Editer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "smen"), "labelElt"), "html", null, true);
                        echo "\">
                                    <font color='blue'><i>Editer</i></font>
                                </a>  - 
                                <a href=\"";
                        // line 65
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delLMenuElt", array("id" => $this->getAttribute($this->getContext($context, "smen"), "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la sous-catégorie: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "smen"), "labelElt"), "html", null, true);
                        echo "\">
                                    <font color='red'><i>Supprimer</i></font>
                                </a>
                            </span>
                        </li>
                    ";
                    }
                    // line 71
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smen'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "
                </ul></li>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['men'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "            </ul>

        </div>

    ";
        }
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:LMenuDev:lMenus.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 77,  168 => 73,  161 => 71,  150 => 65,  142 => 62,  136 => 59,  132 => 58,  129 => 57,  127 => 56,  124 => 55,  120 => 54,  109 => 48,  101 => 45,  93 => 43,  89 => 42,  83 => 38,  81 => 37,  76 => 36,  73 => 35,  66 => 31,  63 => 30,  56 => 24,  53 => 23,  44 => 11,  38 => 9,  35 => 8,  30 => 5,  28 => 4,);
    }
}
