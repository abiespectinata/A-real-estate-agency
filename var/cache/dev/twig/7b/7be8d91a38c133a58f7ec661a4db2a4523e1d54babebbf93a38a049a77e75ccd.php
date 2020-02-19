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

/* main/mentionslegales.html.twig */
class __TwigTemplate_33dd8dbbb46397477c481c55690712e01020c86d475245ce906d1fb338798851 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mentionslegales.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/mentionslegales.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/mentionslegales.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Mentions légales ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
  <section class=\"container-fluid text-justify\">
    <div class=\"mentionslegales container border-warning border-top\">
      <h1 class=\"text-left py-3\">Mentions légales</h1>
      <p class=\"text-left\">Le présent site est édité par Agence Immo WF3, SARL au capital de 15 000 €, dont le siège social est situé 1 place de l'Homme de fer, 67000 STRASBOURG.<br>SIREN *** *** *** RCS STRASBOURG.</p>

      <div class=\"row\">
        <div class=\"col-4\"></div>
        <div class=\"col-4\">
          <div class=\"card mb-3\" style=\"width: 25rem;\">
            <div class=\"card-body\">
              <h5 class=\"pb-3 text-center\">Informations relatives à l'hébergeur</h5>
              <span>Wf3 Network SA</span>
              <span>13 rue du Maréchal foch, 67000 Strasourg – France</span>
              <p>N° IDE & TVA : *** *** *** ***</p>
            </div>
          </div>
        </div>
        <div class=\"col-4\"></div>
      </div>

      <h4>Recommandations pour la visualisation</h4>
      <p>Informations techniques :</p>
      <p>Accessibilité au site 24 heures sur 24 et 7 jours sur 7 sauf cas de force majeure, difficultés informatiques, difficultés liées à la structure des réseaux de communication ou difficulté d'ordre technique. Interruption possible à tout moment du site pour des raisons de maintenance.</p>
      
      <h3 class=\"mb-4\">Avertissement :</h3>

      <h5 class=\"mt-4\">1/ Informations</h5>
      <p>Agence Immo WF3 fait les meilleurs efforts pour assurer l'exactitude de l'ensemble des informations mises à la disposition des visiteurs sur notre site, exactitude qu'elle ne peut cependant garantir, l'internaute étant invité à utiliser ces informations avec discernement et esprit critique. Les informations signalées comme contenant des inexactitudes juridiques, techniques, des erreurs typographiques ou comme étant incomplètes feront l'objet d'un traitement sans délais par Agence Immo WF.</p>

      <h5 class=\"mt-4\">2/ Biens immobiliers</h5>
      <span>Les informations contenues dans le descriptif des biens à louer ou à vendre sont fournies par les agences Agence Immo WF3. La profession d'agent immobilier est régie par la loi 70-9 du 2 janvier 1970 dite Loi HOGUET.</span>
      <p>La société Agence Immo WF3 ne saurait en conséquence être tenue pour responsable à quelque titre que ce soit du fait de l'inexactitude que pourraient contenir les informations relatives aux biens à louer ou à vendre figurant sur le présent site.</p>

      <h5 class=\"mt-4\">3/ Services Complémentaires</h5>
      <p>Les partenaires présentés sur le site sont reconnus pour la qualité de leur offre et de leurs services, qualité que Agence Immo WF3 , société juridiquement indépendante, ne peut toutefois garantir.</p>
      <p>Agence Immo WF3 ne pourra être tenue responsable, à raison de la présentation des services de ses partenaires sur le présent site, services qu'elle ne propose pas à la vente, ou à raison d'un quelconque manquement desdits partenaires à leurs obligations dans le cas où un internaute aurait décidé de recourir à leurs services, tout internaute étant invité à se renseigner plus amplement avant de recourir aux services desdits partenaires.</p>
      <p>En cas de litige avec un professionnel Agence Immo WF3 relatif à l'exécution d'un contrat de vente ou de prestation de services, le consommateur est informé qu'il peut recourir à un médiateur, dont les coordonnées sont disponibles dans la page \"mentions légales\" du site internet de l'agence avec laquelle il est contractuellement lié.</p>
      
      <h4 class=\"mt-4\">Mentions Légales :</h4>
      <p>Si l'utilisateur demande des informations sur les annonces et services immobiliers, sa demande sera traitée par l’agence Agence Immo WF3 dont il dépend géographiquement ou dont il est déjà client ou par l'agence mandatée pour la vente ou la location du bien objet de l'annonce.</p>
      <p>Si l'utilisateur demande des informations autres que sur les annonces et services immobiliers (ex : Rubrique « Contacts - service client »...) sa demande sera traitée par Agence Immo WF3 , siège social ou par l'agence du Réseau Agence Immo WF3 concernée par sa demande.</p>
      <p>Les informations nominatives communiquées aux agences par les utilisateurs du site du Réseau Agence Immo WF3 par l'intermédiaire des formulaires ou par les questionnaires mis en ligne renseignés par les utilisateurs sont uniquement envoyées aux agences destinataires. Elles ne sont communiquées qu'à des tiers autorisés, pour satisfaire à des obligations légales et réglementaires.</p>
      <p>Le titulaire dispose d'un droit d'accès, de modification, de rectification et de suppression pour toute information le concernant auprès de l'agence qui traite les informations qu'il a communiquées.</p>
      <p>Si l'utilisateur communique son adresse électronique ou son numéro de fax, l'agence sera conduite à solliciter son consentement exprès et préalable à recevoir par courrier électronique ou par fax des informations commerciales et publicitaires  concernant les produits et services de l'agence.</p>
      <p>Si l'utilisateur communique son numéro de téléphone ou son adresse postale, l'agence peut être conduite à lui proposer par téléphone ou par courrier postal des informations commerciales et publicitaires concernant les produits et services de l'agence. L'utilisateur a la possibilité de s'y opposer en adressant un courrier auprès de l'agence qui a collecté les données communiquées par l'utilisateur.</p>  

      <h4 class=\"mt-4\">Adresses IP</h4>
      <p>Nous collectons les adresses IP des internautes qui visitent notre site à des fins de statistiques et en cas d'abus, afin de répondre aux demandes d'informations des autorités compétentes.</p>
      
      <h4 class=\"mt-4\">Propriété intellectuelle</h4>
      <p>L'intégralité du contenu (textes, images, données, graphiques, bandes sonores,...) et la forme du présent site relève de la législation internationale sur le droit d'auteur, le droit des marques et, de façon générale, sur la propriété intellectuelle, et sont la propriété exclusive de Agence Immo WF3.</p>
      <span>Toute reproduction, représentation ou diffusion, totale ou partielle des pages, données ou de tout autre élément du présent site internet sur quelque support et par quelque procédé que ce soit, sans l'autorisation expresse de Agence Immo WF3  est interdite. Le non-respect de cette interdiction constitue une contrefaçon susceptible d'engager la responsabilité civile et pénale du contrefacteur.</span>
      <p>Il est strictement interdit d'utiliser ou de reproduire le nom Agence Immo WF3 ou son logo, seuls ou associés, à quelque titre que ce soit, notamment à des fins publicitaires, sans l'accord préalable écrit de Agence Immo WF3.</p>
      
      <h4 class=\"mt-4\">Loi applicable :</h4>
      <p>Le contenu du présent site est soumis au droit français. Agence Immo WF3 se réserve le droit à tout moment d'en modifier tout ou partie du contenu. Tout litige concernant son contenu comme son utilisation et les recours susceptibles d'en découler est soumis à la compétence exclusive des tribunaux français.</p>

      <div class=\"row border-warning border-bottom\">
        <div class=\"col-4\"></div>
        <div class=\"col-4 my-4 \">
          <div class=\"card\" style=\"width: 25rem;\">
            <div class=\"card-body\">
              <h3>Agence Immo WF3</h3>
              <span><i class=\"fas fa-map-marker-alt\"></i></a> 1 place de l'Homme de fer</span><br>
              <span class=\"ml-3\">67000 Strasbourg</span><br>
              <span><i class=\"fas fa-phone\"></i> 03 88 67 48 51</span><br>
              <span><i class=\"fas fa-envelope-open\"></i> agenceimmowf3@gmail.com</span>
              <p>Carte Professionnelle : CPI **** **** *** *** ***</p>
            </div>
          </div>
        </div>
        <div class=\"col-4\"></div>
      </div>
    </div>
  </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/mentionslegales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %} Mentions légales {% endblock %}

  {% block body %}

  <section class=\"container-fluid text-justify\">
    <div class=\"mentionslegales container border-warning border-top\">
      <h1 class=\"text-left py-3\">Mentions légales</h1>
      <p class=\"text-left\">Le présent site est édité par Agence Immo WF3, SARL au capital de 15 000 €, dont le siège social est situé 1 place de l'Homme de fer, 67000 STRASBOURG.<br>SIREN *** *** *** RCS STRASBOURG.</p>

      <div class=\"row\">
        <div class=\"col-4\"></div>
        <div class=\"col-4\">
          <div class=\"card mb-3\" style=\"width: 25rem;\">
            <div class=\"card-body\">
              <h5 class=\"pb-3 text-center\">Informations relatives à l'hébergeur</h5>
              <span>Wf3 Network SA</span>
              <span>13 rue du Maréchal foch, 67000 Strasourg – France</span>
              <p>N° IDE & TVA : *** *** *** ***</p>
            </div>
          </div>
        </div>
        <div class=\"col-4\"></div>
      </div>

      <h4>Recommandations pour la visualisation</h4>
      <p>Informations techniques :</p>
      <p>Accessibilité au site 24 heures sur 24 et 7 jours sur 7 sauf cas de force majeure, difficultés informatiques, difficultés liées à la structure des réseaux de communication ou difficulté d'ordre technique. Interruption possible à tout moment du site pour des raisons de maintenance.</p>
      
      <h3 class=\"mb-4\">Avertissement :</h3>

      <h5 class=\"mt-4\">1/ Informations</h5>
      <p>Agence Immo WF3 fait les meilleurs efforts pour assurer l'exactitude de l'ensemble des informations mises à la disposition des visiteurs sur notre site, exactitude qu'elle ne peut cependant garantir, l'internaute étant invité à utiliser ces informations avec discernement et esprit critique. Les informations signalées comme contenant des inexactitudes juridiques, techniques, des erreurs typographiques ou comme étant incomplètes feront l'objet d'un traitement sans délais par Agence Immo WF.</p>

      <h5 class=\"mt-4\">2/ Biens immobiliers</h5>
      <span>Les informations contenues dans le descriptif des biens à louer ou à vendre sont fournies par les agences Agence Immo WF3. La profession d'agent immobilier est régie par la loi 70-9 du 2 janvier 1970 dite Loi HOGUET.</span>
      <p>La société Agence Immo WF3 ne saurait en conséquence être tenue pour responsable à quelque titre que ce soit du fait de l'inexactitude que pourraient contenir les informations relatives aux biens à louer ou à vendre figurant sur le présent site.</p>

      <h5 class=\"mt-4\">3/ Services Complémentaires</h5>
      <p>Les partenaires présentés sur le site sont reconnus pour la qualité de leur offre et de leurs services, qualité que Agence Immo WF3 , société juridiquement indépendante, ne peut toutefois garantir.</p>
      <p>Agence Immo WF3 ne pourra être tenue responsable, à raison de la présentation des services de ses partenaires sur le présent site, services qu'elle ne propose pas à la vente, ou à raison d'un quelconque manquement desdits partenaires à leurs obligations dans le cas où un internaute aurait décidé de recourir à leurs services, tout internaute étant invité à se renseigner plus amplement avant de recourir aux services desdits partenaires.</p>
      <p>En cas de litige avec un professionnel Agence Immo WF3 relatif à l'exécution d'un contrat de vente ou de prestation de services, le consommateur est informé qu'il peut recourir à un médiateur, dont les coordonnées sont disponibles dans la page \"mentions légales\" du site internet de l'agence avec laquelle il est contractuellement lié.</p>
      
      <h4 class=\"mt-4\">Mentions Légales :</h4>
      <p>Si l'utilisateur demande des informations sur les annonces et services immobiliers, sa demande sera traitée par l’agence Agence Immo WF3 dont il dépend géographiquement ou dont il est déjà client ou par l'agence mandatée pour la vente ou la location du bien objet de l'annonce.</p>
      <p>Si l'utilisateur demande des informations autres que sur les annonces et services immobiliers (ex : Rubrique « Contacts - service client »...) sa demande sera traitée par Agence Immo WF3 , siège social ou par l'agence du Réseau Agence Immo WF3 concernée par sa demande.</p>
      <p>Les informations nominatives communiquées aux agences par les utilisateurs du site du Réseau Agence Immo WF3 par l'intermédiaire des formulaires ou par les questionnaires mis en ligne renseignés par les utilisateurs sont uniquement envoyées aux agences destinataires. Elles ne sont communiquées qu'à des tiers autorisés, pour satisfaire à des obligations légales et réglementaires.</p>
      <p>Le titulaire dispose d'un droit d'accès, de modification, de rectification et de suppression pour toute information le concernant auprès de l'agence qui traite les informations qu'il a communiquées.</p>
      <p>Si l'utilisateur communique son adresse électronique ou son numéro de fax, l'agence sera conduite à solliciter son consentement exprès et préalable à recevoir par courrier électronique ou par fax des informations commerciales et publicitaires  concernant les produits et services de l'agence.</p>
      <p>Si l'utilisateur communique son numéro de téléphone ou son adresse postale, l'agence peut être conduite à lui proposer par téléphone ou par courrier postal des informations commerciales et publicitaires concernant les produits et services de l'agence. L'utilisateur a la possibilité de s'y opposer en adressant un courrier auprès de l'agence qui a collecté les données communiquées par l'utilisateur.</p>  

      <h4 class=\"mt-4\">Adresses IP</h4>
      <p>Nous collectons les adresses IP des internautes qui visitent notre site à des fins de statistiques et en cas d'abus, afin de répondre aux demandes d'informations des autorités compétentes.</p>
      
      <h4 class=\"mt-4\">Propriété intellectuelle</h4>
      <p>L'intégralité du contenu (textes, images, données, graphiques, bandes sonores,...) et la forme du présent site relève de la législation internationale sur le droit d'auteur, le droit des marques et, de façon générale, sur la propriété intellectuelle, et sont la propriété exclusive de Agence Immo WF3.</p>
      <span>Toute reproduction, représentation ou diffusion, totale ou partielle des pages, données ou de tout autre élément du présent site internet sur quelque support et par quelque procédé que ce soit, sans l'autorisation expresse de Agence Immo WF3  est interdite. Le non-respect de cette interdiction constitue une contrefaçon susceptible d'engager la responsabilité civile et pénale du contrefacteur.</span>
      <p>Il est strictement interdit d'utiliser ou de reproduire le nom Agence Immo WF3 ou son logo, seuls ou associés, à quelque titre que ce soit, notamment à des fins publicitaires, sans l'accord préalable écrit de Agence Immo WF3.</p>
      
      <h4 class=\"mt-4\">Loi applicable :</h4>
      <p>Le contenu du présent site est soumis au droit français. Agence Immo WF3 se réserve le droit à tout moment d'en modifier tout ou partie du contenu. Tout litige concernant son contenu comme son utilisation et les recours susceptibles d'en découler est soumis à la compétence exclusive des tribunaux français.</p>

      <div class=\"row border-warning border-bottom\">
        <div class=\"col-4\"></div>
        <div class=\"col-4 my-4 \">
          <div class=\"card\" style=\"width: 25rem;\">
            <div class=\"card-body\">
              <h3>Agence Immo WF3</h3>
              <span><i class=\"fas fa-map-marker-alt\"></i></a> 1 place de l'Homme de fer</span><br>
              <span class=\"ml-3\">67000 Strasbourg</span><br>
              <span><i class=\"fas fa-phone\"></i> 03 88 67 48 51</span><br>
              <span><i class=\"fas fa-envelope-open\"></i> agenceimmowf3@gmail.com</span>
              <p>Carte Professionnelle : CPI **** **** *** *** ***</p>
            </div>
          </div>
        </div>
        <div class=\"col-4\"></div>
      </div>
    </div>
  </section>
{% endblock %}", "main/mentionslegales.html.twig", "C:\\laragon\\www\\Symfony\\agence\\templates\\main\\mentionslegales.html.twig");
    }
}
