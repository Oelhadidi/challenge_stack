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

/* Composant/banner.html.twig */
class __TwigTemplate_692d4b06bbf9fe92c1fd24b947a27267 extends Template
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
        echo "<section class=\"banner-blog\" style=\"background-image: url('";
        echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
        echo "')\">
  <p class=\"signature-blog\">Emma </br> <span>Paris</span></p>
  <h1>";
        // line 3
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h1>
</section>
";
    }

    public function getTemplateName()
    {
        return "Composant/banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"banner-blog\" style=\"background-image: url('{{ background }}')\">
  <p class=\"signature-blog\">Emma </br> <span>Paris</span></p>
  <h1>{{ title }}</h1>
</section>
", "Composant/banner.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\banner.html.twig");
    }
}
