@extends('layouts.root')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->description }}</p>
    @if($post->image)
        <img src="{{ asset('storage/images/' . $post->image) }}" width="300">
    @endif
    <div class="mt-3">
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection
