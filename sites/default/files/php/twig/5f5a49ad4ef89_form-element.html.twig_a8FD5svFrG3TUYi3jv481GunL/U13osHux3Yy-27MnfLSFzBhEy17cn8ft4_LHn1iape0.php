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

/* themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig */
class __TwigTemplate_bed4ec2fc90f35b102a89fb587316385a74aa05fd14f9bc572e08fddecbd1e97 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 49, "if" => 52);
        $filters = array("clean_class" => 83, "escape" => 101, "raw" => 112);
        $functions = array("create_attribute" => 49);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw'],
                ['create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "
";
        // line 49
        $context["label_attributes"] = ((($context["label_attributes"] ?? null)) ? (($context["label_attributes"] ?? null)) : ($this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute()));
        // line 51
        echo "
";
        // line 52
        if ((($context["type"] ?? null) == "checkbox")) {
            // line 53
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 54
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-checkbox";
                // line 55
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 56
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 57
                echo "  ";
            } elseif ((($context["customtype"] ?? null) == "switch")) {
                // line 58
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-switch";
                // line 59
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 60
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 61
                echo "  ";
            } else {
                // line 62
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 63
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 64
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 65
                echo "  ";
            }
        }
        // line 67
        echo "
";
        // line 68
        if ((($context["type"] ?? null) == "radio")) {
            // line 69
            echo "  ";
            if ((($context["customtype"] ?? null) == "custom")) {
                // line 70
                echo "    ";
                $context["wrapperclass"] = "custom-control custom-radio";
                // line 71
                echo "    ";
                $context["labelclass"] = "custom-control-label";
                // line 72
                echo "    ";
                $context["inputclass"] = "custom-control-input";
                // line 73
                echo "  ";
            } else {
                // line 74
                echo "    ";
                $context["wrapperclass"] = "form-check";
                // line 75
                echo "    ";
                $context["labelclass"] = "form-check-label";
                // line 76
                echo "    ";
                $context["inputclass"] = "form-check-input";
                // line 77
                echo "  ";
            }
        }
        // line 79
        echo "
";
        // line 81
        $context["classes"] = [0 => "js-form-item", 1 => ("js-form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 83
($context["type"] ?? null), 83, $this->source))), 2 => ((twig_in_filter(        // line 84
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 84, $this->source))) : (("form-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["type"] ?? null), 84, $this->source))))), 3 => ((twig_in_filter(        // line 85
($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) ? (($context["wrapperclass"] ?? null)) : ("")), 4 => ("js-form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 86
($context["name"] ?? null), 86, $this->source))), 5 => ("form-item-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 87
($context["name"] ?? null), 87, $this->source))), 6 => ((!twig_in_filter(        // line 88
($context["title_display"] ?? null), [0 => "after", 1 => "before"])) ? ("form-no-label") : ("")), 7 => (((        // line 89
($context["disabled"] ?? null) == "disabled")) ? ("disabled") : ("")), 8 => ((        // line 90
($context["errors"] ?? null)) ? ("has-error") : (""))];
        // line 94
        $context["description_classes"] = [0 => "description", 1 => "text-muted", 2 => (((        // line 97
($context["description_display"] ?? null) == "invisible")) ? ("sr-only") : (""))];
        // line 100
        if (twig_in_filter(($context["type"] ?? null), [0 => "checkbox", 1 => "radio"])) {
            // line 101
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 101), 101, $this->source), "html", null, true);
            echo ">
    ";
            // line 102
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 103
                echo "      <span class=\"field-prefix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 103, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 105
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 105))) {
                // line 106
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                echo ">
        ";
                // line 107
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 110
            echo "    ";
            if ((($context["label_display"] ?? null) == "before")) {
                // line 111
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 111), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 111)], "method", false, false, true, 111), 111, $this->source), "html", null, true);
                echo ">
        ";
                // line 112
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 112, $this->source));
                echo "
      </label>
    ";
            }
            // line 115
            echo "    <input";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "addClass", [0 => ($context["inputclass"] ?? null)], "method", false, false, true, 115), 115, $this->source), "html", null, true);
            echo ">
    ";
            // line 116
            if ((($context["label_display"] ?? null) == "after")) {
                // line 117
                echo "      <label ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["label_attributes"] ?? null), "addClass", [0 => ($context["labelclass"] ?? null)], "method", false, false, true, 117), "setAttribute", [0 => "for", 1 => twig_get_attribute($this->env, $this->source, ($context["input_attributes"] ?? null), "id", [], "any", false, false, true, 117)], "method", false, false, true, 117), 117, $this->source), "html", null, true);
                echo ">
        ";
                // line 118
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["input_title"] ?? null), 118, $this->source));
                echo "
      </label>
    ";
            }
            // line 121
            echo "    ";
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 122
                echo "      <span class=\"field-suffix\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 122, $this->source), "html", null, true);
                echo "</span>
    ";
            }
            // line 124
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 125
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 126
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 126, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 129
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 129))) {
                // line 130
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 130), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 130), 130, $this->source), "html", null, true);
                echo ">
        ";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 131), 131, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 134
            echo "  </div>
