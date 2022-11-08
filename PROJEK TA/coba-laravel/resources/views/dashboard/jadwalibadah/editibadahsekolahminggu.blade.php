@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Ibadah Anak Sekolah Minggu</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/jadwalibadah/ibadahsekolahminggu/'. $ibadahsekolahminggu->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Worship Leader</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wsleader"  value="{{ $ibadahsekolahminggu->wsleader }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pemain Musik</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pemainmusik" value="{{ $ibadahsekolahminggu->pemainmusik }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pembawa Cerita</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pbwcerita" value="{{ $ibadahsekolahminggu->pbwcerita}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Hari Tanggal</label>
              <input type="date" class="form-control @error('slug') is-invalid @enderror" name="hari" value="{{ $ibadahsekolahminggu->hari}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Jam</label>
              <input type="time" class="form-control @error('slug') is-invalid @enderror" name="jam" value="{{ $ibadahsekolahminggu->jam}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Tempat</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="tempat" value="{{ $ibadahsekolahminggu->tempat }}" required >
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