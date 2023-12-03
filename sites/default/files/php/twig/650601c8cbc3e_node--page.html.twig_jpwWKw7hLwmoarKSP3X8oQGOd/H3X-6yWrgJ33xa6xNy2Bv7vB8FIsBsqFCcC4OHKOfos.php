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

/* themes/custom/endossmp_theme/templates/node/node--page.html.twig */
class __TwigTemplate_91547a27ad50c0b8b88c598fcbfb2082 extends Template
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
        // line 1
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/drupal.dialog.ajax"), "html", null, true);
        echo "
";
        // line 3
        $context["classes"] = [0 => ("node-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["node"] ?? null), "id", [], "method", false, false, true, 4), 4, $this->source)), 1 => \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 5
($context["node"] ?? null), "bundle", [], "any", false, false, true, 5), 5, $this->source)), 2 => ((twig_get_attribute($this->env, $this->source,         // line 6
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 6)) ? ("is-promoted") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,         // line 7
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 7)) ? ("is-sticky") : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 8
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 8)) ? ("is-unpublished") : ("")), 5 => ((        // line 9
($context["view_mode"] ?? null)) ? (\Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 9, $this->source))) : ("")), 6 => "clearfix"];
        // line 13
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 13), 13, $this->source), "html", null, true);
        echo ">

\t";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 15, $this->source), "html", null, true);
        echo "
\t";
        // line 16
        if ((($context["label"] ?? null) &&  !($context["page"] ?? null))) {
            // line 17
            echo "\t\t<h2";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 17, $this->source), "html", null, true);
            echo ">
\t\t\t<a href=\"";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 18, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 18, $this->source), "html", null, true);
            echo "</a>
\t\t</h2>
\t";
        }
        // line 21
        echo "\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
        echo "

\t";
        // line 23
        if (($context["display_submitted"] ?? null)) {
            // line 24
            echo "\t\t<footer>
\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 25, $this->source), "html", null, true);
            echo "
\t\t\t<div";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["author_attributes"] ?? null), "addClass", [0 => "author"], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">
\t\t\t\t";
            // line 27
            echo t("Submitted by
\t\t\t\t@author_name
\t\t\t\ton
\t\t\t\t@date", array("@author_name" =>             // line 28
($context["author_name"] ?? null), "@date" =>             // line 30
($context["date"] ?? null), ));
            // line 31
            echo "\t\t\t\t";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 31, $this->source), "html", null, true);
            echo "
\t\t\t</div>
\t\t</footer>
\t";
        }
        // line 35
        echo "
\t<div";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content", 1 => "content-body"], "method", false, false, true, 36), 36, $this->source), "html", null, true);
        echo ">
\t\t<div class=\"post-full-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 node-page-html-twig\">
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 42, $this->source), "html", null, true);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></article>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/endossmp_theme/templates/node/node--page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  113 => 36,  110 => 35,  102 => 31,  100 => 30,  99 => 28,  95 => 27,  91 => 26,  87 => 25,  84 => 24,  82 => 23,  76 => 21,  68 => 18,  63 => 17,  61 => 16,  57 => 15,  51 => 13,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ attach_library('core/drupal.dialog.ajax') }}
{%
  set classes = [
\t'node-' ~ node.id(),
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
\t\t<h2{{title_attributes}}>
\t\t\t<a href=\"{{ url }}\" rel=\"bookmark\">{{ label }}</a>
\t\t</h2>
\t{% endif %}
\t{{ title_suffix }}

\t{% if display_submitted %}
\t\t<footer>
\t\t\t{{ author_picture }}
\t\t\t<div{{author_attributes.addClass('author')}}>
\t\t\t\t{% trans %}Submitted by
\t\t\t\t{{ author_name }}
\t\t\t\ton
\t\t\t\t{{ date }}{% endtrans %}
\t\t\t\t{{ metadata }}
\t\t\t</div>
\t\t</footer>
\t{% endif %}

\t<div{{content_attributes.addClass('content', 'content-body')}}>
\t\t<div class=\"post-full-content\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-10 col-md-offset-1 node-page-html-twig\">
\t\t\t\t\t\t<div class=\"post-content\">
\t\t\t\t\t\t\t{{ content }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div></article>
", "themes/custom/endossmp_theme/templates/node/node--page.html.twig", "/opt/drupal/web/themes/custom/endossmp_theme/templates/node/node--page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 3, "if" => 16, "trans" => 27);
        static $filters = array("escape" => 1, "clean_class" => 5);
        static $functions = array("attach_library" => 1);

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
