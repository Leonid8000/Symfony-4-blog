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
class __TwigTemplate_8fbafcd76f4129442c20742ba70c6e4a76ee17db37803d1497ff848181a5fa75 extends \Twig\Template
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
        echo "    <section class=\"section-home\">
    ";
        // line 7
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
        echo "
<div class=\"d-flex justify-content-center flex-column post-wrapper\">
    <div class=\"d-flex justify-content-center mt-2 mb-2\">
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "img", [], "any", false, false, false, 21))), "html", null, true);
        echo "\" alt=\"img\" class=\"post-img img-fluid\">
    </div>
    <h1 class=\"text-center anton-font\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        echo "</h1>
    <p>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), "html", null, true);
        echo "</p>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 27
            echo "      <a href=\"/main/show-category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 27), "html", null, true);
            echo "\" class=\"post-cat col-lg-1 col-sm-2 text-center\">
          ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 28), "html", null, true);
            echo "
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 32, $this->source); })()), "tags", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 33
            echo "        <span class=\"\"> <a href=\"/main/show-tag/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 33), "html", null, true);
            echo "\" class=\"post-tag badge badge-secondary col-lg-1 col-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 33), "html", null, true);
            echo "</a></span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "    <div class=\"container\">
        <div class=\"row bootstrap snippets\">
            <div class=\"col-md-6  col-sm-10\">
                <div class=\"comment-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-body\">

