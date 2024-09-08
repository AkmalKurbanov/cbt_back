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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/initbiz/seostorm/components/seo/default.htm */
class __TwigTemplate_83e3a9cc1887878236e74745e581d031 extends Template
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
        $context["settings"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSettings", [], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "enable_site_meta", [], "any", false, false, false, 3)) {
            // line 4
            echo "<title>";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getTitle", [], "method", false, false, false, 4)));
            echo "</title>
";
            // line 5
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescription", [], "method", false, false, false, 5)) {
                // line 6
                echo "<meta name=\"description\" content=\"";
                echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getDescription", [], "method", false, false, false, 6)));
                echo "\" />
";
            }
            // line 8
            $context["canonical"] = twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSeoAttribute", [0 => "canonical_url"], "method", false, false, false, 8)));
            // line 9
            if (($context["canonical"] ?? null)) {
                // line 10
                echo "<link rel=\"canonical\" href=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getCanonicalUrl", [0 => ($context["canonical"] ?? null)], "method", false, false, false, 10), "html", null, true);
                echo "\">
";
            }
        }
        // line 13
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "enable_robots_meta", [], "any", false, false, false, 13)) {
            // line 14
            $context["advancedRobots"] = twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSeoAttribute", [0 => "robot_advanced"], "method", false, false, false, 14)));
            // line 15
            echo "<meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getRobots", [0 => ($context["advancedRobots"] ?? null)], "method", false, false, false, 15), "html", null, true);
            echo "\" />
";
        }
        // line 17
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "favicon_enabled", [], "any", false, false, false, 17)) {
            // line 18
            echo "<link rel=\"shortcut icon\" href=\"";
            echo $this->extensions['System\Twig\Extension']->appFilter("favicon.ico");
            echo "\" type=\"image/x-icon\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
            // line 19
            echo $this->extensions['System\Twig\Extension']->appFilter("favicon.ico");
            echo "\" />
";
        }
        // line 21
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "enable_og", [], "any", false, false, false, 21)) {
            // line 22
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['settings'] = ($context["settings"] ?? null)            ;
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@social.htm"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        // line 24
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "extra_meta", [], "any", false, false, false, 24)) {
            // line 25
            echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "extra_meta", [], "any", false, false, false, 25);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/initbiz/seostorm/components/seo/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 25,  98 => 24,  92 => 22,  90 => 21,  85 => 19,  80 => 18,  78 => 17,  72 => 15,  70 => 14,  68 => 13,  61 => 10,  59 => 9,  57 => 8,  51 => 6,  49 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set settings = __SELF__.getSettings() %}

{% if settings.enable_site_meta %}
<title>{{ include(template_from_string(__SELF__.getTitle())) }}</title>
{% if __SELF__.getDescription() %}
<meta name=\"description\" content=\"{{ include(template_from_string(__SELF__.getDescription())) }}\" />
{% endif %}
{% set canonical = include(template_from_string(__SELF__.getSeoAttribute('canonical_url'))) %}
{% if canonical %}
<link rel=\"canonical\" href=\"{{ __SELF__.getCanonicalUrl(canonical) }}\">
{% endif %}
{% endif %}
{% if settings.enable_robots_meta %}
{% set advancedRobots = include(template_from_string(__SELF__.getSeoAttribute('robot_advanced'))) %}
<meta name=\"robots\" content=\"{{ __SELF__.getRobots(advancedRobots) }}\" />
{% endif %}
{% if settings.favicon_enabled %}
<link rel=\"shortcut icon\" href=\"{{ 'favicon.ico'|app }}\" type=\"image/x-icon\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ 'favicon.ico'|app }}\" />
{% endif %}
{% if settings.enable_og %}
{% partial '@social.htm' settings=settings %}
{% endif %}
{% if settings.extra_meta %}
{{ settings.extra_meta|raw }}
{% endif %}
", "/home/m/mongu/cbtkarakol.com/public_html/plugins/initbiz/seostorm/components/seo/default.htm", "");
    }
}
