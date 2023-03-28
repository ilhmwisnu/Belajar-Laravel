@extends("layouts.main_layout")

@section("container")
  <h1>{{ $blog->title }}</h1>
  <h6><a href="/authors/{{ $blog->author->username }}">{{ $blog->author->username }}</a></h6>
  <h6><a href="/category/{{ $blog->category->name }}">{{ $blog->category->name }}</a></h6>
  <p>{{ $blog->body }}</p>

  <a href="/blogs">Back to Blogs</a>
@endsection


