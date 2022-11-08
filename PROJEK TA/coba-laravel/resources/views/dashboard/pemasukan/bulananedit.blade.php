@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Pemasukan Bulanan </h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/pemasukan/bulanan/{{ $saldo->id }}" class="mb-5">
          @method('put')
          @csrf
            <div class="mb-3">
              <label for="nominal" class="form-label">Bulan</label>
              <input type="text" class="form-control @error('bulan') is-invalid @enderror" id="bulan" name="bulan" required autofocus value="{{ old('nominal', $saldo->bulan) }}">
            </div>

            <div class="mb-3">
              <label for="nominal" class="form-label">Nominal</label>
              <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" required autofocus value="{{ old('nominal', $saldo->nominal) }}">
            </div>
       
         
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>

@endsection