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

/* Main/getSlanje.html */
class __TwigTemplate_d5cfa18f83b54c71108eff03d18558bac6822ae997ec22b51df6ec44b44fb32a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/getSlanje.html", 1);
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
        echo "/postslanje\" method=\"POST\" class=\"form m-1 row mt-2 \">
    <div class=\"form col-md-4 \">

        <div class=\"m-5 d-flex justify-content-center form-group\">
            <h5>PODACI KUPCA</h5>
        </div>
        <p class=\" \">Unesite licne podatke i broj telefona kako bi Vam narudžba bila uspješno
            dostavljena.</p>


        <div class=\"form-group  \">

            <label for=\"input_forename\">Ime:</label>
            <input type=\"text\" id=\"input_forename\" name=\"slanje_forename\" required class=\"form-control\">
        </div>


        <div class=\"form-group  \">

            <label for=\"input_surname\">Prezime:</label>
            <input type=\"text\" id=\"input_surname\" name=\"slanje_surname\" required class=\"form-control\">

        </div>


        <div class=\"form-group \">

            <label for=\"input_telefon\">Telefon:</label>
            <input type=\"text\" id=\"input_telefon\" name=\"slanje_telefon\" required class=\"form-control\">

        </div>

        <div class=\"form-group \">
            <label for=\"input_email\">E-mail:</label>
            <input type=\"email\" id=\"input_email\" name=\"slanje_email\" required class=\"form-control\">

        </div>

    </div>

    <div class=\"form col-md-4 \">
        <div class=\"m-5 d-flex justify-content-center slanje-group\">
            <h5>ADRESA KUPCA</h5>
        </div>


        <p class=\" form-group  \">Unesite podatke vezane za Vašu adresu kako bi Vam narudžba bila uspješno
            dostavljena.</p>

        <div class=\"form-group \">
            <label for=\"input_ulica\">Ulica i broj:</label>
            <input type=\"text\" id=\"input_ulica\" name=\"slanje_ulica\" required class=\"form-control\">

        </div>


        <div class=\"form-group\">
            <label for=\"input_grad\">Grad:</label>
            <input type=\"text\" id=\"input_grad\" name=\"slanje_grad\" required class=\"form-control\">

        </div>

        <div class=\"form-group\">

            <label for=\"input_p_broj\">Postanski broj:</label>
            <input type=\"text\" id=\"input_p_broj\" name=\"slanje_postanskibroj\" required class=\"form-control\">


        </div>

        <div class=\"form-group\">

            <label for=\"input_drzava\">Drzava:</label>
            <input type=\"text\" id=\"input_drzava\" value=\"Bosna i Hercegovina\" name=\"slanje_drzava\" required
                   class=\"form-control\">


        </div>
    </div>
    <div class=\"form col-md-4 \">


        <div class=\"m-5 d-flex justify-content-center form-group\">
            <h5>OPCIJE PLACANJA</h5>
        </div>

        <p class=\"form-group\">Izaberite način plaćanja Vaše narudžbe</p>

        <div class=\" form-group input-group\">

            <div class=\"input-group-text\">
                <input type=\"radio\">
            </div>
            <input type=\"text\" class=\"form-control\" value=\"Placanje pouzecem\" readonly>
        </div>


        <div class=\"m-5 d-flex justify-content-center form-group\">
            <h5>OPCIJE DOSTAVE</h5>
        </div>
        <p>Zelim da mi se proizvos isporuci na navedenu adresu i slazem sa svim uslovima isporuke</p>


        <button type=\"submit\" class=\"btn btn-success w-100 \" style=\"background-color: #437831\" id=\"button\">
            Potvrdi
        </button>


    </div>
</form>


";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 119
        echo "
";
    }

    // line 121
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Podaci";
    }

    public function getTemplateName()
    {
        return "Main/getSlanje.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 121,  173 => 119,  57 => 6,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/getSlanje.html", "C:\\wamp64\\www\\aura1\\views\\Main\\getSlanje.html");
    }
}
