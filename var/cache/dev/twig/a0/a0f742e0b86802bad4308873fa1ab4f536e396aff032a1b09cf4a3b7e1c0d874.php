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

/* search/results.html.twig */
class __TwigTemplate_09d643d60eaa1645404163ebe54873226cd7500cbb8ed893d521f411390b8f7a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "search/results.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Résultats de recherche ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
    <section class=\"container-fluid border-dark border-bottom\">
        ";
        // line 7
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start');
        echo "    
            <div class=\"row d-flex justify-content-center pt-2\">
                <div class=\"col md-2\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "type", [], "any", false, false, false, 9), 'row');
        echo "</div>
                <div class=\"col md-2\">";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "service", [], "any", false, false, false, 10), 'row');
        echo "</div>
                <div class=\"col md-2\">";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "minSurface", [], "any", false, false, false, 11), 'row');
        echo "</div>
                <div class=\"col md-2\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "maximumPrice", [], "any", false, false, false, 12), 'row');
        echo "</div>
                <div class=\"col md-2\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "rooms", [], "any", false, false, false, 13), 'row');
        echo "</div>
                <div class=\"col md-2\">";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "furnished", [], "any", false, false, false, 14), 'row');
        echo "</div>
            </div>
            <div class=\"row pb-2 d-flex justify-content-right\">
                <div class=\"col-9\"></div>
                <div class=\"col-3\">
                    ";
        // line 21
        echo "                </div>
            </div>
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
    </section>

    <div class=\"container\">
        ";
        // line 27
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "method", [], "any", false, false, false, 27), "GET")) {
            // line 28
            echo "            ";
            if (0 === twig_compare(twig_length_filter($this->env, (isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 28, $this->source); })())), 0)) {
                // line 29
                echo "            <h1 class=\"pb-3\">Aucun résultat de recherche</h1>
            ";
            } else {
                // line 31
                echo "            <h1 class=\"pb-3\">Résultats de recherche</h1>
                ";
                // line 32
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 32, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
                    // line 33
                    echo "                <div class=\"row bg-light py-5 carousel-height\">
                    <div class=\"col-8\">
                        <div id=\"carouselExampleControls";
                    // line 35
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 35), "html", null, true);
                    echo "\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
                            <div class=\"carousel-inner \">
                            ";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["home"], "pictures", [], "any", false, false, false, 37));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
                        // line 38
                        echo "                                ";
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 38)) {
                            // line 39
                            echo "                                <div class=\"carousel-item active cover\">
                                    <a href=\"";
                            // line 40
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                            echo "\" target=\"_blank\"><img class=\"d-block w-100 \" src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                            echo "\" alt=\"\"></a>
                                </div>
                                ";
                        } else {
                            // line 43
                            echo "                                <div class=\"carousel-item cover\">
                                    <a href=\"";
                            // line 44
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                            echo "\" target=\"_blank\"><img class=\"d-block w-100\" src=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                            echo "\" alt=\"\"></a>
                                </div>
                                ";
                        }
                        // line 47
                        echo "                            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
                    // line 49
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
                    // line 53
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 53), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            ";
                    // line 57
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "active", [], "any", false, false, false, 57), 2)) {
                        // line 58
                        echo "                            <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
                            ";
                    }
                    // line 60
                    echo "                        </div>
                    </div>

                    <!--Description HOME-->
                <div class=\"col-4 bg-light text-center py-5\">
                        <h3>";
                    // line 65
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\FiltersExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["home"], "price", [], "any", false, false, false, 65)), "html", null, true);
                    echo " € ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 65), "location")) {
                        echo " / mois CC ";
                    }
                    echo "</h3>
                        <p>";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "type", [], "any", false, false, false, 66), "html", null, true);
                    echo " de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "rooms", [], "any", false, false, false, 66), "html", null, true);
                    echo " pièces, ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "surface", [], "any", false, false, false, 66), "html", null, true);
                    echo " m²</p>
                        <p>";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "adress", [], "any", false, false, false, 67), "html", null, true);
                    echo "</p>
                        <p>Réf.";
                    // line 68
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 68), "html", null, true);
                    echo "</p>
                        <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 69)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Consulter l'annonce</a>

                        ";
                    // line 84
                    echo "                    </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "   
            ";
            }
            // line 87
            echo "  
        ";
        }
        // line 89
        echo "    </div> 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "search/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 89,  288 => 87,  284 => 86,  276 => 84,  271 => 69,  267 => 68,  263 => 67,  255 => 66,  247 => 65,  240 => 60,  236 => 58,  234 => 57,  227 => 53,  220 => 49,  217 => 48,  203 => 47,  195 => 44,  192 => 43,  184 => 40,  181 => 39,  178 => 38,  161 => 37,  156 => 35,  152 => 33,  148 => 32,  145 => 31,  141 => 29,  138 => 28,  136 => 27,  129 => 23,  125 => 21,  117 => 14,  113 => 13,  109 => 12,  105 => 11,  101 => 10,  97 => 9,  92 => 7,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Résultats de recherche {% endblock %}

