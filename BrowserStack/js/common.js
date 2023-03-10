window.onscroll = function() {fixHeader()};

var header = document.getElementById("dvCustomHeadSection");
var sticky = header.offsetTop;

function fixHeader() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

