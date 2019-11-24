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

/* admin/layouts/sidebar.html.twig */
class __TwigTemplate_a679d02f894fd4f5acf5d6648eb4598c317f20cfc5be79317f21c78f3f3d82f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layouts/sidebar.html.twig"));

        // line 1
        echo "<div class=\"sidebar \">
    <!--Accordion wrapper-->
    <div class=\"accordion md-accordion accordion-4\" id=\"accordionEx2\" role=\"tablist\" aria-multiselectable=\"true\">
        <!-- Accordion card -->
        <div class=\"card\">
";
        // line 7
        echo "            <div class=\"card-header z-depth-1 teal lighten-3\" role=\"tab\" id=\"heading11\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse11\"
                   aria-expanded=\"false\" aria-controls=\"collapse11\">
                    <p class=\"mb-0 text-center font-weight-bold text-uppercase\">
                        Post
                    </p>
                </a>
            </div>

            <div id=\"collapse11\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading11\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("posts");
        echo "\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create/post");
        echo "\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
";
        // line 25
        echo "        <div class=\"card\">
            <div class=\"card-header z-depth-1 teal lighten-2\" role=\"tab\" id=\"heading12\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse12\"
                   aria-expanded=\"false\" aria-controls=\"collapse12\">
                    <p class=\"mb-0 black-text text-center font-weight-bold text-uppercase\">
                        Category
                    </p>
                </a>
            </div>

            <div id=\"collapse12\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading12\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category");
        echo "\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category/create");
        echo "\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
";
        // line 44
        echo "        <div class=\"card\">
            <div class=\"card-header z-depth-1 teal lighten-2\" role=\"tab\" id=\"heading12\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse13\"
                   aria-expanded=\"false\" aria-controls=\"collapse12\">
                    <p class=\"mb-0 black-text text-center font-weight-bold text-uppercase\">
                        Tag
                    </p>
                </a>
            </div>

            <div id=\"collapse13\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading12\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tags");
        echo "\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag/create");
        echo "\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
        ";
        // line 63
        echo "            ";
        // line 64
        echo "               ";
        // line 65
        echo "                ";
        // line 66
        echo "                    ";
        // line 67
        echo "                ";
        // line 68
        echo "            ";
        // line 69
        echo "        ";
        // line 70
        echo "
        ";
        // line 72
        echo "             ";
        // line 73
        echo "            ";
        // line 74
        echo "                ";
        // line 75
        echo "                ";
        // line 76
        echo "            ";
        // line 77
        echo "        ";
        // line 78
        echo "    ";
        // line 79
        echo "
        <!-- Accordion card -->
        </div>
        <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "admin/layouts/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 79,  156 => 78,  154 => 77,  152 => 76,  150 => 75,  148 => 74,  146 => 73,  144 => 72,  141 => 70,  139 => 69,  137 => 68,  135 => 67,  133 => 66,  131 => 65,  129 => 64,  127 => 63,  120 => 58,  116 => 57,  101 => 44,  94 => 39,  90 => 38,  75 => 25,  68 => 20,  64 => 19,  50 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"sidebar \">
    <!--Accordion wrapper-->
    <div class=\"accordion md-accordion accordion-4\" id=\"accordionEx2\" role=\"tablist\" aria-multiselectable=\"true\">
        <!-- Accordion card -->
        <div class=\"card\">
{# Posts #}
            <div class=\"card-header z-depth-1 teal lighten-3\" role=\"tab\" id=\"heading11\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse11\"
                   aria-expanded=\"false\" aria-controls=\"collapse11\">
                    <p class=\"mb-0 text-center font-weight-bold text-uppercase\">
                        Post
                    </p>
                </a>
            </div>

            <div id=\"collapse11\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading11\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"{{ path('posts') }}\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"{{ path('create/post') }}\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
{# Category #}
        <div class=\"card\">
            <div class=\"card-header z-depth-1 teal lighten-2\" role=\"tab\" id=\"heading12\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse12\"
                   aria-expanded=\"false\" aria-controls=\"collapse12\">
                    <p class=\"mb-0 black-text text-center font-weight-bold text-uppercase\">
                        Category
                    </p>
                </a>
            </div>

            <div id=\"collapse12\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading12\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"{{ path('category') }}\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"{{ path('category/create') }}\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
{# Tag #}
        <div class=\"card\">
            <div class=\"card-header z-depth-1 teal lighten-2\" role=\"tab\" id=\"heading12\">
                <a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx2\" href=\"#collapse13\"
                   aria-expanded=\"false\" aria-controls=\"collapse12\">
                    <p class=\"mb-0 black-text text-center font-weight-bold text-uppercase\">
                        Tag
                    </p>
                </a>
            </div>

            <div id=\"collapse13\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading12\"
                 data-parent=\"#accordionEx2\">
                <div class=\"card-body rgba-teal-strong white-text\">
                    <a href=\"{{ path('tags') }}\" class=\"text-center\"><p>Show</p></a>
                    <a href=\"{{ path('tag/create') }}\" class=\"text-center\"><p>Create</p></a>
                </div>
            </div>
        </div>
        {#<div class=\"card-header z-depth-1 teal lighten-3\" role=\"tab\" id=\"heading11\">#}
            {#<a class=\"collapsed\" data-toggle=\"collapse\" data-parent=\"#accordionEx3\" href=\"#collapse22\"#}
               {#aria-expanded=\"false\" aria-controls=\"collapse11\">#}
                {#<p class=\"mb-0 text-center font-weight-bold text-uppercase\">#}
                    {#Tag#}
                {#</p>#}
            {#</a>#}
        {#</div>#}

        {#<div id=\"collapse22\" class=\"collapse\" role=\"tabpanel\" aria-labelledby=\"heading11\"#}
             {#data-parent=\"#accordionEx3\">#}
            {#<div class=\"card-body rgba-teal-strong white-text\">#}
                {#<a href=\"{{ path('tags') }}\" class=\"text-center\"><p>Show</p></a>#}
                {#<a href=\"{{ path('create/post') }}\" class=\"text-center\"><p>Create</p></a>#}
            {#</div>#}
        {#</div>#}
    {#</div>#}

        <!-- Accordion card -->
        </div>
        <!-- Accordion card -->
    </div>
    <!--/.Accordion wrapper-->
</div>
", "admin/layouts/sidebar.html.twig", "/var/www/Symfony-4-blog/templates/admin/layouts/sidebar.html.twig");
    }
}
