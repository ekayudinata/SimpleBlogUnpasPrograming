<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <!-- Bootstrap CSS -->
    <link href={{ asset('css/app.css') }} rel="stylesheet" >
    {{-- my css --}}
    <link href={{ asset('css/style.css') }} rel="stylesheet" >

    {{-- <link href={{ asset('') }} --}}
    

    <title>{{ $title }}</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">ViralNews</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{ ($active === 'home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === 'blog') ? 'active' : '' }}" href="/blog">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === 'categories') ? 'active' : '' }}" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($active === 'about') ? 'active' : '' }}" href="/about">About</a>
            </li>
          </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-grid-1x2-fill"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"> <i class="bi bi-box-arrow-right"></i> Logout</button>
                      </form>
                    </ul>
                  </li>
                @else
                      <li class="nav-item">
                        <a class="nav-link " href="/login"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
                      </li>
                @endauth
            </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        @yield('sections')
    </div>
 
    
    <script src={{ asset('js/app.js') }} ></script>
    <script src={{ asset('js/main.js') }}></script>
  </body>
</html>