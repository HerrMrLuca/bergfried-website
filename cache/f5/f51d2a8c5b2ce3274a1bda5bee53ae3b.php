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

/* home.html.twig */
class __TwigTemplate_520bbbdcb16ab188000750bf2ac597ab extends Template
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
  <title>Pension Bergfried</title>

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
                <li class=\"language\"><a id=\"EN\" href=\"ENindex.html\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZindex.html\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact.php\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav2\" class=\"nav\" href=\"room\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav-a\" href=\"index\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar1\" class=\"sidebar2\" href=\"index\">Startseite</a></li>
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"room\">Zimmer</a></li>
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
  <div class=\"background\">
    <div class=\"title\">
      <h1>Pension Bergfried</h1>
    </div>
    <form class=\"buchen\" action=\"contact.php\"> 
      <div>
        <div style=\"text-align: left;\">
          <a class=\"anreise\">Anreise</a>
        </div>
        <div style=\"text-align: right;\">
          <a class=\"abreise\">Abreise</a>
        </div>
        <div class=\"condate\" style=\"margin:0px auto\">
          <div id=\"range\" style=\"margin-bottom: -10px; margin-top: -25px;\">
            <input type=\"text\" name=\"start\" class=\"datepicker-input\" id=\"anreise\" placeholder=\"DD.MM.YYYY\" for=\"start\" value=\"\">
            <span></span>
            <input type=\"text\" name=\"end\" class=\"datepicker-input\" id=\"abreise\" placeholder=\"DD.MM.YYYY\" for=\"end\" value=\"\">
          </div>
          <div>         
            <select value=\"1\" id=\"zimmer2\" style=\"display: none;\"></select>
            <select value=\"Zimmer\" id=\"room2\" style=\"display: none;\"></select>
            <select value=\"1\" id=\"adult2\" style=\"display: none;\"></select>
            <select value=\"0\"id=\"kid2\" style=\"display: none;\"></select>
          </div>
        </div>
        <div>
          <input class=\"button\" type=\"submit\" value=\"Jetzt Buchen\" id=\"button\" onclick=\"getData();\">
        </div>
      </div>
    </form>
    <div class=\"description\">
      <h1>Geschäftsreise, Urlaub, Entspannung oder Erlebnis</h1>
    </div>
  </div>
  <!-- Content-Text -->
  <div class=\"container\">
    <div class=\"content\">
      <div class=\"text1\">
        <a><!--<img src=\"https://i.ck.cz/f/87849/22.jpg\" class=\"img1\">-->Unsere gemütliche Pension mit eigenem Parkplatz befindet sich am Fuße des Salzberges und ist nur 150 m vom See entfernt.<br>
        Entlang der Seepromenade gehen Sie 5 Gehminuten ins Zentrum.<br><br>
        Tauchen oder baden Sie im Hallstätter See, erleben Sie herrliche Wanderungen durch unberührte Landschaften.<br>
        Klettertouren, Radfahren oder romantische Bootsfahrten auf dem See bieten Ihnen Erholung und Abwechslung in Ihrem Urlaub.</a>
      </div>
    </div>
    <div class=\"line\">
    </div>
    <div class=\"contentpicture\">
      <div>
        <div class=\"slideshow-container-index\">
          <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">1 / 8</div>
