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
class __TwigTemplate_b6d83ce5ea93e94846e21d93cfdd7a2b86f3bbbdeac59f29b0aef6f8d10c24fe extends \Twig\Template
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
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getLogin.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<div class=\"registracija\">

    <form action=\"postlogin\" method=\"post\">


        <div>

            <label for=\"input_username\" >Username:</label>
            <input type=\"text\" id=\"input_username\" name=\"log_username\" required class=\"form\"
                   placeholder=\"Unesite korisnicko ime\">
        </div>
        <br>

        <div>
            <label for=\"input_password\" >Password:</label>
            <input type=\"text\" id=\"input_password\" name=\"log_password\" required class=\"form\"
                   placeholder=\"Unesite lozinku\">
        </div>

        <br>

        <div>
            <button type=\"submit\" class=\"form\" id=\"button\">
                Login
            </button>
        </div>

    </form>



</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 37
        echo "
";
    }

    // line 39
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
        return array (  93 => 39,  88 => 37,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getLogin.html", "D:\\wamp64\\www\\aura1\\views\\Main\\getLogin.html");
    }
}
