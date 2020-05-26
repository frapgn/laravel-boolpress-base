@extends('layouts.app')

@section('content')
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th colspan="3"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="#">View</a></td>
                    <td><a href="#">Edit</a></td>
                    <td>Delete</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
