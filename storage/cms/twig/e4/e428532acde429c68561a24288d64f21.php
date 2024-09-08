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

/* C:\work\backend\domains\cbt-karakol\plugins/initbiz/seostorm/components/seo/social.htm */
class __TwigTemplate_71869ad5f19c7ba53fa759c6e3e42e65 extends Template
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
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "og_site_name", [], "method", false, false, false, 1)) {
            // line 2
            echo "<meta property=\"og:site_name\" content=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "og_site_name", [], "any", false, false, false, 2), "html", null, true);
            echo "\">
";
        }
        // line 4
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgType", [], "method", false, false, false, 4)) {
            // line 5
            echo "<meta property=\"og:type\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgType", [], "method", false, false, false, 5)));
            echo "\" />
";
        }
        // line 7
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgTitle", [], "method", false, false, false, 7)) {
            // line 8
            echo "<meta property=\"og:title\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgTitle", [], "method", false, false, false, 8)));
            echo "\" />
";
        }
        // line 10
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgDescription", [], "method", false, false, false, 10)) {
            // line 11
            echo "<meta property=\"og:description\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgDescription", [], "method", false, false, false, 11)));
            echo "\" />
";
        }
        // line 13
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgImage", [], "method", false, false, false, 13)) {
            // line 14
            echo "<meta property=\"og:image\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgImage", [], "method", false, false, false, 14)));
            echo "\" />
";
        }
        // line 16
        $context["ogUrl"] = twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSeoAttribute", [0 => "og_url"], "method", false, false, false, 16)));
        // line 17
        $context["canonical"] = twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getSeoAttribute", [0 => "canonical_url"], "method", false, false, false, 17)));
        // line 18
        if ((($context["ogUrl"] ?? null) || ($context["canonical"] ?? null))) {
            // line 19
            echo "<meta property=\"og:url\" content=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgUrl", [0 => ($context["ogUrl"] ?? null), 1 => ($context["canonical"] ?? null)], "method", false, false, false, 19), "html", null, true);
            echo "\" />
";
        }
        // line 21
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "og_locale", [], "any", false, false, false, 21)) {
            // line 22
            echo "<meta property=\"og:locale\" content=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "og_locale", [], "any", false, false, false, 22), "html", null, true);
            echo "\" />
";
        }
        // line 24
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "__SELF__", [], "any", false, false, false, 24), "getOgVideo", [], "method", false, false, false, 24)) {
            // line 25
            echo "<meta property=\"og:video\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgVideo", [], "method", false, false, false, 25)));
            echo "\" />
";
        }
        // line 27
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "og_locale_alternate", [], "any", false, false, false, 27)) {
            // line 28
            echo "<meta property=\"og:locale:alternate\" content=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "og_locale_alternate", [], "any", false, false, false, 28), "html", null, true);
            echo "\" />
";
        }
        // line 30
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fb_app_id", [], "any", false, false, false, 30)) {
            // line 31
            echo "<meta property=\"fb:app_id\" content=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["settings"] ?? null), "fb_app_id", [], "any", false, false, false, 31), "html", null, true);
            echo "\" />
";
        }
        // line 33
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgCard", [], "method", false, false, false, 33)) {
            // line 34
            echo "<meta name=\"twitter:card\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgCard", [], "method", false, false, false, 34)));
            echo "\">
";
        }
        // line 36
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgTitle", [], "method", false, false, false, 36)) {
            // line 37
            echo "<meta name=\"twitter:title\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgTitle", [], "method", false, false, false, 37)));
            echo "\">
";
        }
        // line 39
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgDescription", [], "method", false, false, false, 39)) {
            // line 40
            echo "<meta name=\"twitter:description\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgDescription", [], "method", false, false, false, 40)));
            echo "\">
";
        }
        // line 42
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgImage", [], "method", false, false, false, 42)) {
            // line 43
            echo "<meta name=\"twitter:image\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getOgImage", [], "method", false, false, false, 43)));
            echo "\" />
";
        }
        // line 45
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getTwitterSite", [], "method", false, false, false, 45)) {
            // line 46
            echo "<meta name=\"twitter:site\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getTwitterSite", [], "method", false, false, false, 46)));
            echo "\">
