@extends('dashboard.layouts.main')

@section('container')
<div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Form Edit Data Kontak</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="{{ url('dashboard/kontak/' . $kontak->id) }}" class="mb-5">
            @csrf
            <input type="hidden" name="_method" value="patch">
            <div class="mb-3">
              <label for="title" class="form-label">Email</label>
              <input type="text" class="form-control"  name="email" value="{{ $kontak->email }}" >
            <div class="mb-3">
              <label for="title" class="form-label">No Hp Gembala 1</label>
              <input type="text" class="form-control"  name="nophone1" value="{{ $kontak->nophone1}}" >
            
            <div class="mb-3">
              <label for="title" class="form-label">No Hp Gembala 2</label>
              <input type="text" class="form-control"  name="nophone2" value="{{ $kontak->nophone2 }}" >
            
            <div class="mb-3">
              <label for="title" class="form-label">No Hp Staf TU</label>
              <input type="text" class="form-control"  name="nophone3" value="{{ $kontak->nophone3 }}" >
            
            <div class="mb-3">
              <label for="title" class="form-label">Facebook</label>
              <input type="text" class="form-control"  name="facebook" value="{{ $kontak->facebook}}" >
            
            <button type="submit" class="btn btn-primary mt-3">Update Data</button>
          </form>
    </div>
@endsection