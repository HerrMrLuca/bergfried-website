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

/* arrival.html.twig */
class __TwigTemplate_e2f32991369d060d24a5254f95906554 extends Template
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
  <title>Wegbeschreibung - Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
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
                <li class=\"language\"><a id=\"EN\" href=\"ENarrival\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZarrival\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav2\" class=\"nav\" href=\"room\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"nav\" href=\"index\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar5\" class=\"sidebar2\" href=\"index\">Startseite</a></li>
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"room\">Zimmer</a></li>
            <li><a id=\"sidebar3\" class=\"sidebar2\" href=\"contact\">Kontakt</a></li>
            <li><a id=\"sidebar4\" class=\"sidebar\" href=\"img\">Bilder</a></li>
            <!--<li><a id=\"sidebar\" class=\"sidebar\" href=\"roomimg.html\">Zimmer-Bilder</a></li>
            <li><a id=\"sidebar\" class=\"sidebar\" href=\"price.html\">Preise</a></li>-->
            <li><a id=\"sidebar1\" class=\"sidebar\" href=\"arrival\">Anfahrt</a></li>
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
    <div class=\"contentimparrival\">
      <br>
      <h6>Anfahrt:</h6>
      <div>
        <div  class=\"click-zoom\">
          <label>
            <input type=\"checkbox\" onclick=\"trainstation()\">
            <img src=\"assets/pic/arrival.jpg\" alt=\"Hallstatt\" class=\"arrival\">
          </label>
          <div class=\"atxt1\">
            <p>Die Ankunft mit dem Zug erfolgt durch ein umsteigen in eine stündlich fahrende Fähre zu den Marktplatz von Hallstatt. Zu Fuß dauert der Weg zur Gastherberge in 10 Minuten.</p>
          </div>
        </div>
        <div class=\"click-zoom\">
          <label>
            <input type=\"checkbox\" onclick=\"busstation()\">
            <img src=\"assets/pic/arrival2.jpg\" alt=\"Hallstatt\" class=\"arrival2\">
          </label>
          <div class=\"atxt2\">
            <p>Biegen Sie nach dem Tunnel die erste Straße rechts hinein! 50 Meter weiter erreichen Sie unseren Parkplatz. Wir garantieren keinen Platz, bei Mangel bitte auf die öffentlichen Parkplätze ausweichen!</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"contentshareA\">
      <div>
        <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
        <a href=\"https://www.google.at/maps/place/Gasthof+Bergfried/@47.556882,13.647025,17z/data=!4m8!3m7!1s0x0:0xe4413e36f1e81b02!5m2!4m1!1i2!8m2!3d47.556673!4d13.646084\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
        <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
        <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
        <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
      </div>
    </div>
    <div>
      <img src=\"assets/pic/arrival.jpg\" style=\"width:100%\" id=\"train\">
      <img src=\"assets/pic/arrival2.jpg\" style=\"width:100%\" id=\"bus\">
      <img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
      <a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
      <div><a id=\"black\" onclick=\"gone()\">Test</a>
      </div>
    </div>
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

