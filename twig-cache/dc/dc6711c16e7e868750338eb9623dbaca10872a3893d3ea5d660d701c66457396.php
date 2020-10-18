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

/* Product/showProductById.html */
class __TwigTemplate_b58782529998f2f33e4b97bff2820be5c309168269a14f34da27e3a311773bea extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Product/showProductById.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<!--<div class=\"proizvod-jedan\">-->
<!--<button ><a  style=\"text-decoration: none ; padding: 0 15px\" href=\"\" onclick=\" addBookmark( ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 5), "html", null, true);
        echo ") \">.... Dodaj u favorite....</a>-->
<!--   </button>-->


<div class=\"container \">
    <nav aria-label=\"breadcrumb w-100\">
        <ol class=\"breadcrumb\" style=\"text-transform: lowercase\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/home\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 13), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 13), "html", null, true);
        // line 14
        echo ".kolekcija</a></li>
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 15), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 16
($context["product"] ?? null), "pol", [], "any", false, false, false, 16), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 17
($context["product"] ?? null), "naziv", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 18), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
        </ol>
    </nav>

    <div class=\"row no-gutters\">
        <div class=\" container  col-md-4\">
            <h1 class=\"float-md-none  align-items-center\" style=\" font-size : 28px; text-transform: uppercase ;color:#A19379 \">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 25
($context["product"] ?? null), "pol", [], "any", false, false, false, 25), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 25), "html", null, true);
        echo "</h1>


            <!--            <img src=\"../assets/img/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 28), "html", null, true);
        echo ".jpg\"  alt=\"slika\" class=\"card-img\" >-->

            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img onload=\"loadDoc() \" class=\"d-block w-100\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 33), "html", null, true);
        echo ".jpg\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 34
($context["product"] ?? null), "pol", [], "any", false, false, false, 34), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 37), "html", null, true);
        echo "-1.jpg\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 38
($context["product"] ?? null), "pol", [], "any", false, false, false, 38), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 38), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 41), "html", null, true);
        echo "-2.jpg\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 42
