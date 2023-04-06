@extends("layouts.main_layout")

@section("container")
  <h2 class="text-center mt-5 mb-3">{{ $title }}</h2>
  <div class="d-flex justify-content-center">
    <div class="col-6 align-items-center">
      <form action="/blogs">
        @if (request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{request('author')}}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search.." value="{{ request("search") }}" name="search">
          <button class="btn btn-outline-secondary bg-warning text-black-50" type="button" id="button-addon2">Go</button>
        </div>
      </form>
    </div>
  </div>
  @if (count($blogs) > 0)
    @foreach ($blogs as $blog )
    <article class="mt-2">
      <br>
      <h2> <a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a>  </h2>
      <h6>Writed by : <a href="/blogs?author={{ $blog->author->username }}">{{ $blog->author->username }}</a> in <a href="/blogs?category={{ $blog->category->slug }}">{{ $blog->category->name }}</a></h6>
      <p > {{ $blog->body }} </p>
      <br>
      <hr>
    </article>
    @endforeach
    <br>
    {{ $blogs->links() }}
  @else
    <h6 class="text-center mt-5">No Result</h6>
  @endif


  
@endsection