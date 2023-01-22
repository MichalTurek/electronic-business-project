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

/* @PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig */
class __TwigTemplate_ebe08cca3516c49cbe04209feca5724d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'invoices_generate_by_status' => [$this, 'block_invoices_generate_by_status'],
            '_form_order_states_entry_label' => [$this, 'block__form_order_states_entry_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig"));

        // line 25
        echo "
";
        // line 27
        $macros["ps"] = $this->macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", 27)->unwrap();
        // line 28
        echo "
";
        // line 29
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["generateByStatusForm"]) || array_key_exists("generateByStatusForm", $context) ? $context["generateByStatusForm"] : (function () { throw new RuntimeError('Variable "generateByStatusForm" does not exist.', 29, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('invoices_generate_by_status', $context, $blocks);
        // line 60
        echo "
";
        // line 61
        $this->displayBlock('_form_order_states_entry_label', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 31
    public function block_invoices_generate_by_status($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "invoices_generate_by_status"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "invoices_generate_by_status"));

        // line 32
        echo "  <div id=\"by-status-block\">
    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateByStatusForm"]) || array_key_exists("generateByStatusForm", $context) ? $context["generateByStatusForm"] : (function () { throw new RuntimeError('Variable "generateByStatusForm" does not exist.', 33, $this->source); })()), 'form_start', ["method" => "POST", "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_order_invoices_generate_by_status"), "attr" => ["id" => "form-generate-invoices-by-status"]]);
        echo "
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        ";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("By order status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          <div class=\"form-group row\">
            ";
        // line 42
        echo twig_call_macro($macros["ps"], "macro_label_with_help", [$this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order statuses", [], "Admin.Orderscustomers.Feature"), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You can also export orders which have not been charged yet.", [], "Admin.Orderscustomers.Help")], 42, $context, $this->getSourceContext());
        echo "
            <div class=\"col-sm\">
              ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateByStatusForm"]) || array_key_exists("generateByStatusForm", $context) ? $context["generateByStatusForm"] : (function () { throw new RuntimeError('Variable "generateByStatusForm" does not exist.', 44, $this->source); })()), "order_states", [], "any", false, false, false, 44), 'errors');
        echo "
              ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generateByStatusForm"]) || array_key_exists("generateByStatusForm", $context) ? $context["generateByStatusForm"] : (function () { throw new RuntimeError('Variable "generateByStatusForm" does not exist.', 45, $this->source); })()), "order_states", [], "any", false, false, false, 45), 'widget');
        echo "
            </div>
          </div>
        </div>
        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["generateByStatusForm"]) || array_key_exists("generateByStatusForm", $context) ? $context["generateByStatusForm"] : (function () { throw new RuntimeError('Variable "generateByStatusForm" does not exist.', 49, $this->source); })()), 'rest');
        echo "
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"generate-pdf-by-status-button\">";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate PDF file by status", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generateByStatusForm"]) || array_key_exists("generateByStatusForm", $context) ? $context["generateByStatusForm"] : (function () { throw new RuntimeError('Variable "generateByStatusForm" does not exist.', 57, $this->source); })()), 'form_end');
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block__form_order_states_entry_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_order_states_entry_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_order_states_entry_label"));

        // line 62
        echo "  ";
        // line 63
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 64
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 65
                echo "      ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 65, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 65)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 65), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 65, $this->source); })())))]);
                // line 66
                echo "    ";
            }
            // line 67
            echo "    <div class=\"md-checkbox\">
      <label";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 68, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 69
            echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 69, $this->source); })());
            // line 70
            echo "<i class=\"md-checkbox-control\"></i>
        ";
            // line 71
            $context["badgeType"] = ((((isset($context["orders_count"]) || array_key_exists("orders_count", $context) ? $context["orders_count"] : (function () { throw new RuntimeError('Variable "orders_count" does not exist.', 71, $this->source); })()) > 0)) ? ("success") : ("danger"));
            // line 72
            echo "        <span class=\"badge badge-";
            echo twig_escape_filter($this->env, (isset($context["badgeType"]) || array_key_exists("badgeType", $context) ? $context["badgeType"] : (function () { throw new RuntimeError('Variable "badgeType" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["orders_count"]) || array_key_exists("orders_count", $context) ? $context["orders_count"] : (function () { throw new RuntimeError('Variable "orders_count" does not exist.', 72, $this->source); })()), "html", null, true);
            echo "</span>
        <span class=\"status-name\">";
            // line 74
            echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 74, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 74, $this->source); })())) : (""));
            // line 75
            echo "</span>
      </label>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 75,  199 => 74,  192 => 72,  190 => 71,  187 => 70,  185 => 69,  171 => 68,  168 => 67,  165 => 66,  162 => 65,  159 => 64,  156 => 63,  154 => 62,  144 => 61,  131 => 57,  124 => 53,  117 => 49,  110 => 45,  106 => 44,  101 => 42,  93 => 37,  86 => 33,  83 => 32,  73 => 31,  63 => 61,  60 => 60,  58 => 31,  55 => 30,  53 => 29,  50 => 28,  48 => 27,  45 => 25,);
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

{% trans_default_domain \"Admin.Orderscustomers.Feature\" %}
{% import '@PrestaShop/Admin/macros.html.twig' as ps %}

{% form_theme generateByStatusForm _self %}

{% block invoices_generate_by_status %}
  <div id=\"by-status-block\">
    {{ form_start(generateByStatusForm, {method: 'POST', action: path('admin_order_invoices_generate_by_status'), attr: {id: 'form-generate-invoices-by-status'}}) }}
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">schedule</i>
        {{ 'By order status'|trans }}
      </h3>
      <div class=\"card-body\">
        <div class=\"form-wrapper\">
          <div class=\"form-group row\">
            {{ ps.label_with_help(('Order statuses'|trans), ('You can also export orders which have not been charged yet.'|trans({}, 'Admin.Orderscustomers.Help'))) }}
            <div class=\"col-sm\">
              {{ form_errors(generateByStatusForm.order_states) }}
              {{ form_widget(generateByStatusForm.order_states) }}
            </div>
          </div>
        </div>
        {{ form_rest(generateByStatusForm) }}
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\" id=\"generate-pdf-by-status-button\">{{ 'Generate PDF file by status'|trans }}</button>
        </div>
      </div>
    </div>
    {{ form_end(generateByStatusForm) }}
  </div>
{% endblock %}

{% block _form_order_states_entry_label %}
  {# Do not display the label if widget is not defined in order to prevent double label rendering #}
  {% if widget is defined %}
    {% if parent_label_class is defined %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
    {% endif %}
    <div class=\"md-checkbox\">
      <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}
        <i class=\"md-checkbox-control\"></i>
        {% set badgeType = orders_count > 0 ? 'success' : 'danger' %}
        <span class=\"badge badge-{{ badgeType }}\">{{ orders_count }}</span>
        <span class=\"status-name\">
          {{- label is not same as(false) ? label|raw -}}
        </span>
      </label>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Order/Invoices/Blocks/generate_by_status.html.twig");
    }
}
