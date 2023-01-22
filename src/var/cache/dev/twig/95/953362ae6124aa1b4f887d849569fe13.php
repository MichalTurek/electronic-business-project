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

/* @PrestaShop/Admin/Module/Includes/card_list.html.twig */
class __TwigTemplate_d4b2fa0d550ec06d74885d2465aa13d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
            'addon_additional_description' => [$this, 'block_addon_additional_description'],
            'module_actions' => [$this, 'block_module_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_list.html.twig"));

        // line 25
        $context["isModuleActive"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 25), "active", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 25), "active", [], "any", false, false, false, 25), "0")) : ("0"));
        // line 26
        echo "
<div
  class=\"module-item module-item-list col-md-12 ";
        // line 28
        if ((((isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 28, $this->source); })()) == "manage") && ((isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 28, $this->source); })()) == "0"))) {
            echo "module-item-list-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 30, $this->source); })()), "attributes", [], "any", false, false, false, 30), "displayName", [], "any", false, false, false, 30), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 31, $this->source); })()), "attributes", [], "any", false, false, false, 31), "avgRate", [], "any", false, false, false, 31), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "img", [], "any", false, false, false, 32), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "attributes", [], "any", false, false, false, 33), "author", [], "any", false, false, false, 33), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 34, $this->source); })()), "attributes", [], "any", false, false, false, 34), "version", [], "any", false, false, false, 34), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 35, $this->source); })()), "attributes", [], "any", false, false, false, 35), "description", [], "any", false, false, false, 35), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 36, $this->source); })()), "attributes", [], "any", false, false, false, 36), "name", [], "any", false, false, false, 36), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 37, $this->source); })()), "attributes", [], "any", false, false, false, 37), "categoryName", [], "any", false, false, false, 37), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 39, $this->source); })()), "attributes", [], "any", false, false, false, 39), "productType", [], "any", false, false, false, 39), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 40, $this->source); })()), "attributes", [], "any", false, false, false, 40), "price", [], "any", false, false, false, 40), "raw", [], "any", false, false, false, 40), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"
  data-installed=\"";
        // line 42
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 42), "installed", [], "any", true, true, false, 42)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 42), "installed", [], "any", false, false, false, 42), "0")) : ("0")), "html", null, true);
        echo "\"
  data-last-access=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 43, $this->source); })()), "database", [], "any", false, false, false, 43), "last_access_date", [], "any", false, false, false, 43), "html", null, true);
        echo "\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 49, $this->source); })()), "attributes", [], "any", false, false, false, 49), "img", [], "any", false, false, false, 49), "html", null, true);
        echo "\" class=\"text-md-center\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 49, $this->source); })()), "attributes", [], "any", false, false, false, 49), "displayName", [], "any", false, false, false, 49), "html", null, true);
        echo "\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"";
        // line 58
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 58, $this->source); })()), "attributes", [], "any", false, false, false, 58), "displayName", [], "any", false, false, false, 58);
        echo "\"
          >
            ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 60, $this->source); })()), "attributes", [], "any", false, false, false, 60), "displayName", [], "any", false, false, false, 60)) {
            // line 61
            echo "              ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 61, $this->source); })()), "attributes", [], "any", false, false, false, 61), "displayName", [], "any", false, false, false, 61);
            echo "

            ";
        } else {
            // line 64
            echo "              ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 64, $this->source); })()), "attributes", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
            echo "
            ";
        }
        // line 66
        echo "          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            ";
        // line 70
        $this->displayBlock('addon_version', $context, $blocks);
        // line 77
        echo "          </div>
          <div>
            ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 79), "urls", [], "any", false, true, false, 79), "upgrade", [], "any", true, true, false, 79)) {
            // line 80
            echo "                <span class=\"badge badge-success my-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade available", [], "Admin.Modules.Feature"), "html", null, true);
            echo "</span>
            ";
        }
        // line 82
        echo "          </div>
        </div>
        <div class=\"col-md-8 col-lg-7\">
          ";
        // line 85
        $this->displayBlock('addon_description', $context, $blocks);
        // line 91
        echo "          ";
        $this->displayBlock('addon_additional_description', $context, $blocks);
        // line 96
        echo "        </div>
        <div class=\"col-lg-3 text-md-right\">
          ";
        // line 98
        $this->displayBlock('module_actions', $context, $blocks);
        // line 109
        echo "        </div>
        ";
        // line 110
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", 110)->display(twig_array_merge($context, ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 110, $this->source); })())]));
        // line 111
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_addon_version($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        // line 71
        echo "              ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 71, $this->source); })()), "attributes", [], "any", false, false, false, 71), "productType", [], "any", false, false, false, 71) == "service")) {
            // line 72
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 72, $this->source); })()), "attributes", [], "any", false, false, false, 72), "author", [], "any", false, false, false, 72)) . "</b>")], "Admin.Modules.Feature");
            echo "
              ";
        } else {
            // line 74
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "version", [], "any", false, false, false, 74), "%author%" => (("<b>" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 74, $this->source); })()), "attributes", [], "any", false, false, false, 74), "author", [], "any", false, false, false, 74)) . "</b>")], "Admin.Modules.Feature");
            echo "
              ";
        }
        // line 76
        echo "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 85
    public function block_addon_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        // line 86
        echo "            ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 86, $this->source); })()), "attributes", [], "any", false, false, false, 86), "description", [], "any", false, false, false, 86);
        echo "
            ";
        // line 87
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "attributes", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87)) > 0) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "attributes", [], "any", false, false, false, 87), "description", [], "any", false, false, false, 87)) < twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })()), "attributes", [], "any", false, false, false, 87), "fullDescription", [], "any", false, false, false, 87))))) {
            // line 88
            echo "              ...
            ";
        }
        // line 90
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 91
    public function block_addon_additional_description($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_additional_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_additional_description"));

        // line 92
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 92), "additional_description", [], "any", true, true, false, 92)) {
            // line 93
            echo "              ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 93, $this->source); })()), "attributes", [], "any", false, false, false, 93), "additional_description", [], "any", false, false, false, 93);
            echo "
            ";
        }
        // line 95
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 98
    public function block_module_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_actions"));

        // line 99
        echo "            ";
        if ((array_key_exists("requireBulkActions", $context) && ((isset($context["requireBulkActions"]) || array_key_exists("requireBulkActions", $context) ? $context["requireBulkActions"] : (function () { throw new RuntimeError('Variable "requireBulkActions" does not exist.', 99, $this->source); })()) == true))) {
            // line 100
            echo "              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 102, $this->source); })()), "attributes", [], "any", false, false, false, 102), "displayName", [], "any", false, false, false, 102), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 102, $this->source); })()), "attributes", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102), "html", null, true);
            echo "\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
        }
        // line 107
        echo "            ";
        $this->loadTemplate("@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", 107)->display(twig_array_merge($context, ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 107, $this->source); })())]));
        // line 108
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Module/Includes/card_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 108,  335 => 107,  325 => 102,  321 => 100,  318 => 99,  308 => 98,  298 => 95,  292 => 93,  289 => 92,  279 => 91,  269 => 90,  265 => 88,  263 => 87,  258 => 86,  248 => 85,  238 => 76,  232 => 74,  226 => 72,  223 => 71,  213 => 70,  199 => 111,  197 => 110,  194 => 109,  192 => 98,  188 => 96,  185 => 91,  183 => 85,  178 => 82,  172 => 80,  170 => 79,  166 => 77,  164 => 70,  158 => 66,  152 => 64,  145 => 61,  143 => 60,  138 => 58,  124 => 49,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  95 => 38,  91 => 37,  87 => 36,  83 => 35,  79 => 34,  75 => 33,  71 => 32,  67 => 31,  63 => 30,  59 => 29,  53 => 28,  49 => 26,  47 => 25,);
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
{% set isModuleActive = module.database.active|default('0') %}

