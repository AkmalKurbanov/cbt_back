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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/popular-tours.htm */
class __TwigTemplate_5a910ad8a50d9417180d643260b6d6a3 extends Template
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
        echo "<div class=\"popular\">
     <div class=\"container\">
         <div class=\"title-wrap title-wrap--indent\">
             <h2 class=\"title\">POPULAR PLACES</h2>
         </div>
         <div class=\"popular__wrap\">
             ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["tours"] ?? null), 0, 9));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "

             ";
            // line 10
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_popular", [], "any", false, false, false, 10) == 1)) {
                // line 11
                echo "             <div class=\"popular__col\">
              <a class=\"popular__item\" href=\"/tours/t/";
                // line 12
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 12), "slug", [], "any", false, false, false, 12), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 12), "html", null, true);
                echo "\">
                  
                  ";
                // line 14
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 14), "path", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                    <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), 510, 300, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                    ";
                } else {
                    // line 17
                    echo "                    <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter("/themes/cbt-karakol/assets/images/default-post.png", 510, 300, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                  ";
                }
                // line 19
                echo "          
                  <div class=\"popular__desc\">

                    ";
                // line 22
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22)) {
                    // line 23
                    echo "                      <div class=\"popular__name\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 23), "html", null, true);
                    echo "</div>
                    ";
                } else {
                    // line 25
                    echo "                    ";
                }
                // line 26
                echo "
                    ";
                // line 27
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "place", [], "any", false, false, false, 27)) {
                    // line 28
                    echo "                      <div class=\"popular__place\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "place", [], "any", false, false, false, 28), "html", null, true);
                    echo "</div>
                    ";
                } else {
                    // line 30
                    echo "                    ";
                }
                // line 31
                echo "
                    ";
                // line 32
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 32)) {
                    // line 33
                    echo "                      <div class=\"popular__height\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 33), "html", null, true);
                    echo "</div>
                    ";
                } else {
                    // line 35
                    echo "                    ";
                }
                // line 36
                echo "
                  </div>
              </a>
             </div>
             ";
            }
            // line 41
            echo "             ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "


            


         </div>
     </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/popular-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  136 => 42,  131 => 41,  124 => 36,  121 => 35,  115 => 33,  113 => 32,  110 => 31,  107 => 30,  101 => 28,  99 => 27,  96 => 26,  93 => 25,  87 => 23,  85 => 22,  80 => 19,  74 => 17,  68 => 15,  66 => 14,  59 => 12,  56 => 11,  54 => 10,  50 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"popular\">
     <div class=\"container\">
         <div class=\"title-wrap title-wrap--indent\">
             <h2 class=\"title\">POPULAR PLACES</h2>
         </div>
         <div class=\"popular__wrap\">
             {% for item in tours | slice(0, 9) %}


             {% if item.is_popular == 1 %}
             <div class=\"popular__col\">
              <a class=\"popular__item\" href=\"/tours/t/{{item.category.slug}}/{{item.slug}}\">
                  
                  {% if item.preview.path  %}
                    <img src=\"{{item.preview.path | resize(510, 300, { mode: 'crop', quality: '80', extension: 'webp' })}}\" alt=\"\">
                    {% else %}
                    <img src=\"{{ '/themes/cbt-karakol/assets/images/default-post.png' | resize(510, 300, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                  {% endif %}
          
                  <div class=\"popular__desc\">

                    {% if item.name %}
                      <div class=\"popular__name\">{{item.name}}</div>
                    {% else %}
                    {% endif %}

                    {% if item.place %}
                      <div class=\"popular__place\">{{item.place}}</div>
                    {% else %}
                    {% endif %}

                    {% if item.height %}
                      <div class=\"popular__height\">{{item.height}}</div>
                    {% else %}
                    {% endif %}

                  </div>
              </a>
             </div>
             {% endif %}
             {% else %}
             {% endfor %}



            


         </div>
     </div>
 </div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/popular-tours.htm", "");
    }
}
