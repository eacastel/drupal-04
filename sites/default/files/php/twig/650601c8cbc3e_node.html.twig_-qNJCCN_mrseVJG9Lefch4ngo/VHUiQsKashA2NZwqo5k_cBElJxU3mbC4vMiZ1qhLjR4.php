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

/* themes/custom/endossmp_theme/templates/node/node.html.twig */
class __TwigTemplate_bcb9a2d48841355b0ae628c43533d64a extends Template
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
        // line 68
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/drupal.dialog.ajax"), "html", null, true);
        echo "
";
        // line 70
        $context["classes"] = [0 => ("node-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 71
($context["node"] ?? null), "id", [], "method", false, false, true, 71), 71, $this->source)), 1 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 72
($context["node"] ?? null), "bundle", [], "any", false, false, true, 72), 72, $this->source)), 2 => ((twig_get_attribute($this->env, $this->source,         // line 73
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 73)) ? ("is-promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 74)) ? ("is-sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 75)) ? ("is-unpublished") : ("")), 5 => ((        // line 76
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 76, $this->source))) : ("")), 6 => "clearfix"];
        // line 80
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 80), 80, $this->source), "html", null, true);
        echo ">

\t";
        // line 82
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 82, $this->source), "html", null, true);
        echo "
\t";
        // line 83
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 84
            echo "\t<div class=\"col-md-10 col-md-offset-1 title-attribute-001\">
\t\t<h2";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 85, $this->source), "html", null, true);
            echo ">
\t\t\t<a href=\"";
            // line 86
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 86, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 86, $this->source), "html", null, true);
            echo "</a>
\t\t</h2>
\t\t</div>
\t";
        }
        // line 90
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 90, $this->source), "html", null, true);
        echo "

\t";
        // line 92
        if (($context["display_submitted"] ?? null)) {
            // line 93
            echo "\t\t<div class=\"article-information-footer\">
\t\t\t<footer>
\t\t\t\t";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 95, $this->source), "html", null, true);
            echo "
\t\t\t\t<div";
            // line 96
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "author"], "method", false, false, true, 96), 96, $this->source), "html", null, true);
            echo ">
\t\t\t\t\t";
            // line 97
            echo t("Submitted by
\t\t\t\t\t@author_name
\t\t\t\t\ton
\t\t\t\t\t@date", array("@author_name" =>             // line 98
($context["author_name"] ?? null), "@date" =>             // line 100
($context["date"] ?? null), ));
            // line 101
            echo "\t\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 101, $this->source), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t";
        }
        // line 106
        echo "
\t<div";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content", 1 => "node-content"], "method", false, false, true, 107), 107, $this->source), "html", null, true);
        echo ">
\t\t<div class=\"post-full-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 node-html-twig\">
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 113, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t
\t\t</div>
\t</div>

</article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/endossmp_theme/templates/node/node.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 113,  118 => 107,  115 => 106,  106 => 101,  104 => 100,  103 => 98,  99 => 97,  95 => 96,  91 => 95,  87 => 93,  85 => 92,  79 => 90,  70 => 86,  66 => 85,  63 => 84,  61 => 83,  57 => 82,  51 => 80,  49 => 76,  48 => 75,  47 => 74,  46 => 73,  45 => 72,  44 => 71,  43 => 70,  39 => 68,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: (optional) The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: (optional) Themed creation date field.
 * - author_name: (optional) Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{{ attach_library('core/drupal.dialog.ajax') }}
{%
  set classes = [
  'node-' ~ node.id(),
  node.bundle|clean_class,
  node.isPromoted() ? 'is-promoted',
  node.isSticky() ? 'is-sticky',
  not node.isPublished() ? 'is-unpublished',
  view_mode ? view_mode|clean_class,
  'clearfix',
  ]
%}
<article{{attributes.addClass(classes)}}>

\t{{ title_prefix }}
\t{% if label and not page %}
\t<div class=\"col-md-10 col-md-offset-1 title-attribute-001\">
\t\t<h2{{title_attributes}}>
\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t</h2>
\t\t</div>
\t{% endif %}
\t{{ title_suffix }}

\t{% if display_submitted %}
\t\t<div class=\"article-information-footer\">
\t\t\t<footer>
\t\t\t\t{{ author_picture }}
\t\t\t\t<div{{author_attributes.addClass('author')}}>
\t\t\t\t\t{% trans %}Submitted by
\t\t\t\t\t{{ author_name }}
\t\t\t\t\ton
\t\t\t\t\t{{ date }}{% endtrans %}
\t\t\t\t\t{{ metadata }}
\t\t\t\t</div>
\t\t\t</footer>
\t\t</div>
\t{% endif %}

\t<div{{content_attributes.addClass('content', 'node-content')}}>
\t\t<div class=\"post-full-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 node-html-twig\">
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t{{ content }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t
\t\t</div>
\t</div>

</article>
", "themes/custom/endossmp_theme/templates/node/node.html.twig", "/opt/drupal/web/themes/custom/endossmp_theme/templates/node/node.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 70, "if" => 83, "trans" => 97);
        static $filters = array("escape" => 68, "clean_class" => 72);
        static $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
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
}
