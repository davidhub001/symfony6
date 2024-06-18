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
      <div class=\"col-md-3\">
        <img src=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/merou.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"Beach\">
      </div>
      <div class=\"col-md-9\">
        <h2 class=\"section-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</h2>
        <nav>
          <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 10, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["disco"]) {
            // line 11
            yield "            
              <a class=\"nav-link ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disco"], "status", [], "any", false, false, false, 12), "html", null, true);
            yield "\" id=\"nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            yield "-tab\" data-toggle=\"tab\" href=\"#nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            yield "\" role=\"tab\" aria-controls=\"nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 12), "html", null, true);
            yield "\" aria-selected=\"true\">
                ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disco"], "titre", [], "any", false, false, false, 13), "html", null, true);
            yield "
              </a>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "          </div>
          
        </nav>
        <div class=\"tab-content\" id=\"nav-tabContent\">
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["disco"]) {
            // line 21
            yield "             <div class=\"tab-pane fade show ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disco"], "status", [], "any", false, false, false, 21), "html", null, true);
            yield "\" id=\"nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
            yield "\" role=\"tabpanel\" aria-labelledby=\"nav-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 21), "html", null, true);
            yield "-tab\">
              <p class=\"section-text\">
                  ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["disco"], "description", [], "any", false, false, false, 23), "html", null, true);
            yield "
              </p>
            </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['disco'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "        </div>
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
        return array (  156 => 27,  138 => 23,  128 => 21,  111 => 20,  105 => 16,  88 => 13,  78 => 12,  75 => 11,  58 => 10,  52 => 7,  46 => 4,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container section-container section-discover\">
    <div class=\"row\">
      <div class=\"col-md-3\">
        <img src=\"{{ asset('assets/images/merou.jpg') }}\" class=\"img-fluid\" alt=\"Beach\">
      </div>
      <div class=\"col-md-9\">
        <h2 class=\"section-title\">{{titre}}</h2>
        <nav>
          <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
            {% for disco in data %}
            
              <a class=\"nav-link {{disco.status}}\" id=\"nav-{{loop.index}}-tab\" data-toggle=\"tab\" href=\"#nav-{{loop.index}}\" role=\"tab\" aria-controls=\"nav-{{loop.index}}\" aria-selected=\"true\">
                {{disco.titre}}
              </a>
            {% endfor %}
          </div>
          
        </nav>
        <div class=\"tab-content\" id=\"nav-tabContent\">
          {% for disco in data %}
             <div class=\"tab-pane fade show {{disco.status}}\" id=\"nav-{{loop.index}}\" role=\"tabpanel\" aria-labelledby=\"nav-{{loop.index}}-tab\">
              <p class=\"section-text\">
                  {{disco.description}}
              </p>
            </div>
          {% endfor %}
        </div>
        <a href=\"#\" class=\"btn btn-primary\">Get in Touch</a>
        <a href=\"#\" class=\"btn btn-outline-secondary\">Read More</a>
      </div>
    </div>
</div>", "front/discover.html.twig", "/media/david/david/kandra/symfony6/templates/front/discover.html.twig");
    }
}
