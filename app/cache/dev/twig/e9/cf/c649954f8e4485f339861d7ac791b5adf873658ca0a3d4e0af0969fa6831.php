<?php

/* ArticleDevBundle:ArticleDev:addArticle.html.twig */
class __TwigTemplate_e9cfc649954f8e4485f339861d7ac791b5adf873658ca0a3d4e0af0969fa6831 extends Twig_Template
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
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formCateg\">
            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            
            <div style=\"display: none\">
                ";
        // line 36
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'label', array("label" => "Date de publication :"));
        echo "
                ";
        // line 38
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'errors');
        echo "
                ";
        // line 40
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "date"), 'widget');
        echo "                
            </div>
            <div>
                ";
        // line 44
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'label', array("label" => "Titre de l'article :"));
        echo "
                ";
        // line 46
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'errors');
        echo "
                ";
        // line 48
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "title"), 'widget', array("attr" => array("id" => "formTitle")));
        echo "                
            </div>
            <div>
                ";
        // line 52
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "author"), 'label', array("label" => "Nom de l'auteur :"));
        echo "
                ";
        // line 54
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "author"), 'errors');
        echo "
                ";
        // line 56
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "author"), 'widget', array("attr" => array("id" => "formAuthor")));
        echo "                
            </div>
            <div>
                ";
        // line 60
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'label', array("label" => "Contenu de l'article :"));
        echo "
                ";
        // line 62
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'errors');
        echo "
                ";
        // line 64
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "content"), 'widget', array("attr" => array("id" => "formContent")));
        echo "                
            </div>
            <div>
                ";
        // line 68
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "link"), 'label', array("label" => "Lien important :"));
        echo "
                ";
        // line 70
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "link"), 'errors');
        echo "
                ";
        // line 72
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "link"), 'widget', array("attr" => array("id" => "formLink")));
        echo "                
            </div>
            <div>
                ";
        // line 76
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'label', array("label" => "Image de l'article :"));
        echo "
                ";
        // line 78
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'errors');
        echo "
                ";
        // line 80
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "image"), 'widget', array("attr" => array("id" => "formImage")));
        echo "                
            </div>
            <div>
                ";
        // line 84
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subCategory"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Sous catégorie :"));
        echo "
                ";
        // line 86
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subCategory"), 'errors');
        echo "
                ";
        // line 88
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "subCategory"), 'widget', array("attr" => array("id" => "formSubcat")));
        echo "                
            </div>
            
            ";
        // line 95
        echo "            <div>
                ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
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
        return array (  205 => 96,  185 => 84,  178 => 80,  134 => 60,  127 => 56,  110 => 48,  70 => 30,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  119 => 42,  102 => 32,  71 => 19,  63 => 27,  59 => 13,  38 => 6,  94 => 28,  85 => 25,  75 => 25,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 40,  88 => 38,  46 => 7,  44 => 12,  201 => 92,  196 => 90,  171 => 61,  163 => 62,  158 => 67,  151 => 68,  142 => 59,  136 => 56,  121 => 46,  117 => 52,  62 => 14,  49 => 19,  25 => 3,  24 => 4,  232 => 76,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 72,  156 => 70,  146 => 18,  138 => 54,  135 => 53,  128 => 49,  118 => 19,  105 => 46,  100 => 44,  97 => 6,  91 => 27,  89 => 20,  84 => 73,  78 => 21,  76 => 32,  67 => 15,  58 => 35,  34 => 6,  27 => 4,  31 => 5,  28 => 3,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 15,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 62,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 36,  74 => 14,  66 => 23,  55 => 15,  52 => 21,  50 => 22,  43 => 8,  41 => 10,  35 => 8,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 19,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 54,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 70,  80 => 19,  73 => 19,  64 => 17,  60 => 26,  57 => 11,  54 => 10,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
