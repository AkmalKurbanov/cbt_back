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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/search-form.htm */
class __TwigTemplate_79b8c0db0c82a0dbb5e5adee5285f102 extends Template
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
        echo "<div class=\"search-form\">
<form action=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchInput"] ?? null), "searchPage", [], "any", false, false, false, 2));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"Search\"
                   value=\"";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["searchInput"] ?? null), "query", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
                   autocomplete=\"off\"
                   
            >
            <button class=\"ss-search-form__submit\" type=\"submit\">
            
                <div class=\"search__icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\" fill=\"black\"></path>
                        <clipPath id=\"clip0_77_1126\">
                            <rect width=\"24\" height=\"24\"></rect>
                        </clipPath>
                    </svg>
                </div>

            </button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div> 
    </div>
</form>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/search-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"search-form\">
<form action=\"{{ searchInput.searchPage | page }}?q={{ query | url_encode(true) }}\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"Search\"
                   value=\"{{ searchInput.query }}\"
                   autocomplete=\"off\"
                   
            >
            <button class=\"ss-search-form__submit\" type=\"submit\">
            
                <div class=\"search__icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\">
                        <path d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\" fill=\"black\"></path>
                        <clipPath id=\"clip0_77_1126\">
                            <rect width=\"24\" height=\"24\"></rect>
                        </clipPath>
                    </svg>
                </div>

            </button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div> 
    </div>
</form>
</div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/search-form.htm", "");
    }
}
