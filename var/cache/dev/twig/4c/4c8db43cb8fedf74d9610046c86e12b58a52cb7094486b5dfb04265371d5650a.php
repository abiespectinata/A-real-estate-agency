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

/* homes/homeCrud.html.twig */
class __TwigTemplate_5dc2f97d44d18b43a234ad9bbfff14a1f9a4c88b10f1e8feaf648328113f82f1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/homeCrud.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/homeCrud.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homes/homeCrud.html.twig", 1);
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

        echo " Nouveau bien";
        
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
";
        // line 7
        if ((isset($context["nouveau"]) || array_key_exists("nouveau", $context) ? $context["nouveau"] : (function () { throw new RuntimeError('Variable "nouveau" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "    <h1 class=\"text-center mt-5\">Ajouter un bien</h1>
";
        } else {
            // line 10
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homeCrud", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "action" => "delete"]), "html", null, true);
            echo "\" class=\"float-right\">Supprimer</a>
    <h1 class=\"text-center mt-5\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["home"]) || array_key_exists("home", $context) ? $context["home"] : (function () { throw new RuntimeError('Variable "home" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
            echo "</h1>
";
        }
        // line 13
        echo "
<div class=\"py-5 container\">
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_start');
        echo "    
        <div class=\"row\">
        
            <div class=\"col-12 col-md-6 my-2\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "type", [], "any", false, false, false, 18), 'row');
        echo "</div>
            <div class=\"col-12 col-md-6 my-2\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "service", [], "any", false, false, false, 19), 'row');
        echo "</div>

            <div class=\"col-12 col-md-6 my-2\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "bedrooms", [], "any", false, false, false, 21), 'row');
        echo "</div>
            <div class=\"col-12 col-md-6 my-2\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "bathrooms", [], "any", false, false, false, 22), 'row');
        echo "</div>

            <div class=\"col-12 col-md-4 my-2\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "rooms", [], "any", false, false, false, 24), 'row');
        echo "</div>
            <div class=\"col-12 col-md-4 my-2\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "surface", [], "any", false, false, false, 25), 'row');
        echo "</div>
            <div class=\"col-12 col-md-4 my-2 text-center align-self-center pb-0\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "furnished", [], "any", false, false, false, 26), 'row');
        echo "</div>

            <div class=\"col-12 col-md-6 my-2\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "price", [], "any", false, false, false, 28), 'row');
        echo "</div>
            <div class=\"col-12 col-md-6 my-2\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "active", [], "any", false, false, false, 29), 'row');
        echo "</div>

            <div class=\"col-12 my-2\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "adress", [], "any", false, false, false, 31), 'row');
        echo "</div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 my-2\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), 'row');
        echo "</div>
            <div class=\"col-12 my-2\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "description", [], "any", false, false, false, 36), 'row');
        echo "</div>

            <div class=\"col-12\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "pictures", [], "any", false, false, false, 39), 'row');
        echo "
                <span id=\"all_pictures\"></span>
            </div>

            <div class=\"col-12\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "googlemap", [], "any", false, false, false, 44), 'row');
        echo "
                <span>Accéder à <a href=\"https://www.google.fr/maps\" target=\"_blank\">GoogleMap</a></span>
            </div>
        </div>
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
</div>

    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
    ";
        // line 56
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$('.custom-file-input').on('change', function(event) {
            var inputFile = event.currentTarget;
            for(i=0; i<inputFile.files.length; i++) {
                    \$(inputFile).parent()
                .find('.custom-file-label')
                .append(inputFile.files[i].name + ' ; ');
            };
            \$('#all_pictures').html('Nombre de photos : ' +inputFile.files.length);
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homes/homeCrud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 56,  206 => 55,  190 => 48,  183 => 44,  175 => 39,  169 => 36,  165 => 35,  158 => 31,  153 => 29,  149 => 28,  144 => 26,  140 => 25,  136 => 24,  131 => 22,  127 => 21,  122 => 19,  118 => 18,  112 => 15,  108 => 13,  103 => 11,  98 => 10,  94 => 8,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Nouveau bien{% endblock %}

{% block body %}

{% if nouveau %}
    <h1 class=\"text-center mt-5\">Ajouter un bien</h1>
{% else %}
    <a href=\"{{ path('homeCrud', {id: home.id, action: 'delete'})}}\" class=\"float-right\">Supprimer</a>
    <h1 class=\"text-center mt-5\">{{home.title}}</h1>
{% endif %}

<div class=\"py-5 container\">
    {{ form_start(form) }}    
        <div class=\"row\">
        
            <div class=\"col-12 col-md-6 my-2\">{{form_row(form.type)}}</div>
            <div class=\"col-12 col-md-6 my-2\">{{form_row(form.service)}}</div>

            <div class=\"col-12 col-md-6 my-2\">{{form_row(form.bedrooms)}}</div>
            <div class=\"col-12 col-md-6 my-2\">{{form_row(form.bathrooms)}}</div>

            <div class=\"col-12 col-md-4 my-2\">{{form_row(form.rooms)}}</div>
            <div class=\"col-12 col-md-4 my-2\">{{form_row(form.surface)}}</div>
            <div class=\"col-12 col-md-4 my-2 text-center align-self-center pb-0\">{{form_row(form.furnished)}}</div>

            <div class=\"col-12 col-md-6 my-2\">{{form_row(form.price)}}</div>
            <div class=\"col-12 col-md-6 my-2\">{{form_row(form.active)}}</div>

            <div class=\"col-12 my-2\">{{form_row(form.adress)}}</div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 my-2\">{{form_row(form.title)}}</div>
            <div class=\"col-12 my-2\">{{form_row(form.description)}}</div>

            <div class=\"col-12\">
                {{form_row(form.pictures)}}
                <span id=\"all_pictures\"></span>
            </div>

            <div class=\"col-12\">
                {{form_row(form.googlemap)}}
                <span>Accéder à <a href=\"https://www.google.fr/maps\" target=\"_blank\">GoogleMap</a></span>
            </div>
        </div>
    {{ form_end(form) }}
</div>

    

{% endblock %}

{% block javascripts %} 
    {{ parent() }}
    <script>
        \$('.custom-file-input').on('change', function(event) {
            var inputFile = event.currentTarget;
            for(i=0; i<inputFile.files.length; i++) {
                    \$(inputFile).parent()
                .find('.custom-file-label')
                .append(inputFile.files[i].name + ' ; ');
            };
            \$('#all_pictures').html('Nombre de photos : ' +inputFile.files.length);
        });

    </script>
{% endblock %}
", "homes/homeCrud.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\homeCrud.html.twig");
    }
}
