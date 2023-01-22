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

/* @Common/HelpBox/helpbox.html.twig */
class __TwigTemplate_5d8e2df9dcb678d97e05b4f27364fc89 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Common/HelpBox/helpbox.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Common/HelpBox/helpbox.html.twig"));

        // line 25
        echo "
 <span
   class=\"help-box";
        // line 27
        if (array_key_exists("classes", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 27, $this->source); })()), "html", null, true);
        }
        echo "\"
   data-toggle=\"popover\"
   data-trigger=\"hover\"
   data-html=\"true\"
   ";
        // line 31
        if (array_key_exists("content", $context)) {
            // line 32
            echo "     data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\"
   ";
        }
        // line 34
        echo "
   ";
        // line 35
        if (array_key_exists("placement", $context)) {
            // line 36
            echo "     data-placement=\"";
            echo twig_escape_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 36, $this->source); })()), "html", null, true);
            echo "\"
   ";
        }
        // line 38
        echo "
   ";
        // line 39
        if (array_key_exists("title", $context)) {
            // line 40
            echo "     data-title=\"";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 40, $this->source); })()), "html", null, true);
            echo "\"
   ";
        }
        // line 42
        echo " >
 </span>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Common/HelpBox/helpbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 42,  81 => 40,  79 => 39,  76 => 38,  70 => 36,  68 => 35,  65 => 34,  59 => 32,  57 => 31,  47 => 27,  43 => 25,);
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

 <span
   class=\"help-box{% if classes is defined %} {{ classes }}{% endif %}\"
   data-toggle=\"popover\"
   data-trigger=\"hover\"
   data-html=\"true\"
   {% if content is defined %}
     data-content=\"{{ content }}\"
   {% endif %}

   {% if placement is defined %}
     data-placement=\"{{ placement}}\"
   {% endif %}

   {% if title is defined %}
     data-title=\"{{ title }}\"
   {% endif %}
 >
 </span>
", "@Common/HelpBox/helpbox.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Common/HelpBox/helpbox.html.twig");
    }
}
