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

/* @PrestaShop/Admin/Module/Includes/action_button.html.twig */
class __TwigTemplate_85eab4ad1091290617ee27a3f28ccaad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_button.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_button.html.twig"));

        // line 25
        echo "
";
        // line 26
        $context["displayAction"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["transLabels"]) || array_key_exists("transLabels", $context) ? $context["transLabels"] : (function () { throw new RuntimeError('Variable "transLabels" does not exist.', 26, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26)), [], twig_get_attribute($this->env, $this->source, (isset($context["transDomain"]) || array_key_exists("transDomain", $context) ? $context["transDomain"] : (function () { throw new RuntimeError('Variable "transDomain" does not exist.', 26, $this->source); })()), (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()), [], "array", false, false, false, 26));
        // line 27
        echo "
";
        // line 28
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 28, $this->source); })()) == "configure")) {
            // line 29
            echo "
    <a class=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">
      ";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["displayAction"]) || array_key_exists("displayAction", $context) ? $context["displayAction"] : (function () { throw new RuntimeError('Variable "displayAction" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "
    </a>

";
        } else {
            // line 35
            echo "
    <form class=\"";
            // line 36
            echo twig_escape_filter($this->env, ((array_key_exists("classes_form", $context)) ? (_twig_default_filter((isset($context["classes_form"]) || array_key_exists("classes_form", $context) ? $context["classes_form"] : (function () { throw new RuntimeError('Variable "classes_form" does not exist.', 36, $this->source); })()))) : ("")), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\">
      <button type=\"submit\" class=\"";
            // line 37
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 37, $this->source); })()), "html", null, true);
            echo " module_action_menu_";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\" data-confirm_modal=\"module-modal-confirm-";
            echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 38
            echo twig_escape_filter($this->env, (isset($context["displayAction"]) || array_key_exists("displayAction", $context) ? $context["displayAction"] : (function () { throw new RuntimeError('Variable "displayAction" does not exist.', 38, $this->source); })()), "html", null, true);
            echo "
      </button>
    </form>

";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/action_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 38,  78 => 37,  72 => 36,  69 => 35,  62 => 31,  56 => 30,  53 => 29,  51 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

{% set displayAction = transLabels[action]|title|trans({}, transDomain[action]) %}

{% if (action == 'configure') %}

    <a class=\"{{ classes }}\" href=\"{{ url }}\">
      {{ displayAction }}
    </a>

{% else %}

    <form class=\"{{classes_form|default() }}\" method=\"post\" action=\"{{ url }}\">
      <button type=\"submit\" class=\"{{ classes }} module_action_menu_{{ action }}\" data-confirm_modal=\"module-modal-confirm-{{ name }}-{{ action }}\">
        {{ displayAction }}
      </button>
    </form>

{% endif %}
", "@PrestaShop/Admin/Module/Includes/action_button.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/action_button.html.twig");
    }
}
