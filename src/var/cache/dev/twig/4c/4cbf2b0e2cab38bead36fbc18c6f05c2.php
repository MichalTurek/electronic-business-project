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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_9046bb95800bcd66f66a5d8abf5763d0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        // line 45
        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 45);
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 45, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError('Block "radio_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]);

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError('Block "checkbox_widget" is not defined in trait "bootstrap_base_layout.html.twig".', 45, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]);

        // line 48
        $_trait_1 = $this->loadTemplate("bootstrap_4_layout.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 48);
        if (!$_trait_1->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 48, $this->source);
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        // line 49
        $_trait_2 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 49);
        if (!$_trait_2->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig".'" cannot be used as a trait.', 49, $this->source);
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        // line 50
        $_trait_3 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 50);
        if (!$_trait_3->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 50, $this->source);
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        // line 51
        $_trait_4 = $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 51);
        if (!$_trait_4->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 51, $this->source);
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        // line 25
        echo "
";
        // line 34
        echo "
";
        // line 46
        echo "
";
        // line 52
        echo "
";
        // line 54
        echo "
";
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('form_start', $context, $blocks);
        // line 67
        $this->displayBlock('form_widget', $context, $blocks);
        // line 75
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 80
        $this->displayBlock('ip_address_text_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('form_row', $context, $blocks);
        // line 110
        echo "
";
        // line 115
        $this->displayBlock('form_modify_all_shops', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_disabling_switch', $context, $blocks);
        // line 130
        echo "
";
        // line 131
        $this->displayBlock('widget_type_class', $context, $blocks);
        // line 150
        echo "
";
        // line 153
        $this->displayBlock('form_label', $context, $blocks);
        // line 198
        echo "
";
        // line 199
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        $this->displayBlock('money_widget', $context, $blocks);
        // line 224
        echo "
";
        // line 225
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 233
        echo "
";
        // line 234
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 248
        $this->displayBlock('url_widget', $context, $blocks);
        // line 254
        $this->displayBlock('date_widget', $context, $blocks);
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('time_widget', $context, $blocks);
        // line 288
        $this->displayBlock('email_widget', $context, $blocks);
        // line 294
        $this->displayBlock('button_widget', $context, $blocks);
        // line 298
        echo "
";
        // line 299
        $this->displayBlock('icon_button_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 322
        echo "
";
        // line 323
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 327
        echo "
";
        // line 328
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 351
        echo "
";
        // line 352
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 362
        echo "
";
        // line 363
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 401
        echo "
";
        // line 402
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 427
        echo "
";
        // line 428
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 434
        echo "
";
        // line 435
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 471
        echo "
";
        // line 472
        $this->displayBlock('translate_textarea_widget', $context, $blocks);
        // line 513
        echo "
";
        // line 514
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 528
        echo "
";
        // line 529
        $this->displayBlock('date_range_widget', $context, $blocks);
        // line 545
        echo "
";
        // line 546
        $this->displayBlock('search_and_reset_widget', $context, $blocks);
        // line 571
        echo "
";
        // line 572
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 596
        $this->displayBlock('row_attributes', $context, $blocks);
        // line 604
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 633
        echo "
";
        // line 635
        echo "
";
        // line 636
        $this->displayBlock('choice_label', $context, $blocks);
        // line 641
        echo "
";
        // line 642
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 645
        echo "
";
        // line 646
        $this->displayBlock('radio_label', $context, $blocks);
        // line 649
        echo "
";
        // line 650
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 682
        echo "
";
        // line 683
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 697
        echo "
";
        // line 698
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 705
        echo "
";
        // line 707
        echo "
";
        // line 708
        $this->displayBlock('form_errors', $context, $blocks);
        // line 715
        echo "
";
        // line 716
        $this->displayBlock('form_errors_field', $context, $blocks);
        // line 782
        echo "
";
        // line 783
        $this->displayBlock('form_errors_other', $context, $blocks);
        // line 802
        echo "
";
        // line 804
        echo "
";
        // line 805
        $this->displayBlock('material_choice_table_widget', $context, $blocks);
        // line 841
        echo "
";
        // line 842
        $this->displayBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 894
        echo "
";
        // line 896
        $this->displayBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 919
        echo "
";
        // line 920
        $this->displayBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 956
        echo "
";
        // line 957
        $this->displayBlock('translatable_widget', $context, $blocks);
        // line 965
        echo "
";
        // line 966
        $this->displayBlock('birthday_widget', $context, $blocks);
        // line 990
        echo "
";
        // line 991
        $this->displayBlock('file_widget', $context, $blocks);
        // line 1023
        echo "
";
        // line 1024
        $this->displayBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1040
        echo "
";
        // line 1041
        $this->displayBlock('generatable_text_widget', $context, $blocks);
        // line 1060
        echo "
";
        // line 1061
        $this->displayBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1086
        echo "
";
        // line 1087
        $this->displayBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1115
        echo "
";
        // line 1116
        $this->displayBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1120
        echo "
";
        // line 1121
        $this->displayBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1126
        $this->displayBlock('number_widget', $context, $blocks);
        // line 1136
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 1146
        $this->displayBlock('form_unit', $context, $blocks);
        // line 1153
        echo "
";
        // line 1154
        $this->displayBlock('form_unit_prepend', $context, $blocks);
        // line 1161
        echo "
";
        // line 1162
        $this->displayBlock('form_help', $context, $blocks);
        // line 1170
        echo "
";
        // line 1171
        $this->displayBlock('form_prepend_external_link', $context, $blocks);
        // line 1176
        echo "
";
        // line 1177
        $this->displayBlock('form_append_external_link', $context, $blocks);
        // line 1182
        echo "
";
        // line 1183
        $this->displayBlock('form_external_link', $context, $blocks);
        // line 1196
        $this->displayBlock('form_external_link_attributes', $context, $blocks);
        // line 1210
        $this->displayBlock('custom_content_widget', $context, $blocks);
        // line 1213
        echo "
";
        // line 1214
        $this->displayBlock('text_widget', $context, $blocks);
        // line 1231
        $this->displayBlock('form_prepend_alert', $context, $blocks);
        // line 1237
        $this->displayBlock('form_append_alert', $context, $blocks);
        // line 1243
        $this->displayBlock('form_alert', $context, $blocks);
        // line 1276
        $this->displayBlock('unavailable_widget', $context, $blocks);
        // line 1283
        echo "
";
        // line 1284
        $this->displayBlock('text_preview_widget', $context, $blocks);
        // line 1302
        echo "
";
        // line 1303
        $this->displayBlock('image_preview_widget', $context, $blocks);
        // line 1308
        echo "
";
        // line 1309
        $this->displayBlock('delta_quantity_widget', $context, $blocks);
        // line 1317
        echo "
";
        // line 1318
        $this->displayBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1329
        echo "
";
        // line 1330
        $this->displayBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1346
        echo "
";
        // line 1347
        $this->displayBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1352
        echo "
";
        // line 1353
        $this->displayBlock('submittable_input_widget', $context, $blocks);
        // line 1366
        echo "
";
        // line 1367
        $this->displayBlock('submittable_input_button_widget', $context, $blocks);
        // line 1372
        echo "
";
        // line 1373
        $this->displayBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1387
        $this->displayBlock('navigation_tab_widget', $context, $blocks);
        // line 1438
        $this->displayBlock('accordion_widget', $context, $blocks);
        // line 1478
        $this->displayBlock('button_collection_widget', $context, $blocks);
        // line 1495
        $this->displayBlock('price_reduction_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 57
    public function block_form_start($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 58
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 58, $this->source); })()), ["data-alerts-success" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", true, true, false, 58)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 58), "alerts", [], "any", false, true, false, 58), "success", [], "any", false, false, false, 58), [])) : ([])))]);
        // line 59
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 59, $this->source); })()), ["data-alerts-info" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 59), "alerts", [], "any", false, true, false, 59), "info", [], "any", false, false, false, 59), [])) : ([])))]);
        // line 60
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 60, $this->source); })()), ["data-alerts-warning" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 60), "alerts", [], "any", false, true, false, 60), "warning", [], "any", false, false, false, 60), [])) : ([])))]);
        // line 61
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 61, $this->source); })()), ["data-alerts-error" => twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 61), "alerts", [], "any", false, true, false, 61), "error", [], "any", false, false, false, 61), [])) : ([])))]);
        // line 62
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 62, $this->source); })()), ["data-form-submitted" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "vars", [], "any", false, false, false, 62), "submitted", [], "any", false, false, false, 62)) ? (1) : (0))]);
        // line 63
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 63, $this->source); })()), ["data-form-valid" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "vars", [], "any", false, false, false, 63), "valid", [], "any", false, false, false, 63)) ? (1) : (0))]);
        // line 64
        echo "  ";
        $this->displayParentBlock("form_start", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 67
    public function block_form_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 68
        if (array_key_exists("columns_number", $context)) {
            // line 69
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 69, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 69)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 69), "")) : ("")) . " form-columns-") . (isset($context["columns_number"]) || array_key_exists("columns_number", $context) ? $context["columns_number"] : (function () { throw new RuntimeError('Variable "columns_number" does not exist.', 69, $this->source); })())))]);
            // line 70
            echo "  ";
        }
        // line 71
        echo "  ";
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 72
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 75
    public function block_form_widget_simple($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 76
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 77
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 77)->display(twig_array_merge($context, ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 77, $this->source); })())]));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 80
    public function block_ip_address_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        // line 81
        echo "  <div class=\"input-group\">";
        // line 82
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 83
        echo "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        echo twig_escape_filter($this->env, (isset($context["currentIp"]) || array_key_exists("currentIp", $context) ? $context["currentIp"] : (function () { throw new RuntimeError('Variable "currentIp" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
  </div>
  ";
        // line 87
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 92
    public function block_form_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 93
        echo "<div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 93, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 93, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 93, $this->source); })()))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 93)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 93, $this->source); })()), "class", [], "any", false, false, false, 93), "html", null, true);
        }
        echo "\">";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'label');
        // line 95
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 96
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'widget');
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), 'errors');
        // line 100
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 102
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 103
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 104
        echo "</div>

  ";
        // line 106
        if ((isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 106, $this->source); })())) {
            // line 107
            echo "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 115
    public function block_form_modify_all_shops($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        // line 116
        echo "  ";
        $context["overrideCheckboxName"] = ((isset($context["modify_all_shops_prefix"]) || array_key_exists("modify_all_shops_prefix", $context) ? $context["modify_all_shops_prefix"] : (function () { throw new RuntimeError('Variable "modify_all_shops_prefix" does not exist.', 116, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "vars", [], "any", false, false, false, 116), "name", [], "any", false, false, false, 116));
        // line 117
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 117), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 117, $this->source); })()), [], "any", true, true, false, 117)) {
            // line 118
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "parent", [], "any", false, false, false, 118), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 118, $this->source); })()), [], "any", false, false, false, 118), 'errors');
            echo "
    ";
            // line 119
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "parent", [], "any", false, false, false, 119), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 119, $this->source); })()), [], "any", false, false, false, 119), 'widget');
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 123
    public function block_form_disabling_switch($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        // line 124
        echo "  ";
        $context["disablingSwitchName"] = ((isset($context["disabling_switch_prefix"]) || array_key_exists("disabling_switch_prefix", $context) ? $context["disabling_switch_prefix"] : (function () { throw new RuntimeError('Variable "disabling_switch_prefix" does not exist.', 124, $this->source); })()) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "vars", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124));
        // line 125
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 125), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 125, $this->source); })()), [], "any", true, true, false, 125)) {
            // line 126
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "parent", [], "any", false, false, false, 126), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 126, $this->source); })()), [], "any", false, false, false, 126), 'errors');
            echo "
    ";
            // line 127
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "parent", [], "any", false, false, false, 127), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 127, $this->source); })()), [], "any", false, false, false, 127), 'widget');
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_widget_type_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        // line 132
        if (( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 132, $this->source); })()) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "block_prefixes", [], "any", false, false, false, 132)) > 2))) {
            // line 133
            echo " ";
            ob_start();
            // line 134
            echo "
    ";
            // line 135
            $context["index"] = (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), "vars", [], "any", false, false, false, 135), "block_prefixes", [], "any", false, false, false, 135)) - 2);
            // line 136
            echo "    ";
            $context["widgetType"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "block_prefixes", [], "any", false, false, false, 136), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 136, $this->source); })()), [], "array", false, false, false, 136);
            // line 137
            echo "    ";
            if (((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 137, $this->source); })()) == "choice")) {
                // line 138
                echo "      ";
                if ( !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 138, $this->source); })())) {
                    // line 139
                    echo "        ";
                    $context["widgetType"] = "select";
                    // line 140
                    echo "      ";
                } elseif ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 140, $this->source); })())) {
                    // line 141
                    echo "        ";
                    $context["widgetType"] = "checboxes";
                    // line 142
                    echo "      ";
                } else {
                    // line 143
                    echo "        ";
                    $context["widgetType"] = "radio";
                    // line 144
                    echo "      ";
                }
                // line 145
                echo "    ";
            }
            // line 146
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 146, $this->source); })()), "html", null, true);
            echo "-widget
