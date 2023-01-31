"use strict";

const xhr = new XMLHttpRequest();
const form = document.querySelector("form");
document.getElementById('class').addEventListener('change', sendAJAXRequest);
form.addEventListener("submit", sendAJAXRequest);

function sendAJAXRequest(event) {
    event.preventDefault();
    xhr.open("POST",  "../../bergfried/public/getRoom", true);
    xhr.responseType = "json";
    xhr.setRequestHeader("Accept", "application/json");
    xhr.addEventListener("load", handleResponse);
    xhr.send( new FormData(form));
}

function handleResponse(event) {
    //document.getElementById('class').textContent = xhr.response.class;
    document.getElementById('price').value = xhr.response.price;
    document.getElementById('short_description').value = xhr.response.short;
    document.getElementById('long_description').value = xhr.response.long;
    document.getElementById('room_id').value = xhr.response.room_id;
}





