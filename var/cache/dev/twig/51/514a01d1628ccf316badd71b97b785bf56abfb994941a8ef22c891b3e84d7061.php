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

/* admin/usersProfil.html.twig */
class __TwigTemplate_5548d3c4f273c9fde9fc2ee939bdec13aa325450512f277971df25cc8714dfe1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/usersProfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/usersProfil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/usersProfil.html.twig", 1);
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

        echo "Profil ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "firstname", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "lastname", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-12\">
                <h1 class=\"my-5\">Profil de ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "firstname", [], "any", false, false, false, 9), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "lastname", [], "any", false, false, false, 9), "html", null, true);
        echo " (#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        echo ")</h1>
            </div>
            <div class=\"col-md-6 border-right\">
                <p><span class=\"font-weight-bold\">Identité</span></p>
                <p>Age : ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "profil", [], "any", false, false, false, 13), "age", [], "any", false, false, false, 13), "html", null, true);
        echo " ans</p>
                <p>Situation : ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "profil", [], "any", false, false, false, 14), "situation", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                <p>
                    Profession : ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "profil", [], "any", false, false, false, 16), "job", [], "any", false, false, false, 16), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "profil", [], "any", false, false, false, 16), "contract", [], "any", false, false, false, 16), "html", null, true);
        echo " 
                    ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "profil", [], "any", false, false, false, 17), "salary", [], "any", false, false, false, 17)) {
            // line 18
            echo "                        ( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "profil", [], "any", false, false, false, 18), "salary", [], "any", false, false, false, 18), "html", null, true);
            echo " € / mois )
                    ";
        }
        // line 20
        echo "                </p>
            </div>
            <div class=\"col-md-6\">
                <p><span class=\"font-weight-bold\">Informations</span></p>
                <p>Numéro de téléphone : ";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "phone", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
                <p>Email : ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                <p>
                    Profil : 
                    ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "active", [], "any", false, false, false, 28)) {
            // line 29
            echo "                        Activé
                    ";
        } else {
            // line 31
            echo "                        Non activé
                    ";
        }
        // line 33
        echo "                </p>
            </div>
        </div> <!-- /row -->
        <div class=\"my-4\">
            <nav class=\"mb-4\">
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Bien aimés</a>
                    <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Bien possédés</a>
                </div>
            </nav>
            <div class=\"tab-content\" id=\"nav-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                    <div class=\"row\">
                        ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "likes", [], "any", false, false, false, 46));
        foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
            // line 47
            echo "                            <div class=\"col-md-4 my-2 mb-5\">
                                <p>Ref: #";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "</p>
                                <p>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 49), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "type", [], "any", false, false, false, 49), "html", null, true);
            echo "</p>
                                <p>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "adress", [], "any", false, false, false, 50), "html", null, true);
            echo "</p>
                                <p>Prix : ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "price", [], "any", false, false, false, 51), "html", null, true);
            echo " € 
                                    ";
            // line 52
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 52), "location")) {
                // line 53
                echo "                                        / mois
                                    ";
            }
            // line 55
            echo "                                </p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">Voir le bien</a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    <div class=\"row\">
                        ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "currenthomes", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
            // line 64
            echo "                            <div class=\"col-md-4 my-2 mb-5\">
                                <p>Ref: #";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 65), "html", null, true);
            echo "</p>
                                <p>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 66), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "type", [], "any", false, false, false, 66), "html", null, true);
            echo "</p>
                                <p>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "adress", [], "any", false, false, false, 67), "html", null, true);
            echo "</p>
                                <p>Prix : ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "price", [], "any", false, false, false, 68), "html", null, true);
            echo " € 
                                    ";
            // line 69
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 69), "location")) {
                // line 70
                echo "                                        / mois
                                    ";
            }
            // line 72
            echo "                                </p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\">Voir le bien</a>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                    </div>
                </div>
            </div>
        </div>


        ";
        // line 118
        echo "    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/usersProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 118,  263 => 76,  254 => 73,  251 => 72,  247 => 70,  245 => 69,  241 => 68,  237 => 67,  231 => 66,  227 => 65,  224 => 64,  220 => 63,  214 => 59,  205 => 56,  202 => 55,  198 => 53,  196 => 52,  192 => 51,  188 => 50,  182 => 49,  178 => 48,  175 => 47,  171 => 46,  156 => 33,  152 => 31,  148 => 29,  146 => 28,  140 => 25,  136 => 24,  130 => 20,  124 => 18,  122 => 17,  116 => 16,  111 => 14,  107 => 13,  96 => 9,  91 => 6,  81 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil {{ user.firstname }} {{ user.lastname }}{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-12\">
                <h1 class=\"my-5\">Profil de {{ user.firstname }} {{ user.lastname }} (#{{ user.id }})</h1>
            </div>
            <div class=\"col-md-6 border-right\">
                <p><span class=\"font-weight-bold\">Identité</span></p>
                <p>Age : {{ user.profil.age }} ans</p>
                <p>Situation : {{ user.profil.situation }}</p>
                <p>
                    Profession : {{ user.profil.job }} - {{ user.profil.contract }} 
                    {% if user.profil.salary %}
                        ( {{ user.profil.salary }} € / mois )
                    {% endif %}
                </p>
            </div>
            <div class=\"col-md-6\">
                <p><span class=\"font-weight-bold\">Informations</span></p>
                <p>Numéro de téléphone : {{ user.phone }}</p>
                <p>Email : {{ user.email }}</p>
                <p>
                    Profil : 
                    {% if user.active %}
                        Activé
                    {% else %}
                        Non activé
                    {% endif %}
                </p>
            </div>
        </div> <!-- /row -->
        <div class=\"my-4\">
            <nav class=\"mb-4\">
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <a class=\"nav-item nav-link active\" id=\"nav-home-tab\" data-toggle=\"tab\" href=\"#nav-home\" role=\"tab\" aria-controls=\"nav-home\" aria-selected=\"true\">Bien aimés</a>
                    <a class=\"nav-item nav-link\" id=\"nav-profile-tab\" data-toggle=\"tab\" href=\"#nav-profile\" role=\"tab\" aria-controls=\"nav-profile\" aria-selected=\"false\">Bien possédés</a>
                </div>
            </nav>
            <div class=\"tab-content\" id=\"nav-tabContent\">
                <div class=\"tab-pane fade show active\" id=\"nav-home\" role=\"tabpanel\" aria-labelledby=\"nav-home-tab\">
                    <div class=\"row\">
                        {% for home in user.likes %}
                            <div class=\"col-md-4 my-2 mb-5\">
                                <p>Ref: #{{home.id}}</p>
                                <p>{{ home.service }} - {{ home.type }}</p>
                                <p>{{ home.adress }}</p>
                                <p>Prix : {{ home.price }} € 
                                    {% if home.service == \"location\" %}
                                        / mois
                                    {% endif %}
                                </p>
                                <a class=\"btn btn-primary\" href=\"{{ path('home', {id:home.id}) }}\">Voir le bien</a>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <div class=\"tab-pane fade\" id=\"nav-profile\" role=\"tabpanel\" aria-labelledby=\"nav-profile-tab\">
                    <div class=\"row\">
                        {% for home in user.currenthomes %}
                            <div class=\"col-md-4 my-2 mb-5\">
                                <p>Ref: #{{home.id}}</p>
                                <p>{{ home.service }} - {{ home.type }}</p>
                                <p>{{ home.adress }}</p>
                                <p>Prix : {{ home.price }} € 
                                    {% if home.service == \"location\" %}
                                        / mois
                                    {% endif %}
                                </p>
                                <a class=\"btn btn-primary\" href=\"{{ path('home', {id:home.id}) }}\">Voir le bien</a>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>


        {# <div class=\"row mt-3 mb-5 pb-5 border-bottom\">
            <div class=\"col-12\">
                <p><span class=\"font-weight-bold\">Biens aimés</span></p>
            </div>
            {% for home in user.likes %}
                <div class=\"col-md-4 my-2 mb-5 my-md-0\">
                    <p>Ref: #{{home.id}}</p>
                    <p>{{ home.service }} - {{ home.type }}</p>
                    <p>{{ home.adress }}</p>
                    <p>Prix : {{ home.price }} € 
                        {% if home.service == \"location\" %}
                            / mois
                        {% endif %}
                    </p>
                    <a class=\"btn btn-primary\" href=\"{{ path('home', {id:home.id}) }}\">Voir le bien</a>
                </div>
            {% endfor %}
        </div> <!-- /row -->
        <div class=\"row mt-3 mb-5\">
            <div class=\"col-12\">
                <p><span class=\"font-weight-bold\">Biens possédés</span></p>
            </div>
            {% for home in user.currenthomes %}
                <div class=\"col-md-4 my-2 mb-5 my-md-0\">
                    <p>Ref: #{{home.id}}</p>
                    <p>{{ home.service }} - {{ home.type }}</p>
                    <p>{{ home.adress }}</p>
                    <p>Prix : {{ home.price }} € 
                        {% if home.service == \"location\" %}
                            / mois
                        {% endif %}
                    </p>
                    <a class=\"btn btn-primary\" href=\"{{ path('home', {id:home.id}) }}\">Voir le bien</a>
                </div>
            {% endfor %}
        </div> <!-- /row --> #}
    </div>

{% endblock %}

{# <p class=\"font-weight-light\">Référence # {{ request.id }} <span class=\"text-uppercase\">({{ request.home.service }})</span> -- Le {{request.createdat|date(\"d/m/Y\")}}</p>
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
                        </p> #}", "admin/usersProfil.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\admin\\usersProfil.html.twig");
    }
}
