<?php

/* ::base.html.twig */
class __TwigTemplate_49542c53312b399064e03933c841a11147264aa9cc6661694315ebc48594bc6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'arianne' => array($this, 'block_arianne'),
            'leftCont' => array($this, 'block_leftCont'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>
            ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 9
        echo "        </title>
            
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    
    <body>
        <header id=\"banDev\">
            <div id=\"details\">
                <div id=\"leftBan\"></div>
                <div id=\"arbre\"></div>
            </div>
            <div id=\"navtabs\">
                <!-- MENU A CONCEVOIR DE MANIERE AUTOMATIQUE -->
                <!--ul>
                    <li class=\"hover first\">
                        <a href=\"/features/index.html\" title=\"Accueil, Développement durable\">Accueil</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/features/platform/index.html\" title=\"Le menu 2\">Le menu 2</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/enterprise/index.html\" title=\"Le menu 3\">Le menu 3</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"http://plugins.netbeans.org/PluginPortal/\" title=\"Le menu 4\">Le menu 4</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/kb/index.html\" title=\"Le menu 5\">Le menu 5</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/community/index.html\" title=\"Le menu 6\">Le menu 6</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/enterprise/index.html\" title=\"Le menu 3\">Le menu 3</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"http://plugins.netbeans.org/PluginPortal/\" title=\"Le menu 4\">Le menu 4</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/kb/index.html\" title=\"Le menu 5\">Le menu 5</a>
                    </li>
                    <li class=\"hover \">
                        <a href=\"/community/index.html\" title=\"Le menu 6\">Le menu 6</a>
                    </li>
                </ul-->  
            </div>
        </header>
        <nav id=\"arianneDev\">
            ";
        // line 69
        $this->displayBlock('arianne', $context, $blocks);
        // line 70
        echo "        </nav>
        <div id=\"contentDev\">
            <aside id=\"leftContent\">
                ";
        // line 73
        $this->displayBlock('leftCont', $context, $blocks);
        // line 74
        echo "            </aside>
            <section id=\"rightContent\">
                ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "            </section>
        </div>
        
        ";
        // line 80
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "                Développement durable
            ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "        
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0e9861a_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e9861a_0") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main_structPage_1.css");
            // line 16
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "0e9861a"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0e9861a") : $this->env->getExtension('assets')->getAssetUrl("css/compiled/main.css");
            // line 16
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        }
        unset($context["asset_url"]);
        // line 20
        echo "            
        ";
    }

    // line 69
    public function block_arianne($context, array $blocks = array())
    {
    }

    // line 73
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 76
    public function block_body($context, array $blocks = array())
    {
    }

    // line 80
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 80,  174 => 76,  169 => 73,  164 => 69,  159 => 20,  152 => 17,  149 => 16,  141 => 17,  138 => 16,  134 => 13,  131 => 12,  128 => 11,  123 => 7,  120 => 6,  114 => 81,  112 => 80,  107 => 77,  105 => 76,  101 => 74,  99 => 73,  94 => 70,  92 => 69,  43 => 23,  40 => 22,  38 => 11,  34 => 9,  32 => 6,  25 => 1,  31 => 4,  28 => 3,);
    }
}
