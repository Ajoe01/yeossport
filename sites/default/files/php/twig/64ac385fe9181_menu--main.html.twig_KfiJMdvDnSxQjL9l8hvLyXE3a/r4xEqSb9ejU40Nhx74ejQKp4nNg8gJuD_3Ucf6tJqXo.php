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

/* themes/power_portfolio/templates/menu/menu--main.html.twig */
class __TwigTemplate_4f6d74a66c21c378dca9257624f0bc39 extends Template
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
        // line 16
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 17
        echo "
";
        // line 44
        echo "
";
        // line 45
        if (($context["items"] ?? null)) {
            // line 46
            echo "  <nav";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "navbar order-last order-lg-0"], "method", false, false, true, 46), 46, $this->source), "html", null, true);
            echo " id=\"navbar\">
    ";
            // line 47
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null)], 47, $context, $this->getSourceContext()));
            echo "
    <i class=\"bi bi-list mobile-nav-toggle\"></i>
  </nav>
";
        }
    }

    // line 18
    public function macro_menu_links($__items__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 19
            echo "  ";
            $macros["menus"] = $this;
            // line 20
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 21
                echo "    <ul>
      ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 23
                    echo "        ";
                    $context["classes"] = [];
                    // line 24
                    echo "        ";
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 24)) {
                        // line 25
                        echo "          ";
                        $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 25, $this->source), [0 => "dropdown"]);
                        // line 26
                        echo "        ";
                    }
                    // line 27
                    echo "        ";
                    $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null), 27, $this->source), ((twig_get_attribute($this->env, $this->source, $context["item"], "in_active_trail", [], "any", false, false, true, 27)) ? ([0 => "active"]) : ([])));
                    // line 28
                    echo "        <li";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 28), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 28), 28, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 29
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 29)) {
                        // line 30
                        echo "            ";
                        $context["link_attributes"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["link_attributes"] ?? null), "setAttribute", [0 => "data-bs-toggle", 1 => "dropdown"], "method", false, false, true, 30), "setAttribute", [0 => "aria-expanded", 1 => "false"], "method", false, false, true, 30);
                        // line 31
                        echo "            <a href=\"";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                        echo "\">
              ";
                        // line 32
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        echo "
              <i class=\"bi bi-chevron-right\"></i>
            </a>
          ";
                    } else {
                        // line 36
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 36), 36, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 36), 36, $this->source), $this->sandbox->ensureToStringAllowed(($context["link_attributes"] ?? null), 36, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "localized_options", [], "any", false, false, true, 36), 36, $this->source)), "html", null, true);
                        echo "
          ";
                    }
                    // line 38
                    echo "          ";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 38), ($context["attributes"] ?? null)], 38, $context, $this->getSourceContext()));
                    echo "
        </li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
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
        return "themes/power_portfolio/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 41,  133 => 38,  127 => 36,  120 => 32,  115 => 31,  112 => 30,  110 => 29,  105 => 28,  102 => 27,  99 => 26,  96 => 25,  93 => 24,  90 => 23,  86 => 22,  83 => 21,  80 => 20,  77 => 19,  63 => 18,  54 => 47,  49 => 46,  47 => 45,  44 => 44,  41 => 17,  39 => 16,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/power_portfolio/templates/menu/menu--main.html.twig", "C:\\xampp\\htdocs\\YeosSport\\themes\\power_portfolio\\templates\\menu\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 16, "if" => 45, "macro" => 18, "for" => 22, "set" => 23);
        static $filters = array("escape" => 46, "merge" => 25);
        static $functions = array("link" => 36);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'macro', 'for', 'set'],
                ['escape', 'merge'],
                ['link']
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
