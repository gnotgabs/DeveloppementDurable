<?php

/* ArticleDevBundle:SubCategoryDev:addSubCategory.html.twig */
class __TwigTemplate_11485172530dc2c4dae3d9688e37a68f039e54ebedd19f55d01f0d9a2ae46cbb extends Twig_Template
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
        echo "\" title=\"Ajout de catégorie\">
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
        <form action=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " id=\"formCateg\">
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            
            <div style=\"display: none\">
                ";
        // line 35
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'label', array("label" => "Date de publication :"));
        echo "
                ";
        // line 37
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'errors');
        echo "
                ";
        // line 39
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date"), 'widget');
        echo "                
            </div>
            <div>
                ";
        // line 43
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'label', array("label" => "Titre de l'article :"));
        echo "
                ";
        // line 45
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'errors');
        echo "
                ";
        // line 47
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title"), 'widget', array("attr" => array("id" => "formTitle")));
        echo "                
            </div>
            <div>
                ";
        // line 51
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'label', array("label" => "Nom de l'auteur :"));
        echo "
                ";
        // line 53
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'errors');
        echo "
                ";
        // line 55
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "author"), 'widget', array("attr" => array("id" => "formAuthor")));
        echo "                
            </div>
            <div>
                ";
        // line 59
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'label', array("label" => "Contenu de l'article :"));
        echo "
                ";
        // line 61
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'errors');
        echo "
                ";
        // line 63
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content"), 'widget', array("attr" => array("id" => "formContent")));
        echo "                
            </div>
            <div>
                ";
        // line 67
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'label', array("label" => "Lien important :"));
        echo "
                ";
        // line 69
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'errors');
        echo "
                ";
        // line 71
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "link"), 'widget', array("attr" => array("id" => "formLink")));
        echo "                
            </div>
            <div>
                ";
        // line 75
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'label', array("label" => "Image de l'article :"));
        echo "
                ";
        // line 77
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'errors');
        echo "
                ";
        // line 79
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image"), 'widget', array("attr" => array("id" => "formImage")));
        echo "                
            </div>
            <div>
                ";
        // line 83
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategory"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Sous catégorie :"));
        echo "
                ";
        // line 85
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategory"), 'errors');
        echo "
                ";
        // line 87
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subCategory"), 'widget', array("attr" => array("id" => "formSubcat")));
        echo "                
            </div>
            
            ";
        // line 94
        echo "            <div>
                ";
        // line 95
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
        return "ArticleDevBundle:SubCategoryDev:addSubCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 83,  172 => 77,  167 => 75,  150 => 67,  126 => 55,  97 => 44,  84 => 41,  205 => 96,  202 => 95,  195 => 88,  190 => 86,  185 => 84,  178 => 80,  161 => 72,  100 => 44,  76 => 35,  70 => 30,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 79,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  61 => 11,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 95,  179 => 69,  159 => 61,  143 => 63,  135 => 53,  119 => 42,  102 => 44,  71 => 33,  67 => 30,  63 => 27,  38 => 12,  94 => 28,  89 => 37,  85 => 38,  56 => 28,  87 => 37,  21 => 1,  93 => 47,  78 => 21,  46 => 23,  27 => 4,  201 => 94,  196 => 90,  183 => 82,  166 => 71,  163 => 62,  158 => 67,  156 => 70,  151 => 68,  142 => 59,  138 => 61,  136 => 56,  121 => 53,  105 => 46,  91 => 27,  62 => 23,  49 => 19,  25 => 3,  24 => 4,  194 => 87,  186 => 57,  181 => 54,  171 => 61,  165 => 41,  160 => 71,  155 => 69,  148 => 19,  137 => 19,  134 => 66,  127 => 56,  124 => 18,  117 => 52,  114 => 18,  110 => 52,  107 => 36,  104 => 45,  90 => 64,  88 => 44,  81 => 35,  77 => 68,  75 => 31,  68 => 28,  59 => 14,  44 => 14,  26 => 6,  31 => 5,  28 => 5,  19 => 1,  79 => 39,  72 => 31,  69 => 29,  47 => 21,  40 => 5,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 18,  139 => 62,  131 => 52,  123 => 47,  120 => 40,  115 => 53,  111 => 37,  108 => 36,  101 => 32,  98 => 43,  96 => 25,  83 => 36,  74 => 14,  66 => 13,  55 => 22,  52 => 23,  50 => 22,  43 => 6,  41 => 10,  35 => 8,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 64,  141 => 48,  133 => 59,  130 => 41,  125 => 44,  122 => 58,  116 => 51,  112 => 42,  109 => 47,  106 => 51,  103 => 50,  99 => 43,  95 => 48,  92 => 39,  86 => 28,  82 => 35,  80 => 19,  73 => 15,  64 => 12,  60 => 26,  57 => 10,  54 => 10,  51 => 14,  48 => 13,  45 => 7,  42 => 20,  39 => 9,  36 => 4,  33 => 15,  30 => 5,);
    }
}
