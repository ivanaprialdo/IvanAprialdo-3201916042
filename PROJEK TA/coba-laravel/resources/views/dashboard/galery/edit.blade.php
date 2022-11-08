@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Galery</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/galery/update/{{ $galery->id }}" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="mb-3">
              <label for="floatingTextarea2"><strong>Deskripsi</strong></label>
              <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Gambar Di Sini" id="floatingTextarea2" style="height: 100px">{{ $galery->deskripsi }}</textarea>
            </div>
            <a href="{{ asset('galery/'. $galery->gambar) }}"><img src="{{ asset('galery/'. $galery->gambar) }}" class="mb-2" width="200"></a>
            <div class="mb-3">
              <label for="image" class="form-label"><strong>Gambar</strong></label>
              <img class="img-preview img-fluid mb-3 col-sm-5">
              <input class="form-control " type="file" id="image" name="gambar" onchange="previewImage()">
            </div>
         
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>
@endsection