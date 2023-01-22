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

/* @Product/ProductPage/Forms/form_combinations.html.twig */
class __TwigTemplate_a49c5e83b3f49ac036a9d219bea23cc7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combinations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_combinations.html.twig"));

        // line 25
        echo "<div class=\"row\" id=\"combinations\">
  <div class=\"col-md-9\">
    <h2>
      ";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your product combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      <span
        class=\"help-box\"
        data-toggle=\"popover\"
        data-content=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. To create a combination, you need to create your product attributes first. Go to Catalog > Attributes & Features for this!", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"
      ></span>
    </h2>
    <div id=\"attributes-generator\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          ";
        // line 38
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1]. <br> When done, you may enter the wanted attributes (like \"size\" or \"color\") and their respective values (\"XS\", \"red\", \"all\", etc.) in the field below; or simply select them from the right column. Then click on \"%generate_label%\": it will automatically create all the combinations for you!", ["%attributes_and_features_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attributes & Features", [], "Admin.Navigation.Menu"), "%generate_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions")], "Admin.Catalog.Help"), ["[1]" => (("<a class=\"alert-link\" href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminAttributesGroups")) . "\" target=\"_blank\">"), "[/1]" => "</a>"]);
        echo "
        </p>
      </div>
      <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9\">
          <fieldset class=\"form-group\">
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "attributes", [], "any", false, false, false, 44), 'errors');
        echo "
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "attributes", [], "any", false, false, false, 45), 'widget');
        echo "
          </fieldset>
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <button class=\"btn btn-outline-primary\" id=\"create-combinations\">
            Generate
          </button>
        </div>
      </div>
    </div>

    <div id=\"combinations-bulk-form\">
      <p
        class=\"form-control bulk-action\"
        data-toggle=\"collapse\"
        href=\"#bulk-combinations-container\"
        aria-expanded=\"false\"
        aria-controls=\"bulk-combinations-container\"
      >
        ";
        // line 65
        echo "        <strong>";
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk actions ([1]/[2] combination(s) selected)", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"js-bulk-combinations\">0</span>", "[2]" => (("<span id=\"js-bulk-combinations-total\">" . (isset($context["combinations_count"]) || array_key_exists("combinations_count", $context) ? $context["combinations_count"] : (function () { throw new RuntimeError('Variable "combinations_count" does not exist.', 65, $this->source); })())) . "</span>")]);
        echo "</strong>
        <i class=\"material-icons float-right\">keyboard_arrow_down</i>
      </p>
      <div class=\"collapse js-collapse\" id=\"bulk-combinations-container\">
        <div class=\"border p-3\">
          ";
        // line 70
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_combinations_bulk.html.twig", ["form" => (isset($context["form_combination_bulk"]) || array_key_exists("form_combination_bulk", $context) ? $context["form_combination_bulk"] : (function () { throw new RuntimeError('Variable "form_combination_bulk" does not exist.', 70, $this->source); })())]);
        echo "
        </div>
      </div>
    </div>

    <div class=\"combinations-list\">
      <table class=\"table\">
        <thead class=\"thead-default\" id=\"combinations_thead\" ";
        // line 77
        if ( !(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 77, $this->source); })())) {
            echo "style=\"display: none;\"";
        }
        echo ">
          <tr>
            <th>
              <input type=\"checkbox\" id=\"toggle-all-combinations\" >
            </th>
            <th></th>
            <th>";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            <th>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Impact on price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            <th>";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Final price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
            ";
        // line 86
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 87
            echo "                <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
            ";
        }
        // line 89
        echo "            <th colspan=\"3\" class=\"text-sm-right\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default combination", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
        </thead>
        <tbody class=\"js-combinations-list panel-group accordion\" id=\"accordion_combinations\" data-action-delete-all=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_all_attributes", ["idProduct" => 1]);
        echo "\" data-weight-unit=\"";
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_WEIGHT_UNIT"), "html", null, true);
        echo "\" data-action-refresh-images=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_get_form_images_combination", ["idProduct" => 1]);
        echo "\"  data-id-product= ";
        echo twig_escape_filter($this->env, (isset($context["id_product"]) || array_key_exists("id_product", $context) ? $context["id_product"] : (function () { throw new RuntimeError('Variable "id_product" does not exist.', 92, $this->source); })()), "html", null, true);
        echo " data-ids-product-attribute=\"";
        echo twig_escape_filter($this->env, (isset($context["ids_product_attribute"]) || array_key_exists("ids_product_attribute", $context) ? $context["ids_product_attribute"] : (function () { throw new RuntimeError('Variable "ids_product_attribute" does not exist.', 92, $this->source); })()), "html", null, true);
        echo "\" data-combinations-url=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_combination_generate_form", ["combinationIds" => ":numbers"]);
        echo "\">
          ";
        // line 93
        if ((isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 93, $this->source); })())) {
            // line 94
            echo "            <tr class=\"combination loading timeline-wrapper\" id=\"loading-attribute\">
              <td class=\"timeline-item\" width=\"1%\">
              </td>
              <td class=\"timeline-item img\">
                <div class=\"animated-background\"></div>
              </td>
              <td>
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-price\">
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-finalprice\">
                <div class=\"animated-background\"></div>
              </td>
              ";
            // line 109
            if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
                // line 110
                echo "                <td class=\"attribute-quantity\">
                  <div class=\"animated-background\"></div>
                </td>
              ";
            }
            // line 114
            echo "              <td colspan=\"6\"></td>
            </tr>
          ";
        }
        // line 117
        echo "        </tbody>
      </table>
    </div>
  </div>

  <div id=\"attributes-list\" class=\"col-md-3\">
    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) || array_key_exists("attribute_groups", $context) ? $context["attribute_groups"] : (function () { throw new RuntimeError('Variable "attribute_groups" does not exist.', 123, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
            // line 124
            echo "      <div class=\"attribute-group\">
        <a
          class=\"attribute-group-name ";
            // line 126
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 126) > 3) || (isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 126, $this->source); })()))) {
                echo " collapsed ";
            }
            echo "\"
          data-toggle=\"collapse\"
          href=\"#attribute-group-";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "id", [], "any", false, false, false, 128), "html", null, true);
            echo "\"
          aria-expanded=\"";
            // line 129
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 129) <= 3) ||  !(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 129, $this->source); })()))) {
                echo "true";
            } else {
                echo "false";
            }
            echo "\"
        >
          ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 131), "html", null, true);
            echo "
        </a>
        <div class=\"collapse ";
            // line 133
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 133) <= 3) &&  !(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 133, $this->source); })()))) {
                echo " show ";
            }
            echo " attributes \" id=\"attribute-group-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "id", [], "any", false, false, false, 133), "html", null, true);
            echo "\">
          <div class=\"attributes-overflow ";
            // line 134
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attributes", [], "any", false, false, false, 134)) > 7)) {
                echo " two-columns ";
            }
            echo "\">
            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attributes", [], "any", false, false, false, 135));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 136
                echo "              <div class=\"attribute\">
                <input
                  class=\"js-attribute-checkbox\"
                  id=\"attribute-";
                // line 139
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "id", [], "any", false, false, false, 139), "html", null, true);
                echo "\"
                  data-label=\"";
                // line 140
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 140), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 140), "html", null, true);
                echo "\"
                  data-value=\"";
                // line 141
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "id", [], "any", false, false, false, 141), "html", null, true);
                echo "\"
                  data-group-id=\"";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute_group"], "id", [], "any", false, false, false, 142), "html", null, true);
                echo "\"
                  type=\"checkbox\"
                >
                <label class=\"attribute-label\" for=\"attribute-";
                // line 145
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "id", [], "any", false, false, false, 145), "html", null, true);
                echo "\">
                  <span
                    class=\"pretty-checkbox ";
                // line 147
                if ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["attribute"], "color", [], "any", false, false, false, 147)) && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["attribute"], "texture", [], "any", false, false, false, 147)))) {
                    echo " not-color ";
                }
                echo "\"
                    ";
                // line 148
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["attribute"], "texture", [], "any", false, false, false, 148))) {
                    echo " style=\"content: url(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "texture", [], "any", false, false, false, 148), "html", null, true);
                    echo ")\"
                    ";
                } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,                 // line 149
