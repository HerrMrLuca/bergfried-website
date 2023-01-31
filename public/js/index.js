function getData() {
  var a = document.getElementById("anreise").value;
  var b = document.getElementById("abreise").value;
  var c = document.getElementById("zimmer2").value;
  var d = document.getElementById("room2").value;
  var e = document.getElementById("adult2").value;
  var f = document.getElementById("kid2").value;

  setCookie("arrival", a, 1);
  setCookie("departure", b, 1);
  setCookie("room", c, 1);
  setCookie("roomclass", d, 1);
  setCookie("adult", e, 1);
  setCookie("kid", f, 1);

  var arrival=getCookie("arrival");
  var departure=getCookie("departure");
  var room=getCookie("room");
  var roomclass=getCookie("roomclass");
  var adult=getCookie("adult");
  var kid=getCookie("kid");

  console.log(a, b, c, d, e, f)
  
}
function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

function checkCookie() {
  var arrival=getCookie("arrival");
  var departure=getCookie("departure");
  var room=getCookie("room");
  var roomclass=getCookie("roomclass");
  var adult=getCookie("adult");
  var kid=getCookie("kid");
}


