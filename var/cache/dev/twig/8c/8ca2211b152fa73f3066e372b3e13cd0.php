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

/* front/gallery.html.twig */
class __TwigTemplate_771059835d630a868db77497264525b9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/gallery.html.twig"));

        // line 1
        yield "<div class=\"mt-5 gallery-container\">
    <div class=\"gallery-row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            yield "            <div class=\"gallery-item\">
                <img src=\"";
            // line 5
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 5), "html", null, true);
            yield "\" alt=\"Image 6\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        yield "    </div>
    <button class=\"gallery-nav gallery-nav-prev\" onclick=\"scrollGallery(-1)\">&#8249;</button>
    <button class=\"gallery-nav gallery-nav-next\" onclick=\"scrollGallery(1)\">&#8250;</button>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/gallery.html.twig";
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
        return array (  62 => 8,  52 => 5,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-5 gallery-container\">
    <div class=\"gallery-row\">
        {% for item in data %}
            <div class=\"gallery-item\">
                <img src=\"{{ asset('assets/images/') }}{{item.image}}\" alt=\"Image 6\">
            </div>
        {% endfor %}
    </div>
    <button class=\"gallery-nav gallery-nav-prev\" onclick=\"scrollGallery(-1)\">&#8249;</button>
    <button class=\"gallery-nav gallery-nav-next\" onclick=\"scrollGallery(1)\">&#8250;</button>
</div>

", "front/gallery.html.twig", "H:\\kandra\\symfony6\\templates\\front\\gallery.html.twig");
    }
}
