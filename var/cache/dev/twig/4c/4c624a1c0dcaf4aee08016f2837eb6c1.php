<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* front/service.html.twig */
class __TwigTemplate_c42a3d8054dfa136789fa18aec2133a7 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/service.html.twig"));

        // line 1
        yield "<div class=\"services-section ombre-back\">
    <h2 class=\"mb-5\">Autres Services</h2>
    <div class=\"row\">
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["srv"]) {
            // line 5
            yield "      <div class=\"col-md-4\">
        <div class=\"service-card\">
          <div class=\"service-icon\">
            <i class=\"";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["srv"], "icon", [], "any", false, false, false, 8), "html", null, true);
            yield "\"></i>
          </div>
          <h3 class=\"service-title\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["srv"], "titre", [], "any", false, false, false, 10), "html", null, true);
            yield "</h3>
          <p class=\"service-description\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["srv"], "description", [], "any", false, false, false, 11), "html", null, true);
            yield "</p>
        </div>
      </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['srv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/service.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  74 => 15,  64 => 11,  60 => 10,  55 => 8,  50 => 5,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"services-section ombre-back\">
    <h2 class=\"mb-5\">Autres Services</h2>
    <div class=\"row\">
{% for srv in data %}
      <div class=\"col-md-4\">
        <div class=\"service-card\">
          <div class=\"service-icon\">
            <i class=\"{{srv.icon}}\"></i>
          </div>
          <h3 class=\"service-title\">{{srv.titre}}</h3>
          <p class=\"service-description\">{{srv.description}}</p>
        </div>
      </div>
{% endfor %}
    </div>
</div>", "front/service.html.twig", "/var/www/myhost/symfony6/templates/front/service.html.twig");
    }
}
