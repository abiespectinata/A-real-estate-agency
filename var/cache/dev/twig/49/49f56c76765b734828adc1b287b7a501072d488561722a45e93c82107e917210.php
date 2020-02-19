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

/* homes/buy.html.twig */
class __TwigTemplate_c79a15ac01016409c544a009f79f109c3d0aa833fc25a7bbfd3ae0b3c4429a53 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/buy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/buy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homes/buy.html.twig", 1);
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

        echo "ACHATS";
        
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
<h1 class= \"text-center mt-5 mb-5\">Acheter un bien immobilier</h1>

<div>
    <section class= \"d-block mw-100\" style =\"background:url('https://www.leloupimmobilier.fr/resources/banniere-3.jpg') no-repeat center center fixed; background-size:cover;\">
        <span class=\"background-dark-homes\"><p class=\"text-white text-center\">Vous souhaitez acheter un bien immobilier ? <br>
        AgenceImmo vous propose le meilleur choix parmi les maisons et les appartements de votre région. <br>
        Trouvez dès maintenant votre bonheur parmi nos annonces !</p></span>
    </section>
</div>

";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SearchController::searchForm"));
        echo "

";
        // line 31
        if (twig_test_empty((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 31, $this->source); })()))) {
            // line 32
            echo "    <div class=\"col-12 my-5 text-center\">
        <p class=\"my-5\">Nos biens ont été victimes de leurs succès, nous n'avons plus de biens en vente pour le moment. N'hésitez pas à revenir, nous mettons régulièrement nos biens à jour.</p>
    </div>
";
        }
        // line 36
        echo "
";
        // line 38
        echo "<div class=\"container\" id=\"portfolio\">
    <div class=\"row\">
        ";
        // line 40
        if (1 === twig_compare((isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 40, $this->source); })()), 1)) {
            // line 41
            echo "
            ";
            // line 43
            echo "            ";
            $context["nearbyPagesLimit"] = 4;
            // line 44
            echo "
            <div>
                <ul class=\"pagination\">
                    ";
            // line 47
            if (0 !== twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 47, $this->source); })()), 1)) {
                // line 48
                echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                // line 49
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy", ["page" => 1]);
                echo "\">&laquo;</a>
                    </li>
                    ";
            }
            // line 52
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 52, $this->source); })())));
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
                // line 53
                echo "                        ";
                if (0 === twig_compare(0, (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 53, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 53, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 53)))) {
                    echo " ";
                    // line 54
                    echo "                            <li class=\"page-item disabled\"><a href=\"#\">...</a></li>
                        ";
                } elseif (0 === twig_compare(0, ((                // line 55
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 55, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 55, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 55)))) {
                    echo " ";
                    // line 56
                    echo "                            <li class=\"page-item disabled\"><a href=\"#\">...</a></li>
                        ";
                } elseif (-1 === twig_compare(0, ((                // line 57
(isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 57, $this->source); })()) - (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 57, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 57)))) {
                    echo " ";
                    // line 58
                    echo "                        ";
                } elseif (1 === twig_compare(0, (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 58, $this->source); })()) + (isset($context["nearbyPagesLimit"]) || array_key_exists("nearbyPagesLimit", $context) ? $context["nearbyPagesLimit"] : (function () { throw new RuntimeError('Variable "nearbyPagesLimit" does not exist.', 58, $this->source); })())) - twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58)))) {
                    echo " ";
                    // line 59
                    echo "                        ";
                } else {
                    // line 60
                    echo "                            <li ";
                    if (0 === twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 60, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 60))) {
                        echo " class=\"page-item active\" ";
                    }
                    echo ">
                                <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy", ["page" => twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61)]), "html", null, true);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 61), "html", null, true);
                    echo "</a>
                            </li>
                        ";
                }
                // line 64
                echo "                    ";
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
            // line 65
            echo "                    ";
            if (0 !== twig_compare((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 65, $this->source); })()), (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "                    <li class=\"page-item\">
                        <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy", ["page" => (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new RuntimeError('Variable "nbPages" does not exist.', 67, $this->source); })())]), "html", null, true);
                echo "\" class=\"page-link\">&raquo;</a>
                    </li>
                    ";
            }
            // line 70
            echo "                </ul>
            </div>
        ";
        }
        // line 73
        echo "    </div>
    <div class = \"row\">
    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 75, $this->source); })()));
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
            // line 76
            echo "        <div class=\"col-md-4 mb-4\">
            ";
            // line 77
            $this->loadTemplate("shared/homeItem.html.twig", "homes/buy.html.twig", 77)->display(twig_array_merge($context, ["home" => $context["home"], "description" => true]));
            // line 78
            echo "        </div>
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
        // line 80
        echo "    </div>

