<?php

/* ArticleDevBundle:CategoryDev:delCategory.html.twig */
class __TwigTemplate_8569ffd11d8068855f631b1b227ef9d9df1f8d1f6f6850ea401021c397f8b5e8 extends Twig_Template
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
        echo "
    ";
        // line 9
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
 
    <li>
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($this->getContext($context, "category"), "id"))), "html", null, true);
        echo "\" title=\"Supprimer la catégorie: ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "labelCategory"), "html", null, true);
        echo "\">
            Suppression Catégories
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 19
    public function block_menu($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        // line 24
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer la catégorie  <span class=\"editSup\">« ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "category"), "labelCategory"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delCategory", array("id" => $this->getAttribute($this->getContext($context, "category"), "id"))), "html", null, true);
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            
            <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour aux catégories
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:CategoryDev:delCategory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  175 => 66,  167 => 64,  153 => 59,  129 => 50,  90 => 38,  249 => 100,  237 => 92,  225 => 86,  210 => 82,  200 => 72,  124 => 45,  77 => 33,  65 => 23,  155 => 68,  152 => 67,  150 => 66,  113 => 52,  205 => 96,  185 => 70,  178 => 62,  134 => 60,  127 => 46,  110 => 43,  70 => 29,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 94,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 53,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 55,  143 => 55,  119 => 46,  102 => 28,  71 => 26,  63 => 27,  59 => 32,  38 => 9,  94 => 36,  85 => 34,  75 => 25,  68 => 24,  56 => 25,  87 => 37,  21 => 2,  26 => 6,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  201 => 92,  196 => 75,  171 => 65,  163 => 62,  158 => 67,  151 => 53,  142 => 59,  136 => 56,  121 => 46,  117 => 52,  62 => 14,  49 => 22,  25 => 3,  24 => 4,  232 => 76,  221 => 85,  218 => 84,  213 => 67,  208 => 81,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 69,  172 => 43,  169 => 60,  166 => 71,  161 => 61,  156 => 70,  146 => 59,  138 => 56,  135 => 48,  128 => 52,  118 => 48,  105 => 29,  100 => 41,  97 => 6,  91 => 42,  89 => 30,  84 => 28,  78 => 27,  76 => 33,  67 => 26,  58 => 20,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  19 => 1,  79 => 33,  72 => 24,  69 => 25,  47 => 15,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 65,  145 => 46,  139 => 54,  131 => 52,  123 => 50,  120 => 49,  115 => 45,  111 => 44,  108 => 36,  101 => 41,  98 => 36,  96 => 40,  83 => 35,  74 => 26,  66 => 27,  55 => 19,  52 => 21,  50 => 22,  43 => 11,  41 => 10,  35 => 8,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 65,  182 => 66,  176 => 61,  173 => 71,  168 => 58,  164 => 67,  162 => 57,  154 => 54,  149 => 19,  147 => 56,  144 => 64,  141 => 50,  133 => 51,  130 => 59,  125 => 51,  122 => 51,  116 => 48,  112 => 46,  109 => 44,  106 => 42,  103 => 32,  99 => 27,  95 => 38,  92 => 21,  86 => 36,  82 => 70,  80 => 34,  73 => 19,  64 => 25,  60 => 26,  57 => 11,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 16,  33 => 15,  30 => 5,);
    }
}
