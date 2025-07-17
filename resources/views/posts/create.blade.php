@extends('layouts.root')

@section('content')
    <h1>Add New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="title" class="form-control" id="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3"></textarea>
   </div>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection 

