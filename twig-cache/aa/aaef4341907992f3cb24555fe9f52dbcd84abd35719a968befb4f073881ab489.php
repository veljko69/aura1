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
        <div class=\"col-md-6  pl-5  m-auto\">
            <h3 class=\"text-info  text-center  mb-2\"> Uredi proizvod</h3>
            <form action=\"/aura1/admin/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 17), "html", null, true);
        echo "/edit\" method=\"POST\" enctype=\"multipart/form-data\" >
                <div class=\"form-group\">

                    <label>Naziv proizvoda:
                        <input type=\"text\" name=\"product_name\" class=\"form-control\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 21), "html", null, true);
        echo "\">
                    </label>

                    <label>Cijena:
                        <input type=\"text\" name=\"product_price\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 25), "html", null, true);
        echo "  \"  >
                    </label>

                   <label>Velicina:
                        <input type=\"text\" name=\"product_size\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "velicina", [], "any", false, false, false, 29), "html", null, true);
        echo "\">
                    </label>

                    <label>Pol:
                        <input type=\"text\" name=\"product_gender\" class=\"form-control\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 33), "html", null, true);
        echo "\">
                    </label>


                    <label>Sifra:
                        <input type=\"text\" name=\"product_code\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                    </label>

                    <label>Boja:
                        <input type=\"text\" name=\"product_color\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    </label>

                    <label>Slika:
                        <input type=\"text\" name=\"product_img\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                    </label>

<!--                    <label>Opis:-->
<!--                        <input type=\"text\" name=\"product_description\" class=\"form-control\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "opis", [], "any", false, false, false, 50), "html", null, true);
        echo "\">-->
<!--                    </label>-->

                    <label>Materijal:
                        <input type=\"text\" name=\"product_materijal\" class=\"form-control\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "materijal", [], "any", false, false, false, 54), "html", null, true);
        echo "\">
                    </label>

                    <div class=\"form-group\">
                        <input type=\"submit\" name=\"add\" class=\"btn btn-success btn-block\" value=\"Uredi\">
                    </div>
                </div>
            </form>
        </div>
    </div>



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
        return array (  119 => 54,  112 => 50,  105 => 46,  98 => 42,  91 => 38,  83 => 33,  76 => 29,  69 => 25,  62 => 21,  55 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/getEdit.html", "D:\\wamp64\\www\\aura1\\views\\Product\\getEdit.html");
    }
}
