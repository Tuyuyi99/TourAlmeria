<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <a href="{{ route('user.index') }}">Listado Usuarios</a> <a href="{{ route('user.create') }}">Crear Usuario</a>
    <br>
    <a href="{{ route('category.index') }}">Listado Categorias</a> <a href="{{ route('category.create') }}">Crear Categoria</a>
    <br>
    <a href="{{ route('establishment.index') }}">Listado Establecimientos</a> <a href="{{ route('establishment.create') }}">Crear Establecimiento</a>
    <br>
    <a href="{{ route('photography.index') }}">Listado Fotografias</a> <a href="{{ route('photography.create') }}">Crear Fotografia</a>
    <br>
    <a href="{{ route('review.index') }}">Listado Reseñas</a> <a href="{{ route('review.create') }}">Crear Reseña</a>

    @if(isset($userList))
        @foreach ($userList as $user)
            <h1>Usuario: {{ $user->name }}
                <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
                    @method("PATCH")
                    @csrf
                    <input type="text" name="name" value="{{$user->name}}"><br>
                    <input type="text" name="password" value="{{$user->password}}"><br>
                    <input type="submit">
                </form>
                <form action="{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
                <a href="{{route('user.edit', $user->id)}}">Modificar</a>

            </h1>
        @endforeach
        <a href="{{ route('user.create') }}">Crear</a>
    @endif

    @if(isset($categoriesList))
        @foreach ($categoriesList as $category)
            <h1>Categoria:
                <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
                    @method("PATCH")
                    @csrf
                    <input type="text" name="name" value="{{$category->name}}"><br>
                    <input type="submit">
                </form>
                <form action="{{route('category.destroy', $category->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input type="submit" value="Borrar">
                </form>
                <a href="{{route('category.edit', $category->id)}}">Modificar</a>
            </h1>
        @endforeach
        <a href="{{ route('category.create') }}">Crear</a>
    @endif

    @if(isset($establishmentList))
        @foreach ($establishmentList as $establishment)
            <h1>Establecimiento: {{ $establishment->name }}</h1>
            <a href="{{route('establishment.edit', $establishment->id)}}">Modificar</a>
            <form action="{{route('establishment.destroy', $establishment->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        @endforeach
        <a href="{{ route('establishment.create') }}">Crear</a>
    @endif

    @if(isset($photographyList))
        @foreach ($photographyList as $photography)
            <h1>Fotografia: {{ $photography->name }}</h1>
            <a href="{{route('photography.edit', $photography->id)}}">Modificar</a>
            <form action="{{route('photography.destroy', $photography->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        @endforeach
        <a href="{{ route('photography.create') }}">Crear</a>
    @endif
    

    @if(isset($reviewList))
        @foreach ($reviewList as $review)
            <h1>Reseña: {{ $review->name }}</h1>
            <a href="{{route('review.edit', $review->id)}}">Modificar</a>
            <form action="{{route('review.destroy', $review->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="Borrar">
            </form>
        @endforeach
        <a href="{{ route('review.create') }}">Crear</a>
    @endif
</body>
</html>