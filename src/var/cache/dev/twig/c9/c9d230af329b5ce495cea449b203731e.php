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

/* @PrestaShop/Admin/WebProfiler/hooks_collector.html.twig */
class __TwigTemplate_797b8332682535313d57e1831c8288fe extends Template
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
        // line 25
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        // line 27
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 25
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", 25);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 29
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 30
        echo "    ";
        ob_start();
        // line 31
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "
        <span class=\"sf-toolbar-value\">Hooks (";
        // line 32
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 32, $this->source); })()), "calledHooks", [], "any", false, false, false, 32)), "html", null, true);
        echo ")</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "
    ";
        // line 35
        ob_start();
        // line 36
        echo "        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 38, $this->source); })()), "calledHooks", [], "any", false, false, false, 38)), "html", null, true);
        echo "
                    Hooks called and received by modules
                </b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 51, $this->source); })()), "calledHooks", [], "any", false, false, false, 51));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
            // line 52
            echo "                            <tr><td>";
            echo twig_escape_filter($this->env, $context["hookName"], "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["hooks"]), "html", null, true);
            echo "</td></tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hookName'], $context['hooks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 61
        echo "
    ";
        // line 62
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 66
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 67
        echo "    ";
        // line 68
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 69
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
        <strong>Hooks</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 74
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 75
        echo "    <h2>Hooks</h2>

    ";
        // line 77
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 77, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 77))) {
            // line 78
            echo "        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 82
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called and received by modules
                    <span class=\"badge\">";
            // line 86
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "calledHooks", [], "any", false, false, false, 86)), "html", null, true);
            echo "</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop and there are active modules listening and receiving them.
                </p>
                <div class=\"tab-content\">
                    ";
            // line 92
            echo twig_call_macro($macros["helper"], "macro_render_table", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 92, $this->source); })()), "calledHooks", [], "any", false, false, false, 92), true], 92, $context, $this->getSourceContext());
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called but not received by modules
                    <span class=\"badge\">";
            // line 99
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 99, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 99)), "html", null, true);
            echo "</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop but no modules
                    have subscribed to them.
                </p>
                <div class=\"tab-content\">
                    ";
            // line 106
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 106))) {
                // line 107
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 118
                echo "                        ";
                echo twig_call_macro($macros["helper"], "macro_render_table", [twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 118, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 118), false], 118, $context, $this->getSourceContext());
                echo "
                    ";
            }
            // line 120
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function macro_render_table($__hookList__ = null, $__hookModules__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "hookList" => $__hookList__,
            "hookModules" => $__hookModules__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 127
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["hookList"]) || array_key_exists("hookList", $context) ? $context["hookList"] : (function () { throw new RuntimeError('Variable "hookList" does not exist.', 127, $this->source); })()));
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 128
                echo "        <h3>";
                echo twig_escape_filter($this->env, $context["hookName"], "html", null, true);
                echo "</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    ";
                // line 135
                if ((isset($context["hookModules"]) || array_key_exists("hookModules", $context) ? $context["hookModules"] : (function () { throw new RuntimeError('Variable "hookModules" does not exist.', 135, $this->source); })())) {
                    // line 136
                    echo "                        <th>Hooked modules</th>
                    ";
                }
                // line 138
                echo "                </tr>
            </thead>
            <tbody>
            ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["hooks"]);
                foreach ($context['_seq'] as $context["position"] => $context["hook"]) {
                    // line 142
                    echo "            <tr>
                <td>
                    ";
                    // line 144
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "args", [], "any", false, false, false, 144));
                    echo "
                </td>
                <td>
                    <span class=\"text-muted\">";
                    // line 147
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hook"], "location", [], "any", false, false, false, 147), "html", null, true);
                    echo "</span>
                </td>
                ";
                    // line 149
                    if ((isset($context["hookModules"]) || array_key_exists("hookModules", $context) ? $context["hookModules"] : (function () { throw new RuntimeError('Variable "hookModules" does not exist.', 149, $this->source); })())) {
                        // line 150
                        echo "                    <td>
                        ";
                        // line 151
                        $context["modules"] = twig_get_attribute($this->env, $this->source, $context["hook"], "modules", [], "any", false, false, false, 151);
                        // line 152
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 152, $this->source); })()));
                        foreach ($context['_seq'] as $context["moduleName"] => $context["module"]) {
                            // line 153
                            echo "                            <h4><b>";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["moduleName"]), "html", null, true);
                            echo "</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                ";
                            // line 161
                            if (twig_get_attribute($this->env, $this->source, $context["module"], "callback", [], "any", true, true, false, 161)) {
                                // line 162
                                echo "                                <tr>
                                    <td>";
                                // line 163
                                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "callback", [], "any", false, false, false, 163), "args", [], "any", false, false, false, 163));
                                echo "</td>
                                </tr>
                                ";
                            } else {
                                // line 166
                                echo "                                <tr>
                                    <td>";
                                // line 167
                                echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["module"], "widget", [], "any", false, false, false, 167), "args", [], "any", false, false, false, 167));
                                echo "</td>
                                </tr>
                                ";
                            }
                            // line 170
                            echo "                            </table>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['moduleName'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 172
                        echo "                    </td>
                ";
                    }
                    // line 174
                    echo "            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['position'], $context['hook'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "            </tbody>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['hookName'], $context['hooks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 176,  398 => 174,  394 => 172,  387 => 170,  381 => 167,  378 => 166,  372 => 163,  369 => 162,  367 => 161,  355 => 153,  350 => 152,  348 => 151,  345 => 150,  343 => 149,  338 => 147,  332 => 144,  328 => 142,  324 => 141,  319 => 138,  315 => 136,  313 => 135,  302 => 128,  297 => 127,  277 => 126,  263 => 120,  257 => 118,  244 => 107,  242 => 106,  232 => 99,  222 => 92,  213 => 86,  207 => 82,  201 => 78,  199 => 77,  195 => 75,  185 => 74,  171 => 69,  168 => 68,  166 => 67,  156 => 66,  143 => 62,  140 => 61,  133 => 56,  126 => 54,  116 => 52,  111 => 51,  95 => 38,  91 => 36,  89 => 35,  86 => 34,  81 => 32,  76 => 31,  73 => 30,  63 => 29,  52 => 25,  50 => 27,  37 => 25,);
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

{% import _self as helper %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/event.svg') }}
        <span class=\"sf-toolbar-value\">Hooks ({{ collector.calledHooks|length }})</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">{{ collector.calledHooks|length }}
                    Hooks called and received by modules
                </b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for hookName, hooks in collector.calledHooks %}
                            <tr><td>{{ hookName }}</td><td>{{ hooks|length }}</td></tr>
                        {% else %}
                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}

