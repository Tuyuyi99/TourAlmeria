var idCategory = "all";
window.onscroll = function() {scrollNav(), scrollMainPageReload()};

function scrollNav(){
    if (document.body.scrollTop > 1 || document.documentElement.scrollTop > 1) {
        document.getElementById("menuNav").classList.remove("navbar-dark");
        document.getElementById("menuNav").classList.add("navbar-light");
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
        document.getElementById("menuNav").classList.add("navbar-dark");
        document.getElementById("menuNav").classList.remove("navbar-light");
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

var validarTimeScroll = true;
function scrollMainPageReload(){
  var alturaTotal = $(document).height(); // scroll + viewport = altura del documento es que ha llegado alfinal del documento.
  var alturaScrollTop = $(window).scrollTop(); // scroll realizado contando desde la linea de arriba (los elementos que desaparecen arriba)
  var alturaViewPort = $(window).height(); // posicion en px de donde se encuentra el viewport (lo que se esta visualizando)
  if ((alturaScrollTop + alturaViewPort) == alturaTotal && validarTimeScroll) {
    validarTimeScroll = false;
    getMainPageAjax();
  }
}

var compCategoryArray = [
  {
    categoria: "bares-y-restaurantes",
    id: "1"
  },
  {
    categoria: "hoteles",
    id: "2"
  },
  {
    categoria: "museos",
    id: "3"
  },
  {
    categoria: "turismo",
    id: "4"
  }
];

$.each(compCategoryArray, function(i, result){
  var compCategory = window.location.pathname.indexOf(result.categoria);
  if(compCategory != -1){
    idCategory = result.id;
  }
});
window.addEventListener('load', limitText());


var skips = 10; // saltos empieza en 10 se va añadiendo +10 a saltos cada vez
function getMainPageAjax(){
  var takes = 10;
  $.ajax({url: `page/${skips}/${takes}/${idCategory}`,
  beforeSend: function(){
    $("#establishmentListRow").append(`
    <div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex justify-content-center" id="establishmentListLoaderCol" style="margin-bottom: 5rem;">
      <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>`);
  },
  success: function(resultPage){
      $.each(resultPage, function(i, result){
        $("#establishmentListRow").append(`
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex justify-content-center" style="margin-bottom: 5rem;">
        <div data-aos="fade-up" class="card cardMain" style="width: 26rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal" onclick="establishmentShowContentModal(${result.id})">
        <img src="assets/img/establishments/${result.name + "/" + result.photography[0].image}" class="card-img-top" style="height: 270px;" alt="">  
        <div class="card-body">
            <h3 class="card-title text-center">${result.name}</h3>
            <img src="assets/img/address.png" style="height: 30px;">
            <div class="d-inline-block mb-2 cardEstablishmentAddress">${result.address}</div>
            <div class="row mb-3">
              <div class="col-1">
                <img src="assets/img/description.png" style="height: 1.5rem;">
              </div>
              <div class="col-11">
                <div class="card-text cardEstablishmentDescription">${result.description}</div>
              </div>
            </div>
            <button type="button" class="btn btn-primary d-flex justify-content-center align-items-center w-100" style="border-radius:20px; height:2.6rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal">
              Abrir
            </button>
          </div>
        </div>
      </div>
        `);
      });
  },
  complete: function(){
    validarTimeScroll = true;
    $("#establishmentListLoaderCol").remove();
    AOS.init(); // como son elementos creados hay que volver a ejecutar las animaciones para que se le añadan
    limitText(); // hay que volver a ejecutar el limitador de descripciones ya que hay nuevos elementos a los que limitar texto
    skips += 10;
    console.log(`skips: ${skips}`);
  }
  });
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
        $("#insertReviewName").val("");
        $("#insertReviewRating").val("0");
        $("#insertReviewCommentary").val("");
        document.getElementById("infoReview").classList.add("d-none");
        star(0);

        $("#establishmentModalTitle").html("<h4>Procesando, espere por favor...</h4>");
        $("#establishmentModalDescription").html("");
      },
       success: function(result){
        /* bootstrap br = <div class="w-100"> */
        name = result.name;
        description = result.description;
        address = result.address;
        google_maps = result.google_maps;
        $("#establishmentModalTitle").html(name);
        $("#establishmentModalDescription").append(`
        <div class="row d-flex justify-content-between px-4 mb-5 mt-2">
          <div class="col-lg-5 order-lg-2 infoModalCol">
            <img src="assets/img/address.png" class="mb-3" style="height: 30px;">
            <h5 class="d-inline-block">Dirección:</h5>
            <span> ${address}</span>
            <div class="w-100"></div>
            <img src="assets/img/description.png" style="height: 1.5rem;">
            <h5 class="d-inline-block">Descripción:</h5>
            <span> ${description}</span>
            
            ${google_maps}

          </div>
          <div class="col-lg-7 order-lg-1 d-flex justify-content-center">

            <div id="carouselMainEstablishment" class="carousel slide" data-bs-ride="carousel"
            style="background: #00000073; border-radius: 3px;">
              <ol class="carousel-indicators" id="carouselMainEstablishmentIndicators"> 
              </ol>
              <div class="carousel-inner" id="carouselMainEstablishmentGalery">
              </div>

              <a class="carousel-control-prev" href="#carouselMainEstablishment" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselMainEstablishment" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          
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
                  <img src="assets/img/establishments/${name + "/" + result.image}" class="d-block w-auto" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px;" alt="">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                `);
                }
                else{
                $("#carouselMainEstablishmentGalery").append(`
                  <div class="carousel-item" data-bs-interval="10000">
                  <img src="assets/img/establishments/${name + "/" + result.image}" class="d-block w-auto" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px;" alt="">
                  <div class="carousel-caption d-none d-md-block">
                  </div>
                </div>
                `);
                }
            });
    
          },
          complete: function(){
            var totalRating = 0;
            var count = 0;
            var mediaRating = 0;
            $.ajax({url: `admin/review/showAjax/${id}`,
              success: function(resultReview) {
                $.each(resultReview[0].review, function(i, result){
                  totalRating += result.rating;
                  count++;
                });
              },
              complete: function(){
                mediaRating = Math.round(totalRating / count);
                if(isNaN(mediaRating)){
                  mediaRating = 0;
                }
                $("#establishmentModalTitle").append(`
                  <img src='${translateNumEmoji(mediaRating)}' class='rotate360' style='cursor: default; width: 2rem;'></img>
                `);

                $("#establishmentModalCommentsId").val(id);
                $("#establishmentModalDialog").removeClass("d-none");
              }
            });

          }
        
        });

        }
      });
      
      showAjaxReview(id);
  });
}

