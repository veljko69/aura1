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

/* Main/home.html */
class __TwigTemplate_5271453c43ccf135909bf80ed07226d43cfbc723d2f1482ca77d9d4a6bdd2113 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Main/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<!--<p>";
        echo twig_escape_filter($this->env, ($context["podatak"] ?? null), "html", null, true);
        echo "</p>-->
<h1 style=\"color:white ; font-size: 1px\">muska i zenska odjeca</h1>

<div class=\"row flex-wrap   \">
    <div class=\" zenski-top  col-md-6\" style=\"  position: relative;
    text-align: center;
    color: white;\">
        <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/z\"> <img class=\"img-fluid  rounded flex-grow-1 mb-2 p-1\"
                          src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/pocetna-zensko.webp\"
                          alt=\"z slika\"/></a>
        <div class=\"centered\" style=\"
        border: gold solid 3px;
        color:black;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);\">ŽENSKA KOLEKCIJA</div>
    </div>


    <div class=\" muski-top col-md-6\" style=\" position: relative;
    text-align: center;
   \">
        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/m\"><img class=\"img-fluid  rounded flex-grow-1 mb-2  p-1\"
                         src=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/baner-muski.jpg\" alt=\"m slika\"/></a>
        <div class=\"centered\" style=\"
        border: gold solid 3px;
        color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);\">MUŠKA KOLEKCIJA</div>
    </div>

    </div>

</div>

<!--<div>-->
<!--    <h2 >PREPORUCUJEMO</h2>-->
<!--</div>-->

<div class=\"container  flex-wrap mt-5 col-12 d-inline-flex\">
    ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 48
            echo "
    <div class=\"proizvod flex-grow-1 mb-2\">
        <a class=\"slika\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/product/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 50), "html", null, true);
            echo "\">
            <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
            echo "/assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 51), "html", null, true);
            echo ".jpg\" height=\"auto\" width=\"350 \"
                 alt=\"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 52), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 52), "html", null, true);
            echo "\"></a>
        <!--            <a class=\"link\" href=\"product/";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 53), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 53), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 53), "html", null, true);
            echo "</a>-->

        <div class=\"podaci flex-column m-3 \" >
<!--            <div class=\"prva \">-->
                <p class=\"podatak\">CIJENA: ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 57), "html", null, true);
            echo "</p>
                <p class=\"podatak\">VELICINE: ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v1", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v2", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v3", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v4", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v5", [], "any", false, false, false, 58), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 59
$context["product"], "v6", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v7", [], "any", false, false, false, 59), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v8", [], "any", false, false, false, 59), "html", null, true);
            echo "</p>
<!--            </div>-->
<!--            <div class=\" druga\">-->
<!--                <p class=\"podatak\">BOJA: ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 62), "html", null, true);
            echo "</p>-->
<!--&lt;!&ndash;                <p class=\"podatak\"> SIFRA PROIZVODA:";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "sifra", [], "any", false, false, false, 63), "html", null, true);
            echo "</p>&ndash;&gt;-->
<!--            </div>-->

        </div>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 74
        echo "
";
    }

    public function getTemplateName()
    {
        return "Main/home.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 74,  190 => 70,  177 => 63,  173 => 62,  163 => 59,  152 => 58,  148 => 57,  137 => 53,  131 => 52,  125 => 51,  119 => 50,  115 => 48,  111 => 47,  89 => 28,  85 => 27,  67 => 12,  63 => 11,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\wamp64\\www\\aura1\\views\\Main\\home.html");
    }
}
