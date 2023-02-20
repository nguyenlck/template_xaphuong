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

/* themes/gavias_vinor/templates/page/footer.html.twig */
class __TwigTemplate_40ff92c6f949bcaf22ec19cc4ea7088025e361c85edbd1ed33ffbd00e8e6ac4b extends \Twig\Template
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
        echo "<footer id=\"footer\" class=\"footer\">
  
  ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 3)) {
            // line 4
            echo "   <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <div class=\"before_footer area\">
                ";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "before_footer", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        </div>     
      </div>   
    </div> 
   ";
        }
        // line 16
        echo "   
   <div class=\"footer-center\">
      <div class=\"container\">      
         <div class=\"row\">
            ";
        // line 20
        $context["footer_count"] = 0;
        // line 21
        echo "              
              ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 22)) {
            // line 23
            echo "                ";
            $context["footer_count"] = (($context["footer_count"] ?? null) + 1);
            // line 24
            echo "              ";
        }
        echo "  
              
              ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 26)) {
            // line 27
            echo "                ";
            $context["footer_count"] = (($context["footer_count"] ?? null) + 1);
            // line 28
            echo "              ";
        }
        echo "  
              
              ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 30)) {
            // line 31
            echo "                ";
            $context["footer_count"] = (($context["footer_count"] ?? null) + 1);
            // line 32
            echo "              ";
        }
        echo "  
              
              ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 34)) {
            // line 35
            echo "                ";
            $context["footer_count"] = (($context["footer_count"] ?? null) + 1);
            // line 36
            echo "              ";
        }
        echo "   

              ";
        // line 38
        $context["col_class"] = "footer-1col col-lg-12 col-md-12 col-md-12 col-xs-12";
        // line 39
        echo "
              ";
        // line 40
        if ((($context["footer_count"] ?? null) == 2)) {
            // line 41
            echo "                  ";
            $context["col_class"] = "footer-2col col-lg-6 col-md-6 col-md-6 col-xs-12";
            // line 42
            echo "              ";
        } elseif ((($context["footer_count"] ?? null) == 3)) {
            echo "  
                  ";
            // line 43
            $context["col_class"] = "footer-3col col-lg-4 col-md-4 col-md-1 col-xs-12";
            // line 44
            echo "              ";
        } elseif ((($context["footer_count"] ?? null) == 4)) {
            // line 45
            echo "                   ";
            $context["col_class"] = "footer-4col col-lg-3 col-md-3 col-md-6 col-xs-12";
            // line 46
            echo "              ";
        }
        // line 47
        echo "              
              ";
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 48)) {
            // line 49
            echo "                <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_class"] ?? null), 49, $this->source), "html", null, true);
            echo " column\">
                  ";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 53
        echo "
              ";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 54)) {
            // line 55
            echo "                <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_class"] ?? null), 55, $this->source), "html", null, true);
            echo " column\">
                  ";
            // line 56
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 59
        echo "
              ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 60)) {
            // line 61
            echo "                <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_class"] ?? null), 61, $this->source), "html", null, true);
            echo " column\">
                  ";
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 65
        echo "
              ";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 66)) {
            // line 67
            echo "                <div class=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["col_class"] ?? null), 67, $this->source), "html", null, true);
            echo " column\">
                  ";
            // line 68
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_four", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
            echo "
                </div> 
              ";
        }
        // line 71
        echo "         </div>   
      </div>
   </div>   
  
  ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_footer", [], "any", false, false, true, 75)) {
            // line 76
            echo "    <div class=\"after-footer area\">
      <div class=\"container\">
        <div class=\"content-inner\">
          ";
            // line 79
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "after_footer", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
            echo "
        </div>
      </div>      
    </div>
  ";
        }
        // line 84
        echo "
   ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 85)) {
            // line 86
            echo "   <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 89), 89, $this->source), "html", null, true);
            echo "
        </div>   
      </div>   
   </div>
 ";
        }
        // line 94
        echo " <div class=\"return-top default hidden-xs\"><i class=\"fa fa-angle-up\"></i></div>
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 94,  238 => 89,  233 => 86,  231 => 85,  228 => 84,  220 => 79,  215 => 76,  213 => 75,  207 => 71,  201 => 68,  196 => 67,  194 => 66,  191 => 65,  185 => 62,  180 => 61,  178 => 60,  175 => 59,  169 => 56,  164 => 55,  162 => 54,  159 => 53,  153 => 50,  148 => 49,  146 => 48,  143 => 47,  140 => 46,  137 => 45,  134 => 44,  132 => 43,  127 => 42,  124 => 41,  122 => 40,  119 => 39,  117 => 38,  111 => 36,  108 => 35,  106 => 34,  100 => 32,  97 => 31,  95 => 30,  89 => 28,  86 => 27,  84 => 26,  78 => 24,  75 => 23,  73 => 22,  70 => 21,  68 => 20,  62 => 16,  52 => 9,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/footer.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 3, "set" => 20);
        static $filters = array("escape" => 9);
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
