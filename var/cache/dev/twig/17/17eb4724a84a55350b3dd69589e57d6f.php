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

/* admin/sidebar.html.twig */
class __TwigTemplate_7876ce1129841eb223ffd8ad2623878c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/sidebar.html.twig"));

        // line 1
        yield "<div class=\"col-lg-2 col-md-3 col-sm-3 col-3 sidebar pt-2 pr-2 pl-4\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"?page=accueil\">
                <i class=\"bi bi-gear\"></i> <span>Paramètre</span>
            </a>
        </div>
        <div class=\"col-lg-12\">
            <a href=\"?page=bank_images\">
                <i class=\"bi bi-images\"></i> <span>Bank images</span>
            </a>
        </div>
        <div class=\"col-lg-12\">
            <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        yield "\">
                <i class=\"bi bi-power\"></i>
            </a>
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
        return "admin/sidebar.html.twig";
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
        return array (  56 => 14,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-2 col-md-3 col-sm-3 col-3 sidebar pt-2 pr-2 pl-4\">
    <div class=\"row\">
        <div class=\"col-lg-12\">
            <a href=\"?page=accueil\">
                <i class=\"bi bi-gear\"></i> <span>Paramètre</span>
            </a>
        </div>
        <div class=\"col-lg-12\">
            <a href=\"?page=bank_images\">
                <i class=\"bi bi-images\"></i> <span>Bank images</span>
            </a>
        </div>
        <div class=\"col-lg-12\">
            <a href=\"{{path('logout')}}\">
                <i class=\"bi bi-power\"></i>
            </a>
        </div>
    </div>
</div>", "admin/sidebar.html.twig", "/var/www/myhost/symfony6/templates/admin/sidebar.html.twig");
    }
}
