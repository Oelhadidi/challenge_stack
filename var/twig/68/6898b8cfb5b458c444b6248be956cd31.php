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
class __TwigTemplate_b8282208c36cd43b8d7aa7fb36796c71 extends Template
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

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "\t";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "\t<link
\trel=\"stylesheet\" href=\"css/produitDetails.css\">
\t<!-- MENU -->
\t";
        // line 11
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/produitDetails.html.twig", 11)->display(twig_array_merge($context, ["user" => ($context["userLoggedIn"] ?? null)]));
        // line 12
        echo "
\t<!-- CONTENT -->
\t<main>
\t\t<div class\"container-details\">
\t\t\t<div class=\"Back\">
\t\t\t\t<a href=\"/boutique\" class=\"retour\">&lsaquo; Retour à la boutique</a>
\t\t\t\t<!-- Bouton qui permet de retourner à la page Liste Article-->
\t\t\t</div>

\t\t\t<section class=\"detail\">

\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img src='css/img/";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "Logo", [], "any", false, false, false, 24), "html", null, true);
        echo "'>
\t\t\t\t\t<div class=\"miniature\">
\t\t\t\t\t\t<img src=\"css/img/col_photo.jpeg\" class=\"content\">
\t\t\t\t\t\t<img src=\"css/img/col_photo2.jpeg\" class=\"content\">
\t\t\t\t\t\t<img src=\"css/img/col_photo3.jpeg\" class=\"content\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t<h2>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "nom", [], "any", false, false, false, 33), "html", null, true);
        echo "</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "descriptions", [], "any", false, false, false, 35), "html", null, true);
        echo "
\t\t\t\t\t\t";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "couleur", [], "any", false, false, false, 36), "html", null, true);
        echo "

\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t<p>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["bijoux"] ?? null), "prix", [], "any", false, false, false, 40), "html", null, true);
        echo "€</p>
\t\t\t\t\t\t";
        // line 42
        echo "\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t<button class=\"btn-panier\" data-product=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\">Ajouter au Panier</button>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<button class=\"Commander\">Commander</button>
\t\t\t\t\t<span id=\"Livraison\">Livraison gratuite</span>
\t\t\t\t\t<span id=\"Dispo\">Actuellement Disponible !</span>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<hr class=\"hr2\">

\t\t\t<h2 id=\"ProduitSim\">
\t\t\t\tProduits Similaires
\t\t\t</h2>
\t\t\t<section class=\"similaire\">

\t\t\t\t<div id=\"divborder\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img src=\"/css/img/news_picture1.jpeg\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>Alexandra</h2>
\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t<p>65€</p>
\t\t\t\t\t\t<button>Ajouter au panier</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"divborder\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img src=\"/css/img/news_picture2.jpeg\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>Gastby</h2>
\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t<p>85€</p>
\t\t\t\t\t\t<button>Ajouter au panier</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"divborder\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img src=\"/css/img/news_picture3.jpeg\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>Square Red</h2>
\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t<p>92 €</p>
\t\t\t\t\t\t<button>Ajouter au panier</button>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<div></main>
\t\t\t<!-- Footer -->
\t\t\t";
        // line 97
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/produitDetails.html.twig", 97)->display($context);
        // line 98
        echo "            <script>
             document.addEventListener('DOMContentLoaded', function() {
                const addToCartBtns = document.querySelectorAll('.btn-panier');

                addToCartBtns.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const productId = button.getAttribute('data-product');       

                    fetch(`/api/boutique/add-cart/\${productId}`, {
                        method: 'GET'
                    })
                    .then(response =>{
                    if(!response.ok)
                        return response.text()
                    return response.json()
                    })
                    .then(data => {
                        console.log(data); // Output userCart to the browser console
                    })
                    .catch(error => {
                        console.error('An error occurred while adding to cart', error);
                    });
                });
                });
            });
            
            </script>

\t\t";
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
        return array (  177 => 98,  175 => 97,  121 => 46,  115 => 42,  111 => 40,  104 => 36,  100 => 35,  95 => 33,  83 => 24,  69 => 12,  67 => 11,  62 => 8,  58 => 7,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}
