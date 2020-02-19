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

/* homes/home.html.twig */
class __TwigTemplate_f79f6ae04aa80a65230d9d183d005cdaa58ddda7539da56034881e4458790b65 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homes/home.html.twig", 1);
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

        echo " <h1>BIEN</h1> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"container\">
    <!--Carousel HOME-->
    <div class=\"row pt-5\">
        <div class=\"col-6\">
             <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 14, $this->source); })()), "pictures", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 15
            echo "                    <img class=\"w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["picture"])), "html", null, true);
            echo "\" alt=\"image\">
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>

            <!--ICI IL FAUT MINIATURES IMAGES-->
        ";
        // line 36
        echo "        </div> 

        <div class=\"col-6\">
        <!--Description HOME-->
            <h2>Description</h2>
                <p>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
            ";
        // line 44
        echo "            <p class=\"\">Situé au: ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 44, $this->source); })()), "adress", [], "any", false, false, false, 44), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 44, $this->source); })()), "type", [], "any", false, false, false, 44), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 44, $this->source); })()), "rooms", [], "any", false, false, false, 44), "html", null, true);
        echo " pièces, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 44, $this->source); })()), "surface", [], "any", false, false, false, 44), "html", null, true);
        echo " m², en très bon état avec un séjour donnant sur le balcon, cuisine indépendante équipée, salle de bains avec douche, wc séparé. Une cave est comprise. Local à vélos. Immeuble bien entretenu. Proche du bus et de l'école. Possibilité d'un parking privatif avec portail sécurisé en sus ! </p>
            <p class=\"\"></p>
            <p class=\"\">Honoraires à la charge du locataire en euros </p>
        </div>
    </div>

    <!--CARACTERISTIQUES-->
    <div class=\"row pt-5\">
        <div class=\"col-6\">
            <h3 class=\"py-3\">CARACTERISTIQUES</h3>
            <p><strong>Prestation:</strong> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 54, $this->source); })()), "service", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
            <p><strong>Type de bien immobilier:</strong> ";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 55, $this->source); })()), "type", [], "any", false, false, false, 55), "html", null, true);
        echo "</p>
            <p><strong>Nombre de pièces:</strong> ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 56, $this->source); })()), "rooms", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
            <p>";
        // line 57
        if (twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 57, $this->source); })()), "furnished", [], "any", false, false, false, 57)) {
            // line 58
            echo "                Meublé
                ";
        } else {
            // line 60
            echo "                Non Meublé
                ";
        }
        // line 62
        echo "            </p>
            <p><strong>Surface habitable (m²):</strong> ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 63, $this->source); })()), "surface", [], "any", false, false, false, 63), "html", null, true);
        echo " m²</p>
            <p><strong>Prix:</strong> ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 64, $this->source); })()), "price", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
        </div>

        <!--LOCALISATION-->
        <div class=\"col-6\">
            <h3 class=\"py-3\">LOCALISATION</h3>
                <p>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 70, $this->source); })()), "adress", [], "any", false, false, false, 70), "html", null, true);
        echo "</p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5657224.630597427!2d0.6727440255702806!3d46.184255843869124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.589213699999995!2d7.7489254!4m5!1s0x12c9c085ab77f10f%3A0xa0c2c05d7e57cfc7!2s45%20Rue%20Despieds%2C%2013003%20Marseille!3m2!1d43.311666699999996!2d5.386066!5e0!3m2!1sfr!2sfr!4v1581070905242!5m2!1sfr!2sfr\" width=\"300\" height=\"200\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                </div>
            </div>

            <!--AUTRES CARACTERISTIQUES-->
            ";
        // line 77
        echo "            ";
        // line 80
        echo "        </div>
    </div>

    <!--PERFORMANCES ENERGETIQUES-->
    <h3 class=\"py-3\">PERFORMANCES ENERGETIQUES</h3>
    <div class=\"row\">
        <div class=\"col-6\">
            <p><strong>DPE:</strong></p>
            <p><strong>Valeur DPE:</strong></p>
            <img class=\"w-100\" src=\"/images/dpe.png\" alt=\"\">
        </div>
        <div class=\"col-6\">
            <p><strong>GES:</strong></p>
            <p><strong>Valeur GES:</strong></p>
            <img src=\"/images/ges.png\" alt=\"\">
        </div>


    ";
        // line 118
        echo "</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homes/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 118,  206 => 80,  204 => 77,  195 => 70,  186 => 64,  182 => 63,  179 => 62,  175 => 60,  171 => 58,  169 => 57,  165 => 56,  161 => 55,  157 => 54,  137 => 44,  133 => 41,  126 => 36,  111 => 17,  102 => 15,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} <h1>BIEN</h1> {% endblock %}

