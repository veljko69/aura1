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
class __TwigTemplate_7119717b7e86ef64802402e5935b9f412d6e9fcd2dd908ee49fae88a199bcd2f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Product/showKorpa.html", 1);
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

<title>Korpa</title>
  <div class=\"container  \">

     <div class=\"korpa d-inline col-md-9\">

     </div>
<!--<div class=\"container-fluid\">-->
<!--    <hr>-->
<!--    <div class=\"col-md-12\">-->
<!--        <h3 class=\"text-center\">Proizvodi u korpi</h3>-->
<!--    </div>-->
<!--    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">-->

<!--    <div class=\"container-fluid row border-primary\">-->
<!--        <table class=\"table  col-md-8 \">-->
<!--            <thead>-->
<!--            <tr>-->
<!--                <th></th>-->
<!--                <th>PROIZVOD</th>-->
<!--                <th>CIJENA</th>-->
<!--                <th>KOLICINA</th>-->
<!--                <th>UKUPNO</th>-->


<!--            </tr>-->
<!--            </thead>-->
<!--            <tbody>-->


<!--            <tr>-->


<!--                <td><img src=\"../assets/img/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 38), "html", null, true);
        echo ".jpg\" height=\"auto\" width=\"120px\"-->
<!--                         alt=\" ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 39), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 39), "html", null, true);
        echo "\"></td>-->
<!--                <td><h4 class=\"korpa\" style=\"margin-top: 10px\"></h4><br>-->
<!--                    <div class=\"bookmarks\">*</div>-->
<!--                    Sifra : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 42), "html", null, true);
        echo "<br>-->
<!--                    Boja :";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 43), "html", null, true);
        echo "-->

<!--                    &lt;!&ndash;            <td><a href=\"http://localhost/aura1/admin/";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 45), "html", null, true);
        echo "/edit\" class=\"badge badge-primary p-2\">Uredi</a>&ndash;&gt;-->
<!--                    &lt;!&ndash;            </td>&ndash;&gt;-->
<!--&lt;!&ndash;                    <a href=\"http://localhost/aura1/admin/";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 47), "html", null, true);
        echo "/delete\"&ndash;&gt;-->
<!--&lt;!&ndash;                       class=\"badge badge-light p-2\">Izbaci iz korpe</a>&ndash;&gt;-->
<!--                    <div class=\"btn-secondary\" ><a href=\"\" onclick=\"clearBookmark(`";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 49), "html", null, true);
        echo "`)\"> Izbrisi</a></div>-->

<!--                </td>-->

<!--                <td>-->
<!--&lt;!&ndash;                    <h5 style=\"margin-top: 10px ; margin-right: 30px\"> ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 54), "html", null, true);
        echo " </h5> <br>&ndash;&gt;-->
<!--                    <div  class=\"cijena\"></div>-->
<!--                </td>-->
<!--                <td>-->
<!--                    Izaberi kolicinu: <label>-->
<!--                    <input type=\"number\" min=\"1\" step=\"1\" value=\"1\" name=\"product_kolicina\" id=\"product_kolicina\">-->
<!--                </label>-->
<!--                </td>-->
<!--                <td>-->
<!--                    <h3>U-->
<!--                        kupno</h3>-->
<!--                </td>-->
<!--            </tr>-->

<!--            </tbody>-->
<!--        </table>-->
<!--        <div class=\"col-1\">-->


        <div class=\" border-d   \">

            <div class=\"bg-light\">
                <h5 class=\"d-flex justify-content-center  card-header \">MEDUZBIR</h5>
            </div>

            <div class=\"row p-2 mt-2\">
                <h4 class=\"d-flex justify-content-start col-6\"> SUMA: </h4>
                <h4 class=\"d-flex justify-content-end col-6\"> ";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 81), "html", null, true);
        echo " km</h4><br>
            </div>

            <div class=\"row p-2 mt-2\">
                <h4 class=\"d-flex justify-content-start col-6\"> DOSTAVA: </h4>
                <h4 class=\"d-flex justify-content-end col-6\"> 7.00 km</h4><br>
            </div>


      </div>
<!--            <a href=\"";
        // line 91
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/getslanje\">-->
<!--                <button class=\" btn-primary w-100 d-flex justify-content-center  p-2\"> NARUCI </button>-->
<!--            </a>-->
<!--&lt;!&ndash;            <div class=\"btn-primary w-100 d-flex justify-content-center  p-2\" >NARUCI </div>&ndash;&gt;-->
<!--&lt;!&ndash;        </div>&ndash;&gt;-->

<!--    </div>-->
<!--</div>-->


  </div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 104
        echo "
";
    }

    // line 106
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
        return array (  192 => 106,  187 => 104,  171 => 91,  158 => 81,  128 => 54,  120 => 49,  115 => 47,  110 => 45,  105 => 43,  101 => 42,  93 => 39,  89 => 38,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showKorpa.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showKorpa.html");
    }
}
