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

/* @Product/ProductPage/Forms/form_combinations_bulk.html.twig */
class __TwigTemplate_c7f57907725325859299c6dfc8bd67fa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combinations_bulk.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combinations_bulk.html.twig"));

        // line 25
        echo "<div class=\"row\" id=\"bulk-combinations-container-fields\">
  ";
        // line 26
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 27
            echo "    <div class=\"col-lg-4 col-md-3 col-sm-6\">
      <label class=\"form-control-label\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "quantity", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "label", [], "any", false, false, false, 28), "html", null, true);
            echo "</label>
      ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "quantity", [], "any", false, false, false, 29), 'errors');
            echo "
      ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "quantity", [], "any", false, false, false, 30), 'widget');
            echo "
    </div>
  ";
        }
        // line 33
        echo "
  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "cost_price", [], "any", false, false, false, 35), "vars", [], "any", false, false, false, 35), "label", [], "any", false, false, false, 35), "html", null, true);
        echo "</label>
    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "cost_price", [], "any", false, false, false, 36), 'errors');
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "cost_price", [], "any", false, false, false, 37), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "impact_on_weight", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "label", [], "any", false, false, false, 41), "html", null, true);
        echo "</label>
    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "impact_on_weight", [], "any", false, false, false, 42), 'errors');
        echo "
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "impact_on_weight", [], "any", false, false, false, 43), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "impact_on_price_te", [], "any", false, false, false, 47), "vars", [], "any", false, false, false, 47), "label", [], "any", false, false, false, 47), "html", null, true);
        echo "</label>
    ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "impact_on_price_te", [], "any", false, false, false, 48), 'errors');
        echo "
    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "impact_on_price_te", [], "any", false, false, false, 49), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "impact_on_price_ti", [], "any", false, false, false, 53), "vars", [], "any", false, false, false, 53), "label", [], "any", false, false, false, 53), "html", null, true);
        echo "</label>
    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "impact_on_price_ti", [], "any", false, false, false, 54), 'errors');
        echo "
    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "impact_on_price_ti", [], "any", false, false, false, 55), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "date_availability", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59), "label", [], "any", false, false, false, 59), "html", null, true);
        echo "</label>
    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "date_availability", [], "any", false, false, false, 60), 'errors');
        echo "
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "date_availability", [], "any", false, false, false, 61), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "reference", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "label", [], "any", false, false, false, 65), "html", null, true);
        echo "</label>
    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "reference", [], "any", false, false, false, 66), 'errors');
        echo "
    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "reference", [], "any", false, false, false, 67), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "minimal_quantity", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "label", [], "any", false, false, false, 71), "html", null, true);
        echo "</label>
    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "minimal_quantity", [], "any", false, false, false, 72), 'errors');
        echo "
    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "minimal_quantity", [], "any", false, false, false, 73), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "low_stock_threshold", [], "any", false, false, false, 77), "vars", [], "any", false, false, false, 77), "label", [], "any", false, false, false, 77), "html", null, true);
        echo "
      <span class=\"help-box\" 
            data-toggle=\"popover\" 
            data-content=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can increase or decrease low stock levels in bulk. You cannot disable them in bulk: you have to do it on a per-combination basis.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" >
      </span>
    </label>
    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "low_stock_threshold", [], "any", false, false, false, 83), 'errors');
        echo "
    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "low_stock_threshold", [], "any", false, false, false, 84), 'widget');
        echo "
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6 widget-checkbox-inline\">
    <div class=\"widget-checkbox-inline\">
      ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "low_stock_alert", [], "any", false, false, false, 89), 'errors');
        echo "
      ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "low_stock_alert", [], "any", false, false, false, 90), 'widget');
        echo "
      <span class=\"help-box\" 
            data-toggle=\"popover\" 
            data-content=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to Advanced Parameters > Team", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" >
      </span>
    </div>
  </div>
