<?php

/* ArticleDevBundle:ArticleDev:index.html.twig */
class __TwigTemplate_f5623865e82f9ebbe64552af8682018ed5244ec488a097790db87c123eec783e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'leftCont' => array($this, 'block_leftCont'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        echo "
";
    }

    // line 22
    public function block_arianne($context, array $blocks = array())
    {
        // line 23
        echo "   ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
";
    }

    // line 27
    public function block_leftCont($context, array $blocks = array())
    {
        // line 28
        echo "<a href=\"\">Administration</a>
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 33
        if ((twig_length_filter($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) != 0)) {
            // line 34
            echo "
        ";
            // line 35
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 36
                echo "            <div class='titleDev'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
                echo "</div>
            ";
                // line 38
                echo "
        ";
                // line 44
                echo "
            <p class='content'>

                ";
                // line 47
                if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image") != "")) {
                    // line 48
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
                    echo "\" class='imageDev'>
                ";
                }
                // line 50
                echo "
                ";
                // line 51
                echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), 500, true, " ... ");
                echo "
                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "subCategory"), "id"), "idAr" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
                echo "\" title='Plus de détails'>
                    <span class='back'>lire la suite</span>
                </a>

            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
    ";
        } else {
            // line 60
            echo "
            <div class=\"erreur\">
                Pas d'article correspondant à cette catégorie !
            </div>   

    ";
        }
        // line 66
        echo "        
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 66,  124 => 60,  120 => 58,  108 => 52,  104 => 51,  101 => 50,  93 => 48,  91 => 47,  86 => 44,  83 => 38,  78 => 36,  74 => 35,  71 => 34,  69 => 33,  64 => 32,  61 => 31,  56 => 28,  53 => 27,  46 => 23,  43 => 22,  36 => 16,  33 => 15,  28 => 5,);
    }
}
