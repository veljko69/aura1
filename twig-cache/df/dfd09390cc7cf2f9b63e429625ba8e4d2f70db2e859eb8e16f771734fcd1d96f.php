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

/* Main/admin.html */
class __TwigTemplate_90502aa1a28e8cf10c79a07d20083bc4aa8abec8c1acf34ab2e652c479654356 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'naslov' => [$this, 'block_naslov'],
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
        <div class=\"col-md-12\">
            <h3 class=\"text-info \"> Dodaj novi prizvod</h3>
            <form action=\"admin/add\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label>
                        <input type=\"text\" name=\"product_name\" class=\"form-control\" placeholder=\"Upisi naziv proizvoda\"
                               required>
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_price\" class=\"form-control\"
                               placeholder=\"Upisi cijenu proizvoda\" required>
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_size\" class=\"form-control\"
                               placeholder=\"Upisi velicinu proizvoda\">
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_gender\" class=\"form-control\" placeholder=\"Upisi pol proizvoda\"
                               required>
                    </label><br>
                    <label>
                        <input type=\"text\" name=\"product_code\" class=\"form-control\"
                               placeholder=\"Upisi  sifru proizvoda\">
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_color\" class=\"form-control\" placeholder=\"Upisi boju proizvoda\">
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_img\" class=\"form-control\" placeholder=\"Upisi sliku proizvoda\">
                    </label>
                    <div class=\"form-group\">
                        <input type=\"submit\" name=\"add\" class=\"btn btn-success btn-block\" value=\"Dodaj proizvod\">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <hr>
    <div class=\"col-md-12\">
        <h3 class=\"text-center\">Proizvodi</h3>
    </div>
    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">


    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAZIV PROIZVODA</th>
            <th>CIJENA</th>
            <th>VEL.</th>
            <th>POL</th>
            <th>SIFRA</th>
            <th>BOJA</th>
            <th>SLIKA</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 75
            echo "
        <tr>


            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
            <td> ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
            <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "velicina", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
            <td> ";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
            <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
            <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
            <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 86), "html", null, true);
            echo ".jpg</td>
            <td><a href=\"http://localhost/aura1/admin/";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 87), "html", null, true);
            echo "/edit\" class=\"badge badge-primary p-2\">Uredi</a></td>
            <td><a href=\"http://localhost/aura1/admin/";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 88), "html", null, true);
            echo "/delete\" class=\"badge badge-danger p-2\">Izbrisi</a>
            </td>

        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "        </tbody>
    </table>

</div>

";
        // line 99
        $this->displayBlock('naslov', $context, $blocks);
        // line 100
        echo "

";
    }

    // line 99
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin";
    }

    public function getTemplateName()
    {
        return "Main/admin.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 99,  180 => 100,  178 => 99,  171 => 94,  159 => 88,  155 => 87,  151 => 86,  147 => 85,  143 => 84,  139 => 83,  135 => 82,  131 => 81,  127 => 80,  123 => 79,  117 => 75,  113 => 74,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/admin.html", "C:\\wamp64\\www\\aura1\\views\\Main\\admin.html");
    }
}
