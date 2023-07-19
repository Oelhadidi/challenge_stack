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
              <li class=\"filtre-ligne\">
                  <a href=\"#\">Tout nos produit</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Rubis</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Turquoise</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Grenat</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Emeraude</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Amazonite</a>
              </li>

            </ul>

        </div>

        <div class=\"produit\">

            <!-- LISTE DES CATEGORIES -->
            <h2>Catégorie</h2>
            <div class=\"image-container\">
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 52
            echo "                    <div class=\"image-box c1\">
                        <p class=\"title-categorie\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>

            <!-- LISTE DES PRODUITS -->
            <h2>Tous nos produits</h2>
            <!-- Card composant --> 
            ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "                ";
            $this->loadTemplate("cartboutique.html.twig", "/Pages/boutique.html.twig", 62)->display(twig_array_merge($context, ["product" =>             // line 63
$context["product"]]));
            // line 65
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
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
      </section>
    </main>
    
    <!-- Footer -->
    ";
        // line 120
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/boutique.html.twig", 120)->display($context);
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
        return array (  223 => 120,  167 => 66,  153 => 65,  151 => 63,  149 => 62,  132 => 61,  125 => 56,  116 => 53,  113 => 52,  109 => 51,  63 => 7,  61 => 6,  54 => 4,  47 => 3,  36 => 1,);
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
              <li class=\"filtre-ligne\">
                  <a href=\"#\">Tout nos produit</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Rubis</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Turquoise</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Grenat</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Emeraude</a>
              </li>
              
              <li class=\"filtre-ligne\">
                <a href=\"#\">Amazonite</a>
              </li>

            </ul>

        </div>

        <div class=\"produit\">

            <!-- LISTE DES CATEGORIES -->
            <h2>Catégorie</h2>
            <div class=\"image-container\">
                {% for category in categories %}
                    <div class=\"image-box c1\">
                        <p class=\"title-categorie\">{{ category.name }}</p>
                    </div>
                {% endfor %}
            </div>

            <!-- LISTE DES PRODUITS -->
            <h2>Tous nos produits</h2>
            <!-- Card composant --> 
            {% for product in products %}
                {% include 'cartboutique.html.twig' with {
                    product: product
                } %}
            {% endfor %}

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
      </section>
    </main>
    
    <!-- Footer -->
    {% include 'Composant/footer.html.twig' %}
{% endblock %}", "/Pages/boutique.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\boutique.html.twig");
    }
}
