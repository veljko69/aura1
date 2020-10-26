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

/* Main/muski.html */
class __TwigTemplate_1e1ffac327e118ce5c086f387ada97eadc9e9ae4077841376bb0e0fb2208b0ee extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/muski.html", 1);
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
<h1 class=\"d-inline-flex sticky-top\" style=\" font-size: 20px;color: white ;opacity: 0.4\">MUSKA KOLEKCIJA <span>-jakne pantalone kosulje majice sakoi dzemperi</span></h1>
<div class=\"container  flex-wrap  col-12 d-inline-flex\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "
        <div class=\"proizvod flex-grow-1 mb-4\" style=\"position: relative\" >
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
            echo ".jpg\" height=\"auto\" width=\"350 \" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 11), "html", null, true);
            echo "\"></a>
<!--            <a class=\"link\" href=\"product/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 12), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 12), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 12), "html", null, true);
            echo "</a>-->

            <div class=\" flex-column  pl-5 pr-5\" style=\"position:absolute;left: 0px; top: 365px;background-color:ghostwhite; opacity:0\"
                 onmouseout=\"this.style='position:absolute;left: 0px; top: 365px;background-color:ghostwhite; opacity:0;'\"
                 onmouseover=\"this.style='position:absolute;left: 0px; top: 365px;background-color:ghostwhite; opacity:0.8 ;'\"
                 >
                <div class=\"prva \">
                    <p class=\"podatak\">CIJENA:";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                    <p class=\"podatak\" >VELICINE:";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v1", [], "any", false, false, false, 20), "html", null, true);
            echo "   ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v2", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v3", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v4", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v5", [], "any", false, false, false, 20), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 21
$context["product"], "v6", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v7", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v8", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                </div>
<!--                <div class=\" druga\">-->
<!--                    <p class=\"podatak\">BOJA: ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>-->
<!--                    <p class=\"podatak\"> SIFRA PROIZVODA:";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 25), "html", null, true);
            echo "</p>-->
<!--                </div>-->

            </div>

        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 35
        echo "
";
    }

    // line 38
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Muska kolekcija";
    }

    public function getTemplateName()
    {
        return "Main/muski.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 38,  141 => 35,  136 => 32,  123 => 25,  119 => 24,  109 => 21,  98 => 20,  94 => 19,  80 => 12,  72 => 11,  66 => 10,  62 => 8,  58 => 7,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/muski.html", "C:\\wamp64\\www\\aura1\\views\\Main\\muski.html");
    }
}
