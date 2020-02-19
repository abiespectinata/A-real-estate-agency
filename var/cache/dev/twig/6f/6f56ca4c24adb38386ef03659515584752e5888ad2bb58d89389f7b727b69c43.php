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
class __TwigTemplate_34c5453012a545d89726b5e4e0801f7e64b23f0df6183e5b150af943e36c57ff extends Template
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

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "\tPAGE DE BIEN
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

";
        // line 10
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 10, $this->source); })()), "service", [], "any", false, false, false, 10), "location")) {
            // line 11
            echo "  ";
            $context["lienService"] = "renting";
        } else {
            // line 13
            echo "  ";
            $context["lienService"] = "buy";
        }
        // line 15
        echo "
";
        // line 16
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 16, $this->source); })()), "active", [], "any", false, false, false, 16), 0) && -1 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 16, $this->source); })()), "active", [], "any", false, false, false, 16), 3))) {
            // line 17
            echo "
\t<section class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"";
            // line 22
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo "\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["lienService"]) || array_key_exists("lienService", $context) ? $context["lienService"] : (function () { throw new RuntimeError('Variable "lienService" does not exist.', 25, $this->source); })()));
            echo "\">
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 26, $this->source); })()), "service", [], "any", false, false, false, 26)), "html", null, true);
            echo "  
          </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Réf.
\t\t\t\t\t";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30), "html", null, true);
            echo "</li>
\t\t\t</ol>
\t\t</nav>

\t\t<!--Carousel HOME-->
\t\t<div class=\"row pt-3 pb-5 carousel-height\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div id=\"carouselExampleControls";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), "html", null, true);
            echo "\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-inner \">
\t\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 39, $this->source); })()), "pictures", [], "any", false, false, false, 39));
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
                // line 40
                echo "
\t\t\t\t\t\t\t";
                // line 41
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 41)) {
                    // line 42
                    echo "\t\t\t\t\t\t\t\t<div class=\"carousel-item active cover\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                    echo "\" target=\"_blank\"><img class=\"d-block w-100 \" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                    echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                } else {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t<div class=\"carousel-item cover\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                    echo "\" target=\"_blank\"><img class=\"d-block w-100\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                    echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t\t\t";
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
            // line 51
            echo "\t\t\t\t\t</div>
          <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52), "html", null, true);
            echo "\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56), "html", null, true);
            echo "\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
          ";
            // line 60
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 60, $this->source); })()), "active", [], "any", false, false, false, 60), 2)) {
                // line 61
                echo "            <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
          ";
            }
            // line 63
            echo "        </div>
      </div>

      <!--Description HOME-->
      <div id=\"homeuniquedescription\" class=\"col-md-4 bg-light text-center py-5\">
        <div class=\"heartContainer my-3\">
          ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "User", [], "any", false, false, false, 69)) {
                // line 70
                echo "            ";
                $context["likeClass"] = "far";
                // line 71
                echo "            ";
                $context["likeAction"] = "0";
                // line 72
                echo "            ";
                if (twig_in_filter((isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 72, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "likes", [], "any", false, false, false, 72))) {
                    // line 73
                    echo "              ";
                    $context["likeClass"] = "fas";
                    // line 74
                    echo "              ";
                    $context["likeAction"] = "1";
                    // line 75
                    echo "            ";
                }
                // line 76
                echo "            ";
                if (( !(isset($context["heart"]) || array_key_exists("heart", $context)) || 0 !== twig_compare((isset($context["heart"]) || array_key_exists("heart", $context) ? $context["heart"] : (function () { throw new RuntimeError('Variable "heart" does not exist.', 76, $this->source); })()), "no"))) {
                    // line 77
                    echo "              <a href=\"\" id=\"heart";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\" class=\"heart\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77), "html", null, true);
                    echo "\" data-liked=\"";
                    echo twig_escape_filter($this->env, (isset($context["likeAction"]) || array_key_exists("likeAction", $context) ? $context["likeAction"] : (function () { throw new RuntimeError('Variable "likeAction" does not exist.', 77, $this->source); })()), "html", null, true);
                    echo "\">
                <i class=\"";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["likeClass"]) || array_key_exists("likeClass", $context) ? $context["likeClass"] : (function () { throw new RuntimeError('Variable "likeClass" does not exist.', 78, $this->source); })()), "html", null, true);
                    echo " fa-heart\"></i>
              </a>
            ";
                }
                // line 81
                echo "          ";
            }
            // line 82
            echo "        </div>
        <h3>";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\FiltersExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 83, $this->source); })()), "price", [], "any", false, false, false, 83)), "html", null, true);
            echo "
          €
          ";
            // line 85
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 85, $this->source); })()), "service", [], "any", false, false, false, 85), "location")) {
                // line 86
                echo "            / mois CC
          ";
            }
            // line 88
            echo "        </h3>
        <p>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 89, $this->source); })()), "type", [], "any", false, false, false, 89), "html", null, true);
            echo "
          de
          ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 91, $this->source); })()), "rooms", [], "any", false, false, false, 91), "html", null, true);
            echo "
          pièces,
          ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 93, $this->source); })()), "surface", [], "any", false, false, false, 93), "html", null, true);
            echo "
          m²</p>
        <p>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 95, $this->source); })()), "adress", [], "any", false, false, false, 95), "html", null, true);
            echo "</p>
        <p>Réf : #";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "html", null, true);
            echo "</p>
        <a href=\"#prendreContact\" class=\"btn btn-warning text-uppercase w-100\">
          <i class=\"fas fa-phone fa-inverse\"></i>
          <span class=\"rdv\">
            Prendre rdv</span>
        </a>
        ";
            // line 102
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102)) {
                // line 103
                echo "          ";
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 104
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeCrud", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
                    echo "\" class=\"btn btn-danger my-3 w-100\">
              <span class=\"rdv\">Modifier l'annonce</span>
            </a>
          ";
                } else {
                    // line 108
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interested", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
                    echo "\" class=\"btn btn-warning my-3 w-100\">
              <span class=\"rdv\">Candidature simplifiée</span>
            </a>
          ";
                }
                // line 112
                echo "        ";
            }
            // line 113
            echo "
        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"fb-share-button\" data-href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)])), "html", null, true);
            echo "\" data-layout=\"button_count\" data-size=\"small\">
              <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fhome%2F6&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                <i class=\"fab fa-facebook-square fa-stack-4x\"></i>
              </a>
            </div>
        </div>
      </div>\t\t\t
    </div>
    <!--CARACTERISTIQUES-->
