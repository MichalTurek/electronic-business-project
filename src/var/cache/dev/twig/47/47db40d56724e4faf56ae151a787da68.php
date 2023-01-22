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

/* @Product/ProductPage/Forms/form_specific_price.html.twig */
class __TwigTemplate_3223d46c9da5dc6f14bd90e8836331e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Product/ProductPage/Forms/form_specific_price.html.twig"));

        // line 25
        if ( !array_key_exists("is_modal", $context)) {
            // line 26
            echo "  ";
            $context["is_modal"] = false;
        }
        // line 28
        echo "
";
        // line 29
        if (((isset($context["is_modal"]) || array_key_exists("is_modal", $context) ? $context["is_modal"] : (function () { throw new RuntimeError('Variable "is_modal" does not exist.', 29, $this->source); })()) == false)) {
            // line 30
            echo "  ";
            $context["column_default_md_3"] = "col-md-3";
            // line 31
            echo "  ";
            $context["column_default_md_2"] = "col-md-2";
            // line 32
            echo "  ";
            $context["column_default_xl_3"] = "col-xl-3";
        } else {
            // line 34
            echo "  ";
            $context["column_default_md_3"] = "col-md-9";
            // line 35
            echo "  ";
            $context["column_default_md_2"] = "col-md-4";
            // line 36
            echo "  ";
            $context["column_default_xl_3"] = "col-xl-4";
        }
        // line 38
        echo "
