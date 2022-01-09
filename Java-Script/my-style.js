$("#menu-preset").load("/presets/menu.html");
$("#end-preset").load("/presets/end.html");

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (currentScrollPos > 100) {
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("menu-scroll").style.transitionDelay = "100ms";
            document.getElementById("menu-scroll").style.top = "0px";
        } else {
            document.getElementById("menu-scroll").style.top = "-100px";
        }
    } else {
        if (prevScrollpos > currentScrollPos) {
            document.getElementById("menu-scroll").style.top = "0px";
        }
    }
    prevScrollpos = currentScrollPos;
    if (currentScrollPos > 500) {
        document.getElementById("Multicore-txt").style.display = "none";
    } else {
        document.getElementById("Multicore-txt").style.display = "inline";
    }
};