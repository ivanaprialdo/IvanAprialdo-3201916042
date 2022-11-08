@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pendataan Jemaat</h1>
    </div>
    <a href="/dashboard/datajemaat/tambahdatajemaat" class="btn btn-primary mb-3">Pendataan Jemaat</a>
    @if(session()->has('success'))
      <div class="alert alert-success col-lg-7" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-12">
        <table class="table table-striped table-sm text-center">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Lengkap</th>
              <th scope="col">Alamat</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Pekerjaan</th>
              <th scope="col">Status Baptisan</th>
              <th scope="col">No Hp</th>
              <th scope="col">Aksi</th>

            </tr>
          </thead>
          <tbody>
              @foreach ($pesan as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->ttl}}</td>
                <td>{{ $data->gender}}</td>
                <td>{{ $data->pekerjaan }}</td>
                <td>{{ $data->statusbaptis }}</td>
                <td>{{ $data->nohp }}</td>

                <td>
                  <a href="/datajemaat/edit/{{ $data->id }}" class="badge bg-primary"><span data-feather="edit"> </span></a>
                  <a href="/datajemaat/destroy/{{ $data->id }}" class="badge bg-danger border-0" onclick="return confirm('Apakah anda yakin ingin menghapus data jemaat ini?')"><span data-feather="x-circle"></span></a>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
        {{ $pesan->links() }}
      </div>
@endsection
