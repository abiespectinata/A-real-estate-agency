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
class __TwigTemplate_afc70ef93c5753f462b2840fc78a97463af381925322286a16d7f2af93e09be7 extends Template
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
        echo "<section class=\"footer container-fluid\">
  <div class=\"container pt-3\">
    <div class=\"row\">
      <div class=\"col-md-4 d-none d-md-block\">
        <p class=\"text-left\">Plan du site</p>
      </div>
      <div class=\"col-md-4\">
        <p class=\"text-center\">Agence Immo WF3</a></br>
      </div>
      <div class=\"col-md-4 d-none d-md-block\">
        <p class=\"text-center\">Suivez-nous</p>
      </div>
      </div>
      <div class=\"row border-light border-top mt-3\">
        <div class=\"col-md-4 d-none d-md-block\">
          <div class=\"text-left pt-5 \">
            <a  href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Accueil</a></br>
            <a  href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("renting");
        echo "\">Location</a></br>
            <a  href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("buy");
        echo "\">Vente</a></br>
            <a  href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></br>
            <a  href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mentionslegales");
        echo "\"><p>Mentions légales</p></a></br>
          </div>
        </div>
        <div class=\"col-md-4 pt-5 text-center\">
          <span><i class=\"fas fa-map-marker-alt fa-inverse\"></i>  1 place de l'Homme de fer <br>67000, STRASBOURG</p>
          <p><i class=\"fas fa-phone-alt fa-inverse\"></i>  03 88 67 48 51<br>
          <span><i class=\"fas fa-envelope fa-inverse\"></i> agenceimmowf3@gmail.com</span></p>
          <span>Du lundi au vendredi: <span>
          <p><i>de 9h00 à 17h00</i></p>
          <p>Le samedi: <span><i>de 9h00 à 13h00</i></span></p>   
        </div>
        <div class=\"col-md-4 pt-5 text-center\">
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                <span class=\"list-inline-item text-center\">
                  <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 mt-5 pt-3\">
              <p class=\"text-center\">Droits réservés à Agence Immo WF3 - 2020</p>
            </div>
          </div>
        </div>
      </div>
</section>";
        
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
        return array (  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"footer container-fluid\">
  <div class=\"container pt-3\">
    <div class=\"row\">
      <div class=\"col-md-4 d-none d-md-block\">
        <p class=\"text-left\">Plan du site</p>
      </div>
      <div class=\"col-md-4\">
        <p class=\"text-center\">Agence Immo WF3</a></br>
      </div>
      <div class=\"col-md-4 d-none d-md-block\">
        <p class=\"text-center\">Suivez-nous</p>
      </div>
      </div>
      <div class=\"row border-light border-top mt-3\">
        <div class=\"col-md-4 d-none d-md-block\">
          <div class=\"text-left pt-5 \">
            <a  href=\"{{ path('index') }}\">Accueil</a></br>
            <a  href=\"{{ path('renting') }}\">Location</a></br>
            <a  href=\"{{ path('buy') }}\">Vente</a></br>
            <a  href=\"{{ path('contact') }}\">Contact</a></br>
            <a  href=\"{{ path('mentionslegales') }}\"><p>Mentions légales</p></a></br>
          </div>
        </div>
        <div class=\"col-md-4 pt-5 text-center\">
          <span><i class=\"fas fa-map-marker-alt fa-inverse\"></i>  1 place de l'Homme de fer <br>67000, STRASBOURG</p>
          <p><i class=\"fas fa-phone-alt fa-inverse\"></i>  03 88 67 48 51<br>
          <span><i class=\"fas fa-envelope fa-inverse\"></i> agenceimmowf3@gmail.com</span></p>
          <span>Du lundi au vendredi: <span>
          <p><i>de 9h00 à 17h00</i></p>
          <p>Le samedi: <span><i>de 9h00 à 13h00</i></span></p>   
        </div>
        <div class=\"col-md-4 pt-5 text-center\">
            <ul class=\"list-inline social-buttons\">
              <li class=\"list-inline-item\">
                <span class=\"list-inline-item text-center\">
                  <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a>
                </span>
              </li>
            </ul>
          </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12 mt-5 pt-3\">
              <p class=\"text-center\">Droits réservés à Agence Immo WF3 - 2020</p>
            </div>
          </div>
        </div>
      </div>
</section>", "main/footer.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\footer.html.twig");
    }
}
