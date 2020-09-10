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

/* themes/contrib/bootstrap_barrio/templates/navigation/links.html.twig */
class __TwigTemplate_5f522bbadd8ab4e502ceddb7d9ff408e90f7e62a761998936ccf3574f0059479 extends \Twig\Template
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
        $tags = array("if" => 35, "for" => 46);
        $filters = array("escape" => 36, "clean_class" => 47);
        $functions = array("attach_library" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'clean_class'],
                ['attach_library']
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
        // line 35
        if (($context["links"] ?? null)) {
            // line 36
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/links"), "html", null, true);
            // line 38
            if (($context["heading"] ?? null)) {
                // line 39
                if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 42
                    echo "<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 45
            echo "<ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 45, $this->source), "html", null, true);
            echo ">";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 47
                echo "<li";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 47), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 47, $this->source))], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                echo ">";
                // line 48
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 48)) {
                    // line 49
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 50
$context["item"], "text_attributes", [], "any", false, false, true, 50)) {
                    // line 51
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                    echo "</span>";
                } else {
                    // line 53
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
                }
                // line 55
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "</ul>";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/navigation/links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 57,  116 => 55,  113 => 53,  106 => 51,  104 => 50,  102 => 49,  100 => 48,  96 => 47,  92 => 46,  88 => 45,  80 => 42,  70 => 40,  68 => 39,  66 => 38,  64 => 36,  62 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/navigation/links.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\navigation\\links.html.twig");
    }
}
