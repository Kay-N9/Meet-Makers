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
        echo "\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">


\t\t<!-- Font Awesome-->
\t\t<script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

\t\t<title>Meet Makers</title>
\t</head>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "\t<!------------------------ HEADER ------------------------>
\t<header id=\"header\" class=\"container-fluid px-3\">
\t\t<div class=\"col-12 d-flex flex-wrap align-items-end\">
\t\t\t<div class=\"col-12 col-md-4 cloture-vote text-white\">
\t\t\t\t<h3 class=\"text\">Clôture des votes</h3>
\t\t\t\t<p class=\"taille-vague\">Vague 2</p>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-4 d-flex align-self-start pt-5 timer-flex padding-timer\">
\t\t\t\t<div class=\"col-4 text-center text-white\">
\t\t\t\t\t<p class=\"timer-nombre\">00</p>
\t\t\t\t\t<p class=\"taille-heure\">Heures</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-center text-white\">
\t\t\t\t\t<p class=\"timer-nombre\">00</p>
\t\t\t\t\t<p class=\"taille-heure\">Minutes</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-center text-white\">
\t\t\t\t\t<p class=\"timer-nombre\">00</p>
\t\t\t\t\t<p class=\"taille-heure\">Secondes</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-4 cloture-candidature text-white text-end\">
\t\t\t\t<h3>Clôture des candidatures</h3>
\t\t\t\t<p class=\"taille-vague\">Vague 3</p>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!------------------------  MAIN ------------------------>
\t<main>
\t\t<!------------------------ SPOTLIGHT ------------------------>
\t\t<section id=\"spotlight\" class=\"col-12 col-md-6 mx-md-auto my-5 px-4\">
\t\t\t<div class=\"titre-categorie my-5\">
\t\t\t\t<h1 class=\"text-white\">Spotlight</h1>
\t\t\t\t<div class=\"filet-titres\"></div>
\t\t\t</div>
\t\t\t<article
\t\t\t\tid=\"texte-spotlight\" class=\"d-flex flex-wrap justify-content-start text-white col-12\">
\t\t\t\t<!------------------------ CARTE ARTISTE ------------------------>
\t\t\t\t<aside id=\"carte-spotlight-contenant\">
\t\t\t\t\t<div id=\"carte-spotlight\" class=\"carte-artiste col-12 col-md-3 d-flex justify-content-center align-items-center text-center position-relative rounded-3\">
\t\t\t\t\t\t<img src=\"asset/icones/encoche-musique.svg\" alt=\"encoche musique\" id=\"encoche-musique\" class=\"position-absolute top-0 end-0\">
\t\t\t\t\t\t<div class=\"position-absolute shadow text-white\">
\t\t\t\t\t\t\t<p class=\"titre-card-artiste\">Billets</p>
\t\t\t\t\t\t\t<p class=\"text-card-artiste\">Gazou</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"texte-bottom position-absolute bottom-0 start-0 end-0 d-flex justify-content-between text-white px-5\">
\t\t\t\t\t\t\t<p class=\"style-musique-card-artiste text-start shadow fw-bold\">AfroTrap</p>
\t\t\t\t\t\t\t<p class=\"localisation-card-artiste text-end shadow\">Paris</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"asset/img/artiste-12.jpg\" alt=\"photo artiste Gazou\" class=\"image-carte-artiste rounded-3\">
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t<!------------------------ TEXTE ------------------------>
\t\t\t\t<div id=\"description-spotlight\" class=\"col-12 col-md-6 d-flex flex-column justify-content-between ms-md-5 my-5 my-md-0\">
\t\t\t\t\t<div id=\"texte-spotlight\" class=\"text-white\">
\t\t\t\t\t\t<h3>Billets</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mi, quisque cras malesuada.
\t\t\t\t\t\t\t                            Quis mattis morbi et sapien cursus sed. Nibh molestie pellentesque eu hendrerit posuere
\t\t\t\t\t\t\t                            feugiat
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-5 mt-md-0 mx-auto mx-md-0\">
\t\t\t\t\t\t<button type=\"button\" id=\"bouton-voir-projet\" class=\"btn btn-outline-primary offset-md-8\">Voir le projet</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</section>
\t\t<!------------------------ FIN SPOTLIGHT ------------------------>

