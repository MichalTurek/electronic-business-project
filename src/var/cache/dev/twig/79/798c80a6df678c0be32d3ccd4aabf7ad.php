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

/* @PrestaShop/Admin/Common/Kpi/kpi_row.html.twig */
class __TwigTemplate_6b66fc4bbf5157c245f60f4141c521d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'kpi_row' => [$this, 'block_kpi_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig"));

        // line 1
        echo "    ";
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('kpi_row', $context, $blocks);
        // line 45
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_kpi_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "kpi_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "kpi_row"));

        // line 27
        echo "  <div class=\"card card-kpis\">

    <div class=\"kpi-row\">
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["kpiRow"]) || array_key_exists("kpiRow", $context) ? $context["kpiRow"] : (function () { throw new RuntimeError('Variable "kpiRow" does not exist.', 30, $this->source); })()), "kpis", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["kpi"]) {
            // line 31
            echo "        ";
            echo $context["kpi"];
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kpi'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>

    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["kpiRow"]) || array_key_exists("kpiRow", $context) ? $context["kpiRow"] : (function () { throw new RuntimeError('Variable "kpiRow" does not exist.', 35, $this->source); })()), "allowRefresh", [], "any", false, false, false, 35)) {
            // line 36
            echo "    <div class=\"kpi-refresh\">
      <button class=\"refresh-kpis btn btn-primary\" type=\"button\">
        <i class=\"material-icons\">refresh</i>
      </button>
    </div>
    ";
        }
        // line 42
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 42,  96 => 36,  94 => 35,  90 => 33,  81 => 31,  77 => 30,  72 => 27,  62 => 26,  51 => 45,  49 => 26,  46 => 25,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {#**
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

{% block kpi_row %}
  <div class=\"card card-kpis\">

    <div class=\"kpi-row\">
      {% for kpi in kpiRow.kpis %}
        {{ kpi|raw }}
      {% endfor %}
    </div>

    {% if kpiRow.allowRefresh %}
    <div class=\"kpi-refresh\">
      <button class=\"refresh-kpis btn btn-primary\" type=\"button\">
        <i class=\"material-icons\">refresh</i>
      </button>
    </div>
    {% endif %}

  </div>
{% endblock %}

", "@PrestaShop/Admin/Common/Kpi/kpi_row.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Kpi/kpi_row.html.twig");
    }
}
