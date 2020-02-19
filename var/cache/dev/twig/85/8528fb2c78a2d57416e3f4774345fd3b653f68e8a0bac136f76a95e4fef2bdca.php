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

/* homes/renting.html.twig */
class __TwigTemplate_327793428663c6ae4cc95ca2fc015ff6807181786e969a28515b3ebc286b70b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/renting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/renting.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homes/renting.html.twig", 1);
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

        echo "LOCATION";
        
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
    ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 8
            echo "        <!-- Pour les membres on affiche les maisons exclusives également -->
        ";
            // line 9
            $context["homes"] = (isset($context["exclusivehomes"]) || array_key_exists("exclusivehomes", $context) ? $context["exclusivehomes"] : (function () { throw new RuntimeError('Variable "exclusivehomes" does not exist.', 9, $this->source); })());
            // line 10
            echo "        ";
            $context["nbhomes"] = (isset($context["nbExclusivehomes"]) || array_key_exists("nbExclusivehomes", $context) ? $context["nbExclusivehomes"] : (function () { throw new RuntimeError('Variable "nbExclusivehomes" does not exist.', 10, $this->source); })());
            // line 11
            echo "    ";
        } else {
            // line 12
            echo "        ";
            $context["homes"] = (isset($context["limitedhomes"]) || array_key_exists("limitedhomes", $context) ? $context["limitedhomes"] : (function () { throw new RuntimeError('Variable "limitedhomes" does not exist.', 12, $this->source); })());
            // line 13
            echo "        ";
            $context["nbhomes"] = (isset($context["nblimitedhomes"]) || array_key_exists("nblimitedhomes", $context) ? $context["nblimitedhomes"] : (function () { throw new RuntimeError('Variable "nblimitedhomes" does not exist.', 13, $this->source); })());
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    <!--Calcul du nombre de pages à afficher -->
    ";
        // line 17
        $context["nbPages"] = twig_round((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["nbhomes"]) || array_key_exists("nbhomes", $context) ? $context["nbhomes"] : (function () { throw new RuntimeError('Variable "nbhomes" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), 1, [], "array", false, false, false, 17) / (isset($context["limitPerPage"]) || array_key_exists("limitPerPage", $context) ? $context["limitPerPage"] : (function () { throw new RuntimeError('Variable "limitPerPage" does not exist.', 17, $this->source); })())), 0, "ceil");
        // line 18
        echo "
    <h1 class= \"text-center mt-5 mb-5\">Louer un bien immobilier</h1>

    <div>
        <section class= \"d-block mw-100\" style =\"background:url('https://www.leloupimmobilier.fr/resources/banniere-3.jpg') no-repeat center center fixed; background-size:cover;\">
            <span class=\"background-dark-homes\"><p class=\"text-white text-center\">Vous souhaitez louer un bien immobilier ? <br>
            AgenceImmo vous propose le meilleur choix parmi les maisons et les appartements de votre région. <br>
            Trouvez dès maintenant votre bonheur parmi nos annonces !</p></span>
        </section>
    </div>
    <div class=\"container\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchController::searchForm"));
        echo "
    </div>

    ";
        // line 32
        if (twig_test_empty((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 32, $this->source); })()))) {
            // line 33
            echo "        <div class=\"col-12 my-5 text-center\">
            <p class=\"my-5\">Nos locations ont été victimes de leurs succès, nous n'en avons pas pour le moment. N'hésitez pas à revenir, nous mettons régulièrement nos biens à jour.</p>
        </div>
    ";
        }
        // line 37
        echo "
    ";
        // line 39
        echo "    <div class=\"container my-5\" id=\"portfolio\">

        <div class=\"row\">
            <div class=\"col-12\">
                ";
        // line 43
        if (1 === twig_compare((isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 43, $this->source); })()), 1)) {
            // line 44
            echo "
                    ";
            // line 46
            echo "                    ";
            $context["nearbyPagesLimit"] = 4;
            // line 47
            echo "
                    <div>
                        <ul class=\"pagination\">
                            ";
            // line 50
            if (0 !== twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 50, $this->source); })()), 1)) {
                // line 51
                echo "                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"";
                // line 52
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting", ["page" => 1]);
                echo "\">&laquo;</a>
                            </li>
                            ";
            }
            // line 55
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 55, $this->source); })())));
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
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 56
                echo "                                ";
                if (0 === twig_compare(0, (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 56, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 56, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 56)))) {
                    echo " ";
                    // line 57
                    echo "                                    <li class=\"page-item disabled\"><a href=\"#\">...</a></li>
                                ";
                } elseif (0 === twig_compare(0, ((                // line 58
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 58, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 58, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58)))) {
                    echo " ";
                    // line 59
                    echo "                                    <li class=\"page-item disabled\"><a href=\"#\">...</a></li>
                                ";
                } elseif (-1 === twig_compare(0, ((                // line 60
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 60, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 60, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60)))) {
                    echo " ";
                    // line 61
                    echo "                                ";
                } elseif (1 === twig_compare(0, (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 61, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 61, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61)))) {
                    echo " ";
                    // line 62
                    echo "                                ";
                } else {
                    // line 63
                    echo "                                    <li ";
                    if (0 === twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 63, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 63))) {
                        echo " class=\"page-item active\" ";
                    }
                    echo ">
                                        <a href=\"";
                    // line 64
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting", ["page" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64)]), "html", null, true);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 64), "html", null, true);
                    echo "</a>
                                    </li>
                                ";
                }
                // line 67
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                            ";
            if (0 !== twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 68, $this->source); })()), (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 68, $this->source); })()))) {
                // line 69
                echo "                            <li class=\"page-item\">
                                <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting", ["page" => (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 70, $this->source); })())]), "html", null, true);
                echo "\" class=\"page-link\">&raquo;</a>
                            </li>
                            ";
            }
            // line 73
            echo "                        </ul>
                    </div>
                ";
        }
        // line 76
        echo "            </div>
        </div>

        <div class = \"row\">
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 80, $this->source); })()));
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
            // line 81
            echo "            <div class=\"col-md-4 mb-4\">
                ";
            // line 82
            $this->loadTemplate("shared/homeItem.html.twig", "homes/renting.html.twig", 82)->display(twig_array_merge($context, ["home" => $context["home"], "description" => true]));
            // line 83
            echo "            </div>
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
        // line 85
        echo "        </div>

    </div> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homes/renting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 85,  294 => 83,  292 => 82,  289 => 81,  272 => 80,  266 => 76,  261 => 73,  255 => 70,  252 => 69,  249 => 68,  235 => 67,  227 => 64,  220 => 63,  217 => 62,  213 => 61,  210 => 60,  207 => 59,  204 => 58,  201 => 57,  197 => 56,  179 => 55,  173 => 52,  170 => 51,  168 => 50,  163 => 47,  160 => 46,  157 => 44,  155 => 43,  149 => 39,  146 => 37,  140 => 33,  138 => 32,  132 => 29,  119 => 18,  117 => 17,  113 => 15,  110 => 14,  107 => 13,  104 => 12,  101 => 11,  98 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LOCATION{% endblock %}

