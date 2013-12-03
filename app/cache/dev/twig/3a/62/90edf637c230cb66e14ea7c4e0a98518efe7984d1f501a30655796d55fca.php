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

    // line 22
    public function block_arianne($context, array $blocks = array())
    {
        // line 23
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "

    ";
        // line 25
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
            // line 26
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
                // line 27
                echo "            ";
                $this->displayBlock('subCat', $context, $blocks);
                // line 34
                echo "        ";
            }
            // line 35
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
        // line 36
        echo "                
";
    }

    // line 27
    public function block_subCat($context, array $blocks = array())
    {
        // line 28
        echo "                <li>
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
        echo "\" title=\"Retour à : ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "\">
                        ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
        echo "
                    </a><span class=\"end\">&nbsp;</span>
                </li>
            ";
    }

    // line 41
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 45
    public function block_catSelect($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 47
            echo "        ";
            if (($this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory") != "accueil")) {
                // line 48
                echo "              -  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "labelSubCategory"), "html", null, true);
                echo "
        ";
            }
            // line 50
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "    
";
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        // line 54
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 55
        if ((twig_length_filter($this->env, $this->getContext($context, "articles")) != 0)) {
            // line 56
            echo "
        ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 58
                echo "            <div class='titleDev'>
                ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                echo "
                <span class=\"adminArticle\">
                   ";
                // line 61
                if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
                    // line 62
                    echo "                       <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_editArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                    echo "' title=\"Editer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\">
                           Editer
                       </a>  - 
                       <a href=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_delArticle", array("id" => $this->getAttribute($this->getContext($context, "article"), "id"))), "html", null, true);
                    echo "\" title=\"Supprimer l'article: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\">
                           Supprimer
                       </a>
                   ";
                }
                // line 69
                echo "               </span>
            </div>
            ";
                // line 72
                echo "
        ";
                // line 78
                echo "
            <p class='content'>

                ";
                // line 81
                if (($this->getAttribute($this->getContext($context, "article"), "image") != "")) {
                    // line 82
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "image"), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "title"), "html", null, true);
                    echo "\" class='imageDev'>
                ";
                }
                // line 84
                echo "
                ";
                // line 85
                echo twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "content"), 500, true, " ... ");
                echo "
                <a href=\"";
                // line 86
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
            // line 92
            echo "
    ";
        } else {
            // line 94
            echo "
            <div class=\"erreur\">
                Pas d'article correspondant à cette catégorie !
            </div>   

    ";
        }
        // line 100
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
        return array (  249 => 100,  241 => 94,  237 => 92,  225 => 86,  221 => 85,  218 => 84,  210 => 82,  208 => 81,  203 => 78,  200 => 72,  196 => 69,  187 => 65,  178 => 62,  176 => 61,  171 => 59,  168 => 58,  164 => 57,  161 => 56,  159 => 55,  154 => 54,  151 => 53,  141 => 50,  135 => 48,  132 => 47,  127 => 46,  124 => 45,  119 => 41,  111 => 30,  105 => 29,  102 => 28,  99 => 27,  94 => 36,  80 => 35,  77 => 34,  74 => 27,  71 => 26,  54 => 25,  48 => 23,  45 => 22,  38 => 16,  35 => 15,  30 => 5,);
    }
}
