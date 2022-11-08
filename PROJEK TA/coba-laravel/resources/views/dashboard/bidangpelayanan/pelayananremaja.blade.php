@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pelayanan Remaja</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/bidangpelayanan/pelayananremaja" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Ketua</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="ketua" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
        <form method="post" action="/dashboard/bidangpelayanan/pelayananremaja" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Sekretaris</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sekretaris" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>
        <form method="post" action="/dashboard/bidangpelayanan/pelayananremaja" class="mb-5">
            @csrf
            <div class="mb-3">
              <label for="title" class="form-label">Bendahara</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="bendehara" required >
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