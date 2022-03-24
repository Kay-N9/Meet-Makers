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

/* home/index.html.twig */
class __TwigTemplate_702014d749221dcce6a94302ae402abec63db831c31b01b6dbebce384fefc8ae extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">


   


    <!-- Font Awesome-->
    <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

    <title>Meet Makers</title>
</head> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "<!------------------------ HEADER ------------------------>
    <header id=\"header\" class=\"container-fluid px-3\">
        <div class=\"col-12 d-flex flex-wrap align-items-end\">
            <div class=\"col-12 col-md-4 cloture-vote text-white\">
                <h3 class=\"text\">Clôture des votes</h3>
                <p class=\"taille-vague\">Vague 2</p>
            </div>
            <div class=\"col-12 col-md-4 d-flex align-self-start pt-5 timer-flex padding-timer\">
                <div class=\"col-4 text-center text-white\">
                    <p class=\"timer-nombre\">00</p>
                    <p class=\"taille-heure\">Heures</p>
                </div>
                <div class=\"col-4 text-center text-white\">
                    <p class=\"timer-nombre\">00</p>
                    <p class=\"taille-heure\">Minutes</p>
                </div>
                <div class=\"col-4 text-center text-white\">
                    <p class=\"timer-nombre\">00</p>
                    <p class=\"taille-heure\">Secondes</p>
                </div>
            </div>
            <div class=\"col-12 col-md-4 cloture-candidature text-white text-end\">
                <h3>Clôture des candidatures</h3>
                <p class=\"taille-vague\">Vague 3</p>
            </div>
        </div>
    </header>

    <!------------------------  MAIN ------------------------>
    <main>
        <!------------------------ SPOTLIGHT ------------------------>
        <section id=\"spotlight\" class=\"col-12 col-md-6 mx-md-auto my-5 px-4\">
            <div class=\"titre-categorie my-5\">
                <h1 class=\"text-white\">Spotlight</h1>
                <div class=\"filet-titres\"></div>
            </div>
            <article id=\"texte-spotlight\" class=\"d-flex flex-wrap justify-content-start text-white col-12\">
                <!------------------------ CARTE ARTISTE ------------------------>
                <aside id=\"carte-spotlight-contenant\">
                    <div id=\"carte-spotlight\"
                        class=\"carte-artiste col-12 col-md-3 d-flex justify-content-center align-items-center text-center position-relative rounded-3\">
                        <img src=\"asset/icones/encoche-musique.svg\" alt=\"encoche musique\" id=\"encoche-musique\"
                            class=\"position-absolute top-0 end-0\">
                        <div class=\"position-absolute shadow text-white\">
                            <p class=\"titre-card-artiste\">Billets</p>
                            <p class=\"text-card-artiste\">Gazou</p>
                        </div>
                        <div
                            class=\"texte-bottom position-absolute bottom-0 start-0 end-0 d-flex justify-content-between text-white px-5\">
                            <p class=\"style-musique-card-artiste text-start shadow fw-bold\">AfroTrap</p>
                            <p class=\"localisation-card-artiste text-end shadow\">Paris</p>
                        </div>
                        <img src=\"asset/img/artiste-12.jpg\" alt=\"photo artiste Gazou\" class=\"image-carte-artiste rounded-3\">
                    </div>
                </aside>
                <!------------------------ TEXTE ------------------------>
                <div id=\"description-spotlight\" class=\"col-12 col-md-6 d-flex flex-column justify-content-between ms-md-5 my-5 my-md-0\">
                    <div id=\"texte-spotlight\" class=\"text-white\">
                        <h3>Billets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mi, quisque cras malesuada.
                            Quis mattis morbi et sapien cursus sed. Nibh molestie pellentesque eu hendrerit posuere
                            feugiat
                        </p>
                    </div>
                    <div class=\"mt-5 mt-md-0 mx-auto mx-md-0\">
                        <button type=\"button\" id=\"bouton-voir-projet\" class=\"btn btn-outline-primary offset-md-8\">Voir le projet</button>
                    </div>
                </div>
            </article>
        </section>
        <!------------------------ FIN SPOTLIGHT ------------------------>

        <!------------------------ DEBUT VOTES OUVERTS ------------------------>
        <section id=\"votes-ouverts\" class=\"mx-3 mx-md-0\">
            <div class=\"titres offset-md-1\">
                <h2 class=\"text-white \">Votes ouverts<a id=\"bouton-voir-plus\" class=\"text-white fs-2 ms-3\"
                        href=\"#\">Voir plus</a><img src=\"asset/icones/icone-chevron-droit.svg\"
                        alt=\"chevron vers la droite\" class=\"chevron-titre ms-3\"></h2>
                <div class=\"filet-titres mb-3 mb-md-5\"></div>
            </div>
            <div class=\"position-relative\">
                <div class=\"slider-section position-absolute top-0 end-0 px-5\">
                    <img src=\"asset/icones/icone-chevron-droit.svg\" alt=\"chevron vers la droite\"
                        class=\"chevron-slider position-relative top-50\">
                </div>
                <!------------------------ DEBUT SLIDER CARTES ------------------------>
                <div class=\"sections-contenant\">
                    <div class=\"sections-projets-contenant d-flex justify-content-start align-items-center my-5\">
                        <!------------------------ Carte 1 ------------------------>
                           ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projectAll"]) || array_key_exists("projectAll", $context) ? $context["projectAll"] : (function () { throw new RuntimeError('Variable "projectAll" does not exist.', 114, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 115
            echo "                                ";
            echo twig_include($this->env, $context, "home/projects_voting.html.twig", ["project" => $context["project"]]);
            echo "
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>
    <main/>
                     
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 117,  215 => 115,  198 => 114,  107 => 25,  97 => 24,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <!-- Bootstrap CSS -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
        integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">


   


    <!-- Font Awesome-->
    <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

    <title>Meet Makers</title>
