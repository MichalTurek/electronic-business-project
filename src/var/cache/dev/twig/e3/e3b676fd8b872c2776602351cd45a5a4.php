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

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_08cc74cc1b1b5dab5117d89ae0e529a1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        // line 25
        echo "
";
        // line 26
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 27
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 27, $this->source); })()), "legacy_controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", [0 => "_legacy_controller"], "method", false, false, false, 28), "controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", [0 => "_controller"], "method", false, false, false, 29)]);
        // line 31
        echo "

";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 33, $this->source); })()), "filter_form", [], "any", false, false, false, 33), 'form_start', ["attr" => ["id" => (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 33, $this->source); })()), "id", [], "any", false, false, false, 33) . "_filter_form"), "class" => "table-responsive"]]);
        echo "

<table class=\"grid-table js-grid-table table ";
        // line 35
        if ($this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->isOrderingColumn((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 35, $this->source); })()))) {
            echo "grid-ordering-column";
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 35, $this->source); })()), "attributes", [], "any", false, false, false, 35), "is_empty_state", [], "any", false, false, false, 35)) {
            echo "border-0";
        }
        echo "\"
       id=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), "html", null, true);
        echo "_grid_table\"
       data-query=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 37, $this->source); })()), "data", [], "any", false, false, false, 37), "query", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
>
  <thead class=\"thead-default\">
  ";
        // line 40
        $this->displayBlock('grid_table_head', $context, $blocks);
        // line 46
        echo "  </thead>
  <tbody>
  ";
        // line 48
        $this->displayBlock('grid_table_body', $context, $blocks);
        // line 66
        echo "  </tbody>
  ";
        // line 67
        $this->displayBlock('grid_table_footer', $context, $blocks);
        // line 68
        echo "</table>

";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 70, $this->source); })()), "filter_form", [], "any", false, false, false, 70), 'form_end');
        echo "

";
        // line 72
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 73
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 73, $this->source); })()), "legacy_controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 74
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "request", [], "any", false, false, false, 74), "attributes", [], "any", false, false, false, 74), "get", [0 => "_legacy_controller"], "method", false, false, false, 74), "controller" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "request", [], "any", false, false, false, 75), "attributes", [], "any", false, false, false, 75), "get", [0 => "_controller"], "method", false, false, false, 75)]);
        // line 77
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
    public function block_grid_table_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_head"));

        // line 41
        echo "    ";
        echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 41, $this->source); })())]);
        echo "
    ";
        // line 42
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 42, $this->source); })()), "actions", [], "any", false, false, false, 42), "bulk", [], "any", false, false, false, 42)) > 0) || (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 42, $this->source); })()), "filter_form", [], "any", false, false, false, 42)) > 1))) {
            // line 43
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 43, $this->source); })())]);
            echo "
    ";
        }
        // line 45
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 48
    public function block_grid_table_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_body"));

        // line 49
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 49, $this->source); })()), "data", [], "any", false, false, false, 49), "records", [], "any", false, false, false, 49))) {
            // line 50
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 50, $this->source); })()), "data", [], "any", false, false, false, 50), "records", [], "any", false, false, false, 50));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 51
                echo "        <tr>
          ";
                // line 52
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 52, $this->source); })()), "columns", [], "any", false, false, false, 52));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 53
                    echo "            <td
              ";
                    // line 54
                    if ((twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 54) == "identifier")) {
                        echo "data-identifier=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["record"], twig_get_attribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
                        echo "\"";
                    }
                    // line 55
                    echo "              class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 55), "html", null, true);
                    echo "-type column-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 55), "html", null, true);
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 55), "clickable", [], "any", true, true, false, 55) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 55), "clickable", [], "any", false, false, false, 55))) {
                        echo " clickable";
                    }
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 55), "alignment", [], "any", true, true, false, 55) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 55), "alignment", [], "any", false, false, false, 55))) {
                        echo " text-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 55), "alignment", [], "any", false, false, false, 55), "html", null, true);
                    }
                    echo "\"
            >
              ";
                    // line 57
                    echo $this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->renderColumnContent($context["record"], $context["column"], (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 57, $this->source); })()));
                    echo "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "    ";
        } else {
            // line 63
            echo "      ";
            echo twig_include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 63, $this->source); })())]);
            echo "
    ";
        }
        // line 65
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_grid_table_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 67,  228 => 65,  222 => 63,  219 => 62,  212 => 60,  203 => 57,  188 => 55,  182 => 54,  179 => 53,  175 => 52,  172 => 51,  167 => 50,  164 => 49,  154 => 48,  144 => 45,  138 => 43,  136 => 42,  131 => 41,  121 => 40,  110 => 77,  108 => 75,  107 => 74,  106 => 73,  105 => 72,  100 => 70,  96 => 68,  94 => 67,  91 => 66,  89 => 48,  85 => 46,  83 => 40,  77 => 37,  73 => 36,  63 => 35,  58 => 33,  54 => 31,  52 => 29,  51 => 28,  50 => 27,  49 => 26,  46 => 25,);
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

{{ renderhook('displayAdminGridTableBefore', {
    'grid': grid,
    'legacy_controller': app.request.attributes.get('_legacy_controller'),
    'controller': app.request.attributes.get('_controller')
  })
}}

{{ form_start(grid.filter_form, {'attr': {'id': grid.id ~ '_filter_form', 'class': 'table-responsive'}}) }}

<table class=\"grid-table js-grid-table table {% if is_ordering_column(grid) %}grid-ordering-column{% endif %} {% if grid.attributes.is_empty_state %}border-0{% endif %}\"
       id=\"{{ grid.id }}_grid_table\"
       data-query=\"{{ grid.data.query }}\"
>
  <thead class=\"thead-default\">
  {% block grid_table_head %}
    {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig', {'grid': grid}) }}
    {% if grid.actions.bulk|length > 0 or grid.filter_form|length > 1 %}
      {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig', {'grid': grid}) }}
    {% endif %}
  {% endblock %}
  </thead>
  <tbody>
  {% block grid_table_body %}
    {% if grid.data.records is not empty %}
      {% for record in grid.data.records %}
        <tr>
          {% for column in grid.columns %}
            <td
              {% if column.type == 'identifier' %}data-identifier=\"{{ record[column.id] }}\"{% endif %}
              class=\"{{ column.type }}-type column-{{ column.id }}{% if column.options.clickable is defined and column.options.clickable %} clickable{% endif %}{% if column.options.alignment is defined and column.options.alignment %} text-{{ column.options.alignment }}{% endif %}\"
            >
              {{ column_content(record, column, grid) }}
            </td>
          {% endfor %}
        </tr>
      {% endfor %}
    {% else %}
      {{ include('@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig', {'grid': grid}) }}
    {% endif %}
  {% endblock %}
  </tbody>
  {% block grid_table_footer %}{% endblock %}
</table>

{{ form_end(grid.filter_form) }}

{{ renderhook('displayAdminGridTableAfter', {
      'grid': grid,
      'legacy_controller': app.request.attributes.get('_legacy_controller'),
      'controller': app.request.attributes.get('_controller')
    })
}}
", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/table.html.twig");
    }
}
