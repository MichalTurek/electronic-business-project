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

/* @PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig */
class __TwigTemplate_3f4b70c8414a301a4a2e6fe3d743f68f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'entity_search_input_widget' => [$this, 'block_entity_search_input_widget'],
            'entity_search_list_layout' => [$this, 'block_entity_search_list_layout'],
            'entity_search_table_layout' => [$this, 'block_entity_search_table_layout'],
            'entity_item_row' => [$this, 'block_entity_item_row'],
            'entity_item_list_row' => [$this, 'block_entity_item_list_row'],
            'entity_item_table_row' => [$this, 'block_entity_item_table_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig"));

        // line 25
        echo "
";
        // line 26
        $this->displayBlock('entity_search_input_widget', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('entity_search_list_layout', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('entity_search_table_layout', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('entity_item_row', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('entity_item_list_row', $context, $blocks);
        // line 135
        $this->displayBlock('entity_item_table_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 26
    public function block_entity_search_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_input_widget"));

        // line 27
        echo "  ";
        // line 28
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["data-prototype-template" =>         // line 29
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 29, $this->source); })()), 'row'), "data-prototype-index" => twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 30
(isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html_attr"), "data-prototype-mapping" => json_encode(        // line 31
(isset($context["prototype_mapping"]) || array_key_exists("prototype_mapping", $context) ? $context["prototype_mapping"] : (function () { throw new RuntimeError('Variable "prototype_mapping" does not exist.', 31, $this->source); })())), "data-identifier-field" =>         // line 32
(isset($context["identifier_field"]) || array_key_exists("identifier_field", $context) ? $context["identifier_field"] : (function () { throw new RuntimeError('Variable "identifier_field" does not exist.', 32, $this->source); })()), "data-filtered-identities" => json_encode(        // line 33
(isset($context["filtered_identities"]) || array_key_exists("filtered_identities", $context) ? $context["filtered_identities"] : (function () { throw new RuntimeError('Variable "filtered_identities" does not exist.', 33, $this->source); })())), "data-remove-modal" => json_encode(        // line 34
(isset($context["remove_modal"]) || array_key_exists("remove_modal", $context) ? $context["remove_modal"] : (function () { throw new RuntimeError('Variable "remove_modal" does not exist.', 34, $this->source); })())), "data-remote-url" =>         // line 35
(isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new RuntimeError('Variable "remote_url" does not exist.', 35, $this->source); })()), "data-data-limit" =>         // line 36
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "data-min-length" =>         // line 37
(isset($context["min_length"]) || array_key_exists("min_length", $context) ? $context["min_length"] : (function () { throw new RuntimeError('Variable "min_length" does not exist.', 37, $this->source); })()), "data-allow-delete" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "allow_delete", [], "any", false, false, false, 38)) ? (1) : (0)), "data-suggestion-field" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "suggestion_field", [], "any", false, false, false, 39)]);
        // line 41
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 41)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 41), "")) : ("")) . " entity-search-widget"))]);
        // line 44
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 46
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "vars", [], "any", false, false, false, 46), "allow_search", [], "any", false, false, false, 46)) {
            // line 47
            echo "      <div class=\"search search-with-icon\">";
            // line 48
            $context["attr"] = twig_array_merge((isset($context["search_attr"]) || array_key_exists("search_attr", $context) ? $context["search_attr"] : (function () { throw new RuntimeError('Variable "search_attr" does not exist.', 48, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,             // line 49
($context["search_attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["search_attr"] ?? null), "class", [], "any", false, false, false, 49), "")) : ("")) . " entity-search-input form-control")), "autocomplete" => "off", "placeholder" =>             // line 51
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 51, $this->source); })()), "type" => "text"]);
            // line 54
            $context["id"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "vars", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) . "_search_input");
            // line 55
            echo "<input ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo " />
      </div>
    ";
        }
        // line 58
        $this->displayBlock("form_help", $context, $blocks);
        // line 60
        $context["id"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "vars", [], "any", false, false, false, 60), "id", [], "any", false, false, false, 60) . "_list");
        // line 61
        if (((isset($context["list_layout"]) || array_key_exists("list_layout", $context) ? $context["list_layout"] : (function () { throw new RuntimeError('Variable "list_layout" does not exist.', 61, $this->source); })()) == "table")) {
            // line 62
            $this->displayBlock("entity_search_table_layout", $context, $blocks);
        } else {
            // line 64
            $this->displayBlock("entity_search_list_layout", $context, $blocks);
        }
        // line 66
        echo "    ";
        if ( !(null === (isset($context["empty_state"]) || array_key_exists("empty_state", $context) ? $context["empty_state"] : (function () { throw new RuntimeError('Variable "empty_state" does not exist.', 66, $this->source); })()))) {
            // line 67
            echo "      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 69
            echo (isset($context["empty_state"]) || array_key_exists("empty_state", $context) ? $context["empty_state"] : (function () { throw new RuntimeError('Variable "empty_state" does not exist.', 69, $this->source); })());
            echo "
        </p>
      </div>
    ";
        }
        // line 73
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 76
    public function block_entity_search_list_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_list_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_list_layout"));

        // line 77
        $context["attr"] = twig_array_merge((isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 77, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 77), "")) : ("")) . " entities-list entities-list-container"))]);
        // line 78
        echo "<ul ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 79
        $this->displayBlock("form_rows", $context, $blocks);
        // line 80
        echo "</ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 83
    public function block_entity_search_table_layout($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_table_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_table_layout"));

        // line 84
        $context["attr"] = twig_array_merge((isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 84, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 84)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", false, false, false, 84), "")) : ("")) . " entities-list-container"))]);
        // line 85
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 91, $this->source); })()), "children", [], "any", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 92
            echo "              ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 92), "block_prefixes", [], "any", false, false, false, 92), 1, [], "any", false, false, false, 92);
            // line 93
            echo "              ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 93, $this->source); })()) != "hidden")) {
                // line 94
                echo "                <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 94), "label", [], "any", false, false, false, 94), "html", null, true);
                echo "</th>
              ";
            }
            // line 96
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "
            ";
        // line 99
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "vars", [], "any", false, false, false, 99), "allow_delete", [], "any", false, false, false, 99)) {
            // line 100
            echo "              <th></th>
            ";
        }
        // line 102
        echo "            </tr>
          </thead>
          <tbody class=\"entities-list\">";
        // line 105
        $this->displayBlock("form_rows", $context, $blocks);
        // line 106
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_entity_item_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_row"));

        // line 114
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "parent", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "list_layout", [], "any", false, false, false, 114) == "table")) {
            // line 115
            $this->displayBlock("entity_item_table_row", $context, $blocks);
        } else {
            // line 117
            $this->displayBlock("entity_item_list_row", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 121
    public function block_entity_item_list_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_list_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_list_row"));

        // line 122
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 122, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 122)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 122), "")) : ("")) . " media entity-item"))]);
        // line 123
        echo "  <li ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    <div class=\"media-left\">
      ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "image", [], "any", false, false, false, 125), 'widget');
        echo "
    </div>
    <div class=\"media-body media-middle\">
      ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "name", [], "any", false, false, false, 128), 'widget');
        echo "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131), 'widget');
        echo "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 135
    public function block_entity_item_table_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_table_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_table_row"));

        // line 136
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 136, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 136)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 136), "")) : ("")) . " entity-item"))]);
        // line 137
        echo "  <tr ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "children", [], "any", false, false, false, 138));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 139
            echo "    ";
            $context["childType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 139), "block_prefixes", [], "any", false, false, false, 139), 1, [], "any", false, false, false, 139);
            // line 140
            echo "    ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 140, $this->source); })()) == "hidden")) {
                // line 141
                echo "      ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    ";
            } else {
                // line 143
                echo "    <td>
      ";
                // line 144
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
    </td>
    ";
            }
            // line 147
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "
  ";
        // line 150
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "parent", [], "any", false, false, false, 150), "vars", [], "any", false, false, false, 150), "allow_delete", [], "any", false, false, false, 150)) {
            // line 151
            echo "    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  ";
        }
        // line 155
        echo "  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  406 => 155,  400 => 151,  397 => 150,  394 => 148,  388 => 147,  382 => 144,  379 => 143,  373 => 141,  370 => 140,  367 => 139,  363 => 138,  358 => 137,  356 => 136,  346 => 135,  333 => 131,  327 => 128,  321 => 125,  315 => 123,  312 => 122,  302 => 121,  291 => 117,  288 => 115,  285 => 114,  275 => 113,  260 => 106,  258 => 105,  254 => 102,  250 => 100,  247 => 99,  244 => 97,  238 => 96,  232 => 94,  229 => 93,  226 => 92,  222 => 91,  212 => 85,  210 => 84,  200 => 83,  189 => 80,  187 => 79,  183 => 78,  181 => 77,  171 => 76,  160 => 73,  153 => 69,  149 => 67,  146 => 66,  143 => 64,  140 => 62,  138 => 61,  136 => 60,  134 => 58,  127 => 55,  125 => 54,  123 => 51,  122 => 49,  121 => 48,  119 => 47,  116 => 46,  111 => 44,  109 => 41,  107 => 39,  106 => 38,  105 => 37,  104 => 36,  103 => 35,  102 => 34,  101 => 33,  100 => 32,  99 => 31,  98 => 30,  97 => 29,  96 => 28,  94 => 27,  84 => 26,  74 => 135,  72 => 121,  69 => 120,  67 => 113,  64 => 112,  62 => 83,  59 => 82,  57 => 76,  54 => 75,  52 => 26,  49 => 25,);
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

