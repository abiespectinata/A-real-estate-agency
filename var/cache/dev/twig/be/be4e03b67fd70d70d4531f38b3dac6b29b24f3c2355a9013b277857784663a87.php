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
class __TwigTemplate_a0eb555fe6f2a90869acc6f4932fc4eaabbc347145b693248cd3a4152e4f92c0 extends Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-4\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">LOGO</a>
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
                <li>
                    <a class=\"nav-link\" href=\"#\">Location</span></a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"#\">Vente</span></a>
                </li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
            <ul class=\"navbar-nav\">
\t\t\t\t";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            echo "\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 26
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
                // line 27
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil", ["_switch_user" => "_exit"]);
                echo "\" class=\"nav-link text-danger\">Redevenir moi</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t";
            }
            // line 30
            echo "                    ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 31
                echo "\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Ajouter un bien</a>
\t\t\t\t\t\t</li>
                    ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 35
                echo "                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">Mes biens préférés</a>
                        </li>
\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 40
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"nav-link\">Déconnexion</a>
\t\t\t\t\t</li>
\t\t\t\t";
        } else {
            // line 43
            echo "\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"nav-link\">Inscription</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"nav-link\">Connexion</a>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        // line 50
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
        return array (  130 => 50,  124 => 47,  118 => 44,  115 => 43,  109 => 40,  106 => 39,  100 => 35,  94 => 31,  91 => 30,  85 => 27,  82 => 26,  79 => 25,  77 => 24,  70 => 20,  58 => 11,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light mb-4\">
\t<div class=\"container\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('index') }}\">LOGO</a>
\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t</button>

\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t<ul class=\"navbar-nav mr-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('index') }}\">Accueil</span></a>
\t\t\t\t</li>
                <li>
                    <a class=\"nav-link\" href=\"#\">Location</span></a>
                </li>
                <li>
                    <a class=\"nav-link\" href=\"#\">Vente</span></a>
                </li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t    <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
\t\t\t\t</li>
\t\t\t</ul>
            <ul class=\"navbar-nav\">
\t\t\t\t{% if app.user %}
\t\t\t\t\t{% if is_granted('ROLE_PREVIOUS_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{ path('accueil', { _switch_user: '_exit' }) }}\" class=\"nav-link text-danger\">Redevenir moi</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t{% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Ajouter un bien</a>
\t\t\t\t\t\t</li>
                    {% elseif  is_granted('ROLE_USER') %}
                        <li class=\"nav-item\">
                            <a href=\"#\" class=\"nav-link\">Mes biens préférés</a>
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
