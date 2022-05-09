@extends('layouts.main')

@section('sections')
<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="mt-5">
                <h2 class="mb-0">{{ $post->title }}</h2>
                <h5 class="mb-2 ">By <a class="text-decoration-none" href="/blog?author={{  $post->user->username }}">{{ $post->user->name }}</a> in  <a class="text-decoration-none" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a> </h5>
                
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                @else
                    <img src="https://images.unsplash.com/photo-1641550435860-1370d80c36e7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwyODg2MjZ8MHwxfGFsbHwxMHx8fHx8fDJ8fDE2NDE1NjU0NDM&ixlib=rb-1.2.1&q=85&h=400&w=1200" alt="" class="img-fluid">
                @endif
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
                <a class="text-decoration-none d-block mt-3" href="/blog"> <i class="bi bi-arrow-left"></i> Back to posts</a>
        </div>
    </div>
</div>

@endsection