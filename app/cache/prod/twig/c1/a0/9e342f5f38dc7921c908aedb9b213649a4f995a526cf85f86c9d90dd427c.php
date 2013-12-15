<?php

/* ArticleDevBundle:LMenuDev:addLMenu.html.twig */
class __TwigTemplate_c1a09e342f5f38dc7921c908aedb9b213649a4f995a526cf85f86c9d90dd427c extends Twig_Template
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
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("article_dev_addCategory");
        echo "\" title=\"Ajouter une sous-catégorie\">
            Ajout de menu
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
    }

    // line 23
    public function block_menu($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 28
    public function block_leftCont($context, array $blocks = array())
    {
        // line 29
        echo "    ";
        if (isset($context["macroVoletGauche"])) { $_macroVoletGauche_ = $context["macroVoletGauche"]; } else { $_macroVoletGauche_ = null; }
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if (isset($context["lMenus"])) { $_lMenus_ = $context["lMenus"]; } else { $_lMenus_ = null; }
        echo $_macroVoletGauche_->getvoletGauche($_articles_, $_lMenus_);
        echo "
";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">
            Ajout des éléments du volet de gauche ( Menu )
            
            <span class=\"adminArticle\">
               <a href='";
        // line 39
        echo $this->env->getExtension('routing')->getPath("article_dev_LMenu");
        echo "' title=\"Edition et suppression des menus et sous-menus\">
                   <font color='blue'><u>Editer / Supprimer menus et sous-menus</u></font>
               </a>
            </span>
        </p>
        <form action=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("article_dev_addLMenu");
        echo "\" method='post' ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'enctype');
        echo " class=\"formCateg\">
            ";
        // line 45
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'errors');
        echo "
            <div>
                ";
        // line 47
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title"), 'label', array("label_attr" => array("class" => "formLabel"), "label" => "Titre du menu: "));
        echo "
                ";
        // line 48
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title"), 'errors');
        echo "
                ";
        // line 49
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($_form_, "title"), 'widget', array("attr" => array("id" => "formCat")));
        echo "                
            </div>
            <div>
                ";
        // line 52
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($_form_, 'rest');
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
        return "ArticleDevBundle:LMenuDev:addLMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 56,  125 => 48,  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 35,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 59,  154 => 50,  144 => 53,  141 => 47,  128 => 42,  86 => 36,  83 => 27,  132 => 49,  103 => 39,  94 => 36,  188 => 74,  182 => 58,  174 => 65,  168 => 67,  145 => 50,  123 => 44,  73 => 27,  116 => 41,  68 => 29,  61 => 24,  230 => 80,  199 => 63,  179 => 57,  167 => 56,  159 => 64,  153 => 70,  139 => 52,  119 => 31,  113 => 46,  99 => 44,  87 => 35,  79 => 31,  54 => 25,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 50,  131 => 43,  122 => 49,  117 => 48,  102 => 38,  92 => 25,  72 => 24,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 49,  147 => 60,  127 => 59,  112 => 47,  96 => 38,  71 => 30,  55 => 15,  114 => 22,  109 => 41,  106 => 45,  101 => 48,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 28,  63 => 13,  26 => 6,  98 => 38,  88 => 34,  80 => 33,  46 => 12,  44 => 11,  43 => 11,  57 => 26,  50 => 22,  47 => 15,  38 => 9,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 65,  155 => 64,  142 => 65,  136 => 51,  133 => 50,  130 => 49,  120 => 55,  75 => 32,  53 => 23,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 71,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 63,  126 => 18,  108 => 41,  105 => 28,  100 => 37,  91 => 39,  89 => 16,  84 => 29,  82 => 32,  78 => 32,  76 => 27,  69 => 30,  67 => 15,  60 => 20,  58 => 26,  42 => 24,  40 => 17,  36 => 16,  34 => 5,  27 => 4,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 65,  193 => 61,  187 => 76,  183 => 62,  180 => 59,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 54,  149 => 57,  146 => 66,  140 => 49,  137 => 18,  129 => 52,  124 => 35,  121 => 46,  118 => 36,  115 => 44,  111 => 41,  107 => 44,  104 => 38,  97 => 30,  93 => 37,  90 => 36,  81 => 33,  70 => 28,  66 => 29,  62 => 26,  59 => 25,  56 => 24,  52 => 24,  49 => 23,  45 => 13,  41 => 10,  37 => 16,  33 => 4,  30 => 5,);
    }
}
