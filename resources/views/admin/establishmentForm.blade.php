@isset($user)
        <form action="{{ route('establishment.update', ['id' => $establishment->id]) }}" method="POST">
        name:<input type="text" name="name" value="{{$establishment->name}}"><br>
        description:<input type="text" name="description" value="{{$establishment->description}}"><br>
        address:<input type="text" name="address" value="{{$establishment->address}}"><br>
        outstanding:<input type="text" name="outstanding" value="{{$establishment->outstanding}}"><br>
        @method("PATCH")
@else
    <form action="{{ route('establishment.store') }}" method="POST">
    name:<input type="text" name="name"><br>
    password:<input type="text" name="password"><br>
@endisset
 @csrf

    <input type="submit">
    </form>