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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig */
class __TwigTemplate_b25390110cb2aa78fd218ea749f49602 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 37
        $_trait_0 = $this->loadTemplate("bootstrap_4_horizontal_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 37);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_horizontal_layout.html.twig".'" cannot be used as a trait.', 37, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        // line 38
        $_trait_1 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 38);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 38, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_row' => [$this, 'block_form_row'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_row_class' => [$this, 'block_form_row_class'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig"));

        // line 25
        echo "
";
        // line 36
        echo "
";
        // line 39
        echo "
";
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('form_start', $context, $blocks);
        // line 46
        echo "
";
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('form_label', $context, $blocks);
        // line 61
        echo "
";
        // line 62
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 65
        echo "
";
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_row', $context, $blocks);
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('form_row_class', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 42
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 43
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 43, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 43)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 43), "")) : ("")) . " form-horizontal"))]);
        // line 44
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 50
        ob_start();
        // line 51
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 51, $this->source); })()) === null)) {
            // line 52
            echo "      <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } elseif ((        // line 53
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 53, $this->source); })()) === false)) {
            // line 54
            echo "      ";
            // line 55
            echo "    ";
        } else {
            // line 56
            echo "      ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 56, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 56)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 56), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))]);
            // line 57
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        // line 59
        echo "  ";
        $___internal_parse_0_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo twig_spaceless($___internal_parse_0_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_form_label_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 63
        echo "form-control-label";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 63), "attr", [], "any", false, true, false, 63), "disabled", [], "any", true, true, false, 63) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "attr", [], "any", false, false, false, 63), "disabled", [], "any", false, false, false, 63))) {
            echo " disabled";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 68
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 69
        ob_start();
        // line 70
        echo "    ";
        // line 71
        echo "    ";
        if (array_key_exists("label_tag_name", $context)) {
            // line 72
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'label');
            echo "
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $macros["ps"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", 75)->unwrap();
        // line 76
        echo "    ";
        $context["disabledField"] = false;
        // line 77
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 77), "attr", [], "any", false, true, false, 77), "disabled", [], "any", true, true, false, 77) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "vars", [], "any", false, false, false, 77), "attr", [], "any", false, false, false, 77), "disabled", [], "any", false, false, false, 77))) {
            // line 78
            echo "      ";
            $context["disabledField"] = true;
            // line 79
            echo "    ";
        }
        // line 80
        echo "
    <div class=\"";
        // line 81
        $this->displayBlock("form_row_class", $context, $blocks);
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 81, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 81, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 81, $this->source); })()))) {
            echo " has-error";
        }
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "visible", [], "any", true, true, false, 81) &&  !twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 81, $this->source); })()), "visible", [], "any", false, false, false, 81))) {
            echo " d-none";
        }
        echo "\">
      ";
        // line 82
        $context["multistoreCheckboxName"] = ((isset($context["multistore_field_prefix"]) || array_key_exists("multistore_field_prefix", $context) ? $context["multistore_field_prefix"] : (function () { throw new RuntimeError('Variable "multistore_field_prefix" does not exist.', 82, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "vars", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82));
        // line 83
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 83), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 83, $this->source); })()), [], "any", true, true, false, 83)) {
            // line 84
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "parent", [], "any", false, false, false, 84), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 84, $this->source); })()), [], "any", false, false, false, 84), 'errors');
            echo "
        ";
            // line 85
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "parent", [], "any", false, false, false, 85), (isset($context["multistoreCheckboxName"]) || array_key_exists("multistoreCheckboxName", $context) ? $context["multistoreCheckboxName"] : (function () { throw new RuntimeError('Variable "multistoreCheckboxName" does not exist.', 85, $this->source); })()), [], "any", false, false, false, 85), 'widget');
            echo "
      ";
        }
        // line 87
        echo "
      ";
        // line 88
        if ( !array_key_exists("label_tag_name", $context)) {
            // line 89
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'label');
            echo "
      ";
        }
        // line 91
        echo "      <div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        if ((isset($context["disabledField"]) || array_key_exists("disabledField", $context) ? $context["disabledField"] : (function () { throw new RuntimeError('Variable "disabledField" does not exist.', 91, $this->source); })())) {
            echo " disabled";
        }
        echo "\">
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), 'widget');
        echo "
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'errors', ["attr" => ["fieldError" => true]]);
        echo "
      </div>
      ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 95), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), [], "any", true, true, false, 95) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "parent", [], "any", false, false, false, 95), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "vars", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95), [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "multistore_dropdown", [], "any", false, false, false, 95) != false))) {
            // line 96
            echo "        ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "parent", [], "any", false, false, false, 96), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "vars", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96), [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "multistore_dropdown", [], "any", false, false, false, 96);
            echo "
      ";
        }
        // line 99
        $this->displayBlock("form_external_link", $context, $blocks);
        // line 100
        $this->displayBlock("form_alert", $context, $blocks);
        // line 101
        echo "</div>
  ";
        $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 69
        echo twig_spaceless($___internal_parse_1_);
        // line 103
        echo "
  ";
        // line 104
        if ((isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 104, $this->source); })())) {
            // line 105
            echo "    <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 109
    public function block_form_group_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 110
        echo "col-sm input-container";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_form_row_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row_class"));

        // line 114
        echo "form-group row";
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 114)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 114, $this->source); })()), "class", [], "any", false, false, false, 114), "html", null, true);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  377 => 114,  367 => 113,  357 => 110,  347 => 109,  335 => 105,  333 => 104,  330 => 103,  328 => 69,  324 => 101,  322 => 100,  320 => 99,  314 => 96,  312 => 95,  307 => 93,  303 => 92,  295 => 91,  289 => 89,  287 => 88,  284 => 87,  279 => 85,  274 => 84,  271 => 83,  269 => 82,  258 => 81,  255 => 80,  252 => 79,  249 => 78,  246 => 77,  243 => 76,  241 => 75,  238 => 74,  232 => 72,  229 => 71,  227 => 70,  225 => 69,  215 => 68,  202 => 63,  192 => 62,  182 => 50,  179 => 59,  176 => 57,  173 => 56,  170 => 55,  168 => 54,  166 => 53,  161 => 52,  158 => 51,  156 => 50,  146 => 49,  136 => 44,  134 => 43,  124 => 42,  114 => 113,  111 => 112,  109 => 109,  106 => 108,  104 => 68,  101 => 67,  98 => 65,  96 => 62,  93 => 61,  91 => 49,  88 => 48,  85 => 46,  83 => 42,  80 => 41,  77 => 39,  74 => 36,  71 => 25,  37 => 38,  30 => 37,);
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