{% block entity_search_input_widget %}
  {# We cannot use the escape filter for remote_url or it breaks the url and it is not callable any more #}
  {%- set attr = attr|merge({
    'data-prototype-template': form_row(prototype),
    'data-prototype-index': prototype.vars.name|e('html_attr'),
    'data-prototype-mapping': prototype_mapping|json_encode,
    'data-identifier-field': identifier_field,
    'data-filtered-identities': filtered_identities|json_encode,
    'data-remove-modal': remove_modal|json_encode,
    'data-remote-url': remote_url,
    'data-data-limit': limit,
    'data-min-length': min_length,
    'data-allow-delete': form.vars.allow_delete ? 1 : 0,
    'data-suggestion-field': form.vars.suggestion_field
  }) -%}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' entity-search-widget')|trim }) -%}

  {# We use widget_container_attributes in this widget because we do not want the name property #}
  <div {{ block('widget_container_attributes') }}>
    {# If dynamic addition is disabled we don't display the search input field #}
    {% if form.vars.allow_search %}
      <div class=\"search search-with-icon\">
        {%- set attr = search_attr|merge({
          'class': (search_attr.class|default('') ~ ' entity-search-input form-control')|trim,
          'autocomplete': 'off',
          'placeholder': placeholder,
          'type': 'text'
        }) -%}
        {%- set id = form.vars.id ~ '_search_input' -%}
        <input {{ block('widget_container_attributes') }} />
      </div>
    {% endif %}
    {{- block('form_help') -}}

    {%- set id = form.vars.id ~ '_list' -%}
    {% if list_layout == 'table' %}
      {{- block('entity_search_table_layout') -}}
    {% else %}
      {{- block('entity_search_list_layout') -}}
    {% endif %}
    {% if empty_state is not null %}
      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          {{ empty_state|raw('html') }}
        </p>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block entity_search_list_layout %}
  {%- set attr = list_attr|merge({'class': (list_attr.class|default('') ~ ' entities-list entities-list-container')|trim }) -%}
  <ul {{ block('widget_container_attributes') }}>
    {{- block('form_rows') -}}
  </ul>
{% endblock %}

{% block entity_search_table_layout %}
  {%- set attr = list_attr|merge({'class': (list_attr.class|default('') ~ ' entities-list-container')|trim }) -%}
  <div {{ block('widget_container_attributes') }}>
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            {% for child in prototype.children %}
              {% set childType = child.vars.block_prefixes.1 %}
              {% if childType != 'hidden' %}
                <th>{{ child.vars.label }}</th>
              {% endif %}
            {% endfor %}

            {# If item deletion is disabled we don't display the extra column for actions #}
            {% if form.vars.allow_delete %}
              <th></th>
            {% endif %}
            </tr>
          </thead>
          <tbody class=\"entities-list\">
          {{- block('form_rows') -}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{% block entity_item_row %}
  {% if form.parent.vars.list_layout == 'table' %}
    {{- block('entity_item_table_row') -}}
  {% else %}
    {{- block('entity_item_list_row') -}}
  {% endif %}
{% endblock %}

{% block entity_item_list_row %}
  {% set attr = attr|merge({'class': (attr.class|default('') ~ ' media entity-item')|trim}) %}
  <li {{ block('widget_container_attributes') }}>
    <div class=\"media-left\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"media-body media-middle\">
      {{ form_widget(form.name) }}
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    {{ form_widget(form.id) }}
  </li>
{% endblock %}

{%- block entity_item_table_row -%}
  {% set attr = attr|merge({'class': (attr.class|default('') ~ ' entity-item')|trim}) %}
  <tr {{ block('widget_container_attributes') }}>
  {% for child in form.children %}
    {% set childType = child.vars.block_prefixes.1 %}
    {% if childType == 'hidden'%}
      {{ form_widget(child) }}
    {% else %}
    <td>
      {{ form_widget(child) }}
    </td>
    {% endif %}
  {% endfor %}

  {# If item deletion is disabled we don't display the extra column for actions #}
  {% if form.parent.vars.allow_delete %}
    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  {% endif %}
  </tr>
{%- endblock -%}
", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/entity_search_input.html.twig");
    }
}
