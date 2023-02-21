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

/* themes/gavias_vinor/templates/page/html.html.twig */
class __TwigTemplate_6ae56734bac70bf9acaf8d57a58653abe2e813008fefe8678385d9346f879e39 extends \Twig\Template
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
        // line 26
        echo "<!DOCTYPE html>
<html";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 27, $this->source), "html", null, true);
        echo ">
  <head> 
    <head-placeholder token=\"";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 29, $this->source));
        echo "\">
    
    <title>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 31, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 32, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 33
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 33, $this->source));
        echo "\">
    
    ";
        // line 35
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 35, $this->source));
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 37, $this->source), "html", null, true);
        echo "/css/custom.css\" media=\"screen\" />
    <link rel=\"stylesheet\" href=\"";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["theme_path"] ?? null), 38, $this->source), "html", null, true);
        echo "/css/update.css\" media=\"screen\" />
    
    ";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["links_google_fonts"] ?? null), 40, $this->source));
        echo "

    ";
        // line 42
        if (($context["customize_styles"] ?? null)) {
            // line 43
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_styles"] ?? null), 43, $this->source));
            echo "
    ";
        }
        // line 45
        echo "
    ";
        // line 46
        if (($context["customize_css"] ?? null)) {
            // line 47
            echo "      <style type=\"text/css\">
        ";
            // line 48
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["customize_css"] ?? null), 48, $this->source));
            echo "
      </style>
     ";
        }
        // line 50
        echo " 

  </head>
  ";
        // line 53
        $context["body_classes"] = [0 => ((        // line 54
($context["logged_in"] ?? null)) ? ("logged-in") : ("")), 1 => (( !        // line 55
($context["root_path"] ?? null)) ? ("frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 55, $this->source))))), 2 => ((        // line 56
($context["node_type"] ?? null)) ? (("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 56, $this->source)))) : ("")), 3 => ((        // line 57
($context["node_id"] ?? null)) ? (("node-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_id"] ?? null), 57, $this->source)))) : (""))];
        // line 60
        echo "  <body";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 60), 60, $this->source), "html", null, true);
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 62
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 64
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 64, $this->source), "html", null, true);
        echo "
    ";
        // line 65
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 65, $this->source), "html", null, true);
        echo "
    ";
        // line 66
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 66, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 67
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 67, $this->source));
        echo "\">
    ";
        // line 68
        if (($context["addon_template"] ?? null)) {
            // line 69
            echo "      <div class=\"permission-save-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["save_customize_permission"] ?? null), 69, $this->source), "html", null, true);
            echo "\">
        ";
            // line 70
            $this->loadTemplate(($context["addon_template"] ?? null), "themes/gavias_vinor/templates/page/html.html.twig", 70)->display($context);
            // line 71
            echo "      </div>  
    ";
        }
        // line 73
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/page/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 73,  153 => 71,  151 => 70,  146 => 69,  144 => 68,  140 => 67,  136 => 66,  132 => 65,  128 => 64,  123 => 62,  117 => 60,  115 => 57,  114 => 56,  113 => 55,  112 => 54,  111 => 53,  106 => 50,  100 => 48,  97 => 47,  95 => 46,  92 => 45,  86 => 43,  84 => 42,  79 => 40,  74 => 38,  70 => 37,  65 => 35,  60 => 33,  56 => 32,  52 => 31,  47 => 29,  42 => 27,  39 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/page/html.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\page\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 42, "set" => 53, "include" => 70);
        static $filters = array("escape" => 27, "raw" => 29, "safe_join" => 31, "clean_class" => 55, "t" => 62);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'include'],
                ['escape', 'raw', 'safe_join', 'clean_class', 't'],
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
