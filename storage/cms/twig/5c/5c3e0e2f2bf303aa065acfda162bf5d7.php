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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/contacts.htm */
class __TwigTemplate_f29b7e8817fe9170c0cdbfe96960f8dc extends Template
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
            <li>";
        // line 5
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</li>
        </ul>
    </div>
</div>
<div class=\"contacts\">
    <div class=\"container\">
        <div class=\"contacts__wrap\">
            <div class=\"contacts__col\">
                <div id=\"map\">
                <iframe src=\"";
        // line 14
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "map", [], "any", false, false, false, 14), "html", null, true);
        echo "\"></iframe>
                </div>
                <br>
                <br>

                <form data-request=\"";
        // line 19
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">

                    ";
        // line 21
        echo $this->env->getFunction('form_token')->getCallable()("token");
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
                            <label for=\"message\">Message</label>
                            <textarea name=\"Сообщение\" id=\"messgase\"
                                style=\"width: 100%;min-height: 45px;border:none; outline: none; padding-left: 10px; padding-top: 10px;resize: vertical;\"></textarea>
                        </div>
                    </div>
                    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>

                    <div class=\"booking-form__btn\">
                        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">Send</button>
                    </div>

                </form>

            </div>
            <div class=\"contacts__col\">
                <div class=\"title-wrap\">
                    <h2 class=\"title\">";
        // line 56
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "title", [], "any", false, false, false, 56), "html", null, true);
        echo "</h2>
                </div>
                <div class=\"list-contacts list-contacts--dark\">
                    <ul>
                        <li>
                            <span><i class=\"icon-user2\"></i></span>
                            <div>
                                <p>";
        // line 63
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 63), "contactPerson", [], "any", false, false, false, 63), "html", null, true);
        echo "</p>
                            </div>
                        </li>
                        <li><span><i class=\"icon-marker\"></i></span>
                            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 67), "addressRepeater", [], "any", false, false, false, 67));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "                            <div>
                                ";
            // line 69
            echo Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 69);
            echo "
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </li>

                        <li>
                            <span><i class=\"icon-envelope\"></i></span>
                            ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 76), "emailRepeater", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 77
            echo "                            <div>
                                <a href=\"tel:";
            // line 78
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 78), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 78), "html", null, true);
            echo "</a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "                        </li>

                        <li>
                            <span>
                                <i class=\"icon-mobile\"></i>
                            </span>
                            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 87), "phoneRepeater", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 88
            echo "                            <div>
                                <a href=\"tel:";
            // line 89
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 89), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 89), "html", null, true);
            echo "
                                    <span class=\"messenger\">
                                        <i class=\"";
            // line 91
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["item"], "awesome_icon", [], "any", false, false, false, 91), "html", null, true);
            echo "\"></i>
                                    </span>
                                </a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                        </li>
                    </ul>

                </div>





            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/contacts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 96,  191 => 91,  184 => 89,  181 => 88,  177 => 87,  169 => 81,  158 => 78,  155 => 77,  151 => 76,  145 => 72,  136 => 69,  133 => 68,  129 => 67,  122 => 63,  112 => 56,  98 => 45,  71 => 21,  66 => 19,  58 => 14,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumbs\">
    <div class=\"container\">
        <ul>
            <li><a href=\"{{ 'home'|page }}\">Home</a></li>
            <li>{{this.page.title}}</li>
        </ul>
    </div>
</div>
<div class=\"contacts\">
    <div class=\"container\">
        <div class=\"contacts__wrap\">
            <div class=\"contacts__col\">
                <div id=\"map\">
                <iframe src=\"{{this.theme.map}}\"></iframe>
                </div>
                <br>
                <br>

                <form data-request=\"{{ genericForm }}::onFormSubmit\">

                    {{ form_token() }}


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
                            <label for=\"message\">Message</label>
                            <textarea name=\"Сообщение\" id=\"messgase\"
                                style=\"width: 100%;min-height: 45px;border:none; outline: none; padding-left: 10px; padding-top: 10px;resize: vertical;\"></textarea>
                        </div>
                    </div>
                    <div id=\"{{ genericForm }}_forms_flash\"></div>

                    <div class=\"booking-form__btn\">
                        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn\">Send</button>
                    </div>

                </form>

            </div>
            <div class=\"contacts__col\">
                <div class=\"title-wrap\">
                    <h2 class=\"title\">{{this.page.title}}</h2>
                </div>
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
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/pages/contacts.htm", "");
    }
}
