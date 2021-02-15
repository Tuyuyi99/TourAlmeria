@extends("layouts/master")
@section("title", "Panel de Administracion Modificación")
@section("content")

@isset($review)
        <form action="{{ route('review.update', ['id' => $review->id]) }}" method="POST">
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Name</span>   
                        <input type="text" class="form-control" name="name" value="{{$review->name}}"><br>
                </div>
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Rating</span>
                        <input type="text" class="form-control" name="rating" value="{{$review->rating}}"><br>
                </div>
                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Commentary</span>
                        <input type="text" class="form-control" name="commentary" value="{{$review->commentary}}"><br>
                </div>

        @method("PATCH")

                <div class="input-group mb-1 w-25">
                        <span class="input-group-text">Establishment</span>
                        <select name="id_establishment" class="form-select">
                                @if(isset($establishmentList))
                                                @foreach ($establishmentList as $establishment)
                                                        @if($establishment->id == $review->id_establishment)
                                                                <option value="{{ $establishment->id }}" selected>{{ $establishment->name }}</option>
                                                        @else
                                                        <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                                        @endif
                                                @endforeach
                                @endif
                </div>
                        </select>
@else
    <form action="{{ route('review.store') }}" method="POST">
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Name</span>   
                <input type="text" class="form-control" name="name">
        </div>
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Rating</span>   
                <input type="text" class="form-control" name="rating">
        </div>
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Commentary</span>   
                <input type="text" class="form-control" name="commentary">
        </div>
        <div class="input-group mb-1 w-25">
                <span class="input-group-text">Establishment</span>
                <select name="id_establishment" class="form-select">
                        @if(isset($establishmentList))
                                @foreach ($establishmentList as $establishment)
                                        <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                @endforeach
                        @endif
                </select>
@endisset
 @csrf
 

    <input type="submit" class="btn btn-outline-secondary">
    </form>

@endsection