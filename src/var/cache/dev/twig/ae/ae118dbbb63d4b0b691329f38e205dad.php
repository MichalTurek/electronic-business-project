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

/* @Product/ProductPage/Forms/form_combination.html.twig */
class __TwigTemplate_7d75394e4a60a3a5380a2d4d5211d6b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combination.html.twig"));

        // line 25
        echo "<tr class=\"combination loaded\" id=\"attribute_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "id_product_attribute", [], "any", false, false, false, 25), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "id_product_attribute", [], "any", false, false, false, 25), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "value", [], "any", false, false, false, 25), "id_product_attribute", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "id_product_attribute", [], "any", false, false, false, 26), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "id_product_attribute", [], "any", false, false, false, 26), "html", null, true);
        echo "\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["default_currency_symbol"]) || array_key_exists("default_currency_symbol", $context) ? $context["default_currency_symbol"] : (function () { throw new RuntimeError('Variable "default_currency_symbol" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</span>
            </div>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "attribute_price", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <div>
        <span class=\"final-price\" data-price=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "final_price", [], "any", false, false, false, 39), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "id_product_attribute", [], "any", false, false, false, 39), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "value", [], "any", false, false, false, 39), "final_price", [], "any", false, false, false, 39), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (isset($context["default_currency_symbol"]) || array_key_exists("default_currency_symbol", $context) ? $context["default_currency_symbol"] : (function () { throw new RuntimeError('Variable "default_currency_symbol" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "
      </div>
      ";
        // line 41
        if (($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_USE_ECOTAX") != 0)) {
            // line 42
            echo "        ";
            $context["attributeEcotax"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "value", [], "any", false, false, false, 42), "attribute_ecotax", [], "any", false, false, false, 42);
            // line 43
            echo "        ";
            if (((isset($context["attributeEcotax"]) || array_key_exists("attributeEcotax", $context) ? $context["attributeEcotax"] : (function () { throw new RuntimeError('Variable "attributeEcotax" does not exist.', 43, $this->source); })()) == 0)) {
                // line 44
                echo "          ";
                $context["attributeEcotax"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "vars", [], "any", false, false, false, 44), "value", [], "any", false, false, false, 44), "product_ecotax", [], "any", false, false, false, 44);
                // line 45
                echo "        ";
            }
            // line 46
            echo "        <div class=\"attribute-ecotax-preview";
            if (((isset($context["attributeEcotax"]) || array_key_exists("attributeEcotax", $context) ? $context["attributeEcotax"] : (function () { throw new RuntimeError('Variable "attributeEcotax" does not exist.', 46, $this->source); })()) == 0)) {
                echo " d-none";
            }
            echo "\">
          ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Ecotax", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
          <span class=\"attribute-ecotax\">";
            // line 48
            echo twig_escape_filter($this->env, twig_round((isset($context["attributeEcotax"]) || array_key_exists("attributeEcotax", $context) ? $context["attributeEcotax"] : (function () { throw new RuntimeError('Variable "attributeEcotax" does not exist.', 48, $this->source); })()), 2), "html", null, true);
            echo "</span> ";
            echo twig_escape_filter($this->env, (isset($context["default_currency_symbol"]) || array_key_exists("default_currency_symbol", $context) ? $context["default_currency_symbol"] : (function () { throw new RuntimeError('Variable "default_currency_symbol" does not exist.', 48, $this->source); })()), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 51
        echo "    </td>
    ";
        // line 52
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 53
            echo "      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "value", [], "any", false, false, false, 55), "attribute_quantity", [], "any", false, false, false, 55), "html", null, true);
            echo "\" class=\"form-control text-sm-right\">
          </div>
      </td>
    ";
        }
        // line 59
        echo "
    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "value", [], "any", false, false, false, 62), "id_product_attribute", [], "any", false, false, false, 62), "html", null, true);
        echo "\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "id_product_attribute", [], "any", false, false, false, 64), "html", null, true);
        echo "\" data=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "value", [], "any", false, false, false, 64), "id_product_attribute", [], "any", false, false, false, 64), "html", null, true);
        echo "\" class=\"combination-form hide\">
            <div class=\"nav\">
                ";
        // line 67
        echo "                <a class=\"btn-sensitive prev\"><i class=\"material-icons rtl-flip\">keyboard_arrow_left</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Prev. combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</a>
                <a class=\"next btn-sensitive\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <i class=\"material-icons rtl-flip\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel p-2\">
                <div class=\"float-left\">
                    <button type=\"button\" class=\"back-to-product btn btn-outline-secondary btn-back\"><i class=\"material-icons rtl-flip\">arrow_back</i> ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Back to product", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
                </div>
                <h2 class=\"title pt-2\">
                  ";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination details", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " -
                  ";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "value", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
        echo "
                </h2>
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "attribute_default", [], "any", false, false, false, 78), 'widget');
        echo "
                <div class=\"row\">
                  ";
        // line 80
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 81
            echo "                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "attribute_quantity", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "label", [], "any", false, false, false, 84), "html", null, true);
            echo "
                          </label>
                          ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "attribute_quantity", [], "any", false, false, false, 86), 'errors');
            echo "
                          ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "attribute_quantity", [], "any", false, false, false, 87), 'widget');
            echo "
                      </fieldset>
                    </div>
                  ";
        }
        // line 91
        echo "                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "available_date_attribute", [], "any", false, false, false, 93), "vars", [], "any", false, false, false, 93), "label", [], "any", false, false, false, 93), "html", null, true);
        echo "</label>
                          ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "available_date_attribute", [], "any", false, false, false, 94), 'errors');
        echo "
                          ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "available_date_attribute", [], "any", false, false, false, 95), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            ";
        // line 101
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "attribute_minimal_quantity", [], "any", false, false, false, 101), "vars", [], "any", false, false, false, 101), "label", [], "any", false, false, false, 101), "html", null, true);
        echo "
                            <span class=\"help-box\"
                                  data-toggle=\"popover\"
                                  data-content=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
                            </span>
                          </label>
                          ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "attribute_minimal_quantity", [], "any", false, false, false, 107), 'errors');
        echo "
                          ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "attribute_minimal_quantity", [], "any", false, false, false, 108), 'widget');
        echo "
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "attribute_reference", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "label", [], "any", false, false, false, 113), "html", null, true);
        echo "</label>
                          ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "attribute_reference", [], "any", false, false, false, 114), 'errors');
        echo "
                          ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "attribute_reference", [], "any", false, false, false, 115), 'widget');
        echo "
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 125
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "attribute_location", [], "any", false, false, false, 125), "vars", [], "any", false, false, false, 125), "label", [], "any", false, false, false, 125), "html", null, true);
        echo "</label>
                      ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "attribute_location", [], "any", false, false, false, 126), 'errors');
        echo "
                      ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "attribute_location", [], "any", false, false, false, 127), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "attribute_low_stock_threshold", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "label", [], "any", false, false, false, 132), "html", null, true);
        echo "</label>
                      ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "attribute_low_stock_threshold", [], "any", false, false, false, 133), 'errors');
        echo "
                      ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "attribute_low_stock_threshold", [], "any", false, false, false, 134), 'widget');
        echo "
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "attribute_low_stock_alert", [], "any", false, false, false, 141), 'errors');
        echo "
                        ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "attribute_low_stock_alert", [], "any", false, false, false, 142), 'widget');
        echo "
                        <span class=\"help-box\"
                              data-toggle=\"popover\"
                              data-html=\"true\"
                              data-content=\"";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", ["[1]" => (("<a href=&quot;" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "\" >
                        </span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price and impact", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "attribute_wholesale_price", [], "any", false, false, false, 158), "vars", [], "any", false, false, false, 158), "label", [], "any", false, false, false, 158), "html", null, true);
        echo "</label>
                            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "attribute_wholesale_price", [], "any", false, false, false, 159), 'errors');
        echo "
                            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "attribute_wholesale_price", [], "any", false, false, false, 160), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "attribute_price", [], "any", false, false, false, 166), "vars", [], "any", false, false, false, 166), "label", [], "any", false, false, false, 166), "html", null, true);
        echo "
                              <span class=\"help-box\"
                                    data-toggle=\"popover\"
                                    data-content=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Does this combination have a different price? Is it cheaper or more expensive than the default retail price?", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
                              </span>
                            </label>
                            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "attribute_price", [], "any", false, false, false, 172), 'errors');
        echo "
                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "attribute_price", [], "any", false, false, false, 173), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 178
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "attribute_priceTI", [], "any", false, false, false, 178), "vars", [], "any", false, false, false, 178), "label", [], "any", false, false, false, 178), "html", null, true);
        echo "</label>
                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "attribute_priceTI", [], "any", false, false, false, 179), 'errors');
        echo "
                            ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "attribute_priceTI", [], "any", false, false, false, 180), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"form-control-label vcenter\">";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Final retail price (tax excl.) will be", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price\" data-price=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "vars", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184), "final_price", [], "any", false, false, false, 184), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "vars", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184), "id_product_attribute", [], "any", false, false, false, 184), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "vars", [], "any", false, false, false, 184), "value", [], "any", false, false, false, 184), "final_price", [], "any", false, false, false, 184), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (isset($context["default_currency_symbol"]) || array_key_exists("default_currency_symbol", $context) ? $context["default_currency_symbol"] : (function () { throw new RuntimeError('Variable "default_currency_symbol" does not exist.', 184, $this->source); })()), "html", null, true);
        echo "</div>
                      <div class=\"form-control-label vcenter\">";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Final retail price (tax incl.) will be", [], "Admin.Catalog.Feature"), "html", null, true);
        echo " <span class=\"final-price-tax-included\" data-price=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "final_price_tax_included", [], "any", false, false, false, 185), "html", null, true);
        echo "\" data-uniqid=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "id_product_attribute", [], "any", false, false, false, 185), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "final_price_tax_included", [], "any", false, false, false, 185), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, (isset($context["default_currency_symbol"]) || array_key_exists("default_currency_symbol", $context) ? $context["default_currency_symbol"] : (function () { throw new RuntimeError('Variable "default_currency_symbol" does not exist.', 185, $this->source); })()), "html", null, true);
        echo "</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 ";
        // line 189
        if (($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_USE_ECOTAX") != 1)) {
            echo "hide";
        }
        echo "\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 191
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "attribute_ecotax", [], "any", false, false, false, 191), "vars", [], "any", false, false, false, 191), "label", [], "any", false, false, false, 191), "html", null, true);
        echo "</label>
                            ";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "attribute_ecotax", [], "any", false, false, false, 192), 'errors');
        echo "
                            ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "attribute_ecotax", [], "any", false, false, false, 193), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 199
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "attribute_unity", [], "any", false, false, false, 199), "vars", [], "any", false, false, false, 199), "label", [], "any", false, false, false, 199), "html", null, true);
        echo "
                              <span class=\"help-box\"
                                    data-toggle=\"popover\"
                                    data-content=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Does this combination have a different price per unit?", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\" >
                              </span>
                            </label>
                            ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "attribute_unity", [], "any", false, false, false, 205), 'errors');
        echo "
                            ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "attribute_unity", [], "any", false, false, false, 206), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 211
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "attribute_weight", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "label", [], "any", false, false, false, 211), "html", null, true);
        echo "</label>
                            ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "attribute_weight", [], "any", false, false, false, 212), 'errors');
        echo "
                            ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "attribute_weight", [], "any", false, false, false, 213), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific references", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 223
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "attribute_isbn", [], "any", false, false, false, 223), "vars", [], "any", false, false, false, 223), "label", [], "any", false, false, false, 223), "html", null, true);
        echo "</label>
                            ";
        // line 224
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), "attribute_isbn", [], "any", false, false, false, 224), 'errors');
        echo "
                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "attribute_isbn", [], "any", false, false, false, 225), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              ";
        // line 231
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "attribute_ean13", [], "any", false, false, false, 231), "vars", [], "any", false, false, false, 231), "label", [], "any", false, false, false, 231), "html", null, true);
        echo "
                              <span class=\"help-box\"
                                    data-toggle=\"popover\"
                                    data-content=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
                              </span>
                            </label>
                            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "attribute_ean13", [], "any", false, false, false, 237), 'errors');
        echo "
                            ";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "attribute_ean13", [], "any", false, false, false, 238), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 243
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "attribute_upc", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "label", [], "any", false, false, false, 243), "html", null, true);
        echo "</label>
                            ";
        // line 244
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "attribute_upc", [], "any", false, false, false, 244), 'errors');
        echo "
                            ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "attribute_upc", [], "any", false, false, false, 245), 'widget');
        echo "
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "attribute_mpn", [], "any", false, false, false, 250), "vars", [], "any", false, false, false, 250), "label", [], "any", false, false, false, 250), "html", null, true);
        echo "</label>
                            ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "attribute_mpn", [], "any", false, false, false, 251), 'errors');
        echo "
                            ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 252, $this->source); })()), "attribute_mpn", [], "any", false, false, false, 252), 'widget');
        echo "
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  ";
        // line 257
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Images", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
                </h2>

                <fieldset class=\"form-group js-combination-images\">
                    <label>
                        <small class=\"form-control-label\">";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "id_image_attr", [], "any", false, false, false, 262), "vars", [], "any", false, false, false, 262), "label", [], "any", false, false, false, 262), "html", null, true);
        echo "</small>
                        <small class=\"form-control-label number-of-images\"></small>
                    </label>
                    ";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "id_image_attr", [], "any", false, false, false, 265), 'errors');
        echo "
                    ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "id_image_attr", [], "any", false, false, false, 266), 'widget');
        echo "
                </fieldset>

                ";
        // line 269
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsCombinationBottom", ["id_product" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "vars", [], "any", false, false, false, 269), "value", [], "any", false, false, false, 269), "id_product", [], "any", false, false, false, 269), "id_product_attribute" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 269, $this->source); })()), "vars", [], "any", false, false, false, 269), "value", [], "any", false, false, false, 269), "id_product_attribute", [], "any", false, false, false, 269)]);
        echo "

                ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "id_product_attribute", [], "any", false, false, false, 271), 'widget');
        echo "
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_attribute", ["idProduct" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "vars", [], "any", false, false, false, 276), "value", [], "any", false, false, false, 276), "id_product", [], "any", false, false, false, 276)]), "html", null, true);
        echo "\" class=\"btn tooltip-link btn-sm delete\" data=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "vars", [], "any", false, false, false, 276), "value", [], "any", false, false, false, 276), "id_product_attribute", [], "any", false, false, false, 276), "html", null, true);
        echo "\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      ";
        // line 279
        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "vars", [], "any", false, false, false, 279), "value", [], "any", false, false, false, 279), "attribute_default", [], "any", false, false, false, 279) == 1)) ? ("checked") : (""));
        // line 280
        echo "      <input class=\"attribute-default\" type=\"radio\" ";
        echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 280, $this->source); })()), "html", null, true);
        echo " data-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "vars", [], "any", false, false, false, 280), "value", [], "any", false, false, false, 280), "id_product_attribute", [], "any", false, false, false, 280), "html", null, true);
        echo "\">
    </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 280,  616 => 279,  608 => 276,  600 => 271,  595 => 269,  589 => 266,  585 => 265,  579 => 262,  571 => 257,  563 => 252,  559 => 251,  555 => 250,  547 => 245,  543 => 244,  539 => 243,  531 => 238,  527 => 237,  521 => 234,  515 => 231,  506 => 225,  502 => 224,  498 => 223,  490 => 218,  482 => 213,  478 => 212,  474 => 211,  466 => 206,  462 => 205,  456 => 202,  450 => 199,  441 => 193,  437 => 192,  433 => 191,  426 => 189,  411 => 185,  399 => 184,  392 => 180,  388 => 179,  384 => 178,  376 => 173,  372 => 172,  366 => 169,  360 => 166,  351 => 160,  347 => 159,  343 => 158,  335 => 153,  325 => 146,  318 => 142,  314 => 141,  304 => 134,  300 => 133,  296 => 132,  288 => 127,  284 => 126,  280 => 125,  272 => 120,  264 => 115,  260 => 114,  256 => 113,  248 => 108,  244 => 107,  238 => 104,  232 => 101,  223 => 95,  219 => 94,  215 => 93,  211 => 91,  204 => 87,  200 => 86,  195 => 84,  190 => 81,  188 => 80,  183 => 78,  178 => 76,  174 => 75,  168 => 72,  161 => 68,  156 => 67,  149 => 64,  144 => 62,  139 => 59,  132 => 55,  128 => 53,  126 => 52,  123 => 51,  115 => 48,  111 => 47,  104 => 46,  101 => 45,  98 => 44,  95 => 43,  92 => 42,  90 => 41,  79 => 39,  71 => 34,  66 => 32,  59 => 28,  52 => 26,  43 => 25,);
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
<tr class=\"combination loaded\" id=\"attribute_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\">
  <td width=\"1%\"><input class=\"js-combination\" type=\"checkbox\" data-id=\"{{ form.vars.value.id_product_attribute }}\" data-index=\"{{ form.vars.value.id_product_attribute }}\"></td>
  <td class=\"img\"><div class=\"fake-img\"></div></td>
    <td>{{ form.vars.value.name }}</td>
    <td class=\"attribute-price\">
        <div class=\"input-group\">
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ default_currency_symbol }}</span>
            </div>
            <input type=\"text\" class=\"attribute_priceTE form-control text-sm-right\" value=\"{{ form.vars.value.attribute_price }}\">
        </div>
    </td>
    <td class=\"attribute-finalprice text-sm-right\">
      <div>
        <span class=\"final-price\" data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency_symbol }}
      </div>
      {% if 'PS_USE_ECOTAX'|configuration != 0 %}
        {% set attributeEcotax = form.vars.value.attribute_ecotax %}
        {% if attributeEcotax == 0 %}
          {% set attributeEcotax = form.vars.value.product_ecotax %}
        {% endif %}
        <div class=\"attribute-ecotax-preview{% if attributeEcotax == 0 %} d-none{% endif %}\">
          {{ 'Ecotax'|trans({}, 'Admin.Catalog.Feature') }}
          <span class=\"attribute-ecotax\">{{ attributeEcotax|round(2) }}</span> {{ default_currency_symbol }}
        </div>
      {% endif %}
    </td>
    {% if configuration('PS_STOCK_MANAGEMENT') %}
      <td class=\"attribute-quantity\">
          <div>
              <input type=\"text\" value=\"{{ form.vars.value.attribute_quantity }}\" class=\"form-control text-sm-right\">
          </div>
      </td>
    {% endif %}

    <td class=\"attribute-actions\">
        <div class=\"btn-group btn-group-sm\" role=\"group\">
            <a href=\"#combination_form_{{ form.vars.value.id_product_attribute }}\" class=\"btn btn-open tooltip-link btn-sm\"><i class=\"material-icons\">mode_edit</i></a>
        </div>
        <div id=\"combination_form_{{ form.vars.value.id_product_attribute }}\" data=\"{{ form.vars.value.id_product_attribute }}\" class=\"combination-form hide\">
            <div class=\"nav\">
                {# \"Prev.\" is short for \"Previous\" #}
                <a class=\"btn-sensitive prev\"><i class=\"material-icons rtl-flip\">keyboard_arrow_left</i> {{ 'Prev. combination'|trans({}, 'Admin.Catalog.Feature') }}</a>
                <a class=\"next btn-sensitive\">{{ 'Next combination'|trans({}, 'Admin.Catalog.Feature') }} <i class=\"material-icons rtl-flip\">keyboard_arrow_right</i></a>
            </div>
            <div class=\"panel p-2\">
                <div class=\"float-left\">
                    <button type=\"button\" class=\"back-to-product btn btn-outline-secondary btn-back\"><i class=\"material-icons rtl-flip\">arrow_back</i> {{ 'Back to product'|trans({}, 'Admin.Catalog.Feature') }}</button>
                </div>
                <h2 class=\"title pt-2\">
                  {{ \"Combination details\"|trans({}, 'Admin.Catalog.Feature') }} -
                  {{ form.vars.value.name }}
                </h2>
                {{ form_widget(form.attribute_default) }}
                <div class=\"row\">
                  {% if configuration('PS_STOCK_MANAGEMENT') %}
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_quantity.vars.label }}
                          </label>
                          {{ form_errors(form.attribute_quantity) }}
                          {{ form_widget(form.attribute_quantity) }}
                      </fieldset>
                    </div>
                  {% endif %}
                    <div class=\"col-md-3\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.available_date_attribute.vars.label }}</label>
                          {{ form_errors(form.available_date_attribute) }}
                          {{ form_widget(form.available_date_attribute) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-2\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">
                            {{ form.attribute_minimal_quantity.vars.label }}
                            <span class=\"help-box\"
                                  data-toggle=\"popover\"
                                  data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" >
                            </span>
                          </label>
                          {{ form_errors(form.attribute_minimal_quantity) }}
                          {{ form_widget(form.attribute_minimal_quantity) }}
                      </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                      <fieldset class=\"form-group\">
                          <label class=\"form-control-label\">{{ form.attribute_reference.vars.label }}</label>
                          {{ form_errors(form.attribute_reference) }}
                          {{ form_widget(form.attribute_reference) }}
                      </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ 'Stock'|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_location.vars.label }}</label>
                      {{ form_errors(form.attribute_location) }}
                      {{ form_widget(form.attribute_location) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-3\">
                    <fieldset class=\"form-group\">
                      <label class=\"form-control-label\">{{ form.attribute_low_stock_threshold.vars.label }}</label>
                      {{ form_errors(form.attribute_low_stock_threshold) }}
                      {{ form_widget(form.attribute_low_stock_threshold) }}
                    </fieldset>
                  </div>
                  <div class=\"col-md-9\">
                    <fieldset class=\"form-group widget-checkbox-inline\">
                      <label class=\"form-control-label\">&nbsp;</label>
                      <div class=\"widget-checkbox-inline\">
                        {{ form_errors(form.attribute_low_stock_alert) }}
                        {{ form_widget(form.attribute_low_stock_alert) }}
                        <span class=\"help-box\"
                              data-toggle=\"popover\"
                              data-html=\"true\"
                              data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\" >
                        </span>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Price and impact\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_wholesale_price.vars.label }}</label>
                            {{ form_errors(form.attribute_wholesale_price) }}
                            {{ form_widget(form.attribute_wholesale_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_price.vars.label }}
                              <span class=\"help-box\"
                                    data-toggle=\"popover\"
                                    data-content=\"{{ \"Does this combination have a different price? Is it cheaper or more expensive than the default retail price?\"|trans({}, 'Admin.Catalog.Help') }}\" >
                              </span>
                            </label>
                            {{ form_errors(form.attribute_price) }}
                            {{ form_widget(form.attribute_price) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_priceTI.vars.label }}</label>
                            {{ form_errors(form.attribute_priceTI) }}
                            {{ form_widget(form.attribute_priceTI) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                      <div class=\"form-control-label vcenter\">{{ \"Final retail price (tax excl.) will be\"|trans({}, 'Admin.Catalog.Feature') }} <span class=\"final-price\" data-price=\"{{ form.vars.value.final_price }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price }}</span> {{ default_currency_symbol }}</div>
                      <div class=\"form-control-label vcenter\">{{ \"Final retail price (tax incl.) will be\"|trans({}, 'Admin.Catalog.Feature') }} <span class=\"final-price-tax-included\" data-price=\"{{ form.vars.value.final_price_tax_included }}\" data-uniqid=\"{{ form.vars.value.id_product_attribute }}\">{{ form.vars.value.final_price_tax_included }}</span> {{ default_currency_symbol }}</div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-3 {% if configuration('PS_USE_ECOTAX') != 1 %}hide{% endif %}\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_ecotax.vars.label }}</label>
                            {{ form_errors(form.attribute_ecotax) }}
                            {{ form_widget(form.attribute_ecotax) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_unity.vars.label }}
                              <span class=\"help-box\"
                                    data-toggle=\"popover\"
                                    data-content=\"{{ \"Does this combination have a different price per unit?\"|trans({}, 'Admin.Catalog.Feature') }}\" >
                              </span>
                            </label>
                            {{ form_errors(form.attribute_unity) }}
                            {{ form_widget(form.attribute_unity) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-3\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_weight.vars.label }}</label>
                            {{ form_errors(form.attribute_weight) }}
                            {{ form_widget(form.attribute_weight) }}
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Specific references\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_isbn.vars.label }}</label>
                            {{ form_errors(form.attribute_isbn) }}
                            {{ form_widget(form.attribute_isbn) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">
                              {{ form.attribute_ean13.vars.label }}
                              <span class=\"help-box\"
                                    data-toggle=\"popover\"
                                    data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\" >
                              </span>
                            </label>
                            {{ form_errors(form.attribute_ean13) }}
                            {{ form_widget(form.attribute_ean13) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_upc.vars.label }}</label>
                            {{ form_errors(form.attribute_upc) }}
                            {{ form_widget(form.attribute_upc) }}
                        </fieldset>
                    </div>
                    <div class=\"col-md-4\">
                        <fieldset class=\"form-group\">
                            <label class=\"form-control-label\">{{ form.attribute_mpn.vars.label }}</label>
                            {{ form_errors(form.attribute_mpn) }}
                            {{ form_widget(form.attribute_mpn) }}
                        </fieldset>
                    </div>
                </div>
                <h2 class=\"title\">
                  {{ \"Images\"|trans({}, 'Admin.Catalog.Feature') }}
                </h2>

                <fieldset class=\"form-group js-combination-images\">
                    <label>
                        <small class=\"form-control-label\">{{ form.id_image_attr.vars.label }}</small>
                        <small class=\"form-control-label number-of-images\"></small>
                    </label>
                    {{ form_errors(form.id_image_attr) }}
                    {{ form_widget(form.id_image_attr) }}
                </fieldset>

                {{ renderhook('displayAdminProductsCombinationBottom', { 'id_product': form.vars.value.id_product, 'id_product_attribute': form.vars.value.id_product_attribute }) }}

                {{ form_widget(form.id_product_attribute) }}
            </div>
        </div>
    </td>
    <td width=\"5%\">
      <a href=\"{{ path('admin_delete_attribute', {'idProduct': form.vars.value.id_product}) }}\" class=\"btn tooltip-link btn-sm delete\" data=\"{{ form.vars.value.id_product_attribute }}\"><i class=\"material-icons\">delete</i></a>
    </td>
    <td>
      {% set checked = form.vars.value.attribute_default == 1 ? 'checked' : '' %}
      <input class=\"attribute-default\" type=\"radio\" {{ checked }} data-id=\"{{ form.vars.value.id_product_attribute }}\">
    </td>
</tr>
", "@Product/ProductPage/Forms/form_combination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combination.html.twig");
    }
}