\t{{product.name}}
{% endblock %}
{% block body %}
\t<link
\trel=\"stylesheet\" href=\"css/produitDetails.css\">
\t<!-- MENU -->
\t{% include 'Composant/menu.html.twig' with {'user': userLoggedIn} %}

\t<!-- CONTENT -->
\t<main>
\t\t<div class\"container-details\">
\t\t\t<div class=\"Back\">
\t\t\t\t<a href=\"/boutique\" class=\"retour\">&lsaquo; Retour à la boutique</a>
\t\t\t\t<!-- Bouton qui permet de retourner à la page Liste Article-->
\t\t\t</div>

\t\t\t<section class=\"detail\">

\t\t\t\t<div class=\"image\">
\t\t\t\t\t<img src='css/img/{{bijoux.Logo}}'>
\t\t\t\t\t<div class=\"miniature\">
\t\t\t\t\t\t<img src=\"css/img/col_photo.jpeg\" class=\"content\">
\t\t\t\t\t\t<img src=\"css/img/col_photo2.jpeg\" class=\"content\">
\t\t\t\t\t\t<img src=\"css/img/col_photo3.jpeg\" class=\"content\">
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"product-details\">
\t\t\t\t\t<h2>{{bijoux.nom}}</h2>
\t\t\t\t\t<p>
\t\t\t\t\t\t{{bijoux.descriptions}}
\t\t\t\t\t\t{{bijoux.couleur}}

\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"price\">
\t\t\t\t\t\t<p>{{bijoux.prix}}€</p>
\t\t\t\t\t\t{# <img src=\"css/img/size.jpg\"> #}
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"btn\">
\t\t\t\t\t\t<button class=\"btn-panier\" data-product=\"{{ product.id }}\">Ajouter au Panier</button>
\t\t\t\t\t</div>
\t\t\t\t\t<hr>
\t\t\t\t\t<button class=\"Commander\">Commander</button>
\t\t\t\t\t<span id=\"Livraison\">Livraison gratuite</span>
\t\t\t\t\t<span id=\"Dispo\">Actuellement Disponible !</span>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<hr class=\"hr2\">

\t\t\t<h2 id=\"ProduitSim\">
\t\t\t\tProduits Similaires
\t\t\t</h2>
\t\t\t<section class=\"similaire\">

\t\t\t\t<div id=\"divborder\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img src=\"/css/img/news_picture1.jpeg\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>Alexandra</h2>
\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t<p>65€</p>
\t\t\t\t\t\t<button>Ajouter au panier</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"divborder\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img src=\"/css/img/news_picture2.jpeg\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>Gastby</h2>
\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t<p>85€</p>
\t\t\t\t\t\t<button>Ajouter au panier</button>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"divborder\">
\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t<img src=\"/css/img/news_picture3.jpeg\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>Square Red</h2>
\t\t\t\t\t<div class=\"cards\">
\t\t\t\t\t\t<p>92 €</p>
\t\t\t\t\t\t<button>Ajouter au panier</button>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</section>
\t\t\t<div></main>
\t\t\t<!-- Footer -->
\t\t\t{% include 'Composant/footer.html.twig' %}
            <script>
             document.addEventListener('DOMContentLoaded', function() {
                const addToCartBtns = document.querySelectorAll('.btn-panier');

                addToCartBtns.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();

                    const productId = button.getAttribute('data-product');       

                    fetch(`/api/boutique/add-cart/\${productId}`, {
                        method: 'GET'
                    })
                    .then(response =>{
                    if(!response.ok)
                        return response.text()
                    return response.json()
                    })
                    .then(data => {
                        console.log(data); // Output userCart to the browser console
                    })
                    .catch(error => {
                        console.error('An error occurred while adding to cart', error);
                    });
                });
                });
            });
            
            </script>

\t\t{% endblock %}
", "/Pages/produitDetails.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\produitDetails.html.twig");
    }
}