\t\t<div class=\"row pt-3 pb-5 d-flex justify-content-center\">
      <div class=\"col-12 text-center\">
        <h2>
          <p class=\"pt-3\">";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 128, $this->source); })()), "type", [], "any", false, false, false, 128), "html", null, true);
            echo "
            de
            ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 130, $this->source); })()), "rooms", [], "any", false, false, false, 130), "html", null, true);
            echo "
            pièces,
            ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 132, $this->source); })()), "surface", [], "any", false, false, false, 132), "html", null, true);
            echo "
            m²</p>
        </h2>
      </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"mt-4\">
\t\t\t\t\t<strong>Prestation:</strong>
\t\t\t\t\t";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 139, $this->source); })()), "service", [], "any", false, false, false, 139), "html", null, true);
            echo "</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Type de bien immobilier:</strong>
\t\t\t\t\t";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 142, $this->source); })()), "type", [], "any", false, false, false, 142), "html", null, true);
            echo "</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Nombre de pièces:</strong>
\t\t\t\t\t";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 145, $this->source); })()), "rooms", [], "any", false, false, false, 145), "html", null, true);
            echo "</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>
\t\t\t\t\t\t";
            // line 148
            if (twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 148, $this->source); })()), "furnished", [], "any", false, false, false, 148)) {
                // line 149
                echo "\t\t\t\t\t\t\tMeublé
\t\t\t\t\t\t";
            } else {
                // line 151
                echo "\t\t\t\t\t\t\tNon Meublé
\t\t\t\t\t\t";
            }
            // line 153
            echo "          </strong>
        </p>
        <p>
          <strong>Surface habitable (m²):</strong>
          ";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 157, $this->source); })()), "surface", [], "any", false, false, false, 157), "html", null, true);
            echo "
          m²
        </p>
        <p>
          <strong>Prix:</strong>
          ";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 162, $this->source); })()), "price", [], "any", false, false, false, 162), "html", null, true);
            echo "
          €
        </p>
