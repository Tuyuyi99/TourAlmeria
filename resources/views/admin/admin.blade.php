@extends("layouts/master")
@section("title", "Panel de Administracion Listado")
@section("content")
    @if(isset($userList))
        <div class="w-100 d-flex justify-content-center">
            <div class="input-group mb-3 w-50">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
            </div>
        </div>
    
        <div class="d-flex justify-content-center">
            <a href="{{ route('user.create') }}">
                <i class="fa fa-plus" style="font-size:4rem; margin-right:10px;"></i>
            </a>
        </div>
        @foreach ($userList as $user)
            <main>
                <div class="row w-100">
                    <div class="col-8">
                        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" class="m-0 d-flex align-items-center">
                            @method("PATCH")
                            @csrf
                            <h3 class="d-inline">Nombre: <input type="text" name="name" value="{{$user->name}}" size="10" style="border:none; border-bottom:solid 1px;"></h3>

                            <h3 class="d-inline">Contraseña: <input type="text" name="password" value="{{$user->password}}" size="10" style="border:none; border-bottom:solid 1px;"></h3>
                            <button type="submit" class="btn btn-primary me-1 ms-2">Modificar</button>
                        </form>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <form action="{{route('user.destroy', $user->id)}}" method="POST" class="m-0">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger me-2 ms-1">Borrar</button>
                        </form>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-success">Editar</a>
                    </div>
                </div>
            </main>
        @endforeach
    @endif

    @if(isset($categoriesList))
        @foreach ($categoriesList as $category)
            <h1>Categoria:</h1>
                <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
                    @method("PATCH")
                    @csrf
                    <input type="text" name="name" value="{{$category->name}}">
                    <input type="submit">
                </form>
                <form action="{{route('category.destroy', $category->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
                <a href="{{route('category.edit', $category->id)}}">Modificar</a>

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
            <img src="{{ asset('assets/img/' .  $photography->image)}}" style="width:15%;">
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

@endsection
</body>
</html>