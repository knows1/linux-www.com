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

/* themes/contrib/bootstrap/templates/input/select.html.twig */
class __TwigTemplate_8684772629117b1683e9f7cd5e9e1cae04bd93fa5bbc40064d38dc4e01348b9f extends \Twig\Template
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
        $tags = array("spaceless" => 18, "if" => 19, "set" => 34, "for" => 36);
        $filters = array("escape" => 24);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set', 'for'],
                ['escape'],
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
        // line 18
        ob_start(function () { return ''; });
        // line 19
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 20
            echo "    <div class=\"input-group\">
  ";
        }
        // line 22
        echo "
  ";
        // line 23
        if (($context["prefix"] ?? null)) {
            // line 24
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 24, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 26
        echo "
  ";
        // line 31
        echo "  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetExists", [0 => "multiple"], "method", false, false, true, 31)) {
            // line 32
            echo "    <div class=\"select-wrapper\">
  ";
        }
        // line 34
        echo "    ";
        $context["classes"] = [0 => "form-control"];
        // line 35
        echo "    <select";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 35), 35, $this->source), "html", null, true);
        echo ">
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
            // line 37
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["option"], "type", [], "any", false, false, true, 37) == "optgroup")) {
                // line 38
                echo "          <optgroup label=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "\">
            ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["option"], "options", [], "any", false, false, true, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["sub_option"]) {
                    // line 40
                    echo "              <option
                value=\"";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "value", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["sub_option"], "selected", [], "any", false, false, true, 41)) ? (" selected=\"selected\"") : ("")));
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sub_option"], "label", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "</option>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sub_option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "          </optgroup>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 44
$context["option"], "type", [], "any", false, false, true, 44) == "option")) {
                // line 45
                echo "          <option
            value=\"";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((twig_get_attribute($this->env, $this->source, $context["option"], "selected", [], "any", false, false, true, 46)) ? (" selected=\"selected\"") : ("")));
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "label", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
                echo "</option>
        ";
            }
            // line 48
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "    </select>
  ";
        // line 50
        if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "offsetExists", [0 => "multiple"], "method", false, false, true, 50)) {
            // line 51
            echo "    </div>
  ";
        }
        // line 53
        echo "
  ";
        // line 54
        if (($context["suffix"] ?? null)) {
            // line 55
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 55, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "
  ";
        // line 58
        if (($context["input_group"] ?? null)) {
            // line 59
            echo "    </div>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/input/select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 59,  177 => 58,  174 => 57,  168 => 55,  166 => 54,  163 => 53,  159 => 51,  157 => 50,  154 => 49,  148 => 48,  139 => 46,  136 => 45,  134 => 44,  131 => 43,  119 => 41,  116 => 40,  112 => 39,  107 => 38,  104 => 37,  100 => 36,  95 => 35,  92 => 34,  88 => 32,  85 => 31,  82 => 26,  76 => 24,  74 => 23,  71 => 22,  67 => 20,  64 => 19,  62 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/input/select.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap\\templates\\input\\select.html.twig");
    }
}
