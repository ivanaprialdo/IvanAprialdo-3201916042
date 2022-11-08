@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Ibadah Keluarga</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/jadwalibadah/ibadahkeluarga/'. $ibadahkeluarga->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Worship Leader</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wsleader" value="{{ $ibadahkeluarga->wsleader }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pemain Musik</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pemainmusik" value="{{ $ibadahkeluarga->pemainmusik}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pengkhotbah</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pkhotbah" value="{{ $ibadahkeluarga->pkhotbah }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Hari Tanggal</label>
              <input type="date" class="form-control @error('slug') is-invalid @enderror" name="hari" value="{{ $ibadahkeluarga->hari }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Jam</label>
              <input type="time" class="form-control @error('slug') is-invalid @enderror" name="jam" value="{{ $ibadahkeluarga->jam }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Tempat</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="tempat" value="{{ $ibadahkeluarga->tempat }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Alamat</label>
              <input type="-" class="form-control @error('slug') is-invalid @enderror" name="alamat" value="{{ $ibadahkeluarga->alamat}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
         
            <button type="submit" class="btn btn-primary">Update Data</button>
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