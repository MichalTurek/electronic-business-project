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

/* @PrestaShop/Admin/Module/Includes/modal_confirm.html.twig */
class __TwigTemplate_32bd9ec9085966d3b2f2148fdee3947c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25), "urls", [], "any", false, false, false, 25)) >= 1)) {
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 26, $this->source); })()), "attributes", [], "any", false, false, false, 26), "urls", [], "any", false, false, false, 26));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 27
                echo "    ";
                if (twig_in_filter($context["module_action"], [0 => "disable", 1 => "uninstall", 2 => "reset"])) {
                    // line 28
                    echo "      <div id=\"module-modal-confirm-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                    echo "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 34
                    if (($context["module_action"] == "disable")) {
                        // line 35
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable module?", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 37
                    echo "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 38
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall module?", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 40
                    echo "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 41
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset module?", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 43
                    echo "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
                    // line 50
                    if (($context["module_action"] == "disable")) {
                        // line 51
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to disable %moduleName% module.", ["%moduleName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 51, $this->source); })()), "attributes", [], "any", false, false, false, 51), "displayName", [], "any", false, false, false, 51)], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <br>
                  ";
                        // line 54
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your current settings will be saved, but the module will no longer be active.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                ";
                    }
                    // line 56
                    echo "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 57
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to uninstall %moduleName% module.", ["%moduleName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 57, $this->source); })()), "attributes", [], "any", false, false, false, 57), "displayName", [], "any", false, false, false, 57)], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  ";
                        // line 59
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 59, $this->source); })()), "attributes", [], "any", false, false, false, 59), "confirmUninstall", [], "any", false, false, false, 59), "html", null, true);
                        echo "
                  <br>
                  <br>
                  ";
                        // line 62
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will disable the module and delete all its files. For good.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 65
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 65, $this->source); })()), "attributes", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                        echo "\">
                    ";
                        // line 66
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                  </label>
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  </span>
                ";
                    }
                    // line 73
                    echo "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 74
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You're about to reset %moduleName% module.", ["%moduleName%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "displayName", [], "any", false, false, false, 74)], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <br>
                  ";
                        // line 77
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will restore the defaults settings.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  </span>
                ";
                    }
                    // line 83
                    echo "              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 86
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    echo "\"/>
              ";
                    // line 87
                    if (($context["module_action"] == "disable")) {
                        // line 88
                        echo "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\" 
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 89
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 89, $this->source); })()), "attributes", [], "any", false, false, false, 89), "name", [], "any", false, false, false, 89), "html", null, true);
                        echo "\">
                  ";
                        // line 90
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, disable it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 93
                    echo "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 94
                        echo "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\" 
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 95
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 95, $this->source); })()), "attributes", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), "html", null, true);
                        echo "\">
                  ";
                        // line 96
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, uninstall it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 99
                    echo "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 100
                        echo "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\" 
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 101
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 101, $this->source); })()), "attributes", [], "any", false, false, false, 101), "name", [], "any", false, false, false, 101), "html", null, true);
                        echo "\">
                  ";
                        // line 102
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, reset it", [], "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 105
                    echo "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 110
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 110,  242 => 105,  236 => 102,  232 => 101,  225 => 100,  222 => 99,  216 => 96,  212 => 95,  205 => 94,  202 => 93,  196 => 90,  192 => 89,  185 => 88,  183 => 87,  179 => 86,  174 => 83,  168 => 80,  162 => 77,  155 => 74,  152 => 73,  146 => 70,  139 => 66,  135 => 65,  129 => 62,  123 => 59,  117 => 57,  114 => 56,  109 => 54,  102 => 51,  100 => 50,  91 => 43,  85 => 41,  82 => 40,  76 => 38,  73 => 37,  67 => 35,  65 => 34,  53 => 28,  50 => 27,  45 => 26,  43 => 25,);
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
{% if module.attributes.urls|length >= 1 %}
  {% for module_action, module_url in module.attributes.urls %}
    {% if module_action in ['disable', 'uninstall', 'reset'] %}
      <div id=\"module-modal-confirm-{{module.attributes.name}}-{{ module_action }}\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                {% if module_action == 'disable' %}
                  {{ \"Disable module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'uninstall' %}
                  {{ \"Uninstall module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'reset' %}
                  {{ \"Reset module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                {% if module_action == 'disable' %}
                  {{ \"You are about to disable %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                  <br>
                  <br>
                  {{ \"Your current settings will be saved, but the module will no longer be active.\"|trans({}, 'Admin.Modules.Notification') }}
                {% endif %}
                {% if module_action == 'uninstall' %}
                  {{ \"You are about to uninstall %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                  <br>
                  {{ module.attributes.confirmUninstall }}
                  <br>
                  <br>
                  {{ \"This will disable the module and delete all its files. For good.\"|trans({}, 'Admin.Modules.Notification') }}
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"{{module.attributes.name}}\">
                    {{ \"Optional: delete module folder after uninstall.\"|trans({}, 'Admin.Modules.Feature') }}
                  </label>
                  <br>
                  <span class=\"italic red\">
                    {{ \"This action cannot be undone.\"|trans({}, 'Admin.Modules.Notification') }}
                  </span>
                {% endif %}
                {% if module_action == 'reset' %}
                  {{ \"You're about to reset %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                  <br>
                  <br>
                  {{ \"This will restore the defaults settings.\"|trans({}, 'Admin.Modules.Notification') }}
                  <br>
                  <span class=\"italic red\">
                    {{ \"This action cannot be undone.\"|trans({}, 'Admin.Modules.Notification') }}
                  </span>
                {% endif %}
              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"{{ \"Cancel\"|trans({}, 'Admin.Actions') }}\"/>
              {% if module_action == 'disable' %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\" 
                data-dismiss=\"modal\" data-tech-name=\"{{module.attributes.name}}\">
                  {{ \"Yes, disable it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'uninstall' %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\" 
                data-dismiss=\"modal\" data-tech-name=\"{{module.attributes.name}}\">
                  {{ \"Yes, uninstall it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'reset' %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\" 
                data-dismiss=\"modal\" data-tech-name=\"{{module.attributes.name}}\">
                  {{ \"Yes, reset it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    {% endif %}
  {% endfor %}
{% endif %}
", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_confirm.html.twig");
    }
}
