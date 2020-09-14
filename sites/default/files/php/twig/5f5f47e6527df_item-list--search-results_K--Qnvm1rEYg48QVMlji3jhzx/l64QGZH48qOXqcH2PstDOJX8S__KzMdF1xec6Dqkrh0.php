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

/* themes/contrib/bootstrap_barrio/templates/dataset/item-list--search-results.html.twig */
class __TwigTemplate_dcdf53f0a85db9277be2de1ac74a089f4f6f3d37521b012c810c116cd42333b9 extends \Twig\Template
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
        $tags = array("set" => 25, "if" => 32, "for" => 41);
        $filters = array("escape" => 37);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        // line 25
        $context["classes"] = [0 => "list-group", 1 => ($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 27
($context["context"] ?? null), "plugin", [], "any", false, false, true, 27), 27, $this->source) . "-results")];
        // line 30
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30);
        // line 31
        echo "
";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 32)) {
            // line 33
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["context"] ?? null), "list_style", [], "any", false, false, true, 33), 33, $this->source))], "method", false, false, true, 33);
        }
        // line 35
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 36
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 37
                echo "<h3>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 37, $this->source), "html", null, true);
                echo "</h3>";
            }
            // line 39
            if (($context["items"] ?? null)) {
                // line 40
                echo "<";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 40, $this->source), "html", null, true);
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 40, $this->source), "html", null, true);
                echo ">";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 42
                    echo "<li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "addClass", [0 => "list-group-item"], "method", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "</";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null), 44, $this->source), "html", null, true);
                echo ">";
            } else {
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 46, $this->source), "html", null, true);
            }
        }
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/dataset/item-list--search-results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 46,  105 => 44,  95 => 42,  91 => 41,  86 => 40,  84 => 39,  79 => 37,  77 => 36,  75 => 35,  72 => 33,  70 => 32,  67 => 31,  65 => 30,  63 => 27,  62 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an item list.
 *
 * Available variables:
 * - items: A list of items. Each item contains:
 *   - attributes: HTML attributes to be applied to each list item.
 *   - value: The content of the list element.
 * - title: The title of the list.
 * - list_type: The tag for list element (\"ul\" or \"ol\").
 * - wrapper_attributes: HTML attributes to be applied to the list wrapper.
 * - attributes: HTML attributes to be applied to the list.
 * - empty: A message to display when there are no items. Allowed value is a
 *   string or render array.
 * - context: A list of contextual data associated with the list. May contain:
 *   - list_style: The custom list style.
 *
 * @see template_preprocess_item_list()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'list-group',
    context.plugin ~ '-results',
  ]
%}
{% set attributes = attributes.addClass(classes) %}

{% if context.list_style %}
  {%- set attributes = attributes.addClass('item-list__' ~ context.list_style) %}
{% endif %}
{% if items or empty %}
  {%- if title is not empty -%}
    <h3>{{ title }}</h3>
  {%- endif -%}
   {%- if items -%}
    <{{ list_type }}{{ attributes }}>
      {%- for item in items -%}
        <li{{ item.attributes.addClass('list-group-item') }}>{{ item.value }}</li>
      {%- endfor -%}
    </{{ list_type }}>
  {%- else -%}
    {{- empty -}}
  {%- endif -%}
{%- endif %}
", "themes/contrib/bootstrap_barrio/templates/dataset/item-list--search-results.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\dataset\\item-list--search-results.html.twig");
    }
}
