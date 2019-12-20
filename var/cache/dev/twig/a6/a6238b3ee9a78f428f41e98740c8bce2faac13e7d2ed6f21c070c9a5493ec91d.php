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

        echo "Home page!";
        
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
            echo "        <div class=\"d-flex justify-content-center admin-link-block\">
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
    ";
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
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 24, $this->source); })()), "img", [], "any", false, false, false, 24))), "html", null, true);
        echo "\" alt=\"img\" class=\"img-fluid anim1\">
                    </div>

                    <div class=\"col-lg-6 first-content\">
                        <h1 class=\"text-dark asap-font first-h1 anim1\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        echo "</h1>
                        <hr class=\"bg-danger first-hr\">
                        <p class=\"maven-font first-p anim1\">
                            <span class=\"first-span asap-font\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
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
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 41, $this->source); })()), "slug", [], "any", false, false, false, 41), "html", null, true);
        echo "\" id=\"post-link\">
                <h1 class=\"text-dark asap-font d-flex justify-content-center\" data-aos=\"fade-right\"
                    data-aos-duration=\"3000\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 43, $this->source); })()), "title", [], "any", false, false, false, 43), "html", null, true);
        echo "</h1>
                <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 44, $this->source); })()), "img", [], "any", false, false, false, 44))), "html", null, true);
        echo "\" alt=\"img\" class=\"img-fluid post-2-img \" data-aos=\"fade-up\"
                     data-aos-duration=\"3000\">
                <span class=\"third-span\" data-aos=\"fade-left\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["third"]) || array_key_exists("third", $context) ? $context["third"] : (function () { throw new RuntimeError('Variable "third" does not exist.', 46, $this->source); })()), "description", [], "any", false, false, false, 46), "html", null, true);
        echo "</span>
            </a>
        </div>
    </section>

    <section class=\"post-3\" style=\"background-image: url(";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 51, $this->source); })()), "img", [], "any", false, false, false, 51))), "html", null, true);
        echo ");\" data-aos=\"fade-in\">
        <div class=\"\">
            <a href=\"/main/showPost/";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 53, $this->source); })()), "slug", [], "any", false, false, false, 53), "html", null, true);
        echo "\" id=\"post-link\">
                <h1 class=\"maven-font\" data-aos=\"fade-left\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 54, $this->source); })()), "title", [], "any", false, false, false, 54), "html", null, true);
        echo "</h1>
                <span class=\"\" data-aos=\"fade-right\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fourth"]) || array_key_exists("fourth", $context) ? $context["fourth"] : (function () { throw new RuntimeError('Variable "fourth" does not exist.', 55, $this->source); })()), "description", [], "any", false, false, false, 55), "html", null, true);
        echo "</span>
            </a>
        </div>
    </section>

";
        // line 61
        echo "    <section class=\"second-post\" id=\"second-post\">
        <a href=\"/main/showPost/";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 62, $this->source); })()), "slug", [], "any", false, false, false, 62), "html", null, true);
        echo "\" id=\"post-link\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <div class=\"second-content col-lg-6\">
                        <h1 class=\"text-dark asap-font second-h1\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 66, $this->source); })()), "title", [], "any", false, false, false, 66), "html", null, true);
        echo "</h1>
                        <hr class=\"bg-danger second-hr\">
                        <p class=\"maven-font second-p\">
                            <span class=\"second-span anton-font-font\">\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true);
        echo "descriptiondescriptiondescripti description\"</span>
                            <span class=\"second-hr\"></span>
                        </p>
                    </div>

                    ";
        // line 75
        echo "                        <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["second"]) || array_key_exists("second", $context) ? $context["second"] : (function () { throw new RuntimeError('Variable "second" does not exist.', 75, $this->source); })()), "img", [], "any", false, false, false, 75))), "html", null, true);
        echo "\" alt=\"img\" class=\"anim1 img-fluid second-img \">
                    ";
        // line 77
        echo "                </div>
            </div>
        </a>
    </section>

    ";
        // line 82
        echo twig_include($this->env, $context, "main/layouts/footer.html.twig");
        echo "

    ";
        // line 85
        echo "
    ";
        // line 87
        echo "    ";
        // line 88
        echo "        ";
        // line 89
        echo "            ";
        // line 90
        echo "        ";
        // line 91
        echo "    ";
        // line 92
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
        return array (  250 => 92,  248 => 91,  246 => 90,  244 => 89,  242 => 88,  240 => 87,  237 => 85,  232 => 82,  225 => 77,  220 => 75,  212 => 69,  206 => 66,  199 => 62,  196 => 61,  188 => 55,  184 => 54,  180 => 53,  175 => 51,  167 => 46,  162 => 44,  158 => 43,  153 => 41,  140 => 31,  134 => 28,  127 => 24,  120 => 20,  117 => 19,  114 => 17,  110 => 15,  108 => 14,  105 => 13,  99 => 10,  96 => 9,  94 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home page!{% endblock %}

{% block body %}
    {{ include('main/layouts/header.html.twig') }}

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center admin-link-block\">
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
                            <span class=\"first-span asap-font\">{{ first.description }}</span>
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
                <span class=\"\" data-aos=\"fade-right\">{{ fourth.description }}</span>
            </a>
        </div>
    </section>

{# Нет адаптивности из-за этого поста #}
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

                    {#<div class=\"second-img col-lg-6\">#}
                        <img src=\"{{ asset('uploads/' ~ second.img) }}\" alt=\"img\" class=\"anim1 img-fluid second-img \">
                    {#</div>#}
                </div>
            </div>
        </a>
    </section>

    {{ include('main/layouts/footer.html.twig') }}

    {#<button id=\"to-top\">to top</button>#}

    {#</section>#}
    {#<div class=\"d-flex justify-content-center\">#}
        {#<div class=\"navigation\">#}
            {#{{ knp_pagination_render(posts) }}#}
        {#</div>#}
    {#</div>#}




{% endblock %}", "main/index.html.twig", "/var/www/Symfony-4-blog/templates/main/index.html.twig");
    }
}