function showAjaxReview(id){
  $.ajax({url: "admin/establishment/showAjaxReview/" + id,
success: function(resultReview){
  $("#establishmentModalReview").html("");
  $.each(resultReview, function(i, result){
    $("#establishmentModalReview").append(`
      <div class="col-12">
        <container-mg class="my-5" style='border: solid 1px #0000002e;'>
          <div class="row w-100">
            <div class="col-12 d-flex justify-content-between">
              <h4>${result.name}</h4>
              <img src='${translateNumEmoji(result.rating)}' class='rotate360' style='cursor: default; width: 2rem;'>
            </div>
            <div class="col-12">
              <h5 style="font-weight:400;">${result.commentary}</h5>
            </div>
          </div>
        </container-mg>
      </div>
    `);
  });
}
});
}

function insertAjaxReview(){
  document.getElementById("infoReview").classList.add("d-none");
  var name = $("#insertReviewName").val();
  var rating = $("#insertReviewRating").val();
  var commentary = $("#insertReviewCommentary").val();
  var id = $("#establishmentModalCommentsId").val();

  if(name != "" && rating != "0" && commentary != ""){
    $.ajax({url: `admin/review/insertAjax/${id}/${name}/${rating}/${commentary}`,
    beforeSend: function(){
      $("#establishmentModalReview").prepend(`
      <div class="col-12 d-flex justify-content-center mt-5">
        <div class='lds-ring'><div></div><div></div><div></div><div></div></div>
      </div>
      `);
    },
    complete: function(){
      $("#insertReviewName").val("");
      $("#insertReviewRating").val("0");
      $("#insertReviewCommentary").val("");
      star(0);
      showAjaxReview(id);
    }
  });

  }
  else {
    document.getElementById("infoReview").classList.remove("d-none");
  }
}

function inputFind(name){
  var names = [];

  if(name.length >= 2){
    $("#inputFindResult").removeClass("d-none");
    $("#inputFindIconSearch").addClass("d-none");
    $("#inputFindIconClose").removeClass("d-none");

    $.ajax({url: "admin/establishment/showEstablishmentFind/" + name,
      beforeSend: function(){
        $("#inputFindResult").html("<div class='lds-ring d-flex justify-content-center'><div></div><div></div><div></div><div></div></div>");
      },
      success: function(resultEstablishment){
        $.each(resultEstablishment, function(i, result){
        names[i] = {
          id: result.id,
          name: result.name
        }
        });
      },
      complete: function(){
        if(names.length == 0){
          $("#inputFindResult").html("<h5 class='m-3'>No se encontraron resultados...</h5>");
        }
        else {
          $("#inputFindResult").html("");
          $.each(names, function(i, result){
            $("#inputFindResult").append(`
            <div class="col-12 d-flex align-items-center justify-content-center my-1" style="padding: 2rem 0rem 2rem 0rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal" onclick="establishmentShowContentModal(${result.id})">
              <h5>${result.name}</h5>
            </div>
            `);
          });
        }
      }
    });
  }
  else{
    $("#inputFindResult").addClass("d-none");
    $("#inputFindIconSearch").removeClass("d-none");
    $("#inputFindIconClose").addClass("d-none");
    $("#inputFindResult").html("");

  }

}

