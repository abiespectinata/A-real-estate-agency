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
class __TwigTemplate_3e1ab4c8d2dc92b8de524d9b7fcb4e337a8b21cce1eaf5b8768ce06baba5d621 extends Template
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

        echo " Page de recherche ";
        
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
        echo "<div id=\"searchContainer\">
<section class=\"searchHeader container-fluid\">
        <h1 class=\"barredeC text-center mb-5\">Trouvez l'habitat qui vous correspond</h1>
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchController::searchForm"));
        echo "
</section>
</div>
    <div class=\"container-fluid\">
        <div class=\"mx-5\">
            ";
        // line 13
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "method", [], "any", false, false, false, 13), "GET")) {
            // line 14
            echo "                ";
            if (0 === twig_compare(twig_length_filter($this->env, (isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 14, $this->source); })())), 0)) {
                // line 15
                echo "                    <div class=\"row text-center\">
                        <div class=\"col-12\">
                            <h1 class=\"py-5 pb-3\">Aucun résultat de recherche</h1>
                        </div>
                    </div> 
                    ";
            } else {
                // line 21
                echo "                    <div class=\"row text-center\">
                        <div class=\"col-12\">
                            <h1 class=\"py-5 ml-5\">Résultats de recherche</h1>
                        </div>
                    </div> 
            
                    <!-- Résultats -->
                    <div class=\"row justify-content-around\">
                        ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 29, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["home"]) {
                    // line 30
                    echo "                            <div class=\"col-lg-5 my-3 bg-light\">
                                <div class=\"row\">
                                    <div id=\"carouselOverflow\" class=\"col-md-6\">
                                        <div id=\"carouselExampleControls";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 33), "html", null, true);
                    echo "\" class=\"carousel overflow-hidden\" data-ride=\"carousel\">
                                            <div class=\"carousel-inner\">
                                                ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["home"], "pictures", [], "any", false, false, false, 35));
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
                        // line 36
                        echo "                                                <div class=\"carousel-item ";
                        echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 36)) ? ("active") : (""));
                        echo "\">
                                                    <a href=\"";
                        // line 37
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                        echo "\" target=\"_blank\">
                                                        <div class=\"img-ratio\">
                                                            <div class=\"img\">
                                                                <img class=\"\" src=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                        echo "\" alt=\"\">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "                                            </div>
                                            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
                    // line 47
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 47), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"prev\">
                                                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Previous</span>
                                            </a>
                                            <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 51), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"next\">
                                                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                                <span class=\"sr-only\">Next</span>
                                            </a>
                                            ";
                    // line 55
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "active", [], "any", false, false, false, 55), 2)) {
                        // line 56
                        echo "                                                <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
                                            ";
                    }
                    // line 58
                    echo "                                        </div>
                                    </div>
                                    <div id=\"searchHeartContainer\" class=\"col-md-5 pt-5 text-center\">
                                    <!--Description HOME-->
                                        <h3>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->extensions['App\Twig\FiltersExtension']->formatPrice(twig_get_attribute($this->env, $this->source, $context["home"], "price", [], "any", false, false, false, 62)), "html", null, true);
                    echo " € ";
                    if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["home"], "service", [], "any", false, false, false, 62), "location")) {
                        echo " / mois CC ";
                    }
                    echo "</h3>
                                        <p>";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "type", [], "any", false, false, false, 63), "html", null, true);
                    echo " de ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "rooms", [], "any", false, false, false, 63), "html", null, true);
                    echo " pièces, ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "surface", [], "any", false, false, false, 63), "html", null, true);
                    echo " m²</p>
                                        <p>";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "adress", [], "any", false, false, false, 64), "html", null, true);
                    echo "</p>
                                        <p>Réf.";
                    // line 65
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 65), "html", null, true);
                    echo "</p>
                                        <a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\" class=\"btn btn-primary\">Consulter l'annonce</a>
                                        <div class=\"heartContainer\">
                                            ";
                    // line 68
                    if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "User", [], "any", false, false, false, 68)) {
                        // line 69
                        echo "                                                ";
                        $context["likeClass"] = "far";
                        // line 70
                        echo "                                                ";
                        $context["likeAction"] = "0";
                        // line 71
                        echo "                                                ";
                        if (twig_in_filter($context["home"], twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "likes", [], "any", false, false, false, 71))) {
                            // line 72
                            echo "                                                    ";
                            $context["likeClass"] = "fas";
                            // line 73
                            echo "                                                    ";
                            $context["likeAction"] = "1";
                            // line 74
                            echo "                                                ";
                        }
                        // line 75
                        echo "                                                ";
                        if (( !(isset($context["heart"]) || array_key_exists("heart", $context)) || 0 !== twig_compare((isset($context["heart"]) || array_key_exists("heart", $context) ? $context["heart"] : (function () { throw new RuntimeError('Variable "heart" does not exist.', 75, $this->source); })()), "no"))) {
                            // line 76
                            echo "                                                    <a href=\"\" id=\"heart";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 76), "html", null, true);
                            echo "\" class=\"heart\" data-id=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["home"], "id", [], "any", false, false, false, 76), "html", null, true);
                            echo "\" data-liked=\"";
                            echo twig_escape_filter($this->env, (isset($context["likeAction"]) || array_key_exists("likeAction", $context) ? $context["likeAction"] : (function () { throw new RuntimeError('Variable "likeAction" does not exist.', 76, $this->source); })()), "html", null, true);
                            echo "\"><i class=\"";
                            echo twig_escape_filter($this->env, (isset($context["likeClass"]) || array_key_exists("likeClass", $context) ? $context["likeClass"] : (function () { throw new RuntimeError('Variable "likeClass" does not exist.', 76, $this->source); })()), "html", null, true);
                            echo " fa-heart\"></i></a>
                                                ";
                        }
                        // line 78
                        echo "                                            ";
                    }
                    // line 79
                    echo "                                        </div>
                                    </div>
                                    
                                    <div class=\"CENTER col-md-1\"></div>
                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['home'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                echo "                    </div>
                ";
            }
            // line 87
            echo "  
            ";
        }
        // line 89
        echo "        </div>
    </div> 
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
        return array (  302 => 89,  298 => 87,  294 => 86,  282 => 79,  279 => 78,  267 => 76,  264 => 75,  261 => 74,  258 => 73,  255 => 72,  252 => 71,  249 => 70,  246 => 69,  244 => 68,  239 => 66,  235 => 65,  231 => 64,  223 => 63,  215 => 62,  209 => 58,  205 => 56,  203 => 55,  196 => 51,  189 => 47,  186 => 46,  166 => 40,  160 => 37,  155 => 36,  138 => 35,  133 => 33,  128 => 30,  124 => 29,  114 => 21,  106 => 15,  103 => 14,  101 => 13,  93 => 8,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Page de recherche {% endblock %}

{% block body %}
<div id=\"searchContainer\">
<section class=\"searchHeader container-fluid\">
        <h1 class=\"barredeC text-center mb-5\">Trouvez l'habitat qui vous correspond</h1>
        {{ render(controller('App\\\\Controller\\\\SearchController::searchForm')) }}
</section>
</div>
    <div class=\"container-fluid\">
        <div class=\"mx-5\">
            {% if app.request.method == \"GET\" %}
                {% if homes |length == 0 %}
                    <div class=\"row text-center\">
                        <div class=\"col-12\">
                            <h1 class=\"py-5 pb-3\">Aucun résultat de recherche</h1>
                        </div>
                    </div> 
                    {% else %}
                    <div class=\"row text-center\">
                        <div class=\"col-12\">
                            <h1 class=\"py-5 ml-5\">Résultats de recherche</h1>
                        </div>
                    </div> 
            
                    <!-- Résultats -->
                    <div class=\"row justify-content-around\">
                        {% for home in homes %}
                            <div class=\"col-lg-5 my-3 bg-light\">
                                <div class=\"row\">
                                    <div id=\"carouselOverflow\" class=\"col-md-6\">
                                        <div id=\"carouselExampleControls{{home.id}}\" class=\"carousel overflow-hidden\" data-ride=\"carousel\">
                                            <div class=\"carousel-inner\">
                                                {% for picture in home.pictures %}
                                                <div class=\"carousel-item {{loop.first ? 'active' : ''}}\">
                                                    <a href=\"{{ asset('img/homes/'~picture) }}\" target=\"_blank\">
                                                        <div class=\"img-ratio\">
                                                            <div class=\"img\">
                                                                <img class=\"\" src=\"{{ asset('img/homes/'~picture) }}\" alt=\"\">
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
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
                                    <div id=\"searchHeartContainer\" class=\"col-md-5 pt-5 text-center\">
                                    <!--Description HOME-->
                                        <h3>{{ home.price|price }} € {% if home.service == 'location' %} / mois CC {% endif %}</h3>
                                        <p>{{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m²</p>
                                        <p>{{ home.adress }}</p>
                                        <p>Réf.{{ home.id }}</p>
                                        <a href=\"{{ path('home', {'id': home.id}) }}\" class=\"btn btn-primary\">Consulter l'annonce</a>
                                        <div class=\"heartContainer\">
                                            {% if app.User %}
                                                {% set likeClass = \"far\" %}
                                                {% set likeAction = \"0\" %}
                                                {% if home in app.user.likes %}
                                                    {% set likeClass = \"fas\" %}
                                                    {% set likeAction = \"1\" %}
                                                {% endif %}
                                                {% if heart is not defined or heart != 'no' %}
                                                    <a href=\"\" id=\"heart{{home.id}}\" class=\"heart\" data-id=\"{{home.id}}\" data-liked=\"{{likeAction}}\"><i class=\"{{likeClass}} fa-heart\"></i></a>
                                                {% endif %}
                                            {% endif %}
                                        </div>
                                    </div>
                                    
                                    <div class=\"CENTER col-md-1\"></div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                {% endif %}  
            {% endif %}
        </div>
    </div> 
    {% endblock %} ", "search/results.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\search\\results.html.twig");
    }
}