{% block body %}

<section class=\"container\">
    <!--Carousel HOME-->
    <div class=\"row pt-5\">
        <div class=\"col-6\">
             <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                    {% for picture in home.pictures %}
                    <img class=\"w-100\" src=\"{{ asset('img/'~picture) }}\" alt=\"image\">
                    {% endfor %}
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>

            <!--ICI IL FAUT MINIATURES IMAGES-->
        {# <div class=\"row d-flex justify-content-center\">
                <div class=\"col-3\">img</div>
                <div class=\"col-3\"></div>
                <div class=\"col-3\"></div>
                <div class=\"col-3\"></div>
            </div> #}
        </div> 

        <div class=\"col-6\">
        <!--Description HOME-->
            <h2>Description</h2>
                <p>{{ home.id }}</p>
            {# Dépôt de garantie en euros
                Provision pour charge en euros #}
            <p class=\"\">Situé au: {{ home.adress }}, {{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m², en très bon état avec un séjour donnant sur le balcon, cuisine indépendante équipée, salle de bains avec douche, wc séparé. Une cave est comprise. Local à vélos. Immeuble bien entretenu. Proche du bus et de l'école. Possibilité d'un parking privatif avec portail sécurisé en sus ! </p>
            <p class=\"\"></p>
            <p class=\"\">Honoraires à la charge du locataire en euros </p>
        </div>
    </div>

    <!--CARACTERISTIQUES-->
    <div class=\"row pt-5\">
        <div class=\"col-6\">
            <h3 class=\"py-3\">CARACTERISTIQUES</h3>
            <p><strong>Prestation:</strong> {{ home.service }}</p>
            <p><strong>Type de bien immobilier:</strong> {{ home.type }}</p>
            <p><strong>Nombre de pièces:</strong> {{ home.rooms }}</p>
            <p>{% if home.furnished %}
                Meublé
                {% else %}
                Non Meublé
                {% endif %}
            </p>
            <p><strong>Surface habitable (m²):</strong> {{ home.surface }} m²</p>
            <p><strong>Prix:</strong> {{ home.price }}</p>
        </div>

        <!--LOCALISATION-->
        <div class=\"col-6\">
            <h3 class=\"py-3\">LOCALISATION</h3>
                <p>{{ home.adress }}</p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5657224.630597427!2d0.6727440255702806!3d46.184255843869124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.589213699999995!2d7.7489254!4m5!1s0x12c9c085ab77f10f%3A0xa0c2c05d7e57cfc7!2s45%20Rue%20Despieds%2C%2013003%20Marseille!3m2!1d43.311666699999996!2d5.386066!5e0!3m2!1sfr!2sfr!4v1581070905242!5m2!1sfr!2sfr\" width=\"300\" height=\"200\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
                </div>
            </div>

            <!--AUTRES CARACTERISTIQUES-->
            {# <h3 class=\"pt-3\">AUTRES CARACTERISTIQUES</h3> #}
            {# <p>Nombre d'étage: {{ home.floor }}</p>
            <p>Type de chauffage: {{ home.heater }}</p>
            <p>Année de construction: {{ home.constructionyear }}</p> #}
        </div>
    </div>

    <!--PERFORMANCES ENERGETIQUES-->
    <h3 class=\"py-3\">PERFORMANCES ENERGETIQUES</h3>
    <div class=\"row\">
        <div class=\"col-6\">
            <p><strong>DPE:</strong></p>
            <p><strong>Valeur DPE:</strong></p>
            <img class=\"w-100\" src=\"/images/dpe.png\" alt=\"\">
        </div>
        <div class=\"col-6\">
            <p><strong>GES:</strong></p>
            <p><strong>Valeur GES:</strong></p>
            <img src=\"/images/ges.png\" alt=\"\">
        </div>


    {# <div class=\"mb-8\">
        
            <h5 class=\"card-title\">{{ home.title }}</h5>

            <p class=\"card-text\">
             <!--Réf--> {{ home.id }}
            
             <!--Surface--> 
             
             
            </p>
           

        <!--DESCRIPTION-->
        <p></p>
        <p> {{ home.description }}</p>
    </div>

    <!--FORMULAIRE DE CONTACT-->
     #}
</section>
{% endblock %}", "homes/home.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\home.html.twig");
    }
}
