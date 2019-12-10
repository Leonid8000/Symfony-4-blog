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

/* main/layouts/header.html.twig */
class __TwigTemplate_8e4e534ed7d8ff1fa8fa241458eb4a3ea3c1edd8ca2391351fcec07be2b0b7b4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/layouts/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/layouts/header.html.twig"));

        // line 1
        echo " <nav class=\"navbar navbar-expand-lg navbar-dark \" id=\"nav\">
        <button class=\"navbar-toggler bg-dark\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav \">

                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\"><h3 class=\"text-dark ml-3 text-left home-logo\">NEWS<span class=\"yellow-text\">BLOG</span></h3> <span class=\"sr-only\">(current)</span></a>
                </li>

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 13
            echo "                    <li class=\"nav-item nav-category-li\">
                        <a class=\"nav-link nav-category text-dark raleway-font ml-3\" href=\"/main/show-category/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                            ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 15), "html", null, true);
            echo "
                            <hr class=\"red-hr\">
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </div>
        ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 23
            echo "            <div class=\"d-flex justify-content-end log-out\">
                <a href=\"";
            // line 24
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"login-link m-3\">Log Out</a>
            </div>
        ";
        } else {
            // line 27
            echo "            <li class=\"d-flex justify-content-end log-out\">
                <a href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"login-link mr-2\">Login</a>
                <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\" class=\"sign-up-link\">Sign Up</a>
            </li>
        ";
        }
        // line 32
        echo "</nav>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/layouts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 32,  103 => 29,  99 => 28,  96 => 27,  90 => 24,  87 => 23,  85 => 22,  81 => 20,  70 => 15,  66 => 14,  63 => 13,  59 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" <nav class=\"navbar navbar-expand-lg navbar-dark \" id=\"nav\">
        <button class=\"navbar-toggler bg-dark\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarText\">
            <ul class=\"navbar-nav \">

                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('index') }}\"><h3 class=\"text-dark ml-3 text-left home-logo\">NEWS<span class=\"yellow-text\">BLOG</span></h3> <span class=\"sr-only\">(current)</span></a>
                </li>

                {% for category in categories %}
                    <li class=\"nav-item nav-category-li\">
                        <a class=\"nav-link nav-category text-dark raleway-font ml-3\" href=\"/main/show-category/{{ category.slug }}\">
                            {{ category.category }}
                            <hr class=\"red-hr\">
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </div>
        {% if is_granted('ROLE_USER') %}
            <div class=\"d-flex justify-content-end log-out\">
                <a href=\"{{ path('app_logout') }}\" class=\"login-link m-3\">Log Out</a>
            </div>
        {% else %}
            <li class=\"d-flex justify-content-end log-out\">
                <a href=\"{{ path('app_login') }}\" class=\"login-link mr-2\">Login</a>
                <a href=\"{{ path('register') }}\" class=\"sign-up-link\">Sign Up</a>
            </li>
        {% endif %}
</nav>

", "main/layouts/header.html.twig", "/var/www/Symfony-4-blog/templates/main/layouts/header.html.twig");
    }
}
