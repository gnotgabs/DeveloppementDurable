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
            'menu' => array($this, 'block_menu'),
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
        // line 23
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 24
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
                ";
        // line 34
        $this->displayBlock('menu', $context, $blocks);
        // line 35
        echo "                
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
        // line 72
        $this->displayBlock('arianne', $context, $blocks);
        // line 73
        echo "        </nav>
        <div id=\"contentDev\">
            <aside id=\"leftContent\">
                ";
        // line 76
        $this->displayBlock('leftCont', $context, $blocks);
        // line 77
        echo "            </aside>
            <section id=\"rightContent\">
                ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "            </section>
        </div>
        
        ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 84
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
            // asset "ebe53c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebe53c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_menu_1.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "ebe53c2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebe53c2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_structPage_2.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "ebe53c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ebe53c2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "            
        ";
    }

    // line 34
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 72
    public function block_arianne($context, array $blocks = array())
    {
    }

    // line 76
    public function block_leftCont($context, array $blocks = array())
    {
    }

    // line 79
    public function block_body($context, array $blocks = array())
    {
    }

    // line 83
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
        return array (  200 => 83,  195 => 79,  190 => 76,  185 => 72,  180 => 34,  175 => 21,  168 => 18,  165 => 17,  157 => 18,  154 => 17,  147 => 18,  144 => 17,  140 => 13,  137 => 12,  134 => 11,  129 => 7,  126 => 6,  120 => 84,  118 => 83,  113 => 80,  111 => 79,  107 => 77,  105 => 76,  100 => 73,  98 => 72,  57 => 34,  41 => 23,  26 => 1,  101 => 54,  92 => 51,  88 => 50,  85 => 49,  82 => 43,  77 => 41,  73 => 40,  70 => 39,  67 => 38,  62 => 36,  59 => 35,  53 => 31,  44 => 24,  39 => 11,  35 => 9,  33 => 6,  30 => 3,);
    }
}
