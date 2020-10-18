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
class __TwigTemplate_91dc71a910569e1fd65780312a10ad58d566e323aee44d276a273a1ba308d2ea extends \Twig\Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 11), "html", null, true);
            echo ".";
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
                    <p class=\"podatak\" >VELICINA:";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "velicina", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                </div>
                <div class=\" druga\">
                    <p class=\"podatak\">BOJA: ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 23), "html", null, true);
            echo "</p>
                    <p class=\"podatak\"> SIFRA PROIZVODA:";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                </div>

            </div>

        </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 34
        echo "
";
    }

    // line 37
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
        return array (  133 => 37,  128 => 34,  123 => 31,  110 => 24,  106 => 23,  100 => 20,  96 => 19,  82 => 12,  72 => 11,  66 => 10,  62 => 8,  58 => 7,  53 => 4,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/muski.html", "D:\\wamp64\\www\\aura1\\views\\Main\\muski.html");
    }
}
