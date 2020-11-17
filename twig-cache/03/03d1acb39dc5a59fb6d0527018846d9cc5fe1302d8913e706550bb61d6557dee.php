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
class __TwigTemplate_fbc682eab708fd813e88ca8d96f4f078cc0d30086c32c6b558ac59b8371e2fad extends \Twig\Template
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
    <nav aria-label=\"breadcrumb w-100 mb-5\">
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tip", [], "any", false, false, false, 15), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 16
($context["product"] ?? null), "pol", [], "any", false, false, false, 16), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,         // line 17
($context["product"] ?? null), "tip", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
        </ol>
    </nav>

    <div class=\"row no-gutters mt-5\">
        <!--        col prva-->
        <div class=\" container  col-md-4\">

            <!--            carousel slide-->
            <div id=\"carouselExampleControls\" class=\"carousel slide\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <img  class=\"d-block w-100\"
                             src=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 31), "html", null, true);
        echo ".jpg\" alt=\"
              ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 32), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 35), "html", null, true);
        echo "-1.jpg\" alt=\"
               ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 36), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"carousel-item\">
                        <img class=\"d-block w-100\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 39), "html", null, true);
        echo "-2.jpg\" alt=\"
                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 40), "html", null, true);
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
        <!--        col druga-->
        <div class=\"col-md-4 container\">

            <h1 class=\" d-flex-auto  justify-content-center m-3\"
                style=\" font-size : 28px; text-transform: uppercase ; \">
                ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 60), "html", null, true);
        echo "</h1>

            <div class=\"card-body mt-4\">
                <a class=\"btn btn-light w-100 border\" onclick=\"loadDoc()\" data-toggle=\"collapse\" href=\"#collapseExample\"
                   role=\"button\" aria-expanded=\"true\" aria-controls=\"collapseExample\">
                    OPIS PROIZVODA
                </a>
                <div class=\"collapse\" id=\"collapseExample\">
                    <div class=\"card card-body \" id=\"opis\">
                        An
                    </div>
                </div>

                <a class=\"btn btn-light w-100 border mt-5\" data-toggle=\"collapse\" href=\"#CE\" role=\"button\"
                   aria-expanded=\"false\" aria-controls=\"CE\">
                    SASTAV
                </a>
                <div class=\"collapse\" id=\"CE\">
                    <div class=\"card card-body \">
                        ";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "materijal", [], "any", false, false, false, 79), "html", null, true);
        echo "
                    </div>
                </div>

                <button
                        class=\"btn  btn-light w-100  mt-5 border\" data-toggle=\"modal\"
                        data-target=\"#exampleModal\">
                    TABELA VELICINA
                </button>
                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\"
                     aria-labelledby=\"exampleModalLabel\"
                     aria-hidden=\"true\">
                    <div class=\"modal-dialog\">
                        <div class=\"modal-content\">
                            <div class=\"modal-header\">
                                <h2 class=\"modal-title\" id=\"exampleModalLabel\">Odredite velicinu</h2>
                          /*      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
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


                                </div>
                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn \" data-dismiss=\"modal\">
                                    Close
                                </button>

                            </div>
                        </div>
                    </div>
                </div>


                <div class=\"dropdown\">
                    <button class=\"btn btn-light border dropdown-toggle w-100 mt-5\" type=\"button\"
                            id=\"dropdownMenuButton\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        IZABERI VELICINU
                    </button>
                    <div class=\"dropdown-menu  w-100\" aria-labelledby=\"dropdownMenuButton \">
                        <a class=\"dropdown-item\" href=\"#\" onclick=\"addSize(";
        // line 220
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 220), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v1", [], "any", false, false, false, 220), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v1", [], "any", false, false, false, 220), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v2", [], "any", false, false, false, 221), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v3", [], "any", false, false, false, 222), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v4", [], "any", false, false, false, 223), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 224
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v5", [], "any", false, false, false, 224), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 225
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v6", [], "any", false, false, false, 225), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 226
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v7", [], "any", false, false, false, 226), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"#\">";
        // line 227
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v8", [], "any", false, false, false, 227), "html", null, true);
        echo "</a>
                    </div>
                </div>


            </div>


            <!-- Modal  odredi velicine-->


        </div>


        <!--col treca-->
        <div class=\"col-md-4  container\">
            <div class=\"card-body mt-4\">
                <!--                <h3 class=\"card-title\" style=\"text-transform: uppercase\">";
        // line 244
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 244), "html", null, true);
        echo "</h3>-->


<!--                Dostupno u velicinama-->
                <h5>Dostupno u velicinama: <br>
                    <span class=\"row  mt-3\">
   <form action=\"slanje\">
                        <div class=\"btn-group btn-group-toggle\" data-toggle=\"buttons\">


                       <label class=\"btn btn-outline-secondary \">
                         <input type=\"radio\" name=\"options\" id=\"option1\" value=\"";
        // line 255
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v1", [], "any", false, false, false, 255), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v1", [], "any", false, false, false, 255), "html", null, true);
        echo "
                       </label>
                       <label class=\"btn btn-outline-secondary\">
                         <input type=\"radio\" name=\"options\" id=\"option2\" value=\"";
        // line 258
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v2", [], "any", false, false, false, 258), "html", null, true);
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v2", [], "any", false, false, false, 258), "html", null, true);
        echo "
                       </label>
                       <label class=\"btn btn-outline-secondary \">
                         <input type=\"radio\" name=\"options\" id=\"option3\"  value=\"";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v3", [], "any", false, false, false, 261), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v3", [], "any", false, false, false, 261), "html", null, true);
        echo "
                       </label>
                         <label class=\"btn btn-outline-secondary\">
                         <input type=\"radio\" name=\"options\" id=\"option4\" value=\"";
        // line 264
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v4", [], "any", false, false, false, 264), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v4", [], "any", false, false, false, 264), "html", null, true);
        echo "
                       </label>
                         <label class=\"btn btn-outline-secondary\">
                         <input type=\"radio\" name=\"options\" id=\"option5\" value=\"";
        // line 267
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v5", [], "any", false, false, false, 267), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v5", [], "any", false, false, false, 267), "html", null, true);
        echo "
                       </label>
                         <label class=\"btn btn-outline-secondary\">
                         <input type=\"radio\" name=\"options\" id=\"option6\" value=\"";
        // line 270
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v6", [], "any", false, false, false, 270), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v6", [], "any", false, false, false, 270), "html", null, true);
        echo "
                       </label>
                          <label class=\"btn btn-outline-secondary\">
                         <input type=\"radio\" name=\"options\" id=\"option7\" value=\"";
        // line 273
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v7", [], "any", false, false, false, 273), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v7", [], "any", false, false, false, 273), "html", null, true);
        echo "
                       </label>
                          <label class=\"btn btn-outline-secondary \" >
                         <input type=\"radio\" name=\"options\" id=\"option8\" value=\"";
        // line 276
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v8", [], "any", false, false, false, 276), "html", null, true);
        echo "\" >";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "v8", [], "any", false, false, false, 276), "html", null, true);
        echo "
                       </label>
                            <label class=\"btn btn-outline-secondary active\" >
                         <input type=\"radio\" name=\"options\"  checked  >
                       </label>
</div>

                </form>


                    </span></h5><br>



                <p>Sifra proizvoda: <span>";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 290), "html", null, true);
        echo "</span></p><br>
                <h5>Boja: <span>";
        // line 291
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 291), "html", null, true);
        echo "</span></h5><br>
                <h5>Cijena proizvoda: <span>";
        // line 292
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 292), "html", null, true);
        echo " km</span></h5><br>
            </div>
            <!-- Button trigger modal -->
<!--              <button> <a style=\"text-decoration: none; padding: 0 15px\" href=\"\" onclick=\" addBookmark( ";
        // line 295
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 295), "html", null, true);
        echo ") \"> .... Dodaj u omiljeno. ... </a>-->
<!--             </button>-->


            <button type=\"button\" class=\"btn btn-outline-secondary col-12 \" >
            <a href=\"\" onclick=\" addBookmark(";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 300), "html", null, true);
        echo ") \"> SACUVAJTE U LISTI ZELJA</a>
            </button>


            <a href=\"";
        // line 304
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/korpa/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 304), "html", null, true);
        echo "\">
                <button class=\" btn btn-primary col-12 mt-2 mb-2 \"> NARUCI PROIZVOD</button>
            </a>


            <!--            <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/naruci_viber\" alt=\"naruci_preko_vibera\" class=\"card-img\">-->


            <!--            socijale mreze-->

            <div class=\" mt-3 d-flex justify-content-center mb-2\">

                <H4 class=\"m-2\">PODIJELITE : </H4>
                <a class=\"m-2\" href=\"#\"> <img src=\"";
        // line 317
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/fb.png\" alt=\"facebook\"></a>
                <a class=\"m-2\" href=\"#\"> <img src=\"";
        // line 318
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/ig.png\" alt=\"instagram\"></a>
                <!--                <a class=\"m-2\" href=\"#\"> <img src=\"";
        // line 319
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/fb.png\" alt=\"facebook\"></a>-->
            </div>
        </div>


    </div>
</div>

<h3  class=\"m-2\" style=\"
text-decoration: none;

font-style:italic;
    margin-top: 30px;
    border-top: 2px solid gray;
    text-align: center;
\"><a href=\"";
        // line 334
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 334), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "tip", [], "any", false, false, false, 334), "html", null, true);
        echo "\">SLICNI PROIZVODI</a></h3>


<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(\"opis\").innerHTML = this.responseText;
            }
        };
        xhttp.open(\"GET\", \"";
        // line 345
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/opis/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 345), "html", null, true);
        echo ".txt\", true);
        xhttp.send();
    }


</script>
<?php  print_r(\$_COOKIE['APPSESSION']); ?>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 353
        echo "
";
    }

    // line 356
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 356), "html", null, true);
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
        return array (  581 => 356,  576 => 353,  563 => 345,  545 => 334,  527 => 319,  523 => 318,  519 => 317,  508 => 309,  498 => 304,  491 => 300,  483 => 295,  477 => 292,  473 => 291,  469 => 290,  450 => 276,  442 => 273,  434 => 270,  426 => 267,  418 => 264,  410 => 261,  402 => 258,  394 => 255,  380 => 244,  360 => 227,  356 => 226,  352 => 225,  348 => 224,  344 => 223,  340 => 222,  336 => 221,  328 => 220,  184 => 79,  162 => 60,  139 => 40,  133 => 39,  127 => 36,  121 => 35,  115 => 32,  109 => 31,  93 => 18,  89 => 17,  86 => 16,  79 => 15,  76 => 14,  70 => 13,  66 => 12,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showProductById.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showProductById.html");
    }
}
