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

/* main/show-category.html.twig */
class __TwigTemplate_a7a84536abfbeeb1a3ebdf6c98e49762cb3c6c58921f5b49aa66081e842bb773 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/show-category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/show-category.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/show-category.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Index page!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        echo twig_include($this->env, $context, "main/layouts/header.html.twig");
        echo "

    <h3 class=\"text-dark mt-2 ml-3 text-left home-logo\">NEWS<span class=\"yellow-text\">BLOG</span></h3>
    <hr>

    ";
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "        <div class=\"d-flex justify-content-center\">
            <a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 18
            echo "
    ";
        }
        // line 20
        echo "
    <h2 class=\"text-center\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 21, $this->source); })()), "category", [], "any", false, false, false, 21), "html", null, true);
        echo "</h2>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 22, $this->source); })()), "posts", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "        <a href=\"/main/showPost/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 23), "html", null, true);
            echo "\" id=\"post-link\">
            <div class=\"d-flex justify-content-center flex-column news-wrapper mt-3\">
                <div class=\"news-title\">
                    <h1>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h1>
                    <hr>
                </div>
                <div class=\"col-4\">
                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" alt=\"img\" class=\"news-img\">
                </div>
                <div class=\"news-content\">
                    <p href=\"#\">Desc:";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                </div>
                <div class=\"news-content\">
                    <p href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                </div>
                ";
            // line 39
            echo "                    ";
            // line 40
            echo "                ";
            // line 41
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 42
                echo "                    <a href=\"/main/show-tag/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 42), "html", null, true);
                echo "\"><span class=\"badge badge-secondary col-1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 42), "html", null, true);
                echo "</span></a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </div>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/show-category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 47,  179 => 44,  168 => 42,  163 => 41,  161 => 40,  159 => 39,  154 => 36,  148 => 33,  142 => 30,  135 => 26,  128 => 23,  124 => 22,  120 => 21,  117 => 20,  113 => 18,  111 => 17,  108 => 16,  102 => 13,  99 => 12,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index page!{% endblock %}

{% block body %}
    {{ include('main/layouts/header.html.twig') }}

    <h3 class=\"text-dark mt-2 ml-3 text-left home-logo\">NEWS<span class=\"yellow-text\">BLOG</span></h3>
    <hr>

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {% if is_granted('ROLE_USER') %}

    {% endif %}

    <h2 class=\"text-center\">{{ category.category }}</h2>
    {% for post in category.posts %}
        <a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">
            <div class=\"d-flex justify-content-center flex-column news-wrapper mt-3\">
                <div class=\"news-title\">
                    <h1>{{ post.title }}</h1>
                    <hr>
                </div>
                <div class=\"col-4\">
                    <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"news-img\">
                </div>
                <div class=\"news-content\">
                    <p href=\"#\">Desc:{{ post.description }}</p>
                </div>
                <div class=\"news-content\">
                    <p href=\"#\">{{ post.content }}</p>
                </div>
                {#{% for category in post.category %}#}
                    {#<h2>{{ category.categ }}</h2>#}
                {#{% endfor %}#}
                {% for tag in post.tags %}
                    <a href=\"/main/show-tag/{{ tag.slug }}\"><span class=\"badge badge-secondary col-1\">{{ tag.tag }}</span></a>
                {% endfor %}
            </div>
        </a>
    {% endfor %}



{% endblock %}", "main/show-category.html.twig", "/var/www/Symfony-4-blog/templates/main/show-category.html.twig");
    }
}
