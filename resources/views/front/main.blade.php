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

  <div class="row d-flex align-items-center m-auto">
    @if(isset($establishmentList))
      @foreach ($establishmentList as $establishment)
        <div class="col-12 col-md-6 col-lg-4 col-xxl-3 d-flex justify-content-center" style="margin-bottom: 5rem;">
          <div data-aos="fade-up" class="card cardMain" style="width: 26rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal" onclick="establishmentShowContentModal({{ $establishment->id }})">
            @if(isset($establishment->photography->first()->image))
            <img src="{{ asset('assets/img/establishments/' . $establishment->name . '/' . $establishment->photography->first()->image) }}" class="card-img-top" style="height: 270px;" alt="">
            @endif
            <div class="card-body">
              <h3 class="card-title text-center">{{ $establishment->name }}</h3>
              <p class="card-text cardestablishmentDescription">{{ $establishment->description }}</p>
              <button type="button" class="btn btn-primary d-flex justify-content-center align-items-center w-100" style="border-radius:20px; height:2.6rem;" data-bs-toggle="modal" data-bs-target="#establishmentModal">
                Abrir
              </button>
            </div>
          </div>
        </div>
      @endforeach
    @endif
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

        <h3 class="my-5">Comentarios:</h3>

          <div class="row">
            <div class="col-12 d-flex align-items-center mb-4">
              <span class="input-group-text">Nombre</span>
              <input type="text" class="form-control" name="name" id="insertReviewName">
            </div>
            <div class="col-12 d-flex align-items-center mb-4">
              <span class="input-group-text">Puntuacion</span>
              <input type="text" class="form-control" name="rating" id="insertReviewRating">
            </div>
            <div class="col-12 d-flex align-items-center mb-4">
              <span class="input-group-text h-100">Comentario</span>
              <textarea class="form-control" name="commentary" id="insertReviewCommentary" rows="3"></textarea>
            </div>
            <div class="col-12 d-flex justify-content-center">
              <input type="hidden" id="establishmentModalCommentsId" name="id_establishment">
              <input type="submit" class="btn btn-outline-primary m-2" onclick="insertAjaxReview()">
            </div>
          </div>
        <div id="establishmentModalReview">
          <div class="row"></div>
        </div>

      </div>
    </div>
  </div>
</div>

  <div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselMain" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselMain" data-bs-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="{{ url('assets/img/tio-tom.jpg')  }}" class="d-block w-50" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px;" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>titulaco</h5>
        <p>finsiona</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="{{ url('assets/img/tio-tom.jpg')  }}" class="d-block w-50" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px;" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>titulaco</h5>
        <p>finsiona</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ url('assets/img/tio-tom.jpg')  }}" class="d-block w-50" style="position: relative; left:50%; transform: translateX(-50%); border-radius: 5px;" alt="">
      <div class="carousel-caption d-none d-md-block">
        <h5>titulaco</h5>
        <p>finsiona</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselMain" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselMain" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

@endsection