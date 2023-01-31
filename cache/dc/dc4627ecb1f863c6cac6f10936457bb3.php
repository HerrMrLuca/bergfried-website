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

/* img.html.twig */
class __TwigTemplate_f8518f5e23cd7b940d6f940c25492361 extends Template
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
  <title>Bilder - Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
  <script src=\"https://kit.fontawesome.com/9f0e4b36fb.js\" crossorigin=\"anonymous\"></script>

    <style>
      .slideshow-container{
      margin-top: 70px;
      width: 100%;
      max-height: 100%;
      margin-left: calc(50% - 450px);
    }
    .slideshowve{
      width: 50%;
      margin-left: calc(50% - 225px);
    }

    .contentshare {
        margin-top: 30px;
        margin-left: 0px;
      }

    @media screen and (max-width: 950px) {
      .slideshow-container {
        margin-left: 5%;
        width: 90%
      } 
      .slideshowve {
        margin-left: 25%;
      } 
    }

    @media screen and (max-width: 950px) { 
      .contentshare {
        margin: auto;
        margin-top: 30px;
        width: 100%;
      }
      .dot {
        display: none;
      }
    }

    </style>
  </head>
  <body>
<div class=\"container\">
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
                <li class=\"language\"><a id=\"EN\" href=\"ENimg.html\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZimg.html\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact.php\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav2\" class=\"nav\" href=\"room.html\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"nav\" href=\"index.html\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar4\" class=\"sidebar2\" href=\"index.html\">Startseite</a></li>
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"room.html\">Zimmer</a></li>
            <li><a id=\"sidebar3\" class=\"sidebar2\" href=\"contact.php\">Kontakt</a></li>
            <li><a id=\"sidebar1\" class=\"sidebar\" href=\"img.html\">Bilder</a></li>
            <!--<li><a id=\"sidebar\" class=\"sidebar\" href=\"roomimg.html\">Zimmer-Bilder</a></li>
            <li><a id=\"sidebar\" class=\"sidebar\" href=\"price.html\">Preise</a></li>-->
            <li><a id=\"sidebar5\" class=\"sidebar\" href=\"arrival.html\">Anfahrt</a></li>
            <li><a id=\"sidebar6\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/aktivitaeten.html\">Aktivitäten</a></li>
            <li><a id=\"sidebar7\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/oesterreich-stadt-ort/detail/430000973/hallstatt.html\">Reiseplaner</a></li>
            <li><a id=\"sidebar8\" class=\"sidebar\" href=\"about.html\">Impressum</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    <div class=\"slideshow-container\">
      <div class=\"mySlides fade\">
          <div class=\"numbertext\">1 / 23</div>
            <img src=\"assets/pic/1h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/1h1x.jpg 600w, assets/pic/1h2x.jpg 1200w, assets/pic/1h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">2 / 23</div>
            <img src=\"assets/pic/25h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/25h1x.jpg 600w, assets/pic/25h2x.jpg 1200w, assets/pic/25h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">3 / 23</div>
            <img src=\"assets/pic/3h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/3h1x.jpg 600w, assets/pic/3h2x.jpg 1200w, assets/pic/3h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">4 / 23</div>
            <img src=\"assets/pic/4h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/4h1x.jpg 600w, assets/pic/4h2x.jpg 1200w, assets/pic/4h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">5 / 23</div>
            <img src=\"assets/pic/5h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/5h1x.jpg 600w, assets/pic/5h2x.jpg 1200w, assets/pic/5h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">6 / 23</div>
            <img src=\"assets/pic/6h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/6h1x.jpg 600w, assets/pic/6h2x.jpg 1200w, assets/pic/6h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">7 / 23</div>
            <img src=\"assets/pic/7h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/7h1x.jpg 600w, assets/pic/7h2x.jpg 1200w, assets/pic/7h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">8 / 23</div>
            <img src=\"assets/pic/8h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/8h1x.jpg 600w, assets/pic/8h2x.jpg 1200w, assets/pic/8h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">9 / 23</div>
            <img src=\"assets/pic/12h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/12h1x.jpg 600w, assets/pic/12h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">10 / 23</div>
            <img src=\"assets/pic/13h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/13h1x.jpg 600w, assets/pic/13h2x.jpg 1200w, assets/pic/13h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">11 / 23</div>
            <img src=\"assets/pic/14h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/14h1x.jpg 600w, assets/pic/14h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">12 / 23</div>
            <img src=\"assets/pic/15h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/15h1x.jpg 600w, assets/pic/15h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">13 / 23</div>
            <img src=\"assets/pic/16h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/16h1x.jpg 600w, assets/pic/16h2x.jpg 1200w, assets/pic/16h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">14 / 23</div>
            <img src=\"assets/pic/17h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/17h1x.jpg 600w, assets/pic/17h2x.jpg 1200w, assets/pic/17h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">15 / 23</div>
            <img src=\"assets/pic/18h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/18h1x.jpg 600w, assets/pic/18h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">16 / 23</div>
            <img src=\"assets/pic/19h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/19h1x.jpg 600w, assets/pic/19h2x.jpg 1200w, assets/pic/19h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">17 / 23</div>
            <img src=\"assets/pic/3z1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/3z1x.jpg 600w, assets/pic/3z2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">18 / 23</div>
            <img src=\"assets/pic/15h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/15h1x.jpg 600w, assets/pic/15h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">19 / 23</div>
            <img src=\"assets/pic/10h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/20h1x.jpg 600w, assets/pic/20h2x.jpg 1200w, assets/pic/20h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">20 / 23</div>
            <img src=\"assets/pic/21h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/21h1x.jpg 600w, assets/pic/21h2x.jpg 1200w, assets/pic/21h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">21 / 23</div>
            <img src=\"assets/pic/22h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/22h1x.jpg 600w, assets/pic/22h2x.jpg 1200w, assets/pic/22h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">22 / 23</div>
            <img src=\"assets/pic/23h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/23h1x.jpg 600w, assets/pic/23h2x.jpg 1200w, assets/pic/23h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">23 / 23</div>
            <img src=\"assets/pic/24h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/24h1x.jpg 600w, assets/pic/24h2x.jpg 1200w, assets/pic/24h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
        <a class=\"prev-slide\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next-slide\" onclick=\"plusSlides(1)\">&#10095;</a>
        <br>
        <div style=\"text-align:center\" class=\"divdot\">
          <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(3)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(4)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(5)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(6)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(7)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(8)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(9)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(10)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(11)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(12)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(13)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(14)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(15)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(16)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(17)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(18)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(19)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(20)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(21)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(22)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(23)\"></span>
        </div>
        <div class=\"contentshare\">
      <div>
        <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
        <a href=\"https://www.google.at/maps/place/Gasthof+Bergfried/@47.556882,13.647025,17z/data=!4m8!3m7!1s0x0:0xe4413e36f1e81b02!5m2!4m1!1i2!8m2!3d47.556673!4d13.646084\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
        <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
        <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
        <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
      </div>
    </div>
    <div>
    </div>
  </div>
  <img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
  <a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
  <div><a id=\"black\" onclick=\"gone()\">Test</a>
  </div>
