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

/* /Pages/panier.html.twig */
class __TwigTemplate_0a02781e570f143ef4c309f5ead3d0b3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 5
        $this->displayBlock('body', $context, $blocks);
        // line 165
        echo "=
";
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "\t<link
\trel=\"stylesheet\" href=\"css/panier.css\">
\t<!-- MENU -->
\t";
        // line 9
        $this->loadTemplate("/Composant/menu.html.twig", "/Pages/panier.html.twig", 9)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 10
        echo "    <div class=\"page\">
\t";
        // line 69
        echo "

\t\t<section id=\"Panier\">
\t\t\t<div class=\"Container2\">
                ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cartItems"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["cart"]) {
            // line 74
            echo "                    <div class=\"cart-item\" >
                        <div id=\"item\">
                            <img src=\"css/img/BORond.jpeg\" alt=\"BORond\">
                            <span>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "nom", [], "any", false, false, false, 77), "html", null, true);
            echo "</span>
                        </div>

                        
\t\t\t\t\t\t<div class=\"cart-data\">
\t\t\t\t\t\t<span id=\"cart-price-";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "prix", [], "any", false, false, false, 82), "html", null, true);
            echo "€ x</span><input class=\"cart-qty\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "id", [], "any", false, false, false, 82), "html", null, true);
            echo "\" type=\"number\" max=\"99\" min=\"1\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "quantity", [], "any", false, false, false, 82), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"delete-btn\" data-product-id=\"";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cart"], "id", [], "any", false, false, false, 84), "html", null, true);
            echo "\">Supprimer</button>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cart'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t</div>

\t\t\t<div id=\"Promo\">
\t\t\t\t<input type=\"text\" id=\"text\" placeholder=\" Code Promotion\">
\t\t\t\t";
        // line 92
        echo "\t\t\t</div>

\t\t\t<div id=\"SousTotal\">
\t\t\t\t<span>Sous Total</span>
\t\t\t\t<span class=\"cart-total\">";
        // line 96
        echo twig_escape_filter($this->env, ($context["cartTotal"] ?? null), "html", null, true);
        echo "€</span>
\t\t\t</div>
\t\t\t<div id=\"SousTotal\">
\t\t\t\t<span>Livraison</span>
\t\t\t\t<span>Livraison gratuite</span>
\t\t\t</div>

\t\t\t<div id=\"Total\">
\t\t\t\t<span>Total</span>
\t\t\t\t<span class=\"cart-total\">";
        // line 105
        echo twig_escape_filter($this->env, ($context["cartTotal"] ?? null), "html", null, true);
        echo "€</span>
\t\t\t</div>
\t\t</section>
\t</div>
</div>

\t<!-- FOOTER -->
\t";
        // line 112
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/panier.html.twig", 112)->display($context);
        // line 113
        echo "

\t <script>
\t\t\t    // ADD EVENT LISTENER TO DELETE BUTTONS
\t\t\t    document.addEventListener('DOMContentLoaded', function() {
\t\t\t        const deleteBtns = document.querySelectorAll('.delete-btn');
\t\t\t
\t\t\t        deleteBtns.forEach(button => {
\t\t\t            button.addEventListener('click', function(event) {
\t\t\t                event.preventDefault();
\t\t\t
\t\t\t                const productId = button.dataset.productId;
\t\t\t                deleteProduct(productId);
\t\t\t            });
\t\t\t        });
\t\t\t    });
\t\t\t
\t\t\t    // DELETE PRODUCT
\t\t\t    function deleteProduct(productId) {
\t\t\t        fetch(`api/panier/remove/\${productId}`, {
\t\t\t            method: 'DELETE'
\t\t\t        })
\t\t\t        .then(response => {
\t\t\t            if (response.ok) {
\t\t\t                console.log('Product removed from the cart.', response.data);
\t\t\t                // Refresh the page or update the cart data after successful deletion
\t\t\t                location.reload();
\t\t\t            } else {
\t\t\t                console.error('An error occurred while removing the product from the cart.');
\t\t\t            }
\t\t\t        })
\t\t\t        .catch(error => {
\t\t\t            console.error('An error occurred while removing the product from the cart.', error);
\t\t\t        });
\t\t\t    }

