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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_174f984065009544f45631d895b66381 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 50
        echo "
";
        // line 58
        echo "
";
        // line 71
        echo "
";
        // line 88
        echo "
";
        // line 96
        echo "
";
        // line 126
        echo "
";
        // line 241
        echo "
 ";
        // line 288
        echo "
";
        // line 307
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 25
    public function macro_form_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 26, $this->source); })()), 'label', ["label_attr" => ["tooltip" => (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 26, $this->source); })()), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 26, $this->source); })()), "top")) : ("top"))]]);
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 29
    public function macro_check($__variable__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            (((array_key_exists("variable", $context) && (twig_length_filter($this->env, (isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 30, $this->source); })())) > 0))) ? (print (twig_escape_filter($this->env, (isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 30, $this->source); })()), "html", null, true))) : (print (false)));
            echo "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 33
    public function macro_tooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 34, $this->source); })()), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 39
    public function macro_infotip($__text__ = null, $__use_raw__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "use_raw" => $__use_raw__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            if ((isset($context["use_raw"]) || array_key_exists("use_raw", $context) ? $context["use_raw"] : (function () { throw new RuntimeError('Variable "use_raw" does not exist.', 42, $this->source); })())) {
                // line 43
                echo "      ";
                echo (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 43, $this->source); })());
                echo "
    ";
            } else {
                // line 45
                echo "      ";
                echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 45, $this->source); })()), "html", null, true);
                echo "
    ";
            }
            // line 47
            echo "  </p>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 51
    public function macro_warningtip($__text__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "text" => $__text__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 52
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 54, $this->source); })()), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 59
    public function macro_label_with_help($__label__ = null, $__help__ = null, $__class__ = "", $__for__ = "", $__isRequired__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "for" => $__for__,
            "isRequired" => $__isRequired__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 60
            echo "<label";
            if ( !twig_test_empty((isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new RuntimeError('Variable "for" does not exist.', 60, $this->source); })()))) {
                echo " for=\"";
                echo twig_escape_filter($this->env, (isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new RuntimeError('Variable "for" does not exist.', 60, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo " class=\"form-control-label ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 60, $this->source); })()), "html", null, true);
            echo "\">
  ";
            // line 61
            if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 61, $this->source); })())) {
                // line 62
                echo "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 64
            echo "
  ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 65, $this->source); })()), "html", null, true);
            echo "
  ";
            // line 66
            echo twig_include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 66, $this->source); })())]);
            echo "
</label>

<p class=\"sr-only\">";
            // line 69
            echo twig_escape_filter($this->env, (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 69, $this->source); })()), "html", null, true);
            echo "</p>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 73
    public function macro_sortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 74
            echo "  ";
            list($context["sortOrder"], $context["orderBy"], $context["prefix"]) =             [((array_key_exists("sortOrder", $context)) ? (_twig_default_filter((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 74, $this->source); })()), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 74, $this->source); })()))) : ("")), ((array_key_exists("prefix", $context)) ? (_twig_default_filter((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 74, $this->source); })()), "")) : (""))];
            // line 75
            echo "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 77
            echo twig_escape_filter($this->env, (isset($context["sortColumnName"]) || array_key_exists("sortColumnName", $context) ? $context["sortColumnName"] : (function () { throw new RuntimeError('Variable "sortColumnName" does not exist.', 77, $this->source); })()), "html", null, true);
            echo "\"
      data-sort-prefix=\"";
            // line 78
            echo twig_escape_filter($this->env, (isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 78, $this->source); })()), "html", null, true);
            echo "\"
      ";
            // line 79
            if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 79, $this->source); })()) == (isset($context["sortColumnName"]) || array_key_exists("sortColumnName", $context) ? $context["sortColumnName"] : (function () { throw new RuntimeError('Variable "sortColumnName" does not exist.', 79, $this->source); })()))) {
                // line 80
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 81
                echo ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 81, $this->source); })()) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 83
            echo "    >
      <span role=\"columnheader\">";
            // line 84
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 84, $this->source); })()), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            echo "\"></span>
  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 90
    public function macro_import_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 91
            echo "    <a id=\"download-sample-";
            echo twig_escape_filter($this->env, (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 91, $this->source); })()), "html", null, true);
            echo "-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_sample_download", ["sampleName" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 92, $this->source); })())]), "html", null, true);
            echo "\">
        ";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 93, $this->source); })()), [], "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 106
    public function macro_form_widget_with_error($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            // line 107
            echo "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 107)->unwrap();
            // line 108
            echo "
  ";
            // line 109
            $context["vars"] = ((array_key_exists("vars", $context)) ? (_twig_default_filter((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 109, $this->source); })()), [])) : ([]));
            // line 110
            echo "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 110, $this->source); })()), [])) : ([]));
            // line 111
            echo "  ";
            $context["attr"] = ((twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", true, true, false, 111)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", false, false, false, 111), [])) : ([]));
            // line 112
            echo "  ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 112, $this->source); })()), ["class" => ((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 112)) ? (twig_get_attribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 112, $this->source); })()), "class", [], "any", false, false, false, 112)) : (""))]);
            // line 113
            echo "  ";
            $context["vars"] = twig_array_merge((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 113, $this->source); })()), ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 113, $this->source); })())]);
            // line 114
            echo "
  ";
            // line 115
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 115, $this->source); })()));
            echo "

  ";
            // line 117
            if ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 117) && twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 117, $this->source); })()), "help", [], "any", false, false, false, 117))) {
                // line 118
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 118, $this->source); })()), "help", [], "any", false, false, false, 118), "html", null, true);
                echo "</small>
    ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 119
