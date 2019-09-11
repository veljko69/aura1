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

    <div class=\"slika\">
        <img src=\"../assets/img/";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 8), "html", null, true);
        echo ".jpg\" height=\"auto\" width=\"300\"><br>
    </div>

    <div class=\"podaci\">

        <h4>Naziv proizvoda:</h4>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 13), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 13), "html", null, true);
        echo "<br><br>
        <h4>Cijena proizvoda:</h4>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 14), "html", null, true);
        echo "<br><br>
        <h4>Dostupno u velicinama:</h4>";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "velicina", [], "any", false, false, false, 15), "html", null, true);
        echo "<br><br>
        <h4>Dostupno u baojama:</h4>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 16), "html", null, true);
        echo "<br><br>
        <h4>Sifra proizvoda:</h4>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 17), "html", null, true);
        echo "<br>
    </div>
</div>
<h3 style=\"
    margin-top: 30px;
    border-top: 2px solid gray;
    text-align: center;
\">Slicni proizvodi</h3>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 26
        echo "
";
    }

    // line 29
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Proizvod";
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
        return array (  102 => 29,  97 => 26,  85 => 17,  81 => 16,  77 => 15,  73 => 14,  67 => 13,  59 => 8,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showProductById.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showProductById.html");
    }
}
