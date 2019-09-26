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

/* Product/showProductByName.html */
class __TwigTemplate_df124a5bf5982d2e005ff985341af5bf8b2e7e9cec31a6ce8e02f01481f4591b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'naslov' => [$this, 'block_naslov'],
            'main' => [$this, 'block_main'],
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
        $this->parent = $this->loadTemplate("_global/index.html", "Product/showProductByName.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 2), "html", null, true);
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        ob_start(function () { return ''; });
        // line 6
        echo "
<div class=\"proizvodi\" >
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 9
            echo "
    <div class=\"proizvod\" >
        <a href=\"http://localhost/aura1/product/";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 11), "html", null, true);
            echo " \" >
            <img src=\"../assets/img/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 12), "html", null, true);
            echo ".jpg\" height=\"auto\" width=\"300\" alt=\"slika\">
        </a>
        <a class=\"link\" href=\"http://localhost/aura1/product/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 14), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 14), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>

        <br>
        <p>cijena:</p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 17), "html", null, true);
            echo "
        <p>velicina:</p>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "velicina", [], "any", false, false, false, 18), "html", null, true);
            echo "<br>
        ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 19), "html", null, true);
            echo "<br>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "Product/showProductByName.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 24,  108 => 22,  99 => 19,  95 => 18,  91 => 17,  81 => 14,  76 => 12,  72 => 11,  68 => 9,  64 => 8,  60 => 6,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showProductByName.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showProductByName.html");
    }
}
