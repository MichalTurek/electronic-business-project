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

/* @PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig */
class __TwigTemplate_7db88f5fa6969d2b7f6b0485717de325 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'copy_language' => [$this, 'block_copy_language'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig"));

        // line 25
        echo "
";
        // line 27
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 27, $this->source); })()), [0 => "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"], true);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('copy_language', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_copy_language($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copy_language"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "copy_language"));

        // line 30
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 30, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_international_translations_copy_language")]);
        echo "

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">file_copy</i>
      ";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copy", [], "Admin.Actions"), "html", null, true);
        echo "
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copies data from one language to another.", [], "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Warning: This will replace all of the existing data inside the destination language.", [], "Admin.International.Help"), "html", null, true);
        echo "<br>
                ";
        // line 46
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If necessary [1][2] you must first create a new language[/1].", [], "Admin.International.Help"), ["[1]" => (("<a href=\"" . (isset($context["addLanguageUrl"]) || array_key_exists("addLanguageUrl", $context) ? $context["addLanguageUrl"] : (function () { throw new RuntimeError('Variable "addLanguageUrl" does not exist.', 46, $this->source); })())) . "\">"), "[2]" => "<i class=\"material-icons\">launch</i>", "[/1]" => "</a>"]);
        echo "
              </div>
            </div>
          </div>
        </div>
        <div class=\"form-group row\">
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 52, $this->source); })()), "from_language", [], "any", false, false, false, 52), 'label');
        echo "
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 55, $this->source); })()), "from_language", [], "any", false, false, false, 55), 'errors');
        echo "
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 56, $this->source); })()), "from_language", [], "any", false, false, false, 56), 'widget');
        echo "

              ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 58, $this->source); })()), "from_theme", [], "any", false, false, false, 58), 'errors');
        echo "
              ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 59, $this->source); })()), "from_theme", [], "any", false, false, false, 59), 'widget');
        echo "
            </div>
            <small class=\"form-text\">
              ";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Language files must be complete to allow copying of translations.", [], "Admin.International.Notification"), "html", null, true);
        echo "
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 68, $this->source); })()), "to_language", [], "any", false, false, false, 68), 'label');
        echo "
          <div class=\"col-sm\">
            <div class=\"input-group\">
              ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 71, $this->source); })()), "to_language", [], "any", false, false, false, 71), 'errors');
        echo "
              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 72, $this->source); })()), "to_language", [], "any", false, false, false, 72), 'widget');
        echo "

              ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 74, $this->source); })()), "to_theme", [], "any", false, false, false, 74), 'errors');
        echo "
              ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 75, $this->source); })()), "to_theme", [], "any", false, false, false, 75), 'widget');
        echo "
            </div>
          </div>
        </div>
        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 79, $this->source); })()), 'rest');
        echo "
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">file_copy</i>
          <span>";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Copy", [], "Admin.Actions"), "html", null, true);
        echo "</span>
        </button>
      </div>
    </div>
  </div>

  ";
        // line 92
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["copyLanguageForm"]) || array_key_exists("copyLanguageForm", $context) ? $context["copyLanguageForm"] : (function () { throw new RuntimeError('Variable "copyLanguageForm" does not exist.', 92, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 92,  179 => 86,  169 => 79,  162 => 75,  158 => 74,  153 => 72,  149 => 71,  143 => 68,  134 => 62,  128 => 59,  124 => 58,  119 => 56,  115 => 55,  109 => 52,  100 => 46,  96 => 45,  92 => 44,  80 => 35,  71 => 30,  52 => 29,  49 => 28,  47 => 27,  44 => 25,);
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

{% trans_default_domain 'Admin.International.Feature' %}
{% form_theme copyLanguageForm '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig' %}

{% block copy_language %}
  {{ form_start(copyLanguageForm, {action: path('admin_international_translations_copy_language')}) }}

  <div class=\"card\">
    <h3 class=\"card-header\">
      <i class=\"material-icons\">file_copy</i>
      {{ 'Copy'|trans({}, 'Admin.Actions') }}
    </h3>

    <div class=\"card-body\">
      <div class=\"form-wrapper\">
        <div class=\"row\">
          <div class=\"col-sm\">
            <div class=\"alert alert-info\" role=\"alert\">
              <div class=\"alert-text\">
                {{ 'Copies data from one language to another.'|trans({}, 'Admin.International.Help') }}<br>
                {{ 'Warning: This will replace all of the existing data inside the destination language.'|trans({}, 'Admin.International.Help') }}<br>
                {{ 'If necessary [1][2] you must first create a new language[/1].'|trans({}, 'Admin.International.Help')|replace({'[1]': '<a href=\"'~addLanguageUrl~'\">','[2]': '<i class=\"material-icons\">launch</i>','[/1]': '</a>'})|raw }}
              </div>
            </div>
          </div>
        </div>
        <div class=\"form-group row\">
          {{ form_label(copyLanguageForm.from_language) }}
          <div class=\"col-sm\">
            <div class=\"input-group\">
              {{ form_errors(copyLanguageForm.from_language) }}
              {{ form_widget(copyLanguageForm.from_language) }}

              {{ form_errors(copyLanguageForm.from_theme) }}
              {{ form_widget(copyLanguageForm.from_theme) }}
            </div>
            <small class=\"form-text\">
              {{ 'Language files must be complete to allow copying of translations.'|trans({}, 'Admin.International.Notification') }}
            </small>
          </div>
        </div>

        <div class=\"form-group row\">
          {{ form_label(copyLanguageForm.to_language) }}
          <div class=\"col-sm\">
            <div class=\"input-group\">
              {{ form_errors(copyLanguageForm.to_language) }}
              {{ form_widget(copyLanguageForm.to_language) }}

              {{ form_errors(copyLanguageForm.to_theme) }}
              {{ form_widget(copyLanguageForm.to_theme) }}
            </div>
          </div>
        </div>
        {{ form_rest(copyLanguageForm) }}
      </div>
    </div>
    <div class=\"card-footer\">
      <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\">
          <i class=\"material-icons\">file_copy</i>
          <span>{{ 'Copy'|trans({}, 'Admin.Actions') }}</span>
        </button>
      </div>
    </div>
  </div>

  {{ form_end(copyLanguageForm) }}
{% endblock %}
", "@PrestaShop/Admin/Improve/International/Translations/Blocks/copy_language.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Improve/International/Translations/Blocks/copy_language.html.twig");
    }
}
