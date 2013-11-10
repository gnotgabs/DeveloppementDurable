<?php

/* ::admin.html.twig */
class __TwigTemplate_104456de18d1ce36b918bb2d807e76efb14da4de00a0ab9c607ec42237b456f2 extends Twig_Template
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
        // line 70
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
            // asset "3d212fc_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d212fc_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_structPage_1.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
            // asset "3d212fc_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d212fc_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main_admin_2.css");
            // line 17
            echo "            
            <link rel=\"stylesheet\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\">
            
            ";
        } else {
            // asset "3d212fc"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3d212fc") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/compiled/main.css");
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

    // line 70
    public function block_arianne($context, array $blocks = array())
    {
        // line 71
        echo "                > Admin
            ";
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
        return "::admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 83,  148 => 17,  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  529 => 92,  524 => 90,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  496 => 79,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  350 => 26,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  271 => 374,  266 => 366,  260 => 363,  250 => 341,  245 => 335,  225 => 298,  215 => 280,  186 => 239,  146 => 181,  124 => 132,  114 => 84,  77 => 25,  356 => 328,  339 => 316,  295 => 275,  20 => 1,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 138,  690 => 467,  686 => 466,  682 => 465,  678 => 133,  675 => 132,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 93,  530 => 410,  527 => 91,  525 => 408,  520 => 406,  515 => 85,  244 => 136,  188 => 90,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  367 => 155,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  281 => 388,  276 => 381,  259 => 103,  253 => 342,  232 => 88,  222 => 297,  210 => 270,  184 => 233,  170 => 84,  155 => 47,  152 => 46,  34 => 9,  363 => 32,  357 => 123,  353 => 149,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  306 => 107,  297 => 276,  291 => 102,  288 => 4,  274 => 110,  265 => 105,  263 => 365,  255 => 353,  231 => 83,  212 => 279,  202 => 266,  174 => 70,  161 => 202,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 336,  233 => 304,  226 => 84,  216 => 79,  213 => 78,  207 => 269,  197 => 249,  194 => 248,  191 => 246,  181 => 232,  178 => 59,  172 => 57,  153 => 77,  150 => 55,  81 => 30,  97 => 41,  58 => 14,  127 => 35,  110 => 38,  90 => 27,  84 => 41,  104 => 90,  76 => 31,  70 => 19,  65 => 17,  53 => 11,  480 => 75,  474 => 161,  469 => 158,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 115,  278 => 387,  268 => 373,  264 => 84,  258 => 354,  252 => 80,  247 => 78,  241 => 93,  229 => 87,  220 => 290,  214 => 69,  177 => 71,  169 => 21,  132 => 51,  128 => 11,  61 => 2,  273 => 380,  269 => 107,  254 => 92,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 77,  219 => 76,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 17,  143 => 51,  135 => 62,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  38 => 11,  94 => 73,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  93 => 28,  88 => 28,  78 => 24,  46 => 10,  27 => 7,  201 => 92,  196 => 92,  183 => 82,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 18,  142 => 59,  138 => 17,  136 => 168,  121 => 131,  117 => 39,  91 => 56,  62 => 14,  49 => 12,  25 => 1,  24 => 2,  200 => 72,  195 => 79,  190 => 76,  185 => 74,  180 => 34,  175 => 58,  165 => 83,  140 => 58,  137 => 12,  134 => 13,  129 => 148,  126 => 147,  118 => 49,  113 => 40,  107 => 80,  105 => 79,  100 => 36,  59 => 17,  44 => 8,  26 => 3,  31 => 5,  28 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 23,  37 => 7,  22 => 2,  246 => 96,  157 => 18,  145 => 74,  139 => 169,  131 => 12,  123 => 7,  120 => 6,  115 => 40,  111 => 110,  108 => 33,  101 => 77,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 13,  50 => 10,  43 => 24,  41 => 7,  35 => 5,  32 => 6,  29 => 4,  209 => 82,  203 => 73,  199 => 265,  193 => 73,  189 => 240,  187 => 79,  182 => 76,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 18,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 18,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 83,  109 => 105,  106 => 104,  103 => 32,  99 => 76,  95 => 39,  92 => 70,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 11,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
