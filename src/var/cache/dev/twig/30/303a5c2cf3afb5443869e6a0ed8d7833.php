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

/* @Product/ProductPage/Forms/form_shipping.html.twig */
class __TwigTemplate_2a77aa5c0e7459960a8f800bf9899c03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_shipping.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_shipping.html.twig"));

        // line 25
        echo "
<div class=\"col-md-12 pb-1\">
  <h2>";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Package dimension", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
  <p class=\"subtitle\">";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Adjust your shipping costs by filling in the product dimensions.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "width", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "label", [], "any", false, false, false, 33), "html", null, true);
        echo "</label>
    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "width", [], "any", false, false, false, 34), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "width", [], "any", false, false, false, 36), 'widget');
        echo "
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "height", [], "any", false, false, false, 42), "vars", [], "any", false, false, false, 42), "label", [], "any", false, false, false, 42), "html", null, true);
        echo "</label>
    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "height", [], "any", false, false, false, 43), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "height", [], "any", false, false, false, 45), 'widget');
        echo "
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "depth", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "label", [], "any", false, false, false, 51), "html", null, true);
        echo "</label>
    ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "depth", [], "any", false, false, false, 52), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "depth", [], "any", false, false, false, 54), 'widget');
        echo "
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "weight", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "label", [], "any", false, false, false, 60), "html", null, true);
        echo "</label>
    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "weight", [], "any", false, false, false, 61), 'errors');
        echo "
    <div class=\"input-group\">
      ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "weight", [], "any", false, false, false, 63), 'widget');
        echo "
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "additional_delivery_times", [], "any", false, false, false, 71), "vars", [], "any", false, false, false, 71), "label", [], "any", false, false, false, 71), "html", null, true);
        echo "
      <span class=\"help-box\"
            data-toggle=\"popover\"
            data-content=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
      </span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" ";
        // line 78
        if (        $this->hasBlock("widget_container_attributes", $context, $blocks)) {
            echo " ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " ";
        }
        echo ">
          ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "additional_delivery_times", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 80
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80) == 1)) {
                // line 81
                echo "              <div class=\"widget-radio-inline\">
                ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
                <a href=\"";
                // line 83
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_preferences");
                echo "\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("edit", [], "Admin.Catalog.Help"), "html", null, true);
                echo "</a>
              </div>
            ";
            } else {
                // line 86
                echo "              ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
            }
            // line 88
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "delivery_in_stock", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "label", [], "any", false, false, false, 96), "html", null, true);
        echo "</label>
    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "delivery_in_stock", [], "any", false, false, false, 97), 'errors');
        echo "
    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "delivery_in_stock", [], "any", false, false, false, 98), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Leave empty to disable.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "delivery_out_stock", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
        echo "</label>
    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "delivery_out_stock", [], "any", false, false, false, 105), 'errors');
        echo "
    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "delivery_out_stock", [], "any", false, false, false, 106), 'widget');
        echo "
    <p class=\"subtitle italic\">";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Leave empty to disable.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      ";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "additional_shipping_cost", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "label", [], "any", false, false, false, 114), "html", null, true);
        echo "
      <span class=\"help-box\"
            data-toggle=\"popover\"
            data-content=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If a carrier has a tax, it will be added to the shipping fees. Does not apply to free shipping.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
      </span>
    </h2>
    <label class=\"form-control-label\">";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional shipping costs", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "additional_shipping_cost", [], "any", false, false, false, 123), 'widget');
        echo "
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "selectedCarriers", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "label", [], "any", false, false, false, 131), "html", null, true);
        echo "</h2>
    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "selectedCarriers", [], "any", false, false, false, 132), 'widget');
        echo "
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        ";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If no carrier is selected then all the carriers will be available for customers orders.", [], "Admin.Catalog.Notification");
        echo "
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_warehouse_refresh_product_warehouse_combination_form");
        echo "\">
    ";
        // line 146
        if ((((isset($context["asm_globally_activated"]) || array_key_exists("asm_globally_activated", $context) ? $context["asm_globally_activated"] : (function () { throw new RuntimeError('Variable "asm_globally_activated" does not exist.', 146, $this->source); })()) && (isset($context["isNotVirtual"]) || array_key_exists("isNotVirtual", $context) ? $context["isNotVirtual"] : (function () { throw new RuntimeError('Variable "isNotVirtual" does not exist.', 146, $this->source); })())) && (isset($context["isChecked"]) || array_key_exists("isChecked", $context) ? $context["isChecked"] : (function () { throw new RuntimeError('Variable "isChecked" does not exist.', 146, $this->source); })()))) {
            // line 147
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig", ["warehouses" => (isset($context["warehouses"]) || array_key_exists("warehouses", $context) ? $context["warehouses"] : (function () { throw new RuntimeError('Variable "warehouses" does not exist.', 147, $this->source); })()), "form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })())]);
            echo "
    ";
        }
        // line 149
        echo "  </div>
</div>

