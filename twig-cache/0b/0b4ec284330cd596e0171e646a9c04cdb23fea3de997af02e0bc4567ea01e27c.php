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
class __TwigTemplate_1be4d0e3aa847bed0ae24ecf80a8e8534c8ceb263804c1e096cd088e1ebb7f59 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/getRegister.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "

        <form action=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/postregister\" method=\"POST\" class=\"container-fluid  w-100 col-lg-4 mt-5\">

            <div class=\"form-group \">
                <label for=\"input_email\" >E-mail:</label>
                <input type=\"email\" id=\"input_email\" name=\"reg_email\" required class=\"form-control\"
                       placeholder=\"Unesite svoju E-mail adresu o ovo polje\">
            </div>

            <div class=\"form-group \" >

                <label for=\"input_forename\" >Forename:</label>
                <input type=\"text\" id=\"input_forename\" name=\"reg_forename\" required class=\"form-control\"
                       placeholder=\"Unesite svoje ime\">
            </div>


            <div>

                <label for=\"input_surname\" >Surname:</label>
                <input type=\"text\" id=\"input_surname\" name=\"reg_surname\" required class=\"form-control\"
                       placeholder=\"Unesite svoje prezime \">
            </div>


            <div>

                <label for=\"input_username\" >Username:</label>
                <input type=\"text\" id=\"input_username\" name=\"reg_username\" required class=\"form-control\"
                       placeholder=\"Unesite zeljeno korisnicko ime\">
            </div>


            <div>
                <label for=\"input_password_1\" >Password:</label>
                <input type=\"password\" id=\"input_password_1\" name=\"reg_password1\" required class=\"form-control\"
                       placeholder=\"Unesite zeljenu lozinku\">
            </div>


            <div>

                <label for=\"input_password_2\" >Repeat your password:</label>
                <input type=\"text\" id=\"input_password_2\" name=\"reg_password2\" required class=\"form-control\"
                       placeholder=\"Unesite zeljenu lozinku jos jednom\">

            </div>


            <div>
                <button type=\"submit\" class=\"btn btn-primary mt-3 w-100\" id=\"button\">
                    Register
                </button>
            </div>

        </form>





";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 67
        echo "
";
    }

    // line 69
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
        return array (  126 => 69,  121 => 67,  57 => 6,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getRegister.html", "C:\\wamp64\\www\\aura1\\views\\Main\\getRegister.html");
    }
}
