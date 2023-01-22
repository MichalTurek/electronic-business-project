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

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_531d19b7f7cf3339e4927e20ddededbb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        // line 25
        list($context["url"], $context["priceRaw"], $context["priceDisplay"], $context["url_active"], $context["urls"], $context["name"], $context["transLabels"], $context["transDomains"]) =         [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 26, $this->source); })()), "attributes", [], "any", false, false, false, 26), "url", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 27, $this->source); })()), "attributes", [], "any", false, false, false, 27), "price", [], "any", false, false, false, 27), "raw", [], "any", false, false, false, 27), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 28
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28), "price", [], "any", false, false, false, 28), "displayPrice", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 29
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "url_active", [], "any", false, false, false, 29), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 30, $this->source); })()), "attributes", [], "any", false, false, false, 30), "urls", [], "any", false, false, false, 30), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 31
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 31, $this->source); })()), "attributes", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 32
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "actionTranslationLabels", [], "any", false, false, false, 32), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 33
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "attributes", [], "any", false, false, false, 33), "actionTranslationDomains", [], "any", false, false, false, 33)];
        // line 35
        echo " <div class=\"btn-group module-actions\">
  ";
        // line 36
        if (((isset($context["url_active"]) || array_key_exists("url_active", $context) ? $context["url_active"] : (function () { throw new RuntimeError('Variable "url_active" does not exist.', 36, $this->source); })()) == "buy")) {
            // line 37
            echo "    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary module_action_menu_go_to_addons\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" target=\"_blank\">
      ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discover", [], "Admin.Modules.Feature"), "html", null, true);
            echo "
    </a>
  ";
        } elseif (twig_length_filter($this->env,         // line 40
(isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 40, $this->source); })()))) {
            // line 41
            echo "    ";
            $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 41)->display(twig_array_merge($context, ["name" =>             // line 42
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 42, $this->source); })()), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-primary", "url" => twig_get_attribute($this->env, $this->source,             // line 45
(isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 45, $this->source); })()), (isset($context["url_active"]) || array_key_exists("url_active", $context) ? $context["url_active"] : (function () { throw new RuntimeError('Variable "url_active" does not exist.', 45, $this->source); })()), [], "array", false, false, false, 45), "action" =>             // line 46
(isset($context["url_active"]) || array_key_exists("url_active", $context) ? $context["url_active"] : (function () { throw new RuntimeError('Variable "url_active" does not exist.', 46, $this->source); })()), "transLabels" =>             // line 47
(isset($context["transLabels"]) || array_key_exists("transLabels", $context) ? $context["transLabels"] : (function () { throw new RuntimeError('Variable "transLabels" does not exist.', 47, $this->source); })()), "transDomain" =>             // line 48
(isset($context["transDomains"]) || array_key_exists("transDomains", $context) ? $context["transDomains"] : (function () { throw new RuntimeError('Variable "transDomains" does not exist.', 48, $this->source); })())]));
            // line 50
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 50, $this->source); })())) > 1)) {
                // line 51
                echo "        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                echo "</span>
        <div class=\"dropdown-menu\">
          ";
                // line 57
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["urls"]) || array_key_exists("urls", $context) ? $context["urls"] : (function () { throw new RuntimeError('Variable "urls" does not exist.', 57, $this->source); })()));
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
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 58
                    echo "            ";
                    if (($context["module_action"] != (isset($context["url_active"]) || array_key_exists("url_active", $context) ? $context["url_active"] : (function () { throw new RuntimeError('Variable "url_active" does not exist.', 58, $this->source); })()))) {
                        // line 59
                        echo "                <li>
                  ";
                        // line 60
                        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_button.html.twig", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", 60)->display(twig_array_merge($context, ["name" =>                         // line 61
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 61, $this->source); })()), "classes" => "dropdown-item", "url" =>                         // line 63
$context["module_url"], "action" =>                         // line 64
$context["module_action"], "transLabels" =>                         // line 65
(isset($context["transLabels"]) || array_key_exists("transLabels", $context) ? $context["transLabels"] : (function () { throw new RuntimeError('Variable "transLabels" does not exist.', 65, $this->source); })()), "transDomain" =>                         // line 66
(isset($context["transDomains"]) || array_key_exists("transDomains", $context) ? $context["transDomains"] : (function () { throw new RuntimeError('Variable "transDomains" does not exist.', 66, $this->source); })())]));
                        // line 68
                        echo "                </li>
            ";
                    }
                    // line 70
                    echo "          ";
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
                unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "        </div>
    ";
            }
            // line 73
            echo "  ";
        }
        // line 74
        echo "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 74,  144 => 73,  140 => 71,  126 => 70,  122 => 68,  120 => 66,  119 => 65,  118 => 64,  117 => 63,  116 => 61,  115 => 60,  112 => 59,  109 => 58,  92 => 57,  87 => 55,  81 => 51,  78 => 50,  76 => 48,  75 => 47,  74 => 46,  73 => 45,  72 => 42,  70 => 41,  68 => 40,  63 => 38,  58 => 37,  56 => 36,  53 => 35,  51 => 33,  50 => 32,  49 => 31,  48 => 30,  47 => 29,  46 => 28,  45 => 27,  44 => 26,  43 => 25,);
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
{% set url, priceRaw, priceDisplay, url_active, urls, name, transLabels, transDomains =
  module.attributes.url,
  module.attributes.price.raw,
  module.attributes.price.displayPrice,
  module.attributes.url_active,
  module.attributes.urls,
  module.attributes.name,
  module.attributes.actionTranslationLabels,
  module.attributes.actionTranslationDomains
%}
 <div class=\"btn-group module-actions\">
  {% if url_active == 'buy' %}
    <a class=\"btn btn-primary btn-primary-reverse btn-block btn-outline-primary module_action_menu_go_to_addons\" href=\"{{ url }}\" target=\"_blank\">
      {{ 'Discover'|trans({}, 'Admin.Modules.Feature') }}
    </a>
  {% elseif urls|length %}
    {% include '@PrestaShop/Admin/Module/Includes/action_button.html.twig' with {
        'name': name,
        'classes_form': 'btn-group form-action-button',
        'classes' : 'btn btn-primary-reverse btn-outline-primary',
        'url': urls[url_active],
        'action': url_active,
        'transLabels': transLabels,
        'transDomain': transDomains}
    %}
    {% if (urls|length > 1) %}
        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-primary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">{{ 'Toggle dropdown'|trans({}, 'Admin.Modules.Feature') }}</span>
        <div class=\"dropdown-menu\">
          {% for module_action, module_url in urls %}
            {% if module_action != url_active %}
                <li>
                  {% include '@PrestaShop/Admin/Module/Includes/action_button.html.twig' with {
                      'name': name,
                      'classes' : 'dropdown-item',
                      'url': module_url,
                      'action': module_action,
                      'transLabels': transLabels,
                      'transDomain': transDomains}
                  %}
                </li>
            {% endif %}
          {% endfor %}
        </div>
    {% endif %}
  {% endif %}
</div>
", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_menu.html.twig");
    }
}
