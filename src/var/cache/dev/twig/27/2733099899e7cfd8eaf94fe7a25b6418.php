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

/* @PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig */
class __TwigTemplate_b2759f022e7484cacb1f54f58529ced2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'typeahead_product_collection_widget' => [$this, 'block_typeahead_product_collection_widget'],
            'typeahead_product_pack_collection_widget' => [$this, 'block_typeahead_product_pack_collection_widget'],
            'typeahead_customer_collection_widget' => [$this, 'block_typeahead_customer_collection_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig"));

        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 73
        echo "
";
        // line 74
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 218
        echo "
";
        // line 219
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "full_name", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) || array_key_exists("mapping_value", $context) ? $context["mapping_value"] : (function () { throw new RuntimeError('Variable "mapping_value" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) || array_key_exists("mapping_name", $context) ? $context["mapping_name"] : (function () { throw new RuntimeError('Variable "mapping_name" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo (isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new RuntimeError('Variable "remote_url" does not exist.', 32, $this->source); })());
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "\"
    >
        <div class=\"search search-with-icon\">
          ";
        // line 37
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 37)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 37), "")) : ("")) . " form-control search typeahead ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)))]);
        // line 39
        $context["full_name"] = "";
        // line 40
        echo "<input type=\"text\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
        </div>
        <small class=\"form-text text-muted text-right typeahead-hint\">
          ";
        // line 43
        if ((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 43, $this->source); })())) {
            // line 44
            echo "            ";
            echo (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 44, $this->source); })());
            echo "
          ";
        }
        // line 46
        echo "        </small>
        <ul id=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "vars", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            ";
        // line 48
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 48, $this->source); })())) > 0))) {
            // line 49
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 50
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 52), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 55
                echo twig_sprintf((isset($context["template_collection"]) || array_key_exists("template_collection", $context) ? $context["template_collection"] : (function () { throw new RuntimeError('Variable "template_collection" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 55));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "vars", [], "any", false, false, false, 57), "full_name", [], "any", false, false, false, 57), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "            ";
        }
        // line 61
        echo "        </ul>

        <div class=\"invisible\" id=\"tplcollection-";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
        echo "\">
          ";
        // line 64
        echo (isset($context["template_collection"]) || array_key_exists("template_collection", $context) ? $context["template_collection"] : (function () { throw new RuntimeError('Variable "template_collection" does not exist.', 64, $this->source); })());
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "vars", [], "any", false, false, false, 69), "id", [], "any", false, false, false, 69), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        // line 75
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 75, $this->source); })())) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("List of products for this pack", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "id", [], "any", false, false, false, 76), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 77
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 77, $this->source); })())) > 0))) {
            // line 78
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 78, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 79
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 79), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_product_attribute", [], "any", false, false, false, 79), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 81), "html", null, true);
                echo "\" /> ";
                echo twig_sprintf((isset($context["template_collection"]) || array_key_exists("template_collection", $context) ? $context["template_collection"] : (function () { throw new RuntimeError('Variable "template_collection" does not exist.', 81, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, $context["item"], "ref", [], "any", false, false, false, 81), twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 81));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "full_name", [], "any", false, false, false, 82), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 82), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 82), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_product_attribute", [], "any", false, false, false, 82), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "vars", [], "any", false, false, false, 83), "full_name", [], "any", false, false, false, 83), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 83), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 83), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id_product_attribute", [], "any", false, false, false, 83), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        }
        // line 88
        echo "    </ul>

    <h2>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "vars", [], "any", false, false, false, 90), "label", [], "any", false, false, false, 90), "html", null, true);
        echo "</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "id", [], "any", false, false, false, 94), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 94, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "vars", [], "any", false, false, false, 101), "id", [], "any", false, false, false, 101), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "vars", [], "any", false, false, false, 106), "id", [], "any", false, false, false, 106), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add", [], "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "id", [], "any", false, false, false, 117), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure you want to delete this item?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "id", [], "any", false, false, false, 125), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "vars", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "vars", [], "any", false, false, false, 134), "id", [], "any", false, false, false, 134), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 141
        ob_start();
        echo (isset($context["template_collection"]) || array_key_exists("template_collection", $context) ? $context["template_collection"] : (function () { throw new RuntimeError('Variable "template_collection" does not exist.', 141, $this->source); })());
        $___internal_parse_9_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_parse_9_);
        echo "', data.";
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) || array_key_exists("mapping_name", $context) ? $context["mapping_name"] : (function () { throw new RuntimeError('Variable "mapping_name" does not exist.', 141, $this->source); })()), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "vars", [], "any", false, false, false, 142), "full_name", [], "any", false, false, false, 142), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "vars", [], "any", false, false, false, 146), "id", [], "any", false, false, false, 146), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 147
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 157
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "vars", [], "any", false, false, false, 157), "id", [], "any", false, false, false, 157), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) || array_key_exists("mapping_value", $context) ? $context["mapping_value"] : (function () { throw new RuntimeError('Variable "mapping_value" does not exist.', 161, $this->source); })()), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 164
        echo (isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new RuntimeError('Variable "remote_url" does not exist.', 164, $this->source); })());
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 176
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "vars", [], "any", false, false, false, 176), "id", [], "any", false, false, false, 176), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 192
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "vars", [], "any", false, false, false, 192), "id", [], "any", false, false, false, 192), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) || array_key_exists("mapping_name", $context) ? $context["mapping_name"] : (function () { throw new RuntimeError('Variable "mapping_name" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "',
                    source: this['";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "vars", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 212
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "vars", [], "any", false, false, false, 212), "id", [], "any", false, false, false, 212), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 219
    public function block_typeahead_customer_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        // line 220
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 220, $this->source); })()), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 221
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "vars", [], "any", false, false, false, 221), "id", [], "any", false, false, false, 221), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 221, $this->source); })()), "vars", [], "any", false, false, false, 221), "id", [], "any", false, false, false, 221), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 221, $this->source); })()), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 222
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 222, $this->source); })()), "vars", [], "any", false, false, false, 222), "id", [], "any", false, false, false, 222), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-sm-12\">
      ";
        // line 223
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, (isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 223, $this->source); })())) > 0))) {
            // line 224
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) || array_key_exists("collection", $context) ? $context["collection"] : (function () { throw new RuntimeError('Variable "collection" does not exist.', 224, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 225
                echo "            <li class=\"media\">
                <div class=\"media-body\">
                  ";
                // line 227
                echo twig_sprintf((isset($context["template_collection"]) || array_key_exists("template_collection", $context) ? $context["template_collection"] : (function () { throw new RuntimeError('Variable "template_collection" does not exist.', 227, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 227));
                echo "
                </div>
                <input type=\"hidden\" name=\"";
                // line 229
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "vars", [], "any", false, false, false, 229), "full_name", [], "any", false, false, false, 229), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 229), "html", null, true);
                echo "\" />
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "      ";
        }
        // line 233
        echo "    </ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "vars", [], "any", false, false, false, 237), "id", [], "any", false, false, false, 237), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure you want to delete this item?'], null, {
                    onContinue: function(){
                        _this.closest('li').remove();
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 251
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "vars", [], "any", false, false, false, 251), "id", [], "any", false, false, false, 251), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) || array_key_exists("mapping_value", $context) ? $context["mapping_value"] : (function () { throw new RuntimeError('Variable "mapping_value" does not exist.', 255, $this->source); })()), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 258
        echo (isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new RuntimeError('Variable "remote_url" does not exist.', 258, $this->source); })());
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 271
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "vars", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) || array_key_exists("mapping_name", $context) ? $context["mapping_name"] : (function () { throw new RuntimeError('Variable "mapping_name" does not exist.', 278, $this->source); })()), "html", null, true);
        echo "',
                source: this['";
        // line 279
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "vars", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) || array_key_exists("mapping_name", $context) ? $context["mapping_name"] : (function () { throw new RuntimeError('Variable "mapping_name" does not exist.', 283, $this->source); })()), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 289
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 289, $this->source); })()), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "vars", [], "any", false, false, false, 289), "id", [], "any", false, false, false, 289), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 289, $this->source); })()), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 293
        echo twig_escape_filter($this->env, (isset($context["mapping_value"]) || array_key_exists("mapping_value", $context) ? $context["mapping_value"] : (function () { throw new RuntimeError('Variable "mapping_value" does not exist.', 293, $this->source); })()), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 299
        ob_start();
        echo (isset($context["template_collection"]) || array_key_exists("template_collection", $context) ? $context["template_collection"] : (function () { throw new RuntimeError('Variable "template_collection" does not exist.', 299, $this->source); })());
        $___internal_parse_10_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_spaceless($___internal_parse_10_);
        echo "', suggestion.";
        echo twig_escape_filter($this->env, (isset($context["mapping_name"]) || array_key_exists("mapping_name", $context) ? $context["mapping_name"] : (function () { throw new RuntimeError('Variable "mapping_name" does not exist.', 299, $this->source); })()), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 300
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "vars", [], "any", false, false, false, 300), "full_name", [], "any", false, false, false, 300), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 302
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 302, $this->source); })()), "vars", [], "any", false, false, false, 302), "id", [], "any", false, false, false, 302), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 303
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 303, $this->source); })()), "vars", [], "any", false, false, false, 303), "id", [], "any", false, false, false, 303), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  668 => 303,  664 => 302,  659 => 300,  650 => 299,  641 => 293,  630 => 289,  621 => 283,  614 => 279,  610 => 278,  600 => 271,  584 => 258,  578 => 255,  571 => 251,  554 => 237,  548 => 233,  545 => 232,  534 => 229,  529 => 227,  525 => 225,  520 => 224,  518 => 223,  514 => 222,  506 => 221,  501 => 220,  491 => 219,  475 => 212,  459 => 199,  455 => 198,  446 => 192,  427 => 176,  412 => 164,  406 => 161,  399 => 157,  392 => 153,  385 => 149,  380 => 147,  376 => 146,  369 => 142,  360 => 141,  350 => 134,  344 => 131,  335 => 125,  324 => 117,  312 => 108,  307 => 106,  299 => 101,  285 => 94,  278 => 90,  274 => 88,  271 => 87,  255 => 83,  245 => 82,  239 => 81,  231 => 79,  226 => 78,  224 => 77,  220 => 76,  213 => 75,  203 => 74,  189 => 69,  185 => 68,  178 => 64,  174 => 63,  170 => 61,  167 => 60,  156 => 57,  151 => 55,  145 => 52,  141 => 50,  136 => 49,  134 => 48,  130 => 47,  127 => 46,  121 => 44,  119 => 43,  110 => 40,  108 => 39,  106 => 37,  100 => 33,  96 => 32,  92 => 31,  88 => 30,  84 => 29,  80 => 28,  76 => 26,  66 => 25,  56 => 219,  53 => 218,  51 => 74,  48 => 73,  46 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}
{% block typeahead_product_collection_widget %}
    <div
      class=\"autocomplete-search\"
      data-formid=\"{{ form.vars.id }}\"
      data-fullname=\"{{ form.vars.full_name }}\"
      data-mappingvalue=\"{{ mapping_value }}\"
      data-mappingname=\"{{ mapping_name }}\"
      data-remoteurl=\"{{ remote_url|raw }}\"
      data-limit=\"{{ limit }}\"
    >
        <div class=\"search search-with-icon\">
          {# We want the attributes from the form type to be added to the input so we merge class form attribute to required ones #}
          {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' form-control search typeahead ' ~ form.vars.id)|trim }) -%}
          {# We do not want the initial input name because the data is handled via a collection input with name=\"full_name[data][]\" #}
          {%- set full_name = '' -%}
          <input type=\"text\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" {{ block('widget_attributes') }}>
        </div>
        <small class=\"form-text text-muted text-right typeahead-hint\">
          {% if help %}
            {{ help|raw }}
          {% endif %}
        </small>
        <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            {% if collection is defined and collection|length > 0 %}
                {% for item in collection %}
                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"{{ item.image }}\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        {{ template_collection|format(item.name)|raw }}
                      </div>
                      <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
                    </li>
                {% endfor %}
            {% endif %}
        </ul>

        <div class=\"invisible\" id=\"tplcollection-{{ form.vars.id }}\">
          {{ template_collection|raw }}
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#{{ form.vars.id }}').on('focusout', function resetSearchBar() {
        \$('#{{ form.vars.id }}').typeahead('val', '');
      });
    </script>
{% endblock %}

