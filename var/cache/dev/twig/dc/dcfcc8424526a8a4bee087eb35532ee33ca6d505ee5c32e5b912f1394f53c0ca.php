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

/* search/searchForm.html.twig */
class __TwigTemplate_2b567c43aa61199b575a53aca390b9ac51e3efbba6d3908b3cc513f8d729b351 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/searchForm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "search/searchForm.html.twig"));

        // line 1
        echo "<div class=\"barredeC container\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        echo "  
        <div class=\"row border-top border-bottom text-center\"> 
            <div class=\"col-lg-2 my-lg-5 mt-3\"><b>";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "type", [], "any", false, false, false, 4), 'row');
        echo "</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "service", [], "any", false, false, false, 5), 'row');
        echo "</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "minSurface", [], "any", false, false, false, 6), 'row');
        echo "</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "maximumPrice", [], "any", false, false, false, 7), 'row');
        echo "</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "rooms", [], "any", false, false, false, 8), 'row');
        echo "</b></div>
            <div class=\"col-lg-2 my-lg-5 mb-3\"><b>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "furnished", [], "any", false, false, false, 9), 'row');
        echo "</b></div>
        </div>
        <div class=\"row d-flex justify-content-end\">
            <button id=\"submit\" class=\"btn btn-warning text-uppercase text-light float-right mr-2 my-2\" type=\"submit\">Envoyer</button>
            <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search_homes");
        echo "\" id=\"reset\" class=\"btn btn-secondary text-uppercase float-right mx-2 my-2\" type=\"reset\">Réinitialiser</a>
        </div>
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), 'form_end');
        echo " 
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "search/searchForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 15,  78 => 13,  71 => 9,  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"barredeC container\">
    {{ form_start(form) }}  
        <div class=\"row border-top border-bottom text-center\"> 
            <div class=\"col-lg-2 my-lg-5 mt-3\"><b>{{form_row(form.type)}}</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>{{form_row(form.service)}}</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>{{form_row(form.minSurface)}}</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>{{form_row(form.maximumPrice)}}</b></div>
            <div class=\"col-lg-2 my-lg-5\"><b>{{form_row(form.rooms)}}</b></div>
            <div class=\"col-lg-2 my-lg-5 mb-3\"><b>{{form_row(form.furnished)}}</b></div>
        </div>
        <div class=\"row d-flex justify-content-end\">
            <button id=\"submit\" class=\"btn btn-warning text-uppercase text-light float-right mr-2 my-2\" type=\"submit\">Envoyer</button>
            <a href=\"{{ path('search_homes') }}\" id=\"reset\" class=\"btn btn-secondary text-uppercase float-right mx-2 my-2\" type=\"reset\">Réinitialiser</a>
        </div>
    {{ form_end(form) }} 
</div>", "search/searchForm.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\search\\searchForm.html.twig");
    }
}
