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

/* main/header.html.twig */
class __TwigTemplate_f056e7d696ddc36d7446f61d868abc93b4688ced067c608a39bf18b1efe18e3b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/header.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><img id=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"AgenceImmo\"></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</span></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tNos biens
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-item\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting");
        echo "\">Location</span></a>
\t\t\t\t\t\t<a class=\"nav-link dropdown-item\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy");
        echo "\">Vente</span></a>
\t\t\t\t\t</div>
\t\t\t\t</li> 
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("apropos");
        echo "\">A propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_homes");
        echo "\">Recherche</a>
\t\t\t\t</li>
\t\t\t</ul>
            <ul class=\"navbar-nav\">
\t\t\t\t";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 35
                echo "\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t";
                // line 40
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
                    // line 41
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["_switch_user" => "_exit"]);
                    echo "\" class=\"nav-link text-danger dropdown-item\">Récupérer ses droits d'admin</a>
\t\t\t\t\t\t\t\t";
                }
                // line 43
                echo "\t\t\t\t\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeCrud", ["id" => 0]);
                echo "\" class=\"nav-link dropdown-item\">Ajouter un bien</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 44
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminHomes");
                echo "\" class=\"nav-link dropdown-item\">Pannel admin</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 45
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("requests");
                echo "\" class=\"nav-link dropdown-item\">Les demandes</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("stat");
                echo "\" class=\"nav-link dropdown-item\">Statistiques</a>
\t\t\t\t\t\t\t\t";
                // line 48
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li> 
                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 51
                echo "                        <li class=\"nav-item\">
                            <a href=\"";
                // line 52
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("likedHomes");
                echo "\" class=\"nav-link\">Mes biens préférés</a>
                        </li>
\t\t\t\t\t";
            }
            // line 55
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">Déconnexion</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 59
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 60
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-link\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 63
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 66
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  169 => 63,  163 => 60,  160 => 59,  154 => 56,  151 => 55,  145 => 52,  142 => 51,  137 => 48,  133 => 46,  129 => 45,  125 => 44,  120 => 43,  114 => 41,  112 => 40,  105 => 35,  102 => 34,  100 => 33,  93 => 29,  87 => 26,  81 => 23,  74 => 19,  70 => 18,  60 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('index') }}\"><img id=\"logo\" src=\"{{ asset('img/logo.png') }}\" alt=\"AgenceImmo\"></a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('index') }}\">Accueil</span></a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\tNos biens
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t<a class=\"nav-link dropdown-item\" href=\"{{ path('renting') }}\">Location</span></a>
\t\t\t\t\t\t<a class=\"nav-link dropdown-item\" href=\"{{ path('buy') }}\">Vente</span></a>
\t\t\t\t\t</div>
\t\t\t\t</li> 
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('apropos') }}\">A propos</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('search_homes') }}\">Recherche</a>
\t\t\t\t</li>
\t\t\t</ul>
            <ul class=\"navbar-nav\">
\t\t\t\t{% if app.user %}
                    {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\tAdmin
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t{% if is_granted('ROLE_PREVIOUS_ADMIN') %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('accueil', {_switch_user: '_exit' }) }}\" class=\"nav-link text-danger dropdown-item\">Récupérer ses droits d'admin</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('homeCrud', {'id': 0}) }}\" class=\"nav-link dropdown-item\">Ajouter un bien</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('adminHomes') }}\" class=\"nav-link dropdown-item\">Pannel admin</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('requests') }}\" class=\"nav-link dropdown-item\">Les demandes</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('stat') }}\" class=\"nav-link dropdown-item\">Statistiques</a>
\t\t\t\t\t\t\t\t{# <a href=\"{{ path('password_update') }}\" class=\"nav-link dropdown-item\">Changer de mot de passe</a> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li> 
                    {% elseif  is_granted('ROLE_USER') %}
                        <li class=\"nav-item\">
                            <a href=\"{{ path('likedHomes') }}\" class=\"nav-link\">Mes biens préférés</a>
                        </li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_logout') }}\" class=\"nav-link\">Déconnexion</a>
\t\t\t\t\t</li>
\t\t\t\t{% else %}
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"nav-link\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path('app_login') }}\" class=\"nav-link\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t{% endif %}
\t\t\t</ul>
\t\t</div>
\t</div>
</nav>", "main/header.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\header.html.twig");
    }
}