{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
        <strong>Hooks</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Hooks</h2>

    {% if collector.notCalledHooks is empty %}
        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called and received by modules
                    <span class=\"badge\">{{ collector.calledHooks|length }}</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop and there are active modules listening and receiving them.
                </p>
                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledHooks, true) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called but not received by modules
                    <span class=\"badge\">{{ collector.notCalledHooks|length }}</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop but no modules
                    have subscribed to them.
                </p>
                <div class=\"tab-content\">
                    {% if collector.notCalledHooks is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notCalledHooks, false) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(hookList, hookModules) %}
    {% for hookName, hooks in hookList %}
        <h3>{{ hookName }}</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    {% if hookModules %}
                        <th>Hooked modules</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% for position, hook in hooks %}
            <tr>
                <td>
                    {{ profiler_dump(hook.args) }}
                </td>
                <td>
                    <span class=\"text-muted\">{{ hook.location }}</span>
                </td>
                {% if hookModules %}
                    <td>
                        {% set modules = hook.modules %}
                        {% for moduleName, module in modules %}
                            <h4><b>{{ moduleName|capitalize }}</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                {% if module.callback is defined %}
                                <tr>
                                    <td>{{ profiler_dump(module.callback.args) }}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td>{{ profiler_dump(module.widget.args) }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        {% endfor %}
                    </td>
                {% endif %}
            </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endmacro %}
", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/hooks_collector.html.twig");
    }
}
