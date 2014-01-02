<?php

/* ArticleDevBundle:QuestionDev:delQuestion.html.twig */
class __TwigTemplate_08807c926362cc60b96aeae318e354effa3c440a83aad549fc5799098bd942d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'leftCont' => array($this, 'block_leftCont'),
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
        // line 5
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_arianne($context, array $blocks = array())
    {
        // line 9
        echo "
    ";
        // line 10
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
 
    <li>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("article_dev_showCategories");
        echo "\" title=\"Retour aux catégories et sous-catégories\">
            Suppression question
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 20
    public function block_menu($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
        echo "
";
    }

    // line 26
    public function block_leftCont($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        // line 32
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Etes-vous certain de vouloir supprimer la question <span class=\"editSup\">« ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "question"), "entitled"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delQuestion", array("id" => $this->getAttribute($this->getContext($context, "question"), "id"))), "html", null, true);
        echo "\" method='post' ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
            
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("article_dev_admin");
        echo "\" class='a-back'>
              <i class=\"btn-back\"></i>
              Retour à l'administration
            </a>
            
            <input type=\"submit\" value=\"Supprimer\" class=\"btn-danger\" />
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:QuestionDev:delQuestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 64,  81 => 37,  290 => 107,  284 => 103,  276 => 97,  261 => 92,  233 => 81,  206 => 72,  197 => 69,  188 => 64,  167 => 64,  153 => 59,  129 => 51,  77 => 33,  256 => 102,  248 => 96,  244 => 94,  228 => 87,  225 => 86,  215 => 76,  210 => 80,  207 => 74,  194 => 67,  175 => 60,  124 => 55,  65 => 23,  174 => 77,  165 => 73,  113 => 49,  90 => 38,  155 => 74,  148 => 52,  137 => 65,  126 => 51,  104 => 29,  205 => 96,  185 => 63,  178 => 61,  134 => 48,  127 => 56,  110 => 43,  70 => 29,  53 => 23,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 88,  247 => 78,  241 => 84,  229 => 73,  220 => 79,  214 => 69,  177 => 77,  140 => 60,  132 => 58,  107 => 49,  61 => 11,  273 => 96,  269 => 95,  254 => 92,  243 => 85,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  219 => 76,  217 => 84,  204 => 72,  179 => 69,  159 => 61,  143 => 61,  119 => 47,  102 => 42,  71 => 19,  63 => 29,  59 => 21,  38 => 9,  94 => 40,  85 => 34,  75 => 25,  68 => 24,  56 => 20,  87 => 21,  21 => 1,  26 => 6,  93 => 43,  88 => 36,  46 => 21,  44 => 11,  201 => 92,  196 => 75,  171 => 59,  163 => 72,  158 => 55,  151 => 67,  142 => 62,  136 => 55,  121 => 54,  117 => 52,  62 => 33,  49 => 19,  25 => 3,  24 => 4,  232 => 88,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 68,  190 => 86,  186 => 51,  183 => 63,  181 => 69,  172 => 43,  169 => 60,  166 => 57,  161 => 71,  156 => 68,  146 => 59,  138 => 56,  135 => 59,  128 => 52,  118 => 19,  105 => 42,  100 => 38,  97 => 40,  91 => 44,  89 => 35,  84 => 28,  78 => 27,  76 => 31,  67 => 30,  58 => 20,  34 => 6,  27 => 4,  31 => 6,  28 => 4,  19 => 1,  79 => 32,  72 => 24,  69 => 27,  47 => 13,  40 => 5,  37 => 16,  22 => 2,  246 => 90,  157 => 65,  145 => 46,  139 => 55,  131 => 47,  123 => 50,  120 => 54,  115 => 46,  111 => 45,  108 => 45,  101 => 41,  98 => 41,  96 => 25,  83 => 37,  74 => 26,  66 => 26,  55 => 19,  52 => 23,  50 => 22,  43 => 6,  41 => 10,  35 => 8,  32 => 2,  29 => 5,  209 => 82,  203 => 71,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 62,  176 => 64,  173 => 71,  168 => 73,  164 => 67,  162 => 78,  154 => 58,  149 => 64,  147 => 56,  144 => 61,  141 => 64,  133 => 52,  130 => 52,  125 => 50,  122 => 50,  116 => 47,  112 => 46,  109 => 44,  106 => 42,  103 => 47,  99 => 40,  95 => 36,  92 => 38,  86 => 37,  82 => 36,  80 => 19,  73 => 33,  64 => 12,  60 => 26,  57 => 10,  54 => 25,  51 => 14,  48 => 13,  45 => 7,  42 => 7,  39 => 17,  36 => 4,  33 => 4,  30 => 5,);
    }
}
