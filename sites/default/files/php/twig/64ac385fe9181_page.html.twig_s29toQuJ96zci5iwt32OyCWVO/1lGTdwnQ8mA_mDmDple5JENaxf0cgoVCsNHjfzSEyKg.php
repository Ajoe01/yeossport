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

/* themes/power_portfolio/templates/layout/page.html.twig */
class __TwigTemplate_435a0d8a12230a37128f0368879377c7 extends Template
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
        echo "
";
        // line 49
        echo "
";
        // line 50
        if (($context["is_front"] ?? null)) {
            // line 51
            echo "    ";
            $context["bannershowFront"] = ((($context["banner_display"] ?? null)) ? ("F-banner") : ("F-no_banner"));
            // line 52
            echo "  ";
        } else {
            echo "  
    ";
            // line 53
            $context["bannershow"] = ((($context["banner_display"] ?? null)) ? ("banner") : ("no_banner"));
        }
        // line 55
        echo "<div class=\"layout-container\">
  <header id=\"header\" class=\"fixed-top ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bannershow"] ?? null), 56, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bannershowFront"] ?? null), 56, $this->source), "html", null, true);
        echo "\">
    <div class=\"container d-flex align-items-center justify-content-between\">
      ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
        echo "
      ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "nav_main", [], "any", false, false, true, 59), 59, $this->source), "html", null, true);
        echo "
    </div>
  </header>
  ";
        // line 62
        if (($context["is_front"] ?? null)) {
            // line 63
            echo "  ";
            if (($context["banner_display"] ?? null)) {
                // line 64
                echo "  <section id=\"hero\" class=\"d-flex align-items-center justify-content-center\">
    <div class=\"container\" data-aos=\"fade-up\">
      <div class=\"row justify-content-center\" data-aos=\"fade-up\" data-aos-delay=\"150\">
        <div class=\"col-xl-6 col-lg-8\">
          <h1>";
                // line 68
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_title"] ?? null), 68, $this->source), "html", null, true);
                echo "<span>.</span></h1>
          <h2>";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_description"] ?? null), 69, $this->source), "html", null, true);
                echo "</h2>
        </div>
      </div>

      <div class=\"row gy-4 mt-5 justify-content-center\" data-aos=\"zoom-in\" data-aos-delay=\"250\">
        ";
                // line 74
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["card"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 75
                    echo "          <div class=\"col-xl-2 col-md-4\">
            <div class=\"icon-box\">
              <i class=\"ri-";
                    // line 77
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "card_icon", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                    echo "\"></i>
              <h3><a href=\"\">";
                    // line 78
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["option"], "card_title", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
                    echo "</a></h3>
            </div>
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 82
                echo "      </div>
    </div>
  </section>
  ";
            }
            // line 86
            echo "  ";
        }
        // line 87
        echo "
  <main role=\"main\" class=\"main ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bannershow"] ?? null), 88, $this->source), "html", null, true);
        echo "\">
    <a id=\"main-content\" tabindex=\"-1\"></a>
    <div class=\"layout-content container\">
      ";
        // line 91
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
        echo "
    </div>
    ";
        // line 93
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 93)) {
            // line 94
            echo "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 95
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
            echo "
      </aside>
    ";
        }
        // line 98
        echo "  </main>

  <footer id=\"footer\" role=\"contentinfo\">
    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6\">
            <div class=\"footer-info\">
              ";
        // line 107
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
        echo "
              ";
        // line 108
        if (($context["show_information_icon"] ?? null)) {
            // line 109
            echo "                <p>
                  ";
            // line 110
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 110, $this->source), "html", null, true);
            echo "<br>
                  <strong>Phone:</strong>";
            // line 111
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contact"] ?? null), 111, $this->source), "html", null, true);
            echo "<br>
                  <strong>Email:</strong>";
            // line 112
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mail_id"] ?? null), 112, $this->source), "html", null, true);
            echo "<br>
                </p>
                &#160;
              ";
        }
        // line 116
        echo "              ";
        if (($context["show_social_icon"] ?? null)) {
            // line 117
            echo "                <div class=\"social-links mt-3\">
                  ";
            // line 118
            if (($context["twitter_url"] ?? null)) {
                echo " <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null), 118, $this->source), "html", null, true);
                echo "\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>";
            }
            // line 119
            echo "                  ";
            if (($context["facebook_url"] ?? null)) {
                echo " <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null), 119, $this->source), "html", null, true);
                echo "\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>";
            }
            // line 120
            echo "                  ";
            if (($context["instagram_url"] ?? null)) {
                echo " <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["instagram_url"] ?? null), 120, $this->source), "html", null, true);
                echo "\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>";
            }
            // line 121
            echo "                  ";
            if (($context["youtube_url"] ?? null)) {
                echo " <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube_url"] ?? null), 121, $this->source), "html", null, true);
                echo "\" class=\"google-plus\"><i class=\"bx bxl-youtube\"></i></a>";
            }
            // line 122
            echo "                  ";
            if (($context["linkedin_url"] ?? null)) {
                echo " <a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null), 122, $this->source), "html", null, true);
                echo "\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>";
            }
            // line 123
            echo "              </div>
              ";
        }
        // line 125
        echo "            </div>
          </div>

          <div class=\"col-lg-2 col-md-6 footer-links\">
            ";
        // line 129
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu1", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
        echo "
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            ";
        // line 133
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_menu2", [], "any", false, false, true, 133), 133, $this->source), "html", null, true);
        echo "
          </div>

          <div class=\"col-lg-4 col-md-6 footer-newsletter\">
            ";
        // line 137
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_email", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
        echo "
          </div>

        </div>
      </div>
    </div>

    <div class=\"container\">
      <div class=\"copyright\">
        ";
        // line 146
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_copyright"] ?? null), 146, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </footer>
</div>

<div id=\"preloader\"></div>
<a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center ";
        // line 153
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["arrow_up"] ?? null), 153, $this->source), "html", null, true);
        echo "\"><i class=\"bi bi-arrow-up-short\"></i></a>";
    }

    public function getTemplateName()
    {
        return "themes/power_portfolio/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 153,  268 => 146,  256 => 137,  249 => 133,  242 => 129,  236 => 125,  232 => 123,  225 => 122,  218 => 121,  211 => 120,  204 => 119,  198 => 118,  195 => 117,  192 => 116,  185 => 112,  181 => 111,  177 => 110,  174 => 109,  172 => 108,  168 => 107,  157 => 98,  151 => 95,  148 => 94,  146 => 93,  141 => 91,  135 => 88,  132 => 87,  129 => 86,  123 => 82,  113 => 78,  109 => 77,  105 => 75,  101 => 74,  93 => 69,  89 => 68,  83 => 64,  80 => 63,  78 => 62,  72 => 59,  68 => 58,  61 => 56,  58 => 55,  55 => 53,  50 => 52,  47 => 51,  45 => 50,  42 => 49,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/power_portfolio/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\YeosSport\\themes\\power_portfolio\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 50, "set" => 51, "for" => 74);
        static $filters = array("escape" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
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
