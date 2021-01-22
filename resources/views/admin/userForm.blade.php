@isset($user)
        <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
        name:<input type="text" name="name" value="{{$user->name}}"><br>
        password:<input type="text" name="password" value="{{$user->password}}"><br>
        @method("PATCH")
@else
    <form action="{{ route('user.store') }}" method="POST">
    name:<input type="text" name="name"><br>
    password:<input type="text" name="password"><br>
@endisset
 @csrf

    <input type="submit">
    </form>