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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/page_tour.htm */
class __TwigTemplate_4c7001c3ee72f4cb01e7430e04e89d83 extends Template
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
            <li><a href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours/index");
        echo "\">Tours</a></li>
            <li><a href=\"/tours/c/";
        // line 6
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "slug", [], "any", false, false, false, 6), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</a></li>
            <li>";
        // line 7
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"detail\">
    <div class=\"container\">

      
      <div class=\"gallery-detail\">
        <div class=\"f-carousel\" id=\"gallery-detail-js\">
          
          ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "gallery", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "              <div class=\"f-carousel__slide\" data-thumb-src=\"";
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 19), 100, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"><img alt=\"\" data-lazy-src=\"";
            echo $this->extensions['System\Twig\Extension']->resizeFilter(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 19), 1250, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
            echo "\"></div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "          
        </div>
      </div>

        
        <div class=\"title-wrap\">
            <h2 class=\"title\">";
        // line 27
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "</h2>
        </div>
        <div class=\"desc-text\">
            <div class=\"desc-text__wrap\">
                <div class=\"desc-text__col\">
                    ";
        // line 32
        echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "desc", [], "any", false, false, false, 32);
        echo "
                    
                    ";
        // line 34
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "detail_desc", [], "any", false, false, false, 34)) {
            // line 35
            echo "                      <div class=\"accordion\">
                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "detail_desc", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["_key"] => $context["acc"]) {
                // line 37
                echo "                        <div class=\"accordion__item\">
                            <div class=\"accordion__title\">
                                ";
                // line 39
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["acc"], "acc_title", [], "any", false, false, false, 39), "html", null, true);
                echo "<i class=\"icon-angle-right\"></i>
                            </div>
                            <div class=\"accordion__desc-wrap\">
                                <div class=\"accordion__desc\">
                                    <p>";
                // line 43
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["acc"], "acc_desc", [], "any", false, false, false, 43), "html", null, true);
                echo "</p>
                                </div>
                                <div class=\"accordion__desc-img\">
                                    ";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["acc"], "acc_gallery", [], "any", false, false, false, 46));
                foreach ($context['_seq'] as $context["_key"] => $context["galleryDay"]) {
                    // line 47
                    echo "                                        
                                    <a href=\"";
                    // line 48
                    echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["galleryDay"], "img", [], "any", false, false, false, 48)), 1300, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\"
                                        data-fancybox>
                                        <img src=\"";
                    // line 50
                    echo $this->extensions['System\Twig\Extension']->resizeFilter($this->env->getFilter('media')->getCallable()(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["galleryDay"], "img", [], "any", false, false, false, 50)), 165, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
                    echo "\"
                                            alt=\"\" />
                                    </a>

                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galleryDay'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "                                </div>
                            </div>
                        </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['acc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    </div>
                    ";
        } else {
            // line 61
            echo "                    ";
        }
        // line 62
        echo "                    
                    
                    ";
        // line 64
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "map", [], "any", false, false, false, 64)) {
            // line 65
            echo "                      <br>
                      <br>
                      
                      <div class=\"title-wrap\">
                          <h2 class=\"title\">Map</h2>
                      </div>
                      <div id=\"map\">
                        <iframe src=\"";
            // line 72
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "map", [], "any", false, false, false, 72), "html", null, true);
            echo "\"></iframe>
                      </div>
                    ";
        } else {
            // line 75
            echo "                    ";
        }
        // line 76
        echo "

                </div>
                <div class=\"desc-text__col\">
                    <div class=\"detail__desc\">
                        <div class=\"detail__desc-wrap\">
                            
                            ";
        // line 83
        if (((((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "duration", [], "any", false, false, false, 83) == false) && (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "difficulty", [], "any", false, false, false, 83) == false)) && (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "season", [], "any", false, false, false, 83) == false)) && (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "attraction", [], "any", false, false, false, 83) == false))) {
            // line 84
            echo "                              
                            ";
        } else {
            // line 86
            echo "                              <div class=\"detail__title\">Short description</div>
                            ";
        }
        // line 88
        echo "
                            <ul>
                                
                                ";
        // line 91
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "duration", [], "any", false, false, false, 91)) {
            // line 92
            echo "
                                    <li>
                                        <span>Duration:</span> ";
            // line 94
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "duration", [], "any", false, false, false, 94), "html", null, true);
            echo "
                                    </li>
                                
                                ";
        } else {
            // line 98
            echo "                                ";
        }
        // line 99
        echo "
                                ";
        // line 100
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "difficulty", [], "any", false, false, false, 100)) {
            // line 101
            echo "                                  <li>
                                    <span>Difficulty level:</span> ";
            // line 102
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "difficulty", [], "any", false, false, false, 102), "html", null, true);
            echo "
                                  </li>
                                ";
        } else {
            // line 105
            echo "                                ";
        }
        // line 106
        echo "
                                ";
        // line 107
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "season", [], "any", false, false, false, 107)) {
            // line 108
            echo "                                  <li><span>Best season:</span> ";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "season", [], "any", false, false, false, 108), "html", null, true);
            echo "</li>
                                ";
        } else {
            // line 110
            echo "                                ";
        }
        // line 111
        echo "                                
                                ";
        // line 112
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "attraction", [], "any", false, false, false, 112)) {
            // line 113
            echo "                                  <li>
                                      <span>Attractions:</span> ";
            // line 114
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "attraction", [], "any", false, false, false, 114), "html", null, true);
            echo "
                                  </li>
                                ";
        } else {
            // line 117
            echo "                                ";
        }
        // line 118
        echo "
                                ";
        // line 119
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "requirement", [], "any", false, false, false, 119)) {
            // line 120
            echo "                                  <li>
                                      <span>Requirements:</span> ";
            // line 121
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "requirement", [], "any", false, false, false, 121), "html", null, true);
            echo "
                                  </li>
                                ";
        } else {
            // line 124
            echo "                                ";
        }
        // line 125
        echo "                            </ul>
                        </div>
                        ";
        // line 127
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("form"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 128
        echo "                    </div>
                </div>
            </div>
        </div>
        
      

        
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/page_tour.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 128,  304 => 127,  300 => 125,  297 => 124,  291 => 121,  288 => 120,  286 => 119,  283 => 118,  280 => 117,  274 => 114,  271 => 113,  269 => 112,  266 => 111,  263 => 110,  257 => 108,  255 => 107,  252 => 106,  249 => 105,  243 => 102,  240 => 101,  238 => 100,  235 => 99,  232 => 98,  225 => 94,  221 => 92,  219 => 91,  214 => 88,  210 => 86,  206 => 84,  204 => 83,  195 => 76,  192 => 75,  186 => 72,  177 => 65,  175 => 64,  171 => 62,  168 => 61,  164 => 59,  155 => 55,  144 => 50,  139 => 48,  136 => 47,  132 => 46,  126 => 43,  119 => 39,  115 => 37,  111 => 36,  108 => 35,  106 => 34,  101 => 32,  93 => 27,  85 => 21,  74 => 19,  70 => 18,  56 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li><a href=\"{{'tours/index'|page}}\">Tours</a></li>
            <li><a href=\"/tours/c/{{category.slug}}\">{{category.title}}</a></li>
            <li>{{tour.name}}</li>
        </ul>
    </div>
</div>
<div class=\"detail\">
    <div class=\"container\">

      
      <div class=\"gallery-detail\">
        <div class=\"f-carousel\" id=\"gallery-detail-js\">
          
          {% for image in tour.gallery %}
              <div class=\"f-carousel__slide\" data-thumb-src=\"{{ image.path | resize(100, auto, { mode: 'crop', quality: '80', extension: 'webp' }) }}\"><img alt=\"\" data-lazy-src=\"{{ image.path | resize(1250, auto, { mode: 'crop', quality: '80', extension: 'webp' }) }}\"></div>
          {% endfor %}
          
        </div>
      </div>

        
        <div class=\"title-wrap\">
            <h2 class=\"title\">{{tour.name}}</h2>
        </div>
        <div class=\"desc-text\">
            <div class=\"desc-text__wrap\">
                <div class=\"desc-text__col\">
                    {{tour.desc|raw}}
                    
                    {% if tour.detail_desc %}
                      <div class=\"accordion\">
                        {% for acc in tour.detail_desc %}
                        <div class=\"accordion__item\">
                            <div class=\"accordion__title\">
                                {{acc.acc_title}}<i class=\"icon-angle-right\"></i>
                            </div>
                            <div class=\"accordion__desc-wrap\">
                                <div class=\"accordion__desc\">
                                    <p>{{acc.acc_desc}}</p>
                                </div>
                                <div class=\"accordion__desc-img\">
                                    {% for galleryDay in acc.acc_gallery %}
                                        
                                    <a href=\"{{galleryDay.img | media | resize(1300, auto, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                        data-fancybox>
                                        <img src=\"{{galleryDay.img | media | resize(165, auto, { mode: 'crop', quality: '80', extension: 'webp' })}}\"
                                            alt=\"\" />
                                    </a>

                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                        {% endfor %}
                    </div>
                    {% else %}
                    {% endif %}
                    
                    
                    {% if tour.map %}
                      <br>
                      <br>
                      
                      <div class=\"title-wrap\">
                          <h2 class=\"title\">Map</h2>
                      </div>
                      <div id=\"map\">
                        <iframe src=\"{{tour.map}}\"></iframe>
                      </div>
                    {% else %}
                    {% endif %}


                </div>
                <div class=\"desc-text__col\">
                    <div class=\"detail__desc\">
                        <div class=\"detail__desc-wrap\">
                            
                            {% if tour.duration == false and tour.difficulty == false and tour.season == false and tour.attraction == false %}
                              
                            {% else %}
                              <div class=\"detail__title\">Short description</div>
                            {% endif %}

                            <ul>
                                
                                {% if tour.duration %}

                                    <li>
                                        <span>Duration:</span> {{tour.duration}}
                                    </li>
                                
                                {% else %}
                                {% endif %}

                                {% if tour.difficulty %}
                                  <li>
                                    <span>Difficulty level:</span> {{tour.difficulty}}
                                  </li>
                                {% else %}
                                {% endif %}

                                {% if tour.season %}
                                  <li><span>Best season:</span> {{tour.season}}</li>
                                {% else %}
                                {% endif %}
                                
                                {% if tour.attraction %}
                                  <li>
                                      <span>Attractions:</span> {{tour.attraction}}
                                  </li>
                                {% else %}
                                {% endif %}

                                {% if tour.requirement %}
                                  <li>
                                      <span>Requirements:</span> {{tour.requirement}}
                                  </li>
                                {% else %}
                                {% endif %}
                            </ul>
                        </div>
                        {% partial 'form' %}
                    </div>
                </div>
            </div>
        </div>
        
      

        
    </div>
</div>
", "/home/m/mongu/cbtkarakol.com/public_html/plugins/cbt/tours/components/tourscomponent/page_tour.htm", "");
    }
}