";
            $___internal_parse_2_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 133
            echo twig_spaceless($___internal_parse_2_);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 153
    public function block_form_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 154
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 154, $this->source); })()) === false)) {
            // line 155
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 155, $this->source); })())) {
                // line 156
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 156, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 156, $this->source); })())]);
            }
            // line 158
            echo "    ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 158, $this->source); })())) {
                // line 159
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 159, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 159)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 159), "")) : ("")) . " required"))]);
            }
            // line 161
            echo "    ";
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 161, $this->source); })()))) {
                // line 162
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 162, $this->source); })()))) {
                    // line 163
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 163, $this->source); })()), ["%name%" =>                     // line 164
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 164, $this->source); })()), "%id%" =>                     // line 165
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 165, $this->source); })())]);
                } else {
                    // line 168
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 168, $this->source); })()));
                }
            }
            // line 172
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (_twig_default_filter((isset($context["label_tag_name"]) || array_key_exists("label_tag_name", $context) ? $context["label_tag_name"] : (function () { throw new RuntimeError('Variable "label_tag_name" does not exist.', 172, $this->source); })()), "label")) : ("label"));
            // line 173
            echo "    <";
            echo twig_escape_filter($this->env, (isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 173, $this->source); })()), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 173, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 174
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 174, $this->source); })())) {
                // line 175
                echo "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 177
            echo "    ";
            echo ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 177, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 177, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 177, $this->source); })())));
            echo "
    ";
            // line 178
            if (twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 178)) {
                // line 179
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 179)) ? (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 179, $this->source); })()), "tooltip_placement", [], "array", false, false, false, 179)) : ("top"));
                // line 180
                echo "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                echo twig_escape_filter($this->env, (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 180, $this->source); })()), "html", null, true);
                echo "\"
         title=\"";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 181, $this->source); })()), "tooltip", [], "array", false, false, false, 181), "html", null, true);
                echo "\"></i>
    ";
            }
            // line 183
            echo "
    ";
            // line 184
            if ((array_key_exists("label_help_box", $context) || twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 184))) {
                // line 185
                echo "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? ((isset($context["label_help_box"]) || array_key_exists("label_help_box", $context) ? $context["label_help_box"] : (function () { throw new RuntimeError('Variable "label_help_box" does not exist.', 185, $this->source); })())) : (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 185, $this->source); })()), "popover", [], "array", false, false, false, 185)));
                // line 186
                echo "      ";
                $context["placement"] = ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 186)) ? (twig_get_attribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 186, $this->source); })()), "popover_placement", [], "array", false, false, false, 186)) : ("top"));
                // line 187
                echo "      ";
                $this->loadTemplate("@Common/HelpBox/helpbox.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 187)->display(twig_array_merge($context, ["placement" => (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 187, $this->source); })()), "content" => (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 187, $this->source); })())]));
                // line 188
                echo "    ";
            }
            // line 189
            $this->displayBlock("form_disabling_switch", $context, $blocks);
            // line 190
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 190, $this->source); })()), "html", null, true);
            echo ">";
        }
        // line 192
        if (array_key_exists("label_subtitle", $context)) {
            // line 193
            echo "    <p class=\"subtitle\">";
            echo (isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 193, $this->source); })());
            echo "</p>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 199
    public function block_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 200
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 200, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 200)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 200), "")) : ("")) . " form-control"))]);
        // line 201
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        // line 202
        $this->loadTemplate("@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 202)->display(twig_array_merge($context, ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 202, $this->source); })())]));
        // line 203
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 206
    public function block_money_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 207
        echo "<div class=\"input-group money-type\">
    ";
        // line 208
        $context["prepend"] = ("{{" == twig_slice($this->env, (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 208, $this->source); })()), 0, 2));
        // line 209
        echo "    ";
        if ( !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 209, $this->source); })())) {
            // line 210
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 211
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 211, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 214
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 215
        if ((isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 215, $this->source); })())) {
            // line 216
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 217
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 217, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 220
        echo "  </div>

  ";
        // line 222
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 225
    public function block_percent_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 226
        echo "<div class=\"input-group\">";
        // line 227
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 228
        echo "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 234
    public function block_datetime_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 235
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 235, $this->source); })()) == "single_text")) {
            // line 236
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 238
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 238, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 238)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 238), "")) : ("")) . " form-inline"))]);
            // line 239
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 240
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "date", [], "any", false, false, false, 240), 'errors');
            // line 241
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 241, $this->source); })()), "time", [], "any", false, false, false, 241), 'errors');
            // line 242
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "date", [], "any", false, false, false, 242), 'widget', ["datetime" => true]);
            // line 243
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "time", [], "any", false, false, false, 243), 'widget', ["datetime" => true]);
            // line 244
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 248
    public function block_url_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        // line 249
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 249, $this->source); })()), "url")) : ("url"));
        // line 250
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 251
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 254
    public function block_date_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 255
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 255, $this->source); })()) == "single_text")) {
            // line 256
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 258
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 258, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 258)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 258), "")) : ("")) . " form-inline"))]);
            // line 259
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 259, $this->source); })()))) {
                // line 260
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 262
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 262, $this->source); })()), ["{{ year }}" =>             // line 263
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), "year", [], "any", false, false, false, 263), 'widget'), "{{ month }}" =>             // line 264
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "month", [], "any", false, false, false, 264), 'widget'), "{{ day }}" =>             // line 265
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 265, $this->source); })()), "day", [], "any", false, false, false, 265), 'widget')]);
            // line 267
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 267, $this->source); })()))) {
                // line 268
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 273
    public function block_time_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 274
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 274, $this->source); })()) == "single_text")) {
            // line 275
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 277
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 277, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 277)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 277), "")) : ("")) . " form-inline"))]);
            // line 278
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 278, $this->source); })())))) {
                // line 279
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 281
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "hour", [], "any", false, false, false, 281), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "minute", [], "any", false, false, false, 281), 'widget');
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 281, $this->source); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 281, $this->source); })()), "second", [], "any", false, false, false, 281), 'widget');
            }
            // line 282
            echo "    ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 282, $this->source); })())))) {
                // line 283
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 288
    public function block_email_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        // line 289
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 289, $this->source); })()), "email")) : ("email"));
        // line 290
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
  ";
        // line 291
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 294
    public function block_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 295
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 295, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 295)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 295), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 296
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 299
    public function block_icon_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        // line 300
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 300, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 300)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 300), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 301
        echo "  ";
        if (((isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new RuntimeError('Variable "button_type" does not exist.', 301, $this->source); })()) == "link")) {
            // line 302
            echo "    ";
            $context["buttonTag"] = "a";
            // line 303
            echo "    ";
            // line 304
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 304)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", false, false, false, 304), false)) : (false))) {
                // line 305
                echo "      ";
                $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 305, $this->source); })()), ["class" => twig_trim_filter((twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 305, $this->source); })()), "class", [], "any", false, false, false, 305) . " disabled"))]);
                // line 306
                echo "    ";
            }
            // line 307
            echo "  ";
        } else {
            // line 308
            echo "    ";
            $context["buttonTag"] = "button";
            // line 309
            echo "    ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 309, $this->source); })()), ["type" => "button"]);
            // line 310
            echo "  ";
        }
        // line 311
        echo "
  <";
        // line 312
        echo twig_escape_filter($this->env, (isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 312, $this->source); })()), "html", null, true);
        echo " ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">
    <i class=\"material-icons\">";
        // line 313
        echo twig_escape_filter($this->env, (isset($context["button_icon"]) || array_key_exists("button_icon", $context) ? $context["button_icon"] : (function () { throw new RuntimeError('Variable "button_icon" does not exist.', 313, $this->source); })()), "html", null, true);
        echo "</i>
    ";
        // line 314
        echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 314, $this->source); })()), "html", null, true);
        echo "
  </";
        // line 315
        echo twig_escape_filter($this->env, (isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 315, $this->source); })()), "html", null, true);
        echo ">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 318
    public function block_choice_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 319
        $this->displayParentBlock("choice_widget", $context, $blocks);
        // line 320
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 323
    public function block_choice_widget_collapsed($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 324
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 324, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 324)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 324), "")) : ("")) . " custom-select"))]);
        // line 325
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 328
    public function block_choice_widget_expanded($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 329
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 329)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 329), "")) : ("")))) {
            // line 330
            echo "<div class=\"control-group\">";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 332
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 333
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 333)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 333), "")) : ("")), "translation_domain" =>                 // line 334
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 334, $this->source); })()), "valid" =>                 // line 335
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 335, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "</div>";
        } else {
            // line 340
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 342
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 343
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 343)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 343), "")) : ("")), "translation_domain" =>                 // line 344
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 344, $this->source); })()), "valid" =>                 // line 345
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 345, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 352
    public function block_choice_tree_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 353
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 356, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 357
            echo "        ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 359
        echo "</ul>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 363
    public function block_choice_tree_item_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 364
        echo "<li>
    ";
        // line 365
        $context["checked"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 365), "submitted_values", [], "any", true, true, false, 365) && twig_get_attribute($this->env, $this->source, ($context["submitted_values"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 365, $this->source); })()), "id_category", [], "any", false, false, false, 365), [], "array", true, true, false, 365))) ? ("checked=\"checked\"") : (""));
        // line 366
        echo "    ";
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 366, $this->source); })())) {
            // line 367
            echo "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 369, $this->source); })()), "vars", [], "any", false, false, false, 369), "full_name", [], "any", false, false, false, 369), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 369, $this->source); })()), "id_category", [], "any", false, false, false, 369), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 369, $this->source); })()), "html", null, true);
            echo ">
          ";
            // line 370
            if ((twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 370) && (twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 370, $this->source); })()), "active", [], "any", false, false, false, 370) == 0))) {
                // line 371
                echo "            <i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 371, $this->source); })()), "name", [], "any", false, false, false, 371), "html", null, true);
                echo "</i>";
            } else {
                // line 373
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 373, $this->source); })()), "name", [], "any", false, false, false, 373), "html", null, true);
                echo "
          ";
            }
            // line 375
            echo "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 376
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 376, $this->source); })()), "id_category", [], "any", false, false, false, 376), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 378
            echo "        </label>
      </div>";
        } else {
            // line 381
            echo "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 383
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 383, $this->source); })()), "vars", [], "any", false, false, false, 383), "id", [], "any", false, false, false, 383), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 383, $this->source); })()), "id_category", [], "any", false, false, false, 383), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, (isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 383, $this->source); })()), "html", null, true);
            echo " class=\"category\">
          ";
            // line 384
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 384, $this->source); })()), "name", [], "any", false, false, false, 384), "html", null, true);
            echo "
          ";
            // line 385
            if (array_key_exists("defaultCategory", $context)) {
                // line 386
                echo "            <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 386, $this->source); })()), "id_category", [], "any", false, false, false, 386), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 388
            echo "        </label>
      </div>";
        }
        // line 391
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 391)) {
            // line 392
            echo "      <ul>
        ";
            // line 393
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 393, $this->source); })()), "children", [], "any", false, false, false, 393));
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
                // line 394
                echo "          ";
                $context["child"] = $context["item"];
                // line 395
                echo "          ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
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
            // line 397
            echo "</ul>
    ";
        }
        // line 399
        echo "  </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 402
    public function block_translatefields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 403
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 403, $this->source); })()), 'errors');
        echo "
  <div class=\"translations tabbable\" id=\"";
        // line 404
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 404, $this->source); })()), "vars", [], "any", false, false, false, 404), "id", [], "any", false, false, false, 404), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 405
        if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 405, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 405, $this->source); })())) > 1))) {
            // line 406
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 407
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 407, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 408
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 409
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "label", [], "any", false, false, false, 409), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 409, $this->source); })()), "id_lang", [], "any", false, false, false, 409) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "name", [], "any", false, false, false, 409))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "id", [], "any", false, false, false, 409), "html", null, true);
                echo "\">
              ";
                // line 410
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 410), "label", [], "any", false, false, false, 410)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "      </ul>
    ";
        }
        // line 416
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 418
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 418, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 419
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 419), "label", [], "any", false, false, false, 419), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 419), "id", [], "any", false, false, false, 419), "html", null, true);
            echo " tab-pane translation-field ";
            if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 419, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })())) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 419, $this->source); })()), "id_lang", [], "any", false, false, false, 419) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 419), "name", [], "any", false, false, false, 419))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 419, $this->source); })()), "vars", [], "any", false, false, false, 419), "valid", [], "any", false, false, false, 419)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 419), "label", [], "any", false, false, false, 419), "html", null, true);
            echo "\">
          ";
            // line 420
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
          ";
            // line 421
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 424
        echo "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 428
    public function block_translate_fields_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 429
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 429, $this->source); })())))) {
            // line 430
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 430, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 430)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 430), "")) : ("")) . " form-control"))]);
        }
        // line 432
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 435
    public function block_translate_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 436
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 436, $this->source); })()), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 438
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 438, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 439
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 439), "attr", [], "any", false, true, false, 439), "class", [], "any", true, true, false, 439)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 439), "attr", [], "any", false, true, false, 439), "class", [], "any", false, false, false, 439), "")) : ("")) . " js-locale-input");
            // line 440
            echo "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 440, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 440), "label", [], "any", false, false, false, 440));
            // line 441
            echo "
      ";
            // line 442
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 442, $this->source); })()), "id_lang", [], "any", false, false, false, 442) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 442), "name", [], "any", false, false, false, 442))) {
                // line 443
                echo "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 443, $this->source); })()) . " d-none");
                // line 444
                echo "      ";
            }
            // line 446
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 446, $this->source); })()), ["class" => twig_trim_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 446, $this->source); })()))]);
            // line 447
            $this->displayBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 449
        echo "
    ";
        // line 450
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 450, $this->source); })())) {
            // line 451
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 457
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 457, $this->source); })()), "vars", [], "any", false, false, false, 457), "id", [], "any", false, false, false, 457), "html", null, true);
            echo "\"
        >
          ";
            // line 459
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "vars", [], "any", false, false, false, 459), "default_locale", [], "any", false, false, false, 459), "iso_code", [], "any", false, false, false, 459), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 462
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 462, $this->source); })()), "vars", [], "any", false, false, false, 462), "id", [], "any", false, false, false, 462), "html", null, true);
            echo "\">
          ";
            // line 463
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 463, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 464
                echo "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 464), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 464), "html", null, true);
                echo "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 466
            echo "        </div>
      </div>
    ";
        }
        // line 469
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 472
    public function block_translate_textarea_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        // line 473
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 473, $this->source); })()), 'errors');
        echo "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 475
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 476
            echo "      ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 476), "attr", [], "any", false, true, false, 476), "class", [], "any", true, true, false, 476)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 476), "attr", [], "any", false, true, false, 476), "class", [], "any", false, false, false, 476), "")) : ("")) . " js-locale-input");
            // line 477
            echo "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 477, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 477), "label", [], "any", false, false, false, 477));
            // line 478
            echo "
      ";
            // line 479
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 479, $this->source); })()), "id_lang", [], "any", false, false, false, 479) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 479), "name", [], "any", false, false, false, 479))) {
                // line 480
                echo "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 480, $this->source); })()) . " d-none");
                // line 481
                echo "      ";
            }
            // line 482
            echo "
      <div class=\"";
            // line 483
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 483, $this->source); })()), "html", null, true);
            echo "\">
        ";
            // line 484
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => twig_trim_filter((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 484, $this->source); })()))]]);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['textarea'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 487
        echo "
    ";
        // line 488
        if ((isset($context["show_locale_select"]) || array_key_exists("show_locale_select", $context) ? $context["show_locale_select"] : (function () { throw new RuntimeError('Variable "show_locale_select" does not exist.', 488, $this->source); })())) {
            // line 489
            echo "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 495
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 495, $this->source); })()), "vars", [], "any", false, false, false, 495), "id", [], "any", false, false, false, 495), "html", null, true);
            echo "\"
        >
          ";
            // line 497
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 497, $this->source); })()), "vars", [], "any", false, false, false, 497), "default_locale", [], "any", false, false, false, 497), "iso_code", [], "any", false, false, false, 497), "html", null, true);
            echo "
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 500
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 500, $this->source); })()), "vars", [], "any", false, false, false, 500), "id", [], "any", false, false, false, 500), "html", null, true);
            echo "\">
          ";
            // line 501
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 501, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 502
                echo "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 503
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 503), "html", null, true);
                echo "\"
            >
              ";
                // line 505
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 505), "html", null, true);
                echo "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 508
            echo "        </div>
      </div>
    ";
        }
        // line 511
        echo "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 514
    public function block_date_picker_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 515
        echo "  ";
        ob_start();
        // line 516
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 516, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 516)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 516), "")) : ("")) . " form-control datepicker"))]);
        // line 517
        echo "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
        // line 518
        echo twig_escape_filter($this->env, (isset($context["date_format"]) || array_key_exists("date_format", $context) ? $context["date_format"] : (function () { throw new RuntimeError('Variable "date_format" does not exist.', 518, $this->source); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 518, $this->source); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 518, $this->source); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
        // line 525
        $this->displayBlock("form_help", $context, $blocks);
        echo "
  ";
        $___internal_parse_3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 515
        echo twig_spaceless($___internal_parse_3_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 529
    public function block_date_range_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 530
        echo "  ";
        ob_start();
        // line 531
        echo "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
        // line 533
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 533, $this->source); })()), "from", [], "any", false, false, false, 533), 'row');
        echo "
      </div>
      <div class=\"col col-md-4\">
        ";
        // line 536
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 536, $this->source); })()), "to", [], "any", false, false, false, 536), 'row');
        echo "
        ";
        // line 537
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 537)) {
            // line 538
            echo "          ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 538, $this->source); })()), "unlimited", [], "any", false, false, false, 538), 'widget');
            echo "
          ";
            // line 539
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 539, $this->source); })()), "unlimited", [], "any", false, false, false, 539), 'errors');
            echo "
        ";
        }
        // line 541
        echo "      </div>
    </div>
  ";
        $___internal_parse_4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 530
        echo twig_spaceless($___internal_parse_4_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 546
    public function block_search_and_reset_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        // line 547
        echo "  ";
        ob_start();
        // line 548
        echo "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"";
        // line 550
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "\"
            name=\"";
        // line 551
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 551, $this->source); })()), "html", null, true);
        echo "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
        // line 554
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        echo "
    </button>
    ";
        // line 556
        if ((isset($context["show_reset_button"]) || array_key_exists("show_reset_button", $context) ? $context["show_reset_button"] : (function () { throw new RuntimeError('Variable "show_reset_button" does not exist.', 556, $this->source); })())) {
            // line 557
            echo "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
            // line 559
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 559, $this->source); })()), "html", null, true);
            echo "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
            // line 561
            echo twig_escape_filter($this->env, (isset($context["reset_url"]) || array_key_exists("reset_url", $context) ? $context["reset_url"] : (function () { throw new RuntimeError('Variable "reset_url" does not exist.', 561, $this->source); })()), "html", null, true);
            echo "\"
                data-redirect=\"";
            // line 562
            echo twig_escape_filter($this->env, (isset($context["redirect_url"]) || array_key_exists("redirect_url", $context) ? $context["redirect_url"] : (function () { throw new RuntimeError('Variable "redirect_url" does not exist.', 562, $this->source); })()), "html", null, true);
            echo "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
            // line 565
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
            echo "
        </button>
      </div>
    ";
        }
        // line 569
        echo "  ";
        $___internal_parse_5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 547
        echo twig_spaceless($___internal_parse_5_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 572
    public function block_switch_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 573
        echo "  ";
        ob_start();
        // line 574
        echo "  ";
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 574, $this->source); })()), [])) : ([]));
        // line 575
        echo "  <div class=\"input-group ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 575)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", false, false, false, 575), "")) : ("")), "html", null, true);
        echo "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 575, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            echo " ";
            if (($context["key"] != "class")) {
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <span class=\"ps-switch\" id=\"";
        // line 576
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 576, $this->source); })()), "vars", [], "any", false, false, false, 576), "id", [], "any", false, false, false, 576), "html", null, true);
        echo "\">
        ";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 577, $this->source); })()));
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
            // line 578
            echo "          ";
            $context["inputId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 578, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 578));
            // line 579
            echo "          <input id=\"";
            echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 579, $this->source); })()), "html", null, true);
            echo "\"
            ";
            // line 580
            $this->displayBlock("attributes", $context, $blocks);
            echo "
            name=\"";
            // line 581
            echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 581, $this->source); })()), "html", null, true);
            echo "\"
            value=\"";
            // line 582
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 582), "html", null, true);
            echo "\"
            ";
            // line 583
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 583, $this->source); })()))) {
                echo "checked=\"\"";
            }
            // line 584
            echo "            ";
            if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 584, $this->source); })())) {
                echo "disabled=\"\"";
            }
            // line 585
            echo "            type=\"radio\"
          >
          ";
            // line 587
            if ((isset($context["show_choices"]) || array_key_exists("show_choices", $context) ? $context["show_choices"] : (function () { throw new RuntimeError('Variable "show_choices" does not exist.', 587, $this->source); })())) {
                echo "<label for=\"";
                echo twig_escape_filter($this->env, (isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 587, $this->source); })()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 587), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 587, $this->source); })())), "html", null, true);
                echo "</label>";
            }
            // line 588
            echo "        ";
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
        // line 589
        echo "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
        $___internal_parse_6_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 573
        echo twig_spaceless($___internal_parse_6_);
        // line 593
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 596
    public function block_row_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        // line 597
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (_twig_default_filter((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 597, $this->source); })()), [])) : ([]));
        // line 598
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 598, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 599
            echo " ";
            // line 600
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 604
    public function block__form_step6_attachments_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 605
        echo "  <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 605, $this->source); })())) > 0)) ? ("hide") : (""));
        echo "\">
    <small>";
        // line 606
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 609
        echo (((twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })())) == 0)) ? ("hide") : (""));
        echo "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-6\">";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        echo "</th>
            <th class=\"col-md-2\">";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
          </tr>
          </thead>
          <tbody>";
        // line 620
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 620, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 621
            echo "            <tr>
              <td class=\"col-md-3\">";
            // line 622
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 623
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 623, $this->source); })()), "vars", [], "any", false, false, false, 623), "attr", [], "any", false, false, false, 623), "data", [], "any", false, false, false, 623), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 623), [], "array", false, false, false, 623), "file_name", [], "array", false, false, false, 623), "html", null, true);
            echo "</span></td>
              <td class=\"col-md-2\">";
            // line 624
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 624, $this->source); })()), "vars", [], "any", false, false, false, 624), "attr", [], "any", false, false, false, 624), "data", [], "any", false, false, false, 624), twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 624), [], "array", false, false, false, 624), "mime", [], "array", false, false, false, 624), "html", null, true);
            echo "</td>
            </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 627
        echo "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 636
    public function block_choice_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        // line 638
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 638, $this->source); })()), ["class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 638)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 638), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 639
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 642
    public function block_checkbox_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 643
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 646
    public function block_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 647
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 650
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 651
        echo "  ";
        // line 652
        echo "  ";
        if (array_key_exists("widget", $context)) {
            // line 653
            echo "    ";
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 653, $this->source); })())) {
                // line 654
                echo "      ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 654, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 654)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 654), "")) : ("")) . " required"))]);
                // line 655
                echo "    ";
            }
            // line 656
            echo "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 657
                echo "      ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 657, $this->source); })()), ["class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 657)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 657), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 657, $this->source); })())))]);
                // line 658
                echo "    ";
            }
            // line 659
            echo "    ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 659, $this->source); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 659, $this->source); })())))) {
                // line 660
                echo "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 660, $this->source); })()));
                // line 661
                echo "    ";
            }
            // line 662
            echo "
    ";
            // line 663
            if ((twig_get_attribute($this->env, $this->source, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 663, $this->source); })()), 2, [], "array", false, false, false, 663) == "radio")) {
                // line 664
                echo "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 664, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 665
                echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 665, $this->source); })());
                // line 667
                echo "<i class=\"form-check-round\"></i>";
                // line 669
                echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 669, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 669, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 669, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 669, $this->source); })())))) : (""));
                // line 670
                echo "</label>
    ";
            } else {
                // line 672
                echo "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 673
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 673, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo " ";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">";
                // line 674
                echo (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 674, $this->source); })());
                // line 675
                echo "<i class=\"md-checkbox-control\"></i>";
                // line 676
                echo (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 676, $this->source); })()) === false)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 676, $this->source); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 676, $this->source); })())) : ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 676, $this->source); })())))) : (""));
                // line 677
                echo "</label>
      </div>
    ";
            }
            // line 680
            echo "  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 683
    public function block_radio_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 684
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 684, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 684)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 684), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 684)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 684), "")) : (""))));
        // line 685
        if (twig_in_filter("radio-custom", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 685, $this->source); })()))) {
            // line 686
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 686, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 686)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 686), "")) : ("")) . " custom-control-input"))]);
            // line 687
            echo "<div class=\"custom-control custom-radio";
            echo ((twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 687, $this->source); })()))) ? (" custom-control-inline") : (""));
            echo "\">";
            // line 688
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 688, $this->source); })()), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 689
            echo "</div>";
        } else {
            // line 691
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 691, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 691)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 691), "")) : ("")) . " form-check-input"))]);
            // line 692
            echo "<div class=\"form-check form-check-radio form-radio";
            echo ((twig_in_filter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 692, $this->source); })()))) ? (" form-check-inline") : (""));
            echo "\">";
            // line 693
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 693, $this->source); })()), 'label', ["widget" =>             $this->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 694
            echo "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 698
    public function block_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 699
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 699, $this->source); })()), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 699)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 699), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 699)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", false, false, false, 699), "")) : (""))));
        // line 700
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 700, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 700)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 700), "")) : ("")) . " form-check-input"))]);
        // line 701
        echo "<div class=\"form-check form-check-radio form-checkbox";
        if (twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 701)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 701, $this->source); })()), "container_class", [], "any", false, false, false, 701), "html", null, true);
        }
        echo "\">";
        // line 702
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 702, $this->source); })()), 'label', ["widget" =>         $this->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 703
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 708
    public function block_form_errors($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 709
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 709) && (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 709, $this->source); })()), "fieldError", [], "array", false, false, false, 709) == true))) {
            // line 710
            echo "    ";
            $this->displayBlock("form_errors_field", $context, $blocks);
            echo "
  ";
        } else {
            // line 712
            echo "    ";
            $this->displayBlock("form_errors_other", $context, $blocks);
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 716
    public function block_form_errors_field($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        // line 717
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 717, $this->source); })())) > 0)) {
            // line 719
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 719, $this->source); })())) > 1)) {
                // line 721
                $context["popoverContainer"] = ("popover-error-container-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 721, $this->source); })()), "vars", [], "any", false, false, false, 721), "id", [], "any", false, false, false, 721));
                // line 722
                echo "      <div class=\"";
                echo twig_escape_filter($this->env, (isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 722, $this->source); })()), "html", null, true);
                echo "\"></div>

      ";
                // line 724
                ob_start();
                // line 725
                echo "        <div class=\"popover-error-list\">
          <ul>";
                // line 727
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 727, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 728
                    echo "<li class=\"text-danger\"> ";
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 729
$context["error"], "messagePluralization", [], "any", false, false, false, 729))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 730
$context["error"], "messageTemplate", [], "any", false, false, false, 730), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 730), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 731
$context["error"], "messageTemplate", [], "any", false, false, false, 731), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 731), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 731), "form_error"))), "html", null, true);
                    // line 732
                    echo "
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 735
                echo "          </ul>
        </div>
      ";
                $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 738
                echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 739
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 739, $this->source); })()), "vars", [], "any", false, false, false, 739), "id", [], "any", false, false, false, 739), "html", null, true);
                echo "\">
        ";
                // line 740
                echo twig_escape_filter($this->env, (isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 740, $this->source); })()), "html", null, true);
                echo "
      </template>

      ";
                // line 743
                ob_start();
                // line 744
                echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                // line 746
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 746, $this->source); })()), "vars", [], "any", false, false, false, 746), "id", [], "any", false, false, false, 746), "html", null, true);
                echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                // line 750
                echo twig_escape_filter($this->env, (isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 750, $this->source); })()), "html", null, true);
                echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                // line 752
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("%count% errors", twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 752, $this->source); })())), [], "Admin.Global"), "html", null, true);
                echo "</u>
        </span>
      ";
                $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 755
                echo "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 758
                echo twig_escape_filter($this->env, (isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 758, $this->source); })()), "html", null, true);
                echo "
        </div>
      </div>

      ";
            } else {
                // line 764
                echo "<div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        ";
                // line 768
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 768, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 769
                    echo "          <div class=\"text-danger\">
            <p> ";
                    // line 770
                    echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                     // line 771
$context["error"], "messagePluralization", [], "any", false, false, false, 771))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                     // line 772
$context["error"], "messageTemplate", [], "any", false, false, false, 772), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 772), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                     // line 773
$context["error"], "messageTemplate", [], "any", false, false, false, 773), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 773), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 773), "form_error"))), "html", null, true);
                    // line 774
                    echo "
            </p>
          </div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 778
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 783
    public function block_form_errors_other($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        // line 784
        echo "  ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 784, $this->source); })())) > 0)) {
            // line 785
            echo "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 790
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 790, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 791
                echo "            <p> ";
                echo twig_escape_filter($this->env, (((null === twig_get_attribute($this->env, $this->source,                 // line 792
$context["error"], "messagePluralization", [], "any", false, false, false, 792))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,                 // line 793
$context["error"], "messageTemplate", [], "any", false, false, false, 793), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 793), "form_error")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice(twig_get_attribute($this->env, $this->source,                 // line 794
$context["error"], "messageTemplate", [], "any", false, false, false, 794), twig_get_attribute($this->env, $this->source, $context["error"], "messagePluralization", [], "any", false, false, false, 794), twig_get_attribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 794), "form_error"))), "html", null, true);
                // line 795
                echo "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 798
            echo "</div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 805
    public function block_material_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        // line 806
        echo "  ";
        ob_start();
        // line 807
        echo "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
        // line 817
        if ((isset($context["isCheckSelectAll"]) || array_key_exists("isCheckSelectAll", $context) ? $context["isCheckSelectAll"] : (function () { throw new RuntimeError('Variable "isCheckSelectAll" does not exist.', 817, $this->source); })())) {
            // line 818
            echo "                    checked
                  ";
        }
        // line 820
        echo "                >
                <i class=\"md-checkbox-control\"></i>
                ";
        // line 822
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
        echo "
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 829
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 829, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 830
            echo "          <tr>
            <td>
              ";
            // line 832
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
            echo "
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 836
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_7_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 806
        echo twig_spaceless($___internal_parse_7_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 842
    public function block_material_multiple_choice_table_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        // line 843
        echo "  ";
        ob_start();
        // line 844
        echo "    <div class=\"choice-table";
        if ((isset($context["headers_fixed"]) || array_key_exists("headers_fixed", $context) ? $context["headers_fixed"] : (function () { throw new RuntimeError('Variable "headers_fixed" does not exist.', 844, $this->source); })())) {
            echo "-headers-fixed";
        }
        echo " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
        // line 848
        echo twig_escape_filter($this->env, (isset($context["table_label"]) || array_key_exists("table_label", $context) ? $context["table_label"] : (function () { throw new RuntimeError('Variable "table_label" does not exist.', 848, $this->source); })()), "html", null, true);
        echo "</th>
          ";
        // line 849
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 849, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
            // line 850
            echo "            <th class=\"text-center\">
              ";
            // line 851
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 851), "multiple", [], "any", false, false, false, 851) && !twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 851), "name", [], "any", false, false, false, 851), (isset($context["headers_to_disable"]) || array_key_exists("headers_to_disable", $context) ? $context["headers_to_disable"] : (function () { throw new RuntimeError('Variable "headers_to_disable" does not exist.', 851, $this->source); })())))) {
                // line 852
                echo "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                // line 854
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 854) + 1), "html", null, true);
                echo "\"
                   data-column-checked=\"false\"
                >
                  ";
                // line 857
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 857), "label", [], "any", false, false, false, 857), "html", null, true);
                echo "
                </a>
              ";
            } else {
                // line 860
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 860), "label", [], "any", false, false, false, 860), "html", null, true);
                echo "
              ";
            }
            // line 862
            echo "            </th>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 864
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 867
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 867, $this->source); })()));
        foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
            // line 868
            echo "          <tr>
            <td>
              ";
            // line 870
            echo twig_escape_filter($this->env, $context["choice_name"], "html", null, true);
            echo "
            </td>
            ";
            // line 872
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 872, $this->source); })()));
            foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                // line 873
                echo "              <td class=\"text-center\">
                ";
                // line 874
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 874), $context["child_choice_name"], [], "array", true, true, false, 874)) {
                    // line 875
                    echo "                  ";
                    $context["entry_index"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["child_choice_entry_index_mapping"]) || array_key_exists("child_choice_entry_index_mapping", $context) ? $context["child_choice_entry_index_mapping"] : (function () { throw new RuntimeError('Variable "child_choice_entry_index_mapping" does not exist.', 875, $this->source); })()), $context["choice_value"], [], "array", false, false, false, 875), $context["child_choice_name"], [], "array", false, false, false, 875);
                    // line 876
                    echo "
                  ";
                    // line 877
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 877), "multiple", [], "any", false, false, false, 877)) {
                        // line 878
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 878, $this->source); })()), [], "array", false, false, false, 878), 'widget', ["material_design" => true]);
                        echo "
                  ";
                    } else {
                        // line 880
                        echo "                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 880, $this->source); })()), [], "array", false, false, false, 880), 'widget');
                        echo "
                  ";
                    }
                    // line 882
                    echo "                ";
                } else {
                    // line 883
                    echo "                  --
                ";
                }
                // line 885
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child_choice_name'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 887
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['choice_name'], $context['choice_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 889
        echo "        </tbody>
      </table>
    </div>
  ";
        $___internal_parse_8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 843
        echo twig_spaceless($___internal_parse_8_);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 896
    public function block_translatable_fields_with_tabs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        // line 897
        echo "  <div class=\"translations tabbable\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 897, $this->source); })()), "vars", [], "any", false, false, false, 897), "id", [], "any", false, false, false, 897), "html", null, true);
        echo "\" tabindex=\"1\">
    ";
        // line 898
        if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 898, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 898, $this->source); })())) > 1))) {
            // line 899
            echo "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 900
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 900, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 901
                echo "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 902
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 902), "label", [], "any", false, false, false, 902), "html", null, true);
                echo "\" class=\"";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 902, $this->source); })()), "id_lang", [], "any", false, false, false, 902) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 902), "name", [], "any", false, false, false, 902))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 902), "id", [], "any", false, false, false, 902), "html", null, true);
                echo "\">
              ";
                // line 903
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 903), "label", [], "any", false, false, false, 903)), "html", null, true);
                echo "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 907
            echo "      </ul>
    ";
        }
        // line 909
        echo "
    <div class=\"translationsFields tab-content\">
      ";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 911, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 912
            echo "        <div data-locale=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 912), "label", [], "any", false, false, false, 912), "html", null, true);
            echo "\" class=\"translationsFields-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 912), "id", [], "any", false, false, false, 912), "html", null, true);
            echo " tab-pane translation-field ";
            if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 912, $this->source); })()) == false) && (twig_length_filter($this->env, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 912, $this->source); })())) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 912, $this->source); })()), "id_lang", [], "any", false, false, false, 912) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 912), "name", [], "any", false, false, false, 912))) {
                echo "show active";
            }
            echo " ";
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 912, $this->source); })()), "vars", [], "any", false, false, false, 912), "valid", [], "any", false, false, false, 912)) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 912), "label", [], "any", false, false, false, 912), "html", null, true);
            echo "\">
          ";
            // line 913
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 916
        echo "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 920
    public function block_translatable_fields_with_dropdown($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        // line 921
        $context["formClass"] = twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 921), "attr", [], "any", false, true, false, 921), "class", [], "any", true, true, false, 921)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 921), "attr", [], "any", false, true, false, 921), "class", [], "any", false, false, false, 921), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 922
        echo "    <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["formClass"]) || array_key_exists("formClass", $context) ? $context["formClass"] : (function () { throw new RuntimeError('Variable "formClass" does not exist.', 922, $this->source); })()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 922, $this->source); })()), "vars", [], "any", false, false, false, 922), "id", [], "any", false, false, false, 922), "html", null, true);
        echo "\" tabindex=\"1\">
      ";
        // line 923
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 923, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 924
            echo "        ";
            $context["classes"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 924), "attr", [], "any", false, true, false, 924), "class", [], "any", true, true, false, 924)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 924), "attr", [], "any", false, true, false, 924), "class", [], "any", false, false, false, 924), "")) : ("")) . " js-locale-input");
            // line 925
            echo "        ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 925, $this->source); })()) . " js-locale-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 925), "label", [], "any", false, false, false, 925));
            // line 926
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 926, $this->source); })()), "id_lang", [], "any", false, false, false, 926) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 926), "name", [], "any", false, false, false, 926))) {
                // line 927
                echo "          ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 927, $this->source); })()) . " d-none");
                // line 928
                echo "        ";
            }
            // line 929
            echo "        <div data-lang-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 929), "name", [], "any", false, false, false, 929), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 929, $this->source); })()), "html", null, true);
            echo "\" style=\"flex-grow: 1;\">
          ";
            // line 930
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            echo "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 933
        echo "      ";
        if ( !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 933, $this->source); })())) {
            // line 934
            echo "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 938
            if (array_key_exists("change_form_language_url", $context)) {
                // line 939
                echo "              data-change-language-url=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 939, $this->source); })()), "vars", [], "any", false, false, false, 939), "change_form_language_url", [], "any", false, false, false, 939), "html", null, true);
                echo "\"
            ";
            }
            // line 941
            echo "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 943
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 943, $this->source); })()), "vars", [], "any", false, false, false, 943), "id", [], "any", false, false, false, 943), "html", null, true);
            echo "_dropdown\"
          >
            ";
            // line 945
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 945, $this->source); })()), "vars", [], "any", false, false, false, 945), "default_locale", [], "any", false, false, false, 945), "iso_code", [], "any", false, false, false, 945), "html", null, true);
            echo "
          </button>
          <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"";
            // line 947
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 947, $this->source); })()), "vars", [], "any", false, false, false, 947), "id", [], "any", false, false, false, 947), "html", null, true);
            echo "_dropdown\">
            ";
            // line 948
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 948, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 949
                echo "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 949), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 949), "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 951
            echo "          </div>
        </div>
      ";
        }
        // line 954
        echo "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 957
    public function block_translatable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        // line 958
        if ((isset($context["use_tabs"]) || array_key_exists("use_tabs", $context) ? $context["use_tabs"] : (function () { throw new RuntimeError('Variable "use_tabs" does not exist.', 958, $this->source); })())) {
            // line 959
            echo "    ";
            $this->displayBlock("translatable_fields_with_tabs", $context, $blocks);
            echo "
  ";
        } else {
            // line 961
            echo "    ";
            $this->displayBlock("translatable_fields_with_dropdown", $context, $blocks);
            echo "
  ";
        }
        // line 963
        echo "  ";
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 966
    public function block_birthday_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        // line 967
        echo "  ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 967, $this->source); })()) == "single_text")) {
            // line 968
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 970
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 970, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 970)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 970), "")) : ("")) . " form-inline"))]);
            // line 971
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 971, $this->source); })()))) {
                // line 972
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 974
            echo "
    ";
            // line 975
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 975, $this->source); })()), "year", [], "any", false, false, false, 975), 'widget')) . "</div>");
            // line 976
            echo "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 976, $this->source); })()), "month", [], "any", false, false, false, 976), 'widget')) . "</div>");
            // line 977
            echo "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 977, $this->source); })()), "day", [], "any", false, false, false, 977), 'widget')) . "</div>");
            // line 979
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 979, $this->source); })()), ["{{ year }}" =>             // line 980
(isset($context["yearWidget"]) || array_key_exists("yearWidget", $context) ? $context["yearWidget"] : (function () { throw new RuntimeError('Variable "yearWidget" does not exist.', 980, $this->source); })()), "{{ month }}" =>             // line 981
(isset($context["monthWidget"]) || array_key_exists("monthWidget", $context) ? $context["monthWidget"] : (function () { throw new RuntimeError('Variable "monthWidget" does not exist.', 981, $this->source); })()), "{{ day }}" =>             // line 982
(isset($context["dayWidget"]) || array_key_exists("dayWidget", $context) ? $context["dayWidget"] : (function () { throw new RuntimeError('Variable "dayWidget" does not exist.', 982, $this->source); })())]);
            // line 985
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 985, $this->source); })()))) {
                // line 986
                echo "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 991
    public function block_file_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 992
        echo "  <style>
    .custom-file-label:after {
      content: \"";
        // line 994
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        echo "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 998
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 998, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 999
($context["attr"] ?? null), "class", [], "any", true, true, false, 999)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 999), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 1004
        if ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 1004) && twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1004, $this->source); })()), "disabled", [], "any", false, false, false, 1004))) {
            // line 1005
            echo "      ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1005, $this->source); })()), ["class" => (twig_get_attribute($this->env, $this->source,             // line 1006
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1006, $this->source); })()), "class", [], "any", false, false, false, 1006) . " disabled")]);
            // line 1008
            echo "    ";
        }
        // line 1009
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1011
        echo "<label class=\"custom-file-label\" for=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1011, $this->source); })()), "vars", [], "any", false, false, false, 1011), "id", [], "any", false, false, false, 1011), "html", null, true);
        echo "\">
      ";
        // line 1012
        $context["attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1012, $this->source); })()), "vars", [], "any", false, false, false, 1012), "attr", [], "any", false, false, false, 1012);
        // line 1013
        echo "      ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 1013)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 1013, $this->source); })()), "placeholder", [], "any", false, false, false, 1013)) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"))), "html", null, true);
        echo "
    </label>
  </div>";
        // line 1016
        $this->displayBlock("form_help", $context, $blocks);
        // line 1017
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1017, $this->source); })()), "vars", [], "any", false, false, false, 1017), "download_url", [], "any", false, false, false, 1017)) {
            // line 1018
            echo "    <a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1018, $this->source); })()), "vars", [], "any", false, false, false, 1018), "download_url", [], "any", false, false, false, 1018), "html", null, true);
            echo "\">
      ";
            // line 1019
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            echo "
    </a>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1024
    public function block_shop_restriction_checkbox_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        // line 1025
        echo "  ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1025, $this->source); })()), "vars", [], "any", false, false, false, 1025), "attr", [], "any", false, false, false, 1025), "is_allowed_to_display", [], "any", false, false, false, 1025)) {
            // line 1026
            echo "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1028
            $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1028, $this->source); })()), "checkbox")) : ("checkbox"));
            // line 1029
            echo "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1031
            echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1031, $this->source); })()), "html", null, true);
            echo "\"
          ";
            // line 1032
            $this->displayBlock("widget_attributes", $context, $blocks);
            echo "
          value=\"";
            // line 1033
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1033, $this->source); })()), "html", null, true);
            echo "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1041
    public function block_generatable_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        // line 1042
        echo "  <div class=\"input-group\">
    ";
        // line 1043
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1043, $this->source); })())) {
            // line 1044
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1046
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1048
        echo "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1051
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1051, $this->source); })()), "html", null, true);
        echo "\"
              data-generated-value-length=\"";
        // line 1052
        echo twig_escape_filter($this->env, (isset($context["generated_value_length"]) || array_key_exists("generated_value_length", $context) ? $context["generated_value_length"] : (function () { throw new RuntimeError('Variable "generated_value_length" does not exist.', 1052, $this->source); })()), "html", null, true);
        echo "\"
      >
        ";
        // line 1054
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        echo "
      </button>
   </span>
  </div>
  ";
        // line 1058
        $this->displayBlock("form_help", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1061
    public function block_text_with_recommended_length_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        // line 1062
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1062, $this->source); })()), ["data-recommended-length-counter" => (("#" .         // line 1063
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1063, $this->source); })())) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1067
        if (((isset($context["input_type"]) || array_key_exists("input_type", $context) ? $context["input_type"] : (function () { throw new RuntimeError('Variable "input_type" does not exist.', 1067, $this->source); })()) == "textarea")) {
            // line 1068
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1070
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        // line 1072
        echo "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1074
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1074, $this->source); })()), "html", null, true);
        echo "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1077
        echo twig_replace_filter($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . twig_length_filter($this->env,         // line 1078
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1078, $this->source); })()))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1080
(isset($context["recommended_length"]) || array_key_exists("recommended_length", $context) ? $context["recommended_length"] : (function () { throw new RuntimeError('Variable "recommended_length" does not exist.', 1080, $this->source); })())), "[/2]" => "</span>"]);
        // line 1082
        echo "
    </em>
  </small>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1087
    public function block_text_with_length_counter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        // line 1088
        echo "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1089
        $context["current_length"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1089, $this->source); })()), "vars", [], "any", false, false, false, 1089), "max_length", [], "any", false, false, false, 1089) - twig_length_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1089, $this->source); })())));
        // line 1090
        echo "
    ";
        // line 1091
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1091, $this->source); })()), "vars", [], "any", false, false, false, 1091), "position", [], "any", false, false, false, 1091) == "before")) {
            // line 1092
            echo "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1093
            echo twig_escape_filter($this->env, (isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1093, $this->source); })()), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1096
        echo "
    ";
        // line 1097
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1097, $this->source); })()), ["data-max-length" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1097, $this->source); })()), "vars", [], "any", false, false, false, 1097), "max_length", [], "any", false, false, false, 1097), "maxlength" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1097, $this->source); })()), "vars", [], "any", false, false, false, 1097), "max_length", [], "any", false, false, false, 1097), "class" => "js-countable-input"]);
        // line 1098
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1098, $this->source); })()), (isset($context["input_attr"]) || array_key_exists("input_attr", $context) ? $context["input_attr"] : (function () { throw new RuntimeError('Variable "input_attr" does not exist.', 1098, $this->source); })()));
        // line 1100
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1100, $this->source); })()), "vars", [], "any", false, false, false, 1100), "input", [], "any", false, false, false, 1100) == "input")) {
            // line 1101
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1102
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1102, $this->source); })()), "vars", [], "any", false, false, false, 1102), "input", [], "any", false, false, false, 1102) == "textarea")) {
            // line 1103
            $this->displayBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1105
            $this->displayBlock("form_widget", $context, $blocks);
        }
        // line 1107
        echo "
    ";
        // line 1108
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1108, $this->source); })()), "vars", [], "any", false, false, false, 1108), "position", [], "any", false, false, false, 1108) == "after")) {
            // line 1109
            echo "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1110
            echo twig_escape_filter($this->env, (isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1110, $this->source); })()), "html", null, true);
            echo "</span>
      </div>
    ";
        }
        // line 1113
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1116
    public function block_integer_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        // line 1117
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1117, $this->source); })()), "min_field", [], "array", false, false, false, 1117), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1118, $this->source); })()), "max_field", [], "array", false, false, false, 1118), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1121
    public function block_number_min_max_filter_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        // line 1122
        echo "  ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1122, $this->source); })()), "min_field", [], "array", false, false, false, 1122), 'widget', ["attr" => ["class" => "min-field"]]);
        echo "
  ";
        // line 1123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1123, $this->source); })()), "max_field", [], "array", false, false, false, 1123), 'widget', ["attr" => ["class" => "max-field"]]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1126
    public function block_number_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        // line 1127
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1127, $this->source); })()), "text")) : ("text"));
        // line 1128
        echo "<div class=\"input-group\">";
        // line 1129
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1130
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1131
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1132
        echo "</div>
  ";
        // line 1133
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1136
    public function block_integer_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 1137
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1137, $this->source); })()), "number")) : ("number"));
        // line 1138
        echo "<div class=\"input-group\">";
        // line 1139
        $this->displayBlock("form_unit_prepend", $context, $blocks);
        // line 1140
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1141
        $this->displayBlock("form_unit", $context, $blocks);
        // line 1142
        echo "</div>
  ";
        // line 1143
        $this->displayBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1146
    public function block_form_unit($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        // line 1147
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1147), "unit", [], "any", true, true, false, 1147) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1147, $this->source); })()), "vars", [], "any", false, false, false, 1147), "prepend_unit", [], "any", false, false, false, 1147))) {
            // line 1148
            echo "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1149, $this->source); })()), "vars", [], "any", false, false, false, 1149), "unit", [], "any", false, false, false, 1149), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1154
    public function block_form_unit_prepend($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        // line 1155
        echo "  ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1155), "unit", [], "any", true, true, false, 1155) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1155, $this->source); })()), "vars", [], "any", false, false, false, 1155), "prepend_unit", [], "any", false, false, false, 1155))) {
            // line 1156
            echo "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1157, $this->source); })()), "vars", [], "any", false, false, false, 1157), "unit", [], "any", false, false, false, 1157), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1162
    public function block_form_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 1163
        echo "  ";
        if ( !(null === (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1163, $this->source); })()))) {
            // line 1164
            echo "    <small class=\"form-text\">";
            echo (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1164, $this->source); })());
            echo "</small>
  ";
        }
        // line 1166
        echo "  ";
        if (array_key_exists("warning", $context)) {
            // line 1167
            echo "    ";
            echo twig_escape_filter($this->env, (isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 1167, $this->source); })()), "html", null, true);
            echo "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1171
    public function block_form_prepend_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        // line 1172
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1172, $this->source); })()), "position", [], "any", false, false, false, 1172) == "prepend"))) {
            // line 1173
            $this->displayBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1177
    public function block_form_append_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        // line 1178
        echo "  ";
        if ((array_key_exists("external_link", $context) && (twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1178, $this->source); })()), "position", [], "any", false, false, false, 1178) == "append"))) {
            // line 1179
            $this->displayBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1183
    public function block_form_external_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        // line 1184
        echo "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1185
            ob_start();
            // line 1186
            echo "<a ";
            $this->displayBlock("form_external_link_attributes", $context, $blocks);
            echo ">
        <i class=\"material-icons\">open_in_new</i>";
            $context["openingTag"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1190
            echo "<div class=\"small font-secondary";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1190, $this->source); })()), "align", [], "any", false, false, false, 1190) === "right")) {
                echo " text-right";
            }
            echo "\">
      ";
            // line 1191
            echo twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1191, $this->source); })()), "text", [], "any", false, false, false, 1191), ["[1]" => (isset($context["openingTag"]) || array_key_exists("openingTag", $context) ? $context["openingTag"] : (function () { throw new RuntimeError('Variable "openingTag" does not exist.', 1191, $this->source); })()), "[/1]" => "</a>"]);
            echo "
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1196
    public function block_form_external_link_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        // line 1197
        $context["external_link_attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1197, $this->source); })()), "attr", [], "any", false, false, false, 1197), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1197), "class", [], "any", true, true, false, 1197)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1197), "class", [], "any", false, false, false, 1197), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1198
        echo "
  ";
        // line 1199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1199, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1200
            echo "    ";
            if (!twig_in_filter($context["attrname"], [0 => "href", 1 => "class"])) {
                // line 1201
                echo "      ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"
    ";
            }
            // line 1203
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1204
        echo "
  target=\"_blank\"
  href=\"";
        // line 1206
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1206, $this->source); })()), "href", [], "any", false, false, false, 1206), "html", null, true);
        echo "\"
  class=\"";
        // line 1207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1207, $this->source); })()), "class", [], "any", false, false, false, 1207), "html", null, true);
        echo "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1210
    public function block_custom_content_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        // line 1211
        echo "  ";
        $this->loadTemplate((isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1211, $this->source); })()), "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 1211)->display(twig_array_merge($context, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1211, $this->source); })())));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1214
    public function block_text_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 1215
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1215, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1215, $this->source); })()), "vars", [], "any", false, false, false, 1215), "id", [], "any", false, false, false, 1215)], "Admin.Global")]);
        // line 1216
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1216, $this->source); })()))) {
            // line 1217
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1217, $this->source); })()), ["list" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1217, $this->source); })()) . "_datalist")]);
        }
        // line 1219
        echo "
  ";
        // line 1220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1220, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1220, $this->source); })())]);
        echo "

  ";
        // line 1222
        if ( !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1222, $this->source); })()))) {
            // line 1223
            echo "    <datalist id=\"";
            echo twig_escape_filter($this->env, ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1223, $this->source); })()) . "_datalist"), "html", null, true);
            echo "\">
      ";
            // line 1224
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1224, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1225
                echo "        <option value=\"";
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1227
            echo "    </datalist>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1231
    public function block_form_prepend_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        // line 1232
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1232, $this->source); })()) == "prepend"))) {
            // line 1233
            $this->displayBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1237
    public function block_form_append_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        // line 1238
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1238, $this->source); })()) == "append"))) {
            // line 1239
            $this->displayBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1243
    public function block_form_alert($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        // line 1244
        if (array_key_exists("alert_message", $context)) {
            // line 1245
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, (isset($context["alert_type"]) || array_key_exists("alert_type", $context) ? $context["alert_type"] : (function () { throw new RuntimeError('Variable "alert_type" does not exist.', 1245, $this->source); })()), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                echo " expandable-alert";
            }
            echo "\" role=\"alert\">
    ";
            // line 1246
            if (array_key_exists("alert_title", $context)) {
                // line 1247
                echo "      <p class=\"alert-text\">
        ";
                // line 1248
                echo (isset($context["alert_title"]) || array_key_exists("alert_title", $context) ? $context["alert_title"] : (function () { throw new RuntimeError('Variable "alert_title" does not exist.', 1248, $this->source); })());
                echo "
      </p>
    ";
            } else {
                // line 1251
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1251, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1252
                    echo "        <p class=\"alert-text\">
          ";
                    // line 1253
                    echo $context["message"];
                    echo "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1256
                echo "    ";
            }
            // line 1257
            echo "
    ";
            // line 1258
            if (array_key_exists("alert_title", $context)) {
                // line 1259
                echo "      <div class=\"alert-more collapse\" id=\"expandable_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1259, $this->source); })()), "vars", [], "any", false, false, false, 1259), "id", [], "any", false, false, false, 1259), "html", null, true);
                echo "\" style=\"\">
        ";
                // line 1260
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1260, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1261
                    echo "          <p>
            ";
                    // line 1262
                    echo $context["message"];
                    echo "
          </p>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1265
                echo "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1267
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1267, $this->source); })()), "vars", [], "any", false, false, false, 1267), "id", [], "any", false, false, false, 1267), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1268
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                echo "
          </button>
       </div>
    ";
            }
            // line 1272
            echo "  </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1276
    public function block_unavailable_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        // line 1277
        echo "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet", [], "Admin.Catalog.Feature"), "html", null, true);
        echo "
    </p>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1284
    public function block_text_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        // line 1285
        echo "  ";
        // line 1286
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1287
        echo "<span class=\"label ";
        echo twig_escape_filter($this->env, (isset($context["preview_class"]) || array_key_exists("preview_class", $context) ? $context["preview_class"] : (function () { throw new RuntimeError('Variable "preview_class" does not exist.', 1287, $this->source); })()), "html", null, true);
        echo "\">
    ";
        // line 1289
        echo "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1290
            echo "      ";
            echo (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 1290, $this->source); })());
            echo "
    ";
        }
        // line 1292
        echo "
    ";
        // line 1294
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1294, $this->source); })()), "html");
        echo "

    ";
        // line 1297
        echo "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1298
            echo "      ";
            echo (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 1298, $this->source); })());
            echo "
    ";
        }
        // line 1300
        echo "  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1303
    public function block_image_preview_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        // line 1304
        echo "  ";
        // line 1305
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1306
        echo "<img src=\"";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1306, $this->source); })()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_trim_filter(("Image preview for " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1306, $this->source); })()), "vars", [], "any", false, false, false, 1306), "name", [], "any", false, false, false, 1306))), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1306, $this->source); })()), "vars", [], "any", false, false, false, 1306), "image_class", [], "any", false, false, false, 1306), "html", null, true);
        echo "\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1309
    public function block_delta_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        // line 1310
        echo "  ";
        $context["quantity"] = ((twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1310)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", false, false, false, 1310), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1310, $this->source); })()), "quantity", [], "any", false, false, false, 1310), "vars", [], "any", false, false, false, 1310), "value", [], "any", false, false, false, 1310))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1310, $this->source); })()), "quantity", [], "any", false, false, false, 1310), "vars", [], "any", false, false, false, 1310), "value", [], "any", false, false, false, 1310)));
        // line 1311
        echo "  ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1311, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1311), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1311, $this->source); })())]);
        // line 1312
        echo "  <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 1313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1313, $this->source); })()), "quantity", [], "any", false, false, false, 1313), 'widget', ["value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1313, $this->source); })())]);
        echo "
    ";
        // line 1314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1314, $this->source); })()), "delta", [], "any", false, false, false, 1314), 'row');
        echo "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1318
    public function block_delta_quantity_quantity_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        // line 1319
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1319, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1319)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1319), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1320
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 1321
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 1322
        echo "<span class=\"initial-quantity\">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1322, $this->source); })()), "html", null, true);
        echo "</span>
    <span class=\"quantity-update\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1325
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1325, $this->source); })()), "html", null, true);
        echo "</span>
    </span>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1330
    public function block_delta_quantity_delta_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        // line 1331
        echo "  <div class=\"form-group";
        $this->displayBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1331, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 1331, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 1331, $this->source); })()))) {
            echo " has-error";
        }
        if (twig_get_attribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1331)) {
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 1331, $this->source); })()), "class", [], "any", false, false, false, 1331), "html", null, true);
        }
        echo "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1333, $this->source); })()), 'label');
        // line 1334
        $this->displayBlock("form_prepend_alert", $context, $blocks);
        // line 1335
        $this->displayBlock("form_prepend_external_link", $context, $blocks);
        // line 1337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1337, $this->source); })()), 'widget');
        // line 1339
        $this->displayBlock("form_append_alert", $context, $blocks);
        // line 1340
        $this->displayBlock("form_append_external_link", $context, $blocks);
        // line 1341
        echo "</div>";
        // line 1342
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1342, $this->source); })()), 'errors');
        // line 1343
        $this->displayBlock("form_modify_all_shops", $context, $blocks);
        // line 1344
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1347
    public function block_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        // line 1348
        $context["type"] = "number";
        // line 1349
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1349, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1349)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1349), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1350
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1353
    public function block_submittable_input_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        // line 1354
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1354, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1354)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1354), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1355
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1356
        $context["typeAttr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1356, $this->source); })()), "vars", [], "any", false, false, false, 1356), "type_attr", [], "any", false, false, false, 1356), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1357
($context["form"] ?? null), "vars", [], "any", false, true, false, 1357), "type_attr", [], "any", false, true, false, 1357), "class", [], "any", true, true, false, 1357)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1357), "type_attr", [], "any", false, true, false, 1357), "class", [], "any", false, false, false, 1357), "")) : ("")) . " submittable-input")), "data-initial-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1358
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1358, $this->source); })()), "value", [], "any", false, false, false, 1358), "vars", [], "any", false, false, false, 1358), "value", [], "any", false, false, false, 1358), "value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1359
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1359, $this->source); })()), "value", [], "any", false, false, false, 1359), "vars", [], "any", false, false, false, 1359), "value", [], "any", false, false, false, 1359)]);
        // line 1362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1362, $this->source); })()), "value", [], "any", false, false, false, 1362), 'widget', ["attr" => (isset($context["typeAttr"]) || array_key_exists("typeAttr", $context) ? $context["typeAttr"] : (function () { throw new RuntimeError('Variable "typeAttr" does not exist.', 1362, $this->source); })())]);
        // line 1363
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1364
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1367
    public function block_submittable_input_button_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        // line 1368
        echo "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1373
    public function block_submittable_delta_quantity_delta_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        // line 1374
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1374, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1374)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1374), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1375
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        // line 1376
        $context["attr"] = twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1376, $this->source); })()), "vars", [], "any", false, false, false, 1376), "attr", [], "any", false, false, false, 1376), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 1377
