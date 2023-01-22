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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_ce498d1c93be6a9aa84de5b69f889030 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        // line 25
        $context["id_property_name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 25, $this->source); })()), "options", [], "any", false, false, false, 25), "primary_field", [], "any", false, false, false, 25);
        // line 26
        $context["id_primary_key"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 26, $this->source); })()), (isset($context["id_property_name"]) || array_key_exists("id_property_name", $context) ? $context["id_property_name"] : (function () { throw new RuntimeError('Variable "id_property_name" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26);
        // line 27
        $context["record_id"] = twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), (isset($context["id_property_name"]) || array_key_exists("id_property_name", $context) ? $context["id_property_name"] : (function () { throw new RuntimeError('Variable "id_property_name" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27);
        // line 28
        echo "
";
        // line 29
        $context["isValid"] = (twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 29, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29), [], "array", false, false, false, 29) == 1);
        // line 30
        echo "
<div class=\"text-center\">
  <div 
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "route", [], "any", false, false, false, 34), [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()), "options", [], "any", false, false, false, 34), "route_param_name", [], "any", false, false, false, 34) => (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 34, $this->source); })())]), "html", null, true);
        echo "\"
  >
  <input type=\"radio\" name=\"input-";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 36, $this->source); })()), "options", [], "any", false, false, false, 36), "route", [], "any", false, false, false, 36), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\" 
         id=\"input-false-";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 37, $this->source); })()), "options", [], "any", false, false, false, 37), "route", [], "any", false, false, false, 37), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" 
         value=\"0\" ";
        // line 38
        if ( !(isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 38, $this->source); })())) {
            echo "checked";
        }
        echo ">
      <label for=\"input-false-";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 39, $this->source); })()), "options", [], "any", false, false, false, 39), "route", [], "any", false, false, false, 39), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "\">Off</label>
      <input type=\"radio\" name=\"input-";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 40, $this->source); })()), "options", [], "any", false, false, false, 40), "route", [], "any", false, false, false, 40), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" 
             id=\"input-true-";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 41, $this->source); })()), "options", [], "any", false, false, false, 41), "route", [], "any", false, false, false, 41), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\" 
             value=\"1\" ";
        // line 42
        if ((isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 42, $this->source); })())) {
            echo "checked";
        }
        echo ">
      <label for=\"input-true-";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 43, $this->source); })()), "options", [], "any", false, false, false, 43), "route", [], "any", false, false, false, 43), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 43,  101 => 42,  95 => 41,  89 => 40,  83 => 39,  77 => 38,  71 => 37,  65 => 36,  60 => 34,  54 => 30,  52 => 29,  49 => 28,  47 => 27,  45 => 26,  43 => 25,);
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
{% set id_property_name = column.options.primary_field %}
{% set id_primary_key = record[id_property_name] %}
{% set record_id = record[id_property_name] %}

{% set isValid = record[column.id] == 1 %}

<div class=\"text-center\">
  <div 
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"{{ path(column.options.route, {(column.options.route_param_name) : id_primary_key})}}\"
  >
  <input type=\"radio\" name=\"input-{{ column.options.route }}-{{ id_primary_key }}\" 
         id=\"input-false-{{ column.options.route }}-{{ id_primary_key }}\" 
         value=\"0\" {% if not isValid %}checked{% endif %}>
      <label for=\"input-false-{{ column.options.route }}-{{ id_primary_key }}\">Off</label>
      <input type=\"radio\" name=\"input-{{ column.options.route }}-{{ id_primary_key }}\" 
             id=\"input-true-{{ column.options.route }}-{{ id_primary_key }}\" 
             value=\"1\" {% if isValid %}checked{% endif %}>
      <label for=\"input-true-{{ column.options.route }}-{{ id_primary_key }}\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/toggle.html.twig");
    }
}
