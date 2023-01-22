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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig */
class __TwigTemplate_6e7b3d90f24f903eb64801644b8539ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig"));

        // line 25
        echo "
<div class=\"card\">
  <div class=\"card-body\">
    <nav>
      <ol class=\"breadcrumb\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["currentCategoryView"]) || array_key_exists("currentCategoryView", $context) ? $context["currentCategoryView"] : (function () { throw new RuntimeError('Variable "currentCategoryView" does not exist.', 30, $this->source); })()), "breadcrumb_tree", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "          ";
            $context["isRootCategory"] = (twig_get_attribute($this->env, $this->source, $context["category"], "id_parent", [], "any", false, false, false, 31) == 0);
            // line 32
            echo "          <li class=\"breadcrumb-item\">
            ";
            // line 33
            if (((isset($context["isRootCategory"]) || array_key_exists("isRootCategory", $context) ? $context["isRootCategory"] : (function () { throw new RuntimeError('Variable "isRootCategory" does not exist.', 33, $this->source); })()) && (isset($context["isSingleShopContext"]) || array_key_exists("isSingleShopContext", $context) ? $context["isSingleShopContext"] : (function () { throw new RuntimeError('Variable "isSingleShopContext" does not exist.', 33, $this->source); })()))) {
                // line 34
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["category"], "id_category", [], "any", false, false, false, 34) == twig_get_attribute($this->env, $this->source, (isset($context["currentCategoryView"]) || array_key_exists("currentCategoryView", $context) ? $context["currentCategoryView"] : (function () { throw new RuntimeError('Variable "currentCategoryView" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34))) {
                    // line 35
                    echo "                <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35), "html", null, true);
                    echo "</span>
              ";
                } else {
                    // line 37
                    echo "                <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
                    echo "\">
                  ";
                    // line 38
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 38), "html", null, true);
                    echo "
                </a>
              ";
                }
                // line 41
                echo "            ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["category"], "id_category", [], "any", false, false, false, 41) == twig_get_attribute($this->env, $this->source, (isset($context["currentCategoryView"]) || array_key_exists("currentCategoryView", $context) ? $context["currentCategoryView"] : (function () { throw new RuntimeError('Variable "currentCategoryView" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41))) {
                // line 42
                echo "              <span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 42), "html", null, true);
                echo "</span>
                ";
                // line 43
                if ( !(isset($context["isRootCategory"]) || array_key_exists("isRootCategory", $context) ? $context["isRootCategory"] : (function () { throw new RuntimeError('Variable "isRootCategory" does not exist.', 43, $this->source); })())) {
                    // line 44
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_edit", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "id_category", [], "any", false, false, false, 44)]), "html", null, true);
                    echo "\">
                    <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                    ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
                    echo "
                  </a>
                ";
                }
                // line 49
                echo "            ";
            } else {
                // line 50
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index", ["categoryId" => twig_get_attribute($this->env, $this->source, $context["category"], "id_category", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
                ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 51), "html", null, true);
                echo "
              </a>
            ";
            }
            // line 54
            echo "          </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      </ol>
    </nav>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  118 => 54,  112 => 51,  107 => 50,  104 => 49,  98 => 46,  92 => 44,  90 => 43,  85 => 42,  82 => 41,  76 => 38,  71 => 37,  65 => 35,  62 => 34,  60 => 33,  57 => 32,  54 => 31,  50 => 30,  43 => 25,);
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

<div class=\"card\">
  <div class=\"card-body\">
    <nav>
      <ol class=\"breadcrumb\">
        {% for category in currentCategoryView.breadcrumb_tree %}
          {% set isRootCategory = (category.id_parent == 0) %}
          <li class=\"breadcrumb-item\">
            {% if isRootCategory and isSingleShopContext %}
              {% if category.id_category == currentCategoryView.id %}
                <span>{{ category.name }}</span>
              {% else %}
                <a href=\"{{ path('admin_categories_index') }}\">
                  {{ category.name }}
                </a>
              {% endif %}
            {% elseif category.id_category == currentCategoryView.id %}
              <span>{{ category.name }}</span>
                {% if not isRootCategory %}
                  <a href=\"{{ path('admin_categories_edit', {'categoryId': category.id_category}) }}\">
                    <i style=\"font-size: 16px;\" class=\"material-icons\">edit</i>
                    {{ 'Edit'|trans({}, 'Admin.Actions') }}
                  </a>
                {% endif %}
            {% else %}
              <a href=\"{{ path('admin_categories_index', {'categoryId': category.id_category}) }}\">
                {{ category.name }}
              </a>
            {% endif %}
          </li>
        {% endfor %}
      </ol>
    </nav>
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/breadcrumb.html.twig");
    }
}
