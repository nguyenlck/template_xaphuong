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

/* modules/views_infinite_scroll/templates/views-infinite-scroll-pager.html.twig */
class __TwigTemplate_7d2a2d53dd0b3eee58fa895337a8f7329896263bab51a3a31c4a99cbb7b3887b extends \Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 8)) {
            // line 9
            echo "<ul";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 9, $this->source), "html", null, true);
            echo ">
  <li class=\"pager__item\">
    <a class=\"button\" href=\"";
            // line 11
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 11), "href", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Load more items"));
            echo "\" rel=\"next\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "button_text", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
            echo "</a>
  </li>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/views_infinite_scroll/templates/views-infinite-scroll-pager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  44 => 9,  42 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/views_infinite_scroll/templates/views-infinite-scroll-pager.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\modules\\views_infinite_scroll\\templates\\views-infinite-scroll-pager.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 8);
        static $filters = array("escape" => 9, "t" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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
