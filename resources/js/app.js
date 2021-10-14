require("./bootstrap");

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();
// scrooll uo down icon
function scrollWin(x, y) {
    window.scrollBy(x, y);
}