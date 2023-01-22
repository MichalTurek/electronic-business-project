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

/* @PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig */
class __TwigTemplate_f3cc45fadbc56733008485ee618d9082 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig"));

        // line 25
        echo "
";
        // line 26
        if ( !(isset($context["isShowcaseCardClosed"]) || array_key_exists("isShowcaseCardClosed", $context) ? $context["isShowcaseCardClosed"] : (function () { throw new RuntimeError('Variable "isShowcaseCardClosed" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "  <div id=\"categoriesShowcaseCard\" class=\"helper-card card\">
    <div class=\"helper-card__left helper-card__category shape-one\">
      <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/helper-card/category@3x.png"), "html", null, true);
            echo "\" class=\"img-fluid img-rtl\">
    </div>
    <div class=\"helper-card__right\">
      <h2>";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Set categories", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</h2>
      <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Categories are essential, as they enable you to group equivalent products. This helps customers find their way through the variety of your catalog.", [], "Admin.Catalog.Feature"), "html", null, true);
            echo "</p>
      <a class=\"btn btn-outline-secondary\"
         href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getFunction('documentation_link')->getCallable()("category"), "html", null, true);
            echo "\"
         target=\"_blank\"
      >
        ";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Learn more", [], "Admin.Actions"), "html", null, true);
            echo "
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["showcaseCardName"]) || array_key_exists("showcaseCardName", $context) ? $context["showcaseCardName"] : (function () { throw new RuntimeError('Variable "showcaseCardName" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\"
       data-close-url=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_close_showcase_card");
            echo "\"
    >
      close
    </i>
  </div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 43,  80 => 42,  73 => 38,  67 => 35,  62 => 33,  58 => 32,  52 => 29,  48 => 27,  46 => 26,  43 => 25,);
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

{% if not isShowcaseCardClosed %}
  <div id=\"categoriesShowcaseCard\" class=\"helper-card card\">
    <div class=\"helper-card__left helper-card__category shape-one\">
      <img src=\"{{ asset('themes/new-theme/public/helper-card/category@3x.png') }}\" class=\"img-fluid img-rtl\">
    </div>
    <div class=\"helper-card__right\">
      <h2>{{ 'Set categories'|trans({}, 'Admin.Catalog.Feature') }}</h2>
      <p>{{ 'Categories are essential, as they enable you to group equivalent products. This helps customers find their way through the variety of your catalog.'|trans({}, 'Admin.Catalog.Feature') }}</p>
      <a class=\"btn btn-outline-secondary\"
         href=\"{{ documentation_link('category') }}\"
         target=\"_blank\"
      >
        {{ 'Learn more'|trans({}, 'Admin.Actions') }}
      </a>
    </div>
    <i class=\"showcase-card__close material-icons js-remove-helper-block\"
       data-card-name=\"{{ showcaseCardName }}\"
       data-close-url=\"{{ path('admin_close_showcase_card') }}\"
    >
      close
    </i>
  </div>
{% endif %}
", "@PrestaShop/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Sell/Catalog/Categories/Blocks/showcase_card.html.twig");
    }
}
