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
<html lang=\"sr\">
<head><!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TJ4HBSJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset=\"UTF-8\">
    <title> ";
        // line 11
        $this->displayBlock('naslov', $context, $blocks);
        echo "</title>

    <link rel=\"stylesheet\" href=\"http://localhost/aura1/assets/css/main.css\">
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">


</head>
<body>
<div class=\"container\">
        <header class=\"site-header\">
            <div class=\"banners\">
                <a href=\"http://localhost/aura1/home\"><img src=\"http://localhost/aura1/assets/img/logo.png\" alt=\"aura logo\"></a>
            </div>
<!--            <div class=\"bookmarks\">Bookmarks</div>-->

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
                            <a href=\"http://localhost/aura1/products/m/bermude\">Bermude</a>

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
                            <a href=\"http://localhost/aura1/products/z/kaput\">Kaput</a>

                        </div>
                    </div>
                    <li><a href=\"http://localhost/aura1/sizeplus\">Kolekcija za punije dame</a></li>
                    <li><a href=\"http://localhost/aura1/getregister\">Registracija</a></li>
                    <li><a href=\"http://localhost/aura1/getlogin\">Prijava</a></li>
                    <li><a href=\"http://localhost/aura1/user/logout\">Odjava</a></li>

                </ul>
            </nav>
            <p>";
        // line 80
        echo twig_escape_filter($this->env, ($context["podatak"] ?? null), "html", null, true);
        echo "</p>
        </header>
            <main>

                ";
        // line 84
        $this->displayBlock('main', $context, $blocks);
        // line 87
        echo "            </main>

        <footer class=\"footer\">
            &copy; 2019 aura
       </footer>
    <script src=\"http://localhost/aura1/assets/js/bookmark.js\"></script>

    <!--    <script src=\"http://localhost/aura1/assets/js/topnav.js\"></script>-->


</div>
</body>
</html>";
    }

    // line 11
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Pocetna";
    }

    // line 84
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
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
        return array (  159 => 85,  155 => 84,  148 => 11,  132 => 87,  130 => 84,  123 => 80,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index.html", "C:\\wamp64\\www\\aura1\\views\\_global\\index.html");
    }
}
