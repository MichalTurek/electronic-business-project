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

/* @PrestaShop/Admin/ProductImage/form.html.twig */
class __TwigTemplate_5515dbcd2953f7255e104ebaf68730db extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/ProductImage/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/ProductImage/form.html.twig"));

        // line 25
        echo "<button type=\"button\" class=\"float-right close\" onclick=\"formImagesProduct.close()\"><i class=\"material-icons\">close</i></button>

<div class=\"row\">
    <div class=\"col-xl-7\">
      ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "cover", [], "any", false, false, false, 29), 'widget');
        echo "
    </div>
    <div class=\"col-xl-4\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 32, $this->source); })()), "base_image_url", [], "any", false, false, false, 32), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 32, $this->source); })()), "format", [], "any", false, false, false, 32), "html", null, true);
        echo "\" class=\"btn btn-link btn-sm open-image\" target=\"_blank\">
          <i class=\"material-icons\">zoom_in</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Zoom", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
        </a>
    </div>
</div>

<label class=\"control-label\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "legend", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "label", [], "any", false, false, false, 38), "html", null, true);
        echo "</label>
";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "legend", [], "any", false, false, false, 39), 'widget');
        echo "
";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "legend", [], "any", false, false, false, 40), 'errors');
        echo "

<div class=\"actions\">
    <button type=\"button\" class=\"btn btn-sm btn-primary pull-sm-right\" onclick=\"formImagesProduct.send(";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43), "html", null, true);
        echo ")\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save image settings", [], "Admin.Actions"), "html", null, true);
        echo "</button>
    <button type=\"button\" class=\"btn btn-sm btn-link\" onclick=\"formImagesProduct.delete(";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["image"]) || array_key_exists("image", $context) ? $context["image"] : (function () { throw new RuntimeError('Variable "image" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "html", null, true);
        echo ")\"><i class=\"material-icons\">delete</i> ";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        echo "</button>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/ProductImage/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 44,  83 => 43,  77 => 40,  73 => 39,  69 => 38,  61 => 33,  55 => 32,  49 => 29,  43 => 25,);
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
<button type=\"button\" class=\"float-right close\" onclick=\"formImagesProduct.close()\"><i class=\"material-icons\">close</i></button>

<div class=\"row\">
    <div class=\"col-xl-7\">
      {{ form_widget(form.cover) }}
    </div>
    <div class=\"col-xl-4\">
        <a href=\"{{ image.base_image_url }}.{{ image.format }}\" class=\"btn btn-link btn-sm open-image\" target=\"_blank\">
          <i class=\"material-icons\">zoom_in</i> {{ 'Zoom'|trans({}, 'Admin.Catalog.Feature') }}
        </a>
    </div>
</div>

<label class=\"control-label\">{{ form.legend.vars.label }}</label>
{{ form_widget(form.legend) }}
{{ form_errors(form.legend) }}

<div class=\"actions\">
    <button type=\"button\" class=\"btn btn-sm btn-primary pull-sm-right\" onclick=\"formImagesProduct.send({{ image.id }})\">{{ 'Save image settings'|trans({}, 'Admin.Actions') }}</button>
    <button type=\"button\" class=\"btn btn-sm btn-link\" onclick=\"formImagesProduct.delete({{ image.id }})\"><i class=\"material-icons\">delete</i> {{ 'Delete'|trans({}, 'Admin.Actions') }}</button>
</div>
", "@PrestaShop/Admin/ProductImage/form.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/ProductImage/form.html.twig");
    }
}
