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

/* @Product/ProductPage/Blocks/header.html.twig */
class __TwigTemplate_3e91521d32b035e1c01e47072e17b11d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Blocks/header.html.twig"));

        // line 25
        echo "<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
    ";
        // line 27
        if ((isset($context["is_multishop_context"]) || array_key_exists("is_multishop_context", $context) ? $context["is_multishop_context"] : (function () { throw new RuntimeError('Variable "is_multishop_context" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "      <div class=\"col-xxl-10\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <p class=\"alert-text\">";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are in a multistore context: any modification will impact all your shops, or each shop of the active group.", [], "Admin.Catalog.Notification"), "html", null, true);
            echo "</p>
        </div>
      </div>
    ";
        }
        // line 34
        echo "
    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-7 big-input ";
        // line 37
        echo ((($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_FORCE_FRIENDLY_PRODUCT") == 1)) ? ("friendly-url-force-update") : (""));
        echo "\" id=\"form_step1_names\">
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 38, $this->source); })()), 'widget');
        echo "
        </div>
        <div class=\"col-sm-7 col-md-2 form_step1_type_product\">
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 41, $this->source); })()), 'widget');
        echo "
          <span class=\"help-box pull-xs-right\" data-toggle=\"popover\" 
          data-content=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?", [], "Admin.Catalog.Help"), "html", null, true);
        echo "\"></span>
        </div>
        <div class=\"col-sm-2 col-md-1 form_switch_language\">
          <div class=\"";
        // line 46
        echo (((twig_length_filter($this->env, (isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 46, $this->source); })())) == 1)) ? ("hide") : (""));
        echo "\">
            <select id=\"form_switch_language\" class=\"custom-select\">
              ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) || array_key_exists("languages", $context) ? $context["languages"] : (function () { throw new RuntimeError('Variable "languages" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 49
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 49), "html", null, true);
            echo "\" ";
            if (((isset($context["default_language_iso"]) || array_key_exists("default_language_iso", $context) ? $context["default_language_iso"] : (function () { throw new RuntimeError('Variable "default_language_iso" does not exist.', 49, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 49))) {
                echo " 
                        selected=\"selected\" ";
            }
            // line 50
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 50), "html", null, true);
            echo "</option>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "            </select>
          </div>
        </div>
        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
          <a class=\"toolbar-button btn-sales\" href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["stats_link"]) || array_key_exists("stats_link", $context) ? $context["stats_link"] : (function () { throw new RuntimeError('Variable "stats_link" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\" target=\"_blank\" title=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales", [], "Admin.Global"), "html", null, true);
        echo "\" id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sales", [], "Admin.Global"), "html", null, true);
        echo "</span>
          </a>

          <a class=\"toolbar-button btn-quicknav btn-sidebar\" href=\"#\" title=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick navigation", [], "Admin.Global"), "html", null, true);
        echo "\" 
             data-toggle=\"sidebar\" data-target=\"#right-sidebar\" 
             data-url=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_product_list", ["limit" => "last", "offset" => "last", "view" => "quicknav"]), "html", null, true);
        echo "\" id=\"product_form_open_quicknav\">
            <i class=\"material-icons\">list</i>
            <span class=\"title\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product list", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\" title=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "\" 
             data-toggle=\"sidebar\" data-target=\"#right-sidebar\" 
             data-url=\"";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "\" id=\"product_form_open_help\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        echo "</span>
          </a>
        </div>
      </div>
      ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 76, $this->source); })()), 'errors');
        echo "
      ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formType"]) || array_key_exists("formType", $context) ? $context["formType"] : (function () { throw new RuntimeError('Variable "formType" does not exist.', 77, $this->source); })()), 'errors');
        echo "
    </div>
  </div>
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Blocks/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 77,  164 => 76,  157 => 72,  152 => 70,  147 => 68,  141 => 65,  136 => 63,  131 => 61,  125 => 58,  118 => 56,  112 => 52,  103 => 50,  95 => 49,  91 => 48,  86 => 46,  80 => 43,  75 => 41,  69 => 38,  65 => 37,  60 => 34,  53 => 30,  49 => 28,  47 => 27,  43 => 25,);
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
<div class=\"product-header col-md-12\">
  <div class=\"row justify-content-md-center\">
    {% if is_multishop_context %}
      <div class=\"col-xxl-10\">
        <div class=\"alert alert-warning\" role=\"alert\">
          <p class=\"alert-text\">{{ 'You are in a multistore context: any modification will impact all your shops, or each shop of the active group.'|trans({}, 'Admin.Catalog.Notification') }}</p>
        </div>
      </div>
    {% endif %}

    <div class=\"col-xxl-10\">
      <div class=\"row\">
        <div class=\"col-md-7 big-input {{ configuration('PS_FORCE_FRIENDLY_PRODUCT') == 1 ? 'friendly-url-force-update' : '' }}\" id=\"form_step1_names\">
          {{ form_widget(formName) }}
        </div>
        <div class=\"col-sm-7 col-md-2 form_step1_type_product\">
          {{ form_widget(formType) }}
          <span class=\"help-box pull-xs-right\" data-toggle=\"popover\" 
          data-content=\"{{ \"Is the product a pack (a combination of at least two existing products), a virtual product (downloadable file, service, etc.), or simply a standard, physical product?\"|trans({}, 'Admin.Catalog.Help') }}\"></span>
        </div>
        <div class=\"col-sm-2 col-md-1 form_switch_language\">
          <div class=\"{{ languages|length == 1 ? 'hide' : '' }}\">
            <select id=\"form_switch_language\" class=\"custom-select\">
              {% for language in languages %}
                <option value=\"{{ language.iso_code }}\" {% if default_language_iso == language.iso_code %} 
                        selected=\"selected\" {% endif %}>{{ language.iso_code }}</option>
              {% endfor %}
            </select>
          </div>
        </div>
        <div class=\"toolbar col-sm-3 col-md-2 text-md-right\">
          <a class=\"toolbar-button btn-sales\" href=\"{{ stats_link }}\" target=\"_blank\" title=\"{{ 'Sales'|trans({}, 'Admin.Global') }}\" id=\"product_form_go_to_sales\">
            <i class=\"material-icons\">assessment</i>
            <span class=\"title\">{{ 'Sales'|trans({}, 'Admin.Global') }}</span>
          </a>

          <a class=\"toolbar-button btn-quicknav btn-sidebar\" href=\"#\" title=\"{{ 'Quick navigation'|trans({}, 'Admin.Global') }}\" 
             data-toggle=\"sidebar\" data-target=\"#right-sidebar\" 
             data-url=\"{{ path('admin_product_list', {limit: 'last', offset: 'last', view: 'quicknav'}) }}\" id=\"product_form_open_quicknav\">
            <i class=\"material-icons\">list</i>
            <span class=\"title\">{{ 'Product list'|trans({}, 'Admin.Catalog.Feature') }}</span>
          </a>

          <a class=\"toolbar-button btn-help btn-sidebar\" href=\"#\" title=\"{{ 'Help'|trans({}, 'Admin.Global') }}\" 
             data-toggle=\"sidebar\" data-target=\"#right-sidebar\" 
             data-url=\"{{ help_link }}\" id=\"product_form_open_help\">
            <i class=\"material-icons\">help</i>
            <span class=\"title\">{{ 'Help'|trans({}, 'Admin.Global') }}</span>
          </a>
        </div>
      </div>
      {{ form_errors(formName) }}
      {{ form_errors(formType) }}
    </div>
  </div>
</div>

", "@Product/ProductPage/Blocks/header.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Blocks/header.html.twig");
    }
}
