<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <a href="{{ route('user.index') }}">Listado Usuarios</a>
    <a href="{{ route('category.index') }}">Listado Categorias</a>
    <a href="{{ route('establishment.index') }}">Listado Establecimientos</a>
    <a href="{{ route('photography.index') }}">Listado Fotografias</a>
    <a href="{{ route('review.index') }}">Listado Reseñas</a>

    @if(isset($UserList))
        @foreach ($UserList as $user)
            <h1>Usuario: {{ $user->name }}</h1>
        @endforeach
    @endif

    @if(isset($CategoriesList))
        @foreach ($CategoriesList as $category)
            <h1>Categoria: {{ $category->name }}</h1>
        @endforeach
    @endif

    @if(isset($EstablishmentList))
        @foreach ($EstablishmentList as $establishment)
            <h1>Establecimiento: {{ $establishment->name }}</h1>
        @endforeach
    @endif

    @if(isset($PhotographyList))
        @foreach ($PhotographyList as $photography)
            <h1>Fotografia: {{ $photography->name }}</h1>
        @endforeach
    @endif

    @if(isset($ReviewList))
        @foreach ($ReviewList as $review)
            <h1>Reseña: {{ $review->name }}</h1>
        @endforeach
    @endif
</body>
</html>