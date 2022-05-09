@extends('layouts.main')

@section('sections')
   <div class="row mt-3">
     <div class="col-lg-6 col-sm-12 ">
        <div>
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/group.svg') }}" class="d-block h-welcome w-100 img-fluid" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/piechart.svg') }}" class="d-block h-welcome w-100 img-fluid" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
        </div>
     </div>
     <div class="col-lg-6 col-sm-12 mt-5 mt-lg-3"> 
      <h2 id="title-home">Mengapa harus ViralNews ?</h2>
      <p id="descript">ViralNews merupakan portal berita yang terpercaya dan menyajikan berita terkini. Sumber berita berasal dari masyarakat dan para pakar yang memiliki kealihan dibidangnya. Tim ViralNews memiliki sertifikasi sesuai bidang keahlian yang dipegang. Jangan ragu dengan ViralNews dalam menjadikan acuan berita terupdate anda. </p>

    </div>
   </div>
   <a href="/blog" class="btn btn-outline-primary mt-3 float-end">Lihat Berita  <i class="bi bi-arrow-right-circle-fill"></i></a>

@endsection

  