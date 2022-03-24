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

        echo "Register
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/style-formulaire-inscription-maker.css"), "html", null, true);
        echo ">




        <!-- Font Awesome #######Ò-->
        <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

        <title>Meet Makers</title>
</head> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "flashes", [0 => "verify_email_error"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 29
            echo "        <div class=\"alert alert-danger\" role=\"alert\">";
            echo twig_escape_filter($this->env, $context["flash_error"], "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    <main>
            <form class=\"container wrapper my-5 col-12\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
            ";
        // line 35
        if ( !twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", true, true, false, 35)) {
            // line 36
            echo "                <h1 class=\"d-flex justify-content-center mb-5\"> Rejoins-nous</h1>
            ";
        }
        // line 38
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", true, true, false, 38)) {
            // line 39
            echo "                <h1 class=\"d-flex justify-content-center mb-5\">Deviens un maker</h1>

                <div id=\"formulaire-content\">
                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                        <div class=\"mx-5 my-3\">
                            <label for=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
            echo "\">Nom*</label>
                            ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "id" => "nom", "placeholder" => "Nom"]]);
            echo "
                        </div>
                        <div class=\"mx-5 my-3\">
                            <label for=\"prenom\">Prénom*</label>
                            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "firstName", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control", "id" => "prenom", "placeholder" => "Prénom"]]);
            echo "
                        </div>
            ";
        }
        // line 52
        echo "                        <div class=\"mx-5 my-3\">
                            <label for=\"pseudo\">Pseudonyme (20 caractères maximum)*</label>
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "nickname", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control", "id" => "pseudo", "maxlength" => "20", "placeholder" => "Pseudonyme"]]);
        echo "
                        </div>
                    </div>
            
                    <hr class=\"my-5\">

                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                        <div class=\"mx-5 my-3\">
                            <label for=\"email\">Email*</label>
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "email", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "id" => "email", "placeholder" => "Email"]]);
        echo "
                        </div>

                        <div class=\"mx-5 my-3\">
                            <label for=\"mdp\">Mot de Passe*</label>
                            ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "plainPassword", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control", "id" => "mdp", "placeholder" => "Mot de Passe"]]);
        echo "
                        </div>
                    </div>

                    <hr class=\"my-5\">

                    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "city", [], "any", true, true, false, 74)) {
            // line 75
            echo "                        <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-center\" id=\"radioo\">
                            ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "userType", [], "any", false, false, false, 76), 'widget', ["attr" => ["id" => "type-profil", "class" => "custom-control custom-radio custom-control-inline  my-3 custom-control-input"]]);
            echo "
                        </div>    
                   

                        <hr class=\"my-5\">

                        <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                            <div class=\"mx-5 my-3\">
                                <label for=\"ville\">Ville*</label>
                                ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "city", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control", "id" => "ville", "placeholder" => "Ville"]]);
            echo "
                            </div>
                        </div>
                    ";
        }
        // line 89
        echo "                    <hr class=\"my-5\">

                    <div class=\"form-group\">
                        <div class=\"form-check d-flex flex-row justify-content-start mx-5 my-3\">
                            ";
        // line 94
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "agreeTerms", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-check-input", "id" => "gridCheck"]]);
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
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), 'form_end');
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
        return array (  250 => 109,  231 => 94,  225 => 89,  218 => 85,  206 => 76,  203 => 75,  201 => 74,  192 => 68,  184 => 63,  172 => 54,  168 => 52,  162 => 49,  155 => 45,  151 => 44,  144 => 39,  141 => 38,  137 => 36,  135 => 35,  131 => 34,  126 => 31,  117 => 29,  112 => 28,  102 => 27,  81 => 14,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <!-- Bootstrap CSS -->
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\"
            integrity=\"sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3\" crossorigin=\"anonymous\">

        <!-- Fichier CSS -->
        <link rel=\"stylesheet\" href={{asset('asset/css/style-formulaire-inscription-maker.css')}}>




        <!-- Font Awesome #######Ò-->
        <script src=\"https://kit.fontawesome.com/0a79214c99.js\" crossorigin=\"anonymous\"></script>

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
                    <div class=\"mx-auto my-5 d-flex flex-wrap justify-content-start\">
                        <div class=\"mx-5 my-3\">
                            <label for=\"{{registrationForm.vars.id}}\">Nom*</label>
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
