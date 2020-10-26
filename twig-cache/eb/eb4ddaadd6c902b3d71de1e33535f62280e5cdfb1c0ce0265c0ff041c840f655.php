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

/* Main/zenski.html */
class __TwigTemplate_1c1a9e6235dd74a975e824b80054fe6cd7e2d99260937b0b349b45b5fd80da5b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/zenski.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<h1 class=\"d-inline-flex sticky-top\" style=\"color: white;opacity: 0.4\">ZENSKA KOLEKCIJA-AURA</h1>
<div class=\"container  flex-wrap  col-12 d-inline-flex\">

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "
    <div class=\"proizvod flex-grow-1 mb-2\">
        <a  class=\"slika\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 10), "html", null, true);
            echo "\" >
            <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 11), "html", null, true);
            echo ".jpg\" height=\"auto\" width=\"350\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 11), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 11), "html", null, true);
            echo "\"></a>
<!--        <a class=\"link\" href=\"product/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 12), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 12), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 12), "html", null, true);
            echo "</a><br>-->
       <div class=\"podaci flex-column\">
           <div class=\"prva \">
               <p class=\"podatak\">CIJENA:";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
               <p class=\"podatak\" >VELICINE:";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v1", [], "any", false, false, false, 16), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v2", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v3", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v4", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v5", [], "any", false, false, false, 16), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 17
$context["product"], "v6", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v7", [], "any", false, false, false, 17), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v8", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>
           </div>
<!--           <div class=\" druga\">-->
<!--               <p class=\"podatak\">BOJA: ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>-->
<!--               <p class=\"podatak\"> SIFRA PROIZVODA:";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>-->
<!--           </div>-->

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
        echo "Zenska kolekcija";
    }

    public function getTemplateName()
    {
        return "Main/zenski.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 32,  138 => 30,  134 => 28,  121 => 21,  117 => 20,  107 => 17,  96 => 16,  92 => 15,  82 => 12,  72 => 11,  66 => 10,  62 => 8,  58 => 7,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/zenski.html", "C:\\wamp64\\www\\aura1\\views\\Main\\zenski.html");
    }
}
