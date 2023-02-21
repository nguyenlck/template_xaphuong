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

/* themes/gavias_vinor/templates/page/parts/topbar.html.twig */
class __TwigTemplate_e1f09b8b402dd524079d64c18a2de52f129c773191fbbcc7dd4a5a5c91bbe3e4 extends \Twig\Template
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
        echo "<div class=\"topbar\">
  <div class=\"container\">
    <div class=\"row\">
      
      <div class=\"topbar-left col-sm-6 col-xs-12 hidden-xs\">
        ";
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 6)) {
            // line 7
            echo "          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "topbar", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "
        ";
        }
        // line 9
        echo "      </div>

      <div class=\"topbar-right col-sm-6 col-xs-12\">
        <div class=\"social-list\">
          ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 13)) {
            // line 14
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 15
        echo " 
          ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 16)) {
            // line 17
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 18
        echo " 
          ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 19)) {
            // line 20
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 21
        echo " 
          ";
        // line 22
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 22)) {
            // line 23
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 24
        echo " 
          ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 25)) {
            // line 26
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 27
        echo " 
          ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 28)) {
            // line 29
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 30
        echo " 
          ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 31)) {
            // line 32
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 33
        echo " 
          ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 34)) {
            // line 35
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 36
        echo " 
          ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 37)) {
            // line 38
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 39
        echo " 
          ";
        // line 40
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 40)) {
            // line 41
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 42
        echo "  
          ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 43)) {
            // line 44
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 45
        echo "  
        </div>  

        <div class=\"gva-account-region hidden hidden-xs\">
          <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
          <div class=\"search-content\">
            <div class=\"content-inner\">  
              ";
        // line 52
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "account", [], "any", false, false, true, 52)) {
            // line 53
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "account", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
              ";
        } else {
            // line 55
            echo "                ";
            if (($context["custom_account"] ?? null)) {
                // line 56
                echo "                  <div class=\"mess-login text-center\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["custom_account"] ?? null), 56, $this->source));
                echo "</div>
                ";
            }
            // line 57
            echo "  
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
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/parts/topbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 58,  204 => 57,  198 => 56,  195 => 55,  189 => 53,  187 => 52,  178 => 45,  172 => 44,  170 => 43,  167 => 42,  161 => 41,  159 => 40,  156 => 39,  150 => 38,  148 => 37,  145 => 36,  139 => 35,  137 => 34,  134 => 33,  128 => 32,  126 => 31,  123 => 30,  117 => 29,  115 => 28,  112 => 27,  106 => 26,  104 => 25,  101 => 24,  95 => 23,  93 => 22,  90 => 21,  84 => 20,  82 => 19,  79 => 18,  73 => 17,  71 => 16,  68 => 15,  62 => 14,  60 => 13,  54 => 9,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/parts/topbar.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\parts\\topbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("escape" => 7, "raw" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'raw'],
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
