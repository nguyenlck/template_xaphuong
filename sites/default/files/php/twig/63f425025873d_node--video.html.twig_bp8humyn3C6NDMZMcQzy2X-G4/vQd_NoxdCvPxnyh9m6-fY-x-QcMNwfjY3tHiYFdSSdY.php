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

/* themes/gavias_vinor/templates/node/node--video.html.twig */
class __TwigTemplate_bc99bff018f6e219207e11b26135599cdbdc61ff82db4f56a0d340a787ba394c extends \Twig\Template
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
        // line 63
        $context["classes"] = [0 => "node", 1 => "node-detail", 2 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 66
($context["node"] ?? null), "bundle", [], "any", false, false, true, 66), 66, $this->source))), 3 => ((twig_get_attribute($this->env, $this->source,         // line 67
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 67)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 68
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 68)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 69
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 69)) ? ("node--unpublished") : ("")), 6 => ((        // line 70
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 70, $this->source)))) : ("")), 7 => "clearfix"];
        // line 74
        echo "
<!-- Start Display article for teaser page -->
";
        // line 76
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
  <article";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 77), 77, $this->source), "html", null, true);
            echo ">
    <div class=\"post-block\">
      
      <div class=\"post-thumbnail\">
        ";
            // line 81
            if (($context["gva_iframe"] ?? null)) {
                // line 82
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null), 82, $this->source));
                echo "
        ";
            } else {
                // line 84
                echo "          ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 85
            echo "  
      </div>

      <div class=\"post-content\">
        ";
            // line 89
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 89, $this->source), "html", null, true);
            echo "
           <h3";
            // line 90
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 90), 90, $this->source), "html", null, true);
            echo "><a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 90, $this->source), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 90, $this->source), "html", null, true);
            echo "</a></h3>
        ";
            // line 91
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 91, $this->source), "html", null, true);
            echo "         
        <div class=\"post-meta\">
          <span class=\"post-created\"> ";
            // line 93
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 93, $this->source), "html", null, true);
            echo " </span> /
          <span class=\"post-comment\"> 
            <a href=\"";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 95, $this->source), "html", null, true);
            echo "/#comments\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 95, $this->source), "html", null, true);
            echo " Comments</a>
          </span>
        </div>
        <div class=\"post-description\">
          ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "
        </div>
      </div>

    </div>
  </article>  

<!-- End Display article for teaser page -->
";
        } else {
            // line 108
            echo "<!-- Start Display article for detail page -->

<article";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 110), 110, $this->source), "html", null, true);
            echo ">
  <div class=\"post-block\">
      
    <div class=\"post-thumbnail\">
      ";
            // line 114
            if (($context["gva_iframe"] ?? null)) {
                // line 115
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["gva_iframe"] ?? null), 115, $this->source));
                echo "
      ";
            } else {
                // line 117
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "
      ";
            }
            // line 118
            echo "  
    </div>

    <div class=\"post-content\">
      ";
            // line 122
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 122, $this->source), "html", null, true);
            echo "
         <h1";
            // line 123
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "post-title"], "method", false, false, true, 123), 123, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 123, $this->source), "html", null, true);
            echo "</h1>
      ";
            // line 124
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 124, $this->source), "html", null, true);
            echo "         
      <div class=\"post-meta\">
        <span class=\"post-created\"> ";
            // line 126
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["date"] ?? null), 126, $this->source), "html", null, true);
            echo " </span> /
        <span class=\"post-comment\"> 
          <a href=\"";
            // line 128
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 128, $this->source), "html", null, true);
            echo "/#comments\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["comment_count"] ?? null), 128, $this->source), "html", null, true);
            echo " Comments</a>
        </span>
      </div>
      
      ";
            // line 132
            if (($context["display_submitted"] ?? null)) {
                // line 133
                echo "        <div class=\"node__meta hidden\">
          ";
                // line 134
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null), 134, $this->source), "html", null, true);
                echo "
          <span";
                // line 135
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null), 135, $this->source), "html", null, true);
                echo ">
            ";
                // line 136
                echo t("Submitted by @author_name on @date", array("@author_name" => ($context["author_name"] ?? null), "@date" => ($context["date"] ?? null), ));
                // line 137
                echo "          </span>
          ";
                // line 138
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null), 138, $this->source), "html", null, true);
                echo "
        </div>
      ";
            }
            // line 141
            echo "
      <div";
            // line 142
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method", false, false, true, 142), 142, $this->source), "html", null, true);
            echo ">
        ";
            // line 143
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 143, $this->source), "field_image", "field_video_embed", "comment"), "html", null, true);
            echo "
      </div>
      <div id=\"node-single-comment\">
        ";
            // line 146
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            echo "
      </div>

    </div>

  </div>

</article>

<!-- End Display article for detail page -->
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/node/node--video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 146,  215 => 143,  211 => 142,  208 => 141,  202 => 138,  199 => 137,  197 => 136,  193 => 135,  189 => 134,  186 => 133,  184 => 132,  175 => 128,  170 => 126,  165 => 124,  159 => 123,  155 => 122,  149 => 118,  143 => 117,  137 => 115,  135 => 114,  128 => 110,  124 => 108,  112 => 99,  103 => 95,  98 => 93,  93 => 91,  85 => 90,  81 => 89,  75 => 85,  69 => 84,  63 => 82,  61 => 81,  54 => 77,  50 => 76,  46 => 74,  44 => 70,  43 => 69,  42 => 68,  41 => 67,  40 => 66,  39 => 63,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/node/node--video.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\node\\node--video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 63, "if" => 76, "trans" => 136);
        static $filters = array("clean_class" => 66, "escape" => 77, "raw" => 82, "without" => 143);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'escape', 'raw', 'without'],
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
