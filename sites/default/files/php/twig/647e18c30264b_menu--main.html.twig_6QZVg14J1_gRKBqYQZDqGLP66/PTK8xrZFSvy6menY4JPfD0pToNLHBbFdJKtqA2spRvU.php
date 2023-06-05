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

/* themes/custom/endossmp_theme/templates/menu/menu--main.html.twig */
class __TwigTemplate_44a54a09aec2d6be4aa67a9b8158b0d5 extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<nav class=\"navbar navbar-default navbar-custom\">
\t<div
\t\tclass=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t";
        // line 25
        $this->loadTemplate("@endossmp_theme/templates/block/block--system-branding-block.html.twig", "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig", 25)->display($context);
        // line 26
        echo "\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
      <div class=\"navbar-right\">
        <div class=\"navbar-btn join-now\">
          <a href=\"/membership/join-now\">Join Now</a>
        </div>
      </div>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
\t\t\t";
        // line 41
        $this->loadTemplate("menu.html.twig", "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig", 41)->display(twig_array_merge($context, ["classes" => [0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), 2 => "nav", 3 => "navbar-nav"]]));
        // line 42
        echo "\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 42,  65 => 41,  48 => 26,  46 => 25,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - classes: A list of classes to apply to the top level <ul> element.
 * - dropdown_classes: A list of classes to apply to the dropdown <ul> element.
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
<nav class=\"navbar navbar-default navbar-custom\">
\t<div
\t\tclass=\"container-fluid\">
\t\t<!-- Brand and toggle get grouped for better mobile display -->
\t\t<div class=\"navbar-header\">
\t\t\t{% include \"@endossmp_theme/templates/block/block--system-branding-block.html.twig\" %}
\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\" aria-expanded=\"false\">
\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
      <div class=\"navbar-right\">
        <div class=\"navbar-btn join-now\">
          <a href=\"/membership/join-now\">Join Now</a>
        </div>
      </div>
\t\t</div>

\t\t<!-- Collect the nav links, forms, and other content for toggling -->
\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-collapse\">
\t\t\t{% include \"menu.html.twig\" with {'classes': ['menu', 'menu--' ~ menu_name|clean_class, 'nav', 'navbar-nav']} %}
\t\t</div>
\t\t<!-- /.navbar-collapse -->
\t</div>
\t<!-- /.container-fluid -->
</nav>
", "themes/custom/endossmp_theme/templates/menu/menu--main.html.twig", "/opt/drupal/web/themes/custom/endossmp_theme/templates/menu/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 25);
        static $filters = array("clean_class" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['clean_class'],
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
}
