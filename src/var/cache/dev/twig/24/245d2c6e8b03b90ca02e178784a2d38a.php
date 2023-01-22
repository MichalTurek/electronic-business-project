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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_68f09739943d3f38daa83f39a9024299 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        // line 25
        $this->displayBlock('translatable_choice_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_translatable_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        // line 26
        echo "  ";
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", 26)->unwrap();
        // line 27
        echo "
  ";
        // line 28
        $context["class"] = ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 28), "")) : (""));
        // line 29
        echo "  ";
        $context["rowAttributes"] = ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 29)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 29), [])) : ([]));
        // line 30
        echo "  ";
        $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "attr", [], "any", false, false, false, 30);
        // line 31
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 31, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 31)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 31), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 32
        echo "  <div class=\"form-group row type-choice ";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
  ";
        // line 33
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 33, $this->source); })()), [])) : ([]));
        // line 34
        echo "
  ";
        // line 36
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "vars", [], "any", false, false, false, 36), "choices", [], "any", false, false, false, 36));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 37
            echo "    <div class=\"col-sm-6\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 37), "default_locale", [], "any", true, true, false, 37) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "default_locale", [], "any", false, false, false, 37) === $context["language"]))) {
                echo "style=\"display: none\"";
            }
            echo ">
      <select class=\"";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "class", [], "any", false, false, false, 38), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38) . "_") . $context["language"]), "html", null, true);
            echo "\" data-language=\"";
            echo twig_escape_filter($this->env, $context["language"], "html", null, true);
            echo "\">
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 40
                echo "          <option value=\"";
                echo twig_escape_filter($this->env, $context["choiceValue"], "html", null, true);
                echo "\"
            ";
                // line 41
                if (((array_key_exists("value", $context) && twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), $context["language"], [], "array", true, true, false, 41)) && ($context["choiceValue"] === twig_get_attribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 41, $this->source); })()), $context["language"], [], "array", false, false, false, 41)))) {
                    echo " selected=\"selected\"";
                }
                // line 42
                echo "             ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 42), "row_attr", [], "any", false, true, false, 42), $context["language"], [], "array", false, true, false, 42), $context["choiceValue"], [], "array", true, true, false, 42) && twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "row_attr", [], "any", false, false, false, 42), $context["language"], [], "array", false, false, false, 42), $context["choiceValue"], [], "array", false, false, false, 42)))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "row_attr", [], "any", false, false, false, 42), $context["language"], [], "array", false, false, false, 42), $context["choiceValue"], [], "array", false, false, false, 42));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        echo " ";
                        echo twig_escape_filter($this->env, $context["optionKey"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["optionAttr"], "html", null, true);
                        echo "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['optionKey'], $context['optionAttr'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                echo ">";
                echo twig_escape_filter($this->env, ((( !array_key_exists("choice_translation_domain", $context) || ((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 42, $this->source); })()) === false))) ? ($context["choiceLabel"]) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"], [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 42, $this->source); })())))), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['choiceValue'], $context['choiceLabel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </select>
      <input type=\"hidden\" id=\"";
            // line 45
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) . "_") . $context["language"]) . "_value"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "vars", [], "any", false, false, false, 45), "full_name", [], "any", false, false, false, 45) . "[") . $context["language"]) . "]"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_first($this->env, $context["choices"]), "html", null, true);
            echo "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['language'], $context['choices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
  ";
        // line 50
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 50), "locales", [], "any", true, true, false, 50) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "vars", [], "any", false, false, false, 50), "locales", [], "any", false, false, false, 50)))) {
            // line 51
            echo "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 52
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52) . "_language"), "html", null, true);
            echo "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 53
            if (twig_test_iterable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "vars", [], "any", false, false, false, 53), "locales", [], "any", false, false, false, 53))) {
                // line 54
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "locales", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 55
                    echo "            <option value=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "id_lang", [], "any", false, false, false, 55), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 55) . " - ") . twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 55)), "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "        ";
            }
            // line 58
            echo "      </select>
    </div>
  ";
        }
        // line 61
        echo "
  ";
        // line 63
        echo "  ";
        if (array_key_exists("button", $context)) {
            // line 64
            echo "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", true, true, false, 65)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65), "html", null, true);
                echo "\"";
            }
            echo " class=\"btn ";
            if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", true, true, false, 65)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 65, $this->source); })()), "class", [], "any", false, false, false, 65), "html", null, true);
            } else {
                echo "btn-default";
            }
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", true, true, false, 65)) {
                echo " onclick=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 65, $this->source); })()), "action", [], "any", false, false, false, 65), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", true, true, false, 66)) {
                echo "<i class=\"material-icons\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 66, $this->source); })()), "icon", [], "any", false, false, false, 66), "html", null, true);
                echo "</i>";
            }
            // line 67
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 67, $this->source); })()), "label", [], "any", false, false, false, 67), "html", null, true);
            echo "
      </button>
    </div>
  ";
        }
        // line 71
        echo "  </div>";
        // line 73
        $this->displayBlock("form_help", $context, $blocks);
        // line 74
        $this->displayBlock("form_hint", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  262 => 74,  260 => 73,  258 => 71,  250 => 67,  244 => 66,  224 => 65,  221 => 64,  218 => 63,  215 => 61,  210 => 58,  207 => 57,  196 => 55,  191 => 54,  189 => 53,  185 => 52,  182 => 51,  179 => 50,  176 => 48,  163 => 45,  160 => 44,  136 => 42,  132 => 41,  127 => 40,  123 => 39,  115 => 38,  108 => 37,  103 => 36,  100 => 34,  98 => 33,  80 => 32,  77 => 31,  74 => 30,  71 => 29,  69 => 28,  66 => 27,  63 => 26,  44 => 25,);
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
{% block translatable_choice_widget %}
  {% import '@PrestaShop/Admin/macros.html.twig' as ps %}

  {% set class = extraVars.class|default('') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select translatable_choice')|trim}) %}
  <div class=\"form-group row type-choice {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# options selector #}
  {% for language, choices in form.vars.choices %}
    <div class=\"col-sm-6\" {% if form.vars.default_locale is defined and form.vars.default_locale is not same as(language) %}style=\"display: none\"{% endif %}>
      <select class=\"{{ attr.class }}\" id=\"{{ form.vars.id ~ '_' ~ language }}\" data-language=\"{{ language }}\">
        {% for choiceValue, choiceLabel in choices %}
          <option value=\"{{ choiceValue }}\"
            {% if value is defined and value[language] is defined and choiceValue is same as(value[language]) %} selected=\"selected\"{% endif %}
             {% if form.vars.row_attr[language][choiceValue] is defined and form.vars.row_attr[language][choiceValue] is iterable %}{% for optionKey, optionAttr in form.vars.row_attr[language][choiceValue] %} {{ optionKey }}=\"{{ optionAttr }}\"{% endfor %}{% endif %}>{{ choice_translation_domain is not defined or choice_translation_domain is same as(false) ? choiceLabel : choiceLabel|trans({}, choice_translation_domain) }}</option>
        {% endfor %}
      </select>
      <input type=\"hidden\" id=\"{{ form.vars.id ~ '_' ~ language ~ '_value' }}\" name=\"{{ form.vars.full_name ~ '[' ~ language ~ ']' }}\" value=\"{{ choices|first }}\" />
    </div>
  {% endfor %}

  {# languages selector #}
  {% if form.vars.locales is defined and form.vars.locales is not empty %}
    <div class=\"col-sm-3\">
      <select name=\"{{ form.vars.id ~'_language' }}\" class=\"custom-select translatable_choice_language\">
        {% if form.vars.locales is iterable %}
          {% for language in form.vars.locales %}
            <option value=\"{{ language.id_lang }}\">{{ language.iso_code ~ ' - ' ~ language.name }}</option>
          {% endfor %}
        {% endif %}
      </select>
    </div>
  {% endif %}

  {# extra button#}
  {% if button is defined %}
    <div class=\"col-sm-3\">
      <button type=\"button\" {% if button.id is defined %}id=\"{{ button.id }}\"{% endif %} class=\"btn {% if button.class is defined %}{{ button.class }}{% else %}btn-default{% endif %}\" {% if button.action is defined %} onclick=\"{{ button.action }}\"{% endif %}>
        {% if button.icon is defined %}<i class=\"material-icons\">{{ button.icon }}</i>{% endif %}
        {{ button.label }}
      </button>
    </div>
  {% endif %}
  </div>

  {{- block('form_help') -}}
  {{- block('form_hint') -}}
{% endblock translatable_choice_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/translatable_choice.html.twig");
    }
}
