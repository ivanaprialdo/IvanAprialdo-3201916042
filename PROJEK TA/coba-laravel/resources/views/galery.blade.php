@extends('layouts.main')

@section('container')
<section style="height: 40px">

</section>
{{-- <div class="container">

    <h1 class="fw-light text-lg-start mt-4 mb-0">Dokumentasi GKII TIBERIAS SEKADAU</h1>
  
    <hr class="mt-2 mb-5">
  
    <div class="row text-center text-lg-start">
  
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <div class="col-lg-3 col-md-4 col-6">
        <a class="d-block mb-4 h-100">
          <img class="img-fluid img-thumbnail" src="/img/p1.jpg" alt="">
        </a>
      </div>
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div> --}}
  {{-- <hr> --}}

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto ">
        <h1 class="fw-light">Galery GKII Tiberias Sekadau</h1>
        <p class="lead text-muted">Beberapa dokumentasi pada saat kegiatan di Gereja Kemah Injil Indonesia Tiberias Sekadau</p>
      </div>
    </div>
  </section>

  <div class="album bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach($galery as $gambar)
        <div class="col">
          <div class="card shadow-sm">
            <img src="{{ asset ('galery/'.$gambar->gambar) }}" alt="">
            <div class="card-body">
              <p class="card-text text-center">{{ $gambar->deskripsi }}</p>
              <div class="d-flex justify-content-between align-items-center">
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      {{-- <a href="#"> <button class="btn btn-primary" type="submit">Kembali Ke Atas</button></a> --}}
    </p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>

@endsection
