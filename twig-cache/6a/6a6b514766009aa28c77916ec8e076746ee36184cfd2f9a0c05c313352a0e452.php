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

/* _global/index.html */
class __TwigTemplate_6bef61af0ef1f6fecf2c262a09576f8c9b79a8c0c230754577e3954e5e8ebded extends \Twig\Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title> ";
        // line 5
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<!--    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">-->
<!--    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>-->
<!--    <script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>-->
<!--    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>-->


    <!--    <link rel=\"stylesheet\" href=\"http://localhost/assets\\bootstrap-4.3.1-dist\\css\\bootstrap.min.css\">-->
<!--    <script-->
<!--            src=\"https://code.jquery.com/jquery-3.4.1.js\"-->
<!--            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"-->
<!--            crossorigin=\"anonymous\"></script>-->

<!--        <script>-->
<!--            function showResult(str) {-->
<!--                if (str.length===0) {-->
<!--                    document.getElementById(\"livesearch\").innerHTML=\"\";-->
<!--                    document.getElementById(\"livesearch\").style.border=\"0px\";-->
<!--                    return;-->
<!--                }-->
<!--                var xmlhttp;-->
<!--                if (window.XMLHttpRequest) {-->
<!--                    // code for IE7+, Firefox, Chrome, Opera, Safari-->
<!--                    xmlhttp = new XMLHttpRequest();-->
<!--                } else {  // code for IE6, IE5-->
<!--                    xmlhttp = new ActiveXObject(\"Microsoft.XMLHTTP\");-->
<!--                }-->
<!--                xmlhttp.onreadystatechange=function() {-->
<!--                    if (this.readyState===4 && this.status===200) {-->
<!--                        document.getElementById(\"livesearch\").innerHTML=this.responseText;-->
<!--                        document.getElementById(\"livesearch\").style.border=\"1px solid #A5ACB2\";-->
<!--                    }-->
<!--                }-->
<!--                xmlhttp.open(\"GET\",\"livesearch.php?q=\"+str,true);-->
<!--                xmlhttp.send();-->
<!--            }-->
<!--        </script>-->


<!--<form>-->
<!--    <label>-->
<!--        <input type=\"text\" size=\"30\" onkeyup=\"showResult(this.value)\">-->
<!--    </label>-->
<!--    <div id=\"livesearch\"></div>-->
<!--</form>-->


</head>
<body>
<div class=\"container\">
        <header class=\"site-header\">
            <div class=\"banners\">
                <a href=\"http://localhost/aura1/home\"><img src=\"http://localhost/aura1/assets/img/logo.png\" alt=\"aura logo\"></a>
            </div>
            <div class=\"bookmarks\">Loading bookmarks</div>

            <div class=\"social-icons\">
                <a class=\"fa fa-facebook\" style=\"font-size: 20px\"></a>
                <a class=\"fa fa-youtube\" style=\"font-size: 20px\"></a>
                <i class=\"fa fa-instagram\" style=\"font-size: 20px\"></i>
                <a><i class=\"fa fa-twitter\" style=\"font-size: 20px\"></i></a>

            </div>

<!--<div class=\"clr-btn\" ><a href=\"http://localhost/aura1/api/bookmarks/clear\">Izbrisi</a></div>-->
            <nav id=\"main-menu\">
                <ul>
                    <li><a href=\"http://localhost/aura1/home\">Pocetna</a></li>
<!--                    <li><a href=\"http://localhost/aura1/muski\">Muska kolekcija</a></li>-->
                    <div class=\"dropdown\">
                        <a href=\"http://localhost/aura1/muski\"><button class=\"dropbtn\">Muska kolekcija
                            <i class=\"fa fa-caret-down\"></i>
                        </button></a>

                        <div class=\"dropdown-content\">
                            <a href=\"http://localhost/aura1/products/m/pantalone\">Pantalone</a>
                            <a href=\"http://localhost/aura1/products/m/kosulja\">Kosulja</a>
                            <a href=\"http://localhost/aura1/products/m/sako\">Sako</a>
                            <a href=\"http://localhost/aura1/products/m/jakna\">Jakna</a>
                            <a href=\"http://localhost/aura1/products/m/majica\">Majica</a>
                            <a href=\"http://localhost/aura1/products/m/kais\">Kais</a>
                            <a href=\"http://localhost/aura1/products/m/kaput\">Kaput</a>

                        </div>
                    </div>
                    <div class=\"dropdown\">
                        <a href=\"http://localhost/aura1/zenski\"><button class=\"dropbtn\">Zenska kolekcija
                            <i class=\"fa fa-caret-down\"></i>
                        </button></a>
                        <div class=\"dropdown-content\">
                            <a href=\"http://localhost/aura1/products/z/pantalone\">Pantalone</a>
                            <a href=\"http://localhost/aura1/products/z/kosulja\">Kosulja</a>
                            <a href=\"http://localhost/aura1/products/z/haljina\">Haljina</a>
                            <a href=\"http://localhost/aura1/products/z/jakna\">Jakna</a>
                            <a href=\"http://localhost/aura1/products/z/majica\">Majica</a>
                            <a href=\"http://localhost/aura1/products/z/kais\">Kais</a>
                            <a href=\"http://localhost/aura1/products/z/suknja\">Suknja</a>
                            <a href=\"http://localhost/aura1/products/z/bluza\">Bluza</a>
                            <a href=\"http://localhost/aura1/products/z/blejzer\">Blejzer</a>

                        </div>
                    </div>
                    <li><a href=\"http://localhost/aura1/sizeplus\">Size plus kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/getregister\">Registracija</a></li>
                    <li><a href=\"http://localhost/aura1/getlogin\">Prijava</a></li>
                    <li><a href=\"http://localhost/aura1/user/logout\">Odjava</a></li>

                </ul>
            </nav>
            <p>";
        // line 116
        echo twig_escape_filter($this->env, ($context["podatak"] ?? null), "html", null, true);
        echo "</p>
        </header>
            <main>

                ";
        // line 120
        $this->displayBlock('main', $context, $blocks);
        // line 123
        echo "            </main>

        <footer class=\"footer\">
            &copy; 2019 aura
       </footer>
    <script src=\"http://localhost/aura1/assets/js/topnav.js\"></script>

    <script src=\"http://localhost/aura1/assets/js/bookmark.js\"></script>
</div>
</body>
</html>";
    }

    // line 5
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pocetna";
    }

    // line 120
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 121,  189 => 120,  182 => 5,  168 => 123,  166 => 120,  159 => 116,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\wamp64\\www\\aura1\\views\\_global\\index.html");
    }
}
