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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig */
class __TwigTemplate_dbb0c264f54d113921aa53a9fdf699d8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'category_cover_image' => [$this, 'block_category_cover_image'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('category_cover_image', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_category_cover_image($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_cover_image"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_cover_image"));

        // line 27
        echo "  ";
        if ((array_key_exists("coverImage", $context) &&  !(null === (isset($context["coverImage"]) || array_key_exists("coverImage", $context) ? $context["coverImage"] : (function () { throw new RuntimeError('Variable "coverImage" does not exist.', 27, $this->source); })())))) {
            // line 28
            echo "    <div>
      <form action=\"\">
        <figure class=\"figure\">
          <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coverImage"]) || array_key_exists("coverImage", $context) ? $context["coverImage"] : (function () { throw new RuntimeError('Variable "coverImage" does not exist.', 31, $this->source); })()), "path", [], "any", false, false, false, 31), "html", null, true);
            echo "\" class=\"figure-img img-fluid img-thumbnail\">
          <figcaption class=\"figure-caption\">
            <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["coverImage"]) || array_key_exists("coverImage", $context) ? $context["coverImage"] : (function () { throw new RuntimeError('Variable "coverImage" does not exist.', 33, $this->source); })()), "size", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
            <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                    data-form-submit-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_delete_cover_image", ["categoryId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "get", [0 => "categoryId"], "method", false, false, false, 35)]), "html", null, true);
            echo "\"
                    data-form-csrf-token=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete-cover-image"), "html", null, true);
            echo "\"
                    type=\"button\"
            >
              <i class=\"material-icons\">
                delete_forever
              </i>
              ";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
            echo "
            </button>
          </figcaption>
        </figure>
      </form>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  90 => 36,  86 => 35,  79 => 33,  74 => 31,  69 => 28,  66 => 27,  47 => 26,  44 => 25,);
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

{% block category_cover_image %}
  {% if coverImage is defined and coverImage is not null %}
    <div>
      <form action=\"\">
        <figure class=\"figure\">
          <img src=\"{{ coverImage.path }}\" class=\"figure-img img-fluid img-thumbnail\">
          <figcaption class=\"figure-caption\">
            <p>{{ 'File size'|trans({}, 'Admin.Advparameters.Feature') }} {{ coverImage.size }}</p>
            <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                    data-form-submit-url=\"{{ path('admin_categories_delete_cover_image', {'categoryId': app.request.get('categoryId')}) }}\"
                    data-form-csrf-token=\"{{ csrf_token('delete-cover-image') }}\"
                    type=\"button\"
            >
              <i class=\"material-icons\">
                delete_forever
              </i>
              {{ 'Delete'|trans({}, 'Admin.Actions') }}
            </button>
          </figcaption>
        </figure>
      </form>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/cover_image.html.twig");
    }
}
