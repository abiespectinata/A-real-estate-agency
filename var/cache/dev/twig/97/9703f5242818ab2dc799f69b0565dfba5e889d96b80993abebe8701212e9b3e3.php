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

/* main/index.html.twig */
class __TwigTemplate_6f40d7ea1d72924de4944114336693ed5d1a241f860fc81942b3d30b4474aecb extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Accueil";
        
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
\t<!-- Header -->
\t<header class=\"masthead\">
\t\t<div class=\"mastheadcover\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"intro-text\">
\t\t\t\t\t<div class=\"intro-lead-in\">\" Les parents du petit Kévin ont légèrement baissé les bras \"
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"intro-heading text-uppercase\">Pour éviter les désagréments, faites confiance à notre agence !</div>
\t\t\t\t\t<a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Nous contacter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!-- Services -->
\t<section class=\"page-section\" id=\"services\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">Une agence à votre écoute</h2>
\t\t\t\t\t<h3 class=\"section-subheading text-muted\">Nous faisons de votre projet, notre projet.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t<i class=\"fas fa-hands-helping fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<h4 class=\"service-heading\">Accompagnement</h4>
\t\t\t\t\t<p class=\"text-muted\">Nos équipes vous offrent un accompagnement personnalisé</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t<i class=\"fas fa-home fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<h4 class=\"service-heading\">Estimation</h4>
\t\t\t\t\t<p class=\"text-muted\">Estimation sur mesure</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t<i class=\"fas fa-star fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<h4 class=\"service-heading\">Prestations</h4>
\t\t\t\t\t<p class=\"text-muted\">Gestion, location, vente, on s'occupe de tout</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Slider with new homes -->
\t<section class=\"bg-light page-section\" id=\"portfolio\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">Nouveautés</h2>
\t\t\t\t\t<h3 class=\"section-subheading text-muted\">Jetez un coup d'oeil aux derniers arrivants</h3>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 69
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 70
            echo "\t\t\t\t<!-- Pour les membres on affiche les maisons exclusives également -->
\t\t\t\t";
            // line 71
            $context["homes"] = (isset($context["exclusivehomes"]) || array_key_exists("exclusivehomes", $context) ? $context["exclusivehomes"] : (function () { throw new RuntimeError('Variable "exclusivehomes" does not exist.', 71, $this->source); })());
            // line 72
            echo "\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t";
            $context["homes"] = (isset($context["recenthomes"]) || array_key_exists("recenthomes", $context) ? $context["recenthomes"] : (function () { throw new RuntimeError('Variable "recenthomes" does not exist.', 73, $this->source); })());
            // line 74
            echo "\t\t\t";
        }
        // line 75
        echo "
\t\t\t<div class=\"row row-cols-1 row-cols-md-4\">
\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 77, $this->source); })()));
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
            // line 78
            echo "\t\t\t\t ";
            $this->loadTemplate("shared/homeItem.html.twig", "main/index.html.twig", 78)->display(twig_array_merge($context, ["home" => $context["home"]]));
            // line 79
            echo "\t\t\t\t";
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
        echo "\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 text-center mt-5\">
\t\t\t\t\t<a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy");
        echo "\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-info\">en vente </span></a>
\t\t\t\t\t<a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting");
        echo "\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-success\">en location </span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t\t<!-- Footer -->
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/index.js"), "html", null, true);
        echo "\"></script>

\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 96,  246 => 95,  236 => 94,  217 => 84,  213 => 83,  208 => 80,  194 => 79,  191 => 78,  174 => 77,  170 => 75,  167 => 74,  164 => 73,  161 => 72,  159 => 71,  156 => 70,  154 => 69,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

\t<!-- Header -->
\t<header class=\"masthead\">
\t\t<div class=\"mastheadcover\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"intro-text\">
\t\t\t\t\t<div class=\"intro-lead-in\">\" Les parents du petit Kévin ont légèrement baissé les bras \"
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"intro-heading text-uppercase\">Pour éviter les désagréments, faites confiance à notre agence !</div>
\t\t\t\t\t<a class=\"btn btn-primary btn-xl text-uppercase js-scroll-trigger\" href=\"#services\">Nous contacter</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<!-- Services -->
\t<section class=\"page-section\" id=\"services\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">Une agence à votre écoute</h2>
\t\t\t\t\t<h3 class=\"section-subheading text-muted\">Nous faisons de votre projet, notre projet.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row text-center\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t<i class=\"fas fa-hands-helping fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<h4 class=\"service-heading\">Accompagnement</h4>
\t\t\t\t\t<p class=\"text-muted\">Nos équipes vous offrent un accompagnement personnalisé</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t<i class=\"fas fa-home fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<h4 class=\"service-heading\">Estimation</h4>
\t\t\t\t\t<p class=\"text-muted\">Estimation sur mesure</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<span class=\"fa-stack fa-4x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x text-primary\"></i>
\t\t\t\t\t\t<i class=\"fas fa-star fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t\t<h4 class=\"service-heading\">Prestations</h4>
\t\t\t\t\t<p class=\"text-muted\">Gestion, location, vente, on s'occupe de tout</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Slider with new homes -->
\t<section class=\"bg-light page-section\" id=\"portfolio\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">Nouveautés</h2>
\t\t\t\t\t<h3 class=\"section-subheading text-muted\">Jetez un coup d'oeil aux derniers arrivants</h3>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t\t<!-- Pour les membres on affiche les maisons exclusives également -->
\t\t\t\t{% set homes = exclusivehomes %}
\t\t\t{% else %}
\t\t\t\t{% set homes = recenthomes %}
\t\t\t{% endif %}

\t\t\t<div class=\"row row-cols-1 row-cols-md-4\">
\t\t\t\t{% for home in homes %}
\t\t\t\t {% include 'shared/homeItem.html.twig' with {home: home} %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 text-center mt-5\">
\t\t\t\t\t<a href=\"{{ path('buy') }}\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-info\">en vente </span></a>
\t\t\t\t\t<a href=\"{{ path('renting') }}\" class=\"border border-dark py-3 px-3 text-dark mx-2\">Voir tous les biens <span class=\"text-success\">en location </span></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>


\t\t<!-- Footer -->
\t{% endblock %}

\t{% block javascripts %}
\t\t{{ parent() }}
\t\t<script src=\"{{ asset('js/index.js') }}\"></script>

\t{% endblock %}
", "main/index.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\index.html.twig");
    }
}
