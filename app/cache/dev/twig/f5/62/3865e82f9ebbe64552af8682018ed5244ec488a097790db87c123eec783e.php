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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "   ";
        // line 17
        echo "    <div id=\"menu\">
        <ul>
            ";
        // line 28
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subMenu"]) ? $context["subMenu"] : $this->getContext($context, "subMenu")));
        foreach ($context['_seq'] as $context["_key"] => $context["smen"]) {
            // line 29
            echo "                        <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smen"]) ? $context["smen"] : $this->getContext($context, "smen")), "labelSubCategory"), "html", null, true);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['smen'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
    </div>
";
    }

    // line 35
    public function block_arianne($context, array $blocks = array())
    {
        // line 36
        echo "    > Accueil
";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "    <h1>Le développement durable</h1>
    ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 41
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "</h3>
        ";
            // line 43
            echo "
    ";
            // line 49
            echo "        <p>
            ";
            // line 50
            echo twig_truncate_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content"), 500, true, " ...");
            echo "
            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idAr" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\"><i>la suite</i></a>
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return array (  101 => 54,  92 => 51,  88 => 50,  85 => 49,  82 => 43,  77 => 41,  73 => 40,  70 => 39,  67 => 38,  62 => 36,  59 => 35,  53 => 31,  44 => 29,  39 => 28,  35 => 17,  33 => 4,  30 => 3,);
    }
}
