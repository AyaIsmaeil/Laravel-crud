@extends('layouts.root')

@section('content')
    <h2>Edit Post</h2>

    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control" rows="5">{{ $post->description }}</textarea>
        </div>
        <div class="mb-3">
            <label>Image</label>
            @if($post->image)
                <img src="{{ asset('storage/images/' . $post->image) }}" width="120">
            @endif
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
@endsection
