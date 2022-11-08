@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Penasehat</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/badanpengurusjemaat/penasehat" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Nama</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="nama" required >
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