@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Galery</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/galery/store" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="floatingTextarea2">Deskripsi</label>
              <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Gambar Di Sini" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
            <div class="mb-3">
              <label for="image" class="form-label">Gambar</label>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control " type="file" id="image" name="gambar" onchange="previewImage()">
            </div>
         
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
    </div>
@endsection