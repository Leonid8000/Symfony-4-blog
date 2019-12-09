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

/* main/index.html.twig */
class __TwigTemplate_63d523afc2fb2a7ce2399cf6ec42944ef518e6486e04444ce50f51cd7b99f056 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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
        echo "    <section class=\"section-home\">
    ";
        // line 7
        echo twig_include($this->env, $context, "main/layouts/header.html.twig");
        echo "

    ";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "        <div class=\"d-flex justify-content-center\">
            <a href=\"";
            // line 11
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 16
            echo "
    ";
        }
        // line 18
        echo "
        <div class=\"container posts\">
            <div class=\"row\">
                ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "
                    <div class=\"col-lg-4 mt-2\">

                        <div class=\"card main-card\">
                            <a href=\"/main/showPost/";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 26), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"height: 18rem;\">
                            </a>
                            <div class=\"card-body\" style=\"height: 10rem;\">
                                <a href=\"/main/showPost/";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
                                    <p class=\"card-text red-hart-font text-center post-title\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                                </a>
                                <p class=\"text-grey time-text text-center red-hart-font\">14.11.2018 | <b class=\"text-dark maven-font\">Phil Shackleton</b></p>
                            </div>
                        </div>

                    </div>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            </div>
        </div>

        <hr>

    </section>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            ";
        // line 48
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 48, $this->source); })()));
        echo "
        </div>
    </div>
    ";
        // line 51
        echo twig_include($this->env, $context, "main/layouts/footer.html.twig");
        echo "

        ";
        // line 54
        echo "        ";
        // line 55
        echo "    ";
        // line 56
        echo "        ";
        // line 57
        echo "
            ";
        // line 59
        echo "                ";
        // line 60
        echo "            ";
        // line 61
        echo "
            ";
        // line 63
        echo "                ";
        // line 64
        echo "                ";
        // line 65
        echo "                ";
        // line 66
        echo "            ";
        // line 67
        echo "        ";
        // line 68
        echo "    ";
        // line 69
        echo "         ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 69,  207 => 68,  205 => 67,  203 => 66,  201 => 65,  199 => 64,  197 => 63,  194 => 61,  192 => 60,  190 => 59,  187 => 57,  185 => 56,  183 => 55,  181 => 54,  176 => 51,  170 => 48,  160 => 40,  145 => 31,  141 => 30,  135 => 27,  131 => 26,  125 => 22,  121 => 21,  116 => 18,  112 => 16,  110 => 15,  107 => 14,  101 => 11,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index page!{% endblock %}

{% block body %}
    <section class=\"section-home\">
    {{ include('main/layouts/header.html.twig') }}

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {% if is_granted('ROLE_USER') %}

    {% endif %}

        <div class=\"container posts\">
            <div class=\"row\">
                {% for post in posts %}

                    <div class=\"col-lg-4 mt-2\">

                        <div class=\"card main-card\">
                            <a href=\"/main/showPost/{{ post.slug }}\">
                                <img src=\"{{ asset('uploads/' ~ post.img) }}\" class=\"card-img-top\" alt=\"...\" style=\"height: 18rem;\">
                            </a>
                            <div class=\"card-body\" style=\"height: 10rem;\">
                                <a href=\"/main/showPost/{{ post.slug }}\">
                                    <p class=\"card-text red-hart-font text-center post-title\">{{ post.title }}</p>
                                </a>
                                <p class=\"text-grey time-text text-center red-hart-font\">14.11.2018 | <b class=\"text-dark maven-font\">Phil Shackleton</b></p>
                            </div>
                        </div>

                    </div>

                {% endfor %}
            </div>
        </div>

        <hr>

    </section>
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
        </div>
    </div>
    {{ include('main/layouts/footer.html.twig') }}

        {# First post #}
        {#<a href=\"/main/showPost/{{ first.slug }}\" id=\"post-link\">#}
    {#<div class=\"container first\">#}
        {#<div class=\"row\">#}

            {#<div class=\"col-lg-7 col-sm-10  p-0\">#}
                {#<img src=\"{{ asset('uploads/' ~ first.img) }}\" alt=\"img\" class=\"img-fluid\">#}
            {#</div>#}

            {#<div class=\"col-lg-5 col-sm-12\">#}
                {#<h1 class=\"text-dark asap-font\">{{ first.title }}</h1>#}
                {#<hr class=\"bg-danger\">#}
                {#<p class=\"maven-font\">{{ first.description }}We are proud to announce that we have just launched Work in the Web 2020 — our fifth and most ambitious event so far.</p>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}
         {#</a>#}
{#------------------#}

{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
