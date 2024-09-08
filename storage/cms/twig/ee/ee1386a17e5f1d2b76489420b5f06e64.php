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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/uploadform/file-upload.htm */
class __TwigTemplate_1c3b21b6e825b3d681805eb0e0f02f75 extends Template
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
        if ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "uploader_enable"], "method", false, false, false, 1) == 0)) {
            // line 2
            echo "
    <div style=\"color:#a94442; background-color:#f2dede; border:solid 1px #ebccd1; border-radius:4px;\">
        <h5><strong>Warning</strong></h5>
        <h6>Uploads are disabled.</h6>
        <h6>You need to explicitly enable this option on the component (this is a security measure).</h6>
    </div>

";
        } else {
            // line 10
            echo "
    ";
            // line 11
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "isMulti", [], "any", false, false, false, 11)) {
                // line 12
                echo "
        ";
                // line 13
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::file-multi")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 14
                echo "
    ";
            } else {
                // line 16
                echo "
        ";
                // line 17
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension(\Cms\Twig\Extension::class)->partialFunction((($context["__SELF__"] ?? null) . "::file-single")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "
    ";
            }
            // line 20
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/uploadform/file-upload.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 20,  72 => 18,  68 => 17,  65 => 16,  61 => 14,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.property('uploader_enable') == 0 %}

    <div style=\"color:#a94442; background-color:#f2dede; border:solid 1px #ebccd1; border-radius:4px;\">
        <h5><strong>Warning</strong></h5>
        <h6>Uploads are disabled.</h6>
        <h6>You need to explicitly enable this option on the component (this is a security measure).</h6>
    </div>

{% else %}

    {% if __SELF__.isMulti %}

        {% partial __SELF__ ~ '::file-multi' %}

    {% else %}

        {% partial __SELF__ ~ '::file-single' %}

    {% endif %}

{% endif %}", "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/uploadform/file-upload.htm", "");
    }
}
