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

/* C:\work\backend\domains\cbt-karakol\plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_891f34f59c2f63b3e48ae550ec4c9833 extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            if ( !Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 2), "isHidden", [], "any", false, false, false, 2)) {
                // line 3
                echo "        <li role=\"presentation\" class=\"";
                echo ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 3)) ? ("active") : (""));
                echo " ";
                echo ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 3)) ? ("child-active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 3), "cssClass", [], "any", false, false, false, 3), "html", null, true);
                echo "\">
            ";
                // line 4
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 4)) {
                    // line 5
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 5), "html", null, true);
                    echo "\" ";
                    echo ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "viewBag", [], "any", false, false, false, 5), "isExternal", [], "any", false, false, false, 5)) ? ("target=\"_blank\"") : (""));
                    echo ">
                    ";
                    // line 6
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 6), "html", null, true);
                    echo "
                </a>
            ";
                } else {
                    // line 9
                    echo "                <span>";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
                    echo "</span>
            ";
                }
                // line 11
                echo "
            ";
                // line 12
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "                <ul>";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 13)                    ;
                    echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
            ";
                }
                // line 15
                echo "        </li>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 15,  79 => 13,  77 => 12,  74 => 11,  68 => 9,  62 => 6,  55 => 5,  53 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for item in items %}
    {% if not item.viewBag.isHidden %}
        <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }} {{ item.viewBag.cssClass }}\">
            {% if item.url %}
                <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                    {{ item.title }}
                </a>
            {% else %}
                <span>{{ item.title }}</span>
            {% endif %}

            {% if item.items %}
                <ul>{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
            {% endif %}
        </li>
    {% endif %}
{% endfor %}
", "C:\\work\\backend\\domains\\cbt-karakol\\plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}
