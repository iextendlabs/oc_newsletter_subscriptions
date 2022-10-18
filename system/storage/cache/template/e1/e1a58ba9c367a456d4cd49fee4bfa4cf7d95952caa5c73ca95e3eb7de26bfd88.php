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

/* extension/vqmodxmlInstaller/admin/view/template/module/installer_vqmodxml.twig */
class __TwigTemplate_6a1edd498acdff0ff59afa6be02d73f12bbd0bad1e41a7a893d41f0854745381 extends Template
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
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-end\">
        <a href=\"";
        // line 6
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 10
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <fieldset>
          <legend>";
        // line 20
        echo ($context["text_install"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label for=\"input-filename\" class=\"col-sm-2 col-form-label\">";
        // line 22
        echo ($context["entry_upload"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"input-group\">
                <button type=\"button\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fa-solid fa-upload\"></i> ";
        // line 25
        echo ($context["button_upload"] ?? null);
        echo "</button>
              </div>
              <div class=\"form-text\" style=\"font-size: small;\">";
        // line 27
        echo ($context["help_xml"] ?? null);
        echo "</div>
              <div id=\"error-filename\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <fieldset>
          <legend>";
        // line 33
        echo ($context["text_list"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-start\">";
        // line 39
        echo ($context["column_name"] ?? null);
        echo "</td>
                    <td class=\"text-center\">";
        // line 40
        echo ($context["column_no_file"] ?? null);
        echo "</td>
                    <td class=\"text-center\">";
        // line 41
        echo ($context["column_operation"] ?? null);
        echo "</td>
                    <td class=\"text-end\" style=\"min-width: 105px;\">";
        // line 42
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 46
        if (($context["files"] ?? null)) {
            // line 47
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["files"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 48
                echo "                      <tr>
                        <td class=\"text-start\">
                            ";
                // line 50
                echo twig_get_attribute($this->env, $this->source, $context["file"], "name", [], "any", false, false, false, 50);
                echo "
                        </td>
                        <td class=\"text-center\">
                          ";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["file"], "files", [], "any", false, false, false, 53);
                echo "
                        </td>
                        <td class=\"text-center\">
                          ";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["file"], "operation", [], "any", false, false, false, 56);
                echo "
                        </td>
                        <td class=\"text-end align-text-top text-nowrap\">
                          
                          ";
                // line 60
                if (twig_get_attribute($this->env, $this->source, $context["file"], "status", [], "any", false, false, false, 60)) {
                    // line 61
                    echo "                            <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_enable"] ?? null);
                    echo "\" class=\"btn btn-success enable\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["file"], "enable", [], "any", false, false, false, 61);
                    echo "\" ><i class=\"fa-solid fa-plus-circle\"></i></button>
                            <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 62
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger delete\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["file"], "delete", [], "any", false, false, false, 62);
                    echo "\"><i class=\"fa-regular fa-trash-can\" ></i></button>
                            <a href=\"";
                    // line 63
                    echo twig_get_attribute($this->env, $this->source, $context["file"], "view", [], "any", false, false, false, 63);
                    echo "\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_view"] ?? null);
                    echo "\" class=\"btn btn-primary\" disabled><i class=\"fa-regular fa-eye\" ></i></button></a>
                          ";
                } else {
                    // line 65
                    echo "                            <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_disable"] ?? null);
                    echo "\" class=\"btn btn-warning disable\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["file"], "disable", [], "any", false, false, false, 65);
                    echo "\"><i class=\"fa-solid fa-minus-circle\"></i></button>
                            <button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    // line 66
                    echo ($context["button_delete"] ?? null);
                    echo "\" class=\"btn btn-danger delete\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["file"], "delete", [], "any", false, false, false, 66);
                    echo "\" disabled><i class=\"fa-regular fa-trash-can\" ></i></button>
                            <a href=\"";
                    // line 67
                    echo twig_get_attribute($this->env, $this->source, $context["file"], "view", [], "any", false, false, false, 67);
                    echo "\"><button type=\"button\" data-bs-toggle=\"tooltip\" title=\"";
                    echo ($context["button_view"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa-regular fa-eye\" ></i></button></a>
                          ";
                }
                // line 69
                echo "                          
                        </td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                  ";
        } else {
            // line 74
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"4\">";
            // line 75
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 78
        echo "                </tbody>
              </table>
            </div>
          </div>
        </fieldset>          
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\">
  \$('#button-upload').on('click', function () {
    var element = this;

    \$('#form-upload').remove();

    \$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\"/></form>');

    \$('#form-upload input[name=\\'file\\']').trigger('click');

    \$('#form-upload input[name=\\'file\\']').on('change', function () {
        if ((this.files[0].size / 1024) > ";
        // line 98
        echo ($context["config_file_max_size"] ?? null);
        echo ") {
            alert('";
        // line 99
        echo ($context["error_upload_size"] ?? null);
        echo "');

            \$(this).val('');
        }
    });

    if (typeof timer !== 'undefined') {
        clearInterval(timer);
    }

    var timer = setInterval(function () {
        if (\$('#form-upload input[name=\\'file\\']').val() !== '') {
            clearInterval(timer);

            \$.ajax({
                url: 'index.php?route=extension/vqmodxmlInstaller/module/vqmodxml_installer|upload&user_token=";
        // line 114
        echo ($context["user_token"] ?? null);
        echo "',
                type: 'post',
                dataType: 'json',
                data: new FormData(\$('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    \$(element).prop('disabled', true).addClass('loading');
                },
                complete: function () {
                    \$(element).prop('disabled', false).removeClass('loading');
                },
                success: function (json) {
                    if (json['error']) {
                        alert(json['error']);
                    }

                    if (json['success']) {
                        alert(json['success']);
                    }
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                }
            });
        }
    }, 500);
});

\$('.delete').on('click', function () {

  var warning = '";
        // line 147
        echo ($context["text_delete_warning"] ?? null);
        echo "';
  if (confirm(warning) == true) {
    var element = this;
    var delt = \$(element).val();
    \$.ajax({
      url: delt,
      type: 'post',
      dataType: 'json',
      data: new FormData(\$('#form-upload')[0]),
      cache: false,
      contentType: false,
      processData: false,
      success: function (json) {
        if (json['error']) {
          alert(json['error']);
        }
        if (json['success']) {
          alert(json['success']);
        }
        location.reload();
      }
    });
  } else {
    location.reload();
  }
});

\$('.disable').on('click', function () {
  var warning = '";
        // line 175
        echo ($context["text_disable_warning"] ?? null);
        echo "';
  if (confirm(warning) == true) {
    var element = this;
    var delt = \$(element).val();
    \$.ajax({
      url: delt,
      type: 'post',
      dataType: 'json',
      data: new FormData(\$('#form-upload')[0]),
      cache: false,
      contentType: false,
      processData: false,
      success: function (json) {
        if (json['error']) {
          alert(json['error']);
        }
        if (json['success']) {
          alert(json['success']);
        }
        location.reload();
      }
    });
  } else {
    location.reload();
  }
  
});

\$('.enable').on('click', function () {
  var warning = '";
        // line 204
        echo ($context["text_enable_warning"] ?? null);
        echo "';
  if (confirm(warning) == true) {
    var element = this;
    var delt = \$(element).val();
    \$.ajax({
      url: delt,
      type: 'post',
      dataType: 'json',
      data: new FormData(\$('#form-upload')[0]),
      cache: false,
      contentType: false,
      processData: false,
      success: function (json) {
        if (json['error']) {
          alert(json['error']);
        }
        if (json['success']) {
          alert(json['success']);
        }
        location.reload();
      }
    });
  } else {
    location.reload();
  }
  
});
</script>
";
        // line 232
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/vqmodxmlInstaller/admin/view/template/module/installer_vqmodxml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 232,  374 => 204,  342 => 175,  311 => 147,  275 => 114,  257 => 99,  253 => 98,  231 => 78,  225 => 75,  222 => 74,  219 => 73,  210 => 69,  203 => 67,  197 => 66,  190 => 65,  183 => 63,  177 => 62,  170 => 61,  168 => 60,  161 => 56,  155 => 53,  149 => 50,  145 => 48,  140 => 47,  138 => 46,  131 => 42,  127 => 41,  123 => 40,  119 => 39,  110 => 33,  101 => 27,  96 => 25,  90 => 22,  85 => 20,  79 => 17,  72 => 12,  61 => 10,  57 => 9,  52 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/vqmodxmlInstaller/admin/view/template/module/installer_vqmodxml.twig", "D:\\xampp\\htdocs\\opencart4\\newsletter\\extension\\vqmodxmlInstaller\\admin\\view\\template\\module\\installer_vqmodxml.twig");
    }
}
