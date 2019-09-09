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
        echo "
<div class=\"z-pocetna\">


  <a href=\"zenski\"> <img src=\"http://localhost/aura1/assets/img/people-2563491_1280.jpg\" height=\"850\" width=\"1200\" alt=\"z slika\"/></a>
</div>
<div class=\"m-pocetna\">

   <a href=\"muski\"><img src=\"http://localhost/aura1/assets/img/black-and-white-1283231_1280.jpg\" height=\"850\" width=\"1200\" alt=\"m slika\"/></a>
</div>

";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 16
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
        return array (  66 => 16,  52 => 4,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Main/home.html", "D:\\wamp64\\www\\aura1\\views\\Main\\home.html");
    }
}
