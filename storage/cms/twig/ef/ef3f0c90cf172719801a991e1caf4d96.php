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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/default.htm */
class __TwigTemplate_a1f3e1ac59ea17250e741fafb0458b7b extends Template
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
        $context["categories"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "categories", [], "any", false, false, false, 1);
        // line 2
        $context["tours"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tours", [], "any", false, false, false, 2);
        // line 3
        $context["tour"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "tour", [], "any", false, false, false, 3);
        // line 4
        echo "





";
        // line 10
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == "tours-category")) {
            // line 11
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::page_category")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        } elseif ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source,         // line 12
($context["this"] ?? null), "page", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12) == "tours-tour")) {
            // line 13
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::page_tour")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 15
        echo "


";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 15,  59 => 13,  57 => 12,  53 => 11,  51 => 10,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set categories = __SELF__.categories %}
{% set tours = __SELF__.tours %}
{% set tour = __SELF__.tour %}






{% if this.page.id == 'tours-category' %}
{% partial __SELF__~\"::page_category\" %}
{% elseif this.page.id == \"tours-tour\" %}
{% partial __SELF__~\"::page_tour\" %}
{% endif %}



", "/home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/default.htm", "");
    }
}
