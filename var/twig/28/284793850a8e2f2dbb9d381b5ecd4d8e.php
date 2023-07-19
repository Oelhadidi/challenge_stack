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

/* /Pages/connexion.html.twig */
class __TwigTemplate_ae73ca2d715ba7db00a6d431acabf102 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/connexion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
 ";
        // line 6
        if (($context["user"] ?? null)) {
            // line 7
            echo "    <h2>Bienvenue ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "firstname", [], "any", false, false, false, 7), "html", null, true);
            echo "</h2>
";
        } else {
            // line 9
            echo "    <h2>Connectez vous avec votre adresse mail</h2>
";
        }
        // line 11
        echo "    ";
        $this->loadTemplate("Composant/formulaires.html.twig", "/Pages/connexion.html.twig", 11)->display(twig_array_merge($context, ["formAction" => "/connexion", "formMethod" => "POST", "isRegistrationPage" => false]));
    }

    public function getTemplateName()
    {
        return "/Pages/connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 11,  69 => 9,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Connexion{% endblock %}
{% block body %}

 {% if user %}
    <h2>Bienvenue {{ user.firstname}}</h2>
{% else %}
    <h2>Connectez vous avec votre adresse mail</h2>
{% endif %}
    {% include 'Composant/formulaires.html.twig' with {
    'formAction': '/connexion',
    'formMethod': 'POST',
    'isRegistrationPage': false
} %}
{% endblock %}", "/Pages/connexion.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\connexion.html.twig");
    }
}
