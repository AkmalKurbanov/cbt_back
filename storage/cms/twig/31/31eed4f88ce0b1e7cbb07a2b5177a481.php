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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/search-result.htm */
class __TwigTemplate_4bc0847dbf4f52bcb984c915e9999998 extends Template
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
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
            <li>";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo " </li>
        </ul>
    </div>
</div>
<div class=\"container\">
    <div class=\"title-wrap\">
        <h2 class=\"title\">";
        // line 11
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 11), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 13
        $context["results"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchResults"] ?? null), "results", [], "any", false, false, false, 13);
        // line 14
        echo "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 16
            echo "    ";
            // line 17
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = $context["result"]            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["searchResults"] ?? null) . "::searchresult.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 18
            echo "    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "    ";
            // line 20
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["searchResults"] ?? null) . "::no-results.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 23
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['results'] = ($context["results"] ?? null)        ;
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["searchResults"] ?? null) . "::pagination.htm")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "

</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/search-result.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  99 => 23,  96 => 22,  90 => 21,  85 => 20,  83 => 19,  78 => 18,  72 => 17,  70 => 16,  65 => 15,  62 => 14,  60 => 13,  55 => 11,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li>{{this.page.title}} </li>
        </ul>
    </div>
</div>
<div class=\"container\">
    <div class=\"title-wrap\">
        <h2 class=\"title\">{{this.page.title}}</h2>
    </div>
    {% set results = searchResults.results %}

    {% for result in results %}
    {# Display all results #}
    {% partial searchResults ~ '::searchresult.htm' result = result %}
    {% else %}
    {# No results found #}
    {% partial searchResults ~ '::no-results.htm' %}
    {% endfor %}

    {% partial searchResults ~ '::pagination.htm' results = results %}


</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/search-result.htm", "");
    }
}
