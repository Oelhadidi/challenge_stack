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

/* Composant/formulaires.html.twig */
class __TwigTemplate_17b583d6d47a71de69cfa0ea07efc728 extends Template
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
        echo "<form class=\"login-form\" action=\"";
        echo twig_escape_filter($this->env, ($context["formAction"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["formMethod"] ?? null), "html", null, true);
        echo "\">
  <div>
    <label for=\"email\">Email</label>
    <input type=\"email\" id=\"email\" name=\"email\" required>
  </div>
  <div>
    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"MDP\" required>
  </div>

  ";
        // line 11
        if (($context["isRegistrationPage"] ?? null)) {
            // line 12
            echo "    <div>
      <label for=\"nom\">Nom</label>
      <input type=\"text\" id=\"nom\" name=\"nom\" required>
    </div>
  ";
        }
        // line 17
        echo "
  <button type=\"submit\">Submit</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "Composant/formulaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  55 => 12,  53 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"login-form\" action=\"{{ formAction }}\" method=\"{{ formMethod }}\">
  <div>
    <label for=\"email\">Email</label>
    <input type=\"email\" id=\"email\" name=\"email\" required>
  </div>
  <div>
    <label for=\"password\">Password</label>
    <input type=\"password\" id=\"password\" name=\"MDP\" required>
  </div>

  {% if isRegistrationPage %}
    <div>
      <label for=\"nom\">Nom</label>
      <input type=\"text\" id=\"nom\" name=\"nom\" required>
    </div>
  {% endif %}

  <button type=\"submit\">Submit</button>
</form>
", "Composant/formulaires.html.twig", "/workspaces/challenge_stack/templates/Composant/formulaires.html.twig");
    }
}
