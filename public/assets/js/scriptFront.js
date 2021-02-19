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
    $("#establishmentModalDialog").addClass("d-none");
      var name;
      var description;
      var address;
      var google_maps;
      $.ajax({url: "admin/establishment/showAjax/" + id,
      beforeSend: function () {
        $("#establishmentModalTitle").html("<h4>Procesando, espere por favor...</h4>");
        $("#establishmentModalDescription").html("");
      },
       success: function(result){
        name = result.name;
        description = result.description;
        address = result.address;
        google_maps = result.google_maps;
        $("#establishmentModalTitle").html(name);
        $("#establishmentModalDescription").append(`
        <div class="row d-flex justify-content-between px-4 mb-5 mt-2">
          <div class="col">
            <h5 class="d-inline-block mb-3">Dirección: </h5><span>${address}</span>
            <br>
            <h5 class="d-inline-block mb-3">Descripcion: </h5><span>${description}</span>
          </div>
          <div class="col">
            ${google_maps}
          </div>
        </div>
        `);
        },
        complete: function(){

          $.ajax({url: "admin/establishment/showAjaxPhotography/" + id,
      
          beforeSend: function() {
            $("#carouselMainEstablishmentGalery").html("<h4>Procesando, espere por favor...</h4>");
            $("#carouselMainEstablishmentIndicators").html("");
          },
          success: function(resultImg){
            $("#carouselMainEstablishmentGalery").html("");
            $.each(resultImg, function(i, result){
              if(i == 0){
                $("#carouselMainEstablishmentIndicators").append(`
                <li data-bs-target="#carouselMainEstablishment" data-bs-slide-to="${i}" class="active"></li>`);
              }
              else{
                $("#carouselMainEstablishmentIndicators").append(`
                <li data-bs-target="#carouselMainEstablishment" data-bs-slide-to="${i}"></li>
                `);
              }
                if(i == 0){
                  $("#carouselMainEstablishmentGalery").append(`
                  <div class="carousel-item active" data-bs-interval="10000">
                  <img src="assets/img/establishments/${name + "/" + result.image}" class="d-block w-auto" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px; height: 500px;" alt="">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                `);
                }
                else{
                $("#carouselMainEstablishmentGalery").append(`
                  <div class="carousel-item" data-bs-interval="10000">
                  <img src="assets/img/establishments/${name + "/" + result.image}" class="d-block w-auto" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px; height: 500px;" alt="">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                `);
                }
            });
    
          },
          complete: function(){
            $("#establishmentModalDialog").removeClass("d-none");
          }
        
        });

        }
      });
      
  });
}

function showResult(name){
  var names = [];

  if(name.length >= 2){
    $("#inputFindIconSearch").addClass("d-none");
    $("#inputFindIconClose").removeClass("d-none");

    $.ajax({url: "admin/establishment/showEstablishmentFind/" + name, 
      success: function(resultEstablishment){
        $.each(resultEstablishment, function(i, result){
        names[i] = result.name;
        console.log(result);
        });
      },
      complete: function(){
        $("#establishmentFind").html("");
        $.each(names, function(i, result){
          $("#establishmentFind").append(`<h3>${result}</h3>`);
        });
      }
    });
  }
  else{
    $("#inputFindIconSearch").removeClass("d-none");
    $("#inputFindIconClose").addClass("d-none");
    $("#establishmentFind").html("");
  }

}

function inputFindRemoveText(){
  $("#establishmentFind").html("");
  $("#inputFindHeader").val("");
  $("#inputFindIconSearch").removeClass("d-none");
  $("#inputFindIconClose").addClass("d-none");
}

function limitText() {
  var text = document.getElementsByClassName("cardestablishmentDescription");
  for (i = 0; i < text.length; i++) {
    var description = text[i].textContent;
    document.getElementsByClassName("cardestablishmentDescription")[i].textContent = description.substr(0, 150) + "...";
  }
}
window.addEventListener('load', function() {
  limitText();
});