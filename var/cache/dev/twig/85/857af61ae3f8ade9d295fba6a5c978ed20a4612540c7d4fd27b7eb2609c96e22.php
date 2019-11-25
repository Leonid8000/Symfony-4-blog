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

/* admin/post/index.html.twig */
class __TwigTemplate_1e094e8f0928ac2dc4ded4c9d8879b0f7364756a12ae200b267ede02f1b04f98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/post/index.html.twig", 1);
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

        echo "Hello AdminController!";
        
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
        echo twig_include($this->env, $context, "admin/layouts/header.html.twig");
        echo "

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-3\">
                ";
        // line 11
        echo twig_include($this->env, $context, "admin/layouts/sidebar.html.twig");
        echo "
            </div>

            <div class=\"offset-lg-2 col-lg-8\">
                <h1 class=\"text-center anton-font text-dark\">Posts</h1>
                <table class=\"table\" id=\"post_table\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Post</th>
                        <th scope=\"col\">Slug</th>
                        <th scope=\"col\">Desc</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 28
        if ((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 30
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "</th>
                                <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <th scope=\"col\"><a href=\"/admin/post/edit/";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35), "html", null, true);
                echo "\" class=\"btn btn-sm btn-secondary\">edit</a></th>
                                <th scope=\"col\"><button class=\"btn btn-sm btn-danger post-delete\" data-id=\"";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\">delete</button></th>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                    ";
        } else {
            // line 40
            echo "                        <h3 class=\"text-center\">no posts</h3>
                    ";
        }
        // line 42
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

    ";
        // line 49
        echo twig_include($this->env, $context, "admin/layouts/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 49,  163 => 42,  159 => 40,  156 => 39,  147 => 36,  143 => 35,  139 => 34,  135 => 33,  131 => 32,  127 => 31,  124 => 30,  119 => 29,  117 => 28,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
    {{ include('admin/layouts/header.html.twig') }}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-3\">
                {{ include('admin/layouts/sidebar.html.twig') }}
            </div>

            <div class=\"offset-lg-2 col-lg-8\">
                <h1 class=\"text-center anton-font text-dark\">Posts</h1>
                <table class=\"table\" id=\"post_table\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Post</th>
                        <th scope=\"col\">Slug</th>
                        <th scope=\"col\">Desc</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% if posts %}
                        {% for post in posts %}
                            <tr>
                                <th scope=\"row\">{{ post.id }}</th>
                                <td>{{ post.title }}</td>
                                <td>{{ post.slug }}</td>
                                <td>{{ post.description }}</td>
                                <th scope=\"col\"><a href=\"/admin/post/edit/{{ post.id }}\" class=\"btn btn-sm btn-secondary\">edit</a></th>
                                <th scope=\"col\"><button class=\"btn btn-sm btn-danger post-delete\" data-id=\"{{ post.id }}\">delete</button></th>
                            </tr>
                        {% endfor %}
                    {% else %}
                        <h3 class=\"text-center\">no posts</h3>
                    {% endif %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    {{ include('admin/layouts/footer.html.twig') }}
{% endblock %}
", "admin/post/index.html.twig", "/var/www/Symfony-4-blog/templates/admin/post/index.html.twig");
    }
}
