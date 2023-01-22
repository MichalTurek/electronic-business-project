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

/* @PrestaShop/Admin/Helpers/range_inputs.html.twig */
class __TwigTemplate_41910a96bd949c0644bc13c910d99fac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/range_inputs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/range_inputs.html.twig"));

        // line 26
        echo "<script>
    \$(document).ready(function() {
        var sliderInput = \$('#";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "');
        var minInput = \$('#";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "_min');
        var maxInput = \$('#";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "_max');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<=', '";
        // line 37
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 37, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ",');
            value = value.replace('>=', '";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 38, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ",');
            value = value.split(',');
            value[0] = Number(value[0]);
            value[1] = Number(value[1]);
        } else {
            value = [";
        // line 43
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 43, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 43, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo "];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        // Init inputs
        if (value[0] > ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 50, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ")
            minInput.val(value[0]);
        if (value[1] < ";
        // line 52
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 52, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")
            maxInput.val(value[1]);

        // Change events
        var inputFlasher = function(input) {
            // animate input to highlight it (like a pulsate effect on jqueryUI)
            \$(input).stop().delay(100)
                    .fadeIn(100).fadeOut(100)
                    .queue(function() { \$(this).css(\"background-color\", \"#FF5555\").dequeue(); })
                    .fadeIn(160).fadeOut(160).fadeIn(160).fadeOut(160).fadeIn(160)
                    .animate({ backgroundColor: \"#FFFFFF\"}, 800);
        };
        var updater = function(srcElement) {
            var isMinModified = (srcElement.attr('id') == minInput.attr('id'));

            // retrieve values, replace ',' by '.', cast them into numbers (float/int)
            var newValues = [(minInput.val()!='')?Number(minInput.val().replace(',', '.')):";
        // line 68
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 68, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ", (maxInput.val()!='')?Number(maxInput.val().replace(',', '.')):";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 68, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo "];

            // if newValues are out of bounds, or not valid, fix the element.
            if (isMinModified && !(newValues[0] >= ";
        // line 71
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 71, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo " && newValues[0] <= ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 71, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")) {
                newValues[0] = ";
        // line 72
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 72, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ";
                minInput.val('');
                inputFlasher(minInput);
            }
            if (!isMinModified && !(newValues[1] >= ";
        // line 76
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 76, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo " && newValues[1] <= ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 76, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ")) {
                newValues[1] = ";
        // line 77
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 77, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ";
                maxInput.val('');
                inputFlasher(maxInput);
            }

            // if newValues are not ordered, fix the opposite input.
            if (isMinModified && newValues[0] > newValues[1]) {
                newValues[1] = newValues[0];
                maxInput.val(newValues[0]);
                inputFlasher(maxInput);
            }
            if (!isMinModified && newValues[0] > newValues[1]) {
                newValues[0] = newValues[1];
                minInput.val(newValues[0]);
                inputFlasher(minInput);
            }

            if (newValues[0] == ";
        // line 94
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 94, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo " && newValues[1] == ";
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 94, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '');
            } else if (newValues[0] == ";
        // line 96
        echo twig_escape_filter($this->env, ((array_key_exists("min", $context)) ? (_twig_default_filter((isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 96, $this->source); })()), "0")) : ("0")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '<='+newValues[1]);
            } else if (newValues[1] == ";
        // line 98
        echo twig_escape_filter($this->env, ((array_key_exists("max", $context)) ? (_twig_default_filter((isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 98, $this->source); })()), "1000000000")) : ("1000000000")), "html", null, true);
        echo ") {
                sliderInput.attr('sql', '>='+newValues[0]);
            } else {
                sliderInput.attr('sql', 'BETWEEN ' + newValues[0] + ' AND ' + newValues[1]);
            }

            ";
        // line 104
        if (array_key_exists("on_change_func_name", $context)) {
            // line 105
            echo "            var afterUpdate = function() {
                ";
            // line 106
            echo (isset($context["on_change_func_name"]) || array_key_exists("on_change_func_name", $context) ? $context["on_change_func_name"] : (function () { throw new RuntimeError('Variable "on_change_func_name" does not exist.', 106, $this->source); })());
            echo "
            };
            afterUpdate();
            ";
        }
        // line 110
        echo "        }
        minInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
        maxInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
    });
</script>
<div id=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "_div\">
    <input type=\"hidden\" id=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\" value=\"\" sql=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\" />
    <div>
        <input class=\"form-control form-min-max\" type=\"text\" id=\"";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "_min\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("minLabel", $context)) ? (_twig_default_filter((isset($context["minLabel"]) || array_key_exists("minLabel", $context) ? $context["minLabel"] : (function () { throw new RuntimeError('Variable "minLabel" does not exist.', 122, $this->source); })()), "Min")) : ("Min")), "html", null, true);
        echo "\" ";
        if (((array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 122, $this->source); })()), false)) : (false))) {
            echo "disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% Minimum Input", ["%inputId%" => (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 122, $this->source); })())], "Admin.Global"), "html", null, true);
        echo "\" />
    </div>
    <div>
        <input class=\"form-control form-min-max\" type=\"text\" id=\"";
        // line 125
        echo twig_escape_filter($this->env, (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 125, $this->source); })()), "html", null, true);
        echo "_max\" value=\"\" placeholder=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("maxLabel", $context)) ? (_twig_default_filter((isset($context["maxLabel"]) || array_key_exists("maxLabel", $context) ? $context["maxLabel"] : (function () { throw new RuntimeError('Variable "maxLabel" does not exist.', 125, $this->source); })()), "Max")) : ("Max")), "html", null, true);
        echo "\" ";
        if (((array_key_exists("disabled", $context)) ? (_twig_default_filter((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 125, $this->source); })()), false)) : (false))) {
            echo "disabled";
        }
        echo " aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% Maximum Input", ["%inputId%" => (isset($context["input_name"]) || array_key_exists("input_name", $context) ? $context["input_name"] : (function () { throw new RuntimeError('Variable "input_name" does not exist.', 125, $this->source); })())], "Admin.Global"), "html", null, true);
        echo "\" />
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Helpers/range_inputs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 125,  217 => 122,  208 => 120,  204 => 119,  193 => 110,  186 => 106,  183 => 105,  181 => 104,  172 => 98,  167 => 96,  160 => 94,  140 => 77,  134 => 76,  127 => 72,  121 => 71,  113 => 68,  94 => 52,  89 => 50,  77 => 43,  69 => 38,  65 => 37,  55 => 30,  51 => 29,  47 => 28,  43 => 26,);
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
{# Display a range input with min/max controls #}
<script>
    \$(document).ready(function() {
        var sliderInput = \$('#{{ input_name }}');
        var minInput = \$('#{{ input_name }}_min');
        var maxInput = \$('#{{ input_name }}_max');

        // parse and fix init value
        var value = sliderInput.attr('sql');
        if (value != '') {
            value = value.replace('BETWEEN ', '');
            value = value.replace(' AND ', ',');
            value = value.replace('<=', '{{ min|default('0') }},');
            value = value.replace('>=', '{{ max|default('1000000000') }},');
            value = value.split(',');
            value[0] = Number(value[0]);
            value[1] = Number(value[1]);
        } else {
            value = [{{ min|default('0') }}, {{ max|default('1000000000') }}];
        }
        value = value.sort(function sortNumber(a,b) {
            return a - b;
        });

        // Init inputs
        if (value[0] > {{ min|default('0') }})
            minInput.val(value[0]);
        if (value[1] < {{ max|default('1000000000') }})
            maxInput.val(value[1]);

        // Change events
        var inputFlasher = function(input) {
            // animate input to highlight it (like a pulsate effect on jqueryUI)
            \$(input).stop().delay(100)
                    .fadeIn(100).fadeOut(100)
                    .queue(function() { \$(this).css(\"background-color\", \"#FF5555\").dequeue(); })
                    .fadeIn(160).fadeOut(160).fadeIn(160).fadeOut(160).fadeIn(160)
                    .animate({ backgroundColor: \"#FFFFFF\"}, 800);
        };
        var updater = function(srcElement) {
            var isMinModified = (srcElement.attr('id') == minInput.attr('id'));

            // retrieve values, replace ',' by '.', cast them into numbers (float/int)
            var newValues = [(minInput.val()!='')?Number(minInput.val().replace(',', '.')):{{ min|default('0') }}, (maxInput.val()!='')?Number(maxInput.val().replace(',', '.')):{{ max|default('1000000000') }}];

            // if newValues are out of bounds, or not valid, fix the element.
            if (isMinModified && !(newValues[0] >= {{ min|default('0') }} && newValues[0] <= {{ max|default('1000000000') }})) {
                newValues[0] = {{ min|default('0') }};
                minInput.val('');
                inputFlasher(minInput);
            }
            if (!isMinModified && !(newValues[1] >= {{ min|default('0') }} && newValues[1] <= {{ max|default('1000000000') }})) {
                newValues[1] = {{ max|default('1000000000') }};
                maxInput.val('');
                inputFlasher(maxInput);
            }

            // if newValues are not ordered, fix the opposite input.
            if (isMinModified && newValues[0] > newValues[1]) {
                newValues[1] = newValues[0];
                maxInput.val(newValues[0]);
                inputFlasher(maxInput);
            }
            if (!isMinModified && newValues[0] > newValues[1]) {
                newValues[0] = newValues[1];
                minInput.val(newValues[0]);
                inputFlasher(minInput);
            }

            if (newValues[0] == {{ min|default('0') }} && newValues[1] == {{ max|default('1000000000') }}) {
                sliderInput.attr('sql', '');
            } else if (newValues[0] == {{ min|default('0') }}) {
                sliderInput.attr('sql', '<='+newValues[1]);
            } else if (newValues[1] == {{ max|default('1000000000') }}) {
                sliderInput.attr('sql', '>='+newValues[0]);
            } else {
                sliderInput.attr('sql', 'BETWEEN ' + newValues[0] + ' AND ' + newValues[1]);
            }

            {% if on_change_func_name is defined %}
            var afterUpdate = function() {
                {{ on_change_func_name|raw }}
            };
            afterUpdate();
            {% endif %}
        }
        minInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
        maxInput.on('change', function(event) {
            updater(\$(event.srcElement));
        });
    });
</script>
<div id=\"{{ input_name }}_div\">
    <input type=\"hidden\" id=\"{{ input_name }}\" name=\"{{ input_name }}\" value=\"\" sql=\"{{ value }}\" />
    <div>
        <input class=\"form-control form-min-max\" type=\"text\" id=\"{{ input_name }}_min\" value=\"\" placeholder=\"{{ minLabel|default('Min') }}\" {% if disabled|default(false) %}disabled{% endif %} aria-label=\"{{ \"%inputId% Minimum Input\"|trans({'%inputId%': input_name}, 'Admin.Global') }}\" />
    </div>
    <div>
        <input class=\"form-control form-min-max\" type=\"text\" id=\"{{ input_name }}_max\" value=\"\" placeholder=\"{{ maxLabel|default('Max') }}\" {% if disabled|default(false) %}disabled{% endif %} aria-label=\"{{ \"%inputId% Maximum Input\"|trans({'%inputId%': input_name}, 'Admin.Global') }}\" />
    </div>
</div>
", "@PrestaShop/Admin/Helpers/range_inputs.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/range_inputs.html.twig");
    }
}
