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

/* /Pages/boutique.html.twig */
class __TwigTemplate_2a1560c04dcb743411fa0fd0448ae336 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/boutique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "\t<!-- Menu -->
\t";
        // line 5
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/boutique.html.twig", 5)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 6
        echo "\t";
        $this->loadTemplate("Composant/banner.html.twig", "/Pages/boutique.html.twig", 6)->display(twig_array_merge($context, ["title" => "Boutique"]));
        // line 9
        echo "
\t<!-- Content -->
\t<main>
\t\t<input id=\"user_id\" type=\"hidden\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (($__internal_compile_0 = ($context["user"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\"/>
\t\t<section id=\"product-container\">
\t\t\t<div class=\"filtre\">
\t\t\t\t<h2 class=\"title3\">Items</h2>
\t\t\t\t<ul class=\"filtre-container\">
\t\t\t\t\t<h3 class=\"title4\">Pierres</h3>
\t\t\t\t\t<ul class=\"none-liste\">
\t\t\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pierres"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pier"]) {
            // line 20
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20) <= 4)) {
                // line 21
                echo "\t\t\t\t\t\t\t<li class=\"filtre-ligne pierres\">
\t\t\t\t\t\t\t\t<button data-id=\"";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pier"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pier"], "nom", [], "any", false, false, false, 22), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t</li>
              ";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<h3 class=\"title4\">Tailles</h3>
\t\t\t\t\t<ul class=\"none-liste\">
\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tailles"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tail"]) {
            // line 30
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30) <= 4)) {
                // line 31
                echo "\t\t\t\t\t\t\t<li class=\"filtre-ligne tailles\">
\t\t\t\t\t\t\t\t<button data-id=\"";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tail"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tail"], "nom", [], "any", false, false, false, 32), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t</li>
            ";
            }
            // line 35
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<h3 class=\"title4\">Couleurs</h3>
\t\t\t\t\t<ulclass=\"none-liste\">
\t\t\t\t\t\t";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["couleurs"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["coul"]) {
            // line 40
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) <= 4)) {
                // line 41
                echo "\t\t\t\t\t\t\t<li class=\"filtre-ligne couleurs\">
\t\t\t\t\t\t\t\t<button data-id=\"";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coul"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coul"], "nom", [], "any", false, false, false, 42), "html", null, true);
                echo "</button>
\t\t\t\t\t\t\t</li>
            ";
            }
            // line 45
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coul'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "\t\t\t\t\t\t";
        // line 47
        echo "\t\t\t\t\t\t<h3 class=\"title4\">Types</h3>
\t\t\t\t\t\t<ul class=\"none-liste\">
\t\t\t\t\t\t\t";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typ"]) {
            // line 50
            echo "\t\t\t\t\t\t\t\t<li class=\"filtre-ligne types\">
\t\t\t\t\t\t\t\t\t<button data-id=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typ"], "id", [], "any", false, false, false, 51), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typ"], "nom", [], "any", false, false, false, 51), "html", null, true);
            echo "</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t\t<div
\t\t\t\t\tclass=\"produit\">

