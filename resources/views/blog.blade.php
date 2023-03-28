@extends("layouts.main_layout")

@section("container")
  <h1>{{ $blog->title }}</h1>
  <h6>{{ $blog->author }}</h6>
  <h6>{{ $blog->category->name }}</h6>
  <p>{{ $blog->body }}</p>

  <a href="/blogs">Back to Blogs</a>
@endsection


