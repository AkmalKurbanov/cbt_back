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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/site/menu-header.htm */
class __TwigTemplate_136badcb1752d0be5ae26f5bb3aa3adf extends Template
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
        // line 43
        echo "

<ul>
  
  <li class=\" ";
        // line 47
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 47), "url", [], "any", false, false, false, 47) == "/")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"> Home </a>
  </li>
  <li class=\"";
        // line 50
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 50), "url", [], "any", false, false, false, 50) == "/tours")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours/index");
        echo "\"> Tours </a>
  </li>
  ";
        // line 56
        echo "  <li class=\"";
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 56), "url", [], "any", false, false, false, 56) == "/blog")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/index");
        echo "\"> Blog </a>
  </li>
  <li class=\"";
        // line 59
        if (((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "url", [], "any", false, false, false, 59) == "/video/:page?") || (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 59), "url", [], "any", false, false, false, 59) == "/photo/:page?"))) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"#\" style=\"pointer-events: none;\"> Media </a>
    <ul>
      <li>
        <a href=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("video");
        echo "\"> Video </a>
      </li>
      <li>
        <a href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("photo");
        echo "\"> Photo </a>
      </li>
    </ul>
  </li>
  <li class=\"";
        // line 70
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 70), "url", [], "any", false, false, false, 70) == "/contacts")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\"> Contacts </a>
  </li>
  <li class=\"";
        // line 73
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 73), "url", [], "any", false, false, false, 73) == "/faq")) {
            echo " active ";
        } else {
            echo " ";
        }
        echo "\">
    <a href=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("faq");
        echo "\"> FAQ </a>
  </li>
  ";
        // line 76
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension(\Cms\Twig\Extension::class)->componentFunction("staticMenu"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 77
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/site/menu-header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 77,  133 => 76,  128 => 74,  120 => 73,  115 => 71,  107 => 70,  100 => 66,  94 => 63,  83 => 59,  78 => 57,  69 => 56,  64 => 51,  56 => 50,  51 => 48,  43 => 47,  37 => 43,);
    }

    public function getSourceContext()
    {
        return new Source("{# <ul>
  
  <li class=\" {% if this.page.url == '/' %} active {% else %} {% endif %}\">
    <a href=\"{{'home'| page}}\">
      {% if this.locale == 'ru' %} Главная {% else %} Home {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/tours' %} active {% else %} {% endif %}\">
    <a href=\"{{'tours/index'| page}}\">
      {% if this.locale == 'ru' %} Туры {% else %} Tours {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/rent' %} active {% else %} {% endif %}\">
    <a href=\"{{'rent'| page}}\">
      {% if this.locale == 'ru' %} Аренда {% else %} Rent {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/blog' %} active {% else %} {% endif %}\">
    <a href=\"{{'blog/index'| page}}\">
      {% if this.locale == 'ru' %} Блог {% else %} Blog {% endif %}
    </a>
  </li>
  <li class=\"{% if this.page.url == '/video/:page?' or this.page.url == '/photo/:page?' %} active {% else %} {% endif %}\">
    <a href=\"#\" style=\"pointer-events: none;\">
      {% if this.locale == 'ru' %} Медиа {% else %} Media  {% endif %}
    </a>
    <ul>
      <li>
        <a href=\"{{'video'| page}}\">
          {% if this.locale == 'ru' %} Видео {% else %} Video {% endif %}
        </a>
      </li>
      <li>
        <a href=\"{{'photo'| page}}\"> {% if this.locale == 'ru' %} Фото {% else %} Photo {% endif %} </a>
      </li>
    </ul>
  </li>
  <li class=\"{% if this.page.url == '/contacts' %} active {% else %} {% endif %}\">
    <a href=\"{{'contacts'| page}}\"> {% if this.locale == 'ru' %} Контакты {% else %} Contacts {% endif %} </a>
  </li>
  {% component 'staticMenu' %}
</ul> #}


<ul>
  
  <li class=\" {% if this.page.url == '/' %} active {% else %} {% endif %}\">
    <a href=\"{{'home'| page}}\"> Home </a>
  </li>
  <li class=\"{% if this.page.url == '/tours' %} active {% else %} {% endif %}\">
    <a href=\"{{'tours/index'| page}}\"> Tours </a>
  </li>
  {# <li class=\"{% if this.page.url == '/rent' %} active {% else %} {% endif %}\">
    <a href=\"{{'rent'| page}}\"> Rent </a>
  </li> #}
  <li class=\"{% if this.page.url == '/blog' %} active {% else %} {% endif %}\">
    <a href=\"{{'blog/index'| page}}\"> Blog </a>
  </li>
  <li class=\"{% if this.page.url == '/video/:page?' or this.page.url == '/photo/:page?' %} active {% else %} {% endif %}\">
    <a href=\"#\" style=\"pointer-events: none;\"> Media </a>
    <ul>
      <li>
        <a href=\"{{'video'| page}}\"> Video </a>
      </li>
      <li>
        <a href=\"{{'photo'| page}}\"> Photo </a>
      </li>
    </ul>
  </li>
  <li class=\"{% if this.page.url == '/contacts' %} active {% else %} {% endif %}\">
    <a href=\"{{'contacts'| page}}\"> Contacts </a>
  </li>
  <li class=\"{% if this.page.url == '/faq' %} active {% else %} {% endif %}\">
    <a href=\"{{'faq'| page}}\"> FAQ </a>
  </li>
  {% component 'staticMenu' %}
</ul>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/site/menu-header.htm", "");
    }
}
