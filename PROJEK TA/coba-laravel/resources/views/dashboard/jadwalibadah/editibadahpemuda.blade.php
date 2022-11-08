@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Ibadah Pemuda</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/jadwalibadah/ibadahpemuda/'. $ibadahpemuda->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Worship Leader</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wsleader" value="{{ $ibadahpemuda->wsleader }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pemain Musik</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pemainmusik" value="{{ $ibadahpemuda->pemainmusik }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pengkhotbah</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pkhotbah" value="{{ $ibadahpemuda->pkhotbah }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Hari Tanggal</label>
              <input type="date" class="form-control @error('slug') is-invalid @enderror" name="hari" value="{{ $ibadahpemuda->hari }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Jam</label>
              <input type="time" class="form-control @error('slug') is-invalid @enderror" name="jam" value="{{ $ibadahpemuda->jam }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Tempat</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="tempat" value="{{ $ibadahpemuda->tempat }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
         
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>
@endsection