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

/* core/modules/filter/templates/filter-tips.html.twig */
class __TwigTemplate_328db78d10b2d9c1b211dcf40d2991a9f7f15a6e48faceff61cdf34cbc2cd7be extends \Twig\Template
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
        if (($context["multiple"] ?? null)) {
            // line 22
            echo "  <h2>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Text Formats"));
            echo "</h2>
";
        }
        // line 24
        echo "
";
        // line 25
        if (twig_length_filter($this->env, ($context["tips"] ?? null))) {
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tips"] ?? null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 27
                echo "
    ";
                // line 28
                if (($context["multiple"] ?? null)) {
                    // line 29
                    echo "      <div";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 29, $this->source), "html", null, true);
                    echo ">
      <h3>";
                    // line 30
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tip"], "name", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo "</h3>
    ";
                }
                // line 32
                echo "
    ";
                // line 33
                if (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 33))) {
                    // line 34
                    echo "      <ul>
      ";
                    // line 35
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["tip"], "list", [], "any", false, false, true, 35));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 36
                        echo "        <li";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["tip"], "attributes", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                        echo ">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "tip", [], "any", false, false, true, 36), 36, $this->source), "html", null, true);
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 38
                    echo "      </ul>
    ";
                }
                // line 40
                echo "
    ";
                // line 41
                if (($context["multiple"] ?? null)) {
                    // line 42
                    echo "      </div>
    ";
                }
                // line 44
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "core/modules/filter/templates/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 44,  104 => 42,  102 => 41,  99 => 40,  95 => 38,  84 => 36,  80 => 35,  77 => 34,  75 => 33,  72 => 32,  67 => 30,  62 => 29,  60 => 28,  57 => 27,  52 => 26,  50 => 25,  47 => 24,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/filter/templates/filter-tips.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\core\\modules\\filter\\templates\\filter-tips.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "for" => 26);
        static $filters = array("t" => 22, "length" => 25, "escape" => 29);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['t', 'length', 'escape'],
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
