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

/* @Product/CatalogPage/Blocks/tools.html.twig */
class __TwigTemplate_d07767d57dd33a9c959f71861f8b2800 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/tools.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/CatalogPage/Blocks/tools.html.twig"));

        // line 25
        echo "<div class=\"catalog-tools\">
  <div class=\"dropdown\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"catalog-tools-button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "\"
    >
      <span class=\"sr-only\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
        echo "</span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"catalog-tools-button\">
      ";
        // line 37
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarIcons", []);
        echo "
      <a id=\"desc-product-export\" class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_export_action");
        echo "\">
        ";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-import\" class=\"dropdown-item\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["import_link"]) || array_key_exists("import_link", $context) ? $context["import_link"] : (function () { throw new RuntimeError('Variable "import_link" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-show-sql\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
        ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show SQL query", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
      <a id=\"desc-product-sql-manager\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
        ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to SQL Manager", [], "Admin.Actions"), "html", null, true);
        echo "
      </a>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/CatalogPage/Blocks/tools.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 48,  86 => 45,  80 => 42,  76 => 41,  71 => 39,  67 => 38,  63 => 37,  57 => 34,  52 => 32,  43 => 25,);
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
<div class=\"catalog-tools\">
  <div class=\"dropdown\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"catalog-tools-button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ \"Settings\"|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ \"Settings\"|trans({}, 'Admin.Global') }}</span>
    </button>
    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"catalog-tools-button\">
      {{ renderhook('displayDashboardToolbarIcons', {}) }}
      <a id=\"desc-product-export\" class=\"dropdown-item\" href=\"{{ path('admin_product_export_action') }}\">
        {{ \"Export\"|trans({}, 'Admin.Actions') }}
      </a>
      <a id=\"desc-product-import\" class=\"dropdown-item\" href=\"{{ import_link }}\">
        {{ \"Import\"|trans({}, 'Admin.Actions') }}
      </a>
      <a id=\"desc-product-show-sql\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
        {{ \"Show SQL query\"|trans({}, 'Admin.Actions') }}
      </a>
      <a id=\"desc-product-sql-manager\" class=\"dropdown-item\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
        {{ \"Export to SQL Manager\"|trans({}, 'Admin.Actions') }}
      </a>
    </div>
  </div>
</div>
", "@Product/CatalogPage/Blocks/tools.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/CatalogPage/Blocks/tools.html.twig");
    }
}
