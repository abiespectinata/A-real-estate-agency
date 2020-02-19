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

/* main/footer.html.twig */
class __TwigTemplate_73a46a8c37892a3b026ca37bc8127d78455da44aaf54720e67f7d3218b0bbe61 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/footer.html.twig"));

        // line 1
        echo "<section class=\"container pt-5\">
    <div class=\"row pb-5\">
        <div class=\"col-4 border-light border-right\">
            <p><a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">LOGO</a></p>
            <div class=\"card text-light text-center\" style=\"width: 10rem\">
            <a class=\"text-dark\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Nous contacter</a>
        </div>
        </div>
        <div class=\"col-4 border-light border-right\">
            <p class=\"text-dark\">Plan du site</p>
            <a  href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a></br>
            <a  href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Location</a></br>
            <a  href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Vente</a></br>
            <a  href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Contact</a></br>
        </div>
        <div class=\"col-4\">
            <p class=\"text-light\">Mentions légales</p>
                <div class=\"row\">
                    <div class=\"col-4\"><i class=\"fab fa-facebook\"></i></div>
                    <div class=\"col-4\"><i class=\"fab fa-instagram\"></i></div>
                    <div class=\"col-4\"><i class=\"fab fa-twitter\"></i></div>
                </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <p class=\"text-center text-dark\">Droits réservés à WF3 Agence Immo - 2020</p>
        </div>
    </div>
</section>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  69 => 13,  65 => 12,  61 => 11,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container pt-5\">
    <div class=\"row pb-5\">
        <div class=\"col-4 border-light border-right\">
            <p><a class=\"navbar-brand\" href=\"{{ path('index') }}\">LOGO</a></p>
            <div class=\"card text-light text-center\" style=\"width: 10rem\">
            <a class=\"text-dark\" href=\"{{ path('index') }}\">Nous contacter</a>
        </div>
        </div>
        <div class=\"col-4 border-light border-right\">
            <p class=\"text-dark\">Plan du site</p>
            <a  href=\"{{ path('index') }}\">Accueil</a></br>
            <a  href=\"{{ path('index') }}\">Location</a></br>
            <a  href=\"{{ path('index') }}\">Vente</a></br>
            <a  href=\"{{ path('index') }}\">Contact</a></br>
        </div>
        <div class=\"col-4\">
            <p class=\"text-light\">Mentions légales</p>
                <div class=\"row\">
                    <div class=\"col-4\"><i class=\"fab fa-facebook\"></i></div>
                    <div class=\"col-4\"><i class=\"fab fa-instagram\"></i></div>
                    <div class=\"col-4\"><i class=\"fab fa-twitter\"></i></div>
                </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-12\">
            <p class=\"text-center text-dark\">Droits réservés à WF3 Agence Immo - 2020</p>
        </div>
    </div>
</section>
", "main/footer.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\footer.html.twig");
    }
}
