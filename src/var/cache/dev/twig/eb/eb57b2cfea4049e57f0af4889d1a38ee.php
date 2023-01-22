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

/* @Product/ProductPage/Panels/essentials.html.twig */
class __TwigTemplate_de9cd1642091cec2a70302fe007bcbe4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/essentials.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/essentials.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
  <div class=\"container-fluid\">
    <div
      class=\"row\">

      ";
        // line 31
        echo "      <div class=\"col-md-9 left-column\">

        <div id=\"js_form_step1_inputPackItems\">
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPackItems"]) || array_key_exists("formPackItems", $context) ? $context["formPackItems"] : (function () { throw new RuntimeError('Variable "formPackItems" does not exist.', 34, $this->source); })()), 'errors');
        echo "
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPackItems"]) || array_key_exists("formPackItems", $context) ? $context["formPackItems"] : (function () { throw new RuntimeError('Variable "formPackItems" does not exist.', 35, $this->source); })()), 'widget');
        echo "
        </div>

        <div id=\"product-images-container\" class=\"mb-4\">
          <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\" 
               url-upload=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_upload", ["idProduct" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 40, $this->source); })())]), "html", null, true);
        echo "\" 
               url-position=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_positions");
        echo "\" 
               data-max-size=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_LIMIT_UPLOAD_IMAGE_VALUE"), "html", null, true);
        echo "\">
            <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
            <div class=\"dz-default dz-message openfilemanager\">
              <i class=\"material-icons\">add_a_photo</i><br/>
              ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 46, $this->source); })()), "Drop images here", [], "array", false, false, false, 46), "html", null, true);
        echo "<br/>
              <a>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 47, $this->source); })()), "or select files", [], "array", false, false, false, 47), "html", null, true);
        echo "</a><br/>
              <small>
                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 49, $this->source); })()), "files recommandations", [], "array", false, false, false, 49), "html", null, true);
        echo "<br/>
                ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 50, $this->source); })()), "files recommandations2", [], "array", false, false, false, 50), "html", null, true);
        echo "
              </small>
            </div>
            ";
        // line 53
        if (array_key_exists("images", $context)) {
            // line 54
            echo "              ";
            if ((isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 54, $this->source); })())) {
                // line 55
                echo "                <div class=\"dz-preview disabled openfilemanager\">
                  <div>
                    <span>+</span>
                  </div>
                </div>
              ";
            }
            // line 61
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 62
                echo "                <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 62), "html", null, true);
                echo "\" 
                     url-delete=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_delete", ["idImage" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                echo "\" 
                     url-update=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_image_form", ["idImage" => twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                echo "\">
                  <div class=\"dz-image bg\" style=\"background-image: url('";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "base_image_url", [], "any", false, false, false, 65), "html", null, true);
                echo "-home_default.";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "format", [], "any", false, false, false, 65), "html", null, true);
                echo "');\"></div>
                  <div class=\"dz-details\">
                    <div class=\"dz-size\">
                      <span data-dz-size=\"\"></span>
                    </div>
                    <div class=\"dz-filename\">
                      <span data-dz-name=\"\"></span>
                    </div>
                  </div>
                  <div class=\"dz-progress\">
                    <span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span>
                  </div>
                  <div class=\"dz-error-message\">
                    <span data-dz-errormessage=\"\"></span>
                  </div>
                  <div class=\"dz-success-mark\"></div>
                  <div class=\"dz-error-mark\"></div>
                  ";
                // line 82
                if (twig_get_attribute($this->env, $this->source, $context["image"], "cover", [], "any", false, false, false, 82)) {
                    // line 83
                    echo "                    <div class=\"iscover\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cover", [], "Admin.Catalog.Feature"), "html", null, true);
                    echo "</div>
                  ";
                }
                // line 85
                echo "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "            ";
        }
        // line 88
        echo "          </div>
          <div id=\"product-images-form-container\" class=\"col-md-4\">
            <div id=\"product-images-form\"></div>
          </div>
          <div class=\"dropzone-expander text-sm-center col-md-12\">
            <span class=\"expand\">";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all images", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
            <span class=\"compress\">";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View less", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </div>

        </div>

        <div class=\"summary-description-container\">
          <h2>";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Summary", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
          <div id=\"description_short\" class=\"mb-3\">
            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formShortDescription"]) || array_key_exists("formShortDescription", $context) ? $context["formShortDescription"] : (function () { throw new RuntimeError('Variable "formShortDescription" does not exist.', 102, $this->source); })()), 'widget');
        echo "
          </div>

          <h2>";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "html", null, true);
        echo "</h2>
          <div id=\"description\" class=\"mb-3\">
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formDescription"]) || array_key_exists("formDescription", $context) ? $context["formDescription"] : (function () { throw new RuntimeError('Variable "formDescription" does not exist.', 107, $this->source); })()), 'widget');
        echo "
          </div>
        </div>

        ";
        // line 111
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsMainStepLeftColumnMiddle", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 111, $this->source); })())]);
        echo "

        <div id=\"features\" class=\"mb-3\">
          <div id=\"features-content\" class=\"content ";
        // line 114
        echo (((twig_length_filter($this->env, (isset($context["formFeatures"]) || array_key_exists("formFeatures", $context) ? $context["formFeatures"] : (function () { throw new RuntimeError('Variable "formFeatures" does not exist.', 114, $this->source); })())) == 0)) ? ("hide") : (""));
        echo "\">
            <h2>";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formFeatures"]) || array_key_exists("formFeatures", $context) ? $context["formFeatures"] : (function () { throw new RuntimeError('Variable "formFeatures" does not exist.', 116, $this->source); })()), 'errors');
        echo "
            <div class=\"feature-collection nostyle\" data-prototype=\"";
        // line 117
        ob_start();
        echo " ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_feature.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formFeatures"]) || array_key_exists("formFeatures", $context) ? $context["formFeatures"] : (function () { throw new RuntimeError('Variable "formFeatures" does not exist.', 117, $this->source); })()), "vars", [], "any", false, false, false, 117), "prototype", [], "any", false, false, false, 117)]);
        echo " ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_parse_0_);
        echo "\">
              ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formFeatures"]) || array_key_exists("formFeatures", $context) ? $context["formFeatures"] : (function () { throw new RuntimeError('Variable "formFeatures" does not exist.', 118, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
            // line 119
            echo "                ";
            echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_feature.html.twig", ["form" => $context["feature"]]);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4\">
              <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\">
                <i class=\"material-icons\">add_circle</i>
                ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a feature", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
            </div>
          </div>
        </div>

        <div id=\"manufacturer\" class=\"mb-3\">
          ";
        // line 133
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_manufacturer.html.twig", ["form" => (isset($context["formManufacturer"]) || array_key_exists("formManufacturer", $context) ? $context["formManufacturer"] : (function () { throw new RuntimeError('Variable "formManufacturer" does not exist.', 133, $this->source); })())]);
        echo "
        </div>

        <div id=\"related-product\" class=\"mb-3\">
          ";
        // line 137
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_related_products.html.twig", ["form" => (isset($context["formRelatedProducts"]) || array_key_exists("formRelatedProducts", $context) ? $context["formRelatedProducts"] : (function () { throw new RuntimeError('Variable "formRelatedProducts" does not exist.', 137, $this->source); })())]);
        echo "
        </div>

        ";
        // line 140
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsMainStepLeftColumnBottom", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 140, $this->source); })())]);
        echo "

      </div>

      ";
        // line 145
        echo "      <div class=\"col-md-3 right-column\">

        ";
        // line 147
        if ((isset($context["is_combination_active"]) || array_key_exists("is_combination_active", $context) ? $context["is_combination_active"] : (function () { throw new RuntimeError('Variable "is_combination_active" does not exist.', 147, $this->source); })())) {
            // line 148
            echo "          <div class=\"form-group mb-3\" id=\"show_variations_selector\">
            <h2>
              ";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
              <span class=\"help-box\" 
                    data-toggle=\"popover\" 
                    data-content=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">
              </span>
            </h2>
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"show_variations\" value=\"0\" ";
            // line 158
            if ( !(isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 158, $this->source); })())) {
                echo " checked=\"checked\" ";
            }
            echo ">
                ";
            // line 159
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Simple product", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
              </label>
            </div>
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"show_variations\" value=\"1\" ";
            // line 164
            if ((isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 164, $this->source); })())) {
                echo " checked=\"checked\" ";
            }
            echo ">
                ";
            // line 165
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product with combinations", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
              </label>
              <div id=\"product_type_combinations_shortcut\">
                <span
                  class=\"small font-secondary\">
                  ";
            // line 171
            echo "                  ";
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced settings in [1][2]Combinations[/1]", [], "Admin.Catalog.Help"), ["[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').click();\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"]);
            echo "
                </span>
              </div>
            </div>
          </div>
        ";
        }
        // line 177
        echo "
        <div class=\"form-group mb-4\">
          <h2>
            ";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reference", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
            <span class=\"help-box\" 
                  data-toggle=\"popover\" 
                  data-content=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your reference code for this product. Allowed special characters: .-_#.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
            </span>
          </h2>
          ";
        // line 186
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formReference"]) || array_key_exists("formReference", $context) ? $context["formReference"] : (function () { throw new RuntimeError('Variable "formReference" does not exist.', 186, $this->source); })()), 'errors');
        echo "
          <div class=\"row\">
            <div class=\"col-lg-12\" id=\"product_reference_field\">
              ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formReference"]) || array_key_exists("formReference", $context) ? $context["formReference"] : (function () { throw new RuntimeError('Variable "formReference" does not exist.', 189, $this->source); })()), 'widget');
        echo "
            </div>
          </div>
        </div>

        ";
        // line 194
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 195
            echo "          <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
            <h2>
              ";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantity", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
              <span class=\"help-box\" 
                    data-toggle=\"popover\" 
                    data-content=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("How many products should be available for sale?", [], "Admin.Catalog.Help"), "html", null, true);
            echo "\">
              </span>
            </h2>
            ";
            // line 203
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formQuantityShortcut"]) || array_key_exists("formQuantityShortcut", $context) ? $context["formQuantityShortcut"] : (function () { throw new RuntimeError('Variable "formQuantityShortcut" does not exist.', 203, $this->source); })()), 'errors');
            echo "
            <div class=\"row\">
              <div class=\"col-xl-6 col-lg-12\">
                ";
            // line 206
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formQuantityShortcut"]) || array_key_exists("formQuantityShortcut", $context) ? $context["formQuantityShortcut"] : (function () { throw new RuntimeError('Variable "formQuantityShortcut" does not exist.', 206, $this->source); })()), 'widget');
            echo "
              </div>
            </div>
            <span
              class=\"small font-secondary\">
              ";
            // line 212
            echo "              ";
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced settings in [1][2]Quantities[/1]", [], "Admin.Catalog.Help"), ["[1]" => "<a href=\"#tab-step3\" onclick=\"\$('a[href=\\'#step3\\']').click();\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"]);
            echo "
            </span>
          </div>
        ";
        }
        // line 216
        echo "
        <div class=\"form-group mb-4\">
          <h2>
            ";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Price", [], "Admin.Global"), "html", null, true);
        echo "
            <span class=\"help-box\" 
                  data-toggle=\"popover\" 
                  data-content=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
            </span>
          </h2>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <label class=\"form-control-label\">";
        // line 227
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax excluded", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
              ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcut"]) || array_key_exists("formPriceShortcut", $context) ? $context["formPriceShortcut"] : (function () { throw new RuntimeError('Variable "formPriceShortcut" does not exist.', 228, $this->source); })()), 'widget');
        echo "
              ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcut"]) || array_key_exists("formPriceShortcut", $context) ? $context["formPriceShortcut"] : (function () { throw new RuntimeError('Variable "formPriceShortcut" does not exist.', 229, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"col-md-6 col-offset-md-1\">
              <label class=\"form-control-label\">";
        // line 232
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax included", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
              ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcutTTC"]) || array_key_exists("formPriceShortcutTTC", $context) ? $context["formPriceShortcutTTC"] : (function () { throw new RuntimeError('Variable "formPriceShortcutTTC" does not exist.', 233, $this->source); })()), 'widget');
        echo "
              ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPriceShortcutTTC"]) || array_key_exists("formPriceShortcutTTC", $context) ? $context["formPriceShortcutTTC"] : (function () { throw new RuntimeError('Variable "formPriceShortcutTTC" does not exist.', 234, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"col-md-12 mt-1\">
              <label class=\"form-control-label\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
              ";
        // line 238
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PrestaShopBundle:Admin/Common:renderField", ["formName" => "step2", "formType" => "PrestaShopBundle\\Form\\Admin\\Product\\ProductPrice", "fieldName" => "id_tax_rules_group", "fieldData" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 243
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "step2", [], "any", false, false, false, 243), "id_tax_rules_group", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243)]));
        // line 247
        echo "
            </div>
            <div class=\"col-md-12\">
              <span
                class=\"small font-secondary\">
                ";
        // line 253
        echo "                ";
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Advanced settings in [1][2]Pricing[/1]", [], "Admin.Catalog.Help"), ["[1]" => "<a href=\"#tab-step2\" onclick=\"\$('a[href=\\'#step2\\']').click();\" class=\"btn sensitive px-0\">", "[/1]" => "</a>", "[2]" => "<i class=\"material-icons\">open_in_new</i>"]);
        echo "
              </span>
            </div>
          </div>
          <div class=\"row hide\">
            <div class=\"col-md-12\">
              <label>";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tax rule", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-md-11\" id=\"tax_rule_shortcut\"></div>
            <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
          </div>
        </div>

        <div class=\"form-group mb-4\" id=\"categories\">
          ";
        // line 268
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_categories.html.twig", ["form" => (isset($context["formCategories"]) || array_key_exists("formCategories", $context) ? $context["formCategories"] : (function () { throw new RuntimeError('Variable "formCategories" does not exist.', 268, $this->source); })()), "productId" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 268, $this->source); })())]);
        echo "
        </div>

        ";
        // line 271
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsMainStepRightColumnBottom", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 271, $this->source); })())]);
        echo "

      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/essentials.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  535 => 271,  529 => 268,  517 => 259,  507 => 253,  500 => 247,  498 => 243,  497 => 238,  493 => 237,  487 => 234,  483 => 233,  479 => 232,  473 => 229,  469 => 228,  465 => 227,  457 => 222,  451 => 219,  446 => 216,  438 => 212,  430 => 206,  424 => 203,  418 => 200,  412 => 197,  408 => 195,  406 => 194,  398 => 189,  392 => 186,  386 => 183,  380 => 180,  375 => 177,  365 => 171,  357 => 165,  351 => 164,  343 => 159,  337 => 158,  329 => 153,  323 => 150,  319 => 148,  317 => 147,  313 => 145,  306 => 140,  300 => 137,  293 => 133,  284 => 127,  276 => 121,  259 => 119,  242 => 118,  233 => 117,  229 => 116,  225 => 115,  221 => 114,  215 => 111,  208 => 107,  203 => 105,  197 => 102,  192 => 100,  183 => 94,  179 => 93,  172 => 88,  169 => 87,  162 => 85,  156 => 83,  154 => 82,  132 => 65,  128 => 64,  124 => 63,  119 => 62,  114 => 61,  106 => 55,  103 => 54,  101 => 53,  95 => 50,  91 => 49,  86 => 47,  82 => 46,  75 => 42,  71 => 41,  67 => 40,  59 => 35,  55 => 34,  50 => 31,  43 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane active\" id=\"step1\">
  <div class=\"container-fluid\">
    <div
      class=\"row\">

      {# LEFT #}
      <div class=\"col-md-9 left-column\">

        <div id=\"js_form_step1_inputPackItems\">
          {{ form_errors(formPackItems) }}
          {{ form_widget(formPackItems) }}
        </div>

        <div id=\"product-images-container\" class=\"mb-4\">
          <div id=\"product-images-dropzone\" class=\"panel dropzone ui-sortable col-md-12\" 
               url-upload=\"{{ path('admin_product_image_upload', {'idProduct': productId}) }}\" 
               url-position=\"{{ path('admin_product_image_positions') }}\" 
               data-max-size=\"{{ configuration('PS_LIMIT_UPLOAD_IMAGE_VALUE') }}\">
            <div id=\"product-images-dropzone-error\" class=\"text-danger\"></div>
            <div class=\"dz-default dz-message openfilemanager\">
              <i class=\"material-icons\">add_a_photo</i><br/>
              {{js_translatable['Drop images here']}}<br/>
              <a>{{js_translatable['or select files']}}</a><br/>
              <small>
                {{js_translatable['files recommandations']}}<br/>
                {{js_translatable['files recommandations2']}}
              </small>
            </div>
            {% if images is defined %}
              {% if editable %}
                <div class=\"dz-preview disabled openfilemanager\">
                  <div>
                    <span>+</span>
                  </div>
                </div>
              {% endif %}
              {% for image in images %}
                <div class=\"dz-preview dz-processing dz-image-preview dz-complete ui-sortable-handle\" data-id=\"{{ image.id }}\" 
                     url-delete=\"{{ path('admin_product_image_delete', {'idImage': image.id}) }}\" 
                     url-update=\"{{ path('admin_product_image_form', {'idImage': image.id}) }}\">
                  <div class=\"dz-image bg\" style=\"background-image: url('{{ image.base_image_url }}-home_default.{{ image.format }}');\"></div>
                  <div class=\"dz-details\">
                    <div class=\"dz-size\">
                      <span data-dz-size=\"\"></span>
                    </div>
                    <div class=\"dz-filename\">
                      <span data-dz-name=\"\"></span>
                    </div>
                  </div>
                  <div class=\"dz-progress\">
                    <span class=\"dz-upload\" data-dz-uploadprogress=\"\" style=\"width: 100%;\"></span>
                  </div>
                  <div class=\"dz-error-message\">
                    <span data-dz-errormessage=\"\"></span>
                  </div>
                  <div class=\"dz-success-mark\"></div>
                  <div class=\"dz-error-mark\"></div>
                  {% if image.cover %}
                    <div class=\"iscover\">{{ 'Cover'|trans({}, 'Admin.Catalog.Feature') }}</div>
                  {% endif %}
                </div>
              {% endfor %}
            {% endif %}
          </div>
          <div id=\"product-images-form-container\" class=\"col-md-4\">
            <div id=\"product-images-form\"></div>
          </div>
          <div class=\"dropzone-expander text-sm-center col-md-12\">
            <span class=\"expand\">{{ 'View all images'|trans({}, 'Admin.Catalog.Feature') }}</span>
            <span class=\"compress\">{{ 'View less'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </div>

        </div>

        <div class=\"summary-description-container\">
          <h2>{{ 'Summary'|trans({}, 'Admin.Catalog.Feature') }}</h2>
          <div id=\"description_short\" class=\"mb-3\">
            {{ form_widget(formShortDescription) }}
          </div>

          <h2>{{ 'Description'|trans({}, 'Admin.Global') }}</h2>
          <div id=\"description\" class=\"mb-3\">
            {{ form_widget(formDescription) }}
          </div>
        </div>

        {{ renderhook('displayAdminProductsMainStepLeftColumnMiddle', { 'id_product': productId }) }}

        <div id=\"features\" class=\"mb-3\">
          <div id=\"features-content\" class=\"content {{ formFeatures|length == 0 ? 'hide':'' }}\">
            <h2>{{ 'Features'|trans({}, 'Admin.Catalog.Feature') }}</h2>
            {{ form_errors(formFeatures) }}
            <div class=\"feature-collection nostyle\" data-prototype=\"{% apply escape %} {{ include('@Product/ProductPage/Forms/form_feature.html.twig', { 'form': formFeatures.vars.prototype }) }} {% endapply %}\">
              {% for feature in formFeatures %}
                {{ include('@Product/ProductPage/Forms/form_feature.html.twig', { 'form': feature }) }}
              {% endfor %}
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-md-4\">
              <button type=\"button\" class=\"btn btn-outline-primary sensitive add\" id=\"add_feature_button\">
                <i class=\"material-icons\">add_circle</i>
                {{ 'Add a feature'|trans({}, 'Admin.Catalog.Feature') }}</button>
            </div>
          </div>
        </div>

        <div id=\"manufacturer\" class=\"mb-3\">
          {{ include('@Product/ProductPage/Forms/form_manufacturer.html.twig', { 'form': formManufacturer }) }}
        </div>

        <div id=\"related-product\" class=\"mb-3\">
          {{ include('@Product/ProductPage/Forms/form_related_products.html.twig', { 'form': formRelatedProducts }) }}
        </div>

        {{ renderhook('displayAdminProductsMainStepLeftColumnBottom', { 'id_product': productId }) }}

      </div>

      {# RIGHT #}
      <div class=\"col-md-3 right-column\">

        {% if is_combination_active %}
          <div class=\"form-group mb-3\" id=\"show_variations_selector\">
            <h2>
              {{ \"Combinations\"|trans({}, 'Admin.Catalog.Feature') }}
              <span class=\"help-box\" 
                    data-toggle=\"popover\" 
                    data-content=\"{{ \"Combinations are the different variations of a product, with attributes like its size, weight or color taking different values. Does your product require combinations?\"|trans({}, 'Admin.Catalog.Help') }}\">
              </span>
            </h2>
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"show_variations\" value=\"0\" {% if not has_combinations %} checked=\"checked\" {% endif %}>
                {{ \"Simple product\"|trans({}, 'Admin.Catalog.Feature') }}
              </label>
            </div>
            <div class=\"radio\">
              <label>
                <input type=\"radio\" name=\"show_variations\" value=\"1\" {% if has_combinations %} checked=\"checked\" {% endif %}>
                {{ \"Product with combinations\"|trans({}, 'Admin.Catalog.Feature') }}
              </label>
              <div id=\"product_type_combinations_shortcut\">
                <span
                  class=\"small font-secondary\">
                  {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                  {{ \"Advanced settings in [1][2]Combinations[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').click();\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
                </span>
              </div>
            </div>
          </div>
        {% endif %}

        <div class=\"form-group mb-4\">
          <h2>
            {{ \"Reference\"|trans({}, 'Admin.Catalog.Feature') }}
            <span class=\"help-box\" 
                  data-toggle=\"popover\" 
                  data-content=\"{{ \"Your reference code for this product. Allowed special characters: .-_#\\.\"|trans({}, 'Admin.Catalog.Help') }}\">
            </span>
          </h2>
          {{ form_errors(formReference) }}
          <div class=\"row\">
            <div class=\"col-lg-12\" id=\"product_reference_field\">
              {{ form_widget(formReference) }}
            </div>
          </div>
        </div>

        {% if configuration('PS_STOCK_MANAGEMENT') %}
          <div class=\"form-group mb-4\" id=\"product_qty_0_shortcut_div\">
            <h2>
              {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
              <span class=\"help-box\" 
                    data-toggle=\"popover\" 
                    data-content=\"{{ \"How many products should be available for sale?\"|trans({}, 'Admin.Catalog.Help') }}\">
              </span>
            </h2>
            {{ form_errors(formQuantityShortcut) }}
            <div class=\"row\">
              <div class=\"col-xl-6 col-lg-12\">
                {{ form_widget(formQuantityShortcut) }}
              </div>
            </div>
            <span
              class=\"small font-secondary\">
              {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
              {{ \"Advanced settings in [1][2]Quantities[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step3\" onclick=\"\$(\\'a[href=\\\\\\'#step3\\\\\\']\\').click();\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
            </span>
          </div>
        {% endif %}

        <div class=\"form-group mb-4\">
          <h2>
            {{ \"Price\"|trans({}, 'Admin.Global') }}
            <span class=\"help-box\" 
                  data-toggle=\"popover\" 
                  data-content=\"{{ \"This is the retail price at which you intend to sell this product to your customers. The tax included price will change according to the tax rule you select.\"|trans({}, 'Admin.Catalog.Help') }}\">
            </span>
          </h2>
          <div class=\"row\">
            <div class=\"col-md-6\">
              <label class=\"form-control-label\">{{ \"Tax excluded\"|trans({}, 'Admin.Catalog.Feature') }}</label>
              {{ form_widget(formPriceShortcut) }}
              {{ form_errors(formPriceShortcut) }}
            </div>
            <div class=\"col-md-6 col-offset-md-1\">
              <label class=\"form-control-label\">{{ \"Tax included\"|trans({}, 'Admin.Catalog.Feature') }}</label>
              {{ form_widget(formPriceShortcutTTC) }}
              {{ form_errors(formPriceShortcutTTC) }}
            </div>
            <div class=\"col-md-12 mt-1\">
              <label class=\"form-control-label\">{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
              {{ render(
                      controller('PrestaShopBundle:Admin/Common:renderField', {
                        'formName': 'step2',
                        'formType': 'PrestaShopBundle\\\\Form\\\\Admin\\\\Product\\\\ProductPrice',
                        'fieldName': 'id_tax_rules_group',
                        'fieldData' : form.step2.id_tax_rules_group.vars.value
                        }
                      )
                    )
                  }}
            </div>
            <div class=\"col-md-12\">
              <span
                class=\"small font-secondary\">
                {# First tag [1][/1] is for a HTML link. Second tag [2] is an icon (no closing tag needed). #}
                {{ \"Advanced settings in [1][2]Pricing[/1]\"|trans({}, 'Admin.Catalog.Help')|replace({'[1]': '<a href=\"#tab-step2\" onclick=\"\$(\\'a[href=\\\\\\'#step2\\\\\\']\\').click();\" class=\"btn sensitive px-0\">', '[/1]': '</a>', '[2]': '<i class=\"material-icons\">open_in_new</i>'})|raw }}
              </span>
            </div>
          </div>
          <div class=\"row hide\">
            <div class=\"col-md-12\">
              <label>{{ \"Tax rule\"|trans({}, 'Admin.Catalog.Feature') }}</label>
            </div>
            <div class=\"clearfix\"></div>
            <div class=\"col-md-11\" id=\"tax_rule_shortcut\"></div>
            <a href=\"#\" onclick=\"\$(this).parent().hide()\">&times;</a>
          </div>
        </div>

        <div class=\"form-group mb-4\" id=\"categories\">
          {{ include('@Product/ProductPage/Forms/form_categories.html.twig', { 'form': formCategories, 'productId': productId }) }}
        </div>

        {{ renderhook('displayAdminProductsMainStepRightColumnBottom', { 'id_product': productId }) }}

      </div>
    </div>
  </div>
</div>
", "@Product/ProductPage/Panels/essentials.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/essentials.html.twig");
    }
}
