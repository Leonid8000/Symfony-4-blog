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
    <div class=\"container\">
        <div class=\"row\">
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 24
            echo "   <div class=\"col-lg-6 col-12\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["post"], "category", [], "any", false, false, false, 25));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 26
                echo "                <div class=\"wrap-div\">
                    <a href=\"/main/showPost/";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 27), "html", null, true);
                echo "\" id=\"post-link\">
                <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 28))), "html", null, true);
                echo "\" alt=\"img\" class=\"home-img\">
                    <div class=\"inside-wrap\">
                        <a href=\"/main/show-category/";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 30), "html", null, true);
                echo "\" class=\"post-category mb-1\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 30), "html", null, true);
                echo "</a>

                            <div class=\"news-title\">
                                <h3 class=\"post-title anton-font\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 33), "html", null, true);
                echo "</h3>
                                <hr>
                                <p class=\"post-desc\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 35), "html", null, true);
                echo "</p>
                            </div>

                    </div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>

    ";
        // line 48
        echo "    ";
        // line 49
        echo "        ";
        // line 50
        echo "            ";
        // line 51
        echo "        ";
        // line 52
        echo "
        ";
        // line 54
        echo "        ";
        // line 55
        echo "            ";
        // line 56
        echo "        ";
        // line 57
        echo "        ";
        // line 58
        echo "        ";
        // line 59
        echo "            ";
        // line 60
        echo "            ";
        // line 61
        echo "        ";
        // line 62
        echo "        ";
        // line 63
        echo "            ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        // line 69
        echo "
    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            ";
        // line 72
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 72, $this->source); })()));
        echo "
        </div>
    </div>
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
        return array (  229 => 72,  224 => 69,  222 => 68,  220 => 67,  218 => 66,  216 => 65,  214 => 64,  212 => 63,  210 => 62,  208 => 61,  206 => 60,  204 => 59,  202 => 58,  200 => 57,  198 => 56,  196 => 55,  194 => 54,  191 => 52,  189 => 51,  187 => 50,  185 => 49,  183 => 48,  178 => 44,  171 => 42,  158 => 35,  153 => 33,  145 => 30,  140 => 28,  136 => 27,  133 => 26,  129 => 25,  126 => 24,  122 => 23,  117 => 20,  113 => 18,  111 => 17,  108 => 16,  102 => 13,  99 => 12,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

    <div class=\"container\">
        <div class=\"row\">
    {% for post in posts %}
   <div class=\"col-lg-6 col-12\">
            {% for category in post.category %}
                <div class=\"wrap-div\">
                    <a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">
                <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"home-img\">
                    <div class=\"inside-wrap\">
                        <a href=\"/main/show-category/{{ category.slug }}\" class=\"post-category mb-1\">{{ category.category }}</a>

                            <div class=\"news-title\">
                                <h3 class=\"post-title anton-font\">{{ post.title }}</h3>
                                <hr>
                                <p class=\"post-desc\">{{ post.description }}</p>
                            </div>

                    </div>
                    </a>
                </div>
            {% endfor %}
    </div>
    {% endfor %}
        </div>
    </div>

    {#<div class=\"container news-wrapper mt-3\">#}
    {#<div class=\"row\">#}
        {#<div class=\"col-4\">#}
            {#<img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"news-img\">#}
        {#</div>#}

        {#<div class=\"col-8\">#}
        {#{% for category in post.category %}#}
            {#<a href=\"/main/show-category/{{ category.slug }}\" class=\"post-category mb-1\">{{ category.category }}</a>#}
        {#{% endfor %}#}
        {#<a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">#}
        {#<div class=\"news-title\">#}
            {#<h3>{{ post.title }}</h3>#}
            {#<hr>#}
        {#</div>#}
        {#<div class=\"news-content\">#}
            {#<p href=\"#\">{{ post.description }}</p>#}
        {#</div>#}
        {#</a>#}
        {#</div>#}
    {#</div>#}
    {#</div>#}

    <div class=\"d-flex justify-content-center\">
        <div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
        </div>
    </div>
{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
