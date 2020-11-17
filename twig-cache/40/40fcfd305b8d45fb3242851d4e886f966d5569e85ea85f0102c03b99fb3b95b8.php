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

/* _global/index1.html */
class __TwigTemplate_8d00065b569547f71e73967d2c0d4f8c384b2865065d0824e233c6add8b193ae extends \Twig\Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <link rel=\"canonical\" href=\"\" />
    <meta name=\"description\" content=\"Otkrijte novu kolekciju trgovine AURA online. Posljednji trendovi za žene, muškarce.\">
    <meta name=\"keywords\" content=\"Jakne, kosulje, jeans,dzemperi,majice, haljine, veliki brojevi,suknje, duksevi,trenerke \">


    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"
          integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">

    <script src=\"https://kit.fontawesome.com/9a79e9da94.js\" crossorigin=\"anonymous\"></script>

    <title> ";
        // line 19
        $this->displayBlock('naslov', $context, $blocks);
        echo "-AURA</title>
</head>
<body>


<nav class=\"navbar navbar-expand-lg navbar-light bg-light \" >
    <a class=\"navbar-brand pb-4 ml-5 mr-5\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/home\" style=\"font-size:3em\">aura</a>

    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\"
            aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>

    <div class=\"collapse navbar-collapse ml-5 \" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">

            <li class=\"nav-item active ml-2 mr-2\">
                <a class=\"nav-link\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/home/\">POCETNA STRANICA <span class=\"sr-only\">(current)</span></a>
            </li>


            <li class=\"nav-item dropdown ml-2 mr-2\">
                <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdownMenuLink\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    MUSKA KOLEKCIJA
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">

                    <a class=\"dropdown-item\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/m\">CIJELA MUSKA KOLEKCIJA</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/pantalone\">Pantalone</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/kosulja\">Kosulja</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/sako\">Sako</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/jakna\">Jakna</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/majica\">Majica</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 53
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/kais\">Kais</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/kaput\">Kaput</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/m/odijelo\">Odijelo</a>
                </div>
            </li>

            <li class=\"nav-item dropdown ml-2 mr-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/z\" id=\"navbarDropdownMenuLink\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ZENSKA KOLEKCIJA
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/z\">CIJELA ZENSKA KOLEKCIJA</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 66
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/pantalone\">Pantalone</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/kosulja\">Kosulja</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/haljina\">Haljina</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 69
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/jakna\">Jakna</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 70
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/majica\">Majica</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/kais\">Kais</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 72
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/suknja\">Suknja</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/bluza\">Bluza</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/products/z/blejzer\">Blejzer</a>
                </div>
            </li>

            <li class=\"nav-item dropdown ml-2 mr-2\">
                <a class=\"nav-link dropdown-toggle\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/sizeplus\" id=\"navbarDropdownMenuLink\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    SIZE PLUS KOLEKCIJA
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/sizeplus\">ZA PUNIJE DAME</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/sizeplus\">ZA PUNIJE MUSKARCE</a>
                </div>
            </li>

            <li class=\"nav-item dropdown ml-2 mr-2\">
                <a class=\"nav-link dropdown-toggle\"  id=\"navbarDropdownMenuLink\" role=\"button\"
                   data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    REGISTRACIJA/PRIJAVA
                </a>
                <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
                    <a class=\"dropdown-item\" href=\"";
        // line 95
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/getregister\">Registracija</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/getlogin\">Prijava</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/user/logout\">Odjava</a>
                </div>
            </li>

          <li>
              <div class=\"bookmarks\">*</div>
              <div class=\"cijena\">*</div>
              <div class=\"btn-secondary\" ><a href=\"\" onclick=\"clearBookmark()\"> Izbrisi</a></div>
          </li>

        </ul>
    </div>
</nav>

";
        // line 111
        $this->displayBlock('main', $context, $blocks);
        // line 114
        echo "<hr class=\"m-y-2\">
<footer class=\" d-flex justify-content-center mt-5 border-top fixed-bottom p-2\" style=\"background-color: #e1e1e5\"> & copy; Aura 2019</footer>


<script src=\"http://localhost/aura1/assets/js/bookmark.js\"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"
        integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"
        integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\"
        crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"
        integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\"
        crossorigin=\"anonymous\"></script>
</body>
</html>";
    }

    // line 19
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Muska i zenska odjeca";
    }

    // line 111
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "
";
    }

    public function getTemplateName()
    {
        return "_global/index1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 112,  268 => 111,  261 => 19,  240 => 114,  238 => 111,  221 => 97,  217 => 96,  213 => 95,  200 => 85,  196 => 84,  188 => 79,  180 => 74,  176 => 73,  172 => 72,  168 => 71,  164 => 70,  160 => 69,  156 => 68,  152 => 67,  148 => 66,  144 => 65,  136 => 60,  128 => 55,  124 => 54,  120 => 53,  116 => 52,  112 => 51,  108 => 50,  104 => 49,  100 => 48,  96 => 47,  82 => 36,  68 => 25,  59 => 19,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_global/index1.html", "C:\\wamp64\\www\\aura1\\views\\_global\\index1.html");
    }
}
