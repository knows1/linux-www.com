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

/* themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig */
class __TwigTemplate_3545fec7c26f5c6545c4c2af8b5f437c5b2fa052d641bf75fc9e847c78640c9e extends \Twig\Template
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
        $tags = array("set" => 20);
        $filters = array("join" => 23, "clean_class" => 24, "escape" => 27);
        $functions = array("link" => 27);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['join', 'clean_class', 'escape'],
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
        // line 20
        $context["classes"] = [0 => "nav-link", 1 => ((        // line 22
($context["is_active"] ?? null)) ? ("active") : ("")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 23
($context["item"] ?? null), "url", [], "any", false, false, true, 23), "getOption", [0 => "attributes"], "method", false, false, true, 23), "class", [], "any", false, false, true, 23)) ? (twig_join_filter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 23), "getOption", [0 => "attributes"], "method", false, false, true, 23), "class", [], "any", false, false, true, 23), 23, $this->source), " ")) : ("")), 3 => ("nav-link-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 24
($context["item"] ?? null), "url", [], "any", false, false, true, 24), "toString", [], "method", false, false, true, 24), 24, $this->source)))];
        // line 27
        echo "<li";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ((($context["is_active"] ?? null)) ? ("active") : ("")), 1 => "nav-item"], "method", false, false, true, 27), 27, $this->source), "html", null, true);
        echo ">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "text", [], "any", false, false, true, 27), 27, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 27), 27, $this->source), ["class" => ($context["classes"] ?? null)]), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 27,  65 => 24,  64 => 23,  63 => 22,  62 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Bootstrap Barrio's Theme override for a local task link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - is_active: Whether the task item is an active tab.
 * - link: A rendered link element.
 * - item.text: Text for the link
 * - item.url: URL object for link
 *
 * Note: This template renders the content for each task item in
 * menu-local-tasks.html.twig.
 *
 * @see template_preprocess_menu_local_task()
 */
#}
{%
  set classes = [
    'nav-link',
    is_active ? 'active',
    item.url.getOption('attributes').class ? item.url.getOption('attributes').class | join(' '),
    'nav-link-' ~ item.url.toString() | clean_class,
  ]
%}
<li{{ attributes.addClass(is_active ? 'active', 'nav-item') }}>{{ link(item.text, item.url, {'class': classes}) }}</li>
", "themes/contrib/bootstrap_barrio/templates/navigation/menu-local-task.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\navigation\\menu-local-task.html.twig");
    }
}
