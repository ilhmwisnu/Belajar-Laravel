@extends("layouts.main_layout")

@section("container")
  <h1>Category List</h1>
  <ul>
    @foreach ($categories as $category )
      <li><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></li>
    @endforeach
  </ul>
@endsection