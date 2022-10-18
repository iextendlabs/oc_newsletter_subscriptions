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

/* extension/newsletter/admin/view/template/module/newsletter.twig */
class __TwigTemplate_9731a18cc0423e0a6af2e9963ca8254733acaf7df1477902c407d837c7532b3a extends Template
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
        <button type=\"submit\" form=\"form-module\" data-bs-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["back"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 18
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form id=\"form-module\" action=\"";
        // line 20
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-status\">";
        // line 22
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"module_newsletter_status\" value=\"1\" id=\"input-status\" class=\"form-check-input\"";
        // line 25
        if (($context["module_newsletter_status"] ?? null)) {
            echo " checked";
        }
        echo "/>
\t\t\t\t\t\t\t</div>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-newsletter-text\">";
        // line 30
        echo ($context["entry_newsletter_text"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"module_newsletter_text\" value=\"";
        // line 32
        echo ($context["module_newsletter_text"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_newsletter_text"] ?? null);
        echo "\" id=\"input-newsletter-text\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-newsletter-text-color\">";
        // line 36
        echo ($context["entry_newsletter_text_color"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              <input type=\"color\" name=\"module_newsletter_text_color\" value=\"";
        // line 38
        echo ($context["module_newsletter_text_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_newsletter_text_color"] ?? null);
        echo "\" id=\"input-newsletter-text-color\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-newsletter-button-color\">";
        // line 42
        echo ($context["entry_newsletter_button_color"] ?? null);
        echo "</label>
            <div class=\"col-sm-1\">
              <input type=\"color\" name=\"module_newsletter_button_color\" value=\"";
        // line 44
        echo ($context["module_newsletter_button_color"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_newsletter_button_color"] ?? null);
        echo "\" id=\"input-newsletter-button-color\" class=\"form-control\"/>
            </div>
          </div>
          <fieldset>
            <legend>";
        // line 48
        echo ($context["entry_newsletter_image"] ?? null);
        echo "</legend>
              <div class=\"col-sm-4 col-md-3 mb-3\">
                <div id=\"image\" class=\"card image\">
                  <img src=\"";
        // line 51
        echo ($context["newsletter_image"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-oc-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"module_newsletter_image\" value=\"";
        echo ($context["module_newsletter_image"] ?? null);
        echo "\" id=\"input-image\"/>
                  <div class=\"card-body\">
                    <button type=\"button\" data-oc-toggle=\"image\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fa-solid fa-pencil\"></i> ";
        // line 53
        echo ($context["button_edit"] ?? null);
        echo "</button>
                    <button type=\"button\" data-oc-toggle=\"clear\" data-oc-target=\"#input-image\" data-oc-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fa-regular fa-trash-can\"></i> ";
        // line 54
        echo ($context["button_clear"] ?? null);
        echo "</button>
                  </div>
                </div>
              </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 60
        echo ($context["text_list"] ?? null);
        echo "</legend>
            <div class=\"table-responsive\">
              <table id=\"email-list\" class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-start\">";
        // line 65
        echo ($context["column_email"] ?? null);
        echo "</td>
                    <td class=\"text-end\">";
        // line 66
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>
                  ";
        // line 70
        if (($context["newsletters"] ?? null)) {
            // line 71
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["newsletters"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
                // line 72
                echo "                    <tr>
                      <td class=\"text-start\">";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["newsletter"], "email", [], "any", false, false, false, 73);
                echo "</td>
                      <td class=\"text-end\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["newsletter"], "date_added", [], "any", false, false, false, 74);
                echo "</td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                  ";
        } else {
            // line 78
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"2\">";
            // line 79
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 82
        echo "                </tbody>
              </table>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 91
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/newsletter/admin/view/template/module/newsletter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 91,  233 => 82,  227 => 79,  224 => 78,  221 => 77,  212 => 74,  208 => 73,  205 => 72,  200 => 71,  198 => 70,  191 => 66,  187 => 65,  179 => 60,  170 => 54,  166 => 53,  157 => 51,  151 => 48,  142 => 44,  137 => 42,  128 => 38,  123 => 36,  114 => 32,  109 => 30,  99 => 25,  93 => 22,  88 => 20,  83 => 18,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/newsletter/admin/view/template/module/newsletter.twig", "D:\\xampp\\htdocs\\opencart4\\newsletter\\extension\\newsletter\\admin\\view\\template\\module\\newsletter.twig");
    }
}
