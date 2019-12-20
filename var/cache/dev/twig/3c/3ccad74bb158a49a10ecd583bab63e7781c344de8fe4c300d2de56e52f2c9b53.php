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

/* main/layouts/footer.html.twig */
class __TwigTemplate_cfc21f12f891a11b7973195b5df43294097bd113873b18f7d15ad23a6b53a114 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/layouts/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/layouts/footer.html.twig"));

        // line 1
        echo "<footer class=\"mt-2\">
    <section class=\"scroll-section\">
        <div class=\"scroll text1\" >
            <div>
                <span class=\"anton-font\">News</span><span class=\"text-light anton-font\">Blog</span>
                <span>Copyright © 2019 Leonid Web technology corporation. All rights reserved.</span>
                <span class=\"anton-font\">News</span><span class=\"text-light anton-font\">Blog</span>
                <span>Copyright © 2019 Leonid Web technology corporation. All rights reserved.</span>
                <span class=\"anton-font\">News</span><span class=\"text-light anton-font\">Blog</span>
                <span>Copyright © 2019 Leonid Web technology corporation. All rights reserved.</span>
            </div>

        </div>
    </section>
</footer>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/layouts/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"mt-2\">
    <section class=\"scroll-section\">
        <div class=\"scroll text1\" >
            <div>
                <span class=\"anton-font\">News</span><span class=\"text-light anton-font\">Blog</span>
                <span>Copyright © 2019 Leonid Web technology corporation. All rights reserved.</span>
                <span class=\"anton-font\">News</span><span class=\"text-light anton-font\">Blog</span>
                <span>Copyright © 2019 Leonid Web technology corporation. All rights reserved.</span>
                <span class=\"anton-font\">News</span><span class=\"text-light anton-font\">Blog</span>
                <span>Copyright © 2019 Leonid Web technology corporation. All rights reserved.</span>
            </div>

        </div>
    </section>
</footer>




", "main/layouts/footer.html.twig", "/var/www/Symfony-4-blog/templates/main/layouts/footer.html.twig");
    }
}
