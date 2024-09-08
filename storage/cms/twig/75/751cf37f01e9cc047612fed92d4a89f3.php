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

/* /home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/js/reset-uploader.htm */
class __TwigTemplate_4815fa75ace4d7e2f9de580168f64dc8 extends Template
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
        echo "var dz = uploadDropZones['";
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "'];
if(dz) { dz.uploader.dropzone.removeAllFiles(); dz.uploader.evalIsPopulated(); }";
    }

    public function getTemplateName()
    {
        return "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/js/reset-uploader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("var dz = uploadDropZones['{{ id }}'];
if(dz) { dz.uploader.dropzone.removeAllFiles(); dz.uploader.evalIsPopulated(); }", "/home/m/mongu/cbtkarakol.com/public_html/plugins/blakejones/magicforms/components/partials/js/reset-uploader.htm", "");
    }
}
