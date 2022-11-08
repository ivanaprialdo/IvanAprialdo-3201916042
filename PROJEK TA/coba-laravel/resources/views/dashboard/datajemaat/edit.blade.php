@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Pendataan Jemaat</h1>
    </div>
    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/datajemaat/tambahdatajemaat/'. $datajemaat->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Nama</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="nama" value="{{ $datajemaat->nama }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="alamat" value="{{ $datajemaat->alamat }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Tanggal Lahir</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="ttl" value="{{ $datajemaat->ttl }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="col-md-6 mb-4">
                
              <h6 class="mb-2 pb-1">Jenis Kelamin: </h6>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" value="{{ $datajemaat->gender }}" required id="maleGender"
                  value="pria" />
                <label class="form-check-label" for="maleGender">Laki - Laki</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" required id="femaleGender"
                  value="wanita"  />
                <label class="form-check-label" for="femaleGender">Perempuan</label>
              </div>
            </div>
          
            <div class="mb-3">
              <label for="title" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="pekerjaan" value="{{ $datajemaat->pekerjaan}}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Status Babtisan</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="statusbaptis" value="{{ $datajemaat->statusbaptis }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="title" class="form-label">Nomor HP</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="nohp" value="{{ $datajemaat->nohp}}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
         
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>
@endsection