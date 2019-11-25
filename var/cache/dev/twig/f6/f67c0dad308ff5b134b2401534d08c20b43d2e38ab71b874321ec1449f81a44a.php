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

/* admin/tag/index.html.twig */
class __TwigTemplate_e375c49b5a360129aa8e4d6e400eba82385d123458d14b545685221e485fa4c2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tag/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/tag/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/tag/index.html.twig", 1);
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

        echo "Tags!";
        
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

            <div class=\"main\">
                <h1 class=\"text-center anton-font text-dark\">Posts</h1>
            </div>

            <div>
                <table class=\"table\" id=\"post_table\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Tag</th>
                        <th scope=\"col\">Slug</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        if ((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 31, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 32
                echo "                            <tr>
                                <th scope=\"row\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "</th>
                                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "tag", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "slug", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                <th scope=\"col\"><a href=\"/admin/tag/edit/";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "\" class=\"btn btn-sm btn-secondary\">edit</a></th>
                                <th scope=\"col\"><button class=\"btn btn-sm btn-danger tag-delete\" data-id=\"";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 37), "html", null, true);
                echo "\">delete</button></th>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "                    ";
        } else {
            // line 41
            echo "                        <h3 class=\"text-center\">no tags</h3>
                    ";
        }
        // line 43
        echo "                    </tbody>
                </table>

            </div>
        </div>
    </div>

    ";
        // line 50
        echo twig_include($this->env, $context, "admin/layouts/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/tag/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 50,  161 => 43,  157 => 41,  154 => 40,  145 => 37,  141 => 36,  137 => 35,  133 => 34,  129 => 33,  126 => 32,  121 => 31,  119 => 30,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tags!{% endblock %}

{% block body %}
    {{ include('admin/layouts/header.html.twig') }}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-3\">
                {{ include('admin/layouts/sidebar.html.twig') }}
            </div>

            <div class=\"main\">
                <h1 class=\"text-center anton-font text-dark\">Posts</h1>
            </div>

            <div>
                <table class=\"table\" id=\"post_table\">
                    <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">#</th>
                        <th scope=\"col\">Tag</th>
                        <th scope=\"col\">Slug</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% if tags %}
                        {% for tag in tags %}
                            <tr>
                                <th scope=\"row\">{{ tag.id }}</th>
                                <td>{{ tag.tag }}</td>
                                <td>{{ tag.slug }}</td>
                                <th scope=\"col\"><a href=\"/admin/tag/edit/{{ tag.id }}\" class=\"btn btn-sm btn-secondary\">edit</a></th>
                                <th scope=\"col\"><button class=\"btn btn-sm btn-danger tag-delete\" data-id=\"{{ tag.id }}\">delete</button></th>
                            </tr>
                        {% endfor %}
                    {% else %}
                        <h3 class=\"text-center\">no tags</h3>
                    {% endif %}
                    </tbody>
                </table>

            </div>
        </div>
    </div>

    {{ include('admin/layouts/footer.html.twig') }}
{% endblock %}
", "admin/tag/index.html.twig", "/var/www/Symfony-4-blog/templates/admin/tag/index.html.twig");
    }
}
