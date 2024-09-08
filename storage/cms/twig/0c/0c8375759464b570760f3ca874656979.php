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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/layouts/default.htm */
class __TwigTemplate_61325998bbd6d600a5bf0a5982b98ec0 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("GA4-head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("seo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 8
        echo "     
    

</head>

<body class=\"";
        // line 13
        echo twig_escape_filter($this->env, ("page-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "id", [], "any", false, false, false, 13)), "html", null, true);
        echo "\">
    
    ";
        // line 15
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("GA4-body"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 16
        echo "
    <div class=\"wrapper\">
        <div class=\"content\">
           
            ";
        // line 20
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "url", [], "any", false, false, false, 20) == "/")) {
            // line 21
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/hero"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 22
            echo "
            ";
        } else {
            // line 24
            echo "            <!-- Header -->
            ";
            // line 25
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 26
            echo "
            ";
        }
        // line 28
        echo "

            <!-- Content -->
            <section id=\"layout-content\">
                ";
        // line 32
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction();
        // line 33
        echo "\t\t\t\t\t\t\t\t
            </section>
        </div>
        <!-- Footer -->
        
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "        
    </div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 39,  116 => 38,  109 => 33,  107 => 32,  101 => 28,  97 => 26,  93 => 25,  90 => 24,  86 => 22,  81 => 21,  79 => 20,  73 => 16,  69 => 15,  64 => 13,  57 => 8,  52 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {% partial 'GA4-head' %}
    {% partial 'site/meta' %}
    {% component 'seo' %}
     
    

</head>

<body class=\"{{ 'page-'~this.page.id }}\">
    
    {% partial 'GA4-body' %}

    <div class=\"wrapper\">
        <div class=\"content\">
           
            {% if this.page.url == '/' %}
            {% partial 'site/hero' %}

            {% else %}
            <!-- Header -->
            {% partial 'site/header' %}

            {% endif %}


            <!-- Content -->
            <section id=\"layout-content\">
                {% page %}
\t\t\t\t\t\t\t\t
            </section>
        </div>
        <!-- Footer -->
        
        {% partial 'site/footer' %}
        
    </div>

</body>

</html>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/layouts/default.htm", "");
    }
}