<div class=\"card card-body\">
  <h4><b>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price conditions", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'errors');
        echo "

  ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "sp_id_shop", [], "any", false, true, false, 43), "vars", [], "any", false, true, false, 43), "choices", [], "any", true, true, false, 43)) {
            // line 44
            echo "  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Shop", [], "Admin.Global"), "html", null, true);
            echo "</label>
        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "sp_id_shop", [], "any", false, false, false, 48), 'errors');
            echo "
        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "sp_id_shop", [], "any", false, false, false, 49), 'widget');
            echo "
      </fieldset>
    </div>
  </div>
  ";
        } else {
            // line 54
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "sp_id_shop", [], "any", false, false, false, 54), 'widget');
            echo "
  ";
        }
        // line 56
        echo "
  <div class=\"row\">
    <div class=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For", [], "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "sp_id_currency", [], "any", false, false, false, 61), 'errors');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "sp_id_currency", [], "any", false, false, false, 62), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "sp_id_country", [], "any", false, false, false, 68), 'errors');
        echo "
        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "sp_id_country", [], "any", false, false, false, 69), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "sp_id_group", [], "any", false, false, false, 75), 'errors');
        echo "
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "sp_id_group", [], "any", false, false, false, 76), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        echo "</label>
        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "sp_id_customer", [], "any", false, false, false, 82), 'errors');
        echo "
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "sp_id_customer", [], "any", false, false, false, 83), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 ";
        // line 88
        echo (((isset($context["has_combinations"]) || array_key_exists("has_combinations", $context) ? $context["has_combinations"] : (function () { throw new RuntimeError('Variable "has_combinations" does not exist.', 88, $this->source); })())) ? ("") : ("hide"));
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "sp_id_product_attribute", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "label", [], "any", false, false, false, 90), "html", null, true);
        echo "</label>
        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "sp_id_product_attribute", [], "any", false, false, false, 91), 'errors');
        echo "
        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "sp_id_product_attribute", [], "any", false, false, false, 92), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 96, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "sp_from", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "label", [], "any", false, false, false, 98), "html", null, true);
        echo "</label>
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "sp_from", [], "any", false, false, false, 99), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "sp_from", [], "any", false, false, false, 100), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("to", [], "Admin.Global");
        echo "</label>
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "sp_to", [], "any", false, false, false, 106), 'errors');
        echo "
        ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "sp_to", [], "any", false, false, false, 107), 'widget');
        echo "
      </fieldset>
    </div>
  ";
        // line 110
        if (((isset($context["is_modal"]) || array_key_exists("is_modal", $context) ? $context["is_modal"] : (function () { throw new RuntimeError('Variable "is_modal" does not exist.', 110, $this->source); })()) == true)) {
            // line 111
            echo "  </div>
  <div class=\"row\">
  ";
        }
        // line 114
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["column_default_md_2"]) || array_key_exists("column_default_md_2", $context) ? $context["column_default_md_2"] : (function () { throw new RuntimeError('Variable "column_default_md_2" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 116
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "sp_from_quantity", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "label", [], "any", false, false, false, 116), "html", null, true);
        echo "</label>
        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "sp_from_quantity", [], "any", false, false, false, 117), 'errors');
        echo "
        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "sp_from_quantity", [], "any", false, false, false, 118), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Impact on price", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</b></h4>
  <div class=\"row\">
    <div class=\"";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 126, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>";
        // line 128
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "sp_price", [], "any", false, false, false, 128), "vars", [], "any", false, false, false, 128), "label", [], "any", false, false, false, 128), "html", null, true);
        echo "</label>
        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "sp_price", [], "any", false, false, false, 129), 'errors');
        echo "
        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "sp_price", [], "any", false, false, false, 130), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["column_default_md_3"]) || array_key_exists("column_default_md_3", $context) ? $context["column_default_md_3"] : (function () { throw new RuntimeError('Variable "column_default_md_3" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "leave_bprice", [], "any", false, false, false, 136), 'errors');
        echo "
        ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "leave_bprice", [], "any", false, false, false, 137), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["column_default_xl_3"]) || array_key_exists("column_default_xl_3", $context) ? $context["column_default_xl_3"] : (function () { throw new RuntimeError('Variable "column_default_xl_3" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " col-lg-4\">
      <fieldset class=\"form-group\">
        <label>";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Apply a discount of", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</label>
        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "sp_reduction", [], "any", false, false, false, 145), 'errors');
        echo "
        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "sp_reduction", [], "any", false, false, false, 146), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 149
        echo twig_escape_filter($this->env, (isset($context["column_default_xl_3"]) || array_key_exists("column_default_xl_3", $context) ? $context["column_default_xl_3"] : (function () { throw new RuntimeError('Variable "column_default_xl_3" does not exist.', 149, $this->source); })()), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "sp_reduction_type", [], "any", false, false, false, 152), 'errors');
        echo "
        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), "sp_reduction_type", [], "any", false, false, false, 153), 'widget');
        echo "
      </fieldset>
    </div>
    <div class=\"";
        // line 156
        echo twig_escape_filter($this->env, (isset($context["column_default_xl_3"]) || array_key_exists("column_default_xl_3", $context) ? $context["column_default_xl_3"] : (function () { throw new RuntimeError('Variable "column_default_xl_3" does not exist.', 156, $this->source); })()), "html", null, true);
        echo " col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 159, $this->source); })()), "sp_reduction_tax", [], "any", false, false, false, 159), 'errors');
        echo "
        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), "sp_reduction_tax", [], "any", false, false, false, 160), 'widget');
        echo "
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "cancel", [], "any", false, false, false, 165), 'widget');
        echo "
    ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 166, $this->source); })()), "save", [], "any", false, false, false, 166), 'widget');
        echo "
  </div>
  <div class=\"clearfix\"></div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Product/ProductPage/Forms/form_specific_price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 166,  372 => 165,  364 => 160,  360 => 159,  354 => 156,  348 => 153,  344 => 152,  338 => 149,  332 => 146,  328 => 145,  324 => 144,  319 => 142,  311 => 137,  307 => 136,  301 => 133,  295 => 130,  291 => 129,  287 => 128,  282 => 126,  277 => 124,  268 => 118,  264 => 117,  260 => 116,  254 => 114,  249 => 111,  247 => 110,  241 => 107,  237 => 106,  233 => 105,  228 => 103,  222 => 100,  218 => 99,  214 => 98,  209 => 96,  202 => 92,  198 => 91,  194 => 90,  189 => 88,  181 => 83,  177 => 82,  173 => 81,  165 => 76,  161 => 75,  155 => 72,  149 => 69,  145 => 68,  139 => 65,  133 => 62,  129 => 61,  125 => 60,  120 => 58,  116 => 56,  110 => 54,  102 => 49,  98 => 48,  94 => 47,  89 => 44,  87 => 43,  82 => 41,  78 => 40,  74 => 38,  70 => 36,  67 => 35,  64 => 34,  60 => 32,  57 => 31,  54 => 30,  52 => 29,  49 => 28,  45 => 26,  43 => 25,);
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
{% if is_modal is not defined %}
  {% set is_modal = false %}
{% endif %}

