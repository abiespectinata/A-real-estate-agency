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

/* main/apropos.html.twig */
class __TwigTemplate_c269c7a6e041fa4ce20020596e722658635b61cc575908b46bae8247831aaca9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/apropos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/apropos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/apropos.html.twig", 1);
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

        echo "A propos
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

\t<section class=\"page-section\" id=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center mb-5\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">A propos</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" div src=\"img/about/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Un Logement Pour Tous</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Notre objectif est de vous aider à vendre ou louer votre logement le plus rapidement possible et au meilleur prix, en limitant les négociations des potentiels acheteurs ou locataires. Il rédige votre annonce afin de définir de façon précise et objective votre logement.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" div src=\"img/about/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Pourquoi passer par un agent immobilier pour vendre ?</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Choisir de confier à une agence spécialisée dans la vente immobilière, c'est avant tout miser sur l'efficacité. ... Passer par une agence immobilière pour vendre, c'est aussi mettre à sa disposition les différentes ressources du professionnel : son portefeuille de biens et de clients, ainsi que son réseau professionnel.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" div src=\"img/about/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Est-ce le bon moment pour vendre un bien immobilier ?</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Sachez que la saison printemps-été est la meilleure saison pour vendre son logement, puisque les acheteurs ont généralement le moral et souhaitent, pour la plupart, signer l'acte de vente durant l'été pour être installés à la rentrée.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" src=\"img/about/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Est-ce qu'un agent immobilier peut vendre sa propre maison ?</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Même à titre particulier, un agent immobilier reste un professionnel ! Une personne achète une maison à un couple. ... Ce que valide le juge : considérée comme vendeur professionnel, même s'il s'agissait de la vente de sa maison d'habitation, l'épouse ne peut pas opposer la garantie des vices cachés à l'acquéreur.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" src=\"img/about/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Team -->
\t<section class=\"bg-light page-section\" id=\"team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">Notre incroyable équipe</h2>
\t\t\t\t\t<h3 class=\"section-subheading text-muted\">Notre équipe de professionnels de l'immobilier est à votre écoute, disponible, pour vous conseiller et vous accompagner dans votre projet.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/1.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Tommy Wolf</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Directeur d'agence</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/2.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Jerry Fanger</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Administrateur de biens</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/3.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Suzan Green</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Agent immobilier</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/4.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Isabelle Petit</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Agent immobilier</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Info Texte -->
\t\t\t</div>
\t\t\t<div class=\"row my-5\">
\t\t\t\t<div class=\"col-lg-8 mx-auto text-center\">
\t\t\t\t\t\t<!--Texte-->
          <div class=\"mb-5\">
\t\t\t\t\t\t<h3 class=\"mb-3\">Notre Equipe</h3>

            <p>Depuis 3 ans, nos agents immobiliers et courtiers d’affaires, offrent une assistance complète aux acheteurs et aux vendeurs et les accompagnent dans leurs transactions immobilières, la gestion de leur propriété et leurs opérations commerciales.</p>

            <p>Agence Immo, “Les courtiers immobiliers de Strasbourg” est dirigée par Tpùùy Wolf, un professionnel de l’immobilier et du courtage d’affaires depuis 2005. Assisté par plusieurs agents immobiliers licenciés, deux experts en marketing, ainsi que des évolutions de marché.</p>

            <p>L’équipe a de nombreuses années d’expérience dans l’assistance et la représentation d’individus ou sociétés pour leurs achats et ventes immobilières ou commerciales.</p>
          </div>

\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t<h3 class=\"mb-3\">Agence immobilière à Strasbourg</h3>
\t\t\t\t\t\t<p>Basée à Strasbourg, Agence Immo a su s'imposer parmi les autres agences du secteur. Nous offrons à nos clients des biens en exclusivités disponibles nul part ailleurs. Avec ses candidatures simplifiées, Agence Immo vous permet de postuler en ligne, facilement et gratuitement aux offres que vous désirez et sans limites.</p>
            <p>Nous disposons également de locaux physiques dans lequels vous pouvez venir rencontrer nos agents immobiliers. Ces derniers seront être à vôtre écoute et vous apporter l'aide adaptée qu'il vous faut.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos
{% endblock %}

{% block body %}


