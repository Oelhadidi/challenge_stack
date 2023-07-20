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

/* /Pages/formulaireAjout.html.twig */
class __TwigTemplate_9a2d1232d7098f9ba8c381f57dff7b6e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/formulaireAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Formulaire d'ajout de bijoux";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
<link rel=\"stylesheet\" href=\"css/formulaireAjout.css\">
    <h2>Formulaire d'ajout de bijoux</h2>
    <form action=\"\" method=\"POST\">
        <label for=\"nom\">Nom du bijoux:</label>
        <input type=\"text\" id=\"nom\" name=\"nom\" required><br>

        <label for=\"prix\">Prix:</label>
        <input type=\"number\" id=\"prix\" name=\"prix\" required><br>

        <label for=\"description\">Description:</label>
        <textarea id=\"description\" name=\"description\" required></textarea><br>

        <label for=\"date_creation\">Date de création:</label>
        <input type=\"date\" id=\"date_creation\" name=\"date_creation\" required><br>

        <label for=\"stock\">Stock:</label>
        <input type=\"number\" id=\"stock\" name=\"stock\" required><br>

        <label for=\"pierre\">Pierre:</label>
        <input type=\"text\" id=\"pierre\" name=\"pierre\" required><br>

        <label for=\"taille\">Taille:</label>
        <input type=\"text\" id=\"taille\" name=\"taille\" required><br>

        <label for=\"couleur\">Couleur:</label>
        <input type=\"text\" id=\"couleur\" name=\"couleur\" required><br>

        <input type=\"submit\" value=\"Ajouter\">
    </form>

    <h2>Supprimer ou Modifier un bijoux</h2>
    <form action=\"\" method=\"POST\">
        <label for=\"id_article\">ID de l'article:</label>
        <input type=\"number\" id=\"id_article\" name=\"id_article\" required><br>
        <input type=\"submit\" name=\"action\" value=\"Supprimer\">
        <input type=\"submit\" name=\"action\" value=\"Modifier\">
    </form>
";
    }

    public function getTemplateName()
    {
        return "/Pages/formulaireAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  47 => 7,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}





{% block title %}Formulaire d'ajout de bijoux{% endblock %}
{% block body %} 
<link rel=\"stylesheet\" href=\"css/formulaireAjout.css\">
    <h2>Formulaire d'ajout de bijoux</h2>
    <form action=\"\" method=\"POST\">
        <label for=\"nom\">Nom du bijoux:</label>
        <input type=\"text\" id=\"nom\" name=\"nom\" required><br>

        <label for=\"prix\">Prix:</label>
        <input type=\"number\" id=\"prix\" name=\"prix\" required><br>

        <label for=\"description\">Description:</label>
        <textarea id=\"description\" name=\"description\" required></textarea><br>

        <label for=\"date_creation\">Date de création:</label>
        <input type=\"date\" id=\"date_creation\" name=\"date_creation\" required><br>

        <label for=\"stock\">Stock:</label>
        <input type=\"number\" id=\"stock\" name=\"stock\" required><br>

        <label for=\"pierre\">Pierre:</label>
        <input type=\"text\" id=\"pierre\" name=\"pierre\" required><br>

        <label for=\"taille\">Taille:</label>
        <input type=\"text\" id=\"taille\" name=\"taille\" required><br>

        <label for=\"couleur\">Couleur:</label>
        <input type=\"text\" id=\"couleur\" name=\"couleur\" required><br>

        <input type=\"submit\" value=\"Ajouter\">
    </form>

    <h2>Supprimer ou Modifier un bijoux</h2>
    <form action=\"\" method=\"POST\">
        <label for=\"id_article\">ID de l'article:</label>
        <input type=\"number\" id=\"id_article\" name=\"id_article\" required><br>
        <input type=\"submit\" name=\"action\" value=\"Supprimer\">
        <input type=\"submit\" name=\"action\" value=\"Modifier\">
    </form>
{% endblock %}
", "/Pages/formulaireAjout.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\formulaireAjout.html.twig");
    }
}
