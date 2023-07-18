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

/* modules/social_login/templates/provider-container.html.twig */
class __TwigTemplate_658beb66bc6ea4d527e762ebc5468440 extends Template
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
        if ((twig_length_filter($this->env, ($context["providers"] ?? null)) > 0)) {
            // line 8
            echo "<div class=\"social_login\" style=\"margin:20px 0 10px 0\">
 ";
            // line 9
            if ( !twig_test_empty(($context["label"] ?? null))) {
                echo "<label>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 9, $this->source), "html", null, true);
                echo "</label>";
            }
            // line 10
            echo " <div id=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["containerid"] ?? null), 10, $this->source), "html", null, true);
            echo "\"></div>
</div>

<script type=\"text/javascript\">
\tvar _oneall = _oneall || [];
\t_oneall.push([\"";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["plugintype"] ?? null), 15, $this->source), "html", null, true);
            echo "\", \"set_providers\", ['";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_join_filter($this->sandbox->ensureToStringAllowed(($context["providers"] ?? null), 15, $this->source), "','"));
            echo "']]);
\t_oneall.push([\"";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["plugintype"] ?? null), 16, $this->source), "html", null, true);
            echo "\", \"set_callback_uri\", \"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["callbackuri"] ?? null), 16, $this->source), "html", null, true);
            echo "\"]);
\t_oneall.push([\"";
            // line 17
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["plugintype"] ?? null), 17, $this->source), "html", null, true);
            echo "\", \"set_force_re_authentication\", ";
            if ((($context["plugintype"] ?? null) == "social_link")) {
                echo "true";
            } else {
                echo "false";
            }
            echo "]);
\t";
            // line 18
            if ( !twig_test_empty(($context["token"] ?? null))) {
                // line 19
                echo "\t_oneall.push([\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["plugintype"] ?? null), 19, $this->source), "html", null, true);
                echo "\", \"set_user_token\", \"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token"] ?? null), 19, $this->source), "html", null, true);
                echo "\"]);
\t";
            }
            // line 21
            echo "\t_oneall.push([\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["plugintype"] ?? null), 21, $this->source), "html", null, true);
            echo "\", \"do_render_ui\", \"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["containerid"] ?? null), 21, $this->source), "html", null, true);
            echo "\"]);
</script>
";
        } else {
            // line 24
            echo "<div class=\"messages messages--error\">
    <div role=\"alert\">
        Please enable at least one social network in the social login settings.
    </div>
</div>      
";
        }
    }

    public function getTemplateName()
    {
        return "modules/social_login/templates/provider-container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 24,  91 => 21,  83 => 19,  81 => 18,  71 => 17,  65 => 16,  59 => 15,  50 => 10,  44 => 9,  41 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/social_login/templates/provider-container.html.twig", "C:\\xampp\\htdocs\\YeosSport\\modules\\social_login\\templates\\provider-container.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("length" => 7, "escape" => 9, "raw" => 15, "join" => 15);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['length', 'escape', 'raw', 'join'],
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
