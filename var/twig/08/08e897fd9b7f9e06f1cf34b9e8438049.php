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

/* /Composant/BlocApropos.html.twig */
class __TwigTemplate_18887e673ba2ffd965e4247902b9ff1b extends Template
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
        echo "<div class=\"about\">
    <div class=\"about-container\">
        <p class=\"signature\">Emma </br> <span>Paris</span></p>
        <!-- Image -->
        <div class=\"text-container\">
            <div class=\"box-image-container\">
                <div class=\"under-box-image\" style=\"background-image: url('";
        // line 7
        echo twig_escape_filter($this->env, ($context["background"] ?? null), "html", null, true);
        echo "')\"></div>
                <div class=\"box-image\"></div>
            </div>
            <div class=\"text\">
                <h2>";
        // line 11
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</h2>
                <p class=\"paragraphe\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
        echo "</h2> </p> 
                <a class=\"btn\" href=\"#\">Voir plus</a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/Composant/BlocApropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  52 => 11,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"about\">
    <div class=\"about-container\">
        <p class=\"signature\">Emma </br> <span>Paris</span></p>
        <!-- Image -->
        <div class=\"text-container\">
            <div class=\"box-image-container\">
                <div class=\"under-box-image\" style=\"background-image: url('{{background }}')\"></div>
                <div class=\"box-image\"></div>
            </div>
            <div class=\"text\">
                <h2>{{title}}</h2>
                <p class=\"paragraphe\">{{description}}</h2> </p> 
                <a class=\"btn\" href=\"#\">Voir plus</a>
            </div>
        </div>
    </div>
</div>", "/Composant/BlocApropos.html.twig", "/workspaces/challenge_stack/templates/Composant/BlocApropos.html.twig");
    }
}
