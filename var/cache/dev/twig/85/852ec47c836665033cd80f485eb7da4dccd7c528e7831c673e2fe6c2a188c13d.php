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

/* poll/result.html.twig */
class __TwigTemplate_b7ad7059c7218579e60e9366488837f0bf37f7001726b8f6ece16e3236b43863 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poll/result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poll/result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poll/result.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"header bg-dark \">
        ";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 7
            echo "            <div class=\"d-flex justify-content-end\">
                <a href=\"";
            // line 8
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-dark m-3\">Log Out</a>
            </div>
        ";
        }
        // line 11
        echo "    </div>
    <div class=\"example-wrapper\">
        ";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 14
            echo "            ";
            // line 15
            echo "        ";
        }
        // line 16
        echo "        ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "            <div class=\"d-flex justify-content-center\">
                <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
            </div>
        ";
        }
        // line 21
        echo "    </div>

    <h3 class=\"text-dark mt-4 anton-font text-center m-2\">Poll results</h3>
    <hr>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 28
        if ((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 28, $this->source); })())) {
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 30
                echo "                    <div class=\"col-6\">
                        <h4 class=\"lobster-font\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 31), "html", null, true);
                echo "</h4>
                        <hr>
                        ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", [], "any", false, false, false, 33));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 34
                    echo "                            <p class=\"anton-font\"><b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 34), "html", null, true);
                    echo "</b> Voted: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 34), "html", null, true);
                    echo "</p>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\"
                                     style=\"width: ";
                    // line 37
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 37) + ((twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 37) / 100) * twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 37))) + (twig_get_attribute($this->env, $this->source, $context["answer"], "getPollCount", [], "method", false, false, false, 37) / 100)), "html", null, true);
                    echo "px\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">

                                </div>
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                        ";
                // line 43
                echo "                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            ";
        } else {
            // line 46
            echo "                <h2 class=\"text-center\">Result not yet</h2>
            ";
        }
        // line 48
        echo "        </div>
    </div>

    ";
        // line 52
        echo "    ";
        // line 53
        echo "
    ";
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "        ";
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        // line 66
        echo "
    ";
        // line 68
        echo "    ";
        // line 69
        echo "    ";
        // line 70
        echo "    ";
        // line 71
        echo "
        ";
        // line 73
        echo "     ";
        // line 74
        echo "    ";
        // line 75
        echo "        ";
        // line 76
        echo "    ";
        // line 77
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "poll/result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 77,  220 => 76,  218 => 75,  216 => 74,  214 => 73,  211 => 71,  209 => 70,  207 => 69,  205 => 68,  202 => 66,  200 => 65,  198 => 64,  196 => 63,  194 => 62,  192 => 61,  190 => 60,  188 => 59,  186 => 58,  184 => 57,  182 => 56,  180 => 55,  177 => 53,  175 => 52,  170 => 48,  166 => 46,  163 => 45,  156 => 43,  154 => 42,  143 => 37,  134 => 34,  130 => 33,  125 => 31,  122 => 30,  117 => 29,  115 => 28,  106 => 21,  100 => 18,  97 => 17,  94 => 16,  91 => 15,  89 => 14,  87 => 13,  83 => 11,  77 => 8,  74 => 7,  72 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"header bg-dark \">
        {% if is_granted('ROLE_USER') %}
            <div class=\"d-flex justify-content-end\">
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-dark m-3\">Log Out</a>
            </div>
        {% endif %}
    </div>
    <div class=\"example-wrapper\">
        {% if is_granted('ROLE_USER') %}
            {#<button><a href=\"{{ path('index') }}\">Home</a></button>#}
        {% endif %}
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"d-flex justify-content-center\">
                <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
            </div>
        {% endif %}
    </div>

    <h3 class=\"text-dark mt-4 anton-font text-center m-2\">Poll results</h3>
    <hr>

    <div class=\"container\">
        <div class=\"row\">
            {% if questions %}
                {% for question in questions %}
                    <div class=\"col-6\">
                        <h4 class=\"lobster-font\">{{ question.title }}</h4>
                        <hr>
                        {% for answer in question.answers %}
                            <p class=\"anton-font\"><b>{{ answer.answer }}</b> Voted: {{ answer.getPollCount() }}</p>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\"
                                     style=\"width: {{ answer.getPollCount() + answer.getPollCount()/100*answer.getPollCount()+answer.getPollCount()/100 }}px\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">

                                </div>
                            </div>
                        {% endfor %}
                        {#<hr>#}
                    </div>
                {% endfor %}
            {% else %}
                <h2 class=\"text-center\">Result not yet</h2>
            {% endif %}
        </div>
    </div>

    {# Link for poll #}
    {#<a href=\"{{ path('poll') }}\">Poll</a>#}

    {#<h2 class=\"text-center\">Auth user answers</h2>#}
    {#<hr>#}
    {#<div class=\"col-6\">#}
    {#{% if ua %}#}
    {#{% for ua in ua %}#}
    {#<h4>{{ ua.user_answer }}</h4>#}
    {#<hr>#}
    {#{% endfor %}#}
    {#{% else %}#}
        {#<h4 class=\"text-danger\">No auth user answers</h4>#}
    {#{% endif %}#}
    {#</div>#}

    {#<h2 class=\"text-center\">All users answers</h2>#}
    {#<hr>#}
    {#{% if pollAnswers %}#}
    {#{% for pollAns in pollAnswers %}#}

        {#<b>UserId: {{ pollAns.user_id }} AnswerId: {{ pollAns.user_answer }}</b><br>#}
     {#{% endfor %}#}
    {#{% else %}#}
        {#<h4 class=\"text-danger ml-3\">No users poll answers</h4>#}
    {#{% endif %}#}

{% endblock %}", "poll/result.html.twig", "/var/www/home30/templates/poll/result.html.twig");
    }
}
