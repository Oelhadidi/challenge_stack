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

/* Composant/menu.html.twig */
class __TwigTemplate_21aab3360a348f4f301a805d83291e37 extends Template
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
        echo "<link rel=\"stylesheet\" href=\"css/header.css\">
<div class=\"header\">
    <div class=\"header-top\">
        <div class=\"header-top-container\">
            <!-- Searchbar -->
            <div class=\"search-field\">
                <img class=\"bi bi-search\" src=\"icones/Search.svg\"/>
                <input class=\"searchbar title4\" type=\"text\" placeholder=\"rechercher...\"/>
            </div>
            <div>
                <a href=\"/\">
                    <img class=\"logo\" src=\"icones/Logo.svg\" alt=\"logo\" />
                </a>
            </div>
            <!-- User action -->
            <div class=\"nav-profile\">
                ";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "array", true, true, false, 17)) {
            // line 18
            echo "                    <a class=\"user-action-link connexion\" href=\"/api/logout\">
                        <i class=\"bi bi-person\"></i>
                        ";
            // line 21
            echo "                        (Déconnexion)
                    </a>
                ";
        } else {
            // line 24
            echo "                    <a class=\"user-action-link connexion\" href=\"/connexion\">
                        <i class=\"bi bi-person\"></i>
                        Connexion
                    </a>
                ";
        }
        // line 29
        echo "                <a href=\"#\">
                    <img class=\"logo\" src=\"icones/User.svg\" alt=\"user\" />
                </a>
                <a href=\"/panier\">
                    <img class=\"logo\" src=\"icones/Shopping cart.svg\" alt=\"user\" />
                </a>
            </div>
            <!-- Menu burger -->
            <i class=\"bi bi-list\"></i>
        </div>
    </div>
    <div class=\"header-bottom\">
        <ul class=\"nav-link\">
            <li class=\"link-navbar text16\">
                <a href=\"/apropos\">Présentation</a>
            </li>
            ";
        // line 48
        echo "            <li class=\"link-navbar text16\">
                <a href=\"/boutique\">Shop</a>
            </li>
            <li class=\"link-navbar text16\">
                <a href=\"/contact\">Contact</a>
            </li>
        </ul>
    </div>
</div>
    
    
    
    
    
    ";
    }

    public function getTemplateName()
    {
        return "Composant/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 48,  73 => 29,  66 => 24,  61 => 21,  57 => 18,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"css/header.css\">
<div class=\"header\">
    <div class=\"header-top\">
        <div class=\"header-top-container\">
            <!-- Searchbar -->
            <div class=\"search-field\">
                <img class=\"bi bi-search\" src=\"icones/Search.svg\"/>
                <input class=\"searchbar title4\" type=\"text\" placeholder=\"rechercher...\"/>
            </div>
            <div>
                <a href=\"/\">
                    <img class=\"logo\" src=\"icones/Logo.svg\" alt=\"logo\" />
                </a>
            </div>
            <!-- User action -->
            <div class=\"nav-profile\">
                {% if user['email'] is defined %}
                    <a class=\"user-action-link connexion\" href=\"/api/logout\">
                        <i class=\"bi bi-person\"></i>
                        {# {{ user['name'] }}  #}
                        (Déconnexion)
                    </a>
                {% else %}
                    <a class=\"user-action-link connexion\" href=\"/connexion\">
                        <i class=\"bi bi-person\"></i>
                        Connexion
                    </a>
                {% endif %}
                <a href=\"#\">
                    <img class=\"logo\" src=\"icones/User.svg\" alt=\"user\" />
                </a>
                <a href=\"/panier\">
                    <img class=\"logo\" src=\"icones/Shopping cart.svg\" alt=\"user\" />
                </a>
            </div>
            <!-- Menu burger -->
            <i class=\"bi bi-list\"></i>
        </div>
    </div>
    <div class=\"header-bottom\">
        <ul class=\"nav-link\">
            <li class=\"link-navbar text16\">
                <a href=\"/apropos\">Présentation</a>
            </li>
            {# <li class=\"link-navbar text16\">
                <a href=\"/blog\">Blog</a>
            </li> #}
            <li class=\"link-navbar text16\">
                <a href=\"/boutique\">Shop</a>
            </li>
            <li class=\"link-navbar text16\">
                <a href=\"/contact\">Contact</a>
            </li>
        </ul>
    </div>
</div>
    
    
    
    
    
    ", "Composant/menu.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\menu.html.twig");
    }
}
