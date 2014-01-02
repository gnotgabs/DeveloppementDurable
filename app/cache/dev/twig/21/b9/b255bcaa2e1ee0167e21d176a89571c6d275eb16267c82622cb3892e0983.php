<?php

/* ArticleDevBundle:ArticleDev:guideAdmin.html.twig */
class __TwigTemplate_21b9b255bcaa2e1ee0167e21d176a89571c6d275eb16267c82622cb3892e0983 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ArticleDevBundle::adminLayout.html.twig");

        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'menu' => array($this, 'block_menu'),
            'leftCont' => array($this, 'block_leftCont'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ArticleDevBundle::adminLayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["macroMenus"] = $this->env->loadTemplate("ArticleDevBundle::menu.html.twig");
        // line 4
        $context["macroVoletGauche"] = $this->env->loadTemplate("ArticleDevBundle::voletgauche.html.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_arianne($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo "
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("article_dev_addArticle");
        echo "\" title=\"Ajout de catégorie\">
            Guide administrateur
        </a><span class=\"end\">&nbsp;</span>
    </li>
";
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

    // line 21
    public function block_leftCont($context, array $blocks = array())
    {
        // line 22
        echo "<div id=\"lienInterne\">
    <LI  class=\"title1\">Gérer les utilisateurs</LI>
    <OL type=\"1\">
        <LI class=\"title2\"><a href='#CU'>Création d’un utilisateur </a></LI>
        <LI class=\"title2\"><a href='#ARU'>Attribuer un rôle à l’utilisateur </a></LI>
        <LI class=\"title2\"><a href='#AU'>Activation d’un utilisateur </a></LI>
        <LI class=\"title2\"><a href='#DU'>Désactivation d’un utilisateur </a></LI>
        <LI class=\"title2\"><a href='#SR'>Supprimer un rôle </a></LI>
        <LI class=\"title2\"><a href='#CMDP'>Changer le mot de passe d’un utilisateur </a></LI>
    </OL>
    <LI class=\"title1\">Gérer les modules de l’application</LI>
    <OL type=\"1\">
        <LI class=\"title2\"><a href='#AA'>Ajouter un article </a></LI>
        <LI class=\"title2\"><a href='#AC'>Ajouter une catégorie</a></LI>
        <LI class=\"title2\"><a href='#ASC'>Ajouter une sous-catégorie</a></LI>
        <LI class=\"title2\"><a href='#SE'>Suppression et édition des catégories et sous-catégories</a></LI>
    </OL>
</div>
";
    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        // line 44
        echo "   ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"well\">
        <p class=\"title\">Le guide de l'administrateur <a name=\"sommet\"></a></p>
        <OL type=\"I\">
            <LI  class=\"title1\">Gérer les utilisateurs</LI>
            <p>Toutes les actions qui suivront dans ce paragraphe supposent que, via l’invite de commande 
                Windows ou le logiciel GithBash, nous nous sommes positionné dans le répertoire où l’application 
                a été développée. De même, le FOSUserBundle doit avoir été installé et bien configuré 
                (pour l’installation dudit bundle, confère annexe2 du Rapport)
            </p>
            <OL type=\"1\">
                <LI class=\"title2\"><a name='CU'>Création d’un utilisateur </a></LI>
                <p>Pour créer un nouvel utilisateur, il suffit d’exécuter la commande qui suit :<br>
                    <b>php app/console fos:user:create leUser leUser@example.com motDePass</b>
                </p>
                <LI class=\"title2\"><a name='ARU'>Attribuer un rôle à l’utilisateur </a></LI>
                <p>pour attribuer le rôle d’administrateur à l’utilisateur, il suffit d’exécuter la commande qui suit:<br>
                    <b>php app/console fos:user:promote leUser ROLE_ADMIN</b>
                </p>
                <LI class=\"title2\"><a name='AU'>Activation d’un utilisateur </a></LI>
                <p>Pour qu’un utilisateur puisse se connecter, il faut l’activer. Pour cela, il faut exécuter la commande qui suit:<br>
                    <b>php app/console fos:user:activate leUser</b>
                </p>
                <LI class=\"title2\"><a name='DU'>Désactivation d’un utilisateur </a></LI>
                <p>pour ce faire, exécuter la commande qui suit:<br>
                    <b>php app/console fos:user:deactivate leUser</b>
                </p>
                <LI class=\"title2\"><a name='SR'>Supprimer un rôle </a></LI>
                <p>Par exemple ci-dessous, on voudrait supprimer le rôle administrateur attribué précédemment à l’utilisateur leUser :<br>
                    <b>php app/console fos:user:demote leUser  ROLE_ADMIN</b>
                </p>
                <LI class=\"title2\"><a name='CMDP'>Changer le mot de passe d’un utilisateur </a></LI>
                <p>Pour le faire, exécuter la commande :<br>
                    <b>php app/console fos:user:change-password leUser  newPassword</b>
                </p>
            </OL>
            <LI class=\"title1\">Gérer les modules de l’application</LI><br>
            <OL type=\"1\">
                <LI class=\"title2\"><a name='AA'>Ajouter un article </a></LI>
                <p>Pour le faire, il faut cliquer sur le bouton << Ajouter un article >> se trouvant dans la page d'administration principale (le tableau):
                </p>
                <p>Une fois parvenue à la page d’ajout d’un article, il suffit de remplir convenablement les différents 
                    champs et ne pas oublier de sélectionner la sous-catégorie dans laquelle l’article sera affiché
                </p>
                <p>Le champ « lien important » est celui devant contenir le lien qui permettra aux étudiants (utilisateurs) 
                    d’avoir de plus de détails sur l’article.
                </p>
                <p>Le champ « image de l’article », permet de renseigner le chemin vers l’image à afficher dans l’article. Ce champ peut contenir un 
                    lien http ou un chemin absolu vers une image située sur le serveur hébergeant l’application.
                </p>
                <p>Pour créer un paragraphe lors de la création d’un article, il suffit placer la balise HTML suivante au bon endroit : <<b> br</b>>
                </p>
                
                <LI class=\"title2\"><a name='AC'>Ajouter une catégorie</a></LI>
                <p>Il suffit de repérer, la colonne traitant des catégories et cliquer sur le bouton << Ajouter une catégorie >>:
                </p>
                <p>Par catégorie nous entendons : élément du « Menu » de l’application. Une fois le menu choisit, il ne reste plus qu’à le valider.
                </p>
                
                <LI class=\"title2\"><a name='ASC'>Ajouter une sous-catégorie</a></LI>
                <p>Il suffit de repérer, la colonne traitant des sous-catégories et cliquer sur le bouton << Ajouter une sous-catégorie >>
                </p>
                <p>Par sous-catégorie, nous entendons : élément du « sous-menu » de l’application. Une fois le sous-menu ainsi que le menu 
                    auquel il appartient choisit, il ne reste plus qu’à le valider. Le paragraphe suivant traite de la correction des menus 
                    et sous-menus est cas d’erreur.
                </p>
                
                <LI class=\"title2\"><a name='SE'>Suppression et édition des catégories et sous-catégories</a></LI>
                <p>Pour apporter des modifications ou supprimer les menus et sous-menus créés précédemment, il suffit d’aller sous dans 
                    la colonne « Articles » soit dans la colonne « sous-catégories », et de cliquer sur « éditer » ou « supprimer » une 
                    catégorie / sous-catégorie. 
                </p>
                <p>Dans la page qui s'affiche, tous les menus et sous-menus constituant l’application sont répertoriés. Pour en modifier 
                    ou en supprimer, il suffit de cliquer sur le bouton correspondant situé devant la catégorie ou sous-catégorie à traiter. 
                </p>
                <p>De la même manière que présenter dans l’administration des modules ci-dessus, il est possible d’effectuer les mêmes 
                    opérations sur les modules suivant : les menus et sous-menus du volet de gauche, les questions et les propositions de réponses.
                </p>
            </OL>
        </OL>
        <a href=\"#sommet\"> Debut de page</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ArticleDevBundle:ArticleDev:guideAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  174 => 77,  165 => 73,  113 => 47,  90 => 38,  155 => 74,  148 => 70,  137 => 65,  126 => 60,  104 => 50,  205 => 96,  185 => 84,  178 => 80,  134 => 60,  127 => 56,  110 => 43,  70 => 27,  53 => 16,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  140 => 55,  132 => 51,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  219 => 76,  217 => 75,  204 => 72,  179 => 69,  159 => 61,  143 => 65,  119 => 49,  102 => 32,  71 => 19,  63 => 21,  59 => 26,  38 => 8,  94 => 28,  85 => 25,  75 => 25,  68 => 14,  56 => 17,  87 => 37,  21 => 2,  26 => 6,  93 => 40,  88 => 43,  46 => 21,  44 => 10,  201 => 92,  196 => 90,  171 => 61,  163 => 72,  158 => 67,  151 => 67,  142 => 59,  136 => 56,  121 => 46,  117 => 52,  62 => 33,  49 => 19,  25 => 3,  24 => 4,  232 => 76,  221 => 77,  218 => 70,  213 => 67,  208 => 68,  202 => 95,  195 => 88,  190 => 86,  186 => 51,  183 => 82,  181 => 49,  172 => 43,  169 => 60,  166 => 71,  161 => 72,  156 => 68,  146 => 18,  138 => 63,  135 => 57,  128 => 49,  118 => 19,  105 => 41,  100 => 42,  97 => 41,  91 => 44,  89 => 37,  84 => 73,  78 => 21,  76 => 32,  67 => 26,  58 => 35,  34 => 6,  27 => 4,  31 => 6,  28 => 3,  19 => 1,  79 => 33,  72 => 24,  69 => 30,  47 => 15,  40 => 12,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 62,  131 => 54,  123 => 47,  120 => 40,  115 => 55,  111 => 46,  108 => 36,  101 => 32,  98 => 31,  96 => 48,  83 => 36,  74 => 14,  66 => 22,  55 => 15,  52 => 23,  50 => 22,  43 => 11,  41 => 10,  35 => 7,  32 => 7,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 78,  168 => 74,  164 => 59,  162 => 78,  154 => 58,  149 => 19,  147 => 58,  144 => 64,  141 => 64,  133 => 64,  130 => 41,  125 => 44,  122 => 50,  116 => 41,  112 => 42,  109 => 34,  106 => 44,  103 => 32,  99 => 40,  95 => 39,  92 => 21,  86 => 36,  82 => 70,  80 => 19,  73 => 28,  64 => 17,  60 => 26,  57 => 25,  54 => 14,  51 => 14,  48 => 13,  45 => 12,  42 => 7,  39 => 17,  36 => 16,  33 => 4,  30 => 4,);
    }
}
