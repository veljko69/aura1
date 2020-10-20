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

/* Product/showKorpa.html */
class __TwigTemplate_ccf4c3ad901a7094d16940fb362dfb1456f73fcc943624b5f1fadcb0110d5336 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Product/showKorpa.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
      integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>

<title>Korpa</title>
<div class=\"container-fluid\">
    <hr>
    <div class=\"col-md-12\">
        <h3 class=\"text-center\">Proizvodi u korpi</h3>
    </div>
    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">

    <div class=\"container-fluid row border-primary\">
        <table class=\"table  col-md-8 border-danger\">
            <thead>
            <tr>
                <th></th>
                <th>PROIZVOD</th>
                <th>CIJENA</th>
                <th>KOLICINA</th>
                <th>UKUPNO</th>


            </tr>
            </thead>
            <tbody>


            <tr>


                <td><img src=\"../assets/img/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 40), "html", null, true);
        echo ".jpg\" height=\"auto\" width=\"120px\"
                         alt=\" ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 41), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 41), "html", null, true);
        echo "\"></td>
                <td><h4 style=\"margin-top: 10px\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 42), "html", null, true);
        echo "</h4><br>

                    Sifra : ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 44), "html", null, true);
        echo "<br>
                    Boja :";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 45), "html", null, true);
        echo "

                    <!--            <td><a href=\"http://localhost/aura1/admin/";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 47), "html", null, true);
        echo "/edit\" class=\"badge badge-primary p-2\">Uredi</a>-->
                    <!--            </td>-->
                    <a href=\"http://localhost/aura1/admin/";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 49), "html", null, true);
        echo "/delete\"
                       class=\"badge badge-light p-2\">Izbaci iz korpe</a>
                </td>

                <td>
                    <h5 style=\"margin-top: 10px ; margin-right: 30px\"> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 54), "html", null, true);
        echo " </h5> <br>
                </td>
                <td>
                    Izaberi kolicinu: <label>
                    <input type=\"number\" min=\"1\" step=\"1\" value=\"1\" name=\"product_kolicina\" id=\"product_kolicina\">
                </label>
                </td>
                <td>
                    <h3>U
                        kupno</h3>
                </td>
            </tr>

            </tbody>
        </table>
<div class=\"col-1\">

</div>
        <div class=\"col-3 border-d  card \">
            <div class=\"bg-light\">

                <h5 class=\"d-flex justify-content-center  card-header \">MEDUZBIR</h5>

            </div>
            <div class=\"row p-2 mt-2\">
                <h4 class=\"d-flex justify-content-start col-6\"> SUMA: </h4>
                <h4 class=\"d-flex justify-content-end col-6\"> ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 80), "html", null, true);
        echo " km</h4><br>

            </div>
            <div class=\"row p-2 mt-2\">
                <h4 class=\"d-flex justify-content-start col-6\"> DOSTAVA: </h4>
                <h4 class=\"d-flex justify-content-end col-6\"> 7.00 km</h4><br>

            </div>


        </div>

    </div>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 96
        echo "
";
    }

    // line 98
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Korpa";
    }

    public function getTemplateName()
    {
        return "Product/showKorpa.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 98,  176 => 96,  157 => 80,  128 => 54,  120 => 49,  115 => 47,  110 => 45,  106 => 44,  101 => 42,  95 => 41,  91 => 40,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showKorpa.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showKorpa.html");
    }
}
