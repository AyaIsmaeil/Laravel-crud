@extends('layouts.root')

@section('content')
    <h1>Add New Post</h1>

    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label" required>Title</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" rows="3" name="description"></textarea>
   </div>
   <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
   </div>
    <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection 

