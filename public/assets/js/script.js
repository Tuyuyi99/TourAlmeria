window.onscroll = function() {scroll()};

function scroll(){
    var pxScroll = document.getElementById("titleContainerHeader").offsetTop;

    if (document.body.scrollTop > (pxScroll - 100) || document.documentElement.scrollTop > (pxScroll - 100)) {
      document.getElementById("header").style.display = "none";
      document.getElementById("header").classList.remove("animate__bounce");
      document.getElementById("header").classList.add("animate__slideInDown");

    }
    else{
      document.getElementById("header").style.display = "block";
      document.getElementById("header").classList.add("animate__bounce");
      document.getElementById("header").classList.remove("animate__slideInDown");
    }

    if (document.body.scrollTop > pxScroll || document.documentElement.scrollTop > pxScroll) {
      document.getElementById("header").style.display = "block";
        document.getElementById("header").style.position = "fixed";
        document.getElementById("menuNav").style.backgroundColor = "white";
        document.getElementById("menuNav").style.height = "70px";
        document.getElementById("menuNav").style.borderBottom = "1px solid rgba(240, 240, 240, .8)";
        document.getElementById("menuNav").style.boxShadow = "0 4px 18px 0 rgba(0,0,0,.12), 0 7px 10px -5px rgba(0,0,0,.15)";
        document.getElementById("navTitulo").classList.add("text-dark");
        document.getElementById("inputFindHeader").classList.add("textInputDark");
        document.getElementById("inputFindHeader").style.color = "black";
        var iconFind = document.getElementsByClassName("inputFindIcon");
        for (var iconFindCount = 0; iconFindCount < iconFind.length; iconFindCount++) {
          iconFind[iconFindCount].style.color="#000000b3";
        }
        var navLink = document.getElementsByClassName("nav-link");
        for (var navLinkCount = 0; navLinkCount < navLink.length; navLinkCount++) {
          navLink[navLinkCount].style.color = "#343a40";
        }
      } else {
        document.getElementById("header").style.position = "absolute";
        document.getElementById("menuNav").style.backgroundColor = "transparent";
        document.getElementById("menuNav").style.height = "70px";
        document.getElementById("menuNav").style.borderBottom = "none";
        document.getElementById("menuNav").style.boxShadow = "none";
        document.getElementById("navTitulo").classList.remove("text-dark");
        document.getElementById("inputFindHeader").classList.remove("textInputDark");
        document.getElementById("inputFindHeader").style.color = "white";
        var iconFind = document.getElementsByClassName("inputFindIcon");
        for (var iconFindCount = 0; iconFindCount < iconFind.length; iconFindCount++) {
          iconFind[iconFindCount].style.color="white";
        }
        var navLink = document.getElementsByClassName("nav-link");
        for (var navLinkCount = 0; navLinkCount < navLink.length; navLinkCount++) {
          navLink[navLinkCount].style.color = "white";
       }
      }
}