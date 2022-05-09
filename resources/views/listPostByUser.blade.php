@extends('layouts.main')

@section('sections')
<div class="mt-5">
    <h1 class="mb-5 fw-bold">{{ $title }}</h1>
    @foreach ($listPost as $item)
    <div class=" mb-2">
        <h2>
            <a class="text-decoration-none" href="/post/{{ $item->slug }}">{{ $item->title}}</a>
        </h2> 
        <h5 class="mb-2 ">By <a class="text-decoration-none" href="/authors/{{ $item->user->username }}">{{ $item->user->name }}</a> in  <a class="text-decoration-none" href="/categories/{{ $item->category->slug }}">{{ $item->category->name }}</a> </h5>   
        <h4>{{ $item->author }}</h4>
        <p>{{ $item->excerpt }}</p>
    </div>
    @endforeach
</div>
@endsection