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

/* themes/custom/knows1/templates/block--system-branding-block.html.twig */
class __TwigTemplate_3eee11a9d61fcc3b7f218c673af128d566413e9a54be3e018f0b4f81a4e8b630 extends \Twig\Template
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
        $tags = array("set" => 15, "if" => 16);
        $filters = array("t" => 17, "escape" => 19);
        $functions = array("path" => 17);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape'],
                ['path']
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
        // line 15
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 15);
        // line 16
        echo "  ";
        if ((($context["site_logo"] ?? null) || ($context["site_name"] ?? null))) {
            // line 17
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"navbar-brand\">
      ";
            // line 18
            if (($context["site_logo"] ?? null)) {
                // line 19
                echo "        <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 19, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" class=\"img-fluid d-inline-block align-top\" />
      ";
            }
            // line 21
            echo "      <span class=\"ml-2 d-none d-md-inline\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 21, $this->source), "html", null, true);
            echo "</span>
    </a>
  ";
        }
        // line 24
        echo "  ";
        if (($context["site_slogan"] ?? null)) {
            // line 25
            echo "    <div class=\"ml-2 d-none d-inline-block align-top site-name-slogan\">
      ";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 26, $this->source), "html", null, true);
            echo "
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/knows1/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  94 => 25,  91 => 24,  84 => 21,  76 => 19,  74 => 18,  67 => 17,  64 => 16,  62 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/knows1/templates/block--system-branding-block.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\custom\\knows1\\templates\\block--system-branding-block.html.twig");
    }
}
