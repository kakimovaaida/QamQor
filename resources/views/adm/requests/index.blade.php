@extends('layouts.adm')

@section('title', 'Human Requests Page ')

@section('content')
    <h1>Human Requests Page</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Phone</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        @foreach($requests as $req)
            <tr>
                <th scope="row">{{$req->id}}</th>
                <td>{{$req->name}}</td>
                <td>{{$req->title}}</td>
                <td>{{$req->phone}}</td>
                <td>{{$req->description}}</td>
                <td>
                    <form action="{{route('adm.requests.destroy', $req->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary btn-lg">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
