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
class __TwigTemplate_89ceb171f9c0dce451d0193c4679326607dbf538d05c326cef5326c16ad9d4fe extends \Twig\Template
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
            <form action=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/admin/add\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                    <label>
                        <input type=\"text\" name=\"product_tip\" class=\"form-control\" placeholder=\"Upisi tip proizvoda\"
                               required>
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_name\" class=\"form-control\" placeholder=\"Upisi naziv proizvoda\"
                               required>
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_price\" class=\"form-control\"
                               placeholder=\"Upisi cijenu proizvoda\" required>
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_gender\" class=\"form-control\" placeholder=\"Upisi pol proizvoda\"
                               required>
                    </label>

                    <DIV CLASS=\" row  \">
                        <label class=\"col-1 \">
                            <input type=\"text\" name=\"product_size_v1\" class=\"form-control\"
                                   placeholder=\"Vel.\">
                        </label>
                        <label class=\"col-1\">
                            <input type=\"text\" name=\"product_size_v2\" class=\"form-control\"
                                   placeholder=\"Vel.\">
                        </label> <label class=\"col-1\">
                        <input type=\"text\" name=\"product_size_v3\" class=\"form-control\"
                               placeholder=\"Vel.\">
                    </label>
                        <label class=\"col-1\">
                            <input type=\"text\" name=\"product_size_v4\" class=\"form-control\"
                                   placeholder=\"Vel.\">
                        </label>
                        <label class=\"col-1\">
                            <input type=\"text\" name=\"product_size_v5\" class=\"form-control\"
                                   placeholder=\"Vel.\">
                        </label> <label class=\"col-1\">
                        <input type=\"text\" name=\"product_size_v6\" class=\"form-control\"
                               placeholder=\"Vel.\">
                    </label> <label class=\"col-1\">
                        <input type=\"text\" name=\"product_size_v7\" class=\"form-control\"
                               placeholder=\"Vel.\">
                    </label> <label class=\"col-1\">
                        <input type=\"text\" name=\"product_size_v8\" class=\"form-control\"
                               placeholder=\"Vel.\">
                    </label>

                    </DIV>
                    <br>
                    <label>
                        <input type=\"text\" name=\"product_code\" class=\"form-control\"
                               placeholder=\"Upisi  sifru proizvoda\">
                    </label>
                    <label>
                        <input type=\"text\" name=\"product_color\" class=\"form-control\" placeholder=\"Upisi boju proizvoda\">
                    </label>

                    <label>
                        <input type=\"text\" name=\"product_materijal\" class=\"form-control\"
                               placeholder=\"Upisi materijal proizvoda\">
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



    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>ID</th>
            <th>TIP PROIZVODA</th>
            <th>NAZIV PROIZVODA</th>
            <th>CIJENA</th>
            <th>POL</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>VEL.</th>
            <th>SIFRA</th>
            <th>BOJA</th>
            <th>MATERIJAL</th>
            <th>SLIKA</th>

        </tr>
        </thead>
        <tbody>
        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 123
            echo "
        <tr>


            <td>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 127), "html", null, true);
            echo "</td>
            <td>";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "tip", [], "any", false, false, false, 128), "html", null, true);
            echo "</td>
            <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
            <td> ";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
            <td> ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
            <td>";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v1", [], "any", false, false, false, 132), "html", null, true);
            echo "</td>
            <td>";
            // line 133
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v2", [], "any", false, false, false, 133), "html", null, true);
            echo "</td>
            <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v3", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
            <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v4", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
            <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v5", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
            <td>";
            // line 137
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v6", [], "any", false, false, false, 137), "html", null, true);
            echo "</td>
            <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v7", [], "any", false, false, false, 138), "html", null, true);
            echo "</td>
            <td>";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v8", [], "any", false, false, false, 139), "html", null, true);
            echo "</td>
            <td>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 140), "html", null, true);
            echo "</td>
            <td>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 141), "html", null, true);
            echo "</td>
            <td>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "materijal", [], "any", false, false, false, 142), "html", null, true);
            echo "</td>
            <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 143), "html", null, true);
            echo ".jpg</td>
            <td><a href=\"";
            // line 144
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/admin/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 144), "html", null, true);
            echo "/edit\" class=\"badge badge-primary p-2\">Uredi</a></td>
            <td><a href=\"";
            // line 145
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/admin/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 145), "html", null, true);
            echo "/delete\" class=\"badge badge-danger p-2\">Izbrisi</a>
            </td>

        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "        </tbody>
    </table>

</div>

";
        // line 156
        $this->displayBlock('naslov', $context, $blocks);
        // line 157
        echo "

";
    }

    // line 156
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
        return array (  277 => 156,  271 => 157,  269 => 156,  262 => 151,  248 => 145,  242 => 144,  238 => 143,  234 => 142,  230 => 141,  226 => 140,  222 => 139,  218 => 138,  214 => 137,  210 => 136,  206 => 135,  202 => 134,  198 => 133,  194 => 132,  190 => 131,  186 => 130,  182 => 129,  178 => 128,  174 => 127,  168 => 123,  164 => 122,  55 => 16,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/admin.html", "C:\\wamp64\\www\\aura1\\views\\Main\\admin.html");
    }
}
