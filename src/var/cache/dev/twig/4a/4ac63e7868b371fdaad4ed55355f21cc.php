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

/* @Product/CatalogPage/Forms/form_products.html.twig */
class __TwigTemplate_68da8b3e0433f739918edc2fd91d1318 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table' => [$this, 'block_product_catalog_form_table'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_products.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Forms/form_products.html.twig"));

        // line 25
        echo "<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 29, $this->source); })()), "orderBy" => (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 29, $this->source); })()), "sortOrder" => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "\"
  orderingurl=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["offset" => 0, "limit" => 300, "orderBy" => "position_ordering", "sortOrder" => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "\"
  newproducturl=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        echo "\"
>

  <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter((isset($context["filter_category"]) || array_key_exists("filter_category", $context) ? $context["filter_category"] : (function () { throw new RuntimeError('Variable "filter_category" does not exist.', 34, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" />

      ";
        // line 36
        $this->displayBlock('product_catalog_form_table', $context, $blocks);
        // line 57
        echo "
  ";
        // line 58
        if (((isset($context["product_count_filtered"]) || array_key_exists("product_count_filtered", $context) ? $context["product_count_filtered"] : (function () { throw new RuntimeError('Variable "product_count_filtered" does not exist.', 58, $this->source); })()) > 20)) {
            // line 59
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin\\Common:pagination", ["limit" =>             // line 60
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "offset" =>             // line 61
(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 61, $this->source); })()), "total" =>             // line 62
(isset($context["product_count_filtered"]) || array_key_exists("product_count_filtered", $context) ? $context["product_count_filtered"] : (function () { throw new RuntimeError('Variable "product_count_filtered" does not exist.', 62, $this->source); })()), "caller_route" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 63
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "request", [], "any", false, false, false, 63), "attributes", [], "any", false, false, false, 63), "get", [0 => "_route"], "method", false, false, false, 63), "caller_parameters" =>             // line 64
(isset($context["pagination_parameters"]) || array_key_exists("pagination_parameters", $context) ? $context["pagination_parameters"] : (function () { throw new RuntimeError('Variable "pagination_parameters" does not exist.', 64, $this->source); })()), "limit_choices" =>             // line 65
(isset($context["pagination_limit_choices"]) || array_key_exists("pagination_limit_choices", $context) ? $context["pagination_limit_choices"] : (function () { throw new RuntimeError('Variable "pagination_limit_choices" does not exist.', 65, $this->source); })())]));
            // line 66
            echo "
  ";
        }
        // line 68
        echo "</form>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 36
    public function block_product_catalog_form_table($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table"));

        // line 37
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Lists/products_table.html.twig", ["limit" =>         // line 38
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 38, $this->source); })()), "orderBy" =>         // line 39
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 39, $this->source); })()), "offset" =>         // line 40
(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 40, $this->source); })()), "sortOrder" =>         // line 41
(isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 41, $this->source); })()), "filter_category" =>         // line 42
(isset($context["filter_category"]) || array_key_exists("filter_category", $context) ? $context["filter_category"] : (function () { throw new RuntimeError('Variable "filter_category" does not exist.', 42, $this->source); })()), "filter_column_id_product" =>         // line 43
(isset($context["filter_column_id_product"]) || array_key_exists("filter_column_id_product", $context) ? $context["filter_column_id_product"] : (function () { throw new RuntimeError('Variable "filter_column_id_product" does not exist.', 43, $this->source); })()), "filter_column_name" =>         // line 44
(isset($context["filter_column_name"]) || array_key_exists("filter_column_name", $context) ? $context["filter_column_name"] : (function () { throw new RuntimeError('Variable "filter_column_name" does not exist.', 44, $this->source); })()), "filter_column_reference" =>         // line 45
(isset($context["filter_column_reference"]) || array_key_exists("filter_column_reference", $context) ? $context["filter_column_reference"] : (function () { throw new RuntimeError('Variable "filter_column_reference" does not exist.', 45, $this->source); })()), "filter_column_name_category" =>         // line 46
(isset($context["filter_column_name_category"]) || array_key_exists("filter_column_name_category", $context) ? $context["filter_column_name_category"] : (function () { throw new RuntimeError('Variable "filter_column_name_category" does not exist.', 46, $this->source); })()), "filter_column_price" =>         // line 47
(isset($context["filter_column_price"]) || array_key_exists("filter_column_price", $context) ? $context["filter_column_price"] : (function () { throw new RuntimeError('Variable "filter_column_price" does not exist.', 47, $this->source); })()), "filter_column_sav_quantity" =>         // line 48
(isset($context["filter_column_sav_quantity"]) || array_key_exists("filter_column_sav_quantity", $context) ? $context["filter_column_sav_quantity"] : (function () { throw new RuntimeError('Variable "filter_column_sav_quantity" does not exist.', 48, $this->source); })()), "filter_column_active" =>         // line 49
(isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context) ? $context["filter_column_active"] : (function () { throw new RuntimeError('Variable "filter_column_active" does not exist.', 49, $this->source); })()), "has_category_filter" =>         // line 50
(isset($context["has_category_filter"]) || array_key_exists("has_category_filter", $context) ? $context["has_category_filter"] : (function () { throw new RuntimeError('Variable "has_category_filter" does not exist.', 50, $this->source); })()), "activate_drag_and_drop" =>         // line 51
(isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 51, $this->source); })()), "products" =>         // line 52
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 52, $this->source); })()), "last_sql" =>         // line 53
(isset($context["last_sql"]) || array_key_exists("last_sql", $context) ? $context["last_sql"] : (function () { throw new RuntimeError('Variable "last_sql" does not exist.', 53, $this->source); })())]);
        // line 55
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Forms/form_products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 55,  127 => 53,  126 => 52,  125 => 51,  124 => 50,  123 => 49,  122 => 48,  121 => 47,  120 => 46,  119 => 45,  118 => 44,  117 => 43,  116 => 42,  115 => 41,  114 => 40,  113 => 39,  112 => 38,  110 => 37,  100 => 36,  89 => 68,  85 => 66,  83 => 65,  82 => 64,  81 => 63,  80 => 62,  79 => 61,  78 => 60,  76 => 59,  74 => 58,  71 => 57,  69 => 36,  64 => 34,  58 => 31,  54 => 30,  50 => 29,  44 => 25,);
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
<form
  name=\"product_catalog_list\"
  id=\"product_catalog_list\"
  method=\"post\"
  action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
  orderingurl=\"{{ path('admin_product_catalog', {offset: 0, 'limit': 300, 'orderBy': 'position_ordering', 'sortOrder': sortOrder}) }}\"
  newproducturl=\"{{ path('admin_product_new') }}\"
>

  <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />

      {% block product_catalog_form_table %}
        {{ include('@Product/CatalogPage/Lists/products_table.html.twig', {
          'limit': limit,
          'orderBy': orderBy,
          'offset': offset,
          'sortOrder': sortOrder,
          'filter_category': filter_category,
          'filter_column_id_product': filter_column_id_product,
          'filter_column_name': filter_column_name,
          'filter_column_reference': filter_column_reference,
          'filter_column_name_category': filter_column_name_category,
          'filter_column_price': filter_column_price,
          'filter_column_sav_quantity': filter_column_sav_quantity,
          'filter_column_active':filter_column_active,
          'has_category_filter': has_category_filter,
          'activate_drag_and_drop': activate_drag_and_drop,
          'products': products,
          'last_sql': last_sql
          })
        }}
      {% endblock %}

  {% if product_count_filtered > 20 %}
        {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination', {
          'limit': limit,
          'offset': offset,
          'total': product_count_filtered,
          'caller_route': app.request.attributes.get('_route'),
          'caller_parameters': pagination_parameters,
          'limit_choices': pagination_limit_choices
          })) }}
  {% endif %}
</form>
", "@Product/CatalogPage/Forms/form_products.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Forms/form_products.html.twig");
    }
}
