@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kontak</h1>
    </div>
    
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-7" role="alert">
        
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-12">
      {{-- <a href="#" class="btn btn-primary mb-3">Create new category</a> --}}
      <a href="/kontak/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Email</th>
              <th scope="col">No Hp 1</th>
              <th scope="col">No Hp 2</th>
              <th scope="col">No Hp 3</th>
              <th scope="col">Facebook</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
              @foreach ($data as $datas)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $datas->email }}</td>
                <td>{{ $datas->nophone1 }}</td>
                <td>{{ $datas->nophone2 }}</td>
                <td>{{ $datas->nophone3 }}</td>
                <td>{{ $datas->facebook}}</td>
                <td>
                  

                    <a href="/kontak/edit/{{ $datas->id }}" class="badge bg-primary border-0" ><span data-feather="edit"></span></a>
                    <a href="/kontak/destroy/{{ $datas->id }}" class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection
