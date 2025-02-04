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

/* C:\work\backend\domains\cbt-karakol\plugins/blakejones/magicforms/components/uploadform/file-multi.htm */
class __TwigTemplate_8559413bd155abc1f9ff54b05f20668d extends Template
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
        echo "<div
    class=\"responsiv-uploader-fileupload style-file-multi is-multi ";
        // line 2
        echo ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "isPopulated", [], "method", false, false, false, 2)) ? ("is-populated") : (""));
        echo "\"
    data-control=\"fileupload\"
    data-template=\"#uploaderTemplate";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"
    data-unique-id=\"";
        // line 5
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\"
    ";
        // line 6
        if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileTypes", [], "any", false, false, false, 6)) {
            echo "data-file-types=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileTypes", [], "any", false, false, false, 6), "html", null, true);
            echo "\"";
        }
        // line 7
        echo ">

    <!-- Field placeholder -->
    <input type=\"hidden\" name=\"_uploader[";
        // line 10
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "attribute", [], "any", false, false, false, 10), "html", null, true);
        echo "]\" value=\"\" />

    <!-- Upload Button -->
    <button type=\"button\" class=\"ui button btn btn-default oc-icon-upload upload-button\">
        ";
        // line 14
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "placeholderText", [], "any", false, false, false, 14), "html", null, true);
        echo "
    </button>

    <!-- Existing files -->
    <div class=\"upload-files-container\">
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "fileList", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 20
            echo "            <div class=\"upload-object is-success\" data-id=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\" data-path=\"";
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "pathUrl", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                <div class=\"icon-container\">
                    ";
            // line 22
            if (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "isImage", [], "any", false, false, false, 22)) {
                // line 23
                echo "                        <img src=\"";
                echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "thumbUrl", [], "any", false, false, false, 23), "html", null, true);
                echo "\" alt=\"\" />
                    ";
            } else {
                // line 25
                echo "                        <img src=\"";
                echo $this->extensions['System\Twig\Extension']->appFilter("plugins/blakejones/magicforms/assets/imgs/upload.png");
                echo "\" alt=\"\" />
                    ";
            }
            // line 27
            echo "                </div>
                <div class=\"info\">
                    <h4 class=\"filename\">
                        <span data-dz-name>";
            // line 30
            echo twig_escape_filter($this->env, ((Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "title", [], "any", false, false, false, 30)) ? (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "title", [], "any", false, false, false, 30)) : (Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "file_name", [], "any", false, false, false, 30))), "html", null, true);
            echo "</span>
                    </h4>
                    <p class=\"size\">";
            // line 32
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "sizeToString", [], "any", false, false, false, 32), "html", null, true);
            echo "</p>
                </div>
                <div class=\"meta\">
                    <a
                        href=\"javascript:;\"
                        class=\"upload-remove-button\"
                        data-request=\"";
            // line 38
            echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onRemoveAttachment"), "html", null, true);
            echo "\"
                        data-request-confirm=\"";
            // line 39
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "removeText", [], "any", false, false, false, 39), "html", null, true);
            echo "\"
                        data-request-data=\"file_id: ";
            // line 40
            echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, $context["file"], "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\"
                        >&times;</a>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </div>
</div>

<!-- Template for new files -->
<script type=\"text/template\" id=\"uploaderTemplate";
        // line 49
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "\">
    <div class=\"upload-object dz-preview dz-file-preview\">
        <div class=\"icon-container\">
            <img data-dz-thumbnail src=\"";
        // line 52
        echo $this->extensions['System\Twig\Extension']->appFilter("plugins/blakejones/magicforms/assets/imgs/upload.png");
        echo "\" />
        </div>
        <div class=\"info\">
            <h4 class=\"filename\">
                <span data-dz-name></span>
            </h4>
            <p class=\"size\" data-dz-size></p>
            <p class=\"error\"><span data-dz-errormessage></span></p>
        </div>
        <div class=\"meta\">
            <a
                href=\"javascript:;\"
                class=\"upload-remove-button\"
                data-request=\"";
        // line 65
        echo twig_escape_filter($this->env, (($context["__SELF__"] ?? null) . "::onRemoveAttachment"), "html", null, true);
        echo "\"
                data-request-confirm=\"";
        // line 66
        echo twig_escape_filter($this->env, Cms\Twig\GetAttrNode::customGetAttribute($this->env, $this->source, ($context["__SELF__"] ?? null), "removeText", [], "any", false, false, false, 66), "html", null, true);
        echo "\"
                >&times;</a>
            <div class=\"progress-bar\"><span class=\"upload-progress\" data-dz-uploadprogress></span></div>
        </div>
    </div>
