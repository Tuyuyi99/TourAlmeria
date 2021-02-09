@extends("layouts/front")
@section("title", "TourAlmeria")
@section("content")

  <section class="container-header animate__animated animate__rotateInDownLeft">
    <span id="titleContainerHeader">
        <h1 class="animate__animated animate__bounceInDown animate__delay-2s">Tour Almería</h1>
    </span>

    <div class="w-100 position-absolute" style="height: 150px; overflow: hidden; bottom: 0; color: white;" id="waveHeader">
      <div style="height: 150px; overflow: hidden;" >
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
          <path d="M-4.22,-3.45 C253.67,166.28 342.27,-66.61 523.98,34.03 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
      </div>
    </div>
  </section>

  <div class="row d-flex align-items-center m-auto">
    @if(isset($establishmentList))
      @foreach ($establishmentList as $establishment)
        <div class="col-4 d-flex justify-content-center">
          <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/img/' . $establishment->photography->first()->image) }}" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">{{ $establishment->name }}</h5>
              <p class="card-text">{{ $establishment->description }}</p>
              <a href="#" class="btn btn-primary d-flex justify-content-center">ir</a>
            </div>
          </div>
        </div>
      @endforeach
    @endif
  </div>

  <div id="carouselMain" class="carousel carousel-dark slide" data-bs-ride="carousel">
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

<h1>Principal2</h1>
<h1>Principal2</h1>
<h1>Principal2</h1>
<h1>Principal2</h1>
<h1>Principal2</h1>
<h1>Principal2</h1>

<div class="modal fade" tabindex="-1" id="modalPrueba">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="header">
        titulo
      </div>
      <div class="modal-body">
        body
      </div>
      <div class="modal-footer">
        pìe
      </div>
    </div>
  </div>
</div>
<button class="btn btn-success" type="button" data-toogle="modal" data-target="modalPrueba">Abrir modal</button>

@endsection