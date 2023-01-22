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

/* @PrestaShop/Admin/Helpers/dropdown_menu.html.twig */
class __TwigTemplate_275882bc244f9575fb4b77712d495c87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig"));

        // line 25
        $context["buttonType"] = ((array_key_exists("buttonType", $context)) ? (_twig_default_filter((isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 25, $this->source); })()), "primary")) : ("primary"));
        // line 26
        $context["right"] = ((array_key_exists("right", $context)) ? (_twig_default_filter((isset($context["right"]) || array_key_exists("right", $context) ? $context["right"] : (function () { throw new RuntimeError('Variable "right" does not exist.', 26, $this->source); })()), false)) : (false));
        // line 27
        echo "
<div class=\"";
        // line 28
        echo twig_escape_filter($this->env, ((array_key_exists("div_style", $context)) ? (_twig_default_filter((isset($context["div_style"]) || array_key_exists("div_style", $context) ? $context["div_style"] : (function () { throw new RuntimeError('Variable "div_style" does not exist.', 28, $this->source); })()), "btn-group dropdown")) : ("btn-group dropdown")), "html", null, true);
        echo "\">

  ";
        // line 30
        if (array_key_exists("default_item", $context)) {
            // line 31
            echo "    <a
      href=\"";
            // line 32
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "href", [], "any", true, true, false, 32)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "href", [], "any", false, false, false, 32), "#")) : ("#")), "html", null, true);
            echo "\"
      title=\"";
            // line 33
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "title", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "title", [], "any", false, false, false, 33), ((twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "label", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "label", [], "any", false, false, false, 33), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "label", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "label", [], "any", false, false, false, 33), "")) : ("")))), "html", null, true);
            echo "\"
      class=\"btn btn-";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\"
      ";
            // line 35
            if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 35, $this->source); })()) == true))) {
                echo "disabled=\"disabled\"";
            }
            // line 36
            echo "    >
      ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, (isset($context["default_item"]) || array_key_exists("default_item", $context) ? $context["default_item"] : (function () { throw new RuntimeError('Variable "default_item" does not exist.', 37, $this->source); })()), "icon", [], "any", false, false, false, 37)) {
                // line 38
                echo "        <i class=\"material-icons\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["default_item"]) || array_key_exists("default_item", $context) ? $context["default_item"] : (function () { throw new RuntimeError('Variable "default_item" does not exist.', 38, $this->source); })()), "icon", [], "any", false, false, false, 38), "html", null, true);
                echo "</i>
      ";
            }
            // line 40
            echo "      ";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "label", [], "any", true, true, false, 40)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["default_item"] ?? null), "label", [], "any", false, false, false, 40), "")) : ("")), "html", null, true);
            echo "
    </a>
  ";
        }
        // line 43
        echo "
  <button
    ";
        // line 45
        if ((isset($context["button_id"]) || array_key_exists("button_id", $context) ? $context["button_id"] : (function () { throw new RuntimeError('Variable "button_id" does not exist.', 45, $this->source); })())) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["button_id"]) || array_key_exists("button_id", $context) ? $context["button_id"] : (function () { throw new RuntimeError('Variable "button_id" does not exist.', 45, $this->source); })()), "html", null, true);
            echo "\"";
        }
        // line 46
        echo "    class=\"btn btn-";
        echo twig_escape_filter($this->env, (isset($context["buttonType"]) || array_key_exists("buttonType", $context) ? $context["buttonType"] : (function () { throw new RuntimeError('Variable "buttonType" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " dropdown-toggle\"
    ";
        // line 47
        if ((array_key_exists("disabled", $context) && ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 47, $this->source); })()) == true))) {
            echo "disabled=\"disabled\"";
        }
        // line 48
        echo "    data-toggle=\"dropdown\"
  >
    ";
        // line 50
        echo twig_escape_filter($this->env, ((array_key_exists("menu_label", $context)) ? (_twig_default_filter((isset($context["menu_label"]) || array_key_exists("menu_label", $context) ? $context["menu_label"] : (function () { throw new RuntimeError('Variable "menu_label" does not exist.', 50, $this->source); })()), "")) : ("")), "html", null, true);
        echo "
    <i class=\"";
        // line 51
        echo twig_escape_filter($this->env, ((array_key_exists("menu_icon", $context)) ? (_twig_default_filter((isset($context["menu_icon"]) || array_key_exists("menu_icon", $context) ? $context["menu_icon"] : (function () { throw new RuntimeError('Variable "menu_icon" does not exist.', 51, $this->source); })()), "icon-caret-down")) : ("icon-caret-down")), "html", null, true);
        echo "\"></i>
  </button>

  <div class=\"dropdown-menu";
        // line 54
        if ((isset($context["right"]) || array_key_exists("right", $context) ? $context["right"] : (function () { throw new RuntimeError('Variable "right" does not exist.', 54, $this->source); })())) {
            echo " dropdown-menu-right";
        }
        echo "\">
    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 56
            echo "      ";
            if ((twig_get_attribute($this->env, $this->source, $context["entry"], "divider", [], "any", true, true, false, 56) && (twig_get_attribute($this->env, $this->source, $context["entry"], "divider", [], "any", false, false, false, 56) == true))) {
                // line 57
                echo "        <div class=\"dropdown-divider\"></div>
      ";
            } else {
                // line 59
                echo "        <a
          class=\"dropdown-item\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entry"], "href", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "href", [], "any", false, false, false, 60), "#")) : ("#")), "html", null, true);
                echo "\"
          ";
                // line 61
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "onclick", [], "any", true, true, false, 61)) {
                    echo "onclick=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "onclick", [], "any", false, false, false, 61), "html", null, true);
                    echo "\"";
                }
                // line 62
                echo "          ";
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "target", [], "any", true, true, false, 62)) {
                    echo "target=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "target", [], "any", false, false, false, 62), "html", null, true);
                    echo "\"";
                }
                // line 63
                echo "        >
          ";
                // line 64
                if (twig_get_attribute($this->env, $this->source, $context["entry"], "icon", [], "any", false, false, false, 64)) {
                    // line 65
                    echo "            <i class=\"material-icons\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entry"], "icon", [], "any", false, false, false, 65), "html", null, true);
                    echo "</i>
          ";
                }
                // line 67
                echo "          ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["entry"], "label", [], "any", true, true, false, 67)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["entry"], "label", [], "any", false, false, false, 67), "")) : ("")), "html", null, true);
                echo "
        </a>
      ";
            }
            // line 70
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "  </div>

