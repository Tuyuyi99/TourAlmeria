@extends("layouts/master")
@section("title", "Panel de Administracion Modificación")
@section("content")

@isset($establishment)
        <form action="{{ route('establishment.update', ['id' => $establishment->id]) }}" method="POST">
        name:<input type="text" name="name" value="{{$establishment->name}}"><br>
        description:<input type="text" name="description" value="{{$establishment->description}}"><br>
        address:<input type="text" name="address" value="{{$establishment->address}}"><br>
        google maps:<input type="text" name="google_maps" value="{{$establishment->google_maps}}"><br>
        outstanding:
        <select name="outstanding">
                @if($establishment->outstanding == "yes")
                        <option value="yes" selected>yes</option>
                        <option value="no">no</option>
                @else
                        <option value="yes">yes</option>
                        <option value="no" selected>no</option>
                @endif
        </select><br>

        <select name="id_category">
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
@else
    <form action="{{ route('establishment.store') }}" method="POST">
        name:<input type="text" name="name"><br>
        description:<input type="text" name="description"><br>
        address:<input type="text" name="address"><br>
        google maps:<input type="text" name="google_maps"><br>
        outstanding:
        <select name="outstanding">
                <option value="yes">yes</option>
                <option value="no">no</option>
        </select><br>

        <select name="id_category">
        @if(isset($categoriesList))
                        @foreach ($categoriesList as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
        @endif
        </select>
@endisset

 @csrf
        <input type="submit">
    </form>

@endsection