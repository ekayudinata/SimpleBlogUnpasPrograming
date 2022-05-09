@extends('layouts.main')
@section('sections')

    <div class="row mt-5 justify-content-center">
        
        <div class="col-md-5">
            @if (session()->has('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status')  }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError')  }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <main class="form-signin">
                <h1 class="h3 mb-3 fw-normal text-center">Please login in</h1>
                <form action="/login" method="post">
                    @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" autofocus required>
                    <label for="email">Email address</label>
                    @error('email')    
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    @error('email')    
                        <div class="invalid-feedback">
                        {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login in</button>
                </form>
                <small class="d-block text-center mt-3">Not registered ? <a href="/register">Register Now!</a></small>
            </main>
        </div>     
    </div>
   
@endsection