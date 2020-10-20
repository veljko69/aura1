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

/* Product/showProductByPolAndName.html */
class __TwigTemplate_c864b01114d2cd255d310890b8aea57d616e94930c3002253c76ad9198873745 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "Product/showProductByPolAndName.html", 1);
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
<div class=\"proizvodi\" >


<!--    <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "pol", [], "any", false, false, false, 8), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "naziv", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>-->
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "

    <div class=\"proizvod\" >

        <a href=\"http://localhost/aura1/product/";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 14), "html", null, true);
            echo " \" >
            <img src=\"http://localhost/aura1/assets/img/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "slika", [], "any", false, false, false, 15), "html", null, true);
            echo ".jpg\" height=\"auto\" width=\"300\" alt=\"slika\">
        </a>
        <a class=\"link\" href=\"http://localhost/aura1/product/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 17), "html", null, true);
            echo " \">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "pol", [], "any", false, false, false, 17), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "naziv", [], "any", false, false, false, 17), "html", null, true);
            echo "</a>

        <br>
        <br>
<div style=\"margin-left: 30px ; font-size: 20px\">
                <p>CIJENA:</p>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "cijena", [], "any", false, false, false, 22), "html", null, true);
            echo "
                <p>velicina:</p>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v1", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v2", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v3", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v4", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v5", [], "any", false, false, false, 23), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 24
$context["product"], "v6", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v7", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "v8", [], "any", false, false, false, 24), "html", null, true);
            echo "<br>


</div>
        <!--        ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "boja", [], "any", false, false, false, 28), "html", null, true);
            echo "<br>-->

<!--         Button trigger modal-->
<!--        <a href=\"http://localhost/aura1/api/product/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "proizvod_id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" type=\"button\"  class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#button-detalji\" style=\"width: 100%  \" >Detalji</a>-->
<!--            <button   type=\"button\"  class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#button-detalji\" style=\"width: 100% \">Vidi detalje</button>-->


    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "<!--    <script>-->
<!--        \$(document).ready(function(){-->
<!--            \$(\"#button_modal\").click(function(){-->
<!--    \$(\"#button-detalji\").modal();-->
<!--            });-->



<!--        function getProductData(){-->
<!--            fetch('http://localhost/aura1/api/product/";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "proizvod_id", [], "any", false, false, false, 47), "html", null, true);
        echo "')-->
<!--                .then(result => result.json())-->
<!--                .then(data => {-->
<!--                    showReceivedData(data)-->
<!--                });-->

<!--            function showReceivedData(data){-->
<!--console.log(data);-->
<!--                document.querySelector('.modal-body').innerHTML = data;-->

<!--                    document.querySelector(\".cijena\").innerHTML = JSON.stringify(data.product.cijena);-->
<!--                    document.querySelector('#velicina').innerHTML = JSON.stringify(data.product.velicina);-->
<!--                    document.querySelector('#pol').innerHTML = JSON.stringify(data.product.pol);-->
<!--                    document.querySelector('#boja').innerHTML = JSON.stringify(data.product.boja)-->


<!--            }-->
<!--        }-->
<!--        });-->
<!--    </script>-->
<!--</div>-->
<!--<div class=\"cijena\" >cijenaaaaaaa</div>-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "Product/showProductByPolAndName.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  140 => 38,  127 => 31,  121 => 28,  110 => 24,  99 => 23,  95 => 22,  83 => 17,  78 => 15,  74 => 14,  68 => 10,  64 => 9,  58 => 8,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/showProductByPolAndName.html", "C:\\wamp64\\www\\aura1\\views\\Product\\showProductByPolAndName.html");
    }
}
