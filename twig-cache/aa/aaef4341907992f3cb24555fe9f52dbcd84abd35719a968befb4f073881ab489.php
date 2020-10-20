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

/* Product/getEdit.html */
class __TwigTemplate_531ed9fe5553a6f217afbb5bff5cb2c11b04eef6b66e18308412ceeaaef85b82 extends \Twig\Template
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
        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
      integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
        integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\"
        integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\"
        crossorigin=\"anonymous\"></script>
<title>Admin</title>


<div class=\"container-fluid\">

    <div class=\"row\">
        <div class=\"col-md-9 pl-5  m-auto\">
            <h3 class=\"text-info  text-center  mb-2\"> Uredi proizvod</h3>
            <form action=\"http://localhost/aura1/admin/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 17), "html", null, true);
        echo "/edit\" method=\"POST\"
                  enctype=\"multipart/form-data\">
                <div class=\"form-group\">

                    <label>Tip proizvoda:
                        <input type=\"text\" name=\"product_tip\" class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tip", [], "any", false, false, false, 22), "html", null, true);
        echo "\">
                    </label>

                    <label>Naziv proizvoda:
                        <input type=\"text\" name=\"product_name\" class=\"form-control\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 26), "html", null, true);
        echo "\">
                    </label>

                    <label>Cijena:
                        <input type=\"text\" name=\"product_price\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 30), "html", null, true);
        echo "  \">
                    </label>

                    <label class=\"\">Velicine:

                        <input type=\"text\" name=\"product_size_v1\" class=\"form-control\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v1", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v2\" class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v2", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v3\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v3", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v4\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v4", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v5\" class=\"form-control\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v5", [], "any", false, false, false, 39), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v6\" class=\"form-control\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v6", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v7\" class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v7", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                        <input type=\"text\" name=\"product_size_v8\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v8", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    </label>

                    <label>Pol:
                        <input type=\"text\" name=\"product_gender\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                    </label>


                    <label>Sifra:
                        <input type=\"text\" name=\"product_code\" class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
                    </label>

                    <label>Boja:
                        <input type=\"text\" name=\"product_color\" class=\"form-control\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
                    </label>

                    <label>Materijal:
                        <input type=\"text\" name=\"product_materijal\" class=\"form-control\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "materijal", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
                    </label>

                    <label>Slika:
                        <input type=\"text\" name=\"product_img\" class=\"form-control\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
                    </label>

                    <!--                    <label>Kolicina:-->
                    <!--                        <input type=\"text\" name=\"product_kolicina\" class=\"form-control\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "kolicina", [], "any", false, false, false, 67), "html", null, true);
        echo "\">-->
                    <!--                    </label>-->

                    <div class=\"form-group\">
                        <input type=\"submit\" name=\"add\" class=\"btn btn-success btn-block\" value=\"Uredi proizvod\">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">
</div>
";
    }

    public function getTemplateName()
    {
        return "Product/getEdit.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 67,  149 => 63,  142 => 59,  135 => 55,  128 => 51,  120 => 46,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  77 => 30,  70 => 26,  63 => 22,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/getEdit.html", "C:\\wamp64\\www\\aura1\\views\\Product\\getEdit.html");
    }
}
