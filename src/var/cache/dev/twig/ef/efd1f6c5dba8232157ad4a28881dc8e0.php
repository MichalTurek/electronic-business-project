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

/* @Product/ProductPage/Forms/form_seo.html.twig */
class __TwigTemplate_beb30f073b82ba11a1ff6c6a02d52b38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'product_catalog_tool_serp' => [$this, 'block_product_catalog_tool_serp'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_seo.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_seo.html.twig"));

        // line 25
        echo "
<h2>";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search Engine Optimization", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
<p class=\"subtitle\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Improve your ranking and how your product page will appear in search engines results.", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>

";
        // line 29
        $this->displayBlock('product_catalog_tool_serp', $context, $blocks);
        // line 34
        echo "
<div class=\"row\">
  <div class=\"col-md-9\">
    <fieldset class=\"form-group\">
      ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 38, $this->source); })()), "meta_title", [], "any", false, false, false, 38), 'label');
        echo "
      ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 39, $this->source); })()), "meta_title", [], "any", false, false, false, 39), 'errors');
        echo "
      ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 40, $this->source); })()), "meta_title", [], "any", false, false, false, 40), 'widget');
        echo "
    </fieldset>
  </div>
</div>

<div class=\"row\">
  <div class=\"col-md-9\">
    <fieldset class=\"form-group\">
      ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 48, $this->source); })()), "meta_description", [], "any", false, false, false, 48), 'label');
        echo "
      ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 49, $this->source); })()), "meta_description", [], "any", false, false, false, 49), 'errors');
        echo "
      ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 50, $this->source); })()), "meta_description", [], "any", false, false, false, 50), 'widget');
        echo "
    </fieldset>
  </div>
</div>
<fieldset class=\"form-group\">
  <label class=\"form-control-label\">
    ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 56, $this->source); })()), "link_rewrite", [], "any", false, false, false, 56), "vars", [], "any", false, false, false, 56), "label", [], "any", false, false, false, 56), "html", null, true);
        echo "
    <span class=\"help-box\" 
          data-toggle=\"popover\"
          data-content=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This is the human-readable URL, as generated from the product's name. You can change it if you want.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
    </span>
  </label>
  ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 62, $this->source); })()), "link_rewrite", [], "any", false, false, false, 62), 'errors');
        echo "
  <div class=\"row\">
    <div class=\"col-md-7\">
      ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 65, $this->source); })()), "link_rewrite", [], "any", false, false, false, 65), 'widget');
        echo "
    </div>
    <div class=\"col-md-2\">
      <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" id=\"seo-url-regenerate\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset URL", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</button>
    </div>
  </div>
</fieldset>

<div class=\"row\">
  <div class=\"col-md-9\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 77
        if (($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_REWRITING_SETTINGS") == 0)) {
            // line 78
            echo "          <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Friendly URLs are currently disabled.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
          ";
            // line 79
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To enable it, go to [1]SEO and URLs[/1]", [], "Admin.Catalog.Notification"), ["[1]" => (("<a href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"]);
            echo "
        ";
        } else {
            // line 81
            echo "          <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Friendly URLs are currently enabled.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
          ";
            // line 82
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To disable it, go to [1]SEO and URLs[/1]", [], "Admin.Catalog.Notification"), ["[1]" => (("<a href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminMeta")) . "#meta_fieldset_general\">"), "[/1]" => "</a>"]);
            echo "
        ";
        }
        // line 84
        echo "      </p>
      <p class=\"alert-text\">
        ";
        // line 86
        if (($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) {
            // line 87
            echo "          <strong>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The \"Force update of friendly URL\" option is currently enabled.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</strong>
          ";
            // line 89
            echo "          ";
            echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To disable it, go to [1]Product Settings[/1]", [], "Admin.Catalog.Notification"), ["[1]" => (("<a href=\"" . $this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminPPreferences")) . "#configuration_fieldset_products\">"), "[/1]" => "</a>"]);
            echo "
        ";
        }
        // line 91
        echo "      </p>
    </div>
  </div>
</div>

<h2 class=\"mt-4\">
  ";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Redirection page", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
  <span class=\"help-box\" 
        data-toggle=\"popover\"
        data-content=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\" >
  </span>
</h2>

<div class=\"row\">

  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 108, $this->source); })()), "redirect_type", [], "any", false, false, false, 108), "vars", [], "any", false, false, false, 108), "label", [], "any", false, false, false, 108), "html", null, true);
        echo "</label>
      ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 109, $this->source); })()), "redirect_type", [], "any", false, false, false, 109), 'errors');
        echo "
      ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 110, $this->source); })()), "redirect_type", [], "any", false, false, false, 110), 'widget');
        echo "
    </fieldset>
  </div>

  <div class=\"col-md-5\" id=\"id-product-redirected\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 116, $this->source); })()), "id_type_redirected", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "label", [], "any", false, false, false, 116), "html", null, true);
        echo "</label>
      ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 117, $this->source); })()), "id_type_redirected", [], "any", false, false, false, 117), 'errors');
        echo "
      ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 118, $this->source); })()), "id_type_redirected", [], "any", false, false, false, 118), 'widget');
        echo "
    </fieldset>

  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-9\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        ";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
        ";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No redirection (410) = Do not redirect anywhere and display a 410 \"Gone\" page.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
        ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Permanent redirection (301) = Permanently display another product or category instead.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "<br>
        ";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Temporary redirection (302) = Temporarily display another product or category instead.", [], "Admin.Catalog.Help"), "html", null, true);
        echo "
      </p>
    </div>
  </div>
