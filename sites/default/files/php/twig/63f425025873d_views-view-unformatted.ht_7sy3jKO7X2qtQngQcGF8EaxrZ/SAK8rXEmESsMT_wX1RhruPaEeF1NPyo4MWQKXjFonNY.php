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

/* themes/gavias_vinor/templates/views/views-view-unformatted.html.twig */
class __TwigTemplate_72263a12773376d883071b4503734e9d5e2f1c4359ea714f7f03919dc01a813d extends \Twig\Template
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
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        echo "<div class=\"view-content-wrap ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gva_carousel"] ?? null), "class", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\" data-items=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["gva_carousel"] ?? null), "columns", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
        echo "\">
   ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "     ";
            // line 26
            $context["row_classes"] = [0 => ((            // line 27
($context["default_row_class"] ?? null)) ? ("item") : (""))];
            // line 30
            echo "     <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 30), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
            echo ">
       ";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
     </div>
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/views/views-view-unformatted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 34,  68 => 31,  63 => 30,  61 => 27,  60 => 26,  58 => 25,  54 => 24,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/views/views-view-unformatted.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\views\\views-view-unformatted.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 24, "set" => 26);
        static $filters = array("escape" => 21);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
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
