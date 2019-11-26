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
        ";
        // line 23
        echo "        ";
        // line 24
        echo "    ";
        // line 25
        echo "        ";
        // line 26
        echo "
            ";
        // line 28
        echo "                ";
        // line 29
        echo "            ";
        // line 30
        echo "
            ";
        // line 32
        echo "                ";
        // line 33
        echo "                ";
        // line 34
        echo "                ";
        // line 35
        echo "            ";
        // line 36
        echo "        ";
        // line 37
        echo "    ";
        // line 38
        echo "         ";
        // line 41
        echo "<div class=\"container posts\">
            <div class=\"row\">
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 44
            echo "
                    <div class=\"col-lg-4  mt-2\">

                        <div class=\"card\" style=\"width: 23rem;\">
                        <a href=\"/main/showPost/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 48), "html", null, true);
            echo "\">
                            <img src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["post"], "img", [], "any", false, false, false, 49))), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"...\" style=\"height: 18rem;\">
                        </a>
                            <div class=\"card-body\" style=\"height: 10rem;\">
                            <a href=\"/main/showPost/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 52), "html", null, true);
            echo "\">
                                <p class=\"card-text red-hart-font text-center post-title\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 53), "html", null, true);
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
        // line 62
        echo "            </div>
        </div>

    ";
        // line 66
        echo "        ";
        // line 67
        echo "    ";
        // line 68
        echo "   ";
        // line 69
        echo "            ";
        // line 70
        echo "                ";
        // line 71
        echo "                    ";
        // line 72
        echo "                    ";
        // line 73
        echo "                    ";
        // line 74
        echo "                        ";
        // line 75
        echo "
                        ";
        // line 77
        echo "                            ";
        // line 78
        echo "                                ";
        // line 79
        echo "                                ";
        // line 80
        echo "                                ";
        // line 81
        echo "                            ";
        // line 82
        echo "                        ";
        // line 83
        echo "
                    ";
        // line 85
        echo "                    ";
        // line 86
        echo "                ";
        // line 87
        echo "            ";
        // line 88
        echo "    ";
        // line 89
        echo "    ";
        // line 90
        echo "        ";
        // line 91
        echo "    ";
        // line 92
        echo "
    <hr>
    ";
        // line 95
        echo "    ";
        // line 96
        echo "    ";
        // line 97
        echo "        ";
        // line 98
        echo "            ";
        // line 99
        echo "        ";
        // line 100
        echo "
        ";
        // line 102
        echo "        ";
        // line 103
        echo "            ";
        // line 104
        echo "        ";
        // line 105
        echo "        ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "            ";
        // line 109
        echo "        ";
        // line 110
        echo "        ";
        // line 111
        echo "            ";
        // line 112
        echo "        ";
        // line 113
        echo "        ";
        // line 114
        echo "        ";
        // line 115
        echo "    ";
        // line 116
        echo "    ";
        // line 117
        echo "    ";
        // line 118
        echo "
    </section>
    <div class=\"d-flex justify-content-center\">
        ";
        // line 122
        echo "        <div class=\"navigation\">
            ";
        // line 123
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 123, $this->source); })()));
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
        return array (  309 => 123,  306 => 122,  301 => 118,  299 => 117,  297 => 116,  295 => 115,  293 => 114,  291 => 113,  289 => 112,  287 => 111,  285 => 110,  283 => 109,  281 => 108,  279 => 107,  277 => 106,  275 => 105,  273 => 104,  271 => 103,  269 => 102,  266 => 100,  264 => 99,  262 => 98,  260 => 97,  258 => 96,  256 => 95,  252 => 92,  250 => 91,  248 => 90,  246 => 89,  244 => 88,  242 => 87,  240 => 86,  238 => 85,  235 => 83,  233 => 82,  231 => 81,  229 => 80,  227 => 79,  225 => 78,  223 => 77,  220 => 75,  218 => 74,  216 => 73,  214 => 72,  212 => 71,  210 => 70,  208 => 69,  206 => 68,  204 => 67,  202 => 66,  197 => 62,  182 => 53,  178 => 52,  172 => 49,  168 => 48,  162 => 44,  158 => 43,  154 => 41,  152 => 38,  150 => 37,  148 => 36,  146 => 35,  144 => 34,  142 => 33,  140 => 32,  137 => 30,  135 => 29,  133 => 28,  130 => 26,  128 => 25,  126 => 24,  124 => 23,  121 => 21,  117 => 19,  115 => 18,  112 => 17,  106 => 14,  103 => 13,  101 => 12,  98 => 11,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

        <div class=\"container posts\">
            <div class=\"row\">
                    {% for post in posts %}

                    <div class=\"col-lg-4  mt-2\">

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

    </section>
    <div class=\"d-flex justify-content-center\">
        {#<h1 class=\"text-danger\">PAGINATION</h1>#}
        <div class=\"navigation\">
            {{ knp_pagination_render(posts) }}
        </div>
    </div>
{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
