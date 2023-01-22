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

/* @PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig */
class __TwigTemplate_5c30c46072f68eb2d2eef41c6facf2fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_catalog_form_table_row' => [$this, 'block_product_catalog_form_table_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig"));

        // line 25
        echo "<tbody
    ";
        // line 26
        if ((isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 26, $this->source); })())) {
            echo "class=\"sortable\"";
        }
        // line 27
        echo "    last_sql=\"";
        echo twig_escape_filter($this->env, (isset($context["last_sql_query"]) || array_key_exists("last_sql_query", $context) ? $context["last_sql_query"] : (function () { throw new RuntimeError('Variable "last_sql_query" does not exist.', 27, $this->source); })()), "html_attr");
        echo "\"
>
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 30
            echo "    ";
            $this->displayBlock('product_catalog_form_table_row', $context, $blocks);
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 142
            echo "<tr><td colspan=\"11\">
        ";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no result for this search. Update your filters to view other products.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "
    </td></tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_product_catalog_form_table_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form_table_row"));

        // line 31
        echo "    <tr data-uniturl=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "unit_action_url", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "unit_action_url", [], "any", false, false, false, 31), "#")) : ("#")), "html", null, true);
        echo "\" data-product-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 31, $this->source); })()), "id_product", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "id_product", [], "any", false, false, false, 35), "html", null, true);
        echo "\" name=\"bulk_action_selected_products[]\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 35, $this->source); })()), "id_product", [], "any", false, false, false, 35), "html", null, true);
        echo "\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "id_product", [], "any", false, false, false, 41), "html", null, true);
        echo "\">
                ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 42, $this->source); })()), "id_product", [], "any", false, false, false, 42), "html", null, true);
        echo "
            </label>
        </td>
        <td>
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", true, true, false, 46)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, false, 46), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 46, $this->source); })()), "image", [], "any", false, false, false, 46);
        echo "</a>
        </td>
        <td>
            <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
        echo "#tab-step1\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 49), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td>
            ";
        // line 52
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reference", [], "any", true, true, false, 52)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "reference", [], "any", false, false, false, 52), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td>
            ";
        // line 55
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name_category", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name_category", [], "any", false, false, false, 55), "")) : ("")), "html", null, true);
        echo "
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, false, 58), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 58), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>
        <td class=\"text-center\">
            <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, false, 61), "")) : ("")), "html", null, true);
        echo "#tab-step2\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_final", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price_final", [], "any", false, false, false, 61), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
        echo "</a>
        </td>

        ";
        // line 64
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 65
            echo "            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sav_quantity", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sav_quantity", [], "any", false, false, false, 65), "")) : ("")), "html", null, true);
            echo "\">
                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", true, true, false, 66)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, false, 66), "")) : ("")), "html", null, true);
            echo "#tab-step3\">
                    ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sav_quantity", [], "any", true, true, false, 67) && (twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 67, $this->source); })()), "sav_quantity", [], "any", false, false, false, 67) > 0))) {
                // line 68
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 68, $this->source); })()), "sav_quantity", [], "any", false, false, false, 68), "html", null, true);
                echo "
                    ";
            } else {
                // line 70
                echo "                        ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sav_quantity", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "sav_quantity", [], "any", false, false, false, 70), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("N/A", [], "Admin.Global"))), "html", null, true);
                echo "
                    ";
            }
            // line 72
            echo "                </a>
            </td>
        ";
        } else {
            // line 75
            echo "            <td></td>
        ";
        }
        // line 77
        echo "        <td class=\"text-center\">

          <div
            class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center\"
            onclick=\"unitProductAction(this, ";
        // line 81
        if ((((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", true, true, false, 81)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 81), 0)) : (0)) == 0)) {
            echo "'activate'";
        } else {
            echo "'deactivate'";
        }
        echo ");\"
          >
          <input type=\"radio\" name=\"input-";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "id_product", [], "any", false, false, false, 83), "html", null, true);
        echo "\" id=\"input-false-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "id_product", [], "any", false, false, false, 83), "html", null, true);
        echo "\" value=\"0\" ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", true, true, false, 83)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 83), 0)) : (0)) == 0)) {
            echo "checked";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable %product_name% input", ["%product_name%" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 83, $this->source); })()), "name", [], "any", false, false, false, 83)], "Admin.Global"), "html", null, true);
        echo "\">
              <label for=\"input-false-";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 84, $this->source); })()), "id_product", [], "any", false, false, false, 84), "html", null, true);
        echo "\">Off</label>
              <input type=\"radio\" name=\"input-";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "id_product", [], "any", false, false, false, 85), "html", null, true);
        echo "\" id=\"input-true-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "id_product", [], "any", false, false, false, 85), "html", null, true);
        echo "\" value=\"1\" ";
        if ((((twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", true, true, false, 85)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "active", [], "any", false, false, false, 85), 0)) : (0)) != 0)) {
            echo "checked";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enable %product_name% input", ["%product_name%" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 85, $this->source); })()), "name", [], "any", false, false, false, 85)], "Admin.Global"), "html", null, true);
        echo "\">
              <label for=\"input-true-";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 86, $this->source); })()), "id_product", [], "any", false, false, false, 86), "html", null, true);
        echo "\">On</label>
              <span class=\"slide-button\"></span>
            </div>
      </td>
      ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "position", [], "any", true, true, false, 90)) {
            // line 91
            echo "          <td ";
            if ((isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 91, $this->source); })())) {
                echo "class=\"placeholder\"";
            }
            echo " style=\"cursor: pointer; cursor: hand;\">
              ";
            // line 92
            if ((isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 92, $this->source); })())) {
                // line 93
                echo "                  <big><big>⇅</big></big>
              ";
            }
            // line 95
            echo "              <span class=\"position\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 95, $this->source); })()), "position", [], "any", false, false, false, 95), "html", null, true);
            echo "</span>
              <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 96, $this->source); })()), "id_product", [], "any", false, false, false, 96), "html", null, true);
            echo "\" />
              <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 97, $this->source); })()), "position", [], "any", false, false, false, 97), "html", null, true);
            echo "\" />
          </td>
      ";
        }
        // line 100
        echo "      <td class=\"text-right\">
          <div class=\"btn-group-action\">

                ";
        // line 103
        $context["buttons_action"] = [0 => ["href" => ((twig_get_attribute($this->env, $this->source,         // line 105
($context["product"] ?? null), "preview_url", [], "any", true, true, false, 105)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "preview_url", [], "any", false, false, false, 105), "#")) : ("#")), "target" => "_blank", "icon" => "remove_red_eye", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Preview", [], "Admin.Actions")]];
        // line 111
        echo "
                ";
        // line 112
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) || array_key_exists("buttons_action", $context) ? $context["buttons_action"] : (function () { throw new RuntimeError('Variable "buttons_action" does not exist.', 112, $this->source); })()), [0 => ["onclick" => "unitProductAction(this, 'duplicate');", "icon" => "content_copy", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicate", [], "Admin.Actions")]]);
        // line 119
        echo "
                ";
        // line 120
        $context["buttons_action"] = twig_array_merge((isset($context["buttons_action"]) || array_key_exists("buttons_action", $context) ? $context["buttons_action"] : (function () { throw new RuntimeError('Variable "buttons_action" does not exist.', 120, $this->source); })()), [0 => ["onclick" => "unitProductAction(this, 'delete');", "icon" => "delete", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions")]]);
        // line 127
        echo "
                ";
        // line 128
        $this->loadTemplate("@Product/CatalogPage/Forms/form_edit_dropdown.html.twig", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", 128)->display(twig_array_merge($context, ["button_id" => (("product_list_id_" . twig_get_attribute($this->env, $this->source,         // line 129
(isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 129, $this->source); })()), "id_product", [], "any", false, false, false, 129)) . "_menu"), "default_item" => ["href" => ((twig_get_attribute($this->env, $this->source,         // line 131
($context["product"] ?? null), "url", [], "any", true, true, false, 131)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "url", [], "any", false, false, false, 131), "#")) : ("#")), "icon" => "mode_edit"], "right" => true, "items" =>         // line 135
(isset($context["buttons_action"]) || array_key_exists("buttons_action", $context) ? $context["buttons_action"] : (function () { throw new RuntimeError('Variable "buttons_action" does not exist.', 135, $this->source); })())]));
        // line 137
        echo "            </div>
        </td>
    </tr>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 137,  333 => 135,  332 => 131,  331 => 129,  330 => 128,  327 => 127,  325 => 120,  322 => 119,  320 => 112,  317 => 111,  315 => 105,  314 => 103,  309 => 100,  303 => 97,  299 => 96,  294 => 95,  290 => 93,  288 => 92,  281 => 91,  279 => 90,  272 => 86,  260 => 85,  256 => 84,  244 => 83,  235 => 81,  229 => 77,  225 => 75,  220 => 72,  214 => 70,  208 => 68,  206 => 67,  202 => 66,  197 => 65,  195 => 64,  187 => 61,  179 => 58,  173 => 55,  167 => 52,  159 => 49,  151 => 46,  144 => 42,  140 => 41,  129 => 35,  119 => 31,  109 => 30,  92 => 143,  89 => 142,  75 => 30,  57 => 29,  51 => 27,  47 => 26,  44 => 25,);
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
<tbody
    {% if activate_drag_and_drop %}class=\"sortable\"{% endif %}
    last_sql=\"{{ last_sql_query|escape('html_attr') }}\"
