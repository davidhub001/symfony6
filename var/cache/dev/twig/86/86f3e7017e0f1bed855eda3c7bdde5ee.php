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

/* front/index.html.twig */
class __TwigTemplate_ba2f56fe1375a12b9c959f3cc57928a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        yield "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
      <a class=\"navbar-brand\" href=\"#\"><img class=\"logo\" src=\"https://www.logogenie.fr/images/exemples/fr/logo-lotus.png\"></a>
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        yield "\">Contact</a>
        </li>
        ";
        // line 23
        yield "      </ul>
      ";
        // line 28
        yield "    </div>
  </div>
</nav>

<div id=\"carouselExampleIndicators\" class=\"carousel slide height500\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100 height500\" src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slide1.jpg"), "html", null, true);
        yield "\" alt=\"First slide\">
            ";
        // line 45
        yield "        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100 height500\" src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slide2.jpg"), "html", null, true);
        yield "\" alt=\"Second slide\">
            ";
        // line 52
        yield "        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100 height500\" src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/slide3.jpg"), "html", null, true);
        yield "\" alt=\"Third slide\">
            ";
        // line 59
        yield "        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
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
        return "front/index.html.twig";
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
        return array (  116 => 59,  112 => 54,  108 => 52,  104 => 47,  100 => 45,  96 => 40,  82 => 28,  79 => 23,  74 => 15,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block content %}
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <div class=\"container-fluid\">
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
      <a class=\"navbar-brand\" href=\"#\"><img class=\"logo\" src=\"https://www.logogenie.fr/images/exemples/fr/logo-lotus.png\"></a>
      <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
        <li class=\"nav-item\">
          <a class=\"nav-link active\" aria-current=\"page\" href=\"\">Accueil</a>
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
</nav>

<div id=\"carouselExampleIndicators\" class=\"carousel slide height500\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
        <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
    </ol>
    <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
            <img class=\"d-block w-100 height500\" src=\"{{ asset('assets/images/slide1.jpg') }}\" alt=\"First slide\">
            {# <div class=\"carousel-caption d-none d-md-block\">
                <h1>test</h1>
                <p>test</p>
            </div> #}
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100 height500\" src=\"{{ asset('assets/images/slide2.jpg') }}\" alt=\"Second slide\">
            {# <div class=\"carousel-caption d-none d-md-block\">
                <h5>test</h5>
                <p>test</p>
            </div> #}
        </div>
        <div class=\"carousel-item\">
            <img class=\"d-block w-100 height500\" src=\"{{ asset('assets/images/slide3.jpg') }}\" alt=\"Third slide\">
            {# <div class=\"carousel-caption d-none d-md-block\">
                <h5>test</h5>
                <p>test</p>
            </div> #}
        </div>
    </div>
    <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>
{% endblock %}
", "front/index.html.twig", "/var/www/myhost/symfony6/templates/front/index.html.twig");
    }
}
