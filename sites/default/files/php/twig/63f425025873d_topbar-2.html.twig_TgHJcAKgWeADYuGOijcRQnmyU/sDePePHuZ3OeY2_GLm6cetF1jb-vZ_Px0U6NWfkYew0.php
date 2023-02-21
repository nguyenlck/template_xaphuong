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

/* themes/gavias_vinor/templates/page/parts/topbar-2.html.twig */
class __TwigTemplate_a400b428172caaca2bf216c981397482ec3f074855e7345a935acc36766097cc extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breaking_news", [], "any", false, false, true, 6)) {
            // line 7
            echo "          <div class=\"breaking-news\">
            <div class=\"content-inner clearfix\">
              <div class=\"title\">
                ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breaking news"));
            echo "
              </div>
              <div class=\"content\">";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breaking_news", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</div> 
            </div> 
          </div>
        ";
        }
        // line 16
        echo "      </div>

      <div class=\"topbar-right col-sm-6 col-xs-12\">
        <div class=\"social-list\">
          ";
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 20)) {
            // line 21
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "facebook", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-facebook\"></i></a>
          ";
        }
        // line 22
        echo " 
          ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 23)) {
            // line 24
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "twitter", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-twitter-square\"></i></a>
          ";
        }
        // line 25
        echo " 
          ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 26)) {
            // line 27
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "skype", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-skype\"></i></a>
          ";
        }
        // line 28
        echo " 
          ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 29)) {
            // line 30
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "instagram", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-instagram\"></i></a>
          ";
        }
        // line 31
        echo " 
          ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 32)) {
            // line 33
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "dribbble", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-dribbble\"></i></a>
          ";
        }
        // line 34
        echo " 
          ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 35)) {
            // line 36
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "linkedin", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-linkedin-square\"></i></a>
          ";
        }
        // line 37
        echo " 
          ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 38)) {
            // line 39
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "pinterest", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-pinterest\"></i></a>
          ";
        }
        // line 40
        echo " 
          ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 41)) {
            // line 42
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "google", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-google-plus-square\"></i></a>
          ";
        }
        // line 43
        echo " 
          ";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 44)) {
            // line 45
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "youtube", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-youtube-square\"></i></a>
          ";
        }
        // line 46
        echo " 
          ";
        // line 47
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 47)) {
            // line 48
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "vimeo", [], "any", false, false, true, 48), 48, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-vimeo-square\"></i></a>
          ";
        }
        // line 49
        echo "  
          ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 50)) {
            // line 51
            echo "            <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["custom_social_link"] ?? null), "tumblr", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "\"><i class=\"fa fa-tumblr-square\"></i></a>
          ";
        }
        // line 52
        echo "  
        </div>  

        <div class=\"gva-account-region hidden-xs\">
          <span class=\"icon\"><i class=\"fa fa-user\"></i></span>
          <div class=\"search-content\">
            <div class=\"content-inner\">  
              ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "account", [], "any", false, false, true, 59)) {
            // line 60
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "account", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "
              ";
        } else {
            // line 62
            echo "                ";
            if (($context["custom_account"] ?? null)) {
                // line 63
                echo "                  <div class=\"mess-login text-center\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["custom_account"] ?? null), 63, $this->source));
                echo "</div>
                ";
            }
            // line 64
            echo "  
              ";
        }
        // line 65
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
        return "themes/gavias_vinor/templates/page/parts/topbar-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 65,  215 => 64,  209 => 63,  206 => 62,  200 => 60,  198 => 59,  189 => 52,  183 => 51,  181 => 50,  178 => 49,  172 => 48,  170 => 47,  167 => 46,  161 => 45,  159 => 44,  156 => 43,  150 => 42,  148 => 41,  145 => 40,  139 => 39,  137 => 38,  134 => 37,  128 => 36,  126 => 35,  123 => 34,  117 => 33,  115 => 32,  112 => 31,  106 => 30,  104 => 29,  101 => 28,  95 => 27,  93 => 26,  90 => 25,  84 => 24,  82 => 23,  79 => 22,  73 => 21,  71 => 20,  65 => 16,  58 => 12,  53 => 10,  48 => 7,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/parts/topbar-2.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\parts\\topbar-2.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 6);
        static $filters = array("t" => 10, "escape" => 12, "raw" => 63);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape', 'raw'],
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
