<?php

/* ArticleDevBundle:ArticleDev:index.html.twig */
class __TwigTemplate_3a6290edf637c230cb66e14ea7c4e0a98518efe7984d1f501a30655796d55fca extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getContext($context, "articles")) != 0)) {
            // line 58
            echo "
        ";
            // line 59
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 60
                echo "            <div class='titleDev'>
                ";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                echo "
                <span class=\"adminArticle\">
                   ";
                // line 63
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 64
                    echo "                       <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                    echo "' title=\"Editer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\">
                           Editer
                       </a>  - 
                       <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\">
                           Supprimer
                       </a>
                   ";
                }
                // line 71
                echo "               </span>
            </div>
            ";
                // line 74
                echo "
        ";
                // line 80
                echo "
            <p class='content'>

                ";
                // line 83
                if (($this->getAttribute($this->getContext($context, "article"), "image") != "")) {
                    // line 84
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\" class='imageDev'>
                ";
                }
                // line 86
                echo "
                ";
                // line 87
                echo twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "content"), 500, true, " ... ");
                echo "
                <a href=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_article", array("idSc" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"), "idAr" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                echo "\" title='Plus de détails'>
                    <span class='back'>lire la suite</span>
                </a>

            </p>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
    ";
        } else {
            // line 96
            echo "
            <div class=\"erreur\">
                Pas d'article correspondant à cette catégorie !
            </div>   

    ";
        }
        // line 102
        echo "        
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 102,  248 => 96,  244 => 94,  232 => 88,  228 => 87,  225 => 86,  217 => 84,  215 => 83,  210 => 80,  207 => 74,  203 => 71,  194 => 67,  185 => 64,  183 => 63,  178 => 61,  175 => 60,  171 => 59,  168 => 58,  166 => 57,  161 => 56,  158 => 55,  148 => 52,  142 => 50,  139 => 49,  134 => 48,  131 => 47,  124 => 43,  121 => 42,  113 => 31,  107 => 30,  104 => 29,  101 => 28,  96 => 37,  82 => 36,  79 => 35,  76 => 28,  73 => 27,  56 => 26,  50 => 24,  47 => 23,  40 => 17,  37 => 16,  32 => 6,  30 => 5,);
    }
}
