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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig */
class __TwigTemplate_94d2e0ab7c8a0c19e1e74e5bfb783f6a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["choices"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "choice_provider", [], "any", false, false, false, 26), "getChoices", [0 => (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 26, $this->source); })())], "method", false, false, false, 26);
        // line 27
        $context["selectedChoice"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "field", [], "any", false, false, false, 27), [], "array", false, false, false, 27);
        // line 28
        $context["selectedChoiceName"] = "";
        // line 29
        $context["routeParams"] = $this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->arrayPluck((isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "record_route_params", [], "any", false, false, false, 29));
        // line 30
        echo "
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
            // line 32
            echo "  ";
            if (($context["value"] == (isset($context["selectedChoice"]) || array_key_exists("selectedChoice", $context) ? $context["selectedChoice"] : (function () { throw new RuntimeError('Variable "selectedChoice" does not exist.', 32, $this->source); })()))) {
                // line 33
                echo "    ";
                $context["selectedChoiceName"] = $context["name"];
                // line 34
                echo "  ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
";
        // line 37
        $context["classes"] = "btn btn-secondary dropdown-toggle dropdown-toggle-split rounded";
        // line 38
        echo "
";
        // line 39
        if ( !twig_test_empty((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 39, $this->source); })()))) {
            // line 40
            echo "  <div class=\"dropdown\">
    <button
      ";
            // line 42
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 42, $this->source); })()), "options", [], "any", false, false, false, 42), "color_field", [], "any", false, false, false, 42)) {
                // line 43
                echo "        ";
                $context["textColor"] = (($this->env->getFunction('is_color_bright')->getCallable()(twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 43, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 43, $this->source); })()), "options", [], "any", false, false, false, 43), "color_field", [], "any", false, false, false, 43), [], "array", false, false, false, 43))) ? ("#383838") : ("white"));
                // line 44
                echo "        style=\"background-color: ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 44, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 44, $this->source); })()), "options", [], "any", false, false, false, 44), "color_field", [], "any", false, false, false, 44), [], "array", false, false, false, 44), "html", null, true);
                echo "; color: ";
                echo twig_escape_filter($this->env, (isset($context["textColor"]) || array_key_exists("textColor", $context) ? $context["textColor"] : (function () { throw new RuntimeError('Variable "textColor" does not exist.', 44, $this->source); })()), "html", null, true);
                echo ";\"
        ";
                // line 45
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 45, $this->source); })()) . " coloured");
                // line 46
                echo "      ";
            }
            // line 47
            echo "      class=\"";
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 47, $this->source); })()), "html", null, true);
            echo "\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
      data-flip=\"false\"
    >
      ";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["selectedChoiceName"]) || array_key_exists("selectedChoiceName", $context) ? $context["selectedChoiceName"] : (function () { throw new RuntimeError('Variable "selectedChoiceName" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "
    </button>
    <div
      class=\"dropdown-menu js-choice-options\"
      data-url=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 58, $this->source); })()), "options", [], "any", false, false, false, 58), "route", [], "any", false, false, false, 58), (isset($context["routeParams"]) || array_key_exists("routeParams", $context) ? $context["routeParams"] : (function () { throw new RuntimeError('Variable "routeParams" does not exist.', 58, $this->source); })())), "html", null, true);
            echo "\"
    >
      ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_array_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 60, $this->source); })()), function ($__value__) use ($context, $macros) { $context["value"] = $__value__; return ($context["value"] != (isset($context["selectedChoice"]) || array_key_exists("selectedChoice", $context) ? $context["selectedChoice"] : (function () { throw new RuntimeError('Variable "selectedChoice" does not exist.', 60, $this->source); })())); }));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 61
                echo "        <button class=\"js-dropdown-item dropdown-item\" data-value=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</button>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "    </div>
  </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 63,  132 => 61,  128 => 60,  123 => 58,  116 => 54,  105 => 47,  102 => 46,  100 => 45,  93 => 44,  90 => 43,  88 => 42,  84 => 40,  82 => 39,  79 => 38,  77 => 37,  74 => 36,  67 => 34,  64 => 33,  61 => 32,  57 => 31,  54 => 30,  52 => 29,  50 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% set choices = column.options.choice_provider.getChoices(record) %}
{% set selectedChoice = record[column.options.field] %}
{% set selectedChoiceName = '' %}
{% set routeParams = record|array_pluck(column.options.record_route_params) %}

{% for name,value in choices %}
  {% if value == selectedChoice %}
    {% set selectedChoiceName = name %}
  {% endif %}
{% endfor %}

{% set classes = 'btn btn-secondary dropdown-toggle dropdown-toggle-split rounded' %}

{% if choices is not empty %}
  <div class=\"dropdown\">
    <button
      {% if column.options.color_field %}
        {% set textColor = is_color_bright(record[column.options.color_field]) ? '#383838' : 'white' %}
        style=\"background-color: {{ record[column.options.color_field] }}; color: {{ textColor }};\"
        {% set classes = classes ~ ' coloured' %}
      {% endif %}
      class=\"{{ classes }}\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
      data-flip=\"false\"
    >
      {{ selectedChoiceName }}
    </button>
    <div
      class=\"dropdown-menu js-choice-options\"
      data-url=\"{{ url(column.options.route, routeParams) }}\"
    >
      {% for name,value in choices|filter(value => value != selectedChoice) %}
        <button class=\"js-dropdown-item dropdown-item\" data-value=\"{{ value }}\">{{ name }}</button>
      {% endfor %}
    </div>
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/choice.html.twig");
    }
}
