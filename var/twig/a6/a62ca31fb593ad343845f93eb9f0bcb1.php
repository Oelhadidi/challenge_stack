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

/* /Pages/contact.html.twig */
class __TwigTemplate_cb4f8a2a0657ecf6808777ea087a30ae extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Contact";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<!-- MENU -->
";
        // line 6
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/contact.html.twig", 6)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 7
        echo "
<!-- CONTENT -->
<section>
        
        <div id=\"Container\">
            <form id=\"form\" >
      
            <label for=\"nom\">Adresse mail</label>
            <input type=\"text\" id=\"nom\" name=\"nom\" required>
        
      
            <label for=\"sujet\">Sujet :</label>
            <input type=\"text\" id=\"sujet\" name=\"sujet\" required>
      
            <input type=\"submit\" value=\"Envoyer\">
      
      
            </form>
        </div>
      
        <div id=\"content\">
            <div id=\"bloc\">
                <h2>Des Questions ?</h2>
                <h2>Un Commentaire ?</h2>
                <h2>Une Demande Spécifique ?</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
            </div>
        </div>
    </section>

    <section id=\"map\">
        
    </section>

<!-- FOOTER -->
";
        // line 42
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/contact.html.twig", 42)->display($context);
    }

    public function getTemplateName()
    {
        return "/Pages/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 42,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}
{% block body %}
<!-- MENU -->
{% include 'Composant/menu.html.twig' with {'user': user} %}

<!-- CONTENT -->
<section>
        
        <div id=\"Container\">
            <form id=\"form\" >
      
            <label for=\"nom\">Adresse mail</label>
            <input type=\"text\" id=\"nom\" name=\"nom\" required>
        
      
            <label for=\"sujet\">Sujet :</label>
            <input type=\"text\" id=\"sujet\" name=\"sujet\" required>
      
            <input type=\"submit\" value=\"Envoyer\">
      
      
            </form>
        </div>
      
        <div id=\"content\">
            <div id=\"bloc\">
                <h2>Des Questions ?</h2>
                <h2>Un Commentaire ?</h2>
                <h2>Une Demande Spécifique ?</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
            </div>
        </div>
    </section>

    <section id=\"map\">
        
    </section>

<!-- FOOTER -->
{% include 'Composant/footer.html.twig' %}
{% endblock %}", "/Pages/contact.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\contact.html.twig");
    }
}
