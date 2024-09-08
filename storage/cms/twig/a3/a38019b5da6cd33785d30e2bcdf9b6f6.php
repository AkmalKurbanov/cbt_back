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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/flash.htm */
class __TwigTemplate_d4d3098d2a08303ed266143e2cec1b43 extends Template
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
        echo "<div class=\"alert alert-";
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo " alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    ";
        // line 4
        if (($context["title"] ?? null)) {
            // line 5
            echo "        <h4>";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</h4>
    ";
        }
        // line 7
        echo "
    ";
        // line 8
        if (($context["content"] ?? null)) {
            // line 9
            echo "        <p>";
            echo twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
            echo "</p>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (($context["list"] ?? null)) {
            // line 13
            echo "        <ul>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["list"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </ul>
    ";
        }
        // line 19
        echo "</div>

";
        // line 21
        if (($context["jscript"] ?? null)) {
            // line 22
            echo "    <script>
        ";
            // line 23
            if (($context["errors"] ?? null)) {
                // line 24
                echo "            var errors = JSON.parse('";
                echo ($context["errors"] ?? null);
                echo "');
        ";
            }
            // line 26
            echo "        ";
            echo ($context["jscript"] ?? null);
            echo "
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/flash.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  99 => 24,  97 => 23,  94 => 22,  92 => 21,  88 => 19,  84 => 17,  75 => 15,  71 => 14,  68 => 13,  66 => 12,  63 => 11,  57 => 9,  55 => 8,  52 => 7,  46 => 5,  44 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"alert alert-{{ type }} alert-dismissible\" role=\"alert\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>

    {% if title %}
        <h4>{{ title }}</h4>
    {% endif %}

    {% if content %}
        <p>{{ content }}</p>
    {% endif %}

    {% if list %}
        <ul>
        {% for item in list %}
            <li>{{ item }}</li>
        {% endfor %}
        </ul>
    {% endif %}
</div>

{% if jscript %}
    <script>
        {% if errors %}
            var errors = JSON.parse('{{ errors|raw }}');
        {% endif %}
        {{ jscript|raw }}
    </script>
{% endif %}", "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/flash.htm", "");
    }
}
