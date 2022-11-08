@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Tambah Data Kontak</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/kontak/store" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Email</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="email" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror

            <div class="mb-3">
              <label for="title" class="form-label">No Hp Gembala 1</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="nophone1" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror

            <div class="mb-3">
              <label for="title" class="form-label">No Hp Gembala 2</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="nophone2" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror

            <div class="mb-3">
              <label for="title" class="form-label">No Hp Staf TU</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="nophone3" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror

            <div class="mb-3">
              <label for="title" class="form-label">Facebook</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="facebook" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
         
            <button type="submit" class="btn btn-primary mt-3">Tambah Data</button>
          </form>
    </div>
@endsection