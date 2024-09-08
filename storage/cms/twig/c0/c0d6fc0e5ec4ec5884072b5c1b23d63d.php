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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/faq.htm */
class __TwigTemplate_4ca864b4e0fafeeb5b1f47483d66015f extends Template
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
        echo "<div class=\"faq\"> 
  <div class=\"container\"> 
    <div class=\"title-wrap\">
      <h2 class=\"title\">FAQ</h2>
    </div>
    <div class=\"accordion\">
                  

          ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 10
            echo "            ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "is_active", [], "any", false, false, false, 10)) {
                // line 11
                echo "              <div class=\"accordion__item\">
                <div class=\"accordion__title\">";
                // line 12
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "<i class=\"icon-angle-right\"></i>
                </div>
                <div class=\"accordion__desc-wrap\">
                  <div class=\"accordion__desc accordion__desc_faq\">
                    <p>";
                // line 16
                echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "desc", [], "any", false, false, false, 16);
                echo "</p>
                  </div>
                </div>
              </div>
            ";
            } else {
                // line 21
                echo "            
            ";
            }
            // line 23
            echo "      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 24
            echo "          ";
            echo twig_escape_filter($this->env, ($context["noRecordsMessage"] ?? null), "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "               
                  
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/faq.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  82 => 24,  77 => 23,  73 => 21,  65 => 16,  58 => 12,  55 => 11,  52 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"faq\"> 
  <div class=\"container\"> 
    <div class=\"title-wrap\">
      <h2 class=\"title\">FAQ</h2>
    </div>
    <div class=\"accordion\">
                  

          {% for record in records %}
            {% if record.is_active %}
              <div class=\"accordion__item\">
                <div class=\"accordion__title\">{{record.title}}<i class=\"icon-angle-right\"></i>
                </div>
                <div class=\"accordion__desc-wrap\">
                  <div class=\"accordion__desc accordion__desc_faq\">
                    <p>{{record.desc| raw}}</p>
                  </div>
                </div>
              </div>
            {% else %}
            
            {% endif %}
      {% else %}
          {{ noRecordsMessage }}
      {% endfor %}
               
                  
    </div>
  </div>
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/faq.htm", "");
    }
}