\t\t<!------------------------ DEBUT VOTES OUVERTS ------------------------>
\t\t<section id=\"votes-ouverts\" class=\"mx-3 mx-md-0\">
\t\t\t<div class=\"titres offset-md-1\">
\t\t\t\t<h2 class=\"text-white \">Votes ouverts<a id=\"bouton-voir-plus\" class=\"text-white fs-2 ms-3\" href=\"#\">Voir plus</a><img src=\"asset/icones/icone-chevron-droit.svg\" alt=\"chevron vers la droite\" class=\"chevron-titre ms-3\"></h2>
\t\t\t\t<div class=\"filet-titres mb-3 mb-md-5\"></div>
\t\t\t</div>
\t\t\t<div class=\"position-relative\">
\t\t\t\t<div class=\"slider-section position-absolute top-0 end-0 px-5\">
\t\t\t\t\t<img src=\"asset/icones/icone-chevron-droit.svg\" alt=\"chevron vers la droite\" class=\"chevron-slider position-relative top-50\">
\t\t\t\t</div>
\t\t\t\t<!------------------------ DEBUT SLIDER CARTES ------------------------>
\t\t\t\t<div class=\"sections-contenant\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"sections-projets-contenant d-flex justify-content-start align-items-center my-5\">
\t\t\t\t\t\t<!------------------------ Carte 1 ------------------------>
\t\t\t\t\t\t";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projectAll"]) || array_key_exists("projectAll", $context) ? $context["projectAll"] : (function () { throw new RuntimeError('Variable "projectAll" does not exist.', 108, $this->source); })()));
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
            // line 109
            echo "\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "home/projects_voting.html.twig", ["project" => $context["project"]]);
            echo "
\t\t\t\t\t\t";
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
        // line 111
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<main/>

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
        return array (  226 => 111,  209 => 109,  192 => 108,  105 => 23,  95 => 22,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block head %}
\t<head>
\t\t<!-- Required meta tags -->
\t\t<meta charset=\"utf-8\">
\t\t<meta
\t\tname=\"viewport\" content=\"width=device-width, initial-scale=1\">

\t\t<!-- Bootstrap CSS -->
\t\t<link
\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">


\t\t<!-- Font Awesome-->
\t\t<script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

\t\t<title>Meet Makers</title>
\t</head>
{% endblock %}


