<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_164b8834e3a334a2e2c1bc115fc0fe2fa437351a3d0be9bcb17ed7bafecb6cc9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'carousel' => [$this, 'block_carousel'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_carousel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "carousel"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<!-- Three columns of text below the carousel -->
<h3>Nos meilleures ventes</h3>
<p>Découvrez les produits les plus vendus</p>
<div class=\"row\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 10, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "        ";
            if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 11, $this->source); })())), 4))) {
                // line 12
                echo "            <div class=\"col-md-2\">
                ";
                // line 13
                $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 13)->display($context);
                // line 14
                echo "            </div>
        ";
            } elseif ((1 === twig_compare(twig_length_filter($this->env,             // line 15
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 15, $this->source); })())), 3))) {
                // line 16
                echo "            <div class=\"col-md-3\">
                ";
                // line 17
                $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 17)->display($context);
                // line 18
                echo "            </div>
        ";
            } elseif ((-1 === twig_compare(twig_length_filter($this->env,             // line 19
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 19, $this->source); })())), 4))) {
                // line 20
                echo "            <div class=\"col-md-4\">
                ";
                // line 21
                $this->loadTemplate("product/single_product.html.twig", "home/index.html.twig", 21)->display($context);
                // line 22
                echo "            </div>
        ";
            }
            // line 24
            echo "        
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">La nouvelle série de processeurs d'AMD Ryzen. <span class=\"text-muted\">Le jeu sans limite.</span></h2>
        <p class=\"lead\">Lorsque vous bénéficiez de l'architecture de processeur la plus avancée pour les gamers et les créateurs de contenu, les possibilités sont infinies. Que vous jouiez aux tout derniers jeux, conceviez le prochain gratte-ciel ou utilisiez des données, vous avez besoin d'un processeur puissant capable de gérer tout cela et plus encore. C'est incontestable, les processeurs pour PC de bureau AMD Ryzen™ série 5000 imposent un nouveau standard pour les gamers comme pour les artistes.</p>
    </div>
    <div class=\"col-md-5\">
        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/AMD_RYZEN.png"), "html", null, true);
        echo "\" alt=\"AMD Ryzen series\" class=\"img-fluid\">
    </div>
</div>

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading\">GEFORCE RTX série 30. <span class=\"text-muted\">Pour un rendu de jeux-vidéos non comparable.</span></h2>
        <p class=\"lead\">Les GPU GeForce RTX™ série 30 offrent des performances ultimes à tous les joueurs et créateurs. Optimisés par Ampere, l’architecture NVIDIA RTX de seconde génération, ces produits de haute technologie sont dotés de nouveaux cœurs RT et Tensor et embarquent des multiprocesseurs de flux à hautes performances pour délivrer des fonctionnalités d’IA de pointe ainsi qu’un rendu graphique ultra-immersif grâce au ray tracing.</p>
    </div>
    <div class=\"col-md-5 order-md-1\">
        <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/NVIDIA_30_SERIES.png"), "html", null, true);
        echo "\" alt=\"NVIDIA 30 series\" class=\"img-fluid\">
    </div>
</div>

<!-- <hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
        <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class=\"col-md-5\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text></svg>
    </div>
</div> -->

<hr class=\"featurette-divider\">

<!-- /END THE FEATURETTES -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 51,  172 => 39,  157 => 26,  142 => 24,  138 => 22,  136 => 21,  133 => 20,  131 => 19,  128 => 18,  126 => 17,  123 => 16,  121 => 15,  118 => 14,  116 => 13,  113 => 12,  110 => 11,  93 => 10,  87 => 6,  77 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block carousel %}{% endblock %}

{% block content %}
<!-- Three columns of text below the carousel -->
<h3>Nos meilleures ventes</h3>
<p>Découvrez les produits les plus vendus</p>
<div class=\"row\">
    {% for product in products %}
        {% if products|length > 4 %}
            <div class=\"col-md-2\">
                {% include 'product/single_product.html.twig' %}
            </div>
        {% elseif products|length > 3 %}
            <div class=\"col-md-3\">
                {% include 'product/single_product.html.twig' %}
            </div>
        {% elseif products|length < 4 %}
            <div class=\"col-md-4\">
                {% include 'product/single_product.html.twig' %}
            </div>
        {% endif %}
        
    {% endfor %}
</div><!-- /.row -->


<!-- START THE FEATURETTES -->

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">La nouvelle série de processeurs d'AMD Ryzen. <span class=\"text-muted\">Le jeu sans limite.</span></h2>
        <p class=\"lead\">Lorsque vous bénéficiez de l'architecture de processeur la plus avancée pour les gamers et les créateurs de contenu, les possibilités sont infinies. Que vous jouiez aux tout derniers jeux, conceviez le prochain gratte-ciel ou utilisiez des données, vous avez besoin d'un processeur puissant capable de gérer tout cela et plus encore. C'est incontestable, les processeurs pour PC de bureau AMD Ryzen™ série 5000 imposent un nouveau standard pour les gamers comme pour les artistes.</p>
    </div>
    <div class=\"col-md-5\">
        <img src=\"{{ asset('assets/img/AMD_RYZEN.png') }}\" alt=\"AMD Ryzen series\" class=\"img-fluid\">
    </div>
</div>

<hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7 order-md-2\">
        <h2 class=\"featurette-heading\">GEFORCE RTX série 30. <span class=\"text-muted\">Pour un rendu de jeux-vidéos non comparable.</span></h2>
        <p class=\"lead\">Les GPU GeForce RTX™ série 30 offrent des performances ultimes à tous les joueurs et créateurs. Optimisés par Ampere, l’architecture NVIDIA RTX de seconde génération, ces produits de haute technologie sont dotés de nouveaux cœurs RT et Tensor et embarquent des multiprocesseurs de flux à hautes performances pour délivrer des fonctionnalités d’IA de pointe ainsi qu’un rendu graphique ultra-immersif grâce au ray tracing.</p>
    </div>
    <div class=\"col-md-5 order-md-1\">
        <img src=\"{{ asset('assets/img/NVIDIA_30_SERIES.png') }}\" alt=\"NVIDIA 30 series\" class=\"img-fluid\">
    </div>
</div>

<!-- <hr class=\"featurette-divider\">

<div class=\"row featurette\">
    <div class=\"col-md-7\">
        <h2 class=\"featurette-heading\">And lastly, this one. <span class=\"text-muted\">Checkmate.</span></h2>
        <p class=\"lead\">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
    </div>
    <div class=\"col-md-5\">
        <svg class=\"bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto\" width=\"500\" height=\"500\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: 500x500\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#eee\"/><text x=\"50%\" y=\"50%\" fill=\"#aaa\" dy=\".3em\">500x500</text></svg>
    </div>
</div> -->

<hr class=\"featurette-divider\">

<!-- /END THE FEATURETTES -->
{% endblock %}", "home/index.html.twig", "C:\\Users\\alexa\\Documents\\ALL GIT\\LBI_ASH\\templates\\home\\index.html.twig");
    }
}
