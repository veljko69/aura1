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

</head>
<body>

        <header class=\"site-header\">
            <div class=\"banners\">
                <a href=\"index.html\"><img src=\"http://localhost/aura1/assets/img/logo.png\" alt=\"aura logo\"></a>
            </div>
            <div class=\"social-icons\">
                <a class=\"fa fa-facebook\" style=\"font-size: 20px\"></a>
                <a class=\"fa fa-youtube\" style=\"font-size: 20px\"></a>
                <i class=\"fa fa-instagram\" style=\"font-size: 20px\"></i>
                <a><i class=\"fa fa-twitter\" style=\"font-size: 20px\"></i></a>

            </div>
            <div class=\"search-box\">
                <form method=\"post\" action=\"search\">
                    <input type=\"text\" name=\"q\" placeholder=\"Unesite kljucne rijeci\">
                    <button type=\"submit\">Search</button>

                </form>


            </div>
            <nav id=\"main-menu\">
                <ul>
                    <li><a href=\"http://localhost/aura1/home\">Pocetna</a></li>
                    <li><a href=\"http://localhost/aura1/muski\">Muska kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/zenski\">Zenska kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/sizeplus\">Size plus kolekcija</a></li>
                    <li><a href=\"http://localhost/aura1/getregister\">Registracija</a></li>
                    <li><a href=\"http://localhost/aura1/getlogin\">Prijava</a></li>
                </ul>
            </nav>
        </header>
            <main>

                ";
        // line 45
        $this->displayBlock('sidebar', $context, $blocks);
        // line 47
        echo "                ";
        $this->displayBlock('main', $context, $blocks);
        // line 49
        echo "            </main>

        <footer class=\"footer\">
            &copy; 2019 aura
       </footer>
</body>
</html>";
    }

    // line 5
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pocetna";
    }

    // line 45
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "                ";
    }

    // line 47
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                ";
    }

    public function getTemplateName()
    {
        return "_global/index.html";
    }

    public function getDebugInfo()
    {
        return array (  123 => 48,  119 => 47,  115 => 46,  111 => 45,  104 => 5,  94 => 49,  91 => 47,  89 => 45,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\wamp64\\www\\aura1\\views\\_global\\index.html");
    }
}
