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

/* /Pages/apropos.html.twig */
class __TwigTemplate_05d7030e66cd769acd75c158a5b104cc extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/apropos.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "A propos ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <!-- MENU -->
    ";
        // line 6
        $this->loadTemplate("Composant/menu.html.twig", "/Pages/apropos.html.twig", 6)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 7
        echo "
    <!-- CONTENT -->
    <div class=\"about-presentation\">
        <img src=\"\" alt=\"shape\" />
        <div class=\"about-presentation-container\">
            <!-- Image -->
            <div class=\"presentation-text-container\">
                <div class=\"box-image-container\">
                    <div class=\"under-box-image\"></div>
                    <div class=\"box-image\"></div>
                </div>
                <div class=\"text\">
                    <h2>A propos</h2>
                    <p class=\"paragraphe\">
                        Le nom de ma société m’est venu naturellement en associant le diminutif de mon prénom à ma passion de toutes les pierres ornementales, qui, par leur multitude de couleurs et d’éclats, ne cessent de m’enchanter depuis l’enfance. Je me suis lancée dans la création de bijoux pour que chaque femme ait la possibilité d’accéder à des gemmes telles que le saphir, l’émeraude ou la tourmaline, belle méconnue se parant de mille teintes, mon unique objectif est que vous trouviez la pierre qui s’accordera à votre humeur du jour ou de toujours à un prix vous permettant de multiplier votre plaisir… Tous mes bijoux sont fabriqués à la main dans mon atelier lyonnais, en éditions limitées pour plus
                d’exclusivité, certains même en unique exemplaire, ils vous apporteront cette touche particulière qui vous rendra unique, chaque matière ayant été soigneusement sélectionnée.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"about-presentation\">
        <div class=\"about-presentation-container\">
            <!-- Image -->
            <div class=\"presentation-text-container reverse\">
                <div class=\"box-image-container\">
                    <div class=\"box-image reverse-box-image\"></div>
                </div>
                <div class=\"text\">
                    <h2>Notre vision</h2>
                    <p class=\"paragraphe\">
                        Cette boutique en ligne est un véritable trésor pour les amateurs de bijoux en pierres précieuses. Elle propose une large sélection de colliers et de bijoux, tous faits à la main et mettant en valeur la beauté naturelle des pierres précieuses. Les clients peuvent trouver des pièces uniques et de qualité, fabriquées à partir de pierres comme l'améthyste, la citrine, le quartz rose et bien d'autres. Chaque bijou est conçu avec soin pour offrir une expérience de magasinage en ligne agréable et satisfaisante.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    ";
        // line 48
        $this->loadTemplate("Composant/footer.html.twig", "/Pages/apropos.html.twig", 48)->display($context);
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Pages/apropos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 49,  106 => 48,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}A propos {% endblock %}
{% block body %}
    <!-- MENU -->
    {% include 'Composant/menu.html.twig' with {'user': user} %}

    <!-- CONTENT -->
    <div class=\"about-presentation\">
        <img src=\"\" alt=\"shape\" />
        <div class=\"about-presentation-container\">
            <!-- Image -->
            <div class=\"presentation-text-container\">
                <div class=\"box-image-container\">
                    <div class=\"under-box-image\"></div>
                    <div class=\"box-image\"></div>
                </div>
                <div class=\"text\">
                    <h2>A propos</h2>
                    <p class=\"paragraphe\">
                        Le nom de ma société m’est venu naturellement en associant le diminutif de mon prénom à ma passion de toutes les pierres ornementales, qui, par leur multitude de couleurs et d’éclats, ne cessent de m’enchanter depuis l’enfance. Je me suis lancée dans la création de bijoux pour que chaque femme ait la possibilité d’accéder à des gemmes telles que le saphir, l’émeraude ou la tourmaline, belle méconnue se parant de mille teintes, mon unique objectif est que vous trouviez la pierre qui s’accordera à votre humeur du jour ou de toujours à un prix vous permettant de multiplier votre plaisir… Tous mes bijoux sont fabriqués à la main dans mon atelier lyonnais, en éditions limitées pour plus
                d’exclusivité, certains même en unique exemplaire, ils vous apporteront cette touche particulière qui vous rendra unique, chaque matière ayant été soigneusement sélectionnée.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class=\"about-presentation\">
        <div class=\"about-presentation-container\">
            <!-- Image -->
            <div class=\"presentation-text-container reverse\">
                <div class=\"box-image-container\">
                    <div class=\"box-image reverse-box-image\"></div>
                </div>
                <div class=\"text\">
                    <h2>Notre vision</h2>
                    <p class=\"paragraphe\">
                        Cette boutique en ligne est un véritable trésor pour les amateurs de bijoux en pierres précieuses. Elle propose une large sélection de colliers et de bijoux, tous faits à la main et mettant en valeur la beauté naturelle des pierres précieuses. Les clients peuvent trouver des pièces uniques et de qualité, fabriquées à partir de pierres comme l'améthyste, la citrine, le quartz rose et bien d'autres. Chaque bijou est conçu avec soin pour offrir une expérience de magasinage en ligne agréable et satisfaisante.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    {% include 'Composant/footer.html.twig' %}

{% endblock %}", "/Pages/apropos.html.twig", "/workspaces/challenge_stack/templates/Pages/apropos.html.twig");
    }
}
