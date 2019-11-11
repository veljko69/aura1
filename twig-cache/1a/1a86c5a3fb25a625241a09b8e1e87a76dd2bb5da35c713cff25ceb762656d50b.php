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
class __TwigTemplate_e5ed5c792988156ff80a9c8ba3d97bbc18d34df05f42d362a5a2948a11e25363 extends \Twig\Template
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
        return "_global/index.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("_global/index.html", "Main/home.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start(function () { return ''; });
        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, ($context["podatak"] ?? null), "html", null, true);
        echo "</p>
<div class=\"pocetna\">
    <div class=\"z-pocetna\">


        <a href=\"zenski\"> <img src=\"http://localhost/aura1/assets/img/people-2563491_1280.jpg\" height=\"425\" width=\"600\"
                               alt=\"z slika\"/></a>
    </div>
    <div class=\"m-pocetna\">

        <a href=\"muski\"><img src=\"http://localhost/aura1/assets/img/black-and-white-1283231_1280.jpg\" height=\"425\"
                             width=\"600\" alt=\"m slika\"/></a>
    </div>
</div>
<div class=\"proizvodi\">
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "
    <div class=\"proizvod\">
        <a href=\"product/";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 22), "html", null, true);
            echo "\"><img src=\"assets/img/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 22), "html", null, true);
            echo ".jpg\" height=\"auto\"
                                                        width=\"300\"></a>
        <a class=\"link\" href=\"product/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 24), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 24), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 24), "html", null, true);
            echo "</a>

        <br>
        <p>cijena:</p>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 27), "html", null, true);
            echo "
        <p>velicina:</p>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "velicina", [], "any", false, false, false, 28), "html", null, true);
            echo "<br>
        ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 29), "html", null, true);
            echo "<br>

    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
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
        return array (  119 => 36,  114 => 33,  104 => 29,  100 => 28,  96 => 27,  86 => 24,  79 => 22,  75 => 20,  71 => 19,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "C:\\wamp64\\www\\aura1\\views\\Main\\home.html");
    }
}