";
        }
        // line 48
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getTwitterCreator", [], "method", false, false, false, 48)) {
            // line 49
            echo "<meta name=\"twitter:creator\" content=\"";
            echo twig_include($this->env, $context, $this->env->getFunction('template_from_string')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "getTwitterCreator", [], "method", false, false, false, 49)));
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\plugins/initbiz/seostorm/components/seo/social.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 49,  161 => 48,  155 => 46,  153 => 45,  147 => 43,  145 => 42,  139 => 40,  137 => 39,  131 => 37,  129 => 36,  123 => 34,  121 => 33,  115 => 31,  113 => 30,  107 => 28,  105 => 27,  99 => 25,  97 => 24,  91 => 22,  89 => 21,  83 => 19,  81 => 18,  79 => 17,  77 => 16,  71 => 14,  69 => 13,  63 => 11,  61 => 10,  55 => 8,  53 => 7,  47 => 5,  45 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.og_site_name() %}
<meta property=\"og:site_name\" content=\"{{ settings.og_site_name }}\">
{% endif %}
{% if __SELF__.getOgType() %}
<meta property=\"og:type\" content=\"{{ include(template_from_string(__SELF__.getOgType())) }}\" />
{% endif %}
{% if __SELF__.getOgTitle() %}
<meta property=\"og:title\" content=\"{{ include(template_from_string(__SELF__.getOgTitle())) }}\" />
{% endif %}
{% if __SELF__.getOgDescription() %}
<meta property=\"og:description\" content=\"{{ include(template_from_string(__SELF__.getOgDescription())) }}\" />
{% endif %}
{% if __SELF__.getOgImage() %}
<meta property=\"og:image\" content=\"{{ include(template_from_string(__SELF__.getOgImage())) }}\" />
{% endif %}
{% set ogUrl = include(template_from_string(__SELF__.getSeoAttribute('og_url'))) %}
{% set canonical = include(template_from_string(__SELF__.getSeoAttribute('canonical_url'))) %}
{% if ogUrl or canonical %}
<meta property=\"og:url\" content=\"{{ __SELF__.getOgUrl(ogUrl, canonical) }}\" />
{% endif %}
{% if __SELF__.og_locale %}
<meta property=\"og:locale\" content=\"{{ settings.og_locale }}\" />
{% endif %}
{% if __SELF__.__SELF__.getOgVideo() %}
<meta property=\"og:video\" content=\"{{ include(template_from_string(__SELF__.getOgVideo())) }}\" />
{% endif %}
{% if __SELF__.og_locale_alternate %}
<meta property=\"og:locale:alternate\" content=\"{{ settings.og_locale_alternate }}\" />
{% endif %}
{% if __SELF__.fb_app_id %}
<meta property=\"fb:app_id\" content=\"{{ settings.fb_app_id }}\" />
{% endif %}
{% if __SELF__.getOgCard() %}
<meta name=\"twitter:card\" content=\"{{ include(template_from_string(__SELF__.getOgCard())) }}\">
{% endif %}
{% if __SELF__.getOgTitle() %}
<meta name=\"twitter:title\" content=\"{{ include(template_from_string(__SELF__.getOgTitle())) }}\">
{% endif %}
{% if __SELF__.getOgDescription() %}
<meta name=\"twitter:description\" content=\"{{ include(template_from_string(__SELF__.getOgDescription())) }}\">
{% endif %}
{% if __SELF__.getOgImage() %}
<meta name=\"twitter:image\" content=\"{{ include(template_from_string(__SELF__.getOgImage())) }}\" />
{% endif %}
{% if __SELF__.getTwitterSite() %}
<meta name=\"twitter:site\" content=\"{{ include(template_from_string(__SELF__.getTwitterSite())) }}\">
{% endif %}
{% if __SELF__.getTwitterCreator() %}
<meta name=\"twitter:creator\" content=\"{{ include(template_from_string(__SELF__.getTwitterCreator())) }}\" />
{% endif %}
", "C:\\work\\backend\\domains\\cbt-karakol\\plugins/initbiz/seostorm/components/seo/social.htm", "");
    }
}
