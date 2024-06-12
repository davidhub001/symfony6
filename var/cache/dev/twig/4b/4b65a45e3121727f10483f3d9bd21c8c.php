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
class __TwigTemplate_63ef9ac67e1fca8da53ccebbcc4ee44a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/index.html.twig", 1);
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
        yield from         $this->loadTemplate("front/nav.html.twig", "front/index.html.twig", 3)->unwrap()->yield($context);
        
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
        yield "    ";
        yield from         $this->loadTemplate("front/carousel.html.twig", "front/index.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["data" => [["image" => "slide1.jpg", "titre" => "", "description" => "", "active" => "active"], ["image" => "slide2.jpg", "titre" => "", "description" => "", "active" => ""], ["image" => "slide3.jpg", "titre" => "", "description" => "", "active" => ""]], "text_fixe" => "echopechemada"]));
        // line 14
        yield "
    ";
        // line 15
        yield from         $this->loadTemplate("front/card1.html.twig", "front/index.html.twig", 15)->unwrap()->yield(CoreExtension::merge($context, ["top" => "-100px", "data" => [["image" => "merou.jpg", "titre" => "Expertise Locale"], ["image" => "image_card.jpg", "titre" => "Engagement Écologique"], ["image" => "image_card_2.jpg", "titre" => "Expériences Personnalisées"]]]));
        // line 23
        yield "
    ";
        // line 24
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 24)->unwrap()->yield(CoreExtension::merge($context, ["image" => "band.jpg", "titre" => "Visites Guidées", "description" => "Découvrez les trésors cachés de notre région à travers des visites guidées culturelles et historiques.", "url" => "#"]));
        // line 28
        yield "
    ";
        // line 29
        yield from         $this->loadTemplate("front/card.html.twig", "front/index.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "

    ";
        // line 32
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 32)->unwrap()->yield(CoreExtension::merge($context, ["image" => "slide3.jpg", "titre" => "Activités en Plein Air", "description" => "Randonnées, observation de la faune et de la flore, et bien plus encore pour les amoureux de la nature", "url" => "#"]));
        // line 36
        yield "    ";
        yield from         $this->loadTemplate("front/discover.html.twig", "front/index.html.twig", 36)->unwrap()->yield($context);
        // line 37
        yield "    ";
        yield from         $this->loadTemplate("front/service.html.twig", "front/index.html.twig", 37)->unwrap()->yield(CoreExtension::merge($context, ["data" => [["titre" => "test", "description" => "test", "icon" => "bi bi-facebook"], ["titre" => "test", "description" => "test", "icon" => "bi bi-facebook"], ["titre" => "test", "description" => "test", "icon" => "bi bi-facebook"]]]));
        // line 45
        yield "
    ";
        // line 46
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["image" => "band2.jpg", "titre" => "Pêche en Eau Douce et Salée", "description" => "Profitez de sorties de pêche dans les lacs, rivières et en mer, encadrées par nos experts locaux", "url" => "#"]));
        // line 50
        yield "
    ";
        // line 51
        yield from         $this->loadTemplate("front/tour-card.html.twig", "front/index.html.twig", 51)->unwrap()->yield(CoreExtension::merge($context, ["image" => "merou.jpg", "titre" => "test", "description" => "test", "price" => "0Ar"]));
        // line 54
        yield "    ";
        yield from         $this->loadTemplate("front/tour-card.html.twig", "front/index.html.twig", 54)->unwrap()->yield(CoreExtension::merge($context, ["image" => "merou.jpg", "titre" => "test", "description" => "test", "price" => "0Ar"]));
        // line 57
        yield "    
    ";
        // line 58
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 58)->unwrap()->yield(CoreExtension::merge($context, ["image" => "slide1.jpg", "titre" => "Formation et Ateliers ", "description" => "Pour les novices comme pour les pêcheurs aguerris, nous proposons des formations et des ateliers pour perfectionner vos techniques de pêche.", "url" => "#"]));
        // line 62
        yield "    
    ";
        // line 63
        yield from         $this->loadTemplate("front/gallery.html.twig", "front/index.html.twig", 63)->unwrap()->yield(CoreExtension::merge($context, ["data" => [["image" => "image_card.jpg"], ["image" => "image_card_2.jpg"], ["image" => "image_card3.jpg"], ["image" => "merou.jpg"], ["image" => "image_card.jpg"], ["image" => "image_card_2.jpg"], ["image" => "image_card3.jpg"], ["image" => "merou.jpg"]]]));
        // line 73
        yield "

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
        return array (  130 => 73,  128 => 63,  125 => 62,  123 => 58,  120 => 57,  117 => 54,  115 => 51,  112 => 50,  110 => 46,  107 => 45,  104 => 37,  101 => 36,  99 => 32,  95 => 30,  93 => 29,  90 => 28,  88 => 24,  85 => 23,  83 => 15,  80 => 14,  77 => 6,  70 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block nav %}
    {% include 'front/nav.html.twig' %}
{% endblock %}
{% block content %}
    {% include 'front/carousel.html.twig' with {
            'data':[
                    {'image':'slide1.jpg','titre':'', 'description':'','active':'active'},
                    {'image':'slide2.jpg','titre':'', 'description':'','active':''},
                    {'image':'slide3.jpg','titre':'', 'description':'','active':''},
            ],
            'text_fixe': 'echopechemada'
    } %}

    {% include 'front/card1.html.twig' with {
        'top':'-100px',
        'data': [
                {'image':'merou.jpg', 'titre':'Expertise Locale'},
                {'image':'image_card.jpg', 'titre':'Engagement Écologique'},
                {'image':'image_card_2.jpg', 'titre':'Expériences Personnalisées'},
        ]
    } %}

    {% include 'front/band-hero.html.twig' with {'image':'band.jpg',
                                                'titre':'Visites Guidées',
                                                'description':'Découvrez les trésors cachés de notre région à travers des visites guidées culturelles et historiques.',
                                                'url':'#'}  %}

    {% include 'front/card.html.twig'%}


    {% include 'front/band-hero.html.twig' with {'image':'slide3.jpg',
                                                'titre':'Activités en Plein Air',
                                                'description':'Randonnées, observation de la faune et de la flore, et bien plus encore pour les amoureux de la nature',
                                                'url':'#'}  %}
    {% include 'front/discover.html.twig'%}
    {% include 'front/service.html.twig' with {
            'data':[
                    {'titre':'test','description':'test', 'icon':'bi bi-facebook'},
                    {'titre':'test','description':'test', 'icon':'bi bi-facebook'},
                    {'titre':'test','description':'test', 'icon':'bi bi-facebook'},
            ]
    }
    %}

    {% include 'front/band-hero.html.twig' with {'image':'band2.jpg',
                                                'titre':'Pêche en Eau Douce et Salée',
                                                'description':'Profitez de sorties de pêche dans les lacs, rivières et en mer, encadrées par nos experts locaux',
                                                'url':'#'}  %}

    {% include 'front/tour-card.html.twig' with 
            {'image':'merou.jpg','titre':'test', 'description':'test','price':'0Ar'}
    %}
    {% include 'front/tour-card.html.twig' with 
            {'image':'merou.jpg','titre':'test', 'description':'test','price':'0Ar'}
    %}
    
    {% include 'front/band-hero.html.twig' with {'image':'slide1.jpg',
                                                'titre':'Formation et Ateliers ',
                                                'description':'Pour les novices comme pour les pêcheurs aguerris, nous proposons des formations et des ateliers pour perfectionner vos techniques de pêche.',
                                                'url':'#'}  %}
    
    {% include 'front/gallery.html.twig' with {'data': [
            {'image': 'image_card.jpg'},
            {'image': 'image_card_2.jpg'},
            {'image': 'image_card3.jpg'},
            {'image': 'merou.jpg'},
            {'image': 'image_card.jpg'},
            {'image': 'image_card_2.jpg'},
            {'image': 'image_card3.jpg'},
            {'image': 'merou.jpg'},
    ]} %}


{% endblock %}
", "front/index.html.twig", "/var/www/myhost/symfony6/templates/front/index.html.twig");
    }
}
