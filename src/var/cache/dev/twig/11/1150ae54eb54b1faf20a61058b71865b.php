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

/* @Product/ProductPage/Panels/options.html.twig */
class __TwigTemplate_96b77b3fb3e3d60bf3cc9baaa3fa8616 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/options.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Panels/options.html.twig"));

        // line 25
        echo "<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
  <div class=\"container-fluid\">

    ";
        // line 28
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsOptionsStepTop", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 28, $this->source); })())]);
        echo "

    <h2>";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Visibility", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <p class=\"subtitle\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Where do you want your product to appear?", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

    <div class=\"row\">
      <div class=\"col-md-4 form-group\">
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 35, $this->source); })()), "visibility", [], "any", false, false, false, 35), 'errors');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 36, $this->source); })()), "visibility", [], "any", false, false, false, 36), 'widget');
        echo "
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-7 form-group\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 42, $this->source); })()), "display_options", [], "any", false, false, false, 42), 'errors');
        echo "
        <div class=\"row\">
          <div class=\"col-md-4 js-available-for-order\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 45, $this->source); })()), "display_options", [], "any", false, false, false, 45), "available_for_order", [], "any", false, false, false, 45), 'widget');
        echo "
          </div>
          <div class=\"col-md-3 js-show-price\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 48, $this->source); })()), "display_options", [], "any", false, false, false, 48), "show_price", [], "any", false, false, false, 48), 'widget');
        echo "
          </div>
          <div class=\"col-md-5\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 51, $this->source); })()), "display_options", [], "any", false, false, false, 51), "online_only", [], "any", false, false, false, 51), 'widget');
        echo "
          </div>
        </div>
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-8\">
        <label class=\"form-control-label\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 59, $this->source); })()), "tags", [], "any", false, false, false, 59), 'errors');
        echo "
        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 60, $this->source); })()), "tags", [], "any", false, false, false, 60), 'widget');
        echo "
        <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
          <p class=\"alert-text\">";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags are meant to help your customers find your products via the search bar.", [], "Admin.Catalog.Help");
        echo "</p>
          <div class=\"alert-more collapse\" id=\"tagsInfo\">
            <p>
              ";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.", [], "Admin.Catalog.Help");
        echo "<br>
              ";
        // line 66
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.", [], "Admin.Catalog.Help"), ["[1]" => (("<a href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminSearchConf")) . "\" target=\"_blank\">"), "[/1]" => "</a>"]);
        // line 71
        echo "
            </p>
          </div>
          <div class=\"read-more-container\">
            <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
              ";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions");
        echo "
            </button>
          </div>
        </div>
      </div>
    </div>

    <h2>";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Condition & References", [], "Admin.Catalog.Feature");
        echo "</h2>

    <div class=\"row\">
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          ";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 88, $this->source); })()), "condition", [], "any", false, false, false, 88), "vars", [], "any", false, false, false, 88), "label", [], "any", false, false, false, 88), "html", null, true);
        echo "
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </label>
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 94, $this->source); })()), "condition", [], "any", false, false, false, 94), 'errors');
        echo "
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 95, $this->source); })()), "condition", [], "any", false, false, false, 95), 'widget');
        echo "
      </fieldset>
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">&nbsp;</label>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 99, $this->source); })()), "show_condition", [], "any", false, false, false, 99), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"row\">
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          ";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 105, $this->source); })()), "isbn", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "label", [], "any", false, false, false, 105), "html", null, true);
        echo "
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ISBN is used internationally to identify books and their various editions.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </label>
        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 111, $this->source); })()), "isbn", [], "any", false, false, false, 111), 'errors');
        echo "
        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 112, $this->source); })()), "isbn", [], "any", false, false, false, 112), 'widget');
        echo "
      </fieldset>
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          ";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 116, $this->source); })()), "ean13", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "label", [], "any", false, false, false, 116), "html", null, true);
        echo "
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </label>
        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 122, $this->source); })()), "ean13", [], "any", false, false, false, 122), 'errors');
        echo "
        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 123, $this->source); })()), "ean13", [], "any", false, false, false, 123), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"row\">
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 129, $this->source); })()), "upc", [], "any", false, false, false, 129), "vars", [], "any", false, false, false, 129), "label", [], "any", false, false, false, 129), "html", null, true);
        echo "
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </label>
        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 135, $this->source); })()), "upc", [], "any", false, false, false, 135), 'errors');
        echo "
        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 136, $this->source); })()), "upc", [], "any", false, false, false, 136), 'widget');
        echo "
      </fieldset>
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 140, $this->source); })()), "mpn", [], "any", false, false, false, 140), "vars", [], "any", false, false, false, 140), "label", [], "any", false, false, false, 140), "html", null, true);
        echo "
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("MPN is used internationally to identify the Manufacturer Part Number.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
          </span>
        </label>
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 146, $this->source); })()), "mpn", [], "any", false, false, false, 146), 'errors');
        echo "
        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 147, $this->source); })()), "mpn", [], "any", false, false, false, 147), 'widget');
        echo "
      </fieldset>
    </div>

    <div id=\"custom_fields\" class=\"mt-3\">
      <h2>";
        // line 152
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 152, $this->source); })()), "custom_fields", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "label", [], "any", false, false, false, 152), "html", null, true);
        echo "</h2>
      <p class=\"subtitle\">";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers can personalize the product by entering some text or by providing custom image files.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
      ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 154, $this->source); })()), "custom_fields", [], "any", false, false, false, 154), 'errors');
        echo "
      <ul class=\"customFieldCollection nostyle\" data-prototype=\"
        ";
        // line 156
        ob_start();
        // line 157
        echo "          ";
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_custom_fields.html.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 157, $this->source); })()), "custom_fields", [], "any", false, false, false, 157), "vars", [], "any", false, false, false, 157), "prototype", [], "any", false, false, false, 157)]);
        echo "
        ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 156
        echo twig_escape_filter($this->env, $___internal_parse_1_);
        // line 158
        echo "\">
        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 159, $this->source); })()), "custom_fields", [], "any", false, false, false, 159));
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
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 160
            echo "          <li>
            ";
            // line 161
            echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_custom_fields.html.twig", ["form" => $context["field"]]);
            echo "
          </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "      </ul>
      <a href=\"#\" class=\"btn btn-outline-secondary add\" data-role=\"add-customization-field\">
        <i class=\"material-icons\">add_circle</i>
        ";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add a customization field", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </a>
    </div>

    <div class=\"row mt-4\">
      <div class=\"col-md-8\">
        <h2>";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attached files", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
        <p class=\"subtitle\">";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select the files (instructions, documentation, recipes, etc.) your customers can directly download on this product page.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
          <br/>
          ";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Need to browse all files? Go to [1]Catalog > Files[/1]", ["[1]" => (("<a href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminAttachments")) . "\">"), "[/1]" => "</a>"], "Admin.Catalog.Feature");
        echo "
        </p>
        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 178, $this->source); })()), "attachments", [], "any", false, false, false, 178), 'widget');
        echo "
      </div>
    </div>
    <div class=\"row mt-3\">
      <div class=\"col-md-8\">
        <a class=\"btn btn-outline-secondary mb-3\" href=\"#collapsedForm\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapsedForm\">
          <i class=\"material-icons\">add_circle</i>
          ";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Attach a new file", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </a>
        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
          ";
        // line 188
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 188, $this->source); })()), "attachment_product", [], "any", false, false, false, 188), 'errors');
        echo "
          <div id=\"form_step6_attachment_product\" data-action=\"";
        // line 189
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 189, $this->source); })()), "attachment_product", [], "any", false, false, false, 189), "vars", [], "any", false, false, false, 189), "attr", [], "any", false, false, false, 189), "data-action", [], "array", false, false, false, 189), "html", null, true);
        echo "\">
            <div class=\"form-group\">";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 190, $this->source); })()), "attachment_product", [], "any", false, false, false, 190), "file", [], "any", false, false, false, 190), 'widget');
        echo "</div>
            <div class=\"form-group\">";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 191, $this->source); })()), "attachment_product", [], "any", false, false, false, 191), "name", [], "any", false, false, false, 191), 'widget');
        echo "</div>
            <div class=\"form-group\">";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 192, $this->source); })()), "attachment_product", [], "any", false, false, false, 192), "description", [], "any", false, false, false, 192), 'widget');
        echo "</div>
            <div class=\"form-group\">
              ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 194, $this->source); })()), "attachment_product", [], "any", false, false, false, 194), "add", [], "any", false, false, false, 194), 'widget');
        echo "
              ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 195, $this->source); })()), "attachment_product", [], "any", false, false, false, 195), "cancel", [], "any", false, false, false, 195), 'widget');
        echo "
            </div>
          </div>
        </fieldset>
      </div>
    </div>

    <div class=\"row mt-3\">
      <div class=\"col-md-8\" id=\"supplier_collection\">
        ";
        // line 204
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_supplier_choice.html.twig", ["form" => (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 204, $this->source); })())]);
        echo "
      </div>
    </div>
    <div id=\"supplier_combination_collection\" data-url=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_supplier_refresh_product_supplier_combination_form", ["idProduct" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 207, $this->source); })()), "supplierIds" => 1]), "html", null, true);
        echo "\">
      ";
        // line 208
        echo twig_include($this->env, $context, "@Product/ProductPage/Forms/form_supplier_combination.html.twig", ["suppliers" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 208, $this->source); })()), "suppliers", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "value", [], "any", false, false, false, 208), "form" => (isset($context["optionsForm"]) || array_key_exists("optionsForm", $context) ? $context["optionsForm"] : (function () { throw new RuntimeError('Variable "optionsForm" does not exist.', 208, $this->source); })())]);
        echo "
    </div>

    ";
        // line 211
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsOptionsStepBottom", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 211, $this->source); })())]);
        echo "

  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Panels/options.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 211,  436 => 208,  432 => 207,  426 => 204,  414 => 195,  410 => 194,  405 => 192,  401 => 191,  397 => 190,  393 => 189,  389 => 188,  383 => 185,  373 => 178,  368 => 176,  363 => 174,  359 => 173,  350 => 167,  345 => 164,  328 => 161,  325 => 160,  308 => 159,  305 => 158,  303 => 156,  297 => 157,  295 => 156,  290 => 154,  286 => 153,  282 => 152,  274 => 147,  270 => 146,  264 => 143,  258 => 140,  251 => 136,  247 => 135,  241 => 132,  235 => 129,  226 => 123,  222 => 122,  216 => 119,  210 => 116,  203 => 112,  199 => 111,  193 => 108,  187 => 105,  178 => 99,  171 => 95,  167 => 94,  161 => 91,  155 => 88,  147 => 83,  137 => 76,  130 => 71,  128 => 66,  124 => 65,  118 => 62,  113 => 60,  109 => 59,  105 => 58,  95 => 51,  89 => 48,  83 => 45,  77 => 42,  68 => 36,  64 => 35,  57 => 31,  53 => 30,  48 => 28,  43 => 25,);
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
<div role=\"tabpanel\" class=\"form-contenttab tab-pane\" id=\"step6\">
  <div class=\"container-fluid\">

    {{ renderhook('displayAdminProductsOptionsStepTop', { 'id_product': productId }) }}

    <h2>{{ 'Visibility'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <p class=\"subtitle\">{{ 'Where do you want your product to appear?'|trans({}, 'Admin.Catalog.Feature') }}</p>

    <div class=\"row\">
      <div class=\"col-md-4 form-group\">
        {{ form_errors(optionsForm.visibility) }}
        {{ form_widget(optionsForm.visibility) }}
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-md-7 form-group\">
        {{ form_errors(optionsForm.display_options) }}
        <div class=\"row\">
          <div class=\"col-md-4 js-available-for-order\">
            {{ form_widget(optionsForm.display_options.available_for_order) }}
          </div>
          <div class=\"col-md-3 js-show-price\">
            {{ form_widget(optionsForm.display_options.show_price) }}
          </div>
          <div class=\"col-md-5\">
            {{ form_widget(optionsForm.display_options.online_only) }}
          </div>
        </div>
      </div>
    </div>
    <div class=\"row form-group\">
      <div class=\"col-md-8\">
        <label class=\"form-control-label\">{{ 'Tags'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(optionsForm.tags) }}
        {{ form_widget(optionsForm.tags) }}
        <div class=\"alert expandable-alert alert-info mt-3\" role=\"alert\">
          <p class=\"alert-text\">{{ 'Tags are meant to help your customers find your products via the search bar.'|trans({}, 'Admin.Catalog.Help')|raw }}</p>
          <div class=\"alert-more collapse\" id=\"tagsInfo\">
            <p>
              {{ 'Choose terms and keywords that your customers will use to search for this product and make sure you are consistent with the tags you may have already used.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
              {{ 'You can manage tag aliases in the [1]Search section[/1]. If you add new tags, you have to rebuild the index.'|trans({}, 'Admin.Catalog.Help')|
                      replace({
                        '[1]' : '<a href=\"'~ getAdminLink(\"AdminSearchConf\") ~'\" target=\"_blank\">',
                        '[/1]' : '</a>'
                      })|raw
                      }}
            </p>
          </div>
          <div class=\"read-more-container\">
            <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#tagsInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
              {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
            </button>
          </div>
        </div>
      </div>
    </div>

    <h2>{{ 'Condition & References'|trans({}, 'Admin.Catalog.Feature')|raw }}</h2>

    <div class=\"row\">
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          {{ optionsForm.condition.vars.label }}
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"{{ \"Not all shops sell new products. This option enables you to indicate the condition of the product. It can be required on some marketplaces.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </label>
        {{ form_errors(optionsForm.condition) }}
        {{ form_widget(optionsForm.condition) }}
      </fieldset>
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">&nbsp;</label>
        {{ form_widget(optionsForm.show_condition) }}
      </fieldset>
    </div>
    <div class=\"row\">
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          {{ optionsForm.isbn.vars.label }}
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"{{ \"ISBN is used internationally to identify books and their various editions.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </label>
        {{ form_errors(optionsForm.isbn) }}
        {{ form_widget(optionsForm.isbn) }}
      </fieldset>
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          {{ optionsForm.ean13.vars.label }}
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"{{ \"This type of product code is specific to Europe and Japan, but is widely used internationally. It is a superset of the UPC code: all products marked with an EAN will be accepted in North America.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </label>
        {{ form_errors(optionsForm.ean13) }}
        {{ form_widget(optionsForm.ean13) }}
      </fieldset>
    </div>
    <div class=\"row\">
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          {{ optionsForm.upc.vars.label }}
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"{{ \"This type of product code is widely used in the United States, Canada, the United Kingdom, Australia, New Zealand and in other countries.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </label>
        {{ form_errors(optionsForm.upc) }}
        {{ form_widget(optionsForm.upc) }}
      </fieldset>
      <fieldset class=\"col-md-4 form-group\">
        <label class=\"form-control-label\">
          {{ optionsForm.mpn.vars.label }}
          <span class=\"help-box\"
                data-toggle=\"popover\"
                data-content=\"{{ \"MPN is used internationally to identify the Manufacturer Part Number.\"|trans({}, 'Admin.Catalog.Help') }}\">
          </span>
        </label>
        {{ form_errors(optionsForm.mpn) }}
        {{ form_widget(optionsForm.mpn) }}
      </fieldset>
    </div>

    <div id=\"custom_fields\" class=\"mt-3\">
      <h2>{{ optionsForm.custom_fields.vars.label }}</h2>
      <p class=\"subtitle\">{{ 'Customers can personalize the product by entering some text or by providing custom image files.'|trans({}, 'Admin.Catalog.Feature') }}</p>
      {{ form_errors(optionsForm.custom_fields) }}
      <ul class=\"customFieldCollection nostyle\" data-prototype=\"
        {% apply escape %}
          {{ include('@Product/ProductPage/Forms/form_custom_fields.html.twig', { 'form': optionsForm.custom_fields.vars.prototype }) }}
        {% endapply %}\">
        {% for field in optionsForm.custom_fields %}
          <li>
            {{ include('@Product/ProductPage/Forms/form_custom_fields.html.twig', { 'form': field }) }}
          </li>
        {% endfor %}
      </ul>
      <a href=\"#\" class=\"btn btn-outline-secondary add\" data-role=\"add-customization-field\">
        <i class=\"material-icons\">add_circle</i>
        {{ 'Add a customization field'|trans({}, 'Admin.Catalog.Feature') }}
      </a>
    </div>

    <div class=\"row mt-4\">
      <div class=\"col-md-8\">
        <h2>{{ 'Attached files'|trans({}, 'Admin.Catalog.Feature') }}</h2>
        <p class=\"subtitle\">{{ 'Select the files (instructions, documentation, recipes, etc.) your customers can directly download on this product page.'|trans({}, 'Admin.Catalog.Feature') }}
          <br/>
          {{ 'Need to browse all files? Go to [1]Catalog > Files[/1]'|trans({'[1]':'<a href=\"'~getAdminLink(\"AdminAttachments\")~'\">','[/1]':'</a>'}, 'Admin.Catalog.Feature')|raw }}
        </p>
        {{ form_widget(optionsForm.attachments) }}
      </div>
    </div>
    <div class=\"row mt-3\">
      <div class=\"col-md-8\">
        <a class=\"btn btn-outline-secondary mb-3\" href=\"#collapsedForm\" data-toggle=\"collapse\" aria-expanded=\"false\" aria-controls=\"collapsedForm\">
          <i class=\"material-icons\">add_circle</i>
          {{ 'Attach a new file'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
        <fieldset class=\"form-group collapse\" id=\"collapsedForm\">
          {{ form_errors(optionsForm.attachment_product) }}
          <div id=\"form_step6_attachment_product\" data-action=\"{{ optionsForm.attachment_product.vars.attr['data-action'] }}\">
            <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.file) }}</div>
            <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.name) }}</div>
            <div class=\"form-group\">{{ form_widget(optionsForm.attachment_product.description) }}</div>
            <div class=\"form-group\">
              {{ form_widget(optionsForm.attachment_product.add) }}
              {{ form_widget(optionsForm.attachment_product.cancel) }}
            </div>
          </div>
        </fieldset>
      </div>
    </div>

    <div class=\"row mt-3\">
      <div class=\"col-md-8\" id=\"supplier_collection\">
        {{ include('@Product/ProductPage/Forms/form_supplier_choice.html.twig', { 'form': optionsForm }) }}
      </div>
    </div>
    <div id=\"supplier_combination_collection\" data-url=\"{{ path('admin_supplier_refresh_product_supplier_combination_form', { 'idProduct': productId, 'supplierIds': 1}) }}\">
      {{ include('@Product/ProductPage/Forms/form_supplier_combination.html.twig', { 'suppliers': optionsForm.suppliers.vars.value, 'form': optionsForm }) }}
    </div>

    {{ renderhook('displayAdminProductsOptionsStepBottom', { 'id_product': productId }) }}

  </div>
</div>
", "@Product/ProductPage/Panels/options.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Panels/options.html.twig");
    }
}
