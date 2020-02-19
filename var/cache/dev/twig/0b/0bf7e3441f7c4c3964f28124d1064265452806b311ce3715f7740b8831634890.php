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

/* admin/adminHomes.html.twig */
class __TwigTemplate_c531f67d004e58400460759625184fdb8d1cfbd56a3422a791feda831fa4cfcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminHomes.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/adminHomes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/adminHomes.html.twig", 1);
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

        echo "Pannel admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " 
    ";
        // line 6
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css\"/>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<div class=\"container\">
    <h1 class=\"text-center my-5\">Tous les biens</h1>

    <table id=\"myTable\" class=\"table table-hover my-5\">
        <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Service</th>
                <th scope=\"col\">Disponibilité</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
            // line 27
            echo "                <tr>
                    <th scope=\"row\">#";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "</th>
                    <td class=\"\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "type", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                    <td class=\"\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                    <td class=\"\">
                        ";
            // line 32
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "active", [], "any", false, false, false, 32), 3)) {
                // line 33
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usersProfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["home"], "currentuser", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\" class=\"text-dark\">
                                ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["home"], "currentuser", [], "any", false, false, false, 34), "firstname", [], "any", false, false, false, 34), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["home"], "currentuser", [], "any", false, false, false, 34), "lastname", [], "any", false, false, false, 34), "html", null, true);
                echo " (#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["home"], "currentuser", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34), "html", null, true);
                echo ")
                            </a>    
                        ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 36
$context["home"], "active", [], "any", false, false, false, 36), 0)) {
                // line 37
                echo "                            <span class=\"text-danger\">Non disponible</span>
                        ";
            } elseif (0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 38
$context["home"], "active", [], "any", false, false, false, 38), 2)) {
                // line 39
                echo "                            <span class=\"text-warning\">Exclusivité</span>
                        ";
            } else {
                // line 41
                echo "                            <span class=\"text-success\">Disponible</span>
                        ";
            }
            // line 43
            echo "                    </td>
                    <td>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"actionsDropDownButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions</button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"actionsDropDownButton\">
                                <a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeCrud", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" class=\"dropdown-item my-0\" >Modifier informations</a>
                                ";
            // line 50
            echo "                            </div>
                        </div>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </tbody>
    </table>

    <div class=\"mb-5\">
        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomes");
        echo "\" class=\"btn btn-secondary mt-5\">Revenir à tous les biens</a>
        <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomes", ["filter" => "occupied"]);
        echo "\" class=\"btn btn-secondary mt-5\">Afficher les biens occupés</a>
    </div>
    
    
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js\"></script>
    <script>
    \$(document).ready( function () {
        \$('#myTable').DataTable();
    } );
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/adminHomes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 68,  230 => 67,  214 => 60,  210 => 59,  204 => 55,  194 => 50,  190 => 48,  183 => 43,  179 => 41,  175 => 39,  173 => 38,  170 => 37,  168 => 36,  159 => 34,  154 => 33,  152 => 32,  147 => 30,  143 => 29,  139 => 28,  136 => 27,  132 => 26,  115 => 11,  105 => 10,  92 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Pannel admin{% endblock %}

{% block stylesheets %} 
    {{ parent() }}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.css\"/>
    {% endblock %}

{% block body %}

<div class=\"container\">
    <h1 class=\"text-center my-5\">Tous les biens</h1>

    <table id=\"myTable\" class=\"table table-hover my-5\">
        <thead>
            <tr>
                <th scope=\"col\">Référence</th>
                <th scope=\"col\">Type</th>
                <th scope=\"col\">Service</th>
                <th scope=\"col\">Disponibilité</th>
                <th scope=\"col\"></th>
            </tr>
        </thead>
        <tbody>
            {% for home in homes %}
                <tr>
                    <th scope=\"row\">#{{ home.id }}</th>
                    <td class=\"\">{{ home.type }}</td>
                    <td class=\"\">{{ home.service }}</td>
                    <td class=\"\">
                        {% if home.active == 3 %}
                            <a href=\"{{ path('usersProfil', {id:home.currentuser.id }) }}\" class=\"text-dark\">
                                {{home.currentuser.firstname}} {{home.currentuser.lastname}} (#{{home.currentuser.id}})
                            </a>    
                        {% elseif home.active == 0 %}
                            <span class=\"text-danger\">Non disponible</span>
                        {% elseif home.active == 2 %}
                            <span class=\"text-warning\">Exclusivité</span>
                        {% else %}
                            <span class=\"text-success\">Disponible</span>
                        {% endif %}
                    </td>
                    <td>
                        <div class=\"dropdown\">
                            <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"actionsDropDownButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions</button>
                            <div class=\"dropdown-menu\" aria-labelledby=\"actionsDropDownButton\">
                                <a href=\"{{ path('homeCrud', {id: home.id}) }}\" class=\"dropdown-item my-0\" >Modifier informations</a>
                                {# <a href=\"{{ path('', {id: home.id}) }}\" class=\"dropdown-item my-0\">Supprimer membre</a> #}
                            </div>
                        </div>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>

    <div class=\"mb-5\">
        <a href=\"{{ path('adminHomes') }}\" class=\"btn btn-secondary mt-5\">Revenir à tous les biens</a>
        <a href=\"{{ path('adminHomes', {filter:'occupied'}) }}\" class=\"btn btn-secondary mt-5\">Afficher les biens occupés</a>
    </div>
    
    
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js\"></script>
    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/b-1.6.1/b-html5-1.6.1/b-print-1.6.1/datatables.min.js\"></script>
    <script>
    \$(document).ready( function () {
        \$('#myTable').DataTable();
    } );
    </script>
{% endblock %}", "admin/adminHomes.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\admin\\adminHomes.html.twig");
    }
}
