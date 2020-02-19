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

/* main/contact.html.twig */
class __TwigTemplate_879af8f4c7387374b279a31cc61a998723e518b19dede6bd11a31faea05868a6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/contact.html.twig", 1);
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

        echo "Bonjour et Bienvenue à l'Agence Immo !
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
\t<div>
\t\t<section class=\"d-block mw-100\" style=\"background:url('https://i.pinimg.com/originals/5a/98/bd/5a98bd2145842ea87cce31e68a93c8bc.jpg') no-repeat center center fixed; background-size:cover;\">
\t\t\t<p class=\"text-white  text-center\">
\t\t\t\t<span class=\"bg-dark\">Vous souhaitez acheter un bien immobilier ?
\t\t\t\t\t<br>
\t\t\t\t\tAgenceImmo vous propose le meilleur choix parmi les maisons et les appartements de votre région.
\t\t\t\t\t<br>
\t\t\t\t\tFaire des rêves immobiliers une réalité !</span>
\t\t\t</p>
\t\t</section>
\t</div>
\t<br>
\t<center>
\t\t<h1 class=\"text-warning\">
\t\t\tPage De Contact</h1>
\t</center>
\t<section id=\"Page De Contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-4 text-center\">
\t\t\t\t\t<h5 class=\"section-subheading text-muted\">
\t\t\t\t\t\t<h6>Les deux seuls noms que vous devez connaître pour des réponses honnêtes.</h6>
\t\t\t\t\t\t<p style=\"text-align: justify;\">N'hésitez pas, rendez-nous visite! Nos bureaux sont le reflet de notre travail, ils sont situés dans un environnement privilégié, en première ligne à Homme De Fer.</p>
\t\t\t\t\t</h3>
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
\t\t\t\t</div>
\t\t\t\t";
        // line 35
        echo "\t\t\t\t<div class=\"col-lg-4 text-center\">
\t\t\t\t\t";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t<button class=\"btn btn-primary\">Soumettre</button>
\t\t\t\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
        echo "
\t\t\t\t</div>
\t\t\t

\t\t\t";
        // line 44
        echo "\t\t\t<hr width=\"100%\" align=\"center\">
\t\t\t<p style=\"text-align: justify;\">Les informations recueillies sur ce formulaire avec votre consentement sont enregistrées dans un fichier informatisé par l'Agence Immo WF3  1 place de l'Homme de fer, 67000 Strasbourg. Elles sont nécessaires à la mise en oeuvre des services associés à \"Contact  adhésion\", ci-avant décrits et sont conservées pendant 3 ans. Vos données sont destinées à l'Agence Immobilère WF3.</p>
\t\t\t<p style=\"text-align: justify;\">&laquo;&nbsp;CONTACTEZ NOTRE AGENCE SANS PLUS ATTENDRE. &nbsp;&raquo; Vous disposez d'un droit d'accès de modification, de rectification, d'opposition, de suppression et de portabilités des données vous concernant. Pour toute demande, adressez-vous à agenceimmowf3@gmail.com. Vous pouvez introduire une réclamation auprès de nous.</p>
\t\t\t<hr width=\"100%\" align=\"center\">
\t\t</div>
\t</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 44,  130 => 39,  125 => 37,  121 => 36,  118 => 35,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Bonjour et Bienvenue à l'Agence Immo !
{% endblock %}

{% block body %}

\t<div>
\t\t<section class=\"d-block mw-100\" style=\"background:url('https://i.pinimg.com/originals/5a/98/bd/5a98bd2145842ea87cce31e68a93c8bc.jpg') no-repeat center center fixed; background-size:cover;\">
\t\t\t<p class=\"text-white  text-center\">
\t\t\t\t<span class=\"bg-dark\">Vous souhaitez acheter un bien immobilier ?
\t\t\t\t\t<br>
\t\t\t\t\tAgenceImmo vous propose le meilleur choix parmi les maisons et les appartements de votre région.
\t\t\t\t\t<br>
\t\t\t\t\tFaire des rêves immobiliers une réalité !</span>
\t\t\t</p>
\t\t</section>
\t</div>
\t<br>
\t<center>
\t\t<h1 class=\"text-warning\">
\t\t\tPage De Contact</h1>
\t</center>
\t<section id=\"Page De Contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row justify-content-center\">
\t\t\t\t<div class=\"col-lg-4 text-center\">
\t\t\t\t\t<h5 class=\"section-subheading text-muted\">
\t\t\t\t\t\t<h6>Les deux seuls noms que vous devez connaître pour des réponses honnêtes.</h6>
\t\t\t\t\t\t<p style=\"text-align: justify;\">N'hésitez pas, rendez-nous visite! Nos bureaux sont le reflet de notre travail, ils sont situés dans un environnement privilégié, en première ligne à Homme De Fer.</p>
\t\t\t\t\t</h3>
\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2639.336798318632!2d7.742750515664675!3d48.58424977926156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c84dd6f2f69f%3A0xbce3e81d79126b67!2s1%20Place%20de%20l&#39;Homme%20de%20Fer%2C%2067000%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1581156403050!5m2!1sfr!2sfr\" width=\"300\" height=\"170\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" class=\"w-100\"></iframe>
\t\t\t\t</div>
\t\t\t\t{# Forum De Contact #}
\t\t\t\t<div class=\"col-lg-4 text-center\">
\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t{{ form_widget(form) }}
\t\t\t\t\t<button class=\"btn btn-primary\">Soumettre</button>
\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t</div>
\t\t\t

\t\t\t{# Texte De Description de Contact #}
\t\t\t<hr width=\"100%\" align=\"center\">
\t\t\t<p style=\"text-align: justify;\">Les informations recueillies sur ce formulaire avec votre consentement sont enregistrées dans un fichier informatisé par l'Agence Immo WF3  1 place de l'Homme de fer, 67000 Strasbourg. Elles sont nécessaires à la mise en oeuvre des services associés à \"Contact  adhésion\", ci-avant décrits et sont conservées pendant 3 ans. Vos données sont destinées à l'Agence Immobilère WF3.</p>
\t\t\t<p style=\"text-align: justify;\">&laquo;&nbsp;CONTACTEZ NOTRE AGENCE SANS PLUS ATTENDRE. &nbsp;&raquo; Vous disposez d'un droit d'accès de modification, de rectification, d'opposition, de suppression et de portabilités des données vous concernant. Pour toute demande, adressez-vous à agenceimmowf3@gmail.com. Vous pouvez introduire une réclamation auprès de nous.</p>
\t\t\t<hr width=\"100%\" align=\"center\">
\t\t</div>
\t</section>
{% endblock %}
", "main/contact.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\contact.html.twig");
    }
}
