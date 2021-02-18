@extends("layouts/master")
@section('title', 'Panel de Administracion Listado')
@section('content')
    @if (isset($userList))
        <div class="d-flex justify-content-center">
            <a href="{{ route('user.create') }}">
                <i class="fa fa-plus" style="font-size:4rem; margin-right:10px; color: #cb2d3e;  /* fallback for old browsers */
                color: -webkit-linear-gradient(to right, #ef473a, #cb2d3e);  /* Chrome 10-25, Safari 5.1-6 */
                color: linear-gradient(to right, #ef473a, #cb2d3e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                 "></i>
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
        <div class="d-flex justify-content-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#categoryModal">
                <i class="fa fa-plus" style="font-size:4rem; margin-right:10px; color: #cb2d3e;  /* fallback for old browsers */
                color: -webkit-linear-gradient(to right, #ef473a, #cb2d3e);  /* Chrome 10-25, Safari 5.1-6 */
                color: linear-gradient(to right, #ef473a, #cb2d3e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                 "></i>
            </a>
            <div class="modal fade" tabindex="-1" id="categoryModal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nueva categoría</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row w-100 m-0 d-flex justify-content-center">
                                <div class="col-12 d-flex align-items-center justify-content-center p-3">
                                    <form action="{{ route('category.store') }}" method="POST"
                                        class="m-0 d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-12 d-flex align-items-center justify-content-center"
                                                style="height: 100px; margin-right: 5px;">
                                                <span class="input-group-text">Nombre</span>
                                                <input type="text" class="form-control" name="name"><br>
                                            </div>
                                            <div class="col-12 d-flex justify-content-center">
                                                @csrf
                                                <input type="submit" class="btn btn-outline-danger">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        <div class="d-flex justify-content-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#establishmentModal">
                <i class="fa fa-plus" style="font-size:4rem; margin-right:10px; color: #cb2d3e;  /* fallback for old browsers */
                color: -webkit-linear-gradient(to right, #ef473a, #cb2d3e);  /* Chrome 10-25, Safari 5.1-6 */
                color: linear-gradient(to right, #ef473a, #cb2d3e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                 "></i>
            </a>

            <div class="modal fade" tabindex="-1" id="establishmentModal">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Nuevo Establecimiento</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="row w-100 m-0 d-flex justify-content-center">
                                <div class="col-12 d-flex align-items-center justify-content-center p-3">
                                    <form action="{{ route('establishment.store') }}" method="POST"
                                        class="m-0 d-flex align-items-center">
                                        <div class="row">
                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <span class="input-group-text">Nombre</span>
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <span class="input-group-text h-100">Descripcion</span>
                                                <textarea class="form-control" name="description" rows="5">
                                                </textarea>
                                            </div>
                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <span class="input-group-text">Direccion</span>
                                                <input type="text" class="form-control" name="address">
                                            </div>

                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <span class="input-group-text">Google Maps</span>
                                                <input type="text" class="form-control" name="google_maps">
                                            </div>

                                            <div class="col-12 d-flex align-items-center mb-4">
                                                <span class="input-group-text">Destacado</span>
                                                <select name="outstanding" class="form-select">
                                                    <option value="yes">si</option>
                                                    <option value="no">no</option>
                                                </select>
                                                <span class="input-group-text">Categoria</span>
                                                <select name="id_category" class="form-select">
                                                    @if (isset($categoriesListEstablishment))
                                                        @foreach ($categoriesListEstablishment as $category)
                                                            <option value="{{ $category->id }}">
                                                                {{ $category->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @csrf
                                            <div class="col-12 d-flex justify-content-center">
                                                @csrf
                                                <input type="submit" class="btn btn-outline-danger">
                                            </div>

                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @foreach ($establishmentList as $establishment)
            <container-mg>
                <div class="row w-100">
                    <div class="col-12 d-flex align-items-center">
                        <form action="{{ route('establishment.update', ['id' => $establishment->id]) }}" method="POST"
                            class="m-0 d-flex align-items-center">
                            <div class="row">
                                <div class="col-12 col-xxl-6 d-flex align-items-center" style="height: 100px;">

                                    @method("PATCH")
                                    @csrf
                                    <h5 class="d-inline">Nombre: <input type="text" name="name"
                                            value="{{ $establishment->name }}" size="10"
                                            style="border:none; border-bottom:solid 1px;"></h5>

                                    <h5 class="d-inline">Descripcion: <input type="text" name="description"
                                            value="{{ $establishment->description }}" size="30"
                                            style="border:none; border-bottom:solid 1px;"></h5>

                                    <h5 class="d-inline">Direccion: <input type="text" name="address"
                                            value="{{ $establishment->address }}" size="30"
                                            style="border:none; border-bottom:solid 1px;"></h5>
                                </div>
                                <div class="col-12 col-xxl-6 d-flex align-items-center">
                                    <h5 class="d-inline">Google Maps: <input type="text" name="google_maps"
                                            value="{{ $establishment->google_maps }}" size="30"
                                            style="border:none; border-bottom:solid 1px;"></h5>

                                    <div class="w-100 d-flex justify-content-end">
                                        <select name="outstanding" class="mx-1">
                                            @if ($establishment->outstanding == 'yes')
                                                <option value="yes" selected>yes</option>
                                                <option value="no">no</option>
                                            @else
                                                <option value="yes">yes</option>
                                                <option value="no" selected>no</option>
                                            @endif
                                        </select>

                                        <select name="id_category" class="mx-1">
                                            @if (isset($categoriesListEstablishment))
                                                @foreach ($categoriesListEstablishment as $category)
                                                    @if ($category->id == $establishment->id_category)
                                                        <option value="{{ $category->id }}" selected>
                                                            {{ $category->name }}</option>
                                                    @else
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>

                                        <button type="submit" class="btn btn-primary me-1 ms-2">Modificar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-12 d-flex align-items-center">
                        <div class="row w-100" style="height: 150px;">
                            <div class="col-8 d-flex justify-content-start align-items-center">
                                <form enctype="multipart/form-data" action="{{ route('photography.store') }}"
                                    method="POST" class="m-0 w-100">
                                    @csrf
                                    @method("POST")

                                    <input class="form-control w-50 d-inline-block" type="file" name="image[]" multiple>
                                    <button class="btn btn-outline-primary" type="submit">Subir imagen</button>

                                    <input type="hidden" name="id_establishment" value="{{ $establishment->id }}">

                                </form>
                            </div>
                            <div class="col-4 d-flex justify-content-end align-items-center p-0">
                                <form action="{{ route('establishment.destroy', $establishment->id) }}" method="POST"
                                    class="m-0 d-inline-block">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger me-2 ms-1">Borrar</button>
                                </form>
                                <a href="{{ route('establishment.edit', $establishment->id) }}"
                                    class="btn btn-success">Editar</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 d-flex align-items-center" style="padding: 10px 10px 10px 10px;">
                        <div class="row w-100">
                            @if (isset($photographyListEstablishment))
                                @foreach ($photographyListEstablishment as $photography)
                                    @if ($photography->id_establishment == $establishment->id)
                                        <div
                                            class="boxPhotographyAdmin col-3 d-flex justify-content-center align-items-center position-relative mb-5">
                                            <img src="{{ asset('assets/img/establishments/' . $establishment->name . '/' . $photography->image) }}"
                                                style="width:50%; height: 200px;">
                                            <form action="{{ route('photography.destroy', $photography->id) }}"
                                                method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <input type="submit" value="Borrar Fotografia"
                                                    class="btn btn-danger me-2 ms-1 centerVerticalHorizontal">
                                            </form>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </container-mg>
        @endforeach
    @endif

    @if (isset($reviewList))
        <div class="d-flex justify-content-center">
            <a href="#" data-bs-toggle="modal" data-bs-target="#reviewModal">
                <i class="fa fa-plus" style="font-size:4rem; margin-right:10px; color: #cb2d3e;  /* fallback for old browsers */
                color: -webkit-linear-gradient(to right, #ef473a, #cb2d3e);  /* Chrome 10-25, Safari 5.1-6 */
                color: linear-gradient(to right, #ef473a, #cb2d3e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                 "></i>
            </a>
        </div>

        <div class="modal fade" tabindex="-1" id="reviewModal">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nueva reseña</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="row w-100 m-0 d-flex justify-content-center">
                            <div class="col-12 d-flex align-items-center justify-content-center p-3">
                                <form action="{{ route('review.store') }}" method="POST"
                                    class="m-0 d-flex align-items-center">
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-center mb-4">
                                            <span class="input-group-text">Nombre</span>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                        <div class="col-12 d-flex align-items-center mb-4">
                                            <span class="input-group-text">Puntuacion</span>
                                            <input type="text" class="form-control" name="rating">
                                        </div>
                                        <div class="col-12 d-flex align-items-center mb-4">
                                            <span class="input-group-text">Comentario</span>
                                            <textarea class="form-control" name="commentary" rows="3"></textarea>
                                        </div>
                                        <div class="col-8 d-flex align-items-center mb-4">
                                            <span class="input-group-text">Establecimiento</span>
                                            <select name="id_establishment" class="form-select">
                                                @if (isset($establishmentListReview))
                                                    @foreach ($establishmentListReview as $establishment)
                                                        <option value="{{ $establishment->id }}">
                                                            {{ $establishment->name }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                            @csrf
                                        </div>


                                        <div class="col-12 d-flex justify-content-center">
                                            @csrf
                                            <input type="submit" class="btn btn-outline-danger">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
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

                            <h4 class="d-inline">Valoracion: <input type="text" name="rating"
                                    value="{{ $review->rating }}" size="15"
                                    style="border:none; border-bottom:solid 1px;"></h4>

                            <h4 class="d-inline">Comentario: <input type="text" name="commentary"
                                    value="{{ $review->commentary }}" size="15"
                                    style="border:none; border-bottom:solid 1px;"></h4>

                            <select name="id_establishment">
                                @if (isset($establishmentListReview))
                                    @foreach ($establishmentListReview as $establishment)
                                        @if ($establishment->id == $review->id_establishment)
                                            <option value="{{ $establishment->id }}" selected>
                                                {{ $establishment->name }}</option>
                                        @else
                                            <option value="{{ $establishment->id }}">{{ $establishment->name }}
                                            </option>
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
