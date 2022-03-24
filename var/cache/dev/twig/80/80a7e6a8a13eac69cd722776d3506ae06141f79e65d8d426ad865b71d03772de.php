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

\t\t<!------------------------ DEBUT NAVBAR ------------------------>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\" id=\"nav\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
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
                        <a class=\"nav-link dropdown-toggle ps-2 text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Les projets
                        </a>
                        <ul class=\"dropdown-menu px-2\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Les candidatures ouvertes</a></li>
                            <li><a c!,0erts</a></li>
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Les projets clos</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item ps-3 dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Nos makers
                        </a>
                        <ul class=\"dropdown-menu px-2\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Nos musiciens</a></li>
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Nos vidéastes</a></li>
                        </ul>
                    </li>
                </ul>
                <div id=\"nav-searchbar\" class=\"text-white mx-3\">
                    <input type=\"checkbox\" class=\"checkbox-searchbar mx-3\">
                </div>
                <div class=\"boutons-registration d-flex\">
                    <button type=\"button\" id=\"bouton-registration\" class=\"btn btn-outline-primary\">Je m'inscris</button>
                    <!-- Quand makers connecté :
                    <a href=\"#\" id=\"profil-maker\" class=\"mx-3\"><img src=\"asset/icones/icone-user-casque.svg\" class=\"me-3\">Mon profil</a>
                    <button type=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white\">Je me déconnecte</button>-->
                    <button type=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white\">Je me connecte</button>
                </div>
            </div>
        </div>

\t\t<nav class=\"log-nav\">
            
                <li id=\"root\"></li>
            ";
        // line 77
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 78
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_user", ["idUser" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\"><p>Bonjour ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "nickname", [], "any", false, false, false, 78), "html", null, true);
            echo "</p></a>
                <li><a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_logout");
            echo "\">Déconnection-Track-Mec</a></li>

            ";
        }
        // line 82
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MUSE")) {
            echo "       
                <li><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_create_project");
            echo "\">Crea-Track-Mec</a></li>

            ";
        } else {
            // line 85
            echo "    
               <li><a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_log");
            echo "\">Connection-Track-Mec</a></li>
                <li><a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_registery");
            echo "\">Inscription-Track-Mec</a></li>
                
            ";
        }
        // line 90
        echo "        </nav>

    </nav>

\t\t\t";
        // line 94
        $this->displayBlock('title', $context, $blocks);
        // line 96
        echo "\t\t</title>
\t\t<link
\t\trel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
\t\t";
        // line 100
        echo "\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        // line 101
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 103
        echo "
\t\t";
        // line 104
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "\t</head>
\t<body>


\t\t";
        // line 111
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "

Ò
\t\t";
        // line 117
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 94
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 95
        echo "\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 101
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 102
        echo "\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 105
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 112
        echo "
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 118
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
        return array (  310 => 118,  300 => 117,  289 => 112,  279 => 111,  266 => 105,  256 => 104,  246 => 102,  236 => 101,  226 => 95,  216 => 94,  206 => 117,  201 => 114,  199 => 111,  193 => 107,  191 => 104,  188 => 103,  186 => 101,  181 => 100,  176 => 96,  174 => 94,  168 => 90,  162 => 87,  158 => 86,  155 => 85,  149 => 83,  144 => 82,  138 => 79,  131 => 78,  129 => 77,  63 => 14,  48 => 1,);
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

\t\t<!------------------------ DEBUT NAVBAR ------------------------>

    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark sticky-top\" id=\"nav\">
        <div class=\"container\">
            <a class=\"navbar-brand\" href=\"#\">
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
                        <a class=\"nav-link dropdown-toggle ps-2 text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Les projets
                        </a>
                        <ul class=\"dropdown-menu px-2\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Les candidatures ouvertes</a></li>
                            <li><a c!,0erts</a></li>
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Les projets clos</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item ps-3 dropdown\">
                        <a class=\"nav-link dropdown-toggle text-white\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                            data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            Nos makers
                        </a>
                        <ul class=\"dropdown-menu px-2\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Nos musiciens</a></li>
                            <li><a class=\"dropdown-item text-white\" href=\"#\">Nos vidéastes</a></li>
                        </ul>
                    </li>
                </ul>
                <div id=\"nav-searchbar\" class=\"text-white mx-3\">
                    <input type=\"checkbox\" class=\"checkbox-searchbar mx-3\">
                </div>
                <div class=\"boutons-registration d-flex\">
                    <button type=\"button\" id=\"bouton-registration\" class=\"btn btn-outline-primary\">Je m'inscris</button>
                    <!-- Quand makers connecté :
                    <a href=\"#\" id=\"profil-maker\" class=\"mx-3\"><img src=\"asset/icones/icone-user-casque.svg\" class=\"me-3\">Mon profil</a>
                    <button type=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white\">Je me déconnecte</button>-->
                    <button type=\"button\" id=\"bouton-login\" class=\"btn btn-outline-secondary text-white\">Je me connecte</button>
                </div>
            </div>
        </div>

\t\t<nav class=\"log-nav\">
            
                <li id=\"root\"></li>
            {% if is_granted('ROLE_USER') %}
                <a href=\"{{ path('project_user', {idUser:app.user.id})}}\"><p>Bonjour {{ app.user.nickname }}</p></a>
                <li><a href=\"{{ path('project_logout')}}\">Déconnection-Track-Mec</a></li>

            {% endif %}
            {% if is_granted('ROLE_MUSE') %}       
                <li><a href=\"{{ path('project_create_project')}}\">Crea-Track-Mec</a></li>

            {% else %}    
               <li><a href=\"{{ path('project_log')}}\">Connection-Track-Mec</a></li>
                <li><a href=\"{{ path('project_registery')}}\">Inscription-Track-Mec</a></li>
                
            {% endif %}
        </nav>

    </nav>

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


\t\t{% block body %}

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
