@extends('layouts.adm')

@section('title', 'Employees Page ')

@section('content')
    <h1>Employees Page</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Surname</th>
            <th scope="col">Age</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Content</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        @foreach($requests as $req)
            <tr>
                <th scope="row">{{$req->id}}</th>
                <td>{{$req->name}}</td>
                <td>{{$req->surname}}</td>
                <td>{{$req->age}}</td>
                <td>{{$req->email}}</td>
                <td>{{$req->phone}}</td>
                <td>{{$req->content}}</td>
                <td>
                    <form action="{{route('adm.employee.destroy', $req->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary btn-lg">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
