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

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig */
class __TwigTemplate_f0610686de2f68297739db8c59d60d67 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["exportCataloguesForm"]) || array_key_exists("exportCataloguesForm", $context) ? $context["exportCataloguesForm"] : (function () { throw new RuntimeError('Variable "exportCataloguesForm" does not exist.', 26, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["exportCataloguesForm"]) || array_key_exists("exportCataloguesForm", $context) ? $context["exportCataloguesForm"] : (function () { throw new RuntimeError('Variable "exportCataloguesForm" does not exist.', 29, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_international_translations_export_catalogues")]);
        echo "

<div class=\"card export-translations\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_upload</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export a language", [], "Admin.International.Feature"), "html", null, true);
        echo "

    <span
      class=\"help-box\"
      data-container=\"body\"
      data-toggle=\"popover\"
      data-trigger=\"hover\"
      data-placement=\"right\"
      data-content=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export data from one language to a file (language pack).", [], "Admin.International.Help"), "html", null, true);
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select which theme you would like to export your translations to.", [], "Admin.International.Help"), "html", null, true);
        echo "\"
      title=\"\"
    >
    </span>
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["exportCataloguesForm"]) || array_key_exists("exportCataloguesForm", $context) ? $context["exportCataloguesForm"] : (function () { throw new RuntimeError('Variable "exportCataloguesForm" does not exist.', 48, $this->source); })()), 'rest');
        echo "
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" id=\"form-export-language-button\">
        <i class=\"material-icons\">cloud_download</i>
        <span>";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export", [], "Admin.Actions"), "html", null, true);
        echo "</span>
      </button>
    </div>
  </div>
</div>

";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["exportCataloguesForm"]) || array_key_exists("exportCataloguesForm", $context) ? $context["exportCataloguesForm"] : (function () { throw new RuntimeError('Variable "exportCataloguesForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 62,  91 => 56,  80 => 48,  69 => 41,  58 => 33,  51 => 29,  48 => 28,  46 => 26,  43 => 25,);
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

{% form_theme exportCataloguesForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}
{% trans_default_domain 'Admin.International.Feature' %}

{{ form_start(exportCataloguesForm, {action: path('admin_international_translations_export_catalogues')}) }}

<div class=\"card export-translations\">
  <h3 class=\"card-header\">
    <i class=\"material-icons\">cloud_upload</i> {{ 'Export a language'|trans }}

    <span
      class=\"help-box\"
      data-container=\"body\"
      data-toggle=\"popover\"
      data-trigger=\"hover\"
      data-placement=\"right\"
      data-content=\"{{ 'Export data from one language to a file (language pack).'|trans({}, 'Admin.International.Help') }}{{ 'Select which theme you would like to export your translations to.'|trans({}, 'Admin.International.Help') }}\"
      title=\"\"
    >
    </span>
  </h3>
  <div class=\"card-body\">
    <div class=\"form-wrapper\">
      {{ form_rest(exportCataloguesForm) }}
    </div>
  </div>

  <div class=\"card-footer\">
    <div class=\"d-flex justify-content-end\">
      <button class=\"btn btn-primary\" id=\"form-export-language-button\">
        <i class=\"material-icons\">cloud_download</i>
        <span>{{ 'Export'|trans({}, 'Admin.Actions') }}</span>
      </button>
    </div>
  </div>
</div>

{{ form_end(exportCataloguesForm) }}
", "@PrestaShop/Admin/Improve/International/Translations/Blocks/export_language.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/export_language.html.twig");
    }
}
