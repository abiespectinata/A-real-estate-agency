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

/* emails/requests/accept.email.twig */
class __TwigTemplate_c1cf0fbc8aebea255ee72e4b4ce96c9dfece0aa3f3709c2493dbcdf450f00a51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/requests/accept.email.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/requests/accept.email.twig"));

        // line 1
        echo "Bonjour ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "firstname", [], "any", false, false, false, 1), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 1, $this->source); })()), "user", [], "any", false, false, false, 1), "lastname", [], "any", false, false, false, 1), "html", null, true);
        echo " !
<br><br>
Votre candidature a été retenue pour le logement ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 3, $this->source); })()), "home", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        echo " situé au ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 3, $this->source); })()), "home", [], "any", false, false, false, 3), "adress", [], "any", false, false, false, 3), "html", null, true);
        echo " (référence du bien : # ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["demande"]) || array_key_exists("demande", $context) ? $context["demande"] : (function () { throw new RuntimeError('Variable "demande" does not exist.', 3, $this->source); })()), "home", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3), "html", null, true);
        echo ").
<br><br>
Notre agence prendra bientôt contact avec vous pour clôturer la candidature.
<br><br>
A bientôt!<br>
L'équipe d'Agence Immo.";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "emails/requests/accept.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Bonjour {{ demande.user.firstname }} {{ demande.user.lastname }} !
<br><br>
Votre candidature a été retenue pour le logement {{ demande.home.title }} situé au {{ demande.home.adress }} (référence du bien : # {{ demande.home.id }}).
<br><br>
Notre agence prendra bientôt contact avec vous pour clôturer la candidature.
<br><br>
A bientôt!<br>
L'équipe d'Agence Immo.", "emails/requests/accept.email.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\emails\\requests\\accept.email.twig");
    }
}
