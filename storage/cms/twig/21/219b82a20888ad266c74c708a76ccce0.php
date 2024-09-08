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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/page_category.htm */
class __TwigTemplate_3e93dc30ec80e433c100250b53875648 extends Template
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
        echo "<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
            <li>
                <a href=\"/tours\">Tours</a>
            </li>
            <li>";
        // line 8
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 8), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"tours\">
    <div class=\"container\">

        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h2>
        </div>

        <div class=\"tours__category\">
            <div class=\"swiper-container tours-js\">
                <div class=\"swiper-wrapper\">

                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 24
            echo "
                    ";
            // line 25
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 25) == Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 25))) {
                // line 26
                echo "                    ";
            } else {
                // line 27
                echo "
                    <div class=\"swiper-slide\">
                        <a class=\"tours__category-item\" href=\"/tours/c/";
                // line 29
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                            <div class=\"tours__category-icon\">
                                ";
                // line 31
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "iconDark", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31)) {
                    // line 32
                    echo "                                  <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "iconDark", [], "any", false, false, false, 32), "path", [], "any", false, false, false, 32), 300, false, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                                  ";
                } else {
                    // line 34
                    echo "                                  <img src=\"/themes/cbt-karakol/assets/images/default-post.png\" alt=\"\">
                                ";
                }
                // line 36
                echo "                            </div>
                            <div class=\"tours__category-name\">";
                // line 37
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 37), "html", null, true);
                echo "</div>
                        </a>
                    </div>
                    ";
            }
            // line 41
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </div>
            </div>
        </div>

        <div class=\"tours__wrap\">

            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tours"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "            ";
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "is_active", [], "any", false, false, false, 49) == 1)) {
                // line 50
                echo "            <div class=\"tours__item\">
                <div class=\"tours__item-wrap\">
                  <a class=\"tours__item-img\" href=\"/tours/t/";
                // line 52
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 52), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 52), "html", null, true);
                echo "\">

                        

                          ";
                // line 56
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 56), "path", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                            <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "preview", [], "any", false, false, false, 57), "path", [], "any", false, false, false, 57), 540, 300, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                            
                            ";
                } else {
                    // line 60
                    echo "                            <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter("/themes/cbt-karakol/assets/images/default-post.png", 540, 300, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\" alt=\"\">
                          ";
                }
                // line 62
                echo "                          <div class=\"tours__img-desc\"> 
                              ";
                // line 63
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 63)) {
                    // line 64
                    echo "                                <div class=\"tours__height\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "height", [], "any", false, false, false, 64), "html", null, true);
                    echo "</div>
                                ";
                } else {
                    // line 66
                    echo "                              ";
                }
                echo "  
                                ";
                // line 67
                if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "duration", [], "any", false, false, false, 67)) {
                    // line 68
                    echo "                                  <div class=\"tours__duration\">";
                    echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "duration", [], "any", false, false, false, 68), "html", null, true);
                    echo "</div>
                                  ";
                } else {
                    // line 70
                    echo "                                ";
                }
                echo "  
                            </div>

                  </a>
                  <div class=\"tours__item-info\"><a class=\"tours__item-name\"
                          href=\"/tours/t/";
                // line 75
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 75), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 75), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 75), "html", null, true);
                echo "</a>
                      <div class=\"tours__item-desc\">";
                // line 76
                echo $this->env->getFunction('str_limit')->getCallable()("limit", Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "desc", [], "any", false, false, false, 76), 120);
                echo "</div>
                  </div>
              </div>
            </div>
            ";
            } else {
                // line 81
                echo "
            ";
            }
            // line 83
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/page_category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 84,  215 => 83,  211 => 81,  203 => 76,  195 => 75,  186 => 70,  180 => 68,  178 => 67,  173 => 66,  167 => 64,  165 => 63,  162 => 62,  156 => 60,  149 => 57,  147 => 56,  138 => 52,  134 => 50,  131 => 49,  127 => 48,  119 => 42,  113 => 41,  106 => 37,  103 => 36,  99 => 34,  93 => 32,  91 => 31,  86 => 29,  82 => 27,  79 => 26,  77 => 25,  74 => 24,  70 => 23,  60 => 16,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li>
                <a href=\"/tours\">Tours</a>
            </li>
            <li>{{category.title}}</li>
        </ul>
    </div>
</div>
<div class=\"tours\">
    <div class=\"container\">

        <div class=\"title-wrap\">
            <h2 class=\"title\">{{category.title}}</h2>
        </div>

        <div class=\"tours__category\">
            <div class=\"swiper-container tours-js\">
                <div class=\"swiper-wrapper\">

                    {% for item in categories %}

                    {% if item.slug == category.slug %}
                    {% else %}

                    <div class=\"swiper-slide\">
                        <a class=\"tours__category-item\" href=\"/tours/c/{{item.slug}}\">
                            <div class=\"tours__category-icon\">
                                {% if item.iconDark.path  %}
                                  <img src=\"{{item.iconDark.path | resize(300, false, { mode: 'crop', quality: '80', extension: 'webp' })}}\" alt=\"\">
                                  {% else %}
                                  <img src=\"/themes/cbt-karakol/assets/images/default-post.png\" alt=\"\">
                                {% endif %}
                            </div>
                            <div class=\"tours__category-name\">{{item.title}}</div>
                        </a>
                    </div>
                    {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>

        <div class=\"tours__wrap\">

            {% for item in tours %}
            {% if item.is_active == 1%}
            <div class=\"tours__item\">
                <div class=\"tours__item-wrap\">
                  <a class=\"tours__item-img\" href=\"/tours/t/{{ category.slug}}/{{item.slug}}\">

                        

                          {% if item.preview.path  %}
                            <img src=\"{{ item.preview.path | resize(540, 300, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                            
                            {% else %}
                            <img src=\"{{ '/themes/cbt-karakol/assets/images/default-post.png' | resize(540, 300, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                          {% endif %}
                          <div class=\"tours__img-desc\"> 
                              {% if item.height %}
                                <div class=\"tours__height\">{{item.height}}</div>
                                {% else %}
                              {% endif %}  
                                {% if item.duration %}
                                  <div class=\"tours__duration\">{{item.duration}}</div>
                                  {% else %}
                                {% endif %}  
                            </div>

                  </a>
                  <div class=\"tours__item-info\"><a class=\"tours__item-name\"
                          href=\"/tours/t/{{ category.slug}}/{{item.slug}}\">{{item.name}}</a>
                      <div class=\"tours__item-desc\">{{ str_limit(item.desc , 120) | raw }}</div>
                  </div>
              </div>
            </div>
            {% else %}

            {% endif %}
            {% endfor %}
        </div>

    </div>
</div>
", "/home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/page_category.htm", "");
    }
}
