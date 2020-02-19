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

/* admin/requests.html.twig */
class __TwigTemplate_b3450b4ea033acc60cedd62eab0bc2d720734c3fbf76e762695066fd18bd72f9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/requests.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/requests.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/requests.html.twig", 1);
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

        echo "Demandes";
        
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
    <h1 class=\"text-center mt-5\">Liste des demandes</h1>

    <section class=\"container\" id=\"demandes\">
        <div class=\"row\">
        ";
        // line 11
        if (twig_test_empty((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "            <div class=\"col-12 my-5 text-center\">
                Il n'y a pas de demandes actuellement
            </div>
        ";
        } else {
            // line 16
            echo "        
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 17, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
                // line 18
                echo "            
                <div class=\"col-12\">
                    <h2 class=\"my-3\">Référence du bien : # ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "</h2>
                </div>
                <div class=\"col-md-5\">
                    ";
                // line 23
                $this->loadTemplate("shared/homeItem.html.twig", "admin/requests.html.twig", 23)->display(twig_array_merge($context, ["home" => $context["home"], "heart" => "no"]));
                // line 24
                echo "                </div>
                <div class=\"col-md-7 border-left\">
                    ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["home"], "requests", [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                    // line 27
                    echo "                    <div class=\"border-top px-2 py-3\">
                        <p class=\"font-weight-light\">Référence # ";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo " <span class=\"text-uppercase\">(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "home", [], "any", false, false, false, 28), "service", [], "any", false, false, false, 28), "html", null, true);
                    echo ")</span> -- Le ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "createdat", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
                    echo "</p>
                        <p class=\"titreDemande font-weight-bold\">Demande de ";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 29), "firstname", [], "any", false, false, false, 29), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 29), "lastname", [], "any", false, false, false, 29), "html", null, true);
                    echo "</p>
                        <p class=\"text-uppercase pt-2\">Informations personnelles :</p>
                        <p><span class=\"font-weight-bold\">Travail</span> : ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "job", [], "any", false, false, false, 31), "html", null, true);
                    echo " (";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "contract", [], "any", false, false, false, 31), "html", null, true);
                    echo ") ";
                    if (twig_get_attribute($this->env, $this->source, $context["request"], "salary", [], "any", false, false, false, 31)) {
                        echo "- ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "salary", [], "any", false, false, false, 31), "html", null, true);
                        echo " € / mois";
                    }
                    // line 32
                    echo "                        </p>
                        <p><span class=\"font-weight-bold\">Situation</span> : ";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "age", [], "any", false, false, false, 33), "html", null, true);
                    echo " ans - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "situation", [], "any", false, false, false, 33), "html", null, true);
                    echo "</p>
                        <p class=\"text-uppercase pt-2\">Informations logement :</p>
                        <p>
                            <span class=\"font-weight-bold\">Occupants :</span> 
                            ";
                    // line 37
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["request"], "numberresidents", [], "any", false, false, false, 37), "html", null, true);
                    echo " 
                            ";
                    // line 38
                    if (twig_get_attribute($this->env, $this->source, $context["request"], "animals", [], "any", false, false, false, 38)) {
                        echo "(avec animal)";
                    }
                    echo "              
                        </p>
                        <p>
                            <span class=\"font-weight-bold\">Garantie :</span> 
                            ";
                    // line 42
                    if (twig_get_attribute($this->env, $this->source, $context["request"], "guarantor", [], "any", false, false, false, 42)) {
                        // line 43
                        echo "                                ";
                        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "home", [], "any", false, false, false, 43), "service", [], "any", false, false, false, 43), "location")) {
                            // line 44
                            echo "                                    Avec garant
                                ";
                        } else {
                            // line 46
                            echo "                                    Avec apport
                                ";
                        }
                        // line 48
                        echo "                            ";
                    } else {
                        // line 49
                        echo "                                Non
                            ";
                    }
                    // line 51
                    echo "                        </p>
                        ";
                    // line 52
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["request"], "requeststatus", [], "any", false, false, false, 52), 0)) {
                        // line 53
                        echo "                        ";
                        // line 54
                        echo "                            <div class=\"d-flex\">
                                <a href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("answerRequest", ["id" => twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 55), "action" => "accept"]), "html", null, true);
                        echo "\" class=\"btn btn-success\">Accepter</a>
                                <a href=\"";
                        // line 56
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("answerRequest", ["id" => twig_get_attribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 56), "action" => "refuse"]), "html", null, true);
                        echo "\"  class=\"btn btn-danger mx-2\">Refuser</a>
                                <a href=\"";
                        // line 57
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usersProfil", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["request"], "user", [], "any", false, false, false, 57), "id", [], "any", false, false, false, 57)]), "html", null, true);
                        echo "\" class=\"btn btn-warning\">Voir le profil</a>
                            </div>
                        ";
                    } elseif (0 !== twig_compare(twig_get_attribute($this->env, $this->source,                     // line 59
$context["request"], "refusedat", [], "any", false, false, false, 59), null)) {
                        // line 60
                        echo "                            <p class=\"text-danger\">Demande déjà refusée</p>
                        ";
                    } else {
                        // line 62
                        echo "                            <p class=\"text-success\">Demande validée</p>
                        ";
                    }
                    // line 64
                    echo "                    </div>
                        
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['request'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "        ";
        }
        // line 70
        echo "        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/requests.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 70,  272 => 69,  257 => 67,  249 => 64,  245 => 62,  241 => 60,  239 => 59,  234 => 57,  230 => 56,  226 => 55,  223 => 54,  221 => 53,  219 => 52,  216 => 51,  212 => 49,  209 => 48,  205 => 46,  201 => 44,  198 => 43,  196 => 42,  187 => 38,  183 => 37,  174 => 33,  171 => 32,  161 => 31,  154 => 29,  146 => 28,  143 => 27,  139 => 26,  135 => 24,  133 => 23,  127 => 20,  123 => 18,  106 => 17,  103 => 16,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Demandes{% endblock %}

