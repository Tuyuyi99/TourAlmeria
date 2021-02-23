@extends("layouts/front")
@section("title", "TourAlmeria")
@section("content")

  <section class="container-header animate__animated animate__rotateInDownLeft">
    <span id="titleContainerHeader">
        <h1 class="animate__animated animate__bounceInDown animate__delay-2s text-center">Tour Almería</h1>
    </span>

    <div class="w-100 position-absolute" style="height: 240px; overflow: hidden; bottom: 0; color: white;" id="waveHeader">
      <div style="height: 100%; overflow: hidden;" id="waveHeaderPC">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
          <path d="M-4.22,-3.45 C253.67,166.28 342.27,-66.61 523.98,34.03 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
      </div>

      <div style="height: 100%; overflow: hidden;" id="waveHeaderMobile">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
          <path d="M-8.17,31.08 C264.95,132.72 346.78,-1.47 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
      </div>
    </div>
  </section>

  <h1 class="text-center mb-5">General</h1>

  <div class="row d-flex align-items-center m-auto" id="establishmentListRow">
      @foreach ($establishmentList as $establishment)
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex justify-content-center" style="margin-bottom: 5rem;">
          <div data-aos="fade-up" class="card cardMain" style="width: 26rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal" onclick="establishmentShowContentModal({{ $establishment->id }})">
            @if(isset($establishment->photography->first()->image))
            <img src="{{ asset('assets/img/establishments/' . $establishment->name . '/' . $establishment->photography->first()->image) }}" class="card-img-top" style="height: 270px;" alt="">
            @endif
            <div class="card-body">
              <h3 class="card-title text-center">{{ $establishment->name }}</h3>
              <p class="card-text cardEstablishmentDescription">{{ $establishment->description }}</p>
              <button type="button" class="btn btn-primary d-flex justify-content-center align-items-center w-100" style="border-radius:20px; height:2.6rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal">
                Abrir
              </button>
            </div>
          </div>
        </div>
      @endforeach
  </div>

  <div class="modal fade p-0" id="establishmentModal" tabindex="-1" aria-hidden="true">

    <div class="lds-facebook centerVerticalHorizontal"><div></div><div></div><div></div></div>
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl modal-fullscreen-md-down" id="establishmentModalDialog">
      <div class="modal-content animate__animated animate__slideInUp">

        <div class="modal-header">
          <h2 class="modal-title" id="establishmentModalTitle"></h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div id="establishmentModalDescription">
          </div>

          <div id="carouselMainEstablishment" class="carousel slide w-100" data-bs-ride="carousel">
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

          <div class="container">
            <h3 class="my-5">Comentarios:</h3>

            <div class="row">
              <div class="col-12 d-flex align-items-center mb-4">
                <div class="row w-100">

                <div class="col-12 col-xl-4 d-flex align-items-center order-xl-2" id="colBoxEmojiRating">
                    <div class="boxEmojiRating d-flex align-items-center justify-content-center" align="center">
                      <div id="emoji" align="center">
                        <img src="{{ url('assets/img/emojis/star0.svg')  }}">
                      </div>
                      <div class="row">
                        <div class="col-12" style="z-index: 2;">
                          <i class="fa fa-star mx-2" id = "star1" style="font-size:2rem;" onclick="star(1)"></i>
                          <i class="fa fa-star mx-2" id = "star2" style="font-size:2rem;" onclick="star(2)"></i>
                          <i class="fa fa-star mx-2" id = "star3" style="font-size:2rem;" onclick="star(3)"></i>
                          <i class="fa fa-star mx-2" id = "star4" style="font-size:2rem;" onclick="star(4)"></i>
                          <i class="fa fa-star mx-2" id = "star5" style="font-size:2rem;" onclick="star(5)"></i>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-xl-8 d-flex align-items-center order-xl-1">
                    <span class="input-group-text">Nombre</span>
                    <input type="text" class="form-control" name="name" id="insertReviewName">
                  </div>

                </div>
              </div>

              <div class="col-12 d-flex align-items-center mb-4">
                <span class="input-group-text h-100">Comentario</span>
                <textarea class="form-control" name="commentary" id="insertReviewCommentary" rows="3"></textarea>
              </div>
              <div class="col-12 d-flex justify-content-center">
                <input type="hidden" name="id_establishment" id="establishmentModalCommentsId">
                <input type="hidden" name="rating" id="insertReviewRating" value="1">
                <input type="submit" class="btn btn-outline-primary m-2" onclick="insertAjaxReview()">
              </div>
            </div>
          </div>

          <div id="establishmentModalReview">
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection