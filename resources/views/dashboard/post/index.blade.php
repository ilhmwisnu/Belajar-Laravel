@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom mb-4">
        <h2>My Post</h2>
    </div>
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (count($posts) == 0)
        <p class="text-center mt-5">There is no data</p>
    @else
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}"><i
                                    class="bi bi-eye"></i></a>
                            <a class="btn btn-primary" href="/dashboard/posts/{{ $post->slug }}/edit"><i class="bi bi-pen"></i></a>
                            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure ?')" class="btn btn-danger"
                                    href=""><i class="bi bi-trash3"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>
    @endif
@endsection