\t<section class=\"page-section\" id=\"about\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center mb-5\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">A propos</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" div src=\"img/about/1.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Un Logement Pour Tous</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Notre objectif est de vous aider à vendre ou louer votre logement le plus rapidement possible et au meilleur prix, en limitant les négociations des potentiels acheteurs ou locataires. Il rédige votre annonce afin de définir de façon précise et objective votre logement.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" div src=\"img/about/2.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Pourquoi passer par un agent immobilier pour vendre ?</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Choisir de confier à une agence spécialisée dans la vente immobilière, c'est avant tout miser sur l'efficacité. ... Passer par une agence immobilière pour vendre, c'est aussi mettre à sa disposition les différentes ressources du professionnel : son portefeuille de biens et de clients, ainsi que son réseau professionnel.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" div src=\"img/about/3.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Est-ce le bon moment pour vendre un bien immobilier ?</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Sachez que la saison printemps-été est la meilleure saison pour vendre son logement, puisque les acheteurs ont généralement le moral et souhaitent, pour la plupart, signer l'acte de vente durant l'été pour être installés à la rentrée.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" src=\"img/about/4.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h4 class=\"subheading\">Est-ce qu'un agent immobilier peut vendre sa propre maison ?</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"timeline-body\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Même à titre particulier, un agent immobilier reste un professionnel ! Une personne achète une maison à un couple. ... Ce que valide le juge : considérée comme vendeur professionnel, même s'il s'agissait de la vente de sa maison d'habitation, l'épouse ne peut pas opposer la garantie des vices cachés à l'acquéreur.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"timeline-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-image\">
\t\t\t\t\t\t\t\t<img class=\"rounded-circle img-fluid\" src=\"img/about/5.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

\t<!-- Team -->
\t<section class=\"bg-light page-section\" id=\"team\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-12 text-center\">
\t\t\t\t\t<h2 class=\"section-heading text-uppercase\">Notre incroyable équipe</h2>
\t\t\t\t\t<h3 class=\"section-subheading text-muted\">Notre équipe de professionnels de l'immobilier est à votre écoute, disponible, pour vous conseiller et vous accompagner dans votre projet.</h3>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/1.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Tommy Wolf</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Directeur d'agence</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/2.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Jerry Fanger</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Administrateur de biens</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/3.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Suzan Green</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Agent immobilier</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<div class=\"team-member\">
\t\t\t\t\t\t<img class=\"mx-auto rounded-circle\" src=\"img/team/4.jpg\" alt=\"\">
\t\t\t\t\t\t<h4>Isabelle Petit</h4>
\t\t\t\t\t\t<p class=\"text-muted\">Agent immobilier</p>
\t\t\t\t\t\t<ul class=\"list-inline social-buttons\">
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-twitter\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-facebook-f\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fab fa-linkedin-in\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Info Texte -->
\t\t\t</div>
\t\t\t<div class=\"row my-5\">
\t\t\t\t<div class=\"col-lg-8 mx-auto text-center\">
\t\t\t\t\t\t<!--Texte-->
          <div class=\"mb-5\">
\t\t\t\t\t\t<h3 class=\"mb-3\">Notre Equipe</h3>

            <p>Depuis 3 ans, nos agents immobiliers et courtiers d’affaires, offrent une assistance complète aux acheteurs et aux vendeurs et les accompagnent dans leurs transactions immobilières, la gestion de leur propriété et leurs opérations commerciales.</p>

            <p>Agence Immo, “Les courtiers immobiliers de Strasbourg” est dirigée par Tpùùy Wolf, un professionnel de l’immobilier et du courtage d’affaires depuis 2005. Assisté par plusieurs agents immobiliers licenciés, deux experts en marketing, ainsi que des évolutions de marché.</p>

            <p>L’équipe a de nombreuses années d’expérience dans l’assistance et la représentation d’individus ou sociétés pour leurs achats et ventes immobilières ou commerciales.</p>
          </div>

\t\t\t\t\t<div class=\"mt-5\">
\t\t\t\t\t\t<h3 class=\"mb-3\">Agence immobilière à Strasbourg</h3>
\t\t\t\t\t\t<p>Basée à Strasbourg, Agence Immo a su s'imposer parmi les autres agences du secteur. Nous offrons à nos clients des biens en exclusivités disponibles nul part ailleurs. Avec ses candidatures simplifiées, Agence Immo vous permet de postuler en ligne, facilement et gratuitement aux offres que vous désirez et sans limites.</p>
            <p>Nous disposons également de locaux physiques dans lequels vous pouvez venir rencontrer nos agents immobiliers. Ces derniers seront être à vôtre écoute et vous apporter l'aide adaptée qu'il vous faut.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
{% endblock %}
", "main/apropos.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\apropos.html.twig");
    }
}
