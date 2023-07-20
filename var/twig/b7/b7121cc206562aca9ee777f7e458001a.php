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

/* /Composant/slideCard.html.twig */
class __TwigTemplate_1f45d7c5e42e07824878be4420b394ae extends Template
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
        echo "    <div class=\"slide-card\">
        <div class=\"box-img card\" style=\"background-image: url('css/img/";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "Logo", [], "any", false, false, false, 2), "html", null, true);
        echo "')\"></div>
        <div class=\"text-container\">
            <h3>";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "nom", [], "any", false, false, false, 4), "html", null, true);
        echo "</h3>
            <p class=\"text14\">
            ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "descriptions", [], "any", false, false, false, 6), "html", null, true);
        echo "
            </p>
            <p class=\"text14\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "prix", [], "any", false, false, false, 8), "html", null, true);
        echo "€</p>
            <a class=\"btn\">Ajouter au panier</a>
        </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "/Composant/slideCard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  50 => 6,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <div class=\"slide-card\">
        <div class=\"box-img card\" style=\"background-image: url('css/img/{{ product.Logo }}')\"></div>
        <div class=\"text-container\">
            <h3>{{product.nom}}</h3>
            <p class=\"text14\">
            {{product.descriptions}}
            </p>
            <p class=\"text14\">{{product.prix}}€</p>
            <a class=\"btn\">Ajouter au panier</a>
        </div>
    </div>", "/Composant/slideCard.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\slideCard.html.twig");
    }
}
