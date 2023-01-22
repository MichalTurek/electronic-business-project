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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig */
class __TwigTemplate_1cf025ed9ba0b86e276851e036e38b3e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->loadTemplate("@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", 26, "754230952")->display(twig_array_merge($context, ["id" => (twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27) . "_grid_delete_categories_modal"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What do you want to do with the products associated with this category?", [], "Admin.Catalog.Notification"), "closable" => true, "closeLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "class" => "btn btn-danger btn-lg js-submit-delete-categories"]]]));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 27,  46 => 26,  43 => 25,);
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

{% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': grid.id ~ '_grid_delete_categories_modal',
  'title': \"What do you want to do with the products associated with this category?\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'closeLabel': \"Cancel\"|trans({}, 'Admin.Actions'),
  'actions': [{
    'type': 'button',
    'label': \"Delete\"|trans({}, 'Admin.Actions'),
    'class': 'btn btn-danger btn-lg js-submit-delete-categories',
  }],
} %}
  {% block content %}
    <div class=\"modal-body\">
      {{ form_start(deleteCategoriesForm, {'action': path('admin_categories_delete')}) }}

      <div class=\"form-group mb-0\">
        {{ form_widget(deleteCategoriesForm.delete_mode) }}
      </div>
      <span class=\"form-text text-muted\">
        {{ 'Note that if they have another category, your products will logically remain associated with it.'|trans({}, 'Admin.Catalog.Notification') }}
      </span>
      <div class=\"d-none\">
        {{ form_widget(deleteCategoriesForm.categories_to_delete) }}
      </div>
      <div class=\"d-none\">
        {{ form_widget(deleteCategoriesForm.categories_to_delete_parent) }}
      </div>
    </div>
  {% endblock %}
{% endembed %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig");
    }
}


/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig */
class __TwigTemplate_1cf025ed9ba0b86e276851e036e38b3e___754230952 extends Template
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
        // line 26
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "    <div class=\"modal-body\">
      ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 39, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_delete")]);
        echo "

      <div class=\"form-group mb-0\">
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 42, $this->source); })()), "delete_mode", [], "any", false, false, false, 42), 'widget');
        echo "
      </div>
      <span class=\"form-text text-muted\">
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Note that if they have another category, your products will logically remain associated with it.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "
      </span>
      <div class=\"d-none\">
        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 48, $this->source); })()), "categories_to_delete", [], "any", false, false, false, 48), 'widget');
        echo "
      </div>
      <div class=\"d-none\">
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["deleteCategoriesForm"]) || array_key_exists("deleteCategoriesForm", $context) ? $context["deleteCategoriesForm"] : (function () { throw new RuntimeError('Variable "deleteCategoriesForm" does not exist.', 51, $this->source); })()), "categories_to_delete_parent", [], "any", false, false, false, 51), 'widget');
        echo "
      </div>
    </div>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 51,  207 => 48,  201 => 45,  195 => 42,  189 => 39,  186 => 38,  176 => 37,  153 => 26,  47 => 27,  46 => 26,  43 => 25,);
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

{% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
  'id': grid.id ~ '_grid_delete_categories_modal',
  'title': \"What do you want to do with the products associated with this category?\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'closeLabel': \"Cancel\"|trans({}, 'Admin.Actions'),
  'actions': [{
    'type': 'button',
    'label': \"Delete\"|trans({}, 'Admin.Actions'),
    'class': 'btn btn-danger btn-lg js-submit-delete-categories',
  }],
} %}
  {% block content %}
    <div class=\"modal-body\">
      {{ form_start(deleteCategoriesForm, {'action': path('admin_categories_delete')}) }}

      <div class=\"form-group mb-0\">
        {{ form_widget(deleteCategoriesForm.delete_mode) }}
      </div>
      <span class=\"form-text text-muted\">
        {{ 'Note that if they have another category, your products will logically remain associated with it.'|trans({}, 'Admin.Catalog.Notification') }}
      </span>
      <div class=\"d-none\">
        {{ form_widget(deleteCategoriesForm.categories_to_delete) }}
      </div>
      <div class=\"d-none\">
        {{ form_widget(deleteCategoriesForm.categories_to_delete_parent) }}
      </div>
    </div>
  {% endblock %}
{% endembed %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/delete_categories_modal.html.twig");
    }
}