";
        // line 43
        echo "                            <h4 class=\"mt-2 raleway-font\">LEAVE A COMMENT</h4>
                            <hr>
                            <p class=\"comments-length font-weight-bold\"><span class=\"count-comments\">";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 45, $this->source); })()), "coments", [], "any", false, false, false, 45)), "html", null, true);
        echo "</span> Comments </p>
                            ";
        // line 46
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 47
            echo "                               <h4 class=\"comment-user-name raleway-font\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 47, $this->source); })()), "firstName", [], "any", false, false, false, 47), "html", null, true);
            echo "</h4>
                                ";
            // line 49
            echo "                                <form method=\"POST\">
                                    <textarea class=\"form-control\" placeholder=\"Start the discussion…\" name=\"coment\" rows=\"3\" required></textarea>
                                    <br>
                                    <button type=\"submit\" class=\"btn btn-info pull-right\">Post</button>
                                </form>
                            ";
        }
        // line 55
        echo "
                                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 56, $this->source); })()), "coments", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["coment"]) {
            // line 57
            echo "                            <div class=\"clearfix\"></div>
                            <hr>
                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <a href=\"#\" class=\"pull-left\">
                                        <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/user.png"), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-fluid user-img mr-1\">
                                    </a>
                                    <div class=\"media-body\">
                                <span class=\"text-muted pull-right\">
                                    <small class=\"text-muted\">30 min ago</small>
                                </span>

                                          <h5><strong class=\"text-success\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "author", [], "any", false, false, false, 69), "html", null, true);
            echo "</strong></h5>
                                        ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, $context["coment"], "isDeleted", [], "any", false, false, false, 70)) {
                // line 71
                echo "                                            <span class=\"fa fa-close\"></span> deleted
                                        ";
            } else {
                // line 73
                echo "                                            <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "coment", [], "any", false, false, false, 73), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 75
            echo "
                                        ";
            // line 77
            echo "                                        ";
            // line 78
            echo "                                        ";
            // line 79
            echo "                                        ";
            // line 80
            echo "                                        ";
            // line 81
            echo "                                        ";
            // line 82
            echo "                                        ";
            // line 83
            echo "
                                        ";
            // line 85
            echo "                                ";
            // line 86
            echo "                                    ";
            // line 87
            echo "                                            ";
            // line 88
            echo "                                ";
            // line 89
            echo "
                                    </div>
                                </li>
                            </ul>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

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
        return array (  279 => 94,  269 => 89,  267 => 88,  265 => 87,  263 => 86,  261 => 85,  258 => 83,  256 => 82,  254 => 81,  252 => 80,  250 => 79,  248 => 78,  246 => 77,  243 => 75,  237 => 73,  233 => 71,  231 => 70,  227 => 69,  217 => 62,  210 => 57,  206 => 56,  203 => 55,  195 => 49,  190 => 47,  188 => 46,  184 => 45,  180 => 43,  171 => 35,  160 => 33,  156 => 32,  153 => 31,  144 => 28,  139 => 27,  135 => 26,  130 => 24,  126 => 23,  121 => 21,  116 => 18,  112 => 16,  110 => 15,  107 => 14,  101 => 11,  98 => 10,  96 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Index page!{% endblock %}

{% block body %}
    <section class=\"section-home\">
    {{ include('main/layouts/header.html.twig') }}

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {% if is_granted('ROLE_USER') %}

    {% endif %}

<div class=\"d-flex justify-content-center flex-column post-wrapper\">
    <div class=\"d-flex justify-content-center mt-2 mb-2\">
        <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"post-img img-fluid\">
    </div>
    <h1 class=\"text-center anton-font\">{{ post.title }}</h1>
    <p>{{ post.content }}</p>

    {% for category in post.category %}
      <a href=\"/main/show-category/{{ category.slug }}\" class=\"post-cat col-lg-1 col-sm-2 text-center\">
          {{ category.category }}
      </a>
    {% endfor %}

    {% for tag in post.tags %}
        <span class=\"\"> <a href=\"/main/show-tag/{{ tag.slug }}\" class=\"post-tag badge badge-secondary col-lg-1 col-3\">{{ tag.tag }}</a></span>
    {% endfor %}
    <div class=\"container\">
        <div class=\"row bootstrap snippets\">
            <div class=\"col-md-6  col-sm-10\">
                <div class=\"comment-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-body\">

{# Coments section #}
                            <h4 class=\"mt-2 raleway-font\">LEAVE A COMMENT</h4>
                            <hr>
                            <p class=\"comments-length font-weight-bold\"><span class=\"count-comments\">{{ post.coments |length }}</span> Comments </p>
                            {% if is_granted('ROLE_USER') %}
                               <h4 class=\"comment-user-name raleway-font\">{{ author.firstName }}</h4>
                                {# COMENT FORM #}
                                <form method=\"POST\">
                                    <textarea class=\"form-control\" placeholder=\"Start the discussion…\" name=\"coment\" rows=\"3\" required></textarea>
                                    <br>
                                    <button type=\"submit\" class=\"btn btn-info pull-right\">Post</button>
                                </form>
                            {% endif %}

                                {% for coment in post.coments %}
                            <div class=\"clearfix\"></div>
                            <hr>
                            <ul class=\"media-list\">
                                <li class=\"media\">
                                    <a href=\"#\" class=\"pull-left\">
                                        <img src=\"{{ asset('uploads/user.png') }}\" alt=\"\" class=\"img-circle img-fluid user-img mr-1\">
                                    </a>
                                    <div class=\"media-body\">
                                <span class=\"text-muted pull-right\">
                                    <small class=\"text-muted\">30 min ago</small>
                                </span>

                                          <h5><strong class=\"text-success\">{{ coment.author }}</strong></h5>
                                        {% if coment.isDeleted %}
                                            <span class=\"fa fa-close\"></span> deleted
                                        {% else %}
                                            <p>{{ coment.coment }}</p>
                                        {% endif %}

                                        {#<p>{{ coment }}</p>#}
                                        {# Likes #}
                                        {#<div class=\"show-article-title-container d-inline-block pl-3 align-middle\">#}
                                        {#<span class=\"pl-2 fa fa-heart-o article-details js-like-article\">#}
                                        {#<a href=\"{{ path('article_toggle_heart', {slug: slug} )}}\" class=\"fa fa-heart-o like-article js-like-article\"></a>#}
                                        {#</span>#}
                                        {#</div>#}

                                        {#<span class=\"pl-2 article-details\">#}
                                {#<span class=\"js-like-article-count\">0</span>#}
                                    {#<a href=\"#\" class=\"fa fa-heart-o like-article js-like-article\"></a>#}
                                            {#{{ path('article_toggle_heart', {slug: slug} )}}#}
                                {#</span>#}

                                    </div>
                                </li>
                            </ul>
                                {% endfor %}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>

{% endblock %}", "main/showPost.html.twig", "/var/www/Symfony-4-blog/templates/main/showPost.html.twig");
    }
}
