<?php

/* ArticleDevBundle:ArticleDev:article.html.twig */
class __TwigTemplate_8eb6580aaafe763d10a88a75d255f81812e0ca3880f531b925f70debb39248ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'subCat' => array($this, 'block_subCat'),
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

    // line 20
    public function block_arianne($context, array $blocks = array())
    {
        echo "  

    ";
        // line 22
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "subCategory"), "labelSubCategory") != "accueil")) {
            // line 25
            echo "        ";
            $this->displayBlock('subCat', $context, $blocks);
            // line 32
            echo "    ";
        }
    }

    // line 25
    public function block_subCat($context, array $blocks = array())
    {
        // line 26
        echo "            <li>
                <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                </a><span class=\"end\">&nbsp;</span>
            </li>
        ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class='titleDev'>
        ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
        echo "
        <span class=\"adminArticle\">
           ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "' title=\"Editer l'article: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "\">
                    Editer
                </a>  - 
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\" title=\"Supprimer l'article: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "\">
                    Supprimer
                </a>
           ";
        }
        // line 48
        echo "       </span>
    </div>
    ";
        // line 51
        echo "    
";
        // line 57
        echo "    <p class='content'>
        ";
        // line 58
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image") != "")) {
            // line 59
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title"), "html", null, true);
            echo "\" class='imageDevSup'>
        ";
        }
        // line 61
        echo "        ";
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "content");
        echo "
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => (isset($context["idSc"]) ? $context["idSc"] : $this->getContext($context, "idSc")))), "html", null, true);
        echo "\" title=\"retour à la page précédente\">
            <span class='back'>«« Retour</span>
        </a>
    </p>
    ";
        // line 66
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "link") != "")) {
            // line 67
            echo "        <p class='linkDev'>
            Pour plus d'informations, <a href='";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "link"), "html", null, true);
            echo "'><span class='details'>cliquez ici.</span></a>
        </p>
    ";
        }
        // line 71
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
        return array (  161 => 71,  155 => 68,  152 => 67,  150 => 66,  143 => 62,  138 => 61,  130 => 59,  128 => 58,  125 => 57,  122 => 51,  118 => 48,  109 => 44,  100 => 41,  98 => 40,  93 => 38,  87 => 36,  84 => 35,  76 => 28,  70 => 27,  67 => 26,  64 => 25,  59 => 32,  56 => 25,  54 => 24,  49 => 22,  43 => 20,  36 => 16,  33 => 15,  28 => 5,);
    }
}
