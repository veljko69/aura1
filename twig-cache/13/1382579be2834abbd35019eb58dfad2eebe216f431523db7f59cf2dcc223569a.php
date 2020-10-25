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

/* Product/showKorpa1.html */
class __TwigTemplate_e708ee22e969a6479c46a4409758390e2446ff260e57e2930737e0b5c0e0402b extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index1.html", "Product/showKorpa1.html", 1);
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

<div class=\"container d-flex flex-wrap justify-content-center mt-5 col-md-9 \">


    <div class=\" row flex-wrap col-md-8 \">

        <div class=\" col-md-4 \">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, ($context["BASE"] ?? null), "html", null, true);
        echo "/assets/img/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "slika", [], "any", false, false, false, 12), "html", null, true);
        echo ".jpg\" height=\"230px\" width=\"auto\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
        </div>

        <div class=\"d-block col-md-8 w-100 justify-content-end \">

            <div class=\"d-flex justify-content-center\">
                <a href=\"http://localhost/aura1/admin/";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 18), "html", null, true);
        echo "/delete\"
                   class=\"badge badge-light p-2 w-100 justify-content-end\">Izbaci iz korpe</a>
            </div>

            <div>
                <h4 style=\"margin-top: 10px\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 23), "html", null, true);
        echo "</h4><br>
            </div>
            <div>
                Sifra : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sifra", [], "any", false, false, false, 26), "html", null, true);
        echo "<br>
                Boja :";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "boja", [], "any", false, false, false, 27), "html", null, true);
        echo "
            </div>

        </div>
    </div>


    <div class=\"col-md-4 justify-content-end float-right\">
        <div class=\"bg-light\">

            <h5 class=\"d-flex justify-content-center  card-header \">MEDUZBIR</h5>

        </div>
        <div class=\"row p-2 mt-2\">
            <h4 class=\"d-flex justify-content-start col-6\"> SUMA: </h4>
            <h4 class=\"d-flex justify-content-end col-6\"> ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "cijena", [], "any", false, false, false, 42), "html", null, true);
        echo " km</h4><br>

        </div>
        <div class=\"row p-2 mt-2\">
            <h4 class=\"d-flex justify-content-start col-6\"> DOSTAVA: </h4>
            <h4 class=\"d-flex justify-content-end col-6\"> 7.00 km</h4><br>

        </div>


    </div>


</div>


";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "Product/showKorpa1.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  93 => 27,  89 => 26,  83 => 23,  75 => 18,  62 => 12,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showKorpa1.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showKorpa1.html");
    }
}
