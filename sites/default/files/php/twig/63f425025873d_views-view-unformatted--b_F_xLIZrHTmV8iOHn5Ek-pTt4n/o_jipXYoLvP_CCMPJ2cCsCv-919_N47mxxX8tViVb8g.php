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

/* themes/gavias_vinor/templates/views/article/views-view-unformatted--block-related-articles.html.twig */
class __TwigTemplate_ec7884b89589f8d8cf0bfddb1a24ee64a5cb9e44132eda5628fae17cfeadacc7 extends \Twig\Template
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
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 3, $this->source), "html", null, true);
            echo "
   ";
        }
        // line 5
        echo "   <div class=\"category-2columns\">
      ";
        // line 6
        $context["i"] = 0;
        // line 7
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "         ";
            $context["class_row"] = "";
            // line 9
            echo "         ";
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 10
            echo "         
         ";
            // line 11
            if ((($context["i"] ?? null) == 1)) {
                // line 12
                echo "            ";
                $context["class_row"] = "row-first";
                // line 13
                echo "         ";
            } else {
                // line 14
                echo "            ";
                $context["class_row"] = "row-second";
                // line 15
                echo "         ";
            }
            echo "  

         ";
            // line 17
            if (((($context["i"] ?? null) % 2) == 1)) {
                // line 18
                echo "            <div class=\"row ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["class_row"] ?? null), 18, $this->source), "html", null, true);
                echo "\">
         ";
            }
            // line 19
            echo "   
            <div class=\"col-sm-6 col-xs-12\">
               ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "
            </div>
         ";
            // line 23
            if ((((($context["i"] ?? null) % 2) == 0) || (($context["i"] ?? null) == twig_length_filter($this->env, ($context["rows"] ?? null))))) {
                // line 24
                echo "            </div>
         ";
            }
            // line 25
            echo "   

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "   
   </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/views/article/views-view-unformatted--block-related-articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  109 => 25,  105 => 24,  103 => 23,  98 => 21,  94 => 19,  88 => 18,  86 => 17,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  55 => 7,  53 => 6,  50 => 5,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/views/article/views-view-unformatted--block-related-articles.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\views\\article\\views-view-unformatted--block-related-articles.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 2, "set" => 6, "for" => 7);
        static $filters = array("escape" => 3, "length" => 23);
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
