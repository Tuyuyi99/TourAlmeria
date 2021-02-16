@extends("layouts/master")
@section('title', 'Panel de Administracion Modificación')
@section('content')

    @isset($review)
        <container-mg>
            <div class="row w-100">
                <div class="col-12 d-flex align-items-center">
                    <form action="{{ route('review.update', ['id' => $review->id]) }}" method="POST"
                        class="m-0 d-flex align-items-center">
                        <div class="row">
                            <div class="col-12 col-xxl-6 d-flex align-items-center" style="height: 100px; margin-right: 25px;">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" name="name" value="{{ $review->name }}"><br>

                                <span class="input-group-text">Rating</span>
                                <input type="text" class="form-control" name="rating" value="{{ $review->rating }}"><br>

                                <span class="input-group-text">Commentary</span>
                                <input type="text" class="form-control" name="commentary"
                                    value="{{ $review->commentary }}"><br>

                                @method("PATCH")
                        </div>
                        <div class="col-12 col-xxl-6 d-flex align-items-center" style="height: 100px; margin-right: 25px;">

                                <span class="input-group-text">Establishment</span>
                                <select name="id_establishment" class="form-select">
                                    @if (isset($establishmentList))
                                        @foreach ($establishmentList as $establishment)
                                            @if ($establishment->id == $review->id_establishment)
                                                <option value="{{ $establishment->id }}" selected>
                                                    {{ $establishment->name }}</option>
                                            @else
                                                <option value="{{ $establishment->id }}">
                                                    {{ $establishment->name }}
                                                </option>
                                            @endif
                                        @endforeach
                                    @endif
                            </div>
                            </select>
                        @else
                            <container-mg>
                                <div class="row w-100">
                                    <div class="col-12 d-flex align-items-center">
                                        <form action="{{ route('review.store') }}" method="POST"
                                            class="m-0 d-flex align-items-center">
                                            <div class="row">
                                                <div class="col-12 col-xxl-6 d-flex align-items-center"
                                                    style="height: 100px; margin-right: 25px;">
                                                    <span class="input-group-text">Name</span>
                                                    <input type="text" class="form-control" name="name">

                                                    <span class="input-group-text">Rating</span>
                                                    <input type="text" class="form-control" name="rating">

                                                    <span class="input-group-text">Commentary</span>
                                                    <input type="text" class="form-control" name="commentary">

                                                </div>
                                                <div class="col-12 col-xxl-6 d-flex align-items-center"
                                                    style="height: 100px; margin-right: 25px;">
                                                    <span class="input-group-text">Establishment</span>
                                                    <select name="id_establishment" class="form-select">
                                                        @if (isset($establishmentList))
                                                            @foreach ($establishmentList as $establishment)
                                                                <option value="{{ $establishment->id }}">
                                                                    {{ $establishment->name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                @endisset
                                                @csrf


                                                <button type="submit" class="btn btn-outline-secondary"
                                                    style="margin-left: 5px;">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </container-mg>

                    @endsection