($context["form"] ?? null), "vars", [], "any", false, true, false, 119), "help", [], "any", true, true, false, 119) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "help", [], "any", false, false, false, 119))) {
                // line 120
                echo "      <small class=\"form-text\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "vars", [], "any", false, false, false, 120), "help", [], "any", false, false, false, 120), "html", null, true);
                echo "</small>
  ";
            }
            // line 122
            echo "
  ";
            // line 123
            echo twig_call_macro($macros["self"], "macro_form_error_with_popover", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })())], 123, $context, $this->getSourceContext());
            echo "

";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 136
    public function macro_form_error_with_popover($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            // line 137
            echo "  ";
            $context["errors"] = [];
            // line 138
            echo "
  ";
            // line 139
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 139), "valid", [], "any", true, true, false, 139) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "vars", [], "any", false, false, false, 139), "valid", [], "any", false, false, false, 139))) {
                // line 140
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "vars", [], "any", false, false, false, 140), "errors", [], "any", false, false, false, 140));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 141
                    echo "      ";
                    $context["errors"] = twig_array_merge((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 141, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["parentError"], "message", [], "any", false, false, false, 141)]);
                    // line 142
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parentError'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 143
                echo "
    ";
                // line 145
                echo "  ";
            }
            // line 146
            echo "
  ";
            // line 147
            if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 147, $this->source); })())) > 0)) {
                // line 148
                echo "    ";
                // line 149
                echo "    ";
                $context["errorPopover"] = null;
                // line 150
                echo "
    ";
                // line 151
                if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 151, $this->source); })())) > 1)) {
                    // line 152
                    echo "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "vars", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152));
                    // line 153
                    echo "      <div class=\"";
                    echo twig_escape_filter($this->env, (isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 153, $this->source); })()), "html", null, true);
                    echo "\"></div>


      ";
                    // line 156
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 156), "errors_by_locale", [], "any", true, true, false, 156)) {
                        // line 157
                        echo "          ";
                        $context["popoverErrors"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "vars", [], "any", false, false, false, 157), "errors_by_locale", [], "any", false, false, false, 157);
                        // line 158
                        echo "
          ";
                        // line 160
                        echo "          ";
                        $context["translatableErrors"] = [];
                        // line 161
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 161, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 162
                            echo "            ";
                            $context["translatableErrors"] = twig_array_merge((isset($context["translatableErrors"]) || array_key_exists("translatableErrors", $context) ? $context["translatableErrors"] : (function () { throw new RuntimeError('Variable "translatableErrors" does not exist.', 162, $this->source); })()), [0 => twig_get_attribute($this->env, $this->source, $context["translatableError"], "error_message", [], "any", false, false, false, 162)]);
                            // line 163
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translatableError'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 164
                        echo "
          ";
                        // line 166
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 166, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 167
                            echo "            ";
                            if (!twig_in_filter($context["error"], (isset($context["translatableErrors"]) || array_key_exists("translatableErrors", $context) ? $context["translatableErrors"] : (function () { throw new RuntimeError('Variable "translatableErrors" does not exist.', 167, $this->source); })()))) {
                                // line 168
                                echo "              ";
                                $context["popoverErrors"] = twig_array_merge((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 168, $this->source); })()), [0 => $context["error"]]);
                                // line 169
                                echo "            ";
                            }
                            // line 170
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 171
                        echo "
        ";
                    } else {
                        // line 173
                        echo "          ";
                        $context["popoverErrors"] = (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 173, $this->source); })());
                        // line 174
                        echo "      ";
                    }
                    // line 175
                    echo "
      ";
                    // line 176
                    $context["errorMessages"] = [];
                    // line 177
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 177, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 178
                        echo "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 179
                        echo "
        ";
                        // line 180
                        if ((twig_get_attribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", true, true, false, 180) && twig_get_attribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", true, true, false, 180))) {
                            // line 181
                            echo "          ";
                            $context["errorMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => twig_get_attribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", false, false, false, 181), "%language_name%" => twig_get_attribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", false, false, false, 181)], "Admin.Notifications.Error");
                            // line 182
                            echo "        ";
                        }
                        // line 183
                        echo "
        ";
                        // line 184
                        $context["errorMessages"] = twig_array_merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 184, $this->source); })()), [0 => (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 184, $this->source); })())]);
                        // line 185
                        echo "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 186
                    echo "
      ";
                    // line 187
                    ob_start();
                    // line 188
                    echo "        <div class=\"popover-error-list\">
          <ul>
            ";
                    // line 190
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 190, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 191
                        echo "              <li class=\"text-danger\">
                ";
                        // line 192
                        echo twig_escape_filter($this->env, $context["popoverError"], "html", null, true);
                        echo "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popoverError'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 195
                    echo "          </ul>
        </div>
      ";
                    $context["popoverErrorContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 198
                    echo "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 199
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "vars", [], "any", false, false, false, 199), "id", [], "any", false, false, false, 199), "html", null, true);
                    echo "\">
        ";
                    // line 200
                    echo twig_escape_filter($this->env, (isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 200, $this->source); })()), "html", null, true);
                    echo "
      </template>

      ";
                    // line 203
                    ob_start();
                    // line 204
                    echo "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 206, $this->source); })()), "vars", [], "any", false, false, false, 206), "id", [], "any", false, false, false, 206), "html", null, true);
                    echo "\"
          data-placement=\"bottom\"
          data-template='<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
          data-trigger=\"hover\"
          data-container=\".";
                    // line 210
                    echo twig_escape_filter($this->env, (isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 210, $this->source); })()), "html", null, true);
                    echo "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                    // line 212
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => twig_length_filter($this->env, (isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 212, $this->source); })()))], "Admin.Global"), "html", null, true);
                    echo "</u>
        </span>
      ";
                    $context["errorPopover"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 215
                    echo "
    ";
                } elseif (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 216
($context["form"] ?? null), "vars", [], "any", false, true, false, 216), "error_by_locale", [], "any", true, true, false, 216)) {
                    // line 217
                    echo "      ";
                    $context["errorByLocale"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "vars", [], "any", false, false, false, 217), "error_by_locale", [], "any", false, false, false, 217), "error_message", [], "any", false, false, false, 217), "%language_name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 217, $this->source); })()), "vars", [], "any", false, false, false, 217), "error_by_locale", [], "any", false, false, false, 217), "locale_name", [], "any", false, false, false, 217)], "Admin.Notifications.Error");
                    // line 218
                    echo "      ";
                    $context["errors"] = [0 => (isset($context["errorByLocale"]) || array_key_exists("errorByLocale", $context) ? $context["errorByLocale"] : (function () { throw new RuntimeError('Variable "errorByLocale" does not exist.', 218, $this->source); })())];
                    // line 219
                    echo "    ";
                }
                // line 220
                echo "
    <div class=\"invalid-feedback-container\">
      ";
                // line 222
                if ( !(null === (isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 222, $this->source); })()))) {
                    // line 223
                    echo "        <div class=\"text-danger\">
          ";
                    // line 224
                    echo twig_escape_filter($this->env, (isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 224, $this->source); })()), "html", null, true);
                    echo "
        </div>
      ";
                } else {
                    // line 227
                    echo "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 231
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 231, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 232
                        echo "            <div class=\"text-danger\">
              ";
                        // line 233
                        echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                        echo "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 236
                    echo "        </div>
      ";
                }
                // line 238
                echo "    </div>
  ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 248
    public function macro_form_group_row($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            // line 249
            echo "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 249)->unwrap();
            // line 250
            echo "
  ";
            // line 251
            $context["class"] = ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 251)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 251), "")) : (""));
            // line 252
            echo "  ";
            $context["inputType"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 252), "block_prefixes", [], "any", false, true, false, 252), 1, [], "any", true, true, false, 252)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 252), "block_prefixes", [], "any", false, true, false, 252), 1, [], "any", false, false, false, 252), "text")) : ("text"));
            // line 253
            echo "  ";
            $context["rowAttributes"] = ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 253)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 253), [])) : ([]));
            // line 254
            echo "  <div class=\"form-group row type-";
            echo twig_escape_filter($this->env, (isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 254, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 254, $this->source); })()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 254, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
    ";
            // line 255
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 255, $this->source); })()), [])) : ([]));
            // line 256
            echo "
    ";
            // line 258
            echo "    ";
            $context["labelOnTop"] = false;
            // line 259
            echo "
    ";
            // line 260
            if (twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 260)) {
                // line 261
                echo "      ";
                $context["labelOnTop"] = twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 261, $this->source); })()), "label_on_top", [], "any", false, false, false, 261);
                // line 262
                echo "    ";
            }
            // line 263
            echo "
    ";
            // line 264
            if (twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 264)) {
                // line 265
                echo "      ";
                $context["isRequired"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 265), "required", [], "any", true, true, false, 265)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 265), "required", [], "any", false, false, false, 265), false)) : (false));
                // line 266
                echo "
      ";
                // line 267
                if (twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 267)) {
                    // line 268
                    echo "        ";
                    $context["isRequired"] = twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 268, $this->source); })()), "required", [], "any", false, false, false, 268);
                    // line 269
                    echo "      ";
                }
                // line 270
                echo "
      <label for=\"";
                // line 271
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "vars", [], "any", false, false, false, 271), "id", [], "any", false, false, false, 271), "html", null, true);
                echo "\" class=\"form-control-label ";
                echo (((isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 271, $this->source); })())) ? ("label-on-top col-12") : (""));
                echo "\">
        ";
                // line 272
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 272, $this->source); })())) {
                    // line 273
                    echo "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 275
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 275, $this->source); })()), "label", [], "any", false, false, false, 275), "html", null, true);
                echo "

        ";
                // line 277
                if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 277), "label_attr", [], "any", true, true, false, 277) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 277, $this->source); })()), "vars", [], "any", false, false, false, 277), "label_attr", [], "any", false, false, false, 277)) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 277), "label_attr", [], "any", false, true, false, 277), "popover", [], "array", true, true, false, 277))) {
                    // line 278
                    echo "          ";
                    echo twig_include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "vars", [], "any", false, false, false, 278), "label_attr", [], "any", false, false, false, 278), "popover", [], "array", false, false, false, 278)]);
                    echo "
        ";
                }
                // line 280
                echo "      </label>
    ";
            }
            // line 282
            echo "
    <div class=\"";
            // line 283
            echo (((isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 283, $this->source); })())) ? ("col-12") : ("col-sm"));
            echo "\">
      ";
            // line 284
            echo twig_call_macro($macros["self"], "macro_form_widget_with_error", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 284, $this->source); })()), (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 284, $this->source); })())], 284, $context, $this->getSourceContext());
            echo "
    </div>
  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 289
    public function macro_multistore_switch($__form__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            // line 290
            echo "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 290)->unwrap();
            // line 291
            echo "  ";
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true, false, 291)) {
                // line 292
                echo "    ";
                ob_start();
                // line 293
                echo "      <strong>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                echo "</strong> <br>
      ";
                // line 294
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                echo " <br>
      ";
                // line 295
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                echo "
    ";
                $context["defaultLabel"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 297
                echo "
    ";
                // line 298
                if ( !twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 298)) {
                    // line 299
                    echo "      ";
                    $context["extraVars"] = twig_array_merge((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 299, $this->source); })()), ["help" => (isset($context["defaultLabel"]) || array_key_exists("defaultLabel", $context) ? $context["defaultLabel"] : (function () { throw new RuntimeError('Variable "defaultLabel" does not exist.', 299, $this->source); })())]);
                    // line 300
                    echo "    ";
                }
                // line 301
                echo "
    ";
                // line 302
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 303
                echo "
    ";
                // line 304
                echo twig_call_macro($macros["self"], "macro_form_group_row", [twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 304, $this->source); })()), "shop_restriction_switch", [], "any", false, false, false, 304), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 304, $this->source); })()), (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 304, $this->source); })())], 304, $context, $this->getSourceContext());
                echo "
  ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 308
    public function macro_language_dependant_select($__form__ = null, $__vars__ = null, $__extraVars__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "vars" => $__vars__,
            "extraVars" => $__extraVars__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            // line 309
            echo "  ";
            $macros["self"] = $this->loadTemplate("@PrestaShop/Admin/macros.html.twig", "@PrestaShop/Admin/macros.html.twig", 309)->unwrap();
            // line 310
            echo "
  ";
            // line 311
            $context["class"] = ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 311)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", false, false, false, 311), "")) : (""));
            // line 312
            echo "  ";
            $context["inputType"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 312), "block_prefixes", [], "any", false, true, false, 312), 1, [], "any", true, true, false, 312)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 312), "block_prefixes", [], "any", false, true, false, 312), 1, [], "any", false, false, false, 312), "text")) : ("text"));
            // line 313
            echo "  ";
            $context["rowAttributes"] = ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 313)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", false, false, false, 313), [])) : ([]));
            // line 314
            echo "  ";
            $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "vars", [], "any", false, false, false, 314), "attr", [], "any", false, false, false, 314);
            // line 315
            echo "  ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 315, $this->source); })()), ["class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 315)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", false, false, false, 315), "")) : ("")) . " language_dependant_select"))]);
            // line 316
            echo "  <div class=\"form-group row type-";
            echo twig_escape_filter($this->env, (isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 316, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 316, $this->source); })()), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 316, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["rowAttr"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['rowAttr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">
  ";
            // line 317
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (_twig_default_filter((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 317, $this->source); })()), [])) : ([]));
            // line 318
            echo "
  ";
            // line 320
            echo "  ";
            $context["labelOnTop"] = false;
            // line 321
            echo "
  ";
            // line 322
            if (twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 322)) {
                // line 323
                echo "    ";
                $context["labelOnTop"] = twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 323, $this->source); })()), "label_on_top", [], "any", false, false, false, 323);
                // line 324
                echo "  ";
            }
            // line 325
            echo "
  ";
            // line 326
            if (twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 326)) {
                // line 327
                echo "    ";
                $context["isRequired"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 327), "required", [], "any", true, true, false, 327)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 327), "required", [], "any", false, false, false, 327), false)) : (false));
                // line 328
                echo "
    ";
                // line 329
                if (twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 329)) {
                    // line 330
                    echo "      ";
                    $context["isRequired"] = twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 330, $this->source); })()), "required", [], "any", false, false, false, 330);
                    // line 331
                    echo "    ";
                }
                // line 332
                echo "
    <label for=\"";
                // line 333
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "vars", [], "any", false, false, false, 333), "id", [], "any", false, false, false, 333), "html", null, true);
                echo "\" class=\"form-control-label ";
                echo (((isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 333, $this->source); })())) ? ("label-on-top col-12") : (""));
                echo "\">
      ";
                // line 334
                if ((isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 334, $this->source); })())) {
                    // line 335
                    echo "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 337
                echo "      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 337, $this->source); })()), "label", [], "any", false, false, false, 337), "html", null, true);
                echo "
    </label>
  ";
            }
            // line 340
            echo "
  <div class=\"";
            // line 341
            echo "col-sm-5";
            echo "\">
    ";
            // line 342
            echo twig_call_macro($macros["self"], "macro_form_widget_with_error", [(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 342, $this->source); })()), ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 342, $this->source); })())], (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 342, $this->source); })())], 342, $context, $this->getSourceContext());
            echo "
  </div>
  ";
            // line 344
            if ((twig_get_attribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", true, true, false, 344) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 344, $this->source); })()), "languages", [], "any", false, false, false, 344)))) {
                // line 345
                echo "  <div class=\"";
                echo "col-sm-3";
                echo "\">
    <select name=\"";
                // line 346
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 346, $this->source); })()), "vars", [], "any", false, false, false, 346), "id", [], "any", false, false, false, 346) . "_language"), "html", null, true);
                echo "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 347
                if (twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 347, $this->source); })()), "languages", [], "any", false, false, false, 347))) {
                    // line 348
                    echo "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 348, $this->source); })()), "languages", [], "any", false, false, false, 348));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 349
                        echo "        <option value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 349), "html", null, true);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 349);
                        echo "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 351
                    echo "    ";
                }
                // line 352
                echo "    </select>
  </div>
  ";
            }
            // line 355
            echo "  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1287 => 355,  1282 => 352,  1279 => 351,  1268 => 349,  1263 => 348,  1261 => 347,  1257 => 346,  1252 => 345,  1250 => 344,  1245 => 342,  1241 => 341,  1238 => 340,  1231 => 337,  1227 => 335,  1225 => 334,  1219 => 333,  1216 => 332,  1213 => 331,  1210 => 330,  1208 => 329,  1205 => 328,  1202 => 327,  1200 => 326,  1197 => 325,  1194 => 324,  1191 => 323,  1189 => 322,  1186 => 321,  1183 => 320,  1180 => 318,  1178 => 317,  1158 => 316,  1155 => 315,  1152 => 314,  1149 => 313,  1146 => 312,  1144 => 311,  1141 => 310,  1138 => 309,  1117 => 308,  1099 => 304,  1096 => 303,  1094 => 302,  1091 => 301,  1088 => 300,  1085 => 299,  1083 => 298,  1080 => 297,  1075 => 295,  1071 => 294,  1066 => 293,  1063 => 292,  1060 => 291,  1057 => 290,  1037 => 289,  1018 => 284,  1014 => 283,  1011 => 282,  1007 => 280,  1001 => 278,  999 => 277,  993 => 275,  989 => 273,  987 => 272,  981 => 271,  978 => 270,  975 => 269,  972 => 268,  970 => 267,  967 => 266,  964 => 265,  962 => 264,  959 => 263,  956 => 262,  953 => 261,  951 => 260,  948 => 259,  945 => 258,  942 => 256,  940 => 255,  920 => 254,  917 => 253,  914 => 252,  912 => 251,  909 => 250,  906 => 249,  885 => 248,  868 => 238,  864 => 236,  855 => 233,  852 => 232,  848 => 231,  842 => 227,  836 => 224,  833 => 223,  831 => 222,  827 => 220,  824 => 219,  821 => 218,  818 => 217,  816 => 216,  813 => 215,  807 => 212,  802 => 210,  795 => 206,  791 => 204,  789 => 203,  783 => 200,  779 => 199,  776 => 198,  771 => 195,  762 => 192,  759 => 191,  755 => 190,  751 => 188,  749 => 187,  746 => 186,  740 => 185,  738 => 184,  735 => 183,  732 => 182,  729 => 181,  727 => 180,  724 => 179,  721 => 178,  716 => 177,  714 => 176,  711 => 175,  708 => 174,  705 => 173,  701 => 171,  695 => 170,  692 => 169,  689 => 168,  686 => 167,  681 => 166,  678 => 164,  672 => 163,  669 => 162,  664 => 161,  661 => 160,  658 => 158,  655 => 157,  653 => 156,  646 => 153,  643 => 152,  641 => 151,  638 => 150,  635 => 149,  633 => 148,  631 => 147,  628 => 146,  625 => 145,  622 => 143,  616 => 142,  613 => 141,  608 => 140,  606 => 139,  603 => 138,  600 => 137,  581 => 136,  563 => 123,  560 => 122,  554 => 120,  552 => 119,  547 => 118,  545 => 117,  540 => 115,  537 => 114,  534 => 113,  531 => 112,  528 => 111,  525 => 110,  523 => 109,  520 => 108,  517 => 107,  496 => 106,  478 => 93,  474 => 92,  469 => 91,  449 => 90,  431 => 85,  427 => 84,  424 => 83,  419 => 81,  416 => 80,  414 => 79,  410 => 78,  406 => 77,  402 => 75,  399 => 74,  376 => 73,  359 => 69,  353 => 66,  349 => 65,  346 => 64,  342 => 62,  340 => 61,  329 => 60,  306 => 59,  287 => 54,  283 => 52,  264 => 51,  247 => 47,  241 => 45,  235 => 43,  233 => 42,  229 => 40,  209 => 39,  191 => 35,  184 => 34,  163 => 33,  145 => 30,  126 => 29,  108 => 26,  87 => 25,  76 => 307,  73 => 288,  70 => 241,  67 => 126,  64 => 96,  61 => 88,  58 => 71,  55 => 58,  52 => 50,  49 => 38,  46 => 32,  43 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text, use_raw = false)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {%  if use_raw %}
      {{ text|raw}}
    {% else %}
      {{ text }}
    {% endif %}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '', for = '', isRequired = false) %}
