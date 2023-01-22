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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig */
class __TwigTemplate_4b2129fdd25f4f6cc7917a94c485752e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_form_block' => [$this, 'block_category_form_block'],
            'category_tool_serp' => [$this, 'block_category_tool_serp'],
            'category_form_rest' => [$this, 'block_category_form_rest'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig"));

        // line 25
        echo "
";
        // line 26
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 26)->unwrap();
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('category_form_block', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_category_form_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_block"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_block"));

        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["data-id" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) || array_key_exists("categoryId", $context) ? $context["categoryId"] : (function () { throw new RuntimeError('Variable "categoryId" does not exist.', 29, $this->source); })()), 0)) : (0))]]);
        echo "
<div class=\"card\">
  <h3 class=\"card-header\">
    ";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 36, $this->source); })()), 'errors');
        echo "

      ";
        // line 38
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Global"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]], 38, $context, $this->getSourceContext());
        // line 41
        echo "

      <div class=\"form-group row\">
        ";
        // line 44
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Displayed", [], "Admin.Global"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Click on \"%displayed_label%\" to index the category on your shop.", ["%displayed_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Displayed", [], "Admin.Global")], "Admin.Catalog.Help")], 44, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm\">
          ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 46, $this->source); })()), "active", [], "any", false, false, false, 46), 'widget');
        echo "
          <small class=\"form-text\">
            ";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you want a category to appear in the menu of your shop, go to [1]Modules > Module Manager[/1] and configure your menu module.", ["[1]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage")) . "\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">"), "[/1]" => "</a>"], "Admin.Catalog.Help");
        // line 51
        echo "
          </small>
        </div>
      </div>

      ";
        // line 56
        if (twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "id_parent", [], "any", true, true, false, 56)) {
            // line 57
            echo "      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 59, $this->source); })()), "vars", [], "any", false, false, false, 59), "required", [], "any", false, false, false, 59)) {
                // line 60
                echo "            <span class=\"text-danger\">*</span>
          ";
            }
            // line 62
            echo "
          ";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Parent category", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "
        </label>
        <div class=\"col-sm\">
          ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 66, $this->source); })()), "id_parent", [], "any", false, false, false, 66), 'widget');
            echo "
        </div>
      </div>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 71, $this->source); })()), "description", [], "any", false, false, false, 71), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Description", [], "Admin.Global"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]], 71, $context, $this->getSourceContext());
        // line 74
        echo "

      ";
        // line 76
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 76, $this->source); })()), "additional_description", [], "any", false, false, false, 76), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Additional description", [], "Admin.Catalog.Feature"), "help" => ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")]], 76, $context, $this->getSourceContext());
        // line 79
        echo "

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category cover image", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 86
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 86)->display($context);
        // line 87
        echo "
          ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 88, $this->source); })()), "cover_image", [], "any", false, false, false, 88), 'widget');
        echo "

          <small class=\"form-text\">
            ";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category thumbnail", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 101
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 101)->display($context);
        // line 102
        echo "
          ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 103, $this->source); })()), "thumbnail_image", [], "any", false, false, false, 103), 'widget');
        echo "

          <small class=\"form-text\">
            ";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Displays a small image in the parent category's page, if the theme allows it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          ";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu thumbnails", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </label>
        <div class=\"col-sm\">
          ";
        // line 116
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", 116)->display($context);
        // line 117
        echo "
          ";
        // line 118
        if ((isset($context["allowMenuThumbnailsUpload"]) || array_key_exists("allowMenuThumbnailsUpload", $context) ? $context["allowMenuThumbnailsUpload"] : (function () { throw new RuntimeError('Variable "allowMenuThumbnailsUpload" does not exist.', 118, $this->source); })())) {
            // line 119
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 119, $this->source); })()), "menu_thumbnail_images", [], "any", false, false, false, 119), 'widget');
            echo "
          ";
        } else {
            // line 121
            echo "            <div class=\"d-none\">
              ";
            // line 122
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 122, $this->source); })()), "menu_thumbnail_images", [], "any", false, false, false, 122), 'widget');
            echo "
            </div>

            <div class=\"alert alert-warning\" role=\"alert\">
              <p class=\"alert-text\">
                ";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You have reached the limit (%s) of files to upload, please remove files to continue uploading", ["%s" => (isset($context["maxMenuThumbnails"]) || array_key_exists("maxMenuThumbnails", $context) ? $context["maxMenuThumbnails"] : (function () { throw new RuntimeError('Variable "maxMenuThumbnails" does not exist.', 127, $this->source); })())], "Admin.Catalog.Notification"), "html", null, true);
            echo "
              </p>
            </div>
          ";
        }
        // line 131
        echo "          <small class=\"form-text\">
            ";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The category thumbnail appears in the menu as a small image representing the category, if the theme allows it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
          </small>
        </div>
      </div>

      ";
        // line 137
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeCategory");
        echo "

      ";
        // line 139
        $this->displayBlock('category_tool_serp', $context, $blocks);
        // line 150
        echo "
      <div class=\"form-group row\">
        ";
        // line 152
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta title", [], "Admin.Global"), ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")], 152, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm\">
          ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 154, $this->source); })()), "meta_title", [], "any", false, false, false, 154), 'widget');
        echo "
        </div>
      </div>

      <div class=\"form-group row\">
        ";
        // line 159
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta description", [], "Admin.Global"), ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}")], 159, $context, $this->getSourceContext());
        echo "
        <div class=\"col-sm\">
          ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 161, $this->source); })()), "meta_description", [], "any", false, false, false, 161), 'widget');
        echo "
        </div>
      </div>

      ";
        // line 165
        ob_start();
        // line 166
        echo "        ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To add tags, click in the field, write something, and then press the \"Enter\" key.", [], "Admin.Shopparameters.Help"), "html", null, true);
        echo "
        ";
        // line 167
        echo twig_escape_filter($this->env, ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid characters:", [], "Admin.Notifications.Info") . " <>;=#{}"), "html", null, true);
        echo "
      ";
        $context["metaKeywordHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 169
        echo "
      ";
        // line 170
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 170, $this->source); })()), "meta_keyword", [], "any", false, false, false, 170), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Meta keywords", [], "Admin.Global"), "help" =>         // line 172
(isset($context["metaKeywordHelp"]) || array_key_exists("metaKeywordHelp", $context) ? $context["metaKeywordHelp"] : (function () { throw new RuntimeError('Variable "metaKeywordHelp" does not exist.', 172, $this->source); })())]], 170, $context, $this->getSourceContext());
        // line 173
        echo "

      ";
        // line 175
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 175, $this->source); })()), "link_rewrite", [], "any", false, false, false, 175), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Friendly URL", [], "Admin.Global"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Only letters, numbers, underscore (_) and the minus (-) character are allowed.", [], "Admin.Catalog.Help")]], 175, $context, $this->getSourceContext());
        // line 178
        echo "

      ";
        // line 180
        echo twig_call_macro($macros["ps"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 180, $this->source); })()), "group_association", [], "any", false, false, false, 180), [], ["label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group access", [], "Admin.Catalog.Feature"), "help" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Mark all of the customer groups which you would like to have access to this category.", [], "Admin.Catalog.Help")]], 180, $context, $this->getSourceContext());
        // line 183
        echo "

      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You now have three default customer groups.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "</strong>
            </p>

            <p>";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people without a valid customer account.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defaultGroups"]) || array_key_exists("defaultGroups", $context) ? $context["defaultGroups"] : (function () { throw new RuntimeError('Variable "defaultGroups" does not exist.', 193, $this->source); })()), "visitorsGroup", [], "any", false, false, false, 193), "name", [], "any", false, false, false, 193)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - Customer who placed an order with the guest checkout.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defaultGroups"]) || array_key_exists("defaultGroups", $context) ? $context["defaultGroups"] : (function () { throw new RuntimeError('Variable "defaultGroups" does not exist.', 194, $this->source); })()), "guestsGroup", [], "any", false, false, false, 194), "name", [], "any", false, false, false, 194)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
            <p>";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%group_name% - All people who have created an account on this site.", ["%group_name%" => (("<strong>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["defaultGroups"]) || array_key_exists("defaultGroups", $context) ? $context["defaultGroups"] : (function () { throw new RuntimeError('Variable "defaultGroups" does not exist.', 195, $this->source); })()), "customersGroup", [], "any", false, false, false, 195), "name", [], "any", false, false, false, 195)) . "</strong>")], "Admin.Catalog.Feature");
        echo "</p>
          </div>
        </div>
      </div>

      ";
        // line 200
        if (twig_get_attribute($this->env, $this->source, ($context["categoryForm"] ?? null), "shop_association", [], "any", true, true, false, 200)) {
            // line 201
            echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            ";
            // line 203
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop association", [], "Admin.Global"), "html", null, true);
            echo "
          </label>
          <div class=\"col-sm\">
            ";
            // line 206
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 206, $this->source); })()), "shop_association", [], "any", false, false, false, 206), 'widget');
            echo "
          </div>
        </div>
      ";
        }
        // line 210
        echo "
      ";
        // line 211
        $this->displayBlock('category_form_rest', $context, $blocks);
        // line 214
        echo "    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\" class=\"btn btn-outline-secondary\">
      ";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Admin.Actions"), "html", null, true);
        echo "</button>
  </div>
