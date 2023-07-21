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

/* /Composant/categorie.html.twig */
class __TwigTemplate_f81515c33cb616b6b742525fd554e84c extends Template
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
        echo "<div class=\"image-box c";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["typ"] ?? null), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
<p class=\"title-categorie\">";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["typ"] ?? null), "nom", [], "any", false, false, false, 2), "html", null, true);
        echo "</p>
</div>";
    }

    public function getTemplateName()
    {
        return "/Composant/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"image-box c{{typ.id}}\">
<p class=\"title-categorie\">{{ typ.nom }}</p>
</div>", "/Composant/categorie.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\categorie.html.twig");
    }
}
