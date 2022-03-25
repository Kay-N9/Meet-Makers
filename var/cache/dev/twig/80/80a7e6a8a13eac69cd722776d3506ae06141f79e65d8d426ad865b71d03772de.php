<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_7030ce1f17aafd29062a64fadeedbfc607fda23489cbc639ebd12b9bb7c7e66e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

    <!-- Fichier CSS -->
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style-index.css"), "html", null, true);
        echo ">




    <!-- Font Awesome #######Ò-->
    <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

    <title>Meet Makers</title>
</head>               

\t\t

\t\t\t";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        // line 29
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 33
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 36
        echo "
\t\t";
        // line 37
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "\t</head>
\t<body>
    <!------------------------ DEBUT NAVBAR PROPRE------------------------>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\" id=\"nav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_main_home");
        echo "\">
                    <img src=\"asset/img/logo-entier.png\" alt=\"logo meet makers\" id=\"logo-nav\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ps-2 text-white me-3 text-center\" href=\"#\"
                                id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Les projets
                            </a>
                            <ul class=\"dropdown-menu text-center rounded-3 px-3 py-2\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Les candidatures ouvertes</a></li>
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Les votes ouverts</a></li>
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Les projets clos</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-white text-center\" href=\"#\" id=\"navbarDropdown\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Nos makers
                            </a>
                            <ul class=\"dropdown-menu text-center rounded-3 px-3 py-2\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Nos musiciens</a></li>
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Nos vidéastes</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div id=\"nav-searchbar\" class=\"dropdown text-white mx-3\">
                        <input type=\"checkbox\" class=\"checkbox-searchbar mx-auto mx-md-3\">
                    </div>
                ";
        // line 81
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MUSE")) {
            echo "     
                    <!-- Bouton créer un projet - s'affiche uniquement quand on est connecté en maker -->
                    <div class=\"text-center\">
                        <button type=\"button\" id=\"bouton-creer-projet\" class=\"btn rounded-pill mx-3 my-5 px-4 py-2 shadow text-white\">
                            <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_create_project");
            echo "\">
                                Je crée un projet
                            </a>
                        </button>
                    </div>
                ";
        } else {
            // line 90
            echo "  
                    <div class=\"boutons-registration d-flex justify-content-center my-5 my-md-0\">
                        <!-- Button trigger modal -->
                        <button type=\"button\" id=\"bouton-registration\" class=\"btn btn-outline-primary me-5 me-md-2\"
                            data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                            Je m'inscris
                        </button>

                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
                            aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h3 class=\"modal-title text-center text-white mx-5 my-3\" id=\"exampleModalLabel\">
                                            Rejoins la communauté des makers !
                                        </h3>
                                        <button type=\"button\" class=\"btn-close text-white mx-auto\" data-bs-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        </button>
                                    </div>

                                    <div class=\"modal-body d-flex flex-column justify-content-center mt-4 mb-5\">
                                        <div id=\"inscription-maker\" class=\"mx-auto\">
                                            <a href=\"";
            // line 114
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_regist_makers");
            echo "\" id=\"bouton-modale-maker\"
                                                class=\"text-center rounded-pill px-2 py-3 text-white shadow\">
                                                Je veux poster un projet
                                            </a>
                                        </div>
                                        <p id=\"modale-choix\" class=\"text-center my-5\">ou bien</p>
                                        <div id=\"inscription-votant\" class=\"mx-auto\">
                                            <a href=\"";
            // line 121
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_regist_votant");
            echo "\" id=\"bouton-modale-votant\"class=\"text-center rounded-pill px-2 py-3 text-white shadow\">
                                                Je veux voter pour un projet
                                            </a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <button role=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white\" ><a href=\"";
            // line 129
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_log");
            echo "\">Je me
                            connecte</a>
                        </button>
                ";
        }
        // line 133
        echo "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 134
            echo "                        <!--Quand makers connecté :-->
                        <a href=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_user", ["idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "id", [], "any", false, false, false, 135)]), "html", null, true);
            echo "\" id=\"profil-maker\" class=\"mx-3\">
                            <img src=\"asset/icones/icone-user-casque.svg\" class=\"me-3\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "user", [], "any", false, false, false, 136), "nickname", [], "any", false, false, false, 136), "html", null, true);
            echo " - profil
                        </a>
                        <button type=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white mx-3\">
                            <a href=\"";
            // line 139
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_logout");
            echo "\">
                                Je me déconnecte
                            </a>
                        </button>
                    ";
        }
        // line 144
        echo "                    </div>
                </div>
            </div>            
        ";
        // line 148
        echo "        </nav>
        ";
        // line 149
        $this->displayBlock('body', $context, $blocks);
        // line 152
        echo "

Ò
\t\t";
        // line 155
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 28
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 35
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 150
        echo "            
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 155
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 156
        echo "


