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
            'sidebar' => [$this, 'block_sidebar'],
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
<!--    <link rel=\"stylesheet\" href=\"http://localhost/assets\\bootstrap-4.3.1-dist\\css\\bootstrap.min.css\">-->

    <script
            src=\"https://code.jquery.com/jquery-3.4.1.js\"
            integrity=\"sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=\"
            crossorigin=\"anonymous\"></script>

        <script>
            function showResult(str) {
                if (str.length===0) {
                    document.getElementById(\"livesearch\").innerHTML=\"\";
                    document.getElementById(\"livesearch\").style.border=\"0px\";
                    return;
                }
                var xmlhttp;
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {  // code for IE6, IE5
                    xmlhttp = new ActiveXObject(\"Microsoft.XMLHTTP\");
                }
                xmlhttp.onreadystatechange=function() {
                    if (this.readyState===4 && this.status===200) {
                        document.getElementById(\"livesearch\").innerHTML=this.responseText;
                        document.getElementById(\"livesearch\").style.border=\"1px solid #A5ACB2\";
                    }
                }
                xmlhttp.open(\"GET\",\"livesearch.php?q=\"+str,true);
                xmlhttp.send();
            }
        </script>


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
            <div class=\"social-icons\">
                <a class=\"fa fa-facebook\" style=\"font-size: 20px\"></a>
                <a class=\"fa fa-youtube\" style=\"font-size: 20px\"></a>
                <i class=\"fa fa-instagram\" style=\"font-size: 20px\"></i>
                <a><i class=\"fa fa-twitter\" style=\"font-size: 20px\"></i></a>

            </div>
<!--            <div class=\"search-box\">-->
<!--                <form method=\"post\" action=\"search\">-->
<!--                    <input type=\"text\" size=\"30\" onkeyup=\"showResult(this.value)\" placeholder=\"Unesita kljucne rijeci\">-->
<!--                    <div id=\"livesearch\"></div>-->


<!--                                        <input type=\"text\" name=\"q\" placeholder=\"Unesite kljucne rijeci\">-->
<!--                    <button type=\"submit\">Search</button>-->

<!--                </form>-->
<!--                <form>-->

<!--                        <input type=\"text\" size=\"30\" onkeyup=\"showResult(this.value)\">-->

<!--                    <div id=\"livesearch\"></div>-->
<!--                </form>-->

<!--            </div>-->
            <nav id=\"main-menu\">
                <ul>
                    <li><a href=\"http://localhost/aura1/home\">Pocetna</a></li>
                    <li><a href=\"http://localhost/aura1/muski\">Muska kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/zenski\">Zenska kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/sizeplus\">Size plus kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/getregister\">Registracija</a></li>
                    <li><a href=\"http://localhost/aura1/getlogin\">Prijava</a></li>
                    <li><a href=\"http://localhost/aura1/pretraga\">Pretraga</a></li>
                </ul>
            </nav>
        </header>
            <main>

                ";
        // line 95
        $this->displayBlock('sidebar', $context, $blocks);
        // line 97
        echo "                ";
        $this->displayBlock('main', $context, $blocks);
        // line 99
        echo "            </main>

        <footer class=\"footer\">
            &copy; 2019 aura
       </footer>
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

    // line 95
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "                ";
    }

    // line 97
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "                ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  174 => 98,  170 => 97,  166 => 96,  162 => 95,  155 => 5,  144 => 99,  141 => 97,  139 => 95,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\wamp64\\www\\aura1\\views\\_global\\index.html");
    }
}
