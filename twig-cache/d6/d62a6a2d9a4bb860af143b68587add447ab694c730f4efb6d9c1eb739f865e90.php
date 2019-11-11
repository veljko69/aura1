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

/* UserDashboard/index.html */
class __TwigTemplate_c0eb22ba7a52f5b6288f623cd0e98ef2eba6a60a1c8ddd1b647f3417cf2717f8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("_global/index.html", "UserDashboard/index.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_naslov($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Dashboard";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        ob_start(function () { return ''; });
        // line 6
        echo "<div class=\"dashboard\">
    #Dashboard......

</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "UserDashboard/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 11,  60 => 6,  58 => 5,  54 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "UserDashboard/index.html", "C:\\wamp64\\www\\aura1\\views\\userDashboard\\index.html");
    }
}
