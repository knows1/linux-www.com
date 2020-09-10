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

/* themes/contrib/bootstrap_barrio/templates/layout/page.html.twig */
class __TwigTemplate_72af77135776d99b6067c470e871effc283dd35314706e56773bc137c24e8e4d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("block" => 73, "if" => 116);
        $filters = array("t" => 72, "escape" => 118);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if'],
                ['t', 'escape'],
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
        // line 70
        echo "<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
      ";
        // line 73
        $this->displayBlock('head', $context, $blocks);
        // line 115
        echo "    </header>
    ";
        // line 116
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 116)) {
            // line 117
            echo "      <div class=\"highlighted\">
        <aside class=\"";
            // line 118
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 118, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
          ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 123
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 123)) {
            // line 124
            echo "      ";
            $this->displayBlock('featured', $context, $blocks);
            // line 131
            echo "    ";
        }
        // line 132
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
      ";
        // line 133
        $this->displayBlock('content', $context, $blocks);
        // line 160
        echo "    </div>
    ";
        // line 161
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 161) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 161)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 161))) {
            // line 162
            echo "      <div class=\"featured-bottom\">
        <aside class=\"";
            // line 163
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 163, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
          ";
            // line 164
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
            echo "
          ";
            // line 165
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 165), 165, $this->source), "html", null, true);
            echo "
          ";
            // line 166
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 166), 166, $this->source), "html", null, true);
            echo "
        </aside>
      </div>
    ";
        }
        // line 170
        echo "    <footer class=\"site-footer\">
      ";
        // line 171
        $this->displayBlock('footer', $context, $blocks);
        // line 188
        echo "    </footer>
  </div>
</div>
";
    }

    // line 73
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "        ";
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 74) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 74)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 74))) {
            // line 75
            echo "          <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 75, $this->source), "html", null, true);
            echo ">
          ";
            // line 76
            if (($context["container_navbar"] ?? null)) {
                // line 77
                echo "          <div class=\"container\">
          ";
            }
            // line 79
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
              ";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "
              ";
            // line 81
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 81)) {
                // line 82
                echo "                <div class=\"form-inline navbar-form ml-auto\">
                  ";
                // line 83
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
                echo "
                </div>
              ";
            }
            // line 86
            echo "          ";
            if (($context["container_navbar"] ?? null)) {
                // line 87
                echo "          </div>
          ";
            }
            // line 89
            echo "          </nav>
        ";
        }
        // line 91
        echo "        <nav";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 91, $this->source), "html", null, true);
        echo ">
          ";
        // line 92
        if (($context["container_navbar"] ?? null)) {
            // line 93
            echo "          <div class=\"container\">
          ";
        }
        // line 95
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
        echo "
            ";
        // line 96
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 96) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 96))) {
            // line 97
            echo "              <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingNavbar\" aria-controls=\"CollapsingNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
              <div class=\"collapse navbar-collapse justify-content-end\" id=\"CollapsingNavbar\">
                ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
                ";
            // line 100
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 100)) {
                // line 101
                echo "                  <div class=\"form-inline navbar-form justify-content-end\">
                    ";
                // line 102
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
                echo "
                  </div>
                ";
            }
            // line 105
            echo "\t          </div>
            ";
        }
        // line 107
        echo "            ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 108
            echo "              <button class=\"navbar-toggler navbar-toggler-left collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#CollapsingLeft\" aria-controls=\"CollapsingLeft\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"></button>
            ";
        }
        // line 110
        echo "          ";
        if (($context["container_navbar"] ?? null)) {
            // line 111
            echo "          </div>
          ";
        }
        // line 113
        echo "        </nav>
      ";
    }

    // line 124
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 125
        echo "        <div class=\"featured-top\">
          <aside class=\"featured-top__inner section ";
        // line 126
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 126, $this->source), "html", null, true);
        echo " clearfix\" role=\"complementary\">
            ";
        // line 127
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
        echo "
          </aside>
        </div>
      ";
    }

    // line 133
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "        <div id=\"main\" class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 134, $this->source), "html", null, true);
        echo "\">
          ";
        // line 135
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 135), 135, $this->source), "html", null, true);
        echo "
          <div class=\"row row-offcanvas row-offcanvas-left clearfix\">
              <main";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 137, $this->source), "html", null, true);
        echo ">
                <section class=\"section\">
                  <a id=\"main-content\" tabindex=\"-1\"></a>
                  ";
        // line 140
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
        echo "
                </section>
              </main>
            ";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 143)) {
            // line 144
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 144, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 150
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 150)) {
            // line 151
            echo "              <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 151, $this->source), "html", null, true);
            echo ">
                <aside class=\"section\" role=\"complementary\">
                  ";
            // line 153
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "
                </aside>
              </div>
            ";
        }
        // line 157
        echo "          </div>
        </div>
      ";
    }

    // line 171
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 172
        echo "        <div class=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 172, $this->source), "html", null, true);
        echo "\">
          ";
        // line 173
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 173) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 173)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 173))) {
            // line 174
            echo "            <div class=\"site-footer__top clearfix\">
              ";
            // line 175
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 175), 175, $this->source), "html", null, true);
            echo "
              ";
            // line 176
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 176), 176, $this->source), "html", null, true);
            echo "
              ";
            // line 177
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 177), 177, $this->source), "html", null, true);
            echo "
              ";
            // line 178
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 178), 178, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 181
        echo "          ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 181)) {
            // line 182
            echo "            <div class=\"site-footer__bottom\">
              ";
            // line 183
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 183), 183, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 186
        echo "        </div>
      ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap_barrio/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 186,  377 => 183,  374 => 182,  371 => 181,  365 => 178,  361 => 177,  357 => 176,  353 => 175,  350 => 174,  348 => 173,  343 => 172,  339 => 171,  333 => 157,  326 => 153,  320 => 151,  317 => 150,  310 => 146,  304 => 144,  302 => 143,  296 => 140,  290 => 137,  285 => 135,  280 => 134,  276 => 133,  268 => 127,  264 => 126,  261 => 125,  257 => 124,  252 => 113,  248 => 111,  245 => 110,  241 => 108,  238 => 107,  234 => 105,  228 => 102,  225 => 101,  223 => 100,  219 => 99,  215 => 97,  213 => 96,  208 => 95,  204 => 93,  202 => 92,  197 => 91,  193 => 89,  189 => 87,  186 => 86,  180 => 83,  177 => 82,  175 => 81,  171 => 80,  166 => 79,  162 => 77,  160 => 76,  155 => 75,  152 => 74,  148 => 73,  141 => 188,  139 => 171,  136 => 170,  129 => 166,  125 => 165,  121 => 164,  117 => 163,  114 => 162,  112 => 161,  109 => 160,  107 => 133,  104 => 132,  101 => 131,  98 => 124,  95 => 123,  88 => 119,  84 => 118,  81 => 117,  79 => 116,  76 => 115,  74 => 73,  70 => 72,  66 => 70,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap_barrio/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\dashboard\\drupal-9.0.5\\drupal-9.0.5\\themes\\contrib\\bootstrap_barrio\\templates\\layout\\page.html.twig");
    }
}
