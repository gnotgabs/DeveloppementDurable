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
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 26
    public function block_leftCont($context, array $blocks = array())
    {
        // line 27
        echo "    ";
        if (isset($context["macroVoletGauche"])) { $_macroVoletGauche_ = $context["macroVoletGauche"]; } else { $_macroVoletGauche_ = null; }
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if (isset($context["lMenus"])) { $_lMenus_ = $context["lMenus"]; } else { $_lMenus_ = null; }
        echo $_macroVoletGauche_->getvoletGauche($_articles_, $_lMenus_);
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
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_question_, "entitled"), "html", null, true);
        echo " » ?</span></p>
        <form action=\"";
        // line 35
        if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delQuestion", array("id" => $this->getAttribute($_question_, "id"))), "html", null, true);
        echo "\" method='post' ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"formSup\"> 
            ";
        // line 36
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
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
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
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
        return array (  135 => 50,  74 => 14,  21 => 1,  156 => 60,  148 => 59,  151 => 59,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 35,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 61,  154 => 50,  144 => 56,  141 => 56,  128 => 47,  86 => 37,  83 => 27,  132 => 49,  103 => 36,  94 => 21,  188 => 74,  182 => 58,  174 => 65,  168 => 64,  145 => 51,  123 => 46,  73 => 27,  116 => 42,  68 => 26,  61 => 24,  230 => 80,  199 => 63,  179 => 57,  167 => 65,  159 => 64,  153 => 60,  139 => 55,  119 => 50,  113 => 46,  99 => 43,  87 => 36,  79 => 15,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 54,  131 => 54,  122 => 50,  117 => 49,  102 => 38,  92 => 37,  72 => 24,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 52,  147 => 60,  127 => 51,  112 => 47,  96 => 38,  71 => 27,  55 => 15,  114 => 49,  109 => 38,  106 => 41,  101 => 40,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 29,  63 => 13,  26 => 6,  98 => 38,  88 => 37,  80 => 33,  46 => 12,  44 => 11,  43 => 11,  57 => 26,  50 => 22,  47 => 13,  38 => 9,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 61,  155 => 64,  142 => 57,  136 => 55,  133 => 47,  130 => 49,  120 => 55,  75 => 32,  53 => 23,  32 => 2,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 64,  152 => 55,  126 => 18,  108 => 47,  105 => 28,  100 => 38,  91 => 39,  89 => 16,  84 => 32,  82 => 32,  78 => 33,  76 => 27,  69 => 30,  67 => 15,  60 => 10,  58 => 26,  42 => 24,  40 => 17,  36 => 4,  34 => 5,  27 => 4,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 77,  193 => 61,  187 => 73,  183 => 62,  180 => 71,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 55,  149 => 57,  146 => 66,  140 => 50,  137 => 18,  129 => 52,  124 => 51,  121 => 46,  118 => 44,  115 => 44,  111 => 42,  107 => 44,  104 => 38,  97 => 30,  93 => 44,  90 => 34,  81 => 31,  70 => 28,  66 => 29,  62 => 26,  59 => 21,  56 => 20,  52 => 24,  49 => 23,  45 => 13,  41 => 10,  37 => 16,  33 => 4,  30 => 5,);
    }
}
