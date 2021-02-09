@extends('layouts.user')

@section('title','All Blogs')
@section('main-title')
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Blog</a></li>
@endsection

@section('content')
    <div class="row">
        <div >
            <a href="{{ route('blog.create') }}" class="btn btn-dark" style="margin: 10px">Add Blog</a>
        </div>
        <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>category</td>
                    <td>title</td>
                    <td>Actions</td>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->category }}</td>
                        <td>{{ $blog->title }}</td>
                        <td >
                            <a href="{{ route('blog.edit',$blog->id)}}"  class="btn btn-primary">Edit</a>
                            <form action="{{ route('blog.destroy',$blog->id)}}" style="display: inline-block" method="post">
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
