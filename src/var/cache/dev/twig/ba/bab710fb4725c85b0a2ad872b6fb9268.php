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

/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_2b468a48c1c1455a3faf4722cedc5ecc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 25, $this->source); })()), "actions", [], "any", false, false, false, 25), "grid", [], "any", false, false, false, 25)) > 0)) {
            // line 26
            echo "  ";
            $context["gridActionsButtonId"] = (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26) . "-grid-actions-button");
            // line 27
            echo "  ";
            $context["gridActionsDropdownMenuId"] = (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27) . "-grid-actions-dropdown-menu");
            // line 28
            echo "
  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["gridActionsButtonId"]) || array_key_exists("gridActionsButtonId", $context) ? $context["gridActionsButtonId"] : (function () { throw new RuntimeError('Variable "gridActionsButtonId" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
            echo "\"
    >
      <span class=\"sr-only\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
            echo "</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"";
            // line 41
            echo twig_escape_filter($this->env, (isset($context["gridActionsButtonId"]) || array_key_exists("gridActionsButtonId", $context) ? $context["gridActionsButtonId"] : (function () { throw new RuntimeError('Variable "gridActionsButtonId" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\"
         id=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["gridActionsDropdownMenuId"]) || array_key_exists("gridActionsDropdownMenuId", $context) ? $context["gridActionsDropdownMenuId"] : (function () { throw new RuntimeError('Variable "gridActionsDropdownMenuId" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\"
    >
      ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 44, $this->source); })()), "actions", [], "any", false, false, false, 44), "grid", [], "any", false, false, false, 44));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 45
                echo "        ";
                echo twig_include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Grid/" . twig_get_attribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 45)) . ".html.twig"), ["action" => $context["action"], "grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 45, $this->source); })())]);
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </div>

    ";
            // line 49
            $this->loadTemplate("@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 49, "1218798203")->display(twig_array_merge($context, ["id" => (twig_get_attribute($this->env, $this->source,             // line 50
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50) . "_grid_common_show_query_modal"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [0 => ["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg btn-sql-submit"]]]));
            // line 74
            echo "  </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 74,  123 => 50,  122 => 49,  118 => 47,  101 => 45,  84 => 44,  79 => 42,  75 => 41,  68 => 37,  63 => 35,  56 => 31,  51 => 28,  48 => 27,  45 => 26,  43 => 25,);
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
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ '-grid-actions-button' %}
  {% set gridActionsDropdownMenuId = grid.id ~ '-grid-actions-dropdown-menu' %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ 'Settings'|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ 'Settings'|trans({}, 'Admin.Global') }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"{{ gridActionsButtonId }}\"
         id=\"{{ gridActionsDropdownMenuId }}\"
    >
      {% for action in grid.actions.grid %}
        {{ include('@PrestaShop/Admin/Common/Grid/Actions/Grid/'~action.type~'.html.twig', {'action': action, 'grid': grid}) }}
      {% endfor %}
    </div>

    {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
      'id': grid.id ~ '_grid_common_show_query_modal',
      'title': \"SQL query\"|trans({}, 'Admin.Global'),
      'closable': true,
      'actions': [{
        'type': 'button',
        'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
        'value': 'sql_manager',
        'class': 'btn btn-primary btn-lg btn-sql-submit',
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path('admin_sql_requests_create') }}\"
                  id=\"{{ grid.id ~ '_common_show_query_modal_form' }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}


/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_2b468a48c1c1455a3faf4722cedc5ecc___1218798203 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 49
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $this->parent = $this->loadTemplate("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 49);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 60
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 61
        echo "          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sql_requests_create");
        echo "\"
                  id=\"";
        // line 64
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64) . "_common_show_query_modal_form"), "html", null, true);
        echo "\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 64,  290 => 63,  286 => 61,  276 => 60,  253 => 49,  125 => 74,  123 => 50,  122 => 49,  118 => 47,  101 => 45,  84 => 44,  79 => 42,  75 => 41,  68 => 37,  63 => 35,  56 => 31,  51 => 28,  48 => 27,  45 => 26,  43 => 25,);
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
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ '-grid-actions-button' %}
  {% set gridActionsDropdownMenuId = grid.id ~ '-grid-actions-dropdown-menu' %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ 'Settings'|trans({}, 'Admin.Global') }}\"
    >
      <span class=\"sr-only\">{{ 'Settings'|trans({}, 'Admin.Global') }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"{{ gridActionsButtonId }}\"
         id=\"{{ gridActionsDropdownMenuId }}\"
    >
      {% for action in grid.actions.grid %}
        {{ include('@PrestaShop/Admin/Common/Grid/Actions/Grid/'~action.type~'.html.twig', {'action': action, 'grid': grid}) }}
      {% endfor %}
    </div>

    {% embed '@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig' with {
      'id': grid.id ~ '_grid_common_show_query_modal',
      'title': \"SQL query\"|trans({}, 'Admin.Global'),
      'closable': true,
      'actions': [{
        'type': 'button',
        'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
        'value': 'sql_manager',
        'class': 'btn btn-primary btn-lg btn-sql-submit',
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path('admin_sql_requests_create') }}\"
                  id=\"{{ grid.id ~ '_common_show_query_modal_form' }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Blocks/grid_actions.html.twig");
    }
}
