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

/* admin/layouts/header.html.twig */
class __TwigTemplate_7264e4f1d6d1d3394635b1dc585e7829eecdeb59454e415cb11999d30a0c3eca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/header.html.twig"));

        // line 1
        echo "<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-dark\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li>
                    <p class=\"nav-link text-light logo\">Admin<span>Panel</span></p>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-light\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-light\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Blog <span class=\"sr-only\">(current)</span></a>
                </li>

                ";
        // line 19
        echo "                <li class=\"nav-item\">
                    <a class=\"nav-link text-light header-navigation\" href=\"#\">Create New</a>
                </li>

                ";
        // line 23
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                    </li>
                ";
        }
        // line 28
        echo "            </ul>
        </div>
    </nav>
</header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/layouts/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 28,  79 => 25,  76 => 24,  74 => 23,  68 => 19,  62 => 15,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-dark\">
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
            <ul class=\"navbar-nav\">
                <li>
                    <p class=\"nav-link text-light logo\">Admin<span>Panel</span></p>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-light\" href=\"{{ path('admin') }}\">Home <span class=\"sr-only\">(current)</span></a>
                </li>
                <li class=\"nav-item active\">
                    <a class=\"nav-link text-light\" href=\"{{ path('index') }}\">Blog <span class=\"sr-only\">(current)</span></a>
                </li>

                {# Show small screen #}
                <li class=\"nav-item\">
                    <a class=\"nav-link text-light header-navigation\" href=\"#\">Create New</a>
                </li>

                {% if is_granted('ROLE_ADMIN')  %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-light\" href=\"{{ path('app_logout') }}\">Logout</a>
                    </li>
                {% endif %}
            </ul>
        </div>
    </nav>
</header>", "admin/layouts/header.html.twig", "/var/www/Symfony-4-blog/templates/admin/layouts/header.html.twig");
    }
}
