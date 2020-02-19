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

/* shared/homeItem.html.twig */
class __TwigTemplate_72515437cbb35fabd8566ee2635545082fffeed5fa09f3377006508afe581f81 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/homeItem.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/homeItem.html.twig"));

        // line 1
        echo "    <div class=\"card h-100 shadow\">
        <div id=\"carouselExampleControls";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
            <div class=\"carousel-inner \">
                ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 4, $this->source); })()), "pictures", [], "any", false, false, false, 4));
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
            // line 5
            echo "                   <div class=\"carousel-item ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 5)) ? ("active") : (""));
            echo "\">
                        <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
            echo "\" target=\"_blank\">
                            <div class=\"img-ratio\">
                                <div class=\"img\">
                                    <img class=\"\" src=\"";
            // line 9
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
        // line 15
        echo "                </a>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
        echo "\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
        echo "\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            ";
        // line 25
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 25, $this->source); })()), "active", [], "any", false, false, false, 25), 2)) {
            // line 26
            echo "                <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
            ";
        }
        // line 28
        echo "        </div>
        <div class=\"card-body\">
            <span class=\"service badge badge-info\"> ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 30, $this->source); })()), "service", [], "any", false, false, false, 30), "html", null, true);
        echo "</span>
            <h5 class=\"card-title\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 31, $this->source); })()), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</h5>
            <p class=\"price text-info font-weight-bold text-right\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\FiltersExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 32, $this->source); })()), "price", [], "any", false, false, false, 32)), "html", null, true);
        echo " € ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 32, $this->source); })()), "service", [], "any", false, false, false, 32), "location")) {
            echo "/mois";
        }
        echo "</p>
            <p>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 33, $this->source); })()), "rooms", [], "any", false, false, false, 33), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 33, $this->source); })()), "surface", [], "any", false, false, false, 33), "html", null, true);
        echo " m²</p>
            ";
        // line 34
        if (((isset($context["description"]) || array_key_exists("description", $context)) && (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 34, $this->source); })()))) {
            echo $this->extensions['App\Twig\FiltersExtension']->getBeginingDescription(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34));
        }
        // line 35
        echo "            
        </div>
        <div class=\"card-footer border-top-0 bg-white text-center\">
            <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
        echo "\" class=\"btn btn-outline-warning btn-pill\">Voir l'annonce</a>
        </div>\t
        <div class=\"heartContainer\">
        ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "User", [], "any", false, false, false, 41)) {
            // line 42
            echo "            ";
            $context["likeClass"] = "far";
            // line 43
            echo "            ";
            $context["likeAction"] = "0";
            // line 44
            echo "            ";
            if (twig_in_filter((isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "likes", [], "any", false, false, false, 44))) {
                // line 45
                echo "                ";
                $context["likeClass"] = "fas";
                // line 46
                echo "                ";
                $context["likeAction"] = "1";
                // line 47
                echo "            ";
            }
            // line 48
            echo "            ";
            if (( !(isset($context["heart"]) || array_key_exists("heart", $context)) || 0 !== twig_compare((isset($context["heart"]) || array_key_exists("heart", $context) ? $context["heart"] : (function () { throw new RuntimeError('Variable "heart" does not exist.', 48, $this->source); })()), "no"))) {
                // line 49
                echo "                <a href=\"\" id=\"heart";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" class=\"heart\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
                echo "\" data-liked=\"";
                echo twig_escape_filter($this->env, (isset($context["likeAction"]) || array_key_exists("likeAction", $context) ? $context["likeAction"] : (function () { throw new RuntimeError('Variable "likeAction" does not exist.', 49, $this->source); })()), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, (isset($context["likeClass"]) || array_key_exists("likeClass", $context) ? $context["likeClass"] : (function () { throw new RuntimeError('Variable "likeClass" does not exist.', 49, $this->source); })()), "html", null, true);
                echo " fa-heart\"></i></a>
            ";
            }
            // line 51
            echo "        ";
        }
        // line 52
        echo "        </div>
    </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "shared/homeItem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 52,  199 => 51,  187 => 49,  184 => 48,  181 => 47,  178 => 46,  175 => 45,  172 => 44,  169 => 43,  166 => 42,  164 => 41,  158 => 38,  153 => 35,  149 => 34,  143 => 33,  135 => 32,  131 => 31,  127 => 30,  123 => 28,  119 => 26,  117 => 25,  110 => 21,  103 => 17,  99 => 15,  79 => 9,  73 => 6,  68 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"card h-100 shadow\">
        <div id=\"carouselExampleControls{{home.id}}\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
            <div class=\"carousel-inner \">
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
                </a>
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
        <div class=\"card-body\">
            <span class=\"service badge badge-info\"> {{ home.service }}</span>
            <h5 class=\"card-title\">{{ home.title }}</h5>
            <p class=\"price text-info font-weight-bold text-right\">{{ home.price|price }} € {% if home.service == \"location\" %}/mois{% endif %}</p>
            <p>{{ home.rooms }} pièces - {{ home.surface }} m²</p>
            {% if description is defined and description %}{{ home.description|beginingDescription }}{% endif %}
            
        </div>
        <div class=\"card-footer border-top-0 bg-white text-center\">
            <a href=\"{{ path('home', {'id': home.id}) }}\" class=\"btn btn-outline-warning btn-pill\">Voir l'annonce</a>
        </div>\t
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
    </div>", "shared/homeItem.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\shared\\homeItem.html.twig");
    }
}
