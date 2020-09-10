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

/* themes/contrib/bootstrap_barrio/templates/navigation/links--inline.html.twig */
class __TwigTemplate_b0d85c1fbe2ff3df51c93d423f17bf329a98cc6613c0d6c2575ff772a18c0054 extends \Twig\Template
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
        $tags = array("if" => 39, "for" => 49);
        $filters = array("escape" => 37, "clean_class" => 50);
        $functions = array("attach_library" => 37);

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
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("bootstrap_barrio/links"), "html", null, true);
        echo "

";
        // line 39
        if (($context["links"] ?? null)) {
            // line 40
            echo "  <div class=\"inline__links\">";
            // line 41
            if (($context["heading"] ?? null)) {
                // line 42
                if (twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 42)) {
                    // line 43
                    echo "<";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo "</";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "level", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    echo ">";
                } else {
                    // line 45
                    echo "<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "attributes", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["heading"] ?? null), "text", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
                    echo "</h2>";
                }
            }
            // line 48
            echo "<nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => [0 => "nav", 1 => "links-inline"]], "method", false, false, true, 48), 48, $this->source), "html", null, true);
            echo ">";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 50
                echo "<span";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 50), "addClass", [0 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($context["key"], 50, $this->source)), 1 => "nav-link"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                echo ">";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 51)) {
                    // line 52
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 53
$context["item"], "text_attributes", [], "any", false, false, true, 53)) {
                    // line 54
                    echo "<span";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text_attributes", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo "</span>";
                } else {
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                }
                // line 58
                echo "</span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "</nav>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/navigation/links--inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 60,  121 => 58,  118 => 56,  111 => 54,  109 => 53,  107 => 52,  105 => 51,  101 => 50,  97 => 49,  93 => 48,  85 => 45,  75 => 43,  73 => 42,  71 => 41,  69 => 40,  67 => 39,  62 => 37,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/navigation/links--inline.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\navigation\\links--inline.html.twig");
    }
}
