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
        // line 7
        echo "    ";
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
        echo "    ";
        // line 19
        echo "    <section class=\"first-post\" id=\"first-post\">
    <a href=\"/main/showPost/";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20), "html", null, true);
        echo "\" id=\"post-link\">

            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-6 first-img\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 25, $this->source); })()), "img", [], "any", false, false, false, 25))), "html", null, true);
        echo "\" alt=\"img\" class=\"img-fluid anim1\">
                    </div>

                    <div class=\"col-lg-6 first-content\">
                        <h1 class=\"text-dark asap-font first-h1 anim1\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
        echo "</h1>
                        <hr class=\"bg-danger first-hr\">
                        <p class=\"maven-font first-p anim1\">
                            <span class=\"first-span\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
                            <span class=\"first-span\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), "html", null, true);
        echo "</span>
                            <span class=\"first-span\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
                        </p>
                    </div>
                </div>
            </div>
    </a>
    </section>

    ";
        // line 43
        echo "        ";
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        // line 46
        echo "                ";
        // line 47
        echo "            ";
        // line 48
        echo "
            ";
        // line 50
        echo "                ";
        // line 51
        echo "                    ";
        // line 52
        echo "                ";
        // line 53
        echo "            ";
        // line 54
        echo "
        ";
        // line 56
        echo "    ";
        // line 57
        echo "
    <section class=\"second-post\" id=\"second-post\">
        <a href=\"/main/showPost/";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 59, $this->source); })()), "slug", [], "any", false, false, false, 59), "html", null, true);
        echo "\" id=\"post-link\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"second-content col-lg-6\">
                        <h1 class=\"text-dark asap-font second-h1\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 63, $this->source); })()), "title", [], "any", false, false, false, 63), "html", null, true);
        echo "</h1>
                        <hr class=\"bg-danger second-hr\">
                        <p class=\"maven-font second-p\">
                            <span class=\"second-span\">\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 66, $this->source); })()), "description", [], "any", false, false, false, 66), "html", null, true);
        echo "descriptiondescriptiondescriptiondescription description\"</span>
                            <span class=\"second-hr\"></span>
                        </p>
                    </div>

                    <div class=\"second-img col-lg-6\">
                        <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 72, $this->source); })()), "img", [], "any", false, false, false, 72))), "html", null, true);
        echo "\" alt=\"img\" class=\"anim1\">
                    </div>
                </div>
            </div>
        </a>
    </section>

    ";
        // line 84
        echo "            ";
        // line 85
        echo "                ";
        // line 86
        echo "
                    ";
        // line 88
        echo "
                        ";
        // line 90
        echo "                            ";
        // line 91
        echo "                                ";
        // line 92
        echo "                            ";
        // line 93
        echo "                            ";
        // line 94
        echo "                                ";
        // line 95
        echo "                                    ";
        // line 96
        echo "                                ";
        // line 97
        echo "                                ";
        // line 98
        echo "                            ";
        // line 99
        echo "                        ";
        // line 100
        echo "
                    ";
        // line 102
        echo "
                ";
        // line 104
        echo "            ";
        // line 105
        echo "        ";
        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        // line 109
        echo "        ";
        // line 110
        echo "            ";
        // line 111
        echo "        ";
        // line 112
        echo "    ";
        // line 113
        echo "    ";
        echo twig_include($this->env, $context, "main/layouts/footer.html.twig");
        echo "

    ";
        // line 116
        echo "    ";
        // line 117
        echo "        ";
        // line 118
        echo "            ";
        // line 119
        echo "                ";
        // line 120
        echo "
                    ";
        // line 122
        echo "                        ";
        // line 123
        echo "                    ";
        // line 124
        echo "
                    ";
        // line 126
        echo "                        ";
        // line 127
        echo "                        ";
        // line 128
        echo "                        ";
        // line 129
        echo "                    ";
        // line 130
        echo "                ";
        // line 131
        echo "            ";
        // line 132
        echo "        ";
        // line 133
        echo "    ";
        
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
        return array (  314 => 133,  312 => 132,  310 => 131,  308 => 130,  306 => 129,  304 => 128,  302 => 127,  300 => 126,  297 => 124,  295 => 123,  293 => 122,  290 => 120,  288 => 119,  286 => 118,  284 => 117,  282 => 116,  276 => 113,  274 => 112,  272 => 111,  270 => 110,  268 => 109,  266 => 108,  263 => 106,  261 => 105,  259 => 104,  256 => 102,  253 => 100,  251 => 99,  249 => 98,  247 => 97,  245 => 96,  243 => 95,  241 => 94,  239 => 93,  237 => 92,  235 => 91,  233 => 90,  230 => 88,  227 => 86,  225 => 85,  223 => 84,  213 => 72,  204 => 66,  198 => 63,  191 => 59,  187 => 57,  185 => 56,  182 => 54,  180 => 53,  178 => 52,  176 => 51,  174 => 50,  171 => 48,  169 => 47,  167 => 46,  165 => 45,  163 => 44,  161 => 43,  150 => 34,  146 => 33,  142 => 32,  136 => 29,  129 => 25,  121 => 20,  118 => 19,  116 => 18,  112 => 16,  110 => 15,  107 => 14,  101 => 11,  98 => 10,  96 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index page!{% endblock %}

{% block body %}
    {#<section class=\"section-home\">#}
    {{ include('main/layouts/header.html.twig') }}

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {% if is_granted('ROLE_USER') %}

    {% endif %}
    {# First post #}
    <section class=\"first-post\" id=\"first-post\">
    <a href=\"/main/showPost/{{ first.slug }}\" id=\"post-link\">

            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"col-lg-6 first-img\">
                        <img src=\"{{ asset('uploads/' ~ first.img) }}\" alt=\"img\" class=\"img-fluid anim1\">
                    </div>

                    <div class=\"col-lg-6 first-content\">
                        <h1 class=\"text-dark asap-font first-h1 anim1\">{{ first.title }}</h1>
                        <hr class=\"bg-danger first-hr\">
                        <p class=\"maven-font first-p anim1\">
                            <span class=\"first-span\">{{ first.description }}</span>
                            <span class=\"first-span\">{{ first.description }}</span>
                            <span class=\"first-span\">{{ first.description }}</span>
                        </p>
                    </div>
                </div>
            </div>
    </a>
    </section>

    {#<section class=\"third-post\">#}
        {#<a href=\"/main/showPost/{{ third.slug }}\" id=\"post-link\">#}
            {#<h1 class=\"text-dark asap-font third-h1 text-center\">{{ third.title }}</h1>#}
            {#<div class=\"third-img d-flex justify-content-center\">#}
                {#<img src=\"{{ asset('uploads/' ~ third.img) }}\" alt=\"img\" class=\"img-fluid\">#}
            {#</div>#}

            {#<div class=\"first-content\">#}
                {#<p class=\"maven-font third-p text-center\">#}
                    {#<span class=\"third-span\">{{ third.description }}</span>#}
                {#</p>#}
            {#</div>#}

        {#</a>#}
    {#</section>#}

    <section class=\"second-post\" id=\"second-post\">
        <a href=\"/main/showPost/{{ second.slug }}\" id=\"post-link\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"second-content col-lg-6\">
                        <h1 class=\"text-dark asap-font second-h1\">{{ second.title }}</h1>
                        <hr class=\"bg-danger second-hr\">
                        <p class=\"maven-font second-p\">
                            <span class=\"second-span\">\"{{ second.description }}descriptiondescriptiondescriptiondescription description\"</span>
                            <span class=\"second-hr\"></span>
                        </p>
                    </div>

                    <div class=\"second-img col-lg-6\">
                        <img src=\"{{ asset('uploads/' ~ second.img) }}\" alt=\"img\" class=\"anim1\">
                    </div>
                </div>
            </div>
        </a>
    </section>

    {#<button id=\"to-top\">to top</button>#}

    {#------------------#}

        {#<div class=\"container posts\">#}
            {#<div class=\"row\">#}
                {#{% for post in posts %}#}

                    {#<div class=\"col-lg-4 mt-2\">#}

                        {#<div class=\"card main-card\">#}
                            {#<a href=\"/main/showPost/{{ post.slug }}\">#}
                                {#<img src=\"{{ asset('uploads/' ~ post.img) }}\" class=\"card-img-top\" alt=\"...\" style=\"height: 18rem;\">#}
                            {#</a>#}
                            {#<div class=\"card-body\" style=\"height: 10rem;\">#}
                                {#<a href=\"/main/showPost/{{ post.slug }}\">#}
                                    {#<p class=\"card-text red-hart-font text-center post-title\">{{ post.title }}</p>#}
                                {#</a>#}
                                {#<p class=\"text-grey time-text text-center red-hart-font\">14.11.2018 | <b class=\"text-dark maven-font\">Phil Shackleton</b></p>#}
                            {#</div>#}
                        {#</div>#}

                    {#</div>#}

                {#{% endfor %}#}
            {#</div>#}
        {#</div>#}

    {#</section>#}
    {#<div class=\"d-flex justify-content-center\">#}
        {#<div class=\"navigation\">#}
            {#{{ knp_pagination_render(posts) }}#}
        {#</div>#}
    {#</div>#}
    {{ include('main/layouts/footer.html.twig') }}

    {# First post #}
    {#<section class=\"first-post\" id=\"first-post\">#}
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
    {#</section>#}
    {#------------------#}

{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