\t    <!------------------------ DEBUT FOOTER ------------------------>
    <footer id=\"footer\">
        <div class=\"container py-3\">
            <div class=\"row row-cols-4 mt-5\">
                <div class=\"col-12 col-md-3\">
                    <a href=\"#\" class=\"d-flex align-items-center mb-3 link-dark text-decoration-none\">
                        <img src=\"asset/img/logo-entier.png\" alt=\"logo meet makers\" id=\"logo-footer\">
                    </a>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"#\" class=\"my-3 mx-3 link-dark text-decoration-none\">
                            <img src=\"asset/icones/icone-facebook.svg\" alt=\"icone facebook\" class=\"social-network\">
                        </a>
                        <a href=\"#\" class=\"my-3 mx-3 link-dark text-decoration-none\">
                            <img src=\"asset/icones/icone-twitter.svg\" alt=\"icone twitter\" class=\"social-network\">
                        </a>
                        <a href=\"#\" class=\"my-3 mx-3 link-dark text-decoration-none\">
                            <img src=\"asset/icones/icone-insta.svg\" alt=\"icone instragram\" class=\"social-network\">
                        </a>
                    </div>
                </div>

                <div class=\"col-12 col-md-3 py-5 py-md-0 ps-5 ps-md-0\">
                    <h5 class=\"text-white\">Meet Makers</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">À propos de nous</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Blog</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Carrière</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Nous contacter</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 pb-2 pb-md-0 ps-5 ps-md-0\">
                    <h5 class=\"text-white\">Légal</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">CGU</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Politique de
                                confidentialité</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Ressources légales</a>
                        </li>
                        <li class=\"nav-item mb-2e\"><a href=\"#\" class=\"nav-link p-0 text-white\">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"offset-md-6 py-2\">
                <hr>
                <p class=\"text-center text-white\">Copyright © 2022 Meet Makers</p>
            </div>
        </div>
    </footer>
    <!------------------------ FIN FOOTER ------------------------>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\">
    </script>
</body>

</html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 156,  347 => 155,  336 => 150,  326 => 149,  313 => 38,  303 => 37,  293 => 35,  283 => 34,  273 => 28,  263 => 27,  253 => 155,  248 => 152,  246 => 149,  243 => 148,  238 => 144,  230 => 139,  224 => 136,  220 => 135,  217 => 134,  214 => 133,  207 => 129,  196 => 121,  186 => 114,  160 => 90,  151 => 85,  144 => 81,  105 => 45,  98 => 40,  96 => 37,  93 => 36,  91 => 34,  86 => 33,  81 => 29,  79 => 27,  63 => 14,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

    <!-- Fichier CSS -->
    <link rel=\"stylesheet\" href={{asset('asset/css/style-index.css')}}>




    <!-- Font Awesome #######Ò-->
    <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

    <title>Meet Makers</title>
</head>               

\t\t

