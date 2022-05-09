@extends('layouts.main')

@section('sections')

<div class="container mt-5">
    <div class="row">
        @foreach ($categories as $item)
        <div class="col-md-4">
                <div class="card bg-dark text-white zoom">
                    <img src="https://images.unsplash.com/photo-1641550435860-1370d80c36e7?crop=entropy&cs=srgb&fm=jpg&ixid=MnwyODg2MjZ8MHwxfGFsbHwxMHx8fHx8fDJ8fDE2NDE1NjU0NDM&ixlib=rb-1.2.1&q=85&h=500&w=500" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title bg-blackwithopacity flex-fill text-center p-4 text-capitalize "><a class="text-decoration-none text-white fs-3" href="/blog?category={{ $item->slug }}">{{ $item->name }}</a> </h5>
                    </div>
                </div>
           
        </div>
        @endforeach
    </div>
</div>
{{-- <div class="mt-5">
    <div class=" mb-2">
        <ul>
            @foreach ($categories as $item)
            <li><a class="text-decoration-none" href="/categories/{{ $item->slug }}">{{ $item->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div> --}}
@endsection