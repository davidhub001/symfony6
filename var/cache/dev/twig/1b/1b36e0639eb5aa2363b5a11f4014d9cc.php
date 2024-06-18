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

/* front/contact.html.twig */
class __TwigTemplate_55be08afebcbdad7eb135d103f8720df extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'nav' => [$this, 'block_nav'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        yield "    ";
        yield from         $this->loadTemplate("front/nav.html.twig", "front/contact.html.twig", 3)->unwrap()->yield($context);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        yield "<section id=\"contact\" class=\"contact\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-header\">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class=\"row gx-lg-0 gy-4\">

          <div class=\"col-lg-4\">

            <div class=\"info-container d-flex flex-column align-items-center justify-content-center\">
              <div class=\"info-item d-flex\">
                <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-envelope flex-shrink-0\"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-phone flex-shrink-0\"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-clock flex-shrink-0\"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class=\"col-lg-8\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"7\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\" class=\"btn\">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/contact.html.twig";
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
        return array (  77 => 6,  70 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block nav %}
    {% include 'front/nav.html.twig' %}
{% endblock %}
{% block content %}
<section id=\"contact\" class=\"contact\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-header\">
          <h2>Contact</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
        </div>

        <div class=\"row gx-lg-0 gy-4\">

          <div class=\"col-lg-4\">

            <div class=\"info-container d-flex flex-column align-items-center justify-content-center\">
              <div class=\"info-item d-flex\">
                <i class=\"bi bi-geo-alt flex-shrink-0\"></i>
                <div>
                  <h4>Location:</h4>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-envelope flex-shrink-0\"></i>
                <div>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-phone flex-shrink-0\"></i>
                <div>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55</p>
                </div>
              </div><!-- End Info Item -->

              <div class=\"info-item d-flex\">
                <i class=\"bi bi-clock flex-shrink-0\"></i>
                <div>
                  <h4>Open Hours:</h4>
                  <p>Mon-Sat: 11AM - 23PM</p>
                </div>
              </div><!-- End Info Item -->
            </div>

          </div>

          <div class=\"col-lg-8\">
            <form action=\"forms/contact.php\" method=\"post\" role=\"form\" class=\"php-email-form\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" name=\"name\" class=\"form-control\" id=\"name\" placeholder=\"Your Name\" required>
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Your Email\" required>
                </div>
              </div>
              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" name=\"subject\" id=\"subject\" placeholder=\"Subject\" required>
              </div>
              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" name=\"message\" rows=\"7\" placeholder=\"Message\" required></textarea>
              </div>
              <div class=\"my-3\">
                <div class=\"loading\">Loading</div>
                <div class=\"error-message\"></div>
                <div class=\"sent-message\">Your message has been sent. Thank you!</div>
              </div>
              <div class=\"text-center\"><button type=\"submit\" class=\"btn\">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->
{% endblock %}
", "front/contact.html.twig", "H:\\kandra\\symfony6\\templates\\front\\contact.html.twig");
    }
}
