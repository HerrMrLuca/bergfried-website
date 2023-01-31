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

/* login.html.twig */
class __TwigTemplate_07d54282f82db601446444b066b5dc08 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Login";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <h1>Login</h1>
    <div class=\"border p-3 mt-5\">
        ";
        // line 7
        echo twig_include($this->env, $context, "errors.html.twig");
        echo "
        <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/login"), "html", null, true);
        echo "\">
            <div class=\"mb-3\">
                <label for=\"username\" class=\"form-label\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "\"
                       placeholder=\"username\" aria-describedby=\"usernameHelp\" autocomplete=\"username\" required>
                <div id=\"usernameHelp\" class=\"form-text\">Please enter the username you registered with.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"
                       placeholder=\"Password\" aria-describedby=\"passwordHelp\" autocomplete=\"current-password\"
                       required>
                <div id=\"passwordHelp\" class=\"form-text\">Please enter your selected password.</div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  66 => 8,  62 => 7,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Login{% endblock title %}
{% block main %}
    <h1>Login</h1>
    <div class=\"border p-3 mt-5\">
        {{ include('errors.html.twig') }}
        <form method=\"post\" action=\"{{ url_for(\"/login\") }}\">
            <div class=\"mb-3\">
                <label for=\"username\" class=\"form-label\">Username</label>
                <input type=\"text\" class=\"form-control\" id=\"username\" name=\"username\" value=\"{{ username }}\"
                       placeholder=\"username\" aria-describedby=\"usernameHelp\" autocomplete=\"username\" required>
                <div id=\"usernameHelp\" class=\"form-text\">Please enter the username you registered with.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"password\" class=\"form-label\">Password</label>
                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\"
                       placeholder=\"Password\" aria-describedby=\"passwordHelp\" autocomplete=\"current-password\"
                       required>
                <div id=\"passwordHelp\" class=\"form-text\">Please enter your selected password.</div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Sign in</button>
        </form>
    </div>
{% endblock main %}", "login.html.twig", "/var/www/html/bergfried/views/login.html.twig");
    }
}
