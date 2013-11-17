<?php

/* ArticleDevBundle:CategoryDev:modifCategory.html.twig */
class __TwigTemplate_f11038c8c35637eb1d433a1c95326ff4eae8b1a5992f7d59a3c03d390392f3b1 extends Twig_Template
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
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : null));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " id=\"formCateg\">
            ";
        // line 31
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            
            <div style=\"display: none\">
                ";
        // line 35
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'label', array("label" => "Date de publication :"));
        echo "
                ";
        // line 37
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'errors');
        echo "
                ";
        // line 39
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date"), 'widget');
        echo "                
            </div>
            <div>
                ";
        // line 43
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'label', array("label" => "Titre de l'article :"));
        echo "
                ";
        // line 45
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'errors');
        echo "
                ";
        // line 47
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "title"), 'widget', array("attr" => array("id" => "formTitle")));
        echo "                
            </div>
            <div>
                ";
        // line 51
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author"), 'label', array("label" => "Nom de l'auteur :"));
        echo "
                ";
        // line 53
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author"), 'errors');
        echo "
                ";
        // line 55
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "author"), 'widget', array("attr" => array("id" => "formAuthor")));
        echo "                
            </div>
            <div>
                ";
        // line 59
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content"), 'label', array("label" => "Contenu de l'article :"));
        echo "
                ";
        // line 61
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content"), 'errors');
        echo "
                ";
        // line 63
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content"), 'widget', array("attr" => array("id" => "formContent")));
        echo "                
            </div>
            <div>
                ";
        // line 67
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "link"), 'label', array("label" => "Lien important :"));
        echo "
                ";
        // line 69
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "link"), 'errors');
        echo "
                ";
        // line 71
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "link"), 'widget', array("attr" => array("id" => "formLink")));
        echo "                
            </div>
            <div>
                ";
        // line 75
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'label', array("label" => "Image de l'article :"));
        echo "
                ";
        // line 77
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'errors');
        echo "
                ";
        // line 79
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "image"), 'widget', array("attr" => array("id" => "formImage")));
        echo "                
            </div>
            <div>
                ";
        // line 83
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subCategory"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Sous catégorie :"));
        echo "
                ";
        // line 85
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subCategory"), 'errors');
        echo "
                ";
        // line 87
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subCategory"), 'widget', array("attr" => array("id" => "formSubcat")));
        echo "                
            </div>
            
            ";
        // line 94
        echo "            <div>
                ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
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
        return "ArticleDevBundle:CategoryDev:modifCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 87,  184 => 83,  160 => 71,  126 => 55,  104 => 45,  175 => 66,  167 => 75,  157 => 60,  153 => 59,  129 => 50,  96 => 40,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 45,  77 => 33,  74 => 27,  65 => 20,  155 => 69,  152 => 67,  150 => 67,  205 => 96,  185 => 70,  178 => 62,  139 => 54,  134 => 60,  127 => 46,  110 => 43,  83 => 36,  70 => 27,  53 => 23,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 79,  140 => 55,  132 => 47,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 95,  179 => 69,  159 => 55,  143 => 63,  131 => 52,  119 => 46,  102 => 28,  71 => 26,  63 => 27,  59 => 32,  47 => 15,  38 => 9,  94 => 36,  85 => 25,  79 => 33,  75 => 31,  68 => 14,  56 => 25,  50 => 22,  29 => 3,  87 => 37,  72 => 24,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  35 => 8,  43 => 11,  41 => 10,  201 => 94,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  123 => 47,  121 => 53,  117 => 52,  101 => 32,  66 => 27,  62 => 14,  49 => 22,  32 => 7,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 77,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 18,  138 => 61,  135 => 48,  128 => 58,  118 => 48,  115 => 45,  111 => 44,  108 => 36,  105 => 29,  100 => 41,  97 => 6,  91 => 27,  89 => 37,  84 => 35,  78 => 21,  76 => 32,  69 => 29,  67 => 26,  58 => 35,  40 => 12,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 85,  187 => 65,  182 => 66,  176 => 61,  173 => 78,  168 => 58,  164 => 57,  162 => 59,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 59,  130 => 59,  125 => 49,  122 => 51,  116 => 51,  112 => 42,  109 => 47,  106 => 42,  103 => 32,  99 => 43,  95 => 39,  92 => 39,  86 => 36,  82 => 35,  80 => 34,  73 => 19,  64 => 25,  60 => 26,  57 => 11,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 16,  33 => 15,  30 => 5,);
    }
}