($context["form"] ?? null), "vars", [], "any", false, true, false, 1377), "attr", [], "any", false, true, false, 1377), "class", [], "any", true, true, false, 1377)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1377), "attr", [], "any", false, true, false, 1377), "class", [], "any", false, false, false, 1377), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1378
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1378, $this->source); })()), "value" =>         // line 1379
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1379, $this->source); })())]);
        // line 1382
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1382, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1382, $this->source); })())]);
        // line 1383
        $this->displayBlock("submittable_input_button_widget", $context, $blocks);
        // line 1384
        echo "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1387
    public function block_navigation_tab_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        // line 1388
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1388, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1388)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1388), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1389
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
  <div id=\"";
        // line 1390
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1390, $this->source); })()), "vars", [], "any", false, false, false, 1390), "id", [], "any", false, false, false, 1390), "html", null, true);
        echo "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1396
        $context["firstRenderedChild"] = true;
        // line 1397
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1397, $this->source); })()), "children", [], "any", false, false, false, 1397));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1398
            echo "      ";
            if ((( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1398) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1398), "name", [], "any", false, false, false, 1398) != "_toolbar_buttons")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1398), "name", [], "any", false, false, false, 1398) != "_token"))) {
                // line 1399
                echo "      <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1399), "id", [], "any", false, false, false, 1399), "html", null, true);
                echo "-tab-nav\" class=\"nav-item";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1399), "valid", [], "any", false, false, false, 1399)) {
                    echo " has-error";
                }
                echo "\">
        <a href=\"#";
                // line 1400
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1400), "id", [], "any", false, false, false, 1400), "html", null, true);
                echo "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if ((isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1400, $this->source); })())) {
                    echo " active";
                }
                echo "\">
          ";
                // line 1401
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1401), "label", [], "any", false, false, false, 1401), "html", null, true);
                echo "
        </a>
      </li>
      ";
                // line 1404
                $context["firstRenderedChild"] = false;
                // line 1405
                echo "      ";
            }
            // line 1406
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1407
        echo "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1413
        if (twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1413, $this->source); })()), "offsetExists", [0 => "_toolbar_buttons"], "method", false, false, false, 1413)) {
            // line 1414
            echo "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1415, $this->source); })()), "_toolbar_buttons", [], "any", false, false, false, 1415), 'widget');
            echo "
    </div>
    ";
        }
        // line 1418
        echo "  </div>

  <div id=\"";
        // line 1420
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1420, $this->source); })()), "vars", [], "any", false, false, false, 1420), "id", [], "any", false, false, false, 1420), "html", null, true);
        echo "-tabs-content\" class=\"tab-content\">
    ";
        // line 1421
        $context["firstRenderedChild"] = true;
        // line 1422
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1422, $this->source); })()), "children", [], "any", false, false, false, 1422));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1423
            echo "      ";
            if (( !twig_get_attribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1423) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1423), "name", [], "any", false, false, false, 1423) != "_token"))) {
                // line 1424
                echo "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if ((isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1424, $this->source); })())) {
                    echo " active";
                }
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1424), "id", [], "any", false, false, false, 1424), "html", null, true);
                echo "-tab\">
        ";
                // line 1425
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1425), "label_tab", [], "any", true, true, false, 1425)) {
                    // line 1426
                    echo "          ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', (twig_test_empty($_label_ = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1426), "label_tab", [], "any", false, false, false, 1426)) ? [] : ["label" => $_label_]));
                    echo "
        ";
                }
                // line 1428
                echo "        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                echo "
        ";
                // line 1429
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
      </div>
      ";
                // line 1431
                $context["firstRenderedChild"] = false;
                // line 1432
                echo "      ";
            }
            // line 1433
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1434
        echo "  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1438
    public function block_accordion_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        // line 1439
        echo "<div class=\"accordion accordion-form\" id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1439, $this->source); })()), "vars", [], "any", false, false, false, 1439), "id", [], "any", false, false, false, 1439), "html", null, true);
        echo "\">
    ";
        // line 1440
        $context["firstChild"] = true;
        // line 1441
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1441, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1442
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1442), "compound", [], "any", false, false, false, 1442)) {
                // line 1443
                echo "      ";
                $context["hasError"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1443), "valid", [], "any", false, false, false, 1443) != true);
                // line 1444
                echo "      ";
                $context["isExpanded"] = (((isset($context["firstChild"]) || array_key_exists("firstChild", $context) ? $context["firstChild"] : (function () { throw new RuntimeError('Variable "firstChild" does not exist.', 1444, $this->source); })()) && (isset($context["expand_first"]) || array_key_exists("expand_first", $context) ? $context["expand_first"] : (function () { throw new RuntimeError('Variable "expand_first" does not exist.', 1444, $this->source); })())) || ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1444, $this->source); })()) && (isset($context["expand_on_error"]) || array_key_exists("expand_on_error", $context) ? $context["expand_on_error"] : (function () { throw new RuntimeError('Variable "expand_on_error" does not exist.', 1444, $this->source); })())));
                // line 1445
                echo "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1446
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1446), "id", [], "any", false, false, false, 1446), "html", null, true);
                echo "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1449
                if ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1449, $this->source); })())) {
                    echo " has-error ";
                }
                echo " btn btn-block text-left";
                if ( !(isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1449, $this->source); })())) {
                    echo " collapsed";
                }
                echo "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1452
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1452), "id", [], "any", false, false, false, 1452), "html", null, true);
                echo "_accordion\"
              aria-expanded=\"";
                // line 1453
                if ((isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1453, $this->source); })())) {
                    echo "true";
                } else {
                    echo "false";
                }
                echo "\"
              aria-controls=\"";
                // line 1454
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1454), "id", [], "any", false, false, false, 1454), "html", null, true);
                echo "_accordion\">
              ";
                // line 1455
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1455), "label", [], "any", false, false, false, 1455), "html", null, true);
                echo "
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1461
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
                echo "_accordion\" class=\"collapse";
                if ((isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1461, $this->source); })())) {
                    echo " show";
                }
                echo "\" aria-labelledby=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
                echo "_accordion_header\" ";
                if ((isset($context["display_one"]) || array_key_exists("display_one", $context) ? $context["display_one"] : (function () { throw new RuntimeError('Variable "display_one" does not exist.', 1461, $this->source); })())) {
                    echo "data-parent=\"#";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1461, $this->source); })()), "vars", [], "any", false, false, false, 1461), "id", [], "any", false, false, false, 1461), "html", null, true);
                    echo "\"";
                }
                echo ">
          <div class=\"card-body\">
            ";
                // line 1463
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1464
                echo "            ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new RuntimeError('Variable "childAttr" does not exist.', 1464, $this->source); })())]);
                echo "
            ";
                // line 1465
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                echo "
          </div>
        </div>
      </div>
      ";
                // line 1469
                $context["firstChild"] = false;
                // line 1470
                echo "      ";
            }
            // line 1471
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1472
        echo "
    ";
        // line 1474
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1474, $this->source); })()), 'rest');
        echo "
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1478
    public function block_button_collection_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        // line 1479
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1479, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source,         // line 1480
($context["attr"] ?? null), "class", [], "any", true, true, false, 1480)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1480), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1482
(isset($context["justify_content"]) || array_key_exists("justify_content", $context) ? $context["justify_content"] : (function () { throw new RuntimeError('Variable "justify_content" does not exist.', 1482, $this->source); })()))]);
        // line 1484
        echo "<div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1485
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["button_groups"]) || array_key_exists("button_groups", $context) ? $context["button_groups"] : (function () { throw new RuntimeError('Variable "button_groups" does not exist.', 1485, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1486
            echo "      <div class=\"btn-group group-";
            echo twig_escape_filter($this->env, $context["group"], "html", null, true);
            echo "\">
        ";
            // line 1487
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["buttons"]);
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1488
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1488, $this->source); })()), $context["button"], [], "any", false, false, false, 1488), 'widget');
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1490
            echo "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['buttons'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1492
        echo "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1495
    public function block_price_reduction_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        // line 1496
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1496, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1496)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 1496), "")) : ("")) . " reduction-widget row"))]);
        // line 1497
        echo "  <div ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">
    ";
        // line 1498
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1498, $this->source); })()), "children", [], "any", false, false, false, 1498));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1499
            echo "      ";
            $__internal_compile_0 = $context;
            $__internal_compile_1 = ["row_attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1499), "row_attr", [], "any", false, false, false, 1499), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1499), "row_attr", [], "any", false, true, false, 1499), "class", [], "any", true, true, false, 1499)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1499), "row_attr", [], "any", false, true, false, 1499), "class", [], "any", false, false, false, 1499), "")) : ("")) . " col col-md-3"))])];
            if (!twig_test_iterable($__internal_compile_1)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 1499, $this->getSourceContext());
            }
            $__internal_compile_1 = twig_to_array($__internal_compile_1);
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_compile_1));
            // line 1500
            echo "      <div ";
            $this->displayBlock("row_attributes", $context, $blocks);
            echo ">
      ";
            $context = $__internal_compile_0;
            // line 1502
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
            // line 1503
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            echo "
      </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1506
        echo "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  5226 => 1506,  5209 => 1503,  5204 => 1502,  5198 => 1500,  5189 => 1499,  5172 => 1498,  5167 => 1497,  5165 => 1496,  5155 => 1495,  5144 => 1492,  5137 => 1490,  5131 => 1488,  5127 => 1487,  5122 => 1486,  5118 => 1485,  5113 => 1484,  5111 => 1482,  5110 => 1480,  5109 => 1479,  5099 => 1478,  5086 => 1474,  5083 => 1472,  5077 => 1471,  5074 => 1470,  5072 => 1469,  5065 => 1465,  5060 => 1464,  5058 => 1463,  5041 => 1461,  5032 => 1455,  5028 => 1454,  5020 => 1453,  5016 => 1452,  5004 => 1449,  4998 => 1446,  4995 => 1445,  4992 => 1444,  4989 => 1443,  4986 => 1442,  4981 => 1441,  4979 => 1440,  4974 => 1439,  4964 => 1438,  4952 => 1434,  4946 => 1433,  4943 => 1432,  4941 => 1431,  4936 => 1429,  4931 => 1428,  4925 => 1426,  4923 => 1425,  4914 => 1424,  4911 => 1423,  4906 => 1422,  4904 => 1421,  4900 => 1420,  4896 => 1418,  4890 => 1415,  4887 => 1414,  4885 => 1413,  4877 => 1407,  4871 => 1406,  4868 => 1405,  4866 => 1404,  4860 => 1401,  4852 => 1400,  4843 => 1399,  4840 => 1398,  4835 => 1397,  4833 => 1396,  4824 => 1390,  4819 => 1389,  4817 => 1388,  4807 => 1387,  4796 => 1384,  4794 => 1383,  4792 => 1382,  4790 => 1379,  4789 => 1378,  4788 => 1377,  4787 => 1376,  4783 => 1375,  4781 => 1374,  4771 => 1373,  4758 => 1368,  4748 => 1367,  4737 => 1364,  4735 => 1363,  4733 => 1362,  4731 => 1359,  4730 => 1358,  4729 => 1357,  4728 => 1356,  4724 => 1355,  4722 => 1354,  4712 => 1353,  4702 => 1350,  4700 => 1349,  4698 => 1348,  4688 => 1347,  4677 => 1344,  4675 => 1343,  4673 => 1342,  4671 => 1341,  4669 => 1340,  4667 => 1339,  4665 => 1337,  4663 => 1335,  4661 => 1334,  4659 => 1333,  4647 => 1331,  4637 => 1330,  4623 => 1325,  4616 => 1322,  4614 => 1321,  4610 => 1320,  4608 => 1319,  4598 => 1318,  4585 => 1314,  4581 => 1313,  4576 => 1312,  4573 => 1311,  4570 => 1310,  4560 => 1309,  4543 => 1306,  4541 => 1305,  4539 => 1304,  4529 => 1303,  4518 => 1300,  4512 => 1298,  4509 => 1297,  4503 => 1294,  4500 => 1292,  4494 => 1290,  4491 => 1289,  4486 => 1287,  4484 => 1286,  4482 => 1285,  4472 => 1284,  4458 => 1279,  4454 => 1277,  4444 => 1276,  4432 => 1272,  4425 => 1268,  4421 => 1267,  4417 => 1265,  4408 => 1262,  4405 => 1261,  4401 => 1260,  4396 => 1259,  4394 => 1258,  4391 => 1257,  4388 => 1256,  4379 => 1253,  4376 => 1252,  4371 => 1251,  4365 => 1248,  4362 => 1247,  4360 => 1246,  4352 => 1245,  4350 => 1244,  4340 => 1243,  4329 => 1239,  4327 => 1238,  4317 => 1237,  4306 => 1233,  4304 => 1232,  4294 => 1231,  4282 => 1227,  4273 => 1225,  4269 => 1224,  4264 => 1223,  4262 => 1222,  4257 => 1220,  4254 => 1219,  4251 => 1217,  4249 => 1216,  4247 => 1215,  4237 => 1214,  4226 => 1211,  4216 => 1210,  4205 => 1207,  4201 => 1206,  4197 => 1204,  4191 => 1203,  4183 => 1201,  4180 => 1200,  4176 => 1199,  4173 => 1198,  4171 => 1197,  4161 => 1196,  4147 => 1191,  4140 => 1190,  4134 => 1186,  4132 => 1185,  4129 => 1184,  4119 => 1183,  4108 => 1179,  4105 => 1178,  4095 => 1177,  4084 => 1173,  4081 => 1172,  4071 => 1171,  4057 => 1167,  4054 => 1166,  4048 => 1164,  4045 => 1163,  4035 => 1162,  4021 => 1157,  4018 => 1156,  4015 => 1155,  4005 => 1154,  3991 => 1149,  3988 => 1148,  3985 => 1147,  3975 => 1146,  3965 => 1143,  3962 => 1142,  3960 => 1141,  3958 => 1140,  3956 => 1139,  3954 => 1138,  3952 => 1137,  3942 => 1136,  3932 => 1133,  3929 => 1132,  3927 => 1131,  3925 => 1130,  3923 => 1129,  3921 => 1128,  3919 => 1127,  3909 => 1126,  3897 => 1123,  3892 => 1122,  3882 => 1121,  3870 => 1118,  3865 => 1117,  3855 => 1116,  3844 => 1113,  3838 => 1110,  3835 => 1109,  3833 => 1108,  3830 => 1107,  3827 => 1105,  3824 => 1103,  3822 => 1102,  3820 => 1101,  3818 => 1100,  3816 => 1098,  3814 => 1097,  3811 => 1096,  3805 => 1093,  3802 => 1092,  3800 => 1091,  3797 => 1090,  3795 => 1089,  3792 => 1088,  3782 => 1087,  3769 => 1082,  3767 => 1080,  3766 => 1078,  3765 => 1077,  3759 => 1074,  3755 => 1072,  3752 => 1070,  3749 => 1068,  3747 => 1067,  3745 => 1063,  3743 => 1062,  3733 => 1061,  3721 => 1058,  3714 => 1054,  3709 => 1052,  3705 => 1051,  3700 => 1048,  3697 => 1046,  3694 => 1044,  3692 => 1043,  3689 => 1042,  3679 => 1041,  3662 => 1033,  3658 => 1032,  3654 => 1031,  3650 => 1029,  3648 => 1028,  3644 => 1026,  3641 => 1025,  3631 => 1024,  3617 => 1019,  3612 => 1018,  3610 => 1017,  3608 => 1016,  3602 => 1013,  3600 => 1012,  3595 => 1011,  3593 => 1009,  3590 => 1008,  3588 => 1006,  3586 => 1005,  3584 => 1004,  3582 => 999,  3581 => 998,  3574 => 994,  3570 => 992,  3560 => 991,  3548 => 986,  3546 => 985,  3544 => 982,  3543 => 981,  3542 => 980,  3541 => 979,  3538 => 977,  3535 => 976,  3533 => 975,  3530 => 974,  3525 => 972,  3523 => 971,  3521 => 970,  3518 => 968,  3515 => 967,  3505 => 966,  3494 => 963,  3488 => 961,  3482 => 959,  3480 => 958,  3470 => 957,  3460 => 954,  3455 => 951,  3444 => 949,  3440 => 948,  3436 => 947,  3431 => 945,  3426 => 943,  3422 => 941,  3416 => 939,  3414 => 938,  3408 => 934,  3405 => 933,  3396 => 930,  3389 => 929,  3386 => 928,  3383 => 927,  3380 => 926,  3377 => 925,  3374 => 924,  3370 => 923,  3363 => 922,  3361 => 921,  3351 => 920,  3339 => 916,  3330 => 913,  3309 => 912,  3305 => 911,  3301 => 909,  3297 => 907,  3287 => 903,  3277 => 902,  3274 => 901,  3270 => 900,  3267 => 899,  3265 => 898,  3260 => 897,  3250 => 896,  3240 => 843,  3234 => 889,  3227 => 887,  3220 => 885,  3216 => 883,  3213 => 882,  3207 => 880,  3201 => 878,  3199 => 877,  3196 => 876,  3193 => 875,  3191 => 874,  3188 => 873,  3184 => 872,  3179 => 870,  3175 => 868,  3171 => 867,  3166 => 864,  3151 => 862,  3145 => 860,  3139 => 857,  3133 => 854,  3129 => 852,  3127 => 851,  3124 => 850,  3107 => 849,  3103 => 848,  3093 => 844,  3090 => 843,  3080 => 842,  3070 => 806,  3064 => 836,  3054 => 832,  3050 => 830,  3046 => 829,  3036 => 822,  3032 => 820,  3028 => 818,  3026 => 817,  3014 => 807,  3011 => 806,  3001 => 805,  2988 => 798,  2981 => 795,  2979 => 794,  2978 => 793,  2977 => 792,  2975 => 791,  2971 => 790,  2964 => 785,  2961 => 784,  2951 => 783,  2939 => 778,  2931 => 774,  2929 => 773,  2928 => 772,  2927 => 771,  2926 => 770,  2923 => 769,  2919 => 768,  2913 => 764,  2905 => 758,  2900 => 755,  2894 => 752,  2889 => 750,  2882 => 746,  2878 => 744,  2876 => 743,  2870 => 740,  2866 => 739,  2863 => 738,  2858 => 735,  2850 => 732,  2848 => 731,  2847 => 730,  2846 => 729,  2844 => 728,  2840 => 727,  2837 => 725,  2835 => 724,  2829 => 722,  2827 => 721,  2825 => 719,  2822 => 717,  2812 => 716,  2798 => 712,  2792 => 710,  2790 => 709,  2780 => 708,  2770 => 703,  2768 => 702,  2761 => 701,  2759 => 700,  2757 => 699,  2747 => 698,  2736 => 694,  2734 => 693,  2730 => 692,  2728 => 691,  2725 => 689,  2723 => 688,  2719 => 687,  2717 => 686,  2715 => 685,  2713 => 684,  2703 => 683,  2692 => 680,  2687 => 677,  2685 => 676,  2683 => 675,  2681 => 674,  2667 => 673,  2664 => 672,  2660 => 670,  2658 => 669,  2656 => 667,  2654 => 665,  2639 => 664,  2637 => 663,  2634 => 662,  2631 => 661,  2628 => 660,  2625 => 659,  2622 => 658,  2619 => 657,  2616 => 656,  2613 => 655,  2610 => 654,  2607 => 653,  2604 => 652,  2602 => 651,  2592 => 650,  2582 => 647,  2572 => 646,  2562 => 643,  2552 => 642,  2542 => 639,  2540 => 638,  2530 => 636,  2515 => 627,  2498 => 624,  2494 => 623,  2490 => 622,  2487 => 621,  2470 => 620,  2464 => 616,  2460 => 615,  2456 => 614,  2448 => 609,  2442 => 606,  2437 => 605,  2427 => 604,  2410 => 600,  2408 => 599,  2404 => 598,  2402 => 597,  2392 => 596,  2382 => 593,  2380 => 573,  2374 => 589,  2360 => 588,  2352 => 587,  2348 => 585,  2343 => 584,  2339 => 583,  2335 => 582,  2331 => 581,  2327 => 580,  2322 => 579,  2319 => 578,  2302 => 577,  2298 => 576,  2278 => 575,  2275 => 574,  2272 => 573,  2262 => 572,  2252 => 547,  2249 => 569,  2242 => 565,  2236 => 562,  2232 => 561,  2227 => 559,  2223 => 557,  2221 => 556,  2216 => 554,  2210 => 551,  2206 => 550,  2202 => 548,  2199 => 547,  2189 => 546,  2179 => 530,  2174 => 541,  2169 => 539,  2164 => 538,  2162 => 537,  2158 => 536,  2152 => 533,  2148 => 531,  2145 => 530,  2135 => 529,  2125 => 515,  2120 => 525,  2102 => 518,  2099 => 517,  2096 => 516,  2093 => 515,  2083 => 514,  2073 => 511,  2068 => 508,  2059 => 505,  2054 => 503,  2051 => 502,  2047 => 501,  2043 => 500,  2037 => 497,  2032 => 495,  2024 => 489,  2022 => 488,  2019 => 487,  2010 => 484,  2006 => 483,  2003 => 482,  2000 => 481,  1997 => 480,  1995 => 479,  1992 => 478,  1989 => 477,  1986 => 476,  1982 => 475,  1977 => 473,  1967 => 472,  1957 => 469,  1952 => 466,  1941 => 464,  1937 => 463,  1933 => 462,  1927 => 459,  1922 => 457,  1914 => 451,  1912 => 450,  1909 => 449,  1893 => 447,  1891 => 446,  1888 => 444,  1885 => 443,  1883 => 442,  1880 => 441,  1877 => 440,  1874 => 439,  1857 => 438,  1852 => 436,  1842 => 435,  1832 => 432,  1829 => 430,  1827 => 429,  1817 => 428,  1805 => 424,  1796 => 421,  1792 => 420,  1771 => 419,  1767 => 418,  1763 => 416,  1759 => 414,  1749 => 410,  1739 => 409,  1736 => 408,  1732 => 407,  1729 => 406,  1727 => 405,  1723 => 404,  1718 => 403,  1708 => 402,  1698 => 399,  1694 => 397,  1677 => 395,  1674 => 394,  1657 => 393,  1654 => 392,  1651 => 391,  1647 => 388,  1641 => 386,  1639 => 385,  1635 => 384,  1627 => 383,  1623 => 381,  1619 => 378,  1613 => 376,  1610 => 375,  1605 => 373,  1600 => 371,  1598 => 370,  1590 => 369,  1586 => 367,  1583 => 366,  1581 => 365,  1578 => 364,  1568 => 363,  1557 => 359,  1540 => 357,  1523 => 356,  1520 => 355,  1514 => 353,  1504 => 352,  1493 => 348,  1487 => 345,  1486 => 344,  1485 => 343,  1484 => 342,  1480 => 341,  1476 => 340,  1473 => 338,  1467 => 335,  1466 => 334,  1465 => 333,  1464 => 332,  1460 => 331,  1458 => 330,  1456 => 329,  1446 => 328,  1436 => 325,  1434 => 324,  1424 => 323,  1412 => 320,  1410 => 319,  1400 => 318,  1389 => 315,  1385 => 314,  1381 => 313,  1375 => 312,  1372 => 311,  1369 => 310,  1366 => 309,  1363 => 308,  1360 => 307,  1357 => 306,  1354 => 305,  1351 => 304,  1349 => 303,  1346 => 302,  1343 => 301,  1341 => 300,  1331 => 299,  1321 => 296,  1319 => 295,  1309 => 294,  1299 => 291,  1295 => 290,  1293 => 289,  1283 => 288,  1271 => 283,  1268 => 282,  1260 => 281,  1255 => 279,  1253 => 278,  1251 => 277,  1248 => 275,  1246 => 274,  1236 => 273,  1224 => 268,  1222 => 267,  1220 => 265,  1219 => 264,  1218 => 263,  1217 => 262,  1212 => 260,  1210 => 259,  1208 => 258,  1205 => 256,  1203 => 255,  1193 => 254,  1183 => 251,  1179 => 250,  1177 => 249,  1167 => 248,  1156 => 244,  1154 => 243,  1152 => 242,  1150 => 241,  1148 => 240,  1144 => 239,  1142 => 238,  1139 => 236,  1137 => 235,  1127 => 234,  1114 => 228,  1112 => 227,  1110 => 226,  1100 => 225,  1090 => 222,  1086 => 220,  1080 => 217,  1077 => 216,  1075 => 215,  1073 => 214,  1067 => 211,  1064 => 210,  1061 => 209,  1059 => 208,  1056 => 207,  1046 => 206,  1035 => 203,  1033 => 202,  1031 => 201,  1029 => 200,  1019 => 199,  1005 => 193,  1003 => 192,  998 => 190,  996 => 189,  993 => 188,  990 => 187,  987 => 186,  984 => 185,  982 => 184,  979 => 183,  974 => 181,  969 => 180,  966 => 179,  964 => 178,  959 => 177,  955 => 175,  953 => 174,  936 => 173,  934 => 172,  930 => 168,  927 => 165,  926 => 164,  925 => 163,  923 => 162,  920 => 161,  917 => 159,  914 => 158,  911 => 156,  909 => 155,  907 => 154,  897 => 153,  886 => 133,  880 => 146,  877 => 145,  874 => 144,  871 => 143,  868 => 142,  865 => 141,  862 => 140,  859 => 139,  856 => 138,  853 => 137,  850 => 136,  848 => 135,  845 => 134,  842 => 133,  840 => 132,  830 => 131,  817 => 127,  812 => 126,  809 => 125,  806 => 124,  796 => 123,  783 => 119,  778 => 118,  775 => 117,  772 => 116,  762 => 115,  750 => 107,  748 => 106,  744 => 104,  742 => 103,  740 => 102,  738 => 100,  736 => 99,  734 => 98,  732 => 96,  730 => 95,  728 => 94,  717 => 93,  707 => 92,  695 => 87,  689 => 84,  684 => 83,  682 => 82,  680 => 81,  670 => 80,  660 => 77,  656 => 76,  646 => 75,  636 => 72,  633 => 71,  630 => 70,  627 => 69,  625 => 68,  615 => 67,  602 => 64,  599 => 63,  596 => 62,  593 => 61,  590 => 60,  587 => 59,  584 => 58,  574 => 57,  564 => 1495,  562 => 1478,  560 => 1438,  558 => 1387,  556 => 1373,  553 => 1372,  551 => 1367,  548 => 1366,  546 => 1353,  543 => 1352,  541 => 1347,  538 => 1346,  536 => 1330,  533 => 1329,  531 => 1318,  528 => 1317,  526 => 1309,  523 => 1308,  521 => 1303,  518 => 1302,  516 => 1284,  513 => 1283,  511 => 1276,  509 => 1243,  507 => 1237,  505 => 1231,  503 => 1214,  500 => 1213,  498 => 1210,  496 => 1196,  494 => 1183,  491 => 1182,  489 => 1177,  486 => 1176,  484 => 1171,  481 => 1170,  479 => 1162,  476 => 1161,  474 => 1154,  471 => 1153,  469 => 1146,  467 => 1136,  465 => 1126,  463 => 1121,  460 => 1120,  458 => 1116,  455 => 1115,  453 => 1087,  450 => 1086,  448 => 1061,  445 => 1060,  443 => 1041,  440 => 1040,  438 => 1024,  435 => 1023,  433 => 991,  430 => 990,  428 => 966,  425 => 965,  423 => 957,  420 => 956,  418 => 920,  415 => 919,  413 => 896,  410 => 894,  408 => 842,  405 => 841,  403 => 805,  400 => 804,  397 => 802,  395 => 783,  392 => 782,  390 => 716,  387 => 715,  385 => 708,  382 => 707,  379 => 705,  377 => 698,  374 => 697,  372 => 683,  369 => 682,  367 => 650,  364 => 649,  362 => 646,  359 => 645,  357 => 642,  354 => 641,  352 => 636,  349 => 635,  346 => 633,  344 => 604,  342 => 596,  340 => 572,  337 => 571,  335 => 546,  332 => 545,  330 => 529,  327 => 528,  325 => 514,  322 => 513,  320 => 472,  317 => 471,  315 => 435,  312 => 434,  310 => 428,  307 => 427,  305 => 402,  302 => 401,  300 => 363,  297 => 362,  295 => 352,  292 => 351,  290 => 328,  287 => 327,  285 => 323,  282 => 322,  280 => 318,  277 => 317,  275 => 299,  272 => 298,  270 => 294,  268 => 288,  266 => 273,  263 => 272,  261 => 254,  259 => 248,  257 => 234,  254 => 233,  252 => 225,  249 => 224,  247 => 206,  244 => 205,  242 => 199,  239 => 198,  237 => 153,  234 => 150,  232 => 131,  229 => 130,  227 => 123,  224 => 122,  222 => 115,  219 => 110,  217 => 92,  214 => 91,  211 => 89,  209 => 80,  207 => 75,  205 => 67,  203 => 57,  200 => 56,  197 => 54,  194 => 52,  191 => 46,  188 => 34,  185 => 25,  70 => 51,  63 => 50,  56 => 49,  49 => 48,  30 => 45,);
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
# This theme uses/extends the basic bootstrap_4_layout meaning the form labels/inputs are displayed one under the other.
# Unlike our prestashop_ui_kit.html.twig theme which extends this base kit but uses bootstrap_4_horizontal_layout as a
# base, where labels/inputs are displayed horizontally in a column way.
#}

