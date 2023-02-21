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

/* themes/gavias_vinor/templates/page/header-2.html.twig */
class __TwigTemplate_31ed3ea180ec4b860697a6689e76378d7f6ded32efb7d95b076042a4bb7aea1e extends \Twig\Template
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
        echo "<header id=\"header\" class=\"header-v2\">
  
  ";
        // line 3
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/parts/topbar.html.twig"), "themes/gavias_vinor/templates/page/header-2.html.twig", 3)->display($context);
        // line 4
        echo "
  <div class=\"header-main\">
    <div class=\"container\">
       <div class=\"header-main-inner\">
          <div class=\"row\">
               <div class=\"col-md-4 col-xs-12\">
               ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 10)) {
            // line 11
            echo "                  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "
               ";
        }
        // line 13
        echo "               </div>

               <div class=\"col-md-8 col-xs-12 header-right\">
                  ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 16)) {
            // line 17
            echo "                     <div class=\"header-right-inner\">
                        ";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
            echo "
                     </div>
                   ";
        }
        // line 21
        echo "               </div>
            </div>
       </div>
    </div>
  </div>

  <div class=\"header-bottom ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_menu"] ?? null), 27, $this->source), "html", null, true);
        echo "\">
    <div class=\"main-menu\">
        <div class=\"container\">
           <div class=\"row\">
              <div class=\"col-xs-12 area-main-menu\">
                <div class=\"area-inner menu-hover\">
                  <div class=\"gva-offcanvas-inner\">
                    <div class=\"close-offcanvas hidden-lg hidden-md\"><a><i class=\"fa fa-times\"></i></a></div>
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 35)) {
            // line 36
            echo "                      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "
                    ";
        }
        // line 37
        echo "  
                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 38)) {
            // line 39
            echo "                      <div class=\"after-offcanvas hidden-lg hidden-md\">
                        ";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "offcanvas", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "
                      </div>
                   ";
        }
        // line 43
        echo "                  </div> 
                  
                  <div id=\"menu-bar\" class=\"menu-bar mobile hidden-lg hidden-md\">
                    <span class=\"one\"></span>
                    <span class=\"two\"></span>
                    <span class=\"three\"></span>
                  </div>

                  ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_another", [], "any", false, false, true, 51)) {
            // line 52
            echo "                    <div class=\"menu-another hidden-xs hidden-sm\">
                      <div id=\"menu-bar-another\" class=\"menu-bar\">
                        <span class=\"one\"></span>
                        <span class=\"two\"></span>
                        <span class=\"three\"></span>
                      </div>
                      <div class=\"content-inner\">
                        ";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "menu_another", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
            echo "
                      </div>
                    </div>  
                  ";
        }
        // line 63
        echo "
                  ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 64)) {
            // line 65
            echo "                    <div class=\"gva-search-region search-region\">
                      <span class=\"icon\"><i class=\"fa fa-search\"></i></span>
                      <div class=\"search-content\">
                        <a class=\"close\"><i class=\"fa fa-times\"></i></a> 
                        <div class=\"content-inner\"> 
                          ";
            // line 70
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "search", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            echo "
                        </div>
                      </div>  
                    </div>
                  ";
        }
        // line 75
        echo "
                </div>   
              </div>
           </div>
        </div>
     </div>
  </div> 

  ";
        // line 83
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breaking_news", [], "any", false, false, true, 83)) {
            // line 84
            echo "    <div class=\"breaking-news\">
      <div class=\"container\">
        <div class=\"main-breaking clearfix\">
          <div class=\"title\">
            ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breaking news"));
            echo "
          </div>
          <div class=\"content-inner\">";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breaking_news", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "</div> 
        </div>  
      </div> 
    </div>
  ";
        }
        // line 94
        echo " 

</header>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/header-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 94,  189 => 90,  184 => 88,  178 => 84,  176 => 83,  166 => 75,  158 => 70,  151 => 65,  149 => 64,  146 => 63,  139 => 59,  130 => 52,  128 => 51,  118 => 43,  112 => 40,  109 => 39,  107 => 38,  104 => 37,  98 => 36,  96 => 35,  85 => 27,  77 => 21,  71 => 18,  68 => 17,  66 => 16,  61 => 13,  55 => 11,  53 => 10,  45 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/header-2.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\header-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 3, "if" => 10);
        static $filters = array("escape" => 11, "t" => 88);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 't'],
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
