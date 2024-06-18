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

/* front/band-hero.html.twig */
class __TwigTemplate_c6c9f0da561726c9bc218029c91bdb17 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/band-hero.html.twig"));

        // line 1
        yield "<div class=\"hero-section mt-5 mb-5\" style=\"background: url('";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 1, $this->source); })()), "html", null, true);
        yield "') no-repeat center center/cover;\">
    <div class=\"content band-text-ombre\">
        <h1>";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 3, $this->source); })()), "html", null, true);
        yield "</h1>
        <p>";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "</p>
        <a href=\"#\" class=\"btn-custom\">Voir</a>
    </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/band-hero.html.twig";
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
        return array (  52 => 4,  48 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero-section mt-5 mb-5\" style=\"background: url('{{ asset('assets/images/') }}{{image}}') no-repeat center center/cover;\">
    <div class=\"content band-text-ombre\">
        <h1>{{titre}}</h1>
        <p>{{description}}</p>
        <a href=\"#\" class=\"btn-custom\">Voir</a>
    </div>
</div>", "front/band-hero.html.twig", "/media/david/david/kandra/symfony6/templates/front/band-hero.html.twig");
    }
}
