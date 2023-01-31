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

/* editRoom.html.twig */
class __TwigTemplate_349cfc6c6cd8b063e4dd1c7ffb629f90 extends Template
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
            'scripts' => [$this, 'block_scripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "editRoom.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Edit Rooms";
    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <h1>Room editor</h1>
    <div class=\"border p-3 mt-5\">
        ";
        // line 7
        echo twig_include($this->env, $context, "errors.html.twig");
        echo "
        <form method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/getRoom"), "html", null, true);
        echo "\">
            <div class=\"mb-3\">
                <label for=\"class\" class=\"form-label\">Class</label>
                <select name=\"class\" id=\"class\" size=\"1\" class=\"form-control\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 13
            echo "                        <option ";
            if (array_key_exists("selected", $context)) {
                echo " ";
                if ((($context["selected"] ?? null) === (($__internal_compile_0 = (($__internal_compile_1 = ($context["room"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["class"] ?? null) : null))) {
                    echo " selected=\"selected\" ";
                }
                echo " ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["room"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["room_id"] ?? null) : null), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["room"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["class"] ?? null) : null), "html", null, true);
            echo " </option>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 15
            echo "                        <option>Nothing to select so far</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                </select>
                <div id=\"product_category_nameHelp\" class=\"form-text\">Please choose a room category.</div>
            </div>
        </form>
        <form method=\"post\" action=\"";
        // line 21
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/editRoom"), "html", null, true);
        echo "\">
            <div class=\"mb-3\">
                <label for=\"price\" class=\"form-label\">Price</label>
                <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (($__internal_compile_6 = (($__internal_compile_7 = ($context["room"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["price"] ?? null) : null), "html", null, true);
        echo "\"
                       placeholder=\"Price\" aria-describedby=\"priceHelp\" autocomplete=\"current-price\"
                       required>
                <div id=\"priceHelp\" class=\"form-text\">Please enter a price.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"short_description\" class=\"form-label\">Short Description</label>
                <textarea name=\"short_description\" id=\"short_description\" cols=\"80\" rows=\"2\"
                          class=\"form-control\" aria-describedby=\"shortHelp\" autocomplete=\"current-short_description\"
                          required>";
        // line 33
        echo twig_escape_filter($this->env, (($__internal_compile_8 = (($__internal_compile_9 = ($context["room"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["short_description"] ?? null) : null), "html", null, true);
        echo "</textarea>
                <div id=\"shortHelp\" class=\"form-text\">Please enter a short description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"long_description\" class=\"form-label\">Long Description</label>
                <textarea name=\"long_description\" id=\"long_description\" cols=\"80\" rows=\"5\"
                          class=\"form-control\" aria-describedby=\"longHelp\" autocomplete=\"current-long_description\"
                          required>";
        // line 40
        echo twig_escape_filter($this->env, (($__internal_compile_10 = (($__internal_compile_11 = ($context["room"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[0] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["long_description"] ?? null) : null), "html", null, true);
        echo "</textarea>
                <div id=\"longHelp\" class=\"form-text\">Please enter a long description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"room_id\" class=\"form-label\">Room Id</label>
                <input name=\"room_id\" id=\"room_id\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, (($__internal_compile_12 = (($__internal_compile_13 = ($context["room"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[0] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["room_id"] ?? null) : null), "html", null, true);
        echo "\"
                          class=\"form-control\" aria-describedby=\"idHelp\" autocomplete=\"current-room_id\"
                       readonly>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Edit Room</button>
        </form>
        <form method=\"post\" enctype=\"multipart/form-data\" action=\"";
        // line 51
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/addPicture"), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"9999999999\">
            <input type=\"file\" name=\"image\" id=\"image\">
            <div class=\"mb-3\">
                <label for=\"room_id\" class=\"form-label\">Room Id</label>
                <input name=\"room_id\" id=\"room_id\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (($__internal_compile_14 = (($__internal_compile_15 = ($context["room"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[0] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["room_id"] ?? null) : null), "html", null, true);
        echo "\"
                       class=\"form-control\" aria-describedby=\"idHelp\" autocomplete=\"current-room_id\"
                       readonly>
            </div>
            <button type=\"submit\">Hochladen</button>
        </form>
    </div>

    ";
        // line 64
        $this->displayBlock('scripts', $context, $blocks);
    }

    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/js/main.js\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "editRoom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 65,  174 => 64,  163 => 56,  155 => 51,  146 => 45,  138 => 40,  128 => 33,  116 => 24,  110 => 21,  104 => 17,  97 => 15,  79 => 13,  74 => 12,  67 => 8,  63 => 7,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Edit Rooms{% endblock title %}
{% block main %}
    <h1>Room editor</h1>
    <div class=\"border p-3 mt-5\">
        {{ include('errors.html.twig') }}
        <form method=\"post\" action=\"{{ url_for(\"/getRoom\") }}\">
            <div class=\"mb-3\">
                <label for=\"class\" class=\"form-label\">Class</label>
                <select name=\"class\" id=\"class\" size=\"1\" class=\"form-control\">
                    {% for key,value in room %}
                        <option {% if selected is defined %} {% if selected is same as (room[key]['class'])  %} selected=\"selected\" {% endif %} {% endif %} value=\"{{ room[key]['room_id'] }}\"> {{ room[key]['class'] }} </option>
                    {% else %}
                        <option>Nothing to select so far</option>
                    {% endfor %}
                </select>
                <div id=\"product_category_nameHelp\" class=\"form-text\">Please choose a room category.</div>
            </div>
        </form>
        <form method=\"post\" action=\"{{ url_for(\"/editRoom\") }}\">
            <div class=\"mb-3\">
                <label for=\"price\" class=\"form-label\">Price</label>
                <input type=\"text\" class=\"form-control\" id=\"price\" name=\"price\" value=\"{{ room[0]['price'] }}\"
                       placeholder=\"Price\" aria-describedby=\"priceHelp\" autocomplete=\"current-price\"
                       required>
                <div id=\"priceHelp\" class=\"form-text\">Please enter a price.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"short_description\" class=\"form-label\">Short Description</label>
                <textarea name=\"short_description\" id=\"short_description\" cols=\"80\" rows=\"2\"
                          class=\"form-control\" aria-describedby=\"shortHelp\" autocomplete=\"current-short_description\"
                          required>{{ room[0]['short_description'] }}</textarea>
                <div id=\"shortHelp\" class=\"form-text\">Please enter a short description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"long_description\" class=\"form-label\">Long Description</label>
                <textarea name=\"long_description\" id=\"long_description\" cols=\"80\" rows=\"5\"
                          class=\"form-control\" aria-describedby=\"longHelp\" autocomplete=\"current-long_description\"
                          required>{{ room[0]['long_description'] }}</textarea>
                <div id=\"longHelp\" class=\"form-text\">Please enter a long description.</div>
            </div>
            <div class=\"mb-3\">
                <label for=\"room_id\" class=\"form-label\">Room Id</label>
                <input name=\"room_id\" id=\"room_id\" value=\"{{ room[0]['room_id'] }}\"
                          class=\"form-control\" aria-describedby=\"idHelp\" autocomplete=\"current-room_id\"
                       readonly>
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Edit Room</button>
        </form>
        <form method=\"post\" enctype=\"multipart/form-data\" action=\"{{ url_for(\"/addPicture\") }}\">
            <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"9999999999\">
            <input type=\"file\" name=\"image\" id=\"image\">
            <div class=\"mb-3\">
                <label for=\"room_id\" class=\"form-label\">Room Id</label>
                <input name=\"room_id\" id=\"room_id\" value=\"{{ room[0]['room_id'] }}\"
                       class=\"form-control\" aria-describedby=\"idHelp\" autocomplete=\"current-room_id\"
                       readonly>
            </div>
            <button type=\"submit\">Hochladen</button>
        </form>
    </div>

    {% block scripts %}
        <script src=\"{{ get_base_path() }}/js/main.js\"></script>
    {% endblock scripts %}
{% endblock main %}", "editRoom.html.twig", "/var/www/html/bergfried/views/editRoom.html.twig");
    }
}