>
    {% for product in products %}
    {% block product_catalog_form_table_row %}
    <tr data-uniturl=\"{{ product.unit_action_url|default('#') }}\" data-product-id=\"{{ product.id_product }}\">
        <td class=\"checkbox-column form-group\">
            <div class=\"md-checkbox md-checkbox-inline\">
                <label>
                    <input type=\"checkbox\" id=\"bulk_action_selected_products-{{ product.id_product }}\" name=\"bulk_action_selected_products[]\" value=\"{{ product.id_product }}\">
                    <i class=\"md-checkbox-control\"></i>
                </label>
            </div>
        </td>
        <td>
            <label class=\"form-check-label\" for=\"bulk_action_selected_products-{{ product.id_product }}\">
                {{ product.id_product }}
            </label>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.image|raw }}</a>
        </td>
        <td>
            <a href=\"{{ product.url|default('') }}#tab-step1\">{{ product.name|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td>
            {{ product.reference|default('') }}
        </td>
        <td>
            {{ product.name_category|default('') }}
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>
        <td class=\"text-center\">
            <a href=\"{{ product.url|default('') }}#tab-step2\">{{ product.price_final|default('N/A'|trans({}, 'Admin.Global')) }}</a>
        </td>

        {% if configuration('PS_STOCK_MANAGEMENT') %}
            <td class=\"product-sav-quantity text-center\" data-product-quantity-value=\"{{ product.sav_quantity|default('') }}\">
                <a href=\"{{ product.url|default('') }}#tab-step3\">
                    {% if product.sav_quantity is defined and product.sav_quantity > 0 %}
                        {{ product.sav_quantity }}
                    {% else %}
                        {{ product.sav_quantity|default('N/A'|trans({}, 'Admin.Global')) }}
                    {% endif %}
                </a>
            </td>
        {% else %}
            <td></td>
        {% endif %}
        <td class=\"text-center\">

          <div
            class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center\"
            onclick=\"unitProductAction(this, {% if product.active|default(0) == 0 %}'activate'{% else %}'deactivate'{% endif %});\"
          >
          <input type=\"radio\" name=\"input-{{ product.id_product }}\" id=\"input-false-{{ product.id_product }}\" value=\"0\" {% if product.active|default(0) == 0 %}checked{% endif %} aria-label=\"{{ \"Disable %product_name% input\"|trans({'%product_name%': product.name}, 'Admin.Global') }}\">
              <label for=\"input-false-{{ product.id_product }}\">Off</label>
              <input type=\"radio\" name=\"input-{{ product.id_product }}\" id=\"input-true-{{ product.id_product }}\" value=\"1\" {% if product.active|default(0) != 0 %}checked{% endif %} aria-label=\"{{ \"Enable %product_name% input\"|trans({'%product_name%': product.name}, 'Admin.Global') }}\">
              <label for=\"input-true-{{ product.id_product }}\">On</label>
              <span class=\"slide-button\"></span>
            </div>
      </td>
      {% if product.position is defined %}
          <td {% if activate_drag_and_drop %}class=\"placeholder\"{% endif %} style=\"cursor: pointer; cursor: hand;\">
              {% if activate_drag_and_drop %}
                  <big><big>⇅</big></big>
              {% endif %}
              <span class=\"position\">{{ product.position }}</span>
              <input type=\"hidden\" name=\"mass_edit_action_sorted_products[]\" value=\"{{ product.id_product }}\" />
              <input type=\"hidden\" name=\"mass_edit_action_sorted_positions[]\" value=\"{{ product.position }}\" />
          </td>
      {% endif %}
      <td class=\"text-right\">
          <div class=\"btn-group-action\">

                {% set buttons_action = [
                    {
                        \"href\": product.preview_url|default('#'),
                        \"target\": \"_blank\",
                        \"icon\": \"remove_red_eye\",
                        \"label\": \"Preview\"|trans({}, 'Admin.Actions')
                    }
                ] %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'duplicate');\",
                        \"icon\": \"content_copy\",
                        \"label\": \"Duplicate\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% set buttons_action = buttons_action|merge([
                    {
                        \"onclick\": \"unitProductAction(this, 'delete');\",
                        \"icon\": \"delete\",
                        \"label\": \"Delete\"|trans({}, 'Admin.Actions')
                    }
                ]) %}

                {% include '@Product/CatalogPage/Forms/form_edit_dropdown.html.twig' with {
                    'button_id': \"product_list_id_\" ~ product.id_product ~ \"_menu\",
                    'default_item': {
                        \"href\": product.url|default('#'),
                        \"icon\": \"mode_edit\"
                    },
                    'right': true,
                    'items': buttons_action
                } %}
            </div>
        </td>
    </tr>
    {% endblock %}
{% else %}
<tr><td colspan=\"11\">
        {{ \"There is no result for this search. Update your filters to view other products.\"|trans({}, 'Admin.Catalog.Notification') }}
    </td></tr>
{% endfor %}
", "@PrestaShop/Admin/Product/CatalogPage/Lists/list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Lists/list.html.twig");
    }
}
