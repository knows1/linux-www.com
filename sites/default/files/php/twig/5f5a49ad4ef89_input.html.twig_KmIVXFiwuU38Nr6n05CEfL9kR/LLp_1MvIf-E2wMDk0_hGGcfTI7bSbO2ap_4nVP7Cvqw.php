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

/* input.html.twig */
class __TwigTemplate_bf3eccf399ea9ae920b38a3998908be17924e48d5daa000cf882c46510ee18ad extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("spaceless" => 22, "if" => 23, "block" => 31);
        $filters = array("escape" => 28);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'block'],
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
        // line 22
        ob_start(function () { return ''; });
        // line 23
        echo "  ";
        if (($context["input_group"] ?? null)) {
            // line 24
            echo "    <div class=\"input-group\">
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if (($context["prefix"] ?? null)) {
            // line 28
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 28, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('input', $context, $blocks);
        // line 34
        echo "
  ";
        // line 35
        if (($context["suffix"] ?? null)) {
            // line 36
            echo "    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 36, $this->source), "html", null, true);
            echo "
  ";
        }
        // line 38
        echo "
  ";
        // line 39
        if (($context["input_group"] ?? null)) {
            // line 40
            echo "    </div>
  ";
        }
        // line 42
        echo "
  ";
        // line 43
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 43, $this->source), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 31
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "    <input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 32, $this->source), "html", null, true);
        echo " />
  ";
    }

    public function getTemplateName()
    {
        return "input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  118 => 31,  111 => 43,  108 => 42,  104 => 40,  102 => 39,  99 => 38,  93 => 36,  91 => 35,  88 => 34,  86 => 31,  83 => 30,  77 => 28,  75 => 27,  72 => 26,  68 => 24,  65 => 23,  63 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("", "input.html.twig", "themes/contrib/bootstrap/templates/input/input.html.twig");
    }
}