<div
  class=\"module-item module-item-list col-md-12 {% if origin == 'manage' and isModuleActive == '0' %}module-item-list-isNotActive{% endif %}\"
  data-id=\"{{ module.attributes.id }}\"
  data-name=\"{{ module.attributes.displayName }}\"
  data-scoring=\"{{ module.attributes.avgRate }}\"
  data-logo=\"{{ module.attributes.img }}\"
  data-author=\"{{ module.attributes.author }}\"
  data-version=\"{{ module.attributes.version }}\"
  data-description=\"{{ module.attributes.description }}\"
  data-tech-name=\"{{ module.attributes.name }}\"
  data-child-categories=\"{{ module.attributes.categoryName }}\"
  data-categories=\"{{ category }}\"
  data-type=\"{{ module.attributes.productType }}\"
  data-price=\"{{ module.attributes.price.raw }}\"
  data-active=\"{{ isModuleActive }}\"
  data-installed=\"{{ module.database.installed|default('0') }}\"
  data-last-access=\"{{ module.database.last_access_date }}\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"{{ module.attributes.img }}\" class=\"text-md-center\" alt=\"{{ module.attributes.displayName }}\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"{{ module.attributes.displayName|raw }}\"
          >
            {% if module.attributes.displayName %}
              {{ module.attributes.displayName|raw }}

            {% else %}
              {{ module.attributes.name }}
            {% endif %}
          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            {% block addon_version %}
              {% if module.attributes.productType == \"service\" %}
                {{ 'Service by %author%'|trans({'%author%' : '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
              {% else %}
                {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : '<b>' ~ module.attributes.author ~ '</b>' }, 'Admin.Modules.Feature')|raw }}
              {% endif %}
            {% endblock %}
          </div>
          <div>
            {% if module.attributes.urls.upgrade is defined %}
                <span class=\"badge badge-success my-1\">{{ 'Upgrade available'|trans({}, 'Admin.Modules.Feature') }}</span>
            {% endif %}
          </div>
        </div>
        <div class=\"col-md-8 col-lg-7\">
          {% block addon_description %}
            {{ module.attributes.description|raw }}
            {% if module.attributes.description|length > 0 and module.attributes.description|length < module.attributes.fullDescription|length %}
              ...
            {% endif %}
          {% endblock %}
          {% block addon_additional_description %}
            {% if module.attributes.additional_description is defined %}
              {{ module.attributes.additional_description|raw }}
            {% endif %}
          {% endblock %}
        </div>
        <div class=\"col-lg-3 text-md-right\">
          {% block module_actions %}
            {% if requireBulkActions is defined and requireBulkActions == true %}
              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"{{ module.attributes.displayName }}\" data-tech-name=\"{{module.attributes.name}}\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            {% endif %}
            {% include '@PrestaShop/Admin/Module/Includes/action_menu.html.twig' with { 'module': module } %}
          {% endblock %}
        </div>
        {% include '@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig' with { 'module': module } %}
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_list.html.twig");
    }
}
