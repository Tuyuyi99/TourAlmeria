window.onscroll = function() {scrollNav()};

function scrollNav(){
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

/*function scrollMainReload(){
  var pxScroll = document.getElementById("titleContainerHeader").offsetTop;
  if (document.body.scrollTop > pxScroll || document.documentElement.scrollTop > pxScroll) {
    
  }
}*/

function getMainPageAjax(skips, takes){
  $.ajax({url: `page/${skips}/${takes}`,
  success: function(resultPage){
      console.log(resultPage);
      $.each(resultPage, function(i, result){
        $("#establishmentListRow").append(`
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex justify-content-center" style="margin-bottom: 5rem;">
        <div data-aos="fade-up" class="card cardMain" style="width: 26rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal" onclick="establishmentShowContentModal(${result.id})">
          <div class="card-body">
            <h3 class="card-title text-center">${result.name}</h3>
            <p class="card-text cardestablishmentDescription">${result.description}</p>
            <button type="button" class="btn btn-primary d-flex justify-content-center align-items-center w-100" style="border-radius:20px; height:2.6rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal">
              Abrir
            </button>
          </div>
        </div>
      </div>
        `);
      });
      AOS.init(); // como son elementos creados hay que volver a ejecutar las animaciones para que se le añadan
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
            $("#establishmentModalCommentsId").val(id);
            $("#establishmentModalDialog").removeClass("d-none");
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
  var name = $("#insertReviewName").val();
  var rating = $("#insertReviewRating").val();
  var commentary = $("#insertReviewCommentary").val();
  var id = $("#establishmentModalCommentsId").val();
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
    $("#insertReviewRating").val("1");
    $("#insertReviewCommentary").val("");
    showAjaxReview(id);
  }
});

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
        console.log(result);
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
  var text = document.getElementsByClassName("cardestablishmentDescription");
  for (i = 0; i < text.length; i++) {
    var description = text[i].textContent;
    document.getElementsByClassName("cardestablishmentDescription")[i].textContent = description.substr(0, 150) + "...";
  }
}
window.addEventListener('load', function() {
  limitText();
});

/* stars emojis */
function star(rating){
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