{#
# We need to radio_widget and checkbox_widget from the original bootstrap 4 layout because we need to add form-check-radio
# on the last wrapping div which is not possible with the attributes, so we basically copied the content, but then we cannot
# use parent() to render the internal widget because it would reuse the one from bootstrap_4_layout and duplicate content.
#
# So we extract the initial widget from the bootstrap_base_layout to inject them as the internal widget, it is important
# to do it before we use bootstrap_4_layout or the base layout will override the blocks from bootstrap_4_layout.
#
# See https://symfony.com/doc/3.4/form/form_customization.html#referencing-blocks-from-inside-the-same-template-as-the-form
#}
{% use 'bootstrap_base_layout.html.twig' with radio_widget as base_radio_widget, checkbox_widget as base_checkbox_widget %}

{# Use bootstrap4 theme (from the Symfony framework) as default base #}
{% use 'bootstrap_4_layout.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/typeahead.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig' %}
{% use '@PrestaShop/Admin/TwigTemplateForm/material.html.twig' %}

{# overrides from bootstrap_4_layout #}

{# Widgets #}

{% block form_start %}
  {% set attr = attr|merge({'data-alerts-success': form.vars.alerts.success|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-info': form.vars.alerts.info|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-warning': form.vars.alerts.warning|default([])|length()}) %}
  {% set attr = attr|merge({'data-alerts-error': form.vars.alerts.error|default([])|length()}) %}
  {% set attr = attr|merge({'data-form-submitted': form.vars.submitted ? 1 : 0}) %}
  {% set attr = attr|merge({'data-form-valid': form.vars.valid ? 1 : 0}) %}
  {{ parent() }}
{% endblock form_start %}

{%- block form_widget -%}
  {% if columns_number is defined %}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-columns-' ~ columns_number)|trim}) %}
  {% endif %}
  {{ parent() }}
  {{- block('form_help') -}}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {{ parent() }}
  {% include '@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig' with {'attr': attr} %}
{%- endblock form_widget_simple -%}

{% block ip_address_text_widget %}
  <div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
      <i class=\"material-icons\">add_circle</i> {{ 'Add my IP'|trans({}, 'Admin.Actions') }}
    </button>
  </div>
  {{ block('form_help') }}
{% endblock ip_address_text_widget %}

{# Rows #}

{% block form_row -%}
  <div class=\"form-group{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    {{- form_label(form) -}}
    {{- block('form_prepend_alert') -}}
    {{- block('form_prepend_external_link') -}}

    {{- form_widget(form) -}}
    {{- form_errors(form) -}}
    {{- block('form_modify_all_shops') -}}

    {{- block('form_append_alert') -}}
    {{- block('form_append_external_link') -}}
  </div>

  {% if column_breaker %}
  <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{#
# This block is integrated into each form row, its purpose is to display a \"Modify all stores\" checkbox when present,
# the checkbox form field is added by the ModifyAllShopsExtension when the config modify_all_shops
#}
{% block form_modify_all_shops %}
  {% set overrideCheckboxName = modify_all_shops_prefix ~ form.vars.name %}
  {% if attribute(form.parent, overrideCheckboxName) is defined %}
    {{ form_errors(attribute(form.parent, overrideCheckboxName)) }}
    {{ form_widget(attribute(form.parent, overrideCheckboxName)) }}
  {% endif %}
{% endblock %}

{% block form_disabling_switch %}
  {% set disablingSwitchName = disabling_switch_prefix ~ form.vars.name %}
  {% if attribute(form.parent, disablingSwitchName) is defined %}
    {{ form_errors(attribute(form.parent, disablingSwitchName)) }}
    {{ form_widget(attribute(form.parent, disablingSwitchName)) }}
  {% endif %}
{% endblock %}

{% block widget_type_class %}
{% if not compound and form.vars.block_prefixes|length > 2 %}
 {% apply spaceless %}

    {% set index = form.vars.block_prefixes|length - 2 %}
    {% set widgetType = form.vars.block_prefixes[index] %}
    {% if widgetType == 'choice' %}
      {% if not expanded %}
        {% set widgetType = 'select' %}
      {% elseif multiple %}
        {% set widgetType = 'checboxes' %}
      {% else %}
        {% set widgetType = 'radio' %}
      {% endif %}
    {% endif %}
    {{ widgetType }}-widget
{% endapply %}
{% endif %}
{% endblock %}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({'for': id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
          '%name%': name,
          '%id%': id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}

    {% set labelTag = label_tag_name|default('label') %}
    <{{ labelTag }}{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
    {% if required %}
      <span class=\"text-danger\">*</span>
    {% endif %}
    {{ translation_domain is same as(false) ? label|raw : label|raw }}
    {% if label_attr['tooltip'] is defined %}
      {% set placement = label_attr['tooltip_placement'] is defined ? label_attr['tooltip_placement'] : 'top' %}
      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
         title=\"{{ label_attr['tooltip'] }}\"></i>
    {% endif %}

    {% if label_help_box is defined or label_attr['popover'] is defined %}
      {% set content = label_help_box is defined ? label_help_box : label_attr['popover'] %}
      {% set placement = label_attr['popover_placement'] is defined ? label_attr['popover_placement'] : 'top' %}
      {% include '@Common/HelpBox/helpbox.html.twig' with { \"placement\" : placement, \"content\": content } %}
    {% endif %}
    {{- block('form_disabling_switch') -}}
    </{{ labelTag }}>
  {%- endif -%}
  {% if label_subtitle is defined %}
    <p class=\"subtitle\">{{ label_subtitle|raw('html') }}</p>
  {% endif %}
{%- endblock form_label -%}

{# Widgets #}

{% block textarea_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
  {{- parent() -}}
  {% include '@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig' with {'attr': attr} %}
  {{ block('form_help') }}
{%- endblock textarea_widget %}

{% block money_widget -%}
  <div class=\"input-group money-type\">
    {% set prepend = '{{' == money_pattern[0:2] %}
    {% if not prepend %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
      </div>
    {% endif %}
    {{- block('form_widget_simple') -}}
    {% if prepend %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
      </div>
    {% endif %}
  </div>

  {{ block('form_help') }}
{%- endblock money_widget %}

{% block percent_widget -%}
  <div class=\"input-group\">
    {{- block('form_widget_simple') -}}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    <div {{ block('widget_container_attributes') }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date, { datetime: true } ) -}}
      {{- form_widget(form.time, { datetime: true } ) -}}
    </div>
  {%- endif %}
{%- endblock datetime_widget %}

{%- block url_widget -%}
  {%- set type = type|default('url') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock url_widget -%}

{% block date_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}
    {{- date_pattern|replace({
      '{{ year }}': form_widget(form.year),
      '{{ month }}': form_widget(form.month),
      '{{ day }}': form_widget(form.day),
    })|raw -}}
    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or false == datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif -%}
    {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
    {% if datetime is not defined or false == datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock time_widget %}

{%- block email_widget -%}
  {%- set type = type|default('email') -%}
  {{ block('form_widget_simple') }}
  {{ block('form_help') }}
{%- endblock email_widget -%}

{% block button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block icon_button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
  {% if button_type == 'link' %}
    {% set buttonTag = 'a' %}
    {# Link tags need extra class for disabled, the attribute itself is not enough #}
    {% if attr.disabled|default(false) %}
      {% set attr = attr|merge({class: (attr.class ~ ' disabled')|trim}) %}
    {% endif %}
  {% else %}
    {% set buttonTag = 'button' %}
    {% set attr = attr|merge({type: 'button'}) %}
  {% endif %}

  <{{ buttonTag }} {{ block('button_attributes') }}>
    <i class=\"material-icons\">{{ button_icon }}</i>
    {{ label }}
  </{{ buttonTag }}>
{%- endblock %}

{% block choice_widget %}
  {{- parent() -}}
  {{ block('form_help') }}
{% endblock choice_widget %}

{% block choice_widget_collapsed -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
  {% if '-inline' in label_attr.class|default('') -%}
    <div class=\"control-group\">
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- else -%}
    <div {{ block('widget_container_attributes') }}>
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(''),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- endif %}
{%- endblock choice_widget_expanded %}

{% block choice_tree_widget -%}
  <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
      {%- for child in choices %}
        {{ block('choice_tree_item_widget') }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
  <li>
    {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
    {% if multiple -%}
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
          {% if child.active is defined and child.active == 0 %}
            <i>{{ child.name }}</i>
          {%- else -%}
            {{ child.name }}
          {% endif %}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- else -%}
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
          {{ child.name }}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- endif %}
    {% if child.children is defined %}
      <ul>
        {% for item in child.children %}
          {% set child = item %}
          {{ block('choice_tree_item_widget') }}
        {% endfor -%}
      </ul>
    {% endif %}
  </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
  {{ form_errors(form) }}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hideTabs == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|capitalize }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_errors(translationsFields) }}
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translate_fields_widget -%}
  {% if type is not defined or 'file' != type %}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
  {% endif %}
  {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for translateField in form %}
      {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
      {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

      {% if default_locale.id_lang != translateField.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      {%- set attr = attr|merge({class: classes|trim}) -%}
      {{ block('form_widget') }}
    {% endfor %}

    {% if not hide_locales %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code }}
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_text_widget %}

{% block translate_textarea_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for textarea in form %}
      {% set classes = textarea.vars.attr.class|default('') ~ ' js-locale-input'%}
      {% set classes = classes ~ ' js-locale-' ~ textarea.vars.label %}

      {% if default_locale.id_lang != textarea.vars.name %}
        {% set classes = classes ~ ' d-none' %}
      {% endif %}

      <div class=\"{{ classes }}\">
        {{ form_widget(textarea, {attr: {'class': classes|trim}}) }}
      </div>
    {% endfor %}

    {% if show_locale_select %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code }}
        </button>

        <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"{{ locale.iso_code }}\"
            >
              {{ locale.name }}
            </span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_textarea_widget %}

{% block date_picker_widget %}
  {% apply spaceless %}
    {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' form-control datepicker')|trim)}) %}
    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"{{ date_format }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    {{ block('form_help') }}
  {% endapply %}
{% endblock date_picker_widget %}

{% block date_range_widget %}
  {% apply spaceless %}
    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        {{ form_row(form.from) }}
      </div>
      <div class=\"col col-md-4\">
        {{ form_row(form.to) }}
        {% if form.unlimited is defined %}
          {{ form_widget(form.unlimited) }}
          {{ form_errors(form.unlimited) }}
        {% endif %}
      </div>
    </div>
  {% endapply %}
{% endblock date_range_widget %}

{% block search_and_reset_widget %}
  {% apply spaceless %}
    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button d-block\"
            title=\"{{ 'Search'|trans({}, 'Admin.Actions') }}\"
            name=\"{{ full_name }}[search]\"
    >
      <i class=\"material-icons\">search</i>
      {{ 'Search'|trans({}, 'Admin.Actions') }}
    </button>
    {% if show_reset_button %}
      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"{{ full_name }}[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"{{ reset_url }}\"
                data-redirect=\"{{ redirect_url }}\"
        >
          <i class=\"material-icons\">clear</i>
          {{ 'Reset'|trans({}, 'Admin.Actions') }}
        </button>
      </div>
    {% endif %}
  {% endapply %}
{% endblock search_and_reset_widget %}

{% block switch_widget %}
  {% apply spaceless %}
  {% set rowAttributes  = row_attr|default({})%}
  <div class=\"input-group {{ rowAttributes.class|default('') }}\" {% for key, rowAttr in rowAttributes %} {% if key != 'class' %}{{ key }}=\"{{ rowAttr }}\"{% endif %}{% endfor %}>
    <span class=\"ps-switch\" id=\"{{ form.vars.id }}\">
        {% for choice in choices %}
          {% set inputId = id ~'_' ~ choice.value %}
          <input id=\"{{inputId}}\"
            {{ block('attributes') }}
            name=\"{{ full_name }}\"
            value=\"{{ choice.value }}\"
            {% if choice is selectedchoice(value) %}checked=\"\"{% endif %}
            {% if disabled %}disabled=\"\"{% endif %}
            type=\"radio\"
          >
          {% if show_choices %}<label for=\"{{inputId}}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>{% endif %}
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
  </div>
  {% endapply %}
  {{- block('form_help') -}}
{% endblock switch_widget %}

{%- block row_attributes -%}
  {% set rowAttributes  = row_attr|default({})%}
  {%- for attrname, attrvalue in rowAttributes -%}
    {{- \" \" -}}
    {{- attrname }}=\"{{ attrvalue }}\"
  {%- endfor -%}
{%- endblock -%}

{% block _form_step6_attachments_widget %}
  <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
    <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">{{ 'Title'|trans({}, 'Admin.Global') }}</th>
            <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
            <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
          </tr>
          </thead>
          <tbody>
          {%- for child in form %}
            <tr>
              <td class=\"col-md-3\">{{ form_widget(child) }}</td>
              <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
              <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
            </tr>
          {% endfor -%}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{# Labels #}

{% block choice_label -%}
  {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
  {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
  {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
  {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
  {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
  {# Do not display the label if widget is not defined in order to prevent double label rendering #}
  {% if widget is defined %}
    {% if required %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is not same as(false) and label is empty %}
      {% set label = name|humanize %}
    {% endif %}

    {% if block_prefixes[2] == 'radio' %}
      <label class=\"form-check-label\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}

        <i class=\"form-check-round\"></i>

        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
      </label>
    {% else %}
      <div class=\"md-checkbox md-checkbox-inline\">
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}
        <i class=\"md-checkbox-control\"></i>
        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
      </div>
    {% endif %}
  {% endif %}
{% endblock checkbox_radio_label %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-custom' in parent_label_class -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' custom-control-input')|trim}) -%}
        <div class=\"custom-control custom-radio{{ 'radio-inline' in parent_label_class ? ' custom-control-inline' }}\">
            {{- form_label(form, null, { widget: block('base_radio_widget') }) -}}
        </div>
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
        <div class=\"form-check form-check-radio form-radio{{ 'radio-inline' in parent_label_class ? ' form-check-inline' }}\">
            {{- form_label(form, null, { widget: block('base_radio_widget') }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    <div class=\"form-check form-check-radio form-checkbox{% if attr.container_class is defined %} {{ attr.container_class }}{% endif %}\">
        {{- form_label(form, null, { widget: block('base_checkbox_widget') }) -}}
    </div>
{%- endblock checkbox_widget %}

{# Errors #}

{% block form_errors -%}
  {% if attr['fieldError'] is defined and attr['fieldError'] == true %}
    {{ block('form_errors_field') }}
  {% else %}
    {{ block('form_errors_other') }}
  {% endif %}
{%- endblock form_errors %}

{% block form_errors_field %}
  {% if errors|length > 0 -%}
    {# If we got more then one error then we need to display popover instead of errors list #}
    {%- if errors|length > 1 -%}

      {% set popoverContainer = 'popover-error-container-'~form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {%- for error in errors -%}
              <li class=\"text-danger\"> {{
                error.messagePluralization is null
                ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> {{ '%count% errors'|transchoice(errors|length, {}, 'Admin.Global') }}</u>
        </span>
      {% endset %}

      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      </div>

      {# If there is only one error then display it without popover #}
    {%- else -%}
      <div class=\"d-inline-block text-danger align-top\">
        <i class=\"material-icons form-error-icon\">error_outline</i>
      </div>
      <div class=\"d-inline-block\">
        {% for error in errors %}
          <div class=\"text-danger\">
            <p> {{
              error.messagePluralization is null
              ? error.messageTemplate|trans(error.messageParameters, 'form_error')
              : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
              }}
            </p>
          </div>
        {%- endfor -%}
      </div>
    {%- endif -%}
  {%- endif %}
{% endblock %}

{% block form_errors_other %}
  {% if errors|length > 0 -%}
    <div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        {% for error in errors %}
            <p> {{
              error.messagePluralization is null
              ? error.messageTemplate|trans(error.messageParameters, 'form_error')
              : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
              }}
            </p>
        {%- endfor -%}
      </div>
    </div>
  {% endif %}
{% endblock %}

{# Material design widgets #}

{% block material_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  {% if isCheckSelectAll %}
                    checked
                  {% endif %}
                >
                <i class=\"md-checkbox-control\"></i>
                {{ 'Select all'|trans({}, 'Admin.Actions') }}
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        {% for child in form %}
          <tr>
            <td>
              {{ form_widget(child, {'material_design': true}) }}
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_choice_table_widget %}

{% block material_multiple_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table{% if headers_fixed %}-headers-fixed{% endif %} table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ table_label }}</th>
          {% for child_choice in form %}
            <th class=\"text-center\">
              {% if child_choice.vars.multiple and child_choice.vars.name not in headers_to_disable %}
                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"{{ loop.index + 1 }}\"
                   data-column-checked=\"false\"
                >
                  {{ child_choice.vars.label }}
                </a>
              {% else %}
                {{ child_choice.vars.label }}
              {% endif %}
            </th>
          {% endfor %}
        </tr>
        </thead>
        <tbody>
        {% for choice_name, choice_value in choices %}
          <tr>
            <td>
              {{ choice_name }}
            </td>
            {% for child_choice_name, child_choice in form %}
              <td class=\"text-center\">
                {% if child_choice_entry_index_mapping[choice_value][child_choice_name] is defined %}
                  {% set entry_index = child_choice_entry_index_mapping[choice_value][child_choice_name] %}

                  {% if child_choice.vars.multiple %}
                    {{ form_widget(child_choice[entry_index], {'material_design': true}) }}
                  {% else %}
                    {{ form_widget(child_choice[entry_index]) }}
                  {% endif %}
                {% else %}
                  --
                {% endif %}
              </td>
            {% endfor %}
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_multiple_choice_table_widget %}

{# Copied translatablefields_widget made to be compatible with TranslatableType.php and to be used in translatable widget#}
{% block translatable_fields_with_tabs %}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hide_locales == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if default_locale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|capitalize }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hide_locales == false and form|length > 1 %}panel panel-default{% endif %} {% if default_locale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translatable_fields_with_dropdown -%}
    {% set formClass = (form.vars.attr.class|default('') ~ ' input-group locale-input-group js-locale-input-group d-flex')|trim %}
    <div class=\"{{ formClass }}\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
      {% for translateField in form %}
        {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
        {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}
        {% if default_locale.id_lang != translateField.vars.name %}
          {% set classes = classes ~ ' d-none' %}
        {% endif %}
        <div data-lang-id=\"{{ translateField.vars.name }}\" class=\"{{ classes }}\" style=\"flex-grow: 1;\">
          {{ form_widget(translateField) }}
        </div>
      {% endfor %}
      {% if not hide_locales %}
        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            {% if change_form_language_url is defined %}
              data-change-language-url=\"{{ form.vars.change_form_language_url }}\"
            {% endif %}
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"{{ form.vars.id }}_dropdown\"
          >
            {{ form.vars.default_locale.iso_code }}
          </button>
          <div class=\"dropdown-menu locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}_dropdown\">
            {% for locale in locales %}
              <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
            {% endfor %}
          </div>
        </div>
      {% endif %}
    </div>
{%- endblock %}

{% block translatable_widget -%}
  {% if use_tabs %}
    {{ block('translatable_fields_with_tabs') }}
  {% else %}
    {{ block('translatable_fields_with_dropdown') }}
  {% endif %}
  {{ block('form_help') }}
{%- endblock translatable_widget %}

{% block birthday_widget %}
  {% if widget == 'single_text' %}
    {{- block('form_widget_simple') -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block('widget_container_attributes') -}}>
    {%- endif %}

    {% set yearWidget = '<div class=\"col pl-0 birthday-select-container\">' ~ form_widget(form.year) ~ '</div>'|raw %}
    {% set monthWidget = '<div class=\"col birthday-select-container\">' ~ form_widget(form.month) ~ '</div>'|raw %}
    {% set dayWidget = '<div class=\"col pr-0 birthday-select-container\">' ~ form_widget(form.day) ~ '</div>'|raw %}

    {{- date_pattern|replace({
      '{{ year }}': yearWidget,
      '{{ month }}': monthWidget,
      '{{ day }}': dayWidget,
    })|raw -}}

    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{% endblock birthday_widget %}

{% block file_widget %}
  <style>
    .custom-file-label:after {
      content: \"{{ \"Browse\"|trans({}, 'Admin.Actions')  }}\";
    }
  </style>
  <div class=\"custom-file\">
    {% set attr = attr|merge({
      class: (attr.class|default('') ~ ' custom-file-input')|trim,
      'data-multiple-files-text': '%count% file(s)'|trans({}, 'Admin.Global'),
      'data-locale': get_context_iso_code()
    }) -%}

    {% if attr.disabled is defined and attr.disabled %}
      {% set attr = attr|merge({
        class: attr.class ~ ' disabled'
      }) %}
    {% endif %}
    {{- block('form_widget_simple') -}}

    <label class=\"custom-file-label\" for=\"{{ form.vars.id }}\">
      {% set attributes = form.vars.attr %}
      {{ attributes.placeholder is defined ?  attributes.placeholder : 'Choose file(s)'|trans({}, 'Admin.Actions') }}
    </label>
  </div>
  {{- block('form_help') -}}
  {% if form.vars.download_url %}
    <a target=\"_blank\" href=\"{{ form.vars.download_url }}\">
      {{ 'Download file'|trans({}, 'Admin.Actions') }}
    </a>
  {% endif %}
{% endblock file_widget %}

{% block shop_restriction_checkbox_widget %}
  {% if form.vars.attr.is_allowed_to_display %}
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        {% set type = type|default('checkbox') %}
        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"{{ type }}\"
          {{ block('widget_attributes') }}
          value=\"{{ value }}\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  {% endif %}
{% endblock %}

{% block generatable_text_widget %}
  <div class=\"input-group\">
    {% if compound %}
      {{- block('form_widget_compound') -}}
    {% else %}
      {{- block('form_widget_simple') -}}
    {% endif %}
    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"{{ id }}\"
              data-generated-value-length=\"{{ generated_value_length }}\"
      >
        {{ 'Generate'|trans({}, 'Admin.Actions') }}
      </button>
   </span>
  </div>
  {{ block('form_help') }}
{% endblock generatable_text_widget %}

{% block text_with_recommended_length_widget %}
  {% set attr = attr|merge({
    'data-recommended-length-counter': '#' ~ id ~ '_recommended_length_counter',
    'class': 'js-recommended-length-input'
  }) -%}

  {% if input_type == 'textarea' %}
    {{- block('textarea_widget') -}}
  {% else %}
    {{- block('form_widget_simple') -}}
  {% endif %}

  <small class=\"form-text text-muted text-right\"
         id=\"{{ id }}_recommended_length_counter\"
  >
    <em>
      {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
        '[1]': '<span class=\"js-current-length\">' ~ value|length,
        '[/1]': '</span>',
        '[2]': '<span>' ~ recommended_length,
        '[/2]': '</span>',
      })|raw }}
    </em>
  </small>
{% endblock %}

{% block text_with_length_counter_widget %}
  <div class=\"input-group js-text-with-length-counter\">
    {% set current_length = form.vars.max_length - value|length %}

    {% if form.vars.position == 'before' %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}

    {% set attr = attr|merge({'data-max-length': form.vars.max_length, 'maxlength': form.vars.max_length, 'class': 'js-countable-input'}) -%}
    {% set attr = attr|merge(input_attr) -%}

    {% if form.vars.input == 'input' %}
      {{- block('form_widget_simple') -}}
    {% elseif form.vars.input == 'textarea' %}
      {{- block('textarea_widget') -}}
    {% else %}
      {{- block('form_widget') -}}
    {% endif %}

    {% if form.vars.position == 'after' %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block integer_min_max_filter_widget %}
  {{ form_widget(form['min_field'], { attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], { attr: {class: 'max-field'}}) }}
{% endblock %}

{% block number_min_max_filter_widget %}
  {{ form_widget(form['min_field'], { attr: {class: 'min-field'}}) }}
  {{ form_widget(form['max_field'], { attr: {class: 'max-field'}}) }}
{% endblock %}

{%- block number_widget -%}
  {%- set type = type|default('text') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
  {{ block('form_help') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default('number') -%}
  <div class=\"input-group\">
    {{- block('form_unit_prepend') -}}
    {{- block('form_widget_simple') -}}
    {{- block('form_unit') -}}
  </div>
  {{ block('form_help') }}
{%- endblock integer_widget -%}

{% block form_unit %}
  {% if form.vars.unit is defined and not form.vars.prepend_unit %}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit %}

{% block form_unit_prepend %}
  {% if form.vars.unit is defined and form.vars.prepend_unit %}
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit_prepend %}

{% block form_help %}
  {% if help is not null %}
    <small class=\"form-text\">{{ help|raw }}</small>
  {% endif %}
  {% if warning is defined %}
    {{ warning }}
  {% endif %}
{% endblock form_help %}

{% block form_prepend_external_link %}
  {% if external_link is defined and external_link.position == 'prepend' %}
    {{- block('form_external_link') -}}
  {% endif %}
{% endblock %}

{% block form_append_external_link %}
  {% if external_link is defined and external_link.position == 'append' %}
    {{- block('form_external_link') -}}
  {% endif %}
{% endblock %}

{% block form_external_link %}
  {% if external_link is defined %}
    {%- set openingTag -%}
      <a {{ block('form_external_link_attributes') }}>
        <i class=\"material-icons\">open_in_new</i>
    {%- endset -%}

    <div class=\"small font-secondary{% if external_link.align is same as('right') %} text-right{% endif %}\">
      {{ external_link.text|replace({'[1]': openingTag, '[/1]': '</a>'})|raw }}
    </div>
  {% endif %}
{% endblock form_external_link %}

{%- block form_external_link_attributes -%}
  {% set external_link_attr = external_link.attr|merge({class: (external_link.attr.class|default('') ~ ' btn btn-link px-0 align-right')|trim}) %}

  {% for attrname, attrvalue in external_link_attr %}
    {% if attrname not in ['href', 'class'] %}
      {{ attrname }}=\"{{ attrvalue }}\"
    {% endif %}
  {% endfor %}

  target=\"_blank\"
  href=\"{{ external_link.href }}\"
  class=\"{{ external_link_attr.class }}\"
{%- endblock -%}

{% block custom_content_widget %}
  {% include template with data %}
{% endblock %}

{% block text_widget %}
  {%- set attr = attr|merge({'aria-label': '%inputId% input'|trans({'%inputId%': form.vars.id}, 'Admin.Global')}) -%}
  {% if data_list is not null %}
    {%- set attr = attr|merge({'list': id ~ '_datalist'}) -%}
  {% endif %}

  {{ form_widget(form, {'attr': attr}) }}

  {% if data_list is not null %}
    <datalist id=\"{{ id ~ '_datalist' }}\">
      {% for item in data_list %}
        <option value=\"{{ item }}\"></option>
      {% endfor%}
    </datalist>
  {% endif %}
{% endblock text_widget %}

{%- block form_prepend_alert -%}
  {% if alert_position is defined and alert_position == 'prepend' %}
  {{- block('form_alert') -}}
  {% endif %}
{% endblock %}

{%- block form_append_alert -%}
  {% if alert_position is defined and alert_position == 'append' %}
  {{- block('form_alert') -}}
  {% endif %}
{% endblock %}

{%- block form_alert -%}
  {% if alert_message is defined %}
    <div class=\"alert alert-{{ alert_type }}{% if alert_title is defined %} expandable-alert{% endif %}\" role=\"alert\">
    {% if alert_title is defined %}
      <p class=\"alert-text\">
        {{ alert_title|raw }}
      </p>
    {% else %}
      {% for message in alert_message %}
        <p class=\"alert-text\">
          {{ message|raw }}
        </p>
      {% endfor %}
    {% endif %}

    {% if alert_title is defined %}
      <div class=\"alert-more collapse\" id=\"expandable_{{form.vars.id}}\" style=\"\">
        {% for message in alert_message %}
          <p>
            {{ message|raw }}
          </p>
        {% endfor %}
      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_{{form.vars.id}}\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            {{ 'Read more'|trans({}, 'Admin.Actions') }}
          </button>
       </div>
    {% endif %}
  </div>
  {% endif %}
{%- endblock -%}

{% block unavailable_widget %}
  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      {{ 'Not available yet'|trans({}, 'Admin.Catalog.Feature') }}
    </p>
  </div>
{% endblock %}

{% block text_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <span class=\"label {{ preview_class }}\">
    {# Allows to insert content as prefix, like an icon #}
    {% if prefix is defined %}
      {{ prefix|raw }}
    {% endif %}

    {# This just outputs the value #}
    {{ value|e('html') }}

    {# Allows to insert content as suffix, like an icon #}
    {% if suffix is defined %}
      {{ suffix|raw }}
    {% endif %}
  </span>
{% endblock %}

{% block image_preview_widget %}
  {# This is the hidden input #}
  {{- block('form_widget_simple') -}}
  <img src=\"{{ value }}\" alt=\"{{ ('Image preview for ' ~ form.vars.name)|trim }}\" class=\"{{ form.vars.image_class }}\" />
{% endblock %}

{% block delta_quantity_widget %}
  {% set quantity = value.quantity|default(form.quantity.vars.value) %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity')|trim, 'data-initial-quantity': quantity}) %}
  <div {{ block('widget_container_attributes') }}>
    {{ form_widget(form.quantity, {value: quantity}) }}
    {{ form_row(form.delta) }}
  </div>
{% endblock %}

{% block delta_quantity_quantity_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-quantity')|trim}) -%}
  <div {{ block('widget_container_attributes') }}>
    {{- block('form_widget_simple') -}}
    <span class=\"initial-quantity\">{{ value }}</span>
    <span class=\"quantity-update\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">{{ value }}</span>
    </span>
  </div>
{% endblock %}

{% block delta_quantity_delta_row %}
  <div class=\"form-group{{ block('widget_type_class') }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    <div class=\"delta-quantity-delta-container\">
      {{- form_label(form) -}}
      {{- block('form_prepend_alert') -}}
      {{- block('form_prepend_external_link') -}}

      {{- form_widget(form) -}}

      {{- block('form_append_alert') -}}
      {{- block('form_append_external_link') -}}
    </div>
    {{- form_errors(form) -}}
    {{- block('form_modify_all_shops') -}}
  </div>
{% endblock %}

{% block delta_quantity_delta_widget %}
  {%- set type = 'number' -%}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-delta')|trim}) -%}
  {{- block('form_widget_simple') -}}
{% endblock %}

{% block submittable_input_widget %}
  {%- set attr = attr|merge({'class': (attr.class|default('') ~ ' ps-submittable-input-wrapper')|trim}) -%}
  <div {{ block('widget_attributes') }}>
    {%- set typeAttr = form.vars.type_attr|merge({
      'class': (form.vars.type_attr.class|default('') ~ ' submittable-input')|trim,
      'data-initial-value': form.value.vars.value,
      'value': form.value.vars.value,
    }) -%}

    {{ form_widget(form.value, {'attr': typeAttr}) }}
    {{- block('submittable_input_button_widget') -}}
  </div>
{% endblock submittable_input_widget %}

{% block submittable_input_button_widget %}
  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
{% endblock submittable_input_button_widget %}

{% block submittable_delta_quantity_delta_widget %}
  {%- set attr = attr|merge({class: (attr.class|default('') ~ ' delta-quantity-delta ps-submittable-input-wrapper')|trim}) -%}
  <div {{ block('widget_attributes') }}>
    {%- set attr = form.vars.attr|merge({
      'class': (form.vars.attr.class|default('') ~ ' submittable-input')|trim,
      'data-initial-value': value,
      'value': value,
    }) -%}

    {{ form_widget(form, {'attr': attr}) }}
    {{- block('submittable_input_button_widget') -}}
  </div>
{% endblock %}

{%- block navigation_tab_widget -%}
{% set attr = attr|merge({class: (attr.class|default('') ~ ' navigation-tab-widget')|trim}) %}
<div {{ block('widget_container_attributes') }}>
  <div id=\"{{ form.vars.id }}-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != '_toolbar_buttons' and child.vars.name != '_token' %}
      <li id=\"{{ child.vars.id }}-tab-nav\" class=\"nav-item{% if not child.vars.valid %} has-error{% endif %}\">
        <a href=\"#{{ child.vars.id }}-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link{% if firstRenderedChild %} active{% endif %}\">
          {{ child.vars.label }}
        </a>
      </li>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    {% if form.offsetExists('_toolbar_buttons') %}
    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      {{ form_widget(form._toolbar_buttons) }}
    </div>
    {% endif %}
  </div>

  <div id=\"{{ form.vars.id }}-tabs-content\" class=\"tab-content\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != '_token' %}
      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid{% if firstRenderedChild %} active{% endif %}\" id=\"{{ child.vars.id }}-tab\">
        {% if child.vars.label_tab is defined %}
          {{ form_label(child, child.vars.label_tab) }}
        {% endif %}
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </div>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
  </div>
</div>
{% endblock %}

{%- block accordion_widget -%}
  <div class=\"accordion accordion-form\" id=\"{{ form.vars.id }}\">
    {% set firstChild = true %}
    {% for child in form %}
      {% if child.vars.compound %}
      {% set hasError = child.vars.valid != true %}
      {% set isExpanded = firstChild and expand_first or (hasError and expand_on_error) %}
      <div class=\"card\">
        <div class=\"card-header\" id=\"{{ child.vars.id }}_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button {% if hasError %} has-error {% endif %} btn btn-block text-left{% if not isExpanded %} collapsed{% endif %}\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#{{ child.vars.id }}_accordion\"
              aria-expanded=\"{% if isExpanded %}true{% else %}false{% endif %}\"
              aria-controls=\"{{ child.vars.id }}_accordion\">
              {{ child.vars.label }}
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"{{ child.vars.id }}_accordion\" class=\"collapse{% if isExpanded %} show{% endif %}\" aria-labelledby=\"{{ child.vars.id }}_accordion_header\" {% if display_one %}data-parent=\"#{{ form.vars.id }}\"{% endif %}>
          <div class=\"card-body\">
            {% set childAttr = {'class': 'accordion-sub-form'} %}
            {{ form_widget(child, {attr: childAttr}) }}
            {{ form_errors(child) }}
          </div>
        </div>
      </div>
      {% set firstChild = false %}
      {% endif %}
    {% endfor %}

    {# Display rest of children that may have not been rendered because they were not compound forms, like token hidden field for example #}
    {{ form_rest(form) }}
  </div>
{%- endblock -%}

{% block button_collection_widget %}
  {%- set attr = attr|merge({
    class: (attr.class|default('') ~ ' form-group btn-collection btn-toolbar')|trim,
    role: 'group',
    style: 'justify-content: ' ~ justify_content
  }) -%}
  <div {{ block('widget_attributes') }}>
    {% for group, buttons in button_groups %}
      <div class=\"btn-group group-{{ group }}\">
        {% for button in buttons %}
          {{- form_widget(attribute(form, button)) -}}
        {% endfor %}
      </div>
    {% endfor %}
  </div>
{% endblock %}

{%- block price_reduction_widget -%}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' reduction-widget row')|trim}) %}
  <div {{ block('widget_attributes') }}>
    {% for child in form.children %}
      {% with {row_attr: child.vars.row_attr|merge({class: (child.vars.row_attr.class|default('') ~ ' col col-md-3')|trim})} %}
      <div {{ block('row_attributes') }}>
      {% endwith %}
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </div>
    {% endfor -%}
  </div>
{%- endblock -%}
", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig");
    }
}