</head> 
{% endblock %}              


{% block body %}
<!------------------------ HEADER ------------------------>
    <header id=\"header\" class=\"container-fluid px-3\">
        <div class=\"col-12 d-flex flex-wrap align-items-end\">
            <div class=\"col-12 col-md-4 cloture-vote text-white\">
                <h3 class=\"text\">Clôture des votes</h3>
                <p class=\"taille-vague\">Vague 2</p>
            </div>
            <div class=\"col-12 col-md-4 d-flex align-self-start pt-5 timer-flex padding-timer\">
                <div class=\"col-4 text-center text-white\">
                    <p class=\"timer-nombre\">00</p>
                    <p class=\"taille-heure\">Heures</p>
                </div>
                <div class=\"col-4 text-center text-white\">
                    <p class=\"timer-nombre\">00</p>
                    <p class=\"taille-heure\">Minutes</p>
                </div>
                <div class=\"col-4 text-center text-white\">
                    <p class=\"timer-nombre\">00</p>
                    <p class=\"taille-heure\">Secondes</p>
                </div>
            </div>
            <div class=\"col-12 col-md-4 cloture-candidature text-white text-end\">
                <h3>Clôture des candidatures</h3>
                <p class=\"taille-vague\">Vague 3</p>
            </div>
        </div>
    </header>

    <!------------------------  MAIN ------------------------>
    <main>
        <!------------------------ SPOTLIGHT ------------------------>
        <section id=\"spotlight\" class=\"col-12 col-md-6 mx-md-auto my-5 px-4\">
            <div class=\"titre-categorie my-5\">
                <h1 class=\"text-white\">Spotlight</h1>
                <div class=\"filet-titres\"></div>
            </div>
            <article id=\"texte-spotlight\" class=\"d-flex flex-wrap justify-content-start text-white col-12\">
                <!------------------------ CARTE ARTISTE ------------------------>
                <aside id=\"carte-spotlight-contenant\">
                    <div id=\"carte-spotlight\"
                        class=\"carte-artiste col-12 col-md-3 d-flex justify-content-center align-items-center text-center position-relative rounded-3\">
                        <img src=\"asset/icones/encoche-musique.svg\" alt=\"encoche musique\" id=\"encoche-musique\"
                            class=\"position-absolute top-0 end-0\">
                        <div class=\"position-absolute shadow text-white\">
                            <p class=\"titre-card-artiste\">Billets</p>
                            <p class=\"text-card-artiste\">Gazou</p>
                        </div>
                        <div
                            class=\"texte-bottom position-absolute bottom-0 start-0 end-0 d-flex justify-content-between text-white px-5\">
                            <p class=\"style-musique-card-artiste text-start shadow fw-bold\">AfroTrap</p>
                            <p class=\"localisation-card-artiste text-end shadow\">Paris</p>
                        </div>
                        <img src=\"asset/img/artiste-12.jpg\" alt=\"photo artiste Gazou\" class=\"image-carte-artiste rounded-3\">
                    </div>
                </aside>
                <!------------------------ TEXTE ------------------------>
                <div id=\"description-spotlight\" class=\"col-12 col-md-6 d-flex flex-column justify-content-between ms-md-5 my-5 my-md-0\">
                    <div id=\"texte-spotlight\" class=\"text-white\">
                        <h3>Billets</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mi, quisque cras malesuada.
                            Quis mattis morbi et sapien cursus sed. Nibh molestie pellentesque eu hendrerit posuere
                            feugiat
                        </p>
                    </div>
                    <div class=\"mt-5 mt-md-0 mx-auto mx-md-0\">
                        <button type=\"button\" id=\"bouton-voir-projet\" class=\"btn btn-outline-primary offset-md-8\">Voir le projet</button>
                    </div>
                </div>
            </article>
        </section>
        <!------------------------ FIN SPOTLIGHT ------------------------>

        <!------------------------ DEBUT VOTES OUVERTS ------------------------>
        <section id=\"votes-ouverts\" class=\"mx-3 mx-md-0\">
            <div class=\"titres offset-md-1\">
                <h2 class=\"text-white \">Votes ouverts<a id=\"bouton-voir-plus\" class=\"text-white fs-2 ms-3\"
                        href=\"#\">Voir plus</a><img src=\"asset/icones/icone-chevron-droit.svg\"
                        alt=\"chevron vers la droite\" class=\"chevron-titre ms-3\"></h2>
                <div class=\"filet-titres mb-3 mb-md-5\"></div>
            </div>
            <div class=\"position-relative\">
                <div class=\"slider-section position-absolute top-0 end-0 px-5\">
                    <img src=\"asset/icones/icone-chevron-droit.svg\" alt=\"chevron vers la droite\"
                        class=\"chevron-slider position-relative top-50\">
                </div>
                <!------------------------ DEBUT SLIDER CARTES ------------------------>
                <div class=\"sections-contenant\">
                    <div class=\"sections-projets-contenant d-flex justify-content-start align-items-center my-5\">
                        <!------------------------ Carte 1 ------------------------>
                           {% for project in projectAll %}
                                {{ include('home/projects_voting.html.twig', {'project': project}) }}
                                {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <main/>
                     
{% endblock %}
", "home/index.html.twig", "C:\\Users\\admin\\OneDrive\\Documents\\code\\NEW\\Project\\projet2.0\\templates\\home\\index.html.twig");
    }
}