{% block body %}

    {% if is_granted('ROLE_USER') %}
        <!-- Pour les membres on affiche les maisons exclusives également -->
        {% set homes = exclusivehomes %}
        {% set nbhomes = nbExclusivehomes %}
    {% else %}
        {% set homes = limitedhomes %}
        {% set nbhomes = nblimitedhomes %}
    {% endif %}

    <!--Calcul du nombre de pages à afficher -->
    {% set nbPages = (nbhomes[0][1] / limitPerPage)|round(0, 'ceil') %}

    <h1 class= \"text-center mt-5 mb-5\">Louer un bien immobilier</h1>

    <div>
        <section class= \"d-block mw-100\" style =\"background:url('https://www.leloupimmobilier.fr/resources/banniere-3.jpg') no-repeat center center fixed; background-size:cover;\">
            <span class=\"background-dark-homes\"><p class=\"text-white text-center\">Vous souhaitez louer un bien immobilier ? <br>
            AgenceImmo vous propose le meilleur choix parmi les maisons et les appartements de votre région. <br>
            Trouvez dès maintenant votre bonheur parmi nos annonces !</p></span>
        </section>
    </div>
    <div class=\"container\">
        {{ render(controller('App\\\\Controller\\\\SearchController::searchForm')) }}
    </div>

    {% if homes is empty %}
        <div class=\"col-12 my-5 text-center\">
            <p class=\"my-5\">Nos locations ont été victimes de leurs succès, nous n'en avons pas pour le moment. N'hésitez pas à revenir, nous mettons régulièrement nos biens à jour.</p>
        </div>
    {% endif %}

    {# Annonces #}
    <div class=\"container my-5\" id=\"portfolio\">

        <div class=\"row\">
            <div class=\"col-12\">
                {% if nbPages > 1 %}

                    {# Number of page around current page+1 #}
                    {% set nearbyPagesLimit = 4 %}

                    <div>
                        <ul class=\"pagination\">
                            {% if currentPage != 1 %}
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"{{ path('renting', { 'page': 1 }) }}\">&laquo;</a>
                            </li>
                            {% endif %}
                            {% for i in 1..nbPages %}
                                {% if 0 == (currentPage - nearbyPagesLimit) - loop.index %} {# dot before #}
                                    <li class=\"page-item disabled\"><a href=\"#\">...</a></li>
                                {% elseif 0 == (currentPage + nearbyPagesLimit) - loop.index %} {# dot after #}
                                    <li class=\"page-item disabled\"><a href=\"#\">...</a></li>
                                {% elseif 0 < (currentPage - nearbyPagesLimit) - loop.index %} {# hide all before #}
                                {% elseif 0 > (currentPage + nearbyPagesLimit) - loop.index %} {# hide all after #}
                                {% else %}
                                    <li {% if currentPage == loop.index  %} class=\"page-item active\" {% endif %}>
                                        <a href=\"{{ path('renting', { 'page': loop.index }) }}\" class=\"page-link\">{{ loop.index }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                            {% if currentPage != nbPages %}
                            <li class=\"page-item\">
                                <a href=\"{{ path('renting', { 'page': nbPages }) }}\" class=\"page-link\">&raquo;</a>
                            </li>
                            {% endif %}
                        </ul>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class = \"row\">
        {% for home in homes %}
            <div class=\"col-md-4 mb-4\">
                {% include 'shared/homeItem.html.twig' with {home: home, description:true} %}
            </div>
        {% endfor %}
        </div>

    </div> 

{% endblock %}", "homes/renting.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\renting.html.twig");
    }
}
