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

/* project/create.html.twig */
class __TwigTemplate_02dda237df7ed9e785978c74960aede6f78ce63fa8fd9cca1185af95e6c50b1d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "project/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "project/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

        <!-- Fichier CSS -->
        
        <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style-crea-concours-page-un.css"), "html", null, true);
        echo ">



        <!-- Font Awesome #######Ò-->
        <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

        <title>Meet Makers - creation (Part-1)</title>
    </head> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "    <main>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start');
        echo "
        <div class=\"container\">
            <div class=\"col-md-12 wrapper my-5\">
                <div>
                    <!-- CETTE DIV LA SERT A FAIRE LA STROKE AUTOUR DU FORM  -->
                    <div class=\"row\" form>
                        <h1 class=\"text-white\">Créa Concours</h1>
                        <div class=\"row\">
                            <!-- progressbar Start -->
                            <div class=\"col-12\">
                                <ul id=\"progressbar\">
                                    <li id=\"wizard-creation\" class=\"active\" aria-label=\"Étape 1 du formulaire\">Création</li>
                                    <li id=\"wizard-details\" aria-label=\"Étape 2 du formulaire\">Détails</li>
                                    <li id=\"wizard-validation\" aria-label=\"Étape 3 du formulaire\">Validation</li>
                                </ul>
                            </div>
                                <!-- progressbar End -->
                        </div>

                        <div class=\"col-10 mx-auto d-flex flex-wrap justify-content-center\">
                            <!-- CHAMP DE SAISIE -->
                            <!-- NOM DU PROJET -->
                            <div class=\"d-flex justify-content-around my-5\" field>
                                <div class=\"me-5\">
                                    <label for=\"nom du projet\">Nom du projet</label>
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "projectName", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control h-space", "id" => "nom du projet", "placeholder" => "Nom du projet", "aria-label" => "Nom du projet"]]);
        echo "    
                                </div>
                                    <!-- TITRE DU MORCEAU -->
                                <div class=\"ms-5\">
                                    <label for=\"\">Titre du morceau</label>
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "TrackTitle", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control", "id" => "nom du projet", "placeholder" => "Titre du morceau", "aria-label" => "Titre du morceau"]]);
        echo "
                                </div>
                            </div>

                            <!-- CHAMP DE SAISIE -->
                            <!-- ARTISTE(S) -->
                            ";
        // line 77
        echo "                                <!-- DESCRIPTION DU PROJET -->
                            <div class=\"w-100 mb-3 my-5\" field>
                                <label for=\"desc-projet\" class=\"form-label\" aria-placeholder=\"Description du projet (dates de tournages)\">Description du projet
                                <span class=\"span-label\">(dates de tournages)</span></label>
                                ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "Description", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "id" => "desc-projet", "rows" => "8"]]);
        echo "

                                ";
        // line 84
        echo "                            </div>
                                <!-- BOUTON SUIVANT -->
                            <div class=\"btn-suivant offset-10 me-5 mt-5\">
                                <button type=\"submit\" id=\"bouton-suivant\" class=\"btn btn-light rounded-pill fs-1 mx-3 my-3 px-5 py-2\">
                                    Suivant<svg class=\"ms-3\"width=\"10\" height=\"15\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path class=\"chevron-bouton-suivant\" d=\"M1 1L9 9L1 17\" stroke=\"#FBF7FB\"
                                                stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        </svg>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    ";
        // line 101
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), 'form_end');
        echo "
\t</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "project/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 101,  171 => 84,  166 => 81,  160 => 77,  151 => 58,  143 => 53,  115 => 28,  112 => 27,  102 => 26,  82 => 15,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

        <!-- Fichier CSS -->
        
        <link rel=\"stylesheet\" href={{asset('asset/css/style-crea-concours-page-un.css')}}>



        <!-- Font Awesome #######Ò-->
        <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

        <title>Meet Makers - creation (Part-1)</title>
    </head> 
{% endblock %}

