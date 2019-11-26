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

/* main/show-tag.html.twig */
class __TwigTemplate_99dfb406599ea2b6ae37fd323ccef4b673ac7ba82cbcfa19a416b9ad12a530a6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/show-tag.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/show-tag.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/show-tag.html.twig", 1);
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

    ";
        // line 8
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            echo "        <div class=\"d-flex justify-content-center\">
            <a href=\"";
            // line 10
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 15
            echo "
    ";
        }
        // line 17
        echo "
    <h2 class=\"text-center anton-font\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 18, $this->source); })()), "tag", [], "any", false, false, false, 18), "html", null, true);
        echo "</h2>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tag"]) || array_key_exists("tag", $context) ? $context["tag"] : (function () { throw new RuntimeError('Variable "tag" does not exist.', 19, $this->source); })()), "post", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 20
            echo "        <div class=\"container news-wrapper mt-3\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" alt=\"img\" class=\"category-img img-fluid\">
                </div>

                <div class=\"col-8\">
                    ";
            // line 28
            echo "                    ";
            // line 29
            echo "                    ";
            // line 30
            echo "                    <a href=\"/main/showPost/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 30), "html", null, true);
            echo "\" id=\"post-link\">
                        <div class=\"news-title\">
                            <h3>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</h3>
                            <hr>
                        </div>
                        <div class=\"news-content\">
                            <p href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 36), "html", null, true);
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
        // line 43
        echo "    ";
        // line 44
        echo "
            ";
        // line 46
        echo "       ";
        // line 47
        echo "                ";
        // line 48
        echo "                    ";
        // line 49
        echo "                    ";
        // line 50
        echo "                ";
        // line 51
        echo "           ";
        // line 52
        echo "               ";
        // line 53
        echo "           ";
        // line 54
        echo "                ";
        // line 55
        echo "                    ";
        // line 56
        echo "                ";
        // line 57
        echo "                ";
        // line 58
        echo "                    ";
        // line 59
        echo "                ";
        // line 60
        echo "        ";
        // line 61
        echo "                ";
        // line 62
        echo "                    ";
        // line 63
        echo "                        ";
        // line 64
        echo "                    ";
        // line 65
        echo "                ";
        // line 66
        echo "                ";
        // line 67
        echo "                    ";
        // line 68
        echo "                    ";
        // line 69
        echo "                ";
        // line 70
        echo "            ";
        // line 71
        echo "    ";
        // line 72
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/show-tag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 72,  222 => 71,  220 => 70,  218 => 69,  216 => 68,  214 => 67,  212 => 66,  210 => 65,  208 => 64,  206 => 63,  204 => 62,  202 => 61,  200 => 60,  198 => 59,  196 => 58,  194 => 57,  192 => 56,  190 => 55,  188 => 54,  186 => 53,  184 => 52,  182 => 51,  180 => 50,  178 => 49,  176 => 48,  174 => 47,  172 => 46,  169 => 44,  167 => 43,  154 => 36,  147 => 32,  141 => 30,  139 => 29,  137 => 28,  130 => 23,  125 => 20,  121 => 19,  117 => 18,  114 => 17,  110 => 15,  108 => 14,  105 => 13,  99 => 10,  96 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index page!{% endblock %}

{% block body %}
    {{ include('main/layouts/header.html.twig') }}

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {% if is_granted('ROLE_USER') %}

    {% endif %}

    <h2 class=\"text-center anton-font\">{{ tag.tag }}</h2>
    {% for post in tag.post %}
        <div class=\"container news-wrapper mt-3\">
            <div class=\"row\">
                <div class=\"col-4\">
                    <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"category-img img-fluid\">
                </div>

                <div class=\"col-8\">
                    {#{% for category in post.category %}#}
                    {#<a href=\"/main/show-category/{{ category.slug }}\" class=\"post-category mb-1\">{{ category.category }}</a>#}
                    {#{% endfor %}#}
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
    {#{% for post in tag.post %}#}

            {#<div class=\"d-flex justify-content-center flex-column news-wrapper mt-3\">#}
       {#<a href=\"/main/showPost/{{ post.slug }}\" id=\"post-link\">#}
                {#<div class=\"news-title\">#}
                    {#<h1>{{ post.title }}</h1>#}
                    {#<hr>#}
                {#</div>#}
           {#<div class=\"col-4\">#}
               {#<img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"news-img\">#}
           {#</div>#}
                {#<div class=\"news-content\">#}
                    {#<p href=\"#\">Desc:{{ post.description }}</p>#}
                {#</div>#}
                {#<div class=\"news-content\">#}
                    {#<p href=\"#\">{{ post.content }}</p>#}
                {#</div>#}
        {#</a>#}
                {#{% for category in post.category %}#}
                    {#<a href=\"/main/show-category/{{ category.slug }}\">#}
                        {#<h2 class=\"post-category col-lg-1 col-4\">{{ category.category }}</h2>#}
                    {#</a>#}
                {#{% endfor %}#}
                {#{% for tag in post.tags %}#}
                    {#<button class=\"btn btn-success col-1\">{{ tag.tag }}</button>#}
                    {#<a href=\"/main/show-tag/{{ tag.slug }}\"><span class=\"badge badge-secondary col-lg-1 col-3\">{{ tag.tag }}</span></a>#}
                {#{% endfor %}#}
            {#</div>#}
    {#{% endfor %}#}

{% endblock %}", "main/show-tag.html.twig", "/var/www/Symfony-4-blog/templates/main/show-tag.html.twig");
    }
}
