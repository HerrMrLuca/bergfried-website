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

/* room.html.twig */
class __TwigTemplate_3fccc35cb98539e354487ee49e580d0f extends Template
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
        echo "<!DOCTYPE html>
<html>
<head>
  <title>Zimmer - Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/css/style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
  <link href=\"assets/dist/css/datepicker-bs4.css\" rel=\"stylesheet\">
  <script src=\"https://kit.fontawesome.com/9f0e4b36fb.js\" crossorigin=\"anonymous\"></script>
<style>

  .button {
    background-color: rgba(50,50,50,1); 
    border: none;
    color: #ddd;
    margin-top: 0px;
    width: 100%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: relative;
    text-transform: uppercase;
    z-index: 4
  }

  .button:hover {
    background-color: #ddd;
    color:rgba(50,50,50,1);

  }

  button:focus { outline: none; }

  .buchen {
    background-color: rgba(255,255,255,1);
    margin-left: calc(50% - 300px);
    padding-top: 50px;
    padding-left: 55px;
    padding-right: 55px;
    padding-bottom: 55px;
    position: relative;
    text-align: center;
    float: left;
    display: block;
    z-index: 3;
    transition: 1.5s;
    border: 2px solid rgba(50,50,50,1);
  }

  #anreise {
    width: 252px;
    height: 60px;
    margin-right: 10px;
    margin-bottom: 20px;
    margin-top: 50px;
    text-align: center;
    font-size: 19px;
    padding-top: 10px;
    background-color: #f7f7f7;
  }

#anreise:focus, #abreise:focus, .zimmer:focus {
    outline: none;
    background-color: #eee;
  border-bottom: 3px solid rgba(200,200,200,1);
}

  #abreise {
    width: 252px;
    height: 60px;
    text-align: center;
    font-size: 19px;
    padding-top: 10px;
    background-color: #f7f7f7;
  }

  .anreise {
    position: absolute;
    margin-left: -160px;
    margin-top: 25px;
  }

  .abreise {
    position: absolute;
    margin-left: 100px;
    margin-top: 25px;
  }

  .zimmer {
    width: 120px;
    margin: 10px 0px;
    height: 30px;
    text-align: center;
    background-color: rgba(255,255,255,1);
  }

  .zimmertxt {
    text-align: left;
    clear: right;
    position: absolute;
    margin-left: 50px;
    margin-top: -15px;
    font-size: 14px;
  }

#zimmer {
  float:none;
  margin-left: 5px;

}

#room {
  float:none;
  margin-left: 140px;
}

#adult {
  float:none;
  margin-left: 270px;
}

#kid {
  float:none;
  margin-left: 405px;
}

#zimmer2 {
  margin-right: 10px;
  background-color: #f7f7f7;
}

#room2 {
  margin-right: 10px;
  background-color: #f7f7f7;
}

#kid2 {
  background-color: #f7f7f7;
}

#adult2 {
  margin-right: 10px;
  background-color: #f7f7f7;
}

