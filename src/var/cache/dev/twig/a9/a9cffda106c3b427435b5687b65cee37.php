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

/* @Product/ProductPage/Forms/form_custom_fields.html.twig */
class __TwigTemplate_7a2c9ac2ea6383ec19924b0527c02745 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_custom_fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_custom_fields.html.twig"));

        // line 25
        echo "<div class=\"row\">
    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "id_customization_field", [], "any", false, false, false, 26), 'widget');
        echo "
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "label", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "label", [], "any", false, false, false, 29), "html", null, true);
        echo "</label>
      ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "label", [], "any", false, false, false, 30), 'errors');
        echo "
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "label", [], "any", false, false, false, 31), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "label", [], "any", false, false, false, 36), "html", null, true);
        echo "</label>
      ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "type", [], "any", false, false, false, 37), 'errors');
        echo "
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "type", [], "any", false, false, false, 38), 'widget');
        echo "
    </fieldset>
  </div>
  <div class=\"col-md-1\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">&nbsp;</label>
      <a class=\"btn btn-block delete\" ><i class=\"material-icons\">delete</i></a>
    </fieldset>
  </div>
  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <div>
        <label class=\"form-control-label\">&nbsp;</label>
      </div>
      <div class=\"required-custom-field\">
        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "require", [], "any", false, false, false, 53), 'widget', ["switch" => "tiny"]);
        echo "
      </div>
    </fieldset>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_custom_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 53,  76 => 38,  72 => 37,  68 => 36,  60 => 31,  56 => 30,  52 => 29,  46 => 26,  43 => 25,);
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
<div class=\"row\">
    {{ form_widget(form.id_customization_field) }}
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">{{ form.label.vars.label }}</label>
      {{ form_errors(form.label) }}
      {{ form_widget(form.label) }}
    </fieldset>
  </div>
  <div class=\"col-md-3\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">{{ form.type.vars.label }}</label>
      {{ form_errors(form.type) }}
      {{ form_widget(form.type) }}
    </fieldset>
  </div>
  <div class=\"col-md-1\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">&nbsp;</label>
      <a class=\"btn btn-block delete\" ><i class=\"material-icons\">delete</i></a>
    </fieldset>
  </div>
  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <div>
        <label class=\"form-control-label\">&nbsp;</label>
      </div>
      <div class=\"required-custom-field\">
        {{ form_widget(form.require, {'switch': 'tiny'}) }}
      </div>
    </fieldset>
  </div>
</div>
", "@Product/ProductPage/Forms/form_custom_fields.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_custom_fields.html.twig");
    }
}
