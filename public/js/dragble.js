/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************!*\
  !*** ./resources/js/dragble.js ***!
  \*********************************/
// right click desible
// document.addEventListener("contextmenu", (event) => event.preventDefault());
document.onkeydown = function (e) {// disable F12 key
  // if(e.keyCode == 123)
  //     return false;
  // }
}; //Make the DIV element draggagle:
// dragElement(document.getElementById("mydiv"));
// function dragElement(elmnt) {
//     var pos1 = 0,
//         pos2 = 0,
//         pos3 = 0,
//         pos4 = 0;
//     if (document.getElementById(elmnt.id + "header")) {
//         /* if present, the header is where you move the DIV from:*/
//         document.getElementById(elmnt.id + "header").onmousedown =
//             dragMouseDown;
//     } else {
//         /* otherwise, move the DIV from anywhere inside the DIV:*/
//         elmnt.onmousedown = dragMouseDown;
//     }
//     function dragMouseDown(e) {
//         e = e || window.event;
//         e.preventDefault();
//         // get the mouse cursor position at startup:
//         pos3 = e.clientX;
//         pos4 = e.clientY;
//         document.onmouseup = closeDragElement;
//         // call a function whenever the cursor moves:
//         document.onmousemove = elementDrag;
//     }
//     function elementDrag(e) {
//         e = e || window.event;
//         e.preventDefault();
//         // calculate the new cursor position:
//         pos1 = pos3 - e.clientX;
//         pos2 = pos4 - e.clientY;
//         pos3 = e.clientX;
//         pos4 = e.clientY;
//         // set the element's new position:
//         elmnt.style.top = elmnt.offsetTop - pos2 + "px";
//         elmnt.style.left = elmnt.offsetLeft - pos1 + "px";
//     }
//     function closeDragElement() {
//         /* stop moving when mouse button is released:*/
//         document.onmouseup = null;
//         document.onmousemove = null;
//     }
// }
// document
//     .querySelectorAll("img")
//     .forEach((e) => e.setAttribute("draggable", false));


document; // #event on input switch content zid salla

document.querySelector("#toggleB").addEventListener("click", switch_zid_salla, null);

function switch_zid_salla() {
  // Get the checkbox
  var checkBox = document.querySelector("#toggleB"); // Get the text color

  var salla_txt = document.querySelector(".salla-txt");
  var zid_txt = document.querySelector(".zid_txt");
  var zid_price = document.querySelectorAll(".price_zid");
  var salla_price = document.querySelectorAll(".price_salla"); // If the checkbox is checked, zid  txt-color-purple

  if (checkBox.checked == true) {
    // zid switch text color
    zid_txt.classList.add("txt-color-purple");
    salla_txt.classList.remove("text-green-500"); // salla hide

    salla_price[0].classList.add("hidden");
    salla_price[1].classList.add("hidden"); // zid show

    zid_price[0].classList.remove("hidden");
    zid_price[1].classList.remove("hidden");
  } else {
    // salla switch text color defult
    salla_txt.classList.add("text-green-500");
    zid_txt.classList.remove("txt-color-purple"); // salla show

    salla_price[0].classList.remove("hidden");
    salla_price[1].classList.remove("hidden"); // zid hide

    zid_price[0].classList.add("hidden");
    zid_price[1].classList.add("hidden");
  }
} // #scroll rating h


var flavoursContainer = document.getElementById("flavoursContainer");
var flavoursScrollWidth = flavoursContainer.scrollWidth;
window.addEventListener("load", function () {
  self.setInterval(function () {
    if (flavoursContainer.scrollLeft !== flavoursScrollWidth) {
      flavoursContainer.scrollTo(flavoursContainer.scrollLeft + 1, 0);
    }
  }, 15);
});
/******/ })()
;