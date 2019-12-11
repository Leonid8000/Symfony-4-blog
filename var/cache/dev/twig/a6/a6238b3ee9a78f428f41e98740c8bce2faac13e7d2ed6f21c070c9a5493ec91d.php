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
                        </p>
                    </div>
                </div>
            </div>
    </a>
    </section>

    <section class=\"post-2 justify-content-center\" data-aos=\"fade-in\">
        <div class=\" show-on-scroll \" id=\"firstBox\">
            <a href=\"/main/showPost/";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 42, $this->source); })()), "slug", [], "any", false, false, false, 42), "html", null, true);
        echo "\" id=\"post-link\">
                <h1 class=\"text-dark asap-font d-flex justify-content-center\" data-aos=\"fade-right\"
                    data-aos-duration=\"3000\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        echo "</h1>
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 45, $this->source); })()), "img", [], "any", false, false, false, 45))), "html", null, true);
        echo "\" alt=\"img\" class=\"img-fluid post-2-img \" data-aos=\"fade-up\"
                     data-aos-duration=\"3000\">
                <span class=\"third-span\" data-aos=\"fade-left\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47), "html", null, true);
        echo "</span>
            </a>
        </div>
    </section>

    <section class=\"post-3\" style=\"background-image: url(";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 52, $this->source); })()), "img", [], "any", false, false, false, 52))), "html", null, true);
        echo ");\" data-aos=\"fade-in\">
        <div class=\"\">
            <a href=\"/main/showPost/";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 54, $this->source); })()), "slug", [], "any", false, false, false, 54), "html", null, true);
        echo "\" id=\"post-link\">
                <h1 class=\"maven-font\" data-aos=\"fade-left\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 55, $this->source); })()), "title", [], "any", false, false, false, 55), "html", null, true);
        echo "</h1>
                ";
        // line 57
        echo "                     ";
        // line 58
        echo "                <span class=\"\" data-aos=\"fade-right\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 58, $this->source); })()), "description", [], "any", false, false, false, 58), "html", null, true);
        echo "</span>
            </a>
        </div>
    </section>


    <section class=\"second-post\" id=\"second-post\">
        <a href=\"/main/showPost/";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 65, $this->source); })()), "slug", [], "any", false, false, false, 65), "html", null, true);
        echo "\" id=\"post-link\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"second-content col-lg-6\">
                        <h1 class=\"text-dark asap-font second-h1\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 69, $this->source); })()), "title", [], "any", false, false, false, 69), "html", null, true);
        echo "</h1>
                        <hr class=\"bg-danger second-hr\">
                        <p class=\"maven-font second-p\">
                            <span class=\"second-span anton-font-font\">\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        echo "descriptiondescriptiondescripti description\"</span>
                            <span class=\"second-hr\"></span>
                        </p>
                    </div>

                    <div class=\"second-img col-lg-6\">
                        <img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 78, $this->source); })()), "img", [], "any", false, false, false, 78))), "html", null, true);
        echo "\" alt=\"img\" class=\"anim1\">
                    </div>
                </div>
            </div>
        </a>
    </section>

    ";
        // line 86
        echo "
    ";
        // line 88
        echo "    ";
        // line 89
        echo "        ";
        // line 90
        echo "            ";
        // line 91
        echo "        ";
        // line 92
        echo "    ";
        // line 93
        echo "    ";
        echo twig_include($this->env, $context, "main/layouts/footer.html.twig");
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
        return array (  248 => 93,  246 => 92,  244 => 91,  242 => 90,  240 => 89,  238 => 88,  235 => 86,  225 => 78,  216 => 72,  210 => 69,  203 => 65,  192 => 58,  190 => 57,  186 => 55,  182 => 54,  177 => 52,  169 => 47,  164 => 45,  160 => 44,  155 => 42,  142 => 32,  136 => 29,  129 => 25,  121 => 20,  118 => 19,  116 => 18,  112 => 16,  110 => 15,  107 => 14,  101 => 11,  98 => 10,  96 => 9,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                        </p>
                    </div>
                </div>
            </div>
    </a>
    </section>

    <section class=\"post-2 justify-content-center\" data-aos=\"fade-in\">
        <div class=\" show-on-scroll \" id=\"firstBox\">
            <a href=\"/main/showPost/{{ third.slug }}\" id=\"post-link\">
                <h1 class=\"text-dark asap-font d-flex justify-content-center\" data-aos=\"fade-right\"
                    data-aos-duration=\"3000\">{{ third.title }}</h1>
                <img src=\"{{ asset('uploads/' ~ third.img) }}\" alt=\"img\" class=\"img-fluid post-2-img \" data-aos=\"fade-up\"
                     data-aos-duration=\"3000\">
                <span class=\"third-span\" data-aos=\"fade-left\">{{ third.description }}</span>
            </a>
        </div>
    </section>

    <section class=\"post-3\" style=\"background-image: url({{ asset('uploads/' ~ fourth.img) }});\" data-aos=\"fade-in\">
        <div class=\"\">
            <a href=\"/main/showPost/{{ fourth.slug }}\" id=\"post-link\">
                <h1 class=\"maven-font\" data-aos=\"fade-left\">{{ fourth.title }}</h1>
                {#<img src=\"{{ asset('uploads/' ~ fourth.img) }}\" alt=\"img\" class=\"img-fluid\" data-aos=\"fade-up\"#}
                     {#data-aos-duration=\"3000\">#}
                <span class=\"\" data-aos=\"fade-right\">{{ fourth.description }}</span>
            </a>
        </div>
    </section>


    <section class=\"second-post\" id=\"second-post\">
        <a href=\"/main/showPost/{{ second.slug }}\" id=\"post-link\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"second-content col-lg-6\">
                        <h1 class=\"text-dark asap-font second-h1\">{{ second.title }}</h1>
                        <hr class=\"bg-danger second-hr\">
                        <p class=\"maven-font second-p\">
                            <span class=\"second-span anton-font-font\">\"{{ second.description }}descriptiondescriptiondescripti description\"</span>
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

    {#</section>#}
    {#<div class=\"d-flex justify-content-center\">#}
        {#<div class=\"navigation\">#}
            {#{{ knp_pagination_render(posts) }}#}
        {#</div>#}
    {#</div>#}
    {{ include('main/layouts/footer.html.twig') }}



{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
