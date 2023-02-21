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

/* themes/gavias_vinor/templates/navigation/menu--menu-mobile.html.twig */
class __TwigTemplate_d5c9ce752a75bf141d67f12081872d07fc9c989b6a5abb6192132aac3e3b7381 extends \Twig\Template
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
        // line 21
        echo "
<div class=\"gva-navigation\">
";
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 29, $context, $this->getSourceContext()));
        echo "

";
        // line 82
        echo "</div>
";
    }

    // line 31
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 32
            echo "  ";
            $macros["menus"] = $this;
            // line 33
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 34
                echo "    ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 35
                    echo "      <ul";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "gva_menu gva_menu_main"], "method", false, false, true, 35), 35, $this->source), "html", null, true);
                    echo ">
    ";
                } else {
                    // line 37
                    echo "      <ul class=\"menu sub-menu\">
    ";
                }
                // line 39
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 40
                    echo "      ";
                    $context["class_mega_menu"] = "";
                    // line 41
                    echo "      ";
                    $context["class_columns"] = "";
                    // line 42
                    echo "      ";
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 42), "gva_layout", [], "any", false, false, true, 42) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 43
                        echo "        ";
                        $context["class_mega_menu"] = "gva-mega-menu mega-menu-block";
                        echo " 
      ";
                    } elseif (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 44
$context["item"], "attributes", [], "any", false, false, true, 44), "gva_layout", [], "any", false, false, true, 44) == "menu-grid") && (($context["menu_level"] ?? null) == 0))) {
                        echo "   
        ";
                        // line 45
                        $context["class_mega_menu"] = "gva-mega-menu megamenu menu-grid";
                        echo " 
        ";
                        // line 46
                        $context["class_columns"] = twig_join_filter([0 => "menu-columns-", 1 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 46), "gva_layout_columns", [], "any", false, false, true, 46)], "");
                        // line 47
                        echo "      ";
                    }
                    // line 48
                    echo "      ";
                    // line 49
                    $context["classes"] = [0 => "menu-item", 1 => ((twig_get_attribute($this->env, $this->source,                     // line 51
$context["item"], "is_expanded", [], "any", false, false, true, 51)) ? ("menu-item--expanded") : ("")), 2 => ((twig_get_attribute($this->env, $this->source,                     // line 52
$context["item"], "is_collapsed", [], "any", false, false, true, 52)) ? ("menu-item--collapsed") : ("")), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 53
$context["item"], "in_active_trail", [], "any", false, false, true, 53)) ? ("menu-item--active-trail") : ("")), 4 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                     // line 54
$context["item"], "attributes", [], "any", false, false, true, 54), "gva_class", [], "any", false, false, true, 54), 5 =>                     // line 55
($context["class_mega_menu"] ?? null), 6 =>                     // line 56
($context["class_columns"] ?? null)];
                    // line 59
                    echo "      <li ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 59), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 59), 59, $this->source), "gva_icon", "gva_class", "gva_layout_columns", "gva_block", "gva_layout"), "html", null, true);
                    echo ">
        <a href=\"";
                    // line 60
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    echo "\">
          ";
                    // line 61
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 61), "gva_icon", [], "any", false, false, true, 61) != "")) {
                        // line 62
                        echo "            <i class=\"fa ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 62), "gva_icon", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
                        echo "\"></i>
          ";
                    }
                    // line 64
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                    echo "
          ";
                    // line 65
                    if ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 65) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 65), "gva_layout", [], "any", false, false, true, 65) == "menu-block") && (($context["menu_level"] ?? null) == 0)))) {
                        // line 66
                        echo "            <span class=\"icaret nav-plus fa fa-angle-down\"></span>
          ";
                    }
                    // line 67
                    echo "  
        </a>
        ";
                    // line 69
                    if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 69), "gva_layout", [], "any", false, false, true, 69) == "menu-block") && (($context["menu_level"] ?? null) == 0))) {
                        // line 70
                        echo "          <div class=\"sub-menu\">
            ";
                        // line 71
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "gva_block_content", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "
          </div>
        ";
                    }
                    // line 73
                    echo "  
        ";
                    // line 74
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 74)) {
                        // line 75
                        echo "          ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 75), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 75, $context, $this->getSourceContext()));
                        echo "
        ";
                    }
                    // line 77
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 79
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/navigation/menu--menu-mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 79,  188 => 77,  182 => 75,  180 => 74,  177 => 73,  171 => 71,  168 => 70,  166 => 69,  162 => 67,  158 => 66,  156 => 65,  151 => 64,  145 => 62,  143 => 61,  139 => 60,  134 => 59,  132 => 56,  131 => 55,  130 => 54,  129 => 53,  128 => 52,  127 => 51,  126 => 49,  124 => 48,  121 => 47,  119 => 46,  115 => 45,  111 => 44,  106 => 43,  103 => 42,  100 => 41,  97 => 40,  92 => 39,  88 => 37,  82 => 35,  79 => 34,  76 => 33,  73 => 32,  58 => 31,  53 => 82,  48 => 29,  45 => 24,  43 => 23,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/navigation/menu--menu-mobile.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\navigation\\menu--menu-mobile.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "macro" => 31, "if" => 33, "for" => 39, "set" => 40);
        static $filters = array("escape" => 35, "join" => 46, "without" => 59);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 'join', 'without'],
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