</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 71,  182 => 70,  175 => 67,  169 => 65,  167 => 64,  164 => 63,  157 => 62,  151 => 61,  147 => 60,  144 => 59,  140 => 57,  137 => 56,  133 => 55,  127 => 54,  121 => 51,  117 => 50,  113 => 48,  109 => 47,  104 => 46,  98 => 45,  94 => 43,  87 => 40,  81 => 38,  79 => 37,  76 => 36,  72 => 35,  68 => 34,  64 => 33,  60 => 32,  57 => 31,  55 => 30,  50 => 28,  47 => 27,  45 => 26,  43 => 25,);
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
{% set buttonType = buttonType|default('primary') %}
{% set right = right|default(false) %}

<div class=\"{{ div_style|default(\"btn-group dropdown\") }}\">

  {% if default_item is defined %}
    <a
      href=\"{{ default_item.href|default(\"#\") }}\"
      title=\"{{ default_item.title|default(default_item.label|default(\"\")) }}\"
      class=\"btn btn-{{ buttonType }}\"
      {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    >
      {% if default_item.icon %}
        <i class=\"material-icons\">{{ default_item.icon }}</i>
      {% endif %}
      {{ default_item.label|default('') }}
    </a>
  {% endif %}

  <button
    {% if button_id %}id=\"{{ button_id }}\"{% endif %}
    class=\"btn btn-{{ buttonType }} dropdown-toggle\"
    {% if disabled is defined and disabled == true %}disabled=\"disabled\"{% endif %}
    data-toggle=\"dropdown\"
  >
    {{ menu_label|default('') }}
    <i class=\"{{ menu_icon|default(\"icon-caret-down\") }}\"></i>
  </button>

  <div class=\"dropdown-menu{% if right %} dropdown-menu-right{% endif %}\">
    {% for entry in items %}
      {% if entry.divider is defined and entry.divider==true %}
        <div class=\"dropdown-divider\"></div>
      {% else %}
        <a
          class=\"dropdown-item\" href=\"{{ entry.href|default(\"#\") }}\"
          {% if entry.onclick is defined %}onclick=\"{{ entry.onclick }}\"{% endif %}
          {% if entry.target is defined %}target=\"{{ entry.target }}\"{% endif %}
        >
          {% if entry.icon %}
            <i class=\"material-icons\">{{ entry.icon }}</i>
          {% endif %}
          {{ entry.label|default('') }}
        </a>
      {% endif %}
    {% endfor %}
  </div>

</div>
", "@PrestaShop/Admin/Helpers/dropdown_menu.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Helpers/dropdown_menu.html.twig");
    }
}
