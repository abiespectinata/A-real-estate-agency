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

/* homes/interested.html.twig */
class __TwigTemplate_325409a74db03200a67b3cde25ebcf53e606a51e0e52bd912a0b23c78781b975 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/interested.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/interested.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homes/interested.html.twig", 1);
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

        echo "Postuler";
        
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
<div class=\"py-5 container\">
    <h1 class=\"text-center mt-md-5\">Faire une demande</h1>

    ";
        // line 10
        if ((isset($context["userRequest"]) || array_key_exists("userRequest", $context) ? $context["userRequest"] : (function () { throw new RuntimeError('Variable "userRequest" does not exist.', 10, $this->source); })())) {
            // line 11
            echo "    <div class=\"row my-md-5\">
        <div class=\"col-12 my-md-5\">
            <p class=\"text-center my-5 text-";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRequest"]) || array_key_exists("userRequest", $context) ? $context["userRequest"] : (function () { throw new RuntimeError('Variable "userRequest" does not exist.', 13, $this->source); })()), "getStatusResponseColor", [], "any", false, false, false, 13), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["userRequest"]) || array_key_exists("userRequest", $context) ? $context["userRequest"] : (function () { throw new RuntimeError('Variable "userRequest" does not exist.', 13, $this->source); })()), "responseRequest", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
        </div>
    </div>
    ";
        } else {
            // line 17
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start');
            echo "    
            <div class=\"row\">
            
                <div class=\"col-12 col-md-6 my-2\">";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "job", [], "any", false, false, false, 20), 'row');
            echo "</div>
                <div class=\"col-12 col-md-3 my-2\">";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "contract", [], "any", false, false, false, 21), 'row');
            echo "</div>
                <div class=\"col-12 col-md-3 my-2\">";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "salary", [], "any", false, false, false, 22), 'row');
            echo "</div>

                <div class=\"col-12 col-md-6 my-2\">";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "age", [], "any", false, false, false, 24), 'row');
            echo "</div>
                <div class=\"col-12 col-md-6 my-2\">";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "situation", [], "any", false, false, false, 25), 'row');
            echo "</div>

                <div class=\"col-12 col-md-4 my-2 text-center align-self-center pb-0\">";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "numberresidents", [], "any", false, false, false, 27), 'row');
            echo "</div>
                <div class=\"col-12 col-md-4 my-2\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "animals", [], "any", false, false, false, 28), 'row');
            echo "</div>
                <div class=\"col-12 col-md-4 my-2\">";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "guarantor", [], "any", false, false, false, 29), 'row');
            echo "</div>
            </div>
            <div class=\"consentement row border-top\">
                <p>En vous inscrivant, vous acceptez que AgenceImmo mémorise et utilise vos données personnelles collectées dans ce formulaire dans le but d'améliorer votre expérience et vos interactions avec nos services.</p>
                <p>En l'occurence, vous autorisez la société AgenceImmo à communiquer avec vous s'il le juge opportun afin de vous apporter des informations complémentaires sur ses produits, ses services et ses offres marketing, via les coordonnées collectées dans le formulaire.</p>
                <p>Afin de protéger la confidentialité de vos données personnelles, AgenceImmo s'engage à ne pas divulguer, ne pas transmettre, ni partager vos données personnelles avec d'autres entités, entreprises ou organismes, quels qu'ils soient.</p>
                <p><strong>En cochant la case ci-après, vous donner votre consentement au traitement de vos données personnelles par AgenceImmo, conformément au Règlement Général de Protection des Données de 2018 et à notre politique de protection des données</strong></p>
                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "agreeTerms", [], "any", false, false, false, 36), 'row');
            echo "
            </div>
        ";
            // line 38
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_end');
            echo "
    ";
        }
        // line 40
        echo "</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homes/interested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 40,  161 => 38,  156 => 36,  146 => 29,  142 => 28,  138 => 27,  133 => 25,  129 => 24,  124 => 22,  120 => 21,  116 => 20,  109 => 17,  100 => 13,  96 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Postuler{% endblock %}

{% block body %}

<div class=\"py-5 container\">
    <h1 class=\"text-center mt-md-5\">Faire une demande</h1>

    {% if userRequest %}
    <div class=\"row my-md-5\">
        <div class=\"col-12 my-md-5\">
            <p class=\"text-center my-5 text-{{ userRequest.getStatusResponseColor }}\">{{ userRequest.responseRequest}}</p>
        </div>
    </div>
    {% else %}
        {{ form_start(form) }}    
            <div class=\"row\">
            
                <div class=\"col-12 col-md-6 my-2\">{{form_row(form.job)}}</div>
                <div class=\"col-12 col-md-3 my-2\">{{form_row(form.contract)}}</div>
                <div class=\"col-12 col-md-3 my-2\">{{form_row(form.salary)}}</div>

                <div class=\"col-12 col-md-6 my-2\">{{form_row(form.age)}}</div>
                <div class=\"col-12 col-md-6 my-2\">{{form_row(form.situation)}}</div>

                <div class=\"col-12 col-md-4 my-2 text-center align-self-center pb-0\">{{form_row(form.numberresidents)}}</div>
                <div class=\"col-12 col-md-4 my-2\">{{form_row(form.animals)}}</div>
                <div class=\"col-12 col-md-4 my-2\">{{form_row(form.guarantor)}}</div>
            </div>
            <div class=\"consentement row border-top\">
                <p>En vous inscrivant, vous acceptez que AgenceImmo mémorise et utilise vos données personnelles collectées dans ce formulaire dans le but d'améliorer votre expérience et vos interactions avec nos services.</p>
                <p>En l'occurence, vous autorisez la société AgenceImmo à communiquer avec vous s'il le juge opportun afin de vous apporter des informations complémentaires sur ses produits, ses services et ses offres marketing, via les coordonnées collectées dans le formulaire.</p>
                <p>Afin de protéger la confidentialité de vos données personnelles, AgenceImmo s'engage à ne pas divulguer, ne pas transmettre, ni partager vos données personnelles avec d'autres entités, entreprises ou organismes, quels qu'ils soient.</p>
                <p><strong>En cochant la case ci-après, vous donner votre consentement au traitement de vos données personnelles par AgenceImmo, conformément au Règlement Général de Protection des Données de 2018 et à notre politique de protection des données</strong></p>
                {{ form_row(form.agreeTerms) }}
            </div>
        {{ form_end(form) }}
    {% endif %}
</div>

{% endblock %}
", "homes/interested.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\interested.html.twig");
    }
}
