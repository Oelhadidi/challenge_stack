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

/* /Pages/articleDetails.html.twig */
class __TwigTemplate_8b39b58a284d6ff7156dd221916d5b24 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/articleDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <!-- MENU -->
    ";
        // line 6
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/articleDetails.html.twig", 6)->display(twig_array_merge($context, ["user" => ($context["userLoggedIn"] ?? null)]));
        // line 7
        echo "
    <!-- CONTENT -->
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "titre", [], "any", false, false, false, 9), "html", null, true);
        echo "</h1>
    <p>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "auteur", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "date_creation", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
    <img src=";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "image_id", [], "any", false, false, false, 12), "html", null, true);
        echo " alt=\"image article\" />
    <p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["blog"] ?? null), "contenu", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>


    <!-- Footer -->
    ";
        // line 17
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/articleDetails.html.twig", 17)->display($context);
        // line 18
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Pages/articleDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  90 => 17,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{article.name}}{% endblock %}
{% block body %}
    <!-- MENU -->
    {% include 'Composant/menu.html.twig' with {'user': userLoggedIn} %}

    <!-- CONTENT -->
    <h1>{{blog.titre}}</h1>
    <p>{{blog.auteur}}</p>
    <p>{{blog.date_creation}}</p>
    <img src={{blog.image_id}} alt=\"image article\" />
    <p>{{blog.contenu}}</p>


    <!-- Footer -->
    {% include 'Composant/footer.html.twig' %}

{% endblock %}", "/Pages/articleDetails.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\articleDetails.html.twig");
    }
}
