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
        // line 10
        echo "    ";
        // line 11
        echo "
    ";
        // line 12
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "        <div class=\"d-flex justify-content-center\">
            <a href=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    ";
        }
        // line 17
        echo "
    ";
        // line 18
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 19
            echo "
    ";
        }
        // line 21
        echo "
    <div class=\"container first\">
        <div class=\"row\">

            <div class=\"col-lg-7  p-0\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 26, $this->source); })()), "img", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" alt=\"img\">
            </div>

            <div class=\"col-lg-5 col-10\">
                <h1 class=\"text-dark asap-font\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), "html", null, true);
        echo "</h1>
                <hr class=\"bg-danger\">
                <p class=\"maven-font\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "We are proud to announce that we have just launched Work in the Web 2020 — our fifth and most ambitious event so far.</p>
            </div>

        </div>
    </div>

        <div class=\"container\">
            <div class=\"row\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 41
            echo "
                    <div class=\"col-3\">
                        ";
            // line 44
            echo "                    </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
        </div>

    ";
        // line 51
        echo "        ";
        // line 52
        echo "    ";
        // line 53
        echo "   ";
        // line 54
        echo "            ";
        // line 55
        echo "                ";
        // line 56
        echo "                    ";
        // line 57
        echo "                    ";
        // line 58
        echo "                    ";
        // line 59
        echo "                        ";
        // line 60
        echo "
                        ";
        // line 62
        echo "                            ";
        // line 63
        echo "                                ";
        // line 64
        echo "                                ";
        // line 65
        echo "                                ";
        // line 66
        echo "                            ";
        // line 67
        echo "                        ";
        // line 68
        echo "
                    ";
        // line 70
        echo "                    ";
        // line 71
        echo "                ";
        // line 72
        echo "            ";
        // line 73
        echo "    ";
        // line 74
        echo "    ";
        // line 75
        echo "        ";
        // line 76
        echo "    ";
        // line 77
        echo "
    <hr>
    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 79, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 80
            echo "    <div class=\"container news-wrapper mt-3\">
    <div class=\"row\">
        <div class=\"col-4\">
            <img src=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 83))), "html", null, true);
            echo "\" alt=\"img\" class=\"news-img\">
        </div>

        <div class=\"col-8\">
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 87));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 88
                echo "            <a href=\"/main/show-category/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 88), "html", null, true);
                echo "\" class=\"post-category mb-1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 88), "html", null, true);
                echo "</a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "        <a href=\"/main/showPost/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 90), "html", null, true);
            echo "\" id=\"post-link\">
        <div class=\"news-title\">
            <h3>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 92), "html", null, true);
            echo "</h3>
            <hr>
        </div>
        <div class=\"news-content\">
            <p href=\"#\">";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 96), "html", null, true);
            echo "</p>
        </div>
        </a>
        </div>
    </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            ";
        // line 106
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 106, $this->source); })()));
        echo "
        </div>
    </div>
    </section>
";
        
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
        return array (  288 => 106,  283 => 103,  270 => 96,  263 => 92,  257 => 90,  246 => 88,  242 => 87,  235 => 83,  230 => 80,  226 => 79,  222 => 77,  220 => 76,  218 => 75,  216 => 74,  214 => 73,  212 => 72,  210 => 71,  208 => 70,  205 => 68,  203 => 67,  201 => 66,  199 => 65,  197 => 64,  195 => 63,  193 => 62,  190 => 60,  188 => 59,  186 => 58,  184 => 57,  182 => 56,  180 => 55,  178 => 54,  176 => 53,  174 => 52,  172 => 51,  167 => 47,  159 => 44,  155 => 41,  151 => 40,  140 => 32,  135 => 30,  128 => 26,  121 => 21,  117 => 19,  115 => 18,  112 => 17,  106 => 14,  103 => 13,  101 => 12,  98 => 11,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index page!{% endblock %}

{% block body %}
    <section class=\"section-home\">
    {{ include('main/layouts/header.html.twig') }}

    {#<h3 class=\"text-dark mt-2 ml-3 text-left home-logo\">NEWS<span class=\"yellow-text\">BLOG</span></h3>#}
    {#<hr>#}

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {% if is_granted('ROLE_USER') %}

    {% endif %}

    <div class=\"container first\">
        <div class=\"row\">

            <div class=\"col-lg-7  p-0\">
                <img src=\"{{ asset('uploads/' ~ first.img) }}\" alt=\"img\">
            </div>

            <div class=\"col-lg-5 col-10\">
                <h1 class=\"text-dark asap-font\">{{ first.title }}</h1>
                <hr class=\"bg-danger\">
                <p class=\"maven-font\">{{ first.description }}We are proud to announce that we have just launched Work in the Web 2020 — our fifth and most ambitious event so far.</p>
            </div>

        </div>
    </div>

        <div class=\"container\">
            <div class=\"row\">
                    {% for post in posts %}

                    <div class=\"col-3\">
                        {#<img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"news-img\">#}
                    </div>

                    {% endfor %}
            </div>
        </div>

    {#<div class=\"container\">#}
        {#<div class=\"row\">#}
    {#{% for post in posts %}#}
   {#<div class=\"col-lg-6 col-12\">#}
            {#{% for category in post.category %}#}
                {#<div class=\"wrap-div\">#}
                    {#<a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">#}
                    {#<img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"home-img\">#}
                    {#<div class=\"inside-wrap\">#}
                        {#<a href=\"/main/show-category/{{ category.slug }}\" class=\"post-home-category\">{{ category.category }}</a>#}

                        {#<a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">#}
                            {#<div class=\"news-title\">#}
                                {#<h3 class=\"post-title anton-font text-center\">{{ post.title }}</h3>#}
                                {#<hr class=\"red-hr\">#}
                                {#<p class=\"post-desc\">{{ post.description }}</p>#}
                            {#</div>#}
                        {#</a>#}

                    {#</div>#}
                    {#</a>#}
                {#</div>#}
            {#{% endfor %}#}
    {#</div>#}
    {#{% endfor %}#}
        {#</div>#}
    {#</div>#}

    <hr>
    {% for post in posts %}
    <div class=\"container news-wrapper mt-3\">
    <div class=\"row\">
        <div class=\"col-4\">
            <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"news-img\">
        </div>

        <div class=\"col-8\">
        {% for category in post.category %}
            <a href=\"/main/show-category/{{ category.slug }}\" class=\"post-category mb-1\">{{ category.category }}</a>
        {% endfor %}
        <a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">
        <div class=\"news-title\">
            <h3>{{ post.title }}</h3>
            <hr>
        </div>
        <div class=\"news-content\">
            <p href=\"#\">{{ post.description }}</p>
        </div>
        </a>
        </div>
    </div>
    </div>
    {% endfor %}

    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
        </div>
    </div>
    </section>
{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