</div>

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


      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"dot\");
        if(n > slides.length) {
          slideIndex = 1
        }
        if(n < 1) {
          slideIndex = slides.length
        }
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = \"none\";
        }
        for(i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(\" active\", \"\");
        }
        slides[slideIndex - 1].style.display = \"block\";
        dots[slideIndex - 1].className += \" active\";
      }

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

</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "img.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
  <head>
  <title>Bilder - Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
  <script src=\"https://kit.fontawesome.com/9f0e4b36fb.js\" crossorigin=\"anonymous\"></script>

    <style>
      .slideshow-container{
      margin-top: 70px;
      width: 100%;
      max-height: 100%;
      margin-left: calc(50% - 450px);
    }
    .slideshowve{
      width: 50%;
      margin-left: calc(50% - 225px);
    }

    .contentshare {
        margin-top: 30px;
        margin-left: 0px;
      }

    @media screen and (max-width: 950px) {
      .slideshow-container {
        margin-left: 5%;
        width: 90%
      } 
      .slideshowve {
        margin-left: 25%;
      } 
    }

    @media screen and (max-width: 950px) { 
      .contentshare {
        margin: auto;
        margin-top: 30px;
        width: 100%;
      }
      .dot {
        display: none;
      }
    }

    </style>
  </head>
  <body>
