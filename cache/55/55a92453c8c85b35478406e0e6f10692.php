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

/* base.html.twig */
class __TwigTemplate_cda79c1cbce0aef5f81c6b0c147ad16f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
  ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body>
<header>";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 50
        echo "</header>
<main>
  <div class=\"container-lg mt-lg-4\">
    ";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "isloggedin", [], "any", true, true, false, 53)) {
            // line 54
            echo "    <p><i class=\"bi-emoji-smile\" style=\"font-size: 1em\"></i> Your are logged in as ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "first_name", [], "any", false, false, false, 54), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "last_name", [], "any", false, false, false, 54), "html", null, true);
            echo ".</p>
    ";
        }
        // line 56
        echo "    ";
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "  </div>
</main>
<div class=\"container-lg\">
<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
  ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "</footer>
</div>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/../vendor/twbs/bootstrap/dist/js/bootstrap.js\"></script>
</body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "  <meta charset=\"UTF-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/../vendor/twbs/bootstrap/dist/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css\">
  ";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-lg\">
      <a class=\"navbar-brand\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/index"), "html", null, true);
        echo "\">
        <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/../views/images/Bergfried_Logo.svg\" alt=\"\" height=\"32\" class=\"d-inline-block align-text-top\">
        fhooe/router-skeleton
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\"
              aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
          ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, ($context["_session"] ?? null), "isloggedin", [], "any", true, true, false, 26)) {
            // line 27
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/logout"), "html", null, true);
            echo "\">Logout</a>
            </li>
          ";
        } else {
            // line 31
            echo "            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/login"), "html", null, true);
            echo "\">Login</a>
            </li>
          ";
        }
        // line 35
        echo "          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              More ...
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/addRoom"), "html", null, true);
        echo "\">Add Room</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/editRoom"), "html", null, true);
        echo "\">Edit Room</a></li>
              <li><a class=\"dropdown-item\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, Fhooe\Router\Router::urlFor("/imprint"), "html", null, true);
        echo "\">Imprint</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
";
    }

    // line 56
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 61
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "    <div class=\"col-lg-9 d-flex align-items-center\">
      <img src=\"../views/images/Bergfried_Logo.svg\" alt=\"\" height=\"48\" class=\"me-2\">
      <span class=\"text-muted\">© Pension Bergfried | Department of Digital Media</span>
    </div>

    <ul class=\"nav col-lg-3 justify-content-end list-unstyled d-flex\">
      <li class=\"ms-3\">
        <a class=\"text-muted\" href=\"https://github.com/Digital-Media/fhooe-router-skeleton\">
          <i class=\"bi-github\"></i>
        </a>
      </li>
    </ul>
  ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 62,  197 => 61,  191 => 56,  179 => 42,  175 => 41,  171 => 40,  164 => 35,  158 => 32,  155 => 31,  149 => 28,  146 => 27,  144 => 26,  132 => 17,  128 => 16,  124 => 14,  120 => 13,  114 => 6,  108 => 9,  104 => 8,  99 => 6,  96 => 5,  92 => 4,  85 => 77,  81 => 75,  79 => 61,  73 => 57,  70 => 56,  62 => 54,  60 => 53,  55 => 50,  53 => 13,  49 => 11,  47 => 4,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  {% block head %}
  <meta charset=\"UTF-8\">
  <title>{% block title %}{% endblock %}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <link rel=\"stylesheet\" href=\"{{ get_base_path() }}/../vendor/twbs/bootstrap/dist/css/bootstrap.min.css\">
  <link rel=\"stylesheet\" href=\"{{ get_base_path() }}/../vendor/twbs/bootstrap-icons/font/bootstrap-icons.css\">
  {% endblock head %}
</head>
<body>
<header>{% block header %}
  <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
    <div class=\"container-lg\">
      <a class=\"navbar-brand\" href=\"{{ url_for(\"/index\") }}\">
        <img src=\"{{ get_base_path() }}/../views/images/Bergfried_Logo.svg\" alt=\"\" height=\"32\" class=\"d-inline-block align-text-top\">
        fhooe/router-skeleton
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNavDropdown\"
              aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
        <ul class=\"navbar-nav\">
          {% if _session.isloggedin is defined %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ url_for(\"/logout\") }}\">Logout</a>
            </li>
          {%  else  %}
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ url_for(\"/login\") }}\">Login</a>
            </li>
          {% endif %}
          <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
              More ...
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdownMenuLink\">
              <li><a class=\"dropdown-item\" href=\"{{ url_for(\"/addRoom\") }}\">Add Room</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ url_for(\"/editRoom\") }}\">Edit Room</a></li>
              <li><a class=\"dropdown-item\" href=\"{{ url_for(\"/imprint\") }}\">Imprint</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
{% endblock header %}
</header>
<main>
  <div class=\"container-lg mt-lg-4\">
    {% if _session.isloggedin is defined %}
    <p><i class=\"bi-emoji-smile\" style=\"font-size: 1em\"></i> Your are logged in as {{  _session.first_name }} {{  _session.last_name }}.</p>
    {% endif %}
    {% block main %}{% endblock main %}
  </div>
</main>
<div class=\"container-lg\">
<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
  {% block footer %}
    <div class=\"col-lg-9 d-flex align-items-center\">
      <img src=\"../views/images/Bergfried_Logo.svg\" alt=\"\" height=\"48\" class=\"me-2\">
      <span class=\"text-muted\">© Pension Bergfried | Department of Digital Media</span>
    </div>

    <ul class=\"nav col-lg-3 justify-content-end list-unstyled d-flex\">
      <li class=\"ms-3\">
        <a class=\"text-muted\" href=\"https://github.com/Digital-Media/fhooe-router-skeleton\">
          <i class=\"bi-github\"></i>
        </a>
      </li>
    </ul>
  {% endblock footer %}
</footer>
</div>
<script src=\"{{ get_base_path() }}/../vendor/twbs/bootstrap/dist/js/bootstrap.js\"></script>
</body>
</html>", "base.html.twig", "/var/www/html/bergfried/views/base.html.twig");
    }
}
