@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kritik dan Saran</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-12">
      {{-- <a href="#" class="btn btn-primary mb-3">Create new category</a> --}}
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Email</th>
              <th scope="col">Subjek</th>
              <th scope="col">Pesan</th>
              <th scope="col">Hapus</th>

            </tr>
          </thead>
          <tbody>
              @foreach ($pesan as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->subjek }}</td>
                <td>{{ $data->pesan }}</td>

                <td>
                    <a href="/pesan/destroy/{{ $data->id }}" class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus kritik dan saran ini?')"><span data-feather="x-circle"></span></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection
