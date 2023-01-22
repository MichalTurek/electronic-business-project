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

/* @Product/ProductPage/Blocks/footer.html.twig */
class __TwigTemplate_d988c7ae3afcb628f7b905587a7018b8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_footer' => [$this, 'block_product_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/footer.html.twig"));

        // line 25
        $this->displayBlock('product_footer', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_product_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        // line 26
        echo "  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-3\">
      <a
        href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_unit_action", ["action" => "delete", "id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 29, $this->source); })())]), "html", null, true);
        echo "\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permanently delete this product.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-seo-url=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["seo_link"]) || array_key_exists("seo_link", $context) ? $context["seo_link"] : (function () { throw new RuntimeError('Variable "seo_link" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"
        data-redirect=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["preview_link"]) || array_key_exists("preview_link", $context) ? $context["preview_link"] : (function () { throw new RuntimeError('Variable "preview_link" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\"
        data-url-deactive=\"";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["preview_link_deactivate"]) || array_key_exists("preview_link_deactivate", $context) ? $context["preview_link_deactivate"] : (function () { throw new RuntimeError('Variable "preview_link_deactivate" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("See how your product sheet will look online: ALT+SHIFT+V", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      ";
        // line 52
        if ((isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "        <h2 class=\"for-switch online-title\" ";
            if ( !(isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 53, $this->source); })())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable or disable the product on your shop: ALT+SHIFT+O", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Online", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        <h2 class=\"for-switch offline-title\" ";
            // line 55
            if ((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 55, $this->source); })())) {
                echo "style=\"display:none;\"";
            }
            echo " data-toggle=\"pstooltip\"
          title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable or disable the product on your shop: ALT+SHIFT+O", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Offline", [], "Admin.Global"), "html", null, true);
            echo "</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          ";
            // line 64
            echo (((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 64, $this->source); })())) ? ("checked=\"checked\"") : (""));
            echo "
        />
      ";
        }
        // line 67
        echo "    </div>
    <div class=\"col-sm-5 col-lg-9 text-right\">
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save the product and stay on the current page: ALT+SHIFT+S", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      />
      ";
        // line 77
        if ((isset($context["is_shop_context"]) || array_key_exists("is_shop_context", $context) ? $context["is_shop_context"] : (function () { throw new RuntimeError('Variable "is_shop_context" does not exist.', 77, $this->source); })())) {
            // line 78
            echo "        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_unit_action", ["action" => "duplicate", "id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 82, $this->source); })())]), "html", null, true);
            echo "\"
          data-toggle=\"pstooltip\"
          title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and duplicate this product, then go to the new product: ALT+SHIFT+D", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\"
        >
          ";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicate", [], "Admin.Actions");
            echo "
        </button>
      ";
        }
        // line 89
        echo "      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["offset" => "last", "limit" => "last"]), "html", null, true);
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and go back to the catalog: ALT+SHIFT+Q", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go to catalog", [], "Admin.Catalog.Feature");
        echo "
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        echo "\"
        data-toggle=\"pstooltip\"
        title=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and create a new product: ALT+SHIFT+P", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      >
        ";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new product", [], "Admin.Catalog.Feature");
        echo "
      </button>
      <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
      <div class=\"btn-group hide dropdown\">
        <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
        >
          <span>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button><button
                   class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
                   type=\"button\"
                   id=\"dropdownMenu\"
                   data-toggle=\"dropdown\"
                   aria-expanded=\"false\"
                 >
          <span class=\"sr-only\">Toggle dropdown</span>
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          ";
        // line 126
        if ((isset($context["is_shop_context"]) || array_key_exists("is_shop_context", $context) ? $context["is_shop_context"] : (function () { throw new RuntimeError('Variable "is_shop_context" does not exist.', 126, $this->source); })())) {
            // line 127
            echo "            <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_unit_action", ["action" => "duplicate", "id" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 129, $this->source); })())]), "html", null, true);
            echo "\"
            >
              ";
            // line 131
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicate", [], "Admin.Actions");
            echo "
            </a>
          ";
        }
        // line 134
        echo "          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_catalog", ["offset" => "last", "limit" => "last"]), "html", null, true);
        echo "\"
          >
            ";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go to catalog", [], "Admin.Catalog.Feature");
        echo "
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_new");
        echo "\"
          >
            ";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add new product", [], "Admin.Catalog.Feature");
        echo "
          </a>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Blocks/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  292 => 144,  287 => 142,  280 => 138,  275 => 136,  271 => 134,  265 => 131,  260 => 129,  256 => 127,  254 => 126,  240 => 115,  229 => 107,  224 => 105,  219 => 103,  210 => 97,  205 => 95,  200 => 93,  194 => 89,  188 => 86,  183 => 84,  178 => 82,  172 => 78,  170 => 77,  165 => 75,  160 => 73,  152 => 67,  146 => 64,  133 => 56,  127 => 55,  121 => 54,  114 => 53,  112 => 52,  107 => 50,  102 => 48,  94 => 43,  90 => 42,  86 => 41,  75 => 33,  68 => 29,  63 => 26,  44 => 25,);
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
{% block product_footer %}
  <div class=\"product-footer justify-content-md-center\">
    <div class=\"col-lg-3\">
      <a
        href=\"{{ path('admin_product_unit_action', {action: 'delete', id: productId}) }}\"
        class=\"tooltip-link btn btn-lg delete\"
        data-toggle=\"pstooltip\"
        id=\"product_form_delete_btn\"
        title=\"{{ 'Permanently delete this product.'|trans({}, 'Admin.Catalog.Help') }}\"
        data-placement=\"left\"
        data-original-title=\"Delete\"
      >
        <i class=\"material-icons\">delete</i>
      </a>
      <a
        href=\"\"
        data-seo-url=\"{{ seo_link }}\"
        data-redirect=\"{{ preview_link }}\"
        data-url-deactive=\"{{ preview_link_deactivate }}\"
        target=\"_blank\"
        class=\"btn btn-secondary preview\"
        data-toggle=\"pstooltip\"
        id=\"product_form_preview_btn\"
        title=\"{{ 'See how your product sheet will look online: ALT+SHIFT+V'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Preview'|trans({}, 'Admin.Actions')}}
      </a>
      {% if editable %}
        <h2 class=\"for-switch online-title\" {% if not is_active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
          title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Online'|trans({}, 'Admin.Global') }}</h2>
        <h2 class=\"for-switch offline-title\" {% if is_active %}style=\"display:none;\"{% endif %} data-toggle=\"pstooltip\"
          title=\"{{ 'Enable or disable the product on your shop: ALT+SHIFT+O'|trans({}, 'Admin.Catalog.Help') }}\">{{ 'Offline'|trans({}, 'Admin.Global') }}</h2>
        <input
          class=\"switch-input-lg\"
          id=\"form_step1_active\"
          data-toggle=\"switch\"
          type=\"checkbox\"
          name=\"form[step1][active]\"
          value=\"1\"
          {{ is_active ? 'checked=\"checked\"' : '' }}
        />
      {% endif %}
    </div>
    <div class=\"col-sm-5 col-lg-9 text-right\">
      <input
        id=\"submit\"
        type=\"submit\"
        class=\"btn btn-primary save uppercase ml-3\"
        value=\"{{ 'Save'|trans({}, 'Admin.Actions') }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save the product and stay on the current page: ALT+SHIFT+S'|trans({}, 'Admin.Catalog.Help') }}\"
      />
      {% if is_shop_context %}
        <button
          type=\"button\"
          class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase duplicate ml-3\"
          id=\"product_form_save_duplicate_btn\"
          data-redirect=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: productId}) }}\"
          data-toggle=\"pstooltip\"
          title=\"{{ 'Save and duplicate this product, then go to the new product: ALT+SHIFT+D'|trans({}, 'Admin.Catalog.Help') }}\"
        >
          {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
        </button>
      {% endif %}
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase go-catalog ml-3\"
        id=\"product_form_save_go_to_catalog_btn\"
        data-redirect=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save and go back to the catalog: ALT+SHIFT+Q'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
      </button>
      <button
        type=\"button\"
        class=\"btn btn-outline-secondary btn-submit hidden-xs uppercase new-product ml-3\"
        id=\"product_form_save_new_btn\"
        data-redirect=\"{{ path('admin_product_new') }}\"
        data-toggle=\"pstooltip\"
        title=\"{{ 'Save and create a new product: ALT+SHIFT+P'|trans({}, 'Admin.Catalog.Help') }}\"
      >
        {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
      </button>
      <div class=\"js-spinner spinner hide btn-primary-reverse onclick mr-1 btn\"></div>
      <div class=\"btn-group hide dropdown\">
        <button
          class=\"btn btn-primary js-btn-save ml-3\"
          type=\"submit\"
        >
          <span>{{ 'Save'|trans({}, 'Admin.Actions') }}</span>
        </button><button
                   class=\"btn btn-primary dropdown-toggle dropdown-toggle-split\"
                   type=\"button\"
                   id=\"dropdownMenu\"
                   data-toggle=\"dropdown\"
                   aria-expanded=\"false\"
                 >
          <span class=\"sr-only\">Toggle dropdown</span>
        </button>
        <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu\">
          {% if is_shop_context %}
            <a
              class=\"dropdown-item duplicate js-btn-save\"
              href=\"{{ path('admin_product_unit_action', {action: 'duplicate', id: productId}) }}\"
            >
              {{ 'Duplicate'|trans({}, 'Admin.Actions')|raw }}
            </a>
          {% endif %}
          <a
            class=\"dropdown-item go-catalog js-btn-save\"
            href=\"{{ path('admin_product_catalog', {'offset': 'last', 'limit': 'last'}) }}\"
          >
            {{ 'Go to catalog'|trans({}, 'Admin.Catalog.Feature')|raw }}
          </a>
          <a
            class=\"dropdown-item new-product js-btn-save\"
            href=\"{{ path('admin_product_new') }}\"
          >
            {{ 'Add new product'|trans({}, 'Admin.Catalog.Feature')|raw }}
          </a>
        </div>
      </div>
    </div>
  </div>
{% endblock %}
", "@Product/ProductPage/Blocks/footer.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Blocks/footer.html.twig");
    }
}
