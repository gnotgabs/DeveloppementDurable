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
        echo $context["macroMenus"]->getdynamicMenu($this->getContext($context, "menus"));
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
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
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                        ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
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
        echo $context["macroVoletGauche"]->getvoletGauche($this->getContext($context, "articles"), $this->getContext($context, "lMenus"));
        echo "
";
    }

    // line 47
    public function block_catSelect($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 49
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
                // line 50
                echo "              -  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
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
        if ((twig_length_filter($this->env, $this->getContext($context, "questions")) != 0)) {
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
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "questions"));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 62
                echo "                    ";
                $context["i"] = ($this->getContext($context, "i") + 1);
                // line 63
                echo "                    <span  class=\"laQ\">
                        > ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "question"), "entitled"), "html", null, true);
                echo "
                    </span>
                    
                    <span class=\"adminArticle\">
                        ";
                // line 68
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 69
                    echo "                            <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editQuestion", array("id" => $this->getAttribute($this->getContext($context, "question"), "id"))), "html", null, true);
                    echo "' title=\"Editer la question: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "question"), "entitled"), "html", null, true);
                    echo "\">
                               Editer
                            </a>  - 
                            <a href=\"";
                    // line 72
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delQuestion", array("id" => $this->getAttribute($this->getContext($context, "question"), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer la question: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "question"), "entitled"), "html", null, true);
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
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "question"), "proposals"));
                foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
                    // line 80
                    echo "                            <input type=\"radio\" name=\"q";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "id"), "html", null, true);
                    echo "\" id=\"q";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "id"), "html", null, true);
                    echo "\" /> 
                            <label for=\"q";
                    // line 81
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "id"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "pEntitled"), "html", null, true);
                    echo "</label>
                            
                            <span class=\"adminArticle\">
                                ";
                    // line 84
                    if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                        // line 85
                        echo "                                    <a href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editProposal", array("id" => $this->getAttribute($this->getContext($context, "proposal"), "id"))), "html", null, true);
                        echo "' title=\"Editer la réponse: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "pEntitled"), "html", null, true);
                        echo "\">
                                       Editer
                                    </a>  - 
                                    <a href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delProposal", array("id" => $this->getAttribute($this->getContext($context, "proposal"), "id"))), "html", null, true);
                        echo "\" title=\"Supprimer la réponse: ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "proposal"), "pEntitled"), "html", null, true);
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
        return array (  290 => 107,  284 => 103,  276 => 97,  269 => 95,  261 => 92,  252 => 88,  243 => 85,  241 => 84,  233 => 81,  224 => 80,  220 => 79,  215 => 76,  206 => 72,  197 => 69,  195 => 68,  188 => 64,  185 => 63,  182 => 62,  177 => 61,  175 => 60,  171 => 59,  168 => 58,  166 => 57,  161 => 56,  158 => 55,  148 => 52,  142 => 50,  139 => 49,  134 => 48,  131 => 47,  124 => 43,  121 => 42,  113 => 31,  107 => 30,  104 => 29,  101 => 28,  96 => 37,  82 => 36,  79 => 35,  76 => 28,  73 => 27,  56 => 26,  50 => 24,  47 => 23,  40 => 17,  37 => 16,  32 => 6,  30 => 5,);
    }
}
