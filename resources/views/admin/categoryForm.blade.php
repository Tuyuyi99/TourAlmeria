@extends("layouts/master")
@section("title", "Panel de Administracion Modificación")
@section("content")

@isset($category)
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
            <div class="input-group mb-3 w-25">
                <span class="input-group-text">Name</span>
                <input type="text" class="form-control" name="name" value="{{$category->name}}"><br>
            </div>
        @method("PATCH")
@else
    <form action="{{ route('category.store') }}" method="POST">
        <div class="input-group mb-3 w-25">
            <span class="input-group-text">Name</span>
            <input type="text" class="form-control" name="name" size="25"><br>
        </div>

@endisset
 @csrf

    <input type="submit" class="btn btn-outline-secondary">
    </form>

@endsection