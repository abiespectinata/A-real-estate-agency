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
class __TwigTemplate_1684e85adcc0ae930d2e6f9fa1bac8b1edb83f3b3c4d40504e09cc45004d3c3d extends Template
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
        echo "<div class=\"col mb-4\">
    <div class=\"card h-100\">
        <div id=\"carouselExampleControls";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 5, $this->source); })()), "pictures", [], "any", false, false, false, 5));
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
            // line 6
            echo "                
                    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 7)) {
                // line 8
                echo "                        <div class=\"carousel-item active cover\">
                            <a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" target=\"_blank\"><img class=\"d-block w-100 \" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            } else {
                // line 12
                echo "                        <div class=\"carousel-item cover\">
                            <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" target=\"_blank\"><img class=\"d-block w-100\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            }
            // line 16
            echo "                ";
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
        // line 17
        echo "                </a>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), "html", null, true);
        echo "\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            ";
        // line 27
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 27, $this->source); })()), "active", [], "any", false, false, false, 27), 2)) {
            // line 28
            echo "                <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
            ";
        }
        // line 30
        echo "        </div>
        <div class=\"card-body\">
            <span class=\"service badge badge-info\"> ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 32, $this->source); })()), "service", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
            <h5 class=\"card-title\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h5>
            <p class=\"price text-info font-weight-bold text-right\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\FiltersExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 34, $this->source); })()), "price", [], "any", false, false, false, 34)), "html", null, true);
        echo " € ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 34, $this->source); })()), "service", [], "any", false, false, false, 34), "location")) {
            echo "/mois";
        }
        echo "</p>
            <p>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 35, $this->source); })()), "rooms", [], "any", false, false, false, 35), "html", null, true);
        echo " pièces - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 35, $this->source); })()), "surface", [], "any", false, false, false, 35), "html", null, true);
        echo " m²</p>
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
            echo "            <a href=\"\" id=\"heart";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" class=\"heart\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" data-liked=\"";
            echo twig_escape_filter($this->env, (isset($context["likeAction"]) || array_key_exists("likeAction", $context) ? $context["likeAction"] : (function () { throw new RuntimeError('Variable "likeAction" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "\"><i class=\"";
            echo twig_escape_filter($this->env, (isset($context["likeClass"]) || array_key_exists("likeClass", $context) ? $context["likeClass"] : (function () { throw new RuntimeError('Variable "likeClass" does not exist.', 48, $this->source); })()), "html", null, true);
            echo " fa-heart\"></i></a>
        ";
        }
        // line 50
        echo "        </div>
    </div>
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
        return array (  200 => 50,  188 => 48,  185 => 47,  182 => 46,  179 => 45,  176 => 44,  173 => 43,  170 => 42,  168 => 41,  162 => 38,  154 => 35,  146 => 34,  142 => 33,  138 => 32,  134 => 30,  130 => 28,  128 => 27,  121 => 23,  114 => 19,  110 => 17,  96 => 16,  88 => 13,  85 => 12,  77 => 9,  74 => 8,  72 => 7,  69 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col mb-4\">
    <div class=\"card h-100\">
        <div id=\"carouselExampleControls{{home.id}}\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
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
            <a href=\"\" id=\"heart{{home.id}}\" class=\"heart\" data-id=\"{{home.id}}\" data-liked=\"{{likeAction}}\"><i class=\"{{likeClass}} fa-heart\"></i></a>
        {% endif %}
        </div>
    </div>
</div>", "shared/homeItem.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\shared\\homeItem.html.twig");
    }
}
