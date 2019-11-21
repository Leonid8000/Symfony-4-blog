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

/* admin/question/index.html.twig */
class __TwigTemplate_ddb9c243b66afe9913516b8385c5ed29c192e20535c61c7a19fb9c6970ee4e91 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/question/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/question/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/question/index.html.twig", 1);
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

        echo "Hello QuestionController!";
        
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
            <div class=\"col-lg-3\">
                ";
        // line 11
        echo twig_include($this->env, $context, "admin/layouts/sidebar.html.twig");
        echo "
            </div>
            <div class=\"main col-lg-7 col-sm-12\">
    <h2 class=\"anton-font text-center\">Questions</h2>
                 ";
        // line 15
        if ((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })())) {
            // line 16
            echo "                <table id=\"questions_table\" class=\"table table-dark\">
                    <tr>
                        <th scope=\"col\">Question</th>
                        <th scope=\"col\">Answers</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                    <tbody>
                    ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 25
                echo "                        <tr>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 29
                    echo "                                    <span class=\"badge badge-secondary\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 29), "html", null, true);
                    echo "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                            </td>
                            <td><a href=\"/admin/question/edit/";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "\" class=\"btn btn-secondary\">Edit</a></td>
                            <td><a href=\"\" class=\"btn btn-danger question-delete\" data-id=\"";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\">Delete</a></td>
                        </tr>

                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        } else {
            // line 43
            echo "<p class=\"text-center mt-4\">No questions to show</p>
";
        }
        // line 45
        echo twig_include($this->env, $context, "admin/layouts/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/question/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 45,  166 => 43,  158 => 37,  148 => 33,  144 => 32,  141 => 31,  132 => 29,  128 => 28,  123 => 26,  120 => 25,  116 => 24,  106 => 16,  104 => 15,  97 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello QuestionController!{% endblock %}

{% block body %}
    {{ include('admin/layouts/header.html.twig') }}

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                {{ include('admin/layouts/sidebar.html.twig') }}
            </div>
            <div class=\"main col-lg-7 col-sm-12\">
    <h2 class=\"anton-font text-center\">Questions</h2>
                 {% if questions %}
                <table id=\"questions_table\" class=\"table table-dark\">
                    <tr>
                        <th scope=\"col\">Question</th>
                        <th scope=\"col\">Answers</th>
                        <th scope=\"col\">Edit</th>
                        <th scope=\"col\">Delete</th>
                    </tr>
                    <tbody>
                    {% for question in questions %}
                        <tr>
                            <td>{{ question.title }}</td>
                            <td>
                                {% for answer in question.answers %}
                                    <span class=\"badge badge-secondary\">{{ answer.answer }}</span>
                                {% endfor %}
                            </td>
                            <td><a href=\"/admin/question/edit/{{ question.id }}\" class=\"btn btn-secondary\">Edit</a></td>
                            <td><a href=\"\" class=\"btn btn-danger question-delete\" data-id=\"{{ question.id }}\">Delete</a></td>
                        </tr>

                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% else %}
<p class=\"text-center mt-4\">No questions to show</p>
{% endif %}
{{ include('admin/layouts/footer.html.twig') }}
{% endblock %}

", "admin/question/index.html.twig", "/var/www/home30/templates/admin/question/index.html.twig");
    }
}
