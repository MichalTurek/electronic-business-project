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

/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'content' => [$this, 'block_content'],
            'product_catalog_filters' => [$this, 'block_product_catalog_filters'],
            'product_catalog_tools' => [$this, 'block_product_catalog_tools'],
            'product_catalog_form' => [$this, 'block_product_catalog_form'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/Product/Themes/categories_theme.html.twig"], true);
        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 29
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product_catalog" . (isset($context["rtl_suffix"]) || array_key_exists("rtl_suffix", $context) ? $context["rtl_suffix"] : (function () { throw new RuntimeError('Variable "rtl_suffix" does not exist.', 29, $this->source); })())) . ".css")), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 33
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/catalog.bundle.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "  <div class=\"products-catalog card\">

    ";
        // line 44
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("legacy_block_kpi", ["kpi_controller" => "AdminProductsController"]);
        echo "

    <div class=\"content card-body\">

      ";
        // line 48
        if (twig_length_filter($this->env, (isset($context["permission_error"]) || array_key_exists("permission_error", $context) ? $context["permission_error"] : (function () { throw new RuntimeError('Variable "permission_error" does not exist.', 48, $this->source); })()))) {
            // line 49
            echo "          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["permission_error"]) || array_key_exists("permission_error", $context) ? $context["permission_error"] : (function () { throw new RuntimeError('Variable "permission_error" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "
            </p>
          </div>
      ";
        }
        // line 58
        echo "
      <div class=\"d-flex\">
        ";
        // line 60
        $this->displayBlock('product_catalog_filters', $context, $blocks);
        // line 69
        echo "        ";
        $this->displayBlock('product_catalog_tools', $context, $blocks);
        // line 72
        echo "      </div>

      ";
        // line 74
        $this->displayBlock('product_catalog_form', $context, $blocks);
        // line 98
        echo "
    </div>
  </div>

  ";
        // line 103
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 103, "478665775")->display(twig_array_merge($context, ["id" => "catalog_duplicate_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_duplicate_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplicating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 122
        echo "

  ";
        // line 125
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 125, "1519642937")->display(twig_array_merge($context, ["id" => "catalog_activate_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_activate_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 144
        echo "

  ";
        // line 147
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 147, "1985695436")->display(twig_array_merge($context, ["id" => "catalog_deactivate_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivating products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_deactivate_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivating...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 166
        echo "

  ";
        // line 169
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 169, "1110283020")->display(twig_array_merge($context, ["id" => "catalog_delete_all_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting products", [], "Admin.Catalog.Notification"), "closable" => true, "progressbar" => ["id" => "catalog_delete_all_progression", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deleting...", [], "Admin.Catalog.Notification")], "actions" => []]));
        // line 188
        echo "

  ";
        // line 191
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 191, "365073593")->display(twig_array_merge($context, ["id" => "catalog_deletion_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete products?", [], "Admin.Catalog.Feature"), "closable" => true, "closeLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "value" => "confirm", "class" => "btn btn-danger btn-lg"]]]));
        // line 209
        echo "
  ";
        // line 210
        $this->loadTemplate("@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210, "1145071897")->display(twig_array_merge($context, ["id" => "catalog_sql_query_modal", "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg"]]]));
        // line 230
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 60
    public function block_product_catalog_filters($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_filters"));

        // line 61
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/filters.html.twig", ["limit" =>         // line 62
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 62, $this->source); })()), "offset" =>         // line 63
(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 63, $this->source); })()), "orderBy" =>         // line 64
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 64, $this->source); })()), "sortOrder" =>         // line 65
(isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 65, $this->source); })())]);
        // line 67
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 69
    public function block_product_catalog_tools($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_tools"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_tools"));

        // line 70
        echo "          ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Blocks/tools.html.twig", ["import_link" => (isset($context["import_link"]) || array_key_exists("import_link", $context) ? $context["import_link"] : (function () { throw new RuntimeError('Variable "import_link" does not exist.', 70, $this->source); })())]);
        echo "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_product_catalog_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_form"));

        // line 75
        echo "        ";
        echo twig_include($this->env, $context, "@Product/CatalogPage/Forms/form_products.html.twig", ["limit" =>         // line 76
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 76, $this->source); })()), "orderBy" =>         // line 77
(isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 77, $this->source); })()), "offset" =>         // line 78
(isset($context["offset"]) || array_key_exists("offset", $context) ? $context["offset"] : (function () { throw new RuntimeError('Variable "offset" does not exist.', 78, $this->source); })()), "sortOrder" =>         // line 79
(isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 79, $this->source); })()), "filter_category" =>         // line 80
(isset($context["filter_category"]) || array_key_exists("filter_category", $context) ? $context["filter_category"] : (function () { throw new RuntimeError('Variable "filter_category" does not exist.', 80, $this->source); })()), "filter_column_id_product" =>         // line 81
(isset($context["filter_column_id_product"]) || array_key_exists("filter_column_id_product", $context) ? $context["filter_column_id_product"] : (function () { throw new RuntimeError('Variable "filter_column_id_product" does not exist.', 81, $this->source); })()), "filter_column_name" =>         // line 82
(isset($context["filter_column_name"]) || array_key_exists("filter_column_name", $context) ? $context["filter_column_name"] : (function () { throw new RuntimeError('Variable "filter_column_name" does not exist.', 82, $this->source); })()), "filter_column_reference" =>         // line 83
(isset($context["filter_column_reference"]) || array_key_exists("filter_column_reference", $context) ? $context["filter_column_reference"] : (function () { throw new RuntimeError('Variable "filter_column_reference" does not exist.', 83, $this->source); })()), "filter_column_name_category" =>         // line 84
(isset($context["filter_column_name_category"]) || array_key_exists("filter_column_name_category", $context) ? $context["filter_column_name_category"] : (function () { throw new RuntimeError('Variable "filter_column_name_category" does not exist.', 84, $this->source); })()), "filter_column_price" =>         // line 85
(isset($context["filter_column_price"]) || array_key_exists("filter_column_price", $context) ? $context["filter_column_price"] : (function () { throw new RuntimeError('Variable "filter_column_price" does not exist.', 85, $this->source); })()), "filter_column_sav_quantity" =>         // line 86
(isset($context["filter_column_sav_quantity"]) || array_key_exists("filter_column_sav_quantity", $context) ? $context["filter_column_sav_quantity"] : (function () { throw new RuntimeError('Variable "filter_column_sav_quantity" does not exist.', 86, $this->source); })()), "filter_column_active" =>         // line 87
(isset($context["filter_column_active"]) || array_key_exists("filter_column_active", $context) ? $context["filter_column_active"] : (function () { throw new RuntimeError('Variable "filter_column_active" does not exist.', 87, $this->source); })()), "has_category_filter" =>         // line 88
(isset($context["has_category_filter"]) || array_key_exists("has_category_filter", $context) ? $context["has_category_filter"] : (function () { throw new RuntimeError('Variable "has_category_filter" does not exist.', 88, $this->source); })()), "activate_drag_and_drop" =>         // line 89
(isset($context["activate_drag_and_drop"]) || array_key_exists("activate_drag_and_drop", $context) ? $context["activate_drag_and_drop"] : (function () { throw new RuntimeError('Variable "activate_drag_and_drop" does not exist.', 89, $this->source); })()), "products" =>         // line 90
(isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 90, $this->source); })()), "last_sql" =>         // line 91
(isset($context["last_sql"]) || array_key_exists("last_sql", $context) ? $context["last_sql"] : (function () { throw new RuntimeError('Variable "last_sql" does not exist.', 91, $this->source); })()), "product_count_filtered" =>         // line 92
(isset($context["product_count_filtered"]) || array_key_exists("product_count_filtered", $context) ? $context["product_count_filtered"] : (function () { throw new RuntimeError('Variable "product_count_filtered" does not exist.', 92, $this->source); })()), "pagination_parameters" =>         // line 93
(isset($context["pagination_parameters"]) || array_key_exists("pagination_parameters", $context) ? $context["pagination_parameters"] : (function () { throw new RuntimeError('Variable "pagination_parameters" does not exist.', 93, $this->source); })()), "pagination_limit_choices" =>         // line 94
(isset($context["pagination_limit_choices"]) || array_key_exists("pagination_limit_choices", $context) ? $context["pagination_limit_choices"] : (function () { throw new RuntimeError('Variable "pagination_limit_choices" does not exist.', 94, $this->source); })())]);
        // line 96
        echo "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096___478665775 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 103
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 103);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 113
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 114
        echo "      <div class=\"modal-body\">
        ";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplication in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duplication failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  644 => 117,  639 => 115,  636 => 114,  626 => 113,  603 => 103,  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096___1519642937 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 125
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 125);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 135
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 136
        echo "      <div class=\"modal-body\">
        ";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Activation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  971 => 139,  966 => 137,  963 => 136,  953 => 135,  930 => 125,  644 => 117,  639 => 115,  636 => 114,  626 => 113,  603 => 103,  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096___1985695436 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 147
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 147);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 157
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 158
        echo "      <div class=\"modal-body\">
        ";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivation in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 161
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deactivation failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1298 => 161,  1293 => 159,  1290 => 158,  1280 => 157,  1257 => 147,  971 => 139,  966 => 137,  963 => 136,  953 => 135,  930 => 125,  644 => 117,  639 => 115,  636 => 114,  626 => 113,  603 => 103,  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096___1110283020 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 169
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 169);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 179
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 180
        echo "      <div class=\"modal-body\">
        ";
        // line 181
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deletion in progress...", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Deletion failed.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1625 => 183,  1620 => 181,  1617 => 180,  1607 => 179,  1584 => 169,  1298 => 161,  1293 => 159,  1290 => 158,  1280 => 157,  1257 => 147,  971 => 139,  966 => 137,  963 => 136,  953 => 135,  930 => 125,  644 => 117,  639 => 115,  636 => 114,  626 => 113,  603 => 103,  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096___365073593 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 191
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 191);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 203
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 204
        echo "      <div class=\"modal-body\">
        ";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("These products will be deleted for good. Please confirm.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1947 => 205,  1944 => 204,  1934 => 203,  1911 => 191,  1625 => 183,  1620 => 181,  1617 => 180,  1607 => 179,  1584 => 169,  1298 => 161,  1293 => 159,  1290 => 158,  1280 => 157,  1257 => 147,  971 => 139,  966 => 137,  963 => 136,  953 => 135,  930 => 125,  644 => 117,  639 => 115,  636 => 114,  626 => 113,  603 => 103,  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/CatalogPage/catalog.html.twig */
