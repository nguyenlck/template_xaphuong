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

/* themes/gavias_vinor/templates/page/parts/main-no-sidebar.html.twig */
class __TwigTemplate_9af4d03b6c9ce2ca46f32032f8ac8213da6995521f3f06971b282e62fe1a8f91 extends \Twig\Template
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
        // line 7
        echo "
<div class=\"content-main-inner\">
\t<div class=\"row\">
\t\t
\t\t";
        // line 11
        $context["cl_main"] = "col-md-12 col-xs-12";
        // line 12
        echo "\t\t
\t\t<div id=\"page-main-content\" class=\"main-content ";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_main"] ?? null), 13, $this->source), "html", null, true);
        echo "\">

\t\t\t<div class=\"main-content-inner\">
\t\t\t\t
\t\t\t\t";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 17)) {
            // line 18
            echo "\t\t\t\t\t<div class=\"content-top\">
\t\t\t\t\t\t";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_top", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 22
        echo "
\t\t\t\t";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 23)) {
            // line 24
            echo "\t\t\t\t\t<div class=\"content-main\">
\t\t\t\t\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 29)) {
            // line 30
            echo "\t\t\t\t\t<div class=\"content-bottom\">
\t\t\t\t\t\t";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_bottom", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 34
        echo "\t\t\t</div>

\t\t</div>

\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/parts/main-no-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 34,  90 => 31,  87 => 30,  85 => 29,  82 => 28,  76 => 25,  73 => 24,  71 => 23,  68 => 22,  62 => 19,  59 => 18,  57 => 17,  50 => 13,  47 => 12,  45 => 11,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/parts/main-no-sidebar.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\parts\\main-no-sidebar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 17);
        static $filters = array("escape" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
