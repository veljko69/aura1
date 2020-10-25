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
class __TwigTemplate_73b66a9a321e4d53fa1b74352f2cdc178dc88c70f7c0cde055c87bb7a55ef6ed extends \Twig\Template
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title> ";
        // line 6
        $this->displayBlock('naslov', $context, $blocks);
        echo "-AURA</title>
    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


</head>
<body>
<div class=\"container\">
  <header class=\"site-header\">
            <div class=\"banners\">
                <a href=\"http://localhost/aura1/home\"><img src=\"http://localhost/aura1/assets/img/logo.png\" alt=\"aura logo\"></a>
            </div>
            <div class=\"bookmarks\">Loading bookmarks</div>

            <div class=\"social-icons\">

                <a  class=\"fa fa-facebook\"  style=\"font-size: 20px\" href=\"#\"></a>
                <a rel=\"nofollow\" class=\"fa fa-youtube\" style=\"font-size: 20px\"href=\"https://youtu.be/HTY6fKNN75Q\"  ></a>
                <a rel=\"nofollow\" class=\"fa fa-instagram\"  style=\"font-size: 20px\"href=\"#\"  ></a>
                <a class=\"fa fa-twitter\"  style=\"font-size: 20px\"href=\"#\"  ></a>

            </div>

<div class=\"clr-btn\" ><a href=\"http://localhost/aura1/api/bookmarks/clear\">Izbrisi</a></div>
       <nav id=\"main-menu\" >
            <ul>
                <div class=\"dropdown\"><a href=\"http://localhost/aura1/home\"><button class=\"dropbtn\">POCETNA
                    <i class=\"fa fa-caret-down\"></i>
                </button></a>
<!--                    <li><a href=\"http://localhost/aura1/home\">POCETNA</a></li>-->
                </div>

<!--                    <li><a href=\"http://localhost/aura1/muski\">Muska kolekcija</a></li>-->
                    <div class=\"dropdown\">
                        <a href=\"http://localhost/aura1/muski\"><button class=\"dropbtn\">MUSKA KOLEKCIJA
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
                            <a href=\"http://localhost/aura1/products/m/odijelo\">Odijelo</a>

                        </div>
                    </div>
                <div class=\"dropdown\">
                        <a href=\"http://localhost/aura1/zenski\"><button class=\"dropbtn\">ZENSKA KOLEKCIJA
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
                <div class=\"dropdown\">
                    <a href=\"http://localhost/aura1/sizeplus\"><button class=\"dropbtn\">SIZE PLUS KOLEKCIJA
                        <i class=\"fa fa-caret-down\"></i>
                    </button></a>
                    <div class=\"dropdown-content\">
                        <a href=\"http://localhost/aura1/sizeplus\">ZA PUNIJE DAME</a>
                        <a href=\"http://localhost/aura1/sizeplus\">ZA PUNIJE MUSKARCE</a>


                    </div>
                </div>

                <div class=\"dropdown\">
                    <button class=\"dropbtn\">REGISTRACIJA/PRIJAVA<i class=\"fa fa-caret-down\"></i></button>

                           <div class=\"dropdown-content\">
                                <a href=\"http://localhost/aura1/getregister\">Registracija</a>
                                <a href=\"http://localhost/aura1/getlogin\">Prijava</a>
                                <a href=\"http://localhost/aura1/user/logout\">Odjava</a>
                           </div>
                </div>
            </ul>
       </nav>
<!--            <p>";
        // line 96
        echo twig_escape_filter($this->env, ($context["podatak"] ?? null), "html", null, true);
        echo "</p>-->
        </header>
            <main>

                ";
        // line 100
        $this->displayBlock('main', $context, $blocks);
        // line 103
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

    // line 6
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Muska i zenska odjeca";
    }

    // line 100
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 101
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
        return array (  174 => 101,  170 => 100,  163 => 6,  148 => 103,  146 => 100,  139 => 96,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\wamp64\\www\\aura1\\views\\_global\\index.html");
    }
}