\t\t  </div>
\t\t  <div class=\"col-md-6\">
\t\t\t  <div class=\"row text-center\">
          <div class=\"col-6\">
            <span class=\"fa-stack fa-2x text-primary\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-bed fa-stack-1x fa-inverse\"></i>
            </span>
            <h6 class=\"service-heading text-center\">
              ";
            // line 174
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 174, $this->source); })()), "bedrooms", [], "any", false, false, false, 174), null)) {
                // line 175
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 175, $this->source); })()), "bedrooms", [], "any", false, false, false, 175), "html", null, true);
                echo "
              ";
            } else {
                // line 177
                echo "                /
              ";
            }
            // line 179
            echo "              chambres</h6>
          </div>
          <div class=\"col-6\">
            <span class=\"fa-stack fa-2x text-primary\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-bath fa-stack-1x fa-inverse\"></i>
            </span>
            <h6 class=\"service-heading text-center\">
              ";
            // line 187
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 187, $this->source); })()), "bathrooms", [], "any", false, false, false, 187), null)) {
                // line 188
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 188, $this->source); })()), "bathrooms", [], "any", false, false, false, 188), "html", null, true);
                echo "
              ";
            } else {
                // line 190
                echo "                /
              ";
            }
            // line 192
            echo "              SDB</h6>
          </div>
          <p class=\"mt-4\">";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 194, $this->source); })()), "description", [], "any", false, false, false, 194), "html", null, true);
            echo "</p>
          <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros.</p>
\t\t\t  </div>
      </div>
    </div>
    <!-- LOCALISATION + PERFORMANCES ENERGETIQUES-->
    <div class=\"row d-flex justify-content-between\">
      <div class=\"col-md-5\">
        <h5 class=\"py-1 my-1\">LOCALISATION</h5>
        <p class=\"mt-4 text-left\">
          <i class=\"fas fa-map-pin\" width:\"20\"></i>
            ";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 205, $this->source); })()), "adress", [], "any", false, false, false, 205), "html", null, true);
            echo "
        </p>
        <div class=\"googlemap h-100 mb-5 pb-md-0\">
          <iframe src=\"";
            // line 208
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 208, $this->source); })()), "googlemap", [], "any", false, false, false, 208), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen=\"\" class=\"w-100\"></iframe>
        </div>
      </div>
      <div class=\"col-md-7 my-5 my-md-0 px-0\">
        <h5 class=\"py-1 pt-md-5 mt-5 py-md-0 my-md-1\">PERFORMANCES ENERGETIQUES</h5>
        <div class=\"row\">
          <div class=\"col-6\">
            <p class=\"mt-4\">
              <strong>Valeur DPE:</strong>
            </p>
            <img class=\"w-100\" src=\"../img/homepage/dpe.png\" alt=\"\">
          </div>
          <div class=\"col-6\">
            <p class=\"mt-4\">
              <strong>Valeur GES:</strong>
            </p>
            <img class=\"w-100\" src=\"../img/homepage/ges.png\" alt=\"\">
          </div>
        </div>
      </div>
    </div>
  </section>

";
        } else {
            // line 232
            echo "
  <div class=\"container text-center my-5\">
    <p>Le bien recherché n'est plus disponible. Retour à la liste des <a href=\"";
            // line 234
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["lienService"]) || array_key_exists("lienService", $context) ? $context["lienService"] : (function () { throw new RuntimeError('Variable "lienService" does not exist.', 234, $this->source); })()));
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 234, $this->source); })()), "service", [], "any", false, false, false, 234), "html", null, true);
            echo "s </a></p>.
  </div>

