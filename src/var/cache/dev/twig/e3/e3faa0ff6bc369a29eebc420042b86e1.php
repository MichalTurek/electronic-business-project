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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig */
class __TwigTemplate_4f30ae45ad7dea58820dd640ee5d9dbf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig"));

        // line 25
        echo "
";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "with_bulk_field", [], "any", false, false, false, 26)) {
            // line 27
            echo "  <div class=\"md-checkbox d-inline-block\">
    <label>
      <input type=\"checkbox\"
             title=\"";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 30, $this->source); })()), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "\"
             class=\"js-bulk-action-checkbox\"
             name=\"";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32) . "_") . twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)), "html", null, true);
            echo "[]\"
             value=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 33, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 33, $this->source); })()), "options", [], "any", false, false, false, 33), "bulk_field", [], "any", false, false, false, 33), [], "array", false, false, false, 33), "html", null, true);
            echo "\"
      >
      <i class=\"md-checkbox-control\"></i>
    </label>
  </div>
";
        }
        // line 39
        echo "
";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 40, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 40, $this->source); })()), "options", [], "any", false, false, false, 40), "identifier_field", [], "any", false, false, false, 40), [], "array", false, false, false, 40), "html", null, true);
        echo "

";
        // line 42
        if ( !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 42, $this->source); })()), "options", [], "any", false, false, false, 42), "preview", [], "any", false, false, false, 42))) {
            // line 43
            echo "  ";
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", 43)->display(twig_array_merge($context, ["column" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 44
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 44, $this->source); })()), "options", [], "any", false, false, false, 44), "preview", [], "any", false, false, false, 44), "record" =>             // line 45
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 45, $this->source); })())]));
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 45,  83 => 44,  81 => 43,  79 => 42,  74 => 40,  71 => 39,  62 => 33,  58 => 32,  53 => 30,  48 => 27,  46 => 26,  43 => 25,);
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

{% if column.options.with_bulk_field %}
  <div class=\"md-checkbox d-inline-block\">
    <label>
      <input type=\"checkbox\"
             title=\"{{ column.name }}\"
             class=\"js-bulk-action-checkbox\"
             name=\"{{ grid.id~'_'~column.id }}[]\"
             value=\"{{ record[column.options.bulk_field] }}\"
      >
      <i class=\"md-checkbox-control\"></i>
    </label>
  </div>
{% endif %}

{{ record[column.options.identifier_field] }}

{% if column.options.preview is not null %}
  {% include '@PrestaShop/Admin/Common/Grid/Columns/Content/preview.html.twig' with {
    'column': column.options.preview,
    'record': record,
  }
  %}
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/identifier.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/identifier.html.twig");
    }
}
