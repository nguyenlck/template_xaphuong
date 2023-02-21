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

/* themes/gavias_vinor/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_2b3e8997b265f62381cbc15a9c307b1f34d780ed11fc6ca0904101e0eb292d65 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 17
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "site-branding"], "method", false, false, true, 17);
        // line 1
        $this->parent = $this->loadTemplate("block.html.twig", "themes/gavias_vinor/templates/block/block--system-branding-block.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "  ";
        if (($context["site_logo"] ?? null)) {
            // line 20
            echo "    <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            echo "\" title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            echo "\" rel=\"home\" class=\"site-branding-logo padding-top-20\">
      ";
            // line 21
            if (($context["setting_logo"] ?? null)) {
                // line 22
                echo "         <img src=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_replace_filter($this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 22, $this->source), [".svg" => ".png"]), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
      ";
            } else {
                // line 23
                echo "  
        <img src=\"";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_logo"] ?? null), 24, $this->source), "html", null, true);
                echo "\" alt=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" />
      ";
            }
            // line 25
            echo "  
    </a>
  ";
        }
        // line 28
        echo "  ";
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 29
            echo "    <div class=\"site-branding__text\">
      ";
            // line 30
            if (($context["site_name"] ?? null)) {
                // line 31
                echo "        <div class=\"site-branding__name\">
          <a href=\"";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
                echo "\" title=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
                echo "\" rel=\"home\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_name"] ?? null), 32, $this->source), "html", null, true);
                echo "</a>
        </div>
      ";
            }
            // line 35
            echo "      ";
            if (($context["site_slogan"] ?? null)) {
                // line 36
                echo "        <div class=\"site-branding__slogan\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_slogan"] ?? null), 36, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 38
            echo "    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/gavias_vinor/templates/block/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  114 => 36,  111 => 35,  101 => 32,  98 => 31,  96 => 30,  93 => 29,  90 => 28,  85 => 25,  78 => 24,  75 => 23,  67 => 22,  65 => 21,  58 => 20,  55 => 19,  51 => 18,  46 => 1,  44 => 17,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/gavias_vinor/templates/block/block--system-branding-block.html.twig", "D:\\Xampp\\htdocs\\longkien.chomoi.angiang.gov.vn\\themes\\gavias_vinor\\templates\\block\\block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 17, "if" => 19);
        static $filters = array("t" => 20, "escape" => 22, "replace" => 22);
        static $functions = array("path" => 20);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['t', 'escape', 'replace'],
                ['path']
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
