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

/* themes/gavias_vinor/templates/views/views-view-grid.html.twig */
class __TwigTemplate_c8d0be908e0d712e901b8d74976faa92cc5d67e5bb1f0a7a172c9c5c1758a944 extends \Twig\Template
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
        // line 30
        $context["classes"] = [0 => "views-view-grid", 1 => twig_get_attribute($this->env, $this->source,         // line 32
($context["gva_masonry"] ?? null), "class", [], "any", false, false, true, 32), 2 => twig_get_attribute($this->env, $this->source,         // line 33
($context["options"] ?? null), "alignment", [], "any", false, false, true, 33), 3 => ("cols-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 34
($context["options"] ?? null), "columns", [], "any", false, false, true, 34), 34, $this->source)), 4 => "clearfix"];
        // line 38
        echo "
  ";
        // line 39
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 39) == "1")) {
            // line 40
            echo "    ";
            $context["xclass"] = [0 => "col-lg-12 col-md-12 col-sm-12 col-xs-12"];
            // line 41
            echo "  ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 41) == "2")) {
            // line 42
            echo "    ";
            $context["xclass"] = [0 => "col-lg-6 col-md-6 col-sm-6 col-xs-12"];
            // line 43
            echo "  ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 43) == "3")) {
            // line 44
            echo "    ";
            $context["xclass"] = [0 => "col-lg-4 col-md-4 col-sm-4 col-xs-12"];
            // line 45
            echo "  ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 45) == "4")) {
            // line 46
            echo "    ";
            $context["xclass"] = [0 => "col-lg-3 col-md-3 col-sm-6 col-xs-12"];
            // line 47
            echo "  ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "columns", [], "any", false, false, true, 47) == "6")) {
            // line 48
            echo "    ";
            $context["xclass"] = [0 => "col-lg-2 col-md-2 col-sm-6 col-xs-12"];
            // line 49
            echo "  ";
        } else {
            // line 50
            echo "    ";
            $context["xclass"] = [0 => "col-lg-4 col-md-4 col-sm-4 col-xs-12"];
            // line 51
            echo "  ";
        }
        echo "    

";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 53)) {
            // line 54
            echo "  ";
            // line 55
            $context["row_classes"] = [0 => "views-row row", 1 => (((twig_get_attribute($this->env, $this->source,             // line 57
($context["options"] ?? null), "alignment", [], "any", false, false, true, 57) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 61
        if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 61)) {
            // line 62
            echo "  ";
            // line 63
            $context["col_classes"] = [0 => "views-col", 1 => (((twig_get_attribute($this->env, $this->source,             // line 65
($context["options"] ?? null), "alignment", [], "any", false, false, true, 65) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 69
        if (($context["title"] ?? null)) {
            // line 70
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 70, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 72
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 72), 72, $this->source), "html", null, true);
        echo ">
  ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 73) == "horizontal")) {
            // line 74
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 75
                echo "      
      ";
                // line 76
                if ((twig_get_attribute($this->env, $this->source, ($context["gva_masonry"] ?? null), "class", [], "any", false, false, true, 76) == "")) {
                    // line 77
                    echo "        <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 77), "addClass", [0 => ($context["row_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 77)) ? (("row-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 77), 77, $this->source))) : (""))], "method", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo ">
      ";
                }
                // line 78
                echo "  

        ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 80));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 81
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 81), "addClass", [0 => ($context["col_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 81)) ? (("col-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 81), 81, $this->source))) : ("")), 2 => ($context["xclass"] ?? null), 3 => twig_get_attribute($this->env, $this->source, ($context["gva_masonry"] ?? null), "class_item", [], "any", false, false, true, 81)], "method", false, false, true, 81), 81, $this->source), "html", null, true);
                    echo ">
            ";
                    // line 82
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
                    echo "
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "      
      ";
                // line 86
                if ((twig_get_attribute($this->env, $this->source, ($context["gva_masonry"] ?? null), "class", [], "any", false, false, true, 86) == "")) {
                    // line 87
                    echo "        </div>
      ";
                }
                // line 88
                echo "  
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "  ";
        } else {
            // line 91
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 92
                echo "      <div";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 92), "addClass", [0 => ($context["col_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 92)) ? (("col-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 92), 92, $this->source))) : ("")), 2 => ($context["xclass"] ?? null)], "method", false, false, true, 92), 92, $this->source), "html", null, true);
                echo ">
        ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 93));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 94
                    echo "          <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 94), "addClass", [0 => ($context["row_classes"] ?? null), 1 => ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 94)) ? (("row-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 94), 94, $this->source))) : (""))], "method", false, false, true, 94), 94, $this->source), "html", null, true);
                    echo ">
            ";
                    // line 95
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                    echo "
          </div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "  ";
        }
        // line 101
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/views/views-view-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 101,  295 => 100,  280 => 98,  263 => 95,  258 => 94,  241 => 93,  236 => 92,  218 => 91,  215 => 90,  200 => 88,  196 => 87,  194 => 86,  191 => 85,  174 => 82,  169 => 81,  152 => 80,  148 => 78,  142 => 77,  140 => 76,  137 => 75,  119 => 74,  117 => 73,  112 => 72,  106 => 70,  104 => 69,  101 => 65,  100 => 63,  98 => 62,  96 => 61,  93 => 57,  92 => 55,  90 => 54,  88 => 53,  82 => 51,  79 => 50,  76 => 49,  73 => 48,  70 => 47,  67 => 46,  64 => 45,  61 => 44,  58 => 43,  55 => 42,  52 => 41,  49 => 40,  47 => 39,  44 => 38,  42 => 34,  41 => 33,  40 => 32,  39 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/views/views-view-grid.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\views\\views-view-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 30, "if" => 39, "for" => 74);
        static $filters = array("escape" => 70);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
