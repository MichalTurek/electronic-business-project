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

/* @Product/CatalogPage/Lists/products_table.html.twig */
class __TwigTemplate_98b88638299aab8cca97ba49e24e8794 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_header' => [$this, 'block_product_catalog_form_table_header'],
            'product_catalog_form_table_filters' => [$this, 'block_product_catalog_form_table_filters'],
            'product_catalog_filter_select_all' => [$this, 'block_product_catalog_filter_select_all'],
            'product_catalog_form_table_items' => [$this, 'block_product_catalog_form_table_items'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Lists/products_table.html.twig"));

        // line 25
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 25)->unwrap();
        // line 26
        echo "<div class=\"table-responsive\">
  <table
    class=\"table product\"
    redirecturl=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["limit" =>         // line 30
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "offset" =>         // line 31
(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 31, $this->source); })()), "orderBy" =>         // line 32
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 32, $this->source); })()), "sortOrder" =>         // line 33
(isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 33, $this->source); })())]), "html", null, true);
        // line 35
        echo "\"
  >
    <thead class=\"with-filters\">
      ";
        // line 38
        $this->displayBlock('product_catalog_form_table_header', $context, $blocks);
        // line 84
        echo "
      ";
        // line 85
        $this->displayBlock('product_catalog_form_table_filters', $context, $blocks);
        // line 218
        echo "    </thead>
    ";
        // line 219
        $this->displayBlock('product_catalog_form_table_items', $context, $blocks);
        // line 229
        echo "  </table>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 38
    public function block_product_catalog_form_table_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_header"));

        // line 39
        echo "        <tr class=\"column-headers\">
          <th scope=\"col\"></th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 42
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "id_product", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 42, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 42, $this->source); })())], 42, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 48
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "name", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 48, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 48, $this->source); })())], 48, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            ";
        // line 51
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Global"), "reference", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 51, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 51, $this->source); })())], 51, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\">
            ";
        // line 54
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "name_category", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 54, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 54, $this->source); })())], 54, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 57
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price (tax excl.)", [], "Admin.Catalog.Feature"), "price", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 57, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 57, $this->source); })())], 57, $context, $this->getSourceContext());
        echo "
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </th>

          ";
        // line 63
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 64
            echo "          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            ";
            // line 65
            echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Catalog.Feature"), "sav_quantity", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 65, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 65, $this->source); })())], 65, $context, $this->getSourceContext());
            echo "
          </th>
          ";
        } else {
            // line 68
            echo "            <th></th>
          ";
        }
        // line 70
        echo "
          <th scope=\"col\" class=\"text-center\">
            ";
        // line 72
        echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "active", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 72, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 72, $this->source); })())], 72, $context, $this->getSourceContext());
        echo "
          </th>
          ";
        // line 74
        if (((isset($context["has_category_filter"]) || array_key_exists("has_category_filter", $context) ? $context["has_category_filter"] : (function () { throw new RuntimeError('Variable "has_category_filter" does not exist.', 74, $this->source); })()) == true)) {
            // line 75
            echo "            <th scope=\"col\">
              ";
            // line 76
            echo twig_call_macro($macros["ps"], "macro_sortable_column_header", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position", [], "Admin.Global"), "position", (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 76, $this->source); })()), (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 76, $this->source); })())], 76, $context, $this->getSourceContext());
            echo "
            </th>
          ";
        }
        // line 79
        echo "          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              ";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Actions", [], "Admin.Global"), "html", null, true);
        echo "
          </th>
        </tr>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_product_catalog_form_table_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_filters"));

        // line 86
        echo "        ";
        $context["filters_disabled"] = (isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 86, $this->source); })());
        // line 87
        echo "        <tr class=\"column-filters\">
          <td class=\"text-center\" style=\"vertical-align: middle;\">
            ";
        // line 89
        $this->displayBlock('product_catalog_filter_select_all', $context, $blocks);
        // line 102
        echo "          </td>
          <td>
            ";
        // line 104
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 104)->display(twig_array_merge($context, ["input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min", [], "Admin.Global"), "maxLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max", [], "Admin.Global"), "value" =>         // line 110
(isset($context["filter_column_id_product"]) || array_key_exists("filter_column_id_product", $context) ? $context["filter_column_id_product"] : (function () { throw new RuntimeError('Variable "filter_column_id_product" does not exist.', 110, $this->source); })()), "disabled" =>         // line 111
(isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 111, $this->source); })())]));
        // line 113
        echo "          </td>
          <td>&nbsp;</td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search name", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name\"
              value=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["filter_column_name"]) || array_key_exists("filter_column_name", $context) ? $context["filter_column_name"] : (function () { throw new RuntimeError('Variable "filter_column_name" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => "filter_column_name"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 123
        if ((isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 123, $this->source); })())) {
            echo "disabled";
        }
        // line 124
        echo "            />
          </td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search ref.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_reference\"
              value=\"";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["filter_column_reference"]) || array_key_exists("filter_column_reference", $context) ? $context["filter_column_reference"] : (function () { throw new RuntimeError('Variable "filter_column_reference" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => "filter_column_reference"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 134
        if ((isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 134, $this->source); })())) {
            echo "disabled";
        }
        // line 135
        echo "            />
          </td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search category", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
              name=\"filter_column_name_category\"
              value=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["filter_column_name_category"]) || array_key_exists("filter_column_name_category", $context) ? $context["filter_column_name_category"] : (function () { throw new RuntimeError('Variable "filter_column_name_category" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "\"
              aria-label=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => "filter_column_name_category"], "Admin.Global"), "html", null, true);
        echo "\"
              ";
        // line 145
        if ((isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 145, $this->source); })())) {
            echo "disabled";
        }
        // line 146
        echo "            />
          </td>
          <td class=\"text-center\">
            ";
        // line 149
        $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 149)->display(twig_array_merge($context, ["input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min", [], "Admin.Global"), "maxLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max", [], "Admin.Global"), "value" =>         // line 155
(isset($context["filter_column_price"]) || array_key_exists("filter_column_price", $context) ? $context["filter_column_price"] : (function () { throw new RuntimeError('Variable "filter_column_price" does not exist.', 155, $this->source); })()), "disabled" =>         // line 156
(isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 156, $this->source); })())]));
        // line 158
        echo "          </td>
          <td class=\"text-center\"></td>
          ";
        // line 160
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 161
            echo "          <td class=\"text-center\">
            ";
            // line 162
            $this->loadTemplate("@PrestaShop/Admin/Helpers/range_inputs.html.twig", "@Product/CatalogPage/Lists/products_table.html.twig", 162)->display(twig_array_merge($context, ["input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Min", [], "Admin.Global"), "maxLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Max", [], "Admin.Global"), "value" =>             // line 168
(isset($context["filter_column_sav_quantity"]) || array_key_exists("filter_column_sav_quantity", $context) ? $context["filter_column_sav_quantity"] : (function () { throw new RuntimeError('Variable "filter_column_sav_quantity" does not exist.', 168, $this->source); })()), "disabled" =>             // line 169
(isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 169, $this->source); })())]));
            // line 171
            echo "          </td>
          ";
        } else {
            // line 173
            echo "            <td></td>
          ";
        }
        // line 175
        echo "
          <td id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"";
        // line 178
        if ((isset($context["filters_disabled"]) || array_key_exists("filters_disabled", $context) ? $context["filters_disabled"] : (function () { throw new RuntimeError('Variable "filters_disabled" does not exist.', 178, $this->source); })())) {
            echo " disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% select", ["%inputId%" => "filter_column_active"], "Admin.Global"), "html", null, true);
        echo "\"
                >
                <option value=\"\"></option>
                <option value=\"1\" ";
        // line 181
        if ((array_key_exists("filter_column_active", $context) && ((isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context) ? $context["filter_column_active"] : (function () { throw new RuntimeError('Variable "filter_column_active" does not exist.', 181, $this->source); })()) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                <option value=\"0\" ";
        // line 182
        if ((array_key_exists("filter_column_active", $context) && ((isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context) ? $context["filter_column_active"] : (function () { throw new RuntimeError('Variable "filter_column_active" does not exist.', 182, $this->source); })()) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
              </select>
            </div>
          </td>
          ";
        // line 186
        if (((isset($context["has_category_filter"]) || array_key_exists("has_category_filter", $context) ? $context["has_category_filter"] : (function () { throw new RuntimeError('Variable "has_category_filter" does not exist.', 186, $this->source); })()) == true)) {
            // line 187
            echo "            <td>
              ";
            // line 188
            if ( !(isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 188, $this->source); })())) {
                // line 189
                echo "                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reorder", [], "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                ";
            } else {
                // line 191
                echo "                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save & refresh", [], "Admin.Actions");
                echo "\" />
              ";
            }
            // line 193
            echo "            </td>
          ";
        }
        // line 195
        echo "          <td class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">search</i>
              ";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "\"
            >
              <i class=\"material-icons\">clear</i>
              ";
        // line 213
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
        echo "
            </button>
          </td>
        </tr>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_product_catalog_filter_select_all($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_select_all"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_select_all"));

        // line 90
        echo "              <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                  <input
                    type=\"checkbox\"
                    id=\"bulk_action_select_all\"
                    onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
                    value=\"\"
                  >
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 219
    public function block_product_catalog_form_table_items($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_items"));

        // line 220
        echo "      ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", ["limit" =>         // line 221
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 221, $this->source); })()), "offset" =>         // line 222
(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 222, $this->source); })()), "orderBy" =>         // line 223
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 223, $this->source); })()), "sortOrder" =>         // line 224
(isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 224, $this->source); })()), "products" =>         // line 225
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 225, $this->source); })()), "last_sql" =>         // line 226
(isset($context["last_sql"]) || array_key_exists("last_sql", $context) ? $context["last_sql"] : (function () { throw new RuntimeError('Variable "last_sql" does not exist.', 226, $this->source); })())]));
        // line 227
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Lists/products_table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 227,  475 => 226,  474 => 225,  473 => 224,  472 => 223,  471 => 222,  470 => 221,  468 => 220,  458 => 219,  437 => 90,  427 => 89,  412 => 213,  406 => 210,  396 => 203,  390 => 200,  383 => 195,  379 => 193,  373 => 191,  367 => 189,  365 => 188,  362 => 187,  360 => 186,  351 => 182,  345 => 181,  335 => 178,  330 => 175,  326 => 173,  322 => 171,  320 => 169,  319 => 168,  318 => 162,  315 => 161,  313 => 160,  309 => 158,  307 => 156,  306 => 155,  305 => 149,  300 => 146,  296 => 145,  292 => 144,  288 => 143,  283 => 141,  275 => 135,  271 => 134,  267 => 133,  263 => 132,  258 => 130,  250 => 124,  246 => 123,  242 => 122,  238 => 121,  233 => 119,  225 => 113,  223 => 111,  222 => 110,  221 => 104,  217 => 102,  215 => 89,  211 => 87,  208 => 86,  198 => 85,  184 => 80,  181 => 79,  175 => 76,  172 => 75,  170 => 74,  165 => 72,  161 => 70,  157 => 68,  151 => 65,  148 => 64,  146 => 63,  140 => 60,  134 => 57,  128 => 54,  122 => 51,  116 => 48,  110 => 45,  104 => 42,  99 => 39,  89 => 38,  77 => 229,  75 => 219,  72 => 218,  70 => 85,  67 => 84,  65 => 38,  60 => 35,  58 => 33,  57 => 32,  56 => 31,  55 => 30,  54 => 29,  49 => 26,  47 => 25,);
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
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}
<div class=\"table-responsive\">
  <table
    class=\"table product\"
    redirecturl=\"{{ path('admin_product_catalog', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder
      })
    }}\"
  >
    <thead class=\"with-filters\">
      {% block product_catalog_form_table_header %}
        <tr class=\"column-headers\">
          <th scope=\"col\"></th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"ID\"|trans({}, 'Admin.Global'), 'id_product', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ \"Image\"|trans({}, 'Admin.Global') }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Name\"|trans({}, 'Admin.Global'), 'name', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Reference\"|trans({}, 'Admin.Global'), 'reference', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\">
            {{ ps.sortable_column_header(\"Category\"|trans({}, 'Admin.Catalog.Feature'), 'name_category', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature'), 'price', orderBy, sortOrder) }}
          </th>
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ \"Price (tax incl.)\"|trans({}, 'Admin.Catalog.Feature') }}
          </th>

          {% if configuration('PS_STOCK_MANAGEMENT') %}
          <th scope=\"col\" class=\"text-center\" style=\"width: 9%\">
            {{ ps.sortable_column_header(\"Quantity\"|trans({}, 'Admin.Catalog.Feature'), 'sav_quantity', orderBy, sortOrder) }}
          </th>
          {% else %}
            <th></th>
          {% endif %}

          <th scope=\"col\" class=\"text-center\">
            {{ ps.sortable_column_header(\"Status\"|trans({}, 'Admin.Global'), 'active', orderBy, sortOrder) }}
          </th>
          {% if has_category_filter == true %}
            <th scope=\"col\">
              {{ ps.sortable_column_header(\"Position\"|trans({}, 'Admin.Global'), 'position', orderBy, sortOrder) }}
            </th>
          {% endif %}
          <th scope=\"col\" class=\"text-right\" style=\"width: 3rem; padding-right: 2rem\">
              {{ \"Actions\"|trans({}, 'Admin.Global') }}
          </th>
        </tr>
      {% endblock %}

      {% block product_catalog_form_table_filters %}
        {% set filters_disabled = activate_drag_and_drop %}
        <tr class=\"column-filters\">
          <td class=\"text-center\" style=\"vertical-align: middle;\">
            {% block product_catalog_filter_select_all %}
              <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                  <input
                    type=\"checkbox\"
                    id=\"bulk_action_select_all\"
                    onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
                    value=\"\"
                  >
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            {% endblock %}
          </td>
          <td>
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_id_product\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_id_product,
              'disabled': filters_disabled,
            } %}
          </td>
          <td>&nbsp;</td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name\"
              value=\"{{ filter_column_name }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_name'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_reference\"
              value=\"{{ filter_column_reference }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_reference'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </td>
          <td>
            <input
              type=\"text\"
              class=\"form-control\"
              placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
              name=\"filter_column_name_category\"
              value=\"{{ filter_column_name_category }}\"
              aria-label=\"{{ \"%inputId% input\"|trans({'%inputId%': 'filter_column_name_category'}, 'Admin.Global') }}\"
              {% if filters_disabled %}disabled{% endif %}
            />
          </td>
          <td class=\"text-center\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_price\",
              'min': '0',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_price,
              'disabled': filters_disabled,
            } %}
          </td>
          <td class=\"text-center\"></td>
          {% if configuration('PS_STOCK_MANAGEMENT') %}
          <td class=\"text-center\">
            {% include '@PrestaShop/Admin/Helpers/range_inputs.html.twig' with {
              'input_name': \"filter_column_sav_quantity\",
              'min': '-1000000',
              'max': '1000000',
              'minLabel': \"Min\"|trans({}, 'Admin.Global'),
              'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
              'value': filter_column_sav_quantity,
              'disabled': filters_disabled,
            } %}
          </td>
          {% else %}
            <td></td>
          {% endif %}

          <td id=\"product_filter_column_active\" class=\"text-center\">
            <div class=\"form-select\">
              <select class=\"custom-select\"  name=\"filter_column_active\"{% if filters_disabled %} disabled{% endif %} aria-label=\"{{ \"%inputId% select\"|trans({'%inputId%': 'filter_column_active'}, 'Admin.Global') }}\"
                >
                <option value=\"\"></option>
                <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
              </select>
            </div>
          </td>
          {% if has_category_filter == true %}
            <td>
              {% if not(activate_drag_and_drop) %}
                <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                {% else %}
                <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
              {% endif %}
            </td>
          {% endif %}
          <td class=\"text-right\" style=\"width: 5rem\">
            <button
              type=\"submit\"
              class=\"btn btn-primary\"
              name=\"products_filter_submit\"
              title=\"{{ \"Search\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">search</i>
              {{ \"Search\"|trans({}, 'Admin.Actions') }}
            </button>
            <button
              type=\"reset\"
              class=\"btn btn-link\"
              name=\"products_filter_reset\"
              onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
              title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
            >
              <i class=\"material-icons\">clear</i>
              {{ \"Reset\"|trans({}, 'Admin.Actions') }}
            </button>
          </td>
        </tr>
      {% endblock %}
    </thead>
    {% block product_catalog_form_table_items %}
      {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
        'limit': limit,
        'offset': offset,
        'orderBy': orderBy,
        'sortOrder': sortOrder,
        'products': products,
        'last_sql': last_sql
      })) }}
    {% endblock %}
  </table>
</div>
", "@Product/CatalogPage/Lists/products_table.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/products_table.html.twig");
    }
}
