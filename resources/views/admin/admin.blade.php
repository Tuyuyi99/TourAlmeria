@extends("layouts/master")
@section('title', 'Panel de Administracion Listado')
@section('content')
    @if (isset($userList))
        <div class="w-100 d-flex justify-content-center">
            <div class="input-group mb-3 w-50">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Dropdown</button>
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
            <container-mg>
                <div class="row w-100">
                    <div class="col-8">
                        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST"
                            class="m-0 d-flex align-items-center">
                            @method("PATCH")
                            @csrf
                            <h3 class="d-inline">Nombre: <input type="text" name="name" value="{{ $user->name }}"
                                    size="10" style="border:none; border-bottom:solid 1px;"></h3>

                            <h3 class="d-inline">Contraseña: <input type="text" name="password"
                                    value="{{ $user->password }}" size="10" style="border:none; border-bottom:solid 1px;">
                            </h3>
                            <button type="submit" class="btn btn-primary me-1 ms-2">Modificar</button>
                        </form>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="m-0">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger me-2 ms-1">Borrar</button>
                        </form>
                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-success">Editar</a>
                    </div>
                </div>
            </container-mg>
        @endforeach
    @endif

    @if (isset($categoriesList))
        <div class="w-100 d-flex justify-content-center">
            <div class="input-group mb-3 w-50">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">Dropdown</button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            <a href="{{ route('category.create') }}">
                <i class="fa fa-plus" style="font-size:4rem; margin-right:10px;"></i>
            </a>
        </div>
        @foreach ($categoriesList as $category)
            <container-mg>
                <div class="row w-100">
                    <div class="col-8 d-flex align-items-center">
                        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST"
                            class="m-0 d-flex align-items-center">
                            @method("PATCH")
                            @csrf
                            <h3 class="d-inline">Nombre: <input type="text" name="name" value="{{ $category->name }}"
                                    size="10" style="border:none; border-bottom:solid 1px;"></h3>
                            <button type="submit" class="btn btn-primary me-1 ms-2">Modificar</button>
                        </form>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-end">
                        <form action="{{ route('category.destroy', $category->id) }}" method="POST" class="m-0">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger me-2 ms-1">Borrar</button>
                        </form>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success">Editar</a>
                    </div>
                </div>
            </container-mg>
        @endforeach
    @endif

    @if (isset($establishmentList))
    <div class="w-100 d-flex justify-content-center">
        <div class="input-group mb-3 w-50">
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">Dropdown</button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="{{ route('establishment.create') }}">
            <i class="fa fa-plus" style="font-size:4rem; margin-right:10px;"></i>
        </a>
    </div>
        @foreach ($establishmentList as $establishment)
        <container-mg>
            <div class="row w-100">
                <div class="col-12 d-flex align-items-center">
                    <form action="{{ route('establishment.update', ['id' => $establishment->id]) }}" method="POST"
                        class="m-0 d-flex align-items-center">
                        @method("PATCH")
                        @csrf
                        <h5 class="d-inline">Nombre: <input type="text" name="name" value="{{ $establishment->name }}"
                            size="10" style="border:none; border-bottom:solid 1px;"></h5>

                        <h5 class="d-inline">Descripcion: <input type="text" name="description" value="{{ $establishment->description }}"
                            size="30" style="border:none; border-bottom:solid 1px;"></h5>

                        <h5 class="d-inline">Direccion: <input type="text" name="address" value="{{ $establishment->address }}"
                            size="30" style="border:none; border-bottom:solid 1px;"></h5>

                        <h5 class="d-inline">Google Maps: <input type="text" name="google_maps" value="{{ $establishment->google_maps }}"
                            size="30" style="border:none; border-bottom:solid 1px;"></h5>

                        <select name="outstanding">
                            @if($establishment->outstanding == "yes")
                                    <option value="yes" selected>yes</option>
                                    <option value="no">no</option>
                            @else
                                    <option value="yes">yes</option>
                                    <option value="no" selected>no</option>
                            @endif
                        </select>

                        <select name="id_category">
                            @if(isset($categoriesListEstablishment))
                                @foreach ($categoriesListEstablishment as $category)
                                    @if($category->id == $establishment->id_category)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                                    
                    <button type="submit" class="btn btn-primary me-1 ms-2">Modificar</button>
                    </form>
                </div>
                
                <div class="col-12 d-flex align-items-center">
                @if(isset($photographyListEstablishment))
                    @foreach ($photographyListEstablishment as $photography)
                        @if($photography->id_establishment == $establishment->id)
                            <img src="{{ asset('assets/img/establishments/' . $photography->image) }}" style="width:15%;">
                            <form action="{{ route('photography.destroy', $photography->id) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar Fotografia" class="btn btn-danger me-2 ms-1">
                            </form>
                        @endif
                    @endforeach
                @endif
                </div>
                

                <div class="col-12 d-flex align-items-center justify-content-end">
                    <form enctype="multipart/form-data" action="{{ route('photography.store') }}" method="POST">
                        @csrf
                        @method("POST")
                        <input type="file" name="image"><br>
                        <input type="hidden" name="id_establishment" value="{{ $establishment->id}}">
                        <input type="submit">
                </form>

                    <form action="{{ route('establishment.destroy', $establishment->id) }}" method="POST" class="m-0">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger me-2 ms-1">Borrar</button>
                    </form>
                    <a href="{{ route('establishment.edit', $establishment->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </container-mg>
        @endforeach
    @endif

    @if (isset($reviewList))
    <div class="w-100 d-flex justify-content-center">
        <div class="input-group mb-3 w-50">
            <input type="text" class="form-control" aria-label="Text input with dropdown button">
            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">Dropdown</button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
        </div>
    </div>

    <div class="d-flex justify-content-center">
        <a href="{{ route('review.create') }}">
            <i class="fa fa-plus" style="font-size:4rem; margin-right:10px;"></i>
        </a>
    </div>

        @foreach ($reviewList as $review)
        <container-mg>
            <div class="row w-100">
                <div class="col-8 d-flex align-items-center">
                    <form action="{{ route('review.update', ['id' => $review->id]) }}" method="POST"
                        class="m-0 d-flex align-items-center">
                        @method("PATCH")
                        @csrf
                        <h4 class="d-inline">Nombre: <input type="text" name="name" value="{{ $review->name }}"
                            size="15" style="border:none; border-bottom:solid 1px;"></h4>

                        <h4 class="d-inline">Valoracion: <input type="text" name="rating" value="{{ $review->rating }}"
                            size="15" style="border:none; border-bottom:solid 1px;"></h4>
                            
                        <h4 class="d-inline">Comentario: <input type="text" name="commentary" value="{{ $review->commentary }}"
                            size="15" style="border:none; border-bottom:solid 1px;"></h4>

                        <select name="id_establishment">
                            @if(isset($establishmentListReview))
                                            @foreach ($establishmentListReview as $establishment)
                                                    @if($establishment->id == $review->id_establishment)
                                                                <option value="{{ $establishment->id }}" selected>{{ $establishment->name }}</option>
                                                    @else
                                                        <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                                    @endif
                                            @endforeach
                            @endif
                        </select>
                        <button type="submit" class="btn btn-primary me-1 ms-2">Modificar</button>
                    </form>
                </div>
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <form action="{{ route('review.destroy', $review->id) }}" method="POST" class="m-0">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger me-2 ms-1">Borrar</button>
                    </form>
                <a href="{{ route('review.edit', $review->id) }}" class="btn btn-success">Editar</a>
                </div>
            </div>
        </container-mg>
        @endforeach
    @endif

@endsection
</body>

</html>
