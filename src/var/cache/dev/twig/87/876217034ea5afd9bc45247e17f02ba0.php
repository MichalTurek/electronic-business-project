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

/* @Product/ProductPage/Forms/form_categories.html.twig */
class __TwigTemplate_948de5647a7e12fe1ee6cd4ab242ae15 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_categories.html.twig"));

        // line 25
        echo "<h2>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  <span class=\"help-box\" 
        data-toggle=\"popover\"
        data-content=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Where should the product be available on your site? The main category is where the product appears by default: this is the category which is seen in the product page's URL. Disabled categories are written in italics.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
  </span>
</h2>
<div class=\"categories-tree js-categories-tree\">
  <fieldset class=\"form-group\">
    <div class=\"ui-widget\">
      <div class=\"search search-with-icon\">
        <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1\" placeholder=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\">
      </div>
      <label class=\"form-control-label text-uppercase\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
      ";
        // line 38
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Category/categories.html.twig", ["categories" => (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 38, $this->source); })())]);
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "id_category_default", [], "any", false, false, false, 39), 'errors');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "id_category_default", [], "any", false, false, false, 40), 'widget');
        echo "
      <div class=\"categories-tree-actions js-categories-tree-actions\">
        <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "</span>
      </div>
      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "categories", [], "any", false, false, false, 45), 'widget', ["defaultCategory" => true, "defaultHidden" => true]);
        echo " ";
        // line 46
        echo "    </div>
  </fieldset>
  ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "categories", [], "any", false, false, false, 48), 'errors');
        echo "
  ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "categories", [], "any", false, false, false, 49), 'widget');
        echo " ";
        // line 50
        echo "</div>
<div id=\"add-categories\">
  <h2>
    ";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a new category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    <span class=\"help-box\" 
          data-toggle=\"popover\"
          data-content=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you want to quickly create a new category, you can do it here. Don’t forget to then go to the Categories page to fill in the needed details (description, image, etc.).  A new category will not automatically appear in your shop's menu, please read the Help about it.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
    </span>
  </h2>
  <div id=\"add-categories-content\" class=\"hide\">
    <div id=\"form_step1_new_category\" data-action=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_category_simple_add_form", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 60, $this->source); })())]), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("New category name", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "new_category", [], "any", false, false, false, 63), 'errors');
        echo "
        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "new_category", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), 'widget');
        echo "
      </fieldset>

    </div>

      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "new_category", [], "any", false, false, false, 70), "id_parent", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "label", [], "any", false, false, false, 70), "html", null, true);
        echo "</label>
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "new_category", [], "any", false, false, false, 71), "id_parent", [], "any", false, false, false, 71), 'widget');
        echo "
      </fieldset>

      <fieldset class=\"form-group text-sm-right\">
        <button type=\"reset\" id=\"form_step1_new_category_reset\" class=\"btn btn-outline-secondary btn-sm\">";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        echo "</button>
        <button type=\"button\" id=\"form_step1_new_category_save\" class=\"btn btn-primary save btn-sm\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create", [], "Admin.Actions"), "html", null, true);
        echo "</button>
      </fieldset>
    </div>

  <a href=\"#\" class=\"btn btn-outline-secondary open\" id=\"add-category-button\">
    <i class=\"material-icons\">add_circle</i>
    ";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create a category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  </a>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 82,  160 => 76,  156 => 75,  149 => 71,  145 => 70,  136 => 64,  132 => 63,  128 => 62,  123 => 60,  116 => 56,  110 => 53,  105 => 50,  102 => 49,  98 => 48,  94 => 46,  91 => 45,  86 => 43,  82 => 42,  77 => 40,  73 => 39,  69 => 38,  65 => 37,  60 => 35,  50 => 28,  43 => 25,);
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
<h2>{{ \"Categories\"|trans({}, 'Admin.Catalog.Feature') }}
  <span class=\"help-box\" 
        data-toggle=\"popover\"
        data-content=\"{{ \"Where should the product be available on your site? The main category is where the product appears by default: this is the category which is seen in the product page's URL. Disabled categories are written in italics.\"|trans({}, 'Admin.Catalog.Help') }}\" >
  </span>
</h2>
<div class=\"categories-tree js-categories-tree\">
  <fieldset class=\"form-group\">
    <div class=\"ui-widget\">
      <div class=\"search search-with-icon\">
        <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1\" placeholder=\"{{ 'Search categories'|trans({}, 'Admin.Catalog.Help') }}\">
      </div>
      <label class=\"form-control-label text-uppercase\">{{ 'Associated categories'|trans({}, 'Admin.Catalog.Feature') }}</label>
      {{ include('@PrestaShop/Admin/Category/categories.html.twig', {'categories': categories }) }}
      {{ form_errors(form.id_category_default) }}
      {{ form_widget(form.id_category_default) }}
      <div class=\"categories-tree-actions js-categories-tree-actions\">
        <span class=\"form-control-label\" id=\"categories-tree-expand\"><i class=\"material-icons\">expand_more</i>{{ \"Expand\"|trans({}, 'Admin.Actions') }}</span>
        <span class=\"form-control-label\" id=\"categories-tree-reduce\"><i class=\"material-icons\">expand_less</i>{{ \"Collapse\"|trans({}, 'Admin.Actions') }}</span>
      </div>
      {{ form_widget(form.categories, {'defaultCategory': true, defaultHidden: true}) }} {# see bootstrap_4_layout.html.twig #}
    </div>
  </fieldset>
  {{ form_errors(form.categories) }}
  {{ form_widget(form.categories) }} {# see bootstrap_4_layout.html.twig #}
</div>
<div id=\"add-categories\">
  <h2>
    {{ \"Create a new category\"|trans({}, 'Admin.Catalog.Feature') }}
    <span class=\"help-box\" 
          data-toggle=\"popover\"
          data-content=\"{{ \"If you want to quickly create a new category, you can do it here. Don’t forget to then go to the Categories page to fill in the needed details (description, image, etc.).  A new category will not automatically appear in your shop's menu, please read the Help about it.\"|trans({}, 'Admin.Catalog.Help') }}\" >
    </span>
  </h2>
  <div id=\"add-categories-content\" class=\"hide\">
    <div id=\"form_step1_new_category\" data-action=\"{{ path('admin_category_simple_add_form', {'id_product': productId }) }}\">
      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ \"New category name\"|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.new_category) }}
        {{ form_widget(form.new_category.name) }}
      </fieldset>

    </div>

      <fieldset class=\"form-group\">
        <label class=\"form-control-label\">{{ form.new_category.id_parent.vars.label }}</label>
        {{ form_widget(form.new_category.id_parent) }}
      </fieldset>

      <fieldset class=\"form-group text-sm-right\">
        <button type=\"reset\" id=\"form_step1_new_category_reset\" class=\"btn btn-outline-secondary btn-sm\">{{ 'Cancel'|trans({}, 'Admin.Actions') }}</button>
        <button type=\"button\" id=\"form_step1_new_category_save\" class=\"btn btn-primary save btn-sm\">{{ 'Create'|trans({}, 'Admin.Actions') }}</button>
      </fieldset>
    </div>

  <a href=\"#\" class=\"btn btn-outline-secondary open\" id=\"add-category-button\">
    <i class=\"material-icons\">add_circle</i>
    {{ 'Create a category'|trans({}, 'Admin.Catalog.Feature') }}
  </a>
</div>
", "@Product/ProductPage/Forms/form_categories.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_categories.html.twig");
    }
}
