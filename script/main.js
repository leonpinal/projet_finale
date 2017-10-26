"use strict";


console.log('allo');

var hamburguer = document.getElementById("main-nav");

/*
function show_menu() {
    console.log("allo");
    var menu = document.getElementById("responsive_menu");
    if (menu.classList.contains("disable")) {
        menu.classList.remove("disable");
        menu.classList.add("expand");
    } else {
        menu.classList.remove("expand");
        menu.classList.add("disable");
    }

}

hamburguer.addEventListener("click", show_menu);
*/


$( '#main-nav' ).click(function(){
    console.log("click");
    $('#responsive_menu').toggleClass('expand')
});
