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

/* admin/results.html.twig */
class __TwigTemplate_89ad35bcf2e06990d68cbd33c005768256e7cc45aaa73c267387c3e65c2c0a03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/results.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/results.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/results.html.twig", 1);
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
    <div class=\"container-fluid bg-light\">
        <div class=\"row\">
            <div class=\"col-3\">
                ";
        // line 10
        echo twig_include($this->env, $context, "admin/layouts/sidebar.html.twig");
        echo "
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    ";
        // line 14
        if ((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 14, $this->source); })())) {
            // line 15
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 15, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 16
                echo "                            <div class=\"col-6\">
                                <h4 class=\"lobster-font  mt-4\">";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 17), "html", null, true);
                echo "</h4>
                                <hr>
                                ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", [], "any", false, false, false, 19));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 20
                    echo "                                    <p class=\"anton-font\"><b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 20), "html", null, true);
                    echo "</b> Voted: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 20), "html", null, true);
                    echo "</p>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
                    // line 22
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 22) * 100) / 100), "html", null, true);
                    echo "%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    ";
        } else {
            // line 28
            echo "                        <h2 class=\"text-center\">Result not yet</h2>
                    ";
        }
        // line 30
        echo "
                    ";
        // line 32
        echo "                    <button type=\"submit\" class=\"mt-4 btn btn-danger poll_reset anton-font\" id=\"poll_reset\">reset poll result</button>

                </div>
            </div>
        </div>
    </div>
    ";
        // line 38
        echo twig_include($this->env, $context, "admin/layouts/footer.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 38,  156 => 32,  153 => 30,  149 => 28,  146 => 27,  139 => 25,  130 => 22,  122 => 20,  118 => 19,  113 => 17,  110 => 16,  105 => 15,  103 => 14,  96 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AdminController!{% endblock %}

{% block body %}
    {{ include('admin/layouts/header.html.twig') }}
    <div class=\"container-fluid bg-light\">
        <div class=\"row\">
            <div class=\"col-3\">
                {{ include('admin/layouts/sidebar.html.twig') }}
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    {% if questions %}
                        {% for question in questions %}
                            <div class=\"col-6\">
                                <h4 class=\"lobster-font  mt-4\">{{ question.title }}</h4>
                                <hr>
                                {% for answer in question.answers %}
                                    <p class=\"anton-font\"><b>{{ answer.answer }}</b> Voted: {{ answer.getPollCount() }}</p>
                                    <div class=\"progress\">
                                        <div class=\"progress-bar\" role=\"progressbar\" style=\"width: {{ answer.getPollCount()*100/100 }}%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                    </div>
                                {% endfor %}
                            </div>
                        {% endfor %}
                    {% else %}
                        <h2 class=\"text-center\">Result not yet</h2>
                    {% endif %}

                    {# Reset poll button #}
                    <button type=\"submit\" class=\"mt-4 btn btn-danger poll_reset anton-font\" id=\"poll_reset\">reset poll result</button>

                </div>
            </div>
        </div>
    </div>
    {{ include('admin/layouts/footer.html.twig') }}
{% endblock %}", "admin/results.html.twig", "/var/www/home30/templates/admin/results.html.twig");
    }
}