</div>
";
        // line 223
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 223, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 139
    public function block_category_tool_serp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tool_serp"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tool_serp"));

        // line 140
        echo "        <div class=\"form-group row\">
          <label class=\"form-control-label\">";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEO preview", [], "Admin.Global"), "html", null, true);
        echo "</label>
          <div class=\"col-sm\">
            <div id=\"serp-app\" data-category-url=\"";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["categoryUrl"]) || array_key_exists("categoryUrl", $context) ? $context["categoryUrl"] : (function () { throw new RuntimeError('Variable "categoryUrl" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "\"></div>
            <small class=\"form-text\">
              ";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is a preview of how your page will appear in search engine results.", [], "Admin.Global"), "html", null, true);
        echo "
            </small>
          </div>
        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 211
    public function block_category_form_rest($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_form_rest"));

        // line 212
        echo "        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 212, $this->source); })()), 'rest');
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  465 => 212,  455 => 211,  440 => 145,  435 => 143,  430 => 141,  427 => 140,  417 => 139,  405 => 223,  399 => 220,  394 => 218,  390 => 217,  385 => 214,  383 => 211,  380 => 210,  373 => 206,  367 => 203,  363 => 201,  361 => 200,  353 => 195,  349 => 194,  345 => 193,  339 => 190,  330 => 183,  328 => 180,  324 => 178,  322 => 175,  318 => 173,  316 => 172,  315 => 170,  312 => 169,  307 => 167,  302 => 166,  300 => 165,  293 => 161,  288 => 159,  280 => 154,  275 => 152,  271 => 150,  269 => 139,  264 => 137,  256 => 132,  253 => 131,  246 => 127,  238 => 122,  235 => 121,  229 => 119,  227 => 118,  224 => 117,  222 => 116,  216 => 113,  206 => 106,  200 => 103,  197 => 102,  195 => 101,  189 => 98,  179 => 91,  173 => 88,  170 => 87,  168 => 86,  162 => 83,  156 => 79,  154 => 76,  150 => 74,  148 => 71,  145 => 70,  138 => 66,  132 => 63,  129 => 62,  125 => 60,  123 => 59,  119 => 57,  117 => 56,  110 => 51,  108 => 48,  103 => 46,  98 => 44,  93 => 41,  91 => 38,  86 => 36,  79 => 32,  73 => 29,  54 => 28,  51 => 27,  49 => 26,  46 => 25,);
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

{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% block category_form_block %}
{{ form_start(categoryForm, {'attr': {'data-id': categoryId|default(0)}}) }}
<div class=\"card\">
  <h3 class=\"card-header\">
    {{ 'Category'|trans({}, 'Admin.Catalog.Feature') }}
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ form_errors(categoryForm) }}

      {{ ps.form_group_row(categoryForm.name, {}, {
        'label': 'Name'|trans({}, 'Admin.Global'),
        'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      <div class=\"form-group row\">
        {{ ps.label_with_help(('Displayed'|trans({}, 'Admin.Global')), ('Click on \"%displayed_label%\" to index the category on your shop.'|trans({'%displayed_label%': 'Displayed'|trans({}, 'Admin.Global')}, 'Admin.Catalog.Help'))) }}
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.active) }}
          <small class=\"form-text\">
            {{ 'If you want a category to appear in the menu of your shop, go to [1]Modules > Module Manager[/1] and configure your menu module.'|trans({
              '[1]': '<a href=\"' ~ path('admin_module_manage') ~ '\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">',
              '[/1]': '</a>'
            }, 'Admin.Catalog.Help')|raw }}
          </small>
        </div>
      </div>

      {% if categoryForm.id_parent is defined %}
      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {% if categoryForm.vars.required %}
            <span class=\"text-danger\">*</span>
          {% endif %}

          {{ 'Parent category'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.id_parent) }}
        </div>
      </div>
      {% endif %}

      {{ ps.form_group_row(categoryForm.description, {}, {
        'label': 'Description'|trans({}, 'Admin.Global'),
        'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      {{ ps.form_group_row(categoryForm.additional_description, {}, {
        'label': 'Additional description'|trans({}, 'Admin.Catalog.Feature'),
        'help': 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}'
      }) }}

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Category cover image'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig' %}

          {{ form_widget(categoryForm.cover_image) }}

          <small class=\"form-text\">
            {{ 'This is the main image for your category, displayed in the category page. The category description will overlap this image and appear in its top-left corner.'|trans({}, 'Admin.Catalog.Help') }}
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Category thumbnail'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/thumbnail_image.html.twig' %}

          {{ form_widget(categoryForm.thumbnail_image) }}

          <small class=\"form-text\">
            {{ 'Displays a small image in the parent category\\'s page, if the theme allows it.'|trans({}, 'Admin.Catalog.Help') }}
          </small>
        </div>
      </div>

      <div class=\"form-group row\">
        <label class=\"form-control-label\">
          {{ 'Menu thumbnails'|trans({}, 'Admin.Catalog.Feature') }}
        </label>
        <div class=\"col-sm\">
          {% include '@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig' %}

          {% if allowMenuThumbnailsUpload %}
            {{ form_widget(categoryForm.menu_thumbnail_images) }}
          {% else %}
            <div class=\"d-none\">
              {{ form_widget(categoryForm.menu_thumbnail_images) }}
            </div>

            <div class=\"alert alert-warning\" role=\"alert\">
              <p class=\"alert-text\">
                {{ 'You have reached the limit (%s) of files to upload, please remove files to continue uploading'|trans({'%s': maxMenuThumbnails}, 'Admin.Catalog.Notification') }}
              </p>
            </div>
          {% endif %}
          <small class=\"form-text\">
            {{ 'The category thumbnail appears in the menu as a small image representing the category, if the theme allows it.'|trans({}, 'Admin.Catalog.Help') }}
          </small>
        </div>
      </div>

      {{ renderhook('displayBackOfficeCategory') }}

      {% block category_tool_serp %}
        <div class=\"form-group row\">
          <label class=\"form-control-label\">{{ 'SEO preview'|trans({}, 'Admin.Global') }}</label>
          <div class=\"col-sm\">
            <div id=\"serp-app\" data-category-url=\"{{ categoryUrl }}\"></div>
            <small class=\"form-text\">
              {{ 'Here is a preview of how your page will appear in search engine results.'|trans({}, 'Admin.Global') }}
            </small>
          </div>
        </div>
      {% endblock %}

      <div class=\"form-group row\">
        {{ ps.label_with_help(('Meta title'|trans({}, 'Admin.Global')), ('Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}')) }}
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.meta_title) }}
        </div>
      </div>

      <div class=\"form-group row\">
        {{ ps.label_with_help(('Meta description'|trans({}, 'Admin.Global')), ('Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}')) }}
        <div class=\"col-sm\">
          {{ form_widget(categoryForm.meta_description) }}
        </div>
      </div>

      {% set metaKeywordHelp %}
        {{ 'To add tags, click in the field, write something, and then press the \"Enter\" key.'|trans({}, 'Admin.Shopparameters.Help') }}
        {{ 'Invalid characters:'|trans({}, 'Admin.Notifications.Info') ~ ' <>;=#{}' }}
      {% endset %}

      {{ ps.form_group_row(categoryForm.meta_keyword, {}, {
        'label': 'Meta keywords'|trans({}, 'Admin.Global'),
        'help': metaKeywordHelp
      }) }}

      {{ ps.form_group_row(categoryForm.link_rewrite, {}, {
        'label': 'Friendly URL'|trans({}, 'Admin.Global'),
        'help': 'Only letters, numbers, underscore (_) and the minus (-) character are allowed.'|trans({}, 'Admin.Catalog.Help')
      }) }}

      {{ ps.form_group_row(categoryForm.group_association, {}, {
        'label': 'Group access'|trans({}, 'Admin.Catalog.Feature'),
        'help': 'Mark all of the customer groups which you would like to have access to this category.'|trans({}, 'Admin.Catalog.Help')
      }) }}

      <div class=\"form-group row\">
        <label class=\"form-control-label\"></label>
        <div class=\"col-sm\">
          <div class=\"alert alert-info\">
            <p class=\"mb-1\">
              <strong>{{ 'You now have three default customer groups.'|trans({}, 'Admin.Catalog.Help') }}</strong>
            </p>

            <p>{{ '%group_name% - All people without a valid customer account.'|trans({'%group_name%': '<strong>' ~ defaultGroups.visitorsGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
            <p>{{ '%group_name% - Customer who placed an order with the guest checkout.'|trans({'%group_name%': '<strong>' ~ defaultGroups.guestsGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
            <p>{{ '%group_name% - All people who have created an account on this site.'|trans({'%group_name%': '<strong>' ~ defaultGroups.customersGroup.name ~ '</strong>'}, 'Admin.Catalog.Feature')|raw }}</p>
          </div>
        </div>
      </div>

      {% if categoryForm.shop_association is defined %}
        <div class=\"form-group row\">
          <label class=\"form-control-label\">
            {{ 'Shop association'|trans({}, 'Admin.Global') }}
          </label>
          <div class=\"col-sm\">
            {{ form_widget(categoryForm.shop_association) }}
          </div>
        </div>
      {% endif %}

      {% block category_form_rest %}
        {{ form_rest(categoryForm) }}
      {% endblock %}
    </div>
  </div>
  <div class=\"card-footer\">
    <a href=\"{{ path('admin_categories_index') }}\" class=\"btn btn-outline-secondary\">
      {{ 'Cancel'|trans({}, 'Admin.Actions') }}
    </a>
    <button class=\"btn btn-primary float-right\" id=\"save-button\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
  </div>
</div>
{{ form_end(categoryForm) }}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/form.html.twig");
    }
}
