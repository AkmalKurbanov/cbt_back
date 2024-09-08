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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/recomend-tours.htm */
class __TwigTemplate_59119e1faebb9a89584e9de48d0e5f30 extends Template
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
        echo "<div style=\"background-color: #fff; z-index:9; position: relative;\">


</div>
<div class=\"block-tour\">
    <div class=\"swiper block-tour-slider\">
        <div class=\"swiper-wrapper\">

            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tours"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "
            
            ";
            // line 12
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_recomend", [], "any", false, false, false, 12) == 1)) {
                // line 13
                echo "              
            <div class=\"swiper-slide\">

                
                <a class=\"block-tour__item\" href=\"/tours/t/";
                // line 17
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 17), "slug", [], "any", false, false, false, 17), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 17), "html", null, true);
                echo "\">
                    <div class=\"block-tour__img\">

                        ";
                // line 20
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                          <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 21), "path", [], "any", false, false, false, 21), 300, 150, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                          ";
                } else {
                    // line 23
                    echo "                          <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter("/themes/cbt-karakol/assets/images/default-post.png", 300, 150, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                        ";
                }
                // line 25
                echo "
                        
                      <div class=\"block-tour__category-icon\">
                        ";
                // line 28
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 28), "icon", [], "any", false, false, false, 28), "path", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                          <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 29), "icon", [], "any", false, false, false, 29), "path", [], "any", false, false, false, 29), 60, 60, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                        ";
                } else {
                    // line 31
                    echo "                          <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter("/themes/cbt-karakol/assets/images/default-post-white.png", 60, 60, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                        ";
                }
                // line 33
                echo "                      </div> 
                    </div>
                    <div class=\"block-tour__item-desc\">
                        <div class=\"block-tour__name\">";
                // line 36
                echo twig_escape_filter($this->env, (twig_slice($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 36), 0, 50) . (((twig_length_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 36)) > 50)) ? ("...") : (""))), "html", null, true);
                echo "</div>
                        <div class=\"block-tour__desc\">";
                // line 37
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "duration", [], "any", false, false, false, 37), "html", null, true);
                echo "</div>
                    </div>
                </a>
            </div>
            ";
            }
            // line 42
            echo "            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/recomend-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 44,  127 => 43,  122 => 42,  114 => 37,  110 => 36,  105 => 33,  99 => 31,  93 => 29,  91 => 28,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  64 => 17,  58 => 13,  56 => 12,  52 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div style=\"background-color: #fff; z-index:9; position: relative;\">


</div>
<div class=\"block-tour\">
    <div class=\"swiper block-tour-slider\">
        <div class=\"swiper-wrapper\">

            {% for item in tours %}

            
            {% if item.is_recomend == 1 %}
              
            <div class=\"swiper-slide\">

                
                <a class=\"block-tour__item\" href=\"/tours/t/{{item.category.slug}}/{{item.slug}}\">
                    <div class=\"block-tour__img\">

                        {% if item.preview.path  %}
                          <img src=\"{{item.preview.path | resize(300, 150, { mode: 'crop', quality: '80', extension: 'webp' })}}\" alt=\"\">
                          {% else %}
                          <img src=\"{{ '/themes/cbt-karakol/assets/images/default-post.png' | resize(300, 150, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                        {% endif %}

                        
                      <div class=\"block-tour__category-icon\">
                        {% if item.category.icon.path %}
                          <img src=\"{{item.category.icon.path | resize(60, 60, { mode: 'crop', quality: '80', extension: 'webp'})}}\" alt=\"\">
                        {% else %}
                          <img src=\"{{ '/themes/cbt-karakol/assets/images/default-post-white.png' | resize(60, 60, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                        {% endif %}
                      </div> 
                    </div>
                    <div class=\"block-tour__item-desc\">
                        <div class=\"block-tour__name\">{{ item.name|slice(0, 50) ~ (item.name|length > 50 ? '...' : '') }}</div>
                        <div class=\"block-tour__desc\">{{ item.duration }}</div>
                    </div>
                </a>
            </div>
            {% endif %}
            {% else %}
            {% endfor %}
        </div>
    </div>
</div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/recomend-tours.htm", "");
    }
}
