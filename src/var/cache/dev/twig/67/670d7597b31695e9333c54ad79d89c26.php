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

/* @Product/ProductPage/Forms/form_supplier_choice.html.twig */
class __TwigTemplate_6aac4c522c29262dd5a95b1a635ecefa extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_supplier_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_supplier_choice.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "suppliers", [], "any", false, false, false, 25)) > 0)) {
            // line 26
            echo "  <div id=\"form_step6_suppliers_custom_fields\">
    <h2>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "suppliers", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "label", [], "any", false, false, false, 27), "html", null, true);
            echo "</h2>
    <div class=\"mb-1\">
      <div class=\"alert expandable-alert alert-info\" role=\"alert\">
        <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#suppliersInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
          ";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions");
            echo "
        </button>
        <p class=\"alert-text\">
          ";
            // line 34
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This interface allows you to specify the suppliers of the current product and its combinations, if any.", [], "Admin.Catalog.Help");
            echo "<br>
          ";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can specify supplier references according to previously associated suppliers.", [], "Admin.Catalog.Help");
            echo "
        </p>
        <div class=\"alert-more collapse\" id=\"suppliersInfo\">
          <p>
            ";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When using the advanced stock management tool (see Shop Parameters > Products settings), the values you define (price, references) will be used in supply orders.", [], "Admin.Catalog.Help");
            echo "
          </p>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "suppliers", [], "any", false, false, false, 48), 'errors');
            echo "
          <table class=\"table\" id=\"form_step6_suppliers\">
            <thead class=\"thead-default\">
              <tr>
                <th width=\"70%\">";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose the suppliers associated with this product", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
                <th width=\"30%\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Default supplier", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</th>
              </tr>
            </thead>
            <tbody>
              ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "suppliers", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["key"] => $context["supplier"]) {
                // line 58
                echo "                <tr>
                  <td>";
                // line 59
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["supplier"], 'widget');
                echo "</td>
                  <td>";
                // line 60
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "default_supplier", [], "any", false, false, false, 60), $context["key"], [], "array", false, false, false, 60), 'widget');
                echo "</td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['supplier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_supplier_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 63,  113 => 60,  109 => 59,  106 => 58,  102 => 57,  95 => 53,  91 => 52,  84 => 48,  72 => 39,  65 => 35,  61 => 34,  55 => 31,  48 => 27,  45 => 26,  43 => 25,);
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
{% if form.suppliers|length > 0 %}
  <div id=\"form_step6_suppliers_custom_fields\">
    <h2>{{ form.suppliers.vars.label }}</h2>
    <div class=\"mb-1\">
      <div class=\"alert expandable-alert alert-info\" role=\"alert\">
        <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#suppliersInfo\" aria-expanded=\"false\" aria-controls=\"collapseDanger\">
          {{ 'Read more'|trans({}, 'Admin.Actions')|raw }}
        </button>
        <p class=\"alert-text\">
          {{ 'This interface allows you to specify the suppliers of the current product and its combinations, if any.'|trans({}, 'Admin.Catalog.Help')|raw }}<br>
          {{ 'You can specify supplier references according to previously associated suppliers.'|trans({}, 'Admin.Catalog.Help')|raw }}
        </p>
        <div class=\"alert-more collapse\" id=\"suppliersInfo\">
          <p>
            {{ 'When using the advanced stock management tool (see Shop Parameters > Products settings), the values you define (price, references) will be used in supply orders.'|trans({}, 'Admin.Catalog.Help')|raw }}
          </p>
        </div>
      </div>
    </div>

    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        <div>
          {{ form_errors(form.suppliers) }}
          <table class=\"table\" id=\"form_step6_suppliers\">
            <thead class=\"thead-default\">
              <tr>
                <th width=\"70%\">{{ 'Choose the suppliers associated with this product'|trans({}, 'Admin.Catalog.Feature') }}</th>
                <th width=\"30%\">{{ 'Default supplier'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
              {% for key, supplier in form.suppliers %}
                <tr>
                  <td>{{ form_widget(supplier) }}</td>
                  <td>{{ form_widget(form.default_supplier[key]) }}</td>
                </tr>
              {% endfor %}
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
{% endif %}
", "@Product/ProductPage/Forms/form_supplier_choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_supplier_choice.html.twig");
    }
}
