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

/* main/showPost.html.twig */
class __TwigTemplate_24306e3192f65d2d6e6e46d0a98e665cdc4af4bf5e931e1a3d1babfcce17ae7a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/showPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/showPost.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/showPost.html.twig", 1);
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
<div class=\"d-flex justify-content-center flex-column post-wrapper\">
    <h1 class=\"text-center\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h1>
    <div class=\"\">
        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "img", [], "any", false, false, false, 24))), "html", null, true);
        echo "\" alt=\"img\" class=\"post-img\">
    </div>
    <p>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "content", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>

    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 29
            echo "      <a href=\"/main/show-category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 29), "html", null, true);
            echo "\" class=\"post-category\">
          <h2 class=\"post-category\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 30), "html", null, true);
            echo "</h2>
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 34, $this->source); })()), "tags", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 35
            echo "       ";
            // line 36
            echo "    <a href=\"/main/show-tag/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 36), "html", null, true);
            echo "\"><span class=\"badge badge-secondary col-1\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 36), "html", null, true);
            echo "</span></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "    <div class=\"container\">
        <div class=\"row bootstrap snippets\">
            <div class=\"col-md-6  col-sm-10\">
                <div class=\"comment-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-body\">

                            ";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 46
            echo "                                <div class=\"panel-heading\">
                                    Comment panel
                                </div>
                                <textarea class=\"form-control\" placeholder=\"write a comment...\" rows=\"3\"></textarea>
                                <br>
                                <button type=\"button\" class=\"btn btn-info pull-right\">Post</button>
                            ";
        }
        // line 53
        echo "
                            <div class=\"clearfix\"></div>
                            <hr>
                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <a href=\"#\" class=\"pull-left\">
                                        <img src=\"https://bootdey.com/img/Content/user_1.jpg\" alt=\"\" class=\"img-circle\">
                                    </a>
                                    <div class=\"media-body\">
                                <span class=\"text-muted pull-right\">
                                    <small class=\"text-muted\">30 min ago</small>
                                </span>
                                        <strong class=\"text-success\">@MartinoMont</strong>

                                        ";
        // line 68
        echo "                                        ";
        // line 69
        echo "                                        ";
        // line 70
        echo "                                        ";
        // line 71
        echo "                                        ";
        // line 72
        echo "                                        ";
        // line 73
        echo "                                        ";
        // line 74
        echo "
                                        <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">0</span>
                                    <a href=\"#\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                                            ";
        // line 79
        echo "                                </span>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/showPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 79,  222 => 74,  220 => 73,  218 => 72,  216 => 71,  214 => 70,  212 => 69,  210 => 68,  194 => 53,  185 => 46,  183 => 45,  174 => 38,  163 => 36,  161 => 35,  157 => 34,  154 => 33,  145 => 30,  140 => 29,  136 => 28,  131 => 26,  126 => 24,  121 => 22,  117 => 20,  113 => 18,  111 => 17,  108 => 16,  102 => 13,  99 => 12,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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

<div class=\"d-flex justify-content-center flex-column post-wrapper\">
    <h1 class=\"text-center\">{{ post.title }}</h1>
    <div class=\"\">
        <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"post-img\">
    </div>
    <p>{{ post.content }}</p>

    {% for category in post.category %}
      <a href=\"/main/show-category/{{ category.slug }}\" class=\"post-category\">
          <h2 class=\"post-category\">{{ category.category }}</h2>
      </a>
    {% endfor %}

    {% for tag in post.tags %}
       {#<a href=\"/main/show-tag/{{ tag.slug }}\"><h1 class=\"text-success\">{{ tag.tag }}</h1></a>#}
    <a href=\"/main/show-tag/{{ tag.slug }}\"><span class=\"badge badge-secondary col-1\">{{ tag.tag }}</span></a>
    {% endfor %}
    <div class=\"container\">
        <div class=\"row bootstrap snippets\">
            <div class=\"col-md-6  col-sm-10\">
                <div class=\"comment-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-body\">

                            {% if is_granted('ROLE_USER') %}
                                <div class=\"panel-heading\">
                                    Comment panel
                                </div>
                                <textarea class=\"form-control\" placeholder=\"write a comment...\" rows=\"3\"></textarea>
                                <br>
                                <button type=\"button\" class=\"btn btn-info pull-right\">Post</button>
                            {% endif %}

                            <div class=\"clearfix\"></div>
                            <hr>
                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <a href=\"#\" class=\"pull-left\">
                                        <img src=\"https://bootdey.com/img/Content/user_1.jpg\" alt=\"\" class=\"img-circle\">
                                    </a>
                                    <div class=\"media-body\">
                                <span class=\"text-muted pull-right\">
                                    <small class=\"text-muted\">30 min ago</small>
                                </span>
                                        <strong class=\"text-success\">@MartinoMont</strong>

                                        {#<p>{{ coment }}</p>#}
                                        {# Likes #}
                                        {#<div class=\"show-article-title-container d-inline-block pl-3 align-middle\">#}
                                        {#<span class=\"pl-2 fa fa-heart-o article-details js-like-article\">#}
                                        {#<a href=\"{{ path('article_toggle_heart', {slug: slug} )}}\" class=\"fa fa-heart-o like-article js-like-article\"></a>#}
                                        {#</span>#}
                                        {#</div>#}

                                        <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">0</span>
                                    <a href=\"#\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                                            {#{{ path('article_toggle_heart', {slug: slug} )}}#}
                                </span>

                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}", "main/showPost.html.twig", "/var/www/Symfony-4-blog/templates/main/showPost.html.twig");
    }
}
