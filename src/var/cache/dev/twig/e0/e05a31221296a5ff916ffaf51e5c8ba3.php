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

/* @PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig */
class __TwigTemplate_13e1a8f121ecee678a251d91690c2c18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 26
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", 26);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 28
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 29
        echo "  ";
        ob_start();
        // line 30
        echo "    ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 33
        echo "
  ";
        // line 34
        ob_start();
        // line 35
        echo "    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        ";
        // line 41
        $context["commandsCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "executedCommands", [], "any", false, false, false, 41));
        // line 42
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if (((isset($context["commandsCount"]) || array_key_exists("commandsCount", $context) ? $context["commandsCount"] : (function () { throw new RuntimeError('Variable "commandsCount" does not exist.', 42, $this->source); })()) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["commandsCount"]) || array_key_exists("commandsCount", $context) ? $context["commandsCount"] : (function () { throw new RuntimeError('Variable "commandsCount" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        ";
        // line 48
        $context["queriesCount"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "executedQueries", [], "any", false, false, false, 48));
        // line 49
        echo "        <span class=\"sf-toolbar-status sf-toolbar-status-";
        if (((isset($context["queriesCount"]) || array_key_exists("queriesCount", $context) ? $context["queriesCount"] : (function () { throw new RuntimeError('Variable "queriesCount" does not exist.', 49, $this->source); })()) > 0)) {
            echo "green";
        } else {
            echo "red";
        }
        echo "\">
          ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["queriesCount"]) || array_key_exists("queriesCount", $context) ? $context["queriesCount"] : (function () { throw new RuntimeError('Variable "queriesCount" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "
        </span>
      </div>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 55
        echo "
  ";
        // line 56
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 60
        echo "  <span class=\"label\">
    <span class=\"icon\">";
        // line 61
        echo twig_include($this->env, $context, "@WebProfiler/Icon/request.svg");
        echo "</span>
    <strong>Commands / Queries</strong>
  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 67
        echo "  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        ";
        // line 79
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "executedCommands", [], "any", false, false, false, 79))) {
            // line 80
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "executedCommands", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 81
                echo "            <tr>
              <td class=\"text-small\">";
                // line 82
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "command", [], "any", false, false, false, 82), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["command"], "command_handler", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
              <td class=\"text-small\">";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 84), "file", [], "any", false, false, false, 84), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 84), "line", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "        ";
        } else {
            // line 88
            echo "          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        ";
        }
        // line 92
        echo "      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      ";
        // line 106
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "executedQueries", [], "any", false, false, false, 106))) {
            // line 107
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 107, $this->source); })()), "executedQueries", [], "any", false, false, false, 107));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 108
                echo "          <tr>
            <td class=\"text-small\">";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 109), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "query_handler", [], "any", false, false, false, 110), "html", null, true);
                echo "</td>
            <td class=\"text-small\">";
                // line 111
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 111), "file", [], "any", false, false, false, 111), "html", null, true);
                echo ":";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 111), "line", [], "any", false, false, false, 111), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "      ";
        } else {
            // line 115
            echo "        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      ";
        }
        // line 119
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 119,  283 => 115,  280 => 114,  269 => 111,  265 => 110,  261 => 109,  258 => 108,  253 => 107,  251 => 106,  235 => 92,  229 => 88,  226 => 87,  215 => 84,  211 => 83,  207 => 82,  204 => 81,  199 => 80,  197 => 79,  183 => 67,  173 => 66,  159 => 61,  156 => 60,  146 => 59,  134 => 56,  131 => 55,  123 => 50,  114 => 49,  112 => 48,  104 => 43,  95 => 42,  93 => 41,  85 => 35,  83 => 34,  80 => 33,  73 => 30,  70 => 29,  60 => 28,  37 => 26,);
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

{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
  {% set icon %}
    {{ include('@WebProfiler/Icon/request.svg') }}
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        {% set commandsCount = collector.executedCommands|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if commandsCount > 0 %}green{% else %}red{% endif %}\">
          {{ commandsCount }}
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        {% set queriesCount = collector.executedQueries|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if queriesCount > 0 %}green{% else %}red{% endif %}\">
          {{ queriesCount }}
        </span>
      </div>
    </div>
  {% endset %}

  {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
{% endblock %}

{% block menu %}
  <span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/request.svg') }}</span>
    <strong>Commands / Queries</strong>
  </span>
{% endblock %}

{% block panel %}
  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        {% if collector.executedCommands is not empty %}
          {% for command in collector.executedCommands %}
            <tr>
              <td class=\"text-small\">{{ command.command }}</td>
              <td class=\"text-small\">{{ command.command_handler }}</td>
              <td class=\"text-small\">{{ command.trace.file }}:{{ command.trace.line }}</td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        {% endif %}
      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      {% if collector.executedQueries is not empty %}
        {% for query in collector.executedQueries %}
          <tr>
            <td class=\"text-small\">{{ query.query }}</td>
            <td class=\"text-small\">{{ query.query_handler }}</td>
            <td class=\"text-small\">{{ query.trace.file }}:{{ query.trace.line }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      {% endif %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/commands_and_queries.html.twig");
    }
}
