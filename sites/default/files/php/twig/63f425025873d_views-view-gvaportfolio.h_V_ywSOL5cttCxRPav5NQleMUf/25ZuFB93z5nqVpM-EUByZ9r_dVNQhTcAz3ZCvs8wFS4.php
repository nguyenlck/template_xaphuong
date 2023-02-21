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

/* modules/gavias_view/templates/views-view-gvaportfolio.html.twig */
class __TwigTemplate_e5d2c235921e412bb1939adabce3ca5501273265a50d4376b5a6da2965cc6134 extends \Twig\Template
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
        if (($context["attributes"] ?? null)) {
            // line 2
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 2, $this->source), "html", null, true);
            echo ">
";
        }
        // line 4
        echo "   
   ";
        // line 5
        if (($context["title"] ?? null)) {
            // line 6
            echo "      <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 6, $this->source), "html", null, true);
            echo "</h3>
   ";
        }
        // line 8
        echo "  
  <nav class=\"portfolio-filter\">
    <ul class=\"nav nav-tabs\">
      ";
        // line 11
        if (($context["show_all"] ?? null)) {
            // line 12
            echo "        <li><a class=\"btn-filter all active ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 12, $this->source), "html", null, true);
            echo "\" href=\"#\" data-filter=\"*\"><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
            echo "</span></a></li>
      ";
        }
        // line 14
        echo "
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["terms"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
            // line 16
            echo "        <li class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "tid", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\"><a href=\"#\" class=\"btn-filter ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 16, $this->source), "html", null, true);
            echo "\" data-filter=\".";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "tid", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "\"><span>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["term"], "name", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "</span></a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul> 
  </nav> 

  <div class=\"gva-portfolio-items clearfix\">
    <div class=\"row\">
      <div class=\"isotope-items view-portfolio\" data-pid=\"";
        // line 23
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pid"] ?? null), 23, $this->source), "html", null, true);
        echo "\">
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 25
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 25), 25, $this->source));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "      </div>
    </div>
  </div>  
   
";
        // line 31
        if (($context["attributes"] ?? null)) {
            // line 32
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/gavias_view/templates/views-view-gvaportfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  125 => 31,  119 => 27,  110 => 25,  106 => 24,  102 => 23,  95 => 18,  80 => 16,  76 => 15,  73 => 14,  65 => 12,  63 => 11,  58 => 8,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/gavias_view/templates/views-view-gvaportfolio.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\modules\\gavias_view\\templates\\views-view-gvaportfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "for" => 15);
        static $filters = array("escape" => 2, "t" => 12, "raw" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 't', 'raw'],
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
