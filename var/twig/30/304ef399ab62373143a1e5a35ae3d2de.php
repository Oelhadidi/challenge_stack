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

/* /Pages/register.html.twig */
class __TwigTemplate_a37a9ec450fd54f3b47b0d715f1c5f41 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/register.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!-- MENU -->
 ";
        // line 7
        echo "

";
        // line 9
        $this->loadTemplate("Composant/formulaires.html.twig", "/Pages/register.html.twig", 9)->display(twig_array_merge($context, ["formAction" => "/inscription", "formMethod" => "POST", "isRegistrationPage" => true]));
        // line 14
        echo "
<!-- FOOTER -->
";
    }

    public function getTemplateName()
    {
        return "/Pages/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  65 => 9,  61 => 7,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}
{% block body %}
<!-- MENU -->
 {# {% include 'Composant/menu.html.twig' with {'user': user} %}¨  #}


{% include 'Composant/formulaires.html.twig' with {
    'formAction': '/inscription',
    'formMethod': 'POST',
    'isRegistrationPage': true
} %}

<!-- FOOTER -->
{# {% include 'Composant/footer.html.twig' %} #}
{% endblock %}", "/Pages/register.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\register.html.twig");
    }
}
