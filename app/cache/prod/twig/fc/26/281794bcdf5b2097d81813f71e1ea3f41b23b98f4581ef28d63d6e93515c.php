<?php

/* ArticleDevBundle:ArticleDev:question.html.twig */
class __TwigTemplate_fc26281794bcdf5b2097d81813f71e1ea3f41b23b98f4581ef28d63d6e93515c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'arianne' => array($this, 'block_arianne'),
            'subCat' => array($this, 'block_subCat'),
            'leftCont' => array($this, 'block_leftCont'),
            'catSelect' => array($this, 'block_catSelect'),
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
        // line 6
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_menu($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
        echo "
";
    }

    // line 23
    public function block_arianne($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 26
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $_articles_, 0, 1));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "        ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if (($this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory") != "accueil")) {
                // line 28
                echo "            ";
                $this->displayBlock('subCat', $context, $blocks);
                // line 35
                echo "        ";
            }
            // line 36
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "                
";
    }

    // line 28
    public function block_subCat($context, array $blocks = array())
    {
        // line 29
        echo "                <li>
                    <a href=\"";
        // line 30
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($_article_, "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                        ";
        // line 31
        if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                    </a><span class=\"end\">&nbsp;</span>
                </li>
            ";
    }

    // line 42
    public function block_leftCont($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        if (isset($context["macroVoletGauche"])) { $_macroVoletGauche_ = $context["macroVoletGauche"]; } else { $_macroVoletGauche_ = null; }
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        if (isset($context["lMenus"])) { $_lMenus_ = $context["lMenus"]; } else { $_lMenus_ = null; }
        echo $_macroVoletGauche_->getvoletGauche($_articles_, $_lMenus_);
        echo "
";
    }

    // line 47
    public function block_catSelect($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        if (isset($context["articles"])) { $_articles_ = $context["articles"]; } else { $_articles_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $_articles_, 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "        ";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            if (($this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory") != "accueil")) {
                // line 50
                echo "              -  ";
                if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($_article_, "subCategory"), "labelSubCategory"), "html", null, true);
                echo "
        ";
            }
            // line 52
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
";
    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        // line 56
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 57
        if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
        if ((twig_length_filter($this->env, $_questions_) != 0)) {
            // line 58
            echo "        <div id=\"corpQ\">
            <form method=\"post\" action=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("article_dev_response");
            echo "\">
                ";
            // line 60
            $context["i"] = 0;
            // line 61
            echo "                ";
            if (isset($context["questions"])) { $_questions_ = $context["questions"]; } else { $_questions_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_questions_);
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 62
                echo "                    ";
                if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                $context["i"] = ($_i_ + 1);
                // line 63
                echo "                    <span  class=\"laQ\">
                        > ";
                // line 64
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_question_, "entitled"), "html", null, true);
                echo "
                    </span>
                    
                    <span class=\"adminArticle\">
                        ";
                // line 68
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 69
                    echo "                            <a href='";
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editQuestion", array("id" => $this->getAttribute($_question_, "id"))), "html", null, true);
                    echo "' title=\"Editer la question: ";
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_question_, "entitled"), "html", null, true);
                    echo "\">
                               Editer
                            </a>  - 
                            <a href=\"";
                    // line 72
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delQuestion", array("id" => $this->getAttribute($_question_, "id"))), "html", null, true);
                    echo "\" title=\"Supprimer la question: ";
                    if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_question_, "entitled"), "html", null, true);
                    echo "\">
                               Supprimer
                            </a>
                        ";
                }
                // line 76
                echo "                    </span><br>
                    
                    <div  class=\"lesR\">
                        ";
                // line 79
                if (isset($context["question"])) { $_question_ = $context["question"]; } else { $_question_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_question_, "proposals"));
                foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
                    // line 80
                    echo "                            <input type=\"radio\" name=\"q";
                    if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
                    echo twig_escape_filter($this->env, $_i_, "html", null, true);
                    echo "\" value=\"";
                    if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_proposal_, "id"), "html", null, true);
                    echo "\" id=\"q";
                    if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_proposal_, "id"), "html", null, true);
                    echo "\" /> 
                            <label for=\"q";
                    // line 81
                    if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_proposal_, "id"), "html", null, true);
                    echo "\">";
                    if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_proposal_, "pEntitled"), "html", null, true);
                    echo "</label>
                            
                            <span class=\"adminArticle\">
                                ";
                    // line 84
                    if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        // line 85
                        echo "                                    <a href='";
                        if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editProposal", array("id" => $this->getAttribute($_proposal_, "id"))), "html", null, true);
                        echo "' title=\"Editer la réponse: ";
                        if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_proposal_, "pEntitled"), "html", null, true);
                        echo "\">
                                       Editer
                                    </a>  - 
                                    <a href=\"";
                        // line 88
                        if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delProposal", array("id" => $this->getAttribute($_proposal_, "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la réponse: ";
                        if (isset($context["proposal"])) { $_proposal_ = $context["proposal"]; } else { $_proposal_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_proposal_, "pEntitled"), "html", null, true);
                        echo "\">
                                       Supprimer
                                    </a>
                                ";
                    }
                    // line 92
                    echo "                            </span><br>
                            
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposal'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                    </div><br>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo "                <p align=\"center\">
                    <input type=\"submit\" value=\"Validez\" id=\"btQValide\" >
                </p>
            </form>
        </div>
    ";
        } else {
            // line 103
            echo "        <div class=\"erreur\">
            Pas de question correspondant à cette catégorie !
        </div>   
    ";
        }
        // line 107
        echo "              
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  315 => 103,  300 => 95,  292 => 92,  270 => 85,  268 => 84,  258 => 81,  246 => 80,  241 => 79,  236 => 76,  225 => 72,  214 => 69,  191 => 61,  184 => 61,  95 => 37,  273 => 96,  269 => 94,  248 => 86,  238 => 84,  235 => 83,  212 => 68,  161 => 52,  154 => 50,  144 => 48,  141 => 47,  128 => 42,  86 => 36,  83 => 35,  132 => 49,  103 => 39,  94 => 36,  188 => 74,  182 => 58,  174 => 56,  168 => 67,  145 => 50,  123 => 44,  73 => 27,  116 => 41,  68 => 29,  61 => 24,  230 => 80,  199 => 63,  179 => 57,  167 => 56,  159 => 64,  153 => 70,  139 => 56,  119 => 31,  113 => 46,  99 => 40,  87 => 36,  79 => 32,  54 => 23,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 107,  307 => 97,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 88,  251 => 87,  239 => 69,  231 => 68,  219 => 88,  201 => 63,  143 => 49,  138 => 64,  134 => 50,  131 => 43,  122 => 43,  117 => 42,  102 => 28,  92 => 25,  72 => 30,  51 => 13,  48 => 21,  35 => 8,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 64,  198 => 65,  150 => 49,  147 => 60,  127 => 59,  112 => 32,  96 => 38,  71 => 30,  55 => 15,  114 => 22,  109 => 41,  106 => 41,  101 => 48,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 18,  63 => 13,  26 => 6,  98 => 38,  88 => 17,  80 => 28,  46 => 12,  44 => 9,  43 => 11,  57 => 14,  50 => 15,  47 => 15,  38 => 9,  227 => 74,  224 => 91,  221 => 90,  197 => 62,  195 => 77,  192 => 72,  189 => 60,  186 => 60,  181 => 67,  178 => 61,  162 => 55,  158 => 65,  155 => 64,  142 => 65,  136 => 44,  133 => 46,  130 => 42,  120 => 55,  75 => 25,  53 => 16,  32 => 6,  25 => 3,  24 => 4,  237 => 73,  223 => 71,  218 => 71,  213 => 70,  207 => 84,  200 => 54,  194 => 64,  190 => 60,  185 => 59,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 63,  126 => 18,  108 => 29,  105 => 28,  100 => 37,  91 => 77,  89 => 16,  84 => 29,  82 => 32,  78 => 40,  76 => 27,  69 => 20,  67 => 15,  60 => 12,  58 => 26,  42 => 24,  40 => 17,  36 => 16,  34 => 5,  27 => 4,  31 => 6,  28 => 4,  22 => 2,  19 => 1,  232 => 72,  226 => 75,  222 => 76,  215 => 73,  211 => 84,  208 => 69,  202 => 68,  196 => 65,  193 => 61,  187 => 76,  183 => 62,  180 => 59,  171 => 55,  166 => 51,  163 => 50,  160 => 74,  157 => 54,  149 => 57,  146 => 66,  140 => 49,  137 => 18,  129 => 19,  124 => 35,  121 => 46,  118 => 36,  115 => 44,  111 => 30,  107 => 44,  104 => 40,  97 => 37,  93 => 37,  90 => 21,  81 => 34,  70 => 26,  66 => 23,  62 => 19,  59 => 25,  56 => 12,  52 => 24,  49 => 23,  45 => 13,  41 => 9,  37 => 16,  33 => 4,  30 => 5,);
    }
}
