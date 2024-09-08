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

/* C:\work\backend\domains\cbt-karakol\themes/cbt-karakol/partials/pass-form.htm */
class __TwigTemplate_d3d3b63697d64dcd069d9d41c0bd4b73 extends Template
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
        echo "<div class=\"pass-form\"
          style=\"background-image:
          url('";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/pass-form.webp");
        echo "')\">
          <div class=\"container\">
              <div class=\"title-wrap title-wrap--white\">
                  <h2 class=\"title\">Border permit Application</h2> 
              </div>
              <div class=\"pass-form__desc\">
                  <p>We are happy  to  assist you with border permit application to all zones of Kyrgyzstan. <br>
                   Please feel free to contact us about any information needed.</p>
              </div>
            <a class=\"btn\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("form-pass");
        echo "\">Fill out the form</a>
          </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/pass-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"pass-form\"
          style=\"background-image:
          url('{{ 'assets/images/pass-form.webp' | theme }}')\">
          <div class=\"container\">
              <div class=\"title-wrap title-wrap--white\">
                  <h2 class=\"title\">Border permit Application</h2> 
              </div>
              <div class=\"pass-form__desc\">
                  <p>We are happy  to  assist you with border permit application to all zones of Kyrgyzstan. <br>
                   Please feel free to contact us about any information needed.</p>
              </div>
            <a class=\"btn\" href=\"{{ 'form-pass'|page }}\">Fill out the form</a>
          </div>
      </div>", "C:\\work\\backend\\domains\\cbt-karakol\\themes/cbt-karakol/partials/pass-form.htm", "");
    }
}