function inputFindRemoveText(){
  $("#inputFindResult").html("");
  $("#inputFindResult").addClass("d-none");
  $("#inputFindHeader").val("");
  $("#inputFindIconSearch").removeClass("d-none");
  $("#inputFindIconClose").addClass("d-none");
}

function limitText() {
  // Descripcion de card
  var text = document.getElementsByClassName("cardEstablishmentDescription");
  for (i = 0; i < text.length; i++) {
    var description = text[i].textContent;
    var endPointPosition = description.length - 4;
    var puntosSuspensivos = description.indexOf("...");

    if(endPointPosition != puntosSuspensivos &&  description.length >= 43){
      console.log(endPointPosition + "/" + puntosSuspensivos);
      document.getElementsByClassName("cardEstablishmentDescription")[i].textContent = description.substr(0, 40) + "...";
    }
  }

  // titulo de card
  var title = document.getElementsByClassName("card-title");
  for (i = 0; i < text.length; i++) {
    var titleCard = title[i].textContent;
    var endPointPositionTitle = titleCard.length - 3;
    var puntosSuspensivosTitle = titleCard.indexOf("...");
    if(endPointPositionTitle != puntosSuspensivosTitle && titleCard.length >= 26){
      console.log(endPointPositionTitle + "/" + puntosSuspensivosTitle);
      document.getElementsByClassName("card-title")[i].textContent = titleCard.substr(0, 23) + "...";
    }
  }

    // direccion de la card

  var address = document.getElementsByClassName("cardEstablishmentAddress");
  for (i = 0; i < text.length; i++) {
    var addressCard = address[i].textContent;
    var endPointPositionAddress = addressCard.length - 4;
    var puntosSuspensivosAddress = addressCard.indexOf("...");

    if(endPointPositionAddress != puntosSuspensivosAddress &&  addressCard.length >= 46){
      console.log(endPointPositionAddress + "/" + puntosSuspensivosAddress);
      document.getElementsByClassName("cardEstablishmentAddress")[i].textContent = addressCard.substr(0, 43) + "...";
    }
  }

  

}

/* stars emojis */
function star(rating){
  if(rating==0){
    document.getElementById("emoji").innerHTML='<img src="assets/img/emojis/star0.svg">';
    $("#insertReviewRating").val("0");
  }
  if(rating==1){
      document.getElementById("emoji").innerHTML='<img src="assets/img/emojis/star1.svg">';
      $("#insertReviewRating").val("1");
  }
  else if(rating==2){
      document.getElementById("emoji").innerHTML='<img src="assets/img/emojis/star2.svg">';
      $("#insertReviewRating").val("2");
  }
  else if(rating==3){
      document.getElementById("emoji").innerHTML='<img src="assets/img/emojis/star3.svg">';
      $("#insertReviewRating").val("3");
  }
  else if(rating==4){
      document.getElementById("emoji").innerHTML='<img src="assets/img/emojis/star4.svg">';
      $("#insertReviewRating").val("4");
  }
  else if(rating==5){
      document.getElementById("emoji").innerHTML='<img src="assets/img/emojis/star5.svg">';
      $("#insertReviewRating").val("5");
  }
  for(var i=1; i<=rating; i++){
      var id="star"+i;
      document.getElementById(id).style.color="yellow";
      document.getElementById(id).style.textShadow="0 0 30px yellow";
  }
  for(var j=rating+1 ;j<=5; j++){
      var id="star"+j;
      document.getElementById(id).style.color="#555555";
      document.getElementById(id).style.textShadow="0 2px 2px rgba(255,255,255,0.13)";
  } 
}

function translateNumEmoji(num){
  if(num == 0){
    return 'assets/img/emojis/star0.svg';
  }
  if(num == 1){
    return 'assets/img/emojis/star1.svg';
  }
  else if(num == 2){
    return 'assets/img/emojis/star2.svg';
  }
  else if(num == 3){
    return 'assets/img/emojis/star3.svg';
  }
  else if(num == 4){
    return 'assets/img/emojis/star4.svg';
  }
  else if(num == 5){
    return 'assets/img/emojis/star5.svg';
  }
}

var controlDesplegableMobile = false;
function abrirCerrarDesplegableMobile() {
  if(controlDesplegableMobile == false){
    controlDesplegableMobile = true;
    document.getElementById("menuDesplegableMobile").style.left = "0%";
    document.getElementById("desenfoque").style.display = "block";
    document.getElementsByTagName("body")[0].style.overflow = "hidden";
  }
  else{
    controlDesplegableMobile = false;
    document.getElementById("menuDesplegableMobile").style.left = "-65%";
    document.getElementById("desenfoque").style.display = "none";
    document.getElementsByTagName("body")[0].style.overflow = "auto";
  }
}