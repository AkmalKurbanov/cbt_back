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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/layouts/static.htm */
class __TwigTemplate_d952854aec3c69ef7d567b7c39cbf5ce extends Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["extraData"] ?? null), "textImgSection", [], "any", false, false, false, 1));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 2
            echo "


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 11
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("GA4-head"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "    ";
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("seo"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "</head>

<body class=\"";
        // line 16
        echo twig_escape_filter($this->env, ("page-" . Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16)), "html", null, true);
        echo "\">

";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("GA4-body"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "    <div class=\"wrapper\">
        <div class=\"content\">
       
            ";
        // line 22
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "url", [], "any", false, false, false, 22) == "/")) {
            // line 23
            echo "            ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/hero"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 24
            echo "
            ";
        } else {
            // line 26
            echo "            <!-- Header -->
            ";
            // line 27
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/header"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 28
            echo "
            ";
        }
        // line 30
        echo "

            <!-- Content -->
            <section id=\"layout-content\">

                <div class=\"breadcrumbs\">
                    <div class=\"container\">

                        ";
        // line 38
        if (($context["breadcrumbs"] ?? null)) {
            // line 39
            echo "
                        <ul>

                            <li><a href=\"";
            // line 42
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
            echo "\">";
            echo twig_escape_filter($this->env, __("Главная"), "html", null, true);
            echo "</a></li>
                            ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 44
                echo "                            <li class=\"";
                echo ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["breadcrumb"], "isActive", [], "any", false, false, false, 44)) ? ("active") : (""));
                echo "\">

                                <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["breadcrumb"], "url", [], "any", false, false, false, 46), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["breadcrumb"], "title", [], "any", false, false, false, 46), "html", null, true);
                echo "</a>

                            </li>

                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
                        </ul>

                        ";
        }
        // line 55
        echo "                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"title-wrap\">
                        <h2 class=\"title\">";
        // line 59
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "title", [], "any", false, false, false, 59), "html", null, true);
        echo "</h2>
                    </div>
                    <div class=\"pattern\">
                        ";
        // line 62
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->pageFunction();
        // line 63
        echo "                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "    </div>


    
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/layouts/static.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 69,  184 => 68,  177 => 63,  175 => 62,  169 => 59,  163 => 55,  157 => 51,  144 => 46,  138 => 44,  134 => 43,  128 => 42,  123 => 39,  121 => 38,  111 => 30,  107 => 28,  103 => 27,  100 => 26,  96 => 24,  91 => 23,  89 => 22,  84 => 19,  80 => 18,  75 => 16,  71 => 14,  66 => 13,  61 => 12,  57 => 11,  50 => 6,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for fields in extraData.textImgSection %}



{% endfor %}

<!DOCTYPE html>
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

                <div class=\"breadcrumbs\">
                    <div class=\"container\">

                        {% if breadcrumbs %}

                        <ul>

                            <li><a href=\"{{ 'home'|page }}\">{{'Главная'|_}}</a></li>
                            {% for breadcrumb in breadcrumbs %}
                            <li class=\"{{ breadcrumb.isActive ? 'active' : '' }}\">

                                <a href=\"{{ breadcrumb.url }}\">{{ breadcrumb.title }}</a>

                            </li>

                            {% endfor %}

                        </ul>

                        {% endif %}
                    </div>
                </div>
                <div class=\"container\">
                    <div class=\"title-wrap\">
                        <h2 class=\"title\">{{this.page.title}}</h2>
                    </div>
                    <div class=\"pattern\">
                        {% page  %}
                    </div>
                </div>
            </section>
        </div>
        <!-- Footer -->
        {% partial 'site/footer' %}
    </div>


    
</body>

</html>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/layouts/static.htm", "");
    }
}
