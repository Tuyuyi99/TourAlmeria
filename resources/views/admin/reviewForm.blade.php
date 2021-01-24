@isset($review)
        <form action="{{ route('review.update', ['id' => $review->id]) }}" method="POST">
        name:<input type="text" name="name" value="{{$review->name}}"><br>
        rating:<input type="text" name="rating" value="{{$review->rating}}"><br>
        commentary:<input type="text" name="commentary" value="{{$review->commentary}}"><br>
        @method("PATCH")
        <select name="id_establishment">
                @if(isset($establishmentList))
                                @foreach ($establishmentList as $establishment)
                                        @if($establishment->id == $review->id_establishment)
                                                <option value="{{ $establishment->id }}" selected>{{ $establishment->name }}</option>
                                        @else
                                        <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                        @endif
                                @endforeach
                @endif
        </select>
@else
    <form action="{{ route('review.store') }}" method="POST">
        name:<input type="text" name="name"><br>
        rating:<input type="text" name="rating"><br>
        commentary:<input type="text" name="commentary"><br>
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