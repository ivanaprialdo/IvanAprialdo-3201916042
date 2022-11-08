@extends('dashboard.layouts.main',[
  'title'=> 'Kelola Galery'
])

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kelola Galery</h1>
    </div>
    
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-7" role="alert">
        
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-12 width">
      {{-- <a href="#" class="btn btn-primary mb-3">Create new category</a> --}}
      <a href="/dashboard/galery/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Gambar</th>
              <th scope="col">Aksi</th>
              
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $datas)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datas->deskripsi }}</td>
                <td><img src="{{ asset('galery/'.$datas->gambar) }}" alt="" width="115" height="85"></td>
                <td>
                  <a href="/galery/edit/{{ $datas->id }}" class="badge bg-primary border-0" ><span data-feather="edit"></span></a>
                  <a href="/galery/destroy/{{ $datas->id }}" class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection
