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

/* themes/gavias_vinor/templates/page/header-3.html.twig */
class __TwigTemplate_03a5c26698ed3a200b69c257c66fced086e87132ec242f12a7c364b82e7ecb38 extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-v3\">
  
  ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_vinor/templates/page/header-3.html.twig", 3)->display($context);
        // line 4
        echo "
    <div class=\"header-bottom ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_menu"] ?? null), 5, $this->source), "html", null, true);
        echo "\">
      <div class=\"main-menu\">
        <div class=\"container\">
           <div class=\"row\">
              <div class=\"col-xs-2\">
                ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 10)) {
            // line 11
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
                ";
        }
        // line 12
        echo "    
              </div>
              <div class=\"col-xs-10 area-main-menu\">
                <div class=\"area-inner menu-hover\">
                  <div class=\"gva-offcanvas-inner\">
                    <div class=\"close-offcanvas hidden-lg hidden-md\"><a><i class=\"fa fa-times\"></i></a></div>
                    ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 18)) {
            // line 19
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 20
        echo "  
                    ";
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 21)) {
            // line 22
            echo "                      <div class=\"after-offcanvas hidden-lg hidden-md\">
                        ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
                      </div>
                   ";
        }
        // line 26
        echo "                  </div>
                  
                  <div id=\"menu-bar\" class=\"menu-bar mobile hidden-lg hidden-md\">
                    <span class=\"one\"></span>
                    <span class=\"two\"></span>
                    <span class=\"three\"></span>
                  </div>

                  ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_another", [], "any", false, false, true, 34)) {
            // line 35
            echo "                    <div class=\"menu-another hidden-xs hidden-sm\">
                      <div id=\"menu-bar-another\" class=\"menu-bar\">
                        <span class=\"one\"></span>
                        <span class=\"two\"></span>
                        <span class=\"three\"></span>
                      </div>
                      <div class=\"content-inner\">
                        ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_another", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>  
                  ";
        }
        // line 46
        echo "
                  ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 47)) {
            // line 48
            echo "                    <div class=\"gva-search-region search-region\">
                      <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                      <div class=\"search-content\">
                        <a class=\"close\"><i class=\"fa fa-times\"></i></a> 
                        <div class=\"content-inner\"> 
                          ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
                        </div>
                      </div>  
                    </div>
                 ";
        }
        // line 58
        echo "                  
                </div>   
              </div>
           </div>
        </div>
      </div>
    </div>
   
</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/header-3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 58,  134 => 53,  127 => 48,  125 => 47,  122 => 46,  115 => 42,  106 => 35,  104 => 34,  94 => 26,  88 => 23,  85 => 22,  83 => 21,  80 => 20,  74 => 19,  72 => 18,  64 => 12,  58 => 11,  56 => 10,  48 => 5,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/header-3.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\header-3.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "if" => 10);
        static $filters = array("escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
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