\t\t\t\tdocument.querySelectorAll('.cart-qty').forEach((cartQty)=>{
\t\t\t\t\tconst cartItemId = cartQty.getAttribute('data-id');
\t\t\t\t\tcartQty.addEventListener('change',()=>{
\t\t\t\t\t\tfetch(`/panier/updateqty/\${cartItemId}/\${parseInt(cartQty.value)}`,
\t\t\t\t\t\t{method:'GET'}).then(res=> res.json()).
\t\t\t\t\t\tthen(res=>{
\t\t\t\t\t\t\tdocument.querySelectorAll(`.cart-total`).forEach((node)=>{
\t\t\t\t\t\t\t\tnode.innerHTML = res.total+'€';
\t\t\t\t\t\t\t})
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t})
\t\t\t
\t\t\t</script>

";
    }

    public function getTemplateName()
    {
        return "/Pages/panier.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 113,  148 => 112,  138 => 105,  126 => 96,  120 => 92,  114 => 87,  105 => 84,  94 => 82,  86 => 77,  81 => 74,  77 => 73,  71 => 69,  68 => 10,  66 => 9,  61 => 6,  57 => 5,  51 => 3,  46 => 165,  44 => 5,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

{% block title %}
{% endblock %}
{% block body %}
\t<link
\trel=\"stylesheet\" href=\"css/panier.css\">
\t<!-- MENU -->
\t{% include '/Composant/menu.html.twig' with {'user': user} %}
    <div class=\"page\">
\t{# <section id=\"Contenue\">
\t\t<div class=\"Container\">
\t\t\t<img class=\"logo\" src=\"css/img/logo.png\" alt=\"Logo\">
\t\t\t<img class=\"Paiement\" src=\"css/img/Paiement.jpg\" alt=\"Paiement\">
\t\t</div>
\t\t<div class=\"Infos\">

\t\t\t<div class=\"Liste\">
\t\t\t\t<ul>
\t\t\t\t\t<li>Panier</li>
\t\t\t\t\t<li>Informations</li>
\t\t\t\t\t<li>Adresse de Livraison</li>
\t\t\t\t\t<li>Paiement</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<hr>
\t\t\t<div class=\"Coordonnées\">
\t\t\t\t<label id=\"Titre\" for=\"coordonnees_input\">Coordonnées</label>
\t\t\t\t<input type=\"text\" id=\"coordonnees_input\" placeholder=\" Email ou Numéro de portable\">
\t\t\t\t<input type=\"checkbox\" id=\"coordonnees_checkbox\">
\t\t\t\t<label for=\"coordonnees_checkbox\">Envoyez-moi les nouvelles et les offres par e-mail</label>
\t\t\t</div>

\t\t\t<div class=\"Adresse\">
\t\t\t\t<label id=\"Titre\" for=\"Text\">Adresse d'expédition</label>
\t\t\t\t<input type=\"text\" id=\"Text\" placeholder=\" France\">
\t\t\t\t<div class=\"PetitText\">
\t\t\t\t\t<input type=\"text\" id=\"PetitText\" placeholder=\" Prénom\">
\t\t\t\t\t<input type=\"text\" id=\"PetitText\" placeholder=\" Nom\">
\t\t\t\t</div>
\t\t\t\t<input type=\"text\" id=\"Text\" placeholder=\" Adresse\">
\t\t\t\t<input type=\"text\" id=\"Text\" placeholder=\" Appartement, Suite, etc..\">
\t\t\t\t<div class=\"PetitText\">
\t\t\t\t\t<input type=\"text\" id=\"PetitText\" placeholder=\" Code Postal\">
\t\t\t\t\t<input type=\"text\" id=\"PetitText\" placeholder=\" Ville\">
\t\t\t\t</div>
\t\t\t\t<input type=\"checkbox\" id=\"coordonnees_checkbox2\">
\t\t\t\t<label for=\"coordonnees_checkbox2\">Enregistrer mes données pour la prochaine fois</label>
\t\t\t</div>

\t\t\t<div class=\"Liens\">
\t\t\t\t<a href=\"C:\\Desktop\\CoursIW3\\Challenge stack\\Page Présentation/index.html\">
\t\t\t\t\tRetour au Panier</a>
\t\t\t\t<button id=\"expedition\">Continuer vers l'expédition</button>
\t\t\t</div>
\t\t\t<div id=\"ML\">
\t\t\t\t<hr>
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"\">Politiques de remboursements</a></li>
\t\t\t\t\t<li><a href=\"\">Politique d'expédition</a></li>
\t\t\t\t\t<li><a href=\"\">Politique de confidentialité</a></li>
\t\t\t\t\t<li><a href=\"\">Conditions d'utilisations</a></li>
\t\t\t\t\t<li><a href=\"\">Conditions générales de ventes</a></li>
\t\t\t\t\t<li><a href=\"\">Mentions légales</a></li>
\t\t\t\t\t<li><a href=\"\">Coordonnées</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</section> #}


\t\t<section id=\"Panier\">
\t\t\t<div class=\"Container2\">
                {% for cart in cartItems %}
                    <div class=\"cart-item\" >
                        <div id=\"item\">
                            <img src=\"css/img/BORond.jpeg\" alt=\"BORond\">
                            <span>{{cart.nom}}</span>
                        </div>

                        
\t\t\t\t\t\t<div class=\"cart-data\">
\t\t\t\t\t\t<span id=\"cart-price-{{cart.id}}\">{{cart.prix}}€ x</span><input class=\"cart-qty\" data-id=\"{{cart.id}}\" type=\"number\" max=\"99\" min=\"1\" value=\"{{cart.quantity}}\"/>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"delete-btn\" data-product-id=\"{{ cart.id }}\">Supprimer</button>
                    </div>
                {% endfor %}
\t\t\t</div>

\t\t\t<div id=\"Promo\">
\t\t\t\t<input type=\"text\" id=\"text\" placeholder=\" Code Promotion\">
\t\t\t\t{# <button id=\"expedition2\">Valdier</button> #}
\t\t\t</div>

\t\t\t<div id=\"SousTotal\">
\t\t\t\t<span>Sous Total</span>
\t\t\t\t<span class=\"cart-total\">{{cartTotal}}€</span>
\t\t\t</div>
\t\t\t<div id=\"SousTotal\">
\t\t\t\t<span>Livraison</span>
\t\t\t\t<span>Livraison gratuite</span>
\t\t\t</div>

\t\t\t<div id=\"Total\">
\t\t\t\t<span>Total</span>
\t\t\t\t<span class=\"cart-total\">{{cartTotal}}€</span>
\t\t\t</div>
\t\t</section>
\t</div>
</div>

\t<!-- FOOTER -->
\t{% include 'Composant/footer.html.twig' %}


\t <script>
\t\t\t    // ADD EVENT LISTENER TO DELETE BUTTONS
\t\t\t    document.addEventListener('DOMContentLoaded', function() {
\t\t\t        const deleteBtns = document.querySelectorAll('.delete-btn');
\t\t\t
\t\t\t        deleteBtns.forEach(button => {
\t\t\t            button.addEventListener('click', function(event) {
\t\t\t                event.preventDefault();
\t\t\t
\t\t\t                const productId = button.dataset.productId;
\t\t\t                deleteProduct(productId);
\t\t\t            });
\t\t\t        });
\t\t\t    });
\t\t\t
\t\t\t    // DELETE PRODUCT
\t\t\t    function deleteProduct(productId) {
\t\t\t        fetch(`api/panier/remove/\${productId}`, {
\t\t\t            method: 'DELETE'
\t\t\t        })
\t\t\t        .then(response => {
\t\t\t            if (response.ok) {
\t\t\t                console.log('Product removed from the cart.', response.data);
\t\t\t                // Refresh the page or update the cart data after successful deletion
\t\t\t                location.reload();
\t\t\t            } else {
\t\t\t                console.error('An error occurred while removing the product from the cart.');
\t\t\t            }
\t\t\t        })
\t\t\t        .catch(error => {
\t\t\t            console.error('An error occurred while removing the product from the cart.', error);
\t\t\t        });
\t\t\t    }

\t\t\t\tdocument.querySelectorAll('.cart-qty').forEach((cartQty)=>{
\t\t\t\t\tconst cartItemId = cartQty.getAttribute('data-id');
\t\t\t\t\tcartQty.addEventListener('change',()=>{
\t\t\t\t\t\tfetch(`/panier/updateqty/\${cartItemId}/\${parseInt(cartQty.value)}`,
\t\t\t\t\t\t{method:'GET'}).then(res=> res.json()).
\t\t\t\t\t\tthen(res=>{
\t\t\t\t\t\t\tdocument.querySelectorAll(`.cart-total`).forEach((node)=>{
\t\t\t\t\t\t\t\tnode.innerHTML = res.total+'€';
\t\t\t\t\t\t\t})
\t\t\t\t\t\t})
\t\t\t\t\t})
\t\t\t\t})
\t\t\t
\t\t\t</script>

{% endblock %}
=
", "/Pages/panier.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\panier.html.twig");
    }
}
