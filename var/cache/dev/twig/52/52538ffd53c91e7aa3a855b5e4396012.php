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

/* front/discover.html.twig */
class __TwigTemplate_d2b8ebbf496c4d15f7cead1367e4d227 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/discover.html.twig"));

        // line 1
        yield "<div class=\"container section-container section-discover\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/merou.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Beach\">
      </div>
      <div class=\"col-md-6\">
        <h2 class=\"section-title\">Discover New Horizons</h2>
        <nav>
          <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
            <a class=\"nav-link active\" id=\"nav-about-tab\" data-toggle=\"tab\" href=\"#nav-about\" role=\"tab\" aria-controls=\"nav-about\" aria-selected=\"true\">ABOUT US</a>
            <a class=\"nav-link\" id=\"nav-why-tab\" data-toggle=\"tab\" href=\"#nav-why\" role=\"tab\" aria-controls=\"nav-why\" aria-selected=\"false\">WHY CHOOSE US</a>
            <a class=\"nav-link\" id=\"nav-mission-tab\" data-toggle=\"tab\" href=\"#nav-mission\" role=\"tab\" aria-controls=\"nav-mission\" aria-selected=\"false\">OUR MISSION</a>
          </div>
        </nav>
        <div class=\"tab-content\" id=\"nav-tabContent\">
          <div class=\"tab-pane fade show active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
            <p class=\"section-text\">Wonder Tour is committed to bringing our clients the best in value and quality travel arrangements. We are passionate about travel and sharing the world's wonders with you.</p>
          </div>
          <div class=\"tab-pane fade\" id=\"nav-why\" role=\"tabpanel\" aria-labelledby=\"nav-why-tab\">
            <p class=\"section-text\">We provide exceptional customer service, unique travel experiences, and personalized itineraries.</p>
          </div>
          <div class=\"tab-pane fade\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
            <p class=\"section-text\">Our mission is to inspire and empower people to explore the world and create unforgettable memories.</p>
          </div>
        </div>
        <a href=\"#\" class=\"btn btn-primary\">Get in Touch</a>
        <a href=\"#\" class=\"btn btn-outline-secondary\">Read More</a>
      </div>
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
        return "front/discover.html.twig";
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
        return array (  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container section-container section-discover\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <img src=\"{{ asset('assets/images/merou.jpg') }}\" class=\"img-fluid\" alt=\"Beach\">
      </div>
      <div class=\"col-md-6\">
        <h2 class=\"section-title\">Discover New Horizons</h2>
        <nav>
          <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
            <a class=\"nav-link active\" id=\"nav-about-tab\" data-toggle=\"tab\" href=\"#nav-about\" role=\"tab\" aria-controls=\"nav-about\" aria-selected=\"true\">ABOUT US</a>
            <a class=\"nav-link\" id=\"nav-why-tab\" data-toggle=\"tab\" href=\"#nav-why\" role=\"tab\" aria-controls=\"nav-why\" aria-selected=\"false\">WHY CHOOSE US</a>
            <a class=\"nav-link\" id=\"nav-mission-tab\" data-toggle=\"tab\" href=\"#nav-mission\" role=\"tab\" aria-controls=\"nav-mission\" aria-selected=\"false\">OUR MISSION</a>
          </div>
        </nav>
        <div class=\"tab-content\" id=\"nav-tabContent\">
          <div class=\"tab-pane fade show active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
            <p class=\"section-text\">Wonder Tour is committed to bringing our clients the best in value and quality travel arrangements. We are passionate about travel and sharing the world's wonders with you.</p>
          </div>
          <div class=\"tab-pane fade\" id=\"nav-why\" role=\"tabpanel\" aria-labelledby=\"nav-why-tab\">
            <p class=\"section-text\">We provide exceptional customer service, unique travel experiences, and personalized itineraries.</p>
          </div>
          <div class=\"tab-pane fade\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
            <p class=\"section-text\">Our mission is to inspire and empower people to explore the world and create unforgettable memories.</p>
          </div>
        </div>
        <a href=\"#\" class=\"btn btn-primary\">Get in Touch</a>
        <a href=\"#\" class=\"btn btn-outline-secondary\">Read More</a>
      </div>
    </div>
</div>", "front/discover.html.twig", "/var/www/myhost/symfony6/templates/front/discover.html.twig");
    }
}
