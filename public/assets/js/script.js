window.onscroll = function() {scroll()};

function scroll(){
    var pxScroll = document.getElementById("titleContainerHeader").offsetTop;
    if (document.body.scrollTop > pxScroll || document.documentElement.scrollTop > pxScroll) {
        document.getElementById("menuNav").style.backgroundColor = "white";
        document.getElementById("menuNav").style.height = "62px";
        document.getElementById("menuNav").style.borderBottom = "1px solid rgba(240, 240, 240, .8)";
        document.getElementById("menuNav").style.boxShadow = "0 4px 18px 0 rgba(0,0,0,.12), 0 7px 10px -5px rgba(0,0,0,.15)";
        document.getElementById("navTitulo").classList.add("text-dark");
        var x = document.getElementsByClassName("nav-link");
        var i;
     for (i = 0; i < x.length; i++) {
       x[i].style.color = "#343a40";
       }
      } else {
        document.getElementById("menuNav").style.backgroundColor = "transparent";
        document.getElementById("menuNav").style.height = "70px";
        document.getElementById("menuNav").style.borderBottom = "none";
        document.getElementById("menuNav").style.boxShadow = "none";
        document.getElementById("navTitulo").classList.remove("text-dark");
        var x = document.getElementsByClassName("nav-link");
         var i;
      for (i = 0; i < x.length; i++) {
        x[i].style.color = "white";
        }
      }
}