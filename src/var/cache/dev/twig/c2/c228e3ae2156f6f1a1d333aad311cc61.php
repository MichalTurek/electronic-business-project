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

/* @PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig */
class __TwigTemplate_b2c807e735d1e28a196ce7b6da4c8be2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig"));

        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "counter", [], "any", true, true, false, 25)) {
            // line 26
            echo "  ";
            $context["isRecommandedType"] = (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "counter_type", [], "any", true, true, false, 26) && (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 26, $this->source); })()), "counter_type", [], "any", false, false, false, 26) == "recommended"));
            // line 27
            echo "  <small class=\"form-text text-muted text-right maxLength ";
            echo (( !(isset($context["isRecommandedType"]) || array_key_exists("isRecommandedType", $context) ? $context["isRecommandedType"] : (function () { throw new RuntimeError('Variable "isRecommandedType" does not exist.', 27, $this->source); })())) ? ("maxType") : (""));
            echo "\">
      <em>
        ";
            // line 29
            if ((isset($context["isRecommandedType"]) || array_key_exists("isRecommandedType", $context) ? $context["isRecommandedType"] : (function () { throw new RuntimeError('Variable "isRecommandedType" does not exist.', 29, $this->source); })())) {
                // line 30
                echo "          ";
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . twig_get_attribute($this->env, $this->source,                 // line 33
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 33, $this->source); })()), "counter", [], "any", false, false, false, 33)), "[/2]" => "</span>"]);
                // line 35
                echo "
        ";
            } else {
                // line 37
                echo "          ";
                echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters allowed", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . twig_get_attribute($this->env, $this->source,                 // line 40
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), "counter", [], "any", false, false, false, 40)), "[/2]" => "</span>"]);
                // line 42
                echo "
        ";
            }
            // line 44
            echo "      </em>
  </small>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 44,  68 => 42,  66 => 40,  64 => 37,  60 => 35,  58 => 33,  56 => 30,  54 => 29,  48 => 27,  45 => 26,  43 => 25,);
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
{% if attr.counter is defined %}
  {% set isRecommandedType = attr.counter_type is defined and attr.counter_type == 'recommended' %}
  <small class=\"form-text text-muted text-right maxLength {{ not(isRecommandedType) ? 'maxType' }}\">
      <em>
        {% if isRecommandedType %}
          {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
            '[1]': '<span class=\"currentLength\">',
            '[/1]': '</span>',
            '[2]': '<span class=\"currentTotalMax\">'~attr.counter,
            '[/2]': '</span>',
          })|raw }}
        {% else %}
          {{ '[1][/1] of [2][/2] characters allowed'|trans({}, 'Admin.Catalog.Feature')|replace({
            '[1]': '<span class=\"currentLength\">',
            '[/1]': '</span>',
            '[2]': '<span class=\"currentTotalMax\">'~attr.counter,
            '[/2]': '</span>',
          })|raw }}
        {% endif %}
      </em>
  </small>
{% endif %}
", "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_max_length.html.twig");
    }
}