\t        <img src=\"assets/pic/1h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/1h1x.jpg 600w, assets/pic/1h2x.jpg 1200w, assets/pic/1h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">2 / 8</div>
\t        <img src=\"assets/pic/18h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/18h1x.jpg 600w, assets/pic/18h2x.jpg 1200w, assets/pic/18h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">3 / 8</div>
\t        <img src=\"assets/pic/19h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/19h1x.jpg 600w, assets/pic/19h2x.jpg 1200w, assets/pic/19h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">4 / 8</div>
\t        <img src=\"assets/pic/4h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/4h1x.jpg 600w, assets/pic/4h2x.jpg 1200w, assets/pic/4h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">5 / 8</div>
\t        <img src=\"assets/pic/3h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/3h1x.jpg 600w, assets/pic/3h2x.jpg 1200w, assets/pic/3h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">6 / 8</div>
\t        <img src=\"assets/pic/5h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/5h1x.jpg 600w, assets/pic/5h2x.jpg 1200w, assets/pic/5h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">7 / 8</div>
\t        <img src=\"assets/pic/6h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/6h1x.jpg 600w, assets/pic/6h2x.jpg 1200w, assets/pic/6h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">8 / 8</div>
\t        <img src=\"assets/pic/20h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/20h1x.jpg 600w, assets/pic/20h2x.jpg 1200w, assets/pic/20h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
          <a class=\"prev-slide-index\" onclick=\"plusSlides(-1)\">&#10094;</a>
          <a class=\"next-slide-index\" onclick=\"plusSlides(1)\">&#10095;</a>
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
          </div>
      </div>
    </div>
  </div>
  <div class=\"line\" style=\"margin-top: 3%;\">
  </div>
  <div class=\"contentpicture2\">
    <div>
      <div class=\"eins\">
          <a style=\"line-height: 2.0;\">Sommersaison- Bed and Breakfast</a>
        <!--<div style=\"position: absolute; right: 0;\">
          <p>Wir bieten undere Gäste eine reichhaltiges Frühstücksbuffet</p>
        </div>-->
            <div class=\"slideshow-container-index2\">
              <div class=\"mySlides2 fade\">
                <div class=\"numbertext\">1 / 3</div>
                <img src=\"assets/pic/4e2x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\" class=\"breakfast-image\">
                <div class=\"text\"></div>
              </div>
              <div class=\"mySlides2 fade\">
                <div class=\"numbertext\">2 / 3</div>
                <img src=\"assets/pic/5e2x.jpg\" style=\"width:100%;\" alt=\"Frühstücksbuffet\" class=\"breakfast-image\">
                <div class=\"text\"></div>
              </div>
              <div class=\"mySlides2 fade\">
                <div class=\"numbertext\">3 / 3</div>
                <img src=\"assets/pic/6e2x.jpg\" style=\"width:100%;\" alt=\"Frühstücksbuffet\" class=\"breakfast-image\">
                <div class=\"text\"></div>
              </div>
              <a class=\"prev-slide-index\" onclick=\"plusSlides2(-1)\">&#10094;</a>
              <a class=\"next-slide-index\" onclick=\"plusSlides2(1)\">&#10095;</a>
              <br>
              <div style=\"text-align:center; padding-bottom: 10px;\">
                <span class=\"dot2\" onclick=\"currentSlide2(1)\"></span>
                <span class=\"dot2\" onclick=\"currentSlide2(2)\"></span>
                <span class=\"dot2\" onclick=\"currentSlide2(3)\"></span>
              </div>
              <div>
                <div>
                  <p>Wir bieten unsere Gäste eine reichhaltiges Frühstücksbuffet</p>
                </div>
              </div>
            </div>
      </div>
      <div class=\"zwei\">
          <a style=\"line-height: 2.0;\">Wintersaison - mit Halbpension möglich</a>
          <!--<p style=\"right: 0; position: absolute;\">Im Winter bieten wir unseren Gästen ein 3 gäniges Menü zur Wahl!<p>-->
          <div class=\"slideshow-container-index2\">
            <div class=\"mySlides3 fade\">
              <div class=\"numbertext\">1 / 3</div>
              <img src=\"assets/pic/3e2x.jpg\" style=\"width:100%\" alt=\"Halbpension\">
              <div class=\"text\"></div>
            </div>
            <div class=\"mySlides3 fade\">
              <div class=\"numbertext\">2 / 3</div>
              <img src=\"assets/pic/2e2x.jpg\" style=\"width:100%\" alt=\"Halbpension\">
              <div class=\"text\"></div>
            </div>
            <div class=\"mySlides3 fade\">
              <div class=\"numbertext\">3 / 3</div>
              <img src=\"assets/pic/1e2x.jpg\" style=\"width:100%\" alt=\"Halbpension\">
              <div class=\"text\"></div>
            </div>
            <a class=\"prev-slide-index\" onclick=\"plusSlides3(-1)\">&#10094;</a>
            <a class=\"next-slide-index\" onclick=\"plusSlides3(1)\">&#10095;</a>
            <br>
            <div style=\"text-align:center; padding-bottom: 10px;\">
              <span class=\"dot3\" onclick=\"currentSlide3(1)\"></span>
              <span class=\"dot3\" onclick=\"currentSlide3(2)\"></span>
              <span class=\"dot3\" onclick=\"currentSlide3(3)\"></span>
            </div>
            <div>
              <p>Im Winter bieten wir unseren Gästen ein 3-gäniges Menü zur Wahl!<p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class=\"line\">
  </div>
  <div>
    <div class=\"contentpicture3\">
      <div>
        <div class=\"drei\">
          <h3 style=\"line-height: 2.0;\">Wellnessbereich</h3>
          <div class=\"slideshow-container-index3\">
                <div class=\"mySlides4 fade\">
                  <div class=\"numbertext\">1 / 3</div>
                  <img src=\"assets/pic/1w2x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\">
                  <div class=\"text\"></div>
                </div>
                <div class=\"mySlides4 fade\">
                  <div class=\"numbertext\">2 / 3</div>
                  <img src=\"assets/pic/2w1x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\">
                  <div class=\"text\"></div>
                </div>
                <div class=\"mySlides4 fade\">
                  <div class=\"numbertext\">3 / 3</div>
                  <img src=\"assets/pic/3w1x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\">
                  <div class=\"text\"></div>
                </div>
                <a class=\"prev-slide-index\" onclick=\"plusSlides4(-1)\">&#10094;</a>
                <a class=\"next-slide-index\" onclick=\"plusSlides4(1)\">&#10095;</a>
                <br>
                <div style=\"text-align:center; padding-bottom: 10px;\">
                  <span class=\"dot4\" onclick=\"currentSlide4(1)\"></span>
                  <span class=\"dot4\" onclick=\"currentSlide4(2)\"></span>
                  <span class=\"dot4\" onclick=\"currentSlide4(3)\"></span>
                </div>
                <div>
                  <div>
                    <p> Erholen Sie sich in eigenem Wellnessbereich mit einer finnischen Sauna, Infrarotkabine von Physioterm sowie einer Whirlwanne.<br>Dies ist gegen eine Gebühr nutzbar.</p>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"line\">
  </div>
  <div class=\"content\">
    <div class=\"text1\">

        <a>Ob Geschäftsreise oder Urlaub, Entspannung oder Erlebnis: Pension Bergfried ist Ihre Adresse für eine angenehme Zeit.<br>

        Als unser Gast genießen Sie alle Annehmlichkeiten eines zeitgemäßen Hotels: von komfortabel ausgestatteten Zimmern bis zum stets aufmerksamen und auf Ihr Wohlbefinden bedachten Service-Team. Dafür stehen wir mit unserer langjährigen Erfahrung und Tradition.</a><br>

        <!--<a>Wir verfügen über 30 Zimmer mit Dusche /WC, TV. Einige Zimmer besitzen einen Balkon. Im obersten Stock befinden sich zwei Ferienwohnungen mit seitlichen Seeblick.<br></a>-->
    </div>
  </div>