</div>
<div class=\"row justify-content-end mt-3\">
    <button id=\"delete-combinations\" class=\"btn btn-outline-secondary mr-3\" data=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_attribute", ["idProduct" => (isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 99, $this->source); })())]), "html", null, true);
        echo "\">
      <i class=\"material-icons\">delete</i>
      ";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </button>
    <button id=\"apply-on-combinations\" class=\"btn btn-outline-primary mr-3\">
      ";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'widget');
        echo "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combinations_bulk.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 106,  228 => 104,  222 => 101,  217 => 99,  208 => 93,  202 => 90,  198 => 89,  190 => 84,  186 => 83,  180 => 80,  174 => 77,  167 => 73,  163 => 72,  159 => 71,  152 => 67,  148 => 66,  144 => 65,  137 => 61,  133 => 60,  129 => 59,  122 => 55,  118 => 54,  114 => 53,  107 => 49,  103 => 48,  99 => 47,  92 => 43,  88 => 42,  84 => 41,  77 => 37,  73 => 36,  69 => 35,  65 => 33,  59 => 30,  55 => 29,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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
<div class=\"row\" id=\"bulk-combinations-container-fields\">
  {% if configuration('PS_STOCK_MANAGEMENT') %}
    <div class=\"col-lg-4 col-md-3 col-sm-6\">
      <label class=\"form-control-label\">{{ form.quantity.vars.label }}</label>
      {{ form_errors(form.quantity) }}
      {{ form_widget(form.quantity) }}
    </div>
  {% endif %}

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.cost_price.vars.label }}</label>
    {{ form_errors(form.cost_price) }}
    {{ form_widget(form.cost_price) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.impact_on_weight.vars.label }}</label>
    {{ form_errors(form.impact_on_weight) }}
    {{ form_widget(form.impact_on_weight) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.impact_on_price_te.vars.label }}</label>
    {{ form_errors(form.impact_on_price_te) }}
    {{ form_widget(form.impact_on_price_te) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.impact_on_price_ti.vars.label }}</label>
    {{ form_errors(form.impact_on_price_ti) }}
    {{ form_widget(form.impact_on_price_ti) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.date_availability.vars.label }}</label>
    {{ form_errors(form.date_availability) }}
    {{ form_widget(form.date_availability) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.reference.vars.label }}</label>
    {{ form_errors(form.reference) }}
    {{ form_widget(form.reference) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.minimal_quantity.vars.label }}</label>
    {{ form_errors(form.minimal_quantity) }}
    {{ form_widget(form.minimal_quantity) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6\">
    <label class=\"form-control-label\">{{ form.low_stock_threshold.vars.label }}
      <span class=\"help-box\" 
            data-toggle=\"popover\" 
            data-content=\"{{ 'You can increase or decrease low stock levels in bulk. You cannot disable them in bulk: you have to do it on a per-combination basis.'|trans({}, 'Admin.Catalog.Feature') }}\" >
      </span>
    </label>
    {{ form_errors(form.low_stock_threshold) }}
    {{ form_widget(form.low_stock_threshold) }}
  </div>

  <div class=\"col-lg-4 col-md-3 col-sm-6 widget-checkbox-inline\">
    <div class=\"widget-checkbox-inline\">
      {{ form_errors(form.low_stock_alert) }}
      {{ form_widget(form.low_stock_alert) }}
      <span class=\"help-box\" 
            data-toggle=\"popover\" 
            data-content=\"{{ 'The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to Advanced Parameters > Team'|trans({}, 'Admin.Catalog.Feature') }}\" >
      </span>
    </div>
  </div>
</div>
<div class=\"row justify-content-end mt-3\">
    <button id=\"delete-combinations\" class=\"btn btn-outline-secondary mr-3\" data=\"{{ path('admin_delete_attribute', {'idProduct': id_product}) }}\">
      <i class=\"material-icons\">delete</i>
      {{ 'Delete combinations'|trans({}, 'Admin.Catalog.Feature') }}
    </button>
    <button id=\"apply-on-combinations\" class=\"btn btn-outline-primary mr-3\">
      {{ 'Apply'|trans({}, 'Admin.Actions') }}
    </button>
  {{ form_widget(form) }}
</div>
", "@Product/ProductPage/Forms/form_combinations_bulk.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combinations_bulk.html.twig");
    }
}
