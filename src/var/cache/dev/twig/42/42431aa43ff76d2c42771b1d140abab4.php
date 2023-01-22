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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_572e50dffb353c61801f7bc0ae722aeb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('material_choice_tree_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('material_choice_tree_item_radio_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_material_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_widget"));

        // line 27
        echo "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 27, $this->source); })())) {
            echo " required";
        }
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "\">
  <div class=\"choice-tree-actions\">
    <span class=\"form-control-label js-toggle-choice-tree-action\"
          data-expanded-text=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-expanded-icon=\"expand_more\"
          data-collapsed-text=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        echo "\"
          data-collapsed-icon=\"expand_less\"
          data-action=\"expand\"
    >
      <i class=\"material-icons\">expand_more</i>
      <span class=\"js-toggle-text\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        echo "</span>
    </span>
  </div>

  <ul class=\"choice-tree\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices_tree"]) || array_key_exists("choices_tree", $context) ? $context["choices_tree"] : (function () { throw new RuntimeError('Variable "choices_tree" does not exist.', 42, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 43
            echo "      ";
            $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
            echo "
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "  </ul>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 49
    public function block_material_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_widget"));

        // line 50
        echo "  ";
        $context["has_children"] = twig_get_attribute($this->env, $this->source, ($context["choice"] ?? null), (isset($context["choice_children"]) || array_key_exists("choice_children", $context) ? $context["choice_children"] : (function () { throw new RuntimeError('Variable "choice_children" does not exist.', 50, $this->source); })()), [], "array", true, true, false, 50);
        // line 51
        echo "
  <li class=\"";
        // line 52
        if (twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 52, $this->source); })()), "has_selected_children", [], "any", false, false, false, 52)) {
            echo "expanded";
        } elseif ((isset($context["has_children"]) || array_key_exists("has_children", $context) ? $context["has_children"] : (function () { throw new RuntimeError('Variable "has_children" does not exist.', 52, $this->source); })())) {
            echo "collapsed";
        }
        echo "\">
    ";
        // line 53
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 53, $this->source); })())) {
            // line 54
            echo "      ";
            $this->displayBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            echo "
    ";
        } else {
            // line 56
            echo "      ";
            $this->displayBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            echo "
    ";
        }
        // line 58
        echo "
    ";
        // line 59
        if ((isset($context["has_children"]) || array_key_exists("has_children", $context) ? $context["has_children"] : (function () { throw new RuntimeError('Variable "has_children" does not exist.', 59, $this->source); })())) {
            // line 60
            echo "      <ul>
        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 61, $this->source); })()), (isset($context["choice_children"]) || array_key_exists("choice_children", $context) ? $context["choice_children"] : (function () { throw new RuntimeError('Variable "choice_children" does not exist.', 61, $this->source); })()), [], "array", false, false, false, 61));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "          ";
                $context["choice"] = $context["item"];
                // line 63
                echo "          ";
                $this->displayBlock("material_choice_tree_item_widget", $context, $blocks);
                echo "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "      </ul>
    ";
        }
        // line 67
        echo "  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_material_choice_tree_item_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_checkbox_widget"));

        // line 71
        echo "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 75
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 75, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 75, $this->source); })()), [], "array", false, false, false, 75))) {
            // line 76
            echo "           name=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "vars", [], "any", false, false, false, 76), "full_name", [], "any", false, false, false, 76), "html", null, true);
            echo "[]\"
           value=\"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 77, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 77, $this->source); })()), [], "array", false, false, false, 77), "html", null, true);
            echo "\"
           ";
            // line 78
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 78, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 78, $this->source); })()), [], "array", false, false, false, 78), (isset($context["selected_values"]) || array_key_exists("selected_values", $context) ? $context["selected_values"] : (function () { throw new RuntimeError('Variable "selected_values" does not exist.', 78, $this->source); })()))) {
                echo "checked";
            }
            // line 79
            echo "         ";
        }
        // line 80
        echo "         ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 80, $this->source); })()) || twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 80, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 80, $this->source); })()), [], "array", false, false, false, 80), (isset($context["disabled_values"]) || array_key_exists("disabled_values", $context) ? $context["disabled_values"] : (function () { throw new RuntimeError('Variable "disabled_values" does not exist.', 80, $this->source); })())))) {
            echo "disabled";
        }
        // line 81
        echo "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 83, $this->source); })()), (isset($context["choice_label"]) || array_key_exists("choice_label", $context) ? $context["choice_label"] : (function () { throw new RuntimeError('Variable "choice_label" does not exist.', 83, $this->source); })()), [], "array", false, false, false, 83), "html", null, true);
        echo "
      </label>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 89
    public function block_material_choice_tree_item_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_radio_widget"));

        // line 90
        echo "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "vars", [], "any", false, false, false, 93), "full_name", [], "any", false, false, false, 93), "html", null, true);
        echo "\"
       value=\"";
        // line 94
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 94, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 94, $this->source); })()), [], "array", false, false, false, 94), "html", null, true);
        echo "\"
       ";
        // line 95
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 95, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 95, $this->source); })()), [], "array", false, false, false, 95), (isset($context["selected_values"]) || array_key_exists("selected_values", $context) ? $context["selected_values"] : (function () { throw new RuntimeError('Variable "selected_values" does not exist.', 95, $this->source); })()))) {
            echo "checked";
        }
        // line 96
        echo "       ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 96, $this->source); })()) || twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 96, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 96, $this->source); })()), [], "array", false, false, false, 96), (isset($context["disabled_values"]) || array_key_exists("disabled_values", $context) ? $context["disabled_values"] : (function () { throw new RuntimeError('Variable "disabled_values" does not exist.', 96, $this->source); })())))) {
            echo "disabled";
        }
        // line 97
        echo "       ";
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 97, $this->source); })())) {
            echo "required";
        }
        // line 98
        echo "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 100, $this->source); })()), (isset($context["choice_label"]) || array_key_exists("choice_label", $context) ? $context["choice_label"] : (function () { throw new RuntimeError('Variable "choice_label" does not exist.', 100, $this->source); })()), [], "array", false, false, false, 100), "html", null, true);
        echo "
    </label>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  360 => 100,  356 => 98,  351 => 97,  346 => 96,  342 => 95,  338 => 94,  334 => 93,  329 => 90,  319 => 89,  304 => 83,  300 => 81,  295 => 80,  292 => 79,  288 => 78,  284 => 77,  279 => 76,  277 => 75,  271 => 71,  261 => 70,  250 => 67,  246 => 65,  229 => 63,  226 => 62,  209 => 61,  206 => 60,  204 => 59,  201 => 58,  195 => 56,  189 => 54,  187 => 53,  179 => 52,  176 => 51,  173 => 50,  163 => 49,  151 => 45,  134 => 43,  117 => 42,  109 => 37,  101 => 32,  96 => 30,  85 => 27,  75 => 26,  65 => 89,  62 => 88,  60 => 70,  57 => 69,  55 => 49,  52 => 48,  50 => 26,  47 => 25,);
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

