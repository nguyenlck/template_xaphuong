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

/* themes/gavias_vinor/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig */
class __TwigTemplate_6f58439f7e94f85d6b6a0e87a6a62edb63c5cf13fa8f2a7c61ecf63fd774d8bd extends \Twig\Template
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
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "slidershow-v1"], "method", false, false, true, 2), 2, $this->source), "html", null, true);
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
   ";
        // line 9
        $context["i"] = 0;
        // line 10
        echo "   ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 11
            echo "      
      ";
            // line 12
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 13
            echo "
      ";
            // line 14
            if (((($context["i"] ?? null) % 3) == 1)) {
                // line 15
                echo "         <div class=\"item\">
            <div class=\"post-large\">";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 16), 16, $this->source));
                echo "</div>
               <div class=\"posts-small\">
                  
      ";
            } else {
                // line 20
                echo "
         <div class=\"post-small-item\">
            <div class=\"item content\">";
                // line 22
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 22), 22, $this->source));
                echo "</div>
         </div> 
      ";
            }
            // line 24
            echo "   
              
      ";
            // line 26
            if ((((($context["i"] ?? null) % 3) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                // line 27
                echo "         </div></div>
      ";
            }
            // line 28
            echo "   
    
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo " 

";
        // line 32
        if (($context["attributes"] ?? null)) {
            // line 33
            echo "</div>
";
        }
        // line 35
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 35,  122 => 33,  120 => 32,  116 => 30,  108 => 28,  104 => 27,  102 => 26,  98 => 24,  92 => 22,  88 => 20,  81 => 16,  78 => 15,  76 => 14,  73 => 13,  71 => 12,  68 => 11,  63 => 10,  61 => 9,  58 => 8,  52 => 6,  50 => 5,  47 => 4,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/views/slideshows/views-view-gvaowl--slider-v1.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\views\\slideshows\\views-view-gvaowl--slider-v1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "set" => 9, "for" => 10);
        static $filters = array("escape" => 2, "raw" => 16, "length" => 26);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'raw', 'length'],
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
