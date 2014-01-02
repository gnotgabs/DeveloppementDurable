<?php

/* ArticleDevBundle::voletgauche.html.twig */
class __TwigTemplate_bacfad9e48130f6d0dabbf2282f563d7ff5d67066426e15da0cd9628b559993d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    }

    // line 1
    public function getvoletGauche($_articles = null, $_lMenus = null)
    {
        $context = $this->env->mergeGlobals(array(
            "articles" => $_articles,
            "lMenus" => $_lMenus,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    ";
            // line 3
            if ((twig_length_filter($this->env, $this->getContext($context, "articles")) != 0)) {
                // line 4
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 5
                    echo "            <div id=\"question\">
                <p class=\"title\">Exercez vous</p>
                <a href=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_dev_question", array("idSC" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"), "idQ" => $this->getAttribute($this->getAttribute($this->getContext($context, "article"), "subCategory"), "id"))), "html", null, true);
                    echo "\" class=\"aQuiz\">
                    Accédez aux questions
                </a>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            // line 13
            echo "    <div id=\"autres\">
        ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lMenus"));
            foreach ($context['_seq'] as $context["_key"] => $context["lmenu"]) {
                // line 15
                echo "            <p class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "lmenu"), "title"), "html", null, true);
                echo "</p>
            ";
                // line 16
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "lmenu"), "lMenuElts"));
                foreach ($context['_seq'] as $context["_key"] => $context["elt"]) {
                    // line 17
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elt"), "linkElt"), "html", null, true);
                    echo "\" class=\"aQuiz\" target='_blank'>
                    >&nbsp;&nbsp;";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "elt"), "labelElt"), "html", null, true);
                    echo "
                </a>
            <br>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['elt'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lmenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle::voletgauche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  92 => 22,  77 => 17,  68 => 15,  47 => 7,  38 => 4,  33 => 2,  96 => 25,  80 => 19,  66 => 13,  64 => 14,  61 => 13,  53 => 8,  43 => 5,  32 => 2,  21 => 1,  232 => 76,  221 => 71,  218 => 70,  213 => 67,  208 => 60,  202 => 58,  195 => 54,  190 => 52,  186 => 51,  183 => 50,  181 => 49,  172 => 43,  169 => 42,  166 => 41,  161 => 35,  149 => 19,  146 => 18,  128 => 19,  125 => 18,  118 => 19,  115 => 18,  108 => 12,  105 => 11,  91 => 77,  89 => 76,  84 => 73,  82 => 18,  78 => 68,  76 => 67,  69 => 14,  60 => 36,  58 => 12,  45 => 7,  42 => 24,  40 => 5,  34 => 6,  27 => 1,  174 => 77,  168 => 74,  165 => 73,  163 => 72,  156 => 22,  151 => 67,  143 => 65,  141 => 64,  138 => 19,  135 => 18,  131 => 54,  122 => 50,  113 => 47,  111 => 13,  106 => 44,  100 => 7,  97 => 6,  90 => 38,  87 => 21,  79 => 29,  73 => 16,  70 => 27,  67 => 41,  62 => 33,  59 => 26,  57 => 10,  52 => 23,  46 => 21,  39 => 17,  36 => 3,  31 => 6,  29 => 5,);
    }
}
