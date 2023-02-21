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

/* themes/gavias_vinor/templates/page/parts/panel.html.twig */
class __TwigTemplate_896be4afce7e00133c90eedf80829576a75c91356366e11d36fdd9cb3028a660 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first", [], "any", false, false, true, 1) || ($context["panel_second"] ?? null))) {
            // line 2
            echo "    ";
            $context["cl_panel"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
            // line 3
            echo "    ";
            $context["nub_panel"] = 0;
            // line 4
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first", [], "any", false, false, true, 4)) {
                echo " 
      ";
                // line 5
                $context["nub_panel"] = (($context["nub_panel"] ?? null) + 1);
                // line 6
                echo "    ";
            }
            // line 7
            echo "    ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second", [], "any", false, false, true, 7)) {
                echo "  
      ";
                // line 8
                $context["nub_panel"] = (($context["nub_panel"] ?? null) + 1);
                // line 9
                echo "    ";
            }
            // line 10
            echo "    
    ";
            // line 11
            if ((($context["nub_panel"] ?? null) == "1")) {
                // line 12
                echo "       ";
                $context["cl_panel"] = "col-lg-12 col-md-12 col-sm-12 col-xs-12";
                // line 13
                echo "    ";
            } elseif ((($context["nub_panel"] ?? null) == "2")) {
                // line 14
                echo "       ";
                $context["cl_panel"] = "col-lg-6 col-md-6 col-sm-6 col-xs-12";
                // line 15
                echo "    ";
            }
            echo "  

    <div class=\"area area-panel\">
      <div class=\"container\">
        <div class=\"area-panel-inner\">
          <div class=\"row\"> 
            ";
            // line 21
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first", [], "any", false, false, true, 21)) {
                // line 22
                echo "              <div class=\"panel_first ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_panel"] ?? null), 22, $this->source), "html", null, true);
                echo "\">
                <div class=\"panel-inner\">
                  ";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_first", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "
                </div>  
              </div>
            ";
            }
            // line 27
            echo " 
            ";
            // line 28
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second", [], "any", false, false, true, 28)) {
                // line 29
                echo "              <div class=\"panel_second ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cl_panel"] ?? null), 29, $this->source), "html", null, true);
                echo "\">
                <div class=\"panel-inner\">
                  ";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "panel_second", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 34
            echo " 
          </div>
        </div>  
      </div>  
    </div>
  ";
        }
        // line 39
        echo " ";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/parts/panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 39,  124 => 34,  117 => 31,  111 => 29,  109 => 28,  106 => 27,  99 => 24,  93 => 22,  91 => 21,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  70 => 11,  67 => 10,  64 => 9,  62 => 8,  57 => 7,  54 => 6,  52 => 5,  47 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/parts/panel.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\parts\\panel.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 2);
        static $filters = array("escape" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
