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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/js/reset-form.htm */
class __TwigTemplate_4e871ec651a6b35e07c12504aa9adcc3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "\$('";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "').parents('form')[0].reset();";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/js/reset-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("\$('{{ id }}').parents('form')[0].reset();", "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/js/reset-form.htm", "");
    }
}
