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

/* vqmod\vqcache\vq2-catalog_view_template_common_header.twig */
class __TwigTemplate_0860b6c5263a107662bfa2f48acb348360a933ab77693db41519518a87e02750 extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
  <meta charset=\"UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 7
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 8
        echo ($context["base"] ?? null);
        echo "\"/>
  ";
        // line 9
        if (($context["description"] ?? null)) {
            // line 10
            echo "    <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\"/>
  ";
        }
        // line 12
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 13
            echo "    <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\"/>
  ";
        }
        // line 15
        echo "  <script src=\"";
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 16
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\"/>
  <link href=\"";
        // line 17
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <link href=\"";
        // line 18
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\"/>
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 25
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 25);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 25);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 25);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 28
            echo "    <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 28);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 31
            echo "    <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 31);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 31);
            echo "\"/>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 34
            echo "    ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
\t\t\t\t<style>
\t\t\t\t\t#popUpMain{
\t\t\t\t\tposition: fixed;
\t\t\t\t\twidth: 100%;
\t\t\t\t\theight: 100%;
\t\t\t\t\tbackground: rgb(0, 0, 0, 0.6);
\t\t\t\t\tz-index: 1001;
\t\t\t\t\tfont-family: 'verdana 27px', sans-serif;
\t\t\t\t\t}
\t\t\t\t\t#popUp{
\t\t\t\t\twidth: 500px;
\t\t\t\t\theight: 250px;
\t\t\t\t\tbackground-image: linear-gradient(rgba(70, 63, 63, 0.5),rgba(70, 63, 63, 0.5)), url(";
        // line 49
        echo ($context["newsletter_image"] ?? null);
        echo ");
\t\t\t\t\tbackground-size: cover;
\t\t\t\t\tposition: absolute;
\t\t\t\t\ttop: 50%;
\t\t\t\t\tleft: 50%;
\t\t\t\t\ttransform: translate(-50%, -50%);
\t\t\t\t\tbox-shadow: 2px,2px,5px,3px,white;
\t\t\t\t\ttext-align: center;
\t\t\t\t\t}

\t\t\t\t\t#popUp h1{
\t\t\t\t\ttransform: translateY(30px);
\t\t\t\t\tcolor: ";
        // line 61
        echo ($context["newsletter_text_color"] ?? null);
        echo ";
\t\t\t\t\tfont-family: 'verdana 27px', sans-serif;
\t\t\t\t\t}

\t\t\t\t\t#popUp input{
\t\t\t\t\twidth: 60%;
\t\t\t\t\tpadding: 5px;
\t\t\t\t\tmargin-top: 50px;
\t\t\t\t\tmargin-bottom: 10px;
\t\t\t\t\tfont-family: 'verdana 27px', sans-serif;
\t\t\t\t\t}

\t\t\t\t\t#popUp button{
\t\t\t\t\tbackground-color:  ";
        // line 74
        echo ($context["newsletter_button_color"] ?? null);
        echo ";
\t\t\t\t\tborder: none;
\t\t\t\t\tfont-size: 0.8rem;
\t\t\t\t\tpadding: 0.6rem 1rem;
\t\t\t\t\tcolor:white;
\t\t\t\t\tfont-family: 'verdana 27px', sans-serif;
\t\t\t\t\t}

