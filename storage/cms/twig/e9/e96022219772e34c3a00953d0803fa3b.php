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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/text-img-block.htm */
class __TwigTemplate_cae69d7113c2d3d5dd150b275bc2ab35 extends Template
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
        $context['_seq'] = twig_ensure_traversable(($context["textImgSection"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 2
            echo "<div class=\"pattern__item\">
    ";
            // line 3
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "image", [], "any", false, false, false, 3)) {
                // line 4
                echo "    <div class=\"pattern__col\"><img
            src=\"";
                // line 5
                echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "image", [], "any", false, false, false, 5)), 620, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
            alt=\"\"></div>
    <div class=\"pattern__col\">
        ";
                // line 8
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 8)) {
                    // line 9
                    echo "        <h3 class=\"subtitle\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 9), "html", null, true);
                    echo "</h3>
        ";
                } else {
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        ";
                echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "text", [], "any", false, false, false, 12);
                echo "
    </div>
    ";
            } else {
                // line 15
                echo "    <div class=\"pattern__col\" style=\"max-width:100%\">
        ";
                // line 16
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "        <h3 class=\"subtitle\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "title", [], "any", false, false, false, 17), "html", null, true);
                    echo "</h3>
        ";
                } else {
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        ";
                echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["field"], "text", [], "any", false, false, false, 20);
                echo "
    </div>

    ";
            }
            // line 24
            echo "    
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/text-img-block.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 24,  87 => 20,  84 => 19,  78 => 17,  76 => 16,  73 => 15,  66 => 12,  63 => 11,  57 => 9,  55 => 8,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for field in textImgSection %}
<div class=\"pattern__item\">
    {% if field.image %}
    <div class=\"pattern__col\"><img
            src=\"{{ field.image | media | resize(620, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\"
            alt=\"\"></div>
    <div class=\"pattern__col\">
        {% if field.title %}
        <h3 class=\"subtitle\">{{ field.title }}</h3>
        {% else %}
        {% endif %}
        {{ field.text | raw }}
    </div>
    {% else %}
    <div class=\"pattern__col\" style=\"max-width:100%\">
        {% if field.title %}
        <h3 class=\"subtitle\">{{ field.title }}</h3>
        {% else %}
        {% endif %}
        {{ field.text | raw }}
    </div>

    {% endif %}
    
</div>
{% endfor %}", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/text-img-block.htm", "");
    }
}
