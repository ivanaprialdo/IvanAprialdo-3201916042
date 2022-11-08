@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Pengurus Inti</h1>
    </div>

    <div class="col-lg-8">
      <form method="post" action="{{ url('/dashboard/badanpengurusjemaat/pengurusinti/'. $pengurusinti->id) }}" class="mb-5">
        @csrf
        @method("PUT")
            <div class="mb-3">
              <label for="title" class="form-label">Ketua</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="ketua" value="{{ $pengurusinti->ketua }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Wakil Ketua I</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wakilketuasatu" value="{{ $pengurusinti->wakilketuasatu }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Wakil Ketua II</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wakilketuadua" value="{{ $pengurusinti->wakilketuadua }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Sekretaris</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="sekretaris" value="{{ $pengurusinti->sekretaris }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Wakil Sekretaris</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wakilsekretaris" value="{{ $pengurusinti->wakilsekretaris }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Bendahara</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="bendehara" value="{{ $pengurusinti->bendehara }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Wakil Bendehara</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="wakilbendehara" value="{{ $pengurusinti->wakilbendehara }}" required >
              @error('title')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

        {{-- <form method="post" action="/dashboard/badanpengurusjemaat/pengurusinti" class="mb-5"> --}}
            <div class="mb-3">
              <label for="title" class="form-label">Staf Tata Usaha</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror"  name="staftatausaha" value="{{ $pengurusinti->staftatausaha }}" required >
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