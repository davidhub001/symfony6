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

/* front/tour-card.html.twig */
class __TwigTemplate_063f065e3a8beb3988495ef2947eb73a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/tour-card.html.twig"));

        // line 1
        yield "
<div class=\"container\">
\t";
        // line 4
        yield "\t<div class=\"tour-card\">
\t\t<img src=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/"), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\" alt=\"Tour Image\">
\t\t<div class=\"tour-card-body\">
\t\t\t<div>
\t\t\t\t<h3 class=\"tour-title\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "</h3>
\t\t\t\t";
        // line 13
        yield "\t\t\t\t<p class=\"tour-description\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary\">Voir</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tour-price\">
\t\t\t";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "
\t\t</div>
\t</div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/tour-card.html.twig";
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
        return array (  70 => 20,  59 => 13,  55 => 8,  48 => 5,  45 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container\">
\t{# <h2 class=\"my-5 text-center\">Hot Tours</h2> #}
\t<div class=\"tour-card\">
\t\t<img src=\"{{ asset('assets/images/') }}{{image}}\" alt=\"Tour Image\">
\t\t<div class=\"tour-card-body\">
\t\t\t<div>
\t\t\t\t<h3 class=\"tour-title\">{{titre}}</h3>
\t\t\t\t{# <div class=\"tour-reviews\">
\t\t\t\t\t<span class=\"text-warning\">&#9733;&#9733;&#9733;&#9733;&#9734;</span> 
\t\t\t\t\t4 customer reviews
\t\t\t\t</div> #}
\t\t\t\t<p class=\"tour-description\">{{description}}</p>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary\">Voir</a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"tour-price\">
\t\t\t{{price}}
\t\t</div>
\t</div>
</div>", "front/tour-card.html.twig", "/media/david/david/kandra/symfony6/templates/front/tour-card.html.twig");
    }
}
