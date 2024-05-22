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

/* front/base.html.twig */
class __TwigTemplate_10114c43cb8eefccf3d96d58adefd02e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    <link href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>
<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
        <a class=\"navbar-brand\" href=\"#\"><img class=\"logo\" src=\"https://www.logogenie.fr/images/exemples/fr/logo-lotus.png\"></a>
        <ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
            <li class=\"nav-item\">
            <a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("accueil"), "html", null, true);
        yield "\">Accueil</a>
            </li>
            <li class=\"nav-item\">
            <a class=\"nav-link\" aria-current=\"page\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("contact"), "html", null, true);
        yield "\">Contact</a>
            </li>
            ";
        // line 29
        yield "        </ul>
        ";
        // line 34
        yield "        </div>
    </div>
    </nav>

    <div id=\"content\">
        ";
        // line 39
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 40
        yield "    </div>
    <footer>
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
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery/jquery.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        yield "\"></script>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/base.html.twig";
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
        return array (  144 => 39,  130 => 5,  118 => 56,  114 => 55,  110 => 54,  106 => 53,  91 => 40,  89 => 39,  82 => 34,  79 => 29,  74 => 21,  68 => 18,  53 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}{{titre}}{% endblock %}</title>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\">
</head>
<body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-fluid\">
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarTogglerDemo01\" aria-controls=\"navbarTogglerDemo01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarToggler\">
        <a class=\"navbar-brand\" href=\"#\"><img class=\"logo\" src=\"https://www.logogenie.fr/images/exemples/fr/logo-lotus.png\"></a>
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
    </nav>

    <div id=\"content\">
        {% block content %}{% endblock %}
    </div>
    <footer>
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
        <script src=\"{{ asset('assets/js/script.js') }}\"></script>
</body>
</html>
", "front/base.html.twig", "/var/www/myhost/symfony6/templates/front/base.html.twig");
    }
}
