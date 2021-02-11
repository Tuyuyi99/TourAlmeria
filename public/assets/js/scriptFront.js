window.onscroll = function() {scroll()};

function scroll(){
    var pxScroll = document.getElementById("titleContainerHeader").offsetTop;

    if (document.body.scrollTop > pxScroll || document.documentElement.scrollTop > pxScroll) {
        document.getElementById("header").style.position = "fixed";
        document.getElementById("header").style.display = "none";
        document.getElementById("header").classList.remove("animate__bounce");
        document.getElementById("header").classList.add("animate__slideInDown");
        document.getElementById("header").style.display = "block";
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
        document.getElementById("header").style.display = "block";
        document.getElementById("header").classList.add("animate__bounce");
        document.getElementById("header").classList.remove("animate__slideInDown");
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

function establishmentShowContentModal(id){

  $(document).ready(function(){
      $.ajax({url: "admin/establishment/showAjax/" + id,
      beforeSend: function () {
        $("#establishmentModalTitle").html("<h4>Procesando, espere por favor...</h4>");
        $("#establishmentModalDescription").html("");
      },
       success: function(result){
        var name = result.name;
        var description = result.description;
        var address = result.address;
        var google_maps = result.google_maps;
        $("#establishmentModalTitle").html(name);
        $("#establishmentModalDescription").append(`
        <h5>Descripcion: ${description}</h5>
        <h5>Dirección: ${address}</h5>
        ${google_maps}
        `);
        }
      });
      
      $.ajax({url: "admin/establishment/showAjaxPhotography/" + id, success: function(resultImg){
        $.each(resultImg, function(i, result){
          $("#establishmentModalDescription").append(`
          <img src="assets/img/establishments/${result.image}">
          `);
        });



      }});
  });
}