\t\t\t\t\t<!-- LISTE DES CATEGORIES -->
\t\t\t\t\t<h2 class=\"title3\">Catégorie</h2>
\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["typ"]) {
            // line 66
            echo "\t\t\t\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66) <= 4)) {
                // line 67
                echo "\t\t\t\t\t\t\t\t";
                $this->loadTemplate("/Composant/categorie.html.twig", "/Pages/boutique.html.twig", 67)->display(twig_array_merge($context, ["product" =>                 // line 68
$context["typ"]]));
                // line 70
                echo "\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
\t\t\t\t\t</div>

\t\t\t\t\t<!-- LISTE DES PRODUITS -->
\t\t\t\t\t<h2 class=\"title3\">Tous nos produits</h2>
\t\t\t\t\t<!-- Card composant -->
\t\t\t\t\t<div class=\"card-container\">
\t\t\t\t\t\t";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["bijoux"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["bij"]) {
            // line 80
            echo "\t\t\t\t\t\t\t";
            $this->loadTemplate("/Composant/cardboutique.html.twig", "/Pages/boutique.html.twig", 80)->display(twig_array_merge($context, ["product" =>             // line 81
$context["bij"], "userId" =>             // line 82
($context["user"] ?? null)]));
            // line 84
            echo "\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bij'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t\t\t</div>

\t\t\t\t\t<!-- PAGINATION -->
\t\t\t\t\t";
        // line 110
        echo "\t\t\t\t</div>

\t\t\t</section>
\t\t</main>

\t\t<!-- Footer -->
\t\t";
        // line 116
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/boutique.html.twig", 116)->display($context);
        // line 117
        echo "
\t\t<script>
\t\t\t// ADD FAVORITE

const pierres = document.querySelectorAll('.pierres button');
const tailles = document.querySelectorAll('.tailles button');
const couleurs = document.querySelectorAll('.couleurs button');
const types = document.querySelectorAll('.types button');
const products = document.querySelectorAll('.produit .card');
const filters = {
pierre: null,
taille: null,
couleur: null,
type: null
}

function getSelectedCategory(items, filterKey) {
items.forEach(item => {
const itemId = parseInt(item.getAttribute('data-id'));
item.onclick = () => {
if (filters[filterKey] === itemId) {
filters[filterKey] = null;
item.classList.remove('active');
} else {
filters[filterKey] = itemId;
items.forEach((item) => item.classList.remove('active'))
item.classList.add('active');
}
const filterData = new URLSearchParams(filters)
fetch(`/api/boutique/filter`, {
method: 'POST',
body: filterData
}).then(res => res.json()).then((res) => filterProducts(res.message))
}
})
}


function filterProducts(newProducts) {
console.log(newProducts);
products.forEach((product) => {
if (newProducts.find((newProd) => newProd.id === parseInt(product.getAttribute('data-id')))) 
product.style.display = 'block';
 else 
product.style.display = 'none';


})
}

getSelectedCategory(pierres, 'pierre');
getSelectedCategory(tailles, 'taille');
getSelectedCategory(couleurs, 'couleur');
getSelectedCategory(types, 'type');

document.addEventListener('DOMContentLoaded', function () {
const addToCartBtns = document.querySelectorAll('.btn-panier');

addToCartBtns.forEach(button => {
button.addEventListener('click', function (event) {
event.preventDefault();

const productId = button.getAttribute('data-product');
const userId = document.querySelector('#user_id').value;

fetch(`/api/boutique/add-cart/\${userId}/\${productId}`, {method: 'GET'}).then(response => {
if (!response.ok) 
return response.text()



return response.json()
}).then(data => {
console.log(data); // Output userCart to the browser console
}).catch(error => {
console.error('An error occurred while adding to cart', error);
});
});
});
});

\t\t</script>
\t";
    }

    public function getTemplateName()
    {
        return "/Pages/boutique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 117,  354 => 116,  346 => 110,  341 => 85,  327 => 84,  325 => 82,  324 => 81,  322 => 80,  305 => 79,  296 => 72,  282 => 71,  279 => 70,  277 => 68,  275 => 67,  272 => 66,  255 => 65,  242 => 54,  231 => 51,  228 => 50,  224 => 49,  220 => 47,  218 => 46,  204 => 45,  196 => 42,  193 => 41,  190 => 40,  173 => 39,  168 => 36,  154 => 35,  146 => 32,  143 => 31,  140 => 30,  123 => 29,  118 => 26,  104 => 25,  96 => 22,  93 => 21,  90 => 20,  73 => 19,  63 => 12,  58 => 9,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
\t<!-- Menu -->
\t{% include 'Composant/menu.html.twig' with {'user': user} %}
\t{% include 'Composant/banner.html.twig' with {
      title : \"Boutique\"
    } %}

\t<!-- Content -->
\t<main>
\t\t<input id=\"user_id\" type=\"hidden\" value=\"{{user['id']}}\"/>
\t\t<section id=\"product-container\">
\t\t\t<div class=\"filtre\">
\t\t\t\t<h2 class=\"title3\">Items</h2>
\t\t\t\t<ul class=\"filtre-container\">
\t\t\t\t\t<h3 class=\"title4\">Pierres</h3>
\t\t\t\t\t<ul class=\"none-liste\">
\t\t\t\t\t\t{% for pier in pierres %}
              {% if loop.index <= 4 %}
\t\t\t\t\t\t\t<li class=\"filtre-ligne pierres\">
\t\t\t\t\t\t\t\t<button data-id=\"{{pier.id}}\">{{pier.nom}}</button>
\t\t\t\t\t\t\t</li>
              {% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t<h3 class=\"title4\">Tailles</h3>
\t\t\t\t\t<ul class=\"none-liste\">
\t\t\t\t\t\t{% for tail in tailles %}
            {% if loop.index <= 4 %}
\t\t\t\t\t\t\t<li class=\"filtre-ligne tailles\">
\t\t\t\t\t\t\t\t<button data-id=\"{{tail.id}}\">{{tail.nom}}</button>
\t\t\t\t\t\t\t</li>
            {% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t\t<h3 class=\"title4\">Couleurs</h3>
\t\t\t\t\t<ulclass=\"none-liste\">
\t\t\t\t\t\t{% for coul in couleurs %}
            {% if loop.index <= 4 %}
\t\t\t\t\t\t\t<li class=\"filtre-ligne couleurs\">
\t\t\t\t\t\t\t\t<button data-id=\"{{coul.id}}\">{{coul.nom}}</button>
\t\t\t\t\t\t\t</li>
            {% endif %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t{# </ul> #}
\t\t\t\t\t\t<h3 class=\"title4\">Types</h3>
\t\t\t\t\t\t<ul class=\"none-liste\">
\t\t\t\t\t\t\t{% for typ in types %}
\t\t\t\t\t\t\t\t<li class=\"filtre-ligne types\">
\t\t\t\t\t\t\t\t\t<button data-id=\"{{typ.id}}\">{{typ.nom}}</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</ul>
\t\t\t\t\t</ul>

\t\t\t\t</div>

\t\t\t\t<div
\t\t\t\t\tclass=\"produit\">

\t\t\t\t\t<!-- LISTE DES CATEGORIES -->
\t\t\t\t\t<h2 class=\"title3\">Catégorie</h2>
\t\t\t\t\t<div class=\"image-container\">
\t\t\t\t\t\t{% for typ in types %}
\t\t\t\t\t\t\t{% if loop.index <= 4 %}
\t\t\t\t\t\t\t\t{% include '/Composant/categorie.html.twig' with {
                  product : typ,
                } %}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>

\t\t\t\t\t<!-- LISTE DES PRODUITS -->
\t\t\t\t\t<h2 class=\"title3\">Tous nos produits</h2>
\t\t\t\t\t<!-- Card composant -->
\t\t\t\t\t<div class=\"card-container\">
\t\t\t\t\t\t{% for bij in bijoux %}
\t\t\t\t\t\t\t{% include '/Composant/cardboutique.html.twig' with {
                    product: bij,
                    userId: user,
                } %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</div>

\t\t\t\t\t<!-- PAGINATION -->
\t\t\t\t\t{# <div class=\"pagination\">
\t\t\t\t\t\t\t\t\t\t                <p class=\"pagination-title\">Page</p>
\t\t\t\t\t\t\t\t\t\t                <ul class=\"pagination-container\">
\t\t\t\t\t\t\t\t\t\t                  <li></li>
\t\t\t\t\t\t\t\t\t\t                  <li>
\t\t\t\t\t\t\t\t\t\t                    <a href=\"#\">1</a>
\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t                  <li>
\t\t\t\t\t\t\t\t\t\t                    <a href=\"#\">2</a>
\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t                  <li>
\t\t\t\t\t\t\t\t\t\t                    <a href=\"#\">3</a>
\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t                  <li>
\t\t\t\t\t\t\t\t\t\t                    <a href=\"#\">4</a>
\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t                  <li>
\t\t\t\t\t\t\t\t\t\t                    <a href=\"#\">5</a>
\t\t\t\t\t\t\t\t\t\t                  </li>
\t\t\t\t\t\t\t\t\t\t                  <li>>></li>
\t\t\t\t\t\t\t\t\t\t                </ul>
\t\t\t\t\t\t\t\t\t\t            </div> #}
\t\t\t\t</div>

\t\t\t</section>
\t\t</main>

\t\t<!-- Footer -->
\t\t{% include 'Composant/footer.html.twig' %}

\t\t<script>
\t\t\t// ADD FAVORITE

const pierres = document.querySelectorAll('.pierres button');
const tailles = document.querySelectorAll('.tailles button');
const couleurs = document.querySelectorAll('.couleurs button');
const types = document.querySelectorAll('.types button');
const products = document.querySelectorAll('.produit .card');
const filters = {
pierre: null,
taille: null,
couleur: null,
type: null
}

function getSelectedCategory(items, filterKey) {
items.forEach(item => {
const itemId = parseInt(item.getAttribute('data-id'));
item.onclick = () => {
if (filters[filterKey] === itemId) {
filters[filterKey] = null;
item.classList.remove('active');
} else {
filters[filterKey] = itemId;
items.forEach((item) => item.classList.remove('active'))
item.classList.add('active');
}
const filterData = new URLSearchParams(filters)
fetch(`/api/boutique/filter`, {
method: 'POST',
body: filterData
}).then(res => res.json()).then((res) => filterProducts(res.message))
}
})
}


function filterProducts(newProducts) {
console.log(newProducts);
products.forEach((product) => {
if (newProducts.find((newProd) => newProd.id === parseInt(product.getAttribute('data-id')))) 
product.style.display = 'block';
 else 
product.style.display = 'none';


})
}

getSelectedCategory(pierres, 'pierre');
getSelectedCategory(tailles, 'taille');
getSelectedCategory(couleurs, 'couleur');
getSelectedCategory(types, 'type');

document.addEventListener('DOMContentLoaded', function () {
const addToCartBtns = document.querySelectorAll('.btn-panier');

addToCartBtns.forEach(button => {
button.addEventListener('click', function (event) {
event.preventDefault();

const productId = button.getAttribute('data-product');
const userId = document.querySelector('#user_id').value;

fetch(`/api/boutique/add-cart/\${userId}/\${productId}`, {method: 'GET'}).then(response => {
if (!response.ok) 
return response.text()



return response.json()
}).then(data => {
console.log(data); // Output userCart to the browser console
}).catch(error => {
console.error('An error occurred while adding to cart', error);
});
});
});
});

\t\t</script>
\t{% endblock %}
", "/Pages/boutique.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\boutique.html.twig");
    }
}
