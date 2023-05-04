@extends('dashboard.layouts.main')

@section('container')
    <div class="mt-3">
        <a href="/dashboard/posts" class="btn btn-outline-dark me-2"><i class="bi bi-arrow-left"></i> Back</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-primary me-2"><i class="bi bi-pen "></i> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger" href=""><i
                    class="bi bi-trash3"></i> Delete</button>
        </form>
        <h1 class="mt-3">{{ $post->title }}</h1>
        <p>{!! $post->body !!}</p>
    </div>
@endsection
