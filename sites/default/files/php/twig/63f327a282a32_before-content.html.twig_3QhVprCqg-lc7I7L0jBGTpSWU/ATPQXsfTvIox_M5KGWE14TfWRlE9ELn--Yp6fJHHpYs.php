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

/* themes/gavias_vinor/templates/page/parts/before-content.html.twig */
class __TwigTemplate_a2d2cda9b5ffb0621b36572b633cfa552db9dde17e7b881914f74e636bed1891 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 1)) {
            // line 2
            echo "  <div class=\"breadcrumbs\">
    ";
            // line 3
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumbs", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
            echo "  
  </div>
";
        }
        // line 6
        echo "
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promotion", [], "any", false, false, true, 7)) {
            // line 8
            echo "  <div class=\"promotion area\">
    <div class=\"container\">
      <div class=\"content-inner\">
        ";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "promotion", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
      </div>
    </div>    
  </div>
";
        }
        // line 15
        echo " 

";
        // line 17
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 17)) {
            // line 18
            echo "  <div class=\"help show\">
    <div class=\"container\">
      <div class=\"control-panel\"><i class=\"fa fa-cogs\"></i></div>
      <div class=\"content-inner\">
        ";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 22), 22, $this->source), "html", null, true);
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 27
        echo "
<div class=\"clearfix\"></div>

";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 30)) {
            // line 31
            echo "  <div class=\"before_content area\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-xs-12\">
          ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_content", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "
          </div>
      </div>
    </div>
  </div>
";
        }
        // line 41
        echo "
<div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/parts/before-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 41,  101 => 35,  95 => 31,  93 => 30,  88 => 27,  80 => 22,  74 => 18,  72 => 17,  68 => 15,  60 => 11,  55 => 8,  53 => 7,  50 => 6,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/parts/before-content.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\parts\\before-content.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
