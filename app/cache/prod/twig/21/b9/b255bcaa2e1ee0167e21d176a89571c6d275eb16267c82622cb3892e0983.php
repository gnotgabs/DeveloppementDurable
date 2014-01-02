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
        if (isset($context["macroMenus"])) { $_macroMenus_ = $context["macroMenus"]; } else { $_macroMenus_ = null; }
        if (isset($context["menus"])) { $_menus_ = $context["menus"]; } else { $_menus_ = null; }
        echo $_macroMenus_->getdynamicMenu($_menus_);
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
        return array (  132 => 49,  103 => 39,  94 => 36,  188 => 74,  182 => 72,  174 => 68,  168 => 67,  145 => 54,  123 => 47,  73 => 27,  116 => 41,  68 => 22,  61 => 24,  230 => 96,  199 => 80,  179 => 72,  167 => 78,  159 => 64,  153 => 70,  139 => 56,  119 => 48,  113 => 46,  99 => 40,  87 => 36,  79 => 32,  54 => 23,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 80,  279 => 78,  256 => 73,  251 => 71,  239 => 69,  231 => 68,  219 => 88,  201 => 66,  143 => 49,  138 => 64,  134 => 50,  131 => 60,  122 => 43,  117 => 36,  102 => 28,  92 => 25,  72 => 30,  51 => 13,  48 => 21,  35 => 7,  29 => 5,  312 => 96,  308 => 94,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  204 => 69,  198 => 65,  150 => 54,  147 => 60,  127 => 59,  112 => 32,  96 => 38,  71 => 30,  55 => 15,  114 => 22,  109 => 42,  106 => 41,  101 => 48,  85 => 33,  77 => 12,  39 => 17,  110 => 20,  65 => 21,  63 => 13,  26 => 6,  98 => 40,  88 => 17,  80 => 15,  46 => 12,  44 => 10,  43 => 11,  57 => 14,  50 => 22,  47 => 15,  38 => 8,  227 => 95,  224 => 91,  221 => 90,  197 => 74,  195 => 77,  192 => 72,  189 => 61,  186 => 60,  181 => 67,  178 => 61,  162 => 58,  158 => 65,  155 => 64,  142 => 65,  136 => 44,  133 => 54,  130 => 42,  120 => 55,  75 => 25,  53 => 16,  32 => 7,  25 => 3,  24 => 4,  237 => 73,  223 => 70,  218 => 67,  213 => 86,  207 => 84,  200 => 54,  194 => 64,  190 => 51,  185 => 73,  176 => 43,  173 => 70,  170 => 41,  165 => 35,  152 => 63,  126 => 18,  108 => 40,  105 => 49,  100 => 27,  91 => 77,  89 => 16,  84 => 29,  82 => 32,  78 => 40,  76 => 28,  69 => 20,  67 => 15,  60 => 12,  58 => 23,  42 => 24,  40 => 12,  36 => 16,  34 => 5,  27 => 4,  31 => 6,  28 => 3,  22 => 2,  19 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 78,  187 => 76,  183 => 62,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 74,  157 => 48,  149 => 57,  146 => 66,  140 => 46,  137 => 18,  129 => 19,  124 => 35,  121 => 46,  118 => 36,  115 => 44,  111 => 32,  107 => 44,  104 => 28,  97 => 37,  93 => 44,  90 => 43,  81 => 34,  70 => 26,  66 => 23,  62 => 26,  59 => 25,  56 => 17,  52 => 10,  49 => 13,  45 => 13,  41 => 10,  37 => 11,  33 => 4,  30 => 4,);
    }
}
