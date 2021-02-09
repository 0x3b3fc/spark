@extends('layouts.user')
@section('title','Create User')
@section('main-title')
    <li class="breadcrumb-item"><a href="{{ route('users.create') }}">Add New User</a></li>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <br>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <div class="card">
                    <div class="card-header text-center">
                        Add New User
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('users.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" id="name"/>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" id="email"/>
                            </div>

                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" name="password" id="password"/>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Add User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
