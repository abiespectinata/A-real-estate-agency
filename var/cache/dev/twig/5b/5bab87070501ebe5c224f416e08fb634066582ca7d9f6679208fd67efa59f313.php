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
class __TwigTemplate_6a3b71d21a3c87a8944aa5a9fd739f41ceb116e4b564bbe99521fa2612309935 extends Template
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
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
          <li class=\"breadcrumb-item\"><a href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 11, $this->source); })()), "service", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Réf. ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
        </ol>
      </nav>

    <!--Carousel HOME-->
    <div class=\"row pt-3 pb-5\">
      <div class=\"col-8\">
        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
          <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
              ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 22, $this->source); })()), "pictures", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 23
            echo "              <img class=\"w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["picture"])), "html", null, true);
            echo "\" alt=\"image\">
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </div>
          </div>
          <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>

        <!--ICI IL FAUT MINIATURES IMAGES-->
        ";
        // line 44
        echo "      </div>

      <!--Description HOME-->
      <div class=\"col-4 bg-light text-center py-5\">
        ";
        // line 58
        echo "      <h3>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 58, $this->source); })()), "price", [], "any", false, false, false, 58), "html", null, true);
        echo "€</h3>
      <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 59, $this->source); })()), "rooms", [], "any", false, false, false, 59), "html", null, true);
        echo " pièces, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 59, $this->source); })()), "surface", [], "any", false, false, false, 59), "html", null, true);
        echo " m²</p>
      <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 60, $this->source); })()), "adress", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
      <p>Réf.";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61), "html", null, true);
        echo "</p>
      <button id=\"submit\" class=\"btn btn-warning btn-x1 text-uppercase float-center py-1 mb-3SS\" type=\"submit\">
        ";
        // line 64
        echo "          <i class=\"fas fa-phone\"></i>
          <b>Prendre RDV</b>
        </a>
      </button>
      <a href=\"#\"><i class=\"fas fa-share-alt\"></i></a><p class=\"pt-5\"><b>Partage moi!</b></p>
      </div>
    </div>

      <h2><p class=\"pt-3\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 72, $this->source); })()), "type", [], "any", false, false, false, 72), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 72, $this->source); })()), "rooms", [], "any", false, false, false, 72), "html", null, true);
        echo " pièces, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 72, $this->source); })()), "surface", [], "any", false, false, false, 72), "html", null, true);
        echo " m²</p></h2>
      <!--CARACTERISTIQUES-->
      <div class=\"row pt-3 pb-5 d-flex justify-content-center\">
        <div class=\"col-6\">
          ";
        // line 77
        echo "          <p class=\"mt-4\"><strong>Prestation:</strong> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 77, $this->source); })()), "service", [], "any", false, false, false, 77), "html", null, true);
        echo "</p>
          <p><strong>Type de bien immobilier:</strong> ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 78, $this->source); })()), "type", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>
          <p><strong>Nombre de pièces:</strong> ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 79, $this->source); })()), "rooms", [], "any", false, false, false, 79), "html", null, true);
        echo "</p>
          <p><strong>";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 80, $this->source); })()), "furnished", [], "any", false, false, false, 80)) {
            // line 81
            echo "            Meublé
            ";
        } else {
            // line 83
            echo "            Non Meublé
            ";
        }
        // line 85
        echo "          </p></strong>
          <p><strong>Surface habitable (m²):</strong> ";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 86, $this->source); })()), "surface", [], "any", false, false, false, 86), "html", null, true);
        echo " m²</p>
          <p><strong>Prix:</strong> ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 87, $this->source); })()), "price", [], "any", false, false, false, 87), "html", null, true);
        echo " €</p>
        </div>
        ";
        // line 97
        echo "        <div class=\"col-6\">
          <div class=\"row\">
            <div class=\"col-3\"><i class=\"fas fa-bed\"></i><span>2 Chambres</span></div>
            <div class=\"col-3\"><i class=\"fas fa-bath\"></i><span>1 SDB</span></div>
            <div class=\"col-3\"><i class=\"fas fa-toilet\"></i><span>1 WC</span></div>
            <div class=\"col-3\"><i class=\"fas fa-warehouse\"></i><span>1 garage</span></div>
          </div>
         <p class=\"mt-4\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 104, $this->source); })()), "description", [], "any", false, false, false, 104), "html", null, true);
        echo "</p>
         <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros.</span></p>
        </div>
      </div>

      <!--PERFORMANCES ENERGETIQUES-->
      <div class=\"row d-flex justify-content-between mb-5\">
        <div class=\"col-5\">
        <h5 class=\"py-1 my-1\">LOCALISATION</h5>
          <i class=\"fas fa-map-pin\"><p class=\"mt-4 text-left\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 113, $this->source); })()), "adress", [], "any", false, false, false, 113), "html", null, true);
        echo "</p></i>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5657224.630597427!2d0.6727440255702806!3d46.184255843869124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.589213699999995!2d7.7489254!4m5!1s0x12c9c085ab77f10f%3A0xa0c2c05d7e57cfc7!2s45%20Rue%20Despieds%2C%2013003%20Marseille!3m2!1d43.311666699999996!2d5.386066!5e0!3m2!1sfr!2sfr!4v1581070905242!5m2!1sfr!2sfr\" width=\"350\" height=\"200\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
        <div class=\"col-7\">
          <h5 class=\"py-1 my-1\">PERFORMANCES ENERGETIQUES</h5>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur DPE:</strong></p>
                    ";
        // line 122
        echo "                    <img class=\"w-100\" src=\"../img/dpe.png\" alt=\"\">
                  </div>
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur GES:</strong></p>
                    <img class=\"w-100\" src=\"../img/ges.png\" alt=\"\">
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Autres bien-->
      <section class=\"container\">
        <h3 class=\"mt-5 mb-3\">Autres biens:</h3>
        <div class=\"card-deck my-5\">
          <div class=\"row\">
            <div class=\"col-3\">
              <div class=\"card\">
                ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 142, $this->source); })()), "pictures", [], "any", false, false, false, 142));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 143
            echo "                <img class=\"w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["picture"])), "html", null, true);
            echo "\" alt=\"image\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                <div class=\"card-body\">
                  ";
        // line 147
        echo "                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
                </div>
              </div>
            </div>
            <div class=\"col-3\">
              <div class=\"card\">
                ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 153, $this->source); })()), "pictures", [], "any", false, false, false, 153));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 154
            echo "                <img class=\"w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["picture"])), "html", null, true);
            echo "\" alt=\"image\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                <div class=\"card-body\">
                  ";
        // line 158
        echo "                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
               </div> 
              </div>
            </div>
            <div class=\"col-3\">
              <div class=\"card\">
                ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 164, $this->source); })()), "pictures", [], "any", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 165
            echo "                <img class=\"w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["picture"])), "html", null, true);
            echo "\" alt=\"image\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                <div class=\"card-body\">
                  ";
        // line 169
        echo "                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
                </div>
              </div>
            </div>
            <div class=\"col-3\">
              <div class=\"card\">
                ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 175, $this->source); })()), "pictures", [], "any", false, false, false, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["picture"]) {
            // line 176
            echo "                <img class=\"w-100\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("img/" . $context["picture"])), "html", null, true);
            echo "\" alt=\"image\">
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['picture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "                <div class=\"card-body\">
                  ";
        // line 180
        echo "                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
                </div>
              </div>
            </div>
          </div>
          ";
        // line 187
        echo "          <button id=\"submit\" class=\"btn btn-danger btn-x1 text-uppercase py-1 float-center my-5 \" type=\"submit\">
            <a class=\"text-light\" href=\"[[ home.renting }}\"><b>Voir d'autres annonces de location</b></a>
          </button>
          ";
        // line 197
        echo "      </div>
    </div>
  </section>

      <!--FORMULAIRE DE CONTACT-->
      <section class=\"container-fluid page-section mt-5 py-5\">
        <section class=\"container\">
          <div class=\"row\">
          <div class=\"col-1\"></div>
            <div class=\"contact col-4\">
              <h2 class=\"pb-3\">Notre agence</h2>
              <i class=\"fas fa-map-pin\"></i><span>1 place de l'Homme de fer<p>67000, STRASBOURG</p></span>
              <i class=\"fas fa-phone-alt\"></i><span>03 88 67 48 51</span>
              <i class=\"fas fa-envelope\"></i><p>agenceimmowf3@gmail.com</p>
              <span>Du lundi au vendredi: <span><i>de 9h00 à 17h00</i></span></span>
              <p>Le samedi: <span><i>de 9h00 à 13h00</i></span></p>
              <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
            <div class=\"contact col-6\">
              <div class=\"row\"> 
                <div class=\"col-lg-12\">
                  <h2 class=\"section-heading text-uppercase pb-3 text-center\">Contactez-nous</h2>
                  <form method=\"POST\">
                    <div class=\"form-group\">
                      <div class=\"row\">
                        <div class=\"col-md-6\">
                          <input type=\"hidden\" name=\"homeid\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 223, $this->source); })()), "id", [], "any", false, false, false, 223), "html", null, true);
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
                      ";
        // line 245
        echo "                      <button id=\"submit\" class=\"btn btn-warning btn-xl text-uppercase float-right\" type=\"submit\">Envoyer</button>
                      </div>
                      <div class=\"col-1\"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
        return array (  431 => 245,  407 => 223,  379 => 197,  374 => 187,  367 => 180,  364 => 178,  355 => 176,  351 => 175,  343 => 169,  340 => 167,  331 => 165,  327 => 164,  319 => 158,  316 => 156,  307 => 154,  303 => 153,  295 => 147,  292 => 145,  283 => 143,  279 => 142,  257 => 122,  246 => 113,  234 => 104,  225 => 97,  220 => 87,  216 => 86,  213 => 85,  209 => 83,  205 => 81,  203 => 80,  199 => 79,  195 => 78,  190 => 77,  179 => 72,  169 => 64,  164 => 61,  160 => 60,  152 => 59,  147 => 58,  141 => 44,  126 => 25,  117 => 23,  113 => 22,  100 => 12,  96 => 11,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} PAGE DE BIEN {% endblock %}

  {% block body %}


  <section class=\"container\">
      <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
          <li class=\"breadcrumb-item\"><a href=\"#\">Accueil</a></li>
          <li class=\"breadcrumb-item\"><a href=\"#\">{{ home.service }}</a></li>
          <li class=\"breadcrumb-item active\" aria-current=\"page\">Réf. {{ home.id }}</li>
        </ol>
      </nav>

    <!--Carousel HOME-->
    <div class=\"row pt-3 pb-5\">
      <div class=\"col-8\">
        <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
          <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
              {% for picture in home.pictures %}
              <img class=\"w-100\" src=\"{{ asset('img/'~picture) }}\" alt=\"image\">
              {% endfor %}
            </div>
          </div>
          <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
          </a>
          <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
          </a>
        </div>

        <!--ICI IL FAUT MINIATURES IMAGES-->
        {# <div class=\"row d-flex justify-content-center\">
                <div class=\"col-3\">img</div>
                <div class=\"col-3\"></div>
                <div class=\"col-3\"></div>
                <div class=\"col-3\"></div>
            </div> #}
      </div>

      <!--Description HOME-->
      <div class=\"col-4 bg-light text-center py-5\">
        {# <h5 class=\"mt-5 pb-1 mb-1 text-center\">DESCRIPTION</h5>
        <p class=\"pt-3\">Situé au {{ home.adress }}, {{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m².</p>
        <p>{{ home.description }}</p>
        <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros</span></p>
        <a href=\"\"><i class=\"fas fa-share-alt\"></i></a>
        <div class=\"card bg-warning text-light text-center\" style=\"width: 18rem\">
          {{ home.price }} €
        </div>
        <p class=\"text-right pt-3\"><i>#Référence: {{ home.id }}</i></p>
      </div> #}
      <h3>{{ home.price }}€</h3>
      <p>{{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m²</p>
      <p>{{ home.adress }}</p>
      <p>Réf.{{ home.id }}</p>
      <button id=\"submit\" class=\"btn btn-warning btn-x1 text-uppercase float-center py-1 mb-3SS\" type=\"submit\">
        {# <a href=\"#\">{{ home.contact }} #}
          <i class=\"fas fa-phone\"></i>
          <b>Prendre RDV</b>
        </a>
      </button>
      <a href=\"#\"><i class=\"fas fa-share-alt\"></i></a><p class=\"pt-5\"><b>Partage moi!</b></p>
      </div>
    </div>

      <h2><p class=\"pt-3\">{{ home.type }} de {{ home.rooms }} pièces, {{ home.surface }} m²</p></h2>
      <!--CARACTERISTIQUES-->
      <div class=\"row pt-3 pb-5 d-flex justify-content-center\">
        <div class=\"col-6\">
          {# <h5 class=\"py-1 my-1\">CARACTERISTIQUES</h5> #}
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
        {# <div class=\"col-4\">
          <h5 class=\"py-1 my-1\">PLAN</h5>
          <img class=\"mt-4\" src=\"../images/Sans titre.png\" alt=\"\">
          <!--AUTRES CARACTERISTIQUES-->
              {# <p><strong>Nombre d'étage:</strong></p>
              <p><strong>Type de chauffage:</strong></p>
              <p><strong>Année de construction:</strong></p> {{ home.constructionyear }} 
        </div> #}
        <div class=\"col-6\">
          <div class=\"row\">
            <div class=\"col-3\"><i class=\"fas fa-bed\"></i><span>2 Chambres</span></div>
            <div class=\"col-3\"><i class=\"fas fa-bath\"></i><span>1 SDB</span></div>
            <div class=\"col-3\"><i class=\"fas fa-toilet\"></i><span>1 WC</span></div>
            <div class=\"col-3\"><i class=\"fas fa-warehouse\"></i><span>1 garage</span></div>
          </div>
         <p class=\"mt-4\">{{ home.description }}</p>
         <p class=\"\">Honoraires à la charge du locataire en euros. Dépôt de garantie en euros. Provision pour charge en euros.</span></p>
        </div>
      </div>

      <!--PERFORMANCES ENERGETIQUES-->
      <div class=\"row d-flex justify-content-between mb-5\">
        <div class=\"col-5\">
        <h5 class=\"py-1 my-1\">LOCALISATION</h5>
          <i class=\"fas fa-map-pin\"><p class=\"mt-4 text-left\">{{ home.adress }}</p></i>
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d5657224.630597427!2d0.6727440255702806!3d46.184255843869124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d48.589213699999995!2d7.7489254!4m5!1s0x12c9c085ab77f10f%3A0xa0c2c05d7e57cfc7!2s45%20Rue%20Despieds%2C%2013003%20Marseille!3m2!1d43.311666699999996!2d5.386066!5e0!3m2!1sfr!2sfr!4v1581070905242!5m2!1sfr!2sfr\" width=\"350\" height=\"200\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
        </div>
        <div class=\"col-7\">
          <h5 class=\"py-1 my-1\">PERFORMANCES ENERGETIQUES</h5>
                <div class=\"row\">
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur DPE:</strong></p>
                    {# <img src=\"http://vignette-dpe.soludedia.fr/dpe.php?v=10\" alt=\"dpe\"> #}
                    <img class=\"w-100\" src=\"../img/dpe.png\" alt=\"\">
                  </div>
                  <div class=\"col-6\">
                    <p class=\"mt-4\"><strong>Valeur GES:</strong></p>
                    <img class=\"w-100\" src=\"../img/ges.png\" alt=\"\">
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--Autres bien-->
      <section class=\"container\">
        <h3 class=\"mt-5 mb-3\">Autres biens:</h3>
        <div class=\"card-deck my-5\">
          <div class=\"row\">
            <div class=\"col-3\">
              <div class=\"card\">
                {% for picture in home.pictures %}
                <img class=\"w-100\" src=\"{{ asset('img/'~picture) }}\" alt=\"image\">
                {% endfor %}
                <div class=\"card-body\">
                  {# <h5 class=\"card-title\"></h5> #}
                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
                </div>
              </div>
            </div>
            <div class=\"col-3\">
              <div class=\"card\">
                {% for picture in home.pictures %}
                <img class=\"w-100\" src=\"{{ asset('img/'~picture) }}\" alt=\"image\">
                {% endfor %}
                <div class=\"card-body\">
                  {# <h5 class=\"card-title\"></h5> #}
                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
               </div> 
              </div>
            </div>
            <div class=\"col-3\">
              <div class=\"card\">
                {% for picture in home.pictures %}
                <img class=\"w-100\" src=\"{{ asset('img/'~picture) }}\" alt=\"image\">
                {% endfor %}
                <div class=\"card-body\">
                  {# <h5 class=\"card-title\"></h5> #}
                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
                </div>
              </div>
            </div>
            <div class=\"col-3\">
              <div class=\"card\">
                {% for picture in home.pictures %}
                <img class=\"w-100\" src=\"{{ asset('img/'~picture) }}\" alt=\"image\">
                {% endfor %}
                <div class=\"card-body\">
                  {# <h5 class=\"card-title\"></h5> #}
                  <p class=\"card-text text-danger\"><b>NOS DERNIERES EXCLUSIVITES</b></p>
                </div>
              </div>
            </div>
          </div>
          {# <div class=\"row d-flex justify-content-center\">
            <div class=\"col-6\"> #}
          <button id=\"submit\" class=\"btn btn-danger btn-x1 text-uppercase py-1 float-center my-5 \" type=\"submit\">
            <a class=\"text-light\" href=\"[[ home.renting }}\"><b>Voir d'autres annonces de location</b></a>
          </button>
          {# </div>
          <div class=\"col-6\">
            <button id=\"submit\" class=\"btn btn-danger text-uppercase py-1 float-center\" type=\"submit\">
                <a class=\"text-light\" href=\"[[ home.buy }}\"><b>Vous souhaitez devenir propriétaire?</b></a>
            </button>
          </div>
        </div> #}
      </div>
    </div>
  </section>

      <!--FORMULAIRE DE CONTACT-->
      <section class=\"container-fluid page-section mt-5 py-5\">
        <section class=\"container\">
          <div class=\"row\">
          <div class=\"col-1\"></div>
            <div class=\"contact col-4\">
              <h2 class=\"pb-3\">Notre agence</h2>
              <i class=\"fas fa-map-pin\"></i><span>1 place de l'Homme de fer<p>67000, STRASBOURG</p></span>
              <i class=\"fas fa-phone-alt\"></i><span>03 88 67 48 51</span>
              <i class=\"fas fa-envelope\"></i><p>agenceimmowf3@gmail.com</p>
              <span>Du lundi au vendredi: <span><i>de 9h00 à 17h00</i></span></span>
              <p>Le samedi: <span><i>de 9h00 à 13h00</i></span></p>
              <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>
            </div>
            <div class=\"contact col-6\">
              <div class=\"row\"> 
                <div class=\"col-lg-12\">
                  <h2 class=\"section-heading text-uppercase pb-3 text-center\">Contactez-nous</h2>
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
                      {# <div id=\"success\"></div> #}
                      <button id=\"submit\" class=\"btn btn-warning btn-xl text-uppercase float-right\" type=\"submit\">Envoyer</button>
                      </div>
                      <div class=\"col-1\"></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </section>
{% endblock %}", "homes/home.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\home.html.twig");
    }
}
