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

/* Main/getRegister.html */
class __TwigTemplate_4a41f3a424405fd2eabde7ff2cd895c3a343e94b2652f181ea8140f9f5201fb4 extends \Twig\Template
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
        // line 2
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Main/getRegister.html", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        ob_start(function () { return ''; });
        // line 5
        echo "
    <div class=\"registracija\">

        <form action=\"http://localhost/aura1/postregister\" method=\"POST\">

            <div>
                <label for=\"input_email\" >E-mail:</label>
                <input type=\"email\" id=\"input_email\" name=\"reg_email\" required class=\"form\"
                       placeholder=\"Unesite svoju E-mail adresu o ovo polje\">
            </div>
            <br>
            <div>

                <label for=\"input_forename\" >Forename:</label>
                <input type=\"text\" id=\"input_forename\" name=\"reg_forename\" required class=\"form\"
                       placeholder=\"Unesite svoje ime\">
            </div>
            <br>

            <div>

                <label for=\"input_surname\" >Surname:</label>
                <input type=\"text\" id=\"input_surname\" name=\"reg_surname\" required class=\"form\"
                       placeholder=\"Unesite svoje prezime \">
            </div>
            <br>

            <div>

                <label for=\"input_username\" >Username:</label>
                <input type=\"text\" id=\"input_username\" name=\"reg_username\" required class=\"form\"
                       placeholder=\"Unesite zeljeno korisnicko ime\">
            </div>
            <br>

            <div>
                <label for=\"input_password_1\" >Password:</label>
                <input type=\"password\" id=\"input_password_1\" name=\"reg_password1\" required class=\"form\"
                       placeholder=\"Unesite zeljenu lozinku\">
            </div>
            <br>

            <div>

                <label for=\"input_password_2\" >Repeat your password:</label>
                <input type=\"text\" id=\"input_password_2\" name=\"reg_password2\" required class=\"form\"
                       placeholder=\"Unesite zeljenu lozinku jos jednom\">

            </div>
            <br>

            <div>
                <button type=\"submit\" class=\"form\" id=\"button\">
                    Register
                </button>
            </div>

        </form>



    </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 69
        echo "
";
    }

    // line 71
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Registracija korisnika";
    }

    public function getTemplateName()
    {
        return "Main/getRegister.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 71,  119 => 69,  53 => 5,  51 => 4,  47 => 3,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getRegister.html", "C:\\wamp64\\www\\aura1\\views\\Main\\getRegister.html");
    }
}
