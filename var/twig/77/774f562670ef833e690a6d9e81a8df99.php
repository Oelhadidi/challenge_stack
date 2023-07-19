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

/* /Composant/menu.html.twig */
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
        echo "<div class=\"header\">
    <div class=\"header-top\">
        <div class=\"header-top-container\">
            <!-- Searchbar -->
            <i class=\"bi bi-search\"></i>
            <input class=\"searchbar\" type=\"text\" placeholder=\"rechercher...\"/>
            <a href=\"#\">
                <img class=\"logo\" src=\"./images/logo.png\" alt=\"logo\" />
            </a>
            <!-- User action -->
            ";
        // line 11
        if (array_key_exists("user", $context)) {
            // line 12
            echo "                <a class=\"user-action-link connexion\" href=\"#\">
                    <i class=\"bi bi-person\"></i>
                    ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 14), "html", null, true);
            echo " (Déconnexion)
                </a>
            ";
        } else {
            // line 17
            echo "                <a class=\"user-action-link connexion\" href=\"/connexion\">
                    <i class=\"bi bi-person\"></i>
                    Connexion
                </a>
            ";
        }
        // line 22
        echo "            <!-- Menu burger -->
            <i class=\"bi bi-list\"></i>
        </div>
    </div>
    <div class=\"header-bottom\">
        <ul class=\"nav-link\">
            <li class=\"link\">
                <a href=\"/apropos\">Présentation</a>
            </li>
            <li class=\"link\">
                <a href=\"/blog\">Blog</a>
            </li>
            <li class=\"link\">
                <a href=\"/boutique\">Shop</a>
            </li>
            <li class=\"link\">
                <a href=\"/contact\">Contact</a>
            </li>
        </ul>
    </div>
</div>
    
    
    
    
    
    ";
    }

    public function getTemplateName()
    {
        return "/Composant/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 22,  61 => 17,  55 => 14,  51 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header\">
    <div class=\"header-top\">
        <div class=\"header-top-container\">
            <!-- Searchbar -->
            <i class=\"bi bi-search\"></i>
            <input class=\"searchbar\" type=\"text\" placeholder=\"rechercher...\"/>
            <a href=\"#\">
                <img class=\"logo\" src=\"./images/logo.png\" alt=\"logo\" />
            </a>
            <!-- User action -->
            {% if user is defined %}
                <a class=\"user-action-link connexion\" href=\"#\">
                    <i class=\"bi bi-person\"></i>
                    {{ user.username }} (Déconnexion)
                </a>
            {% else %}
                <a class=\"user-action-link connexion\" href=\"/connexion\">
                    <i class=\"bi bi-person\"></i>
                    Connexion
                </a>
            {% endif %}
            <!-- Menu burger -->
            <i class=\"bi bi-list\"></i>
        </div>
    </div>
    <div class=\"header-bottom\">
        <ul class=\"nav-link\">
            <li class=\"link\">
                <a href=\"/apropos\">Présentation</a>
            </li>
            <li class=\"link\">
                <a href=\"/blog\">Blog</a>
            </li>
            <li class=\"link\">
                <a href=\"/boutique\">Shop</a>
            </li>
            <li class=\"link\">
                <a href=\"/contact\">Contact</a>
            </li>
        </ul>
    </div>
</div>
    
    
    
    
    
    ", "/Composant/menu.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\menu.html.twig");
    }
}
