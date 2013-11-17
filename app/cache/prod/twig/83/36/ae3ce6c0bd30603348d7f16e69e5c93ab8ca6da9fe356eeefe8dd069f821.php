<?php

/* ArticleDevBundle:ArticleDev:delArticle.html.twig */
class __TwigTemplate_8336ae3ce6c0bd30603348d7f16e69e5c93ab8ca6da9fe356eeefe8dd069f821 extends Twig_Template
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

    ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory") != "accueil")) {
            // line 12
            echo "        <li>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "id"))), "html", null, true);
            echo "\" title=\"Retour à : ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory"), "html", null, true);
            echo "\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "labelSubCategory"), "html", null, true);
            echo "
            </a><span class=\"end\">&nbsp;</span>
        </li>
    ";
        }
        // line 18
        echo " 
    <li>
        <a href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" title=\"Supprimer l'article: ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
        echo "\">
            Suppression article
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu((isset($context["menus"]) ? $context["menus"] : null));
        echo "
";
    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        // line 37
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer l'article  <span class=\"editSup\">« ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id"))), "html", null, true);
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
            
            <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "subCategory"), "id"))), "html", null, true);
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour à l'article
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:delArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  155 => 68,  152 => 67,  150 => 66,  120 => 56,  113 => 52,  205 => 96,  185 => 84,  178 => 80,  139 => 62,  134 => 60,  127 => 56,  110 => 43,  83 => 40,  70 => 27,  53 => 22,  37 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 61,  143 => 62,  131 => 52,  119 => 49,  102 => 47,  71 => 19,  63 => 26,  59 => 32,  47 => 15,  38 => 9,  94 => 28,  85 => 25,  79 => 33,  75 => 25,  68 => 14,  56 => 25,  50 => 22,  29 => 3,  87 => 36,  72 => 24,  55 => 15,  21 => 2,  26 => 6,  98 => 40,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  35 => 8,  43 => 11,  41 => 10,  201 => 92,  196 => 90,  171 => 61,  163 => 62,  158 => 67,  151 => 68,  142 => 59,  136 => 56,  123 => 47,  121 => 46,  117 => 52,  101 => 32,  66 => 27,  62 => 14,  49 => 22,  32 => 7,  25 => 3,  24 => 4,  232 => 76,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 71,  156 => 70,  146 => 18,  138 => 61,  135 => 53,  128 => 58,  118 => 48,  115 => 43,  111 => 37,  108 => 36,  105 => 41,  100 => 41,  97 => 6,  91 => 42,  89 => 37,  84 => 35,  78 => 21,  76 => 32,  69 => 25,  67 => 26,  58 => 35,  40 => 12,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 59,  154 => 58,  149 => 19,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 59,  125 => 57,  122 => 51,  116 => 41,  112 => 42,  109 => 44,  106 => 33,  103 => 32,  99 => 40,  95 => 39,  92 => 21,  86 => 36,  82 => 70,  80 => 19,  73 => 19,  64 => 25,  60 => 26,  57 => 11,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 9,  36 => 16,  33 => 15,  30 => 7,);
    }
}
