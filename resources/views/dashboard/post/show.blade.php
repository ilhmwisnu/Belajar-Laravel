@extends('dashboard.layouts.main')

@section('container')
    <div class="mt-3">
        <a href="/dashboard/posts" class="btn btn-outline-dark me-2"><i class="bi bi-arrow-left"></i> Back</a>
        <a class="btn btn-primary me-2"><i class="bi bi-pen "></i> Edit</a>
        <a class="btn btn-danger"><i class="bi bi-trash3"></i> Delete</a>
        <h1 class="mt-3">{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>

@endsection