\t\t\t\t\t@media only screen and (max-width:400px) {
\t\t\t\t\t#popUp{
\t\t\t\t\twidth: 300px;
\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t</style>
\t\t\t\t
</head>
<body>

\t\t\t\t<div id=\"popUpMain\" style=\"display: none;\">
\t\t\t\t\t<div id=\"popUp\">
\t\t\t\t\t\t<form action=\"";
        // line 94
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-newsletter\">
\t\t\t\t\t\t<h1>";
        // line 95
        echo ($context["newsletter_text"] ?? null);
        echo "</h1>
\t\t\t\t\t\t<input type=\"email\" name=\"email\" id=\"emial\" placeholder=\"user@gmial.com\" required><br>
\t\t\t\t\t\t<button type=\"submit\" id=\"submit\" class=\"submitId\">Subscribe</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<br><button id=\"cancel\" class=\"submitId\">No Thanks</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
<nav id=\"top\">
  <div id=\"alert\" class=\"position-fixed top-0 end-0 p-3\" style=\"z-index: 9999;\"></div>
  <div class=\"container\">
    <div class=\"nav float-start\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\">";
        // line 108
        echo ($context["currency"] ?? null);
        echo "</li>
        <li class=\"list-inline-item\">";
        // line 109
        echo ($context["language"] ?? null);
        echo "</li>
      </ul>
    </div>
    <div class=\"nav float-end\">
      <ul class=\"list-inline\">
        <li class=\"list-inline-item\"><a href=\"";
        // line 114
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa-solid fa-phone\"></i></a> <span class=\"d-none d-md-inline\">";
        echo ($context["telephone"] ?? null);
        echo "</span></li>
        <li class=\"list-inline-item\">
          <div class=\"dropdown\">
            <a href=\"";
        // line 117
        echo ($context["account"] ?? null);
        echo "\" class=\"dropdown-toggle\" data-bs-toggle=\"dropdown\"><i class=\"fa-solid fa-user\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_account"] ?? null);
        echo "</span> <i class=\"fa-solid fa-caret-down\"></i></a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              ";
        // line 119
        if ( !($context["logged"] ?? null)) {
            // line 120
            echo "                <li><a href=\"";
            echo ($context["register"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 121
            echo ($context["login"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
              ";
        } else {
            // line 123
            echo "                <li><a href=\"";
            echo ($context["account"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 124
            echo ($context["order"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 125
            echo ($context["transaction"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 126
            echo ($context["download"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                <li><a href=\"";
            // line 127
            echo ($context["logout"] ?? null);
            echo "\" class=\"dropdown-item\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
              ";
        }
        // line 129
        echo "            </ul>
          </div>
        </li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 132
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 133
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\"><i class=\"fa-solid fa-cart-shopping\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_shopping_cart"] ?? null);
        echo "</span></a></li>
        <li class=\"list-inline-item\"><a href=\"";
        // line 134
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\"><i class=\"fa-solid fa-share\"></i> <span class=\"d-none d-md-inline\">";
        echo ($context["text_checkout"] ?? null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-3 col-lg-4\">
        <div id=\"logo\">
          ";
        // line 144
        if (($context["logo"] ?? null)) {
            // line 145
            echo "            <a href=\"";
            echo ($context["home"] ?? null);
            echo "\"><img src=\"";
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\"/></a>
          ";
        } else {
            // line 147
            echo "            <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
          ";
        }
        // line 149
        echo "        </div>
      </div>
      <div class=\"col-md-5\">";
        // line 151
        echo ($context["search"] ?? null);
        echo "</div>
      <div id=\"header-cart\" class=\"col-md-4 col-lg-3\">";
        // line 152
        echo ($context["cart"] ?? null);
        echo "</div>
    </div>
  </div>
</header>

\t\t\t\t";
        // line 157
        if (($context["newsletter_status"] ?? null)) {
            // line 158
            echo "\t\t\t\t<script type=\"text/javascript\">

\t\t\t\t// PopUp Newsletter
\t\t\t\t\$(document).ready(function(){

\t\t\t\t\t//check cookie
\t\t\t\t\tvar name = \"Email\"
\t\t\t\t\tconst value = `; \${document.cookie}`;
\t\t\t\t\tconst parts = value.split(`; \${name}=`);
\t\t\t\t\tif (parts.length !== 2){
\t\t\t\t\tsetTimeout(function(){
\t\t\t\t\t\t\$('#popUpMain').css('display','block');
\t\t\t\t\t}, 2000);
\t\t\t\t\t\$('#cancel').click(function(){
\t\t\t\t\t\t\$('#popUpMain').css('display','none');
\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Form Submit
\t\t\t\t\$('#form-newsletter').on('submit',function(e){
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=common/header|newsletter',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\tdata: \$('#form-newsletter').serialize(),
\t\t\t\t\t\tsuccess: function(){
\t\t\t\t\t\t\$('#popUpMain').css('display','none');
\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\te.preventDefault();
\t\t\t\t\t
\t\t\t\t\t// Save data in cookies
\t\t\t\t\tvar email = \$('#emial').val();
\t\t\t\t\tconst d = new Date();
\t\t\t\t\td.setTime(d.getTime() + (30*24*60*60*1000));
\t\t\t\t\tlet expires = \"expires=\"+ d.toUTCString();
\t\t\t\t\tdocument.cookie =  \"Email=\" + email + \";\" + expires + \";path=/\";
\t\t\t\t});
\t\t\t\t</script>
\t\t\t\t";
        }
        // line 198
        echo "\t\t\t\t
<main>
  ";
        // line 200
        echo ($context["menu"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "vqmod\\vqcache\\vq2-catalog_view_template_common_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 200,  442 => 198,  400 => 158,  398 => 157,  390 => 152,  386 => 151,  382 => 149,  374 => 147,  362 => 145,  360 => 144,  343 => 134,  335 => 133,  327 => 132,  322 => 129,  315 => 127,  309 => 126,  303 => 125,  297 => 124,  290 => 123,  283 => 121,  276 => 120,  274 => 119,  267 => 117,  259 => 114,  251 => 109,  247 => 108,  231 => 95,  227 => 94,  204 => 74,  188 => 61,  173 => 49,  158 => 36,  149 => 34,  144 => 33,  133 => 31,  128 => 30,  119 => 28,  114 => 27,  101 => 25,  97 => 24,  88 => 18,  84 => 17,  80 => 16,  75 => 15,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  54 => 8,  50 => 7,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "vqmod\\vqcache\\vq2-catalog_view_template_common_header.twig", "D:\\xampp\\htdocs\\opencart4\\newsletter\\vqmod\\vqcache\\vq2-catalog_view_template_common_header.twig");
    }
}
