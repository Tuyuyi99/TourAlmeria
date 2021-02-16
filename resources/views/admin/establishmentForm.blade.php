@extends("layouts/master")
@section('title', 'Panel de Administracion Modificación')
@section('content')

    @isset($establishment)
        <container-mg>
            <div class="row w-100">
                <div class="col-12 d-flex align-items-center">
                    <form action="{{ route('establishment.update', ['id' => $establishment->id]) }}" method="POST"
                        class="m-0 d-flex align-items-center">
                        <div class="row">
                            <div class="col-12 col-xxl-6 d-flex align-items-center" style="height: 100px; margin-right: 25px;">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" name="name" value="{{ $establishment->name }}">
                                <span class="input-group-text">Description</span>
                                <input type="text" class="form-control" name="description"
                                    value="{{ $establishment->description }}">
                                <span class="input-group-text">Address</span>
                                <input type="text" class="form-control" name="address" value="{{ $establishment->address }}">
                                <span class="input-group-text">Google Maps</span>
                                <input type="text" class="form-control" name="google_maps"
                                    value="{{ $establishment->google_maps }}">

                            </div>
                            <div class="col-12 col-xxl-6 d-flex align-items-center" style="height: 100px; margin-right: 25px;">

                                <span class="input-group-text">Outstanding</span>

                                <select name="outstanding" class="form-select">

                                    @if ($establishment->outstanding == 'yes')
                                        <option value="yes" selected>yes</option>
                                        <option value="no">no</option>
                                    @else
                                        <option value="yes">yes</option>
                                        <option value="no" selected>no</option>
                                    @endif
                                </select><br>

                                <span class="input-group-text">Category</span>
                                <select name="id_category" class="form-select">
                                    @if (isset($categoriesList))
                                        @foreach ($categoriesList as $category)
                                            @if ($category->id == $establishment->id_category)
                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                            @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endif
                                        @endforeach
                                    @endif
                                </select>
                                @method("PATCH")
                            @else
                                <container-mg>
                                    <div class="row w-100">
                                        <div class="col-12 d-flex align-items-center">
                                            <form action="{{ route('establishment.store') }}" method="POST"
                                                class="m-0 d-flex align-items-center">
                                                <div class="row">
                                                    <div class="col-12 col-xxl-6 d-flex align-items-center"
                                                        style="height: 100px; margin-right: 25px;">
                                                        <span class="input-group-text">Name</span>
                                                        <input type="text" class="form-control" name="name">


                                                        <span class="input-group-text">Description</span>
                                                        <input type="text" class="form-control" name="description">


                                                        <span class="input-group-text">Address</span>
                                                        <input type="text" class="form-control" name="address">


                                                        <span class="input-group-text">Google Maps</span>
                                                        <input type="text" class="form-control" name="google_maps">

                                                    </div>
                                                    <div class="col-8 d-flex align-items-center" style="height: 100px;">



                                                        <span class="input-group-text">Outstanding</span>
                                                        <select name="outstanding" class="form-select">
                                                            <option value="yes">yes</option>
                                                            <option value="no">no</option>
                                                        </select>
                                                        <span class="input-group-text">Category</span>

                                                        <select name="id_category" class="form-select">
                                                            @if (isset($categoriesList))
                                                                @foreach ($categoriesList as $category)
                                                                    <option value="{{ $category->id }}">
                                                                        {{ $category->name }}</option>
                                                                @endforeach
                                                            @endif
                                                        </select>


                                                    @endisset
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-outline-secondary me-1 ms-2">Enviar</button>

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </container-mg>
                        @endsection
