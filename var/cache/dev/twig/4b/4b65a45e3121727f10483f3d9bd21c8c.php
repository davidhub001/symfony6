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
        yield from         $this->loadTemplate("front/carousel.html.twig", "front/index.html.twig", 6)->unwrap()->yield(CoreExtension::merge($context, ["data" => [["image" => "slide1.jpg", "titre" => "", "description" => "", "active" => "active"], ["image" => "slide2.jpg", "titre" => "", "description" => "", "active" => ""], ["image" => "slide3.jpg", "titre" => "", "description" => "", "active" => ""]], "text_fixe" => "echopechemada", "text_description" => "test"]));
        // line 15
        yield "
    ";
        // line 16
        yield from         $this->loadTemplate("front/card1.html.twig", "front/index.html.twig", 16)->unwrap()->yield(CoreExtension::merge($context, ["top" => "-100px", "data" => [["image" => "merou.jpg", "titre" => "Expertise Locale"], ["image" => "image_card.jpg", "titre" => "Engagement Écologique"], ["image" => "image_card_2.jpg", "titre" => "Expériences Personnalisées"]]]));
        // line 24
        yield "
    ";
        // line 25
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 25)->unwrap()->yield(CoreExtension::merge($context, ["image" => "band.jpg", "titre" => "Visites Guidées", "description" => "Découvrez les trésors cachés de notre région à travers des visites guidées culturelles et historiques.", "url" => "#"]));
        // line 29
        yield "
    ";
        // line 30
        yield from         $this->loadTemplate("front/card.html.twig", "front/index.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["data_card" => [["image" => "image_card.jpg", "titre" => "", "description" => "test", "url" => "#test"], ["image" => "image_card.jpg", "titre" => "", "description" => "test", "url" => "#test"], ["image" => "image_card.jpg", "titre" => "", "description" => "test", "url" => "#test"], ["image" => "image_card.jpg", "titre" => "", "description" => "test", "url" => "#test"]]]));
        // line 35
        yield ",


    ";
        // line 38
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 38)->unwrap()->yield(CoreExtension::merge($context, ["image" => "slide3.jpg", "titre" => "Tout sur la Pêche", "description" => "L'équipage de votre unité connait très bien les pratiques de pêche les 
                                                plus en pointe aujourd'hui !
                                                Vous naviguerez avec un équipage professionnel
                                                nos unités de pêche sont situées à Ambatoloaka (Zone ouest de 
                                                Nosy Be) ce qui nous permet d'être rapidement sur les zones de pêche.", "url" => "#"]));
        // line 46
        yield "    ";
        yield from         $this->loadTemplate("front/discover.html.twig", "front/index.html.twig", 46)->unwrap()->yield(CoreExtension::merge($context, ["titre" => "", "image" => "merou.jpg", "url" => "#", "data" => [["status" => "active", "titre" => "LOCATION DE MATÉRIELS DE PÊCHE", "description" => "Pour voyager léger, nous pouvons mettre à votre disposition du matériel de pêche. 
                        Ce matériel ne concerne que les cannes et moulinets, pour les leurres et accessoires 
                        de montage, nous ne fournissons pas mais vous pouvez regarder nos préconisations.
                        Pour nous assurer de vous fournir des équipements de qualité et un renouvellement 
                        des matériels , les cannes et moulinets font l’objet d’une location journalière et nous 
                        demandons un caution en cas de casse."], ["status" => "", "titre" => "LES SORTIES PÊCHE", "description" => "Tout séjour de pêche fait l’objet d’un programme qui vous sera proposé. Nous 
                        élaborons ce programme avec vous en fonction de vos envies et de votre budget.
                        Les sorties de pêche se font à la journée ou demi journée à votre convenance. Il ne 
                        sera pas rare, si la pêche est difficile, de se déplacer de spot en spot.
                        Notre objectif étant de vous faire attraper du poisson, nous ne regardons pas à la 
                        consommation d’essence et nous nous déplaçons autant que nécessaire.
                        Dans tous les cas, aucun dépassement en carburant ne vous sera demandé, sauf, 
                        sortie hors programme, programme définit à l’avance avec vous et contractuel."], ["status" => "", "titre" => "VOTRE EQUIPE A BORD", "description" => "Vous serez accompagné par un skipper et un guide de pêche parlant français ayant 
                        une forte expérience et connaissance des techniques et des lieux de pêche. Cette 
                        équipe sera à votre disposition pour vous conseiller, vous assister au besoin, le tout 
                        dans une ambiance conviviale et décontractée."], ["status" => "", "titre" => "SÉCURITÉ A BORD", "description" => "Sur notre bateau, nous veillons à votre sécurité.
                        L’utilisation de leurres de lancer volumineux et grassement armés (Popper) présente 
                        des risques majeurs de blessures, la prudence et l’observation des règles d’alternance 
                        au lancer sont de rigueur à bord.
                        Pour votre sécurité l’utilisation de lunettes de soleil et de gants sont obligatoires en 
                        action de pêche.
                        Pour un confort de pêche, nous n’embarquons que quatre pêcheurs par sortie. 
                        En aucun cas ce nombre de 4 sera dépassé."], ["status" => "", "titre" => "NO KILL / CATCH & REALES", "description" => "Nous procédons à une pêche raisonnée, les relâchés sont de règle quand ils peuvent 
                        être réalisés dans de bonnes conditions. Notre équipe met tout en œuvre pour que 
                        ces conditions soient réalisées.
                        Il est possible, lors de bivouac ou si vous souhaitez déguster une de vos prises de 
                        prélever quelques spécimens. Les plus grosses prises (reproducteurs), si leur état le 
                        permet, seront systématiquement relâchées après photos.
                        Le but est de pouvoir continuer encore très longtemps notre passion de pêcheur 
                        sportif et de ne pas scier la branche sur laquelle nous sommes assis."]]]));
        // line 88
        yield "    ";
        yield from         $this->loadTemplate("front/service.html.twig", "front/index.html.twig", 88)->unwrap()->yield(CoreExtension::merge($context, ["data" => [["titre" => "test", "description" => "test", "icon" => "bi bi-facebook"], ["titre" => "test", "description" => "test", "icon" => "bi bi-facebook"], ["titre" => "test", "description" => "test", "icon" => "bi bi-facebook"]]]));
        // line 96
        yield "
    ";
        // line 97
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 97)->unwrap()->yield(CoreExtension::merge($context, ["image" => "band2.jpg", "titre" => "Pêche en Eau Douce et Salée", "description" => "Profitez de sorties de pêche dans les lacs, rivières et en mer, encadrées par nos experts locaux", "url" => "#"]));
        // line 101
        yield "
    ";
        // line 102
        yield from         $this->loadTemplate("front/tour-card.html.twig", "front/index.html.twig", 102)->unwrap()->yield(CoreExtension::merge($context, ["image" => "merou.jpg", "titre" => "test", "description" => "test", "price" => "0Ar"]));
        // line 105
        yield "    ";
        yield from         $this->loadTemplate("front/tour-card.html.twig", "front/index.html.twig", 105)->unwrap()->yield(CoreExtension::merge($context, ["image" => "merou.jpg", "titre" => "test", "description" => "test", "price" => "0Ar"]));
        // line 108
        yield "    
    ";
        // line 109
        yield from         $this->loadTemplate("front/band-hero.html.twig", "front/index.html.twig", 109)->unwrap()->yield(CoreExtension::merge($context, ["image" => "slide1.jpg", "titre" => "Formation et Ateliers ", "description" => "Pour les novices comme pour les pêcheurs aguerris, nous proposons des formations et des ateliers pour perfectionner vos techniques de pêche.", "url" => "#"]));
        // line 113
        yield "    
    ";
        // line 114
        yield from         $this->loadTemplate("front/gallery.html.twig", "front/index.html.twig", 114)->unwrap()->yield(CoreExtension::merge($context, ["data" => [["image" => "image_card.jpg"], ["image" => "image_card_2.jpg"], ["image" => "image_card3.jpg"], ["image" => "merou.jpg"], ["image" => "image_card.jpg"], ["image" => "image_card_2.jpg"], ["image" => "image_card3.jpg"], ["image" => "merou.jpg"]]]));
        // line 124
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
        return array (  164 => 124,  162 => 114,  159 => 113,  157 => 109,  154 => 108,  151 => 105,  149 => 102,  146 => 101,  144 => 97,  141 => 96,  138 => 88,  106 => 46,  100 => 38,  95 => 35,  93 => 30,  90 => 29,  88 => 25,  85 => 24,  83 => 16,  80 => 15,  77 => 6,  70 => 5,  61 => 3,  54 => 2,  37 => 1,);
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
            'text_fixe': 'echopechemada',
            'text_description' : 'test' 
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

    {% include 'front/card.html.twig' with { 'data_card':[
        {'image':'image_card.jpg','titre':'','description':'test', 'url':'#test'},
        {'image':'image_card.jpg','titre':'','description':'test', 'url':'#test'},
        {'image':'image_card.jpg','titre':'','description':'test', 'url':'#test'},
        {'image':'image_card.jpg','titre':'','description':'test', 'url':'#test'}
    ]} %},


    {% include 'front/band-hero.html.twig' with {'image':'slide3.jpg',
                                                'titre':'Tout sur la Pêche',
                                                'description':\"L'équipage de votre unité connait très bien les pratiques de pêche les 
                                                plus en pointe aujourd'hui !
                                                Vous naviguerez avec un équipage professionnel
                                                nos unités de pêche sont situées à Ambatoloaka (Zone ouest de 
                                                Nosy Be) ce qui nous permet d'être rapidement sur les zones de pêche.\",
                                                'url':'#'}  %}
    {% include 'front/discover.html.twig' with {
            'titre':'',
            'image':'merou.jpg',
            'url':'#',
            'data':[
                    {'status':'active','titre':'LOCATION DE MATÉRIELS DE PÊCHE', 'description':'Pour voyager léger, nous pouvons mettre à votre disposition du matériel de pêche. 
                        Ce matériel ne concerne que les cannes et moulinets, pour les leurres et accessoires 
                        de montage, nous ne fournissons pas mais vous pouvez regarder nos préconisations.
                        Pour nous assurer de vous fournir des équipements de qualité et un renouvellement 
                        des matériels , les cannes et moulinets font l’objet d’une location journalière et nous 
                        demandons un caution en cas de casse.'},
                    {'status':'','titre':'LES SORTIES PÊCHE', 'description':'Tout séjour de pêche fait l’objet d’un programme qui vous sera proposé. Nous 
                        élaborons ce programme avec vous en fonction de vos envies et de votre budget.
                        Les sorties de pêche se font à la journée ou demi journée à votre convenance. Il ne 
                        sera pas rare, si la pêche est difficile, de se déplacer de spot en spot.
                        Notre objectif étant de vous faire attraper du poisson, nous ne regardons pas à la 
                        consommation d’essence et nous nous déplaçons autant que nécessaire.
                        Dans tous les cas, aucun dépassement en carburant ne vous sera demandé, sauf, 
                        sortie hors programme, programme définit à l’avance avec vous et contractuel.'},
                    {'status':'','titre':'VOTRE EQUIPE A BORD', 'description':'Vous serez accompagné par un skipper et un guide de pêche parlant français ayant 
                        une forte expérience et connaissance des techniques et des lieux de pêche. Cette 
                        équipe sera à votre disposition pour vous conseiller, vous assister au besoin, le tout 
                        dans une ambiance conviviale et décontractée.'},
                    {'status':'','titre':'SÉCURITÉ A BORD', 'description':'Sur notre bateau, nous veillons à votre sécurité.
                        L’utilisation de leurres de lancer volumineux et grassement armés (Popper) présente 
                        des risques majeurs de blessures, la prudence et l’observation des règles d’alternance 
                        au lancer sont de rigueur à bord.
                        Pour votre sécurité l’utilisation de lunettes de soleil et de gants sont obligatoires en 
                        action de pêche.
                        Pour un confort de pêche, nous n’embarquons que quatre pêcheurs par sortie. 
                        En aucun cas ce nombre de 4 sera dépassé.'},
                    {'status':'','titre':'NO KILL / CATCH & REALES', 'description':'Nous procédons à une pêche raisonnée, les relâchés sont de règle quand ils peuvent 
                        être réalisés dans de bonnes conditions. Notre équipe met tout en œuvre pour que 
                        ces conditions soient réalisées.
                        Il est possible, lors de bivouac ou si vous souhaitez déguster une de vos prises de 
                        prélever quelques spécimens. Les plus grosses prises (reproducteurs), si leur état le 
                        permet, seront systématiquement relâchées après photos.
                        Le but est de pouvoir continuer encore très longtemps notre passion de pêcheur 
                        sportif et de ne pas scier la branche sur laquelle nous sommes assis.'},
            ]
        }
    %}
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
", "front/index.html.twig", "/media/david/david/kandra/symfony6/templates/front/index.html.twig");
    }
}
