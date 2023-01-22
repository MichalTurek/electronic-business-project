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

/* @Product/ProductPage/Forms/form_supplier_combination.html.twig */
class __TwigTemplate_90594725121308c021182dc6e9e804aa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_supplier_combination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_supplier_combination.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, (isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 25, $this->source); })())) > 0)) {
            // line 26
            echo "  <h4>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supplier reference(s)", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h4>
  <div class=\"alert alert-info\" role=\"alert\">
    <p class=\"alert-text\">
      ";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can specify product reference(s) for each associated supplier. Click \"%save_label%\" after changing selected suppliers to display the associated product references.", ["%save_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions")], "Admin.Catalog.Help");
            echo "
    </p>
  </div>
";
        }
        // line 33
        echo "
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suppliers"]) || array_key_exists("suppliers", $context) ? $context["suppliers"] : (function () { throw new RuntimeError('Variable "suppliers" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["supplierId"]) {
            // line 35
            echo "  ";
            $context["collectionName"] = ("supplier_combination_" . $context["supplierId"]);
            // line 36
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <strong>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 38, $this->source); })()), [], "array", false, false, false, 38), "vars", [], "any", false, false, false, 38), "label", [], "any", false, false, false, 38), "html", null, true);
            echo "</strong>
    </div>
    <div class=\"panel-body\" id=\"supplier_combination_";
            // line 40
            echo twig_escape_filter($this->env, $context["supplierId"], "html", null, true);
            echo "\">
      <div>
        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 42, $this->source); })()), [], "array", false, false, false, 42), 'errors');
            echo "
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
              <th width=\"30%\">";
            // line 46
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"30%\">";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Supplier reference", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cost price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              <th width=\"20%\">";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
            echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), (isset($context["collectionName"]) || array_key_exists("collectionName", $context) ? $context["collectionName"] : (function () { throw new RuntimeError('Variable "collectionName" does not exist.', 53, $this->source); })()), [], "array", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["supplier_combination"]) {
                // line 54
                echo "              <tr>
                <td>";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["supplier_combination"], "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "label", [], "any", false, false, false, 55), "html", null, true);
                echo "</td>
                <td>";
                // line 56
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["supplier_combination"], "supplier_reference", [], "any", false, false, false, 56), 'widget');
                echo "</td>
                <td>";
                // line 57
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["supplier_combination"], "product_price", [], "any", false, false, false, 57), 'widget');
                echo "</td>
                <td>
                  ";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["supplier_combination"], "product_price_currency", [], "any", false, false, false, 59), 'widget');
                echo "
                  ";
                // line 60
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["supplier_combination"], "id_product_attribute", [], "any", false, false, false, 60), 'widget');
                echo "
                  ";
                // line 61
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["supplier_combination"], "supplier_id", [], "any", false, false, false, 61), 'widget');
                echo "
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplier_combination'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "          </tbody>
        </table>
      </div>
    </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['supplierId'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_supplier_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 65,  137 => 61,  133 => 60,  129 => 59,  124 => 57,  120 => 56,  116 => 55,  113 => 54,  109 => 53,  102 => 49,  98 => 48,  94 => 47,  90 => 46,  83 => 42,  78 => 40,  73 => 38,  69 => 36,  66 => 35,  62 => 34,  59 => 33,  52 => 29,  45 => 26,  43 => 25,);
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
{% if suppliers|length > 0 %}
  <h4>{{ 'Supplier reference(s)'|trans({}, 'Admin.Catalog.Feature') }}</h4>
  <div class=\"alert alert-info\" role=\"alert\">
    <p class=\"alert-text\">
      {{ 'You can specify product reference(s) for each associated supplier. Click \"%save_label%\" after changing selected suppliers to display the associated product references.'|trans({'%save_label%': 'Save'|trans({}, 'Admin.Actions')}, 'Admin.Catalog.Help')|raw }}
    </p>
  </div>
{% endif %}

{% for supplierId in suppliers %}
  {% set collectionName = 'supplier_combination_' ~ supplierId %}
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <strong>{{ form[collectionName].vars.label }}</strong>
    </div>
    <div class=\"panel-body\" id=\"supplier_combination_{{ supplierId }}\">
      <div>
        {{ form_errors(form[collectionName]) }}
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
              <th width=\"30%\">{{ 'Product name'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"30%\">{{ 'Supplier reference'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"20%\">{{ 'Cost price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
              <th width=\"20%\">{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
            </tr>
          </thead>
          <tbody>
            {% for supplier_combination in form[collectionName] %}
              <tr>
                <td>{{ supplier_combination.vars.value.label }}</td>
                <td>{{ form_widget(supplier_combination.supplier_reference) }}</td>
                <td>{{ form_widget(supplier_combination.product_price) }}</td>
                <td>
                  {{ form_widget(supplier_combination.product_price_currency) }}
                  {{ form_widget(supplier_combination.id_product_attribute) }}
                  {{ form_widget(supplier_combination.supplier_id) }}
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endfor %}
", "@Product/ProductPage/Forms/form_supplier_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_supplier_combination.html.twig");
    }
}
