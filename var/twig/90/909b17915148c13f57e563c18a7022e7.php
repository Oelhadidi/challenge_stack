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

/* /Pages/blog.html.twig */
class __TwigTemplate_8261d4bdb2ecbb952dfdc8962b10c3e0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/blog.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Blog";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " 
    <!-- Menu -->
    ";
        // line 6
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/blog.html.twig", 6)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 7
        echo "
    <!-- Banner -->
    ";
        // line 9
        $this->loadTemplate("Composant/banner.html.twig", "/Pages/blog.html.twig", 9)->display(twig_array_merge($context, ["title" => "Blog", "background" => ""]));
        // line 13
        echo "
    <!-- News-->
    <div class=\"news blog\">
        <div class=\"news-container\">
            <h2 class=\"title\">Bienvenue sur notre blog</h2>
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 19
            echo "                ";
            $this->loadTemplate("cartBlog.html.twig", "/Pages/blog.html.twig", 19)->display(twig_array_merge($context, ["article" =>             // line 20
$context["article"]]));
            // line 22
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>

    <!-- Footer -->
    ";
        // line 27
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/blog.html.twig", 27)->display($context);
        // line 28
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Pages/blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 28,  117 => 27,  111 => 23,  97 => 22,  95 => 20,  93 => 19,  76 => 18,  69 => 13,  67 => 9,  63 => 7,  61 => 6,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Blog{% endblock %}
{% block body %} 
    <!-- Menu -->
    {% include 'Composant/menu.html.twig' with {'user': user} %}

    <!-- Banner -->
    {% include 'Composant/banner.html.twig' with {
        title: 'Blog',
        background: ''
    } %}

    <!-- News-->
    <div class=\"news blog\">
        <div class=\"news-container\">
            <h2 class=\"title\">Bienvenue sur notre blog</h2>
            {% for article in articles %}
                {% include 'cartBlog.html.twig' with {
                    article: article
                } %}
            {% endfor %}
        </div>
    </div>

    <!-- Footer -->
    {% include 'Composant/footer.html.twig' %}

{% endblock %}", "/Pages/blog.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\blog.html.twig");
    }
}
