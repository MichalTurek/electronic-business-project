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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_e52ba50716cbdfc8a5f45f88c904222c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 27
        echo "
";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 28)) {
            // line 29
            echo "  ";
            $context["class"] = (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 29, $this->source); })()) . " ") . twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 29, $this->source); })()), "class", [], "any", false, false, false, 29));
        }
        // line 31
        echo "
";
        // line 32
        $context["confirmation_message"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 32, $this->source); })()), "options", [], "any", false, false, false, 32), "confirm_message", [], "any", false, false, false, 32);
        // line 33
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "confirm_message_type", [], "any", false, false, false, 33) == "dynamic") && twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "dynamic_message_field", [], "any", false, false, false, 33), [], "array", true, true, false, 33))) {
            // line 34
            echo "  ";
            $context["dynamic_field"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 34, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "dynamic_message_field", [], "any", false, false, false, 34), [], "array", false, false, false, 34);
            // line 35
            echo "  ";
            $context["confirmation_message"] = ((array_key_exists("dynamic_field", $context)) ? (_twig_default_filter((isset($context["dynamic_field"]) || array_key_exists("dynamic_field", $context) ? $context["dynamic_field"] : (function () { throw new RuntimeError('Variable "dynamic_field" does not exist.', 35, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "options", [], "any", false, false, false, 35), "confirm_message", [], "any", false, false, false, 35))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 35, $this->source); })()), "options", [], "any", false, false, false, 35), "confirm_message", [], "any", false, false, false, 35)));
        }
        // line 37
        echo "
";
        // line 38
        $context["route_params"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "route_param_name", [], "any", false, false, false, 38) => twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 38, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 38, $this->source); })()), "options", [], "any", false, false, false, 38), "route_param_field", [], "any", false, false, false, 38), [], "array", false, false, false, 38)];
        // line 39
        $context["extra_route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 39, $this->source); })()), "options", [], "any", false, false, false, 39), "extra_route_params", [], "any", false, false, false, 39);
        // line 40
        echo "
";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extra_route_params"]) || array_key_exists("extra_route_params", $context) ? $context["extra_route_params"] : (function () { throw new RuntimeError('Variable "extra_route_params" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 42
            echo "  ";
            $context["route_params"] = twig_array_merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 42, $this->source); })()), [$context["name"] => (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 42) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", false, false, false, 42)))) ? (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", false, false, false, 42)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
<a class=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45)), "html", null, true);
        echo "-row-link\"
   href=\"#\"
   data-confirm-message=\"";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["confirmation_message"]) || array_key_exists("confirmation_message", $context) ? $context["confirmation_message"] : (function () { throw new RuntimeError('Variable "confirmation_message" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "\"
   data-url=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 48, $this->source); })()), "options", [], "any", false, false, false, 48), "route", [], "any", false, false, false, 48), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 48, $this->source); })())), "html", null, true);
        echo "\"
   data-method=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 49, $this->source); })()), "options", [], "any", false, false, false, 49), "method", [], "any", false, false, false, 49), "html", null, true);
        echo "\"
  ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 50), "modal_options", [], "any", false, true, false, 50), "options", [], "any", true, true, false, 50)) {
            // line 51
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 51, $this->source); })()), "options", [], "any", false, false, false, 51), "modal_options", [], "any", false, false, false, 51), "options", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 52
                echo "      data-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["attribute"], ["_" => "-"]), "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  ";
        }
        // line 55
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 55, $this->source); })()), "tooltip_name", [], "any", false, false, false, 55)) {
            // line 56
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 58, $this->source); })()), "name", [], "any", false, false, false, 58), "html", null, true);
            echo "\"
  ";
        }
        // line 60
        echo ">
  ";
        // line 61
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 61, $this->source); })()), "icon", [], "any", false, false, false, 61))) {
            // line 62
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 62, $this->source); })()), "icon", [], "any", false, false, false, 62), "html", null, true);
            echo "</i>
  ";
        }
        // line 64
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 64, $this->source); })()), "tooltip_name", [], "any", false, false, false, 64)) {
            // line 65
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 65, $this->source); })()), "name", [], "any", false, false, false, 65), "html", null, true);
            echo "
  ";
        }
        // line 67
        echo "</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 67,  161 => 65,  158 => 64,  152 => 62,  150 => 61,  147 => 60,  142 => 58,  138 => 56,  135 => 55,  132 => 54,  121 => 52,  116 => 51,  114 => 50,  110 => 49,  106 => 48,  102 => 47,  95 => 45,  92 => 44,  85 => 42,  81 => 41,  78 => 40,  76 => 39,  74 => 38,  71 => 37,  67 => 35,  64 => 34,  62 => 33,  60 => 32,  57 => 31,  53 => 29,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% set class = 'btn tooltip-link js-submit-row-action' %}

{% if attributes.class is defined %}
  {% set class = class ~ ' ' ~ attributes.class %}
{% endif %}

{% set confirmation_message = action.options.confirm_message %}
{% if action.options.confirm_message_type == 'dynamic' and record[action.options.dynamic_message_field] is defined %}
  {% set dynamic_field = record[action.options.dynamic_message_field] %}
  {% set confirmation_message = dynamic_field|default(action.options.confirm_message) %}
{% endif %}

{% set route_params = { (action.options.route_param_name) : (record[action.options.route_param_field]) } %}
{% set extra_route_params = action.options.extra_route_params %}

{% for name, field in extra_route_params %}
  {% set route_params = route_params|merge({ (name) : (record[field] ?? field) }) %}
{% endfor %}

<a class=\"{{ class }} grid-{{ action.name|lower }}-row-link\"
   href=\"#\"
   data-confirm-message=\"{{ confirmation_message }}\"
   data-url=\"{{ path(action.options.route, route_params) }}\"
   data-method=\"{{ action.options.method }}\"
  {% if action.options.modal_options.options is defined %}
    {% for attribute, value in action.options.modal_options.options %}
      data-{{ attribute|replace({'_':'-'}) }}=\"{{ value }}\"
    {% endfor %}
  {% endif %}
  {% if attributes.tooltip_name %}
    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"{{ action.name }}\"
  {% endif %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/submit.html.twig");
    }
}