class __TwigTemplate_8e9d073a813f8556d61e7930c278e096___1145071897 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 210
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", 210);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 221
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 222
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["sql_manager_add_link"]) || array_key_exists("sql_manager_add_link", $context) ? $context["sql_manager_add_link"] : (function () { throw new RuntimeError('Variable "sql_manager_add_link" does not exist.', 222, $this->source); })()), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2265 => 222,  2255 => 221,  2232 => 210,  1947 => 205,  1944 => 204,  1934 => 203,  1911 => 191,  1625 => 183,  1620 => 181,  1617 => 180,  1607 => 179,  1584 => 169,  1298 => 161,  1293 => 159,  1290 => 158,  1280 => 157,  1257 => 147,  971 => 139,  966 => 137,  963 => 136,  953 => 135,  930 => 125,  644 => 117,  639 => 115,  636 => 114,  626 => 113,  603 => 103,  320 => 96,  318 => 94,  317 => 93,  316 => 92,  315 => 91,  314 => 90,  313 => 89,  312 => 88,  311 => 87,  310 => 86,  309 => 85,  308 => 84,  307 => 83,  306 => 82,  305 => 81,  304 => 80,  303 => 79,  302 => 78,  301 => 77,  300 => 76,  298 => 75,  288 => 74,  275 => 70,  265 => 69,  254 => 67,  252 => 65,  251 => 64,  250 => 63,  249 => 62,  247 => 61,  237 => 60,  226 => 230,  224 => 210,  221 => 209,  218 => 191,  214 => 188,  211 => 169,  207 => 166,  204 => 147,  200 => 144,  197 => 125,  193 => 122,  190 => 103,  184 => 98,  182 => 74,  178 => 72,  175 => 69,  173 => 60,  169 => 58,  162 => 54,  155 => 49,  153 => 48,  146 => 44,  142 => 42,  132 => 41,  120 => 38,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  99 => 33,  89 => 32,  76 => 29,  66 => 28,  55 => 25,  53 => 26,  40 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% form_theme categories '@PrestaShop/Admin/Product/Themes/categories_theme.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/product_catalog' ~ rtl_suffix ~ '.css') }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
  <script src=\"{{ asset('themes/new-theme/public/catalog.bundle.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog card\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content card-body\">

      {% if permission_error|length %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
      {% endif %}

      <div class=\"d-flex\">
        {% block product_catalog_filters %}
          {{ include('@Product/CatalogPage/Blocks/filters.html.twig', {
              'limit': limit,
              'offset': offset,
              'orderBy': orderBy,
              'sortOrder': sortOrder
            })
          }}
        {% endblock %}
        {% block product_catalog_tools %}
          {{ include('@Product/CatalogPage/Blocks/tools.html.twig', {'import_link': import_link }) }}
        {% endblock %}
      </div>

      {% block product_catalog_form %}
        {{ include('@Product/CatalogPage/Forms/form_products.html.twig', {
            'limit': limit,
            'orderBy': orderBy,
            'offset': offset,
            'sortOrder': sortOrder,
            'filter_category': filter_category,
            'filter_column_id_product': filter_column_id_product,
            'filter_column_name': filter_column_name,
            'filter_column_reference': filter_column_reference,
            'filter_column_name_category': filter_column_name_category,
            'filter_column_price': filter_column_price,
            'filter_column_sav_quantity': filter_column_sav_quantity,
            'filter_column_active': filter_column_active,
            'has_category_filter': has_category_filter,
            'activate_drag_and_drop': activate_drag_and_drop,
            'products': products,
            'last_sql': last_sql,
            'product_count_filtered': product_count_filtered,
            'pagination_parameters': pagination_parameters,
            'pagination_limit_choices': pagination_limit_choices
          })
        }}
      {% endblock %}

    </div>
  </div>

  {# Duplication product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': 'Delete products?'|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'closeLabel': 'Cancel'|trans({}, 'Admin.Actions'),
    'actions': [{
      'type': 'button',
      'label': 'Delete'|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-danger btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/CatalogPage/catalog.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/catalog.html.twig");
    }
}
