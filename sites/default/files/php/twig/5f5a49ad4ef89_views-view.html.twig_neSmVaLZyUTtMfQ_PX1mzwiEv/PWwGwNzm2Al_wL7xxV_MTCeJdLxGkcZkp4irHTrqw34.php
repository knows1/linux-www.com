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

/* themes/contrib/bootstrap/templates/views/views-view.html.twig */
class __TwigTemplate_3891ecf7348f90fabf91fbe15136926e85f3fbbef4fd5da1a3d6fe24a2727e80 extends \Twig\Template
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
        $tags = array("set" => 36, "if" => 46);
        $filters = array("clean_class" => 38, "escape" => 44);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                []
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
        // line 36
        $context["classes"] = [0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["id"] ?? null), 38, $this->source))), 2 => ("view-id-" . $this->sandbox->ensureToStringAllowed(        // line 39
($context["id"] ?? null), 39, $this->source)), 3 => ("view-display-id-" . $this->sandbox->ensureToStringAllowed(        // line 40
($context["display_id"] ?? null), 40, $this->source)), 4 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : (""))];
        // line 44
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo ">
  ";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 45, $this->source), "html", null, true);
        echo "
  ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 47, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 49
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        echo "
  ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "    <div class=\"view-header\">
      ";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 52, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 55
        echo "  ";
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "    <div class=\"view-filters form-group\">
      ";
            // line 57
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 57, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 60
        echo "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            echo "    <div class=\"attachment attachment-before\">
      ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 62, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 65
        echo "
  ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            echo "    <div class=\"view-content\">
      ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 68, $this->source), "html", null, true);
            echo "
    </div>
  ";
        } elseif (        // line 70
($context["empty"] ?? null)) {
            // line 71
            echo "    <div class=\"view-empty\">
      ";
            // line 72
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 72, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 75
        echo "
  ";
        // line 76
        if (($context["pager"] ?? null)) {
            // line 77
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 77, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 79
        echo "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 80
            echo "    <div class=\"attachment attachment-after\">
      ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 81, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 84
        echo "  ";
        if (($context["more"] ?? null)) {
            // line 85
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 85, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 87
        echo "  ";
        if (($context["footer"] ?? null)) {
            // line 88
            echo "    <div class=\"view-footer\">
      ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 89, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 92
        echo "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 93
            echo "    <div class=\"feed-icons\">
      ";
            // line 94
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 94, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 97
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/views/views-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 97,  199 => 94,  196 => 93,  193 => 92,  187 => 89,  184 => 88,  181 => 87,  175 => 85,  172 => 84,  166 => 81,  163 => 80,  160 => 79,  154 => 77,  152 => 76,  149 => 75,  143 => 72,  140 => 71,  138 => 70,  133 => 68,  130 => 67,  128 => 66,  125 => 65,  119 => 62,  116 => 61,  113 => 60,  107 => 57,  104 => 56,  101 => 55,  95 => 52,  92 => 51,  90 => 50,  85 => 49,  79 => 47,  77 => 46,  73 => 45,  68 => 44,  66 => 41,  65 => 40,  64 => 39,  63 => 38,  62 => 36,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/views/views-view.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap\\templates\\views\\views-view.html.twig");
    }
}