";
        }
        // line 238
        echo "  
  <!--Autres bien-->
  <section class=\"bg-light page-section container-fluid\" id=\"portfolio\">
    <div class=\"container\">
      ";
        // line 242
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 243
            echo "        <!-- Pour les membres on affiche les maisons exclusives également -->
        ";
            // line 244
            $context["lasthomes"] = (isset($context["exclusiveHomes"]) || array_key_exists("exclusiveHomes", $context) ? $context["exclusiveHomes"] : (function () { throw new RuntimeError('Variable "exclusiveHomes" does not exist.', 244, $this->source); })());
        } else {
            // line 245
            echo "        ";
            $context["lasthomes"] = (isset($context["recentHomes"]) || array_key_exists("recentHomes", $context) ? $context["recentHomes"] : (function () { throw new RuntimeError('Variable "recentHomes" does not exist.', 245, $this->source); })());
            // line 246
            echo "      ";
        }
        // line 247
        echo "      <div class=\"row row-cols-1 row-cols-md-4\">
        ";
        // line 248
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasthomes"]) || array_key_exists("lasthomes", $context) ? $context["lasthomes"] : (function () { throw new RuntimeError('Variable "lasthomes" does not exist.', 248, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["lasthome"]) {
            // line 249
            echo "          <div class=\"col-md-4 mb-4\">
            ";
            // line 250
            $this->loadTemplate("shared/homeItem.html.twig", "homes/home.html.twig", 250)->display(twig_array_merge($context, ["home" => $context["lasthome"]]));
            // line 251
            echo "          </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lasthome'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "      </div>
    </div>
  </section>
  
  <!--FORMULAIRE DE CONTACT-->
  <section class=\"container-fluid page-section mt-3\" id=\"bg-form\">
    <div class=\"contact container\">
      <div class=\"row pt-2\">
        <div class=\"col-1\"></div>
        <div class=\"col-md-4\">
          <h2 class=\"pb-3\">Notre agence</h2>
          <p>
            <i class=\"fas fa-map-pin fa-inverse\"></i>
            1 place de l'Homme de fer
            <br>67000, STRASBOURG</p>
          <p>
            <i class=\"fas fa-phone-alt fa-inverse\"></i>
            03 88 67 48 51</p>
          <p>
            <i class=\"fas fa-envelope fa-inverse\"></i>
            agenceimmowf3@gmail.com</p>
          <span>Du lundi au vendredi:
            <span>
              <i>de 9h00 à 17h00</i>
            </span>
          </span>
          <p>Le samedi:
            <span>
              <i>de 9h00 à 13h00</i>
            </span>
          </p>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
        </div>
        <div class=\"col-md-6\" id=\"prendreContact\">
          <div class=\"row\">
            <div class=\"col-lg-12 pb-2\">
              <h2 class=\"section-heading text-uppercase pb-3 text-center pt-2 pt-md-0\">Contactez-nous</h2>
              <form method=\"POST\">
                <div class=\"form-group\">
                  <div class=\"row\">
                    <div class=\"col-md-6\">
                      <input type=\"hidden\" name=\"homeid\" value=\"";
        // line 294
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 294, $this->source); })()), "id", [], "any", false, false, false, 294), "html", null, true);
        echo "\"></input>
                    <input class=\"form-control\" name=\"lastname\" type=\"text\" placeholder=\"Nom\" required=\"required\" data-validation-required-message=\"Entrez votre nom.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"col-md-6\">
                    <input class=\"form-control\" name=\"firstname\" type=\"text\" placeholder=\"Prénom\" required=\"required\" data-validation-required-message=\"Entrez votre prénom.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"email\" type=\"email\" minlength=\"5\" placeholder=\"abc@exemple.com\" required=\"required\" data-validation-required-message=\"Entrez votre adresse e-mail.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"phone\" type=\"tel\" minlength=\"10\" placeholder=\"Numéro de téléphone (facultatif)\">
                  <p class=\"help-block text-danger\"></p>
                </div>
                <div class=\"form-group\">
                  <textarea class=\"form-control\" name=\"message\" placeholder=\"Nous vous écoutons...\" rows=\"8\" minlength=\"30\" required=\"required\" data-validation-required-message=\"Entrez votre message\"></textarea>
                  <p class=\"help-block text-danger\"></p>
                </div>
                <button id=\"submit\" class=\"btn btn-warning btn-xl text-uppercase float-right text-light\" type=\"submit\">Envoyer</button>
              </div>
              <div class=\"col-1\"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Javascript-->
  <div id=\"fb-root\"></div>
  <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
  
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
        return array (  645 => 294,  602 => 253,  587 => 251,  585 => 250,  582 => 249,  565 => 248,  562 => 247,  559 => 246,  556 => 245,  553 => 244,  550 => 243,  548 => 242,  542 => 238,  533 => 234,  529 => 232,  502 => 208,  496 => 205,  482 => 194,  478 => 192,  474 => 190,  468 => 188,  466 => 187,  456 => 179,  452 => 177,  446 => 175,  444 => 174,  429 => 162,  421 => 157,  415 => 153,  411 => 151,  407 => 149,  405 => 148,  399 => 145,  393 => 142,  387 => 139,  377 => 132,  372 => 130,  367 => 128,  352 => 116,  347 => 113,  344 => 112,  336 => 108,  328 => 104,  325 => 103,  323 => 102,  314 => 96,  310 => 95,  305 => 93,  300 => 91,  295 => 89,  292 => 88,  288 => 86,  286 => 85,  281 => 83,  278 => 82,  275 => 81,  269 => 78,  260 => 77,  257 => 76,  254 => 75,  251 => 74,  248 => 73,  245 => 72,  242 => 71,  239 => 70,  237 => 69,  229 => 63,  225 => 61,  223 => 60,  216 => 56,  209 => 52,  206 => 51,  192 => 50,  184 => 47,  181 => 46,  173 => 43,  170 => 42,  168 => 41,  165 => 40,  148 => 39,  143 => 37,  133 => 30,  126 => 26,  122 => 25,  116 => 22,  109 => 17,  107 => 16,  104 => 15,  100 => 13,  96 => 11,  94 => 10,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}
