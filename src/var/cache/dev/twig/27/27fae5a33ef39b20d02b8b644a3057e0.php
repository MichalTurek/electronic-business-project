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

/* @Product/ProductPage/Panels/pricing.html.twig */
class __TwigTemplate_435ec23989adb62e03b7fc2b86032c34 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/pricing.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
  <div class=\"container-fluid\">

    <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Retail price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      <span class=\"help-box\" 
            data-toggle=\"popover\" 
            data-content=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
      </span>
    </h2>

    <div class=\"form-group\">
      <div class=\"row\">

        <div class=\"col-xl-2 col-lg-3\">
          <label class=\"form-control-label\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 39, $this->source); })()), "price", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "label", [], "any", false, false, false, 39), "html", null, true);
        echo "</label>
          ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), 'errors');
        echo "
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 41, $this->source); })()), "price", [], "any", false, false, false, 41), 'widget');
        echo "
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <label class=\"form-control-label\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 44, $this->source); })()), "price_ttc", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "label", [], "any", false, false, false, 44), "html", null, true);
        echo "</label>
          ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 45, $this->source); })()), "price_ttc", [], "any", false, false, false, 45), 'errors');
        echo "
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 46, $this->source); })()), "price_ttc", [], "any", false, false, false, 46), 'widget');
        echo "
        </div>

        <div class=\"col-xl-4 col-lg-6 mx-auto\">
          <label class=\"form-control-label\">
            ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 51, $this->source); })()), "unit_price", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "label", [], "any", false, false, false, 51), "html", null, true);
        echo "
            <span class=\"help-box\" 
                  data-toggle=\"popover\" 
                  data-content=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Some products can be purchased by unit (per bottle, per pound, etc.), and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
            </span>
          </label>
          <div class=\"row\">
            <div class=\"col-md-6\">
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 59, $this->source); })()), "unit_price", [], "any", false, false, false, 59), 'errors');
        echo "
              ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 60, $this->source); })()), "unit_price", [], "any", false, false, false, 60), 'widget');
        echo "
            </div>
            <div class=\"col-md-6\">
              ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 63, $this->source); })()), "unity", [], "any", false, false, false, 63), 'errors');
        echo "
              ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 64, $this->source); })()), "unity", [], "any", false, false, false, 64), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"col-md-2 col-md-offset-1 ";
        // line 68
        if (($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
          <label class=\"form-control-label\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 69, $this->source); })()), "ecotax", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "label", [], "any", false, false, false, 69), "html", null, true);
        echo "</label>
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 70, $this->source); })()), "ecotax", [], "any", false, false, false, 70), 'errors');
        echo "
          ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 71, $this->source); })()), "ecotax", [], "any", false, false, false, 71), 'widget');
        echo "
        </div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-4\">
        <label class=\"form-control-label\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 78, $this->source); })()), "id_tax_rules_group", [], "any", false, false, false, 78), "vars", [], "any", false, false, false, 78), "label", [], "any", false, false, false, 78), "html", null, true);
        echo "</label>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 79, $this->source); })()), "id_tax_rules_group", [], "any", false, false, false, 79), 'errors');
        echo "
        ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 80, $this->source); })()), "id_tax_rules_group", [], "any", false, false, false, 80), 'widget');
        echo "
      </div>
      <div class=\"col-md-8\">
        <label class=\"form-control-label\">&nbsp;</label>
        <a class=\"form-control-static external-link\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminTaxes"), "html", null, true);
        echo "\" target=\"_blank\">
          ";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage tax rules", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </a>
      </div>
      <div class=\"col-md-12 pt-1\">
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 89, $this->source); })()), "on_sale", [], "any", false, false, false, 89), 'widget');
        echo "
      </div>
      <div class=\"col-md-12\">
        <div class=\"row\">
          <div class=\"col-xl-5 col-lg-12\">
            <div class=\"alert alert-info mt-2\" role=\"alert\">
              <p class=\"alert-text\">
                ";
        // line 96
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.", [], "Admin.Catalog.Feature"), ["[1]" => "<strong>", "[/1]" => "</strong>", "[2]" => "<span id=\"final_retail_price_ti\">", "[/2]" => "</span>", "[3]" => "<span id=\"final_retail_price_te\">", "[/3]" => "</span>"]);
        echo "
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row mb-3\">
      <div class=\"col-md-12\">
        <h2>
          ";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cost price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          <span class=\"help-box\" 
                data-toggle=\"popover\" 
                data-content=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </h2>
      </div>
      <div class=\"col-xl-2 col-lg-3 form-group\">
        <label class=\"form-control-label\">";
        // line 115
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 115, $this->source); })()), "wholesale_price", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "label", [], "any", false, false, false, 115);
        echo "</label>
        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 116, $this->source); })()), "wholesale_price", [], "any", false, false, false, 116), 'errors');
        echo "
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 117, $this->source); })()), "wholesale_price", [], "any", false, false, false, 117), 'widget');
        echo "
      </div>
    </div>

    <div class=\"row mb-3\">
      <div class=\"col-md-12\">
        <h2>
          ";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific prices", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          <span class=\"help-box\" 
                data-toggle=\"popover\" 
                data-content=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can set specific prices for customers belonging to different groups, different countries, etc.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </h2>
      </div>
      <div class=\"col-md-12\">
        <div id=\"specific-price\" class=\"mb-2\">
          <a id=\"js-open-create-specific-price-form\" class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
            <i class=\"material-icons\">add_circle</i>
            ";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a specific price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          </a>
          <div class=\"collapse\" id=\"specific_price_form\" data-action=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_specific_price_add");
        echo "\">
            ";
        // line 138
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_specific_price.html.twig", ["form" => twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 138, $this->source); })()), "specific_price", [], "any", false, false, false, 138), "is_multishop_context" => (isset($context["is_multishop_context"]) || array_key_exists("is_multishop_context", $context) ? $context["is_multishop_context"] : (function () { throw new RuntimeError('Variable "is_multishop_context" does not exist.', 138, $this->source); })())]);
        echo "
          </div>
          <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data-listing-url=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_specific_price_list", ["idProduct" => 1]);
        echo "\" data-action-delete=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_specific_price", ["idSpecificPrice" => 1]);
        echo "\" data-action-edit=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_get_specific_price_update_form", ["idSpecificPrice" => 1]);
        echo "\">
            <thead class=\"thead-default\">
              <tr>
                <th>";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fixed price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Impact", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Period", [], "Admin.Global"), "html", null, true);
        echo "</th>
                <th>";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      ";
        // line 165
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig");
        echo "
    </div>

    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2>
          ";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priority management", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          <span class=\"help-box\" 
                data-toggle=\"popover\" 
                data-content=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </h2>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Priorities", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
          ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 181, $this->source); })()), "specificPricePriority_0", [], "any", false, false, false, 181), 'errors');
        echo "
          ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 182, $this->source); })()), "specificPricePriority_0", [], "any", false, false, false, 182), 'widget');
        echo "
        </fieldset>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>&nbsp;</label>
          ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 188, $this->source); })()), "specificPricePriority_1", [], "any", false, false, false, 188), 'errors');
        echo "
          ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 189, $this->source); })()), "specificPricePriority_1", [], "any", false, false, false, 189), 'widget');
        echo "
        </fieldset>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>&nbsp;</label>
          ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 195, $this->source); })()), "specificPricePriority_2", [], "any", false, false, false, 195), 'errors');
        echo "
          ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 196, $this->source); })()), "specificPricePriority_2", [], "any", false, false, false, 196), 'widget');
        echo "
        </fieldset>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>&nbsp;</label>
          ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 202, $this->source); })()), "specificPricePriority_3", [], "any", false, false, false, 202), 'errors');
        echo "
          ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 203, $this->source); })()), "specificPricePriority_3", [], "any", false, false, false, 203), 'widget');
        echo "
        </fieldset>
      </div>
      <div class=\"col-md-12\">
        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["pricingForm"]) || array_key_exists("pricingForm", $context) ? $context["pricingForm"] : (function () { throw new RuntimeError('Variable "pricingForm" does not exist.', 207, $this->source); })()), "specificPricePriorityToAll", [], "any", false, false, false, 207), 'widget');
        echo "
      </div>
    </div>

    ";
        // line 211
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsPriceStepBottom", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 211, $this->source); })())]);
        echo "

  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  417 => 211,  410 => 207,  403 => 203,  399 => 202,  390 => 196,  386 => 195,  377 => 189,  373 => 188,  364 => 182,  360 => 181,  356 => 180,  347 => 174,  341 => 171,  332 => 165,  317 => 153,  313 => 152,  309 => 151,  305 => 150,  301 => 149,  297 => 148,  293 => 147,  289 => 146,  285 => 145,  281 => 144,  277 => 143,  267 => 140,  262 => 138,  258 => 137,  253 => 135,  242 => 127,  236 => 124,  226 => 117,  222 => 116,  218 => 115,  210 => 110,  204 => 107,  190 => 96,  180 => 89,  173 => 85,  169 => 84,  162 => 80,  158 => 79,  154 => 78,  144 => 71,  140 => 70,  136 => 69,  130 => 68,  123 => 64,  119 => 63,  113 => 60,  109 => 59,  101 => 54,  95 => 51,  87 => 46,  83 => 45,  79 => 44,  73 => 41,  69 => 40,  65 => 39,  54 => 31,  48 => 28,  43 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step2\">
  <div class=\"container-fluid\">

    <h2>{{ 'Retail price'|trans({}, 'Admin.Catalog.Feature') }}
      <span class=\"help-box\" 
            data-toggle=\"popover\" 
            data-content=\"{{ \"This is the price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\">
      </span>
    </h2>

    <div class=\"form-group\">
      <div class=\"row\">

        <div class=\"col-xl-2 col-lg-3\">
          <label class=\"form-control-label\">{{ pricingForm.price.vars.label }}</label>
          {{ form_errors(pricingForm.price) }}
          {{ form_widget(pricingForm.price) }}
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <label class=\"form-control-label\">{{ pricingForm.price_ttc.vars.label }}</label>
          {{ form_errors(pricingForm.price_ttc) }}
          {{ form_widget(pricingForm.price_ttc) }}
        </div>

        <div class=\"col-xl-4 col-lg-6 mx-auto\">
          <label class=\"form-control-label\">
            {{ pricingForm.unit_price.vars.label }}
            <span class=\"help-box\" 
                  data-toggle=\"popover\" 
                  data-content=\"{{ \"Some products can be purchased by unit (per bottle, per pound, etc.), and this is the price for one unit. For instance, if you’re selling fabrics, it would be the price per meter.\"|trans({}, 'Admin.Catalog.Help') }}\">
            </span>
          </label>
          <div class=\"row\">
            <div class=\"col-md-6\">
              {{ form_errors(pricingForm.unit_price) }}
              {{ form_widget(pricingForm.unit_price) }}
            </div>
            <div class=\"col-md-6\">
              {{ form_errors(pricingForm.unity) }}
              {{ form_widget(pricingForm.unity) }}
            </div>
          </div>
        </div>
        <div class=\"col-md-2 col-md-offset-1 {% if configuration('PS_USE_ECOTAX') != 1 %}hide{% endif %}\">
          <label class=\"form-control-label\">{{ pricingForm.ecotax.vars.label }}</label>
          {{ form_errors(pricingForm.ecotax) }}
          {{ form_widget(pricingForm.ecotax) }}
        </div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-4\">
        <label class=\"form-control-label\">{{ pricingForm.id_tax_rules_group.vars.label }}</label>
        {{ form_errors(pricingForm.id_tax_rules_group) }}
        {{ form_widget(pricingForm.id_tax_rules_group) }}
      </div>
      <div class=\"col-md-8\">
        <label class=\"form-control-label\">&nbsp;</label>
        <a class=\"form-control-static external-link\" href=\"{{ getAdminLink(\"AdminTaxes\") }}\" target=\"_blank\">
          {{ 'Manage tax rules'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
      </div>
      <div class=\"col-md-12 pt-1\">
        {{ form_widget(pricingForm.on_sale) }}
      </div>
      <div class=\"col-md-12\">
        <div class=\"row\">
          <div class=\"col-xl-5 col-lg-12\">
            <div class=\"alert alert-info mt-2\" role=\"alert\">
              <p class=\"alert-text\">
                {{ 'Final retail price: [1][2][/2] tax incl.[/1] / [3][/3] tax excl.'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<strong>', '[/1]': '</strong>', '[2]': '<span id=\"final_retail_price_ti\">', '[/2]': '</span>', '[3]': '<span id=\"final_retail_price_te\">', '[/3]': '</span>', })|raw }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row mb-3\">
      <div class=\"col-md-12\">
        <h2>
          {{ 'Cost price'|trans({}, 'Admin.Catalog.Feature') }}
          <span class=\"help-box\" 
                data-toggle=\"popover\" 
                data-content=\"{{ \"The cost price is the price you paid for the product. Do not include the tax. It should be lower than the retail price: the difference between the two will be your margin.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </h2>
      </div>
      <div class=\"col-xl-2 col-lg-3 form-group\">
        <label class=\"form-control-label\">{{ pricingForm.wholesale_price.vars.label|raw }}</label>
        {{ form_errors(pricingForm.wholesale_price) }}
        {{ form_widget(pricingForm.wholesale_price) }}
      </div>
    </div>

    <div class=\"row mb-3\">
      <div class=\"col-md-12\">
        <h2>
          {{ 'Specific prices'|trans({}, 'Admin.Catalog.Feature') }}
          <span class=\"help-box\" 
                data-toggle=\"popover\" 
                data-content=\"{{ \"You can set specific prices for customers belonging to different groups, different countries, etc.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </h2>
      </div>
      <div class=\"col-md-12\">
        <div id=\"specific-price\" class=\"mb-2\">
          <a id=\"js-open-create-specific-price-form\" class=\"btn btn-outline-primary mb-3\" data-toggle=\"collapse\" href=\"#specific_price_form\" aria-expanded=\"false\">
            <i class=\"material-icons\">add_circle</i>
            {{ 'Add a specific price'|trans({}, 'Admin.Catalog.Feature') }}
          </a>
          <div class=\"collapse\" id=\"specific_price_form\" data-action=\"{{ path('admin_specific_price_add') }}\">
            {{ include('@Product/ProductPage/Forms/form_specific_price.html.twig', {'form': pricingForm.specific_price, 'is_multishop_context': is_multishop_context}) }}
          </div>
          <table id=\"js-specific-price-list\" class=\"table hide seo-table\" data-listing-url=\"{{ path('admin_specific_price_list', { 'idProduct': 1 }) }}\" data-action-delete=\"{{ path('admin_delete_specific_price', { 'idSpecificPrice': 1 }) }}\" data-action-edit=\"{{ path('admin_get_specific_price_update_form', { 'idSpecificPrice': 1 }) }}\">
            <thead class=\"thead-default\">
              <tr>
                <th>{{ 'ID'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Rule'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Currency'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Country'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Group'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Customer'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'Fixed price'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Impact'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th>{{ 'Period'|trans({}, 'Admin.Global') }}</th>
                <th>{{ 'From'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th></th>
                <th></th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>

    <div>
      {{ include('@Product/ProductPage/Forms/form_edit_specific_price_modal.html.twig') }}
    </div>

    <div class=\"row\">
      <div class=\"col-md-12\">
        <h2>
          {{ 'Priority management'|trans({}, 'Admin.Catalog.Feature') }}
          <span class=\"help-box\" 
                data-toggle=\"popover\" 
                data-content=\"{{ \"Sometimes one customer can fit into multiple price rules. Priorities allow you to define which rules apply first.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </h2>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>{{ 'Priorities'|trans({}, 'Admin.Catalog.Feature') }}</label>
          {{ form_errors(pricingForm.specificPricePriority_0) }}
          {{ form_widget(pricingForm.specificPricePriority_0) }}
        </fieldset>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>&nbsp;</label>
          {{ form_errors(pricingForm.specificPricePriority_1) }}
          {{ form_widget(pricingForm.specificPricePriority_1) }}
        </fieldset>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>&nbsp;</label>
          {{ form_errors(pricingForm.specificPricePriority_2) }}
          {{ form_widget(pricingForm.specificPricePriority_2) }}
        </fieldset>
      </div>
      <div class=\"col-md-3\">
        <fieldset class=\"form-group\">
          <label>&nbsp;</label>
          {{ form_errors(pricingForm.specificPricePriority_3) }}
          {{ form_widget(pricingForm.specificPricePriority_3) }}
        </fieldset>
      </div>
      <div class=\"col-md-12\">
        {{ form_widget(pricingForm.specificPricePriorityToAll) }}
      </div>
    </div>

    {{ renderhook('displayAdminProductsPriceStepBottom', { 'id_product': productId }) }}

  </div>
</div>
", "@Product/ProductPage/Panels/pricing.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/pricing.html.twig");
    }
}
