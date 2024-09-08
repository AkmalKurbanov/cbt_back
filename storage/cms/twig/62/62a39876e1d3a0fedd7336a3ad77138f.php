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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/blog/post.htm */
class __TwigTemplate_829fe2f6222f27bcd4c3175603c14c07 extends Template
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
        $context["post"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["blogPost"] ?? null), "post", [], "any", false, false, false, 1);
        // line 2
        echo "


<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
            <li>";
        // line 10
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"detail\">
    <div class=\"container\">

      <div class=\"gallery-detail\">
        <div class=\"f-carousel\" id=\"gallery-detail-js\">
          
          ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "featured_images", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "              <div class=\"f-carousel__slide\" data-thumb-src=\"";
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 21), 100, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\">
                <img alt=\"\" data-lazy-src=\"";
            // line 22
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 22), 1250, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\">
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "          
        </div>
      </div>
        
        
        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 31
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "title", [], "any", false, false, false, 31), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"desc-text\">
            <div class=\"article-date\">
                <span>
                    <i class=\"icon-user2\"></i>
                    ";
        // line 37
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 37), "first_name", [], "any", false, false, false, 37), "html", null, true);
        echo "
                    ";
        // line 38
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "user", [], "any", false, false, false, 38), "last_name", [], "any", false, false, false, 38), "html", null, true);
        echo "
                </span>
                <span>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "published_at", [], "any", false, false, false, 40), "d m Y"), "html", null, true);
        echo "</span></div>
            ";
        // line 41
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["post"] ?? null), "content_html", [], "any", false, false, false, 41);
        echo "
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/blog/post.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  109 => 40,  104 => 38,  100 => 37,  91 => 31,  83 => 25,  74 => 22,  69 => 21,  65 => 20,  52 => 10,  47 => 8,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set post = blogPost.post %}



<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li><a href=\"/blog\">Blog</a></li>
            <li>{{post.title}}</li>
        </ul>
    </div>
</div>
<div class=\"detail\">
    <div class=\"container\">

      <div class=\"gallery-detail\">
        <div class=\"f-carousel\" id=\"gallery-detail-js\">
          
          {% for image in post.featured_images %}
              <div class=\"f-carousel__slide\" data-thumb-src=\"{{ image.path | resize(100, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\">
                <img alt=\"\" data-lazy-src=\"{{ image.path | resize(1250, auto, { mode: 'crop', quality: '80', extension: 'webp' }) }}\">
              </div>
          {% endfor %}
          
        </div>
      </div>
        
        
        <div class=\"title-wrap\">
            <h2 class=\"title\">{{post.title}}</h2>
        </div>
        <div class=\"desc-text\">
            <div class=\"article-date\">
                <span>
                    <i class=\"icon-user2\"></i>
                    {{post.user.first_name}}
                    {{post.user.last_name}}
                </span>
                <span>{{post.published_at | date ('d m Y')}}</span></div>
            {{ post.content_html|raw }}
        </div>
    </div>
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/blog/post.htm", "");
    }
}
