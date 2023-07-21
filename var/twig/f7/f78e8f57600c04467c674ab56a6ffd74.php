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

/* /Composant/cardBlog.html.twig */
class __TwigTemplate_7d43754e0bba9b589dcf11fcf3e70ad4 extends Template
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
        <div class=\"text-container\">
            <h2 class=\"article-title\">
            <a href=\"/blog/";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", [], "any", false, false, false, 5), "html", null, true);
        echo "</a></h2>
             <p class=\"subtitle\">
                ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "date_creation", [], "any", false, false, false, 7), "html", null, true);
        echo "
            </p>
            <p class=\"paragraphe\">
                ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "contenu", [], "any", false, false, false, 10), "html", null, true);
        echo "
            </p>
        </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "/Composant/cardBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 10,  50 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card-container\">
    <div class=\"card\">
        <div class=\"text-container\">
            <h2 class=\"article-title\">
            <a href=\"/blog/{{article.id}}\"> {{ article.titre }}</a></h2>
             <p class=\"subtitle\">
                {{ article.date_creation }}
            </p>
            <p class=\"paragraphe\">
                {{ article.contenu }}
            </p>
        </div>
</div>
    ", "/Composant/cardBlog.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\cardblog.html.twig");
    }
}