@media screen and (max-width: 650px) {
  .button {
    background-color: rgba(50,50,50,1); 
    border: none;
    color: #ddd;
    margin-top: 10px;
    width: 100%;
    padding: 15px 10%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: relative;
    text-transform: uppercase;
    z-index: 4
  }

  .button:hover {
    background-color: #ddd;
    color:rgba(50,50,50,1);

  }

  button:focus { outline: none; }

  .buchen {
    background-color: rgba(255,255,255,1);
    margin-left: 0;
    padding-top: 5%;
    padding-left: 5%;
    padding-right: 5%;
    padding-bottom: 5%;
    position: relative;
    text-align: center;
    float: left;
    display: block;
    z-index: 3;
    transition: 1.5s;
    border: 2px solid rgba(50,50,50,1);
  }

  #anreise {
    background-color: #f7f7f7;
    width: 45%;
    height: 60px;
    margin-right: 5%;
    margin-bottom: 20px;
    margin-top: 50px;
    text-align: center;
    font-size: 19px;
    padding: 0;
    padding-top: 10px;

  }

  #anreise:focus, #abreise:focus, .zimmer:focus {
    outline: none;
    background-color: #eee;
  border-bottom: 3px solid rgba(200,200,200,1);
  }

  #abreise {
    background-color: #f7f7f7;
    width: 45%;
    height: 60px;
    text-align: center;
    font-size: 19px;
    padding: 0;
    padding-top: 10px;
  }

  .anreise {
    position: absolute;
    margin-left: -42%;
    margin-top: 25px;
  }

  .abreise {
    position: absolute;
    margin-left: 4%;
    margin-top: 25px;
  }

  .zimmer {
    width: 45%;
    margin: 0px 0px 0 0;
    height: 30px;
    text-align: center;
    background-color: rgba(255,255,255,1);
    border-bottom: 2px solid rgba(50,50,50,1);
  }

  .zimmertxt {
    text-align: left;
    position: absolute;
    margin-left: 50px;
    margin-top: 10px;
    font-size: 16px;
  }

  #zimmer2 {
    margin-top: 40px;
    margin-right: 5%;
  }

  #room2 {
    margin-top: 40px;
    margin-right: 0;
  }

  #kid2 {
    margin-top: 60px;
    margin-right: 0;

  }

  #adult2 {
    margin-top: 60px;
    margin-right: 5%;
  }

  #zimmer {
    float:none;
    margin-left: 0%;
    font-size: 16px;
    width: 50%;
  }

  #room{
    float:none;
    margin-left: 50%;
    font-size: 16px;
    width: 50%;
  }

  #adult {
    float:none;
    margin-left: 0%;
    margin-top: 105px;
    margin-bottom: 10px;
    font-size: 16px;
    width: 50%;
  }

  #kid {
    float:none;
    margin-left: 50%;
    margin-top: 105px;
    margin-bottom: 10px;
    font-size: 16px;
    width: 50%;
  }
}
</style>
</head>
<body>
<!-- Nav -->
<div class=\"container\">
  <div class=\"body\">
  </div>
  <nav>
    <div class=\"connav\" id=\"con2\">
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul id=\"connav\">
          <div>
            <button class=\"navbar-toggler\" id=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
          </div>
          <li><a class=\"nav1\">Pension Bergfried</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"navl\"><img src=\"https://www.welt-flaggen.de/data/flags/emoji/twitter/256x256/at.png\"></a>
            <ul class=\"language\" id=\"ulnav\">
                <li class=\"language\"><a id=\"EN\" href=\"ENroom.html\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZroom.html\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav-a\" class=\"nav\" href=\"room\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"nav\" href=\"index\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"index\">Startseite</a></li>
            <li><a id=\"sidebar1\" class=\"sidebar2\" href=\"room\">Zimmer</a></li>
            <li><a id=\"sidebar3\" class=\"sidebar2\" href=\"contact\">Kontakt</a></li>
            <li><a id=\"sidebar4\" class=\"sidebar\" href=\"img\">Bilder</a></li>
            <!--<li><a id=\"sidebar\" class=\"sidebar\" href=\"roomimg.html\">Zimmer-Bilder</a></li>
            <li><a id=\"sidebar\" class=\"sidebar\" href=\"price.html\">Preise</a></li>-->
            <li><a id=\"sidebar5\" class=\"sidebar\" href=\"arrival\">Anfahrt</a></li>
            <li><a id=\"sidebar6\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/aktivitaeten.html\">Aktivitäten</a></li>
            <li><a id=\"sidebar7\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/oesterreich-stadt-ort/detail/430000973/hallstatt.html\">Reiseplaner</a></li>
            <li><a id=\"sidebar8\" class=\"sidebar\" href=\"about\">Impressum</a></li>
          </ul>
        </div>
      </div>
    </div>
  <!-- Content-Picture -->
  <div>
  </div>
  <!-- Content-Text -->
  <div class=\"container\">
    <!-- Superior A -->
    ";
        // line 354
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room"] ?? null));
        foreach ($context['_seq'] as $context["room_key"] => $context["value"]) {
            // line 355
            echo "    <div class=\"contentroom2\">
      <div>
        <div class=\"slideshow-container\" style=\"float:right;\">
          ";
            // line 358
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 359
                echo "            ";
                if (((($__internal_compile_0 = (($__internal_compile_1 = ($context["images"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["key"]] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["room_id"] ?? null) : null) === ($context["room_key"] + 1))) {
                    // line 360
                    echo "            <div class=\"mySlides";
                    echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
                    echo " fade\">
              <!--<div class=\"numbertext\">1 / 2 </div>-->
              <img src=\"";
                    // line 362
                    echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
                    echo "/../views/images/";
                    echo twig_escape_filter($this->env, (($__internal_compile_2 = (($__internal_compile_3 = ($context["images"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[$context["key"]] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["image"] ?? null) : null), "html", null, true);
                    echo "\" style=\"width:100%\" alt=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_4 = (($__internal_compile_5 = ($context["room"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[$context["room_key"]] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["class"] ?? null) : null), "html", null, true);
                    echo "\">
              <div class=\"text\"></div>
            </div>
            ";
                }
                // line 366
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 367
            echo "          <a class=\"prev-slide\" onclick=\"plusSlides";
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(-1)\">&#10094;</a>
          <a class=\"next-slide\" onclick=\"plusSlides";
            // line 368
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(1)\">&#10095;</a>
          <br>
          <div style=\"text-align:center\">
            ";
            // line 371
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 372
                echo "              ";
                if (((($__internal_compile_6 = (($__internal_compile_7 = ($context["images"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[$context["key"]] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["room_id"] ?? null) : null) === ($context["room_key"] + 1))) {
                    // line 373
                    echo "                <span class=\"dot";
                    echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
                    echo "\" onclick=\"currentSlide";
                    echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
                    echo "(key)\"></span>
              ";
                }
                // line 375
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 376
            echo "          </div>
        </div>
        <div class=\"contentxt\">
          <h2 class=\"roomh2\">";
            // line 379
            echo twig_escape_filter($this->env, (($__internal_compile_8 = (($__internal_compile_9 = ($context["room"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[$context["room_key"]] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["class"] ?? null) : null), "html", null, true);
            echo "</h2>
          <p class=\"roomp\">";
            // line 380
            echo twig_escape_filter($this->env, (($__internal_compile_10 = (($__internal_compile_11 = ($context["room"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11[$context["room_key"]] ?? null) : null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["long_description"] ?? null) : null), "html", null, true);
            echo "</p>

          <h3 class=\"roomh3\">Ausstattung der Zimmer</h3>
          <div>
            <ul class=\"list\">
              ";
            // line 385
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["interior"] ?? null));
            foreach ($context['_seq'] as $context["interior_key"] => $context["value"]) {
                // line 386
                echo "                ";
                if (((($__internal_compile_12 = (($__internal_compile_13 = ($context["interior"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13[$context["interior_key"]] ?? null) : null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["room_id"] ?? null) : null) === ($context["room_key"] + 1))) {
                    // line 387
                    echo "                  <li class=\"list\">";
                    echo twig_escape_filter($this->env, (($__internal_compile_14 = (($__internal_compile_15 = ($context["interior"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15[$context["interior_key"]] ?? null) : null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["interior"] ?? null) : null), "html", null, true);
                    echo "</li>
                ";
                }
                // line 389
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['interior_key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 390
            echo "            </ul>
          </div>
          <h3 class=\"roomh3\">Preis</h3>
          <div class=\"prices\">
            <!--<p class=\"roomp2\">Einzelzimmer:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">135,--€</p><br>-->
            <p class=\"roomp2\">Doppelzimmer:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">";
            // line 397
            echo twig_escape_filter($this->env, (($__internal_compile_16 = (($__internal_compile_17 = ($context["room"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17[$context["room_key"]] ?? null) : null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["price"] ?? null) : null), "html", null, true);
            echo "</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"line\">
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['room_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 405
        echo "    <!-- Ferienwohnung -->
    <div class=\"contentroom2\">
      <div>
        <div class=\"slideshow-container2\">
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">1 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/6z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">2 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/7z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">3 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/8z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">4 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/11z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">1 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/9z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">2 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/10z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">3 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/12z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">4 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/13z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <a class=\"prev-slide\" onclick=\"plusSlides5(-1)\">&#10094;</a>
          <a class=\"next-slide\" onclick=\"plusSlides5(1)\">&#10095;</a>
          <br>
          <div style=\"text-align:center\" class=\"divdot\">
            <span class=\"dot5\" onclick=\"currentSlide5(1)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(2)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(3)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(4)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(5)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(6)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(7)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(8)\"></span>
          </div>
        </div>
        <div class=\"contentxt\">
          <h2 class=\"roomh2\">";
        // line 464
        echo twig_escape_filter($this->env, (($__internal_compile_18 = (($__internal_compile_19 = ($context["room"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19[4] ?? null) : null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["class"] ?? null) : null), "html", null, true);
        echo "</h2>
          <p class=\"roomp\">";
        // line 465
        echo twig_escape_filter($this->env, (($__internal_compile_20 = (($__internal_compile_21 = ($context["room"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21[4] ?? null) : null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["long_description"] ?? null) : null), "html", null, true);
        echo "</p>

          <h3 class=\"roomh3\">Ausstattung der Zimmer</h3>
          <div>
            <ul class=\"list\">
              <li class=\"list\">Dusche/WC, Haartrockner</li>
              <li class=\"list\">TV im Wohnbereich</li>
              <li class=\"list\">Küche mit Geschirrspüler (größere Küche in Fewo2)</li>
              <li class=\"list\">Balkon mit seitlichen Seeblick</li>
              <li class=\"list\">Breitband-Internet</li>
            </ul>
          </div>
          <h3 class=\"roomh3\">Preis</h3>
          <div class=\"prices\">
            <p class=\"roomp2\">Ferienwohnung 1, 3 Nächte:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">";
        // line 480
        echo twig_escape_filter($this->env, (($__internal_compile_22 = (($__internal_compile_23 = ($context["room"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[4] ?? null) : null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["price"] ?? null) : null), "html", null, true);
        echo "</p><br>
            <p class=\"roomp2\">Ferienwohnung 2, 3 Nächte:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">";
        // line 482
        echo twig_escape_filter($this->env, (($__internal_compile_24 = (($__internal_compile_25 = ($context["room"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[5] ?? null) : null)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["price"] ?? null) : null), "html", null, true);
        echo "</p>
            <p class=\"roomp2\">Endreinigung:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">39,--€</p><br>
          </div>
        </div>
      </div>
    </div>
    <div class=\"line\">
    </div>
    <!-- Breakfast -->
    <div class=\"contentroom2\">
        <div class=\"slideshow-container\">
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">1 / 5</div>
            <img src=\"assets/pic/5e1x.jpg\" style=\"width:100%;\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">2 / 5</div>
            <img src=\"assets/pic/6e1x.jpg\" style=\"width:100%;\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">3 / 5</div>
            <img src=\"assets/pic/1w2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">4 / 5</div>
            <img src=\"assets/pic/2w2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">5 / 5</div>
            <img src=\"assets/pic/3w2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          
          <a class=\"prev-slide\" onclick=\"plusSlides6(-1)\">&#10094;</a>
          <a class=\"next-slide\" onclick=\"plusSlides6(1)\">&#10095;</a>
          <br>
          <div style=\"text-align:center\">
            <span class=\"dot6\" onclick=\"currentSlide6(1)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(2)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(3)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(4)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(5)\"></span>
          </div>
        </div>
        <div class=\"contentxt\">
          <h2 class=\"roomh2\">Zusätzliche Optionen</h2>
          <h3 class=\"roomh3\">Preis</h3>
          <div class=\"prices\">
            <p class=\"roomp2\">Frühstück pro Person / Tag:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">15,--€</p><br>
            <p class=\"roomp2\" style=\"margin-left: 15px\">Bei direkter Buchung ab 3 Nächte ist das Frühstück  inkludiert! (ausgenommen Ferienwohnung 1/2)</p><br><br>
            <p class=\"roomp2\">Sauna / Wirlpool pro Person:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">6,--€</p><br>
            <p class=\"roomp2\" style=\"margin-left: 15px\">Wellnessbereich mit einer finnischen Sauna , Infrarotkabine von Physiotherm sowie einer Whirlwanne.</p><br><br>
            <p class=\"roomp2\">Ortstaxe pro Person / Nacht ab 15 jahre:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">3,--€</p><br><br>
\t\t\t<p class=\"roomp2\">Keine Haustiere sind in der Pension erlaubt.</p><br>
          </div>
        </div>
    </div>
    <div class=\"line\">
    </div>
    <div class=\"contentroom3\">
      <div>
        <form class=\"buchen\" action=\"contact.php\"> 
          <div>
            <div>
              <a class=\"anreise\">Anreise</a>
            </div>
            <div>
              <a class=\"abreise\">Abreise</a>
            </div>
            <div class=\"condate\">
              <div id=\"range\">
                <input type=\"text\" name=\"start\" class=\"datepicker-input\" id=\"anreise\" placeholder=\"DD.MM.YYYY\" for=\"start\" value=\"\">
                <span></span>
                <input type=\"text\" name=\"end\" class=\"datepicker-input\" id=\"abreise\" placeholder=\"DD.MM.YYYY\" for=\"end\" value=\"\">
              </div>
              <div id=\"auswahl\">
                <div>
                  <p class=\"zimmertxt\" id=\"zimmer\">Zimmer</p>
                  <p class=\"zimmertxt\" id=\"room\">Zimmerart</p>
                  <p class=\"zimmertxt\" id=\"adult\">Erwachsene</p>
                  <p class=\"zimmertxt\" id=\"kid\">Kinder</p>
                </div>
                <select list=\"zimmer\" type=\"text\" placeholder=\"1\" value=\"\" class=\"zimmer\" for=\"zimmer\" name=\"zimmer\"  id=\"zimmer2\">
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  <option value=\"10\">10</option></select>
                <select list=\"room\" type=\"text\" placeholder=\"Standart\" class=\"zimmer\" for=\"room\" name=\"room\" id=\"room2\">
                  <option value=\"Standard\">Standard</option>
                  <option value=\"Superior\">Superior</option>
                  <option value=\"Superior mit Seeblick\">Superior mit Seeblick</option>
                  <option value=\"Suite\">Suite</option>
                  <option value=\"Ferienwohnung 1\">Ferienwohnung 1</option>
                  <option value=\"Ferienwohnung 2\">Ferienwohnung 2</option></select>
                <select list=\"adult\" type=\"text\" placeholder=\"2\" value=\"\" class=\"zimmer\" for=\"adult\" name=\"adult\"  id=\"adult2\">
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  <option value=\"10\">10</option></select>
                <select list=\"kid\" type=\"text\" placeholder=\"0\" value=\"\" class=\"zimmer\" for=\"kid\" name=\"kid\" id=\"kid2\">
                  <option value=\"0\">0</option>
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  </select>
              </div>
            </div>
            <div>
              <input class=\"button\" type=\"submit\" value=\"Jetzt Buchen\" id=\"button\" onclick=\"getData();\">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class=\"contentshare\">
    <div>
      <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
      <a href=\"https://www.google.at/maps/place/8FVMHJ4W%2BMC/@47.5566875,13.6439361,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d47.5566875!4d13.6460625\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
      <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
      <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
      <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
    </div>
  </div>
  <div>
    <img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
    <a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
    <div><a id=\"black\" onclick=\"gone()\">Test</a>
    </div>
  </div>
</div>

<script src=\"";
        // line 639
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/js/datepicker-full.js\"></script>
<script src=\"";
        // line 640
        echo twig_escape_filter($this->env, Fhooe\Router\Router::getBasePath(), "html", null, true);
        echo "/js/index.js\"></script>
<script>

function whatsapp() {
  setTimeout(function() {document.getElementById(\"whatsapp\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"whatsapp\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function line() {
  setTimeout(function() {document.getElementById(\"line\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"line\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function gone() {
  document.getElementById(\"black\").style.opacity = \"0\";
  document.getElementById(\"whatsapp\").style.opacity = \"0\";
  document.getElementById(\"line\").style.opacity = \"0\";
  setTimeout(function() {document.getElementById(\"whatsapp\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"line\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.display = \"none\";}, 300)
}


const elem1 = document.getElementById('range');
  const datepicker1 = new DateRangePicker(elem1, {
    buttonClass: 'btn',
  });

  function getDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    } 

    if(mm<10) {
        mm = '0'+mm
    }


    today = dd + '.' + mm + '.' + yyyy;
    console.log(today);
    document.getElementById(\"anreise\").value = today;
  }

  window.onload = function() {
    getDate();
    getDatet();
  };


  function getDatet() {
    var tmr = new Date();
    var ddt = tmr.getDate()+1;
    var mmt = tmr.getMonth()+1; //January is 0!
    var yyyyt = tmr.getFullYear();

    if(ddt<10) {
        ddt = '0'+ddt
    } 
    if(ddt>30) {
      ddt = \"01\"
    }

    if(mmt<10) {
        mmt = '0'+mmt
    } 

    tmr = ddt + '.' + mmt + '.' + yyyyt ;
    console.log(tmr);
    document.getElementById(\"abreise\").value = tmr;
  }

/*//form auswahl
  var small = 1
    document.getElementById(\"anreise\").onclick = function() {
      document.getElementById(\"range\").style.paddingBottom = \"60px\";
      myVar = setTimeout(function(){ document.getElementById(\"auswahl\").style.visibility = \"visible\"; }, 200);
      console.log(\"clicked\")
  }*/
  
//Nav
var sidebar = 0
var navbar = 0
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    var win = window,
    doc = document,
    docElem = doc.documentElement,
    body = doc.getElementsByTagName('body')[0],
    x = win.innerWidth || docElem.clientWidth || body.clientWidth;
    if (prevScrollpos + 0.5 > currentScrollPos) {
        document.getElementById(\"connav\").style.top = \"0px\";
        document.getElementById(\"ulnav\").style.top = \"50px\";
        prevScrollpos = currentScrollPos;
  } else if (navbar <= 0 && currentScrollPos > 300) {
        document.getElementById(\"connav\").style.top = \"-210px\";
        document.getElementById(\"ulnav\").style.top = \"-210px\";
        prevScrollpos = currentScrollPos;
    }
}



//Navbar Toggler   
document.getElementById(\"navbar-toggler\").onclick = function() {
  var win = window,
  doc = document,
  docElem = doc.documentElement,
  body = doc.getElementsByTagName('body')[0],
  x = win.innerWidth || docElem.clientWidth || body.clientWidth,
  y = win.innerHeight|| docElem.clientHeight|| body.clientHeight;
  console.log(x + ' × ' + y);
  navbar++
  sidebar++
          
  if (navbar <= 1 && x < 650){
        document.getElementById(\"sidebar1\").style.display = \"block\";
        document.getElementById(\"sidebar2\").style.display = \"block\";
        document.getElementById(\"sidebar3\").style.display = \"block\";
        document.getElementById(\"sidebar4\").style.display = \"block\";
        document.getElementById(\"sidebar5\").style.display = \"block\";
        document.getElementById(\"sidebar6\").style.display = \"block\";
        document.getElementById(\"sidebar7\").style.display = \"block\";
        document.getElementById(\"sidebar8\").style.display = \"block\";
        console.log(navbar)
    } else  if (x < 600) {
       
        navbar = 0
        document.getElementById(\"sidebar1\").style.display = \"none\";
        document.getElementById(\"sidebar2\").style.display = \"none\";
        document.getElementById(\"sidebar3\").style.display = \"none\";
        document.getElementById(\"sidebar4\").style.display = \"none\";
        document.getElementById(\"sidebar5\").style.display = \"none\";
        document.getElementById(\"sidebar6\").style.display = \"none\";
        document.getElementById(\"sidebar7\").style.display = \"none\";
        document.getElementById(\"sidebar8\").style.display = \"none\";
        console.log(\"navbar: \" + navbar)
    }

    if (sidebar <= 1 && x > 600){
        document.getElementById(\"considebar\").style.marginLeft = \"calc(100% - 190px)\";
        console.log(sidebar)
    } else if (x > 600) {
        sidebar = 0
        document.getElementById(\"considebar\").style.marginLeft = \"100%\";
        console.log(\"sidebar: \" + sidebar)
    }
}

";
        // line 798
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["room"] ?? null));
        foreach ($context['_seq'] as $context["room_key"] => $context["value"]) {
            // line 799
            echo "  var slideIndex";
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " = 1;
  showSlides";
            // line 800
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(slideIndex";
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo ");
  function plusSlides";
            // line 801
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(n) {
    showSlides";
            // line 802
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(slideIndex";
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " += n);
  }
  function currentSlide";
            // line 804
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(n) {
    showSlides";
            // line 805
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(slideIndex";
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " = n);
  }
  function showSlides";
            // line 807
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides";
            // line 809
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "\");
  var dots = document.getElementsByClassName(\"dot";
            // line 810
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo "\");
  if(n > slides.length) {
    slideIndex";
            // line 812
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " = 1
  }
  if(n < 1) {
    slideIndex";
            // line 815
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " = slides.length
  }
  for(i = 0; i < slides.length; i++) {
    slides[i].style.display = \"none\";
  }
  for(i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(\" active\", \"\");
  }
  slides[slideIndex";
            // line 823
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " - 1].style.display = \"block\";
  dots[slideIndex";
            // line 824
            echo twig_escape_filter($this->env, $context["room_key"], "html", null, true);
            echo " - 1].className += \" active\";
  }
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['room_key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 827
        echo "checkCookie()
</script>
</body></html>";
    }

    public function getTemplateName()
    {
        return "room.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1019 => 827,  1010 => 824,  1006 => 823,  995 => 815,  989 => 812,  984 => 810,  980 => 809,  975 => 807,  968 => 805,  964 => 804,  957 => 802,  953 => 801,  947 => 800,  942 => 799,  938 => 798,  777 => 640,  773 => 639,  613 => 482,  608 => 480,  590 => 465,  586 => 464,  525 => 405,  511 => 397,  502 => 390,  496 => 389,  490 => 387,  487 => 386,  483 => 385,  475 => 380,  471 => 379,  466 => 376,  460 => 375,  452 => 373,  449 => 372,  445 => 371,  439 => 368,  434 => 367,  428 => 366,  417 => 362,  411 => 360,  408 => 359,  404 => 358,  399 => 355,  395 => 354,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <title>Zimmer - Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"{{ get_base_path() }}/css/style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
  <link href=\"assets/dist/css/datepicker-bs4.css\" rel=\"stylesheet\">
  <script src=\"https://kit.fontawesome.com/9f0e4b36fb.js\" crossorigin=\"anonymous\"></script>
<style>

  .button {
    background-color: rgba(50,50,50,1); 
    border: none;
    color: #ddd;
    margin-top: 0px;
    width: 100%;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: relative;
    text-transform: uppercase;
    z-index: 4
  }

  .button:hover {
    background-color: #ddd;
    color:rgba(50,50,50,1);

  }

  button:focus { outline: none; }

  .buchen {
    background-color: rgba(255,255,255,1);
    margin-left: calc(50% - 300px);
    padding-top: 50px;
    padding-left: 55px;
    padding-right: 55px;
    padding-bottom: 55px;
    position: relative;
    text-align: center;
    float: left;
    display: block;
    z-index: 3;
    transition: 1.5s;
    border: 2px solid rgba(50,50,50,1);
  }

  #anreise {
    width: 252px;
    height: 60px;
    margin-right: 10px;
    margin-bottom: 20px;
    margin-top: 50px;
    text-align: center;
    font-size: 19px;
    padding-top: 10px;
    background-color: #f7f7f7;
  }

#anreise:focus, #abreise:focus, .zimmer:focus {
    outline: none;
    background-color: #eee;
  border-bottom: 3px solid rgba(200,200,200,1);
}

  #abreise {
    width: 252px;
    height: 60px;
    text-align: center;
    font-size: 19px;
    padding-top: 10px;
    background-color: #f7f7f7;
  }

  .anreise {
    position: absolute;
    margin-left: -160px;
    margin-top: 25px;
  }

  .abreise {
    position: absolute;
    margin-left: 100px;
    margin-top: 25px;
  }

  .zimmer {
    width: 120px;
    margin: 10px 0px;
    height: 30px;
    text-align: center;
    background-color: rgba(255,255,255,1);
  }

  .zimmertxt {
    text-align: left;
    clear: right;
    position: absolute;
    margin-left: 50px;
    margin-top: -15px;
    font-size: 14px;
  }

#zimmer {
  float:none;
  margin-left: 5px;

}

#room {
  float:none;
  margin-left: 140px;
}

#adult {
  float:none;
  margin-left: 270px;
}

#kid {
  float:none;
  margin-left: 405px;
}

#zimmer2 {
  margin-right: 10px;
  background-color: #f7f7f7;
}

#room2 {
  margin-right: 10px;
  background-color: #f7f7f7;
}

#kid2 {
  background-color: #f7f7f7;
}

#adult2 {
  margin-right: 10px;
  background-color: #f7f7f7;
}

@media screen and (max-width: 650px) {
  .button {
    background-color: rgba(50,50,50,1); 
    border: none;
    color: #ddd;
    margin-top: 10px;
    width: 100%;
    padding: 15px 10%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    position: relative;
    text-transform: uppercase;
    z-index: 4
  }

  .button:hover {
    background-color: #ddd;
    color:rgba(50,50,50,1);

  }

  button:focus { outline: none; }

  .buchen {
    background-color: rgba(255,255,255,1);
    margin-left: 0;
    padding-top: 5%;
    padding-left: 5%;
    padding-right: 5%;
    padding-bottom: 5%;
    position: relative;
    text-align: center;
    float: left;
    display: block;
    z-index: 3;
    transition: 1.5s;
    border: 2px solid rgba(50,50,50,1);
  }

  #anreise {
    background-color: #f7f7f7;
    width: 45%;
    height: 60px;
    margin-right: 5%;
    margin-bottom: 20px;
    margin-top: 50px;
    text-align: center;
    font-size: 19px;
    padding: 0;
    padding-top: 10px;

  }

  #anreise:focus, #abreise:focus, .zimmer:focus {
    outline: none;
    background-color: #eee;
  border-bottom: 3px solid rgba(200,200,200,1);
  }

  #abreise {
    background-color: #f7f7f7;
    width: 45%;
    height: 60px;
    text-align: center;
    font-size: 19px;
    padding: 0;
    padding-top: 10px;
  }

  .anreise {
    position: absolute;
    margin-left: -42%;
    margin-top: 25px;
  }

  .abreise {
    position: absolute;
    margin-left: 4%;
    margin-top: 25px;
  }

  .zimmer {
    width: 45%;
    margin: 0px 0px 0 0;
    height: 30px;
    text-align: center;
    background-color: rgba(255,255,255,1);
    border-bottom: 2px solid rgba(50,50,50,1);
  }

  .zimmertxt {
    text-align: left;
    position: absolute;
    margin-left: 50px;
    margin-top: 10px;
    font-size: 16px;
  }

  #zimmer2 {
    margin-top: 40px;
    margin-right: 5%;
  }

  #room2 {
    margin-top: 40px;
    margin-right: 0;
  }

  #kid2 {
    margin-top: 60px;
    margin-right: 0;

  }

  #adult2 {
    margin-top: 60px;
    margin-right: 5%;
  }

  #zimmer {
    float:none;
    margin-left: 0%;
    font-size: 16px;
    width: 50%;
  }

  #room{
    float:none;
    margin-left: 50%;
    font-size: 16px;
    width: 50%;
  }

  #adult {
    float:none;
    margin-left: 0%;
    margin-top: 105px;
    margin-bottom: 10px;
    font-size: 16px;
    width: 50%;
  }

  #kid {
    float:none;
    margin-left: 50%;
    margin-top: 105px;
    margin-bottom: 10px;
    font-size: 16px;
    width: 50%;
  }
}
</style>
</head>
<body>
<!-- Nav -->
<div class=\"container\">
  <div class=\"body\">
  </div>
  <nav>
    <div class=\"connav\" id=\"con2\">
      <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
        <ul id=\"connav\">
          <div>
            <button class=\"navbar-toggler\" id=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>
          </div>
          <li><a class=\"nav1\">Pension Bergfried</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"navl\"><img src=\"https://www.welt-flaggen.de/data/flags/emoji/twitter/256x256/at.png\"></a>
            <ul class=\"language\" id=\"ulnav\">
                <li class=\"language\"><a id=\"EN\" href=\"ENroom.html\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZroom.html\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav-a\" class=\"nav\" href=\"room\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"nav\" href=\"index\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"index\">Startseite</a></li>
            <li><a id=\"sidebar1\" class=\"sidebar2\" href=\"room\">Zimmer</a></li>
            <li><a id=\"sidebar3\" class=\"sidebar2\" href=\"contact\">Kontakt</a></li>
            <li><a id=\"sidebar4\" class=\"sidebar\" href=\"img\">Bilder</a></li>
            <!--<li><a id=\"sidebar\" class=\"sidebar\" href=\"roomimg.html\">Zimmer-Bilder</a></li>
            <li><a id=\"sidebar\" class=\"sidebar\" href=\"price.html\">Preise</a></li>-->
            <li><a id=\"sidebar5\" class=\"sidebar\" href=\"arrival\">Anfahrt</a></li>
            <li><a id=\"sidebar6\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/aktivitaeten.html\">Aktivitäten</a></li>
            <li><a id=\"sidebar7\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/oesterreich-stadt-ort/detail/430000973/hallstatt.html\">Reiseplaner</a></li>
            <li><a id=\"sidebar8\" class=\"sidebar\" href=\"about\">Impressum</a></li>
          </ul>
        </div>
      </div>
    </div>
  <!-- Content-Picture -->
  <div>
  </div>
  <!-- Content-Text -->
  <div class=\"container\">
    <!-- Superior A -->
    {% for room_key, value in room %}
    <div class=\"contentroom2\">
      <div>
        <div class=\"slideshow-container\" style=\"float:right;\">
          {% for key,value in images %}
            {% if images[key]['room_id'] is same as (room_key + 1) %}
            <div class=\"mySlides{{ room_key }} fade\">
              <!--<div class=\"numbertext\">1 / 2 </div>-->
              <img src=\"{{ get_base_path() }}/../views/images/{{ images[key]['image'] }}\" style=\"width:100%\" alt=\"{{ room[room_key]['class'] }}\">
              <div class=\"text\"></div>
            </div>
            {% endif %}
          {% endfor %}
          <a class=\"prev-slide\" onclick=\"plusSlides{{ room_key }}(-1)\">&#10094;</a>
          <a class=\"next-slide\" onclick=\"plusSlides{{ room_key }}(1)\">&#10095;</a>
          <br>
          <div style=\"text-align:center\">
            {% for key,value in images %}
              {% if images[key]['room_id'] is same as (room_key + 1) %}
                <span class=\"dot{{ room_key }}\" onclick=\"currentSlide{{ room_key }}(key)\"></span>
              {% endif %}
            {% endfor %}
          </div>
        </div>
        <div class=\"contentxt\">
          <h2 class=\"roomh2\">{{ room[room_key]['class'] }}</h2>
          <p class=\"roomp\">{{ room[room_key]['long_description'] }}</p>

          <h3 class=\"roomh3\">Ausstattung der Zimmer</h3>
          <div>
            <ul class=\"list\">
              {% for interior_key, value in interior %}
                {% if interior[interior_key]['room_id'] is same as (room_key + 1) %}
                  <li class=\"list\">{{ interior[interior_key]['interior'] }}</li>
                {% endif %}
              {% endfor %}
            </ul>
          </div>
          <h3 class=\"roomh3\">Preis</h3>
          <div class=\"prices\">
            <!--<p class=\"roomp2\">Einzelzimmer:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">135,--€</p><br>-->
            <p class=\"roomp2\">Doppelzimmer:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">{{ room[room_key]['price'] }}</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"line\">
    </div>
    {% endfor %}
    <!-- Ferienwohnung -->
    <div class=\"contentroom2\">
      <div>
        <div class=\"slideshow-container2\">
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">1 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/6z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">2 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/7z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">3 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/8z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">4 / 4 Ferienwohnung 2</div>
            <img src=\"assets/pic/11z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">1 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/9z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">2 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/10z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">3 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/12z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides5 fade\">
            <div class=\"numbertext\">4 / 4 Ferienwohnung 1</div>
            <img src=\"assets/pic/13z2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\">
            <div class=\"text\"></div>
          </div>
          <a class=\"prev-slide\" onclick=\"plusSlides5(-1)\">&#10094;</a>
          <a class=\"next-slide\" onclick=\"plusSlides5(1)\">&#10095;</a>
          <br>
          <div style=\"text-align:center\" class=\"divdot\">
            <span class=\"dot5\" onclick=\"currentSlide5(1)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(2)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(3)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(4)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(5)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(6)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(7)\"></span>
            <span class=\"dot5\" onclick=\"currentSlide5(8)\"></span>
          </div>
        </div>
        <div class=\"contentxt\">
          <h2 class=\"roomh2\">{{ room[4]['class'] }}</h2>
          <p class=\"roomp\">{{ room[4]['long_description'] }}</p>

          <h3 class=\"roomh3\">Ausstattung der Zimmer</h3>
          <div>
            <ul class=\"list\">
              <li class=\"list\">Dusche/WC, Haartrockner</li>
              <li class=\"list\">TV im Wohnbereich</li>
              <li class=\"list\">Küche mit Geschirrspüler (größere Küche in Fewo2)</li>
              <li class=\"list\">Balkon mit seitlichen Seeblick</li>
              <li class=\"list\">Breitband-Internet</li>
            </ul>
          </div>
          <h3 class=\"roomh3\">Preis</h3>
          <div class=\"prices\">
            <p class=\"roomp2\">Ferienwohnung 1, 3 Nächte:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">{{ room[4]['price'] }}</p><br>
            <p class=\"roomp2\">Ferienwohnung 2, 3 Nächte:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">{{ room[5]['price'] }}</p>
            <p class=\"roomp2\">Endreinigung:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">39,--€</p><br>
          </div>
        </div>
      </div>
    </div>
    <div class=\"line\">
    </div>
    <!-- Breakfast -->
    <div class=\"contentroom2\">
        <div class=\"slideshow-container\">
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">1 / 5</div>
            <img src=\"assets/pic/5e1x.jpg\" style=\"width:100%;\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">2 / 5</div>
            <img src=\"assets/pic/6e1x.jpg\" style=\"width:100%;\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">3 / 5</div>
            <img src=\"assets/pic/1w2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">4 / 5</div>
            <img src=\"assets/pic/2w2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides6 fade\">
            <div class=\"numbertext\">5 / 5</div>
            <img src=\"assets/pic/3w2x.jpg\" style=\"width:100%\" alt=\"Ferienwohnung\" class=\"breakfast-image-room\">
            <div class=\"text\"></div>
          </div>
          
          <a class=\"prev-slide\" onclick=\"plusSlides6(-1)\">&#10094;</a>
          <a class=\"next-slide\" onclick=\"plusSlides6(1)\">&#10095;</a>
          <br>
          <div style=\"text-align:center\">
            <span class=\"dot6\" onclick=\"currentSlide6(1)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(2)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(3)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(4)\"></span>
            <span class=\"dot6\" onclick=\"currentSlide6(5)\"></span>
          </div>
        </div>
        <div class=\"contentxt\">
          <h2 class=\"roomh2\">Zusätzliche Optionen</h2>
          <h3 class=\"roomh3\">Preis</h3>
          <div class=\"prices\">
            <p class=\"roomp2\">Frühstück pro Person / Tag:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">15,--€</p><br>
            <p class=\"roomp2\" style=\"margin-left: 15px\">Bei direkter Buchung ab 3 Nächte ist das Frühstück  inkludiert! (ausgenommen Ferienwohnung 1/2)</p><br><br>
            <p class=\"roomp2\">Sauna / Wirlpool pro Person:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">6,--€</p><br>
            <p class=\"roomp2\" style=\"margin-left: 15px\">Wellnessbereich mit einer finnischen Sauna , Infrarotkabine von Physiotherm sowie einer Whirlwanne.</p><br><br>
            <p class=\"roomp2\">Ortstaxe pro Person / Nacht ab 15 jahre:</p>
            <p class=\"roomp2a\" style=\"text-align: right;\">3,--€</p><br><br>
\t\t\t<p class=\"roomp2\">Keine Haustiere sind in der Pension erlaubt.</p><br>
          </div>
        </div>
    </div>
    <div class=\"line\">
    </div>
    <div class=\"contentroom3\">
      <div>
        <form class=\"buchen\" action=\"contact.php\"> 
          <div>
            <div>
              <a class=\"anreise\">Anreise</a>
            </div>
            <div>
              <a class=\"abreise\">Abreise</a>
            </div>
            <div class=\"condate\">
              <div id=\"range\">
                <input type=\"text\" name=\"start\" class=\"datepicker-input\" id=\"anreise\" placeholder=\"DD.MM.YYYY\" for=\"start\" value=\"\">
                <span></span>
                <input type=\"text\" name=\"end\" class=\"datepicker-input\" id=\"abreise\" placeholder=\"DD.MM.YYYY\" for=\"end\" value=\"\">
              </div>
              <div id=\"auswahl\">
                <div>
                  <p class=\"zimmertxt\" id=\"zimmer\">Zimmer</p>
                  <p class=\"zimmertxt\" id=\"room\">Zimmerart</p>
                  <p class=\"zimmertxt\" id=\"adult\">Erwachsene</p>
                  <p class=\"zimmertxt\" id=\"kid\">Kinder</p>
                </div>
                <select list=\"zimmer\" type=\"text\" placeholder=\"1\" value=\"\" class=\"zimmer\" for=\"zimmer\" name=\"zimmer\"  id=\"zimmer2\">
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  <option value=\"10\">10</option></select>
                <select list=\"room\" type=\"text\" placeholder=\"Standart\" class=\"zimmer\" for=\"room\" name=\"room\" id=\"room2\">
                  <option value=\"Standard\">Standard</option>
                  <option value=\"Superior\">Superior</option>
                  <option value=\"Superior mit Seeblick\">Superior mit Seeblick</option>
                  <option value=\"Suite\">Suite</option>
                  <option value=\"Ferienwohnung 1\">Ferienwohnung 1</option>
                  <option value=\"Ferienwohnung 2\">Ferienwohnung 2</option></select>
                <select list=\"adult\" type=\"text\" placeholder=\"2\" value=\"\" class=\"zimmer\" for=\"adult\" name=\"adult\"  id=\"adult2\">
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  <option value=\"10\">10</option></select>
                <select list=\"kid\" type=\"text\" placeholder=\"0\" value=\"\" class=\"zimmer\" for=\"kid\" name=\"kid\" id=\"kid2\">
                  <option value=\"0\">0</option>
                  <option value=\"1\">1</option>
                  <option value=\"2\">2</option>
                  <option value=\"3\">3</option>
                  <option value=\"4\">4</option>
                  <option value=\"5\">5</option>
                  <option value=\"6\">6</option>
                  <option value=\"7\">7</option>
                  <option value=\"8\">8</option>
                  <option value=\"9\">9</option>
                  </select>
              </div>
            </div>
            <div>
              <input class=\"button\" type=\"submit\" value=\"Jetzt Buchen\" id=\"button\" onclick=\"getData();\">
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class=\"contentshare\">
    <div>
      <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
      <a href=\"https://www.google.at/maps/place/8FVMHJ4W%2BMC/@47.5566875,13.6439361,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d47.5566875!4d13.6460625\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
      <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
      <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
      <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
    </div>
  </div>
  <div>
    <img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
    <a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
    <div><a id=\"black\" onclick=\"gone()\">Test</a>
    </div>
  </div>
</div>

<script src=\"{{ get_base_path() }}/js/datepicker-full.js\"></script>
<script src=\"{{ get_base_path() }}/js/index.js\"></script>
<script>

function whatsapp() {
  setTimeout(function() {document.getElementById(\"whatsapp\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"whatsapp\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function line() {
  setTimeout(function() {document.getElementById(\"line\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"line\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function gone() {
  document.getElementById(\"black\").style.opacity = \"0\";
  document.getElementById(\"whatsapp\").style.opacity = \"0\";
  document.getElementById(\"line\").style.opacity = \"0\";
  setTimeout(function() {document.getElementById(\"whatsapp\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"line\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.display = \"none\";}, 300)
}


const elem1 = document.getElementById('range');
  const datepicker1 = new DateRangePicker(elem1, {
    buttonClass: 'btn',
  });

  function getDate() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();

    if(dd<10) {
        dd = '0'+dd
    } 

    if(mm<10) {
        mm = '0'+mm
    }


    today = dd + '.' + mm + '.' + yyyy;
    console.log(today);
    document.getElementById(\"anreise\").value = today;
  }

  window.onload = function() {
    getDate();
    getDatet();
  };


  function getDatet() {
    var tmr = new Date();
    var ddt = tmr.getDate()+1;
    var mmt = tmr.getMonth()+1; //January is 0!
    var yyyyt = tmr.getFullYear();

    if(ddt<10) {
        ddt = '0'+ddt
    } 
    if(ddt>30) {
      ddt = \"01\"
    }

    if(mmt<10) {
        mmt = '0'+mmt
    } 

    tmr = ddt + '.' + mmt + '.' + yyyyt ;
    console.log(tmr);
    document.getElementById(\"abreise\").value = tmr;
  }

/*//form auswahl
  var small = 1
    document.getElementById(\"anreise\").onclick = function() {
      document.getElementById(\"range\").style.paddingBottom = \"60px\";
      myVar = setTimeout(function(){ document.getElementById(\"auswahl\").style.visibility = \"visible\"; }, 200);
      console.log(\"clicked\")
  }*/
  
//Nav
var sidebar = 0
var navbar = 0
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    var win = window,
    doc = document,
    docElem = doc.documentElement,
    body = doc.getElementsByTagName('body')[0],
    x = win.innerWidth || docElem.clientWidth || body.clientWidth;
    if (prevScrollpos + 0.5 > currentScrollPos) {
        document.getElementById(\"connav\").style.top = \"0px\";
        document.getElementById(\"ulnav\").style.top = \"50px\";
        prevScrollpos = currentScrollPos;
  } else if (navbar <= 0 && currentScrollPos > 300) {
        document.getElementById(\"connav\").style.top = \"-210px\";
        document.getElementById(\"ulnav\").style.top = \"-210px\";
        prevScrollpos = currentScrollPos;
    }
}



//Navbar Toggler   
document.getElementById(\"navbar-toggler\").onclick = function() {
  var win = window,
  doc = document,
  docElem = doc.documentElement,
  body = doc.getElementsByTagName('body')[0],
  x = win.innerWidth || docElem.clientWidth || body.clientWidth,
  y = win.innerHeight|| docElem.clientHeight|| body.clientHeight;
  console.log(x + ' × ' + y);
  navbar++
  sidebar++
          
  if (navbar <= 1 && x < 650){
        document.getElementById(\"sidebar1\").style.display = \"block\";
        document.getElementById(\"sidebar2\").style.display = \"block\";
        document.getElementById(\"sidebar3\").style.display = \"block\";
        document.getElementById(\"sidebar4\").style.display = \"block\";
        document.getElementById(\"sidebar5\").style.display = \"block\";
        document.getElementById(\"sidebar6\").style.display = \"block\";
        document.getElementById(\"sidebar7\").style.display = \"block\";
        document.getElementById(\"sidebar8\").style.display = \"block\";
        console.log(navbar)
    } else  if (x < 600) {
       
        navbar = 0
        document.getElementById(\"sidebar1\").style.display = \"none\";
        document.getElementById(\"sidebar2\").style.display = \"none\";
        document.getElementById(\"sidebar3\").style.display = \"none\";
        document.getElementById(\"sidebar4\").style.display = \"none\";
        document.getElementById(\"sidebar5\").style.display = \"none\";
        document.getElementById(\"sidebar6\").style.display = \"none\";
        document.getElementById(\"sidebar7\").style.display = \"none\";
        document.getElementById(\"sidebar8\").style.display = \"none\";
        console.log(\"navbar: \" + navbar)
    }

    if (sidebar <= 1 && x > 600){
        document.getElementById(\"considebar\").style.marginLeft = \"calc(100% - 190px)\";
        console.log(sidebar)
    } else if (x > 600) {
        sidebar = 0
        document.getElementById(\"considebar\").style.marginLeft = \"100%\";
        console.log(\"sidebar: \" + sidebar)
    }
}

{% for room_key, value in room %}
  var slideIndex{{ room_key }} = 1;
  showSlides{{ room_key }}(slideIndex{{ room_key }});
  function plusSlides{{ room_key }}(n) {
    showSlides{{ room_key }}(slideIndex{{ room_key }} += n);
  }
  function currentSlide{{ room_key }}(n) {
    showSlides{{ room_key }}(slideIndex{{ room_key }} = n);
  }
  function showSlides{{ room_key }}(n) {
  var i;
  var slides = document.getElementsByClassName(\"mySlides{{ room_key }}\");
  var dots = document.getElementsByClassName(\"dot{{ room_key }}\");
  if(n > slides.length) {
    slideIndex{{ room_key }} = 1
  }
  if(n < 1) {
    slideIndex{{ room_key }} = slides.length
  }
  for(i = 0; i < slides.length; i++) {
    slides[i].style.display = \"none\";
  }
  for(i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(\" active\", \"\");
  }
  slides[slideIndex{{ room_key }} - 1].style.display = \"block\";
  dots[slideIndex{{ room_key }} - 1].className += \" active\";
  }
{% endfor %}
checkCookie()
</script>
</body></html>", "room.html.twig", "/var/www/html/bergfried/views/room.html.twig");
    }
}