</div>

";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["seoForm"]) || array_key_exists("seoForm", $context) ? $context["seoForm"] : (function () { throw new RuntimeError('Variable "seoForm" does not exist.', 136, $this->source); })()), 'rest');
        echo "

";
        // line 138
        echo $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminProductsSeoStepBottom", ["id_product" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 138, $this->source); })())]);
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_product_catalog_tool_serp($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_tool_serp"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_catalog_tool_serp"));

        // line 30
        echo "  <p>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Here is a preview of your search engine result, play with it!", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</p>
  ";
        // line 32
        echo "  <div id=\"serp-app\"></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_seo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 32,  285 => 30,  275 => 29,  263 => 138,  258 => 136,  249 => 130,  245 => 129,  241 => 128,  237 => 127,  225 => 118,  221 => 117,  217 => 116,  208 => 110,  204 => 109,  200 => 108,  189 => 100,  183 => 97,  175 => 91,  169 => 89,  164 => 87,  162 => 86,  158 => 84,  153 => 82,  148 => 81,  143 => 79,  138 => 78,  136 => 77,  124 => 68,  118 => 65,  112 => 62,  106 => 59,  100 => 56,  91 => 50,  87 => 49,  83 => 48,  72 => 40,  68 => 39,  64 => 38,  58 => 34,  56 => 29,  51 => 27,  47 => 26,  44 => 25,);
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

<h2>{{ 'Search Engine Optimization'|trans({}, 'Admin.Catalog.Feature') }}</h2>
<p class=\"subtitle\">{{ 'Improve your ranking and how your product page will appear in search engines results.'|trans({}, 'Admin.Catalog.Feature') }}</p>

