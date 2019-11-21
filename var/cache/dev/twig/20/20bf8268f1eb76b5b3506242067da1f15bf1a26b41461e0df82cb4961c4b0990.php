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

/* poll/index.html.twig */
class __TwigTemplate_5dcf636deb7a0a1015c532c741af7b0d424822da716f8c848cc8fcba03200c05 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poll/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "poll/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "poll/index.html.twig", 1);
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

        echo "Poll";
        
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
        echo "    <div class=\"header bg-dark \">
        ";
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 8
            echo "            <div class=\"d-flex justify-content-end\">
                <a href=\"";
            // line 9
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-dark m-3\">Log Out</a>
            </div>
        ";
        }
        // line 12
        echo "    </div>

    ";
        // line 14
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 15
            echo "        <div class=\"d-flex justify-content-center\">
            <a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    ";
        }
        // line 19
        echo "
    ";
        // line 21
        echo "    ";
        if ((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "    <form method=\"post\">
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 24
                echo "            <div class=\"poll-block container\">
                <p class=\"poll-title text-center\"> ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "</p>
                <hr>
                ";
                // line 27
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", [], "any", false, false, false, 27));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 28
                    echo "                    <input type=\"radio\" id=\"answer-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" class=\"checkbox-round\" name=\"answer-user-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "id", [], "any", false, false, false, 28), "html", null, true);
                    echo "\" required>
                    <label for=\"answer-";
                    // line 29
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" class=\"label-text ml-3\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "answer", [], "any", false, false, false, 29), "html", null, true);
                    echo "</label><br>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "
        ";
            // line 35
            echo "            ";
            // line 36
            echo "        ";
            // line 37
            echo "        <div class=\"d-flex justify-content-center\">
            <button class=\"btn btn-dark btn-block col-2 anton-font\" type=\"submit\">
                Next
            </button>
        </div>
    </form>
     ";
        } else {
            // line 44
            echo "         <p class=\"text-center text-danger\">No questions yet</p>
    ";
        }
        // line 46
        echo "

    ";
        // line 49
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "poll/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 49,  188 => 46,  184 => 44,  175 => 37,  173 => 36,  171 => 35,  168 => 33,  161 => 31,  151 => 29,  142 => 28,  138 => 27,  133 => 25,  130 => 24,  126 => 23,  123 => 22,  120 => 21,  117 => 19,  111 => 16,  108 => 15,  106 => 14,  102 => 12,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Poll{% endblock %}

{% block body %}
    <div class=\"header bg-dark \">
        {% if is_granted('ROLE_USER') %}
            <div class=\"d-flex justify-content-end\">
                <a href=\"{{ path('app_logout') }}\" class=\"btn btn-dark m-3\">Log Out</a>
            </div>
        {% endif %}
    </div>

    {% if is_granted('ROLE_ADMIN') %}
        <div class=\"d-flex justify-content-center\">
            <a href=\"{{ path('admin') }}\" class=\"admin-route text-dark  anton-font text-center mt-4\">Admin Panel</a><br />
        </div>
    {% endif %}

    {# Poll Form #}
    {% if questions %}
    <form method=\"post\">
        {% for question in questions %}
            <div class=\"poll-block container\">
                <p class=\"poll-title text-center\"> {{ question.title }}</p>
                <hr>
                {% for answer in question.answers %}
                    <input type=\"radio\" id=\"answer-{{ answer.id }}\" class=\"checkbox-round\" name=\"answer-user-{{ question.id }}\" value=\"{{ answer.id }}\" required>
                    <label for=\"answer-{{ question.id }}\" class=\"label-text ml-3\">{{ answer.answer }}</label><br>
                {% endfor %}
            </div>
        {% endfor %}

        {#<div class=\"navigation\">#}
            {#{{ knp_pagination_render(questions) }}#}
        {#</div>#}
        <div class=\"d-flex justify-content-center\">
            <button class=\"btn btn-dark btn-block col-2 anton-font\" type=\"submit\">
                Next
            </button>
        </div>
    </form>
     {% else %}
         <p class=\"text-center text-danger\">No questions yet</p>
    {% endif %}


    {# Link for result #}
    {#<a href=\"{{ path('showResults') }}\">Poll Results</a>#}
{% endblock %}", "poll/index.html.twig", "/var/www/home30/templates/poll/index.html.twig");
    }
}
