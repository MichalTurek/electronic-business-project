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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig */
class __TwigTemplate_4cc2790077cfa9d78ba564193a3ada70 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_menu_thumbnails' => [$this, 'block_category_menu_thumbnails'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('category_menu_thumbnails', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_category_menu_thumbnails($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_menu_thumbnails"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_menu_thumbnails"));

        // line 27
        echo "  ";
        if ((array_key_exists("menuThumbnailImages", $context) &&  !twig_test_empty((isset($context["menuThumbnailImages"]) || array_key_exists("menuThumbnailImages", $context) ? $context["menuThumbnailImages"] : (function () { throw new RuntimeError('Variable "menuThumbnailImages" does not exist.', 27, $this->source); })())))) {
            // line 28
            echo "    <div>
      ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menuThumbnailImages"]) || array_key_exists("menuThumbnailImages", $context) ? $context["menuThumbnailImages"] : (function () { throw new RuntimeError('Variable "menuThumbnailImages" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["menuThumbnail"]) {
                // line 30
                echo "        <figure class=\"figure\">
          <img src=\"";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menuThumbnail"], "path", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"figure-img img-fluid img-thumbnail\">
          <figcaption class=\"figure-caption\">
            <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                    data-form-submit-url=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_delete_menu_thumbnail", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["editableCategory"]) || array_key_exists("editableCategory", $context) ? $context["editableCategory"] : (function () { throw new RuntimeError('Variable "editableCategory" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "value", [], "any", false, false, false, 34), "menuThumbnailId" => twig_get_attribute($this->env, $this->source, $context["menuThumbnail"], "id", [], "any", false, false, false, 34)]), "html", null, true);
                echo "\"
                    data-form-csrf-token=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-menu-thumbnail"), "html", null, true);
                echo "\"
            >
              <i class=\"material-icons\">
                delete_forever
              </i>
              ";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                echo "
            </button>
          </figcaption>
        </figure>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuThumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  97 => 40,  89 => 35,  85 => 34,  79 => 31,  76 => 30,  72 => 29,  69 => 28,  66 => 27,  47 => 26,  44 => 25,);
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

{% block category_menu_thumbnails %}
  {% if menuThumbnailImages is defined and menuThumbnailImages is not empty %}
    <div>
      {% for menuThumbnail in menuThumbnailImages %}
        <figure class=\"figure\">
          <img src=\"{{ menuThumbnail.path }}\" class=\"figure-img img-fluid img-thumbnail\">
          <figcaption class=\"figure-caption\">
            <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                    data-form-submit-url=\"{{ path('admin_categories_delete_menu_thumbnail', {'categoryId': editableCategory.id.value, 'menuThumbnailId': menuThumbnail.id}) }}\"
                    data-form-csrf-token=\"{{ csrf_token('delete-menu-thumbnail') }}\"
            >
              <i class=\"material-icons\">
                delete_forever
              </i>
              {{ 'Delete'|trans({}, 'Admin.Actions') }}
            </button>
          </figcaption>
        </figure>
      {% endfor %}
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/menu_thumbnail_images.html.twig");
    }
}