";
        // line 152
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsShippingStepBottom", ["id_product" => (isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 152, $this->source); })())]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_shipping.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 152,  303 => 149,  297 => 147,  295 => 146,  291 => 145,  282 => 139,  272 => 132,  268 => 131,  257 => 123,  251 => 120,  245 => 117,  239 => 114,  229 => 107,  225 => 106,  221 => 105,  217 => 104,  209 => 99,  205 => 98,  201 => 97,  197 => 96,  188 => 89,  182 => 88,  176 => 86,  168 => 83,  164 => 82,  161 => 81,  158 => 80,  154 => 79,  146 => 78,  139 => 74,  133 => 71,  122 => 63,  117 => 61,  113 => 60,  104 => 54,  99 => 52,  95 => 51,  86 => 45,  81 => 43,  77 => 42,  68 => 36,  63 => 34,  59 => 33,  51 => 28,  47 => 27,  43 => 25,);
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

<div class=\"col-md-12 pb-1\">
  <h2>{{ 'Package dimension'|trans({}, 'Admin.Catalog.Feature') }}</h2>
  <p class=\"subtitle\">{{ 'Adjust your shipping costs by filling in the product dimensions.'|trans({}, 'Admin.Catalog.Feature') }}</p>
</div>

<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.width.vars.label }}</label>
    {{ form_errors(form.width) }}
    <div class=\"input-group\">
      {{ form_widget(form.width) }}
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.height.vars.label }}</label>
    {{ form_errors(form.height) }}
    <div class=\"input-group\">
      {{ form_widget(form.height) }}
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.depth.vars.label }}</label>
    {{ form_errors(form.depth) }}
    <div class=\"input-group\">
      {{ form_widget(form.depth) }}
    </div>
  </div>
</div>
<div class=\"col-xl-2 col-lg-3\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.weight.vars.label }}</label>
    {{ form_errors(form.weight) }}
    <div class=\"input-group\">
      {{ form_widget(form.weight) }}
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_delivery_times.vars.label }}
      <span class=\"help-box\"
            data-toggle=\"popover\"
            data-content=\"{{ \"Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.\"|trans({}, 'Admin.Catalog.Help') }}\" >
      </span>
    </h2>
    <div class=\"row\">
       <div class=\"col-md-12\" {% if block('widget_container_attributes') is defined %} {{ block('widget_container_attributes') }} {% endif %}>
          {% for child in form.additional_delivery_times %}
            {% if child.vars.value == 1 %}
              <div class=\"widget-radio-inline\">
                {{ form_widget(child) }}
                <a href=\"{{ path('admin_product_preferences') }}\" class=\"btn sensitive px-0\" target=_blank><i class=\"material-icons\">open_in_new</i> {{ \"edit\"|trans({}, 'Admin.Catalog.Help') }}</a>
              </div>
            {% else %}
              {{ form_widget(child) }}
            {% endif %}
          {% endfor %}
        </div>
     </div>
  </div>
</div>

<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.delivery_in_stock.vars.label }}</label>
    {{ form_errors(form.delivery_in_stock) }}
    {{ form_widget(form.delivery_in_stock) }}
    <p class=\"subtitle italic\">{{ 'Leave empty to disable.'|trans({}, 'Admin.Catalog.Feature') }}</p>
  </div>
</div>
<div class=\"col-xl-6 col-lg-6\">
  <div class=\"form-group\">
    <label class=\"form-control-label\">{{ form.delivery_out_stock.vars.label }}</label>
    {{ form_errors(form.delivery_out_stock) }}
    {{ form_widget(form.delivery_out_stock) }}
    <p class=\"subtitle italic\">{{ 'Leave empty to disable.'|trans({}, 'Admin.Catalog.Feature') }}</p>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>
      {{ form.additional_shipping_cost.vars.label }}
      <span class=\"help-box\"
            data-toggle=\"popover\"
            data-content=\"{{ \"If a carrier has a tax, it will be added to the shipping fees. Does not apply to free shipping.\"|trans({}, 'Admin.Catalog.Help') }}\" >
      </span>
    </h2>
    <label class=\"form-control-label\">{{ 'Additional shipping costs'|trans({}, 'Admin.Catalog.Feature') }}</label>
    <div class=\"row\">
      <div class=\"col-md-2\">
        {{ form_widget(form.additional_shipping_cost) }}
      </div>
    </div>
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"form-group\">
    <h2>{{ form.selectedCarriers.vars.label }}</h2>
    {{ form_widget(form.selectedCarriers) }}
  </div>
</div>

<div class=\"col-md-12\">
  <div class=\"alert alert-warning\" role=\"alert\">
    <p class=\"alert-text\">
        {{ 'If no carrier is selected then all the carriers will be available for customers orders.'|trans({}, 'Admin.Catalog.Notification')|raw }}
    </p>
  </div>
</div>

<div class=\"col-md-12\">
  <div id=\"warehouse_combination_collection\" class=\"col-md-12 form-group\" data-url=\"{{ path('admin_warehouse_refresh_product_warehouse_combination_form') }}\">
    {% if asm_globally_activated and isNotVirtual and isChecked %}
      {{ include('@PrestaShop/Admin/Product/ProductPage/Forms/form_warehouse_combination.html.twig', { 'warehouses': warehouses, 'form': form }) }}
    {% endif %}
  </div>
</div>

{{ renderhook('displayAdminProductsShippingStepBottom', { 'id_product': id_product }) }}
", "@Product/ProductPage/Forms/form_shipping.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_shipping.html.twig");
    }
}