";
        } else {
            // line 136
            echo "  <fieldset";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "form-group"], "method", false, false, true, 136), 136, $this->source), "html", null, true);
            echo ">
    ";
            // line 137
            if (twig_in_filter(($context["label_display"] ?? null), [0 => "before", 1 => "invisible"])) {
                // line 138
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 138, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 140
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 141
                echo "      <div class=\"input-group\">
    ";
            }
            // line 143
            echo "    ";
            if ( !twig_test_empty(($context["prefix"] ?? null))) {
                // line 144
                echo "      <div class=\"input-group-prepend\">
        <span class=\"field-prefix input-group-text\">";
                // line 145
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 145, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 148
            echo "    ";
            if (((($context["description_display"] ?? null) == "before") && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 148))) {
                // line 149
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                echo ">
        ";
                // line 150
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 153
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 153, $this->source), "html", null, true);
            echo "
    ";
            // line 154
            if ( !twig_test_empty(($context["suffix"] ?? null))) {
                // line 155
                echo "      <div class=\"input-group-append\">
        <span class=\"field-suffix input-group-text\">";
                // line 156
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 156, $this->source), "html", null, true);
                echo "</span>
      </div>
    ";
            }
            // line 159
            echo "    ";
            if (( !twig_test_empty(($context["prefix"] ?? null)) ||  !twig_test_empty(($context["suffix"] ?? null)))) {
                // line 160
                echo "      </div>
    ";
            }
            // line 162
            echo "    ";
            if ((($context["label_display"] ?? null) == "after")) {
                // line 163
                echo "      ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 163, $this->source), "html", null, true);
                echo "
    ";
            }
            // line 165
            echo "    ";
            if (($context["errors"] ?? null)) {
                // line 166
                echo "      <div class=\"invalid-feedback\">
        ";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 167, $this->source), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 170
            echo "    ";
            if ((twig_in_filter(($context["description_display"] ?? null), [0 => "after", 1 => "invisible"]) && twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 170))) {
                // line 171
                echo "      <small";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 171), "addClass", [0 => ($context["description_classes"] ?? null)], "method", false, false, true, 171), 171, $this->source), "html", null, true);
                echo ">
        ";
                // line 172
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                echo "
      </small>
    ";
            }
            // line 175
            echo "  </fieldset>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 175,  359 => 172,  354 => 171,  351 => 170,  345 => 167,  342 => 166,  339 => 165,  333 => 163,  330 => 162,  326 => 160,  323 => 159,  317 => 156,  314 => 155,  312 => 154,  307 => 153,  301 => 150,  296 => 149,  293 => 148,  287 => 145,  284 => 144,  281 => 143,  277 => 141,  274 => 140,  268 => 138,  266 => 137,  261 => 136,  257 => 134,  251 => 131,  246 => 130,  243 => 129,  237 => 126,  234 => 125,  231 => 124,  225 => 122,  222 => 121,  216 => 118,  211 => 117,  209 => 116,  204 => 115,  198 => 112,  193 => 111,  190 => 110,  184 => 107,  179 => 106,  176 => 105,  170 => 103,  168 => 102,  163 => 101,  161 => 100,  159 => 97,  158 => 94,  156 => 90,  155 => 89,  154 => 88,  153 => 87,  152 => 86,  151 => 85,  150 => 84,  149 => 83,  148 => 81,  145 => 79,  141 => 77,  138 => 76,  135 => 75,  132 => 74,  129 => 73,  126 => 72,  123 => 71,  120 => 70,  117 => 69,  115 => 68,  112 => 67,  108 => 65,  105 => 64,  102 => 63,  99 => 62,  96 => 61,  93 => 60,  90 => 59,  87 => 58,  84 => 57,  81 => 56,  78 => 55,  75 => 54,  72 => 53,  70 => 52,  67 => 51,  65 => 49,  62 => 47,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/form/form-element.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\form\\form-element.html.twig");
    }
}
