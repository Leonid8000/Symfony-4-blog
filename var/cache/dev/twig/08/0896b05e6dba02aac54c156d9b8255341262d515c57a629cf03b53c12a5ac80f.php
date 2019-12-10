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

/* base.html.twig */
class __TwigTemplate_d7ca3598a53973627c9182682f76d000441aeeca5bbcf15e032f294f6a72e3b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta content=\"text/html\" charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" >
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"Symfony 4 CRUD\">
    <meta name=\"author\" content=\"Leonid Perenesiy\">
    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "</head>
<body>
";
        // line 20
        $this->displayBlock('body', $context, $blocks);
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
        <link href=\"https://fonts.googleapis.com/css?family=Anton|Lobster|Playfair+Display&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap\" rel=\"stylesheet\">
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Asap|Maven+Pro|Raleway|Red+Hat+Display&display=swap\" rel=\"stylesheet\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
    <script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js\"></script>
    <script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/circletype.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>


    <script>
//        let rule = CSSRulePlugin.getRule('.first-span:after');

//        gsap.from('.anim1', { stagger: 0.7});
//        gsap.to(rule, { cssRule: {scaleY: 0}, duration:1});
        gsap.from('.first-img', {opacity:0, duration: 1, y: -50, delay:1.3, ease: Power1.easeOut});
        gsap.from('.first-h1', {opacity:0, duration: 1, y: 30, delay:1.1, ease: Power2.easeOut});
        gsap.from('.first-p', {opacity:0, duration: 1, y: 30, delay:1.2, ease: Power2.easeOut});
//        gsap.from('.third-img', {opacity:0, delay:1.2, scale:0, ease: Power2.easeOut});

let tl = new TimelineMax({onUpdate:updatePercentage});
const controller = new ScrollMagic.Controller();
tl.from('.second-content', .5, {x: 200, opacity: 0});
tl.from('.second-img', 1, {x: 100, opacity: 0});
tl.from('.second-hr', 1, {width:0}, '=-.5');

const scene = new ScrollMagic.Scene({
    triggerElement: '.second-post',
    triggerHook: 'onLeave',
    duration: '100%'
})
        .setPin('.second-post')
        .setTween(tl)
            .addTo(controller);

function updatePercentage(){
    tl.progress();
    console.log(tl.progress());
}
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 31,  179 => 30,  175 => 29,  164 => 22,  154 => 21,  136 => 20,  120 => 12,  116 => 11,  111 => 10,  101 => 9,  82 => 6,  70 => 66,  68 => 21,  66 => 20,  62 => 18,  60 => 9,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta content=\"text/html\" charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" >
    <title>{% block title %}Welcome!{% endblock %}</title>
    <meta name=\"description\" content=\"Symfony 4 CRUD\">
    <meta name=\"author\" content=\"Leonid Perenesiy\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('css/style.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\">
        <link href=\"https://fonts.googleapis.com/css?family=Anton|Lobster|Playfair+Display&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Abril+Fatface&display=swap\" rel=\"stylesheet\">
        <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Asap|Maven+Pro|Raleway|Red+Hat+Display&display=swap\" rel=\"stylesheet\">
    {% endblock %}
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\" crossorigin=\"anonymous\"></script>
    <script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/gsap-latest-beta.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TimelineMax.min.js\"></script>
    <script src=\"https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/CSSRulePlugin3.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js\"></script>
    <script src=\"{{ asset('js/circletype.min.js') }}\"></script>
    <script src=\"{{ asset('js/script.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>


    <script>
//        let rule = CSSRulePlugin.getRule('.first-span:after');

//        gsap.from('.anim1', { stagger: 0.7});
//        gsap.to(rule, { cssRule: {scaleY: 0}, duration:1});
        gsap.from('.first-img', {opacity:0, duration: 1, y: -50, delay:1.3, ease: Power1.easeOut});
        gsap.from('.first-h1', {opacity:0, duration: 1, y: 30, delay:1.1, ease: Power2.easeOut});
        gsap.from('.first-p', {opacity:0, duration: 1, y: 30, delay:1.2, ease: Power2.easeOut});
//        gsap.from('.third-img', {opacity:0, delay:1.2, scale:0, ease: Power2.easeOut});

let tl = new TimelineMax({onUpdate:updatePercentage});
const controller = new ScrollMagic.Controller();
tl.from('.second-content', .5, {x: 200, opacity: 0});
tl.from('.second-img', 1, {x: 100, opacity: 0});
tl.from('.second-hr', 1, {width:0}, '=-.5');

const scene = new ScrollMagic.Scene({
    triggerElement: '.second-post',
    triggerHook: 'onLeave',
    duration: '100%'
})
        .setPin('.second-post')
        .setTween(tl)
            .addTo(controller);

function updatePercentage(){
    tl.progress();
    console.log(tl.progress());
}
    </script>

{% endblock %}
</body>
</html>
", "base.html.twig", "/var/www/Symfony-4-blog/templates/base.html.twig");
    }
}
