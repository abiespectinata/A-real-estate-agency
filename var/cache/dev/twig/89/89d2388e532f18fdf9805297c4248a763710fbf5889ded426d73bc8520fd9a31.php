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

/* homes/buy.html.twig */
class __TwigTemplate_50a7e860940c0d689c149b6ad12335f8430e35fa75c36bd60aedecd3f98d810d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/buy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homes/buy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "homes/buy.html.twig", 1);
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

        echo "ACHATS";
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<h1>Achats de bien</h1>

";
        // line 14
        echo "
<div class=\"container\">

    <div class = \"row flex\">

        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["homes"]) || array_key_exists("homes", $context) ? $context["homes"] : (function () { throw new RuntimeError('Variable "homes" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
\t\t</div> 
\t
        
        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"></h5>
                        <p class=\"card-text\">...</p>
                        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                    </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 

    


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 

        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 

    </div>

</div> 












<div class=\"example-wrapper\">
    <h1>Hello ";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/laragon/www/agence/agence/src/Controller/HomesController.php", 0), "html", null, true);
        echo "\">src/Controller/HomesController.php</a></code></li>
        <li>Your template at <code><a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->getFileLink("C:/laragon/www/agence/agence/templates/homes/buy.html.twig", 0), "html", null, true);
        echo "\">templates/homes/index.html.twig</a></code></li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "homes/buy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 148,  238 => 147,  231 => 143,  109 => 24,  97 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ACHATS{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<h1>Achats de bien</h1>

{# tri et recherche #}

<div class=\"container\">

    <div class = \"row flex\">

        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...{{homes.id}}</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
\t\t</div> 
\t
        
        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                    <img src=\"...\" class=\"card-img-top\" alt=\"...\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\"></h5>
                        <p class=\"card-text\">...</p>
                        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                    </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 

    


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 

        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 


        <div class = \"col-12 col-md-6 col-xl-4\">
            <div class=\"card\" style=\"width: 18rem;\">
                <img src=\"...\" class=\"card-img-top\" alt=\"...\">
\t\t        <div class=\"card-body\">
                    <h5 class=\"card-title\"></h5>
                    <p class=\"card-text\">...</p>
\t\t\t        <a href=\"\" class=\"btn btn-primary\">Consulter l'annonce</a>
                </div>
            </div>
        </div> 

    </div>

</div> 












<div class=\"example-wrapper\">
    <h1>Hello {{ controller_name }}! ✅</h1>

    This friendly message is coming from:
    <ul>
        <li>Your controller at <code><a href=\"{{ 'C:/laragon/www/agence/agence/src/Controller/HomesController.php'|file_link(0) }}\">src/Controller/HomesController.php</a></code></li>
        <li>Your template at <code><a href=\"{{ 'C:/laragon/www/agence/agence/templates/homes/buy.html.twig'|file_link(0) }}\">templates/homes/index.html.twig</a></code></li>
    </ul>
</div>
{% endblock %}
", "homes/buy.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\homes\\buy.html.twig");
    }
}
