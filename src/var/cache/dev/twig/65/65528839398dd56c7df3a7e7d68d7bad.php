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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig */
class __TwigTemplate_d6ac6be25d5b0434cb77812b50d305c9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'invoice_options' => [$this, 'block_invoice_options'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig"));

        // line 25
        echo "
";
        // line 27
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('invoice_options', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_invoice_options($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "invoice_options"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "invoice_options"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 30, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_invoices_process"), "attr" => ["id" => "form-invoices-options"]]);
        echo "
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice options", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          ";
        // line 39
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable invoices", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If enabled, your customers will receive an invoice for the purchase.", [], "Admin.Orderscustomers.Help")], 39, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 41, $this->source); })()), "enable_invoices", [], "any", false, false, false, 41), 'errors');
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 42, $this->source); })()), "enable_invoices", [], "any", false, false, false, 42), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 46
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable tax breakdown", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If required, show the total amount per rate of the corresponding tax.", [], "Admin.Orderscustomers.Help")], 46, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 48, $this->source); })()), "enable_tax_breakdown", [], "any", false, false, false, 48), 'errors');
        echo "
            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 49, $this->source); })()), "enable_tax_breakdown", [], "any", false, false, false, 49), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 53
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable product image", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adds an image in front of the product name on the invoice", [], "Admin.Orderscustomers.Help")], 53, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 55, $this->source); })()), "enable_product_images", [], "any", false, false, false, 55), 'errors');
        echo "
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 56, $this->source); })()), "enable_product_images", [], "any", false, false, false, 56), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 60
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice prefix", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Freely definable prefix for invoice number (e.g. #IN00001).", [], "Admin.Orderscustomers.Help")], 60, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 62, $this->source); })()), "invoice_prefix", [], "any", false, false, false, 62), 'errors');
        echo "
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 63, $this->source); })()), "invoice_prefix", [], "any", false, false, false, 63), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current year to invoice number", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 71, $this->source); })()), "add_current_year", [], "any", false, false, false, 71), 'errors');
        echo "
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 72, $this->source); })()), "add_current_year", [], "any", false, false, false, 72), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset sequential invoice number at the beginning of the year", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 80, $this->source); })()), "reset_number_annually", [], "any", false, false, false, 80), 'errors');
        echo "
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 81, $this->source); })()), "reset_number_annually", [], "any", false, false, false, 81), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Position of the year date", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
          </label>
          <div class=\"col-sm\">
            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 89, $this->source); })()), "year_position", [], "any", false, false, false, 89), 'errors');
        echo "
            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 90, $this->source); })()), "year_position", [], "any", false, false, false, 90), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 94
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice number", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The next invoice will begin with this number, and then increase with each additional invoice. Set to 0 if you want to keep the current number (which is #%number%).", ["%number%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 94, $this->source); })()), "vars", [], "any", false, false, false, 94), "next_invoice_number", [], "any", false, false, false, 94)], "Admin.Orderscustomers.Help")], 94, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 96, $this->source); })()), "invoice_number", [], "any", false, false, false, 96), 'errors');
        echo "
            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 97, $this->source); })()), "invoice_number", [], "any", false, false, false, 97), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 101
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Legal free text", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use this field to show additional information on the invoice, below the payment methods summary (like specific legal information).", [], "Admin.Orderscustomers.Help")], 101, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 103, $this->source); })()), "legal_free_text", [], "any", false, false, false, 103), 'errors');
        echo "
            ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 104, $this->source); })()), "legal_free_text", [], "any", false, false, false, 104), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 108
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Footer text", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This text will appear at the bottom of the invoice, below your company details.", [], "Admin.Orderscustomers.Help")], 108, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 110, $this->source); })()), "footer_text", [], "any", false, false, false, 110), 'errors');
        echo "
            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 111, $this->source); })()), "footer_text", [], "any", false, false, false, 111), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 115
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice model", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose an invoice model.", [], "Admin.Orderscustomers.Help")], 115, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 117, $this->source); })()), "invoice_model", [], "any", false, false, false, 117), 'errors');
        echo "
            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 118, $this->source); })()), "invoice_model", [], "any", false, false, false, 118), 'widget');
        echo "
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 122
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Use the disk as cache for PDF invoices", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Saves memory but slows down the PDF generation.", [], "Admin.Orderscustomers.Help")], 122, $context, $this->getSourceContext());
        echo "
          <div class=\"col-sm\">
            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 124, $this->source); })()), "use_disk_cache", [], "any", false, false, false, 124), 'errors');
        echo "
            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 125, $this->source); })()), "use_disk_cache", [], "any", false, false, false, 125), 'widget');
        echo "
          </div>
        </div>
        ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 128, $this->source); })()), 'rest');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"save-invoices-options-button\">";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </div>
    </div>
  </div>
  ";
        // line 137
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["invoiceOptionsForm"]) || array_key_exists("invoiceOptionsForm", $context) ? $context["invoiceOptionsForm"] : (function () { throw new RuntimeError('Variable "invoiceOptionsForm" does not exist.', 137, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 137,  292 => 133,  284 => 128,  278 => 125,  274 => 124,  269 => 122,  262 => 118,  258 => 117,  253 => 115,  246 => 111,  242 => 110,  237 => 108,  230 => 104,  226 => 103,  221 => 101,  214 => 97,  210 => 96,  205 => 94,  198 => 90,  194 => 89,  188 => 86,  180 => 81,  176 => 80,  170 => 77,  162 => 72,  158 => 71,  152 => 68,  144 => 63,  140 => 62,  135 => 60,  128 => 56,  124 => 55,  119 => 53,  112 => 49,  108 => 48,  103 => 46,  96 => 42,  92 => 41,  87 => 39,  79 => 34,  71 => 30,  52 => 29,  49 => 28,  47 => 27,  44 => 25,);
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

{% block invoice_options %}
  {{ form_start(invoiceOptionsForm, {method: 'POST', action: path('admin_order_invoices_process'), attr: {id: 'form-invoices-options'}}) }}
  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">settings</i>
      {{ 'Invoice options'|trans }}
    </h3>
    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"form-group row\">
          {{ ps.label_with_help('Enable invoices'|trans, 'If enabled, your customers will receive an invoice for the purchase.'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.enable_invoices) }}
            {{ form_widget(invoiceOptionsForm.enable_invoices) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Enable tax breakdown'|trans, 'If required, show the total amount per rate of the corresponding tax.'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.enable_tax_breakdown) }}
            {{ form_widget(invoiceOptionsForm.enable_tax_breakdown) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Enable product image'|trans, 'Adds an image in front of the product name on the invoice'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.enable_product_images) }}
            {{ form_widget(invoiceOptionsForm.enable_product_images) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Invoice prefix'|trans, 'Freely definable prefix for invoice number (e.g. #IN00001).'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.invoice_prefix) }}
            {{ form_widget(invoiceOptionsForm.invoice_prefix) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Add current year to invoice number'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.add_current_year) }}
            {{ form_widget(invoiceOptionsForm.add_current_year) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Reset sequential invoice number at the beginning of the year'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.reset_number_annually) }}
            {{ form_widget(invoiceOptionsForm.reset_number_annually) }}
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Position of the year date'|trans }}
          </label>
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.year_position) }}
            {{ form_widget(invoiceOptionsForm.year_position) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Invoice number'|trans, 'The next invoice will begin with this number, and then increase with each additional invoice. Set to 0 if you want to keep the current number (which is #%number%).'|trans({'%number%': invoiceOptionsForm.vars.next_invoice_number}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.invoice_number) }}
            {{ form_widget(invoiceOptionsForm.invoice_number) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Legal free text'|trans, 'Use this field to show additional information on the invoice, below the payment methods summary (like specific legal information).'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.legal_free_text) }}
            {{ form_widget(invoiceOptionsForm.legal_free_text) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Footer text'|trans, 'This text will appear at the bottom of the invoice, below your company details.'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.footer_text) }}
            {{ form_widget(invoiceOptionsForm.footer_text) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Invoice model'|trans, 'Choose an invoice model.'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.invoice_model) }}
            {{ form_widget(invoiceOptionsForm.invoice_model) }}
          </div>
        </div>
        <div class=\"form-group row\">
          {{ ps.label_with_help('Use the disk as cache for PDF invoices'|trans, 'Saves memory but slows down the PDF generation.'|trans({}, 'Admin.Orderscustomers.Help')) }}
          <div class=\"col-sm\">
            {{ form_errors(invoiceOptionsForm.use_disk_cache) }}
            {{ form_widget(invoiceOptionsForm.use_disk_cache) }}
          </div>
        </div>
        {{ form_rest(invoiceOptionsForm) }}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" id=\"save-invoices-options-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
      </div>
    </div>
  </div>
  {{ form_end(invoiceOptionsForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/invoice_options.html.twig");
    }
}