($context["product"] ?? null), "pol", [], "any", false, false, false, 42), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control-next\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </div>
        <div class=\"col-md-4 m-auto\">
            <div class=\"card-body \">
                <!--opis proizvoda i sastav-->
                <div class=\"accordion\" id=\"accordionExample\">
                    <div class=\"\">
                        <div class=\"card-header\" id=\"headingOne\">
                            <h2 class=\"mb-0\" style=\"color:#A19379\">
                                <button onclick=\"loadDoc()\" style=\"color:#A19379\" class=\"btn btn-link btn-block text-left\" type=\"button\"
                                        data-toggle=\"collapse\"
                                        data-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    OPIS PROIZVODA
                                </button>
                            </h2>
                        </div>

                        <div id=\"collapseOne\" class=\"collapse \" aria-labelledby=\"headingOne\"
                             data-parent=\"#accordionExample\">
                            <div class=\"card-body\" id=\"opis\" >


                            </div>
                        </div>
                    </div>
                    <div class=\"card\" >
                        <div class=\"card-header\" id=\"headingTwo\">
                            <h2 class=\"mb-0\">
                                <button style=\"color:#A19379\" class=\"btn btn-link btn-block text-left collapsed\"
                                        type=\"button\"
                                        data-toggle=\"collapse \" data-target=\"#collapseTwo\" aria-expanded=\"false\"
                                        aria-controls=\"collapseTwo\">
                                    SASTAV
                                </button>
                            </h2>
                        </div>
                        <div id=\"collapseTwo\" class=\"\" aria-labelledby=\"headingTwo\"
                             data-parent=\"#accordionExample\">
                            <div class=\"card-body\">
                                ";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "materijal", [], "any", false, false, false, 92), "html", null, true);
        echo "
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!--        Podaci o proizvodu-->

        <div class=\"col-md-4 m-auto\">
            <div class=\"card-body \" style=\"color:#A19379\">
                <h3 class=\"card-title\" style=\"text-transform: uppercase\">";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 106), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 106), "html", null, true);
        echo "</h3>
                <p>Sifra proizvoda: <span>";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 107), "html", null, true);
        echo "</span></p><br>
                <h4>Dostupno u velicinama: <span>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "velicina", [], "any", false, false, false, 108), "html", null, true);
        echo "</span></h4><br>
                <h4>Dostupno u bojama: <span>";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 109), "html", null, true);
        echo "</span></h4><br>
                <h4>Cijena proizvoda: <span>";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 110), "html", null, true);
        echo " km</span></h4><br>
            </div>
            <!-- Button trigger modal -->
            <button style=\"color:#A19379 ;background-color: white\" type=\"button  \"
                    class=\"btn  btn-secondary col-md-12 mb-2\" data-toggle=\"modal\"
                    data-target=\"#exampleModal\">
                Odredite velicinu
            </button>
            <!-- Modal  odredi velicine-->
            <div class=\"modal fade\" id=\"exampleModal\" style=\"color:#A19379 ;background-color: white\" tabindex=\"-1\"
                 aria-labelledby=\"exampleModalLabel\"
                 aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Odredite velicinu</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        <div class=\"modal-body\">
                            <div class=\"information-page\">
                                <table class=\"sizeguide cke_show_border\">
                                    <tbody>
                                    <tr>
                                        <td class=\"orangebg\"><strong>Velicine zenske odjece</strong></td>
                                    </tr>
                                    <tr class=\"sg_colHead\">
                                        <td>Medunarodne</td>
                                        <td>Grudi (cm)</td>
                                        <td>Struk (cm)</td>
                                        <td>Kukovi (cm)</td>
                                    </tr>
                                    <tr>
                                        <td>2XS (XX Small)</td>
                                        <td>76</td>
                                        <td>56</td>
                                        <td>81</td>
                                    </tr>
                                    <tr>
                                        <td>XS (Extra Small)</td>

                                        <td>81</td>

                                        <td>61</td>

                                        <td>86</td>
                                    </tr>
                                    <tr>

                                        <td>S (Small)</td>

                                        <td>86</td>

                                        <td>64</td>

                                        <td>89</td>
                                    </tr>
                                    <tr>

                                        <td>M (Medium)</td>

                                        <td>91</td>

                                        <td>69</td>

                                        <td>94</td>
                                    </tr>
                                    <tr>

                                        <td>L (Large)</td>

                                        <td>97</td>

                                        <td>74</td>

                                        <td>99</td>
                                    </tr>
                                    <tr>

                                        <td>XL (Extra Large)</td>

                                        <td>102</td>

                                        <td>79</td>

                                        <td>104</td>
                                    </tr>
                                    <tr>

                                        <td>2XL (XX Large)</td>

                                        <td>107</td>

                                        <td>84</td>

                                        <td>109</td>
                                    </tr>
                                    <tr>

                                        <td>3XL (XXX Large)</td>

                                        <td>112</td>

                                        <td>89</td>

                                        <td>114</td>
                                    </tr>
                                    <tr>

                                        <td>4XL (XXXX Large)</td>

                                        <td>117</td>

                                        <td>94</td>

                                        <td>119</td>
                                    </tr>
                                    </tbody>
                                </table>


                                </table>
                            </div>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn \" data-dismiss=\"modal\"
                                    style=\"color:#A19379;background-color: white \">Close
                            </button>

                        </div>
                    </div>
                </div>
            </div>

<!--            <button type=\"button\" class=\"btn btn-secondary col-12\" style=\"color:#A19379;background-color: #fbfaf7 \">-->
<!--                <a onclick=\" addBookmark( ";
        // line 246
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 246), "html", null, true);
        echo ")\">SACUVAJTE U LISTI ZELJA</a>-->
<!--            </button>-->
            <button class=\" btn btn-primary col-12 mt-2 mb-2 \">
                NARUCI PROIZVOD
            </button>
            <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/naruci_viber\" alt=\"slika\" class=\"card-img\">
        </div>


    </div>

    <h3 style=\"
text-decoration: none;

font-style:italic;
    margin-top: 30px;
    border-top: 2px solid gray;
    text-align: center;
\"><a href=\"";
        // line 264
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 264), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 264), "html", null, true);
        echo "\">SLICNI PROIZVODI</a></h3>


    <script>
    function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById(\"opis\").innerHTML = this.responseText;
    }
    };
    xhttp.open(\"GET\", \"";
        // line 275
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/opis/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 275), "html", null, true);
        echo ".txt\", true);
    xhttp.send();
    }


</script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 282
        echo "
    ";
    }

    // line 285
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 285), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 285), "html", null, true);
    }

    public function getTemplateName()
    {
        return "Product/showProductById.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  440 => 285,  435 => 282,  423 => 275,  405 => 264,  389 => 251,  381 => 246,  242 => 110,  238 => 109,  234 => 108,  230 => 107,  224 => 106,  207 => 92,  152 => 42,  147 => 41,  139 => 38,  134 => 37,  126 => 34,  121 => 33,  113 => 28,  105 => 25,  104 => 24,  93 => 18,  89 => 17,  86 => 16,  79 => 15,  76 => 14,  70 => 13,  66 => 12,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showProductById.html", "D:\\wamp64\\www\\aura1\\views\\Product\\showProductById.html");
    }
}
