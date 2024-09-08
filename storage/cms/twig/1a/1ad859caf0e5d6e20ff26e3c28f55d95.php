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

/* /home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/form.htm */
class __TwigTemplate_0e5f57949704f7a02bbc7fc9a2fed4ab extends Template
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
        echo "<div class=\"detail__form\">
    <form data-request=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "::onFormSubmit\">
        ";
        // line 3
        echo $this->env->getFunction('form_token')->getCallable()("token");
        echo "

        <div id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["genericForm"] ?? null), "html", null, true);
        echo "_forms_flash\"></div>
        <div class=\"detail__title\">Booking</div>
        
        <div class=\"booking__item booking__item--date\">
          <div class=\"booking__item-icon\"> <i class=\"icon-calendar\"></i></div>
          <div> 
              <div class=\"booking__date-wrap\">
              <div class=\"booking__date-wrap-item\">
                  <label class=\"booking__item-title\" for=\"start-date\">Date from</label>
                  <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"Дата c\" placeholder=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d M Y"), "html", null, true);
        echo "\">
              </div>
              <div class=\"booking__date-wrap-item\">
                  <label class=\"booking__item-title\" for=\"end-date\">Date to</label>
                  <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"Дата по\" disabled>
              </div>
              </div>
          </div>
          </div>

        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user2\"></i>
            </div>
            <div>
                <div class=\"booking__item-title\">
                    Guests
                </div>
                <div class=\"person-count\">
                    <input type=\"number\" value=\"2\" min=\"1\" name=\"Количество персон\" /><span>persons</span>
                </div>
            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user2\"></i>
            </div>
            <div>
                <label for=\"name\" class=\"booking__item-title\">Name</label>
                <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"John Doe\">

            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-envelope\"></i>
            </div>
            <div>
                <label for=\"email\" class=\"booking__item-title\">Email</label>
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"email@gmail.com\">

            </div>
        </div>
        <div class=\"booking__item\">
                        <div class=\"booking__item-icon\"> <i class=\"icon-mobile\"></i></div>
                        <div>
                          <label class=\"booking__item-title\" for=\"phone\">Phone number</label>
                          <div class=\"input input_phone\">
                            <input class=\"phone-js\" name=\"phone\" type=\"tel\" placeholder>
                            <div class=\"output-success\">Номер действительный! </div>
                            <div class=\"output-error\">Неверный номер. Повторите попытку.</div>
                          </div>
                        </div>
                      </div>
        <input type=\"hidden\" name=\"Категория\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["category"] ?? null), "title", [], "any", false, false, false, 68), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"Название тура\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "name", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"Продолжительность тура\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "duration", [], "any", false, false, false, 70), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"Сложность тура\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["tour"] ?? null), "difficulty", [], "any", false, false, false, 71), "html", null, true);
        echo "\">
        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn booking-js\" disabled>";
        // line 72
        echo twig_escape_filter($this->env, __("Бронировать"), "html", null, true);
        echo "</button>
    </form>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 72,  130 => 71,  126 => 70,  122 => 69,  118 => 68,  61 => 14,  49 => 5,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"detail__form\">
    <form data-request=\"{{ genericForm }}::onFormSubmit\">
        {{ form_token() }}

        <div id=\"{{ genericForm }}_forms_flash\"></div>
        <div class=\"detail__title\">Booking</div>
        
        <div class=\"booking__item booking__item--date\">
          <div class=\"booking__item-icon\"> <i class=\"icon-calendar\"></i></div>
          <div> 
              <div class=\"booking__date-wrap\">
              <div class=\"booking__date-wrap-item\">
                  <label class=\"booking__item-title\" for=\"start-date\">Date from</label>
                  <input id=\"start-date\" type=\"text\" autocomplete=\"off\" name=\"Дата c\" placeholder=\"{{ 'now' | date('d M Y') }}\">
              </div>
              <div class=\"booking__date-wrap-item\">
                  <label class=\"booking__item-title\" for=\"end-date\">Date to</label>
                  <input id=\"end-date\" type=\"text\" autocomplete=\"off\" name=\"Дата по\" disabled>
              </div>
              </div>
          </div>
          </div>

        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user2\"></i>
            </div>
            <div>
                <div class=\"booking__item-title\">
                    Guests
                </div>
                <div class=\"person-count\">
                    <input type=\"number\" value=\"2\" min=\"1\" name=\"Количество персон\" /><span>persons</span>
                </div>
            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-user2\"></i>
            </div>
            <div>
                <label for=\"name\" class=\"booking__item-title\">Name</label>
                <input type=\"text\" id=\"name\" name=\"Имя\" placeholder=\"John Doe\">

            </div>
        </div>
        <div class=\"booking__item\">
            <div class=\"booking__item-icon\">
                <i class=\"icon-envelope\"></i>
            </div>
            <div>
                <label for=\"email\" class=\"booking__item-title\">Email</label>
                <input type=\"text\" id=\"email\" name=\"email\" placeholder=\"email@gmail.com\">

            </div>
        </div>
        <div class=\"booking__item\">
                        <div class=\"booking__item-icon\"> <i class=\"icon-mobile\"></i></div>
                        <div>
                          <label class=\"booking__item-title\" for=\"phone\">Phone number</label>
                          <div class=\"input input_phone\">
                            <input class=\"phone-js\" name=\"phone\" type=\"tel\" placeholder>
                            <div class=\"output-success\">Номер действительный! </div>
                            <div class=\"output-error\">Неверный номер. Повторите попытку.</div>
                          </div>
                        </div>
                      </div>
        <input type=\"hidden\" name=\"Категория\" value=\"{{category.title}}\">
        <input type=\"hidden\" name=\"Название тура\" value=\"{{tour.name}}\">
        <input type=\"hidden\" name=\"Продолжительность тура\" value=\"{{tour.duration}}\">
        <input type=\"hidden\" name=\"Сложность тура\" value=\"{{tour.difficulty}}\">
        <button id=\"simpleContactSubmitButton\" type=\"submit\" class=\"btn booking-js\" disabled>{{ 'Бронировать'|_ }}</button>
    </form>
</div>", "/home/m/mongu/cbtkarakol.com/public_html/themes/cbt-karakol/partials/form.htm", "");
    }
}
