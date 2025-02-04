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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/pages/form-pass.htm */
class __TwigTemplate_b1a56134c5876cc1a9670c0a4e740ecf extends Template
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
            <li>Border pass</li>
        </ul>
    </div>
</div>
<div class=\"booking-form\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">BORDER PASS</h2>
        </div>
        <div class=\"booking-form__wrap\">
            <div class=\"booking-form__col\">
                <p>Here you can reserve the most suitable date for your tour.</p><br>
                <p>To do this, we need information from the sender.</p>

                ";
        // line 19
        echo $this->env->getFunction('form_ajax')->getCallable()("ajax", (($context["uploadForm"] ?? null) . "::onFormSubmit"));
        echo "



                <div class=\"input-wrap\">
                    <div class=\"input\">
                        <label for=\"name\">Name</label>
                        <input type=\"text\" id=\"name\" name=\"Имя\">

                    </div>
                    <div class=\"input input_phone\">
                        <label for=\"phone\">Phone number</label>
                        <input class=\"phone-js\" name=\"phone\" type=\"tel\" placeholder id=\"phone\">
                        <div class=\"output-success\">The number is valid!</div>
                        <div class=\"output-error\">Wrong number. Try again.</div>
                    </div>
                    <div class=\"input\">
                        <label for=\"email\">Email</label>
                        <input type=\"text\" id=\"email\" name=\"email\">
                    </div>
                    <div class=\"input\">
                        <label for=\"where\">Where is the pass needed?</label>
                        <input type=\"text\" id=\"where\" name=\"Куда нужен пропуск\">
                    </div>
                    
                    <div class=\"input input_double\">
                      <div class=\"input\">
                        <label for=\"start-date\">Date from</label>
                        <span class=\"date-wrapper\">
                          <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"Дата c\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d M Y"), "html", null, true);
        echo "\">
                        </span>
                      </div>
                      <div class=\"input\">
                        <label for=\"end-date\">Date to</label>
                        <span class=\"date-wrapper\">
                          <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"Дата по\" disabled>
                          </span>
                      </div>
                    </div>

                    <div id=\"";
        // line 59
        echo twig_escape_filter($this->env, ($context["uploadForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
                </div>

                <div class=\"form-group\" style=\"margin-bottom: 15px;\">
                    <h4>Upload a photo of your passport.</h4>

                    ";
        // line 65
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction("@file-upload"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 66
        echo "              

                </div>

                ";
        // line 73
        echo "
                <div class=\"booking-form__btn\">
                    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">Send</button>
                </div>

                ";
        // line 78
        echo $this->env->getFunction('form_close')->getCallable()("close");
        echo "

            </div>
            <div class=\"booking-form__col\">
                <div class=\"list-contacts list-contacts--dark\">
                    <ul>
                        <li>
                            <span><i class=\"icon-user2\"></i></span>
                            <div>
                                <p>";
        // line 87
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 87), "contactPerson", [], "any", false, false, false, 87), "html", null, true);
        echo "</p>
                            </div>
                        </li>
                        <li><span><i class=\"icon-marker\"></i></span>
                            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 91), "addressRepeater", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            echo "                            <div>
                                ";
            // line 93
            echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 93);
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </li>

                        <li>
                            <span><i class=\"icon-envelope\"></i></span>
                            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 100), "emailRepeater", [], "any", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 101
            echo "                            <div>
                                <a href=\"tel:";
            // line 102
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 102), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 102), "html", null, true);
            echo "</a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </li>

                        <li>
                            <span>
                                <i class=\"icon-mobile\"></i>
                            </span>
                            ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 111), "phoneRepeater", [], "any", false, false, false, 111));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 112
            echo "                            <div>
                                <a href=\"tel:";
            // line 113
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 113), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 113), "html", null, true);
            echo "
                                    <span class=\"messenger\">
                                        <i class=\"";
            // line 115
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 115), "html", null, true);
            echo "\"></i>
                                    </span>
                                </a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup\" id=\"feedbackModal\">
    <div class=\"popup__window\">
        <div class=\"close\"></div>
        <h2>Thank you, your application has been accepted!</h2>
        <img src=\"";
        // line 132
        echo $this->extensions['System\Twig\Extension']->resizeFilter($this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/popup.jpg"), 300, ($context["auto"] ?? null), ["mode" => "crop", "quality" => "80", "extension" => "webp"]);
        echo "\"
            alt=\"\">
        <h2>We will contact you shortly.</h2>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/pages/form-pass.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 132,  224 => 120,  213 => 115,  206 => 113,  203 => 112,  199 => 111,  191 => 105,  180 => 102,  177 => 101,  173 => 100,  167 => 96,  158 => 93,  155 => 92,  151 => 91,  144 => 87,  132 => 78,  125 => 73,  119 => 66,  115 => 65,  106 => 59,  92 => 48,  60 => 19,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li>Border pass</li>
        </ul>
    </div>
</div>
<div class=\"booking-form\">
    <div class=\"container\">
        <div class=\"title-wrap\">
            <h2 class=\"title\">BORDER PASS</h2>
        </div>
        <div class=\"booking-form__wrap\">
            <div class=\"booking-form__col\">
                <p>Here you can reserve the most suitable date for your tour.</p><br>
                <p>To do this, we need information from the sender.</p>

                {{ form_ajax(uploadForm ~ '::onFormSubmit') }}



                <div class=\"input-wrap\">
                    <div class=\"input\">
                        <label for=\"name\">Name</label>
                        <input type=\"text\" id=\"name\" name=\"Имя\">

                    </div>
                    <div class=\"input input_phone\">
                        <label for=\"phone\">Phone number</label>
                        <input class=\"phone-js\" name=\"phone\" type=\"tel\" placeholder id=\"phone\">
                        <div class=\"output-success\">The number is valid!</div>
                        <div class=\"output-error\">Wrong number. Try again.</div>
                    </div>
                    <div class=\"input\">
                        <label for=\"email\">Email</label>
                        <input type=\"text\" id=\"email\" name=\"email\">
                    </div>
                    <div class=\"input\">
                        <label for=\"where\">Where is the pass needed?</label>
                        <input type=\"text\" id=\"where\" name=\"Куда нужен пропуск\">
                    </div>
                    
                    <div class=\"input input_double\">
                      <div class=\"input\">
                        <label for=\"start-date\">Date from</label>
                        <span class=\"date-wrapper\">
                          <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"Дата c\" placeholder=\"{{ 'now' | date('d M Y') }}\">
                        </span>
                      </div>
                      <div class=\"input\">
                        <label for=\"end-date\">Date to</label>
                        <span class=\"date-wrapper\">
                          <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"Дата по\" disabled>
                          </span>
                      </div>
                    </div>

                    <div id=\"{{ uploadForm }}_forms_flash\"></div>
                </div>

                <div class=\"form-group\" style=\"margin-bottom: 15px;\">
                    <h4>Upload a photo of your passport.</h4>

                    {% partial '@file-upload' %}
              

                </div>

                {# <div class=\"form-group\">
                    {% partial '@recaptcha' %}
                </div> #}

                <div class=\"booking-form__btn\">
                    <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">Send</button>
                </div>

                {{ form_close() }}

            </div>
            <div class=\"booking-form__col\">
                <div class=\"list-contacts list-contacts--dark\">
                    <ul>
                        <li>
                            <span><i class=\"icon-user2\"></i></span>
                            <div>
                                <p>{{this.theme.contactPerson}}</p>
                            </div>
                        </li>
                        <li><span><i class=\"icon-marker\"></i></span>
                            {% for item in this.theme.addressRepeater %}
                            <div>
                                {{item.address|raw}}
                            </div>
                            {%endfor%}
                        </li>

                        <li>
                            <span><i class=\"icon-envelope\"></i></span>
                            {% for item in this.theme.emailRepeater %}
                            <div>
                                <a href=\"tel:{{item.email}}\">{{item.email}}</a>
                            </div>
                            {%endfor%}
                        </li>

                        <li>
                            <span>
                                <i class=\"icon-mobile\"></i>
                            </span>
                            {% for item in this.theme.phoneRepeater %}
                            <div>
                                <a href=\"tel:{{item.phone}}\">{{item.phone}}
                                    <span class=\"messenger\">
                                        <i class=\"{{item.awesome_icon}}\"></i>
                                    </span>
                                </a>
                            </div>
                            {%endfor%}
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"popup\" id=\"feedbackModal\">
    <div class=\"popup__window\">
        <div class=\"close\"></div>
        <h2>Thank you, your application has been accepted!</h2>
        <img src=\"{{'assets/img/popup.jpg'|theme | resize(300, auto, { mode: 'crop', quality: '80', extension: 'webp'}) }}\"
            alt=\"\">
        <h2>We will contact you shortly.</h2>
    </div>
</div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/pages/form-pass.htm", "");
    }
}
