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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig */
class __TwigTemplate_ccad62916ab5d525359ad3fd9e56642c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'invoices_generate_by_date' => [$this, 'block_invoices_generate_by_date'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig"));

        // line 25
        echo "
";
        // line 27
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('invoices_generate_by_date', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_invoices_generate_by_date($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "invoices_generate_by_date"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "invoices_generate_by_date"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 30, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_invoices_generate_by_date"), "attr" => ["id" => "form-generate-invoices-by-date"]]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">date_range</i>
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help")], 39, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 41, $this->source); })()), "date_from", [], "any", false, false, false, 41), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 42, $this->source); })()), "date_from", [], "any", false, false, false, 42), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 46
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Format: 2011-12-31 (inclusive).", [], "Admin.Orderscustomers.Help")], 46, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 48, $this->source); })()), "date_to", [], "any", false, false, false, 48), 'errors');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 49, $this->source); })()), "date_to", [], "any", false, false, false, 49), 'widget');
        echo "
          </div>
        </div>
      </div>
      ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 53, $this->source); })()), 'rest');
        echo "
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"generate-pdf-by-date-button\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate PDF file by date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateByDateForm"]) || array_key_exists("generateByDateForm", $context) ? $context["generateByDateForm"] : (function () { throw new RuntimeError('Variable "generateByDateForm" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 61,  126 => 57,  119 => 53,  112 => 49,  108 => 48,  103 => 46,  96 => 42,  92 => 41,  87 => 39,  79 => 34,  71 => 30,  52 => 29,  49 => 28,  47 => 27,  44 => 25,);
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

{% trans_default_domain \"Admin.Orderscustomers.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block invoices_generate_by_date %}
  {{ form_start(generateByDateForm, {method: 'POST', action: path('admin_order_invoices_generate_by_date'), attr: {id: 'form-generate-invoices-by-date'}}) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">date_range</i>
      {{ 'By date'|trans }}
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          {{ ps.label_with_help(('From'|trans({}, 'Admin.Global')), ('Format: 2011-12-31 (inclusive).'|trans({}, 'Admin.Orderscustomers.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(generateByDateForm.date_from) }}
            {{ form_widget(generateByDateForm.date_from) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help(('To'|trans({}, 'Admin.Global')), ('Format: 2011-12-31 (inclusive).'|trans({}, 'Admin.Orderscustomers.Help'))) }}
          <div class=\"col-sm\">
            {{ form_errors(generateByDateForm.date_to) }}
            {{ form_widget(generateByDateForm.date_to) }}
          </div>
        </div>
      </div>
      {{ form_rest(generateByDateForm) }}
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"generate-pdf-by-date-button\">{{ 'Generate PDF file by date'|trans }}</button>
      </div>
    </div>
  </div>
  {{ form_end(generateByDateForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/generate_by_date.html.twig");
    }
}
