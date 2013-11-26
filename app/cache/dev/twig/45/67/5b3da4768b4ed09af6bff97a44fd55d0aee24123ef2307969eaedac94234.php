<?php

/* ArticleDevBundle:ArticleDev:addArticle.html.twig */
class __TwigTemplate_45675b3da4768b4ed09af6bff97a44fd55d0aee24123ef2307969eaedac94234 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\" title=\"Ajouter un article\">
            Ajout article
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
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Ajout d'articles</p>
        <form action=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"formCateg\">
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            
            <div style=\"display: none\">
                ";
        // line 36
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'label', array("label" => "Date de publication :"));
        echo "
                ";
        // line 38
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
        echo "
                ";
        // line 40
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
        echo "                
            </div>
            <div>
                ";
        // line 44
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label" => "Titre de l'article :"));
        echo "
                ";
        // line 46
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
                ";
        // line 48
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("id" => "formTitle")));
        echo "                
            </div>
            <div>
                ";
        // line 52
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'label', array("label" => "Nom de l'auteur :"));
        echo "
                ";
        // line 54
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'errors');
        echo "
                ";
        // line 56
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'widget', array("attr" => array("id" => "formAuthor")));
        echo "                
            </div>
            <div>
                ";
        // line 60
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'label', array("label" => "Contenu de l'article :"));
        echo "
                ";
        // line 62
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'errors');
        echo "
                ";
        // line 64
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget', array("attr" => array("id" => "formContent")));
        echo "                
            </div>
            <div>
                ";
        // line 68
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'label', array("label" => "Lien important :"));
        echo "
                ";
        // line 70
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'errors');
        echo "
                ";
        // line 72
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'widget', array("attr" => array("id" => "formLink")));
        echo "                
            </div>
            <div>
                ";
        // line 76
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label" => "Image de l'article :"));
        echo "
                ";
        // line 78
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'errors');
        echo "
                ";
        // line 80
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget', array("attr" => array("id" => "formImage")));
        echo "                
            </div>
            <div>
                ";
        // line 84
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategory"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Sous catégorie :"));
        echo "
                ";
        // line 86
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategory"), 'errors');
        echo "
                ";
        // line 88
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategory"), 'widget', array("attr" => array("id" => "formSubcat")));
        echo "                
            </div>
            
            ";
        // line 95
        echo "            <div>
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <input type=\"submit\" class='btn btn-primary' value=\"Enrégistrer\">
                <input type=\"reset\" class='btn btn-second' value=\"Annuler\">
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:addArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 96,  202 => 95,  195 => 88,  190 => 86,  185 => 84,  178 => 80,  173 => 78,  168 => 76,  161 => 72,  156 => 70,  151 => 68,  144 => 64,  139 => 62,  134 => 60,  127 => 56,  122 => 54,  117 => 52,  110 => 48,  105 => 46,  100 => 44,  93 => 40,  88 => 38,  83 => 36,  76 => 32,  70 => 30,  63 => 27,  60 => 26,  53 => 23,  50 => 22,  41 => 10,  35 => 8,  32 => 7,  27 => 4,);
    }
}
