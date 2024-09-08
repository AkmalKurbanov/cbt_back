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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/offline/sitesearch/components/searchresults/no-results.htm */
class __TwigTemplate_922f3e9dd90aeaa0db080bc8731698e5 extends Template
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
        echo "<p>
  ";
        // line 2
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "locale", [], "any", false, false, false, 2) == "ru")) {
            // line 3
            echo "  Поиск не дал результатов.
  ";
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 4
($context["this"] ?? null), "locale", [], "any", false, false, false, 4) == "en")) {
            // line 5
            echo "  The search returned no results.
  ";
        }
        // line 7
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/offline/sitesearch/components/searchresults/no-results.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>
  {% if this.locale == \"ru\" %}
  Поиск не дал результатов.
  {% elseif this.locale == \"en\" %}
  The search returned no results.
  {% endif %}
</p>", "/home/m/mongu/cbtkarakol.com/public_html/plugins/offline/sitesearch/components/searchresults/no-results.htm", "");
    }
}