$context["attribute"], "color", [], "any", false, false, false, 149))) {
                    echo " style=\"background-color: ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "color", [], "any", false, false, false, 149), "html", null, true);
                    echo "\"
                    ";
                }
                // line 151
                echo "                  >
                  </span>
                  ";
                // line 153
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 153), "html", null, true);
                echo "
                </label>
              </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "          </div>
        </div>
      </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "  </div>
</div>

<div class=\"form-group\">
  <div class=\"row\">

    <div class=\"col-md-12\">
      <h2>";
        // line 168
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Availability preferences", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    </div>
    ";
        // line 170
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 171
            echo "      <div class=\"col-md-12\">
        <label class=\"form-control-label\">";
            // line 172
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Behavior when out of stock", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</label>
        ";
            // line 173
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "out_of_stock", [], "any", false, false, false, 173), 'errors');
            echo "
        ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "out_of_stock", [], "any", false, false, false, 174), 'widget');
            echo "
      </div>

      <div class=\"col-md-4\">
        <label class=\"form-control-label\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "available_now", [], "any", false, false, false, 178), "vars", [], "any", false, false, false, 178), "label", [], "any", false, false, false, 178), "html", null, true);
            echo "</label>
        ";
            // line 179
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 179, $this->source); })()), "available_now", [], "any", false, false, false, 179), 'errors');
            echo "
        ";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "available_now", [], "any", false, false, false, 180), 'widget');
            echo "
      </div>

      <div class=\"col-md-4 \">
        <label class=\"form-control-label\">";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "available_later", [], "any", false, false, false, 184), "vars", [], "any", false, false, false, 184), "label", [], "any", false, false, false, 184), "html", null, true);
            echo "</label>
        ";
            // line 185
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "available_later", [], "any", false, false, false, 185), 'errors');
            echo "
        ";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "available_later", [], "any", false, false, false, 186), 'widget');
            echo "
      </div>
    ";
        } else {
            // line 189
            echo "      <div class=\"col-md-12\">
        <h3>";
            // line 190
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock management is disabled", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h3>
      </div>
    ";
        }
        // line 193
        echo "
    ";
        // line 194
        if ( !(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 194, $this->source); })())) {
            // line 195
            echo "    <div class=\"col-md-4 \">
      <label class=\"form-control-label\">";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "available_date", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "label", [], "any", false, false, false, 196), "html", null, true);
            echo "</label>
      ";
            // line 197
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "available_date", [], "any", false, false, false, 197), 'errors');
            echo "
      ";
            // line 198
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "available_date", [], "any", false, false, false, 198), 'widget');
            echo "
    </div>
    ";
        }
        // line 201
        echo "
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  448 => 201,  442 => 198,  438 => 197,  434 => 196,  431 => 195,  429 => 194,  426 => 193,  420 => 190,  417 => 189,  411 => 186,  407 => 185,  403 => 184,  396 => 180,  392 => 179,  388 => 178,  381 => 174,  377 => 173,  373 => 172,  370 => 171,  368 => 170,  363 => 168,  354 => 161,  337 => 157,  327 => 153,  323 => 151,  316 => 149,  310 => 148,  304 => 147,  299 => 145,  293 => 142,  289 => 141,  283 => 140,  279 => 139,  274 => 136,  270 => 135,  264 => 134,  256 => 133,  251 => 131,  242 => 129,  238 => 128,  231 => 126,  227 => 124,  210 => 123,  202 => 117,  197 => 114,  191 => 110,  189 => 109,  172 => 94,  170 => 93,  156 => 92,  149 => 89,  143 => 87,  141 => 86,  137 => 85,  133 => 84,  129 => 83,  118 => 77,  108 => 70,  99 => 65,  77 => 45,  73 => 44,  64 => 38,  55 => 32,  48 => 28,  43 => 25,);
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
<div class=\"row\" id=\"combinations\">
  <div class=\"col-md-9\">
    <h2>
      {{ 'Manage your product combinations'|trans({}, 'Admin.Catalog.Feature') }}
      <span
        class=\"help-box\"
        data-toggle=\"popover\"
        data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. To create a combination, you need to create your product attributes first. Go to Catalog > Attributes & Features for this!\"|trans({}, 'Admin.Catalog.Help') }}\"
      ></span>
    </h2>
    <div id=\"attributes-generator\">
      <div class=\"alert alert-info\" role=\"alert\">
        <p class=\"alert-text\">
          {{ 'To add combinations, you first need to create proper attributes and values in [1]%attributes_and_features_label%[/1]. <br> When done, you may enter the wanted attributes (like \"size\" or \"color\") and their respective values (\"XS\", \"red\", \"all\", etc.) in the field below; or simply select them from the right column. Then click on \"%generate_label%\": it will automatically create all the combinations for you!'|trans({'%attributes_and_features_label%': 'Attributes & Features'|trans({}, 'Admin.Navigation.Menu'), '%generate_label%': 'Generate'|trans({}, 'Admin.Actions')}, 'Admin.Catalog.Help')|replace({'[1]': '<a class=\"alert-link\" href=\"' ~ getAdminLink(\"AdminAttributesGroups\") ~ '\" target=\"_blank\">', '[/1]': '</a>'})|raw }}
        </p>
      </div>
      <div class=\"row\">
        <div class=\"col-xl-10 col-lg-9\">
          <fieldset class=\"form-group\">
            {{ form_errors(form.attributes) }}
            {{ form_widget(form.attributes) }}
          </fieldset>
        </div>
        <div class=\"col-xl-2 col-lg-3\">
          <button class=\"btn btn-outline-primary\" id=\"create-combinations\">
            Generate
          </button>
        </div>
      </div>
    </div>

    <div id=\"combinations-bulk-form\">
      <p
        class=\"form-control bulk-action\"
        data-toggle=\"collapse\"
        href=\"#bulk-combinations-container\"
        aria-expanded=\"false\"
        aria-controls=\"bulk-combinations-container\"
      >
        {# First tag [1] is number of combinations selected. Second tag [2] is the total of combinations available. #}
        <strong>{{ 'Bulk actions ([1]/[2] combination(s) selected)'|trans({}, 'Admin.Catalog.Feature')|replace({ '[1]': '<span class=\"js-bulk-combinations\">0</span>', '[2]': '<span id=\"js-bulk-combinations-total\">' ~ combinations_count ~ '</span>' })|raw }}</strong>
        <i class=\"material-icons float-right\">keyboard_arrow_down</i>
      </p>
      <div class=\"collapse js-collapse\" id=\"bulk-combinations-container\">
        <div class=\"border p-3\">
          {{ include('@Product/ProductPage/Forms/form_combinations_bulk.html.twig', { 'form': form_combination_bulk }) }}
        </div>
      </div>
    </div>

    <div class=\"combinations-list\">
      <table class=\"table\">
        <thead class=\"thead-default\" id=\"combinations_thead\" {% if not has_combinations %}style=\"display: none;\"{% endif %}>
          <tr>
            <th>
              <input type=\"checkbox\" id=\"toggle-all-combinations\" >
            </th>
            <th></th>
            <th>{{ 'Combinations'|trans({}, 'Admin.Catalog.Feature') }}</th>
            <th>{{ 'Impact on price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
            <th>{{ 'Final price (tax excl.)'|trans({}, 'Admin.Catalog.Feature') }}</th>
            {% if configuration('PS_STOCK_MANAGEMENT') %}
                <th>{{ 'Quantity'|trans({}, 'Admin.Catalog.Feature') }}</th>
            {% endif %}
            <th colspan=\"3\" class=\"text-sm-right\">{{ 'Default combination'|trans({}, 'Admin.Catalog.Feature') }}</th>
          </tr>
        </thead>
        <tbody class=\"js-combinations-list panel-group accordion\" id=\"accordion_combinations\" data-action-delete-all=\"{{ path('admin_delete_all_attributes', { 'idProduct': 1 }) }}\" data-weight-unit=\"{{ configuration('PS_WEIGHT_UNIT') }}\" data-action-refresh-images=\"{{ path('admin_get_form_images_combination', { 'idProduct': 1 }) }}\"  data-id-product= {{ id_product }} data-ids-product-attribute=\"{{ ids_product_attribute }}\" data-combinations-url=\"{{ path('admin_combination_generate_form', { 'combinationIds': ':numbers' }) }}\">
          {% if has_combinations %}
            <tr class=\"combination loading timeline-wrapper\" id=\"loading-attribute\">
              <td class=\"timeline-item\" width=\"1%\">
              </td>
              <td class=\"timeline-item img\">
                <div class=\"animated-background\"></div>
              </td>
              <td>
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-price\">
                <div class=\"animated-background\"></div>
              </td>
              <td class=\"attribute-finalprice\">
                <div class=\"animated-background\"></div>
              </td>
              {% if configuration('PS_STOCK_MANAGEMENT') %}
                <td class=\"attribute-quantity\">
                  <div class=\"animated-background\"></div>
                </td>
              {% endif %}
              <td colspan=\"6\"></td>
            </tr>
          {% endif %}
        </tbody>
      </table>
    </div>
  </div>

  <div id=\"attributes-list\" class=\"col-md-3\">
    {% for attribute_group in attribute_groups %}
      <div class=\"attribute-group\">
        <a
          class=\"attribute-group-name {% if loop.index > 3 or has_combinations %} collapsed {% endif %}\"
          data-toggle=\"collapse\"
          href=\"#attribute-group-{{ attribute_group.id }}\"
          aria-expanded=\"{% if loop.index <= 3 or not has_combinations %}true{% else %}false{% endif %}\"
        >
          {{ attribute_group.name }}
        </a>
        <div class=\"collapse {% if loop.index <= 3 and not has_combinations %} show {% endif %} attributes \" id=\"attribute-group-{{ attribute_group.id }}\">
          <div class=\"attributes-overflow {% if attribute_group.attributes|length > 7 %} two-columns {% endif %}\">
            {% for attribute in attribute_group.attributes %}
              <div class=\"attribute\">
                <input
                  class=\"js-attribute-checkbox\"
                  id=\"attribute-{{ attribute.id }}\"
                  data-label=\"{{ attribute_group.name }} : {{ attribute.name }}\"
                  data-value=\"{{ attribute.id }}\"
                  data-group-id=\"{{ attribute_group.id }}\"
                  type=\"checkbox\"
                >
                <label class=\"attribute-label\" for=\"attribute-{{ attribute.id }}\">
                  <span
                    class=\"pretty-checkbox {% if attribute.color is empty and attribute.texture is empty %} not-color {% endif %}\"
                    {% if attribute.texture is not empty %} style=\"content: url({{ attribute.texture }})\"
                    {% elseif attribute.color is not empty %} style=\"background-color: {{ attribute.color }}\"
                    {% endif %}
                  >
                  </span>
                  {{ attribute.name }}
                </label>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>

<div class=\"form-group\">
  <div class=\"row\">

    <div class=\"col-md-12\">
      <h2>{{ 'Availability preferences'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    </div>
    {% if configuration('PS_STOCK_MANAGEMENT') %}
      <div class=\"col-md-12\">
        <label class=\"form-control-label\">{{ 'Behavior when out of stock'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.out_of_stock) }}
        {{ form_widget(form.out_of_stock) }}
      </div>

      <div class=\"col-md-4\">
        <label class=\"form-control-label\">{{ form.available_now.vars.label }}</label>
        {{ form_errors(form.available_now) }}
        {{ form_widget(form.available_now) }}
      </div>

      <div class=\"col-md-4 \">
        <label class=\"form-control-label\">{{ form.available_later.vars.label }}</label>
        {{ form_errors(form.available_later) }}
        {{ form_widget(form.available_later) }}
      </div>
    {% else %}
      <div class=\"col-md-12\">
        <h3>{{  'Stock management is disabled'|trans({}, 'Admin.Catalog.Feature') }}</h3>
      </div>
    {% endif %}

    {% if not has_combinations %}
    <div class=\"col-md-4 \">
      <label class=\"form-control-label\">{{ form.available_date.vars.label }}</label>
      {{ form_errors(form.available_date) }}
      {{ form_widget(form.available_date) }}
    </div>
    {% endif %}

  </div>
</div>
", "@Product/ProductPage/Forms/form_combinations.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_combinations.html.twig");
    }
}
