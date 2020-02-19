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
class __TwigTemplate_be7700d71104dc18045ab68b7cc911c33783fbeb2d484ba21598ff63d3cba933 extends Template
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

        echo " PAGE DE BIEN ";
        
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
 
  <section class=\"container\">
 ";
        // line 15
        echo "
    <!--Carousel HOME-->
    <div class=\"row px-3 px-3 carousel-height\">
      <div class=\"col-8 bg-light\">
        <div id=\"carouselExampleControls";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
        echo "\" class=\"carousel slide overflow-hidden\" data-ride=\"carousel\">
            <div class=\"carousel-inner \">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 21, $this->source); })()), "pictures", [], "any", false, false, false, 21));
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
            // line 22
            echo "                
                    ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 23)) {
                // line 24
                echo "                        <div class=\"carousel-item active cover\">
                            <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" target=\"_blank\"><img class=\"d-block w-100 \" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            } else {
                // line 28
                echo "                        <div class=\"carousel-item cover\">
                            <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" target=\"_blank\"><img class=\"d-block w-100\" src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/homes/" . $context["picture"])), "html", null, true);
                echo "\" alt=\"\"></a>
                        </div>
                    ";
            }
            // line 32
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
        // line 33
        echo "                </a>
            </div>
            <a class=\"carousel-control-prev\" href=\"#carouselExampleControls";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35), "html", null, true);
        echo "\" role=\"button\" data-slide=\"prev\">
                <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Previous</span>
            </a>
            <a class=\"carousel-control-next\" href=\"#carouselExampleControls";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        echo "\" role=\"button\" data-slide=\"next\">
                <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                <span class=\"sr-only\">Next</span>
            </a>
            ";
        // line 43
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 43, $this->source); })()), "active", [], "any", false, false, false, 43), 2)) {
            // line 44
            echo "                <span class=\"exclusive badge badge-warning text-white\">Exclusivité</span>
            ";
        }
        // line 46
        echo "        </div>
      </div>

      <!--Description HOME-->
      <div class=\"col-4 bg-light text-center py-5\">
        <h3>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['App\Twig\FiltersExtension']->formatPrice(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51)), "html", null, true);
        echo " € ";
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 51, $this->source); })()), "service", [], "any", false, false, false, 51), "location")) {
            echo " / mois CC ";
        }
        echo "</h3>
        <p>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 52, $this->source); })()), "type", [], "any", false, false, false, 52), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 52, $this->source); })()), "rooms", [], "any", false, false, false, 52), "html", null, true);
        echo " pièces, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 52, $this->source); })()), "surface", [], "any", false, false, false, 52), "html", null, true);
        echo " m²</p>
        <p>";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 53, $this->source); })()), "adress", [], "any", false, false, false, 53), "html", null, true);
        echo "</p>
        <p>Réf.";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54), "html", null, true);
        echo "</p>
        <button id=\"submit\" class=\"btn btn-warning fa-stack-1x text-uppercase px-1\" type=\"submit\">
          <a href=\"#prendreContact\">
            <i class=\"fas fa-phone fa-inverse\"></i><span class=\"rdv\"> prendre rdv</span>
          </a>
        </button> <br>
        <div class=\"row d-flex justify-content-center\">
          <div class=\"partager col-12\">
            <p class=\"text-dark pt-5\"><b>Partagez</b></p>
          </div>
          <div class=\"row d-flex justify-content-center\">
            <div class=\"partager col-12\">
              <div class=\"fb-share-button\" data-href= \"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66)])), "html", null, true);
        echo "\" data-layout=\"button_count\" data-size=\"small\">
                <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fhome%2F6&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                  <i class=\"fab fa-facebook-square fa-stack-4x\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h2><p class=\"pt-3\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 76, $this->source); })()), "type", [], "any", false, false, false, 76), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 76, $this->source); })()), "rooms", [], "any", false, false, false, 76), "html", null, true);
        echo " pièces, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 76, $this->source); })()), "surface", [], "any", false, false, false, 76), "html", null, true);
        echo " m²</p></h2>
      <!--CARACTERISTIQUES-->
      <div class=\"row pt-3 pb-5 d-flex justify-content-center\">
        <div class=\"col-6\">
          <p class=\"mt-4\"><strong>Prestation:</strong> ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 80, $this->source); })()), "service", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>
          <p><strong>Type de bien immobilier:</strong> ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 81, $this->source); })()), "type", [], "any", false, false, false, 81), "html", null, true);
        echo "</p>
          <p><strong>Nombre de pièces:</strong> ";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 82, $this->source); })()), "rooms", [], "any", false, false, false, 82), "html", null, true);
        echo "</p>
          <p><strong>";
        // line 83
        if (twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 83, $this->source); })()), "furnished", [], "any", false, false, false, 83)) {
            // line 84
            echo "            Meublé
            ";
        } else {
            // line 86
            echo "            Non Meublé
            ";
        }
        // line 88
        echo "          </p></strong>
          <p><strong>Surface habitable (m²):</strong> ";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 89, $this->source); })()), "surface", [], "any", false, false, false, 89), "html", null, true);
        echo " m²</p>
          <p><strong>Prix:</strong> ";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 90, $this->source); })()), "price", [], "any", false, false, false, 90), "html", null, true);
        echo " €</p>
        </div>
        <div class=\"col-6\">
          <div class=\"row\">
            \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-bed fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">";
        // line 99
        echo " chambres</h6>
              </div>
              \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-bath fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">";
        // line 106
        echo "SDB</h6>
              </div>
              \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-toilet fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">";
        // line 113
        echo " 1 WC</h6>
              </div>
              \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-warehouse fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">";
        // line 120
        echo " 1 garage</h6>
              </div>
          </div>
         <p class=\"mt-4 text-justify\">";
        // line 123
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 123, $this->source); })()), "description", [], "any", false, false, false, 123), "html", null, true);
        echo "</p>
         <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros.</span></p>
        </div>
      </div>

      <!-- LOCALISATION + PERFORMANCES ENERGETIQUES-->
      <div class=\"row d-flex justify-content-between\">
        <div class=\"col-5\">
        <h5 class=\"py-1 my-1\">LOCALISATION</h5>
          <p class=\"mt-4 text-left\"><i class=\"fas fa-map-pin\" width:\"20\"> ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 132, $this->source); })()), "adress", [], "any", false, false, false, 132), "html", null, true);
        echo "</p></i>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5657224.630597427!2d0.6727440255702806!3d46.184255843869124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.589213699999995!2d7.7489254!4m5!1s0x12c9c085ab77f10f%3A0xa0c2c05d7e57cfc7!2s45%20Rue%20Despieds%2C%2013003%20Marseille!3m2!1d43.311666699999996!2d5.386066!5e0!3m2!1sfr!2sfr!4v1581070905242!5m2!1sfr!2sfr\" width=\"350\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
        </div>
        <div class=\"col-7\">
          <h5 class=\"py-1 my-1\">PERFORMANCES ENERGETIQUES</h5>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur DPE:</strong></p>
                    <img class=\"w-100\" src=\"../img/homepage/dpe.png\" alt=\"\">
                  </div>
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur GES:</strong></p>
                    <img class=\"w-100\" src=\"../img/homepage/ges.png\" alt=\"\">
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Autres bien-->
      <section class=\"bg-light page-section\" id=\"portfolio\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12 text-center\">

            ";
        // line 159
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 160
            echo "              <!-- Pour les membres on affiche les maisons exclusives également -->
              ";
            // line 161
            $context["lasthomes"] = (isset($context["exclusiveHomes"]) || array_key_exists("exclusiveHomes", $context) ? $context["exclusiveHomes"] : (function () { throw new RuntimeError('Variable "exclusiveHomes" does not exist.', 161, $this->source); })());
            // line 162
            echo "            ";
        } else {
            // line 163
            echo "              ";
            $context["lasthomes"] = (isset($context["recentHomes"]) || array_key_exists("recentHomes", $context) ? $context["recentHomes"] : (function () { throw new RuntimeError('Variable "recentHomes" does not exist.', 163, $this->source); })());
            // line 164
            echo "            ";
        }
        echo " 

            <div class=\"row row-cols-1 row-cols-md-4\">
              ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lasthomes"]) || array_key_exists("lasthomes", $context) ? $context["lasthomes"] : (function () { throw new RuntimeError('Variable "lasthomes" does not exist.', 167, $this->source); })()));
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
            // line 168
            echo "              ";
            $this->loadTemplate("shared/homeItem.html.twig", "homes/home.html.twig", 168)->display(twig_array_merge($context, ["home" => $context["lasthome"]]));
            // line 169
            echo "              ";
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
        // line 170
        echo "            </div>
            <div class=\"row\">
              <div class=\"col-12 text-center mt-5\">
                <a href=\"";
        // line 173
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy");
        echo "\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-info\">en vente </span></a>
                <a href=\"";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting");
        echo "\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-success\">en location </span></a>
              </div>
            </div>
             ";
        // line 187
        echo "          </div>
      </section>

      <!--FORMULAIRE DE CONTACT-->
      <section class=\"container-fluid page-section mt-3\" id=\"bg-form\">
        <div class=\"contact container\">
          <div class=\"row\">
            <div class=\"col-1\"></div>
              <div class=\"col-4\">
                <h2 class=\"pb-3\">Notre agence</h2>
                <p><i class=\"fas fa-map-marker-alt fa-inverse\"></i> 1 place de l'Homme de fer <br>67000, STRASBOURG</p>
                <p><i class=\"fas fa-phone-alt fa-inverse\"></i> 03 88 67 48 51</p>
                <p><i class=\"fas fa-envelope fa-inverse\"></i> agenceimmowf3@gmail.com</p>
                <span>Du lundi au vendredi: <span><i>de 9h00 à 17h00</i></span></span>
                <p>Le samedi: <span><i>de 9h00 à 13h00</i></span></p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
              </div>
              <div class=\"col-6\" id=\"prendreContact\">
                <div class=\"row\"> 
                  <div class=\"col-lg-12 pb-2\">
                    <h2 class=\"section-heading text-uppercase pb-3 text-center\" >Contactez-nous</h2>
                    <form method=\"POST\">
                      <div class=\"form-group\">
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            <input type=\"hidden\" name=\"homeid\" value=\"";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 212, $this->source); })()), "id", [], "any", false, false, false, 212), "html", null, true);
        echo "\"></input>
                            <input class=\"form-control\" id=\"lastname\" type=\"text\" placeholder=\"Nom\" required=\"required\" data-validation-required-message=\"Entrez votre nom.\">
                            <p class=\"help-block text-danger\"></p>
                          </div>
                          <div class=\"col-md-6\">
                            <input class=\"form-control\" id=\"firstname\" type=\"text\" placeholder=\"Prénom\" required=\"required\" data-validation-required-message=\"Entrez votre prénom.\">
                            <p class=\"help-block text-danger\"></p>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <input class=\"form-control\" id=\"email\" type=\"email\" minlength=\"5\" placeholder=\"abc@exemple.com\" required=\"required\" data-validation-required-message=\"Entrez votre adresse e-mail.\">
                          <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                          <input class=\"form-control\" id=\"phone\" type=\"tel\" minlength=\"10\" placeholder=\"Numéro de téléphone (facultatif)\">
                          <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                          <textarea class=\"form-control\" id=\"message\" placeholder=\"Nous vous écoutons...\" rows=\"8\" minlength=\"30\" required=\"required\" data-validation-required-message=\"Entrez votre message\"></textarea>
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
            </div>
          </div>
        </section>
        
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
        return array (  463 => 212,  436 => 187,  430 => 174,  426 => 173,  421 => 170,  407 => 169,  404 => 168,  387 => 167,  380 => 164,  377 => 163,  374 => 162,  372 => 161,  369 => 160,  367 => 159,  337 => 132,  325 => 123,  320 => 120,  311 => 113,  302 => 106,  293 => 99,  281 => 90,  277 => 89,  274 => 88,  270 => 86,  266 => 84,  264 => 83,  260 => 82,  256 => 81,  252 => 80,  241 => 76,  228 => 66,  213 => 54,  209 => 53,  201 => 52,  193 => 51,  186 => 46,  182 => 44,  180 => 43,  173 => 39,  166 => 35,  162 => 33,  148 => 32,  140 => 29,  137 => 28,  129 => 25,  126 => 24,  124 => 23,  121 => 22,  104 => 21,  99 => 19,  93 => 15,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} PAGE DE BIEN {% endblock %}

  {% block body %}

 
  <section class=\"container\">
 {#     <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
          <li class=\"breadcrumb-item\"><a href=\"#\">{{ home.service }}</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Réf. {{ home.id }}</li>
        </ol>
      </nav> #}

    <!--Carousel HOME-->
    <div class=\"row px-3 px-3 carousel-height\">
      <div class=\"col-8 bg-light\">
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
      </div>

      <!--Description HOME-->
      <div class=\"col-4 bg-light text-center py-5\">
        <h3>{{ home.price|price }} € {% if home.service == 'location' %} / mois CC {% endif %}</h3>
        <p>{{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m²</p>
        <p>{{ home.adress }}</p>
        <p>Réf.{{ home.id }}</p>
        <button id=\"submit\" class=\"btn btn-warning fa-stack-1x text-uppercase px-1\" type=\"submit\">
          <a href=\"#prendreContact\">
            <i class=\"fas fa-phone fa-inverse\"></i><span class=\"rdv\"> prendre rdv</span>
          </a>
        </button> <br>
        <div class=\"row d-flex justify-content-center\">
          <div class=\"partager col-12\">
            <p class=\"text-dark pt-5\"><b>Partagez</b></p>
          </div>
          <div class=\"row d-flex justify-content-center\">
            <div class=\"partager col-12\">
              <div class=\"fb-share-button\" data-href= \"{{ absolute_url(path('home',{ id:home.id })) }}\" data-layout=\"button_count\" data-size=\"small\">
                <a target=\"_blank\" href=\"https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F127.0.0.1%3A8000%2Fhome%2F6&amp;src=sdkpreparse\" class=\"fb-xfbml-parse-ignore\">
                  <i class=\"fab fa-facebook-square fa-stack-4x\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h2><p class=\"pt-3\">{{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m²</p></h2>
      <!--CARACTERISTIQUES-->
      <div class=\"row pt-3 pb-5 d-flex justify-content-center\">
        <div class=\"col-6\">
          <p class=\"mt-4\"><strong>Prestation:</strong> {{ home.service }}</p>
          <p><strong>Type de bien immobilier:</strong> {{ home.type }}</p>
          <p><strong>Nombre de pièces:</strong> {{ home.rooms }}</p>
          <p><strong>{% if home.furnished %}
            Meublé
            {% else %}
            Non Meublé
            {% endif %}
          </p></strong>
          <p><strong>Surface habitable (m²):</strong> {{ home.surface }} m²</p>
          <p><strong>Prix:</strong> {{ home.price }} €</p>
        </div>
        <div class=\"col-6\">
          <div class=\"row\">
            \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-bed fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">{# {{ home.bedroom }} #} chambres</h6>
              </div>
              \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-bath fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">{#{{ home.bathroom}} #}SDB</h6>
              </div>
              \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-toilet fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">{#{{ home.toilet}} #} 1 WC</h6>
              </div>
              \t<div class=\"col-md-3\">
                <span class=\"fa-stack fa-2x text-primary\">
                  <i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
                  <i class=\"fas fa-warehouse fa-stack-1x fa-inverse\"></i>
                </span>
               <h6 class=\"service-heading text-center\">{#{{ home.warehouse}} #} 1 garage</h6>
              </div>
          </div>
         <p class=\"mt-4 text-justify\">{{ home.description }}</p>
         <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros.</span></p>
        </div>
      </div>

      <!-- LOCALISATION + PERFORMANCES ENERGETIQUES-->
      <div class=\"row d-flex justify-content-between\">
        <div class=\"col-5\">
        <h5 class=\"py-1 my-1\">LOCALISATION</h5>
          <p class=\"mt-4 text-left\"><i class=\"fas fa-map-pin\" width:\"20\"> {{ home.adress }}</p></i>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5657224.630597427!2d0.6727440255702806!3d46.184255843869124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.589213699999995!2d7.7489254!4m5!1s0x12c9c085ab77f10f%3A0xa0c2c05d7e57cfc7!2s45%20Rue%20Despieds%2C%2013003%20Marseille!3m2!1d43.311666699999996!2d5.386066!5e0!3m2!1sfr!2sfr!4v1581070905242!5m2!1sfr!2sfr\" width=\"350\" height=\"300\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
        </div>
        <div class=\"col-7\">
          <h5 class=\"py-1 my-1\">PERFORMANCES ENERGETIQUES</h5>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur DPE:</strong></p>
                    <img class=\"w-100\" src=\"../img/homepage/dpe.png\" alt=\"\">
                  </div>
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur GES:</strong></p>
                    <img class=\"w-100\" src=\"../img/homepage/ges.png\" alt=\"\">
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Autres bien-->
      <section class=\"bg-light page-section\" id=\"portfolio\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12 text-center\">

            {% if is_granted('ROLE_USER') %}
              <!-- Pour les membres on affiche les maisons exclusives également -->
              {% set lasthomes = exclusiveHomes %}
            {% else %}
              {% set lasthomes = recentHomes %}
            {% endif %} 

            <div class=\"row row-cols-1 row-cols-md-4\">
              {% for lasthome in lasthomes %}
              {% include 'shared/homeItem.html.twig' with {home: lasthome} %}
              {% endfor %}
            </div>
            <div class=\"row\">
              <div class=\"col-12 text-center mt-5\">
                <a href=\"{{ path('buy') }}\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-info\">en vente </span></a>
                <a href=\"{{ path('renting') }}\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-success\">en location </span></a>
              </div>
            </div>
             {# <div class=\"heartContainer\">
            {% if app.User %}
                {% set likeClass = \"far\" %}
                {% set likeAction = \"0\" %}
                {% if home in app.user.likes %}
                    {% set likeClass = \"fas\" %}
                    {% set likeAction = \"1\" %}
                {% endif %}
                <a href=\"\" id=\"heart{{home.id}}\" class=\"heart\" data-id=\"{{home.id}}\" data-liked=\"{{likeAction}}\"><i class=\"{{likeClass}} fa-heart\"></i></a>
            {% endif %} #}
          </div>
      </section>

      <!--FORMULAIRE DE CONTACT-->
      <section class=\"container-fluid page-section mt-3\" id=\"bg-form\">
        <div class=\"contact container\">
          <div class=\"row\">
            <div class=\"col-1\"></div>
              <div class=\"col-4\">
                <h2 class=\"pb-3\">Notre agence</h2>
                <p><i class=\"fas fa-map-marker-alt fa-inverse\"></i> 1 place de l'Homme de fer <br>67000, STRASBOURG</p>
                <p><i class=\"fas fa-phone-alt fa-inverse\"></i> 03 88 67 48 51</p>
                <p><i class=\"fas fa-envelope fa-inverse\"></i> agenceimmowf3@gmail.com</p>
                <span>Du lundi au vendredi: <span><i>de 9h00 à 17h00</i></span></span>
                <p>Le samedi: <span><i>de 9h00 à 13h00</i></span></p>
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
              </div>
              <div class=\"col-6\" id=\"prendreContact\">
                <div class=\"row\"> 
                  <div class=\"col-lg-12 pb-2\">
                    <h2 class=\"section-heading text-uppercase pb-3 text-center\" >Contactez-nous</h2>
                    <form method=\"POST\">
                      <div class=\"form-group\">
                        <div class=\"row\">
                          <div class=\"col-md-6\">
                            <input type=\"hidden\" name=\"homeid\" value=\"{{ home.id }}\"></input>
                            <input class=\"form-control\" id=\"lastname\" type=\"text\" placeholder=\"Nom\" required=\"required\" data-validation-required-message=\"Entrez votre nom.\">
                            <p class=\"help-block text-danger\"></p>
                          </div>
                          <div class=\"col-md-6\">
                            <input class=\"form-control\" id=\"firstname\" type=\"text\" placeholder=\"Prénom\" required=\"required\" data-validation-required-message=\"Entrez votre prénom.\">
                            <p class=\"help-block text-danger\"></p>
                          </div>
                        </div>
                        <div class=\"form-group\">
                          <input class=\"form-control\" id=\"email\" type=\"email\" minlength=\"5\" placeholder=\"abc@exemple.com\" required=\"required\" data-validation-required-message=\"Entrez votre adresse e-mail.\">
                          <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                          <input class=\"form-control\" id=\"phone\" type=\"tel\" minlength=\"10\" placeholder=\"Numéro de téléphone (facultatif)\">
                          <p class=\"help-block text-danger\"></p>
                        </div>
                        <div class=\"form-group\">
                          <textarea class=\"form-control\" id=\"message\" placeholder=\"Nous vous écoutons...\" rows=\"8\" minlength=\"30\" required=\"required\" data-validation-required-message=\"Entrez votre message\"></textarea>
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
            </div>
          </div>
        </section>
        
{% endblock %}", "homes/home.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\home.html.twig");
    }
}
