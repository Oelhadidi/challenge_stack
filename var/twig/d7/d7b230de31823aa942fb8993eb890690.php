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
class __TwigTemplate_9627c30838baaa5eba6c619b6f1b4542 extends Template
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
        echo "
\t<div class=\"card\" data-id=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
\t\t<div class=\"image-card\" style=\"background-image: url('css/img/";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "Logo", [], "any", false, false, false, 3), "html", null, true);
        echo "')\"></div>
\t\t<div class=\"text-container-card\">
\t\t\t<a href=\"/boutique/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
\t\t\t\t<h3>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 6), "html", null, true);
        echo "</h3>
\t\t\t</a>
\t\t\t<p>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "descriptions", [], "any", false, false, false, 8), "html", null, true);
        echo "</p>
\t\t\t<div class=\"price\">
\t\t\t\t<p class=\"des\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "prix", [], "any", false, false, false, 10), "html", null, true);
        echo "€</p>
\t\t\t\t<button class=\"btn-panier\" data-user=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["userId"] ?? null), "html", null, true);
        echo "\" data-product=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\">Ajouter au Panier</button>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return array (  67 => 11,  63 => 10,  58 => 8,  53 => 6,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
\t<div class=\"card\" data-id=\"{{product.id}}\">
\t\t<div class=\"image-card\" style=\"background-image: url('css/img/{{ product.Logo }}')\"></div>
\t\t<div class=\"text-container-card\">
\t\t\t<a href=\"/boutique/{{product.id}}\">
\t\t\t\t<h3>{{product.nom}}</h3>
\t\t\t</a>
\t\t\t<p>{{product.descriptions}}</p>
\t\t\t<div class=\"price\">
\t\t\t\t<p class=\"des\">{{product.prix}}€</p>
\t\t\t\t<button class=\"btn-panier\" data-user=\"{{ userId }}\" data-product=\"{{ product.id }}\">Ajouter au Panier</button>
\t\t\t</div>
\t\t</div>
\t</div>
", "/Composant/cardboutique.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\cardboutique.html.twig");
    }
}