{% block material_choice_tree_widget %}
  <div class=\"material-choice-tree-container js-choice-tree-container{% if required %} required{% endif %}\" id=\"{{ form.vars.id }}\">
  <div class=\"choice-tree-actions\">
    <span class=\"form-control-label js-toggle-choice-tree-action\"
          data-expanded-text=\"{{ 'Expand'|trans({}, 'Admin.Actions') }}\"
          data-expanded-icon=\"expand_more\"
          data-collapsed-text=\"{{ 'Collapse'|trans({}, 'Admin.Actions') }}\"
          data-collapsed-icon=\"expand_less\"
          data-action=\"expand\"
    >
      <i class=\"material-icons\">expand_more</i>
      <span class=\"js-toggle-text\">{{ 'Expand'|trans({}, 'Admin.Actions') }}</span>
    </span>
  </div>

  <ul class=\"choice-tree\">
    {% for choice in choices_tree %}
      {{ block('material_choice_tree_item_widget') }}
    {% endfor %}
  </ul>
</div>
{% endblock material_choice_tree_widget %}

{% block material_choice_tree_item_widget %}
  {% set has_children = choice[choice_children] is defined %}

  <li class=\"{% if choice.has_selected_children %}expanded{% elseif has_children %}collapsed{% endif %}\">
    {% if multiple %}
      {{ block('material_choice_tree_item_checkbox_widget') }}
    {% else %}
      {{ block('material_choice_tree_item_radio_widget') }}
    {% endif %}

    {% if has_children %}
      <ul>
        {% for item in choice[choice_children] %}
          {% set choice = item %}
          {{ block('material_choice_tree_item_widget') }}
        {% endfor %}
      </ul>
    {% endif %}
  </li>
{% endblock material_choice_tree_item_widget %}

{% block material_choice_tree_item_checkbox_widget %}
  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         {% if choice[choice_value] is not null %}
           name=\"{{ form.vars.full_name }}[]\"
           value=\"{{ choice[choice_value] }}\"
           {% if choice[choice_value] in selected_values %}checked{% endif %}
         {% endif %}
         {% if disabled or choice[choice_value] in disabled_values %}disabled{% endif %}
        >
        <i class=\"md-checkbox-control\"></i>
        {{ choice[choice_label] }}
      </label>
    </div>
  </div>
{% endblock material_choice_tree_item_checkbox_widget %}

{% block material_choice_tree_item_radio_widget %}
  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"{{ form.vars.full_name }}\"
       value=\"{{ choice[choice_value] }}\"
       {% if choice[choice_value] in selected_values %}checked{% endif %}
       {% if disabled or choice[choice_value] in disabled_values %}disabled{% endif %}
       {% if required %}required{% endif %}
      >
      <i class=\"form-check-round\"></i>
      {{ choice[choice_label] }}
    </label>
  </div>
{% endblock material_choice_tree_item_radio_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/material.html.twig");
    }
}
