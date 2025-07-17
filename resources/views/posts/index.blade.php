@extends('layouts.root')

    @section('content')
        <div class="">
            <h2 class="text-xl font-semibold text-black dark:text-white">All Posts</h2>
            <a href="{{ route('posts.create') }}" class="btn btn-info">Add Post</a>
        </div>
        <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>{{ $post->image }}</td>
                    <td>
                        <a href="{{ route('posts.update', $post->id) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success">Show</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
    