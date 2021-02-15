@extends("layouts/master")
@section("title", "Panel de Administracion Modificación")
@section("content")

@isset($establishment)
        <form action="{{ route('establishment.update', ['id' => $establishment->id]) }}" method="POST">
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Name</span>
                <input type="text" class="form-control" name="name" value="{{$establishment->name}}">
                </div>
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Description</span>
                        <input type="text" class="form-control" name="description" value="{{$establishment->description}}">
                </div>
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Address</span>
                        <input type="text" class="form-control" name="address" value="{{$establishment->address}}">
                </div>
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Google Maps</span>
                        <input type="text" class="form-control" name="google_maps" value="{{$establishment->google_maps}}">
                </div>

                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Outstanding</span>

                        <select name="outstanding" class="form-select">

                                @if($establishment->outstanding == "yes")
                                        <option value="yes" selected>yes</option>
                                        <option value="no">no</option>
                                @else
                                        <option value="yes">yes</option>
                                        <option value="no" selected>no</option>
                                @endif
                        </select><br>

                </div>
                <div class="input-group mb-3 w-25">
                        <span class="input-group-text">Category</span>
                                <select name="id_category" class="form-select">
                                @if(isset($categoriesList))
                                                @foreach ($categoriesList as $category)
                                                        @if($category->id == $establishment->id_category)
                                                                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                        @else
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endif
                                                @endforeach
                                @endif
                                </select>
                                @method("PATCH")
                </div>
@else
    <form action="{{ route('establishment.store') }}" method="POST">
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Name</span>
                <input type="text" class="form-control" name="name">
        </div>
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Description</span>
                <input type="text" class="form-control" name="description">
        </div>
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Address</span>
                <input type="text" class="form-control" name="address">
        </div>
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Google Maps</span>
                <input type="text" class="form-control" name="google_maps">
        </div>

        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Outstanding</span>

        <select name="outstanding" class="form-select">
                <option value="yes">yes</option>
                <option value="no">no</option>
        </select>

        </div>

        <div class="input-group mb-3 w-25">
                <span class="input-group-text">Category</span>

                <select name="id_category" class="form-select">
                        @if(isset($categoriesList))
                                        @foreach ($categoriesList as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                        @endif
                </select>

        </div>
@endisset

 @csrf
        <input type="submit" class="btn btn-outline-secondary">
    </form>

@endsection