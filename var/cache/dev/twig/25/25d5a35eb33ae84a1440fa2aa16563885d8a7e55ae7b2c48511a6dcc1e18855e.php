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

/* home/projects_voting.html.twig */
class __TwigTemplate_8469347e47f66317c2ef1764da377585f51dfcbc7b51a0e63c9eb7232fd30aba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/projects_voting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/projects_voting.html.twig"));

        // line 1
        echo "
    <!------------------------ Carte VOTANT ------------------------>
    <div class=\"carte-contenant mx-3\">
        <div class=\"carte-artiste-slider mx-3 col-12 col-md-3 d-flex justify-content-center align-items-center text-center position-relative rounded-3\">
            <img src=\"{asset/icones/encoche-musique.svg}\" alt=\"encoche musique\" id=\"encoche-musique\" class=\"position-absolute top-0 end-0\">
            <div class=\"position-absolute shadow text-white\">
            </div>
            <div class=\"texte-bottom position-absolute bottom-0 start-0 end-0 d-flex justify-content-between px-5 text-white\">
            </div>
            <img src=\"asset/img/artiste-12.jpg\" alt=\"photo artiste Gazou\" class=\"image-carte-artiste rounded-3\">
        </div>
    </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "home/projects_voting.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <!------------------------ Carte VOTANT ------------------------>
    <div class=\"carte-contenant mx-3\">
        <div class=\"carte-artiste-slider mx-3 col-12 col-md-3 d-flex justify-content-center align-items-center text-center position-relative rounded-3\">
            <img src=\"{asset/icones/encoche-musique.svg}\" alt=\"encoche musique\" id=\"encoche-musique\" class=\"position-absolute top-0 end-0\">
            <div class=\"position-absolute shadow text-white\">
            </div>
            <div class=\"texte-bottom position-absolute bottom-0 start-0 end-0 d-flex justify-content-between px-5 text-white\">
            </div>
            <img src=\"asset/img/artiste-12.jpg\" alt=\"photo artiste Gazou\" class=\"image-carte-artiste rounded-3\">
        </div>
    </div>
", "home/projects_voting.html.twig", "C:\\Users\\admin\\OneDrive\\Documents\\code\\NEW\\Project\\projet2.0\\templates\\home\\projects_voting.html.twig");
    }
}
