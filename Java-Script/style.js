function openNav() {
    $(menutext).addClass("animation-menu-text-in").css("transform", "translateX(-300px)");
    $( ".sidenav" ).animate({
        width: "270px",
    },450);
}
let menutext = ".menutext-phone";
function closeNav() {
    $( ".sidenav" ).animate({
        width: "0",
    },450);
    $(menutext).removeClass("animation-menu-text-in").css("transform", "translateX(0)");
}

function myFunction() {
    document.getElementById("video").scrollIntoView({behavior: "smooth"});
}

function Bilder() {
    document.getElementById("referansebidler").scrollIntoView({behavior: "smooth"});
}

function produkter() {
    document.getElementById("product-con").scrollIntoView({behavior: "smooth"});
}

function grafisk_design() {
    document.getElementById("graphic-con").scrollIntoView({behavior: "smooth"});
}