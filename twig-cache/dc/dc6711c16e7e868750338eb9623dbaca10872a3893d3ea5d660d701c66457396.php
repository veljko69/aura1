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
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Product/showProductById.html", 1);
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
<div class=\"proizvod-jedan\">
<button ><a  style=\"text-decoration: none ; padding: 0 15px\" href=\"\" onclick=\" addBookmark( ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 6), "html", null, true);
        echo ") \">.... Dodaj u favorite....</a>
   </button>

    <div class=\"slika\">
        <img src=\"../assets/img/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 10), "html", null, true);
        echo ".jpg\" height=\"auto\" width=\"300\" alt=\"slika\"><br>
    </div>

    <div class=\"podaci-jedan\">

        <h4>Naziv proizvoda:</h4>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 15), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 15), "html", null, true);
        echo "<br><br>
        <h4>Cijena proizvoda:</h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 16), "html", null, true);
        echo "<br><br>
        <h4>Dostupno u velicinama:</h4>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "velicina", [], "any", false, false, false, 17), "html", null, true);
        echo "<br><br>
        <h4>Dostupno u bojama:</h4>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 18), "html", null, true);
        echo "<br><br>
        <h4>Sifra proizvoda:</h4>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 19), "html", null, true);
        echo "<br>
    </div>
</div>
<h3 style=\"
text-decoration: none;
font-style:italic;
    margin-top: 30px;
    border-top: 2px solid gray;
    text-align: center;
\"><a href=\"http://localhost/aura1/products/";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 28), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 28), "html", null, true);
        echo "\">Slicni proizvodi</a></h3>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 31
        echo "
";
    }

    // line 34
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 34), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 34), "html", null, true);
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
        return array (  115 => 34,  110 => 31,  102 => 28,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  72 => 15,  64 => 10,  57 => 6,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showProductById.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showProductById.html");
    }
}