<div class=\"container\">
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
                <li class=\"language\"><a id=\"EN\" href=\"ENimg.html\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZimg.html\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact.php\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav2\" class=\"nav\" href=\"room.html\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"nav\" href=\"index.html\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar4\" class=\"sidebar2\" href=\"index.html\">Startseite</a></li>
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"room.html\">Zimmer</a></li>
            <li><a id=\"sidebar3\" class=\"sidebar2\" href=\"contact.php\">Kontakt</a></li>
            <li><a id=\"sidebar1\" class=\"sidebar\" href=\"img.html\">Bilder</a></li>
            <!--<li><a id=\"sidebar\" class=\"sidebar\" href=\"roomimg.html\">Zimmer-Bilder</a></li>
            <li><a id=\"sidebar\" class=\"sidebar\" href=\"price.html\">Preise</a></li>-->
            <li><a id=\"sidebar5\" class=\"sidebar\" href=\"arrival.html\">Anfahrt</a></li>
            <li><a id=\"sidebar6\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/aktivitaeten.html\">Aktivitäten</a></li>
            <li><a id=\"sidebar7\" class=\"sidebar\" target=\"_blank\" href=\"https://www.salzkammergut.at/oesterreich-stadt-ort/detail/430000973/hallstatt.html\">Reiseplaner</a></li>
            <li><a id=\"sidebar8\" class=\"sidebar\" href=\"about.html\">Impressum</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
    <div class=\"slideshow-container\">
      <div class=\"mySlides fade\">
          <div class=\"numbertext\">1 / 23</div>
            <img src=\"assets/pic/1h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/1h1x.jpg 600w, assets/pic/1h2x.jpg 1200w, assets/pic/1h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">2 / 23</div>
            <img src=\"assets/pic/25h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/25h1x.jpg 600w, assets/pic/25h2x.jpg 1200w, assets/pic/25h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">3 / 23</div>
            <img src=\"assets/pic/3h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/3h1x.jpg 600w, assets/pic/3h2x.jpg 1200w, assets/pic/3h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">4 / 23</div>
            <img src=\"assets/pic/4h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/4h1x.jpg 600w, assets/pic/4h2x.jpg 1200w, assets/pic/4h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">5 / 23</div>
            <img src=\"assets/pic/5h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/5h1x.jpg 600w, assets/pic/5h2x.jpg 1200w, assets/pic/5h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">6 / 23</div>
            <img src=\"assets/pic/6h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/6h1x.jpg 600w, assets/pic/6h2x.jpg 1200w, assets/pic/6h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">7 / 23</div>
            <img src=\"assets/pic/7h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/7h1x.jpg 600w, assets/pic/7h2x.jpg 1200w, assets/pic/7h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">8 / 23</div>
            <img src=\"assets/pic/8h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/8h1x.jpg 600w, assets/pic/8h2x.jpg 1200w, assets/pic/8h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">9 / 23</div>
            <img src=\"assets/pic/12h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/12h1x.jpg 600w, assets/pic/12h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">10 / 23</div>
            <img src=\"assets/pic/13h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/13h1x.jpg 600w, assets/pic/13h2x.jpg 1200w, assets/pic/13h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">11 / 23</div>
            <img src=\"assets/pic/14h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/14h1x.jpg 600w, assets/pic/14h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">12 / 23</div>
            <img src=\"assets/pic/15h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/15h1x.jpg 600w, assets/pic/15h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">13 / 23</div>
            <img src=\"assets/pic/16h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/16h1x.jpg 600w, assets/pic/16h2x.jpg 1200w, assets/pic/16h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">14 / 23</div>
            <img src=\"assets/pic/17h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/17h1x.jpg 600w, assets/pic/17h2x.jpg 1200w, assets/pic/17h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">15 / 23</div>
            <img src=\"assets/pic/18h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/18h1x.jpg 600w, assets/pic/18h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">16 / 23</div>
            <img src=\"assets/pic/19h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/19h1x.jpg 600w, assets/pic/19h2x.jpg 1200w, assets/pic/19h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">17 / 23</div>
            <img src=\"assets/pic/3z1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/3z1x.jpg 600w, assets/pic/3z2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">18 / 23</div>
            <img src=\"assets/pic/15h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/15h1x.jpg 600w, assets/pic/15h2x.jpg 1200w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">19 / 23</div>
            <img src=\"assets/pic/10h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/20h1x.jpg 600w, assets/pic/20h2x.jpg 1200w, assets/pic/20h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">20 / 23</div>
            <img src=\"assets/pic/21h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/21h1x.jpg 600w, assets/pic/21h2x.jpg 1200w, assets/pic/21h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">21 / 23</div>
            <img src=\"assets/pic/22h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/22h1x.jpg 600w, assets/pic/22h2x.jpg 1200w, assets/pic/22h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">22 / 23</div>
            <img src=\"assets/pic/23h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/23h1x.jpg 600w, assets/pic/23h2x.jpg 1200w, assets/pic/23h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
          <div class=\"mySlides fade\">
            <div class=\"numbertext\">23 / 23</div>
            <img src=\"assets/pic/24h1x.jpg\" style=\"max-height: 600px; width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/24h1x.jpg 600w, assets/pic/24h2x.jpg 1200w, assets/pic/24h3x.jpg 3000w,\">
            <div class=\"text\"></div>
          </div>
        <a class=\"prev-slide\" onclick=\"plusSlides(-1)\">&#10094;</a>
        <a class=\"next-slide\" onclick=\"plusSlides(1)\">&#10095;</a>
        <br>
        <div style=\"text-align:center\" class=\"divdot\">
          <span class=\"dot\" onclick=\"currentSlide(1)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(2)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(3)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(4)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(5)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(6)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(7)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(8)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(9)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(10)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(11)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(12)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(13)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(14)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(15)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(16)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(17)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(18)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(19)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(20)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(21)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(22)\"></span>
          <span class=\"dot\" onclick=\"currentSlide(23)\"></span>
        </div>
        <div class=\"contentshare\">
      <div>
        <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
        <a href=\"https://www.google.at/maps/place/Gasthof+Bergfried/@47.556882,13.647025,17z/data=!4m8!3m7!1s0x0:0xe4413e36f1e81b02!5m2!4m1!1i2!8m2!3d47.556673!4d13.646084\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
        <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
        <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
        <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
      </div>
    </div>
    <div>
    </div>
  </div>
  <img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
  <a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
  <div><a id=\"black\" onclick=\"gone()\">Test</a>
  </div>
</div>

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


      var slideIndex = 1;
      showSlides(slideIndex);
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }
      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName(\"mySlides\");
        var dots = document.getElementsByClassName(\"dot\");
        if(n > slides.length) {
          slideIndex = 1
        }
        if(n < 1) {
          slideIndex = slides.length
        }
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = \"none\";
        }
        for(i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(\" active\", \"\");
        }
        slides[slideIndex - 1].style.display = \"block\";
        dots[slideIndex - 1].className += \" active\";
      }

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

</script>
</body>
</html>", "img.html.twig", "/var/www/html/bergfried/views/img.html.twig");
    }
}