function trainstation() {
  setTimeout(function() {document.getElementById(\"train\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"train\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function busstation() {
  setTimeout(function() {document.getElementById(\"bus\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"bus\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function gone() {
  document.getElementById(\"black\").style.opacity = \"0\";
  document.getElementById(\"whatsapp\").style.opacity = \"0\";
  document.getElementById(\"line\").style.opacity = \"0\";
  document.getElementById(\"bus\").style.opacity = \"0\";
  document.getElementById(\"train\").style.opacity = \"0\";
  setTimeout(function() {document.getElementById(\"whatsapp\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"line\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"bus\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"train\").style.display = \"none\";}, 300)
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
</body></html>";
    }

    public function getTemplateName()
    {
        return "arrival.html.twig";
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
  <title>Wegbeschreibung - Pension Bergfried</title>

  <base href=\"style.css\">
  <meta charset=\"utf-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=yes\">
  <link href=\"style.css\" type=\"text/css\" rel=\"stylesheet\" media=\"only screen and (min-width: 651px)\">
  <link rel=\"stylesheet\"
  media=\"only screen and (max-width: 650px)\" href=\"phone.css\" type=\"text/css\">
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
                <li class=\"language\"><a id=\"EN\" href=\"ENarrival\"></a></li>
                <li class=\"language\"><a id=\"CZ\" href=\"CZarrival\"></a></li>
            </ul>
          </li>
          <li style=\"float:right\"><a id=\"nav1\" class=\"nav\" href=\"contact\">Kontakt</a></li>
          <li style=\"float:right\"><a id=\"nav2\" class=\"nav\" href=\"room\">Zimmer</a></li>
          <li style=\"float:right\"><a id=\"nav3\" class=\"nav\" href=\"index\">Startseite</a></li>
        </ul>
        <div>
          <ul id=\"considebar\">
            <li><a id=\"sidebar5\" class=\"sidebar2\" href=\"index\">Startseite</a></li>
            <li><a id=\"sidebar2\" class=\"sidebar2\" href=\"room\">Zimmer</a></li>
            <li><a id=\"sidebar3\" class=\"sidebar2\" href=\"contact\">Kontakt</a></li>
            <li><a id=\"sidebar4\" class=\"sidebar\" href=\"img\">Bilder</a></li>
            <!--<li><a id=\"sidebar\" class=\"sidebar\" href=\"roomimg.html\">Zimmer-Bilder</a></li>
            <li><a id=\"sidebar\" class=\"sidebar\" href=\"price.html\">Preise</a></li>-->
            <li><a id=\"sidebar1\" class=\"sidebar\" href=\"arrival\">Anfahrt</a></li>
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
    <div class=\"contentimparrival\">
      <br>
      <h6>Anfahrt:</h6>
      <div>
        <div  class=\"click-zoom\">
          <label>
            <input type=\"checkbox\" onclick=\"trainstation()\">
            <img src=\"assets/pic/arrival.jpg\" alt=\"Hallstatt\" class=\"arrival\">
          </label>
          <div class=\"atxt1\">
            <p>Die Ankunft mit dem Zug erfolgt durch ein umsteigen in eine stündlich fahrende Fähre zu den Marktplatz von Hallstatt. Zu Fuß dauert der Weg zur Gastherberge in 10 Minuten.</p>
          </div>
        </div>
        <div class=\"click-zoom\">
          <label>
            <input type=\"checkbox\" onclick=\"busstation()\">
            <img src=\"assets/pic/arrival2.jpg\" alt=\"Hallstatt\" class=\"arrival2\">
          </label>
          <div class=\"atxt2\">
            <p>Biegen Sie nach dem Tunnel die erste Straße rechts hinein! 50 Meter weiter erreichen Sie unseren Parkplatz. Wir garantieren keinen Platz, bei Mangel bitte auf die öffentlichen Parkplätze ausweichen!</p>
          </div>
        </div>
      </div>
    </div>
    <div class=\"contentshareA\">
      <div>
        <a href=\"https://www.facebook.com/Gasthof-Bergfried-181028415311956/\"><i class=\"fab fa-facebook\"  class=\"share\"></i></a>
        <a href=\"https://www.google.at/maps/place/Gasthof+Bergfried/@47.556882,13.647025,17z/data=!4m8!3m7!1s0x0:0xe4413e36f1e81b02!5m2!4m1!1i2!8m2!3d47.556673!4d13.646084\"><i class=\"fab fa-google\"  class=\"share\"></i></a>
        <a href=\"https://www.instagram.com/bergfried_pension/\"><i  class=\"fab fa-instagram\"  class=\"share\"></i></a>
        <a onclick=\"whatsapp()\"><i  class=\"fab fa-whatsapp\"  class=\"share\"></i></a>
        <a onclick=\"line()\" ><i class='fab fa-line'  class=\"share\"></i></a>
      </div>
    </div>
    <div>
      <img src=\"assets/pic/arrival.jpg\" style=\"width:100%\" id=\"train\">
      <img src=\"assets/pic/arrival2.jpg\" style=\"width:100%\" id=\"bus\">
      <img src=\"assets/pic/QRW.png\" style=\"width:100%\" alt=\"Whatsapp QR\" id=\"whatsapp\">
      <a href=\"https://line.me/R/ti/p/@101auaff\" id=\"addme\" ><img src=\"assets/pic/QRL.png\" style=\"width:100%\" alt=\"Line QR\" id=\"line\"></a>
      <div><a id=\"black\" onclick=\"gone()\">Test</a>
      </div>
    </div>
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

function trainstation() {
  setTimeout(function() {document.getElementById(\"train\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"train\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function busstation() {
  setTimeout(function() {document.getElementById(\"bus\").style.opacity = \"1\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.opacity = \"0.6\";}, 300)
  document.getElementById(\"bus\").style.display = \"block\";
  document.getElementById(\"black\").style.display = \"block\";
}

function gone() {
  document.getElementById(\"black\").style.opacity = \"0\";
  document.getElementById(\"whatsapp\").style.opacity = \"0\";
  document.getElementById(\"line\").style.opacity = \"0\";
  document.getElementById(\"bus\").style.opacity = \"0\";
  document.getElementById(\"train\").style.opacity = \"0\";
  setTimeout(function() {document.getElementById(\"whatsapp\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"line\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"black\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"bus\").style.display = \"none\";}, 300)
  setTimeout(function() {document.getElementById(\"train\").style.display = \"none\";}, 300)
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
</body></html>", "arrival.html.twig", "/var/www/html/bergfried/views/arrival.html.twig");
    }
}