\t<div class=\"contentshare\">
\t  <div>
\t    <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
\t    <a href=\"https://www.google.at/maps/place/Gasthof+Bergfried/@47.556882,13.647025,17z/data=!4m8!3m7!1s0x0:0xe4413e36f1e81b02!5m2!4m1!1i2!8m2!3d47.556673!4d13.646084\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
\t    <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
\t    <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
\t    <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
\t  </div>
\t</div>
\t<div>
\t\t<img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
\t\t<a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
\t\t<div><a id=\"black\" onclick=\"gone()\">Test</a>
\t\t</div>
\t</div>
</div>

<script src=\"assets/dist/js/datepicker-full.js\"></script>
<script src=\"assets/index.js\"></script>
<script>

function whatsapp() {
\tsetTimeout(function() {document.getElementById(\"whatsapp\").style.opacity = \"1\";}, 300)
\tsetTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
\tdocument.getElementById(\"whatsapp\").style.display = \"block\";
\tdocument.getElementById(\"black\").style.display = \"block\";
}

function line() {
\tsetTimeout(function() {document.getElementById(\"line\").style.opacity = \"1\";}, 300)
\tsetTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
\tdocument.getElementById(\"line\").style.display = \"block\";
\tdocument.getElementById(\"black\").style.display = \"block\";
}

function gone() {
\tdocument.getElementById(\"black\").style.opacity = \"0\";
\tdocument.getElementById(\"whatsapp\").style.opacity = \"0\";
\tdocument.getElementById(\"line\").style.opacity = \"0\";
\tsetTimeout(function() {document.getElementById(\"whatsapp\").style.display = \"none\";}, 300)
\tsetTimeout(function() {document.getElementById(\"line\").style.display = \"none\";}, 300)
\tsetTimeout(function() {document.getElementById(\"black\").style.display = \"none\";}, 300)
}



  \tconst elem1 = document.getElementById('range');
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
\t} else if (navbar <= 0 && currentScrollPos > 300) {
        document.getElementById(\"connav\").style.top = \"-210px\";
        document.getElementById(\"ulnav\").style.top = \"-210px\";
        prevScrollpos = currentScrollPos;
    }
}



//Navbar Toggler   
document.getElementById(\"navbar-toggler\").onclick = function() {
\tvar win = window,
\tdoc = document,
\tdocElem = doc.documentElement,
\tbody = doc.getElementsByTagName('body')[0],
\tx = win.innerWidth || docElem.clientWidth || body.clientWidth,
\ty = win.innerHeight|| docElem.clientHeight|| body.clientHeight;
\tconsole.log(x + ' × ' + y);
\tnavbar++
\tsidebar++
\t        
\tif (navbar <= 1 && x < 650){
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

//Slideshow
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
  var slideIndex2 = 1;
        showSlides2(slideIndex2);
        function plusSlides2(n) {
          showSlides2(slideIndex2 += n);
        }
        function currentSlide2(n) {
          showSlides2(slideIndex2 = n);
        }
        function showSlides2(n) {
          var i;
          var slides = document.getElementsByClassName(\"mySlides2\");
          var dots = document.getElementsByClassName(\"dot2\");
          if(n > slides.length) {
            slideIndex2 = 1
          }
          if(n < 1) {
            slideIndex2 = slides.length
          }
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
          }
          for(i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
          }
          slides[slideIndex2 - 1].style.display = \"block\";
          dots[slideIndex2 - 1].className += \" active\";
        }

  var slideIndex3 = 1;
        showSlides3(slideIndex3);
        function plusSlides3(n) {
          showSlides3(slideIndex3 += n);
        }
        function currentSlide3(n) {
          showSlides3(slideIndex3 = n);
        }
        function showSlides3(n) {
          var i;
          var slides = document.getElementsByClassName(\"mySlides3\");
          var dots = document.getElementsByClassName(\"dot3\");
          if(n > slides.length) {
            slideIndex3 = 1
          }
          if(n < 1) {
            slideIndex3 = slides.length
          }
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
          }
          for(i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
          }
          slides[slideIndex3 - 1].style.display = \"block\";
          dots[slideIndex3 - 1].className += \" active\";
        }

  var slideIndex4 = 1;
        showSlides4(slideIndex4);
        function plusSlides4(n) {
          showSlides4(slideIndex4 += n);
        }
        function currentSlide4(n) {
          showSlides4(slideIndex4 = n);
        }
        function showSlides4(n) {
          var i;
          var slides = document.getElementsByClassName(\"mySlides4\");
          var dots = document.getElementsByClassName(\"dot4\");
          if(n > slides.length) {
            slideIndex4 = 1
          }
          if(n < 1) {
            slideIndex4 = slides.length
          }
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
          }
          for(i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
          }
          slides[slideIndex4 - 1].style.display = \"block\";
          dots[slideIndex4 - 1].className += \" active\";
        }
</script>
</body></html>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
  <title>Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"{{ get_base_path() }}/css/style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
  <link href=\"assets/dist/css/datepicker-bs4.css\" rel=\"stylesheet\">
  <script src=\"https://kit.fontawesome.com/9f0e4b36fb.js\" crossorigin=\"anonymous\"></script>

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
                <li class=\"language\"><a id=\"EN\" href=\"ENindex.html\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZindex.html\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact.php\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav2\" class=\"nav\" href=\"room\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav-a\" href=\"index\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar1\" class=\"sidebar2\" href=\"index\">Startseite</a></li>
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"room\">Zimmer</a></li>
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
  <div class=\"background\">
    <div class=\"title\">
      <h1>Pension Bergfried</h1>
    </div>
    <form class=\"buchen\" action=\"contact.php\"> 
      <div>
        <div style=\"text-align: left;\">
          <a class=\"anreise\">Anreise</a>
        </div>
        <div style=\"text-align: right;\">
          <a class=\"abreise\">Abreise</a>
        </div>
        <div class=\"condate\" style=\"margin:0px auto\">
          <div id=\"range\" style=\"margin-bottom: -10px; margin-top: -25px;\">
            <input type=\"text\" name=\"start\" class=\"datepicker-input\" id=\"anreise\" placeholder=\"DD.MM.YYYY\" for=\"start\" value=\"\">
            <span></span>
            <input type=\"text\" name=\"end\" class=\"datepicker-input\" id=\"abreise\" placeholder=\"DD.MM.YYYY\" for=\"end\" value=\"\">
          </div>
          <div>         
            <select value=\"1\" id=\"zimmer2\" style=\"display: none;\"></select>
            <select value=\"Zimmer\" id=\"room2\" style=\"display: none;\"></select>
            <select value=\"1\" id=\"adult2\" style=\"display: none;\"></select>
            <select value=\"0\"id=\"kid2\" style=\"display: none;\"></select>
          </div>
        </div>
        <div>
          <input class=\"button\" type=\"submit\" value=\"Jetzt Buchen\" id=\"button\" onclick=\"getData();\">
        </div>
      </div>
    </form>
    <div class=\"description\">
      <h1>Geschäftsreise, Urlaub, Entspannung oder Erlebnis</h1>
    </div>
  </div>
  <!-- Content-Text -->
  <div class=\"container\">
    <div class=\"content\">
      <div class=\"text1\">
        <a><!--<img src=\"https://i.ck.cz/f/87849/22.jpg\" class=\"img1\">-->Unsere gemütliche Pension mit eigenem Parkplatz befindet sich am Fuße des Salzberges und ist nur 150 m vom See entfernt.<br>
        Entlang der Seepromenade gehen Sie 5 Gehminuten ins Zentrum.<br><br>
        Tauchen oder baden Sie im Hallstätter See, erleben Sie herrliche Wanderungen durch unberührte Landschaften.<br>
        Klettertouren, Radfahren oder romantische Bootsfahrten auf dem See bieten Ihnen Erholung und Abwechslung in Ihrem Urlaub.</a>
      </div>
    </div>
    <div class=\"line\">
    </div>
    <div class=\"contentpicture\">
      <div>
        <div class=\"slideshow-container-index\">
          <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">1 / 8</div>
\t        <img src=\"assets/pic/1h1x.jpg\" style=\"width:100%;\" alt=\"Hallstatt\" srcset=\"assets/pic/1h1x.jpg 600w, assets/pic/1h2x.jpg 1200w, assets/pic/1h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">2 / 8</div>
\t        <img src=\"assets/pic/18h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/18h1x.jpg 600w, assets/pic/18h2x.jpg 1200w, assets/pic/18h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">3 / 8</div>
\t        <img src=\"assets/pic/19h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/19h1x.jpg 600w, assets/pic/19h2x.jpg 1200w, assets/pic/19h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">4 / 8</div>
\t        <img src=\"assets/pic/4h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/4h1x.jpg 600w, assets/pic/4h2x.jpg 1200w, assets/pic/4h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">5 / 8</div>
\t        <img src=\"assets/pic/3h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/3h1x.jpg 600w, assets/pic/3h2x.jpg 1200w, assets/pic/3h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">6 / 8</div>
\t        <img src=\"assets/pic/5h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/5h1x.jpg 600w, assets/pic/5h2x.jpg 1200w, assets/pic/5h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">7 / 8</div>
\t        <img src=\"assets/pic/6h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/6h1x.jpg 600w, assets/pic/6h2x.jpg 1200w, assets/pic/6h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
\t      <div class=\"mySlides fade\">
\t        <div class=\"numbertext\">8 / 8</div>
\t        <img src=\"assets/pic/20h1x.jpg\" style=\"width:100%\" alt=\"Hallstatt\" srcset=\"assets/pic/20h1x.jpg 600w, assets/pic/20h2x.jpg 1200w, assets/pic/20h3x.jpg 3000w,\">
\t        <div class=\"text\"></div>
\t      </div>
          <a class=\"prev-slide-index\" onclick=\"plusSlides(-1)\">&#10094;</a>
          <a class=\"next-slide-index\" onclick=\"plusSlides(1)\">&#10095;</a>
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
          </div>
      </div>
    </div>
  </div>
  <div class=\"line\" style=\"margin-top: 3%;\">
  </div>
  <div class=\"contentpicture2\">
    <div>
      <div class=\"eins\">
          <a style=\"line-height: 2.0;\">Sommersaison- Bed and Breakfast</a>
        <!--<div style=\"position: absolute; right: 0;\">
          <p>Wir bieten undere Gäste eine reichhaltiges Frühstücksbuffet</p>
        </div>-->
            <div class=\"slideshow-container-index2\">
              <div class=\"mySlides2 fade\">
                <div class=\"numbertext\">1 / 3</div>
                <img src=\"assets/pic/4e2x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\" class=\"breakfast-image\">
                <div class=\"text\"></div>
              </div>
              <div class=\"mySlides2 fade\">
                <div class=\"numbertext\">2 / 3</div>
                <img src=\"assets/pic/5e2x.jpg\" style=\"width:100%;\" alt=\"Frühstücksbuffet\" class=\"breakfast-image\">
                <div class=\"text\"></div>
              </div>
              <div class=\"mySlides2 fade\">
                <div class=\"numbertext\">3 / 3</div>
                <img src=\"assets/pic/6e2x.jpg\" style=\"width:100%;\" alt=\"Frühstücksbuffet\" class=\"breakfast-image\">
                <div class=\"text\"></div>
              </div>
              <a class=\"prev-slide-index\" onclick=\"plusSlides2(-1)\">&#10094;</a>
              <a class=\"next-slide-index\" onclick=\"plusSlides2(1)\">&#10095;</a>
              <br>
              <div style=\"text-align:center; padding-bottom: 10px;\">
                <span class=\"dot2\" onclick=\"currentSlide2(1)\"></span>
                <span class=\"dot2\" onclick=\"currentSlide2(2)\"></span>
                <span class=\"dot2\" onclick=\"currentSlide2(3)\"></span>
              </div>
              <div>
                <div>
                  <p>Wir bieten unsere Gäste eine reichhaltiges Frühstücksbuffet</p>
                </div>
              </div>
            </div>
      </div>
      <div class=\"zwei\">
          <a style=\"line-height: 2.0;\">Wintersaison - mit Halbpension möglich</a>
          <!--<p style=\"right: 0; position: absolute;\">Im Winter bieten wir unseren Gästen ein 3 gäniges Menü zur Wahl!<p>-->
          <div class=\"slideshow-container-index2\">
            <div class=\"mySlides3 fade\">
              <div class=\"numbertext\">1 / 3</div>
              <img src=\"assets/pic/3e2x.jpg\" style=\"width:100%\" alt=\"Halbpension\">
              <div class=\"text\"></div>
            </div>
            <div class=\"mySlides3 fade\">
              <div class=\"numbertext\">2 / 3</div>
              <img src=\"assets/pic/2e2x.jpg\" style=\"width:100%\" alt=\"Halbpension\">
              <div class=\"text\"></div>
            </div>
            <div class=\"mySlides3 fade\">
              <div class=\"numbertext\">3 / 3</div>
              <img src=\"assets/pic/1e2x.jpg\" style=\"width:100%\" alt=\"Halbpension\">
              <div class=\"text\"></div>
            </div>
            <a class=\"prev-slide-index\" onclick=\"plusSlides3(-1)\">&#10094;</a>
            <a class=\"next-slide-index\" onclick=\"plusSlides3(1)\">&#10095;</a>
            <br>
            <div style=\"text-align:center; padding-bottom: 10px;\">
              <span class=\"dot3\" onclick=\"currentSlide3(1)\"></span>
              <span class=\"dot3\" onclick=\"currentSlide3(2)\"></span>
              <span class=\"dot3\" onclick=\"currentSlide3(3)\"></span>
            </div>
            <div>
              <p>Im Winter bieten wir unseren Gästen ein 3-gäniges Menü zur Wahl!<p>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class=\"line\">
  </div>
  <div>
    <div class=\"contentpicture3\">
      <div>
        <div class=\"drei\">
          <h3 style=\"line-height: 2.0;\">Wellnessbereich</h3>
          <div class=\"slideshow-container-index3\">
                <div class=\"mySlides4 fade\">
                  <div class=\"numbertext\">1 / 3</div>
                  <img src=\"assets/pic/1w2x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\">
                  <div class=\"text\"></div>
                </div>
                <div class=\"mySlides4 fade\">
                  <div class=\"numbertext\">2 / 3</div>
                  <img src=\"assets/pic/2w1x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\">
                  <div class=\"text\"></div>
                </div>
                <div class=\"mySlides4 fade\">
                  <div class=\"numbertext\">3 / 3</div>
                  <img src=\"assets/pic/3w1x.jpg\" style=\"width:100%\" alt=\"Frühstücksbuffet\">
                  <div class=\"text\"></div>
                </div>
                <a class=\"prev-slide-index\" onclick=\"plusSlides4(-1)\">&#10094;</a>
                <a class=\"next-slide-index\" onclick=\"plusSlides4(1)\">&#10095;</a>
                <br>
                <div style=\"text-align:center; padding-bottom: 10px;\">
                  <span class=\"dot4\" onclick=\"currentSlide4(1)\"></span>
                  <span class=\"dot4\" onclick=\"currentSlide4(2)\"></span>
                  <span class=\"dot4\" onclick=\"currentSlide4(3)\"></span>
                </div>
                <div>
                  <div>
                    <p> Erholen Sie sich in eigenem Wellnessbereich mit einer finnischen Sauna, Infrarotkabine von Physioterm sowie einer Whirlwanne.<br>Dies ist gegen eine Gebühr nutzbar.</p>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=\"line\">
  </div>
  <div class=\"content\">
    <div class=\"text1\">

        <a>Ob Geschäftsreise oder Urlaub, Entspannung oder Erlebnis: Pension Bergfried ist Ihre Adresse für eine angenehme Zeit.<br>

        Als unser Gast genießen Sie alle Annehmlichkeiten eines zeitgemäßen Hotels: von komfortabel ausgestatteten Zimmern bis zum stets aufmerksamen und auf Ihr Wohlbefinden bedachten Service-Team. Dafür stehen wir mit unserer langjährigen Erfahrung und Tradition.</a><br>

        <!--<a>Wir verfügen über 30 Zimmer mit Dusche /WC, TV. Einige Zimmer besitzen einen Balkon. Im obersten Stock befinden sich zwei Ferienwohnungen mit seitlichen Seeblick.<br></a>-->
    </div>
  </div>
\t<div class=\"contentshare\">
\t  <div>
\t    <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
\t    <a href=\"https://www.google.at/maps/place/Gasthof+Bergfried/@47.556882,13.647025,17z/data=!4m8!3m7!1s0x0:0xe4413e36f1e81b02!5m2!4m1!1i2!8m2!3d47.556673!4d13.646084\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
\t    <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
\t    <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
\t    <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
\t  </div>
\t</div>
\t<div>
\t\t<img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
\t\t<a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
\t\t<div><a id=\"black\" onclick=\"gone()\">Test</a>
\t\t</div>
\t</div>
</div>

<script src=\"assets/dist/js/datepicker-full.js\"></script>
<script src=\"assets/index.js\"></script>
<script>

function whatsapp() {
\tsetTimeout(function() {document.getElementById(\"whatsapp\").style.opacity = \"1\";}, 300)
\tsetTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
\tdocument.getElementById(\"whatsapp\").style.display = \"block\";
\tdocument.getElementById(\"black\").style.display = \"block\";
}

function line() {
\tsetTimeout(function() {document.getElementById(\"line\").style.opacity = \"1\";}, 300)
\tsetTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
\tdocument.getElementById(\"line\").style.display = \"block\";
\tdocument.getElementById(\"black\").style.display = \"block\";
}

function gone() {
\tdocument.getElementById(\"black\").style.opacity = \"0\";
\tdocument.getElementById(\"whatsapp\").style.opacity = \"0\";
\tdocument.getElementById(\"line\").style.opacity = \"0\";
\tsetTimeout(function() {document.getElementById(\"whatsapp\").style.display = \"none\";}, 300)
\tsetTimeout(function() {document.getElementById(\"line\").style.display = \"none\";}, 300)
\tsetTimeout(function() {document.getElementById(\"black\").style.display = \"none\";}, 300)
}



  \tconst elem1 = document.getElementById('range');
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
\t} else if (navbar <= 0 && currentScrollPos > 300) {
        document.getElementById(\"connav\").style.top = \"-210px\";
        document.getElementById(\"ulnav\").style.top = \"-210px\";
        prevScrollpos = currentScrollPos;
    }
}



//Navbar Toggler   
document.getElementById(\"navbar-toggler\").onclick = function() {
\tvar win = window,
\tdoc = document,
\tdocElem = doc.documentElement,
\tbody = doc.getElementsByTagName('body')[0],
\tx = win.innerWidth || docElem.clientWidth || body.clientWidth,
\ty = win.innerHeight|| docElem.clientHeight|| body.clientHeight;
\tconsole.log(x + ' × ' + y);
\tnavbar++
\tsidebar++
\t        
\tif (navbar <= 1 && x < 650){
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

//Slideshow
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
  var slideIndex2 = 1;
        showSlides2(slideIndex2);
        function plusSlides2(n) {
          showSlides2(slideIndex2 += n);
        }
        function currentSlide2(n) {
          showSlides2(slideIndex2 = n);
        }
        function showSlides2(n) {
          var i;
          var slides = document.getElementsByClassName(\"mySlides2\");
          var dots = document.getElementsByClassName(\"dot2\");
          if(n > slides.length) {
            slideIndex2 = 1
          }
          if(n < 1) {
            slideIndex2 = slides.length
          }
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
          }
          for(i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
          }
          slides[slideIndex2 - 1].style.display = \"block\";
          dots[slideIndex2 - 1].className += \" active\";
        }

  var slideIndex3 = 1;
        showSlides3(slideIndex3);
        function plusSlides3(n) {
          showSlides3(slideIndex3 += n);
        }
        function currentSlide3(n) {
          showSlides3(slideIndex3 = n);
        }
        function showSlides3(n) {
          var i;
          var slides = document.getElementsByClassName(\"mySlides3\");
          var dots = document.getElementsByClassName(\"dot3\");
          if(n > slides.length) {
            slideIndex3 = 1
          }
          if(n < 1) {
            slideIndex3 = slides.length
          }
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
          }
          for(i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
          }
          slides[slideIndex3 - 1].style.display = \"block\";
          dots[slideIndex3 - 1].className += \" active\";
        }

  var slideIndex4 = 1;
        showSlides4(slideIndex4);
        function plusSlides4(n) {
          showSlides4(slideIndex4 += n);
        }
        function currentSlide4(n) {
          showSlides4(slideIndex4 = n);
        }
        function showSlides4(n) {
          var i;
          var slides = document.getElementsByClassName(\"mySlides4\");
          var dots = document.getElementsByClassName(\"dot4\");
          if(n > slides.length) {
            slideIndex4 = 1
          }
          if(n < 1) {
            slideIndex4 = slides.length
          }
          for(i = 0; i < slides.length; i++) {
            slides[i].style.display = \"none\";
          }
          for(i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(\" active\", \"\");
          }
          slides[slideIndex4 - 1].style.display = \"block\";
          dots[slideIndex4 - 1].className += \" active\";
        }
</script>
</body></html>
", "home.html.twig", "/var/www/html/bergfried/views/home.html.twig");
    }
}
