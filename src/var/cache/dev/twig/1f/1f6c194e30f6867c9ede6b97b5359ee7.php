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

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_c8be591bafb8a6143e2b01550febeb0a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
            'addon_card_see_more' => [$this, 'block_addon_card_see_more'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Module/common.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 28
        echo "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      ";
        // line 31
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 31)->display($context);
        // line 32
        echo "      ";
        // line 33
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 33)->display(twig_array_merge($context, ["level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 33, $this->source); })()), "errorMessage" => (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 33, $this->source); })())]));
        // line 34
        echo "      ";
        // line 35
        echo "      ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 35)->display(twig_array_merge($context, ["topMenuData" => (isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 35, $this->source); })()), "bulkActions" => (isset($context["bulkActions"]) || array_key_exists("bulkActions", $context) ? $context["bulkActions"] : (function () { throw new RuntimeError('Variable "bulkActions" does not exist.', 35, $this->source); })())]));
        // line 36
        echo "
      ";
        // line 37
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 37)->display(twig_array_merge($context, ["display_type" => "list", "origin" => "manage"]));
        // line 38
        echo "
      ";
        // line 39
        $this->displayBlock('catalog_categories_listing', $context, $blocks);
        // line 58
        echo "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 39
    public function block_catalog_categories_listing($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        // line 40
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 40, $this->source); })()), "subMenu", [], "any", false, false, false, 40));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 41
            echo "          <div class=\"module-short-list\">
            <span id=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 42), "html", null, true);
            echo "_modules\" class=\"module-search-result-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42), [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>

            ";
            // line 44
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 44))) {
                // line 45
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 45)->display(twig_array_merge($context, ["category" => $context["category"], "display_type" => "list", "origin" => "manage"]));
                // line 46
                echo "            ";
            } else {
                // line 47
                echo "              ";
                $this->loadTemplate("@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 47)->display(twig_array_merge($context, ["modules" => twig_get_attribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 47), "display_type" => "list", "origin" => "manage", "id" => twig_get_attribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 47)]));
                // line 48
                echo "
              ";
                // line 49
                $this->displayBlock('addon_card_see_more', $context, $blocks);
                // line 54
                echo "            ";
            }
            // line 55
            echo "          </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_addon_card_see_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_card_see_more"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_card_see_more"));

        // line 50
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 50, $this->source); })()), "modules", [], "any", false, false, false, 50)) > (isset($context["maxModulesDisplayed"]) || array_key_exists("maxModulesDisplayed", $context) ? $context["maxModulesDisplayed"] : (function () { throw new RuntimeError('Variable "maxModulesDisplayed" does not exist.', 50, $this->source); })()))) {
            // line 51
            echo "                  ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/see_more.html.twig", "@PrestaShop/Admin/Module/manage.html.twig", 51)->display(twig_array_merge($context, ["id" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 51, $this->source); })()), "refMenu", [], "any", false, false, false, 51)]));
            // line 52
            echo "                ";
        }
        // line 53
        echo "              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 53,  207 => 52,  204 => 51,  201 => 50,  191 => 49,  181 => 57,  166 => 55,  163 => 54,  161 => 49,  158 => 48,  155 => 47,  152 => 46,  149 => 45,  147 => 44,  140 => 42,  137 => 41,  119 => 40,  109 => 39,  97 => 58,  95 => 39,  92 => 38,  90 => 37,  87 => 36,  84 => 35,  82 => 34,  79 => 33,  77 => 32,  74 => 31,  70 => 28,  60 => 27,  37 => 25,);
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
{% extends '@PrestaShop/Admin/Module/common.html.twig' %}

{% block content %}
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      {# Bulk Action confirm modal #}
      {% include '@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig' %}
      {# Contains toolbar-nav for module page with level authorization #}
      {% include '@PrestaShop/Admin/Module/Includes/modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
      {# Contains menu with Selection/Categories/Popular and Tag Search #}
      {% include '@PrestaShop/Admin/Module/Includes/menu_top.html.twig' with { 'topMenuData': topMenuData, 'bulkActions': bulkActions } %}

      {% include '@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig' with { 'display_type': 'list', 'origin': 'manage' } %}

      {% block catalog_categories_listing %}
        {% for category in categories.subMenu %}
          <div class=\"module-short-list\">
            <span id=\"{{ category.refMenu }}_modules\" class=\"module-search-result-title\">{{ category.name | trans({}, 'Admin.Modules.Feature') }}</span>

            {% if category.modules is empty %}
              {% include '@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig' with { 'category': category, 'display_type': 'list', 'origin': 'manage' } %}
            {% else  %}
              {% include '@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig' with { 'modules': category.modules, 'display_type': 'list', 'origin': 'manage', 'id': category.refMenu } %}

              {% block addon_card_see_more %}
                {% if (category.modules | length) > maxModulesDisplayed %}
                  {% include '@PrestaShop/Admin/Module/Includes/see_more.html.twig' with { 'id': category.refMenu } %}
                {% endif %}
              {% endblock %}
            {% endif %}
          </div>
        {% endfor %}
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Module/manage.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
