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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_7d1672fd57d399124ac2c3e910a430c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["class"] = "btn tooltip-link js-link-row-action";
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
        $context["route_params"] = [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 32, $this->source); })()), "options", [], "any", false, false, false, 32), "route_param_name", [], "any", false, false, false, 32) => twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 32, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 32, $this->source); })()), "options", [], "any", false, false, false, 32), "route_param_field", [], "any", false, false, false, 32), [], "array", false, false, false, 32)];
        // line 33
        echo "  ";
        $context["extra_route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "extra_route_params", [], "any", false, false, false, 33);
        // line 34
        echo "
  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["extra_route_params"]) || array_key_exists("extra_route_params", $context) ? $context["extra_route_params"] : (function () { throw new RuntimeError('Variable "extra_route_params" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 36
            echo "    ";
            $context["route_params"] = twig_array_merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 36, $this->source); })()), [$context["name"] => (((twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 36) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", false, false, false, 36)) : ($context["field"]))]);
            // line 37
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<a class=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 39, $this->source); })()), "html", null, true);
        echo " grid-";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 39, $this->source); })()), "name", [], "any", false, false, false, 39)), [" " => "-"]), "html", null, true);
        echo "-row-link\"
   href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 40, $this->source); })()), "options", [], "any", false, false, false, 40), "route", [], "any", false, false, false, 40), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 40, $this->source); })())), "html", null, true);
        echo "\"
   data-confirm-message=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 41, $this->source); })()), "options", [], "any", false, false, false, 41), "confirm_message", [], "any", false, false, false, 41), "html", null, true);
        echo "\"
  ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 42, $this->source); })()), "tooltip_name", [], "any", false, false, false, 42)) {
            // line 43
            echo "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            echo "\"
  ";
        }
        // line 47
        echo "  data-clickable-row=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 47), "clickable_row", [], "any", true, true, false, 47)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 47), "clickable_row", [], "any", false, false, false, 47), false)) : (false)), "html", null, true);
        echo "\"
>
  ";
        // line 49
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 49, $this->source); })()), "icon", [], "any", false, false, false, 49))) {
            // line 50
            echo "    <i class=\"material-icons\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 50, $this->source); })()), "icon", [], "any", false, false, false, 50), "html", null, true);
            echo "</i>
  ";
        }
        // line 52
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 52, $this->source); })()), "tooltip_name", [], "any", false, false, false, 52)) {
            // line 53
            echo "    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
            echo "
  ";
        }
        // line 55
        echo "</a>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 55,  126 => 53,  123 => 52,  117 => 50,  115 => 49,  109 => 47,  104 => 45,  100 => 43,  98 => 42,  94 => 41,  90 => 40,  84 => 39,  81 => 38,  75 => 37,  72 => 36,  68 => 35,  65 => 34,  62 => 33,  60 => 32,  57 => 31,  53 => 29,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% set class = 'btn tooltip-link js-link-row-action' %}

{% if attributes.class is defined %}
  {% set class = class ~ ' ' ~ attributes.class %}
{% endif %}

  {% set route_params = { (action.options.route_param_name) : (record[action.options.route_param_field]) } %}
  {% set extra_route_params = action.options.extra_route_params %}

  {% for name, field in extra_route_params %}
    {% set route_params = route_params|merge({ (name) : (record[field] ?? field) }) %}
  {% endfor %}

<a class=\"{{ class }} grid-{{ action.name|lower|replace({' ': '-'}) }}-row-link\"
   href=\"{{ path(action.options.route, route_params ) }}\"
   data-confirm-message=\"{{ action.options.confirm_message }}\"
  {% if attributes.tooltip_name %}
    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"{{ action.name }}\"
  {% endif %}
  data-clickable-row=\"{{ action.options.clickable_row|default(false) }}\"
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Actions/Row/link.html.twig");
    }
}
