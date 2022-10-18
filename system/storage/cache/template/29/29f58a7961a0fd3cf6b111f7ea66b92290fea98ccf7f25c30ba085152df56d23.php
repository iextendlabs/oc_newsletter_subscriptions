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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_7134a98084c31960476bb0687adad24e2126c931423b259c143c6d7156f260f3 extends Template
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
        echo "<div class=\"dropdown d-grid\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-inverse btn-block dropdown-toggle\"><i class=\"fa-solid fa-cart-shopping\"></i> ";
        // line 2
        echo ($context["text_items"] ?? null);
        echo "</button>
  <ul class=\"dropdown-menu dropdown-menu-right\" style=\"width: 500px;\">
    ";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 5
            echo "      <li>

        <table class=\"table table-sm table-striped\">

          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "            <tr>
              <td class=\"text-center\">";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-thumbnail\"/></a>";
                }
                echo "</td>
              <td class=\"text-start\"><a href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "</a>

                ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 16
                        echo "                    <br/>
                    <small> - ";
                        // line 17
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 17);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 17);
                        echo "</small>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 19
                    echo "                ";
                }
                // line 20
                echo "
                ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 21)) {
                    // line 22
                    echo "                  <br/>
                  <small> - ";
                    // line 23
                    echo ($context["text_subscription"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 23);
                    echo "</small>
                ";
                }
                // line 25
                echo "
              </td>
              <td class=\"text-end\">x ";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 27);
                echo "</td>
              <td class=\"text-end\">";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-center\">
                <form action=\"";
                // line 30
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 31);
                echo "\">
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 32
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
          ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 39
                echo "            <tr>
              <td class=\"text-center\"></td>
              <td class=\"text-start\">";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 41);
                echo "</td>
              <td class=\"text-end\">x&nbsp;1</td>
              <td class=\"text-end\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 43);
                echo "</td>
              <td class=\"text-center\">
                <form action=\"";
                // line 45
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 46
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 46);
                echo "\"/>
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 47
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "
        </table>

        <div>
          <table class=\"table table-sm table-bordered\">

            ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 59
                echo "              <tr>
                <td class=\"text-end\"><strong>";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 60);
                echo "</strong></td>
                <td class=\"text-end\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 61);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
          </table>
          <p class=\"text-end\"><a href=\"";
            // line 66
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-cart-shopping\"></i> <i class=\"fa-solid fa-cart-shopping\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
        </div>
      </li>
    ";
        } else {
            // line 70
            echo "      <li>
        <p class=\"text-center\">";
            // line 71
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      </li>
    ";
        }
        // line 74
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 74,  243 => 71,  240 => 70,  227 => 66,  223 => 64,  214 => 61,  210 => 60,  207 => 59,  203 => 58,  195 => 52,  184 => 47,  180 => 46,  174 => 45,  169 => 43,  164 => 41,  160 => 39,  156 => 38,  153 => 37,  142 => 32,  138 => 31,  132 => 30,  127 => 28,  123 => 27,  119 => 25,  112 => 23,  109 => 22,  107 => 21,  104 => 20,  101 => 19,  91 => 17,  88 => 16,  83 => 15,  81 => 14,  74 => 12,  60 => 11,  57 => 10,  53 => 9,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "D:\\xampp\\htdocs\\opencart4\\newsletter\\catalog\\view\\template\\common\\cart.twig");
    }
}
