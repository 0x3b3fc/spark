@extends('layouts.user')
@section('title','Create Post')
@section('main-title')
    <li class="breadcrumb-item"><a href="{{ route('users.create') }}">Add New Post</a></li>
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
                        Add New Post
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('blog.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title" id="title"/>
                            </div>

                            <div class="form-group">
                                <label for="category">Category:</label>
                                <input type="text" class="form-control" name="category" id="category"/>
                            </div>

                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea type="text" class="form-control" name="description" id="description" rows="10"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Add Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