{% block body %}

    <section class=\"container-fluid border-dark border-bottom\">
        {{ form_start(form) }}    
            <div class=\"row d-flex justify-content-center pt-2\">
                <div class=\"col md-2\">{{form_row(form.type)}}</div>
                <div class=\"col md-2\">{{form_row(form.service)}}</div>
                <div class=\"col md-2\">{{form_row(form.minSurface)}}</div>
                <div class=\"col md-2\">{{form_row(form.maximumPrice)}}</div>
                <div class=\"col md-2\">{{form_row(form.rooms)}}</div>
                <div class=\"col md-2\">{{form_row(form.furnished)}}</div>
            </div>
            <div class=\"row pb-2 d-flex justify-content-right\">
                <div class=\"col-9\"></div>
                <div class=\"col-3\">
                    {# <button id=\"submit\" class=\"btn btn-warning text-uppercase text-light float-right\" type=\"submit\">Envoyer</button>
                    <button id=\"reset\" class=\"btn btn-warning text-uppercase text-light float-right mr-3\" type=\"reset\">Réinitialiser</button> #}
                </div>
            </div>
        {{ form_end(form) }}
    </section>

    <div class=\"container\">
        {% if app.request.method == \"GET\" %}
            {% if homes |length == 0 %}
            <h1 class=\"pb-3\">Aucun résultat de recherche</h1>
            {% else %}
            <h1 class=\"pb-3\">Résultats de recherche</h1>
                {% for home in homes %}
                <div class=\"row bg-light py-5 carousel-height\">
                    <div class=\"col-8\">
                        <div id=\"carouselExampleControls{{home.id}}\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
                            <div class=\"carousel-inner \">
                            {% for picture in home.pictures %}
                                {% if loop.first %}
                                <div class=\"carousel-item active cover\">
                                    <a href=\"{{ asset('img/homes/'~picture) }}\" target=\"_blank\"><img class=\"d-block w-100 \" src=\"{{ asset('img/homes/'~picture) }}\" alt=\"\"></a>
                                </div>
                                {% else %}
                                <div class=\"carousel-item cover\">
                                    <a href=\"{{ asset('img/homes/'~picture) }}\" target=\"_blank\"><img class=\"d-block w-100\" src=\"{{ asset('img/homes/'~picture) }}\" alt=\"\"></a>
                                </div>
                                {% endif %}
                            {% endfor %}
                            </div>
                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls{{home.id}}\" role=\"button\" data-slide=\"prev\">
                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Previous</span>
                            </a>
                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls{{home.id}}\" role=\"button\" data-slide=\"next\">
                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Next</span>
                            </a>
                            {% if home.active == 2 %}
                            <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
                            {% endif %}
                        </div>
                    </div>

                    <!--Description HOME-->
                <div class=\"col-4 bg-light text-center py-5\">
                        <h3>{{ home.price|price }} € {% if home.service == 'location' %} / mois CC {% endif %}</h3>
                        <p>{{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m²</p>
                        <p>{{ home.adress }}</p>
                        <p>Réf.{{ home.id }}</p>
                        <a href=\"{{ path('home', {'id': home.id}) }}\" class=\"btn btn-primary\">Consulter l'annonce</a>

                        {# <div class=\"row d-flex justify-content-center\">
                            <div class=\"row d-flex justify-content-center\">
                                <div class=\"partager col-12\">
                                    <p class=\"text-dark pt-5\"><b>Partagez</b></p>
                                </div>
                                <div class=\"partager col-12\">
                                <div class=\"fb-share-button\" data-href= \"{{ absolute_url(path('home',{ id:home.id })) }}\" data-layout=\"button_count\" data-size=\"small\">
                                    <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fhome%2F6&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                                    <i class=\"fab fa-facebook-square fa-stack-4x\"></i>
                                    </a>
                                </div>
                            </div>
                        </div> #}
                    </div>
                </div>
                {% endfor %}   
            {% endif %}  
        {% endif %}
    </div> 
{% endblock %}", "search/results.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\search\\results.html.twig");
    }
}
