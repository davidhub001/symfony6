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

/* front/footer.html.twig */
class __TwigTemplate_d5a8a7eb1cc4ea3fcc4efa450b08e97a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/footer.html.twig"));

        // line 1
        yield "<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">&nbsp;</div>
            <div class=\"col-lg-4 text-center\"><i class=\"bi bi-facebook\"></i><i class=\"bi bi-linkedin\"></i><i class=\"bi bi-youtube\"></i></div>
            <div class=\"col-lg-4\">&nbsp;</div>
        </div>
        <div class=\"copyright text-center\">
            Copyright&copy;2024
        </div>
    </div>
</footer>
<script src=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        yield "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/footer.html.twig";
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
        return array (  67 => 16,  63 => 15,  59 => 14,  55 => 13,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">&nbsp;</div>
            <div class=\"col-lg-4 text-center\"><i class=\"bi bi-facebook\"></i><i class=\"bi bi-linkedin\"></i><i class=\"bi bi-youtube\"></i></div>
            <div class=\"col-lg-4\">&nbsp;</div>
        </div>
        <div class=\"copyright text-center\">
            Copyright&copy;2024
        </div>
    </div>
</footer>
<script src=\"{{ asset('assets/js/jquery/jquery.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/script.js') }}\"></script>", "front/footer.html.twig", "H:\\kandra\\symfony6\\templates\\front\\footer.html.twig");
    }
}
