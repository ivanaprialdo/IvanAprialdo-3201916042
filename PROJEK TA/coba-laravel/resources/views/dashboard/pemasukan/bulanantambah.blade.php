@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Saldo Bulan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/bulanan/create" class="mb-5">
         
          @csrf
            <div class="mb-3">
              <label for="nominal" class="form-label">Nominal</label>
              <input type="text" class="form-control "  name="nominal" required autofocus>
            </div>
            <div class="mb-3">
              <label for="bulan" class="form-label">Bulan</label>
              <input type="text" class="form-control"  name="bulan" required autofocus>
            </div>
       
         
            <button type="submit" class="btn btn-primary">Tambah</button>
          </form>
    </div>

@endsection