</div> 


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homes/buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 80,  289 => 78,  287 => 77,  284 => 76,  267 => 75,  263 => 73,  258 => 70,  252 => 67,  249 => 66,  246 => 65,  232 => 64,  224 => 61,  217 => 60,  214 => 59,  210 => 58,  207 => 57,  204 => 56,  201 => 55,  198 => 54,  194 => 53,  176 => 52,  170 => 49,  167 => 48,  165 => 47,  160 => 44,  157 => 43,  154 => 41,  152 => 40,  148 => 38,  145 => 36,  139 => 32,  137 => 31,  132 => 29,  119 => 18,  117 => 17,  113 => 15,  110 => 14,  107 => 13,  104 => 12,  101 => 11,  98 => 10,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ACHATS{% endblock %}

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

<h1 class= \"text-center mt-5 mb-5\">Acheter un bien immobilier</h1>

<div>
    <section class= \"d-block mw-100\" style =\"background:url('https://www.leloupimmobilier.fr/resources/banniere-3.jpg') no-repeat center center fixed; background-size:cover;\">
        <span class=\"background-dark-homes\"><p class=\"text-white text-center\">Vous souhaitez acheter un bien immobilier ? <br>
        AgenceImmo vous propose le meilleur choix parmi les maisons et les appartements de votre région. <br>
        Trouvez dès maintenant votre bonheur parmi nos annonces !</p></span>
    </section>
</div>

{{ render(controller('App\\\\Controller\\\\SearchController::searchForm')) }}

{% if homes is empty %}
    <div class=\"col-12 my-5 text-center\">
        <p class=\"my-5\">Nos biens ont été victimes de leurs succès, nous n'avons plus de biens en vente pour le moment. N'hésitez pas à revenir, nous mettons régulièrement nos biens à jour.</p>
    </div>
{% endif %}

{# Annonces #}
<div class=\"container\" id=\"portfolio\">
    <div class=\"row\">
        {% if nbPages > 1 %}

            {# Number of page around current page+1 #}
            {% set nearbyPagesLimit = 4 %}

            <div>
                <ul class=\"pagination\">
                    {% if currentPage != 1 %}
                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"{{ path('buy', { 'page': 1 }) }}\">&laquo;</a>
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
                                <a href=\"{{ path('buy', { 'page': loop.index }) }}\" class=\"page-link\">{{ loop.index }}</a>
                            </li>
                        {% endif %}
                    {% endfor %}
                    {% if currentPage != nbPages %}
                    <li class=\"page-item\">
                        <a href=\"{{ path('buy', { 'page': nbPages }) }}\" class=\"page-link\">&raquo;</a>
                    </li>
                    {% endif %}
                </ul>
            </div>
        {% endif %}
    </div>
    <div class = \"row\">
    {% for home in homes %}
        <div class=\"col-md-4 mb-4\">
            {% include 'shared/homeItem.html.twig' with {home: home, description:true} %}
        </div>
    {% endfor %}
    </div>

</div> 


{% endblock %}
", "homes/buy.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\buy.html.twig");
    }
}
