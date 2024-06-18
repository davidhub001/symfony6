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

/* front/card.html.twig */
class __TwigTemplate_587d4531226a45b0f7a1a3aad8799018 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/card.html.twig"));

        // line 1
        yield "<div class=\"container\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data_card"]) || array_key_exists("data_card", $context) ? $context["data_card"] : (function () { throw new RuntimeError('Variable "data_card" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 4
            yield "            <div class=\"card col-lg-3 col-md-4 col-sm-4 col-xs-2 p-0 mr-3 mb-1\">
                <div class=\"image-scale\">
                    <img class=\"card-img-top\" src=\"";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, false, 6), "html", null, true);
            yield "\" alt=\"Card image cap\">
                </div>
                <div class=\"card-body pl-2 pr-2\">
                    <h5 class=\"card-title\">";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "titre", [], "any", false, false, false, 9), "html", null, true);
            yield "</h5>
                    <p class=\"card-text\">";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, false, 10), "html", null, true);
            yield "</p>
                    <a href=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "url", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
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
        return "front/card.html.twig";
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
        return array (  78 => 15,  68 => 11,  64 => 10,  60 => 9,  53 => 6,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row\">
        {% for card in data_card %}
            <div class=\"card col-lg-3 col-md-4 col-sm-4 col-xs-2 p-0 mr-3 mb-1\">
                <div class=\"image-scale\">
                    <img class=\"card-img-top\" src=\"{{ asset('assets/images/') }}{{card.image}}\" alt=\"Card image cap\">
                </div>
                <div class=\"card-body pl-2 pr-2\">
                    <h5 class=\"card-title\">{{card.titre}}</h5>
                    <p class=\"card-text\">{{card.description}}</p>
                    <a href=\"{{card.url}}\" class=\"btn btn-primary\">Go somewhere</a>
                </div>
            </div>
        {% endfor %}
    </div>
</div>", "front/card.html.twig", "/media/david/david/kandra/symfony6/templates/front/card.html.twig");
    }
}
