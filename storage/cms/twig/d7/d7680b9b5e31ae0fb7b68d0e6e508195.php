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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/blog/index.htm */
class __TwigTemplate_7f905e72f8dd555cbf8b7e30271133d3 extends Template
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
            <li><a href=\"#\">Home</a></li>
            <li>";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"articles\">
    <div class=\"container\">
        <div class=\"title-wrap\">

            <h2 class=\"title\">";
        // line 13
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 13), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h2>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "            <div class=\"articles__item\">
                <div class=\"articles__img\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, false, 17), 0, 1));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 18
                echo "                    <img src=\"";
                echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, false, 18), 800, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                echo "\"
                        alt=\"\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "                </div>
                <div class=\"articles__desc-wrap\">
                    <div class=\"articles__title\">";
            // line 23
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</div>
                    <div class=\"article-date\">
                        <span><i class=\"icon-user2\"></i>";
            // line 25
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 25), "first_name", [], "any", false, false, false, 25), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "user", [], "any", false, false, false, 25), "last_name", [], "any", false, false, false, 25), "html", null, true);
            echo "</span>
                        <span>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "published_at", [], "any", false, false, false, 26), "d m Y"), "html", null, true);
            echo "</span>
                    </div>
                    <div class=\"articles__desc\">
                        ";
            // line 29
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "excerpt", [], "any", false, false, false, 29), "html", null, true);
            echo "
                    </div>
                    <a class=\"btn\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, false, 31), "html", null, true);
            echo "\">More</a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/blog/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 35,  106 => 31,  101 => 29,  95 => 26,  89 => 25,  84 => 23,  80 => 21,  70 => 18,  66 => 17,  62 => 15,  58 => 14,  54 => 13,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"#\">Home</a></li>
            <li>{{this.page.title}}</li>
        </ul>
    </div>
</div>
<div class=\"articles\">
    <div class=\"container\">
        <div class=\"title-wrap\">

            <h2 class=\"title\">{{this.page.title}}</h2>
            {% for post in posts %}
            <div class=\"articles__item\">
                <div class=\"articles__img\">
                    {% for img in post.featured_images|slice(0,1) %}
                    <img src=\"{{img.path | resize(800, auto, { mode: 'crop', quality: '80', extension: 'webp'})}}\"
                        alt=\"\">
                    {% endfor %}
                </div>
                <div class=\"articles__desc-wrap\">
                    <div class=\"articles__title\">{{post.title}}</div>
                    <div class=\"article-date\">
                        <span><i class=\"icon-user2\"></i>{{post.user.first_name}} {{post.user.last_name}}</span>
                        <span>{{post.published_at | date ('d m Y')}}</span>
                    </div>
                    <div class=\"articles__desc\">
                        {{post.excerpt}}
                    </div>
                    <a class=\"btn\" href=\"{{post.url}}\">More</a>
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/blog/index.htm", "");
    }
}
