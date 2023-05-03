@extends('dashboard.layouts.main')

@section('container')
    <div class="mt-3">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <a href="/dashboard/posts" class="btn btn-outline-dark">Back</a>
        <a class="btn btn-primary">Edit</a>
        <a class="btn btn-danger">Delete</a>
    </div>

@endsection