{#
# This form theme is an implementation of PrestaShop UI kit, it based on the bootstrap4 layout and overrides a few
# blocks to match our expected integration of the UI kit.
#
# This theme uses/extends the basic bootstrap_4_horizontal_layout meaning the form labels/inputs are displayed
# are displayed horizontally in a column way.
#
# Unlike our prestashop_ui_kit_base.html.twig theme which is the parent of this theme and is based on bootstrap_4_layout
# where labels/inputs are displayed one under the other.
#}

{% use 'bootstrap_4_horizontal_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig' %}

{# overrides from bootstrap_4_horizontal_layout #}

{% block form_start -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
  {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
  {% apply spaceless %}
    {% if label is same as(null) %}
      <div class=\"{{ block('form_label_class') }}\"></div>
    {% elseif label is same as(false) %}
      {# Use false as label is you don't want an empty column #}
    {% else %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
      {{- parent() -}}
    {% endif %}
  {% endapply %}
{%- endblock form_label %}

{% block form_label_class -%}
  form-control-label{% if form.vars.attr.disabled is defined and form.vars.attr.disabled %} disabled{% endif %}
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
  {% apply spaceless %}
    {# In horizontal theme when using a title for label it needs to be outside of the row div #}
    {% if label_tag_name is defined %}
      {{ form_label(form) }}
    {% endif %}

    {% import '@PrestaShop/Admin/macros.html.twig' as ps %}
    {% set disabledField = false %}
    {% if form.vars.attr.disabled is defined and form.vars.attr.disabled %}
      {% set disabledField = true %}
    {% endif %}

    <div class=\"{{ block('form_row_class') }}{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if (attr.visible is defined and not attr.visible) %} d-none{% endif %}\">
      {% set multistoreCheckboxName = multistore_field_prefix ~ form.vars.name %}
      {% if attribute(form.parent, multistoreCheckboxName) is defined %}
        {{ form_errors(attribute(form.parent, multistoreCheckboxName)) }}
        {{ form_widget(attribute(form.parent, multistoreCheckboxName)) }}
      {% endif %}

      {% if label_tag_name is not defined %}
        {{ form_label(form) }}
      {% endif %}
      <div class=\"{{ block('form_group_class') }}{% if disabledField %} disabled{% endif %}\">
        {{ form_widget(form) }}
        {{ form_errors(form, {'attr': {'fieldError': true}}) }}
      </div>
      {% if attribute(form.parent, form.vars.name) is defined and attribute(form.parent, form.vars.name).vars.multistore_dropdown != false %}
        {{ attribute(form.parent, form.vars.name).vars.multistore_dropdown | raw }}
      {% endif %}

      {{- block('form_external_link') -}}
      {{- block('form_alert') -}}
    </div>
  {% endapply %}

  {% if column_breaker %}
    <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{% block form_group_class -%}
  col-sm input-container
{%- endblock form_group_class %}

{% block form_row_class -%}
  form-group row{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}
{%- endblock form_row_class %}
", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit.html.twig");
    }
}
