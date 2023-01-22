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

/* @Product/CatalogPage/Blocks/filters.html.twig */
class __TwigTemplate_fc6d6949a4103e9642b0efaa7c65812c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_catalog_filter_by_categories' => [$this, 'block_product_catalog_filter_by_categories'],
            'product_catalog_filter_bulk_actions' => [$this, 'block_product_catalog_filter_bulk_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/filters.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/filters.html.twig"));

        // line 25
        echo "<div id=\"catalog-actions\">
      ";
        // line 26
        $this->displayBlock('product_catalog_filter_by_categories', $context, $blocks);
        // line 83
        echo "
      ";
        // line 84
        $this->displayBlock('product_catalog_filter_bulk_actions', $context, $blocks);
        // line 136
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_product_catalog_filter_by_categories($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_by_categories"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_by_categories"));

        // line 27
        echo "        <div id=\"product_catalog_category_tree_filter\" class=\"d-inline-block dropdown dropdown-clickable mr-2 mb-2\">
          <button
                  class=\"btn btn-outline-secondary dropdown-toggle\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
          >
              ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        echo "
              ";
        // line 36
        if ((array_key_exists("selected_category", $context) &&  !(null === (isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 36, $this->source); })())))) {
            // line 37
            echo "                  (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 37, $this->source); })()), "getName", [], "method", false, false, false, 37), "html", null, true);
            echo ")
              ";
        }
        // line 39
        echo "          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <div class=\"categories-tree-actions\">
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_expand\"
                onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_expand\"
              >
                <i class=\"material-icons\">expand_more</i>
                  ";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_collapse\"
                onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_collapse\"
              >
                <i class=\"material-icons\">expand_less</i>
                  ";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_reset\"
                onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
                id=\"product_catalog_category_tree_filter_reset\"
              >
                <i class=\"material-icons\">radio_button_unchecked</i>
                  ";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        echo "
              </a>
            </div>
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 70, $this->source); })()), 'widget');
        echo "
          </div>
          ";
        // line 72
        if ((array_key_exists("selected_category", $context) &&  !(null === (isset($context["selected_category"]) || array_key_exists("selected_category", $context) ? $context["selected_category"] : (function () { throw new RuntimeError('Variable "selected_category" does not exist.', 72, $this->source); })())))) {
            // line 73
            echo "            <button
              class=\"btn btn-link\"
              type=\"reset\"
              name=\"categories_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\">
              <i class=\"material-icons\">clear</i> ";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Clear filter", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          ";
        }
        // line 81
        echo "        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 84
    public function block_product_catalog_filter_bulk_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_bulk_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filter_bulk_actions"));

        // line 85
        echo "        <div
            class=\"d-inline-block mb-2\"
            bulkurl=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_bulk_action", ["action" => "activate_all"]);
        echo "\"
            massediturl=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_mass_edit_action", ["action" => "sort"]);
        echo "\"
            redirecturl=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 89, $this->source); })()), "offset" => (isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 89, $this->source); })()), "orderBy" => (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 89, $this->source); })()), "sortOrder" => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 89, $this->source); })())]), "html", null, true);
        echo "\"
            redirecturlnextpage=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["limit" => (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 90, $this->source); })()), "offset" => ((isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 90, $this->source); })()) + (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 90, $this->source); })())), "orderBy" => (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 90, $this->source); })()), "sortOrder" => (isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 90, $this->source); })())]), "html", null, true);
        echo "\"
        >
          ";
        // line 92
        $context["buttons_action"] = [0 => ["onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activate selection", [], "Admin.Actions")], 1 => ["onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivate selection", [], "Admin.Actions")]];
        // line 103
        echo "
          ";
        // line 104
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) || array_key_exists("buttons_action", $context) ? $context["buttons_action"] : (function () { throw new RuntimeError('Variable "buttons_action" does not exist.', 104, $this->source); })()), [0 => ["divider" => true], 1 => ["onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicate selection", [], "Admin.Actions")]]);
        // line 113
        echo "

          ";
        // line 115
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) || array_key_exists("buttons_action", $context) ? $context["buttons_action"] : (function () { throw new RuntimeError('Variable "buttons_action" does not exist.', 115, $this->source); })()), [0 => ["divider" => true], 1 => ["onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete selection", [], "Admin.Actions")]]);
        // line 124
        echo "
          ";
        // line 125
        $this->loadTemplate("@PrestaShop/Admin/Helpers/dropdown_menu.html.twig", "@Product/CatalogPage/Blocks/filters.html.twig", 125)->display(twig_array_merge($context, ["div_style" => "btn-group dropdown bulk-catalog", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk actions", [], "Admin.Global"), "buttonType" => "outline-secondary", "menu_icon" => "icon-caret-up", "items" =>         // line 132
(isset($context["buttons_action"]) || array_key_exists("buttons_action", $context) ? $context["buttons_action"] : (function () { throw new RuntimeError('Variable "buttons_action" does not exist.', 132, $this->source); })())]));
        // line 134
        echo "        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/filters.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  221 => 134,  219 => 132,  218 => 125,  215 => 124,  213 => 115,  209 => 113,  207 => 104,  204 => 103,  202 => 92,  197 => 90,  193 => 89,  189 => 88,  185 => 87,  181 => 85,  171 => 84,  160 => 81,  154 => 78,  147 => 73,  145 => 72,  140 => 70,  134 => 67,  122 => 58,  110 => 49,  98 => 39,  92 => 37,  90 => 36,  86 => 35,  76 => 27,  66 => 26,  55 => 136,  53 => 84,  50 => 83,  48 => 26,  45 => 25,);
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
<div id=\"catalog-actions\">
      {% block product_catalog_filter_by_categories %}
        <div id=\"product_catalog_category_tree_filter\" class=\"d-inline-block dropdown dropdown-clickable mr-2 mb-2\">
          <button
                  class=\"btn btn-outline-secondary dropdown-toggle\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
          >
              {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
              {% if selected_category is defined and selected_category is not null %}
                  ({{ selected_category.getName() }})
              {% endif %}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <div class=\"categories-tree-actions\">
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_expand\"
                onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_expand\"
              >
                <i class=\"material-icons\">expand_more</i>
                  {{ 'Expand'|trans({}, 'Admin.Actions') }}
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_collapse\"
                onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
                id=\"product_catalog_category_tree_filter_collapse\"
              >
                <i class=\"material-icons\">expand_less</i>
                  {{ 'Collapse'|trans({}, 'Admin.Actions') }}
              </a>
              <a
                href=\"#\"
                name=\"product_catalog_category_tree_filter_reset\"
                onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
                id=\"product_catalog_category_tree_filter_reset\"
              >
                <i class=\"material-icons\">radio_button_unchecked</i>
                  {{ 'Unselect'|trans({}, 'Admin.Actions') }}
              </a>
            </div>
              {{ form_widget(categories) }}
          </div>
          {% if selected_category is defined and selected_category is not null %}
            <button
              class=\"btn btn-link\"
              type=\"reset\"
              name=\"categories_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\">
              <i class=\"material-icons\">clear</i> {{ 'Clear filter'|trans({}, 'Admin.Actions') }}
            </button>
          {% endif %}
        </div>
      {% endblock %}

      {% block product_catalog_filter_bulk_actions %}
        <div
            class=\"d-inline-block mb-2\"
            bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
            massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
            redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
            redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
            {
              \"onclick\": \"bulkProductAction(this, 'activate_all');\",
              \"icon\": \"radio_button_checked\",
              \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
            }, {
              \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
              \"icon\": \"radio_button_unchecked\",
              \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
            }
          ] %}

          {% set buttons_action = buttons_action|merge([
            {
              \"divider\": true
            }, {
              \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
              \"icon\": \"content_copy\",
              \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
            }
          ]) %}


          {% set buttons_action = buttons_action|merge([
            {
              \"divider\": true
            }, {
              \"onclick\": \"bulkProductAction(this, 'delete_all');\",
              \"icon\": \"delete\",
              \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
            }
          ]) %}

          {% include '@PrestaShop/Admin/Helpers/dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropdown bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          } %}
        </div>
      {% endblock %}
</div>
", "@Product/CatalogPage/Blocks/filters.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Blocks/filters.html.twig");
    }
}
