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
class __TwigTemplate_bf279bf96bf0abb8cd25a093f46785f7 extends Template
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
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        if ((((($context["input_group"] ?? null) || ($context["prefix"] ?? null)) || ($context["suffix"] ?? null)) ||         $this->hasBlock("input", $context, $blocks))) {
            // line 23
            echo "\t<div class=\"input-wrapper container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t<div class=\"input-content\">
\t\t\t\t\t";
            // line 27
            ob_start();
            // line 28
            echo "\t\t\t\t\t\t";
            if (($context["input_group"] ?? null)) {
                // line 29
                echo "\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t";
            }
            // line 31
            echo "
\t\t\t\t\t\t";
            // line 32
            if (($context["prefix"] ?? null)) {
                // line 33
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null), 33, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 35
            echo "
\t\t\t\t\t\t";
            // line 36
            $this->displayBlock('input', $context, $blocks);
            // line 39
            echo "
\t\t\t\t\t\t";
            // line 40
            if (($context["suffix"] ?? null)) {
                // line 41
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["suffix"] ?? null), 41, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 43
            echo "
\t\t\t\t\t\t";
            // line 44
            if (($context["input_group"] ?? null)) {
                // line 45
                echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 47
            echo "
\t\t\t\t\t\t";
            // line 48
            if (array_key_exists("children", $context)) {
                // line 49
                echo "\t\t\t\t\t\t\t";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 49, $this->source), "html", null, true);
                echo "
\t\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t";
            $___internal_parse_1_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_spaceless($___internal_parse_1_));
            // line 52
            echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        }
    }

    // line 36
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo "\t\t\t\t\t\t\t<input";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 37, $this->source), "html", null, true);
        echo "/>
\t\t\t\t\t\t";
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
        return array (  122 => 37,  118 => 36,  109 => 52,  107 => 27,  104 => 51,  98 => 49,  96 => 48,  93 => 47,  89 => 45,  87 => 44,  84 => 43,  78 => 41,  76 => 40,  73 => 39,  71 => 36,  68 => 35,  62 => 33,  60 => 32,  57 => 31,  53 => 29,  50 => 28,  48 => 27,  42 => 23,  40 => 22,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for an 'input' #type form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the input element.
 * - children: Optional additional rendered elements.
 * - icon: An icon.
 * - input_group: Flag to display as an input group.
 * - icon_position: Where an icon should be displayed.
 * - prefix: Markup to display before the input element.
 * - suffix: Markup to display after the input element.
 * - type: The type of input.
 *
 * @ingroup templates
 *
 * @see \\Drupal\\bootstrap\\Plugin\\Preprocess\\Input
 * @see template_preprocess_input()
 */
#}
{% if input_group or prefix or suffix or block('input') is defined %}
\t<div class=\"input-wrapper container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t<div class=\"input-content\">
\t\t\t\t\t{% apply spaceless %}
\t\t\t\t\t\t{% if input_group %}
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if prefix %}
\t\t\t\t\t\t\t{{ prefix }}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% block input %}
\t\t\t\t\t\t\t<input{{ attributes }}/>
\t\t\t\t\t\t{% endblock %}

\t\t\t\t\t\t{% if suffix %}
\t\t\t\t\t\t\t{{ suffix }}
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if input_group %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if children is defined %}
\t\t\t\t\t\t\t{{ children }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endapply %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endif %}", "input.html.twig", "themes/custom/endossmp_theme/templates/system/input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "apply" => 27, "block" => 36);
        static $filters = array("escape" => 33, "spaceless" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'apply', 'block'],
                ['escape', 'spaceless'],
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
