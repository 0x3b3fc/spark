@extends('layouts.user')

@section('title','All Users')
@section('main-title')
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Users</a></li>
@endsection



@section('content')
    <div class="row">
        <div style="padding-left: 20px">
            <a href="{{ route('users.create') }}" class="btn btn-dark" style="margin: 10px">Add User</a>
        </div>
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td >
                            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user->id)}}" style="display: inline-block" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
