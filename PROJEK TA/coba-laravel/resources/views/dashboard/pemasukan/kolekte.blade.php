@extends('dashboard.layouts.main')

@section('container')
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap 
                align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Kolekte Minggu</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-7" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-7">
      <a href="/keuangan" class="btn btn-success mb-3"><span data-feather="arrow-left"> 
      </span>Kembali</a>
        <a href="/kolekte/tambah" class="btn btn-primary mb-3">Tambah Data Pemasukan</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Nominal</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($kolekte as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td><strong>{{ $data->tanggal}}</strong></td>
                <td>Rp. {{ $data->nominal }}</td>
                <td>
                    <a href="/kolekte/edit/{{ $data->id }}" class="badge bg-warning"><span data-feather="edit"> </span></a>
                    <form action="/dashboard/categories/{{ $data->slug }}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <a href="/kolekte/hapus/{{ $data->id }}" class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span></a>
                    </form>
                </td>
              </tr>
              @endforeach
          </tbody>
        </table>
      </div>


@endsection
