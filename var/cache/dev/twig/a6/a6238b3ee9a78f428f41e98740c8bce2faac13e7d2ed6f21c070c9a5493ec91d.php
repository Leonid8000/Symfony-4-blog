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
        <div class=\"container posts\">
            <div class=\"row\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "
                    <div class=\"col-lg-4 m-sm-0 mt-2\">

                        <div class=\"card\" style=\"width: 23rem;\">
                            <a href=\"/main/showPost/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 29), "html", null, true);
            echo "\">
                                <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"height: 18rem;\">
                            </a>
                            <div class=\"card-body\" style=\"height: 10rem;\">
                                <a href=\"/main/showPost/";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                                    <p class=\"card-text red-hart-font text-center post-title\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 34), "html", null, true);
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
        // line 43
        echo "            </div>
        </div>

        <hr>

    </section>
    <div class=\"d-flex justify-content-center\">
        ";
        // line 51
        echo "        <div class=\"navigation\">
            ";
        // line 52
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 52, $this->source); })()));
        echo "
        </div>
    </div>

        ";
        // line 57
        echo "        ";
        // line 58
        echo "    ";
        // line 59
        echo "        ";
        // line 60
        echo "
            ";
        // line 62
        echo "                ";
        // line 63
        echo "            ";
        // line 64
        echo "
            ";
        // line 66
        echo "                ";
        // line 67
        echo "                ";
        // line 68
        echo "                ";
        // line 69
        echo "            ";
        // line 70
        echo "        ";
        // line 71
        echo "    ";
        // line 72
        echo "         ";
        // line 76
        echo "        ";
        // line 77
        echo "    ";
        // line 78
        echo "   ";
        // line 79
        echo "            ";
        // line 80
        echo "                ";
        // line 81
        echo "                    ";
        // line 82
        echo "                    ";
        // line 83
        echo "                    ";
        // line 84
        echo "                        ";
        // line 85
        echo "
                        ";
        // line 87
        echo "                            ";
        // line 88
        echo "                                ";
        // line 89
        echo "                                ";
        // line 90
        echo "                                ";
        // line 91
        echo "                            ";
        // line 92
        echo "                        ";
        // line 93
        echo "
                    ";
        // line 95
        echo "                    ";
        // line 96
        echo "                ";
        // line 97
        echo "            ";
        // line 98
        echo "    ";
        // line 99
        echo "    ";
        // line 100
        echo "        ";
        // line 101
        echo "    ";
        // line 102
        echo "
    ";
        // line 104
        echo "    ";
        // line 105
        echo "    ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "        ";
        // line 109
        echo "
        ";
        // line 111
        echo "        ";
        // line 112
        echo "            ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "        ";
        // line 116
        echo "            ";
        // line 117
        echo "            ";
        // line 118
        echo "        ";
        // line 119
        echo "        ";
        // line 120
        echo "            ";
        // line 121
        echo "        ";
        // line 122
        echo "        ";
        // line 123
        echo "        ";
        // line 124
        echo "    ";
        // line 125
        echo "    ";
        // line 126
        echo "    ";
        // line 127
        echo "
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
        return array (  312 => 127,  310 => 126,  308 => 125,  306 => 124,  304 => 123,  302 => 122,  300 => 121,  298 => 120,  296 => 119,  294 => 118,  292 => 117,  290 => 116,  288 => 115,  286 => 114,  284 => 113,  282 => 112,  280 => 111,  277 => 109,  275 => 108,  273 => 107,  271 => 106,  269 => 105,  267 => 104,  264 => 102,  262 => 101,  260 => 100,  258 => 99,  256 => 98,  254 => 97,  252 => 96,  250 => 95,  247 => 93,  245 => 92,  243 => 91,  241 => 90,  239 => 89,  237 => 88,  235 => 87,  232 => 85,  230 => 84,  228 => 83,  226 => 82,  224 => 81,  222 => 80,  220 => 79,  218 => 78,  216 => 77,  214 => 76,  212 => 72,  210 => 71,  208 => 70,  206 => 69,  204 => 68,  202 => 67,  200 => 66,  197 => 64,  195 => 63,  193 => 62,  190 => 60,  188 => 59,  186 => 58,  184 => 57,  177 => 52,  174 => 51,  165 => 43,  150 => 34,  146 => 33,  140 => 30,  136 => 29,  130 => 25,  126 => 24,  121 => 21,  117 => 19,  115 => 18,  112 => 17,  106 => 14,  103 => 13,  101 => 12,  98 => 11,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

        <div class=\"container posts\">
            <div class=\"row\">
                {% for post in posts %}

                    <div class=\"col-lg-4 m-sm-0 mt-2\">

                        <div class=\"card\" style=\"width: 23rem;\">
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
        {#<div class=\"navigation btn btn-secondary text-danger anton-font\">#}
        <div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
        </div>
    </div>

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

    {#{% for post in posts %}#}
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
    {#{% endfor %}#}

{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