{% block product_catalog_tool_serp %}
  <p>{{ \"Here is a preview of your search engine result, play with it!\"|trans({}, 'Admin.Catalog.Feature') }}</p>
  {# Div targetted by the SERP component in VueJs. It displays a Google search result preview. #}
  <div id=\"serp-app\"></div>
{% endblock %}

<div class=\"row\">
  <div class=\"col-md-9\">
    <fieldset class=\"form-group\">
      {{ form_label(seoForm.meta_title) }}
      {{ form_errors(seoForm.meta_title) }}
      {{ form_widget(seoForm.meta_title) }}
    </fieldset>
  </div>
</div>

<div class=\"row\">
  <div class=\"col-md-9\">
    <fieldset class=\"form-group\">
      {{ form_label(seoForm.meta_description) }}
      {{ form_errors(seoForm.meta_description) }}
      {{ form_widget(seoForm.meta_description) }}
    </fieldset>
  </div>
</div>
<fieldset class=\"form-group\">
  <label class=\"form-control-label\">
    {{ seoForm.link_rewrite.vars.label }}
    <span class=\"help-box\" 
          data-toggle=\"popover\"
          data-content=\"{{ \"This is the human-readable URL, as generated from the product's name. You can change it if you want.\"|trans({}, 'Admin.Catalog.Help') }}\" >
    </span>
  </label>
  {{ form_errors(seoForm.link_rewrite) }}
  <div class=\"row\">
    <div class=\"col-md-7\">
      {{ form_widget(seoForm.link_rewrite) }}
    </div>
    <div class=\"col-md-2\">
      <button type=\"button\" class=\"btn btn-block btn-outline-secondary\" id=\"seo-url-regenerate\">{{ 'Reset URL'|trans({}, 'Admin.Catalog.Feature') }}</button>
    </div>
  </div>
</fieldset>

<div class=\"row\">
  <div class=\"col-md-9\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {% if configuration('PS_REWRITING_SETTINGS') == 0 %}
          <strong>{{ 'Friendly URLs are currently disabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
          {{ 'To enable it, go to [1]SEO and URLs[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminMeta\") ~ '#meta_fieldset_general\">', '[/1]': '</a>'})|raw }}
        {% else %}
          <strong>{{ 'Friendly URLs are currently enabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
          {{ 'To disable it, go to [1]SEO and URLs[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminMeta\") ~ '#meta_fieldset_general\">', '[/1]': '</a>'})|raw }}
        {% endif %}
      </p>
      <p class=\"alert-text\">
        {% if configuration('PS_FORCE_FRIENDLY_PRODUCT') == 1 %}
          <strong>{{ 'The \"Force update of friendly URL\" option is currently enabled.'|trans({}, 'Admin.Catalog.Notification') }}</strong>
          {# \"It\" refers to the option \"Force update of friendly URL\" #}
          {{ 'To disable it, go to [1]Product Settings[/1]'|trans({}, 'Admin.Catalog.Notification')|replace({'[1]': '<a href=\"' ~ getAdminLink(\"AdminPPreferences\") ~ '#configuration_fieldset_products\">', '[/1]': '</a>'})|raw }}
        {% endif %}
      </p>
    </div>
  </div>
</div>

<h2 class=\"mt-4\">
  {{ 'Redirection page'|trans({}, 'Admin.Catalog.Feature') }}
  <span class=\"help-box\" 
        data-toggle=\"popover\"
        data-content=\"{{ \"When your product is disabled, choose to which page you’d like to redirect the customers visiting its page by typing the product or category name.\"|trans({}, 'Admin.Catalog.Help') }}\" >
  </span>
</h2>

<div class=\"row\">

  <div class=\"col-md-4\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">{{ seoForm.redirect_type.vars.label }}</label>
      {{ form_errors(seoForm.redirect_type) }}
      {{ form_widget(seoForm.redirect_type) }}
    </fieldset>
  </div>

  <div class=\"col-md-5\" id=\"id-product-redirected\">
    <fieldset class=\"form-group\">
      <label class=\"form-control-label\">{{ seoForm.id_type_redirected.vars.label }}</label>
      {{ form_errors(seoForm.id_type_redirected) }}
      {{ form_widget(seoForm.id_type_redirected) }}
    </fieldset>

  </div>
</div>
<div class=\"row\">
  <div class=\"col-md-9\">
    <div class=\"alert alert-info\" role=\"alert\">
      <p class=\"alert-text\">
        {{ 'No redirection (404) = Do not redirect anywhere and display a 404 \"Not Found\" page.'|trans({}, 'Admin.Catalog.Help') }}<br>
        {{ 'No redirection (410) = Do not redirect anywhere and display a 410 \"Gone\" page.'|trans({}, 'Admin.Catalog.Help') }}<br>
        {{ 'Permanent redirection (301) = Permanently display another product or category instead.'|trans({}, 'Admin.Catalog.Help') }}<br>
        {{ 'Temporary redirection (302) = Temporarily display another product or category instead.'|trans({}, 'Admin.Catalog.Help') }}
      </p>
    </div>
  </div>
</div>

{{ form_rest(seoForm) }}

{{ renderhook('displayAdminProductsSeoStepBottom', { 'id_product': productId }) }}
", "@Product/ProductPage/Forms/form_seo.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_seo.html.twig");
    }
}
