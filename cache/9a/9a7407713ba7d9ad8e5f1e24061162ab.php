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

/* weather.html.twig */
class __TwigTemplate_3473a080860ba1be50a3ba13d2e0fb35 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "weather.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "What's the Weather?";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <h2>What's the Weather in Hallstatt?</h2>
    ";
        // line 6
        if (array_key_exists("weather", $context)) {
            // line 7
            echo "        <div class=\"border p-3 mt-5\">
            <h3>Weather Forecast</h3>
            <p>This is the forecast for ";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["weather"] ?? null), "location", [], "any", false, false, false, 9), "html", null, true);
            echo ".</p>
            <p><img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["weather"] ?? null), "image", [], "any", false, false, false, 10), "html", null, true);
            echo "\" alt=\"Weather forecast for ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["weather"] ?? null), "location", [], "any", false, false, false, 10), "html", null, true);
            echo ".\"></p>
        </div>
    ";
        }
        // line 13
        echo "    ";
        if (array_key_exists("noresult", $context)) {
            // line 14
            echo "        <div class=\"border p-3 mt-5\">
            <h3>Weather Forecast</h3>
            <p>No valid location could be resolved for ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noresult"] ?? null), "location", [], "any", false, false, false, 16), "html", null, true);
            echo ".</p>
            <p>No weather forecast can be shown.</p>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "weather.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 16,  82 => 14,  79 => 13,  71 => 10,  67 => 9,  63 => 7,  61 => 6,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}What's the Weather?{% endblock title %}
{% block main %}
    <h2>What's the Weather in Hallstatt?</h2>
    {% if weather is defined %}
        <div class=\"border p-3 mt-5\">
            <h3>Weather Forecast</h3>
            <p>This is the forecast for {{ weather.location }}.</p>
            <p><img src=\"{{ weather.image }}\" alt=\"Weather forecast for {{ weather.location }}.\"></p>
        </div>
    {% endif %}
    {% if noresult is defined %}
        <div class=\"border p-3 mt-5\">
            <h3>Weather Forecast</h3>
            <p>No valid location could be resolved for {{ noresult.location }}.</p>
            <p>No weather forecast can be shown.</p>
        </div>
    {% endif %}
{% endblock main %}", "weather.html.twig", "/var/www/html/bergfried/views/weather.html.twig");
    }
}
