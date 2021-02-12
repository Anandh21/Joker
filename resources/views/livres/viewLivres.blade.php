@extends('layouts.front')
@section('content')
    @include('components.flash')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Author</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach( $livres as $livre)

            <tr>
                <th scope="row">{{$livre->id}}</th>
                <td>{{$livre->title}}</td>
                <td>{{$livre->description}}</td>
                <td>{{$livre->author}}</td>
                <td><a href="" class="btn btn-warning">Update</a></td>
                <td>
                    <form action="" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>

@endsection