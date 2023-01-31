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

/* addRoom.html.twig */
class __TwigTemplate_7c7cb34218cc8f62ca22f09b6859710f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "addRoom.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "PDO Example";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <h1>PDO Example</h1>
    <div class=\"border p-3 mt-5\">
        ";
        // line 7
        echo twig_include($this->env, $context, "errors.html.twig");
        echo "
        <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/addRoom"), "html", null, true);
        echo "\">
            <div class=\"mb-3\">
                <label for=\"class\" class=\"form-label\">Class Name</label>
                <input type=\"text\" class=\"form-control\" id=\"class\" name=\"class\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\"
                       placeholder=\"class name\" aria-describedby=\"classHelp\" autocomplete=\"class\">
                <div id=\"classHelp\" class=\"form-text\">Please enter a class name.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"short_description\" class=\"form-label\">short_description</label>
                <input type=\"text\" class=\"form-control\" id=\"short_description\" name=\"short_description\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["short_description"] ?? null), "html", null, true);
        echo "\"
                       placeholder=\"short_description\" aria-describedby=\"shortHelp\" autocomplete=\"current-short_description\">
                <div id=\"shortHelp\" class=\"form-text\">Please enter a short_description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"long_description\" class=\"form-label\">long_description</label>
                <input type=\"text\" class=\"form-control\" id=\"long_description\" name=\"long_description\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["long_description"] ?? null), "html", null, true);
        echo "\"
                       placeholder=\"long_description\" aria-describedby=\"longHelp\" autocomplete=\"current-long_description\">
                <div id=\"longHelp\" class=\"form-text\">Please enter a long_description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"price\" class=\"form-label\">price</label>
                <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["price"] ?? null), "html", null, true);
        echo "\"
                       placeholder=\"price\" aria-describedby=\"priceHelp\" autocomplete=\"current-price\">
                <div id=\"priceHelp\" class=\"form-text\">Please enter a price.</div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add Room Category</button>
        </form>
    </div>
    <div class=\"border p-3 mt-5\">
    <h2>List of Room Categories</h2>
    <div>
        <table>
            <tr>
                <th>Class</th>
                <th>Price</th>
            </tr>
            ";
        // line 44
        if (array_key_exists("room", $context)) {
            // line 45
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["room"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 46
                echo "                    <tr>
                        <td> ";
                // line 47
                echo twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["room"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["class"] ?? null) : null), "html", null, true);
                echo " </td>
                        <td> ";
                // line 48
                echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["room"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["price"] ?? null) : null), "html", null, true);
                echo " </td>
                        <td> ";
                // line 49
                echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["room"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["short_description"] ?? null) : null), "html", null, true);
                echo " </td>
                        <td> ";
                // line 50
                echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["room"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["long_description"] ?? null) : null), "html", null, true);
                echo " </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 53
                echo "                    <tr>
                        <td> No products found in search </td>
                        <td>&nbsp;</td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            ";
        }
        // line 59
        echo "        </table>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "addRoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 59,  158 => 58,  148 => 53,  140 => 50,  136 => 49,  132 => 48,  128 => 47,  125 => 46,  119 => 45,  117 => 44,  99 => 29,  90 => 23,  81 => 17,  72 => 11,  66 => 8,  62 => 7,  58 => 5,  54 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}PDO Example{% endblock title %}
{% block main %}
    <h1>PDO Example</h1>
    <div class=\"border p-3 mt-5\">
        {{ include('errors.html.twig') }}
        <form method=\"post\" action=\"{{ url_for(\"/addRoom\") }}\">
            <div class=\"mb-3\">
                <label for=\"class\" class=\"form-label\">Class Name</label>
                <input type=\"text\" class=\"form-control\" id=\"class\" name=\"class\" value=\"{{ class }}\"
                       placeholder=\"class name\" aria-describedby=\"classHelp\" autocomplete=\"class\">
                <div id=\"classHelp\" class=\"form-text\">Please enter a class name.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"short_description\" class=\"form-label\">short_description</label>
                <input type=\"text\" class=\"form-control\" id=\"short_description\" name=\"short_description\" value=\"{{ short_description }}\"
                       placeholder=\"short_description\" aria-describedby=\"shortHelp\" autocomplete=\"current-short_description\">
                <div id=\"shortHelp\" class=\"form-text\">Please enter a short_description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"long_description\" class=\"form-label\">long_description</label>
                <input type=\"text\" class=\"form-control\" id=\"long_description\" name=\"long_description\" value=\"{{ long_description }}\"
                       placeholder=\"long_description\" aria-describedby=\"longHelp\" autocomplete=\"current-long_description\">
                <div id=\"longHelp\" class=\"form-text\">Please enter a long_description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"price\" class=\"form-label\">price</label>
                <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" value=\"{{ price }}\"
                       placeholder=\"price\" aria-describedby=\"priceHelp\" autocomplete=\"current-price\">
                <div id=\"priceHelp\" class=\"form-text\">Please enter a price.</div>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Add Room Category</button>
        </form>
    </div>
    <div class=\"border p-3 mt-5\">
    <h2>List of Room Categories</h2>
    <div>
        <table>
            <tr>
                <th>Class</th>
                <th>Price</th>
            </tr>
            {% if room is defined %}
                {% for key, value in room %}
                    <tr>
                        <td> {{ room[key]['class'] }} </td>
                        <td> {{ room[key]['price'] }} </td>
                        <td> {{ room[key]['short_description'] }} </td>
                        <td> {{ room[key]['long_description'] }} </td>
                    </tr>
                {% else %}
                    <tr>
                        <td> No products found in search </td>
                        <td>&nbsp;</td>
                    </tr>
                {% endfor %}
            {% endif %}
        </table>
    </div>
    </div>
{% endblock main %}", "addRoom.html.twig", "/var/www/html/bergfried/views/addRoom.html.twig");
    }
}
