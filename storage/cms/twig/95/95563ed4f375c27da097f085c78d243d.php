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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/events.htm */
class __TwigTemplate_f610d42e9790b06d4937e4ac999f5829 extends Template
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
        echo "<div class=\"events\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap--indent\">
            <h2 class=\"title\">BLOG</h2>
        </div>
        <div class=\"swiper events-slider\">
            <div class=\"swiper-wrapper\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 9
            echo "                ";
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 9)) {
                // line 10
                echo "                  
                  <div class=\"swiper-slide\">
                      <div class=\"block-tour__item block-tour__item--modify\">
                          <div class=\"block-tour__img\">
                              ";
                // line 14
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 14), 0, 1));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 15
                    echo "                              <img src=\"";
                    echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 15), 800, 400, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\"
                                  alt=\"\">
                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                          </div>
                          <div class=\"block-tour__item-desc\">
                              <div>
                                  <div class=\"block-tour__name\">";
                // line 21
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 21), "html", null, true);
                echo "</div>
                                  <div class=\"block-tour__desc\">
                                      ";
                // line 23
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 23), "html", null, true);
                echo "
                                  </div>
                              </div>
                              <div class=\"block-tour__item-desc-bottom\">
                                  <a class=\"more\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 27), "html", null, true);
                echo "\">MORE</a>
                                  <span>
                                      ";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 29), "d m Y"), "html", null, true);
                echo "
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>

                ";
            }
            // line 37
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/events.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 37,  95 => 29,  90 => 27,  83 => 23,  78 => 21,  73 => 18,  63 => 15,  59 => 14,  53 => 10,  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"events\">
    <div class=\"container\">
        <div class=\"title-wrap title-wrap--indent\">
            <h2 class=\"title\">BLOG</h2>
        </div>
        <div class=\"swiper events-slider\">
            <div class=\"swiper-wrapper\">
                {% for post in posts %}
                {% if post.published_at %}
                  
                  <div class=\"swiper-slide\">
                      <div class=\"block-tour__item block-tour__item--modify\">
                          <div class=\"block-tour__img\">
                              {% for img in post.featured_images|slice(0,1) %}
                              <img src=\"{{img.path | resize(800, 400, { mode: 'crop', quality: '80', extension: 'webp'})}}\"
                                  alt=\"\">
                              {% endfor %}
                          </div>
                          <div class=\"block-tour__item-desc\">
                              <div>
                                  <div class=\"block-tour__name\">{{post.title}}</div>
                                  <div class=\"block-tour__desc\">
                                      {{post.excerpt}}
                                  </div>
                              </div>
                              <div class=\"block-tour__item-desc-bottom\">
                                  <a class=\"more\" href=\"{{post.url}}\">MORE</a>
                                  <span>
                                      {{post.published_at | date ('d m Y')}}
                                  </span>
                              </div>
                          </div>
                      </div>
                  </div>

                {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/events.htm", "");
    }
}
