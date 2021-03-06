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
class __TwigTemplate_a8eeebc76ecfcc386ac211a1de4f34c915c88c684e0573b3bc957365fbec293d extends \Twig\Template
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
        echo "        <a href=\"/main/showPost/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21), "html", null, true);
        echo "\" id=\"post-link\">
    <div class=\"container first\">
        <div class=\"row\">

            <div class=\"col-lg-7 col-sm-10  p-0\">
                <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 26, $this->source); })()), "img", [], "any", false, false, false, 26))), "html", null, true);
        echo "\" alt=\"img\" class=\"img-fluid\">
            </div>

            <div class=\"col-lg-5 col-sm-12\">
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
            </a>

        ";
        // line 39
        echo "            ";
        // line 40
        echo "                    ";
        // line 41
        echo "
                    ";
        // line 43
        echo "                        ";
        // line 44
        echo "                            ";
        // line 45
        echo "                            ";
        // line 46
        echo "                                ";
        // line 47
        echo "                            ";
        // line 48
        echo "                        ";
        // line 49
        echo "                    ";
        // line 50
        echo "
                    ";
        // line 52
        echo "            ";
        // line 53
        echo "        ";
        // line 54
        echo "
    ";
        // line 56
        echo "        ";
        // line 57
        echo "    ";
        // line 58
        echo "   ";
        // line 59
        echo "            ";
        // line 60
        echo "                ";
        // line 61
        echo "                    ";
        // line 62
        echo "                    ";
        // line 63
        echo "                    ";
        // line 64
        echo "                        ";
        // line 65
        echo "
                        ";
        // line 67
        echo "                            ";
        // line 68
        echo "                                ";
        // line 69
        echo "                                ";
        // line 70
        echo "                                ";
        // line 71
        echo "                            ";
        // line 72
        echo "                        ";
        // line 73
        echo "
                    ";
        // line 75
        echo "                    ";
        // line 76
        echo "                ";
        // line 77
        echo "            ";
        // line 78
        echo "    ";
        // line 79
        echo "    ";
        // line 80
        echo "        ";
        // line 81
        echo "    ";
        // line 82
        echo "
    <hr>
    ";
        // line 85
        echo "    ";
        // line 86
        echo "    ";
        // line 87
        echo "        ";
        // line 88
        echo "            ";
        // line 89
        echo "        ";
        // line 90
        echo "
        ";
        // line 92
        echo "        ";
        // line 93
        echo "            ";
        // line 94
        echo "        ";
        // line 95
        echo "        ";
        // line 96
        echo "        ";
        // line 97
        echo "            ";
        // line 98
        echo "            ";
        // line 99
        echo "        ";
        // line 100
        echo "        ";
        // line 101
        echo "            ";
        // line 102
        echo "        ";
        // line 103
        echo "        ";
        // line 104
        echo "        ";
        // line 105
        echo "    ";
        // line 106
        echo "    ";
        // line 107
        echo "    ";
        // line 108
        echo "
    </section>
    <div class=\"d-flex justify-content-center\">
        ";
        // line 112
        echo "        <div class=\"navigation\">
            ";
        // line 113
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 113, $this->source); })()));
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
        return array (  289 => 113,  286 => 112,  281 => 108,  279 => 107,  277 => 106,  275 => 105,  273 => 104,  271 => 103,  269 => 102,  267 => 101,  265 => 100,  263 => 99,  261 => 98,  259 => 97,  257 => 96,  255 => 95,  253 => 94,  251 => 93,  249 => 92,  246 => 90,  244 => 89,  242 => 88,  240 => 87,  238 => 86,  236 => 85,  232 => 82,  230 => 81,  228 => 80,  226 => 79,  224 => 78,  222 => 77,  220 => 76,  218 => 75,  215 => 73,  213 => 72,  211 => 71,  209 => 70,  207 => 69,  205 => 68,  203 => 67,  200 => 65,  198 => 64,  196 => 63,  194 => 62,  192 => 61,  190 => 60,  188 => 59,  186 => 58,  184 => 57,  182 => 56,  179 => 54,  177 => 53,  175 => 52,  172 => 50,  170 => 49,  168 => 48,  166 => 47,  164 => 46,  162 => 45,  160 => 44,  158 => 43,  155 => 41,  153 => 40,  151 => 39,  142 => 32,  137 => 30,  130 => 26,  121 => 21,  117 => 19,  115 => 18,  112 => 17,  106 => 14,  103 => 13,  101 => 12,  98 => 11,  96 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
        <a href=\"/main/showPost/{{ first.slug }}\" id=\"post-link\">
    <div class=\"container first\">
        <div class=\"row\">

            <div class=\"col-lg-7 col-sm-10  p-0\">
                <img src=\"{{ asset('uploads/' ~ first.img) }}\" alt=\"img\" class=\"img-fluid\">
            </div>

            <div class=\"col-lg-5 col-sm-12\">
                <h1 class=\"text-dark asap-font\">{{ first.title }}</h1>
                <hr class=\"bg-danger\">
                <p class=\"maven-font\">{{ first.description }}We are proud to announce that we have just launched Work in the Web 2020 — our fifth and most ambitious event so far.</p>
            </div>
        </div>
    </div>
            </a>

        {#<div class=\"container\">#}
            {#<div class=\"\">#}
                    {#{% for post in posts %}#}

                    {#<div class=\"col-lg-4 col-sm-10 mt-2\">#}
                        {#<div class=\"card\" style=\"width: 18rem;\">#}
                            {#<img src=\"{{ asset('uploads/' ~ post.img) }}\" class=\"card-img-top\" alt=\"...\">#}
                            {#<div class=\"card-body\">#}
                                {#<p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>#}
                            {#</div>#}
                        {#</div>#}
                    {#</div>#}

                    {#{% endfor %}#}
            {#</div>#}
        {#</div>#}

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
