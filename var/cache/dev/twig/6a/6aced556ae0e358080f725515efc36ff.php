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

/* admin/bank_image.html.twig */
class __TwigTemplate_b1402a1aaacdc50ecb318a5b18431f3a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bank_image.html.twig"));

        // line 1
        yield "<div class=\"mt-5\">
    <div class=\"w-50\"> 
        ";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "row ml-5 mr-5", "style" => "align-items: flex-end"]]);
        yield "
        ";
        // line 4
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_end');
        yield "
    </div>
    <div class=\"row\">

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 8, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 9
            yield "        
        <div class=\"card m-3\" style=\"width: 18rem;\" data-toggle=\"modal\" data-target=\"#exampleModalCenter";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
            yield "\">
            <img  class=\"card-img-top\" src=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 11), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "titre", [], "any", false, false, false, 11), "html", null, true);
            yield "\" class=\"w-25 p-4\">
            
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "titre", [], "any", false, false, false, 14), "html", null, true);
            yield "</h5>
                <p class=\"card-text\"> ";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "size", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
            </div>
        </div>
        <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModalCenter";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Edit image</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <img src=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 29), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "titre", [], "any", false, false, false, 29), "html", null, true);
            yield "\" class=\"w-100 p-4\">

            </div>
            <div class=\"modal-footer\" style=\"    justify-content: space-evenly;\">
                
                <form name=\"bankimg_form\" method=\"post\" enctype=\"multipart/form-data\">
                    <div>
                        <input type=\"text\" placeholder=\"titre\" class=\"w-100 mb-1 form-control\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "titre", [], "any", false, false, false, 36), "html", null, true);
            yield "\" name=\"titre";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 36), "html", null, true);
            yield "\">
                        <select type=\"text\" class=\"w-100 mb-1 form-control\" name=\"type";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37), "html", null, true);
            yield "\">
                            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["type_images"]) || array_key_exists("type_images", $context) ? $context["type_images"] : (function () { throw new RuntimeError('Variable "type_images" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 39
                yield "                                <option>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield "</option>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "                        </select>
                        <textarea class=\"w-100 mb-1 form-control\" placeholder=\"description\" name=\"description";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42), "html", null, true);
            yield "\"></textarea>
                        <label>Qualité :</label><span name=\"compressionValue";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            yield "\">100%</span>
                        <input type=\"range\" name=\"rangeInput\" edit-range=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 44), "html", null, true);
            yield "\"min=\"0\" max=\"100\" value=\"100\">
                        </fieldset>
                    </div>
                    <button class=\"btn\" data-dismiss=\"modal\" type=\"submit\" name=\"delete_image\"><i class=\"bi bi-trash\" ></i></button>
                    <button class=\"btn\" data-dismiss=\"modal\" type=\"submit\" name=\"save_image\" onclick=\"Ajax_editimage(";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "schemeAndHttpHost", [], "any", false, false, false, 48) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "basePath", [], "any", false, false, false, 48)), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["api_url"]) || array_key_exists("api_url", $context) ? $context["api_url"] : (function () { throw new RuntimeError('Variable "api_url" does not exist.', 48, $this->source); })()), "html", null, true);
            yield "')\"><i class=\"bi bi-check-lg\" ></i></button>
                </form>
                
            </div>
            </div>
        </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "   </div>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/bank_image.html.twig";
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
        return array (  189 => 56,  163 => 48,  156 => 44,  152 => 43,  148 => 42,  145 => 41,  136 => 39,  132 => 38,  128 => 37,  122 => 36,  111 => 29,  98 => 19,  91 => 15,  87 => 14,  80 => 11,  76 => 10,  73 => 9,  56 => 8,  49 => 4,  45 => 3,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mt-5\">
    <div class=\"w-50\"> 
        {{ form_start(form, {'attr': {'class': 'row ml-5 mr-5', 'style':'align-items: flex-end'}} ) }}
        {{ form_end(form) }}
    </div>
    <div class=\"row\">

    {% for image in images %}
        
        <div class=\"card m-3\" style=\"width: 18rem;\" data-toggle=\"modal\" data-target=\"#exampleModalCenter{{ loop.index }}\">
            <img  class=\"card-img-top\" src=\"{{image.path}}{{image.titre}}\" class=\"w-25 p-4\">
            
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{image.titre}}</h5>
                <p class=\"card-text\"> {{image.size}}</p>
            </div>
        </div>
        <!-- Modal -->
        <div class=\"modal fade\" id=\"exampleModalCenter{{ loop.index }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Edit image</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <img src=\"{{image.path}}{{image.titre}}\" class=\"w-100 p-4\">

            </div>
            <div class=\"modal-footer\" style=\"    justify-content: space-evenly;\">
                
                <form name=\"bankimg_form\" method=\"post\" enctype=\"multipart/form-data\">
                    <div>
                        <input type=\"text\" placeholder=\"titre\" class=\"w-100 mb-1 form-control\" value=\"{{image.titre}}\" name=\"titre{{ loop.index }}\">
                        <select type=\"text\" class=\"w-100 mb-1 form-control\" name=\"type{{ loop.index }}\">
                            {% for type in type_images %}
                                <option>{{type}}</option>
                            {% endfor %}
                        </select>
                        <textarea class=\"w-100 mb-1 form-control\" placeholder=\"description\" name=\"description{{ loop.index }}\"></textarea>
                        <label>Qualité :</label><span name=\"compressionValue{{ loop.index }}\">100%</span>
                        <input type=\"range\" name=\"rangeInput\" edit-range=\"{{ loop.index }}\"min=\"0\" max=\"100\" value=\"100\">
                        </fieldset>
                    </div>
                    <button class=\"btn\" data-dismiss=\"modal\" type=\"submit\" name=\"delete_image\"><i class=\"bi bi-trash\" ></i></button>
                    <button class=\"btn\" data-dismiss=\"modal\" type=\"submit\" name=\"save_image\" onclick=\"Ajax_editimage({{ loop.index }}, '{{ app.request.schemeAndHttpHost ~ app.request.basePath }}/{{api_url}}')\"><i class=\"bi bi-check-lg\" ></i></button>
                </form>
                
            </div>
            </div>
        </div>
        </div>
    {% endfor %}
   </div>
</div>", "admin/bank_image.html.twig", "/var/www/myhost/symfony6/templates/admin/bank_image.html.twig");
    }
}
