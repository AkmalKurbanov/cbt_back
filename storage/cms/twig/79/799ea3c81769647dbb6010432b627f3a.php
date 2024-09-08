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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/offline/sitesearch/components/searchresults/pagination.htm */
class __TwigTemplate_806d67baaadcf02098264eb6da59ce72 extends Template
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
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["results"] ?? null), "hasPages", [], "any", false, false, false, 1)) {
            // line 2
            echo "    ";
            echo ($context["results"] ?? null);
            echo "
";
        }
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/offline/sitesearch/components/searchresults/pagination.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if results.hasPages %}
    {{ results | raw }}
{% endif %}

", "/home/m/mongu/cbtkarakol.com/public_html/plugins/offline/sitesearch/components/searchresults/pagination.htm", "");
    }
}
