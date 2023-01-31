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

/* errors.html.twig */
class __TwigTemplate_6b28d9f70db24c80a8e5a8065f566118 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((array_key_exists("messages", $context) && (twig_length_filter($this->env, ($context["messages"] ?? null)) > 0))) {
            // line 2
            echo "    <div class=\"alert alert-primary mt-5\" role=\"alert\">
        <ul>
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 5
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "</i></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "errors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 7,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if messages is defined and messages|length > 0 %}
    <div class=\"alert alert-primary mt-5\" role=\"alert\">
        <ul>
            {% for error in messages %}
                <li>{{ error }}</i></li>
            {% endfor %}
        </ul>
    </div>
{% endif %}
", "errors.html.twig", "/var/www/html/bergfried/views/errors.html.twig");
    }
}