</script>
";
    }

    public function getTemplateName()
    {
        return "C:\\work\\backend\\domains\\cbt-karakol\\plugins/blakejones/magicforms/components/uploadform/file-multi.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 66,  171 => 65,  155 => 52,  149 => 49,  143 => 45,  132 => 40,  128 => 39,  124 => 38,  115 => 32,  110 => 30,  105 => 27,  99 => 25,  93 => 23,  91 => 22,  83 => 20,  79 => 19,  71 => 14,  64 => 10,  59 => 7,  53 => 6,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    class=\"responsiv-uploader-fileupload style-file-multi is-multi {{ __SELF__.isPopulated() ? 'is-populated' }}\"
    data-control=\"fileupload\"
    data-template=\"#uploaderTemplate{{ __SELF__ }}\"
    data-unique-id=\"{{ __SELF__ }}\"
    {% if __SELF__.fileTypes %}data-file-types=\"{{ __SELF__.fileTypes }}\"{% endif %}
>

    <!-- Field placeholder -->
    <input type=\"hidden\" name=\"_uploader[{{ __SELF__.attribute }}]\" value=\"\" />

    <!-- Upload Button -->
    <button type=\"button\" class=\"ui button btn btn-default oc-icon-upload upload-button\">
        {{ __SELF__.placeholderText }}
    </button>

    <!-- Existing files -->
    <div class=\"upload-files-container\">
        {% for file in __SELF__.fileList %}
            <div class=\"upload-object is-success\" data-id=\"{{ file.id }}\" data-path=\"{{ file.pathUrl }}\">
                <div class=\"icon-container\">
                    {% if file.isImage %}
                        <img src=\"{{ file.thumbUrl }}\" alt=\"\" />
                    {% else %}
                        <img src=\"{{ 'plugins/blakejones/magicforms/assets/imgs/upload.png'|app }}\" alt=\"\" />
                    {% endif %}
                </div>
                <div class=\"info\">
                    <h4 class=\"filename\">
                        <span data-dz-name>{{ file.title ?: file.file_name }}</span>
                    </h4>
                    <p class=\"size\">{{ file.sizeToString }}</p>
                </div>
                <div class=\"meta\">
                    <a
                        href=\"javascript:;\"
                        class=\"upload-remove-button\"
                        data-request=\"{{ __SELF__ ~ '::onRemoveAttachment' }}\"
                        data-request-confirm=\"{{ __SELF__.removeText }}\"
                        data-request-data=\"file_id: {{ file.id }}\"
                        >&times;</a>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

<!-- Template for new files -->
<script type=\"text/template\" id=\"uploaderTemplate{{ __SELF__ }}\">
    <div class=\"upload-object dz-preview dz-file-preview\">
        <div class=\"icon-container\">
            <img data-dz-thumbnail src=\"{{ 'plugins/blakejones/magicforms/assets/imgs/upload.png'|app }}\" />
        </div>
        <div class=\"info\">
            <h4 class=\"filename\">
                <span data-dz-name></span>
            </h4>
            <p class=\"size\" data-dz-size></p>
            <p class=\"error\"><span data-dz-errormessage></span></p>
        </div>
        <div class=\"meta\">
            <a
                href=\"javascript:;\"
                class=\"upload-remove-button\"
                data-request=\"{{ __SELF__ ~ '::onRemoveAttachment' }}\"
                data-request-confirm=\"{{ __SELF__.removeText }}\"
                >&times;</a>
            <div class=\"progress-bar\"><span class=\"upload-progress\" data-dz-uploadprogress></span></div>
        </div>
    </div>
</script>
", "C:\\work\\backend\\domains\\cbt-karakol\\plugins/blakejones/magicforms/components/uploadform/file-multi.htm", "");
    }
}