{% block typeahead_product_pack_collection_widget %}
    <h2 class=\"title-products {{ collection is defined and collection|length > 0 ? '' : 'hide' }}\">{{ 'List of products for this pack'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list pack nostyle row\">
        {% if collection is defined and collection|length > 0 %}
            {% for item in collection %}
                <li data-product=\"{{ item.id }}-{{ item.id_product_attribute }}\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"{{ item.image }}\" /> {{ template_collection|format(item.name, item.ref, item.quantity)|raw }}
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                    </div>
                </li>
            {% endfor %}
        {% endif %}
    </ul>

    <h2>{{ form.vars.label }}</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead search {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    <span class=\"input-group-text\">×</span>
                </div>
                <input type=\"number\" id=\"{{ form.vars.id }}-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"{{ form.vars.id }}-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    {{ \"Add\"|trans({}, \"Admin.Actions\") }}
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure you want to delete this item?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_{{ form.vars.id }} h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#{{ form.vars.id }}-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#{{ form.vars.id }}-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('{% apply spaceless %}{{ template_collection|raw }}{% endapply %}', data.{{ mapping_name }}, data.ref, number);
                        html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#{{ form.vars.id }}-data').append(html);
                        \$('#js_{{ form.vars.id }} h4.title-products').removeClass('hide');

                        \$('#{{ form.vars.id }}').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#{{ form.vars.id }}-curPackItemQty').val(1);
                });

                //define source
                this['{{ form.vars.id }}_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.{{ mapping_value }};
                    },
                    remote: {
                        url: '{{ remote_url|raw }}',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#{{ form.vars.id }}-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#{{ form.vars.id }}').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '{{ mapping_name }}',
                    source: this['{{ form.vars.id }}_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#{{ form.vars.id }}-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
{% endblock %}

{% block typeahead_customer_collection_widget %}
    {{ form_errors(form) }}
    <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list product-list nostyle col-sm-12\">
      {% if collection is defined and collection|length > 0 %}
        {% for item in collection %}
            <li class=\"media\">
                <div class=\"media-body\">
                  {{ template_collection|format(item.name)|raw }}
                </div>
                <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
            </li>
        {% endfor %}
      {% endif %}
    </ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure you want to delete this item?'], null, {
                    onContinue: function(){
                        _this.closest('li').remove();
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['{{ form.vars.id }}_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.{{ mapping_value }};
                },
                remote: {
                    url: '{{ remote_url|raw }}',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#{{ form.vars.id }}').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '{{ mapping_name }}',
                source: this['{{ form.vars.id }}_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.{{ mapping_name }} +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if({{ limit }} != 0 && \$('#{{ form.vars.id }}-data li').length >= {{ limit }}){
                    return;
                }

                var value = suggestion.{{ mapping_value }};
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('{% apply spaceless %}{{ template_collection|raw }}{% endapply %}', suggestion.{{ mapping_name }});
                html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#{{ form.vars.id }}-data').show();
                \$('#{{ form.vars.id }}-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
