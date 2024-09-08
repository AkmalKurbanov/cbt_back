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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/kind-tours.htm */
class __TwigTemplate_00dd64824a3671d15738d013d500fa8b extends Template
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
        echo "<div class=\"kind\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap\">
            <h2 class=\"title\">All tours</h2>
        </div>
        <div class=\"nav\">
            <div class=\"swiper-button-prev nav-btn\"> </div>
            <div class=\"swiper-button-next nav-btn\"> </div>
        </div>
        <div class=\"swiper kind-slider\">
            <div class=\"swiper-wrapper\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, ($context["parent_id"] ?? null), "html", null, true);
            echo "
                <div class=\"swiper-slide\">
                <a class=\"kind__item shine-ef\"
                        href=\"/tours/c/";
            // line 16
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "slug", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                        <div class=\"kind__img\">

                          ";
            // line 19
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 19), "path", [], "any", false, false, false, 19)) {
                // line 20
                echo "                            <img src=\"";
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "img", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), 300, 450, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\" alt=\"\">
                            ";
            } else {
                // line 22
                echo "                            <img src=\"";
                echo $this->extensions['System\Twig\Extension']->resizeFilter("/themes/cbt-karakol/assets/images/default-post-white.png", 300, 450, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\" alt=\"\">
                          ";
            }
            // line 24
            echo "

                            
                        </div>
                        <div class=\"kind__item-desc\">
                            <div class=\"kind__icon\">
                              ";
            // line 30
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 30), "path", [], "any", false, false, false, 30)) {
                // line 31
                echo "                                <img src=\"";
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31), 70, 70, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\" alt=\"\">
                                ";
            } else {
                // line 33
                echo "                                <img src=\"";
                echo $this->extensions['System\Twig\Extension']->resizeFilter("/themes/cbt-karakol/assets/images/default-post-white.png", 70, 70, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\" alt=\"\">
                              ";
            }
            // line 35
            echo "                              
                            </div>
                            <div class=\"kind__name\">";
            // line 37
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 37), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/kind-tours.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 42,  107 => 37,  103 => 35,  97 => 33,  91 => 31,  89 => 30,  81 => 24,  75 => 22,  69 => 20,  67 => 19,  61 => 16,  54 => 13,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"kind\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap\">
            <h2 class=\"title\">All tours</h2>
        </div>
        <div class=\"nav\">
            <div class=\"swiper-button-prev nav-btn\"> </div>
            <div class=\"swiper-button-next nav-btn\"> </div>
        </div>
        <div class=\"swiper kind-slider\">
            <div class=\"swiper-wrapper\">
                {% for item in categories %}
                {{parent_id}}
                <div class=\"swiper-slide\">
                <a class=\"kind__item shine-ef\"
                        href=\"/tours/c/{{item.slug}}\">
                        <div class=\"kind__img\">

                          {% if item.img.path  %}
                            <img src=\"{{item.img.path | resize(300, 450, { mode: 'crop', quality: '80', extension: 'webp' })}}\" alt=\"\">
                            {% else %}
                            <img src=\"{{ '/themes/cbt-karakol/assets/images/default-post-white.png' | resize(300, 450, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                          {% endif %}


                            
                        </div>
                        <div class=\"kind__item-desc\">
                            <div class=\"kind__icon\">
                              {% if item.icon.path  %}
                                <img src=\"{{item.icon.path | resize(70, 70, { mode: 'crop', quality: '80', extension: 'webp' })}}\" alt=\"\">
                                {% else %}
                                <img src=\"{{ '/themes/cbt-karakol/assets/images/default-post-white.png' | resize(70, 70, { mode: 'crop', quality: '80', extension: 'webp' }) }}\" alt=\"\">
                              {% endif %}
                              
                            </div>
                            <div class=\"kind__name\">{{item.title}}</div>
                        </div>
                    </a>
                </div>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/kind-tours.htm", "");
    }
}
