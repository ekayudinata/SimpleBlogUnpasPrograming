@extends('layouts.main')

@section('sections')
   <div class="mt-6 d-flex justify-content-center">
      <div class="card  shadow-lg mb-2 bg-body rounded mb-3 position-relative pt-5" style="max-width: 18rem;">
         <div class="position-absolute top-0 start-50 translate-middle">
            <img src={{ asset('img/profile.jpeg') }} class="zoom rounded-circle shadow-lg mb-2 bg-body rounded " height="100" width="100" alt="...">
         </div>
         
         <div class="card-body ">
         <h5 class="card-title">Wayan Eka Yudinata</h5>

         <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
         </div>
      </div>
   </div>
 
      

@endsection

