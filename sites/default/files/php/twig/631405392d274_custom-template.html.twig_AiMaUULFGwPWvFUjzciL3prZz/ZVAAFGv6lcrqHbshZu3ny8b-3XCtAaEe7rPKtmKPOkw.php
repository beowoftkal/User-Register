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

/* modules/custom/templates/custom-template.html.twig */
class __TwigTemplate_a5dadbdeb0c0efe505518e1222fad3d63948cbda71fac02580ff48631784761f extends \Twig\Template
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
        // line 2
        echo "
<form method='post' action=''>
";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "form_build_id", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "
";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "form_id", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "
";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "form_token", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "
<div class='form'>";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</div>
<div class='form'>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "phone", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
        echo "</div>
<div class='form'>";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "email", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "</div>
<div class='form'>";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "age", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "</div>
<div class='form'>";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "describeseft", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</div>
<div class='form'>";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "save", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "</div>
</form>
";
    }

    public function getTemplateName()
    {
        return "modules/custom/templates/custom-template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  55 => 7,  51 => 6,  47 => 5,  43 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# {{items}} #}

<form method='post' action=''>
{{items.form_build_id}}
{{items.form_id}}
{{items.form_token}}
<div class='form'>{{items.name}}</div>
<div class='form'>{{items.phone}}</div>
<div class='form'>{{items.email}}</div>
<div class='form'>{{items.age}}</div>
<div class='form'>{{items.describeseft}}</div>
<div class='form'>{{items.save}}</div>
</form>
", "modules/custom/templates/custom-template.html.twig", "C:\\xampp\\xamp\\htdocs\\drupal\\modules\\custom\\templates\\custom-template.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
}
