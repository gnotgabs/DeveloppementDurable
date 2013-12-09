<?php

/* ArticleDevBundle:ArticleDev:article.html.twig */
class __TwigTemplate_0f978027446fdafcc9c70ec573e122723523884cf70f2efc3b0602913eb0ec56 extends Twig_Template
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
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
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
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
        echo "
        <span class=\"adminArticle\">
           ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "                <a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "' title=\"Editer l'article: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
            echo "\">
                    Editer
                </a>  - 
                <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
            echo "\" title=\"Supprimer l'article: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
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
        if (($this->getAttribute($this->getContext($context, "article"), "image") != "")) {
            // line 59
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "image"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
            echo "\" class='imageDevSup'>
        ";
        }
        // line 61
        echo "        ";
        echo $this->getAttribute($this->getContext($context, "article"), "content");
        echo "
        <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getContext($context, "idSc"))), "html", null, true);
        echo "\" title=\"retour à la page précédente\">
            <span class='back'>«« Retour</span>
        </a>
    </p>
    ";
        // line 66
        if (($this->getAttribute($this->getContext($context, "article"), "link") != "")) {
            // line 67
            echo "        <p class='linkDev'>
            Pour plus d'informations, <a href='";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "link"), "html", null, true);
            echo "' target=\"_blank\"><span class='details'>cliquez ici.</span></a>
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
        return array (  155 => 68,  152 => 67,  150 => 66,  113 => 52,  205 => 96,  185 => 84,  178 => 80,  134 => 60,  127 => 56,  110 => 48,  70 => 27,  53 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 61,  143 => 62,  119 => 42,  102 => 47,  71 => 19,  63 => 26,  59 => 32,  38 => 6,  94 => 28,  85 => 25,  75 => 25,  68 => 14,  56 => 25,  87 => 36,  21 => 2,  26 => 6,  93 => 38,  88 => 38,  46 => 18,  44 => 12,  201 => 92,  196 => 90,  171 => 61,  163 => 62,  158 => 67,  151 => 68,  142 => 59,  136 => 56,  121 => 46,  117 => 52,  62 => 14,  49 => 22,  25 => 3,  24 => 4,  232 => 76,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 71,  156 => 70,  146 => 18,  138 => 61,  135 => 53,  128 => 58,  118 => 48,  105 => 46,  100 => 41,  97 => 6,  91 => 42,  89 => 20,  84 => 35,  78 => 21,  76 => 28,  67 => 26,  58 => 35,  34 => 6,  27 => 4,  31 => 5,  28 => 5,  19 => 1,  79 => 18,  72 => 24,  69 => 25,  47 => 15,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 62,  131 => 52,  123 => 47,  120 => 56,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 40,  96 => 31,  83 => 40,  74 => 14,  66 => 27,  55 => 15,  52 => 21,  50 => 22,  43 => 20,  41 => 10,  35 => 8,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 76,  164 => 59,  162 => 57,  154 => 58,  149 => 19,  147 => 58,  144 => 64,  141 => 48,  133 => 55,  130 => 59,  125 => 57,  122 => 51,  116 => 41,  112 => 42,  109 => 44,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 70,  80 => 19,  73 => 19,  64 => 25,  60 => 26,  57 => 11,  54 => 24,  51 => 14,  48 => 13,  45 => 13,  42 => 7,  39 => 9,  36 => 16,  33 => 15,  30 => 7,);
    }
}