{% block body %}
\t<!------------------------ HEADER ------------------------>
\t<header id=\"header\" class=\"container-fluid px-3\">
\t\t<div class=\"col-12 d-flex flex-wrap align-items-end\">
\t\t\t<div class=\"col-12 col-md-4 cloture-vote text-white\">
\t\t\t\t<h3 class=\"text\">Clôture des votes</h3>
\t\t\t\t<p class=\"taille-vague\">Vague 2</p>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-4 d-flex align-self-start pt-5 timer-flex padding-timer\">
\t\t\t\t<div class=\"col-4 text-center text-white\">
\t\t\t\t\t<p class=\"timer-nombre\">00</p>
\t\t\t\t\t<p class=\"taille-heure\">Heures</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-center text-white\">
\t\t\t\t\t<p class=\"timer-nombre\">00</p>
\t\t\t\t\t<p class=\"taille-heure\">Minutes</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-4 text-center text-white\">
\t\t\t\t\t<p class=\"timer-nombre\">00</p>
\t\t\t\t\t<p class=\"taille-heure\">Secondes</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-12 col-md-4 cloture-candidature text-white text-end\">
\t\t\t\t<h3>Clôture des candidatures</h3>
\t\t\t\t<p class=\"taille-vague\">Vague 3</p>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!------------------------  MAIN ------------------------>
\t<main>
\t\t<!------------------------ SPOTLIGHT ------------------------>
\t\t<section id=\"spotlight\" class=\"col-12 col-md-6 mx-md-auto my-5 px-4\">
\t\t\t<div class=\"titre-categorie my-5\">
\t\t\t\t<h1 class=\"text-white\">Spotlight</h1>
\t\t\t\t<div class=\"filet-titres\"></div>
\t\t\t</div>
\t\t\t<article
\t\t\t\tid=\"texte-spotlight\" class=\"d-flex flex-wrap justify-content-start text-white col-12\">
\t\t\t\t<!------------------------ CARTE ARTISTE ------------------------>
\t\t\t\t<aside id=\"carte-spotlight-contenant\">
\t\t\t\t\t<div id=\"carte-spotlight\" class=\"carte-artiste col-12 col-md-3 d-flex justify-content-center align-items-center text-center position-relative rounded-3\">
\t\t\t\t\t\t<img src=\"asset/icones/encoche-musique.svg\" alt=\"encoche musique\" id=\"encoche-musique\" class=\"position-absolute top-0 end-0\">
\t\t\t\t\t\t<div class=\"position-absolute shadow text-white\">
\t\t\t\t\t\t\t<p class=\"titre-card-artiste\">Billets</p>
\t\t\t\t\t\t\t<p class=\"text-card-artiste\">Gazou</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"texte-bottom position-absolute bottom-0 start-0 end-0 d-flex justify-content-between text-white px-5\">
\t\t\t\t\t\t\t<p class=\"style-musique-card-artiste text-start shadow fw-bold\">AfroTrap</p>
\t\t\t\t\t\t\t<p class=\"localisation-card-artiste text-end shadow\">Paris</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<img src=\"asset/img/artiste-12.jpg\" alt=\"photo artiste Gazou\" class=\"image-carte-artiste rounded-3\">
\t\t\t\t\t</div>
\t\t\t\t</aside>
\t\t\t\t<!------------------------ TEXTE ------------------------>
\t\t\t\t<div id=\"description-spotlight\" class=\"col-12 col-md-6 d-flex flex-column justify-content-between ms-md-5 my-5 my-md-0\">
\t\t\t\t\t<div id=\"texte-spotlight\" class=\"text-white\">
\t\t\t\t\t\t<h3>Billets</h3>
\t\t\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mi, quisque cras malesuada.
\t\t\t\t\t\t\t                            Quis mattis morbi et sapien cursus sed. Nibh molestie pellentesque eu hendrerit posuere
\t\t\t\t\t\t\t                            feugiat
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mt-5 mt-md-0 mx-auto mx-md-0\">
\t\t\t\t\t\t<button type=\"button\" id=\"bouton-voir-projet\" class=\"btn btn-outline-primary offset-md-8\">Voir le projet</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</article>
\t\t</section>
\t\t<!------------------------ FIN SPOTLIGHT ------------------------>

\t\t<!------------------------ DEBUT VOTES OUVERTS ------------------------>
\t\t<section id=\"votes-ouverts\" class=\"mx-3 mx-md-0\">
\t\t\t<div class=\"titres offset-md-1\">
\t\t\t\t<h2 class=\"text-white \">Votes ouverts<a id=\"bouton-voir-plus\" class=\"text-white fs-2 ms-3\" href=\"#\">Voir plus</a><img src=\"asset/icones/icone-chevron-droit.svg\" alt=\"chevron vers la droite\" class=\"chevron-titre ms-3\"></h2>
\t\t\t\t<div class=\"filet-titres mb-3 mb-md-5\"></div>
\t\t\t</div>
\t\t\t<div class=\"position-relative\">
\t\t\t\t<div class=\"slider-section position-absolute top-0 end-0 px-5\">
\t\t\t\t\t<img src=\"asset/icones/icone-chevron-droit.svg\" alt=\"chevron vers la droite\" class=\"chevron-slider position-relative top-50\">
\t\t\t\t</div>
\t\t\t\t<!------------------------ DEBUT SLIDER CARTES ------------------------>
\t\t\t\t<div class=\"sections-contenant\">
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"sections-projets-contenant d-flex justify-content-start align-items-center my-5\">
\t\t\t\t\t\t<!------------------------ Carte 1 ------------------------>
\t\t\t\t\t\t{% for project in projectAll %}
\t\t\t\t\t\t\t{{ include('home/projects_voting.html.twig', {'project': project}) }}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<main/>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\admin\\OneDrive\\Documents\\code\\NEW\\Project\\projet2.0\\templates\\home\\index.html.twig");
    }
}
