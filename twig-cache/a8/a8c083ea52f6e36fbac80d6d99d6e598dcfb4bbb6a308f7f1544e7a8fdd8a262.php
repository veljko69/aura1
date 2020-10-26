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

/* Main/sizeplus.html */
class __TwigTemplate_88543a5ac54ca04dc4ca00bdbffbe8ad5f819e5ce7767e0f62c59a5d113c9b15 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/sizeplus.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<div class=\"container  flex-wrap  col-12 d-inline-flex\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 6
            echo "
    <div class=\"proizvod flex-grow-1 mb-2\">
        <a class=\"slika\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 8), "html", null, true);
            echo "\" >
            <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 9), "html", null, true);
            echo ".jpg\" height=\"auto\" width=\"350\">
        </a>

<!--        <a class=\"link\" href=\"product/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 12), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 12), "html", null, true);
            echo "</a><br>-->


        <div class=\"podaci flex-column\">
            <div class=\"prva \">
                <p class=\"podatak\">CIJENA:";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
                <p class=\"podatak\" >VELICINA:";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "velicina", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
            </div>
            <div class=\" druga\">
                <p class=\"podatak\">BOJA: ";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                <p class=\"podatak\"> SIFRA PROIZVODA:";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>
            </div>

        </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 30
        echo "
";
    }

    // line 32
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Size plus ";
    }

    public function getTemplateName()
    {
        return "Main/sizeplus.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 32,  120 => 30,  116 => 28,  104 => 22,  100 => 21,  94 => 18,  90 => 17,  78 => 12,  70 => 9,  64 => 8,  60 => 6,  56 => 5,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/sizeplus.html", "C:\\wamp64\\www\\aura1\\views\\Main\\sizeplus.html");
    }
}
