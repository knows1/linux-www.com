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

/* themes/contrib/bootstrap/templates/views/views-exposed-form.html.twig */
class __TwigTemplate_c787f992f2273b0a8c8e0203c2072d518620fadbc57bd5e9ab038694228dba3e extends \Twig\Template
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
        $tags = array("if" => 14);
        $filters = array("escape" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 14
        if ( !twig_test_empty(($context["q"] ?? null))) {
            // line 15
            echo "  ";
            // line 19
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["q"] ?? null), 19, $this->source), "html", null, true);
            echo "
";
        }
        // line 21
        echo "<div class=\"form--inline form-inline clearfix\">
  ";
        // line 22
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form"] ?? null), 22, $this->source), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/views/views-exposed-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  72 => 21,  66 => 19,  64 => 15,  62 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/views/views-exposed-form.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap\\templates\\views\\views-exposed-form.html.twig");
    }
}
