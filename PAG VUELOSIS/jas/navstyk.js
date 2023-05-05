window.onscroll = function() {GODAWN()};

var navbar = document.getElementById("NAVS");

var sticky = navbar.offsetTop;

function GODAWN() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add("nav1fix")
    } else {
      navbar.classList.remove("nav1fix");
    }
  }