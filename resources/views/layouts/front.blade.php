<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>@yield("title")</title>
</head>
<body>
    <header class="animate__animated animate__bounce" id="header">
      <nav class="navbar navbar-light navHome" id="menuNav" style="height: 70px">
        <div class="container-fluid h-100">
          <div class="row w-100 h-100 text-center d-flex align-items-center">

            <div class="col-8 h-100 d-flex justify-content-start align-items-center">
                <a href="#" class="nav-link" id="navTitulo" style="font-size:2rem; color:white; letter-spacing: 7px; cursor: pointer;">TourAlmería</a>
            </div>

            <div class="col-4 h-100 d-flex align-items-center justify-content-center">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link-scale" style="color: white; cursor: pointer;" id="dropdownMenuTop" data-bs-toggle="dropdown">
                    Categorías
                    </a>
                    <ul class="dropdown-menu centerVertical" aria-labelledby="dropdownMenuTop">
                      @if(isset($categoriesList))
                                  @foreach ($categoriesList as $category)
                                    <a class="dropdown-item" href="#">{{ $category->name }}</a>
                                  @endforeach
                      @endif
                    </ul>
                </div>
                <div class="input-group" id="boxInputFindHeader">
                  <input type="text" class="form-control textInputWhite" placeholder="Buscar" aria-label="buscador" aria-describedby="buscador" id="inputFindHeader" style="color:white;">
                  <i class="fa fa-search inputFindIcon" style="color: white;"></i>
                </div>
            </div>

          </div>
        </div>
      </nav>
    </header>

    <div>@yield("content")</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ url('assets/js/scriptFront.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>