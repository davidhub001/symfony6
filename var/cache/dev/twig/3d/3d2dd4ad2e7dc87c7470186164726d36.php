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

/* front/nav.html.twig */
class __TwigTemplate_471b3260c54f342ade29079c58324f5b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/nav.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
        <a class=\"navbar-brand\" href=\"#\">
            <img class=\"logo\" src=\"https://www.logogenie.fr/images/exemples/fr/logo-lotus.png\">
        </a>
    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("accueil"), "html", null, true);
        yield "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        yield "\">Contact</a>
        </li>
        ";
        // line 23
        yield "    </ul>
    ";
        // line 28
        yield "    </div>
    </div>
</nav>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/nav.html.twig";
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
        return array (  68 => 28,  65 => 23,  60 => 15,  54 => 12,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
        <a class=\"navbar-brand\" href=\"#\">
            <img class=\"logo\" src=\"https://www.logogenie.fr/images/exemples/fr/logo-lotus.png\">
        </a>
    <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"{{asset('accueil')}}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"{{asset('contact')}}\">Contact</a>
        </li>
        {# <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"#\">Link</a>
        </li>
        <li class=\"nav-item\">
        <a class=\"nav-link disabled\">Disabled</a>
        </li> #}
    </ul>
    {# <form class=\"d-flex\">
        <input class=\"form-control me-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
        <button class=\"btn btn-outline-success\" type=\"submit\">Search</button>
    </form> #}
    </div>
    </div>
</nav>", "front/nav.html.twig", "/var/www/myhost/symfony6/templates/front/nav.html.twig");
    }
}
