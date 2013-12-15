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
                    ?&nbsp;&nbsp;Accédez aux questions
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
        return array (  98 => 23,  92 => 22,  82 => 18,  77 => 17,  73 => 16,  68 => 15,  64 => 14,  61 => 13,  58 => 12,  47 => 7,  43 => 5,  38 => 4,  36 => 3,  33 => 2,  21 => 1,);
    }
}
