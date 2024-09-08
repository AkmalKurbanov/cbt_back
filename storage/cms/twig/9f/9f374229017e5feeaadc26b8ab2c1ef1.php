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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/photo.htm */
class __TwigTemplate_e30ea4509d46fc15b6e1e80d6a62178d extends Template
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
        echo "<div class=\"media\" id=\"gallery\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 4
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 4), "title", [], "any", false, false, false, 4), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"media__wrap\">

            ";
        // line 8
        $context["records"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, false, 8);
        // line 9
        echo "            ";
        $context["displayColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, false, 9);
        // line 10
        echo "            ";
        $context["noRecordsMessage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, false, 10);
        // line 11
        echo "            ";
        $context["detailsPage"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, false, 11);
        // line 12
        echo "            ";
        $context["detailsKeyColumn"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, false, 12);
        // line 13
        echo "            ";
        $context["detailsUrlParameter"] = Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, false, 13);
        // line 14
        echo "
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 16
            echo "
            <a class=\"media__item\" href=\"";
            // line 17
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "photo", [], "any", false, false, false, 17), "path", [], "any", false, false, false, 17), 1300, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"
                data-fancybox=\"gallery\">
                <div class=\"media__item-img\">
                    <img src=\"";
            // line 20
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "photo", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), 520, 270, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\" alt=\"\">
                    <div class=\"media__item-img-effect\">
                        <span></span>
                    </div>
                    <div class=\"media__item-info\">
                        <div class=\"media__item-name\">";
            // line 25
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, false, 25), "html", null, true);
            echo "</div>
                        <div class=\"media__item-desc\">";
            // line 26
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["record"], "desc", [], "any", false, false, false, 26), "html", null, true);
            echo "</div>
                    </div>
                    <div class=\"media__item-zoom\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <path
                                d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                fill=\"#fff\"></path>
                            <clippath id=\"clip0_77_1126\">
                                <rect width=\"24\" height=\"24\"></rect>
                            </clippath>
                        </svg>
                    </div>
                </div>
            </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
        </div>
        ";
        // line 43
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 43) > 1)) {
            // line 44
            echo "        <ul class=\"pagination\">
            ";
            // line 45
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 45) > 1)) {
                // line 46
                echo "            <li class=\"prev\"><a
                    href=\"";
                // line 47
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "baseFileName", [], "any", false, false, false, 47), [($context["pageParam"] ?? null) => (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 47) - 1)]);
                echo "\">&larr;
                    </a></li>
            ";
            }
            // line 50
            echo "
            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 51)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 52
                echo "            <li class=\"";
                echo (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 52) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 53
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 53), "baseFileName", [], "any", false, false, false, 53), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
            ";
            // line 57
            if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, false, 57) > Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 57))) {
                // line 58
                echo "            <li class=\"next\"><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 58), "baseFileName", [], "any", false, false, false, 58), [($context["pageParam"] ?? null) => (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, false, 58) + 1)]);
                echo "\">
                    &rarr;</a></li>
            ";
            }
            // line 61
            echo "        </ul>
        ";
        }
        // line 63
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/photo.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 63,  170 => 61,  163 => 58,  161 => 57,  158 => 56,  147 => 53,  142 => 52,  138 => 51,  135 => 50,  129 => 47,  126 => 46,  124 => 45,  121 => 44,  119 => 43,  115 => 41,  94 => 26,  90 => 25,  82 => 20,  76 => 17,  73 => 16,  69 => 15,  66 => 14,  63 => 13,  60 => 12,  57 => 11,  54 => 10,  51 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"media\" id=\"gallery\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">{{this.page.title}}</h2>
        </div>
        <div class=\"media__wrap\">

            {% set records = builderList.records %}
            {% set displayColumn = builderList.displayColumn %}
            {% set noRecordsMessage = builderList.noRecordsMessage %}
            {% set detailsPage = builderList.detailsPage %}
            {% set detailsKeyColumn = builderList.detailsKeyColumn %}
            {% set detailsUrlParameter = builderList.detailsUrlParameter %}

            {% for record in records %}

            <a class=\"media__item\" href=\"{{record.photo.path | resize(1300, auto, {mode: 'crop', quality: '80', extension: 'webp'})}}\"
                data-fancybox=\"gallery\">
                <div class=\"media__item-img\">
                    <img src=\"{{record.photo.path | resize(520, 270, {mode: 'crop', quality: '80', extension: 'webp'})}}\" alt=\"\">
                    <div class=\"media__item-img-effect\">
                        <span></span>
                    </div>
                    <div class=\"media__item-info\">
                        <div class=\"media__item-name\">{{record.title}}</div>
                        <div class=\"media__item-desc\">{{record.desc}}</div>
                    </div>
                    <div class=\"media__item-zoom\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                            <path
                                d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                fill=\"#fff\"></path>
                            <clippath id=\"clip0_77_1126\">
                                <rect width=\"24\" height=\"24\"></rect>
                            </clippath>
                        </svg>
                    </div>
                </div>
            </a>
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
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/photo.htm", "");
    }
}
