@extends('layouts.front')

@section('content')
    @include('components.flash')
    <div class="row justify-content-center">
        <div class="col-6 mt-5">
            <label for="staticEmail" class="col-sm-2 col-form-label"> <strong>#id</strong> {{ $livre->id }}</label>

            <form method="post" action="{{ route('updateLivre',$livre->id) }}">
                @csrf
                @method("patch")
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" id="staticEmail" placeholder="" value="{{ $livre->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" id="inputPassword" placeholder="Description" value="{{ $livre->description}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Author</label>
                    <div class="col-sm-10">
                        <input type="text" name="author" class="form-control" id="staticEmail" placeholder="" value="{{ $livre->author }}">
                    </div>
                </div>
                <div class="form-group row justify-content-center">
                    <button type="submit" class="btn btn-warning mt-3 col-4 ">update</button>
                </div>
            </form>
        </div>
    </div>
@endsection