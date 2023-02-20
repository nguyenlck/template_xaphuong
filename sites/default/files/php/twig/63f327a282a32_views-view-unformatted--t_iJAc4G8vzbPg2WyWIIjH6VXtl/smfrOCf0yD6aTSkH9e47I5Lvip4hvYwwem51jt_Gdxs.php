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

/* themes/gavias_vinor/templates/views/term/views-view-unformatted--taxonomy-term.html.twig */
class __TwigTemplate_a41799e5d9dd2d82d56dfb0cdf63d72a937476025fb1b6700d9e7144dced86c4 extends \Twig\Template
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
        echo "
";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "<div class=\"categories-view-content view-content-wrap layout-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["gva_layout"] ?? null), 25, $this->source), "html", null, true);
        echo "\">
  
  ";
        // line 27
        if ((($context["gva_layout"] ?? null) == "masonry")) {
            // line 28
            echo "    <div class=\"post-masonry-style row\">
  ";
        }
        // line 29
        echo "  

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 32
            echo "      
      ";
            // line 33
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 34
            echo "       ";
            // line 35
            $context["row_classes"] = [0 => ((            // line 36
($context["default_row_class"] ?? null)) ? ("item") : ("")), 1 =>             // line 37
($context["gva_item_class"] ?? null)];
            // line 40
            echo "
      ";
            // line 41
            if ((((($context["gva_layout"] ?? null) == "grid") || (($context["gva_layout"] ?? null) == "small")) && ((($context["i"] ?? null) % ($context["gva_columns"] ?? null)) == 1))) {
                echo " 
        <div class=\"row\">
      ";
            }
            // line 43
            echo " 
      
        <div";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 45), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
            echo ">
          ";
            // line 46
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 46), 46, $this->source), "html", null, true);
            echo "
        </div>
     
      ";
            // line 49
            if ((((($context["gva_layout"] ?? null) == "grid") || (($context["gva_layout"] ?? null) == "small")) && (((($context["i"] ?? null) % ($context["gva_columns"] ?? null)) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null)))))) {
                echo " 
        </div>
      ";
            }
            // line 51
            echo " 

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
  ";
        // line 55
        if ((($context["gva_layout"] ?? null) == "masonry")) {
            // line 56
            echo "    </div>
  ";
        }
        // line 57
        echo " 
   
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/views/term/views-view-unformatted--taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 57,  125 => 56,  123 => 55,  120 => 54,  112 => 51,  106 => 49,  100 => 46,  96 => 45,  92 => 43,  86 => 41,  83 => 40,  81 => 37,  80 => 36,  79 => 35,  77 => 34,  75 => 33,  72 => 32,  68 => 31,  64 => 29,  60 => 28,  58 => 27,  52 => 25,  50 => 24,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/views/term/views-view-unformatted--taxonomy-term.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\views\\term\\views-view-unformatted--taxonomy-term.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "set" => 24, "for" => 31);
        static $filters = array("escape" => 21, "length" => 49);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