<label{% if for is not empty %} for=\"{{ for }}\"{% endif %} class=\"form-control-label {{ class }}\">
  {% if isRequired %}
    <span class=\"text-danger\">*</span>
  {% endif %}

  {{ label }}
  {{ include('@Common/HelpBox/helpbox.html.twig', {'content': help}) }}
</label>

<p class=\"sr-only\">{{ help }}</p>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder, prefix) %}
  {% set sortOrder, orderBy, prefix = sortOrder|default(''), orderBy|default, prefix|default('') %}
  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      data-sort-prefix=\"{{ prefix }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
  </div>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a id=\"download-sample-{{ filename }}-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"{{ path('admin_import_sample_download', {'sampleName': filename}) }}\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}

{#
  Show form widget with errors rendered below it. It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_widget_with_error(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set vars = vars|default({}) %}
  {% set extraVars = extraVars|default({}) %}
  {% set attr = vars.attr|default({}) %}
  {% set attr = attr|merge({'class': (attr.class is defined ? attr.class : '')} ) %}
  {% set vars = vars|merge({'attr': attr}) %}

  {{ form_widget(form, vars) }}

  {% if extraVars.help is defined and extraVars.help%}
      <small class=\"form-text\">{{ extraVars.help }}</small>
    {% elseif form.vars.help is defined and form.vars.help %}
      <small class=\"form-text\">{{ form.vars.help }}</small>
  {% endif %}

  {{ self.form_error_with_popover(form) }}

{% endmacro %}

{#
  It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_error_with_popover(form) %}
  {% set errors = [] %}

  {% if form.vars.valid is defined and not form.vars.valid  %}
    {% for parentError in form.vars.errors %}
      {% set errors = errors|merge([parentError.message]) %}
    {% endfor %}

    {#iterating over child errors because errors can be nested#}
  {% endif %}

  {% if errors|length > 0 %}
    {# for form types which has locales and there are more then 1 error , additional errors are displaying inside popover #}
    {% set errorPopover = null %}

    {% if errors|length > 1 %}
      {% set popoverContainer = 'popover-error-container-'~form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>


      {% if form.vars.errors_by_locale is defined %}
          {% set popoverErrors = form.vars.errors_by_locale %}

          {# collecting translatable errors - the ones which has locale name attached #}
          {% set translatableErrors = [] %}
          {% for translatableError in popoverErrors %}
            {% set translatableErrors = translatableErrors|merge([translatableError.error_message]) %}
          {% endfor %}

          {# if an error found which does not exist in translatable errors array - it adds it to the popover error container #}
          {% for error in errors %}
            {% if error not in translatableErrors %}
              {% set popoverErrors = popoverErrors|merge([error]) %}
            {% endif %}
          {% endfor %}

        {% else %}
          {% set popoverErrors = errors %}
      {% endif %}

      {% set errorMessages = [] %}
      {% for popoverError in popoverErrors %}
        {% set errorMessage = popoverError %}

        {% if popoverError.error_message is defined and popoverError.locale_name is defined %}
          {% set errorMessage = '%error_message% - Language: %language_name%'|trans({'%error_message%': popoverError.error_message, '%language_name%': popoverError.locale_name}, 'Admin.Notifications.Error') %}
        {% endif %}

        {% set errorMessages = errorMessages|merge([errorMessage]) %}
      {% endfor %}

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {% for popoverError in errorMessages %}
              <li class=\"text-danger\">
                {{ popoverError }}
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
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>{{ '%count% errors'|trans({'%count%': popoverErrors|length}, 'Admin.Global') }}</u>
        </span>
      {% endset %}

    {% elseif form.vars.error_by_locale is defined %}
      {% set errorByLocale = '%error_message% - Language: %language_name%'|trans({'%error_message%': form.vars.error_by_locale.error_message, '%language_name%': form.vars.error_by_locale.locale_name}, 'Admin.Notifications.Error') %}
      {% set errors = [errorByLocale] %}
    {% endif %}

    <div class=\"invalid-feedback-container\">
      {% if errorPopover is not null %}
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      {% else %}
        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          {% for error in errors %}
            <div class=\"text-danger\">
              {{ error }}
            </div>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endif %}
{% endmacro %}

 {#
  Helper function to render most common structure for single input
  @param form - form view to render
  @param vars - custom vars that are passed to form_widget
  @param extraVars - parameters that are not related to form_widget, but are needed for input (label, help text & etc.)
 #}
{% macro form_group_row(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set class = extraVars.class|default('') %}
  {% set inputType = form.vars.block_prefixes.1|default('text') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
    {% set extraVars = extraVars|default({}) %}

    {# renders label above the form field if set to true #}
    {% set labelOnTop = false %}

    {% if extraVars.label_on_top is defined %}
      {% set labelOnTop = extraVars.label_on_top %}
    {% endif %}

    {% if extraVars.label is defined %}
      {% set isRequired = form.vars.required|default(false) %}

      {% if extraVars.required is defined %}
        {% set isRequired = extraVars.required %}
      {% endif %}

      <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? 'label-on-top col-12' : '' }}\">
        {% if isRequired %}
          <span class=\"text-danger\">*</span>
        {% endif %}
        {{ extraVars.label }}

        {% if form.vars.label_attr is defined and form.vars.label_attr and form.vars.label_attr['popover'] is defined %}
          {{ include('@Common/HelpBox/helpbox.html.twig', {'content': form.vars.label_attr['popover']}) }}
        {% endif %}
      </label>
    {% endif %}

    <div class=\"{{ labelOnTop ? 'col-12' : 'col-sm' }}\">
      {{ self.form_widget_with_error(form, vars, extraVars) }}
    </div>
  </div>
{% endmacro %}

{% macro multistore_switch(form, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}
  {% if form.shop_restriction_switch is defined %}
    {% set defaultLabel %}
      <strong>{{ 'Check / Uncheck all'|trans({}, 'Admin.Actions') }}</strong> <br>
      {{ 'You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.'|trans({'%yes_label%': 'Yes'|trans({}, 'Admin.Global'), '%no_label%': 'No'|trans({}, 'Admin.Global')}, 'Admin.Design.Help') }} <br>
      {{ 'If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.'|trans({}, 'Admin.Design.Help') }}
    {% endset %}

    {% if extraVars.help is not defined %}
      {% set extraVars = extraVars|merge({'help': defaultLabel}) %}
    {% endif %}

    {% set vars = { 'attr': { 'class': 'js-multi-store-restriction-switch'}} %}

    {{ self.form_group_row(form.shop_restriction_switch, vars, extraVars) }}
  {% endif %}
{% endmacro %}

{% macro language_dependant_select(form, vars, extraVars) %}
  {% import '@PrestaShop/Admin/macros.html.twig' as self %}

  {% set class = extraVars.class|default('') %}
  {% set inputType = form.vars.block_prefixes.1|default('text') %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default('') ~ ' language_dependant_select')|trim}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# renders label above the form field if set to true #}
  {% set labelOnTop = false %}

  {% if extraVars.label_on_top is defined %}
    {% set labelOnTop = extraVars.label_on_top %}
  {% endif %}

  {% if extraVars.label is defined %}
    {% set isRequired = form.vars.required|default(false) %}

    {% if extraVars.required is defined %}
      {% set isRequired = extraVars.required %}
    {% endif %}

    <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? 'label-on-top col-12' : '' }}\">
      {% if isRequired %}
        <span class=\"text-danger\">*</span>
      {% endif %}
      {{ extraVars.label }}
    </label>
  {% endif %}

  <div class=\"{{ 'col-sm-5' }}\">
    {{ self.form_widget_with_error(form, { 'attr': attr }, extraVars) }}
  </div>
  {% if extraVars.languages is defined and extraVars.languages is not empty %}
  <div class=\"{{ 'col-sm-3' }}\">
    <select name=\"{{ form.vars.id ~'_language' }}\" class=\"custom-select language_dependant_select_language\">
    {% if extraVars.languages is iterable %}
      {% for language in extraVars.languages %}
        <option value=\"{{ language.id }}\">{{ language.value|raw }}</option>
      {% endfor %}
    {% endif %}
    </select>
  </div>
  {% endif %}
  </div>
{% endmacro %}
", "@PrestaShop/Admin/macros.html.twig", "/var/www/html/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