\tPAGE DE BIEN
{% endblock %}

{% block body %}


{# On défini le chemin du service #}
{% if home.service == \"location\" %}
  {% set lienService = 'renting' %}
{% else %}
  {% set lienService = 'buy' %}
{% endif %}

{% if home.active > 0 and home.active < 3 %}

\t<section class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"{{ path('index') }}\">Accueil</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t\t<a href=\"{{ path(lienService) }}\">
            {{ home.service|capitalize }}  
          </a>
\t\t\t\t</li>
\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Réf.
\t\t\t\t\t{{ home.id }}</li>
\t\t\t</ol>
\t\t</nav>

\t\t<!--Carousel HOME-->
\t\t<div class=\"row pt-3 pb-5 carousel-height\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div id=\"carouselExampleControls{{home.id}}\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
\t\t\t\t\t<div class=\"carousel-inner \">
\t\t\t\t\t\t{% for picture in home.pictures %}

\t\t\t\t\t\t\t{% if loop.first %}
\t\t\t\t\t\t\t\t<div class=\"carousel-item active cover\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('img/homes/'~picture) }}\" target=\"_blank\"><img class=\"d-block w-100 \" src=\"{{ asset('img/homes/'~picture) }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"carousel-item cover\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ asset('img/homes/'~picture) }}\" target=\"_blank\"><img class=\"d-block w-100\" src=\"{{ asset('img/homes/'~picture) }}\" alt=\"\"></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>
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
      <div id=\"homeuniquedescription\" class=\"col-md-4 bg-light text-center py-5\">
        <div class=\"heartContainer my-3\">
          {% if app.User %}
            {% set likeClass = \"far\" %}
            {% set likeAction = \"0\" %}
            {% if home in app.user.likes %}
              {% set likeClass = \"fas\" %}
              {% set likeAction = \"1\" %}
            {% endif %}
            {% if heart is not defined or heart != 'no' %}
              <a href=\"\" id=\"heart{{home.id}}\" class=\"heart\" data-id=\"{{home.id}}\" data-liked=\"{{likeAction}}\">
                <i class=\"{{likeClass}} fa-heart\"></i>
              </a>
            {% endif %}
          {% endif %}
        </div>
        <h3>{{ home.price|price }}
          €
          {% if home.service == 'location' %}
            / mois CC
          {% endif %}
        </h3>
        <p>{{ home.type }}
          de
          {{ home.rooms }}
          pièces,
          {{ home.surface }}
          m²</p>
        <p>{{ home.adress }}</p>
        <p>Réf : #{{ home.id }}</p>
        <a href=\"#prendreContact\" class=\"btn btn-warning text-uppercase w-100\">
          <i class=\"fas fa-phone fa-inverse\"></i>
          <span class=\"rdv\">
            Prendre rdv</span>
        </a>
        {% if app.user %}
          {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('homeCrud', {id: home.id}) }}\" class=\"btn btn-danger my-3 w-100\">
              <span class=\"rdv\">Modifier l'annonce</span>
            </a>
          {% else %}
            <a href=\"{{ path('interested', {id: home.id}) }}\" class=\"btn btn-warning my-3 w-100\">
              <span class=\"rdv\">Candidature simplifiée</span>
            </a>
          {% endif %}
        {% endif %}

        <div class=\"row\">
          <div class=\"col-12\">
            <div class=\"fb-share-button\" data-href=\"{{ absolute_url(path('home',{ id:home.id })) }}\" data-layout=\"button_count\" data-size=\"small\">
              <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fhome%2F6&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                <i class=\"fab fa-facebook-square fa-stack-4x\"></i>
              </a>
            </div>
        </div>
      </div>\t\t\t
    </div>
    <!--CARACTERISTIQUES-->
\t\t<div class=\"row pt-3 pb-5 d-flex justify-content-center\">
      <div class=\"col-12 text-center\">
        <h2>
          <p class=\"pt-3\">{{ home.type }}
            de
            {{ home.rooms }}
            pièces,
            {{ home.surface }}
            m²</p>
        </h2>
      </div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<p class=\"mt-4\">
\t\t\t\t\t<strong>Prestation:</strong>
\t\t\t\t\t{{ home.service }}</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Type de bien immobilier:</strong>
\t\t\t\t\t{{ home.type }}</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>Nombre de pièces:</strong>
\t\t\t\t\t{{ home.rooms }}</p>
\t\t\t\t<p>
\t\t\t\t\t<strong>
\t\t\t\t\t\t{% if home.furnished %}
\t\t\t\t\t\t\tMeublé
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\tNon Meublé
\t\t\t\t\t\t{% endif %}
          </strong>
        </p>
        <p>
          <strong>Surface habitable (m²):</strong>
          {{ home.surface }}
          m²
        </p>
        <p>
          <strong>Prix:</strong>
          {{ home.price }}
          €
        </p>
\t\t  </div>
\t\t  <div class=\"col-md-6\">
\t\t\t  <div class=\"row text-center\">
          <div class=\"col-6\">
            <span class=\"fa-stack fa-2x text-primary\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-bed fa-stack-1x fa-inverse\"></i>
            </span>
            <h6 class=\"service-heading text-center\">
              {% if home.bedrooms != NULL %}
                {{ home.bedrooms }}
              {% else %}
                /
              {% endif %}
              chambres</h6>
          </div>
          <div class=\"col-6\">
            <span class=\"fa-stack fa-2x text-primary\">
              <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
              <i class=\"fas fa-bath fa-stack-1x fa-inverse\"></i>
            </span>
            <h6 class=\"service-heading text-center\">
              {% if home.bathrooms != NULL %}
                {{ home.bathrooms }}
              {% else %}
                /
              {% endif %}
              SDB</h6>
          </div>
          <p class=\"mt-4\">{{ home.description }}</p>
          <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros.</p>
\t\t\t  </div>
      </div>
    </div>
    <!-- LOCALISATION + PERFORMANCES ENERGETIQUES-->
    <div class=\"row d-flex justify-content-between\">
      <div class=\"col-md-5\">
        <h5 class=\"py-1 my-1\">LOCALISATION</h5>
        <p class=\"mt-4 text-left\">
          <i class=\"fas fa-map-pin\" width:\"20\"></i>
            {{ home.adress }}
        </p>
        <div class=\"googlemap h-100 mb-5 pb-md-0\">
          <iframe src=\"{{ home.googlemap }}\" frameborder=\"0\" allowfullscreen=\"\" class=\"w-100\"></iframe>
        </div>
      </div>
      <div class=\"col-md-7 my-5 my-md-0 px-0\">
        <h5 class=\"py-1 pt-md-5 mt-5 py-md-0 my-md-1\">PERFORMANCES ENERGETIQUES</h5>
        <div class=\"row\">
          <div class=\"col-6\">
            <p class=\"mt-4\">
              <strong>Valeur DPE:</strong>
            </p>
            <img class=\"w-100\" src=\"../img/homepage/dpe.png\" alt=\"\">
          </div>
          <div class=\"col-6\">
            <p class=\"mt-4\">
              <strong>Valeur GES:</strong>
            </p>
            <img class=\"w-100\" src=\"../img/homepage/ges.png\" alt=\"\">
          </div>
        </div>
      </div>
    </div>
  </section>

{% else %}

  <div class=\"container text-center my-5\">
    <p>Le bien recherché n'est plus disponible. Retour à la liste des <a href=\"{{ path(lienService) }}\"> {{home.service}}s </a></p>.
  </div>

{% endif %}
  
  <!--Autres bien-->
  <section class=\"bg-light page-section container-fluid\" id=\"portfolio\">
    <div class=\"container\">
      {% if is_granted('ROLE_USER') %}
        <!-- Pour les membres on affiche les maisons exclusives également -->
        {% set lasthomes = exclusiveHomes %}{% else %}
        {% set lasthomes = recentHomes %}
      {% endif %}
      <div class=\"row row-cols-1 row-cols-md-4\">
        {% for lasthome in lasthomes %}
          <div class=\"col-md-4 mb-4\">
            {% include 'shared/homeItem.html.twig' with {home: lasthome} %}
          </div>
        {% endfor %}
      </div>
    </div>
  </section>
  
  <!--FORMULAIRE DE CONTACT-->
  <section class=\"container-fluid page-section mt-3\" id=\"bg-form\">
    <div class=\"contact container\">
      <div class=\"row pt-2\">
        <div class=\"col-1\"></div>
        <div class=\"col-md-4\">
          <h2 class=\"pb-3\">Notre agence</h2>
          <p>
            <i class=\"fas fa-map-pin fa-inverse\"></i>
            1 place de l'Homme de fer
            <br>67000, STRASBOURG</p>
          <p>
            <i class=\"fas fa-phone-alt fa-inverse\"></i>
            03 88 67 48 51</p>
          <p>
            <i class=\"fas fa-envelope fa-inverse\"></i>
            agenceimmowf3@gmail.com</p>
          <span>Du lundi au vendredi:
            <span>
              <i>de 9h00 à 17h00</i>
            </span>
          </span>
          <p>Le samedi:
            <span>
              <i>de 9h00 à 13h00</i>
            </span>
          </p>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
        </div>
        <div class=\"col-md-6\" id=\"prendreContact\">
          <div class=\"row\">
            <div class=\"col-lg-12 pb-2\">
              <h2 class=\"section-heading text-uppercase pb-3 text-center pt-2 pt-md-0\">Contactez-nous</h2>
              <form method=\"POST\">
                <div class=\"form-group\">
                  <div class=\"row\">
                    <div class=\"col-md-6\">
                      <input type=\"hidden\" name=\"homeid\" value=\"{{ home.id }}\"></input>
                    <input class=\"form-control\" name=\"lastname\" type=\"text\" placeholder=\"Nom\" required=\"required\" data-validation-required-message=\"Entrez votre nom.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                  <div class=\"col-md-6\">
                    <input class=\"form-control\" name=\"firstname\" type=\"text\" placeholder=\"Prénom\" required=\"required\" data-validation-required-message=\"Entrez votre prénom.\">
                    <p class=\"help-block text-danger\"></p>
                  </div>
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"email\" type=\"email\" minlength=\"5\" placeholder=\"abc@exemple.com\" required=\"required\" data-validation-required-message=\"Entrez votre adresse e-mail.\">
                  <p class=\"help-block text-danger\"></p>
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" name=\"phone\" type=\"tel\" minlength=\"10\" placeholder=\"Numéro de téléphone (facultatif)\">
                  <p class=\"help-block text-danger\"></p>
                </div>
                <div class=\"form-group\">
                  <textarea class=\"form-control\" name=\"message\" placeholder=\"Nous vous écoutons...\" rows=\"8\" minlength=\"30\" required=\"required\" data-validation-required-message=\"Entrez votre message\"></textarea>
                  <p class=\"help-block text-danger\"></p>
                </div>
                <button id=\"submit\" class=\"btn btn-warning btn-xl text-uppercase float-right text-light\" type=\"submit\">Envoyer</button>
              </div>
              <div class=\"col-1\"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Javascript-->
  <div id=\"fb-root\"></div>
  <script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v6.0\"></script>
  
{% endblock %}
", "homes/home.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\home.html.twig");
    }
}
