@extends("layouts/master")
@section("title", "Panel de Administracion Modificación")
@section("content")

@isset($photography)
        <form action="{{ route('photography.update', ['id' => $photography->id]) }}" method="POST">
        image:<input type="text" name="image" value="{{$photography->image}}"><br>
        @method("PATCH")
        <select name="id_establishment">
                @if(isset($establishmentList))
                                @foreach ($establishmentList as $establishment)
                                        @if($establishment->id == $photography->id_establishment)
                                                <option value="{{ $establishment->id }}" selected>{{ $establishment->name }}</option>
                                        @else
                                        <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                        @endif
                                @endforeach
                @endif
        </select>
@else
    <form action="{{ route('photography.store') }}" method="POST">
        image:<input type="text" name="image"><br>
        <select name="id_establishment">
        @if(isset($establishmentList))
                        @foreach ($establishmentList as $establishment)
                                <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                        @endforeach
        @endif
        </select>
@endisset
 @csrf

        
    <input type="submit">
    </form>

@endsection