\t\t\t{% block title %}
\t\t\t{% endblock %}
\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t{# Run `composer require symfony/webpack-encore-bundle` to start using Symfony UX #}
\t\t{{ encore_entry_link_tags('app') }}
\t\t{% block stylesheets %}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
    <!------------------------ DEBUT NAVBAR PROPRE------------------------>
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\" id=\"nav\">
            <div class=\"container\">
                <a class=\"navbar-brand\" href=\"{{path('project_main_home')}}\">
                    <img src=\"asset/img/logo-entier.png\" alt=\"logo meet makers\" id=\"logo-nav\">
                </a>
                <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\"
                    data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse justify-content-between\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle ps-2 text-white me-3 text-center\" href=\"#\"
                                id=\"navbarDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Les projets
                            </a>
                            <ul class=\"dropdown-menu text-center rounded-3 px-3 py-2\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Les candidatures ouvertes</a></li>
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Les votes ouverts</a></li>
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Les projets clos</a></li>
                            </ul>
                        </li>
                        <li class=\"nav-item dropdown\">
                            <a class=\"nav-link dropdown-toggle text-white text-center\" href=\"#\" id=\"navbarDropdown\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                Nos makers
                            </a>
                            <ul class=\"dropdown-menu text-center rounded-3 px-3 py-2\" aria-labelledby=\"navbarDropdown\">
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Nos musiciens</a></li>
                                <li><a class=\"dropdown-item text-white\" href=\"#\">Nos vidéastes</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div id=\"nav-searchbar\" class=\"dropdown text-white mx-3\">
                        <input type=\"checkbox\" class=\"checkbox-searchbar mx-auto mx-md-3\">
                    </div>
                {% if is_granted('ROLE_MUSE') %}     
                    <!-- Bouton créer un projet - s'affiche uniquement quand on est connecté en maker -->
                    <div class=\"text-center\">
                        <button type=\"button\" id=\"bouton-creer-projet\" class=\"btn rounded-pill mx-3 my-5 px-4 py-2 shadow text-white\">
                            <a href=\"{{ path('project_create_project')}}\">
                                Je crée un projet
                            </a>
                        </button>
                    </div>
                {% else %}  
                    <div class=\"boutons-registration d-flex justify-content-center my-5 my-md-0\">
                        <!-- Button trigger modal -->
                        <button type=\"button\" id=\"bouton-registration\" class=\"btn btn-outline-primary me-5 me-md-2\"
                            data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">
                            Je m'inscris
                        </button>

                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\"
                            aria-hidden=\"true\">
                            <div class=\"modal-dialog\" role=\"document\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h3 class=\"modal-title text-center text-white mx-5 my-3\" id=\"exampleModalLabel\">
                                            Rejoins la communauté des makers !
                                        </h3>
                                        <button type=\"button\" class=\"btn-close text-white mx-auto\" data-bs-dismiss=\"modal\"
                                            aria-label=\"Close\">
                                        </button>
                                    </div>

                                    <div class=\"modal-body d-flex flex-column justify-content-center mt-4 mb-5\">
                                        <div id=\"inscription-maker\" class=\"mx-auto\">
                                            <a href=\"{{  path('project_regist_makers')}}\" id=\"bouton-modale-maker\"
                                                class=\"text-center rounded-pill px-2 py-3 text-white shadow\">
                                                Je veux poster un projet
                                            </a>
                                        </div>
                                        <p id=\"modale-choix\" class=\"text-center my-5\">ou bien</p>
                                        <div id=\"inscription-votant\" class=\"mx-auto\">
                                            <a href=\"{{  path('project_regist_votant')}}\" id=\"bouton-modale-votant\"class=\"text-center rounded-pill px-2 py-3 text-white shadow\">
                                                Je veux voter pour un projet
                                            </a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                        <button role=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white\" ><a href=\"{{ path('project_log')}}\">Je me
                            connecte</a>
                        </button>
                {% endif %}
                    {% if is_granted('ROLE_USER') %}
                        <!--Quand makers connecté :-->
                        <a href=\"{{ path('project_user', {idUser:app.user.id})}}\" id=\"profil-maker\" class=\"mx-3\">
                            <img src=\"asset/icones/icone-user-casque.svg\" class=\"me-3\">{{ app.user.nickname }} - profil
                        </a>
                        <button type=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white mx-3\">
                            <a href=\"{{ path('project_logout')}}\">
                                Je me déconnecte
                            </a>
                        </button>
                    {% endif %}
                    </div>
                </div>
            </div>            
        {# <li id=\"root\"></li> #}
        </nav>
        {% block body %}
            
\t\t{% endblock %}


Ò
\t\t{% block footer %}



\t    <!------------------------ DEBUT FOOTER ------------------------>
    <footer id=\"footer\">
        <div class=\"container py-3\">
            <div class=\"row row-cols-4 mt-5\">
                <div class=\"col-12 col-md-3\">
                    <a href=\"#\" class=\"d-flex align-items-center mb-3 link-dark text-decoration-none\">
                        <img src=\"asset/img/logo-entier.png\" alt=\"logo meet makers\" id=\"logo-footer\">
                    </a>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"#\" class=\"my-3 mx-3 link-dark text-decoration-none\">
                            <img src=\"asset/icones/icone-facebook.svg\" alt=\"icone facebook\" class=\"social-network\">
                        </a>
                        <a href=\"#\" class=\"my-3 mx-3 link-dark text-decoration-none\">
                            <img src=\"asset/icones/icone-twitter.svg\" alt=\"icone twitter\" class=\"social-network\">
                        </a>
                        <a href=\"#\" class=\"my-3 mx-3 link-dark text-decoration-none\">
                            <img src=\"asset/icones/icone-insta.svg\" alt=\"icone instragram\" class=\"social-network\">
                        </a>
                    </div>
                </div>

                <div class=\"col-12 col-md-3 py-5 py-md-0 ps-5 ps-md-0\">
                    <h5 class=\"text-white\">Meet Makers</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">À propos de nous</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Blog</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Carrière</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Nous contacter</a></li>
                    </ul>
                </div>

                <div class=\"col-12 col-md-3 pb-2 pb-md-0 ps-5 ps-md-0\">
                    <h5 class=\"text-white\">Légal</h5>
                    <ul class=\"nav flex-column\">
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">CGU</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Politique de
                                confidentialité</a></li>
                        <li class=\"nav-item mb-2\"><a href=\"#\" class=\"nav-link p-0 text-white\">Ressources légales</a>
                        </li>
                        <li class=\"nav-item mb-2e\"><a href=\"#\" class=\"nav-link p-0 text-white\">Mentions légales</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"offset-md-6 py-2\">
                <hr>
                <p class=\"text-center text-white\">Copyright © 2022 Meet Makers</p>
            </div>
        </div>
    </footer>
    <!------------------------ FIN FOOTER ------------------------>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js\"
        integrity=\"sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p\" crossorigin=\"anonymous\">
    </script>
</body>

</html>

{% endblock %}
", "base.html.twig", "C:\\Users\\admin\\OneDrive\\Documents\\code\\NEW\\Project\\projet2.0\\templates\\base.html.twig");
    }
}
