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
    <div class="text-center my-5">
        <a href="{{ route('user.index') }}">Listado Usuarios</a>
        <a href="{{ route('category.index') }}">Listado Categorias</a>
        <a href="{{ route('establishment.index') }}">Listado Establecimientos</a>
        <a href="{{ route('photography.index') }}">Listado Fotografias</a>
        <a href="{{ route('review.index') }}">Listado Reseñas</a>
    </div>

    <div>@yield("content")</div>

    <script src="{{ url('assets/js/script.js') }}"></script>
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>