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

/* registration/register.html.twig */
class __TwigTemplate_a50caa82c19b7d5bfd17b792783ba8cd6c2a702aed6189ebdb30dd35ecdac5a7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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
        ";
        // line 12
        echo "
        <!-- Fichier CSS -->
        
        <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style-formulaire-inscription-maker.css"), "html", null, true);
        echo ">

        <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style-index.css"), "html", null, true);
        echo ">


        <!-- Font Awesome #######Ò-->
        ";
        // line 22
        echo "
        <title>Meet Makers</title>
    </head> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 29
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 30
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
    <main>
    
            <form class=\"container wrapper my-5 col-12\">
            ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
            ";
        // line 37
        if ( !twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", true, true, false, 37)) {
            // line 38
            echo "                <h1 class=\"d-flex justify-content-center mb-5\"> Rejoins-nous</h1>
            ";
        }
        // line 40
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", true, true, false, 40)) {
            // line 41
            echo "                <h1 class=\"d-flex justify-content-center mb-5\">Deviens un maker</h1>

                <div id=\"formulaire-content\">
                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start \">
                        <div class=\"mx-5 my-3\">
                            <label for=\"nom\">Nom*</label>
                            ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "id" => "nom", "placeholder" => "Nom"]]);
            echo "
                        </div>
                        <div class=\"mx-5 my-3\">
                            <label for=\"prenom\">Prénom*</label>
                            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "firstName", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "id" => "prenom", "placeholder" => "Prénom"]]);
            echo "
                        </div>
            ";
        }
        // line 54
        echo "                        <div class=\"mx-5 my-3\">
                            <label for=\"pseudo\">Pseudonyme (20 caractères maximum)*</label>
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "nickname", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "id" => "pseudo", "maxlength" => "20", "placeholder" => "Pseudonyme"]]);
        echo "
                        </div>
                    </div>
            
                    <hr class=\"my-5\">

                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                        <div class=\"mx-5 my-3\">
                            <label for=\"email\">Email*</label>
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "id" => "email", "placeholder" => "Email"]]);
        echo "
                        </div>

                        <div class=\"mx-5 my-3\">
                            <label for=\"mdp\">Mot de Passe*</label>
                            ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control", "id" => "mdp", "placeholder" => "Mot de Passe"]]);
        echo "
                        </div>
                    </div>

                    <hr class=\"my-5\">

                    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", true, true, false, 76)) {
            // line 77
            echo "                        <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-center\" id=\"radioo\">
                            ";
            // line 78
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 78, $this->source); })()), "userType", [], "any", false, false, false, 78), 'widget', ["attr" => ["id" => "type-profil", "class" => "custom-control custom-radio custom-control-inline  my-3 custom-control-input"]]);
            echo "
                        </div>    
                   

                        <hr class=\"my-5\">

                        <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                            <div class=\"mx-5 my-3\">
                                <label for=\"ville\">Ville*</label>
                                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "city", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control", "id" => "ville", "placeholder" => "Ville"]]);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 91
        echo "                    <hr class=\"my-5\">

                    <div class=\"form-group\">
                        <div class=\"form-check d-flex flex-row justify-content-start mx-5 my-3\">
                            ";
        // line 96
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "agreeTerms", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-check-input", "id" => "gridCheck"]]);
        echo "
                            <label class=\"form-check-label\" for=\"gridCheck\">
                                J’accepte les Conditions Générales d’Utilisation *
                            </label>
                            
                        </div>
                </div>

                <div id=\"bouton-formulaire-inscription\" class=\"mt-5 d-flex justify-content-center\">
                    <button type=\"submit\" id=\"bouton-inscription-formulaire\" class=\"btn rounded-pill text-white mx-3 my-3 px-5 py-2\">Je m'inscris</button>
                </div>
            </form>
        </main>

        
    ";
        // line 111
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 111,  229 => 96,  223 => 91,  216 => 87,  204 => 78,  201 => 77,  199 => 76,  190 => 70,  182 => 65,  170 => 56,  166 => 54,  160 => 51,  153 => 47,  145 => 41,  142 => 40,  138 => 38,  136 => 37,  132 => 36,  126 => 32,  117 => 30,  112 => 29,  102 => 28,  89 => 22,  82 => 17,  77 => 15,  72 => 12,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    <head>
        {# <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\"> #}

        <!-- Fichier CSS -->
        
        <link rel=\"stylesheet\" href={{asset('asset/css/style-formulaire-inscription-maker.css')}}>

        <link rel=\"stylesheet\" href={{asset     ('asset/css/style-index.css')}}>


        <!-- Font Awesome #######Ò-->
        {# <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script> #}

        <title>Meet Makers</title>
    </head> 
{% endblock %}

 
{% block body %}
   {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <main>
    
            <form class=\"container wrapper my-5 col-12\">
            {{ form_start(registrationForm) }}
            {% if not registrationForm.firstName is defined %}
                <h1 class=\"d-flex justify-content-center mb-5\"> Rejoins-nous</h1>
            {% endif %}
            {% if registrationForm.firstName is defined %}
                <h1 class=\"d-flex justify-content-center mb-5\">Deviens un maker</h1>

                <div id=\"formulaire-content\">
                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start \">
                        <div class=\"mx-5 my-3\">
                            <label for=\"nom\">Nom*</label>
                            {{ form_widget(registrationForm.lastName, {'attr':{'class':'form-control','id':'nom','placeholder':'Nom'}}) }}
                        </div>
                        <div class=\"mx-5 my-3\">
                            <label for=\"prenom\">Prénom*</label>
                            {{ form_widget(registrationForm.firstName, {'attr':{'class':'form-control','id':'prenom', 'placeholder':'Prénom'}}) }}
                        </div>
            {% endif %}
                        <div class=\"mx-5 my-3\">
                            <label for=\"pseudo\">Pseudonyme (20 caractères maximum)*</label>
                            {{ form_widget(registrationForm.nickname, {'attr':{'class':'form-control','id':'pseudo','maxlength':'20','placeholder':'Pseudonyme'}}) }}
                        </div>
                    </div>
            
                    <hr class=\"my-5\">

                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                        <div class=\"mx-5 my-3\">
                            <label for=\"email\">Email*</label>
                            {{ form_widget(registrationForm.email, {'attr':{'class':'form-control','id':'email','placeholder':'Email'}}) }}
                        </div>

                        <div class=\"mx-5 my-3\">
                            <label for=\"mdp\">Mot de Passe*</label>
                            {{ form_widget(registrationForm.plainPassword, {'attr':{'class':'form-control','id':'mdp','placeholder':'Mot de Passe'}}) }}
                        </div>
                    </div>

                    <hr class=\"my-5\">

                    {% if registrationForm.city is defined %}
                        <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-center\" id=\"radioo\">
                            {{ form_widget(registrationForm.userType, {'attr':{'id':'type-profil','class':'custom-control custom-radio custom-control-inline  my-3 custom-control-input'}}) }}
                        </div>    
                   

                        <hr class=\"my-5\">

                        <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                            <div class=\"mx-5 my-3\">
                                <label for=\"ville\">Ville*</label>
                                {{ form_widget(registrationForm.city, {'attr':{'class':'form-control','id':'ville','placeholder':'Ville'}}) }}
                            </div>
                        </div>
                    {% endif %}
                    <hr class=\"my-5\">

                    <div class=\"form-group\">
                        <div class=\"form-check d-flex flex-row justify-content-start mx-5 my-3\">
                            {# <input class=\"form-check-input\" type=\"checkbox\" id=\"gridCheck\"> #}
                            {{ form_widget(registrationForm.agreeTerms,{'attr':{'class':'form-check-input','id':'gridCheck'}}) }}
                            <label class=\"form-check-label\" for=\"gridCheck\">
                                J’accepte les Conditions Générales d’Utilisation *
                            </label>
                            
                        </div>
                </div>

                <div id=\"bouton-formulaire-inscription\" class=\"mt-5 d-flex justify-content-center\">
                    <button type=\"submit\" id=\"bouton-inscription-formulaire\" class=\"btn rounded-pill text-white mx-3 my-3 px-5 py-2\">Je m'inscris</button>
                </div>
            </form>
        </main>

        
    {{ form_end(registrationForm) }}
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\admin\\OneDrive\\Documents\\code\\NEW\\Project\\projet2.0\\templates\\registration\\register.html.twig");
    }
}
