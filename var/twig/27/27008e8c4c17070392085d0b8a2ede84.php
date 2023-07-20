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

/* /Pages/produitDetails.html.twig */
class __TwigTemplate_5ca787417de8db25de43fb7f3c7f11f3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/produitDetails.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <!-- MENU -->
    ";
        // line 6
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/produitDetails.html.twig", 6)->display(twig_array_merge($context, ["user" => ($context["userLoggedIn"] ?? null)]));
        // line 7
        echo "
    <!-- CONTENT -->
    <main>
         <div class=\"Back\">
             <a href=\"/boutique\" class=\"retour\">&lsaquo; Retour à la boutique</a>
             <!-- Bouton qui permet de retourner à la page Liste Article-->
         </div>

         <section class=\"detail\">
 
             <div class=\"image\">
                 <img src=";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "image", [], "any", false, false, false, 18), "html", null, true);
        echo ">
                 <div class=\"miniature\">
                     <img src=\"./images/col_photo.jpeg\" class=\"content\">
                     <img src=\"./images/col_photo2.jpeg\" class=\"content\">
                     <img src=\"./images/col_photo3.jpeg\" class=\"content\">
                 </div>
             </div>
 
             <div class=\"product\">
                 <h2>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "</h2>
                 <p>
                    ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "descriptions", [], "any", false, false, false, 29), "html", null, true);
        echo "
                    ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "couleur", [], "any", false, false, false, 30), "html", null, true);
        echo "

                 </p>
                 <div class=\"price\">
                     <p>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "prix", [], "any", false, false, false, 34), "html", null, true);
        echo "€</p>
                     <img src=\"/img/size.JPG\">
                 </div>
                 
                 
 
                 <div class=\"btn\">
                     <button> Ajouter au panier</button>
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"20\" fill=\"currentColor\"
                     class=\"bi bi-heart\" viewBox=\"0 0 16 16\">
                     <path
                         d=\"m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\" />
                     </svg>
                 </div>
                 <hr>
                 <button class=\"Commander\">Commander</button>
                 <span id=\"Livraison\">Livraison gratuite</span>
                 <span id=\"Dispo\">Actuellement Disponible !</span>
             </div>
         </section>
         <hr class=\"hr2\">
         
         <h2 id=\"ProduitSim\"> Produits Similaires </h2>
         <section class=\"similaire\">
                 
             <div id=\"divborder\">
                 <a href=\"\">
                     <img src=\"\">
                 </a>
                 <h2>Alexandra</h2>
                 <div class=\"cards\">
                     <p>65€</p>
                     <button>Ajouter au panier</button>
                 </div>
             </div>
 
             <div id=\"divborder\">
                 <a href=\"\">
                     <img src=\"\" class=\"img\">
                 </a>
                 <h2>Gastby</h2>
                 <div class=\"cards\">
                     <p>85€</p>
                     <button>Ajouter au panier</button>
                 </div>
             </div>
 
             <div id=\"divborder\">
                 <a href=\"\">
                     <img src=\"\" class=\"img\">
                 </a>
                 <h2>Square Red</h2>
                 <div class=\"cards\">
                     <p>92 €</p>
                     <button>Ajouter au panier</button>
                 </div>
                 
             </div>
         </section>
 
     </main>
    <!-- Footer -->
    ";
        // line 96
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/produitDetails.html.twig", 96)->display($context);
        // line 97
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Pages/produitDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 97,  169 => 96,  104 => 34,  97 => 30,  93 => 29,  88 => 27,  76 => 18,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{product.name}}{% endblock %}
{% block body %}
    <!-- MENU -->
    {% include 'Composant/menu.html.twig' with {'user': userLoggedIn} %}

    <!-- CONTENT -->
    <main>
         <div class=\"Back\">
             <a href=\"/boutique\" class=\"retour\">&lsaquo; Retour à la boutique</a>
             <!-- Bouton qui permet de retourner à la page Liste Article-->
         </div>

         <section class=\"detail\">
 
             <div class=\"image\">
                 <img src={{bijoux.image}}>
                 <div class=\"miniature\">
                     <img src=\"./images/col_photo.jpeg\" class=\"content\">
                     <img src=\"./images/col_photo2.jpeg\" class=\"content\">
                     <img src=\"./images/col_photo3.jpeg\" class=\"content\">
                 </div>
             </div>
 
             <div class=\"product\">
                 <h2>{{bijoux.nom}}</h2>
                 <p>
                    {{bijoux.descriptions}}
                    {{bijoux.couleur}}

                 </p>
                 <div class=\"price\">
                     <p>{{product.prix}}€</p>
                     <img src=\"/img/size.JPG\">
                 </div>
                 
                 
 
                 <div class=\"btn\">
                     <button> Ajouter au panier</button>
                     <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"20\" fill=\"currentColor\"
                     class=\"bi bi-heart\" viewBox=\"0 0 16 16\">
                     <path
                         d=\"m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z\" />
                     </svg>
                 </div>
                 <hr>
                 <button class=\"Commander\">Commander</button>
                 <span id=\"Livraison\">Livraison gratuite</span>
                 <span id=\"Dispo\">Actuellement Disponible !</span>
             </div>
         </section>
         <hr class=\"hr2\">
         
         <h2 id=\"ProduitSim\"> Produits Similaires </h2>
         <section class=\"similaire\">
                 
             <div id=\"divborder\">
                 <a href=\"\">
                     <img src=\"\">
                 </a>
                 <h2>Alexandra</h2>
                 <div class=\"cards\">
                     <p>65€</p>
                     <button>Ajouter au panier</button>
                 </div>
             </div>
 
             <div id=\"divborder\">
                 <a href=\"\">
                     <img src=\"\" class=\"img\">
                 </a>
                 <h2>Gastby</h2>
                 <div class=\"cards\">
                     <p>85€</p>
                     <button>Ajouter au panier</button>
                 </div>
             </div>
 
             <div id=\"divborder\">
                 <a href=\"\">
                     <img src=\"\" class=\"img\">
                 </a>
                 <h2>Square Red</h2>
                 <div class=\"cards\">
                     <p>92 €</p>
                     <button>Ajouter au panier</button>
                 </div>
                 
             </div>
         </section>
 
     </main>
    <!-- Footer -->
    {% include 'Composant/footer.html.twig' %}

{% endblock %}", "/Pages/produitDetails.html.twig", "/workspaces/challenge_stack/templates/Pages/produitDetails.html.twig");
    }
}
