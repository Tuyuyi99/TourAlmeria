@isset($photography)
        <form action="{{ route('photography.update', ['id' => $photography->id]) }}" method="POST">
        image:<input type="file" name="image" value="{{$photography->image}}"><br>
        @method("PATCH")
@else
    <form action="{{ route('photography.store') }}" method="POST">
        image:<input type="file" name="image"><br>
@endisset
 @csrf

    <input type="submit">
    </form>