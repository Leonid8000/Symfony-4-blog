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
    <h1 class=\"text-center anton-font\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), "html", null, true);
        echo "</h1>
    <div class=\"d-flex justify-content-center mt-2 mb-2\">
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
            echo "\" class=\"post-category col-lg-1 col-3 text-center\">
          ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 30), "html", null, true);
            echo "
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
            echo "    <a href=\"/main/show-tag/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 35), "html", null, true);
            echo "\"><span class=\"badge badge-secondary col-lg-1 col-3\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 35), "html", null, true);
            echo "</span></a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    <div class=\"container\">
        <div class=\"row bootstrap snippets\">
            <div class=\"col-md-6  col-sm-10\">
                <div class=\"comment-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-body\">

                            ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 45
            echo "                               <h4>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 45, $this->source); })()), "firstName", [], "any", false, false, false, 45), "html", null, true);
            echo "</h4>
                                ";
            // line 47
            echo "                                <form method=\"POST\">
                                    <div class=\"panel-heading\">
                                        Comment panel
                                    </div>
                                    <textarea class=\"form-control\" placeholder=\"write a comment...\" name=\"coment\" rows=\"3\" required></textarea>
                                    <br>
                                    <button type=\"submit\" class=\"btn btn-info pull-right\">Post</button>
                                </form>
                            ";
        }
        // line 56
        echo "

                                <h3>All coments: ";
        // line 58
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 58, $this->source); })()), "coments", [], "any", false, false, false, 58)), "html", null, true);
        echo "</h3>
                                ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })()), "coments", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["coment"]) {
            // line 60
            echo "                            <div class=\"clearfix\"></div>
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

                                          <h4><strong class=\"text-success\">";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "author", [], "any", false, false, false, 72), "html", null, true);
            echo "</strong></h4>
                                        ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["coment"], "isDeleted", [], "any", false, false, false, 73)) {
                // line 74
                echo "                                            <span class=\"fa fa-close\"></span> deleted
                                        ";
            } else {
                // line 76
                echo "                                            <p>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["coment"], "coment", [], "any", false, false, false, 76), "html", null, true);
                echo "</p>
                                        ";
            }
            // line 78
            echo "
                                        ";
            // line 80
            echo "                                        ";
            // line 81
            echo "                                        ";
            // line 82
            echo "                                        ";
            // line 83
            echo "                                        ";
            // line 84
            echo "                                        ";
            // line 85
            echo "                                        ";
            // line 86
            echo "
                                        <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">0</span>
                                    <a href=\"#\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                                            ";
            // line 91
            echo "                                </span>

                                    </div>
                                </li>
                            </ul>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
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
        return array (  273 => 97,  262 => 91,  256 => 86,  254 => 85,  252 => 84,  250 => 83,  248 => 82,  246 => 81,  244 => 80,  241 => 78,  235 => 76,  231 => 74,  229 => 73,  225 => 72,  211 => 60,  207 => 59,  203 => 58,  199 => 56,  188 => 47,  183 => 45,  181 => 44,  172 => 37,  161 => 35,  157 => 34,  154 => 33,  145 => 30,  140 => 29,  136 => 28,  131 => 26,  126 => 24,  121 => 22,  117 => 20,  113 => 18,  111 => 17,  108 => 16,  102 => 13,  99 => 12,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
    <h1 class=\"text-center anton-font\">{{ post.title }}</h1>
    <div class=\"d-flex justify-content-center mt-2 mb-2\">
        <img src=\"{{ asset('uploads/' ~ post.img) }}\" alt=\"img\" class=\"post-img\">
    </div>
    <p>{{ post.content }}</p>

    {% for category in post.category %}
      <a href=\"/main/show-category/{{ category.slug }}\" class=\"post-category col-lg-1 col-3 text-center\">
          {{ category.category }}
      </a>
    {% endfor %}

    {% for tag in post.tags %}
    <a href=\"/main/show-tag/{{ tag.slug }}\"><span class=\"badge badge-secondary col-lg-1 col-3\">{{ tag.tag }}</span></a>
    {% endfor %}
    <div class=\"container\">
        <div class=\"row bootstrap snippets\">
            <div class=\"col-md-6  col-sm-10\">
                <div class=\"comment-wrapper\">
                    <div class=\"panel panel-info\">
                        <div class=\"panel-body\">

                            {% if is_granted('ROLE_USER') %}
                               <h4>{{ author.firstName }}</h4>
                                {# COMENT FORM #}
                                <form method=\"POST\">
                                    <div class=\"panel-heading\">
                                        Comment panel
                                    </div>
                                    <textarea class=\"form-control\" placeholder=\"write a comment...\" name=\"coment\" rows=\"3\" required></textarea>
                                    <br>
                                    <button type=\"submit\" class=\"btn btn-info pull-right\">Post</button>
                                </form>
                            {% endif %}


                                <h3>All coments: {{ post.coments |length }}</h3>
                                {% for coment in post.coments %}
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

                                          <h4><strong class=\"text-success\">{{ coment.author }}</strong></h4>
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

                                        <span class=\"pl-2 article-details\">
                                <span class=\"js-like-article-count\">0</span>
                                    <a href=\"#\" class=\"fa fa-heart-o like-article js-like-article\"></a>
                                            {#{{ path('article_toggle_heart', {slug: slug} )}}#}
                                </span>

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

{% endblock %}", "main/showPost.html.twig", "/var/www/Symfony-4-blog/templates/main/showPost.html.twig");
    }
}
