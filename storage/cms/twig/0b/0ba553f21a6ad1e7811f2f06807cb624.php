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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/video.htm */
class __TwigTemplate_a280746b9463cdf266e705664ae608b0 extends Template
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
        echo "<div class=\"media\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 4
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"media__wrap\">
            ";
        // line 7
        $context["records"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList2"] ?? null), "records", [], "any", false, false, false, 7);
        // line 8
        echo "            ";
        $context["displayColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList2"] ?? null), "displayColumn", [], "any", false, false, false, 8);
        // line 9
        echo "            ";
        $context["noRecordsMessage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList2"] ?? null), "noRecordsMessage", [], "any", false, false, false, 9);
        // line 10
        echo "            ";
        $context["detailsPage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsPage", [], "any", false, false, false, 10);
        // line 11
        echo "            ";
        $context["detailsKeyColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 11);
        // line 12
        echo "            ";
        $context["detailsUrlParameter"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList2"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 12);
        // line 13
        echo "
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 15
            echo "            <div class=\"media__item\">
                <div class=\"media__item-img\">
                    <img src=\"https://img.youtube.com/vi/";
            // line 17
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, false, 17), "html", null, true);
            echo "/maxresdefault.jpg\" alt=\"\">
                    <div class=\"media__item-img-effect\"><span></span></div>
                    <div class=\"media__item-info\">
                        <div class=\"media__item-name\">";
            // line 20
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</div>
                        <div class=\"media__item-desc\">";
            // line 21
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "desc", [], "any", false, false, false, 21), "html", null, true);
            echo "</div>
                    </div><a class=\"playButton\" href=\"https://www.youtube.com/watch?v=";
            // line 22
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "link", [], "any", false, false, false, 22), "html", null, true);
            echo "\" data-fancybox=\"\">
                        <svg x=\"0px\" y=\"0px\" viewbox=\"0 0 213.7 213.7\" enable-background=\"new 0 0 213.7 213.7\"
                            xml:space=\"preserve\">
                            <polygon class=\"triangle\" fill=\"none\" stroke-width=\"7\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" stroke-miterlimit=\"10\"
                                points=\"73.5,62.5 148.5,105.8 73.5,149.1\"></polygon>
                        </svg>
                    </a>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </div>
        ";
        // line 34
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 34) > 1)) {
            // line 35
            echo "        <ul class=\"pagination\">
            ";
            // line 36
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 36) > 1)) {
                // line 37
                echo "            <li class=\"prev\"><a
                    href=\"";
                // line 38
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 38), "baseFileName", [], "any", false, false, false, 38), [($context["pageParam"] ?? null) => (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 38) - 1)]);
                echo "\">&larr;
                </a></li>
            ";
            }
            // line 41
            echo "
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 42)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 43
                echo "            <li class=\"";
                echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 43) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 44
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 44), "baseFileName", [], "any", false, false, false, 44), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
            ";
            // line 48
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 48) > Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 48))) {
                // line 49
                echo "            <li class=\"next\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "baseFileName", [], "any", false, false, false, 49), [($context["pageParam"] ?? null) => (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 49) + 1)]);
                echo "\">
                    &rarr;</a></li>
            ";
            }
            // line 52
            echo "        </ul>
        ";
        }
        // line 54
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/video.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 54,  161 => 52,  154 => 49,  152 => 48,  149 => 47,  138 => 44,  133 => 43,  129 => 42,  126 => 41,  120 => 38,  117 => 37,  115 => 36,  112 => 35,  110 => 34,  107 => 33,  90 => 22,  86 => 21,  82 => 20,  76 => 17,  72 => 15,  68 => 14,  65 => 13,  62 => 12,  59 => 11,  56 => 10,  53 => 9,  50 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"media\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">{{this.page.title}}</h2>
        </div>
        <div class=\"media__wrap\">
            {% set records = builderList2.records %}
            {% set displayColumn = builderList2.displayColumn %}
            {% set noRecordsMessage = builderList2.noRecordsMessage %}
            {% set detailsPage = builderList2.detailsPage %}
            {% set detailsKeyColumn = builderList2.detailsKeyColumn %}
            {% set detailsUrlParameter = builderList2.detailsUrlParameter %}

            {% for record in records %}
            <div class=\"media__item\">
                <div class=\"media__item-img\">
                    <img src=\"https://img.youtube.com/vi/{{record.link}}/maxresdefault.jpg\" alt=\"\">
                    <div class=\"media__item-img-effect\"><span></span></div>
                    <div class=\"media__item-info\">
                        <div class=\"media__item-name\">{{record.title}}</div>
                        <div class=\"media__item-desc\">{{record.desc}}</div>
                    </div><a class=\"playButton\" href=\"https://www.youtube.com/watch?v={{record.link}}\" data-fancybox=\"\">
                        <svg x=\"0px\" y=\"0px\" viewbox=\"0 0 213.7 213.7\" enable-background=\"new 0 0 213.7 213.7\"
                            xml:space=\"preserve\">
                            <polygon class=\"triangle\" fill=\"none\" stroke-width=\"7\" stroke-linecap=\"round\"
                                stroke-linejoin=\"round\" stroke-miterlimit=\"10\"
                                points=\"73.5,62.5 148.5,105.8 73.5,149.1\"></polygon>
                        </svg>
                    </a>
                </div>
            </div>
            {% endfor %}
        </div>
        {% if records.lastPage > 1 %}
        <ul class=\"pagination\">
            {% if records.currentPage > 1 %}
            <li class=\"prev\"><a
                    href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr;
                </a></li>
            {% endif %}

            {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
            {% endfor %}

            {% if records.lastPage > records.currentPage %}
            <li class=\"next\"><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">
                    &rarr;</a></li>
            {% endif %}
        </ul>
        {% endif %}
    </div>
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/video.htm", "");
    }
}
