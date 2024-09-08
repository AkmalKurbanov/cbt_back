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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/pages/404.htm */
class __TwigTemplate_f13d819f2fb82d6e65aeae074766ce16 extends Template
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
<html>

<head>
    ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("seo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "</head>

<body class=\"";
        // line 9
        echo twig_escape_filter($this->env, ("page-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9)), "html", null, true);
        echo "\">

    <div class=\"wrapper\">
        <div class=\"content\">
            <div class=\"not-found\">
                <img class=\"not-found__lg\" src=";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/404.webp");
        echo " alt=\"\">
                <img class=\"not-found__sm\" src=";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/404-768.webp");
        echo " alt=\"\">
                <img class=\"not-found__xs\" src=";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("/assets/images/404-575.webp");
        echo " alt=\"\">
                <div class=\"not-found__bottom\">
                    <p>";
        // line 18
        echo twig_escape_filter($this->env, __("Страница не найдена"), "html", null, true);
        echo "</p>
                    <div class=\"not-found__btn-wrap\"><a class=\"btn btn--dark\"
                            href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, __("На главную"), "html", null, true);
        echo " </a><a
                            class=\"btn btn--dark\" href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours/index");
        echo "\">";
        echo twig_escape_filter($this->env, __("Страница туров"), "html", null, true);
        echo "</a> </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  82 => 20,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  56 => 9,  52 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    {% partial 'site/meta' %}
    {% component 'seo' %}
</head>

<body class=\"{{ 'page-'~this.page.id }}\">

    <div class=\"wrapper\">
        <div class=\"content\">
            <div class=\"not-found\">
                <img class=\"not-found__lg\" src={{ \"/assets/images/404.webp\" | theme }} alt=\"\">
                <img class=\"not-found__sm\" src={{ \"/assets/images/404-768.webp\" | theme }} alt=\"\">
                <img class=\"not-found__xs\" src={{ \"/assets/images/404-575.webp\" | theme }} alt=\"\">
                <div class=\"not-found__bottom\">
                    <p>{{'Страница не найдена'|_}}</p>
                    <div class=\"not-found__btn-wrap\"><a class=\"btn btn--dark\"
                            href=\"{{ 'home'|page }}\">{{'На главную'|_}} </a><a
                            class=\"btn btn--dark\" href=\"{{'tours/index'|page}}\">{{'Страница туров'|_}}</a> </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/pages/404.htm", "");
    }
}
