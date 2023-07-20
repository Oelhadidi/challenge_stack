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
class __TwigTemplate_5aa846d71cdbb976beac6098a612612f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/boutique.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Boutique";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <!-- Menu -->
    ";
        // line 6
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/boutique.html.twig", 6)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 7
        echo "
    <!-- Content -->
    <main>
      
      <section id=\"product-container\">  
        <div class=\"filtre\">   
            <h2>Items</h2>
            <ul class=\"filtre-container\">
              <h3>Pierres</h3>
              <ul>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pierres"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["pier"]) {
            // line 18
            echo "                <li class=\"filtre-ligne\">
                  <a href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pier"], "nom", [], "any", false, false, false, 19), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "              </ul>
              <h3>Tailles</h3>
              <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tailles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tail"]) {
            // line 26
            echo "                <li class=\"filtre-ligne\">
                  <a href=\"#\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tail"], "nom", [], "any", false, false, false, 27), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "              </ul>
              <h3>Couleurs</h3>
              <ul>
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["couleurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["coul"]) {
            // line 34
            echo "                <li class=\"filtre-ligne\">
                  <a href=\"#\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coul"], "nom", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coul'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              </ul>
              <h3>Types</h3>
              <ul>
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typ"]) {
            // line 42
            echo "                <li class=\"filtre-ligne\">
                  <a href=\"#\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typ"], "nom", [], "any", false, false, false, 43), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "              </ul>
            </ul>

        </div>

        <div class=\"produit\">

            <!-- LISTE DES CATEGORIES -->
            <h2>Catégorie</h2>
            <div class=\"image-container\">
                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["typ"]) {
            // line 57
            echo "                    <div class=\"image-box c1\">
                        <p class=\"title-categorie\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typ"], "nom", [], "any", false, false, false, 58), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </div>

            <!-- LISTE DES PRODUITS -->
            <h2>Tous nos produits</h2>
            <!-- Card composant --> 
            ";
        // line 66
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
            // line 67
            echo "                ";
            $this->loadTemplate("/Composant/cardboutique.html.twig", "/Pages/boutique.html.twig", 67)->display(twig_array_merge($context, ["product" =>             // line 68
$context["bij"], "userId" =>             // line 69
($context["user"] ?? null)]));
            // line 71
            echo "            ";
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
        // line 72
        echo "
             <!-- PAGINATION -->
            <div class=\"pagination\">
                <p class=\"pagination-title\">Page</p>
                <ul class=\"pagination-container\">
                  <li></li>
                  <li>
                    <a href=\"#\">1</a>
                  </li>
                  <li>
                    <a href=\"#\">2</a>
                  </li>
                  <li>
                    <a href=\"#\">3</a>
                  </li>
                  <li>
                    <a href=\"#\">4</a>
                  </li>
                  <li>
                    <a href=\"#\">5</a>
                  </li>
                  <li>>></li>
                </ul>
            </div>
        </div>

      </section>
    </main>
    
    <!-- Footer -->
    ";
        // line 102
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/boutique.html.twig", 102)->display($context);
        // line 103
        echo "
  <script>
  // ADD FAVORITE
  document.addEventListener('DOMContentLoaded', function() {
    const addToCartBtns = document.querySelectorAll('.btn-panier');

    addToCartBtns.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();

        const userId = button.dataset.user;
        const productId = parseInt(button.dataset.product);

        

        fetch(`/api/boutique/add-cart/\${userId}/\${productId}`, {
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.userCart); // Output userCart to the browser console
        })
        .catch(error => {
            console.error('An error occurred while adding to cart', error);
        });
      });
    });
  });
  </script>
";
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
        return array (  259 => 103,  257 => 102,  225 => 72,  211 => 71,  209 => 69,  208 => 68,  206 => 67,  189 => 66,  182 => 61,  173 => 58,  170 => 57,  166 => 56,  154 => 46,  145 => 43,  142 => 42,  138 => 41,  133 => 38,  124 => 35,  121 => 34,  117 => 33,  112 => 30,  103 => 27,  100 => 26,  96 => 25,  91 => 22,  82 => 19,  79 => 18,  75 => 17,  63 => 7,  61 => 6,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Boutique{% endblock %}
{% block body %} 
    <!-- Menu -->
    {% include 'Composant/menu.html.twig' with {'user': user} %}

    <!-- Content -->
    <main>
      
      <section id=\"product-container\">  
        <div class=\"filtre\">   
            <h2>Items</h2>
            <ul class=\"filtre-container\">
              <h3>Pierres</h3>
              <ul>
                {% for pier in pierres %}
                <li class=\"filtre-ligne\">
                  <a href=\"#\">{{pier.nom}}</a>
                </li>
                {% endfor %}
              </ul>
              <h3>Tailles</h3>
              <ul>
                {% for tail in tailles %}
                <li class=\"filtre-ligne\">
                  <a href=\"#\">{{tail.nom}}</a>
                </li>
                {% endfor %}
              </ul>
              <h3>Couleurs</h3>
              <ul>
                {% for coul in couleurs %}
                <li class=\"filtre-ligne\">
                  <a href=\"#\">{{coul.nom}}</a>
                </li>
                {% endfor %}
              </ul>
              <h3>Types</h3>
              <ul>
                {% for typ in types %}
                <li class=\"filtre-ligne\">
                  <a href=\"#\">{{typ.nom}}</a>
                </li>
                {% endfor %}
              </ul>
            </ul>

        </div>

        <div class=\"produit\">

            <!-- LISTE DES CATEGORIES -->
            <h2>Catégorie</h2>
            <div class=\"image-container\">
                {% for typ in types %}
                    <div class=\"image-box c1\">
                        <p class=\"title-categorie\">{{ typ.nom }}</p>
                    </div>
                {% endfor %}
            </div>

            <!-- LISTE DES PRODUITS -->
            <h2>Tous nos produits</h2>
            <!-- Card composant --> 
            {% for bij in bijoux %}
                {% include '/Composant/cardboutique.html.twig' with {
                    product: bij,
                    userId: user,
                } %}
            {% endfor %}

             <!-- PAGINATION -->
            <div class=\"pagination\">
                <p class=\"pagination-title\">Page</p>
                <ul class=\"pagination-container\">
                  <li></li>
                  <li>
                    <a href=\"#\">1</a>
                  </li>
                  <li>
                    <a href=\"#\">2</a>
                  </li>
                  <li>
                    <a href=\"#\">3</a>
                  </li>
                  <li>
                    <a href=\"#\">4</a>
                  </li>
                  <li>
                    <a href=\"#\">5</a>
                  </li>
                  <li>>></li>
                </ul>
            </div>
        </div>

      </section>
    </main>
    
    <!-- Footer -->
    {% include 'Composant/footer.html.twig' %}

  <script>
  // ADD FAVORITE
  document.addEventListener('DOMContentLoaded', function() {
    const addToCartBtns = document.querySelectorAll('.btn-panier');

    addToCartBtns.forEach(button => {
      button.addEventListener('click', function(event) {
        event.preventDefault();

        const userId = button.dataset.user;
        const productId = parseInt(button.dataset.product);

        

        fetch(`/api/boutique/add-cart/\${userId}/\${productId}`, {
            method: 'GET'
        })
        .then(response => response.json())
        .then(data => {
            console.log(data.userCart); // Output userCart to the browser console
        })
        .catch(error => {
            console.error('An error occurred while adding to cart', error);
        });
      });
    });
  });
  </script>
{% endblock %}", "/Pages/boutique.html.twig", "/workspaces/challenge_stack/templates/Pages/boutique.html.twig");
    }
}
