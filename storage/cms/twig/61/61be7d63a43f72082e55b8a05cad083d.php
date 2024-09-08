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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/site/hero.htm */
class __TwigTemplate_29e14aa02345d452247924957091099d extends Template
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
        echo "<div class=\"hero\">
    <div class=\"hero-mobile-bg\">
        <img src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/hero-mobile-bg.webp");
        echo "\"
            alt=\"\">

    </div>
    <header class=\"header header--transparent\">
        <div class=\"container\">
            <div class=\"header__wrap\">
                <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\" class=\"logo\">
                  <img src=\"";
        // line 11
        echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 11), "logoHeaderMain", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11), 125, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
        echo "\">
                </a>
                
                <div class=\" header__left-col\">

                    <div class=\"nav\">
                        ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("site/menu-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "                        <div class=\"social\">
                            <ul>
                                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 20), "social", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "                                <li>
                                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 22), "html", null, true);
            echo "\" target=\"_blank\">
                                        <i class=\"";
            // line 23
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 23), "html", null, true);
            echo "\"></i>
                                    </a>
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                            </ul>
                        </div>
                    </div>
                    <div class=\"social social--white\">
                        <ul>
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 32), "social", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 33
            echo "                            <li>
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 34), "html", null, true);
            echo "\" target=\"_blank\">
                                    <i class=\"";
            // line 35
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 35), "html", null, true);
            echo "\"></i>
                                </a>
                            </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                        </ul>
                    </div>
                    <div class=\"search search-js\">
                        <div class=\"search__icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\">
                                <path
                                    d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                    fill=\"#fff\"></path>
                                <clippath id=\"clip0_77_1126\">
                                    <rect width=\"24\" height=\"24\"></rect>
                                </clippath>
                            </svg>
                        </div>
                    </div>


                    ";
        // line 57
        echo "
                    ";
        // line 73
        echo "                    <div class=\"hamburger\"> <span></span></div>
                </div>
            </div>
        </div>
    </header>

    ";
        // line 79
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("search-form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 80
        echo "

    <div class=\"swiper hero-js\">
        <div class=\"swiper-wrapper\">

            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 85), "heroSlider", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            echo "            <div class=\"swiper-slide\">
                <div class=\"hero__item\"
                    style=\"background-image: url('";
            // line 88
            echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "heroSlide", [], "any", false, false, false, 88)), 1920, 1000, ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "')\">
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
    </div>
    <div class=\"container\">

        <div class=\"swiper hero-title-js\">
            <div class=\"swiper-wrapper\">
              
            ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 99), "heroSlider", [], "any", false, false, false, 99));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 100
            echo "            
              <div class=\"swiper-slide\">  
                <div class=\"hero__title\">";
            // line 102
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "heroTitle", [], "any", false, false, false, 102), "html", null, true);
            echo "</div>
                <div class=\"hero__subtitle\">";
            // line 103
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "heroSubTitle", [], "any", false, false, false, 103), "html", null, true);
            echo "</div>
              </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "  
            </div>
          </div>

        ";
        // line 111
        echo "
        <div class=\"booking\">
            <h2 class=\"booking__title\">Booking</h2>
            <div class=\"booking__wrap\">
                



                    <div class=\"booking__item-wrap\">
                        <div class=\"booking__item booking__item--date\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-calendar\"></i></div>
                            <div>
                                
                                <div class=\"booking__date-wrap\">
                                    <div>
                                        <label for=\"start-date\" class=\"booking__item-title\">Date from</label>
                                        <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"from\" placeholder=\"";
        // line 127
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d M Y"), "html", null, true);
        echo "\">
                                    </div>
                                    
                                    <div>
                                        <label for=\"end-date\" class=\"booking__item-title\">Date to</label>
                                        <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"to\" disabled>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"booking__item\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-user2\"></i></div>
                            <div>
                                <div class=\"booking__item-title\">guests</div>
                                <div class=\"person-count\">
                                    <input type=\"number\" value=\"2\" min=\"1\"><span>persons</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"booking__item\">
                          <button class=\"btn booking-js booking-hero-js\" disabled>Booking</button>
                        </div>
                    </div>




               
            </div>
        </div>

        ";
        // line 159
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("recomend-tours"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 160
        echo "

    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/site/hero.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 160,  270 => 159,  235 => 127,  217 => 111,  211 => 106,  201 => 103,  197 => 102,  193 => 100,  189 => 99,  180 => 92,  170 => 88,  166 => 86,  162 => 85,  155 => 80,  151 => 79,  143 => 73,  140 => 57,  121 => 39,  111 => 35,  107 => 34,  104 => 33,  100 => 32,  93 => 27,  83 => 23,  79 => 22,  76 => 21,  72 => 20,  68 => 18,  64 => 17,  55 => 11,  51 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero\">
    <div class=\"hero-mobile-bg\">
        <img src=\"{{ 'assets/images/hero-mobile-bg.webp'|theme }}\"
            alt=\"\">

    </div>
    <header class=\"header header--transparent\">
        <div class=\"container\">
            <div class=\"header__wrap\">
                <a href=\"{{ 'home'|page }}\" class=\"logo\">
                  <img src=\"{{ this.theme.logoHeaderMain.path | resize(125, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\">
                </a>
                
                <div class=\" header__left-col\">

                    <div class=\"nav\">
                        {% partial  'site/menu-header' %}
                        <div class=\"social\">
                            <ul>
                                {% for item in this.theme.social %}
                                <li>
                                    <a href=\"{{item.url}}\" target=\"_blank\">
                                        <i class=\"{{item.awesome_icon}}\"></i>
                                    </a>
                                </li>
                                {%endfor%}
                            </ul>
                        </div>
                    </div>
                    <div class=\"social social--white\">
                        <ul>
                            {% for item in this.theme.social %}
                            <li>
                                <a href=\"{{item.url}}\" target=\"_blank\">
                                    <i class=\"{{item.awesome_icon}}\"></i>
                                </a>
                            </li>
                            {%endfor%}
                        </ul>
                    </div>
                    <div class=\"search search-js\">
                        <div class=\"search__icon\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\"
                                fill=\"none\">
                                <path
                                    d=\"M18.031 16.617L22.314 20.899L20.899 22.314L16.617 18.031C15.0237 19.3082 13.042 20.0029 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20.0029 13.042 19.3082 15.0237 18.031 16.617ZM16.025 15.875C17.2941 14.5699 18.0029 12.8204 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18C12.8204 18.0029 14.5699 17.2941 15.875 16.025L16.025 15.875V15.875Z\"
                                    fill=\"#fff\"></path>
                                <clippath id=\"clip0_77_1126\">
                                    <rect width=\"24\" height=\"24\"></rect>
                                </clippath>
                            </svg>
                        </div>
                    </div>


                    {# {% partial  'site/lang' %} #}

                    {# <div class=\"lang main-page-lang\">


                        <div class=\"lang\">
                            <div class=\"lang__selected\" data-lang=\"{{this.site.locale}}\">{{this.site.locale}}</div>
                            <div class=\"lang__dropdown\">
                                <div class=\"lang__item\"><a href=\"/ru{{ this.page.url }}\" data-lang=\"ru\">ru</a>
                                </div>
                                <div class=\"lang__item\"><a href=\"/en{{ this.page.url }}\" data-lang=\"en\">en</a>
                                </div>
                            </div>
                        </div>


                    </div> #}
                    <div class=\"hamburger\"> <span></span></div>
                </div>
            </div>
        </div>
    </header>

    {% partial 'search-form' %}


    <div class=\"swiper hero-js\">
        <div class=\"swiper-wrapper\">

            {% for item in this.theme.heroSlider %}
            <div class=\"swiper-slide\">
                <div class=\"hero__item\"
                    style=\"background-image: url('{{item.heroSlide | media | resize(1920, 1000, { mode: 'crop', quality: '80', extension: 'webp' })}}')\">
                </div>
            </div>
            {% endfor %}
        </div>
    </div>
    <div class=\"container\">

        <div class=\"swiper hero-title-js\">
            <div class=\"swiper-wrapper\">
              
            {% for item in this.theme.heroSlider %}
            
              <div class=\"swiper-slide\">  
                <div class=\"hero__title\">{{item.heroTitle}}</div>
                <div class=\"hero__subtitle\">{{item.heroSubTitle}}</div>
              </div>

            {% endfor %}  
            </div>
          </div>

        {# <div class=\"hero__title\">{{this.theme.mainTitle | raw}}</div> #}

        <div class=\"booking\">
            <h2 class=\"booking__title\">Booking</h2>
            <div class=\"booking__wrap\">
                



                    <div class=\"booking__item-wrap\">
                        <div class=\"booking__item booking__item--date\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-calendar\"></i></div>
                            <div>
                                
                                <div class=\"booking__date-wrap\">
                                    <div>
                                        <label for=\"start-date\" class=\"booking__item-title\">Date from</label>
                                        <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"from\" placeholder=\"{{ 'now' | date('d M Y') }}\">
                                    </div>
                                    
                                    <div>
                                        <label for=\"end-date\" class=\"booking__item-title\">Date to</label>
                                        <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"to\" disabled>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class=\"booking__item\">
                            <div class=\"booking__item-icon\"> <i class=\"icon-user2\"></i></div>
                            <div>
                                <div class=\"booking__item-title\">guests</div>
                                <div class=\"person-count\">
                                    <input type=\"number\" value=\"2\" min=\"1\"><span>persons</span>
                                </div>
                            </div>
                        </div>
                        <div class=\"booking__item\">
                          <button class=\"btn booking-js booking-hero-js\" disabled>Booking</button>
                        </div>
                    </div>




               
            </div>
        </div>

        {% partial 'recomend-tours' %}


    </div>
</div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/site/hero.htm", "");
    }
}
