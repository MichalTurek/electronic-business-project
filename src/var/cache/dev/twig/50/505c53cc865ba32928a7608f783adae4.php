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

/* @PrestaShop/Admin/Common/pagination.html.twig */
class __TwigTemplate_e861ac97e32d4b2330f28d397eaf63b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination.html.twig"));

        // line 25
        echo "<div class=\"row justify-content-center pagination-block\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item ";
        // line 27
        if ((isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 27, $this->source); })())) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 28
        if ((isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 28, $this->source); })())) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">1</a>
    </li>
    <li class=\"page-item previous ";
        // line 30
        if ((isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 30, $this->source); })())) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" aria-label=\"Previous\" ";
        // line 31
        if ((isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 31, $this->source); })())) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" psurl=\"";
        echo twig_escape_filter($this->env, (isset($context["jump_page_url"]) || array_key_exists("jump_page_url", $context) ? $context["jump_page_url"] : (function () { throw new RuntimeError('Variable "jump_page_url" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" psmax=\"";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" pslimit=\"";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter page number and press enter", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "\"/>
    </li>
    <li class=\"page-item next ";
        // line 36
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 36, $this->source); })()) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" aria-label=\"Next\" id=\"pagination_next_url\" ";
        // line 37
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 37, $this->source); })()) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 37, $this->source); })()), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo "><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item ";
        // line 39
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 39, $this->source); })()) != false))) {
        } else {
            echo "disabled";
        }
        echo "\">
      <a class=\"page-link\" ";
        // line 40
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 40, $this->source); })()) != false))) {
            echo "href=\"";
            echo twig_escape_filter($this->env, (isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\"";
        } else {
            echo "nohref";
        }
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => (        // line 46
(isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 46, $this->source); })()) + 1), "%to%" => min((        // line 47
(isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 47, $this->source); })()) + 1), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 47, $this->source); })())), "%total%" =>         // line 48
(isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 48, $this->source); })()), "%current_page%" =>         // line 49
(isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 49, $this->source); })()), "%page_count%" =>         // line 50
(isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 50, $this->source); })())], "Admin.Catalog.Feature"), "html", null, true);
        // line 51
        echo "
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["changeLimitUrl"]) || array_key_exists("changeLimitUrl", $context) ? $context["changeLimitUrl"] : (function () { throw new RuntimeError('Variable "changeLimitUrl" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\" class=\"pagination-link custom-select\">
          ";
        // line 59
        if (!twig_in_filter((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), (isset($context["limit_choices"]) || array_key_exists("limit_choices", $context) ? $context["limit_choices"] : (function () { throw new RuntimeError('Variable "limit_choices" does not exist.', 59, $this->source); })()))) {
            // line 60
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "\" selected=\"selected\">";
            echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "</option>
          ";
        }
        // line 62
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["limit_choices"]) || array_key_exists("limit_choices", $context) ? $context["limit_choices"] : (function () { throw new RuntimeError('Variable "limit_choices" does not exist.', 62, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 63
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "\" ";
            if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 63, $this->source); })()) == $context["limit_choice"])) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["limit_choice"], "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limit_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "        </select>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  176 => 63,  171 => 62,  163 => 60,  161 => 59,  157 => 58,  152 => 56,  145 => 51,  143 => 50,  142 => 49,  141 => 48,  140 => 47,  139 => 46,  138 => 45,  122 => 40,  115 => 39,  104 => 37,  97 => 36,  84 => 34,  72 => 31,  65 => 30,  54 => 28,  47 => 27,  43 => 25,);
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
<div class=\"row justify-content-center pagination-block\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
    </li>
    <li class=\"page-item previous {% if previous_url %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" aria-label=\"Previous\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" aria-label=\"{{ \"Enter page number and press enter\"|trans({}, 'Admin.Catalog.Feature') }}\"/>
    </li>
    <li class=\"page-item next {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" aria-label=\"Next\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      {{ \"Viewing %from%-%to% on %total% (page %current_page% / %page_count%)\"|trans({
        '%from%': from+1,
        '%to%': min(to+1, total),
        '%total%': total,
        '%current_page%': current_page,
        '%page_count%': page_count
      }, 'Admin.Catalog.Feature') }}
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">{{ \"Items per page:\"|trans({}, 'Admin.Catalog.Feature') }}</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"{{ changeLimitUrl }}\" class=\"pagination-link custom-select\">
          {% if limit not in limit_choices %}
            <option value=\"{{ limit }}\" selected=\"selected\">{{ limit }}</option>
          {% endif %}
          {% for limit_choice in limit_choices %}
            <option value=\"{{ limit_choice }}\" {% if limit==limit_choice %}selected=\"selected\"{% endif %}>{{ limit_choice }}</option>
          {% endfor %}
        </select>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Common/pagination.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/pagination.html.twig");
    }
}
