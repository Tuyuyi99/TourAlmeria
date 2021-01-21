@isset($category)
        <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
        name:<input type="text" name="name" value="{{$category->name}}"><br>
        @method("PATCH")
@else
    <form action="{{ route('category.store') }}" method="POST">
    name:<input type="text" name="name"><br>
@endisset
 @csrf

    <input type="submit">
    </form>