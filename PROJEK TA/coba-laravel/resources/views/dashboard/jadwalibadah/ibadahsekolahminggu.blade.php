@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Ibadah Anak Sekolah Minggu</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/jadwalibadah/isekolah" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Worship Leader</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wsleader" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pemain Musik</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pemainmusik" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pembawa Cerita</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pbwcerita" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Hari Tanggal</label>
              <input type="date" class="form-control @error('slug') is-invalid @enderror" name="hari" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Jam</label>
              <input type="time" class="form-control @error('slug') is-invalid @enderror" name="jam" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Tempat</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="tempat" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
         
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
    </div>
{{-- <script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' +  title.value)
    .then(response =>response.json())
    .then(data => slug.value = data.slug)
  });

  document.addEventListener('trix-file-accept', function(e){
    e.preventDefault();
  })


  // function previewImage() {
  //   const image = document.querySelector('#image');
  //   const imgPreview = document.querySelector('.img-preview');
    
  //   imgPreview.style.display = 'block';

  //   const oFReader = new FileReader();
  //   oFReader.readAsDataURL(image.files[0]);

  //   oFReader.onload = function(oFREvent){
  //     imgPreview.src = oFREvent.target.result;
  //   }
  // }
</script> --}}
@endsection