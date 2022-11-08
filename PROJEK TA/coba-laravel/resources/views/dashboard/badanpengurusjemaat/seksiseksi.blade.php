@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Seksi-Seksi Pelayanan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/badanpengurusjemaat/seksiseksi" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Anak</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spa" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
      
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Remaja</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spr" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
      
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Pemuda</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sppemuda" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Perkaria</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spperkaria" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

      
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Perkauan</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spperkauan" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
        
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Misi & Penginjilan</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spmp" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
       
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Diakonia, Sosial
                dan Tanggap Bencana
                </label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spdstb" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
        
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pelayanan Ibadah & Musik</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spim" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
        
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pendidikan & SDM</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sps" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
      
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Hukum & Advokasi</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sha" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
       
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Pembangunan</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sp" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
     
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Perlengkapan & Aset</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="spaset" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
      
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Litbang & Media Digital</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="slmd" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
      
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Seksi Kaum Profesional/LP2KI</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="skpl" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
         
            <button type="submit" class="btn btn-primary">Tambah Data</button>
          </form>
    </div>
@endsection