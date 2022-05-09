@extends('layouts.main')

@section('sections')
<div class="mt-5">
        <h1 class="mb-3 fw-bold text-center">{{ $title }}</h1>


    <div class="row mb-5 justify-content-center">
        <div class="col-md-6">
            <form action="/blog" method="get">
                @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search" value={{ request('search') }}>
                    <button class="btn btn-danger" type="submit" >Search</button>
                  </div>
            </form>
        </div>
    </div>

    @if ($list_post->count()) {{-- check is post is exsit --}}
        <div class="card mb-3">
            @if ($list_post[0]->image)
                <img src="{{ asset('storage/' . $list_post[0]->image) }}" alt="" class="img-fluid mt-3">
            @else
                <img src="https://images.unsplash.com/photo-1641550435860-1370d80c36e7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwyODg2MjZ8MHwxfGFsbHwxMHx8fHx8fDJ8fDE2NDE1NjU0NDM&ixlib=rb-1.2.1&q=85&h=200&w=1000" class="card-img-top" alt="..."> 
            @endif
           
            <div class="card-body text-center">
                <h2 class="card-title"> <a  class="text-decoration-none text-dark" href="/post/{{ $list_post[0]->slug }}">{{ $list_post[0]->title }}</a></h2>
                <small class="mb-2 ">By <a class="text-decoration-none" href="/blog?author={{  $list_post[0]->user->username }}">{{ $list_post[0]->user->name }}</a> in  <a class="text-decoration-none" href="/blog?category={{  $list_post[0]->category->slug }}">{{  $list_post[0]->category->name }}</a>  {{ $list_post[0]->created_at->diffForHumans() }}</small>
                <p class="card-text">{{ $list_post[0]->excerpt }}</p>
                <a class="text-decoration-none mt-3 btn btn-primary" href="/post/{{ $list_post[0]->slug }}">Read more </a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($list_post->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card zoom">
                    <div class="position-absolute text-white p-1 bg-blackwithopacity"> <a href="/blog?category={{ $item->category->slug }}" class="text-decoration-none text-white">{{ $item->category->slug  }}</a> </div>
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="" class="img-fluid mt-3">
                    @else
                        <img src="https://images.unsplash.com/photo-1641550435860-1370d80c36e7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwyODg2MjZ8MHwxfGFsbHwxMHx8fHx8fDJ8fDE2NDE1NjU0NDM&ixlib=rb-1.2.1&q=85&h=500&w=500" class="card-img-top" alt="...">
                    @endif
                   
                    <div class="card-body">
                      <h5 class="card-title"> <a class="text-decoration-none" href="/post/{{ $item->slug }}">{{ $item->title}}</a></h5>
                      <small class="mb-2 ">By <a class="text-decoration-none" href="/blog?author={{  $item->user->username }}">{{ $item->user->name }}</a>  {{ $item->created_at->diffForHumans() }}</small>
                      <p class="card-text">{{ $item->excerpt }}</p>
                      <a class="btn btn-primary" href="/post/{{ $item->slug }}">Read more.. </a>
                    </div>
                  </div>
            </div>
            @endforeach
    </div>
    

    {{-- @foreach ($list_post->skip(1) as $item)
    <div class=" mb-2 border-bottom">
        <h2>
            <a class="text-decoration-none" href="/post/{{ $item->slug }}">{{ $item->title}}</a>
        </h2>
        <h5 class="mb-2 ">By <a class="text-decoration-none" href="/blog?author={{  $item->user->username }}">{{ $item->user->name }}</a> in  <a class="text-decoration-none" href="/blog?category={{ $item->category->slug }}">{{ $item->category->name }}</a> </h5>
        <p>{{ $item->excerpt }}</p>
        <p><a class="text-decoration-none mt-3" href="/post/{{ $item->slug }}">Read more.. </a></p>
    </div>
    @endforeach --}}
</div>

<div class="d-flex justify-content-center mb-5">
    {{ $list_post->links() }}
</div>

@endsection