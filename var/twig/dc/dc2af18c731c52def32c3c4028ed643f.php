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

/* /Composant/cardboutique.html.twig */
class __TwigTemplate_aec2b94ae262cc5e602a65df2a71b0c8 extends Template
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
        // line 1
        echo "<div class=\"card-container\">
  <div class=\"card\">        
    <div class=\"image-card\" style=\"background-image: url('";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image", [], "any", false, false, false, 3), "html", null, true);
        echo "')\"></div>
    <div class=\"text-container-card\">
      <a href=\"/boutique/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\" ><h3>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 5), "html", null, true);
        echo "</h3></a>
      <p>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "descriptions", [], "any", false, false, false, 6), "html", null, true);
        echo "</p>
      <div class=\"price\">
        <p class=\"des\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "prix", [], "any", false, false, false, 8), "html", null, true);
        echo "€</p>
        <button class=\"btn-panier\" data-user=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["userId"] ?? null), "html", null, true);
        echo "\" data-product=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 9), "html", null, true);
        echo "\">Ajouter au Panier</button>
    </div>
  </div>
</div>



    ";
    }

    public function getTemplateName()
    {
        return "/Composant/cardboutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  57 => 8,  52 => 6,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-container\">
  <div class=\"card\">        
    <div class=\"image-card\" style=\"background-image: url('{{ product.image }}')\"></div>
    <div class=\"text-container-card\">
      <a href=\"/boutique/{{product.id}}\" ><h3>{{product.nom}}</h3></a>
      <p>{{product.descriptions}}</p>
      <div class=\"price\">
        <p class=\"des\">{{product.prix}}€</p>
        <button class=\"btn-panier\" data-user=\"{{ userId }}\" data-product=\"{{ product.id }}\">Ajouter au Panier</button>
    </div>
  </div>
</div>



    ", "/Composant/cardboutique.html.twig", "/workspaces/challenge_stack/templates/Composant/cardboutique.html.twig");
    }
}
