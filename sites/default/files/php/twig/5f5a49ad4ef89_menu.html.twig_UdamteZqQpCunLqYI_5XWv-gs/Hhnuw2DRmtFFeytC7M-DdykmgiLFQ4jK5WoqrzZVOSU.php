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

/* themes/contrib/bootstrap_barrio/templates/navigation/menu.html.twig */
class __TwigTemplate_31d33182a91031fded0fcff7a5e554253cc33e6c495781761923e986ba9d731a extends \Twig\Template
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
        $tags = array("import" => 21, "macro" => 29, "if" => 31, "for" => 37, "set" => 39);
        $filters = array("escape" => 33, "join" => 51, "clean_class" => 52);
        $functions = array("link" => 55);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'clean_class'],
                ['link']
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        echo "
";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 27, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 29
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 30
            echo "  ";
            $macros["menus"] = $this;
            // line 31
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 32
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 33
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "nav"], "method", false, false, true, 33), 33, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 35
                    echo "      <ul class=\"menu\">
    ";
                }
                // line 37
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "      ";
                    // line 39
                    $context["classes"] = [0 => "nav-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 41
$context["item"], "is_expanded", [], "any", false, false, true, 41)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 42
$context["item"], "is_collapsed", [], "any", false, false, true, 42)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 43
$context["item"], "in_active_trail", [], "any", false, false, true, 43)) ? ("menu-item--active-trail") : (""))];
                    // line 46
                    echo "      <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 46), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                    echo ">
        ";
                    // line 48
                    $context["link_classes"] = [0 => "nav-link", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 50
$context["item"], "in_active_trail", [], "any", false, false, true, 50)) ? ("active") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "url", [], "any", false, false, true, 51), "getOption", [0 => "attributes"], "method", false, false, true, 51), "class", [], "any", false, false, true, 51)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 51), "getOption", [0 => "attributes"], "method", false, false, true, 51), "class", [], "any", false, false, true, 51), 51, $this->source), "")) : ("")), 3 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "url", [], "any", false, false, true, 52), "toString", [], "method", false, false, true, 52), 52, $this->source)))];
                    // line 55
                    echo "        ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 55), 55, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), 55, $this->source), ["class" => ($context["link_classes"] ?? null)]), "html", null, true);
                    echo "
        ";
                    // line 56
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 56)) {
                        // line 57
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 57), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 57, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 59
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/navigation/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 61,  143 => 59,  137 => 57,  135 => 56,  130 => 55,  128 => 52,  127 => 51,  126 => 50,  125 => 48,  120 => 46,  118 => 43,  117 => 42,  116 => 41,  115 => 39,  113 => 38,  108 => 37,  104 => 35,  98 => 33,  95 => 32,  92 => 31,  89 => 30,  74 => 29,  67 => 27,  64 => 22,  62 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/navigation/menu.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\navigation\\menu.html.twig");
    }
}
