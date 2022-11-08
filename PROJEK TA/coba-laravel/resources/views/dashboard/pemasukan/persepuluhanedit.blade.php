@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Saldo Persepuluhan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/pemasukan/persepuluhan/{{ $saldo->id }}" class="mb-5">
          @method('put')
          @csrf
          <div class="mb-3">
            <label for="nominal" class="form-label">Nominal</label>
            <input type="text" class="form-control @error('nominal') is-invalid @enderror" id="nominal" name="nominal" required autofocus value="{{ old('nominal', $saldo->nominal) }}">
          </div>
            <div class="mb-3">
              <label for="nominal" class="form-label">Tanggal</label>
              <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('nominal', $saldo->tanggal) }}">
            </div>
            <button type="submit" class="btn btn-primary">Update Data</button>
          </form>
    </div>

@endsection