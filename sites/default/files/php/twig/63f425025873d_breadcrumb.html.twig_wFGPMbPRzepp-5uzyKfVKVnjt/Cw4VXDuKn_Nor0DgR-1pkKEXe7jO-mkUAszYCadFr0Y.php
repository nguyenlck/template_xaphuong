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

/* themes/gavias_vinor/templates/navigation/breadcrumb.html.twig */
class __TwigTemplate_12c71ca5bbf1f7c58adcfc62e24d5d75ccdc67759cca45a58a1d84a6d90c7419 extends \Twig\Template
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
        // line 10
        if (($context["breadcrumb"] ?? null)) {
            // line 11
            echo "  <nav class=\"breadcrumb\" role=\"navigation\">
    <h2 id=\"system-breadcrumb\" class=\"visually-hidden\">";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Breadcrumb"));
            echo "</h2>
    <ol>
    ";
            // line 14
            $context["i"] = 0;
            echo "  
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumb"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 16
                echo "      ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 17
                echo "      <li>
        ";
                // line 18
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 18)) {
                    // line 19
                    echo "          <a href=\"";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    echo "</a>
        ";
                } else {
                    // line 21
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "text", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
                    echo "
        ";
                }
                // line 23
                echo "        ";
                if ((($context["i"] ?? null) < (twig_length_filter($this->env, ($context["breadcrumb"] ?? null)) - 1))) {
                    // line 24
                    echo "          <span class=\"\"> - </span>
        ";
                }
                // line 25
                echo "  
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
      <li></li>
    </ol>
  </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/navigation/breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  86 => 25,  82 => 24,  79 => 23,  73 => 21,  65 => 19,  63 => 18,  60 => 17,  57 => 16,  53 => 15,  49 => 14,  44 => 12,  41 => 11,  39 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/navigation/breadcrumb.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\navigation\\breadcrumb.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10, "set" => 14, "for" => 15);
        static $filters = array("t" => 12, "escape" => 19, "length" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['t', 'escape', 'length'],
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
