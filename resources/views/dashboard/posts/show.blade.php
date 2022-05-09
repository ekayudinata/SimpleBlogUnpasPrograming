@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row  my-3">
        <div class="col-lg-8">
            <div class="mt-5">
                <h2 class="mb-3">{{ $post->title }}</h2>
                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-circle-fill"></i></span>  Back to all my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning "><i class="bi bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')" > <i class="bi bi-x-circle"></i> Delete</button>
                </form>
                  @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="" class="img-fluid mt-3">
                  @else
                    <img src="https://images.unsplash.com/photo-1641550435860-1370d80c36e7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwyODg2MjZ8MHwxfGFsbHwxMHx8fHx8fDJ8fDE2NDE1NjU0NDM&ixlib=rb-1.2.1&q=85&h=400&w=1200" alt="" class="img-fluid mt-3">  
                  @endif  
               
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
</div>
    
@endsection