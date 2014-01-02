<?php

/* ArticleDevBundle:ArticleDev:article.html.twig */
class __TwigTemplate_0f978027446fdafcc9c70ec573e122723523884cf70f2efc3b0602913eb0ec56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'subCat' => array($this, 'block_subCat'),
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
        // line 6
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 21
    public function block_arianne($context, array $blocks = array())
    {
        echo "  

    ";
        // line 23
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 25
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
            // line 26
            echo "        ";
            $this->displayBlock('subCat', $context, $blocks);
            // line 33
            echo "    ";
        }
    }

    // line 26
    public function block_subCat($context, array $blocks = array())
    {
        // line 27
        echo "            <li>
                <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                    ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                </a><span class=\"end\">&nbsp;</span>
            </li>
        ";
    }

    // line 37
    public function block_leftCont($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        // line 42
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class='titleDev'>
        ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
        echo "
        <span class=\"adminArticle\">
           ";
        // line 46
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 47
            echo "                <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "' title=\"Editer l'article: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
            echo "\">
                    Editer
                </a>  - 
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\" title=\"Supprimer l'article: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
            echo "\">
                    Supprimer
                </a>
           ";
        }
        // line 54
        echo "       </span>
    </div>
    ";
        // line 57
        echo "    
";
        // line 63
        echo "    <p class='content'>
        ";
        // line 64
        if (($this->getAttribute($this->getContext($context, "article"), "image") != "")) {
            // line 65
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
            echo "\" class='imageDevSup'>
        ";
        }
        // line 67
        echo "        ";
        echo $this->getAttribute($this->getContext($context, "article"), "content");
        echo "
        <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getContext($context, "idSc"))), "html", null, true);
        echo "\" title=\"retour à la page précédente\">
            <span class='back'>«« Retour</span>
        </a>
    </p>
    ";
        // line 72
        if (($this->getAttribute($this->getContext($context, "article"), "link") != "")) {
            // line 73
            echo "        <p class='linkDev'>
            Pour plus d'informations, <a href='";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "link"), "html", null, true);
            echo "' target=\"_blank\"><span class='details'>cliquez ici.</span></a>
        </p>
    ";
        }
        // line 77
        echo "        
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 77,  168 => 74,  165 => 73,  163 => 72,  156 => 68,  151 => 67,  143 => 65,  141 => 64,  138 => 63,  135 => 57,  131 => 54,  122 => 50,  113 => 47,  111 => 46,  106 => 44,  100 => 42,  97 => 41,  90 => 38,  87 => 37,  79 => 29,  73 => 28,  70 => 27,  67 => 26,  62 => 33,  59 => 26,  57 => 25,  52 => 23,  46 => 21,  39 => 17,  36 => 16,  31 => 6,  29 => 5,);
    }
}
