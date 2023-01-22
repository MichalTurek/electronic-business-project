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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig */
class __TwigTemplate_d2b4487b78439d841e8cfc584fbf5e3c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig"));

        // line 25
        echo "
<button id=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_sprintf("%s_grid_bulk_action_%s", twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)), "html", null, true);
        echo "\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "submit_route", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "route_params", [], "any", false, false, false, 29)), "html", null, true);
        echo "\"
        data-form-method=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 30, $this->source); })()), "options", [], "any", false, false, false, 30), "submit_method", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
        data-confirm-message=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()), "options", [], "any", false, false, false, 31), "confirm_message", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
        ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 32, $this->source); })()), "options", [], "any", false, false, false, 32), "modal_options", [], "any", false, false, false, 32)) {
            // line 33
            echo "        data-close-button-label=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 33), "modal_options", [], "any", false, true, false, 33), "options", [], "any", false, true, false, 33), "close_button_label", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 33), "modal_options", [], "any", false, true, false, 33), "options", [], "any", false, true, false, 33), "close_button_label", [], "any", false, false, false, 33), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"))), "html", null, true);
            echo "\"
        data-confirm-title=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "modal_options", [], "any", false, false, false, 34), "options", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
            echo "\"
        data-confirm-button-class=\"";
            // line 35
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 35), "modal_options", [], "any", false, true, false, 35), "options", [], "any", false, true, false, 35), "confirm_button_class", [], "any", true, true, false, 35)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 35), "modal_options", [], "any", false, true, false, 35), "options", [], "any", false, true, false, 35), "confirm_button_class", [], "any", false, false, false, 35), "btn-primary")) : ("btn-primary")), "html", null, true);
            echo "\"
        data-confirm-button-label=\"";
            // line 36
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 36), "modal_options", [], "any", false, true, false, 36), "options", [], "any", false, true, false, 36), "confirm_button_label", [], "any", true, true, false, 36)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 36), "modal_options", [], "any", false, true, false, 36), "options", [], "any", false, true, false, 36), "confirm_button_label", [], "any", false, false, false, 36), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm", [], "Admin.Actions"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Confirm", [], "Admin.Actions"))), "html", null, true);
            echo "\"
        ";
        }
        // line 38
        echo ">
  ";
        // line 39
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 39, $this->source); })()), "icon", [], "any", false, false, false, 39))) {
            // line 40
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 40, $this->source); })()), "icon", [], "any", false, false, false, 40), "html", null, true);
            echo "</i>
  ";
        }
        // line 42
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "
</button>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  89 => 40,  87 => 39,  84 => 38,  79 => 36,  75 => 35,  71 => 34,  66 => 33,  64 => 32,  60 => 31,  56 => 30,  52 => 29,  46 => 26,  43 => 25,);
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

<button id=\"{{ '%s_grid_bulk_action_%s'|format(grid.id, action.id) }}\"
        class=\"dropdown-item js-bulk-action-submit-btn\"
        type=\"button\"
        data-form-url=\"{{ path(action.options.submit_route, action.options.route_params) }}\"
        data-form-method=\"{{ action.options.submit_method }}\"
        data-confirm-message=\"{{ action.options.confirm_message }}\"
        {% if action.options.modal_options %}
        data-close-button-label=\"{{ action.options.modal_options.options.close_button_label|default('Close'|trans({}, 'Admin.Actions')) }}\"
        data-confirm-title=\"{{ action.options.modal_options.options.title }}\"
        data-confirm-button-class=\"{{ action.options.modal_options.options.confirm_button_class|default('btn-primary') }}\"
        data-confirm-button-label=\"{{ action.options.modal_options.options.confirm_button_label|default('Confirm'|trans({}, 'Admin.Actions')) }}\"
        {% endif %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {{ action.name }}
</button>
", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/submit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Bulk/submit.html.twig");
    }
}