{% if is_modal == false %}
  {% set column_default_md_3 = 'col-md-3' %}
  {% set column_default_md_2 = 'col-md-2' %}
  {% set column_default_xl_3 = 'col-xl-3' %}
{% else %}
  {% set column_default_md_3 = 'col-md-9' %}
  {% set column_default_md_2 = 'col-md-4' %}
  {% set column_default_xl_3 = 'col-xl-4' %}
{% endif %}

<div class=\"card card-body\">
  <h4><b>{{ 'Specific price conditions'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  {{ form_errors(form) }}

  {% if form.sp_id_shop.vars.choices is defined %}
  <div class=\"row\">
    <div class=\"col-md-4\">
      <fieldset class=\"form-group\">
        <label>{{ 'Shop'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_shop) }}
        {{ form_widget(form.sp_id_shop) }}
      </fieldset>
    </div>
  </div>
  {% else %}
      {{ form_widget(form.sp_id_shop) }}
  {% endif %}

  <div class=\"row\">
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ 'For'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_currency) }}
        {{ form_widget(form.sp_id_currency) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_country) }}
        {{ form_widget(form.sp_id_country) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_id_group) }}
        {{ form_widget(form.sp_id_group) }}
      </fieldset>
    </div>
    <div class=\"col-md-6\">
      <fieldset class=\"form-group\">
        <label>{{ 'Customer'|trans({}, 'Admin.Global') }}</label>
        {{ form_errors(form.sp_id_customer) }}
        {{ form_widget(form.sp_id_customer) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div id=\"specific-price-combination-selector\" class=\"col-md-6 {{ has_combinations ? '' : 'hide' }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_id_product_attribute.vars.label }}</label>
        {{ form_errors(form.sp_id_product_attribute) }}
        {{ form_widget(form.sp_id_product_attribute) }}
      </fieldset>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from.vars.label }}</label>
        {{ form_errors(form.sp_from) }}
        {{ form_widget(form.sp_from) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ 'to'|trans({}, 'Admin.Global')|raw }}</label>
        {{ form_errors(form.sp_to) }}
        {{ form_widget(form.sp_to) }}
      </fieldset>
    </div>
  {% if is_modal == true %}
  </div>
  <div class=\"row\">
  {% endif %}
    <div class=\"{{ column_default_md_2 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_from_quantity.vars.label }}</label>
        {{ form_errors(form.sp_from_quantity) }}
        {{ form_widget(form.sp_from_quantity) }}
      </fieldset>
    </div>
  </div>
  <br>

  <h4><b>{{ 'Impact on price'|trans({}, 'Admin.Catalog.Feature') }}</b></h4>
  <div class=\"row\">
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>{{ form.sp_price.vars.label }}</label>
        {{ form_errors(form.sp_price) }}
        {{ form_widget(form.sp_price) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_md_3 }}\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.leave_bprice) }}
        {{ form_widget(form.leave_bprice) }}
      </fieldset>
    </div>
  </div>
  <div class=\"row\">
    <div class=\"{{ column_default_xl_3 }} col-lg-4\">
      <fieldset class=\"form-group\">
        <label>{{ 'Apply a discount of'|trans({}, 'Admin.Catalog.Feature') }}</label>
        {{ form_errors(form.sp_reduction) }}
        {{ form_widget(form.sp_reduction) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_xl_3 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_type) }}
        {{ form_widget(form.sp_reduction_type) }}
      </fieldset>
    </div>
    <div class=\"{{ column_default_xl_3 }} col-lg-3\">
      <fieldset class=\"form-group\">
        <label>&nbsp;</label>
        {{ form_errors(form.sp_reduction_tax) }}
        {{ form_widget(form.sp_reduction_tax) }}
      </fieldset>
    </div>
  </div>
  <div class=\"col-md-12 text-sm-right\">
    {{ form_widget(form.cancel) }}
    {{ form_widget(form.save) }}
  </div>
  <div class=\"clearfix\"></div>
</div>
", "@Product/ProductPage/Forms/form_specific_price.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/Product/ProductPage/Forms/form_specific_price.html.twig");
    }
}
