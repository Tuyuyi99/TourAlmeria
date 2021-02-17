@extends("layouts/master")
@section('title', 'Panel de Administracion Modificación')
@section('content')

    @isset($category)
        <container-mg>
            <div class="row w-100">
                <div class="col-8 d-flex align-items-center">
                    <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST"
                        class="m-0 d-flex align-items-center">
                        <div class="col-12 col-xxl-6 d-flex align-items-center" style="height: 100px; margin-right: 5px;">
                            <span class="input-group-text">Name</span>
                            <input type="text" class="form-control" size="50" name="name" value="{{ $category->name }}">
                        </div>


                        @method("PATCH")
                    @else
                        <container-mg>
                            <div class="row w-100">
                                <div class="col-8 d-flex align-items-center">
                                    <form action="{{ route('category.store') }}" method="POST"
                                        class="m-0 d-flex align-items-center">
                                        <div class="col-12 col-xxl-6 d-flex align-items-center"
                                            style="height: 100px; margin-right: 5px;">
                                            <span class="input-group-text">Name</span>
                                            <input type="text" class="form-control" size="50" name="name"><br>
                                        </div>

    @endisset
                                        @csrf

                                        <input type="submit" class="btn btn-outline-secondary">
                                    </form>
                                </div>
                            </div>
                        </container-mg>
@endsection
