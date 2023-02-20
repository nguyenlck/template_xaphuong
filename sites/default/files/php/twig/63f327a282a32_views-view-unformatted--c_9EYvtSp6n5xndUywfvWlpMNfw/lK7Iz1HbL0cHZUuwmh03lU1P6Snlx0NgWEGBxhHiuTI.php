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

/* themes/gavias_vinor/templates/views/article/views-view-unformatted--category-2columns.html.twig */
class __TwigTemplate_38bab2bcc1cb387d4b4f3150c1f00ad48bbf34c202fd1f2875cdc20dde4fc89e extends \Twig\Template
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
        echo "<div>
   ";
        // line 2
        if (($context["title"] ?? null)) {
            // line 3
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 3, $this->source), "html", null, true);
            echo "
         ";
            // line 4
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
            echo "
      ";
            // line 5
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 5, $this->source), "html", null, true);
            echo "
   ";
        }
        // line 7
        echo "   <div class=\"category-2columns\">
      ";
        // line 8
        $context["i"] = 0;
        // line 9
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 10
            echo "         ";
            $context["class_row"] = "";
            // line 11
            echo "         ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 12
            echo "         
         ";
            // line 13
            if ((($context["i"] ?? null) == 1)) {
                // line 14
                echo "            ";
                $context["class_row"] = "row-first";
                // line 15
                echo "         ";
            } else {
                // line 16
                echo "            ";
                $context["class_row"] = "row-second";
                // line 17
                echo "         ";
            }
            echo "  

         ";
            // line 19
            if (((($context["i"] ?? null) % 2) == 1)) {
                // line 20
                echo "            <div class=\"row ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_row"] ?? null), 20, $this->source), "html", null, true);
                echo "\">
         ";
            }
            // line 21
            echo "   
            <div class=\"col-sm-6 col-xs-12\">
               ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "
            </div>
         ";
            // line 25
            if ((((($context["i"] ?? null) % 2) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                // line 26
                echo "            </div>
         ";
            }
            // line 27
            echo "   

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "   
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/views/article/views-view-unformatted--category-2columns.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 29,  117 => 27,  113 => 26,  111 => 25,  106 => 23,  102 => 21,  96 => 20,  94 => 19,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  63 => 9,  61 => 8,  58 => 7,  53 => 5,  49 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/views/article/views-view-unformatted--category-2columns.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\views\\article\\views-view-unformatted--category-2columns.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 8, "for" => 9);
        static $filters = array("escape" => 3, "length" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape', 'length'],
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
