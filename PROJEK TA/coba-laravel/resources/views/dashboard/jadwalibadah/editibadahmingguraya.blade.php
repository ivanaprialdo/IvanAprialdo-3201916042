@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Ibadah Minggu Raya</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/jadwalibadah/ibadahmingguraya/'. $ibadahmingguraya->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Worship Leader</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wsleader" value="{{ $ibadahmingguraya->wsleader }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Singer</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="singer" value="{{ $ibadahmingguraya->singer }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pemain Musik</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pemainmusik" value="{{ $ibadahmingguraya->pemainmusik }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pengkhotbah</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pkhotbah" value="{{ $ibadahmingguraya->pkhotbah }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Pendoa Syafaat</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pendoa" value="{{ $ibadahmingguraya->pendoa}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Petugas Kolekte</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="ptgskolekte" value="{{ $ibadahmingguraya->ptgskolekte }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Penerima Tamu</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="pentamu" value="{{ $ibadahmingguraya->pentamu }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Petugas Parkir</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="petparkir" value="{{ $ibadahmingguraya->petparkir}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Hari Tanggal</label>
              <input type="date" class="form-control @error('slug') is-invalid @enderror" name="hari" value="{{ $ibadahmingguraya->hari }}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Jam</label>
              <input type="time" class="form-control @error('slug') is-invalid @enderror" name="jam" value="{{ $ibadahmingguraya->jam}}" required >
              @error('slug')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="slug" class="form-label">Tempat</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" name="tempat" value="{{ $ibadahmingguraya->tempat}}" required >
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