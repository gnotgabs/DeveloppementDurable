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
    public function getvoletGauche($_articles = null)
    {
        $context = $this->env->mergeGlobals(array(
            "articles" => $_articles,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getContext($context, "articles"), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 3
                echo "        <div id=\"question\">
            <p class=\"title\">Exercez vous</p>
            <a href=\"";
                // line 5
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
            // line 10
            echo "    <div id=\"autres\">
        <p class=\"title\">Titre</p>
        <a href=\"\" class=\"aQuiz\">
            lien/liens
        </a>
        <br>
    </div>
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
        return array (  52 => 10,  41 => 5,  37 => 3,  32 => 2,  21 => 1,);
    }
}
