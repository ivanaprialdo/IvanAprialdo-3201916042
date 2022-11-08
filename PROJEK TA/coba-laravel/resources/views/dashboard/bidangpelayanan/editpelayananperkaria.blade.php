@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Pelayanan Perkaria</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/bidangpelayanan/pelayananperkaria/'. $pelayananperkaria->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Ketua</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="ketua" value="{{ $pelayananperkaria->ketua }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">Sekretaris</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sekretaris" value="{{ $pelayananperkaria->sekretaris }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
              <label for="title" class="form-label">Bendahara</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="bendehara" value="{{ $pelayananperkaria->bendehara }}" required >
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
