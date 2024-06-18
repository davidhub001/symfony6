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

/* front/card1.html.twig */
class __TwigTemplate_a07d75be8e03c5d142c8fbe9f7474513 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/card1.html.twig"));

        // line 1
        yield "<div class=\"container card1 pause_top\" style=\"top:";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["top"]) || array_key_exists("top", $context) ? $context["top"] : (function () { throw new RuntimeError('Variable "top" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "\">
    <div class=\"row animate_opacity\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 4
            yield "            <div class=\"col-lg-4 col-md-4 col-sm-4 col-12 mb-5 pr-2 pl-2\">
                <img src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "image", [], "any", false, false, false, 5), "html", null, true);
            yield "\"/>
                <span class=\"titre\">";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["card"], "titre", [], "any", false, false, false, 6), "html", null, true);
            yield "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
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
        return "front/card1.html.twig";
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
        return array (  68 => 9,  59 => 6,  54 => 5,  51 => 4,  47 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container card1 pause_top\" style=\"top:{{top}}\">
    <div class=\"row animate_opacity\">
        {% for card in data %}
            <div class=\"col-lg-4 col-md-4 col-sm-4 col-12 mb-5 pr-2 pl-2\">
                <img src=\"{{ asset('assets/images/') }}{{card.image}}\"/>
                <span class=\"titre\">{{card.titre}}</span>
            </div>
        {% endfor %}
    </div>
</div>", "front/card1.html.twig", "/media/david/david/kandra/symfony6/templates/front/card1.html.twig");
    }
}
