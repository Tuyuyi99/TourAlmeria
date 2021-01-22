@isset($review)
        <form action="{{ route('review.update', ['id' => $review->id]) }}" method="POST">
        name:<input type="text" name="name" value="{{$review->name}}"><br>
        rating:<input type="text" name="rating" value="{{$review->rating}}"><br>
        commentary:<input type="text" name="commentary" value="{{$review->commentary}}"><br>
        @method("PATCH")
@else
    <form action="{{ route('review.store') }}" method="POST">
        name:<input type="text" name="name"><br>
        rating:<input type="text" name="rating"><br>
        commentary:<input type="text" name="commentary"><br>
@endisset
 @csrf

    <input type="submit">
    </form>