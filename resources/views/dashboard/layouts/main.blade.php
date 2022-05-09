
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Eka Yudinata">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Belajar Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

   <!-- Bootstrap CSS -->
   <link href={{ asset('css/app.css') }} rel="stylesheet" >
    
     {{-- dashboard css --}}
     <link href={{ asset('css/dashboard.css') }} rel="stylesheet" >

    {{-- trix editor --}}
     <link rel="stylesheet" type="text/css" href={{ asset('css/trix.css') }}>
     <script type="text/javascript" src={{ asset('js/trix.js') }}></script>

     <style>
       trix-toolbar [data-trix-button-group="file-tools"]{
         display: none; 
       }
       /* trix-toolbar [data-trix-button-group="block-tools"]{
         display: none; 
       }
       trix-toolbar  [data-trix-attribute="heading1"]{
         display: none;  */
       }
     </style>
  </head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')
    </main>
  </div>
</div>


      <script src={{ asset('js/app.js') }}></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src={{ asset('js/dashboard.js') }}></script>
  </body>
</html>
