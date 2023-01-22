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

/* @Product/ProductPage/Panels/combinations.html.twig */
class __TwigTemplate_9d94d11b395d2742d25cfc13b7b6e2d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/combinations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/combinations.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"container-fluid\">

    <div id=\"quantities\" style=\"";
        // line 28
        if (((isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 28, $this->source); })()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formDependsOnStocks"]) || array_key_exists("formDependsOnStocks", $context) ? $context["formDependsOnStocks"] : (function () { throw new RuntimeError('Variable "formDependsOnStocks" does not exist.', 28, $this->source); })()), "vars", [], "any", false, false, false, 28), "value", [], "any", false, false, false, 28) != "0"))) {
            echo "display: none;";
        }
        echo "\">
      <h2>";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quantities", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
      <fieldset class=\"form-group\">
        <div class=\"row\">
          ";
        // line 32
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 33
            echo "            <div class=\"col-md-4\">
              <label class=\"form-control-label\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formStockQuantity"]) || array_key_exists("formStockQuantity", $context) ? $context["formStockQuantity"] : (function () { throw new RuntimeError('Variable "formStockQuantity" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "label", [], "any", false, false, false, 34), "html", null, true);
            echo "</label>
              ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formStockQuantity"]) || array_key_exists("formStockQuantity", $context) ? $context["formStockQuantity"] : (function () { throw new RuntimeError('Variable "formStockQuantity" does not exist.', 35, $this->source); })()), 'errors');
            echo "
              ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formStockQuantity"]) || array_key_exists("formStockQuantity", $context) ? $context["formStockQuantity"] : (function () { throw new RuntimeError('Variable "formStockQuantity" does not exist.', 36, $this->source); })()), 'widget');
            echo "
            </div>
          ";
        }
        // line 39
        echo "          <div class=\"col-md-4\">
            <label class=\"form-control-label\">
              ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formStockMinimalQuantity"]) || array_key_exists("formStockMinimalQuantity", $context) ? $context["formStockMinimalQuantity"] : (function () { throw new RuntimeError('Variable "formStockMinimalQuantity" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "label", [], "any", false, false, false, 41), "html", null, true);
        echo "
              <span class=\"help-box\" data-toggle=\"popover\"
                data-content=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
            </label>
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formStockMinimalQuantity"]) || array_key_exists("formStockMinimalQuantity", $context) ? $context["formStockMinimalQuantity"] : (function () { throw new RuntimeError('Variable "formStockMinimalQuantity" does not exist.', 45, $this->source); })()), 'errors');
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formStockMinimalQuantity"]) || array_key_exists("formStockMinimalQuantity", $context) ? $context["formStockMinimalQuantity"] : (function () { throw new RuntimeError('Variable "formStockMinimalQuantity" does not exist.', 46, $this->source); })()), 'widget');
        echo "
          </div>
        </div>
      </fieldset>

      <h2>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Stock", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
      <fieldset class=\"form-group\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <label class=\"form-control-label\">";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 55, $this->source); })()), "vars", [], "any", false, false, false, 55), "label", [], "any", false, false, false, 55), "html", null, true);
        echo "</label>
            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 56, $this->source); })()), 'errors');
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formLocation"]) || array_key_exists("formLocation", $context) ? $context["formLocation"] : (function () { throw new RuntimeError('Variable "formLocation" does not exist.', 57, $this->source); })()), 'widget');
        echo "
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <label class=\"form-control-label\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formLowStockThreshold"]) || array_key_exists("formLowStockThreshold", $context) ? $context["formLowStockThreshold"] : (function () { throw new RuntimeError('Variable "formLowStockThreshold" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "label", [], "any", false, false, false, 62), "html", null, true);
        echo "</label>
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formLowStockThreshold"]) || array_key_exists("formLowStockThreshold", $context) ? $context["formLowStockThreshold"] : (function () { throw new RuntimeError('Variable "formLowStockThreshold" does not exist.', 63, $this->source); })()), 'errors');
        echo "
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formLowStockThreshold"]) || array_key_exists("formLowStockThreshold", $context) ? $context["formLowStockThreshold"] : (function () { throw new RuntimeError('Variable "formLowStockThreshold" does not exist.', 64, $this->source); })()), 'widget');
        echo "
          </div>
          <div class=\"col-md-8\">
            <label class=\"form-control-label\">&nbsp;</label>
            <div class=\"widget-checkbox-inline\">
              ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formLowStockAlert"]) || array_key_exists("formLowStockAlert", $context) ? $context["formLowStockAlert"] : (function () { throw new RuntimeError('Variable "formLowStockAlert" does not exist.', 69, $this->source); })()), 'errors');
        echo "
              ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formLowStockAlert"]) || array_key_exists("formLowStockAlert", $context) ? $context["formLowStockAlert"] : (function () { throw new RuntimeError('Variable "formLowStockAlert" does not exist.', 70, $this->source); })()), 'widget');
        echo "
              <span class=\"help-box\" 
                    data-toggle=\"popover\" 
                    data-html=\"true\" 
                    data-content=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]", ["[1]" => (("<a href=&quot;" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminEmployees")) . "&quot;>"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        echo "\">
              </span>
            </div>
          </div>
        </div>
      </fieldset>
    </div>

    <div id=\"virtual_product\" 
         data-action=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_virtual_save_action", ["idProduct" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 83, $this->source); })())]), "html", null, true);
        echo "\" 
         data-action-remove=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_virtual_remove_action", ["idProduct" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 84, $this->source); })())]), "html", null, true);
        echo "\">
        
      <h2>";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 86, $this->source); })()), "vars", [], "any", false, false, false, 86), "label", [], "any", false, false, false, 86), "html", null, true);
        echo "</h2>
      <fieldset class=\"form-group\">
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 88, $this->source); })()), "is_virtual_file", [], "any", false, false, false, 88), 'widget');
        echo "
      </fieldset>

      <div class=\"row\">
        <div class=\"col-md-8\">
          <div id=\"virtual_product_content\" class=\"bg-light p-3\">
            <div class=\"row\">
              ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 95, $this->source); })()), 'errors');
        echo "
              <div class=\"col-md-12\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    ";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 99, $this->source); })()), "file", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "label", [], "any", false, false, false, 99), "html", null, true);
        echo "
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a file from your computer (%maxUploadSize% max.)", ["%maxUploadSize%" => (isset($context["max_upload_size"]) || array_key_exists("max_upload_size", $context) ? $context["max_upload_size"] : (function () { throw new RuntimeError('Variable "max_upload_size" does not exist.', 101, $this->source); })())], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                  </label>
                  <div id=\"form_step3_virtual_product_file_input\" class=\"";
        // line 103
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true, false, 103), "value", [], "any", false, true, false, 103), "filename", [], "any", true, true, false, 103)) ? ("hide") : ("show"));
        echo "\">
                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 104, $this->source); })()), "file", [], "any", false, false, false, 104), 'widget');
        echo "
                  </div>
                  <div id=\"form_step3_virtual_product_file_details\" class=\"";
        // line 106
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true, false, 106), "value", [], "any", false, true, false, 106), "filename", [], "any", true, true, false, 106)) ? ("show") : ("hide"));
        echo "\">
                    <a href=\"";
        // line 107
        ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["formVirtualProduct"] ?? null), "vars", [], "any", false, true, false, 107), "value", [], "any", false, true, false, 107), "file_download_link", [], "any", true, true, false, 107)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 107, $this->source); })()), "vars", [], "any", false, false, false, 107), "value", [], "any", false, false, false, 107), "file_download_link", [], "any", false, false, false, 107), "html", null, true))) : (print ("")));
        echo "\" class=\"btn btn-default btn-sm download\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                    <a href=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_virtual_remove_file_action", ["idProduct" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 108, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-danger btn-sm delete\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete this file", [], "Admin.Actions"), "html", null, true);
        echo "</a>
                  </div>
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 115, $this->source); })()), "name", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "label", [], "any", false, false, false, 115), "html", null, true);
        echo "
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The full filename with its extension (e.g. Book.pdf)", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                  </label>
                  ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 119, $this->source); })()), "name", [], "any", false, false, false, 119), 'errors');
        echo "
                  ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 120, $this->source); })()), "name", [], "any", false, false, false, 120), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    ";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 126, $this->source); })()), "nb_downloadable", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "label", [], "any", false, false, false, 126), "html", null, true);
        echo "
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Number of downloads allowed per customer. Set to 0 for unlimited downloads.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                  </label>
                  ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 130, $this->source); })()), "nb_downloadable", [], "any", false, false, false, 130), 'errors');
        echo "
                  ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 131, $this->source); })()), "nb_downloadable", [], "any", false, false, false, 131), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    ";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 137, $this->source); })()), "expiration_date", [], "any", false, false, false, 137), "vars", [], "any", false, false, false, 137), "label", [], "any", false, false, false, 137), "html", null, true);
        echo "
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                  </label>
                  ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 141, $this->source); })()), "expiration_date", [], "any", false, false, false, 141), 'errors');
        echo "
                  ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 142, $this->source); })()), "expiration_date", [], "any", false, false, false, 142), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    ";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 148, $this->source); })()), "nb_days", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "label", [], "any", false, false, false, 148), "html", null, true);
        echo "
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Number of days this file can be accessed by customers. Set to zero for unlimited access.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" ></span>
                  </label>
                  ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 152, $this->source); })()), "nb_days", [], "any", false, false, false, 152), 'errors');
        echo "
                  ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 153, $this->source); })()), "nb_days", [], "any", false, false, false, 153), 'widget');
        echo "
                </fieldset>
              </div>
              <div class=\"col-md-12\">
                ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVirtualProduct"]) || array_key_exists("formVirtualProduct", $context) ? $context["formVirtualProduct"] : (function () { throw new RuntimeError('Variable "formVirtualProduct" does not exist.', 157, $this->source); })()), "save", [], "any", false, false, false, 157), 'widget');
        echo "
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    ";
        // line 166
        if (((isset($context["asm_globally_activated"]) || array_key_exists("asm_globally_activated", $context) ? $context["asm_globally_activated"] : (function () { throw new RuntimeError('Variable "asm_globally_activated" does not exist.', 166, $this->source); })()) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 166, $this->source); })()), "vars", [], "any", false, false, false, 166), "value", [], "any", false, false, false, 166) != "2"))) {
            // line 167
            echo "      <div class=\"form-group\" id=\"asm_quantity_management\">
        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
        <div class=\"col-sm-10\">
          ";
            // line 170
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formAdvancedStockManagement"]) || array_key_exists("formAdvancedStockManagement", $context) ? $context["formAdvancedStockManagement"] : (function () { throw new RuntimeError('Variable "formAdvancedStockManagement" does not exist.', 170, $this->source); })()), 'errors');
            echo "
          ";
            // line 171
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formAdvancedStockManagement"]) || array_key_exists("formAdvancedStockManagement", $context) ? $context["formAdvancedStockManagement"] : (function () { throw new RuntimeError('Variable "formAdvancedStockManagement" does not exist.', 171, $this->source); })()), 'widget');
            echo "
          ";
            // line 172
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "step1", [], "any", false, false, false, 172), "type_product", [], "any", false, false, false, 172), "vars", [], "any", false, false, false, 172), "value", [], "any", false, false, false, 172) == "1")) {
                // line 173
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.", [], "Admin.Catalog.Notification"), "html", null, true);
                echo "
          ";
            }
            // line 175
            echo "        </div>
      </div>
      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"";
            // line 177
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formAdvancedStockManagement"]) || array_key_exists("formAdvancedStockManagement", $context) ? $context["formAdvancedStockManagement"] : (function () { throw new RuntimeError('Variable "formAdvancedStockManagement" does not exist.', 177, $this->source); })()), "vars", [], "any", false, false, false, 177), "checked", [], "any", false, false, false, 177)) {
                echo "display: none;";
            }
            echo "\">
        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
        <div class=\"col-sm-10\">
          ";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formDependsOnStocks"]) || array_key_exists("formDependsOnStocks", $context) ? $context["formDependsOnStocks"] : (function () { throw new RuntimeError('Variable "formDependsOnStocks" does not exist.', 180, $this->source); })()), 'errors');
            echo "
          ";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formDependsOnStocks"]) || array_key_exists("formDependsOnStocks", $context) ? $context["formDependsOnStocks"] : (function () { throw new RuntimeError('Variable "formDependsOnStocks" does not exist.', 181, $this->source); })()), 'widget');
            echo "
        </div>
      </div>
    ";
        }
        // line 185
        echo "    ";
        if ($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 186
            echo "      <div id=\"pack_stock_type\">
        <h2>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formPackStockType"]) || array_key_exists("formPackStockType", $context) ? $context["formPackStockType"] : (function () { throw new RuntimeError('Variable "formPackStockType" does not exist.', 187, $this->source); })()), "vars", [], "any", false, false, false, 187), "label", [], "any", false, false, false, 187), "html", null, true);
            echo "</h2>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <fieldset class=\"form-group\">
              ";
            // line 191
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPackStockType"]) || array_key_exists("formPackStockType", $context) ? $context["formPackStockType"] : (function () { throw new RuntimeError('Variable "formPackStockType" does not exist.', 191, $this->source); })()), 'errors');
            echo "
              ";
            // line 192
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formPackStockType"]) || array_key_exists("formPackStockType", $context) ? $context["formPackStockType"] : (function () { throw new RuntimeError('Variable "formPackStockType" does not exist.', 192, $this->source); })()), 'widget');
            echo "
            </fieldset>
          </div>
        </div>
      </div>
    ";
        }
        // line 198
        echo "    ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_combinations.html.twig", ["form" => (isset($context["formStep3"]) || array_key_exists("formStep3", $context) ? $context["formStep3"] : (function () { throw new RuntimeError('Variable "formStep3" does not exist.', 198, $this->source); })()), "form_combination_bulk" => (isset($context["formCombinations"]) || array_key_exists("formCombinations", $context) ? $context["formCombinations"] : (function () { throw new RuntimeError('Variable "formCombinations" does not exist.', 198, $this->source); })())]);
        echo "

    ";
        // line 200
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsQuantitiesStepBottom", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 200, $this->source); })())]);
        echo "

  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/combinations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  419 => 200,  413 => 198,  404 => 192,  400 => 191,  393 => 187,  390 => 186,  387 => 185,  380 => 181,  376 => 180,  368 => 177,  364 => 175,  358 => 173,  356 => 172,  352 => 171,  348 => 170,  343 => 167,  341 => 166,  329 => 157,  322 => 153,  318 => 152,  313 => 150,  308 => 148,  299 => 142,  295 => 141,  290 => 139,  285 => 137,  276 => 131,  272 => 130,  267 => 128,  262 => 126,  253 => 120,  249 => 119,  244 => 117,  239 => 115,  227 => 108,  221 => 107,  217 => 106,  212 => 104,  208 => 103,  203 => 101,  198 => 99,  191 => 95,  181 => 88,  176 => 86,  171 => 84,  167 => 83,  155 => 74,  148 => 70,  144 => 69,  136 => 64,  132 => 63,  128 => 62,  120 => 57,  116 => 56,  112 => 55,  105 => 51,  97 => 46,  93 => 45,  88 => 43,  83 => 41,  79 => 39,  73 => 36,  69 => 35,  65 => 34,  62 => 33,  60 => 32,  54 => 29,  48 => 28,  43 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step3\">
  <div class=\"container-fluid\">

    <div id=\"quantities\" style=\"{% if has_combinations or formDependsOnStocks.vars.value != \"0\" %}display: none;{% endif %}\">
      <h2>{{ 'Quantities'|trans({}, 'Admin.Catalog.Feature') }}</h2>
      <fieldset class=\"form-group\">
        <div class=\"row\">
          {% if configuration('PS_STOCK_MANAGEMENT') %}
            <div class=\"col-md-4\">
              <label class=\"form-control-label\">{{ formStockQuantity.vars.label }}</label>
              {{ form_errors(formStockQuantity) }}
              {{ form_widget(formStockQuantity) }}
            </div>
          {% endif %}
          <div class=\"col-md-4\">
            <label class=\"form-control-label\">
              {{ formStockMinimalQuantity.vars.label }}
              <span class=\"help-box\" data-toggle=\"popover\"
                data-content=\"{{ \"The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
            </label>
            {{ form_errors(formStockMinimalQuantity) }}
            {{ form_widget(formStockMinimalQuantity) }}
          </div>
        </div>
      </fieldset>

      <h2>{{ 'Stock'|trans({}, 'Admin.Catalog.Feature') }}</h2>
      <fieldset class=\"form-group\">
        <div class=\"row\">
          <div class=\"col-md-4\">
            <label class=\"form-control-label\">{{ formLocation.vars.label }}</label>
            {{ form_errors(formLocation) }}
            {{ form_widget(formLocation) }}
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <label class=\"form-control-label\">{{ formLowStockThreshold.vars.label }}</label>
            {{ form_errors(formLowStockThreshold) }}
            {{ form_widget(formLowStockThreshold) }}
          </div>
          <div class=\"col-md-8\">
            <label class=\"form-control-label\">&nbsp;</label>
            <div class=\"widget-checkbox-inline\">
              {{ form_errors(formLowStockAlert) }}
              {{ form_widget(formLowStockAlert) }}
              <span class=\"help-box\" 
                    data-toggle=\"popover\" 
                    data-html=\"true\" 
                    data-content=\"{{ \"The email will be sent to all the users who have the right to run the stock page. To modify the permissions, go to [1]Advanced Parameters > Team[/1]\"|trans({'[1]':'<a href=&quot;'~getAdminLink(\"AdminEmployees\")~'&quot;>','[/1]':'</a>'}, 'Admin.Catalog.Help')|raw }}\">
              </span>
            </div>
          </div>
        </div>
      </fieldset>
    </div>

    <div id=\"virtual_product\" 
         data-action=\"{{ path('admin_product_virtual_save_action', { 'idProduct': productId }) }}\" 
         data-action-remove=\"{{ path('admin_product_virtual_remove_action', {'idProduct': productId }) }}\">
        
      <h2>{{ formVirtualProduct.vars.label }}</h2>
      <fieldset class=\"form-group\">
        {{ form_widget(formVirtualProduct.is_virtual_file) }}
      </fieldset>

      <div class=\"row\">
        <div class=\"col-md-8\">
          <div id=\"virtual_product_content\" class=\"bg-light p-3\">
            <div class=\"row\">
              {{ form_errors(formVirtualProduct) }}
              <div class=\"col-md-12\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    {{ formVirtualProduct.file.vars.label }}
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"{{ \"Upload a file from your computer (%maxUploadSize% max.)\"|trans({'%maxUploadSize%': max_upload_size}, 'Admin.Catalog.Help') }}\" ></span>
                  </label>
                  <div id=\"form_step3_virtual_product_file_input\" class=\"{{ formVirtualProduct.vars.value.filename is defined ? 'hide' : 'show' }}\">
                    {{ form_widget(formVirtualProduct.file) }}
                  </div>
                  <div id=\"form_step3_virtual_product_file_details\" class=\"{{ formVirtualProduct.vars.value.filename is defined ? 'show' : 'hide' }}\">
                    <a href=\"{{ formVirtualProduct.vars.value.file_download_link is defined ? formVirtualProduct.vars.value.file_download_link : '' }}\" class=\"btn btn-default btn-sm download\">{{ 'Download file'|trans({}, 'Admin.Actions') }}</a>
                    <a href=\"{{ path('admin_product_virtual_remove_file_action', {'idProduct': productId}) }}\" class=\"btn btn-danger btn-sm delete\">{{ 'Delete this file'|trans({}, 'Admin.Actions') }}</a>
                  </div>
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    {{ formVirtualProduct.name.vars.label }}
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"{{ \"The full filename with its extension (e.g. Book.pdf)\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                  </label>
                  {{ form_errors(formVirtualProduct.name) }}
                  {{ form_widget(formVirtualProduct.name) }}
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    {{ formVirtualProduct.nb_downloadable.vars.label }}
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"{{ \"Number of downloads allowed per customer. Set to 0 for unlimited downloads.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                  </label>
                  {{ form_errors(formVirtualProduct.nb_downloadable) }}
                  {{ form_widget(formVirtualProduct.nb_downloadable) }}
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    {{ formVirtualProduct.expiration_date.vars.label }}
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"{{ \"If set, the file will not be downloadable after this date. Leave blank if you do not wish to attach an expiration date.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                  </label>
                  {{ form_errors(formVirtualProduct.expiration_date) }}
                  {{ form_widget(formVirtualProduct.expiration_date) }}
                </fieldset>
              </div>
              <div class=\"col-md-6\">
                <fieldset class=\"form-group\">
                  <label class=\"form-control-label\">
                    {{ formVirtualProduct.nb_days.vars.label }}
                    <span class=\"help-box\" data-toggle=\"popover\"
                      data-content=\"{{ \"Number of days this file can be accessed by customers. Set to zero for unlimited access.\"|trans({}, 'Admin.Catalog.Help') }}\" ></span>
                  </label>
                  {{ form_errors(formVirtualProduct.nb_days) }}
                  {{ form_widget(formVirtualProduct.nb_days) }}
                </fieldset>
              </div>
              <div class=\"col-md-12\">
                {{ form_widget(formVirtualProduct.save) }}
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    {% if asm_globally_activated and formType.vars.value != \"2\" %}
      <div class=\"form-group\" id=\"asm_quantity_management\">
        <label class=\"col-sm-2 control-label\" for=\"form_step3_advanced_stock_management\"></label>
        <div class=\"col-sm-10\">
          {{ form_errors(formAdvancedStockManagement) }}
          {{ form_widget(formAdvancedStockManagement) }}
          {% if form.step1.type_product.vars.value == \"1\" %}
            {{ 'When enabling advanced stock management for a pack, please make sure it is also enabled for its product(s) – if you choose to decrement product quantities.'|trans({}, 'Admin.Catalog.Notification') }}
          {% endif %}
        </div>
      </div>
      <div class=\"form-group\" id=\"depends_on_stock_div\" style=\"{% if not(formAdvancedStockManagement.vars.checked) %}display: none;{% endif %}\">
        <label class=\"col-sm-2 control-label\" for=\"form_step3_depends_on_stock\"></label>
        <div class=\"col-sm-10\">
          {{ form_errors(formDependsOnStocks) }}
          {{ form_widget(formDependsOnStocks) }}
        </div>
      </div>
    {% endif %}
    {% if configuration('PS_STOCK_MANAGEMENT') %}
      <div id=\"pack_stock_type\">
        <h2>{{ formPackStockType.vars.label }}</h2>
        <div class=\"row\">
          <div class=\"col-md-4\">
            <fieldset class=\"form-group\">
              {{ form_errors(formPackStockType) }}
              {{ form_widget(formPackStockType) }}
            </fieldset>
          </div>
        </div>
      </div>
    {% endif %}
    {{ include('@Product/ProductPage/Forms/form_combinations.html.twig', {'form': formStep3, 'form_combination_bulk': formCombinations}) }}

    {{ renderhook('displayAdminProductsQuantitiesStepBottom', { 'id_product': productId }) }}

  </div>
</div>
", "@Product/ProductPage/Panels/combinations.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/combinations.html.twig");
    }
}