{% block body %}

    <h1 class=\"text-center mt-5\">Liste des demandes</h1>

    <section class=\"container\" id=\"demandes\">
        <div class=\"row\">
        {% if homes is empty %}
            <div class=\"col-12 my-5 text-center\">
                Il n'y a pas de demandes actuellement
            </div>
        {% else %}
        
            {% for home in homes %}
            
                <div class=\"col-12\">
                    <h2 class=\"my-3\">Référence du bien : # {{ home.id }}</h2>
                </div>
                <div class=\"col-md-5\">
                    {% include 'shared/homeItem.html.twig' with {home: home, heart:'no'} %}
                </div>
                <div class=\"col-md-7 border-left\">
                    {% for request in home.requests %}
                    <div class=\"border-top px-2 py-3\">
                        <p class=\"font-weight-light\">Référence # {{ request.id }} <span class=\"text-uppercase\">({{ request.home.service }})</span> -- Le {{request.createdat|date(\"d/m/Y\")}}</p>
                        <p class=\"titreDemande font-weight-bold\">Demande de {{ request.user.firstname }} {{ request.user.lastname }}</p>
                        <p class=\"text-uppercase pt-2\">Informations personnelles :</p>
                        <p><span class=\"font-weight-bold\">Travail</span> : {{ request.job }} ({{ request.contract }}) {% if request.salary %}- {{ request.salary }} € / mois{% endif %}
                        </p>
                        <p><span class=\"font-weight-bold\">Situation</span> : {{ request.age }} ans - {{ request.situation }}</p>
                        <p class=\"text-uppercase pt-2\">Informations logement :</p>
                        <p>
                            <span class=\"font-weight-bold\">Occupants :</span> 
                            {{ request.numberresidents }} 
                            {% if request.animals %}(avec animal){% endif %}              
                        </p>
                        <p>
                            <span class=\"font-weight-bold\">Garantie :</span> 
                            {% if request.guarantor %}
                                {% if request.home.service == 'location' %}
                                    Avec garant
                                {% else %}
                                    Avec apport
                                {% endif %}
                            {% else %}
                                Non
                            {% endif %}
                        </p>
                        {% if request.requeststatus == 0 %}
                        {# je suis ton maitre jeune padawan #}
                            <div class=\"d-flex\">
                                <a href=\"{{ path('answerRequest', {id:request.id, action:'accept'}) }}\" class=\"btn btn-success\">Accepter</a>
                                <a href=\"{{ path('answerRequest', {id:request.id, action:'refuse'}) }}\"  class=\"btn btn-danger mx-2\">Refuser</a>
                                <a href=\"{{ path('usersProfil', {id:request.user.id}) }}\" class=\"btn btn-warning\">Voir le profil</a>
                            </div>
                        {% elseif request.refusedat != NULL %}
                            <p class=\"text-danger\">Demande déjà refusée</p>
                        {% else %}
                            <p class=\"text-success\">Demande validée</p>
                        {% endif %}
                    </div>
                        
                    {% endfor %}
                </div>
            {% endfor %}
        {% endif %}
        </div>
    </section>
{% endblock %}
", "admin/requests.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\admin\\requests.html.twig");
    }
}
