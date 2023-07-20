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

/* /Pages/index.html.twig */
class __TwigTemplate_30028a69fc5494c00b2f6bdf2fd6e1a2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "/Pages/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <!-- MENU -->
    ";
        // line 7
        $this->loadTemplate("/Composant/menu.html.twig", "/Pages/index.html.twig", 7)->display(twig_array_merge($context, ["user" => ($context["user"] ?? null)]));
        // line 8
        echo "
    <!-- CONTENT -->

        <!-- Banner -->
        <div class=\"banner\">
            <!-- Shape -->
            <img src=\"./css/img/Vector 1.png\" alt=\"shape\" />
            <div class=\"hero-container\">
                <div class=\"hero-card-container\">
                    <div class=\"hero-card left\">
                        <div class=\"box-image\">
                            <img src=\"./css/img/Star 3.png\" alt=\"star\"/>
                        </div>
                        <h2 class=\"title\">Saphyre </br><span>Pierre</span> </h2>
                    </div>
                    <div class=\"hero-card center\">
                        <div class=\"overlay\">
                            <h2>Made in france
                                <img class=\"icone-fr\" src=\"./css/img/france-2.png\" alt=\"icone france\"/>
                            </h2>
                        </div>
                        <h2 class=\"title\"></h2>
                    </div>
                    <div class=\"hero-card right\">
                        <div class=\"box-image\">
                            <img src=\"./css/img/Star 3.png\" alt=\"star\"/>
                        </div>
                        <h2 class=\"title\">Emeraude </br><span>Pierre</span> </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- about -->
        ";
        // line 42
        $this->loadTemplate("/Composant/BlocApropos.html.twig", "/Pages/index.html.twig", 42)->display(twig_array_merge($context, ["background" => "Blog", "title" => "A propos", "description" => "Le nom de ma société m’est venu naturellement en associant le diminutif de mon prénom à ma passion de toutes les pierres ornementales, qui, par leur multitude de couleurs et d’éclats, ne cessent de m’enchanter depuis l’enfance. Je me suis lancée dans la création de bijoux pour que chaque femme ait la possibilité d’accéder à des gemmes telles que le saphir, l’émeraude ou la tourmaline, belle méconnue se parant de mille teintes, mon unique objectif est que vous trouviez la pierre qui s’accordera à votre humeur du jour ou de toujours à un prix vous permettant de multiplier votre plaisir… Tous mes bijoux sont fabriqués à la main dans mon atelier lyonnais, en éditions limitées pour plus
                        d’exclusivité, certains même en unique exemplaire, ils vous apporteront cette touche particulière qui vous rendra unique, chaque matière ayant été soigneusement sélectionnée. "]));
        // line 48
        echo "
        <!-- Collections -->
        <div class=\"collection\">
                <img src=\"css/img/Vector 1.png\" alt=\"shape\" />
                <div class=\"collection-container\">
                    <h2>Nos collections</h2>
                    <p class=\"paragraphe\">
                        Nos collections reflètent notre passion pour la mode et notre engagement envers la durabilité.
                    </p>
                    <!-- Image -->
                    <div class=\"shape-box\">
                        <div class=\"shape figure1\">
                            <div class=\"title-shape\">
                                Ras de cou
                            </div>
                        </div>
                        <div class=\"shape figure2\">
                            <div class=\"title-shape\">
                                Boucle d'oreille
                            </div>
                        </div>
                        <div class=\"shape figure3\">
                            <div class=\"title-shape\">
                                Sautoir
                            </div>
                        </div>
                        <div class=\"shape figure4\">
                            <div class=\"title-shape\">
                                Bracelet
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Slide card -->
        <div class=\"product\">
            <div class=\"separator\"></div>
            <div class=\"product-container\">
                <h2>Nouveauté </br><span>Nos tops produits</span></h2>
                <!-- Slide  -->
                <div class=\"slide\">
                    <div class=\"slide-container\">
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["bijoux"]);
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
        foreach ($context['_seq'] as $context["_key"] => $context["bijoux"]) {
            // line 92
            echo "                        ";
            $this->loadTemplate("/Composant/slideCard.html.twig", "/Pages/index.html.twig", 92)->display(twig_array_merge($context, ["product" =>             // line 93
$context["bijoux"]]));
            // line 95
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bijoux'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </div>
                    <div class=\"arrows-container\">
                        <i class=\"bi bi-arrow-right-circle\"></i>
                        <i class=\"bi bi-arrow-left-circle\"></i>
                    </div>
                </div>
                <!-- BTN -->
                <a href=\"/boutique\" class=\"product-btn\">Voir plus</a>
                </div>
        </div>

        ";
        // line 125
        echo "

    <!-- FOOTER -->
    ";
        // line 128
        $this->loadTemplate("/Composant/footer.html.twig", "/Pages/index.html.twig", 128)->display($context);
        // line 129
        echo "
";
    }

    public function getTemplateName()
    {
        return "/Pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 129,  201 => 128,  196 => 125,  183 => 96,  169 => 95,  167 => 93,  165 => 92,  148 => 91,  103 => 48,  100 => 42,  64 => 8,  62 => 7,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}
{% block body %}

    <!-- MENU -->
    {% include '/Composant/menu.html.twig' with {'user': user} %}

    <!-- CONTENT -->

        <!-- Banner -->
        <div class=\"banner\">
            <!-- Shape -->
            <img src=\"./css/img/Vector 1.png\" alt=\"shape\" />
            <div class=\"hero-container\">
                <div class=\"hero-card-container\">
                    <div class=\"hero-card left\">
                        <div class=\"box-image\">
                            <img src=\"./css/img/Star 3.png\" alt=\"star\"/>
                        </div>
                        <h2 class=\"title\">Saphyre </br><span>Pierre</span> </h2>
                    </div>
                    <div class=\"hero-card center\">
                        <div class=\"overlay\">
                            <h2>Made in france
                                <img class=\"icone-fr\" src=\"./css/img/france-2.png\" alt=\"icone france\"/>
                            </h2>
                        </div>
                        <h2 class=\"title\"></h2>
                    </div>
                    <div class=\"hero-card right\">
                        <div class=\"box-image\">
                            <img src=\"./css/img/Star 3.png\" alt=\"star\"/>
                        </div>
                        <h2 class=\"title\">Emeraude </br><span>Pierre</span> </h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- about -->
        {% include '/Composant/BlocApropos.html.twig' with {
            background: 'Blog',
            title: 'A propos',
            description: 'Le nom de ma société m’est venu naturellement en associant le diminutif de mon prénom à ma passion de toutes les pierres ornementales, qui, par leur multitude de couleurs et d’éclats, ne cessent de m’enchanter depuis l’enfance. Je me suis lancée dans la création de bijoux pour que chaque femme ait la possibilité d’accéder à des gemmes telles que le saphir, l’émeraude ou la tourmaline, belle méconnue se parant de mille teintes, mon unique objectif est que vous trouviez la pierre qui s’accordera à votre humeur du jour ou de toujours à un prix vous permettant de multiplier votre plaisir… Tous mes bijoux sont fabriqués à la main dans mon atelier lyonnais, en éditions limitées pour plus
                        d’exclusivité, certains même en unique exemplaire, ils vous apporteront cette touche particulière qui vous rendra unique, chaque matière ayant été soigneusement sélectionnée. ',
        }%}

        <!-- Collections -->
        <div class=\"collection\">
                <img src=\"css/img/Vector 1.png\" alt=\"shape\" />
                <div class=\"collection-container\">
                    <h2>Nos collections</h2>
                    <p class=\"paragraphe\">
                        Nos collections reflètent notre passion pour la mode et notre engagement envers la durabilité.
                    </p>
                    <!-- Image -->
                    <div class=\"shape-box\">
                        <div class=\"shape figure1\">
                            <div class=\"title-shape\">
                                Ras de cou
                            </div>
                        </div>
                        <div class=\"shape figure2\">
                            <div class=\"title-shape\">
                                Boucle d'oreille
                            </div>
                        </div>
                        <div class=\"shape figure3\">
                            <div class=\"title-shape\">
                                Sautoir
                            </div>
                        </div>
                        <div class=\"shape figure4\">
                            <div class=\"title-shape\">
                                Bracelet
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <!-- Slide card -->
        <div class=\"product\">
            <div class=\"separator\"></div>
            <div class=\"product-container\">
                <h2>Nouveauté </br><span>Nos tops produits</span></h2>
                <!-- Slide  -->
                <div class=\"slide\">
                    <div class=\"slide-container\">
                    {% for bijoux in bijoux %}
                        {% include '/Composant/slideCard.html.twig' with {
                            product : bijoux
                        } %}
                    {% endfor %}
                    </div>
                    <div class=\"arrows-container\">
                        <i class=\"bi bi-arrow-right-circle\"></i>
                        <i class=\"bi bi-arrow-left-circle\"></i>
                    </div>
                </div>
                <!-- BTN -->
                <a href=\"/boutique\" class=\"product-btn\">Voir plus</a>
                </div>
        </div>

        {# <!-- Actualité -->
        <div class=\"news\">
            <div class=\"news-container\">
                <h2 class=\"title\">Nos actualités<br><span>A la Une</span></h2>
                <div class=\"card-container\">
                    {% for article in articles %}
                        <div class=\"card news_card{{article.id}}\">
                            <div class=\"text-container\">
                                <h4 class=\"article-title\">{{article.name}}</h4>
                                <p class=\"paragraphe\">
                                {{article.description}}
                                </p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div> #}


    <!-- FOOTER -->
    {% include '/Composant/footer.html.twig' %}

{% endblock %}", "/Pages/index.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Pages\\index.html.twig");
    }
}
