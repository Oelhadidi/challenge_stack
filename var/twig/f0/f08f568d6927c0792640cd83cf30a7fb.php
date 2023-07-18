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

/* Composant/footer.html.twig */
class __TwigTemplate_be2afab5c93578808bac22cdc2ea016a extends Template
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
        echo "
    
<div class=\"footer\">
    <div class=\"footer-container\">
        <div class=\"section\">
            <h4>Aide & Collect</h4>
            <ul class=\"list-footer\">
                <li>
                    <a href=\"#\">Conditions générales</a>
                </li>
                <li>
                    <a href=\"#\">Mentions légales</a>
                </li>
                <li>
                    <a href=\"#\">Nous contacter</a>
                </li>
                <li>
                    <a href=\"#\">Mode de paiement</a>
                </li>
                <li>
                    <a href=\"#\">Modes de livraisons</a>
                </li>
            </ul>
        </div>
        <div class=\"section\">
            <h4>Emma Pierre</h4>
            <ul class=\"list-footer\">
                <li>
                    <a href=\"#\">Notre Histoire</a>
                </li>
                <li>
                    <a href=\"#\">Nos valeurs</a>
                </li>
                <li>
                    <a href=\"#\">Nos services</a>
                </li>
                <li>
                    <a href=\"#\">Nos bijouteries</a>
                </li>
            </ul>
        </div>
        <div class=\"section third-section\">
            <h4>Suivez-nous</h4>
            <ul class=\"list-footer\">
                <li>
                    <a href=\"#\">
                        <img src=\"./images/insta_svg.png\" alt=\"logo instagram\" />
                        @EmmaPierreJewels</a>
                </li>
                <li>
                    <a href=\"#\">Newsletter</a>
                </li>
                <input type=\"email\" id=\"email\"
                pattern=\".+@globex\\.com\" size=\"30\" required>
                <li>
                    <a href=\"#\">s'abonner</a>
                </li>
            </ul>
        </div>
    </div>
    <p class=\"copyright\"> ©️ 2023 - EMMA PIERRE - Tous droits réservés </p>
    </div>
    
";
    }

    public function getTemplateName()
    {
        return "Composant/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    
<div class=\"footer\">
    <div class=\"footer-container\">
        <div class=\"section\">
            <h4>Aide & Collect</h4>
            <ul class=\"list-footer\">
                <li>
                    <a href=\"#\">Conditions générales</a>
                </li>
                <li>
                    <a href=\"#\">Mentions légales</a>
                </li>
                <li>
                    <a href=\"#\">Nous contacter</a>
                </li>
                <li>
                    <a href=\"#\">Mode de paiement</a>
                </li>
                <li>
                    <a href=\"#\">Modes de livraisons</a>
                </li>
            </ul>
        </div>
        <div class=\"section\">
            <h4>Emma Pierre</h4>
            <ul class=\"list-footer\">
                <li>
                    <a href=\"#\">Notre Histoire</a>
                </li>
                <li>
                    <a href=\"#\">Nos valeurs</a>
                </li>
                <li>
                    <a href=\"#\">Nos services</a>
                </li>
                <li>
                    <a href=\"#\">Nos bijouteries</a>
                </li>
            </ul>
        </div>
        <div class=\"section third-section\">
            <h4>Suivez-nous</h4>
            <ul class=\"list-footer\">
                <li>
                    <a href=\"#\">
                        <img src=\"./images/insta_svg.png\" alt=\"logo instagram\" />
                        @EmmaPierreJewels</a>
                </li>
                <li>
                    <a href=\"#\">Newsletter</a>
                </li>
                <input type=\"email\" id=\"email\"
                pattern=\".+@globex\\.com\" size=\"30\" required>
                <li>
                    <a href=\"#\">s'abonner</a>
                </li>
            </ul>
        </div>
    </div>
    <p class=\"copyright\"> ©️ 2023 - EMMA PIERRE - Tous droits réservés </p>
    </div>
    
", "Composant/footer.html.twig", "C:\\Desktop\\CoursIW3\\challenge stack 2\\Challenge-stack-2-2022-2023\\templates\\Composant\\footer.html.twig");
    }
}
