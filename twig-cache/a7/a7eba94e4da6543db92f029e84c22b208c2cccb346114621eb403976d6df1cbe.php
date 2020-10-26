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

/* Main/getLogin.html */
class __TwigTemplate_c5d2ef82431b8ebab5906acba77d57801be5fda5f0bd51a5d1b36547523d0d67 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
            'naslov' => [$this, 'block_naslov'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "_global/index1.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/getLogin.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<!--<div class=\"registracija\">-->

<!--    <form action=\"postlogin\" method=\"post\">-->


<!--        <div>-->

<!--            <label for=\"input_username\" >Username:</label>-->
<!--            <input type=\"text\" id=\"input_username\" name=\"log_username\" required class=\"form\"-->
<!--                   placeholder=\"Unesite korisnicko ime\">-->
<!--        </div>-->
<!--        <br>-->

<!--        <div>-->
<!--            <label for=\"input_password\" >Password:</label>-->
<!--            <input type=\"text\" id=\"input_password\" name=\"log_password\" required class=\"form\"-->
<!--                   placeholder=\"Unesite lozinku\">-->
<!--        </div>-->

<!--        <br>-->

<!--        <div>-->
<!--            <button type=\"submit\" class=\"form\" id=\"button\">-->
<!--                Login-->
<!--            </button>-->
<!--        </div>-->

<!--    </form>-->

<form action=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/postlogin\" method=\"post\" class=\"container-fluid col-lg-4 mt-5\">
    <div class=\"form-group \">
        <label for=\"input_username\">Username</label>
        <input type=\"text\" class=\"form-control\" id=\"input_username\" name=\"log_username\" required placeholder=\"Unesite vase korisnicko ime\">

    </div>
    <div class=\"form-group\">
        <label for=\"input_password\">Password</label>
        <input type=\"password\" class=\"form-control\" id=\"input_password\" name=\"log_password\" required placeholder=\"Unesite lozinku\">
    </div>
<!--    <div class=\"form-check\">-->
<!--        <input type=\"checkbox\" class=\"form-check-input\" id=\"exampleCheck1\">-->
<!--        <label class=\"form-check-label\" for=\"exampleCheck1\">Check me out</label>-->
<!--    </div>-->
    <button type=\"submit\" id=\"button\" class=\"btn badge-primary mt-3 w-100\">Submit</button>
</form>


";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 52
        echo "
";
    }

    // line 54
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Prijava korisnika";
    }

    public function getTemplateName()
    {
        return "Main/getLogin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 54,  106 => 52,  84 => 33,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getLogin.html", "C:\\wamp64\\www\\aura1\\views\\Main\\getLogin.html");
    }
}