{% block body %}
    <main>
    {{ form_start(form)}}
        <div class=\"container\">
            <div class=\"col-md-12 wrapper my-5\">
                <div>
                    <!-- CETTE DIV LA SERT A FAIRE LA STROKE AUTOUR DU FORM  -->
                    <div class=\"row\" form>
                        <h1 class=\"text-white\">Créa Concours</h1>
                        <div class=\"row\">
                            <!-- progressbar Start -->
                            <div class=\"col-12\">
                                <ul id=\"progressbar\">
                                    <li id=\"wizard-creation\" class=\"active\" aria-label=\"Étape 1 du formulaire\">Création</li>
                                    <li id=\"wizard-details\" aria-label=\"Étape 2 du formulaire\">Détails</li>
                                    <li id=\"wizard-validation\" aria-label=\"Étape 3 du formulaire\">Validation</li>
                                </ul>
                            </div>
                                <!-- progressbar End -->
                        </div>

                        <div class=\"col-10 mx-auto d-flex flex-wrap justify-content-center\">
                            <!-- CHAMP DE SAISIE -->
                            <!-- NOM DU PROJET -->
                            <div class=\"d-flex justify-content-around my-5\" field>
                                <div class=\"me-5\">
                                    <label for=\"nom du projet\">Nom du projet</label>
                                    {{ form_widget(form.projectName, {'attr':{'class':'form-control h-space','id':'nom du projet','placeholder':'Nom du projet','aria-label':'Nom du projet'}}) }}    
                                </div>
                                    <!-- TITRE DU MORCEAU -->
                                <div class=\"ms-5\">
                                    <label for=\"\">Titre du morceau</label>
                                    {{ form_widget(form.TrackTitle, {'attr':{'class':'form-control','id':'nom du projet','placeholder':'Titre du morceau','aria-label':'Titre du morceau'}}) }}
                                </div>
                            </div>

                            <!-- CHAMP DE SAISIE -->
                            <!-- ARTISTE(S) -->
                            {# <div class=\"d-flex justify-content-around my-5\" field>
                                <div class=\"me-5\">
                                    <label for=\"\">Artiste(s)</label>
                                    {{ form_widget(form.TrackTitle, {'attr':{'class':'form-control','id':'nom du projet','placeholder':'Titre du morceau','aria-label':'Titre du morceau'}}) }}
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Artiste(s)\" aria-label=\"Artiste(s)\">
                                </div>
                                <!-- VERSION DU MORCEAU -->
                                <div class=\"ms-5\">
                                    <label for=\"\">Version du morceau <span class=\"span-label\">(démo, reprise)</span></label>
                                        <input type=\"text\" class=\"form-control\"placeholder=\"Version du morceau (démo, reprise)\"
                                        aria-label=\"Version du morceau (démo, reprise)\">
                                </div>
                            </div> #}
                                <!-- DESCRIPTION DU PROJET -->
                            <div class=\"w-100 mb-3 my-5\" field>
                                <label for=\"desc-projet\" class=\"form-label\" aria-placeholder=\"Description du projet (dates de tournages)\">Description du projet
                                <span class=\"span-label\">(dates de tournages)</span></label>
                                {{ form_widget(form.Description, {'attr':{'class':'form-control','id':'desc-projet','rows':'8'}}) }}

                                {# <textarea class=\"form-control\" id=\"desc-projet\" rows=\"8\"></textarea> #}
                            </div>
                                <!-- BOUTON SUIVANT -->
                            <div class=\"btn-suivant offset-10 me-5 mt-5\">
                                <button type=\"submit\" id=\"bouton-suivant\" class=\"btn btn-light rounded-pill fs-1 mx-3 my-3 px-5 py-2\">
                                    Suivant<svg class=\"ms-3\"width=\"10\" height=\"15\" viewBox=\"0 0 10 18\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
                                    <path class=\"chevron-bouton-suivant\" d=\"M1 1L9 9L1 17\" stroke=\"#FBF7FB\"
                                                stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                        </svg>
                                </button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    {{ form_end(form) }}
\t</main>
{% endblock %}
", "project/create.html.twig", "C:\\Users\\admin\\OneDrive\\Documents\\code\\NEW\\Project\\projet2.0\\templates\\project\\create.html.twig");
    }
}
